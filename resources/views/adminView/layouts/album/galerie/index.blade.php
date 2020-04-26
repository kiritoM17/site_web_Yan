@extends('adminView.index')

@section('title')
    Media
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/plugins/animate-css/animate.css')}}
    {{Html::style('adminTools/bsbmd/plugins/light-gallery/css/lightgallery.css')}}
    <link href="{{url('https://vjs.zencdn.net/7.6.0/video-js.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                @if($albums->type_album == 'image')
                    IMAGE
                @elseif($albums->type_album == 'video')
                    VIDEO
                @elseif($albums->type_album == 'actualite')
                    ACTUALITE
                @elseif($albums->type_album == 'evenement')
                    EVENEMENT
                @elseif($albums->type_album == 'eleve')
                    ELEVE
                @else
                    OTHER
                @endif
                GALLERY
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    </div>
                    <div class="body">

                        @if($albums->type_album == 'image'||$albums->type_album == 'actualite'||$albums->type_album == 'evenement'||$albums->type_album == 'eleve')
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                @foreach($albums->medias as $photo)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card">
                                        <div class="card-body">
                                            <a href="{{asset('storage/'.$photo->nom_media)}}" data-sub-html="Demo Description">
                                                <img class="img-responsive thumbnail" src="{{asset('storage/'.$photo->nom_media)}}" style="width: 100% !important; height: 300px !important;">
                                            </a>
                                        </div>
                                        <button class="btn btn-sm btn-primary align-center card-footer col-sm-12" style="float: none!important;" data-toggle="modal" data-target="#deleteImage{{$photo->id_media}}">
                                            Delete
                                        </button>
                                    </div>
                                    <div class="modal fade" id="deleteImage{{$photo->id_media}}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <form method="post" action="{{ url('/media/delete') }}">
                                                {{csrf_field()}}
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <input type="text" name="id_media" class="hidden" value="{{$photo->id_media}}">
                                                        <font size="4pt">Voulez rellement supprimer cette Image ?</font>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn-group btn-sm btn-danger" type="submit">
                                                            Confirmer
                                                        </button>
                                                        <button class="btn-group btn-sm btn-primary" data-dismiss="modal">
                                                            Annuler
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @elseif($albums->type_album == 'video' )
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                @foreach($albums->medias as $video)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card-body">
                                            <video id="my-video" class="video-js" controls preload="auto" width="300" height="300" poster="img/bg.png" data-setup="{}">
                                                <source src="{{asset('storage/'.$video->nom_media)}}" type="video/mp4">
                                                <source src="{{asset('storage/'.$video->nom_media)}}" type="video/webn">
                                                <p class="vjs-no-js">
                                                    Utiliser un Navigateur recent pour pouvoir consulter cette video
                                                </p>
                                            </video>
                                        </div>
                                        <button class="btn btn-sm btn-danger align-center card-footer col-sm-12 " style="float: none!important;" data-toggle="modal" data-target="#deleteVideo{{$video->id_media}}">
                                            Delete
                                        </button>
                                        <div class="modal fade" id="deleteVideo{{$video->id_media}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <form method="post" action="{{ url('/media/delete') }}">
                                                    {{csrf_field()}}
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <input type="text" name="id_media" class="hidden" value="{{$video->id_media}}">
                                                            <font size="4pt">Voulez rellement supprimer cette Video ?</font>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn-group btn-sm btn-danger" type="submit">
                                                                Confirmer
                                                            </button>
                                                            <button class="btn-group btn-sm btn-primary" data-dismiss="modal">
                                                                Annuler
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    <script src="{{url('http://vjs.zendcdn.net/ie8/1.1.2/videojs-ie8.min.js')}}"></script>
    {{Html::script('adminTools/bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/medias/image-gallery.js')}}
    {{Html::script('adminTools/bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
@endsection
<script src="{{url('http://vjs.zendcdn.net/7.6.0/video.js')}}"></script>
