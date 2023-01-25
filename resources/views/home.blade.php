<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>انا مهندس | منصة المهندس العربي</title>

  <!-- open links -->
  <link rel="stylesheet" href="{{asset('home/css/normalize.css')}}" />
  <link rel="stylesheet" href="{{asset('home/css/all.min.css')}}" />


  <link rel="stylesheet" href="{{asset('home/css/engineer.css')}}" />
  <link rel="stylesheet" href="{{asset('home/css/fontawesome-all.min.css')}}" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- end Links -->
  <link rel="stylesheet" href="{{asset('home/css/swiper-bundle.min.css')}}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


  <link rel="icon" type="imag/Logo.png" href="{{asset('home/images/MainLogo.png')}}" />
</head>

<body>
  <!-- Start Header -->
  <header class="header">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="logo">
          <a href="#"><img src="{{asset('home/images/HeaderLogo.png')}}" alt=""></a>
        </div>
        <button type="button" class="nav-toggler">
          <span></span>
        </button>
        <nav class="nav">
          <ul>

            <div class="user-pic-img">
              <a href="#"><img src="{{asset('home/images/avatarlast.svg')}}" alt=""></a>
            </div>
            <li><a href="index.html" class="active">الرئيسية</a></li>
            <li><a href="courses.html">كورسات</a></li>
            <li><a href="handasa.html">هندسات</a></li>
            <li><a href="magalla.html">المجلة</a></li>
            <li><a href="maqalat.html">المقالات</a></li>
            <li><a href="Comuni.html">المجتمع</a></li>
            <li> <a href="#">
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="ابحث.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </a> </li>

          </ul>
        </nav>
        <div class="user-pic-img-out">
          <a href="#"><img src="{{asset('home/images/sec2cours.png')}}" alt=""></a>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start  Section one -->
  
    <div class="section-one-holder">
      <div class="text-area">
        <h1>تخيل المستقبل الان</h1>
        <p>تعلم الهندسة من البداية إلى المستوى المتقدم من خلال المسارات التعليمية،
          باشتراكات مدفوعة </p>
        <button><a href="">اشترك الان</a></button>
      </div>
      <div class="media-area">
        <div class="main-img">
          <img src="{{asset('home/images/ENG1homepage1.png')}}" alt="">
          <div class="card-image">
            <img class="card-img" src="{{asset('home/images/Cardhomepage.png')}}" alt="">

          </div>
          <div class="icons">
            <img class="icon1" src="{{asset('home/images/icon1.png')}}" alt="">
            <img class="icon2" src="{{asset('home/images/dronee.png')}}" alt="">
            <img class="icon3" src="{{asset('home/images/icon3.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>


    <!-- End  Section one -->
    <div class="container">
      <div id="particles-js"></div>

    <!-- START  Section two -->
    <div class="section-two-holder">
      <div class="media-adrea-sec2">
        <img src="{{asset('home/images/ENGsection22.png')}}" alt="">
        <!-- <div class="cards-sec2">
        <img class="card1-sec2" src="images/section2card1.png" alt="">
        <img class="card2-sec2" src="images/section2card2.png" alt="">
      </div> -->
      </div>
      <div class="text-area-sec2">

        <h1>مرحبًا بك في منصة انا مهندس لكل ما يختص
          بالهندسة!</h1>
        <p>تعرَّف سريعًا على دليلك المعتمد في جميع المجالات والخدمات
          الهندسية..</p>
        <div class="text-col-holder-sec2">
          <div class="col1">
            <h1>كيف تتواصل معنا ؟</h1>
            <p>إذا ذُكرت الهندسة ذُكرت Iam Engineer فنحن نستطيع مساعدتك بكفاءة في أيٍّ مما يتعلق بالمسائل الهندسية.
              سواءً كان ذلك عن بُعد أو عبر مقابلة شخصية أو عبر إيفاد أحد مهندسينا المتخصصين.</p>
          </div>
          <div class="col2">
            <h1>كيف يمكننا مساعدتك؟</h1>
            <p>إذا ذُكرت الهندسة ذُكرت Iam Engineer فنحن نستطيع مساعدتك بكفاءة في أيٍّ مما يتعلق بالمسائل الهندسية.
              سواءً كان ذلك عن بُعد أو عبر مقابلة شخصية أو عبر إيفاد أحد مهندسينا المتخصصين.</p>
          </div>
          <div class="col3">
            <h1>لماذا نحن ؟</h1>
            <p>الهندسة هي مجال دقيق لا يحتمل الخطأ! لذا فعليك باعتماد أعمالك دائمًا مع أصحاب الخبرة والمصداقية والكفائة.
              وهو ما نحاول دائمًا توفيره في شركتنا لنكون أهلا للثقة في جميع أعمالنا مع جميع عملائنا!</p>
          </div>
          <div class="col4">
            <h1>من نحن</h1>
            <p>إذا ذُكرت الهندسة ذُكرت Iam Engineer فنحن نستطيع مساعدتك بكفاءة في أيٍّ مما يتعلق بالمسائل الهندسية.
              سواءً كان ذلك عن بُعد أو عبر مقابلة شخصية أو عبر إيفاد أحد مهندسينا المتخصصين.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End  Section two -->
    <!-- START  Section three -->

    <div class="section-three-holder">
      <div class="text-area-sec3">
        <div class="head-title-sec3">
          <h1>خدمتنا</h1>
        </div>
        <h1>تسعة سنوات من العمل المستمر على رفع كفاءة المهندس العربي.</h1>

        <div class="col-down-container">
          <div class="col">
            <h1>المحتوي الهندسي</h1>
            <p>على مدى عقد من الزمن تقريباً وبفريق هندسي من 17 دولة عربية ساهمت منصة أنا مهندس برفع كفاءة ومعرفة
              المهندسين العرب من المحيط إلى الخليج، لتصبح اليوم المنصة الهندسية الأولى متابعةً في العالم العربي بمعدل
              مليون مهندس ومهتم بمجالات الهندسة</p>
            <button>اشترك الان</button>
          </div>
          <div class="col">
            <h1>المحتوي الهندسي</h1>
            <p>على مدى عقد من الزمن تقريباً وبفريق هندسي من 17 دولة عربية ساهمت منصة أنا مهندس برفع كفاءة ومعرفة
              المهندسين العرب من المحيط إلى الخليج، لتصبح اليوم المنصة الهندسية الأولى متابعةً في العالم العربي بمعدل
              مليون مهندس ومهتم بمجالات الهندسة</p>
            <button>اشترك الان</button>
          </div>
        </div>
      </div>
      <div class="media-area-sec3">
        <img src="{{asset('home/images/sectionthreeeng.png')}}" alt="">
      </div>
    </div>




    <!-- End  Section three -->

    <!-- start   Section four -->
    <div class="section-four-holder">
      <h1>من نحن </h1>
      <h2>اول مجله عربيه في مجال الهندسه</h2>
      <p>تعرَّف سريعًا على دليلك المعتمد في جميع المجالات والخدمات
        الهندسية..</p>
      <div class="box-sec4-holder">
        <div class="media-sec4-holder">
          <img src="{{asset('home/images/foursecimg.png')}}" alt="">
        </div>
        <div class="text-sec4-holder">
          <h1>مجله انا مهندس</h1>
          <div class="iconsec4">
            <div class="icon1sec4">
              <img src="{{asset('home/images/icon1sec4.png')}}" alt="">
              <h3>مهندسين في جميع المجالات</h3>
            </div>
            <div class="icon1sec4">
              <img src="{{asset('home/images/icon2sec4.png')}}" alt="">
              <h3>موثوقين لدي عملائنا </h3>
            </div>
            <div class="icon1sec4">
              <img src="{{asset('home/images/icon3sec4.png')}}" alt="">
              <h3>موثوقين لدي عملائنا </h3>
            </div>
            <div class="icon1sec4">
              <img src="{{asset('home/images/icon4sec4.png')}}" alt="">
              <h3>مهندسين في جميع المجالات</h3>
            </div>
          </div>
          
          <button>تصفح المشاريع و حمل المجله</button>
        </div>
      </div>
    </div>
    <!-- End  Section four -->

    <!-- start  Section five -->
    <div class="home-slide">
    <div class="section-five-holder">
      <div class="sec5-content-top">
        <div class="text-sect">
          <h2>هندسه مستدامه</h2>
          <h3>دورات تدريبيه احترافيه للمهندس العربي</h3>
        </div>
        <button><a href="#">مشاهدة الكل</a></button>
      </div>
      <div class="container swiper">
        <div class="slide-container">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-box">
                <img src="{{asset('home/images/slidesec5.png')}}" alt="" />
              </div>
              <div class="profile-details">

                <div class="name-job">
                  <h3 class="name">هندسه الحاسبات</h3>
                  <h4 class="job">Full Stack Developer</h4>
                </div>
                <button><a href="#">المزيد</a></button>
              </div>
            </div>



            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    </div>
    <!-- end  Section five -->
    <!-- START  Section six -->
    <div class="seciton-six-holder">
      <h1>مقالاتنا</h1>
      <h2>آخر مستجدات الهندسة</h2>
      <div class="gallery">
        <ul class="gallery-filter js-filter">
          @foreach  ($category as $Category)
          <li class="active"><a href="#" data-filter=".all">{{$Category->name}}</a></li>
          @endforeach
        </ul>
        <ul class="gallery-list js-gallery">
          <li class="gallery-item all cat4">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2><a href="https://dummyimage.com/1200x800" data-original-width="1200" data-original-height="800"
            src="{{asset('home/images/gallerypic6.png')}}" width="400" height="400" alt=""></a>
          </li>

          <li class="gallery-item all cat4">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="{{asset('home/images/gallerypic1.jpg')}}" data-original-width="800" data-original-height="1200"
                src="{{asset('home/images/gallerypic6.png')}}" width="400" height="400" alt=""></a>
          </li>

          <li class="gallery-item all cat1">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/1200x800" data-original-width="1200" data-original-height="800"><img
              src="images/gallerypic6.png" width="400" height="400" alt=""></a>
          </li>
          <li class="gallery-item all cat1">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/1200x800" data-original-width="1200" data-original-height="800"><img
              src="images/gallerypic6.png" width="400" height="400" alt=""></a>
          </li>
          <li class="gallery-item all cat1">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/800x800" data-original-width="800" data-original-height="800"><img
              src="images/gallerypic6.png" width="400" height="400" alt=""></a>
            </li>
          <li class="gallery-item all cat4">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/800x800" data-original-width="800" data-original-height="800"><img
                src="images/gallerypic6.png" width="400" height="400" alt=""></a>
          </li>
          <li class="gallery-item all cat4">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/800x800" data-original-width="800" data-original-height="800"><img
                src="images/gallerypic6.png" width="400" height="400" alt=""></a>
          </li>
          <li class="gallery-item all cat4">
            <h2>المهندسون اليابانيون يتمكنون من الوصول
            </h2>
            <a href="https://dummyimage.com/800x800" data-original-width="800" data-original-height="800"><img
                src="images/gallerypic6.png" width="400" height="400" alt=""></a>
          </li>
         
        </ul>

      </div>
    </div>

    <!-- end  Section six -->
    <div class="section-sev-holder">
      <h1>ارسل لنا بريدك الالكتروني ل الاشتراك</h1>
      <h2> سنرسل لك كل مقالاتنا و تطورتنا</h2>
      <form action="/action_page.php">
        <div class="serchhh">
          <input class="send-email-lab" type="email" placeholder="البريد الالكتروني" id="email" name="email">
          <input class="send-email-btn" type="submit" value="  ">
        </div>
      </form>
      <!-- <img src="images/sendemailimg.png" alt=""> -->
    </div>


  </div>
  <div class="footer">
    <div class="row-foter">
      <div class="col-foter">
        <img src="images/whitelogo.png" alt="">
        <h1>أول منصة للمهندس العربي
        </h1>
        <p>شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات
          تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي.
          وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة</p>
      </div>
      <div class="col-foter">
        <a href="">
          <h1>تابع</h1>
        </a>
        <a href="">
          <h2>سياسة الخصوصية</h2>
        </a>
        <a href="">
          <h2>الشروط والاحكام</h2>
        </a>
        <a href="">
          <h2>الأسئلة الشائعة</h2>
        </a>
        <a href="">
          <h2>تطوع معنا</h2>
        </a>
      </div>
      <div class="col-foter">
        <a href="">
          <h1>تصفح</h1>
        </a>
        <a href="">
          <h2>سياسة الخصوصية</h2>
        </a>
        <a href="">
          <h2>الشروط والاحكام</h2>
        </a>
        <a href="">
          <h2>الأسئلة الشائعة</h2>
        </a>
        <a href="">
          <h2>التحقق من صحة الشهادة</h2>
        </a>
      </div>
      <div class="col-foter">
  
        <h1>أول منصة للمهندس العربي</h1>
        <img src="images/footermap.png" alt="">
      </div>
    </div>

    <div class="bottom-row">
    
      <h3>جميع الحقوق محفوظة © 2014 - 2022 منصة أنا مهندس</h3>
      
    </div>
  </div>
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js'></script>
<script src="{{asset('home/js/gallery.js')}}"></script>
 
<script src="{{asset('home/js/particles.min.js')}}"></script>
<script src="{{asset('home/js/main.js')}}"></script>
<script src="{{asset('home/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('home/js/script.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
 


</html>