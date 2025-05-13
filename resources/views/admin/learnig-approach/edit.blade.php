@extends('layouts.admin')
@section('title', 'Learning Approach')
@section('content')

<section class="w-full p-4">
    <form action="{{ route('admin.learning-approach.update', $approach) }}" method="POST" enctype="multipart/form-data"
        class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
        @csrf
        @method('PUT')
        <h2 class="text-2xl text-center text-green-800 my-4">Update {{$approach->name}} Details</h2>

        <div class="w-full flex flex-col md:p-4">
            <label for="name" class="w-full text-lg font-semibold text-gray-600">Approach Name:</label>
            <input type="text" name="name" value="{{ $approach->name }}"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            @error('name')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full flex flex-col md:p-4">
            <label for="description" class="w-full text-lg font-semibold text-gray-600">Approach Description:</label>
            <textarea name="description" rows="5"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
            {{ $approach->description }}
            </textarea>
            @error('description')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full flex flex-col md:p-4">
            <label for="academic_level_id" class="w-full text-lg font-semibold text-gray-600">Academic Level:</label>
            <select name="academic_level_id"
                class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                <option value="">-- select --</option>
                @foreach ($academicLevels as $level)
                    <option value="{{ $level->name }}" {{ $level->name === $approachAcademicLevel->name ? 'selected' : '' }}>{{ $level->name }}</option>
                @endforeach
            </select>
            @error('academic_level_id')
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
                <img src="{{ asset('/storage/images/learning-approaches/' . $approach->primary_img) }}" alt="Level image" class="w-full rounded-md object-cover h-full">
            </div>
        </div>

        <div class="w-fit mx-auto my-4">
            <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                    class="fa fa-pen mx-2"></i>update approach</button>
        </div>
    </form>

</section>

@endsection
