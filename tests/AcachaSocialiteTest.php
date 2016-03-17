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

    protected $githubRedirectURL;

    public function setUp()
    {
        $this->githubRedirectURL = "https://github.com/login/oauth/authorize";
    }

    /**
     * Test TODO.
     *
     * @return void
     */
    public function testRoutesAreInstalled()
    {
        $this->visit('/auth/github')
            ->assertRedirectedTo($this->githubRedirectURL);
    }

//    /**
//     * Test Landing Page.
//     *
//     * @return void
//     */
//    public function testLandingPageWithUserLogged()
//    {
//        $user = factory(App\User::class)->create();
//
//        $this->actingAs($user)
//            ->visit('/')
//            ->see('Acacha')
//            ->see('adminlte-laravel')
//            ->see('Pratt')
//            ->see($user->name);
//    }

}
