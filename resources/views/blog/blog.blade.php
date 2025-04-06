@extends('layouts.guest')
@section('title', 'Blog')
@section('content')

<section class="w-full md:w-11/12 mx-auto">
    <h2 class="text-green-800 text-center text-3xl my-2">Welcome to Scolastica Blog</h2>

    <div class="w-full md:w-10/12 mx-auto p-2">
        <form action="" class="w-full">
            <div class="w-full md:w-8/12 mx-auto flex items-center">
                <input type="text" class="p-2 border border-gree-300 w-10/12 focus:outline-none focus:border focus:border-green-500">
                <button class="bg-green-800 text-lg text-green-200 p-2 font-semibold"><i class="fa fa-search mx-2"></i>search</button>
            </div>
        </form>

        <div class="w-full md:w-fit mx-auto flex flex-wrap space-x-2 items-center my-4">
            <button class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white"><a href="{{route('blog-category-posts')}}">All</a></button>
            <button class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Academic</button>
            <button class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Sports</button>
            <button class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white">Clubs</button>
        </div>
    </div>

    <div class="w-full flex flex-col md:flex-row my-4">
        <div class="w-full md:w-2/3">
            <h3 class="text-4xl text-green-800 mb-4">Recent Posts</h3>

            <div class="flex flex-col space-y-3">
                <div class="flex space-x-2">
                    <div class="w-3/12 overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                    </div>
                    <div class="w-8/12 flex flex-col">
                        <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                        <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('blog-post')}}">This is the title of the post which shows that the title may be very long</a></h4>
                        <span class="text-sm text-gray-600">12-12-2025</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="w-3/12 overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                    </div>
                    <div class="w-8/12 flex flex-col">
                        <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                        <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('blog-post')}}">This is the title of the post</a></h4>
                        <span class="text-sm text-gray-600">12-12-2025</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="w-3/12 overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class=" object-fit transition-transform hover:scale-110">
                    </div>
                    <div class="w-8/12 flex flex-col">
                        <span class="text-green-700 hover:underline"><a href="#">Academic</a></span>
                        <h4 class="text-xl md:text-2xl hover:text-green-800"><a href="{{route('blog-post')}}">This is the title of the post</a></h4>
                        <span class="text-sm text-gray-600">12-12-2025</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3">
            <h3 class="text-2xl text-green-800 mb-4">Featured Posts</h3>
            <div class="flex flex-col space-y-2">
                <div class="w-full bg-green-50 p-2">
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
                <div class="w-full bg-green-50 p-2">
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
                <div class="w-full bg-green-50 p-2">
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
                <div class="w-full bg-green-50 p-2">
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full my-4">
        <h3 class="text-4xl text-green-800 mb-4 text-center">More on our blog</h3>
        <div class="w-full flex flex-col md:flex-row flex-wrap">
            <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                <div class="w-11/12 mx-auto">
                    <div class="w-full overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-fit transform transition-transform hover:scale-110">
                    </div>
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                <div class="w-11/12 mx-auto">
                    <div class="w-full overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-fit transform transition-transform hover:scale-110">
                    </div>
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                <div class="w-11/12 mx-auto">
                    <div class="w-full overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-fit transform transition-transform hover:scale-110">
                    </div>
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                <div class="w-11/12 mx-auto">
                    <div class="w-full overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-fit transform transition-transform hover:scale-110">
                    </div>
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                <div class="w-11/12 mx-auto">
                    <div class="w-full overflow-hidden">
                        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-fit transform transition-transform hover:scale-110">
                    </div>
                    <span class="text-green-700 text-sm">Sports</span>
                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a href="#">This is the title of the blog post</a></h3>
                    <span class="text-sm text-gray-600">12-12-2025</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
