<?php

namespace Acacha\Socialite;

/**
 * Class AdminLTE.
 */
class AcachaSocialite
{

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
     * SocialAuth controller copy path.
     *
     * @return array
     */
    public function socialAuthController()
    {
        return [
            ACACHASOCIALITE_PATH.'/src/stubs/SocialAuthController.stub' => app_path('Http/Controllers/HomeController.php'),
        ];
    }

    /**
     * Auth controller copy path.
     *
     * @return array
     */
    public function migrations()
    {
        return [
            ACACHASOCIALITE_PATH.'/src/database/migrations' => base_path('database/migrations'),
        ];
    }

}
