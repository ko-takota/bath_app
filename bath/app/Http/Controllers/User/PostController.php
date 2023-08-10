<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\UserPost;
use Carbon\Carbon;



class PostController extends Controller
{
    public function index()
    {
        $user = Auth::id();

        $posts = UserPost::where('user_id', $user)->get();//投稿一覧
        // dd($posts);

        return view('user.post.index', compact('posts', 'user'));
    }


    public function show()
    {
        $user = Auth::id();
        $carts = Cart::where('user_id', $user)->get();//ユーザーがカートに入れたカート情報


        return view('user.post.show', compact('carts'));
    }

    public function create(Request $request)
    {
        $user = Auth::id();
        $cartInBathId = $request->bathId;
        $cartInBathName = $request->bathName;
        $cartInPlanId = $request->planId;

        return view('user.post.create', compact('cartInBathId', 'cartInBathName', 'cartInPlanId', 'user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'body' => ['required', 'string', 'max:250'],
        ]);

        //もしすでに投稿していたら、投稿できないように設定。
        $user_id = Auth::id();
        $bath_id = $request->bathId;
        $cart_id = $request->planId;

        // 既に同じ組み合わせが存在するかチェック
        $existingPost = UserPost::where('user_id', $user_id)
                                ->where('bath_id', $bath_id)
                                ->where('plan_id', $cart_id)
                                ->first();

        if ($existingPost) {
            return redirect()->back()->with('error', '既に投稿されているため、新たな投稿はできません。');
        }

        UserPost::create(
            [
                'bath_id' => $bath_id,
                'user_id' => Auth::id(),
                'plan_id' => $cart_id,
                'body' => $request->body,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]);

        return redirect()->route('user.post.index',['id' => Auth::id()]);

    }

    public function destroy($id)
    {
        UserPost::findOrFail($id)->delete();

        return redirect()->route('user.post.index');
    }
}
