<?php

namespace App\Providers;

use App\Channels;
use App\Http\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // SHARE for everyone
//        View::share('channels', Channels::orderBy('name')->get());

        // COMPOSER CALLBACK
//        View::composer(['posts.*', 'channels'], function (\Illuminate\View\View $view) {
//            $view->with('channels', Channels::orderBy('name')->get());
//        });

        // COMPOSER ISOLATE
        View::composer('partials.*', ChannelsComposer::class);
    }
}
