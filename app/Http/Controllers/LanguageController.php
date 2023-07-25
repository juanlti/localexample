<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //


    public function switchLanguage($lang){

        if(array_key_exists($lang,Config::get('languages'))){

                Session::put('applocale',$lang);


        }
        return Redirect::back();

    }
}