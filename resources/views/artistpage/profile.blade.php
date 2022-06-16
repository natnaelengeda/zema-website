@extends('layouts.app')

@section('artistprofile')

    <div class="flex">
       <x-profilesidecomp :info="$info"/>
        
        <div class="bg-white relative left-[18.9%] w-full h-screen p-10">
          
            
            <a href="/artupload" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Upload Music</h5>
                    <p class="mb-3 font-normal text-gray-700 "></p>
                </div>
            </a>
          

            <a href="/viewmusic" class="relative float-left ml-20 w-[28rem]  flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-md hover:bg-gray-50 hover:shadow-xl">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">View Music</h5>
                        <p class="mb-3 font-normal text-gray-700 "></p>
                    </div>
                </a>
    
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