@extends('layout.detail-actualite-template')

@section('title')
    Actualite
@endsection

@section('extra-css')
    {{Html::style('css/grid-gallery.css')}}
    {{Html::style('adminTools/bsbmd/plugins/animate-css/animate.css')}}
    {{Html::style('adminTools/bsbmd/plugins/light-gallery/css/lightgallery.css')}}
    <link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid" style="margin-top:5.5% !important">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <img src="{{asset('storage/'.$actualites->albums->medias[0]->nom_media)}}" style="padding: 5.5%!important;width: 100% !important; height: 300px !important;" class="img-responsive ">
                            </div>
                            <div class="col-sm-8 col-md-8 col-xs-12">
                                <div class="row" style="width: 100% !important;padding-left: 2%!important;">
                                    {!! $actualites->description_act !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($actualites->albums->medias)>1)
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header align-center">
                            <h4 style="color: #9C27B0 ; border-bottom: #9C27B0  2px solid;font-family: 'Satisfy',cursive;!important;">Galerie Photos</h4>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                @foreach($actualites->albums->medias as $photo)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{asset('storage/'.$photo->nom_media)}}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail album" src="{{asset('storage/'.$photo->nom_media)}}" style="width: 100% !important; height: 300px !important;padding: 6.5%">
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('extra-script')
    <script src="http://vjs.zendcdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    {{Html::script('adminTools/bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/medias/image-gallery.js')}}
    {{Html::script('adminTools/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
    <script src="http://vjs.zendcdn.net/7.6.0/video.js"></script>
@endsection