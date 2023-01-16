<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    //
    function first(){
        return view("users");
    }
}
