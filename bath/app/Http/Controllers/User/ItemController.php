<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bath;


class ItemController extends Controller
{
    public function item()
    {
        $baths = Bath::all();

        return view('user.item', compact('baths'));
    }
}
