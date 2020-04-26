@extends('adminView.index')

@section('title')
    GESTION ALBUM
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/plugins/dropzone/dropzone.css')}}
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-toggle="modal" data-target="#largeModal">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">library_add</i>
                </div>
                <div class="content">
                    <div class="text"> ADD New Album</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

        </div>

    </div>
    <hr style="color: #0b0b0b;background-color: #0b0b0b">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        Album Title <small> album Description text here...</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li data-toggle="modal" data-target="#addImage"><a href="javascript:void(0);"><span class="hidden-xs">Ajouter Images</span><i class="material-icons" style="color: orangered !important" >add_a_photo</i></a></li>
                                <li><a href="javascript:void(0);"><span class="hidden-xs">Modifier</span><i class="material-icons" style="color: orangered !important">edit</i></a></li>
                                <li><a href="javascript:void(0);"><span class="hidden-xs">Suprimer</span><i class="material-icons" style="color: orangered !important">delete</i></a></li>
                                <li><a href="javascript:void(0);"><span class="hidden-xs">Partager</span><i class="material-icons" style="color: orangered !important">share</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    dfdgcghnbm,n.....................kljjgj
                    fghfghhgjgjkjgkhjbkhjkgh
                    jgh
                    jghj
                    ghjgh
                </div>
            </div>
        </div>
    </div>
    <!-- Modal content here-->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title center-block" id="largeModalLabel" >CREATE NEW ALBUM FORM</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="email_address">Nom de L'Album</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nom_album" class="form-control" placeholder="album name">
                            </div>
                        </div>
                        <label for="password">Type Album</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="type_album" class="form-control">
                                    <option value="">-----//-----</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div>

                        <label for="password">Visibilite de l'Album</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="visibilite_abum" class="form-control">
                                    <option value="">-----//-----</option>
                                    <option value="public">publique</option>
                                    <option value="prive">prive</option>
                                </select>
                            </div>
                        </div>
                    </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="addImage" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title center-block" id="largeModalLabel" >ADD IMAGE TO ALBUM </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="email_address">Nom de L'Album</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nom_album" class="form-control" placeholder="album name">
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
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Content-->

@endsection

@section('extra-script')
    {{Html::script('adminTools/bsbmd/plugins/dropzone/dropzone.js')}}
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