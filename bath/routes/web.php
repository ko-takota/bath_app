<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\User\MypageController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\User\ItemController;
use App\Http\Controllers\User\CartController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth:users')->group(function () {
    Route::get('/item', [ItemController::class, 'index'])->name('items.index');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth:users', 'verified'])->name('dashboard');

Route::middleware('auth:users')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //施設検索
    //Route::get('/bath_search', [BathSearchController::class, 'search'])->name('bath_search');
    //商品ページ
    Route::get('/item', [ItemController::class, 'item'])->name('item');
    //各施設
    Route::get('show/{item}', [ItemController::class, 'show'])->name('item.show');
});

Route::prefix('cart')->middleware('auth:users')->group(function(){
    Route::post('add', [CartController::class, 'add'])->name('cart.add');
});

require __DIR__.'/auth.php';

//topページ
Route::get('/', [TopController::class, 'top'])
    ->name('top');

//マイページ
Route::get('/User/{id}/index', [MypageController::class, 'index'])
    ->name('user.index');

//検索
Route::get('/search', [PrefectureController::class, 'search'])
->name('search');

//施設ページ
Route::get('/admins/bath', [AdminController::class, 'admins'])
    ->name('admins.bath');


