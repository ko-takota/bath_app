<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminBath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\User;

class MemberController extends Controller
{
    public function __construct()
    {
        //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        //管理者自身の情報を取得
        $admin = Auth::user();
        // 管理者が選択した施設のIDを取得
        $selectBathId = DB::table('admin_bath_selected')->where('admin_id', $admin->id)->value('bath_id');

        if($admin)
        {
            //カートテーブルから自分の施設idと同じユーザーのidを取得
            $carts = Cart::where('bath_id', '=', $selectBathId)->get()->pluck('user_id')->toArray();
            //ユーザーのidがカートに入った$cartsに含まれる場合に取得
            $users = User::whereIn('id', $carts)->get();
        }


        $adminBathIds = Auth::user()->baths->pluck('id');
        //管理者が選択した施設のID
        $selectBath = DB::table('admin_bath_selected')->whereIn('bath_id', $adminBathIds)->get();
        $bathId = $selectBath->value('bath_id');

        return view('admin.member', compact('users', 'bathId'));
    }
}
