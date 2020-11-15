<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
    public function insertform() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        ////        make a table in db by following sql:
        //        CREATE TABLE `student` (
        //                `id` INT(11) NOT NULL AUTO_INCREMENT,
        //            `name` VARCHAR(255) NOT NULL,
        //            `password` VARCHAR(255) NOT NULL,
        //            PRIMARY KEY (`id`)
        //        )

        $name = $request->input('stud_name');
        DB::insert('insert into student (name, password) values(?,?)',[$name,'42535']);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
