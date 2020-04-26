<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formationController extends Controller
{
    //function get formation page
    function getPage()
    {
        return view('formation');
    }
}
