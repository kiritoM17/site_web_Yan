<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse center-block">
            <ul class="nav  navbar-nav content-center" style="width:100% !important;">
                <li class="nav-item {{Route::is('presentation')?'active':''}} "><a class="nav-link" href="{{route('presentation')}}">PRESENTATION</a></li>
                <li class="nav-item {{Route::is('magazine')?'active':''}}"><a class="nav-link" href="{{route('magazine')}}">MAGAZINE</a></li>
                <li class="nav-item {{Route::is('formation')?'active':''}}"><a class="nav-link" href="{{route('formation')}}">FORMATION</a></li>
                <li class="nav-item {{Route::is('communication')?'active':''}}"><a class="nav-link" href="{{route('communication')}}">MEDIA CITY</a></li>
                <li class="nav-item {{Route::is('event')?'active':''}}"><a class="nav-link" href="{{route('event')}}" >EVENTS</a></li>
                <li class="nav-item {{Route::is('business')?'active':''}}"><a class="nav-link" href="{{route('business')}}">BUSINESS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
                
            </ul>
        </div>
    </div>
</div>