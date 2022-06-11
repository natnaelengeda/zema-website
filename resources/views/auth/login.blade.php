@extends('layouts.app')

@section('login')

<div class="flex items-center  w-[55%] m-auto mt-10  h-[30rem] border border-gray-100 shadow-lg">
    <div class="w-1/2 relative  h-full overflow-hidden">
        <img class="w-auto h-full" src="imgs/randimgs/musicimg.jpg" alt="Music Image">
    </div>
    <div class=" w-1/2 h-full py-7">
            <h1 id="zname" class="text-center text-4xl text-gray-600">Zema</h1>

            <h1 class="text-center mt-7 text-xl font-bold text-gray-400">Welcome to Zema</h1>
            <div class="w-[80%] m-auto mt-10 h-auto">
           
                    

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3 bg-maincolor">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

            </div>
    </div>
</div>

@endsection