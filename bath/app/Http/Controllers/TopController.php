<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function top()
    {
        // ユーザーがログイン済み
        if (Auth::check()) {
            // 認証しているユーザーを取得
            $user = Auth::user();
            // 認証しているユーザーIDを取得
            $user_id = $user->id;
        } else {
            $user_id = null;
        }

        $text = 'Your Dynamic Text';
        return view('user.top', compact('user_id', 'text'));
    }

    public function second()
    {
        // ユーザーがログイン済み
        if (Auth::check()) {
            // 認証しているユーザーを取得
            $user = Auth::user();
            // 認証しているユーザーIDを取得
            $user_id = $user->id;
        } else {
            $user_id = null;
        }
        return view('user.top2', compact('user_id'));
    }
}
