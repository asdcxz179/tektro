<style>
    .min-h-screen {
        background: url(/front/assets/images/index_banner01.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <div style="margin-bottom:10px;">
                <img src="{{asset('front/assets/images/groupLogo_w.png')}}" alt="">
            </div>
            <h3 style="font-weight: bold;font-size: 30px;text-align:center;color:#fff">網站管理系統</h3>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('backend.login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="captcha" value="{{ __('captcha') }}" />
                <div class="input-group">
                    <x-jet-input id="captcha" class="block mt-1 w-full form-control" type="text" name="captcha" required autofocus />
                    <div class="input-group-append mt-1">
                        <img src="{{ captcha_src() }}" onclick="this.src = '/captcha/default?' + Math.random()" style="cursor:pointer">
                    </div>                    
                </div>              
            </div>               

            <div class="flex items-center justify-end mt-4">
                {{--
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('forgot_your_password?') }}
                    </a>
                @endif
                --}}

                <x-jet-button class="ml-4">
                    登入
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
