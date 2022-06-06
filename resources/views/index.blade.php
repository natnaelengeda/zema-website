@extends('header.head')

@section('index')
<div> 
    <div class="h-auto flex justify-between pb-10"><!-- First Section -->
        <div class=" h-full px-20 py-5">
            <div class=" border-gray-100 border-r-7 w-96 h-56 flex items-center rounded-2xl shadow-lg">
                <div class="ml-8 -rotate-45 ">
                    <img class="w-32" src="imgs/icon/icon.png" alt="Zema Icon">
                </div>
                <div class="ml-4 items-center -mt-10">
                    <p>Top Artists This Week</p>
                    <button class="border  rounded-lg p-2 w-24 text-lg ml-8 mt-5 bg-maincolor text-white shadow-sm hover:shadow-lg ">Listen</button>
                </div>
            </div>
        </div>
        <div class="w-full px-10 py-2">
            <div class="p-5">
                <form action="">
                <svg class="w-6 h-6 absolute m-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                <input class="border border-gray-600 w-[35rem] rounded-lg h-10 outline-none px-10 " type="search" name="searchsong" placeholder="Search for songs..">
                <input class="border  h-10 w-24 rounded-lg ml-5 bg-maincolor shadow-sm hover:shadow-lg text-white cursor-pointer" type="submit" value="Search">
                </form>
    </div> 
     <hr>          
     <div class=" w-full flex ml-10 items-center"><!-- Second Section -->
                <div class="hover:border border-black rounded-full cursor-pointer">
                <svg class="w-6 h-6 text-maincolor" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </div>
                <div class="w-40">
                    <img class="" src="imgs/randimgs/rand1.png" alt="Rand Image One">
                </div>
                <div class="w-40">
                    <img class="" src="imgs/randimgs/rand2.png" alt="Rand Image One">
                </div>
                <div class="w-40">
                    <img class="" src="imgs/randimgs/rand3.png" alt="Rand Image One">
                </div>
                <div class="w-40">
                    <img class="" src="imgs/randimgs/rand4.png" alt="Rand Image One">
                </div>
                <div class="hover:border border-black rounded-full cursor-pointer">
                <svg class="w-6 h-6 text-maincolor" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </div>
     </div>
    <hr>
        </div>
    </div> <!-- First Section End-->
    
    <hr class="w-[95%] items-center m-auto">

    <div class="w-full flex"> <!-- Second Section-->
        <div class="border-r border-gray-300 w-[40%] h-auto">
            <h1 class="text-center font-bold text-xl m-5 text-maincolor">Weekly Top #15</h1>
            @for($i=1 ;$i<=15; $i++)
            <div class="tplay">
                <div>
                    <svg class="w-10 text-maincolor " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="ml-7">
                    <p class="font-bold">Music Name {{ $i}}</p>
                    <p>Artist Name</p>
                </div>    
            </div>
            @endfor
        </div>
        <div class="w-full ml-10">
            @foreach($cats as $cat)
            <div>
                <div class="w-full m-5 ">
                    <h1 class="text-maincolor text-3xl font-bold m-1">{{$cat}}</h1>
                    <hr class="w-1/3 text-maincolor">
                </div>
            <div class="flex ">
                @for($i=1; $i < 5; $i++)
                <div class="w-56 cursor-pointer hover:w-60 ease-linear duration-100 hover:relative">
                    <img src="imgs/randimgs/rand{{$i}}.png" alt="">
                </div>
                @endfor                
            </div>
            </div>
            @endforeach
        </div>
    </div> <!-- Second Section End -->
    <hr>
    <div class="h-auto mb-10"><!-- Third Section-->
        <div class="flex justify-center my-20">
            <div class="w-[30rem]">
                <img src="imgs/other/phones.png" alt="Phones">
            </div>
            <div class="ml-10 -mt-10">
                <h1 class="text-4xl m-1">Available for different platforms</h1>
                <hr class="w-1/3">
                <p class="text-xl font-light">Available for Android, IOS, Web, Chrome <br> Tab and Windows Platform</p>
                <div class="ml-40 cursor-pointer">
                <img class="w-56" src="imgs/other/getonplaystore.png" alt="">
                <img class="w-52 ml-3" src="imgs/other/getonappstore.png" alt="">
                </div>
            </div>
        </div>
        <div class=" flex w-[85%] m-auto relative p-10 justify-between -mt-24 bg-maincolor bg-opacity-70 backdrop-blur-sm">
            <div>
                <div>
                    <h1 class="text-4xl m-2">For All the Creators</h1>
                    <hr class="">
                    <p class="text-2xl font-light m-5">Get on Zema, start sharing and <br> connect with your fans</p>
                </div>
                <div class="m-5 mt-7">
                    <button class="bg-maincolor text-white w-36 h-14 text-xl p-2 rounded-lg shadow-sm hover:shadow-xl">Start</button>
                </div>
            </div>
            <div class="w-96">
                <img src="imgs/other/plat1.png" alt="Platforms">
            </div>
        </div>
    </div> <!-- Third Section End-->
    <hr>
    <div class="p-10"><!-- Fourth Section -->
        <div class="w-[70%] m-auto boor p-10 rounded-lg">
            <form class="flex" action="">
                <div class="boor ">
                    <div class="boor w-auto justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <p> Addis Ababa, Ethiopia</p>
                    <p>Haile Street, 530</p>
                    </div>
                    <div>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    <p>+2500000000000</p>
                    <p>+2500000000000</p>
                    </div>
                    <div>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    <p>nattynengeda@gmail.com</p>    
                    </div>
                </div>
                <div>
                    <h1>Send Us a message</h1>
                    <input type="text" name="name">
                    <input type="email" name="email">
                    <textarea name="" id="" cols="30" rows="10"></textarea>

                </div>
            </form>
        </div>

    </div><!-- Fourth Section End -->
</div>
@endsection