<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class presentationController extends Controller
{
    //funtion return presentation page
    function getPage()
    {

         $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
        return view('presentation',compact('lastMagazine'));
    }
}
