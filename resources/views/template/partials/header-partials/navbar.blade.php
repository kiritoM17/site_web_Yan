<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMain">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" style="position: relative;float: left;margin-top: 8px;" href="{{url('/') }}"><img src="{{ url('img/logo.png') }}" alt="" width="150" height="40"></a>
        </div>
        <div class="navbar-collapse collapse" id="navMain">
            <ul class="nav  navbar-nav content-center" style="float:none !important">
                <li class="nav-item {{Route::is('presentation')?'active':''}} "><a class="nav-link"  href="{{route('presentation')}}">PRESENTATION</a></li>
                <li class="nav-item {{Route::is('magazine')?'active':''}}"><a class="nav-link" href="{{route('magazine')}}">MAGAZINE</a></li>
                <li class="nav-item {{Route::is('formation')?'active':''}}"><a class="nav-link" href="{{route('formation')}}">TRAINING</a></li>
                <li class="nav-item {{Route::is('communication')?'active':''}}"><a class="nav-link" href="{{route('communication')}}">MEDIA CITY</a></li>
                <li class="nav-item {{Route::is('event')?'active':''}}"><a class="nav-link" href="{{route('event')}}" >EVENTS</a></li>
                <li class="nav-item {{Route::is('business')?'active':''}}"><a class="nav-link" href="{{route('business')}}">BUSINESS</a></li>
                <li class="nav-item {{Route::is('contact')?'active':''}}"><a class="nav-link" href="{{route('contact')}}">CONTACT</a></li>    
            </ul>
        </div>
    </div>
</div>