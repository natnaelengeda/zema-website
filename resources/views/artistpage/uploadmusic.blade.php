@extends('layouts.app')

@section('uploadmusic')
        <div class="flex pb-20">

            <x-profilesidecomp :info="$info"/>
            
            {{-- <div class="bg-white relative left-[18.9%] w-full h-screen p-10 "> --}}
        <div class="w-full my-5 mb-10 h-auto bg-white px-5">

                <div class="w-[50%] px-20 ">
                        
                         
                                <div class="my-5">
                                        <h1 class="text-3xl">Upload Music</h1>         
                                        <hr class="border border-gray-200 w-[50%]">
                                </div>         
                                <form method="POST" action="/uploadmusic" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-6">
                                        <label for="musicname" class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Music Name:</label>
                                        <input type="text" name="musicname" id="musicname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                                        </div>

                                        <div class="mb-6">                       
                                        <label class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300" for="musicpic">Music Pic:</label>
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"  id="musicpic" name="musicpic" type="file">
                                        <div class="mt-1 text-sm text-gray-500 :text-gray-300" id="user_avatar_help">An Album art for your music </div>
                                        </div>

                                        <div class="mb-6">                       
                                                <label class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300" for="musicfile">Music File:</label>
                                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"  id="musicfile" name="musicfile" type="file">
                                                <div class="mt-1 text-sm text-gray-500 :text-gray-300" id="user_avatar_help">Upload the music file here</div>
                                                </div>


                                        {{-- <input type="file" name="image"> --}}
                                        
                                        <div class="mb-6">
                                                <label for="hashtag" class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Hash tag:</label>
                                                <input type="text" id="hashtag" name="hashtag" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"   required="">
                                                </div>

                                      
                                                                
                                        <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Genre:</label>
                                        <select id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option>Rock</option>
                                                <option>Jazz</option>
                                                <option>Blues</option>
                                                <option>Singing</option>
                                                <option>Hip-Hop</option>
                                                <option>Soul</option>
                                                <option>Disco</option>
                                        </select>

                                        <div class="mb-6 mt-4">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Album:</label>
                                                <input type="album" name="album" id="album" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"   required="">
                                                </div>
                                        
                                        <div class="mb-6 mt-4">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Contributing Artist:</label>
                                                <input type="contartist" name="contartist" id="contartist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"   required="">
                                                </div>
                                                                        
                                        <label for="tracknumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Track Number:</label>
                                        <select id="tracknumber" name="tracknumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option>#1</option>
                                                <option>#2</option>
                                                <option>#3</option>
                                                <option>#4</option>
                                                <option>#5</option>
                                                <option>#6</option>
                                                <option>#7</option>
                                                <option>#8</option>
                                                <option>#9</option>
                                                <option>#10</option>
                                                <option>#11</option>
                                                <option>#12</option>
                                                <option>#13</option>
                                                <option>#14</option>
                                                <option>#15</option>
                                                <option>#16</option>
                                        </select>
                                        
                                
                                        <input type="submit" value="Upload" class="cursor-pointer mt-5 text-white bg-maincolor hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"/>
                                </form>
                                <div class="m-20">
                                        <h1 class="invisible">Cat</h1>
                                </div>
                
                       
                </div>
        
            </div>
        </div>
@endsection