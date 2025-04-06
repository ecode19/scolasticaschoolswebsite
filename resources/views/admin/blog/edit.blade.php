@extends('layouts.admin')
@section('title', 'Blog Post')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.post.update', $post) }}" method="POST" enctype="multipart/form-data"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf
            @method('PUT')
            <h2 class="text-2xl text-center text-green-800 my-4">Update Blog post</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="title" class="w-full text-lg font-semibold text-gray-600">Post Title:</label>
                <input type="text" name="title" value="{{ $post->title }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('title')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="category_id" class="w-full text-lg font-semibold text-gray-600">Post Category:</label>
                <select name="category_id"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                    @foreach ($categories as $category)
                        <option value="{{ $category->category }}" {{ $post->category->category === $category->category ? 'selected' : '' }}>{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="description" class="w-full text-lg font-semibold text-gray-600">Post Description:</label>
                <textarea name="description" rows="5"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                {{ $post->description }}
                </textarea>
                @error('description')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="image" class="w-full text-lg font-semibold text-gray-600">Primary Image:</label>
                <input type="file" name="image"
                    class="w-full md:w-10/12 p-2 focus:outline-none border border-green-600 rounded-md">
                @error('image')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror

                <div class="w-full md:w-2/4 mx-auto h-64 my-4">
                    <img src="{{ asset('/storage/images/blog/' . $post->image) }}" alt="post image" class="w-full rounded-md object-cover h-full">
                </div>
            </div>
            <div class="w-fit flex items-center md:p-4">
                <label for="featured" class="w-full text-lg font-semibold text-gray-600">Feature post:</label>
                <input type="checkbox" name="featured" {{ $post->featured == 1 ? 'checked' : ''}} class="p-2 mx-2 focus:outline-none border border-green-600">
                @error('featured')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>update post</button>
            </div>
        </form>

    </section>
@endsection
