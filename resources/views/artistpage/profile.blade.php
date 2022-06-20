@extends('layouts.app')

@section('artistprofile')

    <div class="flex">
       <x-profilesidecomp :info="$info"/>
        
        {{-- <div class="bg-white relative left-[18.9%] w-full h-screen p-10"> --}}
        <div class="w-3/4 my-5 mb-10 h-auto px-5 grid grid-cols-2">
             
            <div>
            <a href="/artupload" class="w-[28rem] relative position float-left flex flex-col items-center bg-gray-100 rounded-2xl border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-20 hover:shadow-2xl transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-100 hover:bg--500 duration-150">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Upload Music</h5>
                    <p class="mb-3 font-normal text-gray-700 "></p>
                </div>
            </a>
        </div>
        <div>

            <a href="/viewmusic" class="relative float-left w-[28rem]  flex flex-col items-center bg-gray-100 rounded-2xl border shadow-md md:flex-row md:max-w-md hover:bg-gray-200 hover:shadow-2xl  transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-100 hover:bg--500 duration-150">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">View Music</h5>
                        <p class="mb-3 font-normal text-gray-700 "></p>
                    </div>
                </a>
            </div>
            <div>
            <a href="/updateart" class="relative float-left w-[28rem]  flex flex-col items-center bg-gray-100 rounded-2xl border shadow-md md:flex-row md:max-w-md hover:bg-gray-200 hover:shadow-2xl  transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-100 hover:bg--500 duration-150">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Update Profile</h5>
                        <p class="mb-3 font-normal text-gray-700 "></p>
                    </div>
                </a>
            </div>
                {{-- <a href="#" class="w-[28rem] relative position mt-20 float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Albums</h5>
                        <p class="mb-3 font-normal text-gray-700 "></p>
                    </div>
                </a>
                
                <a href="#" class="relative float-left mt-20 ml-20 w-[28rem]  flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-md hover:bg-gray-50 hover:shadow-xl">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">View Music</h5>
                        <p class="mb-3 font-normal text-gray-700 "></p>
                    </div>
                </a> --}}
            
        </div>
    </div>
@endsection