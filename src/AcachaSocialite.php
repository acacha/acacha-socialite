<?php

namespace Acacha\Socialite;

/**
 * Class AdminLTE.
 */
class AcachaSocialite
{
    /**
     * Home controller copy path.
     *
     * @return array
     */
    public function homeController()
    {
        return [
            ACACHASOCIALITE_PATH.'/src/stubs/HomeController.stub' => app_path('Http/Controllers/HomeController.php'),
        ];
    }

    /**
     * Auth controller copy path.
     *
     * @return array
     */
    public function authController()
    {
        return [
            ACACHASOCIALITE_PATH.'/src/stubs/AuthController.stub' => app_path('Http/Controllers/Auth/AuthController.php'),
        ];
    }

    /**
     * Public assets copy path.
     *
     * @return array
     */
    public function publicAssets()
    {
        return [
            ACACHASOCIALITE_PATH.'/public/img' => public_path('img'),
            ACACHASOCIALITE_PATH.'/public/css' => public_path('css'),
            ACACHASOCIALITE_PATH.'/public/js' => public_path('js'),
            ACACHASOCIALITE_PATH.'/public/plugins' => public_path('plugins'),
            ACACHASOCIALITE_PATH.'/public/fonts' => public_path('fonts'),
        ];
    }

    /**
     * Views copy path.
     *
     * @return array
     */
    public function views()
    {
        return [
            ACACHASOCIALITE_PATH.'/resources/views/auth' => base_path('resources/views/auth'),
            ACACHASOCIALITE_PATH.'/resources/views/auth/emails' => base_path('resources/views/auth/emails'),
            ACACHASOCIALITE_PATH.'/resources/views/errors' => base_path('resources/views/errors'),
            ACACHASOCIALITE_PATH.'/resources/views/layouts' => base_path('resources/views/layouts'),
            ACACHASOCIALITE_PATH.'/resources/views/home.blade.php' => base_path('resources/views/home.blade.php'),
            ACACHASOCIALITE_PATH.'/resources/views/welcome.blade.php' => base_path('resources/views/welcome.blade.php'),
        ];
    }

    /**
     * Tests copy path.
     *
     * @return array
     */
    public function tests()
    {
        return [
            ACACHASOCIALITE_PATH.'/tests' => base_path('tests'),
            ACACHASOCIALITE_PATH.'/phpunit.xml' => base_path('phpunit.xml'),
        ];
    }

    /**
     * Resource assets copy path.
     *
     * @return array
     */
    public function resourceAssets()
    {
        return [
            ACACHASOCIALITE_PATH.'/resources/assets/less' => base_path('resources/assets/less'),
            ACACHASOCIALITE_PATH.'/gulpfile.js' => base_path('gulpfile.js'),
        ];
    }
}
