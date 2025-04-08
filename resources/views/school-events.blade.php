@extends('layouts.guest')
@section('title', 'School-Events')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 md:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DSC_4191.jpg') }}" alt="School Event Image" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 via-gray-900 to-transparent opacity-50"></div>
            {{-- Text --}}
            <div class="relative text-center text-white px-4">
                <h1 class="text-4xl lg:text-6xl font-bold">Explore Our School Events</h1>
                <h2 class="mt-4 text-2xl font-semibold">A Hub for Learning, Growth, and Celebration</h2>
                <p class="mt-4 text-lg">Join us as we create meaningful experiences through a variety of school events
                    designed to inspire and connect our community. From academic workshops to cultural festivals, there’s
                    something for everyone!</p>
            </div>
        </div>
    </section>


    <!-- Events Section -->
    <div class="container mx-auto py-16 px-6">
        <!-- Featured Events -->
        @if ($featuredEvents->isNotEmpty())
            <section>
                <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Featured Events</h2>
                <div class="w-full flex flex-col md:flex-row mt-8 justify-center">
                    @foreach ($featuredEvents as $event)
                        <div class="w-full md:w-1/3 my-2 bg-white rounded-2xl shadow-lg p-6">
                            <img src="{{ $event->image ? Storage::url('images/news_events/images/' . $event->image) : asset('images/classroom2.jpeg') }}"
                                class="h-60 w-full object-cover rounded-xl">
                            <h3 class="text-xl font-semibold mt-4">{{ $event->title }}</h3>
                            <p class="text-gray-700 mt-2">{!! Str::limit($event->content, 100, '...') !!}</p>
                            <span class="block mt-2 font-bold text-blue-700">
                                {{ $event->location }}, {{ $event->date }}
                            </span>
                            <a href="{{ route('about-event', $event->title) }}"
                                class="mt-4 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg">View
                                Details</a>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- Upcoming Events -->
        @if ($upcomingEvents->isNotEmpty())
            <section class="mt-20">
                <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Upcoming Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($upcomingEvents as $event)
                        <div class="bg-gray-100 rounded-2xl shadow-md p-6 flex">
                            <img src="{{ $event->image ? Storage::url('images/news_events/images/' . $event->image) : asset('images/classroom2.jpeg') }}"
                                class="h-32 w-32 rounded-xl mr-4">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
                                <p class="text-gray-700 py-2">{!! Str::limit($event->content, 100, '...') !!}</p>
                                <div class="bg-blue-200 px-3 rounded-lg">
                                    <span class="text-sm font-bold text-blue-700 block mt-2 py-2">
                                        <i class="fa-regular fa-calendar"></i> {{ $event->location }}, {{ $event->date }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- Past Events -->
        @if ($pastEvents->isNotEmpty())
            <section class="mt-20">
                <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Past Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($pastEvents as $event)
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <img
                                src="{{ $event->image ? Storage::url('images/news_events/images/' . $event->image) : asset('images/classroom2.jpeg') }}">
                            <h3 class="text-xl font-semibold mt-4">{{ $event->title }}</h3>
                            <p class="text-gray-700 mt-2">{!! Str::limit($event->content, 100, '...') !!}</p>
                            <span class="block mt-2 font-bold text-blue-700">
                                {{ $event->location }}, {{ $event->date }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </div>

    {{-- social Medias --}}
    <section class="py-20 ">
        <div class="w-11/12 mx-auto">
            <!-- Section Title -->
            <h1 class="text-center text-4xl font-extrabold text-green-800 mb-12">
                Stay Connected with Us
            </h1>

            <!-- Social Media Icons -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-10">
                <a href="#" target="__blank" class="transition-transform transform hover:scale-110">
                    <i class="fab fa-facebook text-5xl text-blue-600 hover:text-blue-800 transition-all"></i>
                </a>

                <a href="#" class="transition-transform transform hover:scale-110">
                    <i class="fab fa-instagram text-5xl text-pink-500 hover:text-pink-600 transition-all"></i>
                </a>

                <a href="#" class="transition-transform transform hover:scale-110">
                    <i class="fa-brands fa-square-x-twitter text-5xl text-blue-400 hover:text-blue-500 transition-all"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- call to action --}}
    <section class="border-b border-b-gray-500">
        <div class="w-full bg-gradient-to-r from-green-800 via-green-900 to-green-900 py-16">
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center text-center">
                <!-- Section Heading -->
                <h1 class="text-white font-extrabold text-4xl sm:text-5xl lg:text-6xl mb-6">
                    Join Us in Shaping the Future
                </h1>

                <!-- Admission Button -->
                <div class="mt-10">
                    <a href="#"
                        class="py-4 px-10 text-green-900 bg-white rounded-xl font-semibold text-xl focus:outline-none hover:bg-green-200 transition-transform transform ease-in-out duration-500 hover:scale-110 ring-2 ring-green-500 shadow-lg">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
