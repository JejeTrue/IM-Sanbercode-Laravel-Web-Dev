<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form () {
        return view('form');
    }

    public function welcome (Request $request){
        $firstName = request()->input('fname'); 
        $lastName = request()->input('lname');
        
        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }
}
