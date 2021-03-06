<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{   
    public function order(){
        return view('order');
    }
    public function reserve(){
        $datetimes = \App\DateTime::all()->sortBy("rTime");
        return view('reserve',[
            'datetimes' => $datetimes,
        ]);
    }
    public function store(){
        $data = request()->validate([
            'reserveName' => ['required','min:2'],
            'reservePhone' => ['required','max:10','min:10'],
        ],[
            'reserveName.min' => 'Name cannot be less than 2 characters',
            'reserveName.required' => 'Name cannot be less than 2 characters',
            'reservePhone.min' => 'Введите номер коректно, номер должен состоять из 10 цифр',
            'reservePhone.max' => 'Введите номер коректно, номер должен быть меньше чем из 10 цифр',
            'reservePhone.required' => 'Введите номер коректно, номер должен состоять из 10 цифр',
        ]);
    	$client = new \App\Client();
        $client->tNumber = \request('reserveNumber');
        $client->name = \request('reserveName');
        $client->pNumber = \request('reservePhone');
        $client->date = \request('opt-date');
        $client->time = \request('opt-time');
    	$client->save();
    	return redirect('/reserve');
    }
}
