<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request) {
      // Usage of path method
      $path = $request->path();
      echo 'Path Method: '.$path;
      echo '<br>';
     
      // Usage of is method
      $pattern = $request->is('foo/*');
      echo 'is Method: '.$pattern;
      echo '<br>';
      
      // Without Query String...
      $url = $request->url();
      echo 'URL method: '.$url;
      echo '<br>';

      // With Query String... : http://localhost:8000/foo/bar/?lorem=go&gogo=no
      $url = $request->fullUrl();
      echo 'URL method: '.$url;
      echo '<br>';

      $method = $request->method();

      if ($request->isMethod('get')) {
         echo 'geted';
      } else 
      echo 'not geted';

      echo '<br>';
      var_dump($request->all());

      $name = $request->input('lorem');
      var_dump($name);

      // // When working with forms that contain array inputs, use "dot" notation to access the arrays:
      // $name = $request->input('products.0.name');
      // $names = $request->input('products.*.name');

      // // retrive json input
      // $name = $request->input('user.name');
   }
}
