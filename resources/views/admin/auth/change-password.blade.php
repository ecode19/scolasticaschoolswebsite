@extends('layouts.admin')
@section('title', 'Change Password')
@section('content')

<section class="w-11/12 mx-auto p-4 my-8">
        <h3 class="text-4xl text-green-800">Change Password</h3>

        <form action="{{ route('update-password') }}" class="w-full md:w-6/12" method="POST">
            @csrf
            <div class="w-11/12 md:w-6/12 mx-auto my-4">
                @error('error')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full mx-auto flex flex-col space-y-2 my-2">
                <label for="current_password" class="text-gray-600 text-xl font-semibold">Current Password: </label>
                <input type="password" name="current_password" class="w-full p-2 rounded-md border border-green-800 outline-none" required>
            </div>
            <div class="w-full mx-auto flex flex-col space-y-2 my-2">
                <label for="new_password" class="text-gray-600 text-xl font-semibold">New Password: </label>
                <input type="password" name="new_password" class="w-full p-2 rounded-md border border-green-800 outline-none" required>
                @error('new_password')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full mx-auto flex flex-col space-y-2 my-2">
                <label for="new_password_confirmation" class="text-gray-600 text-xl font-semibold">Confirm New Password: </label>
                <input type="password" name="new_password_confirmation" class="w-full p-2 rounded-md border border-green-800 outline-none" required>
            </div>

            <div class="w-full mx-auto my-4">
                <button
                    class="bg-green-800 text-white p-2 w-full rounder-md font-semibold text-lg hover:bg-green-900">Change Password</button>
            </div>
        </form>
    </section>

@endsection
