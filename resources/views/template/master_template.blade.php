<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.partials.head')
</head>
<body style="padding:2% !important ;background: linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(22,4,80,1) 61%, rgba(110,31,46,1) 81%) !important;">
<div id="wrapper">
    <!-- start header -->
@include('template.partials.header')
<!-- end header -->
    <section id="main-content" style="padding: 1% !important; width: 100%;height: 100%;box-shadow: 10px 5px 10px rgba(0, 0, 0, 0.25);cursor: pointer">
        <div class="row">
            <!-- left menu-->
        @include('template.partials.left_menu')
        <!-- end left menu -->
            <!-- content principal -->
        @include('template.partials.main_section_article')
        <!-- end content principal -->
        </div>
    </section>
    @include('template.partials.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
@include('template.partials.footer-scripts')
</body>
</html>
