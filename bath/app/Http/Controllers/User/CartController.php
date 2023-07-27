<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Cart;
use App\Models\Bath;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

use function PHPUnit\Framework\returnSelf;

class CartController extends Controller
{
    public function myCart()
    {   //ログインユーザー情報の取得
        $user = User::findOrfail(Auth::id());
        $bath = $user->baths->first();//ログインユーザーが選択した温泉

        $carts = Cart::where('user_id', Auth::id())->get();//ログインユーザーのカート情報

        return view('user.cart.mycart', compact('bath','carts'));

    }

    public function add(Request $request)
    {
        $cart = Cart::where('bath_id', $request->bath_id)//選択した施設とカートの施設IDの一致
            ->where('user_id', Auth::id())
            ->where('plan_id', $request->plan_id)
            ->first();

        if($cart) {
            $cart->plan_id = $request->plan_id; // ユーザーが選択したプランIDを保存
            $cart->save();
        } else {
            Cart::create([ //カートに無ければ追加
                'user_id' => Auth::id(),
                'bath_id' => $request->bath_id,
                'plan_id' => $request->plan_id,
            ]);
        }

        return redirect()->route('user.cart.mycart');
    }

    public function delete($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.mycart');
    }
}
