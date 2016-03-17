<?php

namespace Acacha\Socialite\Providers;

use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Support\ServiceProvider;
use Acacha\Socialite\Facades\AcachaSocialite;

/**
 * Class AcachaSocialiteServiceProvider.
 */
class AcachaSocialiteServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     */
    public function register()
    {
        if (!defined('ACACHASOCIALITE_PATH')) {
            define('ACACHASOCIALITE_PATH', realpath(__DIR__.'/../../'));
        }

//        $this->configureOAuthIdentitiesTable();

        $this->app->bind('AcachaSocialite', function () {
            return new \Acacha\Socialite\AcachaSocialite();
        });
    }

    /**
     * Configure table name of eloquent model OAuthIdentity
     */
    protected function configureOAuthIdentitiesTable()
    {
//        OAuthIdentity::configureTable($this->app['config']['eloquent-oauth.table']);
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //TODO: doctrine/dbal install for updating fields with migrations

        $this->publishTests();

        $this->app->booted(function () {
            $this->defineRoutes();
        });

    }

    /**
     * Publish package tests to Laravel project.
     */
    private function publishTests()
    {
        $this->publishes(AcachaSocialite::tests(), 'acachasocialite');
    }

    /**
     * Publish SocialAuth Controller.
     */
    private function publishSocialAuthController()
    {
        $this->publishes(AdminLTE::socialAuthController(), 'adminlte');
    }

    /**
     * Define the AcachaSocialite routes.
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => 'Acacha\Socialite\Http\Controllers'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }
}
