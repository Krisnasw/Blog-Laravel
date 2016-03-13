<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
    // return 'hai love :)';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/',[
             'uses'=>'AdminController@getLogin',
             'as'=>'admin'
        ]);
        Route::post('login',[
             'uses'=>'AdminController@postLogin',
             'as'=>'admin.login'
        ]);
        Route::get('logout',[
             'uses'=>'AdminController@getLogout',
             'as'=>'admin.logout'
        ]);

        Route::group(['middleware'=>'auth'],function(){
            Route::get('dashboard',[
                 'uses'=>'AdminController@getDashboard',
                 'as'=>'admin.dashboard'
            ]);

            Route::resource('blog','BlogController');
            Route::resource('category','CategoryController');
            Route::resource('portfolio','PortfolioController');

        });


    });
});
