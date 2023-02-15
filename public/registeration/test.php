<html dire="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="sui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        input::placeholder {
            text-align: right
        }
    </style>
    <title>Sign in</title>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="logoooo.png" alt="" />
                <h3>أهلا وسهلا في منصتنا</h3>
                <p>وكل الحب والاحترام للجميع</p>
                <input type="submit" name="" value="تسجيل الدخولٍ" /><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">معلم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">طالب</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">التسجيل كمعلم</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <x-jet-label class="form-control" for="name" value="{{ __('الاسم') }}" align="right" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="كلمة السر" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="تأكيد كلمة السر" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="منطقة السكن" value="" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="البريد الإلكتروني" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="الهاتف" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="المحافظة" value="" />
                                </div>
                                <div style="align:right;" class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> ذكر </span> 
                                                </label>
                                        <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>انثى </span> 
                                                </label>
                                    </div>
                                </div>

                                <input type="submit" class="btnRegister" value="تسجيل حساب جديد" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">التسجيل كطالب</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الإسم الرباعي " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="كلمة السر" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="تأكيد كلمة السر" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="منطقة السكن" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="البريد الإلكتروني" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="الهاتف" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="المحافظة" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> ذكر </span> 
                                                </label>
                                        <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>انثى </span> 
                                                </label>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister" value="تسجيل حساب جديد" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>