<base href="/public">

<nav class="navbar navbar-expand-lg">
    <div class="container">
      <img class="logo" src="assets/images/logoooo.png" width="80px" style="margin-right:14px;margin-bottom:14px;" alt="">
      <a class="navbar-brand" href="../"><h2> My <em style="color:white;">Professor</em> </h2> 
    <h6 style="text-align: center;color:white;"> Learn To Earn </h6></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">الرئيسية
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="teachers_Page" >المعلمين</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="about">من نحن؟</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact" >أسئلة شائعة</a>
          </li>

          {{-- اذا دخل المستخدم على الموقع --}}
        <li class="nav-item">        
          @if (Route::has('login'))
          
              @auth
              <li class="nav-item">
                {{-- [ {{$count}} ]حجوزاتي  --}}
                <a class="nav-link" href="{{url('showcart')}}" style="border:1px solid ; padding:10px;"> ({{$count}})  حجوزاتي</a>
              </li>
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
  </nav>