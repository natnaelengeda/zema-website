@extends('layouts.app')


@section('library')

<div class="flex relative">
    <x-sidebar/>
    <div class=" w-[60%] relative left-[20%]">
        <div class="w-full m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
            <h1 class="text-maincolor text-3xl font-bold m-1">Library</h1>
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
                            <td class="px-2 py-4 libclicked" value="{{ $musics->music_file}}">
                                <svg class="w-7 cursor-pointer text-gray-400 hover:text-maincolor" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </td>
                            <td class="px-2 py-4">
                                
                            </td>
                         
                            <td class="px-2 py-4 ">
                               
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
<x-libplayer/>
</div>

@endsection