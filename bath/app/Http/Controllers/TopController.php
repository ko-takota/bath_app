<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Admin;


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

        //管理者お知らせ
        $posts = DB::table('posts')
        ->join('baths', 'posts.bath_id', '=', 'baths.id')
        ->join('admins', 'baths.admin_id', '=', 'admins.id')
        ->select('posts.*', 'admins.name as admin_name')
        ->get();

        //ユーザー口コミ
        $userPosts = DB::table('user_posts')
        ->join('baths', 'user_posts.bath_id', '=', 'baths.id')->get();
        

        return view('user.top', compact('user_id', 'posts', 'userPosts'));
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
