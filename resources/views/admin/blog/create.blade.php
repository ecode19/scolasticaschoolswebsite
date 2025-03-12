@extends('layouts.admin')
@section('title', 'Blog Post')
@section('content')

<section class="w-full p-4">
    <form action="" class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
        <h2 class="text-2xl text-center text-green-800 my-4">Create a new Blog post</h2>

        <div class="w-full flex flex-col md:justify-between md:flex-row md:items-center md:p-4">
            <label for="title" class="w-full md:w-2/5 text-lg font-semibold text-gray-600">Post Title:</label>
            <input type="text" class="w-full md:w-3/5 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
        </div>
        <div class="w-full flex flex-col md:justify-between md:flex-row md:items-center md:p-4">
            <label for="category" class="w-full md:w-2/5 text-lg font-semibold text-gray-600">Post Category:</label>
            <select name="category" class="w-full md:w-3/5 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                <option value="Academic">Academic</option>
                <option value="Sports">Sports</option>
            </select>
        </div>
        <div class="w-full flex flex-col md:justify-between md:flex-row md:items-center md:p-4">
            <label for="description" class="w-full md:w-2/5 text-lg font-semibold text-gray-600">Post Description:</label>
            <textarea name="description" rows="5" class="w-full md:w-3/5 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md"></textarea>
        </div>
        <div class="w-full flex flex-col md:justify-between md:flex-row md:items-center md:p-4">
            <label for="primary_image" class="w-full md:w-2/5 text-lg font-semibold text-gray-600">Primary Image:</label>
            <input type="file" name="primary_image" class="w-full md:w-3/5 p-2 focus:outline-none border border-green-600 rounded-md">
        </div>

        <div class="w-fit mx-auto my-4">
            <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-rocket mx-2"></i>Post</button>
        </div>
    </form>

</section>
@endsection
