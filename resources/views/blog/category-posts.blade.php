@extends('layouts.guest')
@section('title', 'Blog category Posts')
@section('content')

    <div class="w-full md:w-11/12 mx-auto p-4">
        <h3 class="text-2xl md:text-4xl text-green-800 mb-4">{{ $category }}</h3>

        <div class="flex flex-col space-y-3">
            @if ($categoryPosts->count() > 0)
                @foreach ($categoryPosts as $post)
                    <div class="flex space-x-2">
                        <div class="w-2/12 overflow-hidden">
                            <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image"
                                class=" object-fit transition-transform hover:scale-110">
                        </div>
                        <div class="w-9/12 flex flex-col">
                            <span class="text-green-700 hover:underline">{{ $post->category->category }}</span>
                            <h4 class="text-xl md:text-2xl hover:text-green-800"><a
                                    href="{{ route('blog-post', $post) }}">{{ $post->title }}</a></h4>
                            <span
                                class="text-sm text-gray-600">{{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="w-full my-2">
                    {{ $categoryPosts->links() }}
                </div>
            @else
                <div class="w-full">
                    <p class="bg-green-300 text-green-800 p-2 border-l-2 border-green-800">No posts
                        available for this category</p>
                </div>
            @endif
        </div>

        <div class="w-full flex flex-wrap space-x-2 items-center my-4">
            <span class="text-lg mr-2">Other Categories:</span>
            @foreach ($otherCategories as $category)
                <button
                    class="my-2 py-1 px-4 font-semibold border-2 border-green-800 text-green-800 rounded-xl hover:bg-gray-600 hover:text-white"><a
                        href="">{{ $category->category }}</a></button>
            @endforeach
        </div>
    </div>
@endsection
