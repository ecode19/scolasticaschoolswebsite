@extends('layouts.admin')
@section('title', 'Academic Levels')
@section('content')

<section class="w-full p-4">
    <form action="{{ route('admin.academic-levels.update', $academic_level) }}" method="POST" enctype="multipart/form-data"
        class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
        @csrf
        @method('PUT')
        <h2 class="text-2xl text-center text-green-800 my-4">Update {{$academic_level->name}} Level Details</h2>

        <div class="w-full flex flex-col md:p-4">
            <label for="name" class="w-full text-lg font-semibold text-gray-600">Level Name:</label>
            <input type="text" name="name" value="{{ $academic_level->name }}"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            @error('name')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="description" class="w-full text-lg font-semibold text-gray-600">Level Description:</label>
            <textarea name="description" rows="5"
                class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            {{ $academic_level->description }}
            </textarea>
            @error('description')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="curriculum" class="w-full text-lg font-semibold text-gray-600">Level Curriculum:</label>
            <textarea name="curriculum" rows="5"
                class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            {{ $academic_level->curriculum }}
            </textarea>
            @error('curriculum')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="primary_img" class="w-full text-lg font-semibold text-gray-600">Primary Image:</label>
            <input type="file" name="primary_img"
                class="w-full md:w-10/12 p-2 focus:outline-none border border-green-600 rounded-md">
            @error('primary_img')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror

            <div class="w-full md:w-2/4 mx-auto h-64 my-4">
                <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->primary_img) }}" alt="Level image" class="w-full rounded-md object-cover h-full">
            </div>
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="image_2" class="w-full text-lg font-semibold text-gray-600">Image Banner 1:</label>
            <input type="file" name="image_2"
                class="w-full md:w-10/12 p-2 focus:outline-none border border-green-600 rounded-md">
            @error('image_2')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror

            <div class="w-full md:w-2/4 mx-auto h-64 my-4">
                <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->image_2) }}" alt="Level image" class="w-full rounded-md object-cover h-full">
            </div>
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="image_3" class="w-full text-lg font-semibold text-gray-600">Image Banner 2:</label>
            <input type="file" name="image_3"
                class="w-full md:w-10/12 p-2 focus:outline-none border border-green-600 rounded-md">
            @error('image_3')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror

            <div class="w-full md:w-2/4 mx-auto h-64 my-4">
                <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->image_3) }}" alt="Level image" class="w-full rounded-md object-cover h-full">
            </div>
        </div>

        <div class="w-fit mx-auto my-4">
            <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                    class="fa fa-pen mx-2"></i>update Academic Level</button>
        </div>
    </form>

</section>

@endsection
