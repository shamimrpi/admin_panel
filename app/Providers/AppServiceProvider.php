<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Permission;
use Facade\FlareClient\View;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // view()->share('permissions', Permission::all())->get();
        // $permissions = Permission::where('user_id', Auth::id())->get();
        // view()->share('permissions', $permissions);
        // view()->share('content', CompanyProfile::first());
        // view()->share('category', Category::OrderBy('id','asc')->take(9)->get());
    }
}
