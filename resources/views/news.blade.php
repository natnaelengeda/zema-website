@extends('layouts.app')

@section('news')
    <div class="mt-5 px-10">
            <div>
                <h1 class="text-center text-4xl">Latest</h1>
            </div>
            <div class="py-10 grid grid-cols-3 justify-evenly gap-5">
                @for($i=0 ; $i<5 ; $i++)
                <x-blogcards/>
                @endfor
            </div>
    </div>
@endsection