<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {
   public function setCookie(Request $request) {
      $minutes = 1;
      $response = new Response('Hello World');
      $response->withCookie(cookie('laravel_cookie_name', 'Bozlur Rahman', $minutes));
      return $response;
   }
   public function getCookie(Request $request) {
      $value = $request->cookie('laravel_cookie_name');
      echo $value.'<br>';
      // echo $request->cookie('laravel_session').'<br>';
      // echo $request->cookie('XSRF-TOKEN').'<br>';
   }
}