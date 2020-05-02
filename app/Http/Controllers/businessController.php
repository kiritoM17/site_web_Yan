<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class businessController extends Controller
{
    //function get business page
    function getPage()
    {
        $business = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',5)->paginate(6);
        return view('business',compact('business'));
    }
    function getAdminPage()
    {
        $business = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',5)->paginate(6);
        return view('adminView.layouts.business.index',compact('business'));
    }
}
