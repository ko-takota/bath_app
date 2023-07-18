<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\AreaCategory;



class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function item()
    {
        //都道府県カテゴリー
        $categories = AreaCategory::with('prefcture')->get();
        $baths = Bath::all();

        return view('user.item', compact('baths', 'categories'));
    }

    public function show($id)
    {
        //選択された施設詳細
        $bath = Bath::findOrFail($id);

        return view('user.show', compact('bath'));
    }
}
