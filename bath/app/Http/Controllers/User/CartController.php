<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $itemInCart = Cart::where('bath_id', $request->bath_id)
        ->where('user_id', Auth::id())->first();

        if($itemInCart) {
            $itemInCart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'bath_id' => $request->bath_id
            ]);

        }
        dd('test');
    }
}
