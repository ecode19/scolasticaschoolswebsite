@extends('layouts.guest')
@section('title', 'Mission-Vision')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school4.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-green-800 via-green-600 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Our Mission And Vision</h1>
                <h1 class="mt-10 text-center font-extrabold text-white text-4xl">Since 1950</h1>
            </div>
        </div>
    </section>
    {{-- Mission and Vision --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-center gap-10">
                {{-- Vision --}}
                <div class="w-1/2 shadow-2xl shadow-green-200 rounded-3xl">
                    <div class="p-10 flex flex-col justify-center items-center">
                        <h1 class="text-green-800 font-semibold text-4xl">Vision</h1>
                        <div class="border-2 w-16 border-green-700 mt-2"></div>
                        <p class="text-center pt-5 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Officiis, nobis aperiam assumenda sint similique nulla quibusdam nam iure optio veritatis?
                        </p>
                    </div>
                </div>
                {{-- Mission --}}
                <div class="w-1/2 shadow-2xl shadow-green-200 rounded-3xl">
                    <div class="p-10 flex flex-col justify-center items-center">
                        <h1 class="text-green-800 font-semibold text-4xl">Mission</h1>
                        <div class="border-2 w-16 border-green-700 mt-2"></div>
                        <p class="text-center pt-5 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Officiis, nobis aperiam assumenda sint similique nulla quibusdam nam iure optio veritatis?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Core Values --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center text-4xl font-semibold text-green-800 mb-5">Our Core Values</h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-5" data-aos="zoom-in"
                data-aos-duration="2000">
                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>
            </div>
        </div>
    </section>
    {{-- future Message --}}
    <section class="py-12">
        <div class="w-9/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800">Message to the Future Generation</h1>
            <div class="flex flex-col justify-center items-center mt-6">
                <p class="text-center text-lg leading-relaxed italic">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Ipsam, incidunt tempore consequatur ipsum debitis minima mollitia vel aperiam ducimus quia similique
                    corporis molestiae adipisci aut, ipsa autem sapiente illum voluptatum.</p>
            </div>
        </div>
    </section>
    {{-- Banner --}}
    <section class="py-12">
        <div class="w-full relative bg-cover bg-center bg-fixed bg-no-repeat lg:h-[500px] overflow-hidden"
            style="background-image: url('{{ asset('images/classroom.jpeg') }}')">
            {{-- overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 to-gray-700 opacity-40"></div>
            {{-- text --}}
            <div class="absolute inset-0 backdrop-blur-sm shadow-lg rounded-xl flex flex-col justify-center items-center">
                <h1 class="text-white text-4xl lg:text-6xl font-semibold" data-aos="zoom-in" data-aos-duration="2000">
                    A Leading and An Oustanding School In Tanzania
                </h1>

                <h2 class="text-semibold text-white italic text-4xl mt-8" data-aos="fade-right" data-aos-duration="3000">
                    Himo - Kilimanjaro, Tanzania
                </h2>
            </div>
        </div>
    </section>
    {{-- social Medias --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">Stay Conneted with Us </h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-12">
                <a href="#" target="__blank">
                    <i class="fab fa-facebook text-5xl text-blue-600"></i>
                </a>

                <a href="#">
                    <i class="fab fa-instagram text-5xl text-pink-500"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-square-x-twitter text-5xl text-gray-900"></i>
                </a>
            </div>
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
