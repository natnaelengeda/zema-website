@extends('admin.index')

@section('dashboard')
<div class="p-10 grid grid-cols-2 gap-20">
                     
    <a href="/admin/user" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-md dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:shadow-md dark:hover:shadow-gray-800">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt=""> --}}
        <svg class="w-44 p-10 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Users</h5>
            <p class="mb-3 font-normal text-gray-700 "></p>
        </div>
    </a>

    <a href="/admin/artist" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md dark:hover:shadow-gray-800">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt=""> --}}
        {{-- <svg class="w-44 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> --}}
        <svg class="w-44 p-10 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Artists</h5>
            <p class="mb-3 font-normal text-gray-700 "></p>
        </div>
    </a>
    

    <a href="/admin/music" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md dark:hover:shadow-gray-800">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt=""> --}}
        {{-- <svg class="w-44 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> --}}
        {{-- <svg class="w-44 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> --}}
        <svg class="w-44 p-10 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Music</h5>
            <p class="mb-3 font-normal text-gray-700 "></p>
        </div>
    </a>

    <a href="/artupload" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md dark:hover:shadow-gray-800">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt=""> --}}
        <svg class="w-44 p-10 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Feedback</h5>
            <p class="mb-3 font-normal text-gray-700 "></p>
        </div>
    </a>

    <a href="/postnews" class="w-[28rem] relative position float-left flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl h-auto hover:bg-gray-50 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md dark:hover:shadow-gray-800">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="imgs/other/uploadmusic.png" alt=""> --}}
        <svg class="w-44 p-10 text-white border-r border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Post News</h5>
            <p class="mb-3 font-normal text-gray-700 "></p>
        </div>
    </a>
</div>

@endsection