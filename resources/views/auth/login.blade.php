@extends('layouts.guest')
@section('title', 'Login')
@section('content')

    <section class="w-11/12 md:w-9/12 mx-auto p-4 my-8 border-2 border-green-800 rounded-md">
        <div class="w-full mx-auto flex flex-col items-center my-4">
            <img src="{{ asset('images/primary_logo.png') }}" alt="school logo" class="w-28 h-28">
            <h3 class="text-4xl text-green-800">Admin Login</h3>
        </div>

        <form action="{{ route('login.store') }}" class="w-full" method="POST">
            @csrf
            <div class="w-11/12 md:w-6/12 mx-auto my-4">
                @error('error')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                @error('success')
                    <p class="text-lg text-green-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-11/12 md:w-6/12 mx-auto flex flex-col space-y-2 my-2">
                <label for="username" class="text-gray-600 text-xl font-semibold">Username: </label>
                <input type="text" name="username" class="w-full p-2 rounded-md border border-green-800 outline-none" required>
            </div>
            <div class="w-11/12 md:w-6/12 mx-auto flex flex-col space-y-2 my-2">
                <label for="password" class="text-gray-600 text-xl font-semibold">Password: </label>
                <input type="password" name="password" class="w-full p-2 rounded-md border border-green-800 outline-none" required>
            </div>

            <div class="w-11/12 md:w-6/12 mx-auto my-4">
                <button
                    class="bg-green-800 text-white p-2 w-full rounder-md font-semibold text-lg hover:bg-green-900">Login</button>
            </div>

            <p class="my-2 text-lg text-center text-green-800 hover:underline"><a href="{{route('forgot-password')}}">Forgot password?</a></p>
        </form>
    </section>

@endsection
