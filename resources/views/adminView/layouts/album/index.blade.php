@extends('adminView.index')

@section('title')
    GESTION ALBUM
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/plugins/bootstrap-select/css/bootstrap-select.css')}}
    {{Html::style('adminTools/bsbmd/plugins/dropzone/dropzone.css')}}
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" data-toggle="modal" data-target="#largeModal">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">library_add</i>
                </div>
                <div class="content">
                    <div class="text"> <h3>New Album</h3></div>
                    <div class="number count-to" data-from="0" data-to="{{count($albums)}}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 hidden-xs">
        </div>
    </div>
    <hr style="color: #0b0b0b;background-color: #0b0b0b">
    <div class="row clearfix">
        @foreach($albums as $album)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            {{$album->nom_album}}<small>{{$album->visibilite_album}}</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li data-toggle="modal" data-target="#addImage{{$album->id_album}}"><a href="javascript:void(0);"><span class="hidden-xs">Ajouter @if($album->type_album==='video')Video </span><i class="material-icons" style="color: orangered !important" >duo</i> @else Images </span><i class="material-icons" style="color: orangered !important" >add_a_photo</i>@endif </a></li>
                                    <li><a href="javascript:void(0);"><span class="hidden-xs">Modifier</span><i class="material-icons" style="color: orangered !important">edit</i></a></li>
                                    <li data-toggle="modal" data-target="#deleteAlbum{{$album->id_album}}"><a href="javascript:void(0);"><span class="hidden-xs">Suprimer</span><i class="material-icons" style="color: orangered !important">delete</i></a></li>
                                    <li><a href="javascript:void(0);"><span class="hidden-xs">Partager</span><i class="material-icons" style="color: orangered !important">share</i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                       <a href="album/getImageAlbumAdmin/{{$album->id_album}}">
                           @if(count($album->medias)>0)
                               @if($album->type_album==='video')
                                   <img src="{{asset('assets/img/logo1.png')}}" alt="img garde album {{$album->nom_album}}" style="width: 100% !important; height: 200px !important;" class="align-center">
                                   @else
                               <img src="{{asset('storage/'.$album->medias[0]->nom_media)}}" alt="img garde album {{$album->nom_album}}" style="width: 100% !important; height: 200px !important;" class="align-center">
                               @endif
                           @else
                               <font SIZE="4pt" style="width: 100%; height: 100%"> Aucune image disponible pour cet album actuellement</font>
                           @endif
                       </a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addImage{{$album->id_album}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title center-block" id="largeModalLabel" >ADD IMAGE TO ALBUM </h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmFileUpload"  method="POST" enctype="multipart/form-data" class="dropzone" action="media/store">
                                {{csrf_field()}}
                                <label for="email_address">{{$album->nom_album}}</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="id_album" class="form-control hidden" value="{{$album->id_album}}">
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
            <div class="modal fade" id="deleteAlbum{{$album->id_album}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form  method="POST" action="album/delete">
                                {{csrf_field()}}
                                <font size="4pt">Voulez vous supprimer l'album  {{$album->nom_album}} ?</font>
                                        <input type="text" name="id_album" class="form-control hidden" value="{{$album->id_album}}">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">Confirmer</button>
                                    <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$albums->links()}}
    </div>
    <!-- Modal content here-->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title center-block" id="largeModalLabel" >CREATE NEW ALBUM FORM</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="album/store">
                        {{csrf_field()}}
                        <label for="nom_album">Nom </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nom_album" class="form-control" placeholder="album name">
                            </div>
                        </div>
                        <label for="type_album">Type</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="type_album" class="form-control">
                                    <option value="">-----//-----</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div>
                        <label for="visibilite_abum">Visibilite de l Album</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="visibilite_abum" class="form-control">
                                    <option value="">-----//-----</option>
                                    <option value="public">publique</option>
                                    <option value="prive">prive</option>
                                </select>
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

    <!-- End Modal Content-->

@endsection

@section('extra-script')
   <!-- {{Html::script('adminTools/bsbmd/plugins/dropzone/dropzone.js')}}-->
    {{Html::script('adminTools/js/pages/forms/advanced-form-elements.js')}}
    {{Html::script('adminTools/js/demo.js')}}

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>




@endsection
