@extends('adminView.index')

@section('title')
    Manage Formation
@endsection

@section('extra-css')
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    {{Html::style('adminTools/bsbmd/css/style.css')}}
    {{Html::style('adminTools/bsbmd/plugins/bootstrap-select/css/bootstrap-select.css')}}
    <style>
        body {
            background: #f2f2f2;
            font-family: 'proxima-nova-soft', sans-serif;
            font-size: 14px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
          }
          .post-module {
            position: relative;
            z-index: 1;
            display: block;
            background: #FFFFFF;
            min-width: 270px;
            height: 470px;
            -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
          }
          .post-module:hover,
          .hover {
            -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
          }
          .post-module:hover .thumbnail img,
          .hover .thumbnail img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            transform: scale(1.1);
            opacity: 0.6;
          }
          .post-module .thumbnail {
            background: #000000;
            height: 400px;
            overflow: hidden;
          }
          .post-module .thumbnail .date {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1;
            background: #d8b100!important;;
            width: 55px;
            height: 55px;
            padding: 12.5px 0;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            color: #FFFFFF;
            font-weight: 700;
            text-align: center;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }
          .post-module .thumbnail .date .day {
            font-size: 18px;
          }
          .post-module .thumbnail .date .month {
            font-size: 12px;
            text-transform: uppercase;
          }
          .post-module .thumbnail img {
            display: block;
            width: 120%;
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
          }
          .post-module .post-content {
            position: absolute;
            bottom: 0;
            background: #FFFFFF;
            width: 100%;
            padding: 30px;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
          }
          .post-module .post-content .category {
            position: absolute;
            top: -34px;
            left: 0;
            background: #d8b100!important;;
            padding: 10px 15px;
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
          }
          .post-module .post-content .title {
            margin: 0;
            padding: 0 0 10px;
            color: #333333;
            font-size: 26px;
            font-weight: 700;
          }
          .post-module .post-content .sub_title {
            margin: 0;
            padding: 0 0 20px;
            color: #d8b100!important;;
            font-size: 20px;
            font-weight: 400;
          }
          .post-module .post-content .description {
            display: none;
            color: #666666;
            font-size: 14px;
            line-height: 1.8em;
          }
          .post-module .post-content .post-meta {
            margin: 30px 0 0;
            color: #999999;
          }
          .post-module .post-content .post-meta .timestamp {
            margin: 0 16px 0 0;
          }
          .post-module .post-content .post-meta a {
            color: #999999;
            text-decoration: none;
          }
          .hover .post-content .description {
            display: block !important;
            height: auto !important;
            opacity: 1 !important;
          }
          .container {
            max-width: 800px;
            min-width: 640px;
            margin: 0 auto;
          }
          .container:before,
          .container:after {
            content: '';
            display: block;
            clear: both;
          }
          .container .column {
            width: 50%;
            padding: 0 25px;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            float: left;
          }
          .container .column .demo-title {
            margin: 0 0 15px;
            color: #666666;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
          }
          .container .info {
            width: 300px;
            margin: 50px auto;
            text-align: center;
          }
          .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
          }
          .container .info span {
            color: #666666;
            font-size: 12px;
          }
          .container .info span a {
            color: #000000;
            text-decoration: none;
          }
          .container .info span .fa {
            color: #d8b100!important;;
          }

    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" data-toggle="modal" data-target="#addActualite">
                <div class="info-box bg-deep-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">border_color</i>
                    </div>
                    <div class="content">
                        <div class="text"><h4>Create new Formation</h4></div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">

            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- Vue -->
        <hr style="color: #0b0b0b;background-color: #0b0b0b">

        <!-- Modal content here-->
        <div class="modal fade" id="addActualite" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title center-block" id="largeModalLabel" >CREATE FORM</h4>
                    </div>
                    <div class="modal-body">
                        <form  method="POST" action="actualite/store" enctype="multipart/form-data">
                            @include('adminView.layouts.event.partials.createEventForm')
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                                <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('extra-script')
    {{Html::script('adminTools/bsbmd/plugins/jquery-countto/jquery.countTo.js')}}
    {{Html::script('adminTools/bsbmd/plugins/tinymce/tinymce.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/profile.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/forms/editors.js')}}
    <script>
        $(window).load(function() {
            $('.post-module').hover(function() {
              $(this).find('.description').stop().animate({
                height: "toggle",
                opacity: "toggle"
              }, 300);
            });
          });
    </script>
    <script>
        $.ajax({
            url: "actualite/getEvenementNumber",
            success: function(result) {
                let evenements= result.resultat;
                for(let i=0; i<evenements.length; i++)
                {
                    ClassicEditor
                        .create( document.querySelector( '#editor'+evenements[i].id_act) )
                        .catch( error => {
                            console.error( error );
                        } );
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editorAdd' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
