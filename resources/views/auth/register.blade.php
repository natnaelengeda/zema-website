@extends('layouts.app')

@section('register')
<div class="flex  w-[55%] m-auto mt-10 mb-10  border border-gray-100 shadow-lg">
    <div class="w-1/2  bg-gray-300 ">
            <img class="relative w-full h-full object-cover" src="imgs/randimgs/musicimg.jpg" alt="Music Image">
    </div>
    <div class=" w-1/2 h-full py-7">
            <h1 id="zname" class="text-center text-4xl text-gray-600">Zema</h1>

            <h1 class="text-center mt-7 text-xl font-bold text-gray-400">Welcome to Zema</h1>
            <div class="w-[90%] m-auto mt-10 h-auto">
                  <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" /> 

        <form method="POST" action="{{ route('register') }}">
            @csrf

           <div class="flex justify-evenly gap-5">
             <!-- First Name -->
             <div>
                <x-label for="fname" :value="__(' First Name')" />

                <x-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="lname" :value="__('Last Name')" />

                <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus />
            </div>

           </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="Username" :value="__('Username')" />

                <x-input id="uname" class="block mt-1 w-full" type="text" name="email" :value="old('uname')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone Number -->
            <div class="mt-4">
                <x-label for="phoneNumber" :value="__('Phone Number')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>





            </div>
    </div>
</div>
@endsection
      