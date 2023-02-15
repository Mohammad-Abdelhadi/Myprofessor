
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
      {{-- @include('admin.body') --}}
       
      <div  style="padding-bottom:30px;" class="container-fluid page-body-wrapper" >
        <div   class="container" align="center" >
            <div style="padding-top:10px;">

            </div>

            @if(session()->has('message'))
            <div class="alert alert-success">
            <button  type= "button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
            </div>
                @endif


<div style="padding-top:30px;">

</div>
            <table >
            <tr align="center" style="background-color:grey;color:white;" >
                <td style="padding:20px;">id</td>
            <td style="padding:20px;">Name</td>
            <td style="padding:20px;">Major</td>
            <td style="padding:20px;">Description</td>
            <td style="padding:20px;">teaching_level</td>
            <td style="padding:20px;">Phone</td>
            <td style="padding:20px;">Price</td>
            <td style="padding:20px;">Study_Type</td>
            <td style="padding:20px;">city</td>
            <td style="padding:20px;">address</td>
            <td style="padding:20px;">Image</td>
            <td style="padding:20px;">Update</td>
            <td style="padding:20px;">Delete</td>

            </tr>
            @foreach ($data as $teachers)
                
            <tr align="center" style="background-color:white;color:black;">
                <td style="padding:20px;">{{$teachers->id}}</td>
                <td style="padding:20px;">{{$teachers->teacher_Name}}</td>
                <td style="padding:20px;">{{$teachers->teacher_Major}}</td>
                <th style="padding:20px;"  >{{$teachers->teacher_Description}}</th>
                <td style="padding:20px;">{{$teachers->teaching_level}}</td>
                <td style="padding:20px;">{{$teachers->Phone}}</td>
                <td style="padding:20px;width:100px">{{$teachers->lesson_price}} JD</td>
                <td style="padding:20px;">{{$teachers->Study_Type}}</td>
                <td style="padding:20px;">{{$teachers->city}}</td>
                <td style="padding:20px;">{{$teachers->address}}</td>
                

               
                <td style="padding:20px;">
                   <img width="100px" height="200px" src="/teacherimage/{{$teachers->image}}" alt="">
                </td>
                <td style="padding:20px;">
                    <a class="btn btn-primary" href="{{url('updateview', $teachers->id)}}">Update</a>
                </td>
                <td style="padding:20px;">
                    <a  class="btn btn-danger" href="{{url('deleteteachers', $teachers->id)}}">Delete</a>
                </td>
                
                </tr>
               
                @endforeach

            </table>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
  </body>
</html>