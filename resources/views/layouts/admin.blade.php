<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href={{ asset('css/index.css') }}>
    {{-- <link rel="stylesheet" href={{ asset('fontawesome/css/fontawesome.min.css') }}> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="w-full flex">
        <div class="w-2/12 h-full fixed left-0 bg-green-100 overflow-y-auto shadow-md shadow-green-700 text-green-950">
            <div class="w-1/3 mx-auto flex flex-col items-center my-4">
                <img src="{{ asset('images/logo.png') }}" alt="school logo" class="w-full">
                <h3 class="text-lg text-green-800">John Doe</h3>
            </div>

            <div class="w-full p-2 my-4">
                <ul class="w-full">
                    <a href="{{ route('admin.dashboard') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-md">
                        <i class="fa fa-house mx-1 p-2 my-2"></i>
                        <li>Dashboard</li>
                    </a>
                    <a href="{{ route('admin.blog.index') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-md">
                        <i class="fa fa-newspaper mx-1 p-2 my-2"></i>
                        <li>Blog</li>
                    </a>
                    <a href="{{ route('admin.news.event.index') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-md">
                        <i class="fa-solid fa-bullhorn mx-1 p-2 my-2"></i>
                        <li>News & Events</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="w-10/12 flex flex-col ml-auto">
            <div class="w-full p-4 bg-green-100">
                <h1 class="text-3xl text-green-800">Scolastica schools | Admin Dashboard</h1>
            </div>
            <div class="w-full">
                @yield('content')
            </div>
        </div>
    </section>
</body>

</html>
