<!-- Top Bar -->
<nav class="navbar bg-purple">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{url('/agenda-evenement#'.$actualites->id_act)}}" style="font-family: 'Satisfy',cursive;!important;">
                <i class="material-icons">reply_all</i>&nbsp; &nbsp; AltedCross
                @if($actualites->type_act=='actualite')
                    Actualite | {{$actualites->titre_act}}
                @else
                    Evenement|{{$actualites->titre_act}}
                @endif
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">photo_album</i>
                        <span class="label-count">{{count($actualites->albums->medias)}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>