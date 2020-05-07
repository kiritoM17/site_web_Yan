@extends('template.master_template')
@section('page-title')
    Magazine
@endsection
@section('custom-css')
<style>
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
    <p><strong>AMAFOR Magazine</strong> is:</p>
    <ul>
    <li>An international forum for free information and the promotion of social, political and economic achievements.</li>
    <li>A communication service open to various organizations.</li>
    <li>A forum for the analysis of forums and social facts.</li>
    <li>A press analysis forum</li>
    <li>A forum for information on the activities and impact of the Enterprises of Massora Group LLC.</li>
    </ul>
    <p>&nbsp;The specificity of <strong>AMAFOR Magazine</strong> lies in background with:&nbsp;</p>
    <ul>
    <li>Physical and digital magazine productions available in America, Europe and Asia,</li>
    <li>Bimonthly and special editions in two languages (English and French),</li>
    <li>World news flashes several times a day online.</li>
    </ul>
    <p>&nbsp;<strong>Subscription:</strong></p>
    <p><strong><em>Until 31 May, take advantage of the free two-month subscription promotion. </em></strong></p>
</div>
<div class="row">
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-md pull-right"style="background: none !important; border:3px solid #fff !important"><a style="color:#fff !important">Subscription</a></button>
</div>


<div class="modal fade"   id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content" style="background: rgba(30, 40, 64, 1.0);
        background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
        background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
        background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Subscription form</h4>
            </div>
            <div class="modal-body">
                <form class="mbr-form" action="suscribe/storeMagazine" method="post" data-form-title="Mobirise Form">
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
                                <input type="email" class="form-control" name="email_sus" placeholder="Ex contact@massora.org" data-form-field="email" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Tel</label>
                                <input type="text" class="form-control" name="phone_sus" data-form-field="phone" required="required" id="name-form1-4" placeholder="Ex (+1) 770 904 9132">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="whatsapp">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Whatsapp</label>
                                <input type="text" class="form-control" placeholder="Ex (+1) 770 904 9132" name="phone_whats_sus" data-form-field="whatsapp" required="required" id="name-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm-offset">
                        <div class="col-md-12" data-for="magazine_sub">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">I agree to subscribe and receive AMAFOR MAGAZINE..............</label>
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

 
    
@endsection