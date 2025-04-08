@extends('layouts.admin')
@section('title', 'Achievements')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.achievement.store') }}" method="POST"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf

            <h2 class="text-2xl text-center text-green-800 my-4">Publish a new Achievement</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="title" class="w-full text-lg font-semibold text-gray-600">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('title')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="description" class="w-full text-lg font-semibold text-gray-600">Description:</label>
                <textarea name="description" rows="5"
                    class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>Publish</button>
            </div>
        </form>

    </section>
@endsection
