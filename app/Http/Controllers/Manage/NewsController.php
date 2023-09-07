<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BathNews;
use Carbon\Carbon;



class NewsController extends Controller
{
    public function __construct()
    {
        // $this->news = new BathNews();
    }


    public function index()
    {
        $news = BathNews::all();
        
        return view('manage.news.index', compact('news'));
    }

    public function create()
    {
        return view('manage.news.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => ['required', 'string', 'max:50'],
            'body' => ['required', 'string', 'max:500'],
        ]);

        BathNews::create(
            [
                'category' => $request->category,
                'title' => $request->title,
                'body' => $request->body,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]);
        return redirect()->route('manage.news.index')->with('success','お知らせを投稿しました。');
    }

    public function edit($id)
    {
        $news = BathNews::findOrFail($id);
        return view('manage.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => ['required', 'string', 'max:50'],
            'body' => ['required', 'string', 'max:500'],
        ]);

        $news = BathNews::findOrFail($id);
        $news->category = $request->category;
        $news->title = $request->title;
        $news->body = $request->body;

        $news->save();

        return redirect()->route('manage.news.index')
        ->with('message', '施設情報を更新しました。');
    }

    public function destroy($id)
    {
        BathNews::findOrFail($id)->delete();

        return redirect()->route('manage.news.index')->with('message','お知らせを１件削除しました。');
    }
}


