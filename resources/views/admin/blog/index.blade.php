@extends('layouts.admin')
@section('title', 'Blog Posts')
@section('content')

    <section class="w-full p-4">
        <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
            <h2 class="text-2xl text-green-800">Blog Posts management</h2>

            <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                    href="{{ route('admin.post.create') }}"><i class="fa fa-plus mx-2"></i>New Post</a></button>
        </div>

        <div class="w-full mx-auto p-2 my-4">
            <form action="{{ route('admin.post.index') }}" method="POST" class="w-full">
                @csrf
                @method('GET')
                <div class="w-full md:w-8/12 mx-auto flex items-center">
                    <input type="text" name="search" value="{{ $search }}"
                        class="p-2 border border-gree-300 w-10/12 focus:outline-none focus:border focus:border-green-500">
                    <button class="bg-green-800 text-lg text-green-200 p-2 font-semibold"><i
                            class="fa fa-search mx-2"></i>search</button>
                </div>
            </form>
        </div>

        <div class="w-full">
            <div class="flex flex-col space-y-3">
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <div class="flex space-x-2">
                            <div class="w-2/12 overflow-hidden">
                                <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image"
                                    class=" object-fit transition-transform hover:scale-110">
                            </div>
                            <div class="w-10/12 flex flex-col">
                                <span class="text-green-700">
                                    {{ $post->category->category }}
                                    <span>
                                        @if ($post->featured === 1)
                                            <i class="fa fa-star text-sm mx-2"></i>
                                        @endif
                                    </span>
                                </span>
                                <h4 class="text-xl md:text-2xl hover:text-green-800"><a
                                        href="{{ route('admin.post.show', $post) }}">{{ $post->title }}</a>
                                </h4>
                                <span
                                    class="text-sm text-gray-600">{{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="w-10/12 mx-auto">
                        <p class="p-2 text-lg bg-green-300 border-l-4 border-green-600"> No Posts Available</p>
                    </div>
                @endif
            </div>
            <div class="w-full my-2">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
