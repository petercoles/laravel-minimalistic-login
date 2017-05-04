<?php

namespace PeterColes\LaravelMinimalisticLogin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MinimalisticLoginServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'minimalistic-login');

        $this->publishes([ __DIR__.'/config.php' => config_path('login.php') ], 'login');

        if ($this->app->runningInConsole()) {
            $this->commands([ Commands\NewUser::class ]);
        }

        View::composer('minimalistic-login::layout', function($view) {
            $view
                ->with('hasLogo', config('login.logoPath'))
                ->with('logo', config('login.logoPath') ?: config('app.name'))
                ->with('altText', config('login.logoAltText') ?: config('app.name'))
            ;
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
