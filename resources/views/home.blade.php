@extends('layouts.app')

@section('home')
<div class="">
    <div class="flex relative">
        <x-sidebar/>
        
        <div class=" w-[60%] relative left-[20%]"> <!-- Middle Main Layout -->
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
            <div class="w-full  mt-1 h-auto flex gap-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
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
        <div class="border-l border-gray-400 w-[20%] py-6 fixed left-[80%] z-20 bg-white"> <!-- Right Menu Bar -->
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