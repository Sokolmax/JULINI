<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

	public function index(){
		$manus = \App\Menu::all()->sortBy("name");
		return view('menu/menu',[
			'manus' => $manus,
		]);
	}

	public function show(){
		return view('menu/menuShow',[
			'menu' => \App\Menu(),
		]);
	}

	public function create(){
		return view('menu/menuAdmin');
    }

    public function store(){
    	$menu = new \App\Menu();
	    $menu->name = \request('menuName');
	    $menu->weight = \request('menuWeight');
	    $menu->cost = \request('menuCost');
	    $menu->save();
    	return redirect('/menu/create');
    }
}
