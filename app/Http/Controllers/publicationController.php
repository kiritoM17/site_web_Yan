<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicationController extends Controller
{
    //function get publication admin page
    function getPage()
    {
        return view('adminView.layouts.publication.index');
    }
}
