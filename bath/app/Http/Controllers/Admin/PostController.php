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
        //管理者が持ってる施設のidを取得
        $adminBathIds = Auth::user()->baths->pluck('id');
        //管理者が選択した施設のID
        $adminSelectBath = DB::table('admin_bath_selected')->whereIn('bath_id', $adminBathIds)->get();
        // 投稿データ選択したIDと一致するbath_idを取得
        $posts =  Post::whereIn('bath_id', $adminSelectBath->pluck('bath_id'))->get();

        $bathId = $adminSelectBath->value('bath_id');
        return view('admin.post.index', compact('posts', 'bathId'));
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
