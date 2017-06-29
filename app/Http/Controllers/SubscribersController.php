<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
    
    public function index() {

    	return view('index');

    }

    public function store(){

    	$this->validate(request(), [

    			'email' => 'bail|required|max:100|unique:subscribers|email'

    		]);

    	$subscriber = new Subscriber;

    	$subscriber->email = request('email');
    	$subscriber->save();
    	return redirect('/');
    }
}
