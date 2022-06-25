@extends('admin.index')



@section('music')
<div class="">
    <div class="text-white border-b border-gray-500 p-3 py-5 pl-5 flex gap-10">
        <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
            <p>Total Uploaded Music: {{count($music)}}</p>
        </div>
       
        <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
            <p>Deleted Music: 1</p>
        </div>
    </div>
    <div>
         
<div class="relative h-96 overflow-x-auto shadow-md sm:rounded-lg py-5  scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden dark:scrollbar-thumb-gray-800 dark:scrollbar-track-gray-500">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
            <th scope="col" class="px-6 py-3">
            Music
            </th>
            <th scope="col" class="px-6 py-3">
            Artist
            </th>
            <th scope="col" class="px-6 py-3">
            Album
            </th>
            <th scope="col" class="px-6 py-3">
            Active
            </th>
            <th scope="col" class="px-6 py-3">
           
            </th>
            <th scope="col" class="px-6 py-3">
            <span class="sr-only">Edit</span>
            </th>
            </tr>
        </thead>
        <tbody>
            @foreach($music as $musics)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{$musics->music_name}}
            </th>
            <td class="px-6 py-4">
            {{$musics->artist_id}}
            </td>
            <td class="px-6 py-4">
            {{$musics->album}}
            </td>
            <td class="px-6 py-4">
            Offline
            </td>
            <td class="px-6 py-4">
        
            </td>
            <td class="px-6 py-4 text-right">
               <form action="/adeletemusic/{{ $musics->id }}" method="POST">
                    @csrf  
                    @method('DELETE')
                    <button class="font-medium text-red-600 :text-blue-500 hover:underline">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    
    </div>
</div>
@endsection