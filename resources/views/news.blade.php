@extends('layouts.app')

@section('news')
    <div class="mt-5 px-10">
            <div>
                <h1 class="text-center text-4xl">Latest</h1>
            </div>
            <div class="py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 justify-evenly gap-5">
                @foreach ($news as $news)
                <x-blogcards :post="$news"/>
                
                @endforeach
            </div>
    </div>
@endsection