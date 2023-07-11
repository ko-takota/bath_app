<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeUnit\FunctionUnit;

class LoginController extends Controller
{
    //ログインページの表示
    public function index()
  {
    return view('admin.login.index');
  }

  //ログイン処理
    public function login(Request $request)
   {
       $credentials = $request->only(['email', 'password']);

       //ユーザー情報が見つかったらログイン
       if (Auth::guard('admins')->attempt($credentials)) {
       //ログイン後に表示するページにリダイレクト
       return redirect()->route('admin.top')->with([
           'login_msg' => 'ログインしました。',
       ]);
       }

       //ログインできなかったときに元のページに戻る
       return back()->withErrors([
       'login' => ['ログインに失敗しました'],
       ]);
   }
    //ログアウト処理
    public function logout(Request $request)
   {
     Auth::guard('admins')->logout();
     $request->session()->regenerateToken();

     //ログインページにリダイレクト
     return redirect()->route('admin.login.index')->with([
       'logout_msg' => 'ログアウトしました',
     ]);
   }
}
