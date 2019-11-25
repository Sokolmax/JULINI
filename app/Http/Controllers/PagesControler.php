<?php

namespace App\Http\Controllers;

class PagesControler extends Controller
{

	public function home(){
    	return view("home");
	}
	public function reserve(){
    	return view("reserve");
	}
	public function order(){
    	return view("order");
	}

}
