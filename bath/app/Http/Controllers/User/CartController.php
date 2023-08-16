<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CartController extends Controller
{
    public function myCart()
    {   //ログインユーザー情報の取得
        $user = User::findOrfail(Auth::id());
        $bath = $user->baths->first();//ログインユーザーが選択した温泉

        $carts = Cart::where('user_id', Auth::id())->get();//ログインユーザーのカート情報

        return view('user.cart.mycart', compact('bath', 'carts', 'user'));

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
            if ($request->filled('plan_id')) {

                Cart::create([ //カートに無ければ追加
                    'user_id' => Auth::id(),
                    'bath_id' => $request->bath_id,
                    'plan_id' => $request->plan_id,
                ]);
            } else {
                // プラン選択されてない場合の処理
                return redirect()->back()->with('message', 'プランを選択してください');
            }
        }

        return redirect()->route('user.cart.mycart');
    }

    // プランの論理削除後にカート情報も論理削除する処理
    public function deletePlan($id)
    {
        $plan = Cart::find($id);
        if ($plan) {
            $plan->delete(); // 関連するカート情報も自動的に削除される
        } else {
            // プランが見つからなかった場合の処理
        }

        return redirect()->route('user.cart.mycart');
    }

    public function delete($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.mycart');
    }

    public function pay()
    {
        //ユーザーのカート情報を取得
        $carts = Cart::where('user_id', Auth::id())->get();

        $items = [];
        foreach($carts as $cart){
            $item = [
                'name' => $cart->plan->name,
                'description' => $cart->plan->contents,
                'price' => $cart->plan->price,
                'currebcy' => 'jpy',
            ];
            array_push($items, $item);
        }

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [$items],
            'mode' => 'payment', //一回払い
            'success_url' => route('user.search'),
            'cancel_url' => route('user.cart.mycart'),
        ]);

        $publicKey = env('STRIPE_PUBLIC_KEY');

        return view('user.pay', compact('session', 'publicKey'));
    }
}
