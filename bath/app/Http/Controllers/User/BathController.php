<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AreaCategory;
use Laravel\Ui\Presets\React;

class BathController extends Controller
{
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

        // $pagenate = Bath::select('id', 'name','image', 'address')->paginate(10);//10施設表示
        $baths = $baths->get();

        if (!Auth::id() === null) {
            $user = User::findOrfail(Auth::id());//マイページに戻るため

            return view('user.search', compact('baths', 'categories', 'user'));
        } else {
            return view('user.search', compact('baths', 'categories'));
        }

    }


    public function show($id)
    {
        $bath = Bath::findOrFail($id);//ユーザーが選択された施設詳細
        $plans = $bath->plans;

        return view('user.show', compact('bath', 'plans'));
    }
}
