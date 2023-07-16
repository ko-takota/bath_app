<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bath;
use App\Models\AreaCategory;

class PrefectureController extends Controller
{
    public function search(Request $request)
    {
        $categories = AreaCategory::with('prefcture')
        ->get();
        $baths = Bath::all();

        return view('user.item', compact('baths', 'categories'));
    }
}

