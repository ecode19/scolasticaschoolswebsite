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

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.5.2/jquery-migrate.min.js"
        integrity="sha512-BzvgYEoHXuphX+g7B/laemJGYFdrq4fTKEo+B3PurSxstMZtwu28FHkPKXu6dSBCzbUWqz/rMv755nUwhjQypw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"
        integrity="sha512-An4a3FEMyR5BbO9CRQQqgsBscxjM7uNNmccUSESNVtWn53EWx5B9oO7RVnPvPG6EcYcYPp0Gv3i/QQ4KUzB5WA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- slick --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css"
        integrity="sha512-WIWddQW7bHfs1gwICYIoXuifLb8gCPkE7Z/gq7QHk3pKuxjNs0E68Rn5c7Ig4cWguZW5CIvRroTj2GrSxsvUZQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
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
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                            class="fa fa-house mx-1 p-2 my-2"></i>
                        <li>Dashboard</li>
                    </a>
                    <a href="{{ route('admin.academic-levels.index') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                            class="fa fa-book-open mx-1 p-2 my-2"></i>
                        <li>Academic Levels</li>
                    </a>
                    <a href="{{ route('admin.subjects.index') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                            class="fa fa-book mx-1 p-2 my-2"></i>
                        <li>Subjects</li>
                    </a>
                    <a href="{{ route('admin.post.index') }}"
                        class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                            class="fa fa-newspaper mx-1 p-2 my-2"></i>
                        <li>Blog</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="w-10/12 flex flex-col ml-auto">
            <div class="w-full p-4 bg-green-100">
                <h1 class="text-3xl text-green-800">Scolastica schools | Admin Dashboard</h1>
            </div>
            <div class="w-full">
                {{-- Flash message --}}
                @session('message')
                    <div id="flash-message" class="w-full bg-green-700 py-2 px-4 my-4 mx-2 text-lg text-white">
                        {{ session('message') }}
                    </div>
                @endsession

                @yield('content')
            </div>
        </div>
    </section>

    <script src={{ asset('js/admin.js') }}></script>
</body>

</html>
