@extends('layouts.app')

@section('news')
    <div class="mt-5">
            <div>
                <h1 class="text-center text-4xl">Latest</h1>
            </div>
            <div class="grid grid-cols-3 gap-10 justify-evenly mt-5 p-5"> <!-- Newst Part-->
                <div class="  cursor-pointer"> <!-- Single News -->
                    <div><p class="text-red-600 text-xl">Artists</p></div>
                    <div class="border border-gray-200 rounded-2xl shadow-xl overflow-hidden">
                    <div class="rounded-xl">
                        <img class=" shadow-lg" src="https://i.ytimg.com/vi/Pr-GQUlxlzM/maxresdefault.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-center">The new song annouced today at  12:00 local time becomes the best song of the year</p>
                    </div>
                    </div>
                </div>
                <div class=" w-full cursor-pointer"> <!-- Single News -->
                    <div><p class="text-red-600 text-xl">Artists</p></div>
                    <div class="border border-gray-200 rounded-2xl shadow-xl overflow-hidden">
                    <div class="rounded-xl">
                        <img class=" shadow-lg" src="https://i.ytimg.com/vi/Pr-GQUlxlzM/maxresdefault.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-center">The new song annouced today at  12:00 local time becomes the best song of the year</p>
                    </div>
                    </div>
                </div>
                <div class=" w-full cursor-pointer"> <!-- Single News -->
                    <div><p class="text-red-600 text-xl">Artists</p></div>
                    <div class="border border-gray-200 rounded-2xl shadow-xl overflow-hidden">
                    <div class="rounded-xl">
                        <img class=" shadow-lg" src="https://i.ytimg.com/vi/Pr-GQUlxlzM/maxresdefault.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-center">The new song annouced today at  12:00 local time becomes the best song of the year</p>
                    </div>
                    </div>
                </div>
               
                
            </div>
    </div>
@endsection