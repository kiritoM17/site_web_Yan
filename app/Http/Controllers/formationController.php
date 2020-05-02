<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class formationController extends Controller
{
    //function get formation page
    function getPage()
    {
        $formation = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',2)->paginate(6);
        return view('formation.formation',compact('formation'));
    }
    //function return formation admin index page
    function getAdminPage()
    {
        $formation = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',2)->paginate(6);
        return view('adminView.layouts.formation.index',compact('formation'));
    }
}
