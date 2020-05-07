@extends('template.master_template')
@section('page-title')
    Formation
@endsection
@section('custom-css')
  <style>
.main_card {
	color: rgb(36, 8, 75);
	width: 100%;
	height: 350px;
	margin: 1px auto;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
    max-width: 100%;
        margin-left: 5%;
    padding-right: 0px !important;
    padding-top: 30px !important;
    background: rgba(30, 40, 64, 1.0);
background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
-webkit-box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);;
-moz-box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);;
box-shadow: -1px 10px 19px 0px color: rgb(255, 255, 255);
    
}
li.list-group-item{
    color: #fff;
    background: none;
        position: relative;
    display: block;
    padding: 1px 1px;
    margin-bottom: -10px;
    text-align: center;
  text-justify: inter-word;
    
}
li.list-group-item.active{
    color: #fff;
    background-color: #061d33;
        position: relative;
    display: block;
    padding: 1px 1px;
    margin-bottom: -10px;
    text-align: center;
  text-justify: inter-word;
}
.list-group-item.active:hover{
    background:none !important;
    color:#59181e !important;
    border:1px #59181e solid !important ;
}
.list-group-item.active:hover h4{
    color:#59181e !important;
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
    margin-left: 0px;
    float: rigth !important;
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
button:hover{
    border:1px #59181e solid !important;
	-webkit-transform: scale(0.8);
	    -ms-transform: scale(0.8);
	        transform: scale(0.8);
}
button:hover>a{
   color:#59181e !important; 
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
@media all and (max-width: 640px) {
    .main_card {
        height: 600px;
    }
    img. thumbnail{
        float:none !important;
        padding-left: 30px  !important;
    }
    .img-view{
        float:none !important;

    }
    div.card_datails{
        width: 100% !important;
    }
    h3{
        font-size: 14px !important;
        width: 100%;
        overflow:hidden;
        line-height:50px;
    }
    h4{
        font-size: 12px !important;
        width: 100%;
        overflow:hidden;
        line-height:50px;
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
    font-size: 14px !important;
}
span.badge{
    margin-right: 10px !important;
}
div.social-btn{
    margin-bottom: 20px;
    margin-top: -60px;
    margin-left: 30px !important;
}
div.social-btn>span>button{
    margin-right: 40px !important;
}
}
  </style>
@endsection
@section('content-page')
    <div class="row" style="margin-bottom:-1px !important">
        <h4 style=" text-align: center;text-justify: inter-word;">This part and the training are reserved for the French speaking public.<br/> So it's in French.</h4>
    </div>
    <div class="row">
        <div class="wrapper">
            @if (count($formation)>0)
            @foreach ($formation as $pub)
            @if ($pub->status_pub !== 'delete')
            <div class="main_card">
                <div class="row">
                    <div class="col-lg-12 col-sm-8 pull-left">
                        <div class="card_datails">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <h3 style="padding-left:10px !important;margin-bottom:29px !important; text-align: center;text-justify: inter-word;text-transform: capitalize;" class="disc">{!! $pub->title_pub!!}</h3>
                                    <h4 class="hidden" style="padding-left:10px !important"class="" >THEME: {{ $pub->theme_pub }}</h5>
                                    </div>
                            </div>
                            <div class="container-justify" style="margin-bottom:-100px !important;float:none !important;margin-left:5.5% !important">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <ul class="list-group" style="background:none !important">
                                      <li class="list-group-item active"><h4>Edition</h4></li>
                                      <li class="list-group-item"><h6>{{ $pub->edition_pub }}</h6></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <ul class="list-group" style="background:none !important">
                                      <li class="list-group-item active"><h4>Estimated Time</h4></li>
                                      <li class="list-group-item"><h6>3 months</h6></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <ul class="list-group" style="background:none !important">
                                      <li class="list-group-item active"><h4>Amount</h4></li>
                                      <li class="list-group-item"><h6>$950 USD</h6></li>
                                    </ul>
                                </div>
                                
                                </div>
                            <div class="social-btn container-justify" style="margin-left:30%">
                                <span class="input-group-btn">
                                    <button class="pull-rigth btn btn-form  display-4 form-control-label">
                                        <a href="
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
                                    <button class="pull-rigth btn btn-form  display-4 form-control-label">
                                        <a target="_blank"  href="
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
                                </span>
                        </div>	
                        </div>
                    </div>
                    <div class="col-md-4 hidden col-sm-4 col-xs-12 pull-rigth">
                        <div class="img_container">
                            <center><img class=" thumbnail" width="250" heigth="250" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif"></center>
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