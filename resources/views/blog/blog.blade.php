@extends('layouts.guest')
@section('title', 'Blog')
@section('content')

    <section class="w-full md:w-11/12 mx-auto p-2">
        <h2 class="text-green-800 text-center text-3xl my-2">Welcome to Scolastica Blog</h2>

        @if ($recentPosts->count() > 0)
            <div class="w-full md:w-10/12 mx-auto p-2">
                <form action="{{ route('blog-post-search') }}" method="POST" class="w-full">
                    @csrf
                    <div class="w-full md:w-8/12 mx-auto flex items-center">
                        <input type="text" name="search"
                            class="p-2 border border-gree-300 w-10/12 focus:outline-none focus:border focus:border-green-500">
                        <button class="bg-green-800 text-lg text-green-200 p-2 font-semibold"><i
                                class="fa fa-search mx-2"></i><span class="hidden md:block">search</span></button>
                    </div>
                </form>

                <div class="w-full md:w-fit mx-auto flex flex-wrap space-x-2 items-center my-4">
                    @foreach ($categories as $category)
                        <button
                            class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white"><a
                                href="{{ route('blog-category-posts', $category->category) }}">{{ $category->category }}</a></button>
                    @endforeach
                </div>
            </div>

            <div class="w-full flex flex-col md:flex-row my-4">
                <div class="w-full md:w-2/3 mb-4 md:mb-0">
                    <h3 class="text-2xl md:text-4xl text-green-800 mb-4">Recent Posts</h3>

                    <div class="flex flex-col space-y-3">
                        @foreach ($recentPosts as $post)
                            <div class="flex space-x-2">
                                <div class="w-3/12 overflow-hidden">
                                    <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image"
                                        class=" object-fit transition-transform hover:scale-110">
                                </div>
                                <div class="w-8/12 flex flex-col">
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
                </div>
                <div class="w-full md:w-1/3 my-3 mb:my-0">
                    <h3 class="text-2xl text-green-800 mb-2 md:mb-4">Featured Posts</h3>
                    <div class="flex flex-col space-y-2">
                        @if ($featuredPosts->count() > 0)
                            @foreach ($featuredPosts as $post)
                                <div class="w-full bg-green-50 p-2">
                                    <span class="text-green-700 text-sm">{{ $post->category->category }}</span>
                                    <h3 class="text-lg md:text-xl hover:text-green-800 hover:underline"><a
                                            href="{{ route('blog-post', $post) }}">{{ $post->title }}</a></h3>
                                    <span
                                        class="text-sm text-gray-600">{{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
                                </div>
                            @endforeach
                        @else
                            <div class="w-full">
                                <p class="bg-green-300 text-green-800 p-2 border-l-2 border-green-800">No Featured posts
                                    available</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            @if ($otherPosts->count() > 0)
                <div class="w-full my-4">
                    <h3 class="text-2xl md:text-4xl text-green-800 mb-4 text-center">More on our blog</h3>
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
                    <div class="w-full my-2">
                        {{ $otherPosts->links() }}
                    </div>
                </div>
            @endif
        @else
            <div class="w-full md:p-8">
                <p class="bg-green-300 text-green-800 p-2 border-l-2 border-green-800">Currenty There is no any post in the
                    blog. Stay tuned!</p>
            </div>
        @endif
    </section>
@endsection
