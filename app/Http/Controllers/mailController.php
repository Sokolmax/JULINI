<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
    	Mail::send(['text'=>'mail'],['name','Max mail'], function($message){
    		$message->to('quest380501042303@gmail.com','To Max mail')->subject('Test email');
    		$message->from('quest380501042303@gmail.com','Max mail');
    	});
    }
}
