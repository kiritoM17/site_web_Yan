@extends('template.master_template')
@section('page-title')
    Business
@endsection
@section('custom-css')
<style>
    .form-control{
        color:#fff !important;
    }
    .row>p{
        text-align: left !important;
        font-size: 18px !important;
    }
    .text-div{
        padding-left:10px !important;
    }
    .actu-div>ul>li,.actu-div>p>strong,actu-div>p,.actu-div>ul>li>strong{
        font-size: 18px !important;
        text-align: justify-all !important;
    }
    button {
	color: #c00d0d !important;
    width:150px !important;
	border: 1px solid #fff !important;
	padding: 20px;
	outline: none;
	font-size: 16px;
	margin-top: 30px;
    margin-left: 10px;
    background: none;
	border-radius: 12px;
	-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.2);
	-webkit-transition: 300ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
}
button>a{
    font-size: 18px !important;
}
button:hover {
    color: #c00d0d !important;
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
}
button {
	color: #c00d0d !important;
    width:100px !important;
	border: 1px solid #fff !important;
	padding: 20px;
	outline: none;
	font-size: 12px;
	margin-top: 30px;
    margin-left: 0px;
    background: none;
	border-radius: 12px;
}
button>a{
    font-size: 16px !important;
}
</style>
@endsection
@section('content-page')
   <div class="row actu-div" >
    <p>AMAFOR Marketing and Communication: AMC:</p>
    <p>This is a large marketing network based on the MLM system. The main activities here are:</p>
    <ul>
    <li>Communicate on the services and products of AMAFOR and MASSORA GROUP, with the aim of getting the target collaboration with these services or use these products.</li>
    <li>Participate physically or digitally in the different activities, events and expeditions.</li>
    <li>To manage the different networks on the marketing and communication levels.</li>
    </ul>
    <p><strong><em>Working three hours a day and receiving a remuneration or profit of more than $ 3000 per month is possible by AMC</em></strong><em>.</em></p>
    <p><strong>To beneficiate from this opportunity, all you have to do is to sign up for one of AMAFOR's services and decide to go for MLM. We regularly organize online sessions to present this unique opportunity. </strong>&nbsp;</p>
    <p>The services concerned at the moment by AMC are:&nbsp;</p>
    <ul>
    <li><strong>TRAINING-CERTIFICATION</strong>: The job is to communicate in order to get people to sign up for the trainings, and you receive the commissions and many other benefits.</li>
    <li><strong>AMAFOR EVENTS</strong>: The job is to communicate to get people to sign up for events, and you receive the commissions and many other benefits.</li>
    <li><strong>AMAFOR MAGAZINE</strong>: The job is to get people around the world to subscribe, and you get the commissions. We accompany you in the process for your fulfilment.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>
    </ul>
    <p><strong><em>Take advantage of the promotions available to occupy very good positions.</em></strong></p>
   </div>
   <div class="row">
       <button data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-md pull-left" style="background: none !important; border:3px solid #fff !important"><a style="color:#fff !important">Subscribe</a></button>
   
       <button data-toggle="modal" data-target="#exampleModa" class="btn btn-lg btn-md pull-right"  style="background: none !important; border:3px solid #fff !important"><a style="color:#fff !important">Donwload</a></button>
   </div>


   <div class="modal fade"   id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-md" role="document">
           <div class="modal-content" style="background: rgba(30, 40, 64, 1.0);
           background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
           background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
           background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));">
               <div class="modal-header">
                   <h4 class="modal-title" id="exampleModalLabel">Subscription form:</h4>
               </div>
               <div class="modal-body">
                   <form class="mbr-form" action="suscribe/storeBusiness" method="post" data-form-title="Mobirise Form">
                           {{csrf_field()}}
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="first_name">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">First Name</label>
                                       <input type="text" class="form-control" name="first_name_sus" data-form-field="first_name" required="required" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="last_name">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Last Name</label>
                                       <input type="text" class="form-control" name="last_name_sus" data-form-field="last_name" required="required" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-6 multi-horizontal" data-for="city">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">City</label>
                                       <input type="text" class="form-control" name="city_sus" data-form-field="city" required="required" id="name-form1-4">
                                   </div>
                               </div>
                               <div class="col-md-6 multi-horizontal" data-for="zip_code">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Zip code</label>
                                       <input type="text" class="form-control" name="zip_code_sus" data-form-field="zip_code" required="required" id="email-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="email">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Email</label>
                                       <input type="email" class="form-control" name="email_sus" placeholder="Ex contact@massora.org" data-form-field="email" required="" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="phone">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Tel</label>
                                       <input type="text" class="form-control" name="phone_sus" placeholder="Ex (+1) 770 904 9132" data-form-field="phone" required="required" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="whatsapp">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Whatsapp</label>
                                       <input type="text" class="form-control" name="phone_whats_sus" placeholder="Ex (+1) 770 904 9132" data-form-field="whatsapp" maxlength="20" required="required" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                           <div class="form-group" data-for="message">
                               <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Who told you about this opportunity (capital information)? </label>
                               <textarea type="text" class="form-control" required="required" name="message_sus" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
                           </div>
                           <div class="row row-sm-offset">
                               <div class="col-md-12" data-for="magazine_sub">
                                   <div class="form-group">
                                       <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">I agree to subscribe..............</label>
                                       <input type="checkbox" class="" name="magazine_sub" data-form-field="magazine_sub" required="required" id="name-form1-4">
                                   </div>
                               </div>
                           </div>
                       
               </div>
               <div class="modal-footer">
                <span class="input-group-btn">
                    <button href="" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important">Subscribe</button>
                </span>
               </div>
            </form>
           </div>
       </div>
   </div>



   <div class="modal fade"   id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content" style="background: #01102C;
        background: -webkit-radial-gradient(bottom right, #01102C, #2B020A);
        background: -moz-radial-gradient(bottom right, #01102C, #2B020A);
        background: radial-gradient(to top left, #01102C, #2B020A);">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">download </h4>
            </div>
            <div class="modal-body">
                <center><embed src="{{ url('document/business/table_commission.pdf') }}" width="500" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></center>
            </div>
            <div class="modal-footer">
             <span class="input-group-btn">
                 <button href="" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important"><a href="{{ url('document/business/table_commission.pdf') }}" style="color:#fff !important;">DOWNLOAD</a></button>
             </span>
            </div>
        </div>
    </div>
</div>
@endsection