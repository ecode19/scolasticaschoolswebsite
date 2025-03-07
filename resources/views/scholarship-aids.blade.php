@extends('layouts.guest')
@section('title', 'Sholarships & Financial Aid')
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
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Scholarships & Financial Aid
                </h1>
                <h1 class="mt-10 text-center font-extrabold text-white text-4xl">Since 1950</h1>
            </div>
        </div>
    </section>
    {{-- about scholarship and aids --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">Empowering Bright Minds, Creating Future
                Leaders
            </h1>

            <p class="text-center text-gray-600"> At Scolastica Schools, we believe that financial limitations should never
                be a barrier to quality education. Our
                scholarships and financial aid programs are designed to support academically gifted, talented, and deserving
                students who may need financial assistance.</p>
        </div>
        {{-- available scholarship --}}
        <div>
            <div class="w-11/12 mx-auto">
                <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">Available Scholarships</h1>
                <div class="w-full flex flex-col md:flex-row justify-center items-center gap-12">

                    <div
                        class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                        <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                            <i class="fa-solid fa-handshake-angle text-3xl"></i>
                        </div>
                        <h1 class="mt-3 font-normal text-4xl">Academic Excellence Scholarship</h1>
                        <p class="text-center italic">Tailored options for Top 5% of students</p>
                        <div>
                            <h1><span class="font-semibold">Coverage:</span> <span class="text-green-600">Up to 100%
                                    tuition</span>
                            </h1>

                            <h2><span class="font-semibold">Deadline:</span> <span class="text-green-600"></span>July 30th
                            </h2>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                        <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                            <i class="fa-solid fa-handshake-angle text-3xl"></i>
                        </div>
                        <h1 class="mt-3 font-normal text-4xl">Financial Aid Program</h1>
                        <p class="text-center italic">Tailored options for Families in financial need </p>

                        <div>
                            <h1><span class="font-semibold">Coverage:</span> <span class="text-green-600">Sliding scale
                                    tuition assistance</span>
                            </h1>

                            <h2><span class="font-semibold">Deadline:</span> <span class="text-green-600"></span>Open
                                year-round
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- how to apply --}}
    <section>
        <div class="w-11/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">How to Apply</h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-12">
                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                    <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <h1 class="mt-3 font-normal text-4xl">Step 1</h1>
                    <p class="text-center italic">Submit your application</p>
                </div>

                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                    <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <h1 class="mt-3 font-normal text-4xl">Step 2</h1>
                    <p class="text-center italic">Review your application</p>
                </div>

                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                    <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <h1 class="mt-3 font-normal text-4xl">Step 3</h1>
                    <p class="text-center italic">Receive your offer</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Apply for a Scholarship at Scolastica Schools? --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class=""></h1>
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
