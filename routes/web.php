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


Route::resource('my','MyController');

    //Verb	Path	        Action	Route Name
    //GET	/my	            index	my.index
    //GET	/my/create	    create	my.create
    //POST	/my	            store	my.store
    //GET	/my/{my}	    show	my.show
    //GET	/my/{my}/edit	edit	my.edit
    //PUT/PATCH	/my/{my}	update	my.update
    //DELETE	/my/{my}	destroy	my.destroy


class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');


Route::get('/foo/bar','UriController@index');


Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array(
	'uses'=>'UserRegistration@postRegister'
));



