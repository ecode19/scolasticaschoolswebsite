@extends('layouts.guest')
@section('title', 'Admission Process')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school1.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Admission process</h1>
            </div>
        </div>
    </section>

    {{-- registration --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1
                class="text-4xl font-semibold bg-gradient-to-r from-green-800 via-green-500 to-green-700 bg-clip-text text-transparent">
                Register Your Interest With Us in a Few Simple Steps:</h1>
            <div class="w-full flex-col md:flex-row justify-center items-center gap-5 mt-10">
                <div class="w-full flex flex-col md:flex-row justify-center items-center gap-5 mt-10">

                    <div class="w-28 h-28 rounded-full border border-gray-700 flex justify-center items-center">
                        <h1 class="font-bold text-6xl text-green-800">1</h1>
                    </div>

                    <div class="flex flex-col justify-start items-start">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quo sed! Corporis voluptatum
                            dolore
                            quasi dolorem suscipit sequi quas aspernatur?</h1>

                        <a href="#"
                            class="py-2 px-7 text-white bg-gray-900 rounded-2xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white mt-5">Apply
                            with Us</a>
                    </div>
                </div>

                <div class="w-full flex flex-col md:flex-row justify-center items-center gap-5 mt-10">

                    <div class="w-28 h-28 rounded-full border border-gray-700 flex justify-center items-center">
                        <h1 class="font-bold text-6xl text-green-800">2</h1>
                    </div>

                    <div class="flex flex-col justify-start items-start">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quo sed! Corporis voluptatum
                            dolore
                            quasi dolorem suscipit sequi quas aspernatur?</h1>

                        <a href="#"
                            class="py-2 px-7 text-white bg-gray-900 rounded-2xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white mt-5">Apply
                            with Us</a>
                    </div>
                </div>


                <div class="w-full flex flex-col md:flex-row justify-center items-center gap-5 mt-10">

                    <div class="w-28 h-28 rounded-full border border-gray-700 flex justify-center items-center">
                        <h1 class="font-bold text-6xl text-green-800">3</h1>
                    </div>

                    <div class="flex flex-col justify-start items-start">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quo sed! Corporis voluptatum
                            dolore
                            quasi dolorem suscipit sequi quas aspernatur?</h1>

                        <a href="#"
                            class="py-2 px-7 text-white bg-gray-900 rounded-2xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white mt-5">Apply
                            with Us</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- achievement section --}}
    <section class="py-12">
        <div class="container mx-auto">
            <h1 class="text-center text-green-700 text-5xl font-semibold pb-12">
                Achievements & Recognition
            </h1>

            <div class="flex flex-col md:flex-row justify-center gap-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Certificate of Best Performance </h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Best Nusrey School In Kilimanjaro</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- call to action --}}
    <section class="py-12">
        <div class="w-full bg-green-900 py-12">
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center py-12">
                <h1 class="text-white font-semibold text-4xl">Contact Us Today</h1>
                <div class="border border-white w-2/5 mt-2"></div>
                <h2 class="text-white font-semibold text-2xl mt-5">Find out how we can develop your child’s skills and
                    expand
                    their horizons for a life of success. </h2>
                {{-- admission button --}}
                <div class="mt-12">
                    <a href="#"
                        class="py-3 px-7 text-gray-800 bg-white rounded-xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white">
                        Enquery Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
