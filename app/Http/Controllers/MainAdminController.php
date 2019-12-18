<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainAdminController extends Controller
{
    public function index(){
		$clients = \App\Client::all()->sortBy("date");
		return view('mainAdmin',[
			'clients' => $clients,
		]);
	}
}
