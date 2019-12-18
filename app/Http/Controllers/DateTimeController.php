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
            'rDate-inp' => ['required','min:10', 'max:10'],
            'rTime-inp' => ['required','min:5', 'max:5'],
        ],[
            'rDate-inp.min' => 'Min date field size must be greater than 10',
            'rDate-inp.required' => 'Max date field size must be less than 10',

            'rTime-inp.min' => 'Min time field size must be greater than 5',
            'rTime-inp.required' => 'Max time field size must be less than 5',
        ]);
    	$datetimes = new \App\DateTime();
	    $datetimes->rDate = \request('rDate-inp');
        $datetimes->rTime = \request('rTime-inp');

	    $datetimes->save();
    	return redirect('/dateAdmin');
    }
}
