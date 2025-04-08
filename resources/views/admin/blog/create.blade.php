@extends('layouts.admin')
@section('title', 'Blog Post')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf

            <h2 class="text-2xl text-center text-green-800 my-4">Create a new Blog post</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="title" class="w-full text-lg font-semibold text-gray-600">Post Title:</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('title')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="category_id" class="w-full text-lg font-semibold text-gray-600">Post Category:</label>
                <select name="category_id"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                    <option value="">-- select --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="description" class="w-full text-lg font-semibold text-gray-600">Post Description:</label>
                <textarea name="description" rows="5"
                    class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                {{ old('description') }}
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
            </div>
            <div class="w-fit flex items-center md:p-4">
                <label for="featured" class="w-full text-lg font-semibold text-gray-600">Feature post:</label>
                <input type="checkbox" name="featured" class="p-2 mx-2 focus:outline-none border border-green-600">
                @error('featured')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>Post</button>
            </div>
        </form>

    </section>
@endsection
