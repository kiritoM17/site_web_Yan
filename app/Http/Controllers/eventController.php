<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class eventController extends Controller
{
    //function return Event page
    function getPage()
    {
        $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
        return view('event',compact('lastMagazine'));
    }
    //function return event admin page
    function getAdminPage()
    {
        $event = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',1)->paginate(6);
        return view('adminView.layouts.event.index',compact('event'));
    }
    public function getRecentEvent()
    {
        $evenements= Publication::where('id_type_pub',1)
        ->orWhere('id_type_pub',2)
        ->orderBy('start_date_pub', 'desc')
        ->get();
        return response()->json(array('code'=>'200','resultat'=>$evenements));
    }
}
