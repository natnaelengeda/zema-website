<x-header/>
    <div>
    <x-sidebar/>
            <div class="px-5 absolute left-[20%] w-full h-auto bg-gray-100 py-10">
               <div> <!-- Top Section -->
                        <div class="m-3">
                            <p class="text-2xl font-bold">Top on the Chart</p>
                        </div>
                    <div class=" flex items-center  overflow-x-visible scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor"> <!-- Sliding Part -->
                            @for($i=1; $i <= 5 ; $i++)
                            <div class="w-auto"> <!-- The Box Part-->
                                <div>
                                    <img class="w-54" src="imgs/albumart/reflection.png" alt="Album Art">
                                </div>
                                <div class="ml-4 -mt-4">
                                    <p class="font-bold">Reflection</p>
                                    <p class="font-light">Ropnan</p>
                                </div>
                            </div>
                            @endfor
                    </div>
               </div>
               <div>
                        <div class="m-3">
                            <p class="text-2xl font-bold">Artists</p>
                            <hr class="w-1/3 border border-gray-300">
                        </div>

                        <div><!--Alphabet Order -->
                            @foreach($alpha as $alsh)
                            <div><!-- !! -->
                                <div class="m-3">
                                    <p class="text-2xl font-light">{{$alsh}}</p>
                                </div>
                                <div class="flex">
                                    <div class="w-auto"> <!-- The Box Part-->
                                        <div>
                                            <img class="w-54" src="imgs/albumart/reflection.png" alt="Album Art">
                                        </div>
                                        <div class="ml-4 -mt-4">
                                            <p class="font-bold">Rophnan</p>
                                        </div>
                                    </div>
                                    <div class="w-auto"> <!-- The Box Part-->
                                        <div>
                                            <img class="w-54" src="imgs/albumart/reflection.png" alt="Album Art">
                                        </div>
                                        <div class="ml-4 -mt-4">
                                            <p class="font-bold">Rophnan</p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <hr class="border border-300">
                            @endforeach
                        </div>
               </div>
            </div>
           
    </div>
