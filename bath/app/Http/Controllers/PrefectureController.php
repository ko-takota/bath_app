<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = Prefecture::query();
        if (!empty($search)) {
            $query->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%");
        }

        $prefectures = $query->get()->sortByDesc('created_at');

        return view('user.parts.prefecture', ['prefectures' => $prefectures]);
    }
}

