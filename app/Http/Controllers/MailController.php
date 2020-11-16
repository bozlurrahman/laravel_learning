<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class MailController extends Controller {
    public function basic_email() {
        $data = array('name'=>"Md. Bozlur Rahman");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('bozlurrahman.cmt@gmail.com', 'Biplob')->subject
            ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Md. Bozlur Rahman');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    public function html_email() {
        $data = array('name'=>"Md. Bozlur Rahman");
        Mail::send('mail', $data, function($message) {
            $message->to('bozlurrahman.cmt@gmail.com', 'Biplob')->subject
            ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Md. Bozlur Rahman');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Md. Bozlur Rahman");
        Mail::send('mail', $data, function($message) {
            $message->to('bozlurrahman.cmt@gmail.com', 'Biplob')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('D:\xampp\htdocs\laravel\blog\public\favicon.ico');
            $message->from('xyz@gmail.com','Md. Bozlur Rahman');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
