<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\NousContacter;
use Validator;

class contactController extends Controller
{
    //get contact page
    public function getPage()
    {
        return view('contact');
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
             ]);
             $contact =$request->except('_token');
             Mail::to('mvemvearnoldjunior@gmail.com',$contact,function($message){
                $message->from('mvemvearnoldjunior@gmail.com')
                ->view('emails.nous-contacter')
                ->subject('Contacter ANAFOR'.$this->contact['email_con']);
            });

             return redirect()->back();
    }
}
