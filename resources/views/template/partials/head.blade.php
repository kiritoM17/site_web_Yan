<meta charset="utf-8">

<title> @yield('page-title') | AMAFOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/icon-x" href="{{asset('img/logo2.png')}}">
<meta name="description" content="" />
<!-- css -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('plugins/flexslider/flexslider.css')}}" rel="stylesheet" media="screen"/>
<link href="{{url('css/cubeportfolio.min.css')}}" rel="stylesheet" />
<link href="{{url('css/style.css')}}" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="{{url('skins/default.css')}}" rel="stylesheet" />
<!-- boxed bg -->
<link id="bodybg" href="{{url('bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
@yield('custom-css')