<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('template.partials.head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&display=swap');
        /*header element font*/
        @import url('https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&family=Merienda:wght@700&display=swap');
        .form-control{
        color:#fff !important;
        background: none;
        border:1px solid #fff;
    }
        @media (min-width: 1281px) {
            body {
            font-family: 'Gentium Book Basic', serif !important;
            width: 1280px !important;
            display: block !important;
            box-sizing: inherit;
            margin: 0 auto;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            color:#fff !important;
            }
            .div-body{
                font-family: 'Gentium Book Basic', serif !important;
                    width: 1250px !important;
                    padding-left: 45px !important;
            padding-right: 60px !important;
                    display: block !important;
                    box-sizing: inherit;
                    margin: 0 auto;
            }
            div.actu-div{
                padding-left:40px !important;
            }
            .navbar-brand>img{
                -webkit-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        -moz-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
            }
            .img-view{
                width: 245px !important;
                height: 245px !important;
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            #calendar{
                padding-top: 45px !important;
                padding-bottom: -25px !important;
                padding-left:10px !important; 
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            .form-contact {
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            .btn-theme{
                background: none !important;
                color: #fff;
                border: 1px solid #fff !important;
            }
            h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Merienda', cursive !important;
        font-weight: 700;
        line-height: 1.1em;
        color: #fff;
        margin-bottom: 20px;
        }
        .navbar .nav > li > a,
        .navbar .nav > li.active > .dropdown-menu > li > a > h5 {
        color: #6e1f2e;
        text-shadow: none;
        padding-top: 13px;
        }
        header ul.nav li {
            border: 3px solid #ffffff;
            margin: 5px !important;
            padding: 4px !important;
            
        }
        header ul.nav{
            width: 1140px !important;
            margin-left:0px !important;
            -webkit-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        -moz-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        }
        .form-control-label{
                color:#fff !important;
                font-family: 'Gentium Book Basic', serif !important;
                font-size: 16px !important;

            }
            #content{
                padding: 0px !important;
                width: 1140px !important;
                height: 100%;
                cursor: pointer;
                display: block !important;
                    box-sizing: inherit;

            }
            .main-slider{
                width: 1137px !important;
            }
            .eagle-div{
                float:none !important;
                padding-bottom: 130px !important;
                margin-left:30px !important
            }
        }
        
        /* de 1131 a 1280 */
        @media (min-width: 1025px) and (max-width: 1280px) {
            body {
            font-family: 'Gentium Book Basic', serif !important;
            width: 100% !important;
            display: block !important;
            box-sizing: inherit;
            margin: 0 auto;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            color:#fff !important;
            }
            .top>div.container{
                margin-left:0px !important;
            }
            .recent{
                font-size:16px !important;
            }
            .flex-caption>p{
                font-size:18px !important;
            }
            .navbar-brand>img{
                -webkit-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        -moz-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
            }
            div.actu-div{
                padding-left:40px !important;
            }
            div.fc-toolbar.fc-header-toolbar{
                padding-left:20px!important;
                padding-right:20px !important;
            }
            div.navbar.navbar-default.navbar-static-top{
                margin-left:70px !important;
            }
            .img-view{
                width: 245px !important;
                height: 245px !important;
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            #calendar{
                padding-top: 45px !important;
                padding-bottom: -25px !important;
                padding-left:10px !important; 
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            .form-contact {
                -webkit-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        -moz-box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
        box-shadow: 23px 22px 10px -24px rgba(255,252,255,1);
            }
            .btn-theme{
                background: none !important;
                color: #fff;
                border: 1px solid #fff !important;
            }
            h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Merienda', cursive !important;
        font-weight: 700;
        line-height: 1.1em;
        color: #fff;
        margin-bottom: 20px;
        }
        .navbar .nav > li > a,
        .navbar .nav > li.active > .dropdown-menu > li > a > h5 {
        color: #6e1f2e;
        text-shadow: none;
        padding-top: 13px;
        }
        li.nav-item{
                width: 126px !important;
            }
            a.nav-link>h5{
                font-size:13px !important;
            }
        header ul.nav li {
            border: 3px solid #ffffff;
            margin: 4px !important;
            padding: 4px !important;
            
        }
        header ul.nav{
            width: 100% !important;
            margin-left:0px !important;
            -webkit-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        -moz-box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        box-shadow: -1px 14px 10px -17px rgba(255,252,255,1);
        }
        .form-control-label{
                color:#fff !important;
                font-family: 'Gentium Book Basic', serif !important;
                font-size: 16px !impportant;

            }
            #content{
                padding: 0px !important;
                width: 1140px !important;
                height: 100%;
                cursor: pointer;
                display: block !important;
                    box-sizing: inherit;

            }
            .main-slider{
                width: 100% !important;
            }
            .eagle-div{
                float:none !important;
                padding-bottom: 130px !important;
                margin-left:30px !important
            }
        }
        /* tablette ipad portrait */
        @media (min-width: 768px) and (max-width: 1024px) {
            body{
                width:100% !important;
            }
            ul.slides>li{
                width:100% !important;
            }
            header{
                width:100% !important;
            }
            header ul.nav{
                width:100% !important;
                padding-block: 0px;
            }
            li.nav-item{
                width: 90px !important
            }
            li.nav-item>a>h5{
                font-size:8px !important;
            }
            div.top-img1-div{
                visibility: hidden !important;
            }
            img.eagle-div{
                margin-left:300px !important;
            }
         
            section#featured{
                max-width:1024px !important;
                min-width:768px !important;
            }
        }
    @media all and (max-width: 640px){
    body {
            font-family: 'Gentium Book Basic', serif !important;
            width: 100% !important;
        }
        
}
    </style>
</head>
<body>
    <div id="wrapper" style="padding:0px !important;">
        <!-- start header -->
        @include('template.partials.header')
    <!-- end header -->
        <section id="content" style="background:none">
           <div class="container">
                <div class="row">
                        <!-- left menu-->
                    @include('template.partials.left_menu')
                    <!-- end left menu -->
                        <!-- content principal -->
                    @include('template.partials.main_section_article')
                    <!-- end content principal -->
                </div>
            <div>
        </section>
        @include('template.partials.footer')
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    @include('template.partials.footer-scripts')
</body>
</html>
