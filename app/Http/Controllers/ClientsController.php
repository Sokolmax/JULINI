<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{   
    public function order(){
        return view('order');
    }
    public function reserve(){
    	return view('reserve');
    }
    public function store(){
        $data = request()->validate([
            'phone-number' => ['required','max:10','min:10'],
        ],[
            'phone-number.min' => 'Введите номер коректно, номер должен состоять из 10 цифр',
            'phone-number.max' => 'Введите номер коректно, номер должен быть меньше чем из 10 цифр',
            'phone-number.required' => 'Введите номер коректно, номер должен состоять из 10 цифр',
        ]);
    	$client = new \App\Client();
    	$client->tNumber = '1';
    	$client->pNumber = \request('phone-number');
    	$client->save();
    	return redirect('/reserve');
    }
}
