@extends('admin.index')

@section('pnews')
    <div class="p-10 ">
        <div class="w-full py-1">
            <p class="text-3xl text-white">Upload News</p>
        </div>
        <hr>

        <div class="w-1/2">
            <form action="/uploadnews"  method="POST" enctype="multipart/form-data">
               @csrf
                <div class="mb-6 my-4">    
                    {{-- <p>Profile</p>                    --}}
                    <label class="block mb-2 text-xl font-medium text-white :text-gray-300" for="musicpic">News Image:</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"  id="profilepic" name="img" type="file">
                    <div class="mt-1 text-sm text-gray-500 :text-gray-300" id="user_avatar_help">Choose an Image to be displayed</div>
                </div>
                <div class="mb-6">
                    <label for="header" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Header</label>
                    <input type="header" id="header" name="header" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="paragraph" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Paragraph</label>
                    <input type="paragraph" id="paragraph" name="paragraph" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <button type="post"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-blue-800">Post</button>
            </form>
        </div>
        
    
    
    
    
    
    
    
    
    
    
    
    </div>





@endsection