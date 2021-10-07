<!DOCTYPE html>
<html lang="en">

<head>
    <title>سو الاخباري</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->

    <link rel="stylesheet" href="{{url('/')}}/site/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/site/css/font-icons.css" />
    <link rel="stylesheet" href="{{url('/')}}/site/css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{url('/')}}/img/favicon.png">
    <link rel="wdwf.jpg" href="{{url('/')}}/img/wdwf.jpg">


    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{url('/')}}/site/js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">
<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <li>
                <a href="#" class="sidenav__menu-url">الصفحة الرئيسية</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">صفحات</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="#" class="sidenav__menu-url">عنا</a></li>
                    <li><a href="#" class="sidenav__menu-url">اتصل بنا</a></li>
                </ul>
            </li>

            <!-- Categories -->
            @if($categories->count() > 0)
                @foreach($categories as $cat)
                    <li>
                        <a href="#" class="sidenav__menu-url">{{$cat->name}}</a>
                    </li>
                @endforeach
            @endif
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="https://www.facebook.com/" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="https://twitter.com/login" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="https://google.com/" target="_blank" aria-label="google">
            <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="https://www.youtube.com/" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="https://www.instagram.com/" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
        </a>
    </div>
</header> <!-- end sidenav -->
@yield('content')
<!-- jQuery Scripts -->
<script src="{{url('/')}}/site/js/jquery.min.js"></script>
<script src="{{url('/')}}/site/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/site/js/easing.min.js"></script>
<script src="{{url('/')}}/site/js/owl-carousel.min.js"></script>
<script src="{{url('/')}}/site/js/flickity.pkgd.min.js"></script>
<script src="{{url('/')}}/site/js/twitterFetcher_min.js"></script>
<script src="{{url('/')}}/site/js/jquery.newsTicker.min.js"></script>
<script src="{{url('/')}}/site/js/modernizr.min.js"></script>
<script src="{{url('/')}}/site/js/scripts.js"></script>


</body>

</html>
