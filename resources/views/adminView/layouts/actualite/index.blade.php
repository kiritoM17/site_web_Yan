@extends('adminView.index')

@section('title')
    Actualite & Evenement
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
                        <div class="text"><h4>New Actualite</h4></div>
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
        <div class="row clearfix">
            @foreach ($actualites as $act)
                <div class="col-xs-6 col-sm-6" style="margin-bottom:2.5% !important">
                    <div class="container">
                        <div class="column">
                          <!-- Post-->
                          <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                              <div class="date">
                                <div class="day">{{ $act->date_pub_act->format('d') }}</div>
                                <div class="month">{{ $act->date_pub_act->format('M') }}</div>
                              </div>
                                    <img src="@if(count($act->albums->medias)>0){{asset('storage/'.$act->albums->medias[0]->nom_media)}}@endif"/>
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                              <div class="category">
                                  {{ $act->typeActualite->titre_type_actualite }}
                                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">
                                              <i class="material-icons">more_vert</i>
                                          </a>
                                          <ul class="dropdown-menu pull-right">
                                              <li data-toggle="modal" data-target="#addImage{{$act->id_act}}"><a href="javascript:void(0);"><span class="hidden-xs">Add Images</span><i class="material-icons" style="color: orangered !important" >add_a_photo</i></a></li>
                                              <li data-toggle="modal" data-target="#editActualite{{$act->id_act}}"><a href="javascript:void(0);"><span class="hidden-xs">Modifier</span><i class="material-icons" style="color: orangered !important">edit</i></a></li>
                                              <li><a href="javascript:void(0);"><span class="hidden-xs">Suprimer</span><i class="material-icons" style="color: orangered !important">delete</i></a></li>
                                              <li><a href="javascript:void(0);"><span class="hidden-xs">Partager</span><i class="material-icons" style="color: orangered !important">share</i></a></li>
                                          </ul>
                              </div>
                              <h1 class="title align-center">{{ $act->titre_act }}</h1>
                              <div class="description description-act">{!! $act->resume_act!!}</div>
                                <div class="post-meta align-center">
                                    <a href="{{url('actualite/getActualiteAdminById/'.$act->id_act)}}" class="btn btn-xs bg-deep-orange">
                                        <i class="material-icons" style="color: white !important;">visibility</i><span style="color: white !important;"> Previsualiser</span>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editActualite{{$act->id_act}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title center-block" id="largeModalLabel" >Mise Ajour Actualite / Evenement </h4>
                            </div>
                            <div class="modal-body">
                                <form  method="POST" action="actualite/update">
                                    {{csrf_field()}}
                                    <label for="titre_act">Titre</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{$act->titre_act}}" name="titre_act" class="form-control" placeholder="Titre Actualite">
                                        </div>
                                    </div>
                                    <label for="id_parent">Type Action</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select  name="id_type_actualite" class="form-control">
                                                <option>---Selectionner un type d'action s'il vous plaît---</option>
                                                @foreach(App\Models\TypeActualite::orderBy('titre_type_actualite')->get() as $type_act)
                                                    <option value="{{$type_act->id_type_actualite}}">{{$type_act->titre_type_actualite}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <label for="type_act">Resume Actualite</label>
                                    <div class="form-group ">
                                        <div class="form-line">
                                            <input type="text" name="resume_act" class="form-control " maxlength="100" value="{{$act->resume_act}}">
                                        </div>
                                    </div>
                                    <label for="description_act">Description</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea id="editor{{$act->id_act}}" name="description_act" class="form-control" cols="45" rows="10">
                                                {{ $act->description_act }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <input class="hidden" type="text" name="id_act" value="{{$act->id_act}}">
                                    <input class="hidden" type="text" name="id_album" value="{{$act->id_album}}">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addImage{{$act->id_act}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title center-block" id="largeModalLabel" >ADD IMAGE TO ALBUM </h4>
                            </div>
                            <div class="modal-body">
                                <form id="frmFileUpload"  method="POST" enctype="multipart/form-data" class="dropzone" action="media/store">
                                    {{csrf_field()}}
                                    <label for="email_address">{{$act->albums->nom_album}}</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="id_album" class="form-control  hidden" value="{{$act->albums->id_album}}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="dz-message">
                                        <div class="drag-icon-cph">
                                            <i class="material-icons">touch_app</i>
                                        </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                    </div>
                                    <div class="fallback">
                                        <input name="images_medias[]" type="file" multiple />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $actualites->links() }}
            </div>
        <!-- Modal content here-->
        <div class="modal fade" id="addActualite" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title center-block" id="largeModalLabel" >CREATE FORM</h4>
                    </div>
                    <div class="modal-body">
                        <form  method="POST" action="actualite/store" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="titre_act">Titre</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="titre_act" class="form-control" placeholder="album name">
                                </div>
                            </div>
                            <label for="id_parent">Type Action</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select  name="id_type_actualite" class="form-control">
                                                <option>---Selectionner un type d'action s'il vous plaît---</option>
                                                @foreach(App\Models\TypeActualite::orderBy('titre_type_actualite')->get() as $type_act)
                                                    <option value="{{$type_act->id_type_actualite}}">{{$type_act->titre_type_actualite}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            <label for="type_act">Resume Actualite</label>
                            <div class="form-group  ">
                                <div class="form-line">
                                    <input type="text" name="resume_act" class="form-control  " maxlength="100" placeholder="resume Article" >
                                </div>
                            </div>

                            <label for="images_actualite">Image de Couverture</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="images_actualite[]" class="form-control" required>
                                </div>
                            </div>
                            <label for="description_act">Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea id="editorAdd" name="description_act" class="form-control" cols="45" rows="10"></textarea>
                                </div>
                            </div>

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
