@extends('adminView.index')

@section('title')
    GESTION Partenaires Et Sponsors
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
                <div class="text"> <h3>New Partenaire</h3></div>
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
    @foreach($partenaires as $partenaire)
        <div class="col-xs-6 col-sm-4">
            <div class="card profile-card">
                <div class="profile-header">
                    <div class="image-area align-center thumbnail">
                        <img src="@if(count($partenaire->albums->medias)>0){{asset('storage/'.$partenaire->albums->medias[0]->nom_media)}}@endif" style="width:300px !important; height:200px !important" />
                    </div>
                </div>
                <div class="profile-body">
                    <div class="content-area align-center">
                        <h3 class="align-center">{{$partenaire->nom_partenaire}}</h2>
                        @if($partenaire->site_internet_partenaire !== NULL)<a href="{{$partenaire->site_internet_partenaire}}" class="btn btn-sm btn-success" target="_blank">Visiter le site Internet</a>@else <a href="{{$partenaire->site_internet_partenaire}}" class="btn btn-sm btn-warning" target="_blank">Site Internet non défini</a>@endif
                        <p></p>
                    </div>
                </div>
                <div class="profile-footer">
                    <button class="btn btn-danger btn-lg waves-effect btn-block" data-toggle="modal" data-target="#deleteConfirm{{$partenaire->id_partenaire}}">Delete</button>
                    <button class="btn btn-primary btn-lg waves-effect btn-block" data-toggle="modal" data-target="#updateConfirm{{$partenaire->id_partenaire}}">Edit</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteConfirm{{$partenaire->id_partenaire}}" tabindex="-1" role="dialog">
            <form method="POST" action="partenaire/delete">
                {{csrf_field()}}
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                    <input type="number" value="{{$partenaire->id_partenaire}}" name="id_partenaire" class="hidden">
                        <h3>Voulez-vous supprimer le Patenaire {{$partenaire->nom_partenaire}}</h3>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">Confirmer</button>
                            <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>

        <div class="modal fade" id="updateConfirm{{$partenaire->id_partenaire}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title center-block" id="largeModalLabel" >CREATE New Partenaire</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="partenaire/edit">
                            {{csrf_field()}}
                            <label for="nom_partenaire">Nom Partenaire</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" value="{{$partenaire->nom_partenaire}}" name="nom_partenaire" class="form-control" placeholder="Nom partenaire" maxlength="100">
                                </div>
                            </div>
                            <label for="site_internet_partenaire">Site Internet (facultatif)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$partenaire->site_internet_partenaire}}" name="site_internet_partenaire" class="form-control" placeholder="Site internet" maxlength="250">
                                </div>
                            </div>
                            <label for="desciption_partenaire">Description du partenaire</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$partenaire->desciption_partenaire}}" name="desciption_partenaire" class="form-control" placeholder="Site internet" maxlength="250">
                                </div>
                            </div>
                            <input type="number" value="{{$partenaire->id_partenaire}}" name="id_partenaire" class="hidden">
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
    {{ $partenaires->links() }}
</div>


<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center-block" id="largeModalLabel" >CREATE New Partenaire</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="partenaire/store" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="nom_partenaire">Nom Partenaire</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nom_partenaire" class="form-control" placeholder="Nom partenaire" maxlength="100">
                        </div>
                    </div>
                    <label for="logo_partenaire">Image de Couverture</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input  type="file" name="logo_partenaire" required>
                         </div>
                    </div>
                    <label for="site_internet_partenaire">Site Internet (facultatif)</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="site_internet_partenaire" class="form-control" placeholder="Site internet" maxlength="250">
                        </div>
                    </div>
                    <label for="desciption_partenaire">Description du partenaire</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="desciption_partenaire" class="form-control" placeholder="Site internet" maxlength="250">
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
@endsection
@section('extra-script')
{{Html::script('adminTools/bsbmd/plugins/jquery-countto/jquery.countTo.js')}}
{{Html::script('adminTools/bsbmd/plugins/tinymce/tinymce.js')}}
{{Html::script('adminTools/bsbmd/js/pages/profile.js')}}
{{Html::script('adminTools/bsbmd/js/pages/forms/editors.js')}}

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