
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  <style>
    .title{
        color:white;
        font-size:40px;
        padding-top:30px;

    }
    label{
        display:inline-block;
        width:200px;
    }

  </style>
  </head>
  <body>
    
      <!-- استدعاء صفحات -->
      @include('admin.sidebar')
      @include('admin.navbar')
    <!--  انتهى جزء الاستدعاء -->
    
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">This is <strong style="color:rgb(29, 221, 84);">Add Teacher</strong>  page</h1>
                   
                {{-- لاظهار رسالة (العملية نجحت) بعد اضافة الاستاذ --}}
                @if(session()->has('message'))
                <div class="alert alert-success">
                <button  type= "button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                    @endif
                {{--  --}}

        {{-- فورم لتعبي معلومات الاستاذ وتضيفها عن طريق صفحة الادمن --}}
        <form action="{{url('uploadteachers')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div style="padding-top:30px;">
                    <label  >Teacher Name :</label>
                    <input style="color:black;" type="text" name="teacher_Name" placeholder="Give a Teacher Name" required="">
                </div>

                <div style="padding-top:30px;">
                    <label >Teacher Major :</label>
                    <input style="color:black;" type="text" name="teacher_Major" placeholder="Give a Teacher Major Name" required="">
                </div>

                {{-- <div style="padding-top:30px;">
                    <label >Description :</label>
                    <input style="color:black;" type="text" name="teacher_Description" placeholder="Give a Teacher Description " required="">
                    
                </div> --}}
                
                <div style="padding-top:30px;" >
                    <label >Description :</label>
                    <textarea style="color:black;" name="teacher_Description"  rows="3" cols="20"   >
                    </textarea>

                </div>

                
                <div style="padding-top:30px;">
                    <label >Phone :</label>
                    <input style="color:black;" type="text" name="Phone" maxlength="10" placeholder="Give a Phone number" required="">
                </div>

                <div style="padding-top:30px;">
                    <label >lesson Price :</label>
                    <input style="color:black;" type="text" name="lesson_price" maxlength="2" placeholder="Give a lesson price" required="">
                </div>

                <div style="padding-top:30px;">
                    <label>Teaching stage :</label>
                       <select style="color:black; width:200px;" type="text" name="teaching_level" placeholder="Teaching Level" required="">
                        <option value="اساسي">اساسي</option>
                        <option value="اعدادي">اعدادي</option>
                        <option value="ثانوي - علمي">ثانوي - علمي</option>
                        <option value="ثانوي - ادبي">ثانوي - ادبي</option>
                        <option value="جامعي">جامعي</option>
                        <option value="اعدادي ، اساسي">اعدادي ، اساسي</option>
                        <option value="اعدادي ، اساسي ، ثانوي - علمي">اعدادي ، اساسي ، ثانوي - علمي</option>
                        <option value="اعدادي ، اساسي ، ثانوي - ادبي">اعدادي ، اساسي ، ثانوي - ادبي</option>
                        <option value="اعدادي ، اساسي ، ثانوي - علمي ، جامعي">اعدادي ، اساسي ، ثانوي - علمي ، جامعي</option>
                        <option value="اعدادي ، اساسي ، ثانوي ادبي ، جامعي">اعدادي ، اساسي ، ثانوي ادبي ، جامعي</option>
                        <option value="اعدادي ، اساسي ، ثانوي علمي ، ثانوي ادبي ، جامعي">اعدادي ، اساسي ، ثانوي علمي ، ثانوي ادبي ، جامعي</option>
                    </select>
                       </div>

                <div style="padding-top:30px;">
                    <label >Study Type :</label>
                    <select style="color:black; width:200px;" type="text" name="Study_Type" placeholder="Enter city" required="">
                        <option value="اونلاين">اونلاين</option>
                        <option value="وجاهي">وجاهي</option>
                        <option value="اونلاين،وجاهي">اونلاين ، وجاهي</option>
                    </select>
                    {{-- <input style="color:black;" type="checkbox" name="Study_Type" placeholder="Give a (online , face To face)" required=""> --}}
                </div>

                

                <div style="padding-top:30px;">
                    <label >city :</label>
                    <select style="color:black; width:200px;" type="text" name="city" placeholder="Enter city" required="">
                        <option value="عمان">عمان</option>
                        <option value="اربد">اربد</option>
                        <option value="الزرقاء">الزرقاء</option>
                        <option value="السلط">السلط</option>
                        <option value="المفرق">المفرق</option>
                        <option value="الكرك">الكرك</option>
                        <option value="مادبا">مادبا</option>
                        <option value="جرش">جرش</option>
                        <option value="عجلون">عجلون</option>
                        <option value="العقبة">العقبة</option>
                        <option value="معان">معان</option>
                        <option value="الطفيلة">الطفيلة</option>
                    </select>
                </div>

                

                <div style="padding-top:30px;">
                    <label >address :</label>
                    <input style="color:black;" type="text" name="address" placeholder="Enter address" required="">
                </div>


                <div style="padding-top:30px;">
                    <input  type="file" name="file">
                </div>

                <div style="padding-top:30px; font-size:20px;">
                    <input class="btn btn-success" type="submit">

                </div>

            </form>
            </div>
        </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
  </body>
</html>