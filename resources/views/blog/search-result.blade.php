@extends('layouts.guest')
@section('title', 'Blog search result')
@section('content')

    <section class="w-full md:w-11/12 mx-auto">
        <p class="text-lg my-4 text-center">Search results for <span
                class="text-green-800 font-semibold">"{{ $search }}"</span></p>
        <div class="w-full md:w-10/12 mx-auto p-2">
            <form action="{{ route('blog-post-search') }}" method="POST" class="w-full">
                @csrf
                <div class="w-full md:w-8/12 mx-auto flex items-center">
                    <input type="text" name="search" value="{{ $search }}"
                        class="p-2 border border-gree-300 w-10/12 focus:outline-none focus:border focus:border-green-500">
                    <button class="bg-green-800 text-lg text-green-200 p-2 font-semibold"><i
                            class="fa fa-search mx-2"></i>search</button>
                </div>
            </form>

            <div class="w-full md:w-fit mx-auto flex flex-wrap space-x-2 items-center my-4">
                @foreach ($categories as $category)
                    <button
                        class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white"><a
                            href="{{ route('blog-category-posts', $category->category) }}">{{ $category->category }}</a></button>
                @endforeach
            </div>

            <p class="text-lg my-4 text-center">Found <span class="text-green-800 font-semibold text-xl">{{ $posts->count() }}</span> results</p>
        </div>

        <div class="w-full flex flex-col space-y-3">
            @foreach ($posts as $post)
                <div class="flex space-x-2">
                    <div class="w-2/12 overflow-hidden">
                        <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image"
                            class=" object-fit transition-transform hover:scale-110">
                    </div>
                    <div class="w-9/12 flex flex-col">
                        <span class="text-green-700 hover:underline"><a
                                href="{{ route('blog-category-posts', $post->category->category) }}">{{ $post->category->category }}</a></span>
                        <h4 class="text-xl md:text-2xl hover:text-green-800"><a
                                href="{{ route('blog-post', $post) }}">{{ $post->title }}</a></h4>
                        <span
                            class="text-sm text-gray-600">{{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full my-4">
            <h3 class="text-4xl text-green-800 mb-4 text-center">Explore more on our blog</h3>
            <div class="w-full flex flex-col md:flex-row flex-wrap">
                @foreach ($otherPosts as $post)
                    <div class="w-full md:w-1/3 lg:w-1/5 my-4">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full overflow-hidden">
                                <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image"
                                    class="w-full object-fit transform transition-transform hover:scale-110">
                            </div>
                            <span class="text-green-700 text-sm">{{ $post->category->category }}</span>
                            <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a
                                    href="{{ route('blog-post', $post) }}">{{ $post->title }}</a></h3>
                            <span
                                class="text-sm text-gray-600">{{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
