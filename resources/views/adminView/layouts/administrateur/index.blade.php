@extends('adminView.index')

@section('title')
    Dashboard
@endsection

@section('extra-css')
    {{Html::style('adminTools/bsbmd/css/style.css')}}
    {{Html::style('adminTools/bsbmd/plugins/bootstrap-select/css/bootstrap-select.css')}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Gestion des Adminstrateurs</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" data-toggle="modal" data-target="#addAdmin">
                <div class="info-box bg-light-blue hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text"><h4>Add New Administrateur</h4></div>
                        </i><div class="number count-to" data-from="0" data-to="{{count($admins)}}" data-speed="1000" data-fresh-interval="20"></div>
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
            @foreach($admins as $user)
                <div class="col-xs-6 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">
                            <div class="image-area align-center">
                                <img src="img/avatar.png" alt="AdminBSB - Profile Image" />
                            </div>
                        </div>
                        <div class="profile-body">
                            <div class="content-area align-center">
                                <h3>{{$user->pseudo}}</h3>
                                <p>{{$user->privilege}}</p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <button class="btn btn-danger btn-lg waves-effect btn-block" data-toggle="modal" data-target="#deleteConfirm{{$user->id_admin}}">Delete</button>
                            <button class="btn btn-primary btn-lg waves-effect btn-block">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="deleteConfirm{{$user->id_admin}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <h3>Voulez-vous supprimer l'administrateur {{$user->pseudo}}</h3>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">Confirmer</button>
                                    <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$admins->links()}}
        </div>
        <!-- Modal content here-->
        <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title center-block" id="largeModalLabel" >CREATE NEW ADMINISTRATEUR FORM</h4>
                    </div>
                    <div class="modal-body">
                        <form  method="POST" action="admin/storer">
                            {{csrf_field()}}
                            <label for="email_address">Pseudo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="pseudo" class="form-control" placeholder="album name">
                                </div>
                            </div>
                            <label for="password">Privilege</label>
                            <div class="form-group contact2-form validate-form">
                                <div class="form-line">
                                    <select name="privilege" class="form-control">
                                        <option value="">-----//-----</option>
                                        <option value="administrateur">Administrateur</option>
                                        <option value="redacteur">Redacteur</option>
                                    </select>
                                </div>
                            </div>
                            <label for="password">Mot de Passe</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="password" class="form-control">
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
    {{Html::script('adminTools/bsbmd/plugins/raphael/raphael.min.js')}}
    {{Html::script('adminTools/bsbmd/plugins/morrisjs/morris.js')}}
    {{Html::script('adminTools/bsbmd/plugins/chartjs/Chart.bundle.js')}}
    {{Html::script('adminTools/bsbmd/plugins/flot-charts/jquery.flot.js')}}
    {{Html::script('adminTools/bsbmd/plugins/flot-charts/jquery.flot.resize.js')}}
    {{Html::script('adminTools/bsbmd/plugins/flot-charts/jquery.flot.pie.js')}}
    {{Html::script('adminTools/bsbmd/plugins/flot-charts/jquery.flot.categories.js')}}
    {{Html::script('adminTools/bsbmd/plugins/flot-charts/jquery.flot.time.js')}}
    {{Html::script('adminTools/bsbmd/plugins/jquery-sparkline/jquery.sparkline.js')}}
    {{Html::script('adminTools/bsbmd/js/pages/profile.js')}}

@endsection