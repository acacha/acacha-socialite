#!/bin/bash
if ! type "laravel" > /dev/null; then
    composer global require "laravel/installer"
fi
if ! type "llum" > /dev/null; then
    composer global require "acacha/llum:dev-master"
fi
rm -rf sandbox
~/.composer/vendor/bin/laravel new sandbox
cd sandbox
llum package AcachaSocialiteDev
#php artisan make:auth
#touch database/database.sqlite


