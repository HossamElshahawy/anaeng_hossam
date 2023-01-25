<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>دورات منصه انا مهندس</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('lms/assets/images/favicon.png')}}">
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto&display=swap" rel="stylesheet">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="{{asset('lms/assets/css/app.css')}}">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		  <![endif]-->

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
                                    <li class="has-droupdown"><a href="index.html">الرئيسيه</a>
                                    </li>


                                    <li class="has-droupdown"><a href="courses.html">الدورات</a>
                                        <ul class="submenu">
                                            <li><a href="course_details.html">الهندسه المدنيه</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-droupdown"><a href="blogs.html">المقالات</a>

                                    </li>
                                    <li class="has-droupdown"><a href="pricing_table.html">خطط الاسعار</a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">

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
                                <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
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


        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title"> الدورات </h1>
                    </div>

                </div>
            </div>
            <ul class="shape-group">'
                <li class="shape-1">
                    <span></span>
                </li>
                <li class="shape-2 scene"><img data-depth="2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="shape"></li>
                <li class="shape-3 scene"><img data-depth="-2" src="{{asset('lms/assets/images/about/shape-15.png')}}" alt="shape"></li>
                <li class="shape-4">
                    <span></span>
                </li>
                <li class="shape-5 scene"><img data-depth="2" src="{{asset('lms/assets/images/about/shape-07.png')}}" alt="shape"></li>
            </ul>
        </div>

        <!--=====================================-->
        <!--=        Courses Area Start         =-->
        <!--=====================================-->
        <div class="edu-course-area course-area-1 section-gap-equal">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3">
                        <div class="edu-course-sidebar">
                            <div class="edu-course-widget widget-category">
                                <div class="inner">
                                    <h5 class="widget-title">تصفية حسب الفئات</h5>
                                    <div class="content">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check1" checked>
                                            <label for="cat-check1">فن &amp; تصميم <span>(٧)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check2">
                                            <label for="cat-check2">تطوير <span>(٢)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check3">
                                            <label for="cat-check3">اعمال <span>(٣)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check4">
                                            <label for="cat-check4">تسويق <span>(٦)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check5">
                                            <label for="cat-check5">أكاديميون <span>(٢)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="cat-check6">
                                            <label for="cat-check6">علم البيانات <span>(٩)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edu-course-widget widget-instructor">
                                <div class="inner">
                                    <h5 class="widget-title">معلم</h5>
                                    <div class="content">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="inst-check1">
                                            <label for="inst-check1">محمد عادل <span>(٢)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="inst-check2">
                                            <label for="inst-check2">كريم بحراوي <span>(٤١)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="inst-check3">
                                            <label for="inst-check3"> سهير <span>(٠١)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="inst-check4">
                                            <label for="inst-check4"> مصطفى <span>(٥)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="inst-check5">
                                            <label for="inst-check5">سيف شديد <span>(٢)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edu-course-widget widget-level">
                                <div class="inner">
                                    <h5 class="widget-title">مستوى</h5>
                                    <div class="content">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="level-check1">
                                            <label for="level-check1">جميع المستويات <span>(٣٢)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="level-check2">
                                            <label for="level-check2">مبتدئ <span>(٧)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="level-check3">
                                            <label for="level-check3">عالٍ <span>(٠١)</span></label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="level-check4">
                                            <label for="level-check4">متوسط <span>(٣١)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="edu-course-widget widget-price">
                                <div class="inner">
                                    <h5 class="widget-title widget-toggle">سعر</h5>
                                    <div class="content">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="price-check1">
                                            <label for="price-check1">كل الأسعار</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="price-check2">
                                            <label for="price-check2">حر</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="price-check3">
                                            <label for="price-check3">من أسفل إلى أعلى</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="price-check4">
                                            <label for="price-check4">من الأعلى إلى الأقل</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="price-check5">
                                            <label for="price-check5">مدفوع</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-pl--35">


                        <div class="edu-sorting-area">
                            <div class="sorting-left">
                                <h6 class="showing-text">وجدنا <span>٧١</span> الدورات المتاحة لك</h6>
                            </div>
                            <div class="sorting-right">
                                <div class="layout-switcher">
                                    <label>جريد</label>
                                    <ul class="switcher-btn">
                                        <li><a href="course-one.html" class="نشيط"><i class="icon-53"></i></a></li>
                                        <li><a href="course-four.html" class=""><i class="icon-54"></i></a></li>
                                    </ul>
                                </div>
                                <div class="edu-sorting">
                                    <div class="icon"><i class="icon-55"></i></div>
                                    <select class="edu-select">
                                        <option>المرشحات</option>
                                        <option>من أسفل إلى أعلى</option>
                                        <option>من الأعلى إلى الأقل</option>
                                        <option>ينظر الماضي</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @foreach($courses as $course)

                        <div class="edu-course course-style-4 course-style-8">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('show.course',$course->id)}}">
                                        <img src="{{asset('public/storage/courses/'.$course->photo)}}" alt="Course Meta">
                                    </a>
                                    <div class="time-top">
                                        <span class="duration"><i class="icon-61"></i> ٣ أسابيع</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="course-price">$٠٠.٩٢</div>
                                    <h6 class="title">
                                        <a href="course_details.html">{{$course->name}}</a>
                                    </h6>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">( ٨/ ٩.٤ تقييم)</span>
                                    </div>
                                        <p>{{$course->description}}</p>
                                    <ul class="course-meta">
                                        <li><i class="icon-24"></i> ٣١ الدروس</li>
                                        <li><i class="icon-25"></i> ٢٩ الطلاب</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="hover-content-aside">
                                <div class="content">
                                    <span class="course-level">هندسة</span>
                                    <h5 class="title">
                                        <a href="course_details.html">Vue - الدليل الكامل (w / Router ، Composition API)</a>
                                    </h5>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(٥)</span>
                                    </div>
                                    <ul class="course-meta">
                                        <li> ٣١ الدروس</li>
                                        <li>٥٣ ساعة</li>
                                        <li>مبتدئ</li>
                                    </ul>
                                    <div class="course-feature">
                                        <h6 class="title">ماذا ستتعلم؟</h6>
                                        <ul>
                                            <li>تعلم كيفية استخدام Python بشكل احترافي ، وتعلم Python 2 و Python 3!</li>
                                            <li>قم ببناء 6 مشاريع جميلة من العالم الحقيقي لمحفظة أعمالك (ليست لعبة مملة</li>
                                            <li>افهم النظرية الكامنة وراء Vue.js واستخدمها في المشروعات الحقيقية</li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="edu-btn btn-medium">أضف إلى السلة</a>
                                        <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>


                <ul class="edu-pagination ">
                    <li><a href="#" aria-label="Previous"><i class="icon-east"></i></a></li>
                    <li class="active"><a href="#">١</a></li>
                    <li><a href="#">٢</a></li>
                    <li><a href="#">٣</a></li>
                    <li class="more-next"><a href="#"></a></li>
                    <li><a href="#">٨</a></li>
                    <li><a href="#" aria-label="Next"><i class="icon-west"></i></a></li>
                </ul>

            </div>
        </div>
        <!-- End Course Area -->
        <!--=====================================-->
        <!--=        Footer Area Start          =-->
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
                                        <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                        <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
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
                                        <li><a href="privacy-policy.html">سياسه الخصوصيه</a></li>
                                        <li><a href="TermsandConditions.html">الشروط والاحكام</a></li>
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
                                        <li><a href="courses.html">الدورات</a></li>
                                        <li><a href="../socialmedia/profile.html">التواصل الاجتماعي </a></li>
                                        <li><a href="blogs.html">المجله</a></li>
                                        <li><a href="blogs.html">المقالات</a></li>
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
                                <p>حقوق الطبع والنشر ٢٠٢٢ <a >anaengineer</a> صمم بواسطة <a> anaengineer </a>. كل الحقوق محفوظة</p>
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

    <!-- Site Scripts -->
    <script src="{{asset('lms/assets/js/app.js')}}"></script>
</body>')


<!-- Mirrored from edublink.html.rtl.devsblink.com/index-modern-schooling.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 02:18:39 GMT -->
</html>
