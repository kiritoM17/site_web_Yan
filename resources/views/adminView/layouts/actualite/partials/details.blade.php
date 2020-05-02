@extends('adminView.index')

@section('title')
    Media
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/plugins/animate-css/animate.css')}}
    {{Html::style('adminTools/bsbmd/plugins/light-gallery/css/lightgallery.css')}}
@endsection

@section('content')
    <div class="container-fluid " style="color:#333 !important">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3 style="color: #DE5E60; border-bottom: #DE5E60 1px solid;" class="align-center">{{$actualites->title_pub}}</h3>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <img src="{{asset('storage/'.$actualites->albums->medias[0]->nom_media)}}" style="width: 100% !important; height: 300px !important;" class="img-responsive">
                            </div>
                            <div class="col-sm-8 col-md-8 col-xs-12">
                                <div class="row" style="width: 100% !important;color:#333 !important">
                                    {!! $actualites->description_pub !!}
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
                        <h4 style="color: #DE5E60; border-bottom: #DE5E60 1px solid;">Galerie Photos</h4>
                    </div>
                    <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    @foreach($actualites->albums->medias as $photo)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card">
                                            <div class="card-body">
                                                <a href="{{asset('storage/'.$photo->nom_media)}}" data-sub-html="IMAGE ANAFOR ">
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

                            </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('extra-script')
    {{Html::script('adminTools/bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/medias/image-gallery.js')}}
    {{Html::script('adminTools/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
@endsection