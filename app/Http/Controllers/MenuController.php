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
    	$data = request()->validate([
            'menuName' => ['required','min:1'],
            'menuWeight' => ['required','min:1'],
            'menuCost' => ['required','min:1'],
        ],[
            'menuName.min' => 'The name of the dish cannot be less than 2 characters',
            'menuName.required' => 'The name of the dish cannot be less than 2 characters',

            'menuWeight.min' => 'The weight of the dish cannot be less than 2 characters',
            'menuWeight.required' => 'The weight of the dish cannot be less than 2 characters',

            'menuCost.min' => 'The cost of the dish cannot be less than 2 characters',
            'menuCost.required' => 'The cost of the dish cannot be less than 2 characters',
        ]);
    	$menu = new \App\Menu();
	    $menu->name = \request('menuName');
	    $menu->weight = \request('menuWeight');
	    $menu->cost = \request('menuCost');
	    $menu->save();
    	return redirect('/menu/create');
    }
}
