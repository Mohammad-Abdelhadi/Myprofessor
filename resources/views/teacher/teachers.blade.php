
      <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>

          strong{
            padding-left:7px;
            padding-bottom:7px;
            margin-bottom:4;
          }
          .teachers{

/* font-size: 20px;      */
     }
        </style>
      </head>


      <div >
        @if(session()->has('message'))
<div dir="rtl" class="alert alert-success" >
<button  type= "button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
    @endif
  </div>
<base href="/">

   <div class="latest-products"  >
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="section-heading">
                <h2  style="text-align:right;   font-weight: bold;">لائحة المُعلمين</h2>
                <a style = "position:absolute; left; color: #01B3FF;" href="teachers_Page">إظهار جميع المُعلمين</a>
                {{-- فورم للبحث  سيررررتش --}}
                <form action="{{url('search')}}" method="get" class="form-inline" style="float:right;padding:23px;">
                  @csrf
                  <input type="submit" value="بحث" class="btn btn-success" style="margin-right:5px;background-color:#42b842" >
                  <input class="form-control" type="search" name="search" placeholder="ابحث عن الاسم او المادة" dir="rtl">
                  
                </form>
                {{--  --}}
              </div>
              
            </div> 
          


            @foreach ($data as $teachers)
        <div class="col-md-4"  >
              <div class="product-item" style="border:1px blue dotted; width:manual;" >
                    <a href="#"><img style="border-radius: 50% "  src="/teacherimage/{{$teachers->image}}" alt=""></a>
                    <div class="down-content"  style="text-align:right;min-height: 500px;" >
                      
                      {{-- {{route('teacherpage.show',['teachers'=>$teachers['id']] )}} --}}
                      <a href=""><h4> الاستاذ {{$teachers->teacher_Name}}    <strong></strong></h4></a>
                      <a href="#"> <h6 > مدرس {{$teachers->teacher_Major}}    <strong class="" ></strong>  </h6></a>

                      <p> <p class="bi bi-blockquote-left" ></p>{{$teachers->teacher_Description}}   </p>
                      <p style="padding-top:10px; ">   :المرحلة التي أُعطيها  </p>{{$teachers->teaching_level}} </p>


                      <a href="#"><p > {{$teachers->lesson_price}}jd : السعر لكل ساعة   <strong class="bi bi-cash" ></strong></p></a>
                  {{-- <p>{{$teachers->teaching_level}}<strong class="bi bi-cash"></strong>  </p> --}}

                      <a href="#"><p style="margin-top:2px;">{{$teachers->Phone}}   <strong class="bi bi-telephone" ></strong></p></a>

                      <a href="#"><p> {{$teachers->Study_Type}}   <strong class="bi bi-globe2" ></strong> </p>
                      <a href="#"><p>{{$teachers->city}}/{{$teachers->address}} <strong class="bi bi-geo-alt-fill" ></strong> </p></a>


                      {{-- فورم للبحث  للحجوزات --}}
                      
                  {{--   -------------------------------  --}}
                </div>
              </div>
            </div>
            @endforeach
           
            @if(method_exists($data,'links'))
                
            
              {{-- رقم الصفحات الي رح يظهرن فيه المعلمين --}}
            <div class="d-flex justify-content-center">
              
            {!!$data->links()!!}
            </div>
            @endif

          </div>
        </div>
      </div>