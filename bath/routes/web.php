<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\User\MypageController;
use App\Http\Controllers\User\ItemController;
use App\Http\Controllers\User\CartController;
use App\Models\User;

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

Route::middleware('auth:users')->group(function () {
    Route::get('/item', [ItemController::class, 'item'])->name('item');//施設一覧ページ
    Route::get('show/{item}', [ItemController::class, 'show'])->name('item.show');//各施設登録ぺージ
});

Route::prefix('cart')->middleware('auth:users')->group(function(){
    Route::get('/mycart', [CartController::class, 'myCart'])->name('cart.mycart');//マイカート
    Route::post('add', [CartController::class, 'add'])->name('cart.add');//施設入会登録
    Route::post('delete/{item}', [CartController::class, 'delete'])->name('cart.delete');//カートから削除
});

require __DIR__.'/auth.php';

// Route::get('/search', [SearchController::class, 'search'])->name('search');//検索結果

//topページ
Route::get('/', [TopController::class, 'top'])->name('top');
//マイページ
Route::get('/user/{id}/index', [MypageController::class, 'index'])->name('index');
