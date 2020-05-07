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
    a.nav-link{
        border:2px #fff solid !important;
        color: #fff !important;
        padding-bottom:10px !important; 
        font-size: 14px !important;
        text-transform: capitalize;
        font-family: 'Merienda', cursive !important;
        margin-left:auto !important;
        margin-right:auto !important;
    }
    a.nav-link:hover{
        border:2px #e8486d solid !important;
        color: #e8486d !important;
        padding-bottom:-10px !important; 
    }
    li.active>a.nav-link{
        color: #e8486d !important;
        padding-bottom:-10px !important;
    }
    a.nav-link>h5:hover{
        color: #e8486d !important; 
    }
        @media (min-width: 1281px) {
            header ul.nav li {
    margin: 7px !important;
    padding: 4px !important;
    margin-inline-start: initial;
    margin-inline-end: initial;
    margin-left: 0% !important;
}
 a.nav-link{
        padding: 5px !important; 
        width: 150px !important;
        margin-left:13px !important; 
        margin-right:13px !important;
    }
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
                text-align: justify !important;
                text-justify: inter-word !important;
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
        header ul.nav {
    width: 100% !important;
    margin-left: 0px !important;
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
                padding-left: 100px !important;
    padding-right: 100px !important;
    padding-top: 0px !important;
    width: 100% !important;
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
            #left-menu{
                border-right: 4px outset #fff;border-radius: 0px 6px 0px 0px;
        }
        }
        
        /* de 1131 a 1280 */
        @media (min-width: 1025px) and (max-width: 1280px) {
            header ul.nav li {
    margin: 5px !important;
    padding: 4px !important;
    margin-inline-start: initial;
    margin-inline-end: initial;
    margin-left: 2% !important;
}
            body {
            font-family: 'Gentium Book Basic', serif !important;
            width: 100% !important;
            display: block !important;
            box-sizing: inherit;
            margin: 0 auto;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            color:#fff !important;
            padding-left: 4.9% !important;
            }
            .flexslider {
    margin-bottom: -700px !important;
}
            .top>div.container{
                margin-left:0px !important;
            }
            .top>.container>div.row{
                padding-left:32px !important;
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
            a.nav-link{
        padding: 5px !important; 
        width: 130px !important;
        margin-left:10px !important; 
        margin-right:10px !important;
    }
            div.actu-div{
                padding-left:40px !important;
            }
            div.fc-toolbar.fc-header-toolbar{
                padding-left:20px!important;
                padding-right:20px !important;
            }
            div.navbar.navbar-default.navbar-static-top{
                margin-left: 0px !important;
    margin-right: -150px !important;
    margin-top: -200px !important;
            }
            .nav > li > a {
    position: relative !important;
    display: block !important;
    padding: 0px 0px !important;
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
            #left-menu{
                border-right: 4px outset #fff;border-radius: 0px 6px 0px 0px;-webkit-box-shadow: -8px 7px 15px -17px rgba(255,252,255,1);
                    -moz-box-shadow: -8px 7px 15px -17px rgba(255,252,255,1);
                    box-shadow: -8px 7px 15px -17px rgba(255,252,255,1);
        }
        span.badge.badge-success{
         background: none !important;
         border: 1px solid #fff !important;
         margin-right: 10px !important;
         
     }
     div.navbar.navbar-default.navbar-static-top {
    margin-left: 0px !important;
    margin-right: 0px !important;
    margin-top: 0px !important;
}
     div.detail-text{
         padding-left: 70px !important;
         text-align: justify;text-justify: inter-word;
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
                padding-bottom: 120px !important;
                 margin-left: 200px !important;
            }
        
            a.nav-link{
        padding: 5px !important; 
        width: 100px !important;
        margin-left:7px !important; 
        margin-right:7px !important;
        font-size: 10px !important;
    }
            section#featured{
                max-width:1024px !important;
                min-width:768px !important;
            }
            #left-menu{
            border: none !important;
        }
        span.badge.badge-success{
         background: none !important;
         border: 1px solid #fff !important;
         margin-right: 10px !important;
         
     }
        }
    @media all and (max-width: 640px){
    body {
            font-family: 'Gentium Book Basic', serif !important;
            width: 100% !important;
        }
        #left-menu{
            border: none !important;
            width: 100%;
        }
        .row>p{
    text-align: left !important;
    font-size: 14px !important;
}
.text-div{
    padding-left:5px !important;
}
    .description-act>p,.description-act>p>strong,.description-act>ul>li,.description-act>ul>li>strong{
         text-align: justify;
  text-justify: inter-word;
    }
    .actu-div>ul>li,.actu-div>p>strong,actu-div>p,.actu-div>ul>li>strong{
         font-size: 14px !important;
         text-align: justify;
  text-justify: inter-word;
     }
     h3{
         font-size: 16px !important;
     }
     button.fc-prev-button.fc-button.fc-button-primary,
     button.fc-today-button.fc-button.fc-button-primary,
     button.fc-next-button.fc-button.fc-button-primary{
         width: 50px !important;
         font-size: 12px !important;
          text-align: justify;
  text-justify: inter-word;
     }
     div.fc-button-group{
         margin-left:0px !important;
         margin-right: 0px !important; 
     }
     div.fc-left>h2{
         font-size: 14px !important;
         margin-left: 20px !important;
     }
     .main-slider .flex-caption h3 {
         font-size:13px !important;
          text-align: justify;
  text-justify: inter-word;
     }
     ul.nav.navbar-nav.content-center>li.nav-item{
         width: 100% !important;
     }
     span.badge.badge-success{
         background: none !important;
         border: 1px solid #fff !important;
         margin-right: 10px !important;

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
           <div class="container-justify">
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
