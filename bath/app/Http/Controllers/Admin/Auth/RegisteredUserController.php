<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Throwable;
use Illuminate\Support\Facades\Log;
use App\Models\Bath;
use Illuminate\Support\Facades\DB;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //エラーがあった場合の処理
        try{
            DB::transaction(function () use($request) {
                $admin = Admin::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            //管理者が作成されたら、admin_idが紐付く施設を同時に作成
                Bath::create([
                    'admin_id' => $admin->id,
                    'bath_name' => '施設名を入力して下さい',
                    'information' => '',
                    'address' => '住所を入力して下さい',
                    'prefcture_category_id' => null
                ]);

                event(new Registered($admin));

                Auth::guard('admin')->login($admin);

            }, 2);
        }catch(Throwable $e){
            Log::error($e); // 保存場所：storage\logs\laravel.log
            throw $e;
        }

        return redirect(RouteServiceProvider::ADMIN_HOME);
    }
}
