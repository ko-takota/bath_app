<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pay;


class MypageController extends Controller
{
    public function index(int $id)
    {
        // ユーザーがログイン済みなら
        if (Auth::check()) {
            // 認証しているユーザーを取得
            $user = Auth::user();
            // 認証しているユーザーIDを取得
            $user_id = $user->id;
        } else {
            $user_id = null;
        }
        return view('user.list.mypage', compact('user_id'));
    }

    //契約一覧
    public function contract()
    {
        $user = Auth::id();
        $pays = Pay::where('user_id', $user)->get();

        return view('user.contract', compact('pays', 'user'));
    }
}
