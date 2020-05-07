<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMain">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="{{url('/') }}"><h5 style="color:#fff !important">MASSORA ACADEMIQUE</h5></a>
        </div>
        <div class="navbar-collapse collapse" id="navMain">
            <ul class="nav  navbar-nav content-center">
                <li class="nav-item {{Route::is('presentation')?'active':''}} "><a class="nav-link"  href="{{route('presentation')}}"><h5>PRESENTATION</h5></a></li>
                <li class="nav-item {{Route::is('magazine')?'active':''}}"><a class="nav-link" href="{{route('magazine')}}"><h5>MAGAZINE</h5></a></li>
                <li class="nav-item {{Route::is('formation')?'active':''}}"><a class="nav-link" href="{{route('formation')}}"><h5>FORMATION</h5></a></li>
                <li class="nav-item {{Route::is('communication')?'active':''}}"><a class="nav-link" href="{{route('communication')}}"><h5>MEDIA CITY</h5></a></li>
                <li class="nav-item {{Route::is('event')?'active':''}}"><a class="nav-link" href="{{route('event')}}" ><h5>EVENTS</h5></a></li>
                <li class="nav-item {{Route::is('business')?'active':''}}"><a class="nav-link" href="{{route('business')}}"><h5>BUSINESS</h5></a></li>
                <li class="nav-item {{Route::is('contact')?'active':''}}"><a class="nav-link" href="{{route('contact')}}"><h5>CONTACT</h5></a></li>    
            </ul>
        </div>
    </div>
</div>