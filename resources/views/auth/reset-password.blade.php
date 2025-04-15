@extends('layouts.guest')
@section('title', 'Reset Password')
@section('content')

    <section class="w-11/12 md:w-9/12 mx-auto p-4 my-8 border-2 border-green-800 rounded-md">

        <h3 class="text-4xl text-green-800 my-2 text-center">Reset Password</h3>
        <p class="text-lg text-gray-600 text-center">Please Enter your username to reset password</p>

        <form action="{{ route('reset-password') }}" class="w-full" method="POST">
            @csrf
            <div class="w-11/12 md:w-6/12 mx-auto my-4">
                @error('error')
                    <p class="text-lg text-red-600 my-2 font-semibold">{{ $message }}</p>
                @enderror
                @session('message')
                    <div id="flash-message" class="w-full my-4 text-lg text-green-700 font-semibold">
                        {{ session('message') }}
                    </div>
                @endsession
            </div>
            <div class="w-11/12 md:w-6/12 mx-auto flex flex-col space-y-2 my-2">
                <label for="username" class="text-gray-600 text-xl font-semibold">Username: </label>
                <input type="text" name="username" class="w-full p-2 rounded-md border border-green-800 outline-none"
                    required>
                    @error('username')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-11/12 md:w-6/12 mx-auto my-4">
                <button class="bg-green-800 text-white p-2 w-full rounder-md font-semibold text-lg hover:bg-green-900">Reset
                    Password</button>
            </div>

            <p class="my-2 text-lg text-center text-green-800 hover:underline"><a href="{{ route('login') }}">Login</a></p>
        </form>
    </section>

@endsection
