<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
    	Mail::send(['text'=>'mail'],['name','Web dev blog'], function($message){
    		$message->to('quest380501042303@gmail.com','To web dev blog')->subject('Test email');
    		$message->from('quest380501042303@gmail.com','Web dev blog');
    	});
    }
}
