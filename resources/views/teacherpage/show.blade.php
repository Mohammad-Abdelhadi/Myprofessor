{{-- لون نهدي مرتب color: #963ff3; --}}
<!DOCTYPE html>
<html lang="en">
    {{-- <base href="/public"> --}}
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

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


       @include('../user/navbar-user');
 
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
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <button Style="border-radius: 63%;">  المعلمين </button>
          <div class="text-content">
            {{-- <h4>موقع ماي بروفيسور </h4>
            <h2>Get your best teacher</h2> --}}
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            {{-- <h4>Flash Deals</h4>
            <h2>Get your best products</h2> --}}
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            {{--  --}}
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    {{-- <-------- teachers section --------> --}}
  @include('../user/teachers')

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
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8" >
                  <h4 style="text-align:right;" >اذا كنت <a href="/register"><strong class="color-primary">مستخدم جديد </strong></a></h4>
                  <h4 style="text-align:right;" >سجل الآن ووفر عليك الكثير من الوقت</h4>
                </div>
                <div class="col-md-4" style="text-align:left;" >
                  <a href="/register" style="text-align:left;" class="filled-button bg-primary">التسجيل الان</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
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
