<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Repositories\AdminRepository\AdminInterface','App\Repositories\AdminRepository\AdminRepo'); 
        $this->app->bind('App\Repositories\UserRepository\UserInterface','App\Repositories\UserRepository\UserRepo'); 
        $this->app->bind('App\Repositories\LoanRepository\LoanInterface','App\Repositories\LoanRepository\LoanRepo');
        $this->app->bind('App\Repositories\PaymentRepository\PaymentInterface','App\Repositories\PaymentRepository\PaymentRepo'); 
    }
}
