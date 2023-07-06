<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bath;

class PrefectureController extends Controller
{
    // public function search(Request $request)
    // {
    //     //検索フォームに入力された値を取得
    //     $prefecture = $request->input('prefecture');
    //     $keyword = $request->input('keyword');

    //     $query = Bath::query();
    //     //テーブル結合
    //     $query->join('prefectures', function ($query) use ($request) {
    //         $query->on('baths.prefecture_id', '=', 'prefectures.id');
    //         });

    //     if(!empty($prefecture)) {
    //         $query->where('prefecture', 'LIKE', $prefecture);
    //     }

    //     if(!empty($keyword)) {
    //         $query->where('name', 'LIKE', "%{$keyword}%");
    //     }

    //     $items = $query->get();

    //     $prefecture_list = Prefecture::all();

    //     return view('search', compact('items', 'keyword', 'prefecture','prefectures_list'));
    // }
}
