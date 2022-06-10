@extends('header.head')
@section('home')
<div class="">
    <div class="flex">
        <div class="border-r-2 border-gray-400 w-[25%] h-[600px] py-10 scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll  scrollbar-thumb-rounded-full scrollbar-track-rounded-full"> <!-- Left Menu Bar -->
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
            <p class="text-xl">Home</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path></svg>
            <p class="text-xl">Library</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Trending</p>
            </div>
            
            <div class="mx-5">
                <p class="font-light">Tops</p>
            </div>
            
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Top - Week</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Top - Month</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Top - Year</p>
            </div>

            <div class="mx-5">
                <p class="font-light">Your Collection</p>
            </div>
            
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Liked Songs</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Favourite Artist</p>
            </div>
            <div class="homeltabcl">
            <svg class="w-10 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-xl">Playlist </p>
            </div>
        </div>
        <div class=" w-[70%]"><!-- Middle Main Layout -->
            <div class=" w-full h-[26rem] flex ">
                <div class="w-[90%] m-auto  mt-32 mb-2 bg-gradient-to-tr from-gradientcol via-gradientcol2 to-gradientcol3 border border-gray-300 h-64 relative flex-end rounded-[40px] flex justify-between shadow-xl">
                    <div class="text-white mx-10 relative bottom-0 align-bottom mt-24">
                        <p class="font-bold text-[40px]">Rophnan</p>
                        <p>000,000,000 Weekly Listeners</p>
                    </div>
                    <div class="relative w-96 -mt-32">
                        <img src="imgs/artists/rophnan.png" alt="Rophnan Picture">
                    </div>
                </div>
            </div>
            <hr class="bg-gray-300 w-[70%] border border-gray-300">
            <div class="w-full  mt-1 h-auto flex gap-5">
               @for($i=0 ; $i<$recs-3; $i++)
               <div class=" w-auto">
                    <div class="w-44">
                        <img src="imgs/albumart/reflection.png" alt="Reflection Album Art">
                    </div>
                    <div class="">
                        <p class="text-center">Reflection</p>
                    </div>
                </div>
                @endfor
            </div>
            <hr class="border border-gray-400">
            <div class="h-96">
                <div>
                    <h1 class="font-bold text-3xl m-3 mx-5">#Tops</h1>
                </div>
                <table class="w-full k">
                <tr class="font-bold">
                    <th class=" w-10"><p>#</p></th>
                    <th class=""><p>TITLE</p></th>
                    <th class=""><p>PLAYING</p></th>
                    <th class=""><p>TIME</p></th>
                    <th><p>ALBUM</p></th>
                </tr>
                
                @foreach($ralbum as $rlbum)
                
                <tr class="cursor-pointer hover:bg-gray-200">
                    <td class=" " ><p class="ml-3">{{$count++}}</p></td>
                    <td class="">
                    <div class="flex items-center ml-5">
                        <img class="w-16" src="imgs/albumart/reflection.png" alt="" />
                        <p class="relative text-center ml-12 -mr-12">{{$rlbum}}</p>
                    </div>
                    </td>
                    <td>
                    <p class="text-center">00,000</p>
                    </td>
                    <td class=" w-auto m-auto">
                    <p class="text-center">3:20</p>
                    </td>
                    <td class="">
                    <p class="text-center">Reflection</p>
                    </td>
                </tr>
                @endforeach
                </table>
            
            
            
            
            </div>





        </div>
        <div class="border-l border-gray-400 w-[25%]  py-6"><!-- Right Menu Bar -->
            <div class="mx-5 mb-5">
                <p class="font-bold text-2xl">Recently Played</p>
            </div>
            
            <div>
               
                @for($i = 0; $i < $recs; $i++)
                <div class="flex cursor-pointer px-5 hover:bg-gray-100 mb-2">
                    <div class="w-16">
                        <img src="imgs/other/album.jpg" alt="Album art">
                    </div>
                    <div class="ml-5">
                        <p class="font-bold">Song Name</p>
                        <p class="font-light text-sm">Artist Name</p>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</div>
@endsection