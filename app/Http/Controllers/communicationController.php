<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class communicationController extends Controller
{
    //function return communication page
    function getPage()
    {
        return view('communication');
    }
}
