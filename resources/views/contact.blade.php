@extends('template.master_template')
@section('page-title')
    Contact
@endsection
@section('custom-css')
<style>
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
<div class="row">
<div class="col-md-10 center-align center-block form-contact" style="background: rgba(30, 40, 64, 1.0);
background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));float:none !important; padding:10px !important">
    <form class="mbr-form" action="contact/store" method="post" data-form-title="Mobirise Form">
        {{csrf_field()}}
        <center><h2>Contact Us</h2><br/></center>
        <div class="row row-sm-offset">
            <div class="col-md-4 multi-horizontal" data-for="name">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Name</label>
                    <input type="text" class="form-control" name="name_con" data-form-field="Name" required="requuired" id="name-form1-4">
                </div>
            </div>
            <div class="col-md-4 multi-horizontal" data-for="email">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Email</label>
                    <input type="email" class="form-control" placeholder="Ex contact@massora.org" name="email_con" data-form-field="Email" required="required" id="email-form1-4">
                </div>
            </div>
            <div class="col-md-4 multi-horizontal" data-for="phone">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4">Phone</label>
                    <input type="tel" required="required" class="form-control" name="phone_con" placeholder="Ex (+1) 770 904 9132" data-form-field="Phone" id="phone-form1-4">
                </div>
            </div>
        </div>
        <div class="form-group" data-for="message">
            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Message</label>
            <textarea type="text" required="required" class="form-control" name="message_con" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
        </div>
    
        <span class="input-group-btn">
            <button href="" type="submit" class="btn btn-form pull-right display-4 form-control-label" style="background:none !important;border:3px solid !important;font-size:16px !important;color:#fff !important"><a style="color:#fff !important">Send Email</a></button>
        </span>
    </form>
</div>
</div>
@endsection