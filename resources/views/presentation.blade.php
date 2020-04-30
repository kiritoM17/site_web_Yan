@extends('template.master_template')
@section('page-title')
    Présentation
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
    font-size: 18px;
    color:rgb(2, 0, 36);
}
.card_datails  h3 {
    font-size: 14px;
    color:rgb(2, 0, 36);
}
.card_right img {
	height: 280px;
	border-radius: 2px;
}
.card_right {
	border-radius: 2px;
}

.card_cat {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	        justify-content: space-between;
}

.PG, .year, .genre, .time {
	color: rgb(23, 4, 79);
	padding: 1px;
	font-weight: bold;
	border-radius: 5px;
}

.PG {
	background: rgb(110, 31, 46);
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.1);
	        box-shadow: 0 0 50px rgba(0,0,0,0.1);
	-webkit-transition: 300ms ease-in-out;
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
            <div class="main_card">
                <div class="card_left">
                    <div class="card_datails">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 well">
                                <h1 class="hidden-xs" style="width: 450px !important;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;padding: 2px 5px;">Formation - Certification en création de la valeur ajoutée (V.A.) et Multi
                                    Level Marketing (MLM)</h1>
                            <h3 class="visible-xs" style="width: 210px !important;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;padding: 2px 5px;">Création de la valeur ajoutée (V.A.) et Multi
                                Level Marketing (MLM)</h3>
                            </div>
                        </div>
                        <div class="card_cat hidden-xs">
                            <p class="PG"><i class="fa fa-calendar" style="font-size:15px"></i></p>
                            <p class="year">2020-06-17</p>
                            <p class="genre">début formation </p>
                            <p class="time">2 mois</p>
                        </div>
                        <p class="disc">Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.</p>
                        <a href="https://www.imdb.com/title/tt4912910/" target="_blank" class="btn btn-xs btn-default">Read More</a>
                    <div class="social-btn">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-xs">
                                    <i class="fas fa-play"></i> Syllabus
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-xs">
                                    <i class="fas fa-download"></i> formulaire inscription
                                </button>
                            </div>
                        </div>
                    </div>	
                    </div>
                </div>
                <div class="card_right">
                    <div class="img_container">
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/ff/MI_%E2%80%93_Fallout.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        {{-- <div class="col-sm-4 col-xs-12 img-responsive">
            <img src="{{url('img/clients/logo2.png')}}" class="img-responsive album" style="width: 100%; height: 200px;border: 2px outset rgba(255,255,255,0.78);">
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12 center-block" style="float: none">
                    <h4 style="font-family: 'Satisfy', cursive;border-bottom: 0px solid;margin-bottom: 0px;margin-bottom: 1%;color:#fff" class="text-center"> Le retour des rois</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 center-block description-act" style="font-size: 12px !important; color:#fff">
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum vlorem ipsum
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum vlorem ipsum
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum vlorem ipsum
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 floatright center-block">
                    <p style="color:#fff ;font-size:9px!important;"><span style="text-decoration: #fff underline;font-weight: bold !important;color:#fff">Publier le:</span>  22 Jan 2035</p>
                </div>
            </div>
        </div> --}}
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