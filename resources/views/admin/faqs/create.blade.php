@extends('layouts.admin')
@section('title', 'FAQS')
@section('content')

    <section class="w-full p-4">
        <form action="{{ route('admin.faqs.store') }}" method="POST"
            class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
            @csrf

            <h2 class="text-2xl text-center text-green-800 my-4">Create a new FAQ</h2>

            <div class="w-full flex flex-col md:p-4">
                <label for="question" class="w-full text-lg font-semibold text-gray-600">Question:</label>
                <input type="text" name="question" value="{{ old('question') }}"
                    class="w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                @error('question')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col md:p-4">
                <label for="answer" class="w-full text-lg font-semibold text-gray-600">Answer:</label>
                <textarea name="answer" rows="5"
                    class="editor w-full md:w-10/12 p-2 focus:outline-none focus:border focus:border-green-600 rounded-md">
                {{ old('answer') }}
                </textarea>
                @error('answer')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-fit mx-auto my-4">
                <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-rocket mx-2"></i>Create</button>
            </div>
        </form>

    </section>
@endsection
