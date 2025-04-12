@extends('layouts.guest')
@section('content')
    {{-- Hero Section --}}
    <section>
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ $event->image ? Storage::url('images/news_events/images/' . $event->image) : asset('images/school4.jpg') }}"
                    alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-transparent opacity-20"></div>
            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 backdrop-blur-sm lg:backdrop-blur-md rounded-2xl"
                data-aos="fade-left" data-aos-duration="2000">
                <h1 class="text-5xl lg:text-6xl text-center text-white font-bold"> {{ $event->title }}</h1>

            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-2xl font-semibold text-green-800">Description</h1>
            <p class="text-gray-600 pt-5 text-center leading-relaxed">
                {!! $event->content !!}
            </p>
        </div>
    </section>
    {{-- call to action --}}
    <section class="border-b border-b-gray-500">
        <div class="w-full bg-green-900 py-12">
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center py-12">
                <h1 class="text-white font-semibold text-4xl">Join Us in Shaping the Future</h1>
                {{-- admission button --}}
                <div class="mt-12">
                    <a href="#"
                        class="py-3 px-7 text-gray-800 bg-white rounded-xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
