@extends('adminView.index')

@section('title')
    Dashboard
@endsection

@section('extra-css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Gestion des Adminstrateur</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-toggle="modal" data-target="#addAdmin">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Add New Administrateur</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
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
        <!-- #END# Widgets -->
        <!-- Vue -->
        <hr style="color: #0b0b0b;background-color: #0b0b0b">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            Albume Title <small> album Description text here...</small>
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
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="../../images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3>Marc K. Hammond</h3>
                        <p>Web Software Developer</p>
                        <p>Administrator</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Followers</span>
                            <span>1.234</span>
                        </li>
                        <li>
                            <span>Following</span>
                            <span>1.201</span>
                        </li>
                        <li>
                            <span>Friends</span>
                            <span>14.252</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal content here-->
        <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title center-block" id="largeModalLabel" >CREATE NEW ADMINISTRATEUR ALBUM FORM</h4>
                    </div>
                    <div class="modal-body">
                    {!! Form::open(['url' => '/admin/storer','method' => 'GET'])!!}
                    {!! csrf_field !!}
                                              <label for="email_address">Pseudo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="pseudo" class="form-control" placeholder="album name">
                                </div>
                            </div>
                            <label for="password">Privilege</label>
                            <div class="form-group">
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
                        {!! Form::close()!!}
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
    {{Html::script('adminTools/bsbmd/js/pages/index.js')}}

@endsection