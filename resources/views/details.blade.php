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
    <div class="col-sm-4 col-xs-12 img-responsive">
        <img class="img-responsive thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif" style="width: 100% !important; height: 300px !important;">
    </div>
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12 center-block" style="float: none">
                <h4 style="font-family: 'Satisfy', cursive;border-bottom: 0px solid;margin-bottom: 0px;margin-bottom: 3%" class="text-center"> {!! $pub->title_pub!!}</h4>
            </div>
        </div>
        <div class="row">
            <p> <button class="btn btn-sm btn-danger">Theme :</button> {{$pub->theme_pub}}&nbsp;&nbsp; <span> Edition N {{$pub->edition_pub}}<span></p>

            <p><button class="btn btn-sm btn-danger">To</button> {{$pub->start_date_pub->format('Y-M-d')}} <button class="btn btn-sm btn-danger">At</button> {{$pub->end_date_pub->format('Y-M-d')}} </p>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block description-act" style="font-size: 12px !important;">
                {!! $pub->description_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 floatright center-block">
                <p style="color:#fff ;font-size:9px!important;"><span style="text-decoration: #fff underline;font-weight: bold !important;">Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-4 col-xs-12 img-responsive">
        <img class="img-responsive thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif" style="width: 100% !important; height: 300px !important;">
    </div>
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12 center-block" style="float: none">
                <h4 style="font-family: 'Satisfy', cursive;border-bottom: 0px solid;margin-bottom: 0px;margin-bottom: 3%" class="text-center"> {!! $pub->title_pub!!}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block description-act" style="font-size: 12px !important;">
                {!! $pub->description_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 floatright center-block">
                <p style="color:#fff ;font-size:9px!important;"><span style="text-decoration: #fff underline;font-weight: bold !important;">Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
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
                        <center><h2 style="color: #fff; border-bottom: #fff 1px solid;">Galery Photos</h2></center>
                    </div>
                    <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    @foreach($pub->albums->medias as $photo)
                                    @if($photo->mime_type=='image'||$photo->mime_type=='image/png')
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card">
                                            <div class="card-body">
                                                <a href="{{asset('storage/'.$photo->nom_media)}}" data-sub-html="IMAGE ANAFOR ">
                                                    <img class="img-responsive thumbnail" src="{{asset('storage/'.$photo->nom_media)}}" style="width: 100% !important; height: 200px !important;">
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