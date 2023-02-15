
        <html dire="rtl">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="assets/css/sui2.css">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            <style>
                input::placeholder {
                    text-align: right
                }

                .container, .container-md, .container-sm{

                min-width: 100%;
                 }
            </style>
            <title>login</title>
        </head>

        <body>
            <x-guest-layout>
                <x-jet-authentication-card>
                    <x-slot name="logo">
        
        
                    </x-slot>
            
                    <x-jet-validation-errors class="mb-4" />
            
                <x-jet-validation-errors class="mb-4" /> @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div style="margin-right: -350px; margin-left: 100px;" class="container login-container">
                        <div class="row">
                            <div class="col-md-6 login-form-2">
                                <h3>تسجيل الدخول</h3>
                                <form>
                                    <div class="form-group">
                                        <div style="text-align:right;">
                                            <x-jet-label for="email" value="{{ __(':البريد الالكتروني') }}" />
                                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="text-align:right;" class="mt-4">
                                            <x-jet-label for="password" value="{{ __(':كلمة السر') }}" />
                                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="block mt-4">
                                            <label style="text-algin:right;" for="remember_me">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                                {{ __('!سجل الان') }}
                                            </a> @endif

                                        <x-jet-button class="ml-4">
                                            {{ __('تسجيل الدخول') }}
                                        </x-jet-button>
                                    </div>


                                    <div class="form-group">

                                        <a href="#" class="ForgetPwd" value="Login">هل نسيت كلمة السر؟</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
        </x-jet-authentication-card>
        
        </x-guest-layout>
        </body>


        </html>
