<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (request()->is('admin/*')) {
            config(['session.cookie' => config('session.cookie_admin')]);
        }
        //Paginator::useBootstrapFive();
            
        Password::defaults(function () {
            $rule = Password::min(8);
    
            return $this->app->isProduction()
                        ? $rule->mixedCase()->numbers()->uncompromised()
                        : $rule;
        });
    }
}
