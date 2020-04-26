<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class magazineController extends Controller
{
    //function get magazine page
    function getPage()
    {
        return view('magazine');
    }
}
