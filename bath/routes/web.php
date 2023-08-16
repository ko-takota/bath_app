<?php

use App\Http\Controllers\User\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\User\MypageController;
use App\Http\Controllers\User\BathController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\LikeController;
use App\Http\Controllers\User\InformationController;

//管理画面系ファイル呼び出し
//include __DIR__ . '/admin.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('show/{item}', [BathController::class, 'show'])->name('item.show');//各施設登録ぺージ

Route::middleware('auth:users')->group(function () {
    Route::get('/search', [BathController::class, 'search'])->name('search');//施設一覧ページ
    Route::post('/{id}/like', [LikeController::class, 'store'])->name('bath.like');//いいね
    Route::delete('{id}/unlike', [LikeController::class, 'destroy'])->name('bath.unlike');//いいね解除
    Route::get('/like', [LikeController::class, 'index'])->name('like.index');//いいね一覧表示
    Route::resource('information', InformationController::class);//ユーザー情報の一覧や変更
    Route::get('/tt', [TopController::class, 'second'])->name('second');
    Route::get('/user/{id}/index', [MypageController::class, 'index'])->name('index');//マイページ
});

Route::prefix('cart')->middleware('auth:users')->group(function(){
    Route::get('/mycart', [CartController::class, 'myCart'])->name('cart.mycart');//マイカート
    Route::post('add', [CartController::class, 'add'])->name('cart.add');//施設入会登録
    Route::post('delete/{item}', [CartController::class, 'delete'])->name('cart.delete');//カートから削除
    // プランが削除されたらカート情報のプランも削除
    Route::post('/delete-plan/{id}', [CartController::class, 'deletePlan'])->name('cart.delete.plan');
    Route::get('pay', [CartController::class, 'pay'])->name('cart.pay');//stripe決済
});


Route::prefix('post')->middleware('auth:users')->group(function () {
    Route::get('/index', [PostController::class, 'index'])->name('post.index');
    Route::get('show', [PostController::class, 'show'])->name('post.show');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
});

require __DIR__.'/auth.php';


Route::get('/', [TopController::class, 'top'])->name('top');//topページ
Route::get('/contact', [TopController::class, 'contact'])->name('contact');//お問い合わせ
//利用規約
Route::get('/terms', function () {
    return view('user.terms');
});
//プライバシーポリシー
Route::get('/privacypolicy', function () {
    return view('user.privacy');
});


