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
        $carts = Cart::where('user_id', $user)->get();

        $userBath = Auth::user()->baths;
        $posts = UserPost::where('bath_id', $userBath->value('id'))->get();

        return view('user.post.index', compact('carts', 'posts', 'user'));
    }

    public function create(Request $request)
    {
        $user = Auth::id();
        $cartInBathId = $request->bathId;
        $cartInBathName = $request->bathName;

        return view('user.post.create', compact('cartInBathId', 'cartInBathName', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => ['required', 'string', 'max:250'],
        ]);

        UserPost::create(
            [
                'bath_id' => $request->bathId,
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
