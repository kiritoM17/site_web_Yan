@extends('template.master_template')
@section('page-title')
    Formation
@endsection
@section('custom-css')
  <style>
.main_card {
	color: rgb(36, 8, 75);
	width: 100%;
	height: 420px;
	margin: 1px auto;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
    max-width: 100%;
    padding-right: 50px !important;
    padding-top: 30px !important;
    background: rgba(30, 40, 64, 1.0);
background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
-webkit-box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);;
-moz-box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);;
box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);
    
}

.card_left {
	width: 90%;
}

.card_datails {
	width: 90%;
	padding: 5px;
	margin-top: -25px;
}
.card_datails  h3 {
    color:#fff;
}
.card_datails  h5 {
    color:#fff;
}
.card_right img {
	height: 400px;
}
.card_right {
	border-radius: 2px;
}

.card_cat {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	-webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	        justify-content: space-between;
}

.PG, .year, .genre, .time {
	color: rgb(23, 4, 79);
	padding: 1px;
	border-radius: 1px !important;
}

.PG {
}
a {
	color: #fff;
	display: block;
	text-decoration: none;
}
.social-btn {
	margin-left: -10px;
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
    color: #fff;
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
}
.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 14px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background: none !important;
    border-radius: 0px !important;
    border: 2px solid #fff !important;
}
@media (max-width: 640px) {
    .main_card {
        height: 550px;
    }
    .img-view{
        float:none !important;

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
}
  </style>
@endsection
@section('content-page')
    <div class="row">
        <div class="wrapper">
            @if (count($formation)>0)
            @foreach ($formation as $pub)
            @if ($pub->status_pub !== 'delete')
            <div class="main_card">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 pull-left">
                        <div class="card_datails">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <h3 style="width: 450px !important;padding-left:10px !important;margin-bottom:29px !important" class="disc">TITLE: {!! $pub->title_pub!!}</h3>
                                    <h4 style="width: 450px !important;padding-left:10px !important"class="" >THEME: {{ $pub->theme_pub }}</h5>
                                    </div>
                            </div>
                            <div class="row" style="padding-left:30px !important">
                                <h5>Edition N*: <span class="badge badge-success" style="margin-right:91px !important">{{ $pub->edition_pub }}</span> Estimated Time: <span class="badge badge-success">3 months</span><br/><br/>Amount: <span class="badge badge-success">$950 USD</span></h5>
                            </div>
                            <div class="social-btn">
                            <div class="row">
                                <div class="col-xs-6">
                                    <center>
                                    <button class="btn btn-lg btn-xs">
                                    <a style="color:#fff !important" href="
                                    @foreach($pub->albums->medias as $media)
                                     @if($media->mime_type =='registerForm')
                                     {{asset('storage/'.$media->nom_media)}}
                                     @break
                                     @endif
                                    @endforeach
                                        
                                        " >
                                        <i class="fas fa-play"></i> Register Form
                                    </a>
                                </button>
                            </center>
    
                                </div>
                                <div class="col-xs-6">
                                    <center>
                                    <button class="btn btn-lg btn-xs">
                                        <a style="color:#fff !important" target="_blank"  href="
                                        @foreach($pub->albums->medias as $media)
                                         @if($media->mime_type =='syllabus')
                                         {{asset('storage/'.$media->nom_media)}}
                                         @break
                                         @endif
                                        @endforeach
                                            
                                             ">
                                            <i class="fas fa-play"></i> Syllabus
                                        </a>
                                    </button>
                                </center>
                                </div>
                            </div>
                        </div>	
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pull-rigth">
                        <div class="img_container">
                            <center><img class=" thumbnail" width="300" heigth="300" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif"></center>
                         </div>
                        </div>
                </div>
                </div>
            @endif
                @endforeach
                @endif
        </div>
    </div>
@endsection
@section('custom-script')
<script>
    $(".profile").addClass("pre-enter");
setTimeout(function () {
	$(".profile").addClass("on-enter");
}, 500);
setTimeout(function () {
	$(".profile").removeClass("pre-enter on-enter");
}, 3000);

</script>
@endsection