<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    //function return Event page
    function getPage()
    {
        return view('event');
    }
}