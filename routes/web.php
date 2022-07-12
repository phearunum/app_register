<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes Website
     */
    Route::get('/', 'HomeController@index')->name('website.page.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/dashboard/register', 'RegisterController@show')->name('register.show');
        Route::post('/dashboard/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/dashboard/login', 'LoginController@show')->name('login.show');
        Route::post('/dashboard/login', 'LoginController@login')->name('login.perform');

        Route::get('/signup', 'HomeController@signup')->name('signup.sigup');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/profile', 'HomeController@profile')->name('profile.profile');


    });
    /* Language */
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
});
