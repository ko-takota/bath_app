<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $admin = Auth::user();
        //管理者が選択した施設のID
        $selectBathId = DB::table('admin_bath_selected')->where('admin_id', $admin->id)->value('bath_id');
        // 投稿データ選択したIDと一致するbath_idを取得

        $posts =  Post::where('bath_id', $selectBathId)->get();

        $bathId = $selectBathId;
        return view('admin.post.index', compact('posts', 'bathId'));
    }

    public function create()
    {
        $bathId = DB::table('admin_bath_selected')->where('admin_id', Auth::id())->value('bath_id');

        $bathName = DB::table('baths')->where('id', $bathId)->value('name');


        return view('admin.post.create', compact('bathId', 'bathName'));
    }


    public function store(Request $request)
    {
    $request->validate([
        'body' => ['required', 'string', 'max:250'],
    ]);

    $admin = Auth::user();

    Post::create(
        [
            'bath_id' => $request->id,
            'title' => $request->name,
            'body' => $request->body,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
    return redirect()->route('admin.post.index',['id' => $admin->id]);
    }
}
