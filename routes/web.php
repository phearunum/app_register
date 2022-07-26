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




        Route::get('/login', 'HomeController@login')->name('website.page.index');

        Route::get('/signup', 'HomeController@signup')->name('signup.sigup');
        Route::get('/password/forget', 'HomeController@forget')->name('forget.forget');
        Route::get('/password/confirm', 'HomeController@confirmed')->name('password.confirmed');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/profile', 'HomeController@profile')->name('profile.profile');
        Route::get('/dashboard', 'Dashborad@index')->name('home.index');
        Route::get('/dashboard/users', 'admin\UsersController@lists');
        Route::get('/dashboard/users/lists', 'admin\UsersController@getList')->name('users.lists');
        Route::get('/dashboard/users/add', 'admin\UsersController@create');
    });



    /* Language */
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
});
