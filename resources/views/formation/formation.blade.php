@extends('template.master_template')
@section('page-title')
    Formation
@endsection
@section('custom-css')
  <style>
 body {
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
}

.main_card {
	color: rgb(36, 8, 75);
	width: 100%;
	height: 413px;
	margin: 1px auto;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
    max-width: 100%;
    padding: 13% !important;
    background: linear-gradient(90deg, rgba(212,211,211,1) 7%, rgba(218,210,210,1) 20%, rgba(238,237,237,1) 45%, rgba(221,215,216,1) 77%);
}

.card_left {
	width: 90%;
}

.card_datails {
	width: 90%;
	padding: 5px;
	margin-top: -25px;
}
.card_datails  h1 {
    font-size: 19px;
    color:rgb(2, 0, 36);
}
.card_datails  h3 {
    font-size: 16px;
    color:rgb(2, 0, 36);
}
.card_right img {
	height: 300px;
	border-radius: 2px;
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
	font-weight: bold;
	border-radius: 1px !important;
}

.PG {
}

.disc {
	font-weight: 100;
	line-height: 27px;
}
a {
	color: darkcyan;
	display: block;
	text-decoration: none;
}
.social-btn {
	margin-left: -10px;
}
button {
	color: #fff;
    width:150px !important;
	border: none;
	padding: 20px;
	outline: none;
	font-size: 12px;
	margin-top: 30px;
	margin-left: 10px;
	background: rgb(110, 31, 46);
	border-radius: 12px;
	-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.2);
	-webkit-transition: 300ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
}

button:hover {
    color: #fff;
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
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
                <div class="card_left">
                    <div class="card_datails">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <h1 class="" style="width: 450px !important;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;padding: 2px 5px;">THEME: {{ $pub->theme_pub }}</h1>
                                <h3 style="width: 450px !important;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;padding: 2px 5px;">Edition N*: <span class="badge badge-success">{{ $pub->edition_pub }}</span></h3>
                        </div>
                        </div>
                        <div class="card_cat hidden-xs">
                            <p class="PG"><span class="badge badge-success"><i class="fa fa-calendar" style="font-size:15px"></i></span></p>
                            <p class="year"><span class="badge badge-success">{{ $pub->start_date_pub->format('d-M-Y') }}</span></p>
                            <p class="year"><span class="badge badge-success">Start Formation</span></p>
                        </div>
                        <h1 style="font-size:20px !important" class="disc">{!! $pub->title_pub!!}</h1>
                        <a href="https://www.imdb.com/title/tt4912910/" target="_blank" class="btn btn-xs btn-default">Read More</a>
                    <div class="social-btn">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-xs">
                                <a  class="btn btn-xs" href="
                                @foreach($pub->albums->medias as $media)
                                 @if($media->mime_type =='registerForm')
                                 {{asset('storage/'.$media->nom_media)}}
                                 @break
                                 @endif
                                @endforeach
                                    
                                    " class="btn btn-xs">
                                    <i class="fas fa-play"></i> Register Form
                                </a>
                            </button>

                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-xs">
                                    <a target="_blank" class="btn btn-xs" href="
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
                            </div>
                        </div>
                    </div>	
                    </div>
                </div>
                <div class="card_right">
                    <div class="img_container">
                        <img class=" thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif" style="width: 100% !important; height: 300px !important;">
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