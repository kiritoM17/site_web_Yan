@extends('template.master_template')
@section('page-title')
    Présentation
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
    <div class="row visible-xs">
        <div class="col-md-12 col-lg-12" style="float: none">
            <center><h3>AMAFOR PRESENTATION</h3></center>
        </div>
    </div>
    <div class="row" style="margin-bottom:0px !important">
        <div class="col-lg-4 col-md-12">
            <center><img class="thumbnail" src="{{ url('img/logo.jpg') }}" width="250" heigth="250"></center>
            </div>
            <div class="col-lg-8 col-md-8 actu-div">
                <div class="row">
                    <div class="col-md-12 col-lg-12 description-act">
                        <p><strong>AMAFOR</strong> is an important department of <strong>MASSORA Group LLC</strong>, a company based in Atlanta, GA, USA with sub-directorates in Washington DC, Europe and Africa. Its mission is to promote excellence in the fields of Communication, Entrepreneurial Training and Services.</p>
                        <p>AMAFOR's main services are:</p>
                        <ul style="list-style-type: disc;">
                        <li><strong>AMAFOR Magazine</strong>: It is the grandstand for analyzes, the magazine of real and verified facts.</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <div class="row actu-div" style="margin-top:-30px !important;padding-top:-100px !important">
        <ul>
            <li><strong>AMAFOR Events:</strong> this is firstly an international forum for companies (SMEs, StartUps, etc.) which is held periodically in the USA. It is also a large working network of several development actors.</li>
        <li><strong>TRAINING - M.A. CERTIFICATION:</strong> It is the first international platform for practical training that offers a Certification in Value Creation and Network Marketing (MLM).</li>
        <li><strong>THE MEDIA CITY:</strong> It is a large network production, development and media support.</li>
        <li><strong>AMAFOR BUSINESS:</strong> Also known as "AMAFOR MC" the international network giving many people around the world work and life earning from their phones or from home. It is a system based on MLM.</li>
        </ul>
        <p><strong>AMAFOR</strong> works with hundreds of collaborators and partnerships around the world and offers a new effective and efficient approach to economic, political and social development.</p>
        <p style="text-align: center;"><em>Welcome to AMAFOR and MASSORA GROUP. Our company is firstly a big family and then a global village.</em></p>
        <p style="text-align: left;"><strong>The Information Manager:</strong><em><br />Emma Edison R. </em></p>
    </div>
@endsection
@section('custom-script')

@endsection