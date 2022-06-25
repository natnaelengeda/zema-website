@extends('layouts.app')

@section('viewmusic')

    <div class="flex pb-10">

        <x-profilesidecomp :info="$info"/>
        {{-- <div class="bg-white relative left-[18.9%] w-[80%] h-screen p-10 "> --}}
        <div class="w-3/4 my-5 mb-10 h-auto px-5">
            <div class="text-white border-b border-gray-500 p-3 py-5 pl-5 flex gap-10">
                <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border text-black border-gray-200 dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
                    <p>Total Uploaded Music: {{ count($artist)}}</p>
                </div>
               
                <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border text-black dark:hover:bg-gray-800 border-gray-200 dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
                    <p>Total Litsen: {{ $listen}}</p>
                </div>
            </div>
                 
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 :text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 :text-gray-400">
                    <tr>
                    <th scope="col" class="px-1 py-3">
                    Track Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Music Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Genre
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Duration
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Album
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Listen Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artist as $arst)
                    <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                            {{ $arst->music_track_num }}
                            </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                        {{ $arst->music_name }}
                        </th>
                        <td class="px-6 py-4">
                        {{ $arst->music_genre}}
                        </td>
                        <td class="px-6 py-4">
                        {{ $arst->music_duration}}
                        </td>
                        <td class="px-6 py-4">
                        {{ $arst->album}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $arst->listen_count }}
                        </td>
                         <td class="px-6 py-4 text-right">
                            <form action="/deletemusic/{{ $arst->id }}" method="POST">
                                @csrf  
                                @method('DELETE')
                                <button class="font-medium text-red-600 :text-blue-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                   
                </tbody>
            </table>
        </div>
    
        
        </div>
    </div>




@endsection