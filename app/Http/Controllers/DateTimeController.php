<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateTimeController extends Controller
{
	public function index(){
        return view('dateAdmin');
    }

    public function store(){
        $data = request()->validate([
            'rDate-inp' => ['required','min:16', 'max:16'],
        ],[
            'rDate-inp.min' => 'Min date field size must be greater than 16',
            'rDate-inp.required' => 'Max date field size must be less than 16',
        ]);
    	$datetimes = new \App\DateTime();
	    $datetimes->rDate = \request('rDate-inp');

	    $datetimes->save();
    	return redirect('/dateAdmin');
    }
}
