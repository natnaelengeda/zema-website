@extends('layouts.app')

@section('about')
<div class="flex items-center justify-evenly px-10 py-10">
    <div class=" w-[50%]">
        <p class="uppercase font-bold text-4xl mb-10">About Us</p>
        <p class="mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus atque molestias quibusdam enim doloribus, quidem suscipit aperiam fugit! Impedit officia velit nobis cumque ut dolorem praesentium, optio recusandae iusto quia.</p>
        <button class="w-32 h-16 bg-maincolor text-white text-xl hover:shadow-xl">Learn More</button>
    </div>
    <div class="">
        <img src="imgs/randimgs/about.jpg" alt="">
    </div>
</div>
@endsection