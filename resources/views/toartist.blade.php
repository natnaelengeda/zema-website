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
        <button class="border border-gray-200 w-40 h-16 m-auto rounded-xl bg-white text-xl  hover:shadow-xl ">Sign Up</button>
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
@endsection