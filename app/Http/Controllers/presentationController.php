<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class presentationController extends Controller
{
    //funtion return presentation page
    function getPage()
    {
        return view('presentation');
    }
}
