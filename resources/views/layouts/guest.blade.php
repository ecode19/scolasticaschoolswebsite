<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('title') | {{ config('app.name') }}</title> --}}

    {!! SEO::generate() !!}
    {!! OpenGraph::generate() !!}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href={{ asset('css/index.css') }}>
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

    {{-- aos Master --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body> {{-- Flash message --}}
    @session('message')
    <div id="flash-message" class="w-full bg-green-700 py-2 px-4 text-lg text-white">
        {{ session('message') }}
    </div>
@endsession
    <div class="w-full">
        <nav class="w-full lg:p-2 bg-green-900 flex items-center justify-between lg:justify-normal">
            <div class="w-20 mx-4">
                <a href="{{ route('index') }}">
                    <img src={{ asset('images/secondary_logo.png') }} alt="school logo" class="w-full rounded-full">
                </a>
            </div>

            <h1 class="uppercase text-lg md:text-2xl oswaldFont block lg:hidden text-white font-bold">Scolastica Schools
            </h1>

            <div id="main-nav"
                class="merryFont w-full lg:w-max lg:mx-auto hidden lg:block fixed top-0 left-0 h-screen lg:h-auto lg:static z-50 bg-green-900 opacity-95 lg:opacity-100 lg:bg-inherit">
                <div class="w-fit ml-auto p-4 block lg:hidden">
                    <i class="fa fa-times text-white text-xl cursor-pointer" id="close-nav"></i>
                </div>
                <ul class="w-full flex items-center flex-col space-y-3 lg:space-y-0 lg:flex-row">
                    <a href="{{ route('index') }}">
                        <li class="py-1 px-2 text-xl lg:text-lg text-white hover:border-b hover:border-green-400">Home
                        </li>
                    </a>
                    <div x-data="{ open: false }" class="relative group">
                        <x-dropdown title="About Us">
                            <li><a href="{{ route('welcome-message') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Welcome
                                    Message</a>
                            </li>
                            <li><a href="{{ route('our-history') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Our History</a>
                            </li>
                            <li><a href="{{ route('mission-vision') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Mission &
                                    Vision</a></li>
                            <li><a href="{{ route('administration') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Administration
                                    & Staff</a></li>
                                    <li><a href="{{ route('student-achievements') }}"
                                        class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Legacy &
                                        Achievements</a></li>
                        </x-dropdown>
                    </div>

                    <div x-data="{ open: false }" class="relative group">
                        <x-dropdown title="Academics">
                            <li><a href="{{ route('curriculum') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Curriculum</a>
                            </li>
                            <li><a href="{{ route('subjects-offered') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Subjects
                                    Offered</a></li>
                            <li><a href="{{ route('study-levels') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Study
                                    Levels</a></li>
                            <li><a href="{{ route('teaching-methods') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Teaching
                                    methods</a></li>
                        </x-dropdown>
                    </div>

                    <div x-data="{ open: false }" class="relative group">
                        <x-dropdown title="Admissions">
                            <li><a href="{{ asset(route('admission-process')) }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">How to
                                    Apply</a></li>
                            <li><a href="{{ route('admission-requirements') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Admission
                                    Requirements</a></li>
                            <li><a href="{{ route('tuitions-fees') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Tuition &
                                    Fees</a></li>
                            <li><a href="{{ route('scholarship-aids') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Scholarship &
                                    Financial aid</a></li>
                        </x-dropdown>
                    </div>

                    <div x-data="{ open: false }" class="relative group">
                        <x-dropdown title="Student Life">
                            <li><a href="{{ route('extracurricular-activities') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Clubs &
                                    Extracurricular Activities</a></li>
                            <li><a href="{{ route('school-events') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">School
                                    Events</a></li>
                            <li><a href="{{ route('blog') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Blog</a></li>
                            <li><a href="{{ route('gallery') }}"
                                    class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Gallery</a></li>
                        </x-dropdown>
                    </div>

                    <a href="{{ route('contact-us') }}">
                        <li class="py-1 px-2 text-xl lg:text-lg text-white hover:border-b hover:border-green-400">
                            Contact us</li>
                    </a>
                </ul>
            </div>

            <div class="w-20 mx-4">
                <a href="{{ route('index') }}">
                    <img src={{ asset('images/primary_logo.png') }} alt="school logo" class="w-full rounded-full">
                </a>
            </div>
        </nav>
        {{-- mini nav --}}
        <div class="w-full lg:hidden py-2 px-4 bg-green-900 flex justify-between items-center">
            <ul class="flex items-center">
                <a href="{{ route('our-history') }}">
                    <li class="py-1 px-2 text-white hover:border-b hover:border-green-400">About-Us</li>
                </a>
                <a href="{{ route('study-levels') }}">
                    <li class="py-1 px-2 text-white hover:border-b hover:border-green-400">Levels</li>
                </a>
                <a href="{{ route('curriculum') }}">
                    <li class="py-1 px-2 text-white hover:border-b hover:border-green-400">Curriculum</li>
                </a>
                <a href="{{ route('admission-process') }}">
                    <li class="py-1 px-2 text-white hover:border-b hover:border-green-400">admission</li>
                </a>
                <a href="{{ route('contact-us') }}">
                    <li class="py-1 px-2 text-white hover:border-b hover:border-green-400">Contact</li>
                </a>
            </ul>
            <div>
                <i class="fa fa-align-justify text-white text-lg cursor-pointer" id="open-nav"></i>
            </div>
        </div>
    </div>
    @yield('content')

    {{-- Footer --}}
    <footer class="w-full bg-green-900 text-white">
        <div class="w-full flex flex-col md:flex-row p-4">
            <div class="w-full md:w-1/4 p-4 order-1 md:order-1 flex items-center justify-between h-fit">
                <img src={{ asset('images/secondary_logo.png') }} alt="school logo" class="w-20 rounded-full">
                <div class="flex flex-row md:flex-col space-x-2 md:space-x-0 items-center mx-2 uppercase text-xl text-green-100">
                    <span class="oswaldFont">Scolastica</span>
                    <span class="oswaldFont">Schools</span>
                </div>
                <img src={{ asset('images/primary_logo.png') }} alt="school logo" class="w-20 rounded-full">
            </div>
            <div class="w-full md:w-1/4 p-4 order-4 md:order-2 flex flex-col md:items-center">
                <h1 class="text-xl md:text-2xl mb-2">Stay in Touch</h1>
                <p class="md:text-lg hover:text-green-400"><a href="{{ route('faqs') }}">FAQS</a></p>
                <p class="md:text-lg hover:text-green-400"><a href="{{ route('gallery') }}">Gallery</a></p>
                <div class="flex flex-row space-x-2 md:flex-col md:space-y-2 md:space-x-0 text-2xl text-green-100">
                    <a href="#"><i class="fab fa-instagram hover:text-red-500"></i></a>
                    <a href="#"><i class="fab fa-facebook hover:text-blue-700"></i></a>
                </div>
            </div>
            <div class="w-full md:w-1/4 p-4 order-3 md:order-3">
                <h1 class="text-xl md:text-2xl mb-2">Popular Links</h1>
                <div class="flex flex-col space-y-2 md:text-lg text-green-100">
                    <a href="https://www.moe.go.tz/">
                        <p class="hover:text-green-200">Ministry of Education, Science, and Technology</p>
                    </a>
                    <a href="https://www.necta.go.tz/">
                        <p class="hover:text-green-200">NECTA</p>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/4 p-4 order-2 md:order-4">
                <h1 class="text-xl md:text-2xl mb-2">Contact Us</h1>
                <div class="flex flex-col space-y-2 md:text-lg text-green-100">
                    <p>Scolastica Secondary School,</p>
                    <p>P.O.BOX 159,</p>
                    <p>Himo - Kilimanjaro, Tanzania</p>
                    <div class="flex items-center">
                        <i class="fa fa-phone"></i>
                        <p class="mx-2">+255 754 783 311</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa fa-phone"></i>
                        <p class="mx-2">+255 679 383 311</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa fa-envelope"></i>
                        <p class="mx-2">scolasticaschool@yahoo.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full text-center p-4">
            <p>Copyright &copy; <span id="currentYear"></span> Scolacticaschools</p>
        </div>
    </footer>

    <script src={{ asset('js/index.js') }}></script>

    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
