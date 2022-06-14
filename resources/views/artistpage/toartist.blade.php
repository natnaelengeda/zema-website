@extends('layouts.app')

@section('toartist')
{{-- <h1 id="hallo">Hallo</h1> --}}
   {{-- <x-herocomponent :lpost="$posts"/> --}}
   
   
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <x-herocomponent :lpost="$aposts"/></div>
      <div class="swiper-slide"> <x-herocomponent :lpost="$bposts"/></div>
      <div class="swiper-slide"> <x-herocomponent :lpost="$cposts"/></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  {{-- SignUp for the artist  --}}
  <div class="w-full border border-gray-200 shadow-xl h-96 bg-maincolor py-12">
      <h1 class="text-center text-white text-6xl font-popins">Start Uploading and get Connected.</h1>
      <h1 class="text-center text-white text-xl mt-10">Learn more about Zema artist programs, or how to get involved with our Artist Community to help us build what's next.      </h1>
      <div class="flex justify-center mt-10">
        <button id="artistsignup" class="border border-gray-200 w-40 h-16 m-auto rounded-xl bg-white text-xl  hover:shadow-xl ">Sign Up</button>
      </div>
  </div>

  {{-- Kibad things --}}
  <div class="w-full flex justify-between items-enter h-screen p-">
      <div class="w-full bg-gray-200 h-auto flex  items-center">
          <h1 class="text-blue-900 text-8xl  font-Staatliches ml-10 mt-20">Your <br> Biggest <br> Followers.</h1>
      </div>
      <div class="w-full bg-blue-900 flex items-center">
          <div class="w-[80%] m-auto">
            <h1 class="text-gray-200 text-6xl font-Staatliches text-start">We Love Growth as <br> much as  you do</h1>
            <h1 class="text-gray-400 mt-10 text-xl">By connecting you with your fans, we do the up most work to define Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia commodi assumenda modi non! Omnis nobis veniam quibusdam rerum optio non perspiciatis, minus reiciendis id a consectetur pariatur placeat sunt ducimus.</h1>
       </div>   
      </div>
  </div>

  {{-- More Kibad Case --}}

  <div class="w-full h-60 bg-orange-300 flex items-center justify-center">
      <h1 class="text-center text-8xl font-Staatliches text-blue-900">Customers Satisfaction</h1>
  </div>
  <div>
        <p class="text-center text-6xl"></p>
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Artists who use this platform</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                    <path d="M8 17l4 4 4-4m-4-5v9"></path>
                    <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                  </svg>
                  <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                  <p class="leading-relaxed">Downloads</p>
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                  </svg>
                  <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                  <p class="leading-relaxed">Users</p>
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                  </svg>
                  <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                  <p class="leading-relaxed">Files</p>
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  </svg>
                  <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                  <p class="leading-relaxed">Places</p>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>
  <hr class="border border-gray-300">
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/2 md:w-full">
          <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
            <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">New Artists</h2>
              <p class="leading-relaxed text-base">If you are new to the industry and wants to join us start up by signing up</p>
              <a href="/artistsign" class="mt-3 text-indigo-500 inline-flex items-center cursor-pointer">Sign Up
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2 md:w-full">
          <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
            <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Nebar Artist</h2>
              <p class="leading-relaxed text-base">Log in to continue what you started and get back with you fans</p>
              <a href="/artistlog" class="mt-3 text-indigo-500 inline-flex cursor-pointer items-center">Login
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>












  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
  <script>    
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
        centeredSlides: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    });
  </script>
  <x-footermine/>
@endsection