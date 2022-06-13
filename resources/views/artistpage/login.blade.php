@extends('layouts.app')

@section('login')
    <div class="flex items-center justify-center h-full py-10">
        
<div class="flex  w-[55%] m-auto mt-10 mb-10  border border-gray-100 shadow-xl">
    <div class="w-1/2  bg-gray-300 ">
            <img class="relative w-full h-full object-cover" src="https://cdns-images.dzcdn.net/images/artist/95e576780671dd6d9a66c4812a73cf0c/500x500.jpg" alt="Music Image">
    </div>
    <div class=" w-1/2 h-full py-7">
            <h1 id="zname" class="text-center text-4xl text-gray-600">Zema</h1>

            <h1 class="text-center mt-7 text-xl font-bold text-gray-400">Welcome to Zema</h1>
            <div class="w-[90%] m-auto mt-10 h-auto">
                        <form method="POST" action="/alogin">
                            @csrf
                        {{-- Email  --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                            </div>
                      
    
                            {{-- Password --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none :text-white :border-gray-600 :focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 :text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus::text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                            </div>
                          
                            
                         
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('asign') }}">
                                    {{ __("Don't have an accout?") }}
                                </a>
                
                                <x-button class="ml-4 bg-maincolor">
                                    {{ __('Login') }}
                                </x-button>
                            </div>
                        </form>
                            
                    </div>
            </div>
        </div>

    </div>
    
@endsection