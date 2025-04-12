@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <h1 class="text-3xl text-green-800 mt-6 p-4">Register staff</h1>
    <div class="flex justify-start px-10 py-4">
        <a href="{{ route('admin.staff.index') }}"
            class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md">Back</a>
    </div>

    <div class="max-w-6xl mx-auto overflow-x-auto pb-10">
        <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-4">
                {{-- staff first_name --}}
                <label for="first_name" class="block text-gray-700 font-bold mb-2">first_name:</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>
            <div class="mb-4">
                {{-- staff last_name --}}
                <label for="last_name" class="block text-gray-700 font-bold mb-2">last_name:</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
            {{-- gender --}}
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-bold mb-2">Gander</label>
                <select name="gender" id="gender" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
                </select>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            {{-- staff biography --}}
            <div class="mb-4">
                <label for="bio" class="block text-gray-700 font-bold mb-2">bio:</label>
                <textarea name="bio" id="bio" rows="5" class="w-full p-2 border border-gray-300 rounded-md">{{ old('bio') }}</textarea>
                <x-input-error :messages="$errors->get('bio')" class="mt-2" />
            </div>

            {{-- profile image --}}
            <div class="mb-4">
                <label for="profile_picture" class="block text-gray-700 font-bold mb-2">profile_picture:</label>
                <input type="file" name="profile_picture" id="profile_picture"
                    class="w-full p-2 border border-gray-300 rounded-md">
                <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
            </div>
            <button type="submit" class="py-2 px-4 bg-green-700 hover:bg-gray-700 text-white rounded-md">Add</button>
        </form>
    </div>
@endsection
