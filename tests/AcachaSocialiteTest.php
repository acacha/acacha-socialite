<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AcachaSocialiteTest
 */
class AcachaSocialiteTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test Landing Page.
     *
     * @return void
     */
    public function testLandingPage()
    {
        $this->visit('/')
             ->see('Acacha')
             ->see('adminlte-laravel')
             ->see('Pratt');
    }

    /**
     * Test Landing Page.
     *
     * @return void
     */
    public function testLandingPageWithUserLogged()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->see('Acacha')
            ->see('adminlte-laravel')
            ->see('Pratt')
            ->see($user->name);
    }

}
