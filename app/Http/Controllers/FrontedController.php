<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
    function index(Request $request){
        return view('index');
    }
}
