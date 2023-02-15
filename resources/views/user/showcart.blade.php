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
      
      table, th, td {
  border: 0.2px solid rgb(236, 236, 236);
  border-collapse: collapse;
}
th, td {
  background-color: #fdfdfd;
}
.table-th td{
  color: #000000;
  background-color: #d3e3ff;
}  

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


       @include('user.navbar-user');
      
    </header>
    
<div style="padding:100px; " align="center" dir=rtl>
  <div>
    @if(session()->has('message'))
    <div dir="rtl" style='text-align:center;font-size:22px;' class="alert alert-danger" >
    <button  type= "button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
    </div>
        @endif
       </div>
      
      {{-- style="border:1px solid black; --}}
  <table  style=" text-align: center" align="center">
  <tr class="table-th" style="background:gray; color:#fff; ">
    <td style="padding:10px; font-size: 15px;width:20px;">رقم الطلب</td>


    <td style="padding:10px; font-size: 15px;">اسم المعلم</td>
    <td style="padding:10px; font-size: 15px;">اسم المادة</td>
    <td style="padding:10px; font-size: 15px; width:150px; ">المرحلة الدراسية </td>
    <td style="padding:10px; font-size: 15px;">رقم الهاتف </td>
    <td style=" font-size: 15px;">التاريخ/الساعة</p> 
    </td>
    <td style="padding:10px; font-size: 15px; width:100px"> سعر الحصة/ساعة  </td>
    <td style="padding:10px; font-size: 15px;"> نوع التدريس </td>
    <td style="padding:10px; font-size: 15px;">الموقع</td>
    <td style="padding:10px; font-size: 15px;">للتواصل</td>
    <td style="padding:10px; font-size: 15px;">حالة الطلب</td>
    <td style="padding:10px; font-size: 15px;">إدارة الطلب </td>

    
    </tr >
    @foreach ($cart as $carts)

    <tr align="center">

      <td style="padding:10px; font-size: 15px;">{{$carts->id}} </td>


      <td style="padding:10px; font-size: 15px;">{{$carts->name}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teacher_Major}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teaching_level}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->t_phone}}</td>
      {{-- <td>{{$carts->stu_phone}}</td> --}}
      <td style="padding:10px; font-size: 15px;">{{$carts->time}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->lesson_price}}JD</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->Study_Type}}</td>
      <td style="padding:10px; font-size: 15px;width:120px;">{{$carts->city}} / {{$carts->address}} </td>
      {{-- <td style="margin-top:15px;padding:5px; font-size: 20px;" > <button class="btn btn-light"> <a  href="{{url('chatify/' . $carts->to_id)}}">لفتح المحادثة اضغط هنا</a></button></td> --}}
      <td style="margin-top:15px;padding:5px; font-size: 20px;" > <button class="btn btn-light"> <a  href="{{url('chatify/' . $carts->t_id)}}">لفتح المحادثة اضغط هنا</a></button></td>
  
      {{-- <a href="{{ route('chatify', ['id' => $carts->id]) }}" class="btn btn-primary">Chat with user</a> --}}
      
        
      <td style="padding:10px; font-size: 15px;" class="status-{{$carts->status}}">{{$carts->status}} </td>
      <td style="padding:10px; font-size: 15px;">
        {{-- // لما الطلب ينقبل من عند الاستاذ الطالب ما يقدر يلغيه
        // امكانية الغاء الطلب بتكون قبل ما الاستاذ يوافق  --}}

        @unless($carts->status == 'تم_التسليم' OR $carts->status == 'ملغي' OR $carts->status == 'مقبول')
        <a class="btn btn-danger" onclick="return confirm('هل أنت متأكد من الغاء هذا الطلب؟')" href="{{url('cancel_appoint',$carts->id)}}">الغاء الحجز </a>      

        @endunless
        {{-- <td style="padding:10px; font-size: 15px;color:rgb(0, 179, 0);">{{$user->status}} </td> --}}

        {{-- <a href="{{url('cancel_appoint',$carts->id)}}" onclick="return confirm('هل أنت متأكد من الغاء هذا الطلب؟')" class="btn btn-danger">الغاء الحجز </a> --}}
        @unless($carts->status == 'مقبول' OR $carts->status == 'ملغي' OR $carts->status == 'بإنتظار_المراجعة'   )
        <select name="" id="" dir="ltr" style="align-content: center">
          <option value="1">&#9733;</option>
          <option value="2">&#9733;&#9733;</option>
          <option value="3">&#9733;&#9733;&#9733;</option>
          <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
          <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        
        <input style="display: flex; justify-content: center; align-items: center;">
          <button type="submit" style="background-color:blue; color:white; width:60px; height:40px; margin: auto;">تقييم</button>
   
        
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
