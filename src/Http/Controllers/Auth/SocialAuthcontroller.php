<?php

namespace Acacha\Socialite\Http\Controllers\Auth;

use Acacha\Socialite\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class SocialAuthController.
 */
class SocialAuthController extends Controller
{
    use AppNamespaceDetectorTrait;

    /**
     * Redirect the user to the Provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from authentication service provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return Redirect::to('auth/$provider');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('home');
    }

    /**
     * Find or create user.
     *
     * @param $githubUser
     * @return mixed
     */
    private function findOrCreateUser($githubUser)
    {
        $user = $this->getAppNamespace().'User';
        if ($authUser = $user::where('github_id', $githubUser->id)->first()) {
            return $authUser;
        }

        return $user::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_id' => $githubUser->id,
            'avatar' => $githubUser->avatar,
        ]);
    }
}
