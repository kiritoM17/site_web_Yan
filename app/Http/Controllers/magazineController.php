<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class magazineController extends Controller
{
    //function get magazine page
    function getPage()
    {
        $magazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->paginate(6);
        return view('magazine',compact('magazine'));
    }
    //function return magazine admin index page
    function getAdminPage()
    {
        $magazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->paginate(6);
        return view('adminView.layouts.magazine.index',compact('magazine'));
    }
}
