<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مدونه منصه انا مهندس</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lms/assets/images/favicon.png')}}">
    <!-- CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/tipped.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .iframe {
            height: 150px;
            width: 150px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto&display=swap" rel="stylesheet">



    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css')}}">

</head>

<body class="sticky-header">

<div id="edublink-preloader">
    <div class="loading-spinner">
        <div class="preloader-spin-1"></div>
        <div class="preloader-spin-2"></div>
    </div>
    <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
    </div>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="edu-header header-style-1 header-fullwidth no-topbar">
        <div id="edu-sticky-placeholder"></div>
        <div class="header-mainmenu">
            <div class="container-fluid">
                <div class="header-navbar">
                    <div class="header-brand">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="header-category">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a href="#">الاقسام<i class="icon-1"></i></a>
                                        <ul class="submenu">
                                            <li><a href="course-one.html">التصميم الميداني</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="has-droupdown"><a href="#">الرئيسيه</a>
                                </li>


                                <li class="has-droupdown"><a href="#">الدورات</a>
                                    <ul class="submenu">
                                        <li><a href="course-one.html">Course Style 1</a></li>
                                    </ul>
                                </li>

                                <li class="has-droupdown"><a href="#">المقالات</a>
                                    <ul class="submenu">
                                        <li><a href="blog-standard.html">Blog Standard</a></li>

                                    </ul>
                                </li>
                                <li class="has-droupdown"><a href="#">خطط الاسعار</a>
                                    <ul class="submenu">
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="contact-me.html">Contact Me</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <ul class="header-action">

                            <li class="icon search-icon">
                                <a href="javascript:void(0)" class="search-trigger">
                                    <i class="icon-2"></i>
                                </a>
                            </li>
                            <li class="icon cart-icon">
                                <a href="cart.html">
                                    <i class="icon-3"></i>
                                    <span class="count">0</span>
                                </a>
                            </li>
                            <li class="header-btn">
                                <a href="contact-us.html" class="edu-btn btn-medium"> حاول مجانا <i class="icon-west"></i></a>
                            </li>
                            <li class="mobile-menu-bar d-block d-xl-none">
                                <button class="hamberger-button">
                                    <i class="icon-54"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="ana eng  Logo">
                            <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="eng Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="icon-73"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="content-wrap">
                <div class="site-logo">
                    <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                </div>
                <div class="close-button">
                    <button class="close-trigger"><i class="icon-73"></i></button>
                </div>
                <div class="inner">
                    <form class="search-form" action="#">
                        <button class="submit-button"><i class="icon-2"></i></button>
                        <input type="text" class="edublink-search-popup-field" placeholder="ابحث هنا...">
                    </form>
                </div>
            </div>
        </div>
        <!-- End Search Popup  -->
    </header>
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->


    <!--=====================================-->
    <!--=       Blog Details Area Start     =-->
    <!--=====================================-->
    <div class="blog-details-area section-gap-equal">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="blog-details-content">

                        <div class="entry-content">
                            <h3 class="title">{{$magazine->title}} </h3>
                            <ul class="blog-meta">
                            </ul>
                            <div class="thumbnail">
                                <img src="assets/images/blog/blog-large-1.jpg" alt="Blog Image">
                            </div>
                        </div>

                        <p>{{$magazine->description}}</p>
                        <iframe src="https://getbootstrap.com/" style="height:500px; width:750px; border:none;" title="Iframe Example"></iframe>
                        <div class="blog-share-area">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="blog-share">
                                        <h6 class="title">مشاركه فى:</h6>
                                        <ul class="social-share icon-transparent">
                                            <li>
                                                <a href="#"><i class="icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Start Comment Area  -->



                </div>
                <div class="col-lg-4">
                    <div class="edu-blog-sidebar">
                        <!-- Start Single Widget  -->

                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->

                        <div class="edu-blog-widget widget-latest-post">
                            <div class="inner">
                                <h4 class="widget-title">آخر مشاركة</h4>
                                @foreach($magazine as $Magazine)
                                    <div class="content latest-post-list">
                                        <div class="latest-post">

                                            <div class="post-content">
                                                <h6 class="title"><a href="{{route('show.artical',$magazine->id)}}">
                                                        {{ $magazine->title}}
                                                    </a></h6>

                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-categories">
                            <div class="inner">
                                <h4 class="widget-title">فئات</h4>
                                <div class="content">
                                    <ul class="category-list">
                                        <li><a href="#">دراسات الأعمال <span>(٣)</span></a></li>
                                        <li><a href="#">هندسة الحاسوب <span>(٧)</span></a></li>
                                        <li><a href="#">طبي &amp; صحة<span>(٢)</span></a></li>
                                        <li><a href="#">برمجة <span>(١)</span></a></li>
                                        <li><a href="#">تطوير الشبكة <span>(٣)</span></a></li>
                                        <li><a href="#">غير مصنف <span>(٩)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-action">
                            <div class="inner">
                                <h4 class="title">احصل على دورات عبر الإنترنت من <span>انا مهندس</span></h4>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>و سأعرض مثال حي لهذا، من هنا </p>
                                <a href="#" class="edu-btn btn-medium">ابدأ الآن <i class="icon-west"></i></a>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->

                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-tags">
                            <div class="inner">
                                <h4 class="widget-title">العلامات</h4>
                                <div class="content">
                                    <div class="tag-list">
                                        <a href="#">لغة</a>
                                        <a href="#">التعلم الإلكتروني</a>
                                        <a href="#">نصائح</a>
                                        <a href="#">مسار</a>
                                        <a href="#">تحفيز</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=        CTA  Area Start            =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title">من خلال  <span class="color-secondary">شهادة انا مهندس</span> احصل على مهارات الجودة الخاصة بك</h2>
                            <a href="contact.html" class="edu-btn"> شهادة نبدأ الآن <i class="icon-west"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="assets/images/cta/shape-10.png" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="assets/images/cta/shape-09.png" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="-2" src="assets/images/cta/shape-08.png" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="2" src="assets/images/about/shape-13.png" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
    <!--=====================================-->
    <!--=        Footer Area Start       	=-->
    <!--=====================================-->
    <!-- Start Footer Area  -->
    <footer class="edu-footer footer-lighten bg-image footer-style-1">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="edu-footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="logo-light" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                    <img class="logo-dark" src="assets/images/logo/logo-white.png" alt="Corporate Logo">
                                </a>
                            </div>
                            <p class="description">شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي. وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة.</p>
                            <div class="widget-information">
                                <ul class="information-list">
                                    <li><span>مكالمة: </span><a href="tel:00971544022482"> +971544022482 </a></li>
                                    <li><span>البريد: </span><a href="mailto:contact@anaengineer.com">contact@anaengineer.com</a></li>
                                    <li><span>للتعاون التجاري: </span><a href="mailto:marketing@anaengineer.com">marketing@anaengineer.com</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="edu-footer-widget explore-widget">
                            <h4 class="widget-title">الروابط</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">سياسه الخصوصيه</a></li>
                                    <li><a href="#">الشروط والاحكام</a></li>
                                    <li><a href="#">الاسئله الشائعة</a></li>
                                    <li><a href="#">تطوع معنا</a></li>
                                    <li><a href="#">حول</a></li>
                                    <li><a href="#"> التحقق من صحه الشهاده</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="edu-footer-widget quick-link-widget">
                            <h4 class="widget-title">خدمات</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">الدورات</a></li>
                                    <li><a href="#">التواصل الاجتماعي </a></li>
                                    <li><a href="#">المجله</a></li>
                                    <li><a href="#">المقالات</a></li>
                                    <li><a href="#">تواصل معنا </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-footer-widget">
                            <h4 class="widget-title">جهات الاتصال</h4>
                            <div class="inner">
                                <p class="description">أدخل عنوان بريدك الإلكتروني للتسجيل في الاشتراك في النشرة الإخبارية</p>
                                <div class="input-group footer-subscription-form">
                                    <input type="email" class="form-control" placeholder="بريدك الالكتروني">
                                    <button class="edu-btn btn-medium" type="button"><i class="icon-west"></i> الإشتراك</button>
                                </div>
                                <ul class="social-share icon-transparent">
                                    <li><a href="#" class="color-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                    <li><a href="#" class="color-ig"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="color-yt"><i class="icon-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <p>حقوق الطبع والنشر ٢٠٢٢ <a >   anaengineer </a>. كل الحقوق محفوظة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area  -->


</div>

<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('lms/assets/js/vendor/modernizr.min.js')}}"></script>
<!-- Jquery Js -->
<script src="{{asset('lms/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/sal.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/backtotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/magnifypopup.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/odometer.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/imageloaded.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/svg-inject.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/vivus.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/tipped.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isInViewport.jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Site Scripts -->
<script src="{{asset('lms/assets/js/app.js')}}"></script>
</body>


</html>
