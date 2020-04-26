    <!-- Top Bar -->
    <nav class="navbar bg-yellow">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{url('/image-album#'.$albums->id_album)}}" style="font-family: 'Satisfy',cursive;!important;"><i class="material-icons">reply_all</i>&nbsp; &nbsp;Galerie @if($albums->type_album==='video') Video @else Image @endif Album | {{$albums->nom_album}}</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">photo_album</i>
                            <span class="label-count">{{count($albums->medias)}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>