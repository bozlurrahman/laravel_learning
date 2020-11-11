<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::redirect('/here', '/foo');


Route::view('/lorem', 'lorem', ['name' => 'Taylor']);

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'TerminateController@index',
]);

Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

 Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
 ]);

Route::get('/usercontroller/path',[
     'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

//Route::get('/login/',[
//    // 'middleware' => 'First',
//    'uses' => 'LoginController@showProfile'
//]);
