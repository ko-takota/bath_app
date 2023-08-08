<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Bath;
use App\Models\AdminBath;
use App\Models\PrefctureCategory;


class BathController extends Controller
{
    public function __construct()
    {
        //管理者かどうかの確認
        $this->middleware('auth:admin');

        //別のアカウントにログインされないように
        $this->middleware(function($request, $next) {

            $id = $request->route()->parameter('bath');//ログイン管理者が持つ施設ID
            if(!is_null($id)) {
                $bathAdminId = Bath::findOrFail($id)->admin_id;
                $bathId = (int)$bathAdminId;
                $adminId = Auth::id();
                if($bathId !== $adminId) { //同じで無ければ
                    abort(404); //404画面
                }
            }
            return $next($request);
        });
    }


    public function index()
    {
        $bathId = Auth::id();

        //管理者が持ってる施設のidを取得
        $adminBathIds = Auth::user()->baths->pluck('id');

        //管理者が選択した施設のID
        $adminSelectBath = DB::table('admin_bath_selected')->whereIn('bath_id', $adminBathIds)->get();
        $bath =  Bath::whereIn('id', $adminSelectBath->pluck('bath_id'))->get();

        return view('admin.bath.index', compact('bath', 'bathId'));
    }


    // 選択された温泉施設の情報
    public function show($id)
    {
        // dd($id->bath);
        $bath = Bath::find($id);

        return view('admin.bath.show', compact('bath'));
    }



    public function edit($id)
    {
        $categories = PrefctureCategory::select('id', 'name')->get();

        $baths = (Bath::findOrFail($id));

        return view('admin.bath.edit', compact('baths','categories'));
    }


    public function bathCreateForm()
    {
        $baths = Auth::user()->bath;

        $bath = Auth::id();
        $categories = PrefctureCategory::select('id', 'name')->get();
        return view('admin.create_bath', compact('categories', 'bath', 'baths'));
    }

    public function create(Request $request)
    {
        //ログイン後、温泉施設登録処理
        $bath = new Bath([
            'name' => $request->name,
            'information' => $request->information,
            'address' => $request->address,
            'admin_id' => Auth::id(),
            'prefcture_category_id' => $request->category,
        ]);
        $bath->save();

        //↑の温泉施設登録処理ができたら、中間テーブルにも保存処理
        if($bath){
            $adminBath = new AdminBath([
                'admin_id' => $bath->admin_id,
                'bath_id' => $bath->id,
            ]);
            $adminBath->save();
        }

        //view（admin.select）で使用
        // $bathId = AdminBath::where('admin_id', '=', Auth::id())->get()->pluck('bath_id');
        // $baths = Bath::whereIn('id', $bathId)->get();


        return redirect()->route('admin.create_bath');

    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'max:1000'],
            'address' => ['required', 'string', 'max:100'],
        ]);

        $image = $request->image;
        if(!is_null($image) && $image->isValid()){
            $imageName = Storage::putFile('public/baths', $image);
        }

        $bath = Bath::findOrFail($id);
        $bath->name = $request->name;
        $bath->information = $request->information;
        $bath->address = $request->address;
        $bath->prefcture_category_id = $request->category;

        if(!is_null($image) && $image->isValid()){
            $bath->image = $imageName;
        }

        $bath->save();

        return redirect()->route('admin.bath.index')
        ->with('message', '施設情報を更新しました。');
    }
}
