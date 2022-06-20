@extends('layouts.app')


@section('updateart')
    <div class="flex">
        <x-profilesidecomp :info="$info"/>
    
        <div class="w-3/4 my-5 mb-10 h-auto px-5 grid grid-cols-1">
            <div class="border border-gray-200 h-auto w-full  rounded-2xl shadow-2xl bg-white ">
                <div class="w-full m-5 overflow-auto scrollbar-thin  scroll-smooth scrollbar-thumb-maincolor">
                    <h1 class="text-maincolor text-3xl font-bold m-1">Chage Artist Information</h1>
                    <hr class="w-1/3 text-maincolor">
                </div>
                <div class="w-[80%] px-5">
                    
                    <form method="POST" action="/updateartprofile/{{ $info['id'] }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex">
                            <div class="w-56">
                                <img src="imgs/uploads/art-profile-pic/{{ $info['profilepic']}}" alt="">
                            </div>
                            <div>
                                <div class="mb-6">                       
                                    <label class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300" for="musicpic">Change Profile Picture:</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"  id="profilepic" name="profilepic" type="file">
                                    <div class="mt-1 text-sm text-gray-500 :text-gray-300" id="user_avatar_help">Choose your new profile picture</div>
                                    </div>
                            </div>
                        </div>
                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="fname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name: {{ $info['fname'] }}</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="lname" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name: {{ $info['lname']}}</label>
                            </div>
                          </div>
                         
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="phonenumber" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number ({{ $info['phonenumber'] }})</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="tel" name="password" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">New Password</label>
                            </div>
                        
                    
                        <button type="submit" class="text-white bg-maincolor hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
                        </form>
        
                </div>
    
    
    
            </div>
        
        
        
        </div>
    
    
    </div>
@endsection