@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="flex justify-start px-10 pt-5">
        <a href="{{ route('admin.news.event.index') }}"
            class="py-1 px-5 font-semibold bg-green-700 hover:bg-gray-700 text-white rounded-md">Back</a>
    </div>
    <h1 class="text-3xl text-green-800 mt-6 p-4 text-center">{{ $newsEvent->title }}</h1>
    <div class="max-w-6xl mx-auto overflow-x-auto pb-10">
        <form action="{{ route('admin.news.event.update', $newsEvent->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- news event title --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" value="{{ $newsEvent->title }}" id="title"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            {{-- type --}}
            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-bold mb-2">type:</label>
                <select name="type" id="type" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="{{ $newsEvent->type }}">{{ $newsEvent->type }}</option>
                    <option value="news">news</option>
                    <option value="event">event</option>
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            {{-- status --}}
            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="{{ $newsEvent->status }}">{{ $newsEvent->status }}</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="past">Past</option>
                    <option value="featured">Featured</option>
                </select>
                <x-input-error :messages="$errors->get('status')" class="mt-2" />
            </div>
            {{-- date --}}
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
                <input type="date" name="date" value="{{ $newsEvent->date }}" id="date"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
            {{-- location --}}
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-bold mb-2">Location:</label>
                <input type="text" name="location" value="{{ $newsEvent->location }}" id="location"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            {{-- news event content --}}
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="content" id="content" rows="5" class="w-full p-2 border border-gray-300 rounded-md">{{ $newsEvent->content }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            {{-- news event image --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
                <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <button type="submit" class="py-2 px-4 bg-green-700 hover:bg-gray-700 text-white rounded-md">Save
                Changes</button>
        </form>
    </div>
@endsection
