<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class communicationController extends Controller
{
    //function return communication page
    function getPage()
    {
        $media_city = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',1)->paginate(6);
        return view('communication',compact('media_city'));
    }
    //function return communication admin index page
    function getAdminPage()
    {
        $media_city = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',1)->paginate(6);
        return view('adminView.layouts.media_city.index',compact('media_city'));
    }
}
