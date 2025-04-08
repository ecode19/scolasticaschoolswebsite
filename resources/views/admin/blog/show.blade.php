@extends('layouts.admin')
@section('title', 'Blog Post')
@section('content')

<section class="w-full md:w-11/12 mx-auto p-4">
    <div class="w-11/12 md:w-9/12 mx-auto overflow-hidden h-fit md:h-96">
        <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image" class="w-full object-cover">
    </div>
    <div class="w-11/12 md:w-9/12 mx-auto flex items-center space-x-4 my-4">
        <span class="text-green-700 text-lg font-semibold">{{$post->category->category}}</span>
        <span class="text-gray-600 text-lg">Posted on: {{ $post->created_at->diffInDays(now()) > 7 ? $post->created_at->format('F j, Y') : $post->created_at->diffForHumans() }}</span>
    </div>
    <div class="w-11/12 md:w-9/12 mx-auto my-4">
       <h3 class="text-2xl md:text-4xl text-green-800 my-4">{{ $post->title }}</h3>

       <div class="text-gray-600 text-justify text-lg">{!! $post->description !!}</div>
    </div>

    <div class="w-fit mx-auto flex my-4">
        <button class="py-1 px-2 mx-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-pencil mx-2"></i><a href="{{ route('admin.post.edit', $post) }}">Update post</a></button>

        <form action="{{ route('admin.post.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-btn py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-trash mx-2"></i>Delete post</button>
        </form>
    </div>
</section>
@endsection
