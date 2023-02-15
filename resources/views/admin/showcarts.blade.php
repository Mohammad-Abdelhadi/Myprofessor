 <!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      <div dir=rtl>
      <form action="{{url('search_request')}}" method="get" class="form-inline"  dir='rtl' >
        @csrf
        <div style="padding-top:110px;transform:translate(530px, 0px)" dir=rtl >


        <input style="color: white;
        transform: translate(135px, 30px);
        width: 130px" class="form-control" type="search" name="search_request"  >
        <input type="submit" value="بحث" class="btn btn-success" style="background-color: #42b842;)" >

     </div>
      </form>
    </div>
      @include('admin.navbar')
        <!-- partial -->
       {{-- @include('admin.body')  --}}



      <div  style="padding-bottom:30px;" class="container-fluid page-body-wrapper" >
        <div   class="container" align="center" >
            <div style="padding-top:10px;">

            </div>


<div style="padding:100px; " align="center" dir=rtl>
  <div>
    @if(session()->has('message'))
    <div dir="rtl" style='text-align:center;font-size:22px;' class="alert alert-success" >
    <button  type= "button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
    </div>
        @endif
       </div>
  <table  style=" text-align: center; background-color:white;" align="center">
  <tr style="background:gray; color:#fff; ">
    <td style="padding:10px; font-size: 15px;">رقم الطلب</td>
    <td style="padding:10px; font-size: 15px;">اسم الطالب</td>
    <td style="padding:10px; font-size: 15px;">اسم المعلم</td>
    <td style="padding:10px; font-size: 15px;">اسم المادة</td>
    <td style="padding:10px; font-size: 15px; width:200px; ">المرحلة الدراسية للطالب  </td>
    <td style="padding:10px; font-size: 15px;">رقم هاتف الطالب </td>
    <td style="padding:10px; font-size: 15px;">رقم هاتف المعلم </td>
    <td style="padding:10px; font-size: 15px; text-align:auto;">التاريخ &nbsp; / &nbsp; &nbsp;الساعة</td>
    <td style="padding:10px; font-size: 15px; width:140px;">سعر الحصة </td>
    <td style="padding:10px; font-size: 15px;"> نوع التدريس </td>
    <td style="padding:10px; font-size: 15px;">الموقع</td>
    <td style="padding:10px; font-size: 15px;">حالة الطلب</td>
    <td colspan='3'style="padding:10px; font-size: 15px; "> ادارة الطلب </td>
    {{-- <td style="padding:10px; font-size: 15px;">الغاء الطلب </td>
    <td style="padding:10px; font-size: 15px;">حذف الطلب </td> --}}

    </tr >
      @csrf
    @foreach ($cart as $carts)
    <form action="{{url('addcarts',$carts->id)}}" method="POST" style="text-align: center">

    <tr align="center" style="color:black;" width="auto" height="auto">
      <td style="padding:10px; font-size: 15px; font-color:black;">{{$carts->id}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->stu_name}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->name}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teacher_Major}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->teaching_level}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->stu_phone}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->t_phone}}</td>
      {{-- <td>{{$carts->stu_phone}}</td> --}}
      <td style="padding:10px; font-size: 15px;" width="300px">{{$carts->time}}</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->lesson_price}}JD</td>
      <td style="padding:10px; font-size: 15px;">{{$carts->Study_Type}}</td>
      <td style="padding:10px; font-size: 15px;"width="287px">{{$carts->stu_city}} / {{$carts->stu_address}} </td>

      <td style="padding:10px; font-size: 15px;" class="status-{{$carts->status}}">{{$carts->status}} </td>

      {{-- كبسات الالغاء والقبول والحذف --}}
      <td style="padding:10px; font-size: 15px;width:150em;">
        <a href="{{url('approved',$carts->id)}}" onclick="return confirm('هل أنت متأكد من قبول هذا الطلب؟')" class="btn btn-success">  قبول</a>
        </td>
        <td style="padding:10px; font-size: 15px;">
          <a href="{{url('cancel_appoint',$carts->id)}}" onclick="return confirm('هل أنت متأكد من الغاء هذا الطلب؟')" class="btn btn-danger">  الغاء</a>

         </td>
      <td style="padding:10px; font-size: 15px;">
        <a href="{{url('finsh_order',$carts->id)}}" onclick="return confirm('هل أنت متأكد من تسليم هذا الطلب؟')" style="text-align:center;" class="btn btn-secondary">تم التسليم  </a>

       </td>



    </tr>





    @endforeach


</form>

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
