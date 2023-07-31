<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\User;

class MemberController extends Controller
{
    public function __construct()
    {
        //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //管理者自身の情報を取得
        $admin = Auth::guard('admin')->user();

        if($admin)
        {
            // 管理者が管理している施設のIDを取得
            $adminBathId = $admin->manage_bath_id;
            //カートテーブルから自分の施設idと同じユーザーのidを取得
            $carts = Cart::where('bath_id', '=', $adminBathId)->get()->pluck('user_id')->toArray();
            //ユーザーのidがカートに入った$cartsに含まれる場合に取得
            $users = User::whereIn('id', $carts)->get();
        }

        return view('admin.member', compact('users'));
    }
}
