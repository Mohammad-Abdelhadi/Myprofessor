<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->
       {{-- @include('admin.body')  --}}

      <div  style="padding-bottom:30px;" class="container-fluid page-body-wrapper" >
        <div   class="container" align="center" >
            <div style="padding-top:10px;">

            </div>
            <form action="{{url('search_user')}}" method="get" class="form-inline" style="float:right;padding:23px;">
              @csrf
              <div >
                <div style="transform:translate(-250%,116%);width: 56px;
                height: 30px" width=200px>
              <input type="submit" value="بحث" class="btn btn-success" style="margin-right:5px;background-color: #42b842" >
            </div>
              <input style="color: white" class="form-control" type="search" name="search_user"  dir="rtl">
            </div>
            </form>


<div style="padding:100px; " align="center" dir=rtl>
  <div>
    @if(session()->has('message'))
    <div dir="rtl" style='text-align:center;font-size:22px;' class="alert alert-success" >
    <button  type= "button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
    </div>
        @endif
       </div>

  <table dir=ltr  style="border:2px solid rgb(255, 255, 255); text-align: center" align="center">
  <tr style="background:gray; color:#fff;" >
    <td style="padding:10px; font-size: 15px;"> ID</td>
    <td style="padding:10px; font-size: 15px;">Role_id</td>
    <td style="padding:10px; font-size: 15px;">Name</td>
    <td style="padding:10px; font-size: 15px; width:140px;">Email </td>
    <td style="padding:10px; font-size: 15px;">  phone </td>
    <td style="padding:10px; font-size: 15px;">city</td>
    <td style="padding:10px; font-size: 15px;">address</td>
    <td style="padding:10px; font-size: 15px;" width="899px">status</td>

    </tr >
      @csrf
    @foreach ($user as $users)
    <form action="{{url('allusers',$users->id)}}" method="POST" style="text-align: center">

    <tr align="center" width="auto" height="auto">
      <td style="padding:10px; font-size: 15px;">{{$users->id}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->role_id}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->name}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->email}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->phone}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->city}}</td>
      <td style="padding:10px; font-size: 15px;">{{$users->address}}</td>
           {{-- <td style="padding:10px; font-size: 15px;color:rgb(0, 179, 0)">{{$carts->status}} </td> --}}

           <td style="padding:10px; font-size: 15px;" class="status-{{$users->status}}">{{$users->status}} </td>

      {{-- <td style="padding:10px; font-size: 15px;" width="100px">@if s</td> --}}

    </tr>





  @endforeach


</form>

  </table>
  @if(method_exists($user,'links'))


              {{-- رقم الصفحات الي رح يظهرن فيه المعلمين --}}
            <div class="d-flex justify-content-center">

            {!!$user->links()!!}
            </div>
            @endif
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
