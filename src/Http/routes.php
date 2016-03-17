<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
});
