<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;


class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function item()
    {
        $baths = Bath::all();

        return view('user.item', compact('baths'));
    }

    public function show($id)
    {
        $bath = Bath::findOrFail($id);

        return view('user.show', compact('bath'));
    }
}
