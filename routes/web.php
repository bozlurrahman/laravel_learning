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

Route::get('go_default_profile', function () {
    return redirect()->route('profile');
});

Route::get('go_spacific_profile/{user_name?}', function ($user_name = 'Custom Name') {
    return redirect()->route('profile', ['name' => $user_name ]);
    // http://localhost:8000/go_spacific_profile/karimoddi
});


Route::view('/lorem', 'lorem', ['name' => 'Taylor']);

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'TerminateController@index',
]);

Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;})->name('profile');

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

// assign middleware to all routes within a group
Route::middleware(['First', 'Second'])->group(function () {
    Route::get('/first_second_middleware', function () {
        // Uses first & second Middleware
        return 'My Route Contents';
    });

    Route::get('route_loaded_after_middleware', function () {
        // Uses first & second Middleware
        return '<br>Content will be load after middleware loaded';
    });
});


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



Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');


Route::get('/header',function() {
	// see the list of content-types: https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
   return response("Hello", 200)->header('Content-Type', 'application/json');
   // return response("Hello", 200)->header('Content-Type', 'text/plain');
});


Route::get('/cookie',function() {
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('laravel_cookie_name','Bozlur Rahman with header');
});

Route::get('json',function() {
   return response()->json(['name' => 'Bozlur', 'state' => 'Dhaka']);
});



Route::get('/test', function() {
   return view('test');
});

Route::get('/test2', function() {
   return view('test2');
});


// Attaching Headers To Responses
Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');

    // // multiple header example
    // return response($content)
    //             ->withHeaders([
    //                 'Content-Type' => $type,
    //                 'X-Header-One' => 'Header Value',
    //                 'X-Header-Two' => 'Header Value',
    //             ]);
});



