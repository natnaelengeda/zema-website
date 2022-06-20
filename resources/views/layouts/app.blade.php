<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="imgs/icon/icon.png">

        <title>{{ config('app.name', 'Zema') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
        {{-- Music Player Resources --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
        {{-- <link rel="stylesheet" href="/vcss/app.css"> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('vcss/css.css'); }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('vcss/css.css')}}"> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        <style>
                 
        .swiper {
          width: 100%;
          height: 100%;
        }

        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;

          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
        .hide-scroll-bar {
              -ms-overflow-style: none;
              scrollbar-width: none;
        }
        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
          }
        
    
         
      
      .player{
          height: auto;
          display: flex;
          align-items: center;
          flex-direction: column;

          border-radius: 10px;
      }
      .wrapper{
          display: flex;
          justify-content: space-between;
          width: 100%;
          border: 1px solid transparent;
          /* padding: 30px; */
      }
      .details{
          /* border: 1px solid red; */
          /* display: flex; */
          /* height: 200px; */
          
          align-items: center;
          flex-direction: column;
          justify-content: center;
      }
      .track-art{
          /* margin: 10px; */
          height: 100px;
          width: 100px;
          /* border: 2px solid #fff; */
          background-size: cover;
          background-position: center;
          /* border-radius: 50%; */
          /* -moz-box-shadow: 0px 6px 5px #ccc; */
          /* -webkit-box-shadow:0px 6px 5px #ccc; */
          /* box-shadow: 0px 6px 5px #ccc; */
          /* -moz-border-radius:190px; */
          /* -webkit-border-radius:190px; */
          /* border-radius: 190px; */
      }
      .now-playing{
          font-size: 10pt;
      }
      .track-name{
          font-size: 10pt;
      }
      .track-artist{
          margin-top: 5px;
          font-size: 10pt;
      }
      /* .buttons{
          border: 1px solid black;
          display: flex;
          flex-direction: row;
          gap: 10px;
          align-items: center;
          height: 100px;
          /* margin-bottom: 30px; */

      .active{
          color: black;
      }
      .repeat-track,
      .random-track,
      .playpause-track,
      .prev-track,
      .next-track{
          padding: 25px;
          opacity: 0.8;
          transition: opacity .2s;
      }
      .repeat-track:hover,
      .random-track:hover,
      .playpause-track:hover,
      .prev-track:hover,
      .next-track:hover{
          opacity: 1.0;
      }
      .slider_container{
          
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .seek_slider,
      .volume_slider{
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          height: 5px;
          background: #83a9ff;
          -webkit-transition: .2s;
          transition: opacity .2s;
      }
      .seek_slider::-webkit-slider-thumb,
      .volume_slider::-webkit-slider-thumb{
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          width: 15px;
          height: 15px;
          background: white;
          border: 3px solid #3774ff;
          cursor: pointer;
          border-radius: 100%;
      }
      .seek_slider:hover,
      .volume_slider:hover{
          opacity: 1.0;
      }
      .seek_slider{
          width: 60%;
      }
      .volume_slider{
          width: 30%;
      }
      .current-time,
      .total-duration{
          
      }
      i.fa-volume-down,
      i.fa-volume-up{
          padding: 10px;
      }
      i,
      i.fa-play-circle,
      i.fa-pause-circle,
      i.fa-step-forward,
      i.fa-step-backward{
          cursor: pointer;
      }
      .randomActive{
          color: black;
      }
      .rotate{
          animation: rotation 8s infinite linear;
      }
      @keyframes rotation{
          from{
              transform: rotate(0deg);
          }
          to{
              transform: rotate(359deg);
          }
      }
      .loader{
          height: 70px;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .loader .stroke{
          background: #f1f1f1;
          height: 150%;
          width: 10px;
          border-radius: 50px;
          margin: 0px 5px;
          animation: animate 1.4s linear infinite;
      }
      @keyframes animate{
          50%{
              height: 20%;
              background: #4286f4;
          }
          100%{
              height: 100%;
          }
      }
      .stroke:nth-child(1){
          animation-delay: 0s;
      }
      .stroke:nth-child(2){
          animation-delay: 0.3s;
      }
      .stroke:nth-child(3){
          animation-delay: 0.6s;
      }
      .stroke:nth-child(4){
          animation-delay: 0.9s;
      }
      .stroke:nth-child(5){
          animation-delay: 0.6s;
      }
      .stroke:nth-child(6){
          animation-delay: 0.3s;
      }
      .stroke:nth-child(7){
          animation-delay: 0s;
}
</style>
    </head>
    <body class="font-sans antialiased scrollbar-thin scrollbar-thumb-maincolor scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-track-rounded-full overflow-x-hidden">
        <div class="">
            @include('layouts.navigation')
                    
            <!-- Page Content -->
            <main class="pt-16 relative z-10">
                {{-- {{ $slot }} --}}
                @yield('index')
                @yield('home')
                @yield('news')
                @yield('artist')
                @yield('album')
                @yield('about')
                @yield('library')
                @yield('top')
                @yield('login')
                @yield('signup')
                @yield('register')

                @yield('toartist')
                @yield('artistprofile')
                @yield('uploadmusic')
                @yield('viewmusic')
                @yield('viewalbum')
                @yield('updateart');

                @yield('mp')


                @yield('showtracks')

                @yield('userprofile')

            </main>
        </div>
        {{-- <x-footermine/> --}}

        {{-- <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script> --}}
{{-- <x-mplayer/> --}}
   
      </body>
</html>
