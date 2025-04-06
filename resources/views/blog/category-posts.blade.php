@extends('layouts.guest')
@section('title', 'Blog category Posts')
@section('content')

    <div class="w-full md:w-11/12 mx-auto p-4">
        <h3 class="text-4xl text-green-800 mb-4">Academic Posts</h3>

        <div class="flex flex-col space-y-3">
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{ asset('images/kindergarten.jpg') }}" alt="post image"
                        class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-9/12 flex flex-col">
                    <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{ route('blog-post') }}">This is the
                            title of the post which shows that the title may be very long</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{ asset('images/kindergarten.jpg') }}" alt="post image"
                        class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-9/12 flex flex-col">
                    <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{ route('blog-post') }}">This is the
                            title of the post</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{ asset('images/kindergarten.jpg') }}" alt="post image"
                        class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-9/12 flex flex-col">
                    <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{ route('blog-post') }}">This is the
                            title of the post</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-wrap space-x-2 items-center my-4">
            <span class="text-lg mr-2">Other Categories:</span>
            <button
                class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white"><a
                    href="{{ route('blog-category-posts') }}">All</a></button>
            <button
                class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Academic</button>
            <button
                class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Sports</button>
            <button
                class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Clubs</button>
        </div>
    </div>
@endsection
