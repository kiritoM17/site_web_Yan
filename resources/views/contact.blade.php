@extends('template.master_template')
@section('page-title')
    Contact
@endsection
@section('content-page')
<div class="row">
<div class="col-md-10 center-align center-block">
    <form class="mbr-form" action="contact/store" method="post" data-form-title="Mobirise Form">
        {{csrf_field()}}
        <center><h2>Contact Us</h2><br/></center>
        <div class="row row-sm-offset">
            <div class="col-md-4 multi-horizontal" data-for="name">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Name</label>
                    <input type="text" class="form-control" name="name_con" data-form-field="Name" required="" id="name-form1-4">
                </div>
            </div>
            <div class="col-md-4 multi-horizontal" data-for="email">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Email</label>
                    <input type="email" class="form-control" name="email_con" data-form-field="Email" required="" id="email-form1-4">
                </div>
            </div>
            <div class="col-md-4 multi-horizontal" data-for="phone">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4">Phone</label>
                    <input type="tel" class="form-control" name="phone_con" data-form-field="Phone" id="phone-form1-4">
                </div>
            </div>
        </div>
        <div class="form-group" data-for="message">
            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Message</label>
            <textarea type="text" class="form-control" name="message_con" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
        </div>
    
        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form  display-4" style="color:#fff !important;background:#6e1f2e !important">SEND FORM</button></span>
    </form>
</div>
</div>
@endsection