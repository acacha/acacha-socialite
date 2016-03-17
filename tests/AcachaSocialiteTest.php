<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class AcachaSocialiteTest.
 */
class AcachaSocialiteTest extends TestCase
{
    use DatabaseMigrations;

    protected $githubRedirectURL;

    public function setUp()
    {
        $this->githubRedirectURL = 'https://github.com/login/oauth/authorize';
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
}
