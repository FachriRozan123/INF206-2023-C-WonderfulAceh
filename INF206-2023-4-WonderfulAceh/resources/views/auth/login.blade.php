<x-guest-layout>
    <x-slot name="logo">
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

            <div class="flex items-center justify-center mt-4 mb-6">
        <img src="img/loginlogo.png" alt="error" style="width: 80px; height: auto;">
    </div>  

        <div>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}" autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="{{ __('Kata sandi') }}" autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Lupa kata sandi?') }}
        </a>
    @endif
</div>

<div class="flex items-center justify-end mt-2">
    <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
        {{ __('Belum memiliki akun?') }}
    </a>
</div>
<br>

        <div class="flex items-center justify-center mt-2">
        <x-button style="background-color:#FFFFFF;color:#2148C0">
                {{ __('Masuk') }}
            </x-button>
            </div>
    </form>
</x-guest-layout>