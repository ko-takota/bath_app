<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AreaCategory;
use Laravel\Ui\Presets\React;
use App\Models\Post;

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

        $baths = $baths->get();
        $counts = count($baths);
        if (Auth::id()) {
            $user = User::findOrfail(Auth::id());//マイページに戻るため

            return view('user.search', compact('baths', 'categories', 'user', 'counts'));
        } else {
            return view('user.search', compact('baths', 'categories', 'counts'));
        }
    }


    public function show($id)
    {
        $bath = Bath::findOrFail($id);//ユーザーが選択された施設詳細
        $plans = $bath->plans;
        
        $bathPost = Post::where('bath_id', $bath->id)->get();
        
        return view('user.show', compact('bath', 'plans', 'bathPost'));
    }
}
