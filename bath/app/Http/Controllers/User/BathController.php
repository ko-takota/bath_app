<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\AreaCategory;

class BathController extends Controller
{
    //温泉検索
    public function search(Request $request)
    {
        //都道府県カテゴリー
        $categories = AreaCategory::with('prefcture')->get();
        $baths = Bath::query();
        $category = $request->category;

        if ($category) {
            $baths = $baths->where('prefcture_category_id', '=', $category);
        }

        $keyword = $request->keyword;

        if ($keyword) {
            $baths = $baths->where(function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('information', 'like', '%' . $keyword . '%')
                    ->orWhere('address', 'like', '%' . $keyword . '%');
            });
        }

        $baths = $baths->get();

        return view('user.bath.search', compact('baths', 'categories'));
    }

    //温泉の詳細
    public function show($id)
    {
        $bath = Bath::findOrFail($id);//ユーザーが選択された施設詳細
        $plans = $bath->plans;

        return view('user.bath.show', compact('bath', 'plans'));
    }
}
