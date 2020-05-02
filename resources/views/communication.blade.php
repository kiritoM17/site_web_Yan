@extends('template.master_template')
@section('page-title')
    Communication
@endsection
@section('content-page')
@if(count($media_city)>0)
@foreach ($media_city as $pub)
@if ($pub->status_pub !== 'delete')
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
                {!! $pub->resume_pub!!}
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
@endforeach
{{ $media_city->links() }}
@endif
@endsection