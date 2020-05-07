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
    <div class="col-sm-12 col-md-4 col-lg-4">
       <center><img class="thumbnail" width="250" height="250" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif"></center>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8 detail-text">
        <div class="row">
            <div class="col-sm-12 center-block" style="float: none">
                <h2 class="text-center"> {!! $pub->title_pub!!}</h2>
            </div>
        </div>
        <div class="row">
            <h3>THEME: {{$pub->theme_pub}}</h3>
        </div>
        <div class="row">
            <h5>Edition: <span class="badge badge-success">{{$pub->edition_pub}}</span>  Estimated Time <span class="badge badge-success">3 Months</span> Location: <span class="badge badge-success">Atlanta-GA</span> Amount: <span class="badge badge-success">$950 USD</span></h5>
        </div>
        <div class="row">
            <div class="btn-group pull-right">
                <button  style="background: none !important; border:3px solid #fff !important" data-toggle="modal" data-target="#descriptionModal"><a style="color:#fff !important">Description</a></button>
                <button  style="background: none !important; border:3px solid #fff !important" data-toggle="modal" data-target="#trackModal"><a style="color:#fff !important">Tracks</a></button>
                <button  style="background: none !important; border:3px solid #fff !important"><a href="@foreach($pub->albums->medias as $media)
                    @if($media->mime_type =='registerForm')
                    {{asset('storage/'.$media->nom_media)}}
                    @break
                    @endif
                   @endforeach" style="color:#fff !important">Inscription</a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block description-act">
                {!! $pub->description_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 floatright center-block">
                <p><span>Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4">
        <center><img class="thumbnail" width="250" height="250" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif"></center>
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

        <!--modal section-->
        <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: #01102C;
                background: -webkit-radial-gradient(bottom right, #01102C, #2B020A);
                background: -moz-radial-gradient(bottom right, #01102C, #2B020A);
                background: radial-gradient(to top left, #01102C, #2B020A);">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">download Description</h4>
                    </div>
                    <div class="modal-body">
                        <center><embed src="
                            @foreach($pub->albums->medias as $media)
                             @if($media->mime_type =='syllabus')
                             {{asset('storage/'.$media->nom_media)}}
                             @break
                             @endif
                            @endforeach" width="500" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></center>
                    </div>
                    <div class="modal-footer">
                     <span class="input-group-btn">
                        <button href="" data-dismiss="modal" type="button" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important">Close</button>
                         <button href="" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important"><a href="
                            @foreach($pub->albums->medias as $media)
                             @if($media->mime_type =='syllabus')
                             {{asset('storage/'.$media->nom_media)}}
                             @break
                             @endif
                            @endforeach" style="color:#fff !important;">DOWNLOAD</a></button>
                     </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="trackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: #01102C;
                background: -webkit-radial-gradient(bottom right, #01102C, #2B020A);
                background: -moz-radial-gradient(bottom right, #01102C, #2B020A);
                background: radial-gradient(to top left, #01102C, #2B020A);">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">download Track</h4>
                    </div>
                    <div class="modal-body">
                        <center><embed src="
                            @foreach($pub->albums->medias as $media)
                             @if($media->mime_type =='track')
                             {{asset('storage/'.$media->nom_media)}}
                             @break
                             @endif
                            @endforeach" width="500" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></center>
                    </div>
                    <div class="modal-footer">
                     <span class="input-group-btn">
                        <button href="" data-dismiss="modal" type="button" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important">Close</button>
                         <button href="" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important"><a href="
                            @foreach($pub->albums->medias as $media)
                             @if($media->mime_type =='track')
                             {{asset('storage/'.$media->nom_media)}}
                             @break
                             @endif
                            @endforeach" style="color:#fff !important;">DOWNLOAD</a></button>
                     </span>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('custom-script')
{{Html::script('adminTools/bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
{{Html::script('adminTools/bsbmd/js/pages/medias/image-gallery.js')}}
{{Html::script('adminTools/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
@endsection