<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\AreaCategory;
use App\Models\Plan;
use App\Models\Admin;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\DB;


class BathController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }

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
                $query->where('bath_name', 'like', '%' . $keyword . '%')
                    ->orWhere('information', 'like', '%' . $keyword . '%')
                    ->orWhere('address', 'like', '%' . $keyword . '%');
            });
        }

        $baths = $baths->get();

        return view('user.search', compact('baths', 'categories'));
    }

    public function show($id)
    {
        $bath = Bath::findOrFail($id);//ユーザーが選択された施設詳細
        $admin = $bath->admin;    //選択された施設の管理者を取得

        //選択された施設と管理者施設のidが一致するプランを取得
        $plans = Plan::where('bath_id', $admin->manage_bath_id)->get();

        return view('user.show', compact('bath', 'plans'));
    }
}
