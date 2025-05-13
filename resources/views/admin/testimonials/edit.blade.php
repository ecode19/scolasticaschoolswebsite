@extends('layouts.admin')
@section('title', 'Testimonials')
@section('content')

<section class="w-full p-4">
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data"
        class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
        @csrf
        @method('PUT')
        <h2 class="text-2xl text-center text-green-800 my-4">Update {{$testimonial->name}} Details</h2>

        <div class="w-full flex flex-col md:p-4">
            <label for="name" class="w-full text-lg font-semibold text-gray-600">Testimonee Name:</label>
            <input type="text" name="name" value="{{ $testimonial->name }}"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            @error('name')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="title" class="w-full text-lg font-semibold text-gray-600">Testimonee Title:</label>
            <input type="text" name="title" value="{{ $testimonial->title }}"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            @error('title')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="position" class="w-full text-lg font-semibold text-gray-600">Testimonee Position:</label>
            <input type="text" name="position" value="{{ $testimonial->position }}"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            @error('position')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="description" class="w-full text-lg font-semibold text-gray-600">Testimonial:</label>
            <textarea name="description" rows="5"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            {{ $testimonial->description }}
            </textarea>
            @error('description')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-fit mx-auto my-4">
            <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                    class="fa fa-pen mx-2"></i>update testimonial</button>
        </div>
    </form>

</section>

@endsection
