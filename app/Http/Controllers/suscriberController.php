<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Suscriber;
use Validator;


class suscriberController extends Controller
{
    public function storeMagazine(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name_sus' => 'required',
             'last_name_sus' => 'required',
             'city_sus'=>'required',
            'zip_code_sus' => 'required',
            'email_sus' => 'required',
            'phone_sus' => 'required',
            'phone_whats_sus' => 'required']);
            if ($validator->fails()) {
                 return "error create publication fails";
             }
             Suscriber::create([
                'first_name_sus' => $request->first_name_sus,
                'last_name_sus' => $request->last_name_sus,
                'city_sus'=>$request->city_sus,
               'zip_code_sus' => $request->zip_code_sus,
               'email_sus' => $request->email_sus,
               'phone_sus' => $request->phone_sus,
               'phone_whats_sus' => $request->phone_whats_sus,
               'type_suscriber' => 'magazine',
               'date_sus' => date_create(),
             ]);

             $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
             return view('response',compact('lastMagazine'));

    }
    public function storeBusiness(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name_sus' => 'required',
             'last_name_sus' => 'required',
             'city_sus'=>'required',
            'zip_code_sus' => 'required',
            'email_sus' => 'required',
            'phone_sus' => 'required',
            'phone_whats_sus' => 'required']);
            if ($validator->fails()) {
                 return "error create publication fails";
             }
             Suscriber::create([
                'first_name_sus' => $request->first_name_sus,
                'last_name_sus' => $request->last_name_sus,
                'city_sus'=>$request->city_sus,
               'zip_code_sus' => $request->zip_code_sus,
               'email_sus' => $request->email_sus,
               'phone_sus' => $request->phone_sus,
               'phone_whats_sus' => $request->phone_whats_sus,
               'message_sus' => $request->message_sus,
               'type_suscriber' => 'business',
               'date_sus' => date_create(),
             ]);
             $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
             return view('response',compact('lastMagazine'));
    }


    //store business
   
}
