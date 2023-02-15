<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div style="text-align:right;" class="mb-4 text-sm text-gray-600">
            {{ __('.هل نسيت كلمة السر؟ يرجى إدخال بريدك الالكتروني
            ') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div  style="text-align:right;" class="block " >
                <x-jet-label for="email" value="{{ __(':البريد الالكتروني') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div  class="flex items-left justify-end mt-4">
                <x-jet-button>
                    {{ __('إرسال الرمز عبر البريد الإلكتروني') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
