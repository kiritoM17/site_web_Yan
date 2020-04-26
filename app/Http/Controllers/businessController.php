<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class businessController extends Controller
{
    //function get business page
    function getPage()
    {
        return view('business');
    }
}
