<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateTimeController extends Controller
{
	public function index(){
        return view('dateAdmin');
    }

    public function store(){
    	$datetimes = new \App\DateTime();
	    $datetimes->rDate = \request('rDate-inp');
	    $datetimes->rTime = \request('rTime-inp');
	    $datetimes->save();
    	return redirect('/dateAdmin');
    }
}
