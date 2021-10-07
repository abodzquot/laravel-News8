@extends('layouts.app')
@section('content')


    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="{{route('about')}}">عنا</a></li>
                            <li><a href="{{route('contact')}}">اتصل بنا</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-start">
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
                    </div>

                </div>
            </div>
        </div> <!-- end top bar -->

        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky" style="height: 57px;
}">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                        </button>

                        <!-- Logo -->
                        <a href="{{url('/')}}" class="logo">
                            <img class="logo__img" style="width: 117px;" src="{{asset('img/soper-logo.jpg')}}"  alt="logo">
                        </a>

                        <!-- Nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                    <i class="ui-search nav__search-trigger-icon"></i>
                                </a>
                                <div class="nav__search-box" id="nav__search-box">
                                    <form class="nav__search-form">
                                        <input type="text" placeholder="البحث عن المقالات" class="nav__search-input">
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


        <!-- Trending Now -->
        <marquee behavior="alternate" bgcolor="red" direction="right" height="46px" style="padding: 15px" scrollamount="5" onMouseOver="stop ();" onMouseOut="start ();">
            <font size="+0.1" color="#FFFFFF" >{{$hot_news->description}}</font>
        </marquee>

        <div class="container">
            <div class="trending-now">
                <span class="trending-now__label">
                    <i class="ui-flash"></i>
                    أخبار ساخنة</span>
                <div class="newsticker">
                    <ul class="newsticker__list">
                        <li class="newsticker__item"><a href="{{route('single_post')}}" class="newsticker__item-url">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a></li>
                        <li class="newsticker__item"><a href="{{route('single_post')}}" class="newsticker__item-url">تم تقديم لينوفو Z6 بيرو بكاميرا رباعية النواة و Snapdragon 2</a></li>
                        <li class="newsticker__item"><a href="{{route('single_post')}}" class="newsticker__item-url">تعمل شركة Samsung على هاتفين جديدين قابلين للطي</a></li>
                    </ul>
                </div>
                <div class="newsticker-buttons">
                    <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
                    <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Featured Posts Grid -->
        <section class="featured-posts-grid">
            <div class="container">
                <div class="row row-8">

                    <div class="col-lg-6">

                        <!-- Small post -->
                        @if($feature_post)
                            @foreach($feature_post as $featur)
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder"
                                     style="background-image: url({{$featur->photo}})">
                                    <a href="{{route('single.post',$featur->id)}}" class="thumb-url"></a>
                                    <img src="{{$featur->photo}}" alt="" class="entry__img d-none">
                                    <a href="{{route('single.post',$featur->id)}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">
                                        {{$featur->category ? $featur->category->name : ''}}

                                    </a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="{{route('single.post',$featur->id)}}">{{$featur->title}}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="{{route('single.post',$featur->id)}}">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            {{date('Y/m/d',strtotime($featur->created_at))}}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        @endforeach
                        @endif
                                <!-- end post -->

                    </div> <!-- end col -->

                    <div class="col-lg-6">

                        <!-- Large post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                            <article class="entry card featured-posts-grid__entry">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="{{route('single_post')}}">
                                        <img src="img/content/thumb/post-8.jpg" alt="" class="entry__img">
                                    </a>
                                    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">موبایل و گجت</a>
                                </div>

                                <div class="entry__body card__body">
                                    <h2 class="entry__title">
                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div> <!-- end large post -->
                    </div>

                </div>
            </div>
        </section> <!-- end featured posts grid -->

        <div class="main-container container pt-24" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content">

                    <!-- Latest News -->
                    <section class="section tab-post mb-16">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">أحدث الألقاب</h3>

                            <div class="tabs tab-post__tabs">
                                <ul class="tabs__list">
                                    <li class="tabs__item tabs__item--active">
                                        <a href="#tab-all" class="tabs__trigger">جميع</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-world" class="tabs__trigger">تكنولوجيا</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-lifestyle" class="tabs__trigger">متحرك</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-business" class="tabs__trigger">کتاب</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-fashion" class="tabs__trigger">الثقافة والفن</a>
                                    </li>
                                </ul> <!-- end tabs -->
                            </div>
                        </div>

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-2-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-5-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 1 -->

                            <div class="tabs__content-pane" id="tab-world">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-5-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-2-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 2 -->

                            <div class="tabs__content-pane" id="tab-lifestyle">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-2-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-5-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 3 -->

                            <div class="tabs__content-pane" id="tab-business">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-2-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-5-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single_post')}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 4 -->

                            <div class="tabs__content-pane" id="tab-fashion">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-2-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">موبایل و گجت</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-5-2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.html">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">کتاب و ادبیات</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>المؤلف:</span>
                                                            <a href="#">محمد</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            2019 may
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div> <!-- end pane 5 -->
                        </div> <!-- end tab content -->
                    </section> <!-- end latest news -->

                </div> <!-- end posts -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
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
                                                2019 may
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
                                                2019 may
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
                                                <img data-src="img/content/thumb/post-6.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                2019 may
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
                                                <img data-src="img/content/thumb/post-5.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>المؤلف:</span>
                                                <a href="#">محمد</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                2019 may
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </aside> <!-- end widget popular posts -->

                    <!-- Widget Newsletter -->
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
                    </aside> <!-- end widget newsletter -->

                    <!-- Widget Ad 300 -->
                    <aside class="widget widget_media_image">
                        <a href="#">
                            <img src="img/content/mag-1.jpg" alt="">
                        </a>
                    </aside> <!-- end widget ad 300 -->

                </aside> <!-- end sidebar -->

            </div> <!-- end content -->

            <!-- Ad Banner 728 -->
            <div class="text-center pb-48">
                <a href="#">
                    <img src="img/content/cinema-banner.jpg" alt="">
                </a>
            </div>

            <!-- Carousel posts -->
            <section class="section mb-0">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">معظم المواد المشاهدة</h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-8.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-9.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-7.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">Huawei P30 Light Boxفتتح في DigiKala Mag</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-6.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">لماذا لم تعد مشغلات Android شعبية؟</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-2.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                </h2>
                            </div>
                            <a href="single-post.html" class="thumb-url"></a>
                        </div>
                    </article>
                </div> <!-- end slider -->

            </section> <!-- end carousel posts -->


            <!-- Posts from categories -->
            <section class="section mb-0">
                <div class="row">

                    <!-- Technology -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">تكنولوجيا</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-8.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">لورمأبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">أبجد هوز النص أبسوم مع بساطة لا يمكن تفسيره لصناعة الطباعة؟</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end technology -->

                    <!-- Travel -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">الكتب والأدب</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-9.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end travel -->

                    <!-- Cryptocurrency -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">الجوال والأداة</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-2-2.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end cryptocurrency -->

                    <!-- Investment -->
                    <div class="col-md-6">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">تكنولوجيا</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-8.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="single-post.html">
                                                    سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>المؤلف:</span>
                                                    <a href="#">محمد</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    2019 may
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">لالنص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.html">النص وهمية مع إنتاج البساطة إلى أجل غير مسمى</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end investment -->

                </div>
            </section> <!-- end posts from categories -->

            <!-- Content Secondary -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-72">

                    <!-- Worldwide News -->
                    <section class="section">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">أعلى أخبار السلع</h3>
                            <a href="#" class="all-posts-url">إظهار الكل</a>
                        </div>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-8.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-8.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-2-2.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-2-2.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-9.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-9.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">کتاب و ادبیات</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>يعد اختيار الكتاب المناسب لأطفالك مهمة صعبة. لديّ صديق يشرح لوالديه في سن مبكرة ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-5-2.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-5-2.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">کتاب و ادبیات</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل </a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>في هذه الأيام ، أدت مشاكل الحياة الحديثة إلى إيلاء المزيد من الاهتمام لاحتياجاتهم النفسية. مشاكل مع ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-8.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-8.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>بعد أن أعلنت شركة Samsung قرارها بتأجيل إصدار Galaxy FX ، كانت هناك شائعات عن حدوث تأخير في العرض ...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/thumb/post-2-2.jpg)">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="img/content/thumb/post-2-2.jpg" alt="" class="entry__img d-none">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">موبایل و گجت</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">ون بلس 3 سوف يفاجئنا!</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>الرئيس التنفيذي لشركة Oneplus ، Pete Lau ، تمت مقابلتهم مؤخرًا على موقع Verge وبعض الشائعات التي ...</p>
                                </div>
                            </div>
                        </article>
                    </section> <!-- end worldwide news -->

                    <!-- Pagination -->
                    <nav class="pagination">
                        <span class="pagination__page pagination__page--current">۱</span>
                        <a href="#" class="pagination__page">۲</a>
                        <a href="#" class="pagination__page">۳</a>
                        <a href="#" class="pagination__page">۴</a>
                        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                    </nav>

                </div> <!-- end posts -->

                <!-- Sidebar 1 -->
                <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

                    <!-- Widget Categories -->
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">بعد التصنيف</h4>
                        <ul>
                            <li><a href="categories.html">تكنولوجيا <span class="categories-count">۵</span></a></li>
                            <li><a href="categories.html">الثقافة والفن <span class="categories-count">۷</span></a></li>
                            <li><a href="categories.html">الجوال والأداة <span class="categories-count">۵</span></a></li>
                            <li><a href="categories.html">کتاب <span class="categories-count">۸</span></a></li>
                            <li><a href="categories.html">الصحة والجمال <span class="categories-count">۱۰</span></a></li>
                            <li><a href="categories.html">لايف ستايل<span class="categories-count">۶</span></a></li>
                        </ul>
                    </aside> <!-- end widget categories -->

                    <!-- Widget Recommended (Rating) -->
                    <aside class="widget widget-rating-posts">
                        <h4 class="widget-title">محرر منتخب</h4>
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-60">
                                        <img data-src="img/content/thumb/post-9.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-rating">
                                            <i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star-empty"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-60">
                                        <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019 may
                                        </li>
                                    </ul>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-rating">
                                            <i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star"></i>
                                            <!--
                      --><i class="ui-star-empty"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </aside> <!-- end widget recommended (rating) -->
                </aside> <!-- end sidebar 1 -->
            </div> <!-- content secondary -->


        </div> <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--light">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <a href="index.html">
                                    <img src="img/soper-logo.jpg" srcset="img/soper-logo.jpg 1x, img/soper-logo.jpg_white@2x.png 2x" class="logo__img" alt="">
                                </a>
                                <p class="copyright">

                                    يُسمح باستخدام محتوى Topkala Mag لأغراض غير تجارية عن طريق ذكر اسم Topkala Mag وارتباطه بالمصدر. حقوق ملكية هذا الموقع مملوكة لشركة Noavaran Fanavazeh (Topkala Online Store).

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
                                    <li><a href="categories.html">#کتاب</a></li>
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
                                                        2019 may
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
                                                        2019 may
                                                    </li>
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

    @endsection
