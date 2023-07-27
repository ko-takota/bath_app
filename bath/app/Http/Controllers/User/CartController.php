<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Bath;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

use function PHPUnit\Framework\returnSelf;

class CartController extends Controller
{
    public function myCart()
    {   //loginしてるユーザー情報の取得
        $user = User::findOrfail(Auth::id());
        $baths = $user->baths;
        $totalPrice = 0;

        foreach ($baths as $bath) {
            $totalPrice = $bath->price;
        }
        //dd($baths, $totalPrice);

        return view('user.cart.mycart', compact('baths','totalPrice'));

    }

    public function add(Request $request)
    {
        $cart = Cart::where('bath_id', $request->bath_id)
            ->where('user_id', Auth::id())
            ->where('plan_id', $request->plan_id)
            ->first();

        if($cart) {
            $cart->plan_id = $request->plan_id; // ユーザーが選択したプランIDを保存
            $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'bath_id' => $request->bath_id,
                'plan_id' => $request->plan_id,
            ]);
        }

        return redirect()->route('user.cart.mycart');
    }

    public function delete($id)
    {
        Cart::where('bath_id', $id)->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.mycart');
    }
}
