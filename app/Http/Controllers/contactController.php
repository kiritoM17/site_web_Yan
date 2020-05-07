<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\NousContacter;
use App\Mail\DemandeMembre;
use App\Models\Publication;
use Validator;

class contactController extends Controller
{
    //get contact page
    public function getPage()
    {
        $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
        return view('contact',compact('lastMagazine'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_con' => 'required',
             'email_con' => 'required',
             'phone_con'=>'required',
            'message_con' => 'required',

            ]);
            if ($validator->fails()) {
                // return view('admin.add-operateur')->withErrors($validator);
                 return "error create publication fails";
             }
             Contact::create([
                'name_con' => $request->name_con,
                'email_con' => $request->email_con,
                'phone_con'=>$request->phone_con,
               'message_con' => $request->message_con,
               'company_con' => $request->company_con,
               'country_con' => $request->country_con,
             ]);
             $contact=array(
                'name_con' => $request->name_con,
                'email_con' => $request->email_con,
                'phone_con'=>$request->phone_con,
               'message_con' => $request->message_con,
               'company_con' => $request->company_con,
                 'country_con' => $request->country_con
             );
            //  Mail::send('emails.demande-membre', $contact, function($message){
            //     $message->to('mvemvearnoldjunior@gmail.com', 'Admin')
            //     ->subject('Contact Admin');
            //     $message->from('kiradevtest19@gmail.com',$contact);
            //     });
            // // //  
            //  Mail::to('mvemvearnoldjunior@gmail.com')->send(new DemandeMembre($contactData));
            Mail::to('mvemvearnoldjunior@gmail.com')->send(new DemandeMembre($request->except('_token')));

            //  Mail::to('mvemvearnoldjunior@gmail.com',$contact,function($message){
            //     $message->from('mvemvearnoldjunior@gmail.com')
            //     ->view('emails.demande-membre')
            //     ->subject('Contact Us By'.$contact ['email_con']);
            // });

             $lastMagazine = Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->take(5)->get();
             return view('response',compact('lastMagazine'));
    }
}
