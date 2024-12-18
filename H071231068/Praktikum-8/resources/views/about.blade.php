@extends('layouts.master')
@section('content')

<section class="about bg-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl text-purple-500 font-bold text-center mb-6">About Us</h1>
        <div class="about-text grid md:grid-cols-2 gap-6 text-gray-700">
            <div class="space-y-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam repellat, ratione et quae dignissimos possimus quam quia magnam? Cum commodi ipsam sed molestias aperiam nam qui sunt! Animi, enim veniam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit omnis sequi, atque aspernatur officia ipsam minima autem sit soluta deserunt debitis reprehenderit consequatur voluptates nemo nesciunt nobis quas perferendis architecto.</p>
            </div>
            <div>
                <img src="{{ asset('Image/.jpg') }}" alt="About Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>
@endsection
