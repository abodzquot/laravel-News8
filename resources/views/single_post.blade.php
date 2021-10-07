@extends('layouts.app')
@section('content')
    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72">
                <div class="content-box">

                    <!-- standard post -->
                    <article class="entry mb-0">

                        <div class="single-post__entry-header entry__header">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--green">الجوال والأداة</a>
                            <h1 class="single-post__entry-title">
                                {{$news->title}}
                            </h1>

                            <div class="entry__meta-holder">
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>المؤلف:</span>
                                        <a href="#">محمد</a>
                                    </li>
                                    <li class="entry__meta-date">
                                       {{date('Y/m/d',strtotime($news->created_at))}}
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- end entry header -->

                        <div class="entry__img-holder">
                            <img src="{{$news->photo}}" alt="" class="entry__img">
                        </div>

                        <div class="entry__article-wrap">

                            <!-- Share -->
                            <div class="entry__share">
                                <div class="sticky-col">
                                    <div class="socials socials--rounded socials--large">
                                        <a class="social social-facebook" href="https://www.facebook.com/" title="facebook" target="_blank" aria-label="facebook">
                                            <i class="ui-facebook"></i>
                                        </a>
                                        <a class="social social-twitter" href="https://twitter.com/login" title="twitter" target="_blank" aria-label="twitter">
                                            <i class="ui-twitter"></i>
                                        </a>
                                        <a class="social social-google-plus" href="https://google.com/" title="google" target="_blank" aria-label="google">
                                            <i class="ui-google"></i>
                                        </a>
                                        <a class="social social-pinterest" href="https://www.youtube.com/" title="pinterest" target="_blank" aria-label="pinterest">
                                            <i class="ui-pinterest"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- share -->

                            <div class="entry__article">
                              <fieldset>
                                  {{$news->description}}
                              </fieldset>
                        </div> <!-- end entry article wrap -->

                        <!-- Author -->

                        <!-- Related Posts -->
                        <section class="section related-posts mt-40 mb-0">
                            <div class="title-wrap title-wrap--line">
                                <h3 class="section-title">محتوى ذات صلة</h3>
                            </div>

                            <!-- Slider -->
                            <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-8.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                            </h2>
                                        </div>
                                        <a href="{{route('single_post')}}" class="thumb-url"></a>
                                    </div>
                                </article>
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-2-2.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                            </h2>
                                        </div>
                                        <a href="{{route('single_post')}}" class="thumb-url"></a>
                                    </div>
                                </article>
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-9.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single_post')}}">أفضل الكتب للأطفال والمراهقين لتربية الأطفال الناجحين</a>
                                            </h2>
                                        </div>
                                        <a href="{{route('single_post')}}" class="thumb-url"></a>
                                    </div>
                                </article>
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-7.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single_post')}}">Huawei P30 Light Boxفتتح في DigiKala Mag</a>
                                            </h2>
                                        </div>
                                        <a href="{{route('single_post')}}" class="thumb-url"></a>
                                    </div>
                                </article>
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/thumb/post-5.jpg');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                            </h2>
                                        </div>
                                        <a href="{{route('single_post')}}" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div> <!-- end slider -->

                        </section> <!-- end related posts -->

                    </article> <!-- end standard post -->

                    <!-- Comments -->
                    <div class="entry-comments">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">۳ وجهة نظر</h3>
                        </div>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="comment-avatar">
                                        <img alt="" src="{{asset('img/post-6.jpg')}}">
                                    </div>
                                    <div class="comment-text">
                                        <h6 class="comment-author">محمد</h6>
                                        <div class="comment-metadata">
                                            <a href="#" class="comment-date">2019  may</a>
                                        </div>
                                        <p>هو نص وهمي ينتج عن البساطة التي لا يمكن تفسيرها لصناعة الطباعة ومصممو الرسوم البيانية. الطابعات والنصوص وكذلك الصحف والمجلات في الأعمدة والصفوف حسب الحاجة.</p>
                                        <a href="#" class="comment-reply">رد</a>
                                    </div>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-avatar">
                                                <img alt="" src="{{asset('img/default-avatar.png')}}">
                                            </div>
                                            <div class="comment-text">
                                                <h6 class="comment-author">احمد</h6>
                                                <div class="comment-metadata">
                                                    <a href="#" class="comment-date">2019  may</a>
                                                </div>
                                                <p>هو نص وهمي ينتج عن البساطة الضمنية في صناعة الطباعة ومصممو الرسوم البيانية. الطابعات والنصوص وكذلك الصحف والمجلات في الأعمدة والصفوف حسب الحاجة.</p>
                                                <a href="#" class="comment-reply">رد</a>
                                            </div>
                                        </div>
                                    </li> <!-- end reply comment -->
                                </ul>

                            </li> <!-- end 1-2 comment -->

                            <li>
                                <div class="comment-body">
                                    <div class="comment-avatar">
                                        <img alt="" src="{{asset('img/default-avatar.png')}}">
                                    </div>
                                    <div class="comment-text">
                                        <h6 class="comment-author">علی</h6>
                                        <div class="comment-metadata">
                                            <a href="#" class="comment-date">2019  may</a>
                                        </div>
                                        <p>هو نص وهمي ينتج عن البساطة التي لا يمكن تفسيرها لصناعة الطباعة ومصممو الرسوم البيانية. الطابعات والنصوص وكذلك الصحف والمجلات في الأعمدة والصفوف حسب الحاجة.</p>
                                        <a href="#" class="comment-reply">رد</a>
                                    </div>
                                </div>
                            </li> <!-- end 3 comment -->

                        </ul>
                    </div> <!-- end comments -->

                    <!-- Comment Form -->
                    <div id="respond" class="comment-respond">
                        <div class="title-wrap">
                            <h5 class="comment-respond__title section-title">تعليقك</h5>
                        </div>
                        <form id="form" class="comment-form" method="post" action="#">
                            <p class="comment-form-comment">
                                <label for="comment">وجهة نظر</label>
                                <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                            </p>

                            <div class="row row-20">
                                <div class="col-lg-4">
                                    <label for="name">الاسم الأول: *</label>
                                    <input name="name" id="name" type="text">
                                </div>
                                <div class="col-lg-4">
                                    <label for="comment">البريد الإلكتروني: *</label>
                                    <input name="email" id="email" type="email">
                                </div>
                                <div class="col-lg-4">
                                    <label for="comment">الموقع:</label>
                                    <input name="website" id="website" type="text">
                                </div>
                            </div>

                            <p class="comment-form-submit">
                                <input type="submit" class="btn btn-lg btn-color btn-button" value="بعد تعليق" id="submit-message">
                            </p>

                        </form>
                    </div> <!-- end comment form -->

                </div> <!-- end content box -->
            </div> <!-- end post content -->

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
                                        <a href="{{route('single_post')}}">
                                            <img data-src="img/content/thumb/post-8.jpg" src="{{asset('img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{route('single_post')}}">سيكون هاتف Huawei Mate X القابل للطي متاحًا في تاريخ الاستحقاق</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019  may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="{{route('single_post')}}">
                                            <img data-src="img/content/thumb/post-2.jpg" src="{{asset('img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{route('single_post')}}">ون بلس 3 سوف يفاجئنا!</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019  may
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="{{route('single_post')}}">
                                            <img data-src="img/content/thumb/post-6.jpg" src="{{asset('img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{route('single_post')}}">لماذا لم تعد مشغلات Android شعبية؟</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019  may
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="{{route('single_post')}}">
                                            <img data-src="img/content/thumb/post-5.jpg" src="{{asset('img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{route('single_post')}}">كتاب علم النفس يجب أن تقرأ من أجل حياة أفضل</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>المؤلف:</span>
                                            <a href="#">محمد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            2019  may
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
                        <img src="{{asset('img/content/mag-1.jpg')}}" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->



            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
