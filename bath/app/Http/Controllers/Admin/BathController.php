<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Bath;
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

    // 選択された温泉施設の情報
    public function show($id)
    {
        $bath = Bath::find($id);

        return view('admin.bath.show', compact('bath'));
    }



    public function edit($id)
    {
        $categories = PrefctureCategory::select('id', 'name')->get();

        $baths = (Bath::findOrFail($id));

        return view('admin.bath.edit', compact('baths','categories'));
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
