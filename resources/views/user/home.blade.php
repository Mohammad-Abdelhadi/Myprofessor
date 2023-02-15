{{-- لون نهدي مرتب color: #963ff3; --}}
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap');
      </style>
    <title>My Proffesor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
{{--  --}}


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">


       @include('user.navbar-user');


{{--
      <nav class="navbar navbar-expand-lg">
        <div class="container">


          <a class="navbar-brand" href="../"><h2>My <em style="color:white;">Professor</em> </h2>
        <h6 style="text-align: center;color:white;"> Learn To Earn </h6></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">الرئيسية
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teachers_Page" >المعلمين</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">من نحن؟</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">اتصل بنا</a>
              </li>
            <li class="nav-item">
              @if (Route::has('login'))

                  @auth

                        <x-app-layout>
                    </x-app-layout>

                  @else
                  <li> <a class="nav-link" href="{{ route('login') }}" >تسجيل دخول</a></li>

                      @if (Route::has('register'))
                      <li>  <a class="nav-link" href="{{ route('register') }}" >مستخدم جديد</a></li>
                      @endif
                  @endauth

             @endif
                </li>



            </ul>
          </div>
        </div>
      </nav> --}}
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    {{--------------------------------------------- slide show ----------------------- --}}
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            {{-- <h4>موقع ماي بروفيسور </h4>
            <h2>Get your best teacher</h2> --}}
          </div>
        </div>

  </div>
    </div>
    <!-- Banner Ends Here -->
    {{-- <-------- teachers section --------> --}}
    @if(session()->has('message'))
    <div dir="rtl" class="alert alert-success" >
    <button  type= "button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
    </div>
        @endif
  @include('user.teachers')
{{--
    <div class="best-features">
      <div class="container" dir="rtl">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h1 style="text-align:right;">من نحن؟</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">

              <br>
              <br>
              <br>
            <div style="">
              <h4 style="text-align:right;color:#000000;">نحن فريق من جامعة الحسين بن طلال قررنا إنشاء موقع يسهل على الطالب الوصول الى اساتذة خصوصي لمساعدتهم في دراستهم باسعار مناسبة جداً ومن غير تعب وبسهولة تامة عن طريق موقعنا (MY PROFFESOR).
              <h4 style="text-align:right;color:#000000;">فهو يسمح للطالب بحجز اي استاذ يريده وحسب الوقت الذي يناسبه ويسمح للمُعلم ان يوافق على حجوزات الطالب عن طريق صفحة تحكم كاملة بالطلبات </h4>
            </div>

              </a>
              </li>
              </h4>


            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="https://www.almamlakatv.com/images/articles/big/2019/10/main_image5da6ce12e1250.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> --}}

{{-- ----------------------------اذا كنت مستخدم جديد ----------------}}
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8" >
                  <h4 style="text-align:right;" > : <a href="/register"><strong class="color-primary">ملاحظة قبل الحجز </strong></a></h4>
                  <h4 style="text-align:right;" > اختر الاستاذ المناسب ومن ثم ضع الوقت المناسب لك وانتظر الرد من الاستاذ على شات الموقع </h4>
                </div>
                 <div class="col-md-4" style="text-align:left;" >
                  <a href="/teachers_Page" style="text-align:left;" class="filled-button bg-primary">احجز الان</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<br>

{{----------------------- about-------------------------- --}}

    <body>

        <!-- ***** Preloader Start ***** -->
        <!-- <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
         ***** Preloader End ***** -->

        <!-- Header -->

        <!-- Page Content -->
        <div class="page-heading about-heading header-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            {{-- <h4>مزايا واهداف موقعنا</h4> --}}
                            <h2>My Professor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>
    <br>
    <br>
    <div  style="text-align: right;font-size:20px;font-weight:bold; text-align:center;">
      :  مزايا الموقع واهدافه

    </div>
    <br>
    <br>

        <div class="services">

          <div class="container">

              <div class="row">
                  <div class="col-md-4">
                      <div class="service-item">
                          <div class="icon">
                              <i class="fa fa-gear"></i>
                          </div>
                          <div class="down-content">
                              <h4 >سهولة الاستخدام</h4>
                             <p> السهولة التي يمكن للزائر من خلالها تصفح الموقع
                              ايضاً تم تصميم واجهات مرنة ومفهومة لجميع المستخدمين
                             </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="service-item">
                          <div class="icon" >
                            <i class="bi bi-chat-right-dots"></i>
                                </div>
                          <div class="down-content">
                                    <h4>سهولة التواصل</h4>
                                    <p>
                                    تم اضافة شات بالموقع لسهولة التواصل بين المعلم والطالب
                                    </p>
                                    {{-- <a href="#" class="filled-button">Details</a> --}}
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4" >
                      <div class="service-item">
                          <div class="icon">
                            <i class="bi bi-front"></i>                          </div>
                          <div class="down-content">
                              <h4> تصميم مميز</h4>
                  <p>
                    تم استخدام اللون الأبيض والأزرق وهذا اللون يرمز الى التعليم. </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


        <div class="best-features about-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="assets/images/slide555.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6"  dir=rtl style="text-align: right;">
                        <div class="left-content" >
                            <h4 style="font-size:20px;font-weight:bold" >من نحن ؟ </h4>
                            <p style="font-size:17px" >نحن فريق في جامعة الحسين بن طلال مكون من خمسة طلاب , وجدنا حاجة السوق الأردني لموقع الكتروني يربط بين المدرس الخصوصي وبين الطلبة من مختلف مناطق المملكة وذلك لان المرحلة التعليمة التي تبدأ من الصفوف الدنيا وصولنا إلى المراحل الإعدادية ومن ثم الثانوية مهمة كونها بداية تشكل المعرفة والثقافة لدى الطلبة ولكي يتم تحقيق أقصى استفادة ممكنه من كل هذه المراحل فيكون ذلك من خلال تعزيز ما يأخذه الطلاب داخل المدارس ومن ثم الاستعانة ب أستاذ خصوصي من موقعنا الذي يسهل هذه العملية ويجعلها بسيطة وسلسة مع تجربة استخدام مميزة..<br><br>
                                </p>
                                <div>
                            <ul class="social-icons" style="text-align:center;">
                                <li><a href="https://www.facebook.com/AHUOfficialPage"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/AHUUniversity"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--  --}}






        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


        <!-- Additional Scripts -->
        {{-- <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/accordions.js"></script>


        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) { //declaring the array outside of the
                if (!cleared[t.id]) { // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ''; // with more chance of typos
                    t.style.color = '#fff';
                }
            }
        </script>


    --}}

    <div class="send-message" dir=rtl>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="text-align:right">
              <h2>اذا كان لديك اي اقتراحات/مشاكل لا تتردد بالتواصل معنا:</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="الاسم  " required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="البريد الالكتروني" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="الموضوع" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="الاقتراح/المشكلة بشكل كامل" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12" style="text-align:right">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">إرسال</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4" style="text-align:right;">
            <ul class="accordion">
              <li>
                  <a>•	كيف أقوم باختيار المعلم المناسب  ؟ </a>
                  <div class="content">
                      <p style="font-size:15px;">بالذهاب الى صفحة المعلمين , بالنزول للاسفل يوجد مربع للبحث عن معلم أو للبحث عن مادة
                        بعد البحث يمكنك اختيار المعلم الذي يناسبك</p>
                  </div>
              </li>
              <li>
                  <a>•	كيف احجز حصة دراسية ؟ </a>
                  <div class="content">
                      <p>من صفحة المعلمين أولاً اختر الموعد المناسب , ومن ثم اضغط على زر احجز الان</p>
                  </div>
              </li>
              <li>
                  <a>•كيفية التسجيل بالموقع ؟ </a>
                  <div class="content">
                      <p>من الصفحة الرئيسية اختار تسجل لأول مرة أو من خلال الضغط هنا </p>
           </div>

              </li>
              <li>
                <a>•	التسجيل كمعلم ؟</a>
                <div class="content" style="font-weight: 900;">
<p> - اذا تم اختيار التسجيل كَمعلم, سيتطلب منك ادخال معلومات شخصية(اسمك ,بريد الكتروني ، رقم الهاتف ,المحافظة ، مكان السكن , وكلمة سر)</p>
              </div>
              </li>
              <li>
                <a>•	كيفية التواصل مع المدرس / الأستاذ ؟ </a>
                <div class="content">
                 <p> عن طريق الذهاب الى صفحة حجوزاتي والضغط على (لفتح المحادثة اضغط هنا) , وبعدها يوجد مربع للبحث قم بالبحث على اسم المعلم والتواصل معه</p>

              </div>
              </li>
              <li>
                <a>•طريقة الدفع عند الحجز؟</a>
                <div class="content">
                    <p> يتم الاتفاق بين الطرفين (المعلم و الطالب) على طريقة الدفع .</p>

                </div>
            </li>
          <li>
            <a>•مكان اعطاء المحاضرات ؟</a>
            <div class="content">
                <p>للطرفين حرية الاختيار بما يناسبهما , ولكن نحن كموقع نقترح برنامج (zoom) </p>

            </div>
        </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- ---------------------foter --------------------------------- --}}

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 My Proffesor  |  learning website

            - Univ-Design: King Hussien Bin Talal University Str</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
