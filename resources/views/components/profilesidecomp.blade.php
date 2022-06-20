{{-- 
    <aside class="w-64  h-screen fixed border-r " aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded :bg-gray-800">
            <center>
                <div class="rounded-full w-32">
                    <img class="rounded-full" src="/imgs/uploads/art-profile-pic/{{$info['profilepic']}}" alt="Profile Pics">
                </div>
            </center>
            <div class="w-full flex justify-start gap-2 px-2 my-3">
                <p>{{ $info['fname'] }}</p>
                <p>{{ $info['lname'] }}</p>  
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['uname'] }}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['email']}}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['phonenumber']}}</p>
            </div>
            <hr class="border border-gray-300">
            <div class="w-full px-2 my-3">
                <p>{{ $info['uploadmusic']}}</p>
            </div>
            <div class="w-full px-2 my-3">
                <p>{{ $info['uploadalbum']}}</p>
            </div>
        </div>
    </aside>
         --}}
<aside class="w-[20%] mx-5 mt-5 " aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white rounded-3xl border border-gray-300 shadow-2xl dark:bg-gray-800">
        <ul class="space-y-2">
            <li class="w-full rounded-xl">
                <img class="w-full" src="/imgs/uploads/art-profile-pic/{{$info['profilepic']}}" alt="Profile Pics">

            </li>
        <li class="sideprofile">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <p class="text-lg">Name: </p>
            </div>    
            <p class="text-gray-600">{{ $info['fname'] }} {{ $info['lname']}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="sideprofile">
            <div class="flex gap-2">
                {{-- <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> --}}
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                <p class="text-lg">Username: </p>
            </div>    
            <p class="text-gray-600 text-sm">{{ $info['uname']}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="sideprofile">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <p class="text-lg">Email: </p>
            </div>    
            <p class="text-gray-600 text-sm">{{ $info['email']}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="sideprofile">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <p class="text-md">Phone Number: </p>
            </div>    
            <p class="text-gray-600">{{ $info['phonenumber']}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="sideprofile">
            <div class="flex gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>

                <p class="text-md">Uploaded Music: </p>
            </div>    
            <p class="text-gray-600">{{ $info['uploadalbum'] }}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="sideprofile">
            <div class="flex gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>

                <p class="text-md">Uploaded Album: </p>
            </div>    
            <p class="text-gray-600">{{ $info['uploadalbum'] }}</p>
        </li>
        <hr class="border border-gray-300 w-32">
        <li class="">
        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-700">
        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
        <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
        </a>
        </li>
        </ul>
    </div>
    </aside>

