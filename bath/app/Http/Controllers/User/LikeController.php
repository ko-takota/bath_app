<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    // public function store(Request $request, $id)
    // {
    //     Auth::user()->like($id);
    //     return back();
    // }

    // public function destroy($id)
    // {
    //     Auth::user()->unlike($id);
    //     return back();
    // }
    public function store(Request $request, $id)
    {
        Auth::user()->like($id);
        return back();
    }

    public function destroy($id)
    {
        Auth::user()->unlike($id);
        return back();
    }
}
