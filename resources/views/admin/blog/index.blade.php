@extends('layouts.admin')
@section('title', 'Blog Posts')
@section('content')

<section class="w-full p-4">
    <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
        <h2 class="text-2xl text-green-800">Blog Posts management</h2>

        <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a href="{{route('admin.blog.create')}}"><i class="fa fa-plus mx-2"></i>New Post</a></button>
    </div>

    <div class="w-full mx-auto p-2 my-4">
        <form action="" class="w-full">
            <div class="w-full md:w-8/12 mx-auto flex items-center">
                <input type="text" class="p-2 border border-gree-300 w-10/12 focus:outline-none focus:border focus:border-green-500">
                <button class="bg-green-800 text-lg text-green-200 p-2 font-semibold"><i class="fa fa-search mx-2"></i>search</button>
            </div>
        </form>
    </div>

    <div class="w-full">
        <div class="flex flex-col space-y-3">
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-10/12 flex flex-col">
                    <span class="text-green-700">Academic</span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('admin.blog.show')}}">This is the title of the post which shows that the title may be very long</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-10/12 flex flex-col">
                    <span class="text-green-700">Academic</span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('admin.blog.show')}}">This is the title of the post</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-2/12 overflow-hidden">
                    <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                </div>
                <div class="w-10/12 flex flex-col">
                    <span class="text-green-700">Academic</span>
                    <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('admin.blog.show')}}">This is the title of the post</a></h4>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
