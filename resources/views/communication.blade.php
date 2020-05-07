@extends('template.master_template')
@section('page-title')
    Communication
@endsection
@section('custom-css')
<style>
    .form-control{
        color:#fff !important;
        background: none;
        border:1px solid #fff;
    }
    .row>p{
        text-align: justify !important;
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
<div class="row actu-div">
    <p>&nbsp;&nbsp;&nbsp;&nbsp; It is an American center for foreign media connections. Radio, Television, Print and Social Media can have local representation in the USA, and can benefit from local and/or exclusive productions.</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;American media also have the possibility to obtain foreign productions and to be represented in several European, African and Asian countries through our partners and collaborators in these continents.</p>
</div>
<div class="row">
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-md pull-right"style="background: none !important; border:3px solid #fff !important"><a style="color:#fff !important">Write us</a></button>
</div>
<div class="modal fade"   id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content" style="background: rgba(30, 40, 64, 1.0);
        background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
        background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
        background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Write to us for more information</h4>
            </div>
            <div class="modal-body">
                <form class="mbr-form" action="contact/store" method="post" data-form-title="Mobirise Form">
                    {{csrf_field()}}
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="first_name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Name</label>
                                <input type="text" class="form-control" name="name_con" data-form-field="first_name" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="last_name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Company</label>
                                <input type="text" class="form-control" name="company_con" data-form-field="last_name" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Email</label>
                                <input type="email" class="form-control" name="email_con" placeholder="Ex contact@massora.org" data-form-field="email" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Tel</label>
                                <input type="text" class="form-control" placeholder="Ex (+1) 770 904 9132" name="phone_con" data-form-field="phone" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="country">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Country</label>
                                <select name="country_con"  class="form-control">
                                    <option value="" style="background:#041628 !important">----Country -----</option>
                                    @foreach(App\Models\Country::orderBy('name_cou')->get() as $cou)
                                        <option style="background:#041628 !important" value="{{$cou->name_cou}}">{{$cou->name_cou}} <strong>__{{$cou->code_three_cou}}</strong></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Object:</label>
                        <textarea type="text" required="required" class="form-control" name="message_con" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
                    </div>
                    
        
              </div>
            <div class="modal-footer">
                <span class="input-group-btn">
                    <button href="" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important">Send</button>
                </span>
            </div>
        </form>
        </div>
    </div>
</div>

 @endsection