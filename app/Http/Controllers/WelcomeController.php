<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        //return view('welcome');
        $msg=__('welcome.greetings',['name'=>"Juan Cruz"]);
        return view('welcome',compact('msg'));
    }
}
