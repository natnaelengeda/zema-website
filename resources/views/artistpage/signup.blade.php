@extends('layouts.app')

@section('signup')

<div class="flex  w-[55%] m-auto mt-10 mb-10  border border-gray-100 shadow-xl">
    <div class="w-1/2  bg-gray-300 ">
            <img class="relative w-full h-full object-cover" src="https://cdns-images.dzcdn.net/images/artist/95e576780671dd6d9a66c4812a73cf0c/500x500.jpg" alt="Music Image">
    </div>
    <div class=" w-1/2 h-full py-7">
            <h1 id="zname" class="text-center text-4xl text-gray-600">Zema</h1>

            <h1 class="text-center mt-7 text-xl font-bold text-gray-400">Welcome to Zema</h1>
            <div class="w-[90%] m-auto mt-10 h-auto">
                <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                        <form method="POST" action="/asignup">
                            @csrf
                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            {{-- First Name --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="fname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                            </div>
                            {{-- Last Name --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="lname" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                            </div>
                        </div>
                         {{-- Username  --}}
                         <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="uname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                        </div>
                        {{-- Email  --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                            </div>
                         {{-- Phone Number  --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="phonenumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
                            </div>    
                                                        
                        
                            <fieldset>
                                <legend class="sr-only">Gender</legend>
                                <div class="flex items-center mb-4  ">
                                <input id="male" type="radio" name="gender" value="male" default class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 ue-600 -600 00" checked="">
                                <label for="male" class="block ml-2 text-sm font-medium text-gray-900 ">
                                Male
                                </label>
                                </div>
                                <div class="flex items-center mb-4">
                                <input id="female" type="radio" name="gender" value="female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 ue-600 -600 00">
                                <label for="female" class="block ml-2 text-sm font-medium text-gray-900 ">
                                Female
                                </label>
                                </div>
                                
                                </fieldset>
    
    
                            {{-- Password --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                            </div>
                            {{-- Confirm Password --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="password" name="password_confirmation" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
                            </div>
                            
                         
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('alogin') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <x-button class="ml-4 bg-maincolor">
                                    {{ __('Signup') }}
                                </x-button>
                            </div>
                        </form>
                            
                    </div>
            </div>
        </div>

    
@endsection