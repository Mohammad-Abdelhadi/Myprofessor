<html dire="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/sui.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        input::placeholder {
            text-align: right

        }
        form-group{

          align-items:right;
          direction: right;
        }
        .container, .container-md, .container-sm{

            min-width: 100%;
        }
    </style>
    <title> register</title>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="assets/images/logoooo.png" alt="" />
                <h3 style="font-weight:bold; font-size:30px;">My Professor</h3>
                <br>
            </div>




            <div class="col-md-9 register-right">

                </ul>



    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">


            </x-slot>

            <x-jet-validation-errors class="mb-4" />



            <form method="POST" action="{{ route('register') }}" x-data="{role_id:1}" dir='rtl' >
                @csrf
    <div dir="rtl" style="text-align:right;align-items:flex-end;">
                <div class="mt-4" >
                    <x-jet-label for="role_id" value="{{ __('سجل كـ') }}" />
                    <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="1">طالب</option>
                    </select>
                </div>

                {{-- <div class="mt-4" x-show="role_id == 1">
                    <x-jet-label for="student_level" value="{{ __(': المرحلة الدراسية') }}" />
                    <x-jet-input id="student_level" class="block mt-1 w-full" type="text" :value="old('student_level')" name="student_level" value="" />
                </div>

                <div class="mt-4" x-show="role_id == 2">
                    <x-jet-label for="teacher_major" value="{{ __(': التخصص') }}" />
                    <x-jet-input id="teacher_major" class="block mt-1 w-full" type="text" :value="old('teacher_major')" name="teacher_major" value=""/>
                </div> --}}

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row register-form"  >
                            <div class="col-md-6" >
                                <div class="form-group">
                                <div class="mt-4">
                                    <x-jet-label for="name" value="{{ __('الاسم') }}" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="mt-4" style="transform: translate(0%, -12%);">
                                    <x-jet-label  for="city" value="{{ __('المحافظة') }}" />

                                    {{-- <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required /> --}}
                                    <select style="color:black; width:185px;text-align:left" id="city" type="text" name="city":value="old('city')"  required="" >
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
                            </div>


                            <div class="form-group">
                                <div class="mt-4 ml-80">
                                    <x-jet-label for="address" value="{{ __('منطقة السكن') }}" />

                                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />

                                </div>
                                         </div>

                                         <div class="form-group" >
                                            <div class="mt-4" >
                                           <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                                           <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                           </div>


                                           </div>







                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mt-4">
                                        <x-jet-label for="email" value="{{ __('البريد الالكتروني') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>
                                                         </div>
                                <div class="form-group">
                                    <x-jet-label for="phone" value="{{ __('الهاتف') }}" />
                                    <x-jet-input id="phone"  class="block mt-1 w-full"  type="number" maxlength="10" name="phone" :value="old('phone')" required />
                                                </div>

                                                <div class="form-group">
                                                    <div class="mt-4 ml-80" style="transform: translate(0%, 10%)">
                                                        <x-jet-label for="gender" value="{{ __('الجنس ؟') }}" />
                                                        {{-- <x-jet-input class="gender" name="gender" class="block mt-1 w-full"  :value="old('gender')" required /> --}}

                                                        {{-- <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required /> --}}
                                                        <select style="color:black; width:181px;text-align:left" id="gender" type="text" name="gender":value="old('gender')"  required="" >
                                                            <option value="ذكر">ذكر</option>
                                                            <option value="انثى">انثى</option>
                                                        </select>
                                                    </div>
                                                             </div>

                                                <div class="form-group">
                                                    <div class="mt-4"  style="transform: translate(1%, 12%)" >
                                                    <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمة السر') }}" />
                                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                                     </div>
                                                    </div>
                            </div>



                            </div>



                            </div>
                        </div>
                    </div>


                </div>
<div>


    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
    <div class="mt-4">
        <x-jet-label for="terms">
            <div class="flex items-center">
                <x-jet-checkbox name="terms" id="terms" required />

                <div class="ml-2">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                    ]) !!}
                </div>
            </div>
        </x-jet-label>
    </div>

@endif

<div class="flex items-center justify-end mt-4">


    <x-jet-button class="ml-4">
        {{ __('تسجيل') }}
    </x-jet-button>


    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        {{ __('لديك حساب سابق؟') }}
    </a>

</div>
</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</form>
</x-jet-authentication-card>

</x-guest-layout>

</body>



</html>

{{--


  {-- ---------------------------------------------------------------------- --}}
    {{--


  {-- ---------------------------------------------------------------------- --}}
    {{--


  {-- ---------------------------------------------------------------------- --}}
    {{--


  {-- ---------------------------------------------------------------------- --}}
    {{--


  {-- ---------------------------------------------------------------------- --}}


    {{--


  {-- -------------------------- المعلم-------------------------------------------- --}}


    <html dire="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/sui.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <style>
            input::placeholder {
                text-align: right

            }
            form-group{

              align-items:right;
              direction: right;
            }
            .container, .container-md, .container-sm{

                min-width: 100%;
            }
        </style>
        <title>register</title>
    </head>

    <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="assets/images/logoooo.png" alt="" />
                    <h3 style="font-weight:bold; font-size:30px;">My Professor</h3>
                    <br>
                </div>




                <div class="col-md-9 register-right">

                    </ul>



        <x-guest-layout>
            <x-jet-authentication-card>
                <x-slot name="logo">


                </x-slot>

                <x-jet-validation-errors class="mb-4" />

            <div dir="rtl" style="text-align:right"> <span  style="color:red"> ملاحظة : </span> <p style="font-size:13px"> يرجى العلم ان هذه الخطوة الاولى للتسجيل ك معلم ، بعدها يجب عليك التواصل مع مركز المساعدة
                وتزويدنا بالمعلومات التالية
                <p style="font-size:13px;color:red">
                (الاسم ، التخصص ، نبذة تعريفية مختصرة ، رقم الهاتف ، سعر الحصة ، المراحل التي تدرسها ، نوع التدريس، المحافظة، منطقة السكن ) </p></p>
            <p style= "font-size:12px"> مركز المساعدة : 0785150283</p>
            </div>



                <form method="POST" action="{{ route('register') }}" x-data="{role_id:1}" enctype="multipart/form-data" dir='rtl' >
                    @csrf
        <div dir="rtl" style="text-align:right;align-items:flex-end;">
                    <div class="mt-4" >
                        <x-jet-label for="role_id" value="{{ __('سجل كـ') }}" />
                        <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="2">معلم</option>
                        </select>
                    </div>

                    {{-- <div class="mt-4" x-show="role_id == 1">
                        <x-jet-label for="student_level" value="{{ __(': المرحلة الدراسية') }}" />
                        <x-jet-input id="student_level" class="block mt-1 w-full" type="text" :value="old('student_level')" name="student_level" value="" />
                    </div>

                    <div class="mt-4" x-show="role_id == 2">
                        <x-jet-label for="teacher_major" value="{{ __(': التخصص') }}" />
                        <x-jet-input id="teacher_major" class="block mt-1 w-full" type="text" :value="old('teacher_major')" name="teacher_major" value=""/>
                    </div> --}}

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row register-form"  >
                                <div class="col-md-6" >
                                    <div class="form-group">
                                    <div class="mt-4">
                                        <x-jet-label for="name" value="{{ __('الاسم') }}" />
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <div class="mt-4" style="transform: translate(0%, -12%)">
                                        <x-jet-label for="city" value="{{ __('المحافظة') }}" />

                                        {{-- <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required /> --}}
                                        <select style="color:black; width:200px;text-align:left" id="city" type="text" name="city":value="old('city')"  required="" >
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
                                </div>

                                <div class="form-group">
                                    <x-jet-label for="phone" value="{{ __('الهاتف') }}" />
                                    <x-jet-input id="phone"  class="block mt-1 w-full"  type="number" maxlength="10" name="phone" :value="old('phone')" required />
                                </div>
                                <div class="form-group" >
                                    <div class="mt-4" >
                                   <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                                   <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                   </div>


                                   </div>









                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="mt-4">
                                            <x-jet-label for="email" value="{{ __('البريد الالكتروني') }}" />
                                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>
                                     </div>


                                     <div class="form-group">

                                        <div class="mt-4">
                                            <x-jet-label for="email" value="{{ __('ارفق السيرة الذاتية') }}" />
                                            <x-jet-input id="email" class="block mt-1 w-full" type="file" name="cv" :value="old('file')" required />
                                        </div>
                                     </div>

                                    <div class="form-group">
                                        <div class="mt-4 ml-80">
                                            <x-jet-label for="address" value="{{ __('منطقة السكن') }}" />

                                            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />

                                        </div>
                                                 </div>

                                                 <div class="form-group">
                                                    <div class="mt-4"  >
                                                    <x-jet-label for="password_confirmation" value="{{ __('تاكيد كلمة السر') }}" />
                                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                                     </div>
                                                    </div>
                                    </div>





                                </div>
                            </div>
                        </div>


                    </div>
    <div>


        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms" required />

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>

    @endif

    <div class="flex items-center justify-end mt-4">


        <x-jet-button class="ml-4">
            {{ __('تسجيل') }}
        </x-jet-button>


        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('لديك حساب سابق؟') }}
        </a>

    </div>
    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </form>
    </x-jet-authentication-card>

    </x-guest-layout>

    </body>



    </html>


