<?php

namespace App\Providers;

use App\Models\Module;
use App\Models\ServiceType;
use App\Models\UserModule;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \URL::forceScheme('https');

        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            // Current Lang
            $theme = request()->cookie('theme', 'default-theme');
            $view->with('theme', $theme);
            // $shipping_cost = settings('shipping_cost');
            // $view->with('shipping_cost', $shipping_cost);


            // $user_info = Auth::user();
            // $view->with('user_info', $user_info);
            // $categories = ServiceType::get();
            // $view->with('categorieshome', $categories);
            // $services_header = ServiceType::where('show',1)->cursor();
            // $view->with('servicesHeader', $services_header);

            // Current User Info
            $userInfo = (object) ['photo' => 'uploads/avatar.png'];
            if (Auth::check() && Auth::user()->role != 'user') {
                $ids = UserModule::where('user_id', Auth::user()->id)->pluck('module_id');
                $userNodules = Module::find($ids);
                $view->with('userNodules', $userNodules);
                $view->with('CurrentUserInfo', $userInfo);
                $special_modules = ['statistics','settings', 'pages', 'mails', 'contacts', 'rates', 'orders', 'members', 'banners',];
                $stop_modules = ['profile', 'subcategories', 'site-map'];
                $sub_modules = ['categories'];
                $view->with('special_modules', $special_modules);
                $view->with('stop_modules', $stop_modules);
                $view->with('sub_modules', $sub_modules);
            }
        });
    }
}
