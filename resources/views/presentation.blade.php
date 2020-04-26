@extends('template.master_template')
@section('page-title')
    Présentation
@endsection
@section('content-page')
    <div class="row">
        <div class="col-sm-4 col-xs-12 img-responsive">
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
        </div>
    </div>
@endsection