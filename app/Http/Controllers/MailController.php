<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index (){
    $data =[
        'subject' => 'this is a massage for test',
        'body'=>'THis is my email verification body'

    ];


try {


Mail::to('ashikurrahaman9988@gmail.com')->send(new MailNotify($data));
return response()->json(['Great check your mail box']);

} catch (\Throwable $th) {
    return $th;

}


    }
}
