<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\BathController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BathSelectController;
use App\Http\Controllers\Admin\BathCreateController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('admin.welcome');
});

Route::middleware(['auth:admin'])->group(function () {
    // login後、施設作成画面と処理
    Route::get('/create-bath', [BathCreateController::class, 'bathCreateForm'])->name('show_create_bath');
    Route::post('/create-bath', [BathCreateController::class, 'create'])->name('create_bath');
});



//管理者情報表示(オーナー管理)
Route::resource('information', InformationController::class)->middleware('auth:admin');
//管理者のプラン詳細
Route::resource('plan', PlanController::class);

//管理者施設情報
Route::prefix('baths')->
middleware('auth:admin')->group(function () {
    Route::get('index', [BathController::class, 'index'])->name('bath.index');
    Route::get('edit/{bath}', [BathController::class, 'edit'])->name('bath.edit');
    Route::post('update/{bath}', [BathController::class, 'update'])->name('bath.update');
//管理者ログイン後の施設選択
    Route::get('/select', [BathSelectController::class, 'index'])->name('bath.select');
    Route::post('/save-selected', [BathSelectController::class, 'saveSelectedBath'])->name('bath.select.save');
});

//お知らせ
Route::prefix('post')->middleware('auth:admin')->group(function(){
    Route::get('index', [PostController::class, 'index'])->name('post.index');//投稿一覧
    Route::get('create', [PostController::class, 'create'])->name('post.create');
    Route::post('store', [PostController::class, 'store'])->name('post.store');
});

//ダッシュボード
Route::get('/dashboard', [DashboardController::class, 'dashboard'])
->middleware(['auth:admin', 'verified'])->name('dashboard');


//カートに入れたメンバー
Route::get('/member', [MemberController::class, 'index'])->name('member');


// Route::middleware('auth:admin')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



Route::middleware('guest')->group(function () {
//新規登録
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
//ログイン
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
//pw忘れ
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
//pwリセット
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});



Route::middleware('auth:admin')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
