<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img class="logo" src="assets/images/logoooo.png"  width="80px" style="margin-right:14px;margin-bottom:14px;align-items:center;text-align:center;" alt="">
          
                            </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <div style="text-align:right;" >
                <x-jet-label for="email" value="{{ __(':البريد الالكتروني') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div style="text-align:right;" class="mt-4">
                <x-jet-label for="password" value="{{ __(':كلمة السر') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div  class="block mt-4">
                <label style="text-algin:right;"for="remember_me" >
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('هل نسيت كلمة السر؟') }}
                    </a>
                @endif

                <x-jet-button  class="ml-4">
                    {{ __('تسجيل الدخول') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
