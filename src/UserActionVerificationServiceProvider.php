<?php

namespace Niku\LaravelUserActionVerification;

use Illuminate\Support\ServiceProvider;

use Niku\LaravelUserActionVerification\Services\UserActionVerification;

class UserActionVerificationServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {            
        // Register migrations only if its laravel 5.3 or heigher
        $laravel = app();
		$version = $laravel::VERSION;
		$version = (float) $version;
		if($version >= 5.3){
			$this->loadMigrationsFrom(__DIR__.'/../database/migrations');
		}

        // Register translations
        $this->loadTranslationsFrom(__DIR__.'/../translations', 'niku-assets');

        // Register config
        $this->publishes([
            __DIR__.'/../config/niku-user-action-verification.php' => config_path('niku-user-action-verification.php'),
        ], 'niku-user-action-verification');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {        
        $this->app->singleton('LaravelVerifyUserAction', function ($app) {
            return new UserActionVerification;
        });   
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['LaravelVerifyUserAction'];
    }
}
