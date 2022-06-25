@extends('layouts.app')

@section('index')

<div class="relative"> 
    
    <div class=" h-auto  flex flex-col md:flex-row justify-between px-1 pb-10"><!-- First Section -->
        {{-- Rotated Zema THingy --}}
        <div class="w-full m-auto md:m-1  h-full px-2 md:px-20 py-10">
            <div class=" border-gray-100 border-r-7 w-full md:w-96 h-56 flex gap-5 justify-between  px-4 items-center  rounded-2xl shadow-lg">
                <div class=" -rotate-45 ">
                    <img class="w-32" src="imgs/icon/icon.png" alt="Zema Icon">
                </div>
                <div class="items-center ">
                    <p class="md:text-xl">Top Artists This Week</p>
                    <button class="border  rounded-lg p-2 w-24 text-lg ml-8 mt-5 bg-maincolor text-white shadow-sm hover:shadow-lg ">Listen</button>
                </div>
            </div>
        </div>
        <div class="w-full px-2 py-5">
            {{-- Search Function --}}
            <div class="relative">
                  <div>
                      <form>
                        <label for="default-search" class="mb-2 text-xl font-medium text-gray-900 sr-only :text-gray-300">Search</label>
                          <div class="relative">
                          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                           <svg class="w-5 h-5 text-gray-500 :text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                         </div>
                        <input type="search" id="search" name="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500" placeholder="Search Musics..." required="">
                        <button type="submit" name="searchbtn" class="hidden md:block text-white absolute right-2.5 bottom-2.5 bg-maincolor hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Search</button>
                        </div>
                      </form>
                  </div>
                  <div class="w-full border border-gray-200 rounded-b-2xl   h-auto absolute bg-white">
                    <ul id="searchitems" class="overflow-hidden">
                                    
                    </ul>
                    <script src="js/Jquery3.js"></script>
                    <script>
                      function fetch(query = ''){

                            $.ajax({
                                type: "GET",
                                url: "/live_search",
                                data: {query:query},
                                dataType: "json",
                                success: function (data) {
                                    $('#searchitems').html(data.music_data);
                                    $('#total_records').text(data.total_data);
                                    console.log(data.music_data);
                                }
                              });
                          }
                          $(document).on('keyup', '#search', function(){
                           
                            var query = $(this).val();
                            fetch(query);

                          });
                      </script>
                  </div>
          </div>

          {{-- <hr>     --}}
          <div class=" w-full h-32  my-10 flex md:ml-10 items-center overflow-hidden"><!-- Second Section -->
              <div class="hover:border border-black rounded-full cursor-pointer">
                <svg class="w-6 h-6 text-maincolor" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
              </div>
              <div class="w-56 md:w-40">
                  <img class="" src="imgs/randimgs/rand1.png" alt="Rand Image One">
              </div>
              <div class="w-56 md:w-40">
                  <img class="" src="imgs/randimgs/rand2.png" alt="Rand Image One">
              </div>
              <div class="w-56 md:w-40">
                  <img class="" src="imgs/randimgs/rand3.png" alt="Rand Image One">
              </div>
              <div class="w-56 md:w-40">
                  <img class="" src="imgs/randimgs/rand4.png" alt="Rand Image One">
              </div>
              <div class="hover:border border-black rounded-full cursor-pointer">
              <svg class="w-6 h-6 text-maincolor" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </div>
            </div>
            <hr>
        </div>
          {{-- <hr class="w-[95%] items-center m-auto"> --}}
    </div>



          <div class="w-full flex"> <!-- Second Section-->

            <aside class="hidden lg:block absolute h-screen w-1/4 scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden" aria-label="Sidebar">
            <div class="overflow-y-auto py-2 px-3 bg-gray-50  :bg-gray-800 border-r border-gray-300 h-full scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300  scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden">
            <h1 class="text-center font-bold text-xl m-5 text-maincolor">Weekly Top #15</h1>
            <ul class="space-y-2">
            @foreach($musics as $music)
            <li class="sidebuttonclicked" value="{{ $music->id }}">
            <button id=""  class="w-full  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg :text-white hover:bg-gray-100 :hover:bg-gray-700 cursor-pointer">
            <svg class="w-10 text-maincolor ml-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
            <div class="flex flex-col justify-end items-start ml-5">
            <span class="font-bold text-lg">{{ $music->music_name }}</span>
            @foreach($allartist as $arts)
                @if($arts->id == $music->artist_id)
                  <span> {{ $arts->fname}}</span>
                @endif
            @endforeach
            
            </div>
            </button>
            </li>
            @endforeach
            </ul>
            </div>
            </aside>
            
            
            <div class="w-full lg:pl-[25%]">
                
                <div> 
                  <div>
                  <div class="w-full md:m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                    <h1 class="text-maincolor text-3xl font-bold md:m-1">New Releases</h1>
                    <hr class="w-1/3 text-maincolor">
                  </div>
                  
                  <div class="flex flex-col overflow-hidden bg-white m-auto p-auto w-full lg:w-[55rem]">
                    <div class="flex scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-x-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full py-3" >
                          <div class="flex flex-nowrap lg:ml-5 md:ml-20 ml-10 ">
                              @foreach($newreal as $content)
                              <div class="inline-block px-3 cursor-pointer">
                                    <div class="mainpageplay w-auto h-full max-w-xs  overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out" value="{{ $content->id }}">
                                      <div class="w-44">
                                        <img src="imgs/uploads/art-music-pic/{{$content->music_image}}" alt="Reflection Album Art">
                                        <p class="text-center">{{ $content->music_name }}</p>
                                    </div>
                                    </div>
                              </div>
                              @endforeach
                          </div>
                    </div>
                  </div>
                  </div>
                </div>
                
                <div>

                  <div>
                    <div class="w-full md:m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                      <h1 class="text-maincolor text-3xl font-bold my-4">Artists</h1>
                      <hr class="w-1/3 text-maincolor">
                    </div>
                    
                    <div class="flex flex-col bg-white m-auto p-auto w-full lg:w-[55rem]">
                      <div class="flex scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-x-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full py-3" >
                            <div class="flex flex-nowrap lg:ml-5 md:ml-20 ml-10">
                                @foreach($artists as $artist)
                                <a href="/showtracks/{{ $artist->id }}" class="inline-block px-3">
                                      <div class="w-auto  cursor-pointer h-full max-w-xs  overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                        <div class="w-56 h-56">
                                          <img src="imgs/uploads/art-profile-pic/{{$artist->profilepic}}" alt="Reflection Album Art">
                                        </div>
                                        <div>
                                          <p class="text-center">{{ $artist->fname }} {{ $artist->lname}}</p>
                                        </div>
                                      </div>
                                  </a>
                                @endforeach
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
                
            </div>

            </div> 
                
          </div>

          <!-- Second Section End -->
          <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="imgs/other/phones.png">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Available for Different Platforms</h1>
            <p class="mb-8 leading-relaxed">Available for Android, IOS, Web, Chrome Tab and Windows Platform</p>
            
            
            <div class="flex lg:flex-row md:flex-col">
            <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
            <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
            <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
            <span class="title-font font-medium">Google Play</span>
            </span>
            </button>
            <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
            <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
            <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
            <span class="text-xs text-gray-600 mb-1">Download on the</span>
            <span class="title-font font-medium">App Store</span>
            </span>
            </button>
            </div>
            </div>
            </div>
            </section>
            
            <hr>
            <section class="text-gray-600 body-font bg-maincolor bg-opacity-90 backdrop-blur-sm">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">For all the Artists
            <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed text-white">Get on Zema, start sharing and
            connect with your fans </p>
            <div class="flex justify-center">

            <a href="/session/set"  class="bg-white text-maincolor w-32 h-12 text-xl p-2 rounded-lg shadow-sm hover:shadow-xl text-center">Start</a>
          
            </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="imgs/other/plat1.png">
            </div>
            </div>
            </section>
            
 <!-- Third Section End-->
            <hr>
            <div>
            <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
            <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">nattynengeda@gmail.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">+251-93665-7001</p>
            </div>
            </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <form action="/sendfeedback" method="POST">
            @csrf
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Send us your feedback</p>
            <div class="relative mb-4">

            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
            <p class="text-xs text-gray-500 mt-3">We will see your feedback as soon as possible</p>
            </form>
            </div>

            </div>
            </section>
            </div>


</div>
</div> <!-- First Section End-->
{{-- <x-musicplayer/> --}}
<x-mmplayer/>

<x-footermine/>
@endsection
