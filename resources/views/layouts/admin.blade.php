<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.cssLinks')
</head>

<body>
    <section class="w-full flex">
        <div class="w-10/12 md:w-6/12 lg:w-[20%] h-full fixed left-0 bg-green-100 overflow-y-auto shadow-md shadow-green-700 text-green-950 hidden lg:block z-50"
            id="main-nav">
            <div class="m-4 cursor-pointer w-fit ml-auto block lg:hidden" id="close-nav"><i
                    class="fa fa-times text-lg"></i></div>

            <div class="w-1/3 mx-auto flex flex-col items-center my-4">
                <img src="{{ asset('images/primary_logo.png') }}" alt="school logo" class="w-full">
                <h3 class="text-lg text-green-800">ADMIN</h3>
            </div>

            <div class="w-full p-2 my-4">
                <ul class="w-full">
                    @if (Auth::user()->user_type === 'Admin')
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
                        <a href="{{ route('admin.staff.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-users mx-1 p-2 my-2"></i>
                            <li>Staff Management</li>
                        </a>
                        <a href="{{ route('admin.subjects.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-book mx-1 p-2 my-2"></i>
                            <li>Subjects</li>
                        </a>
                        <a href="{{ route('admin.subject-categories.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-list mx-1 p-2 my-2"></i>
                            <li>Subject Category</li>
                        </a>
                        <a href="{{ route('admin.learning-approach.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-pencil mx-1 p-2 my-2"></i>
                            <li>Learning Approach</li>
                        </a>
                        <a href="{{ route('admin.assessment-method.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-book mx-1 p-2 my-2"></i>
                            <li>Assessment Method</li>
                        </a>
                        <a href="{{ route('admin.cocurricular.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-pen mx-1 p-2 my-2"></i>
                            <li>Co-curricular</li>
                        </a>
                        <a href="{{ route('admin.testimonials.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-bullhorn mx-1 p-2 my-2"></i>
                            <li>Testimonials</li>
                        </a>
                        <a href="{{ route('admin.accreditations.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-certificate mx-1 p-2 my-2"></i>
                            <li>Accreditations</li>
                        </a>
                        <a href="{{ route('admin.clubs.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-users mx-1 p-2 my-2"></i>
                            <li>Clubs & Extracurricular</li>
                        </a>
                        <a href="{{ route('admin.achievement.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-trophy mx-1 p-2 my-2"></i>
                            <li>Success Stories</li>
                        </a>
                        <a href="{{ route('admin.faqs.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-question mx-1 p-2 my-2"></i>
                            <li>FAQs</li>
                        </a>
                        <a href="{{ route('admin.news.event.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-calendar mx-1 p-2 my-2"></i>
                            <li>News & Events</li>
                        </a>
                        <a href="{{ route('admin.image.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-image mx-1 p-2 my-2"></i>
                            <li>Home Slider Images</li>
                        </a>
                        <a href="{{ route('admin.gallery.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-image mx-1 p-2 my-2"></i>
                            <li>Gallery</li>
                        </a>
                        <a href="{{ route('admin.post.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-newspaper mx-1 p-2 my-2"></i>
                            <li>Blog</li>
                        </a>
                        <a href="{{ route('change-password') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-lock mx-1 p-2 my-2"></i>
                            <li>Change Password</li>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="block lg:hidden mx-2 my-2 w-4/6">
                            @csrf
                            <button
                                class="bg-green-800 text-white p-2 w-full rounder-md font-semibold text-lg hover:bg-green-900 rounded-md">Logout</button>
                        </form>
                    @endif
                    @if (Auth::user()->user_type === 'Student')
                        <a href="{{ route('admin.post.index') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-newspaper mx-1 p-2 my-2"></i>
                            <li>Blog</li>
                        </a>
                        <a href="{{ route('change-password') }}"
                            class="w-full flex items-center text-lg font-semibold hover:bg-green-300 rounded-sm"><i
                                class="fa fa-lock mx-1 p-2 my-2"></i>
                            <li>Change Password</li>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="block lg:hidden mx-2 my-2 w-4/6">
                            @csrf
                            <button
                                class="bg-green-800 text-white p-2 w-full rounder-md font-semibold text-lg hover:bg-green-900 rounded-md">Logout</button>
                        </form>
                    @endif
                </ul>
            </div>
        </div>
        <div class="w-full lg:w-[80%] flex flex-col ml-auto">
            <div class="w-full p-4 bg-green-100 flex items-center justify-between">
                <h1 class="text-xl md:text-3xl text-green-800">Scolastica schools | Admin Dashboard</h1>

                <form action="{{ route('logout') }}" method="POST" class="hidden lg:block">
                    @csrf
                    <button
                        class="bg-green-800 text-white p-2 w-fit rounder-md font-semibold text-lg hover:bg-green-900 rounded-md">Logout</button>
                </form>

                <div class="mx-2 cursor-pointer block lg:hidden" id="open-nav"><i
                        class="fa fa-align-justify text-lg"></i></div>
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
    @include('partials.ckEditor')
</body>

</html>
