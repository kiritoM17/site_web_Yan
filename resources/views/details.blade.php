@extends('template.master_template')
@section('page-title')
    {{$pub->title_pub}}
@endsection
@section('custom-css')
{{Html::style('adminTools/bsbmd/plugins/animate-css/animate.css')}}
    {{Html::style('adminTools/bsbmd/plugins/light-gallery/css/lightgallery.css')}}
@endsection
@section('content-page')
<div class="row">
    <center>
        <ol class="breadcrumb">
        <li><a href="{{route($pub->typePublications->title_type_pub)}}" style="color:#fff !important">{{$pub->typePublications->title_type_pub}}</a></li>
        <li><a class="active" style="color:#fff !important">{{$pub->title_pub}}</a></li>
        
      </ol>
    </center>
</div>

@if($pub->id_type_pub==1 || $pub->id_type_pub==2)
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12 img-responsive">
        <img class="img-view thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif">
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12" style="padding-left:30px !important">
        <div class="row">
            <div class="col-sm-12 center-block" style="float: none">
                <h3 class="text-center"> {!! $pub->title_pub!!}</h3>
            </div>
        </div>
        <div class="row">
            <div>
                <button class="btn btn-sm btn-danger">Theme :</button> {{$pub->theme_pub}}&nbsp;&nbsp; <span> Edition N {{$pub->edition_pub}}<span>
            </div>
            <div>
                <button class="btn btn-sm btn-danger">To</button> {{$pub->start_date_pub->format('Y-M-d')}} <button class="btn btn-sm btn-danger">At</button> {{$pub->end_date_pub->format('Y-M-d')}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block description-act">
                {!! $pub->description_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 floatright center-block">
                <p><span >Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-4 col-xs-12">
        <img class="img-view thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif">
    </div>
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12 center-block" style="float: none">
                <h3 class="text-center"> {!! $pub->title_pub!!}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block description-act">
                {!! $pub->description_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 floatright center-block">
                <p ><span >Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
            </div>
        </div>
    </div>
</div>
@endif
@if(count($pub->albums->medias)>1)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header align-center">
                        <center><h3>Galery Photos</h3></center>
                    </div>
                    <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    @foreach($pub->albums->medias as $photo)
                                    @if($photo->mime_type=='image'||$photo->mime_type=='image/png')
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="">
                                                <a href="{{asset('storage/'.$photo->nom_media)}}" data-sub-html="IMAGE ANAFOR ">
                                                   <center><img class="thumbnail" src="{{asset('storage/'.$photo->nom_media)}}" style="width: 200px !important; height: 200px !important;"></center>
                                                </a>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        @endif
@endsection
@section('custom-script')
{{Html::script('adminTools/bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
{{Html::script('adminTools/bsbmd/js/pages/medias/image-gallery.js')}}
{{Html::script('adminTools/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
@endsection