{{-- لون نهدي مرتب color: #963ff3; --}}
<!DOCTYPE html>
<html lang="en">
  <base href="/public">

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


       @include('teacher.navbar');

    </header>

<div style="padding:100px; " align="center" dir=rtl>
  <div>
    @if(session()->has('message'))
    <div dir="rtl" style='text-align:center;font-size:22px;' class="alert alert-success" >
    <button  type= "button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
    </div>
        @endif
       </div>
  <table  style="border:1px solid black; text-align: center;width:1402px;" align="center" >
  <tr style="background:gray; color:#fff;">
    <td style="padding:10px; font-size: 15px;">رقم الطلب</td>
    <td style="padding:10px; font-size: 15px;">اسم الطالب</td>
    <td style="padding:10px; font-size: 15px;">اسم المادة</td>
    <td style="padding:10px; font-size: 15px; width:236px; ">المرحلة الدراسية للطالب  </td>
    <td style="padding:10px; font-size: 15px;">رقم الهاتف </td>
    <td style="padding:10px; font-size: 15px; text-align:auto;width:128px;"> التاريخ/الساعة </td>
    {{-- &nbsp;  &nbsp; &nbsp --}}
    <td style="padding:10px; font-size: 15px; width:209px;">سعر الحصة / ساعة  </td>
    <td style="padding:10px; font-size: 15px;"> نوع التدريس </td>
    <td style="padding:10px; font-size: 15px;">الموقع</td>
    <td style="padding:10px; font-size: 15px;">للتواصل</td>

    <td style="padding:10px; font-size: 15px;">حالة الطلب</td>
    <td style="padding:10px; font-size: 15px;width:500px">إدارة الطلب </td>

    </tr >
    @foreach ($cart as $carts)
    <tr align="center">
      <td style="padding:10px; font-size: 15px;">{{$carts->id}}</td>


      <td style="padding:10px; font-size: 15px;">{{$carts->stu_name}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teacher_Major}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teaching_level}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->stu_phone}}</td>
      {{-- <td>{{$carts->stu_phone}}</td> --}}
      <td style="padding:10px; font-size: 15px;">{{$carts->time}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->lesson_price}}JD</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->Study_Type}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->stu_city}} / {{$carts->stu_address}} </td>
      <td style="margin-top:15px;padding:5px; font-size: 20px;" > <button class="btn btn-light"> <a  href="{{url('chatify/' . $carts->s_id)}}">لفتح المحادثة اضغط هنا</a></button></td>

      <td style="padding:10px; font-size: 15px;" class="status-{{$carts->status}}">{{$carts->status}} </td>

      <td style="padding:10px; font-size: 15px;" width="200px;">

         @unless($carts->status == 'مقبول' OR$carts->status == 'ملغي'  or  $carts->status == 'تم_التسليم')
        <a href="{{url('approved',$carts->id)}}" onclick="return confirm('هل أنت متأكد من قبول هذا الطلب؟')" class="btn btn-success">  قبول</a>

        @endunless
        @unless($carts->status == 'ملغي' or $carts->status == 'تم_التسليم'  )
        <a href="{{url('cancel_appoint',$carts->id)}}" onclick="return confirm('هل أنت متأكد من الغاء هذا الطلب؟')" class="btn btn-danger" >  الغاء</a>

        @endunless
        @unless( $carts->status == 'ملغي' or  $carts->status == 'تم_التسليم'  )

        <a href="{{url('finsh_order',$carts->id)}}" onclick="return confirm('هل أنت متأكد من تسليم هذا الطلب؟')" style="text-align:center;" class="btn btn-secondary">تم التسليم  </a>

        </select>

        @endunless


       </td>


    </tr>

    @endforeach

  </table>

</div>


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
