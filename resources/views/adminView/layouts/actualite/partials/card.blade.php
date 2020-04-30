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