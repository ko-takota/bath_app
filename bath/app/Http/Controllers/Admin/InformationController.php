<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use App\Models\Admin;
use App\Models\Bath;

class InformationController extends Controller
{

    public function __construct()
    {
        //管理者かどうかの確認
        $this->middleware('auth:admin');

        //別のアカウントにログインされないように
        $this->middleware(function($request, $next) {
            // dd($request->route()->parameter('information')); //文字列
            // dd(Auth::id()); //数字
            $id = $request->route()->parameter('information');//ログイン管理者が持つ施設ID
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Auth::user();
        // $baths = DB::table('baths')->where('admin_id', $admin->id)->get();
        // $baths = $admin->baths;

        //$admin = Admin::select('id', 'name', 'email')->get();
        return view('admin.information.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);

        return view('admin.information.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'password' => ['required', 'confirmed', 'regex:/^[A-Za-z0-9]+$/u', Rules\Password::defaults()->mixedCase()->numbers()],
        ]);

        //if文で入力されたpasswordとpassword_confirmation比較するためにHash化
        if ($request->password === $request->password_confirmation) {
            // 新しいパスワードと確認用のパスワードが一致する場合の処理
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password); // 新しいパスワードをハッシュ化して保存
            $admin->save();

            return redirect()->route('admin.information.index')
            ->with('message', '[オーナー情報を更新しました。]');

        } else if (empty($request->password_confirmation)) {
            return redirect()->back()->with('error', '※パスワード確認に値を入力してください。');

        } else {
            return redirect()->route('admin.information.edit', ['information' => $admin->id])->with('error', '※入力したパスワードが違っています');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
