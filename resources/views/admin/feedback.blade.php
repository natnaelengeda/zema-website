@extends('admin.index')


@section('feedback')
<div>
    <div class="text-white border-b border-gray-500 p-3 py-5 pl-5 flex gap-10">
        <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
            <p>Total Feedbacks: {{count($feedback)}}</p>
        </div>
        <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
            <p>Seen Feedbacks: {{count($seen)}}</p>
        </div>
        <div class="w-1/4 boor p-5 transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150 border dark:hover:bg-gray-800  dark:border-gray-700 rounded-xl shadow-md dark:shadow-gray-800 cursor-pointer">
            <p>Deleted Feedbacks: {{count($seen)}}</p>
        </div>
       
    </div>
    <div class="p-5">
        <div class="text-white">
            <p class="text-xl">All Feedbacks</p>
        </div>
        <hr class="dark:border-gray-600">
        <div class="py-5 flex flex-col gap-5 ">
            @foreach($feedback as $feed)
            <div class="w-3/4 flex justify-between text-white border dark:border-gray-800 rounded-xl p-5 shadow-md cursor-pointer dark:shadow-gray-800">
               <div class="grid gap-4 ">
                    <div class="flex gap-2 items-end">
                        <p class="text-xl text-gray-500">Name:</p><p>{{$feed->name}}</p>
                    </div>
                    <hr class="dark:border-gray-800 w-1/4">
                    <div class="flex gap-2 items-end">
                        <p class="text-xl text-gray-500">Email:</p><p>{{$feed->email}}</p>
                    </div>
                    <hr class="dark:border-gray-800 w-2/4">
                    <div class="flex gap-2 items-end">
                        <p class="text-xl text-gray-500">Feedback:</p><p>{{$feed->feedback}}</p>
                    </div>
               </div>
               <div class="flex flex-col justify-start gap-5">
                <div class="transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150">
                    <svg class="w-8 hover:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                    <div class="transition ease-in-out delay-10 hover:-translate-y-1 hover:scale-110 hover:bg--500 duration-150">
                       <form action="/feedback/delete/{{$feed->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button><svg class="w-8 text-red-600 hover:text-red-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>
                        </form>
                    </div>
                   
               </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection