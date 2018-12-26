<?php

use Illuminate\Http\Request;

$domainPrefix = (config('app.env', '') == 'production') ? '' : (config('app.sub_domain_prefix', '').'-');

$apiRoutes = function () {
    Route::namespace('V1')->prefix('v1')->group(function () {

        /* 회원 가입 */
        Route::post('/auth/register', 'RegistrationController@register');

        Route::middleware('auth:api')->group(function () {
            /* 세션 체크 */
            Route::get('/session', 'SessionController@check');
        });

    });
};

/* App */
Route::domain($domainPrefix . 'api.vote-now.io')->namespace('Api')->group($apiRoutes);
