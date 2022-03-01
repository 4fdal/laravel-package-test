<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'KodeIngatan\Mudahsenyo\Controllers',
    'as' => 'mudahsenyo.',
], function () {
    Route::get('/', function () {
        return "Welcome KodeIngatan :) " ;
    });
});
