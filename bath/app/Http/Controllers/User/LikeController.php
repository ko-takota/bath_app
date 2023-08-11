<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bath;


class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function store(Request $request, $id)
    {
        Auth::user()->like($id);
        return back();
    }

    public function destroy($id)
    {
        Auth::user()->unlike($id);
        return back();
    }

    //いいね一覧表示画面
    public function index()
    {
        $user = User::findOrfail(Auth::id());
        $likes = $user->likes;//ログインユーザーがお気に入りした温泉
        // Like::where('user_id', Auth::user());

        return view('user.list.like', compact('likes', 'user'));
    }

}
