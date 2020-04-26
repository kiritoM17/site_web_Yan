@extends('adminView.index')

@section('title')
    GESTION TYPE ACTUALITE
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/plugins/bootstrap-select/css/bootstrap-select.css')}}
    {{Html::style('adminTools/bsbmd/plugins/dropzone/dropzone.css')}}
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-toggle="modal" data-target="#largeModal">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">library_add</i>
                </div>
                <div class="content">
                    <div class="text"> <h3>New Type Actualite</h3></div>
                   <!-- <div class="number count-to" data-from="0" data-to="" data-speed="15" data-fresh-interval="20"></div>-->
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
            <div class="col-xs-6 col-sm-4">
                <div class="card profile-card">
                    <div class="profile-header">
                        <h3 class="align-center">designation</h2>
                    </div>
                    <div class="profile-body">
                        <div class="content-area align-center">
                            <p>description</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <button class="btn btn-danger btn-lg waves-effect btn-block" data-toggle="modal" data-target="#deleteConfirm">Delete</button>
                        <button class="btn btn-primary btn-lg waves-effect btn-block" data-toggle="modal" data-target="#updateConfirm">Edit</button>
                    </div>
                </div>
            </div>
    </div>
   
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title center-block" id="largeModalLabel" >CREATE NEW ALBUM FORM</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="typeActualite/store">
                        {{csrf_field()}}
                        <label for="titre_type_actualite">Titre Type Actualite</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="titre_type_actualite" class="form-control" placeholder="Titre Type Actualite" maxlength="100">
                            </div>
                        </div>
                        <label for="description_type_actualite">Description Type Actualite</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="description_type_actualite" class="form-control" placeholder="Description Type Actualite" maxlength="250">
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
