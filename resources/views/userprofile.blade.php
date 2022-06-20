@extends('layouts.app')

@section('userprofile')

<div class="flex flex-row bg-gray-100">
    
<aside class="w-[20%] mx-5 mt-5" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white rounded-3xl shadow-2xl dark:bg-gray-800">
        <ul class="space-y-2">
        <li class="flex justify-start items-end px-1 py-3 gap-2">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <p class="text-lg">Name: </p>
            </div>    
            <p class="text-gray-600">{{ $user->fname}} {{ $user->lname}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="flex justify-start items-end px-1 py-3 gap-2">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <p class="text-lg">Email: </p>
            </div>    
            <p class="text-gray-600 text-sm">{{ $user->email}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="flex justify-start items-end px-1 py-3 gap-2">
            <div class="flex gap-2">
                <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <p class="text-lg">Phone Number: </p>
            </div>    
            <p class="text-gray-600">{{ $user->phonenumber}}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="flex justify-start items-end px-1 py-3 gap-2">
            <div class="flex gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>

                <p class="text-lg">Following: </p>
            </div>    
            <p class="text-gray-600">{{ count($follow) }}</p>
        </li>
        <hr class="border border-gray-300">
        <li class="flex justify-start items-end px-1 py-3 gap-2">
            <div class="flex gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                <p class="text-lg">Liked Music: </p>
            </div>    
            <p class="text-gray-600">{{ count($like)}}</p>
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

    {{-- Main Page --}}
    <div class="w-3/4 my-5 mb-10 h-auto  ">
    <div class="w-full bg-white border-gray-100 shadow-2xl rounded-2xl py-5 ">
        {{-- Follow Artist --}}
        <div class="w-full h-96 ">
            <div> 
                <div>
                  <div class="w-full m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                      <h1 class="text-maincolor text-3xl font-bold m-1">Following Artists</h1>
                      <hr class="w-1/3 text-maincolor">
                  </div>
        
                  <div class="flex flex-col bg-white m-auto p-auto w-[55rem]">
                    <hr>  
                    <div class="flex scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-x-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full py-3" >
                        
                            <div class="flex flex-nowrap lg:ml-5 md:ml-20 ml-10">
                                @foreach($follow as $follows)
                                @foreach($artists as $artist)
                                @if($follows->artist_id == $artist->id)
                                <a href="/showtracks/{{ $artist->id }}" class="inline-block px-3">
                                      <div class="w-auto boor cursor-pointer h-full max-w-xs  overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                        <div class="w-44 ">
                                          <img src="imgs/uploads/art-profile-pic/{{$artist->profilepic}}" alt="Reflection Album Art">
                                        </div>
                                        <div>
                                          <p class="text-center">{{ $artist->fname }} {{ $artist->lname}}</p>
                                        </div>
                                      </div>
                                  </a>
                                  @endif
                                @endforeach
                                @endforeach

                            </div>
                      </div>
                      <hr>
                  </div>
              </div>
              </div>
        </div>
        {{-- Liked Musics --}}
        <hr class="border border-gray-300">
        <div>
            <div class="w-full m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                <h1 class="text-maincolor text-3xl font-bold m-1">Liked Music</h1>
                <hr class="w-1/3 text-maincolor">
            </div>
            <table class="w-full text-sm text-left text-gray-500 :text-gray-400">
                <thead class="text-xs text-gray-700 uppercase  bg-gray-50 :bg-gray-700 :text-gray-400">
                    <tr>
                    <th scope="col" class="px-6 py-3">
                    Tracks
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                    <th scope="col" class="px-6 py-3">
                    
                    </th>
                    <th scope="col" class="px-1 py-3">
                    
                    </th>
                    <th scope="col" class="px-1 py-3">
                    
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    <span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($like as $likes)
                            @foreach($music as $musics)
                            @if($likes->music_id == $musics->id)
                                <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                                    {{ $musics->music_track_num }}
                                </th>    
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                                    {{ $musics->music_name}}
                                </th>
                                <td class="px-6 py-4">
                                    3:00
                                </td>
                                {{-- Play  --}}
                                <td class="px-2 py-4 ">
                                    <svg class="w-7 cursor-pointer text-gray-400 hover:text-maincolor" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                </td>
                                {{-- Like --}}
                                {{-- <script>
                                    $.ajax({
                                        type: "POST",
                                        url: "/checklike/",
                                        dataType: "json",
                                        success: function (response) {
                                            

                                        }
                                    });
                                </script> --}}
                                <td class="px-2 py-4">
                                    {{-- <form action="{{ route('likem', ['id' => $music->id,'id2' => $artist->id ]) }}" method="POST">
                                        @csrf
                                        <button>
                                        <svg class="w-7 cursor-pointer hover:text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </form> --}}
                                </td>
                                
                                {{-- Add to Play List --}}
                                <td class="px-2 py-4 ">
                                    {{-- <svg class="w-7 cursor-pointer rounded-full hover:bg-maincolor hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> --}}
                                </td>
                                <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 :text-blue-500 hover:underline"></a>
                                </td>
                                </tr>
                            @endif  
                            @endforeach
                        @endforeach
            </table>
        </div>
    </div>
        {{-- Change Password --}}
        <div class="border border-gray-200 h-96 w-full my-5 rounded-2xl shadow-2xl bg-white ">
            <div class="w-full m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                <h1 class="text-maincolor text-3xl font-bold m-1">Chage User Information</h1>
                <hr class="w-1/3 text-maincolor">
            </div>
            <div class="w-[80%] px-5">
                
                <form method="POST" action="/updateprofile/{{ $user->id }}">
                    @csrf
                    <div class="grid xl:grid-cols-2 xl:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="fname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name: {{ $user->fname }}</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lname" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name: {{ $user->lname}}</label>
                        </div>
                      </div>
                     
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="phonenumber" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number ({{ $user->phonenumber}})</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="tel" name="password" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">New Password</label>
                        </div>
                    
                
                    <button type="submit" class="text-white bg-maincolor hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
                    </form>
    
            </div>



        </div>




    </div>
</div>






@endsection