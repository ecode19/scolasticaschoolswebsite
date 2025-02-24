<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      <link rel="stylesheet" href={{asset('css/index.css')}}>
    </head>
    <body>
        <div class="w-full">
            <nav class="w-full p-2 bg-green-900 flex items-center">
                <div class="w-20 mx-4">
                    <img src={{asset('images/logo.png')}} alt="school logo" class="w-full rounded-full">
                </div>

                <div class="merryFont w-max mx-auto">
                    <ul class="w-full flex items-center">
                        <a href="#">
                            <li class="py-1 px-2 text-lg text-white hover:border-b hover:border-green-400">Home</li>
                        </a>
                        <div x-data="{ open: false }" class="relative group">
                            <x-dropdown title="About Us">
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Our History</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Mission & Vision</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Administration & Staff</a></li>
                            </x-dropdown>
                        </div>

                        <div x-data="{ open: false }" class="relative group">
                            <x-dropdown title="Academics">
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Curriculum</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Subjects Offered</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Study Levels</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Teaching methods</a></li>
                            </x-dropdown>
                        </div>

                      <div x-data="{ open: false }" class="relative group">
                            <x-dropdown title="Admissions">
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">How to Apply</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Admission Requirements</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Tuition & Fees</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Scholarship & Financial aid</a></li>
                            </x-dropdown>
                        </div>

                       <div x-data="{ open: false }" class="relative group">
                            <x-dropdown title="Student Life">
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Clubs & Extracurricular Activities</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Sports & Competitions</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">Student Achievements</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-green-100 transition text-green-950">School Events</a></li>
                            </x-dropdown>
                        </div>

                        <a href="#">
                            <li class="py-1 px-2 text-lg text-white hover:border-b hover:border-green-400">Contact us</li>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')
    </body>
</html>
