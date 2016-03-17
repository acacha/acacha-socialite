#Acacha Socialite
A Laravel 5 package to implement social Login Authentication with Github, Facebook, Google and Twitter. Based on [Laravel Socialite](https://github.com/laravel/socialite)

See demo here (TODO):

 http://demo.adminlte.acacha.org/

TODO
[![Total Downloads](https://poser.pugx.org/acacha/admin-lte-template-laravel/downloads.png)](https://packagist.org/packages/acacha/admin-lte-template-laravel)
[![Latest Stable Version](https://poser.pugx.org/acacha/admin-lte-template-laravel/v/stable.png)](https://packagist.org/packages/acacha/admin-lte-template-laravel)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/acacha/adminlte-socialite/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/acacha/adminlte-socialite/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/acacha/adminlte-socialite/badges/build.png?b=master)](https://scrutinizer-ci.com/g/acacha/adminlte-socialite/build-status/master)

# Installation and use

Using [acacha/llum](https://github.com/acacha/llum):

```bash
composer global require "acacha/llum=~0.1"
laravel new laravelapp
cd laravelapp
llum package AcachaSocialite
```

If you wish you can use [llum boot command](https://github.com/acacha/llum#boot) to start the app:

```bash
llum boot
``` 

## Manual installation

Follow the typical Laravel package installation steps:

<pre>
 laravel new laravelAppWithAcachaSocialite
 cd laravelAppWithAcachaSocialite
</pre>

Add acacha/socialite Laravel package with:

<pre>
 composer require "acacha/socialite:~0.1"
</pre> 
 
To register the Service Provider edit **config/app.php** file and add to providers array:

```php
Acacha\Socialite\Providers\AcachaSocialiteServiceProvider::class,
```

To Register Alias edit **config/app.php** file and add to alias array:

```php
TODO???
```

Publish files with:

```php
php artisan vendor:publish --tag=acachasocialite --force
``` 
 
Use force to overwrite Laravel Scaffolding packages. That's all! Open the Laravel project in your browser or homestead machine and enjoy!

# Requirements

This packages use::

* [Composer](https://getcomposer.org/)
* [Laravel](http://laravel.com/)
* [Acacha/llum](https://github.com/acacha/llum). Easy Laravel packages installation (and other tasks). Used to modify config/app.php file without using stubs (so you changes to this file would be respected)
* [Laravel Socialite](https://github.com/laravel/socialite). Laravel Socialite provides an expressive, fluent interface to OAuth authentication with Facebook, Twitter, Google, LinkedIn, GitHub and Bitbucket. It handles almost all of the boilerplate social authentication code you are dreading writing.

# Social Authentication providers

## Github

Go to https://github.com/settings/applications/new to obtain Twitter credentials for social login using Oauth. 

More info at: https://mattstauffer.co/blog/using-github-authentication-for-login-with-laravel-socialite

## Facebook

Go to https://developers.facebook.com/apps to obtain Facebook credentials for social login using Oauth.

## Google

Go to https://console.developers.google.com to obtain Google credentials for social login using Oauth.
 
Remember to enable Google + API 
 
## Twitter

Go to https://apps.twitter.com to obtain Twitter credentials for social login using Oauth. 

Email obtained with Twitter Oauth will have null value unless you request especial permissions using the following form:

 https://support.twitter.com/forms/platform
 
More info at: https://dev.twitter.com/rest/reference/get/account/verify_credentials 