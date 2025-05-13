@extends('layouts.admin')
@section('title', 'Co-Curricular Activities')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.cocurricular.store') }}" method="POST" enctype="multipart/form-data"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf

            <h2 class="text-2xl text-center text-green-800 my-4">Create a new Co-Curricular Activity</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="name" class="w-full text-lg font-semibold text-gray-600">Activity Name:</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('name')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="description" class="w-full text-lg font-semibold text-gray-600">Activity Description:</label>
                <textarea name="description" rows="5"
                    class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                {{ old('description') }}
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
                        <option value="{{ $level->name }}">{{ $level->name }}</option>
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
            </div>

            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>Add Activity</button>
            </div>
        </form>

    </section>
@endsection
