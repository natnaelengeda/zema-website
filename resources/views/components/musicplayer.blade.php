<div class="bg-white fixed bottom-0  left-0 shadow-lg rounded-t-lg h-auto boor z-40 hidden" style="width: 100% !important;">

    {{-- Top Section --}}
    <div class="flex h-24 gap-2 boredr-b border-gray-300">
      
      <div class="h-full w-1/5 overflow-hidden ">
        <img class="w-full h-full rounded hidden md:block" src="https://tailwindcss.com/img/card-top.jpg" alt="Album Pic">
      </div>

      <div class="w-full flex items-center px-2 gap-5 border-b border-gray-300">
        <div class="flex justify-between  items-center w-96">
          {{-- Song Description --}}
          <div>
            <h3 class="text-2xl text-grey-darkest font-medium">A Sky Full of Stars</h3>
            <p class="text-sm text-grey mt-1">Ghost Stories</p>
          </div>
          {{-- Heart Button --}}
          {{-- <div class="text-red-lighter">
            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/></svg>
          </div> --}}
        </div>

          <div class="flex justify-between items-center  w-full ">
              {{-- Shuffle Button --}}
              <div class="text-grey-darker">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"/></svg>
              </div>
              {{-- Prevous Button --}}
              <div class="text-grey-darker">
                <svg class="w-12" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z"/></svg>
              </div>
              {{-- Play Button --}}
              <div class="text-white p-8 rounded-full bg-red-700 shadow-lg hover:shadow-2xl cursor-pointer">
                <svg class="w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"/></svg>
              </div>
              {{-- Next Button --}}
              <div class="text-grey-darker ">
                <svg class="w-12" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z"/></svg>
              </div>
              {{-- Repeat Button --}}
              <div class="text-grey-darker">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4a2 2 0 0 0-2 2v6H0l4 4 4-4H5V6h7l2-2H5zm10 4h-3l4-4 4 4h-3v6a2 2 0 0 1-2 2H6l2-2h7V8z"/></svg>
              </div>
          </div>
      </div>

    </div>

    {{-- Bottom Section --}}
    <div class="mx-8  pb-2">
      
      {{-- Time Start and Time End Button --}}
      <div class="flex justify-between text-sm text-grey-darker">
        <p>0:40</p>
        <p>4:20</p>
      </div>

      {{-- Progrss Bar Slide --}}
      <div class="">
        {{-- The Whole Bar --}}
        <div class="h-1 bg-gray-700  rounded-full">
          
          {{-- Progressive Bar--}}
          <div class="w-1/5 h-1 bg-red-300 rounded-full relative ">
              {{-- Round Thing That goes --}}
              <span class="w-4 h-4 bg-red-600 absolute pin-r pin-b mb-2 rounded-full shadow "></span>
          
            </div>
        </div>
      </div>


    </div>
