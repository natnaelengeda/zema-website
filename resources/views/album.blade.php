@extends('layouts.app')

@section('album')
    <x-sidebar/>

        <div class="px-5 absolute left-[20%] w-full h-auto bg-gray-100 py-10">
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
<div>
        

</div>

@endsection