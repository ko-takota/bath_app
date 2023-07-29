<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class InformationController extends Controller
{

    public function __construct()
    {
        //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Auth::user();
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

        //if文で入力されたpasswordとpassword_confirmation比較するためにHash化
        if ($request->password === $request->password_confirmation) {
            // 新しいパスワードと確認用のパスワードが一致する場合の処理
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password); // 新しいパスワードをハッシュ化して保存
            $admin->save();

            return redirect()->route('admin.information.index')->with('message', '[オーナー情報を更新しました。]');
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
