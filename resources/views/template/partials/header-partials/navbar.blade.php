<div class="navbar navbar-default navbar-static-top" style="background: linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(22,4,80,1) 61%, rgba(110,31,46,1) 81%) !important;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav center-block pull-left">
                <li {{Route::is('presentation')?'class=active':''}}><a href="{{route('presentation')}}">PRESENTATION</a></li>
                <li {{Route::is('magazine')?'class=active':''}}><a href="{{route('magazine')}}">MAGAZINE</a></li>
                <li {{Route::is('formation')?'class=active':''}}><a href="{{route('formation')}}">FORMATION</a></li>
                <li {{Route::is('communication')?'class=active':''}}><a href="{{route('communication')}}">MEDIA CITY</a></li>
                <li {{Route::is('event')?'class=active':''}}><a href="{{route('event')}}" >EVENTS</a></li>
                <li {{Route::is('business')?'class=active':''}}><a href="{{route('business')}}">BUSINESS</a></li>
                <li><a href="#">CONTACT</a></li>
                
            </ul>
        </div>
    </div>
</div>