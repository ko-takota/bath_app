<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    private $post;

    public function __construct()
    {
        $this->post = new Post();
    }


    public function index()
    {
        // ユーザーIDと一致する投稿データを取得
        $posts =  Post::where('bath_id', Auth::id())->get();
        return view('admin.post.index', compact('posts',));
    }

    public function create()
    {
        $admin = Auth::user();
        return view('admin.post.create', compact('admin'));
    }


    public function store(Request $request)
    {

    $request->validate([
        'name' => ['required', 'string', 'max:30'],
        'body' => ['required', 'string', 'max:250'],
    ]);
    $admin = Auth::user();
    $adminBath = $admin->baths;


    Post::create(
        [
            'bath_id' => $adminBath->value('id'),
            'title' => $request->name,
            'body' => $request->body,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
    return redirect()->route('admin.post.index',['id' => $admin->id]);
    }
}
