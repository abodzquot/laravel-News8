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
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('site/css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="wdwf.jpg" href="{{asset('img/wdwf.jpg')}}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{asset('site/js/lazysizes.min.js')}}"></script>

</head>

<body class="style-default style-rounded">

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
                        <li><a href="about.html" class="sidenav__menu-url">صفحات</a></li>
                        <li><a href="contact.html" class="sidenav__menu-url">اتصل بنا</a></li>
                        <li><a href="search-results.html" class="sidenav__menu-url">نتائج البحث</a></li>
                        <li><a href="categories.html" class="sidenav__menu-url">فئات المحتوى</a></li>
                        <li><a href="single-post.html" class="sidenav__menu-url">عرض المحتوى</a></li>
                        <li><a href="404.html" class="sidenav__menu-url">404</a></li>
                    </ul>
                </li>

                <!-- Categories -->
                <li>
                    <a href="#" class="sidenav__menu-url">تكنولوجيا</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">الجمال والصحة</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">متحرك</a>
                </li>
            </ul>
        </nav>

        <div class="socials sidenav__socials">
            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header> <!-- end sidenav -->

    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="#">عنا</a></li>
                            <li><a href="#">دعاية</a></li>
                            <li><a href="#">اتصل بنا</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-start">
                            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end top bar -->

        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                        </button>

                        <!-- Logo -->
                        <a href="index.html" class="logo">
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="active">
                                    <a href="index.html">الصفحة الرئيسية</a>
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">تكنولوجيا</a>
                                    <ul class="nav__dropdown-menu nav__megamenu">
                                        <li>
                                            <div class="nav__megamenu-wrap">
                                                <div class="row">

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('img/content/thumb/post-1.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('img/content/thumb/post-2.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('img/content/thumb/post-3.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">مقابل ألفي يورو ، ما هي المنتجات الأخرى التي يمكنك شراؤها بدلاً من Galaxy Fold؟</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="col nav__megamenu-item">
                                                        <article class="entry">
                                                            <div class="entry__img-holder">
                                                                <a href="single-post.html">
                                                                    <img src="{{asset('img/content/thumb/post-4.jpg')}}" alt="" class="entry__img">
                                                                </a>
                                                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">تکنولوژی</a>
                                                            </div>

                                                            <div class="entry__body">
                                                                <h2 class="entry__title">
                                                                    <a href="single-post.html">مميزات واجهة المستخدم UI من سامسونج</a>
                                                                </h2>
                                                            </div>
                                                        </article>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul> <!-- end megamenu -->
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">صفحات</a>
                                    <ul class="nav__dropdown-menu">
                                        <li><a href="about.html">عنا</a></li>
                                        <li><a href="contact.html">اتصل بنا</a></li>
                                        <li><a href="search-results.html">نتائج البحث</a></li>
                                        <li><a href="categories.html">فئات المحتوى</a></li>
                                        <li><a href="single-post.html">عرض المحتوى</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>


                            </ul> <!-- end menu -->
                        </nav> <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                    <i class="ui-search nav__search-trigger-icon"></i>
                                </a>
                                <div class="nav__search-box" id="nav__search-box">
                                    <form class="nav__search-form">
                                        <input type="text" placeholder="جستجو مقالات" class="nav__search-input">
                                        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                            <i class="ui-search nav__search-icon"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end nav right -->

                    </div> <!-- end flex-parent -->
                </div> <!-- end container -->

            </div>
        </header> <!-- end navigation -->

        <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__url">الصفحة الرئيسية</a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                  اتصل بنا
                </li>
            </ul>
        </div>

        <div class="main-container container" id="main-container">
            <!-- post content -->
            <div class="blog__content mb-72">
                <h1 class="page-title">اتصل بنا</h1>

                <!-- Google Map -->
                <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h4>اتصل بنا</h4>
                        <p> هو نص وهمي ينتج عن البساطة التي لا يمكن تفسيرها لصناعة الطباعة ومصممو الرسوم البيانية.</p>
                        <ul class="contact-items">
                            <li class="contact-item">
                                <address>عمارات</address>
                            </li>
                            <li class="contact-item"><a href="#">0123456789</a></li>
                            <li class="contact-item"><a href="mailto:topkala@gmail.com">topkalasupport@gmail.com</a></li>
                        </ul>

                        <!-- Contact Form -->
                        <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                            <div class="contact-name">
                                <label for="name">اسم <abbr title="required" class="required">*</abbr></label>
                                <input name="name" id="name" type="text">
                            </div>
                            <div class="contact-email">
                                <label for="email">البريد الإلكتروني <abbr title="required" class="required">*</abbr></label>
                                <input name="email" id="email" type="email">
                            </div>
                            <div class="contact-subject">
                                <label for="email">موضوع</label>
                                <input name="subject" id="subject" type="text">
                            </div>
                            <div class="contact-message">
                                <label for="message">رسالة <abbr title="required" class="required">*</abbr></label>
                                <textarea id="message" name="message" rows="7" required="required"></textarea>
                            </div>

                            <input type="submit" class="btn btn-lg btn-color btn-button" value="الكتابة" id="submit-message">
                            <div id="msg" class="message"></div>
                        </form>

                    </div>
                </div>
            </div> <!-- end post content -->
        </div> <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--light">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <a href="index.html">
                                    <img src="img/logo_default_white.png" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                                </a>
                                <p class="copyright">


                                </p>
                                <div class="socials socials--large socials--rounded mb-24">
                                    <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                    <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                    <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                    <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                    <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                                </div>
                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget widget_nav_menu">
                                <h4 class="widget-title">الهاشتاج الساخنة</h4>
                                <ul>
                                    <li><a href="about.html">#تكنولوجيا</a></li>
                                    <li><a href="contact.html">#متحرك</a></li>
                                    <li><a href="categories.html">#كتاب</a></li>
                                    <li><a href="shortcodes.html">#فن</a></li>
                                    <li><a href="shortcodes.html">#الجمال</a></li>
                                    <li><a href="shortcodes.html">#رقمي</a></li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget-popular-posts">
                                <h4 class="widget-title">معظم المواد الشعبية</h4>
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="single-post.html">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>المؤلف:</span>
                                                        <a href="#">محمد</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        2019  مایو
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="single-post.html">
                                                        <img data-src="img/content/thumb/post-2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>المؤلف:</span>
                                                        <a href="#">محمد</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                       2019  مایو
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_mc4wp_form_widget">
                                <h4 class="widget-title">النشرة الإخبارية</h4>
                                <p class="newsletter__text">
                                    <i class="ui-email newsletter__icon"></i>
                                    اشترك في آخر الأخبار
                                </p>
                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="form-group">
                                            <input type="email" name="EMAIL" placeholder="البريد الإلكتروني" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-color" value="عضوية">
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->
        </footer> <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="{{asset('site/js/jquery.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('site/js/easing.min.js')}}"></script>
    <script src="{{asset('site/js/owl-carousel.min.js')}}"></script>
    <script src="{{asset('site/js/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('site/js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('site/js/jquery.newsTicker.min.js')}}"></script>
    <script src="{{asset('site/js/modernizr.min.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="{{asset('js/gmap3.min.js')}}"></script>
    <script src="{{asset('site/js/scripts.js')}}"></script>

    <!-- Google Map -->
    <script type="text/javascript">
        $(document).ready(function() {

            var gmapDiv = $("#google-map");
            var gmapMarker = gmapDiv.attr("data-address");

            gmapDiv.gmap3({
                    zoom: 16,
                    address: gmapMarker,
                    oomControl: true,
                    navigationControl: true,
                    scrollwheel: false,
                    styles: [{
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [{
                            "saturation": "0"
                        }]
                    }]
                })
                .marker({
                    address: gmapMarker,
                    icon: "img/map_pin.png"
                })
                .infowindow({
                    content: "V Tytana St, Manila, Philippines"
                })
                .then(function(infowindow) {
                    var map = this.get(0);
                    var marker = this.get(1);
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                });
        });

    </script>

</body>

</html>
