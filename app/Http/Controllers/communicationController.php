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
    //function return communication admin index page
    function getAdminPage()
    {
        return view('adminView.layouts.media_city.index');
    }
}
