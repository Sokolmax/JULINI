<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
	public function index(){
		return view('menu/menu');
	}

	public function create(){
		return view('menu/menuAdmin');
    }

    public function store(){
    	$menu = new \App\Menu();
	    $menu->name = \request('menuName');
	    $menu->weight = \request('menuWeight');
	    $menu->cost = \request('menuCost');
    	return redirect('/menu');
    }
}
