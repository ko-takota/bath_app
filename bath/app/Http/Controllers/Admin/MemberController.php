<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class MemberController extends Controller
{
    public function index()
    {
        $carts = Cart::get();
        $firstCart = $carts->first();

        dd($firstCart);


        return view('admin.member', compact('carts'));
    }
}
