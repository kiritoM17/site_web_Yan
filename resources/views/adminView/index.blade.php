<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ANAFOR Admin|@yield('title') </title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="adminTools/image/x-icon">

    <!-- Bootstrap Core Css -->
    @section('css')
        {{ Html::style('adminTools/bsbmd/plugins/bootstrap/css/bootstrap.css') }}
        {{ Html::style('adminTools/bsbmd/plugins/node-waves/waves.css') }}
        {{ Html::style('adminTools/bsbmd/plugins/animate-css/animate.css') }}
        {{ Html::style('adminTools/bsbmd/plugins/morrisjs/morris.css') }}
        {{ Html::style('adminTools/bsbmd/css/style.css') }}
        {{ Html::style('adminTools/bsbmd/css/themes/all-themes.css') }}
        {{ Html::style('css/limit-text.css') }}

         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @show

    @yield('extra-css')
</head>
<body class="theme-red">
    @include('adminView.layouts.partials.header')
    @include('adminView.layouts.partials.sidebar')
    <section class="content">
        @yield('content')
    </section>

    @section('script')
        {{Html::script('adminTools/bsbmd/plugins/jquery/jquery.min.js')}}
        {{Html::script('adminTools/bsbmd/plugins/bootstrap/js/bootstrap.js')}}
        {{Html::script('adminTools/bsbmd/plugins/bootstrap-select/js/bootstrap-select.js')}}
        {{Html::script('adminTools/bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
        {{Html::script('adminTools/bsbmd/plugins/node-waves/waves.js')}}

    @show
    @yield('extra-script')
    @section('script-bottom')
        {{Html::script('adminTools/bsbmd/js/admin.js')}}
        {{Html::script('adminTools/bsbmd/js/demo.js')}}
    @show
</body>

</html>
