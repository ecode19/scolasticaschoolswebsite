@extends('layouts.admin')
@section('title', 'Subjects Categories')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.subject-categories.store') }}" method="POST"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf

            <h2 class="text-2xl text-center text-green-800 my-4">Create a new Subject Category</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="category" class="w-full text-lg font-semibold text-gray-600">Subject Category:</label>
                <input type="text" name="category" value="{{ old('category') }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('category')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>Add Category</button>
            </div>
        </form>

    </section>
@endsection
