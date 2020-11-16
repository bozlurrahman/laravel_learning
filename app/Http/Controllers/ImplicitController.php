<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\MyClass;

class ImplicitController extends Controller
{
    private $myclass;

    public function __construct(MyClass $myclass) {
        $this->myclass = $myclass;
    }
    public function index() {
        dd($this->myclass);
    }

    // /**
    //  * Responds to requests to GET /test
    //  */
    // public function getIndex() {
    //     echo 'index method';
    // }

    // /**
    //  * Responds to requests to GET /test/show/1
    //  */
    // public function getShow($id) {
    //     echo 'show method';
    // }

    // *
    //  * Responds to requests to GET /test/admin-profile

    // public function getAdminProfile() {
    //     echo 'admin profile method';
    // }

    // /**
    //  * Responds to requests to POST /test/profile
    //  */
    // public function postProfile() {
    //     echo 'profile method';
    // }
}
