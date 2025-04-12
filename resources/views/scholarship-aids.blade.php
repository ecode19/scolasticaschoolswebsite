@extends('layouts.guest')
@section('content')
    {{-- Hero Section --}}
    <section>
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DSC_4687.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-gray-400 to-transparent opacity-50"></div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 rounded-2xl" data-aos="fade-left" data-aos-duration="2000">
                <h1
                    class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight text-transparent drop-shadow-md">
                    Empowering Futures Through Scholarships & Financial Aid
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Investing in Education, Supporting Your Journey
                </h2>
            </div>
        </div>
    </section>

    {{-- about scholarship and aids --}}
    <section class="py-20">
        <div class="w-11/12 mx-auto">
            <!-- Main Title -->
            <h1 class="text-center text-5xl font-extrabold text-green-800 mb-12">
                Empowering Bright Minds, Creating Future Leaders
            </h1>

            <!-- Description -->
            <p class="text-center text-xl text-gray-700 max-w-4xl mx-auto mb-12">
                At Scolastica Schools, we believe that financial limitations should never be a barrier to quality education.
                Our scholarships and financial aid programs are designed to support academically gifted, talented, and
                deserving students
                who may need financial assistance.
            </p>
        </div>

        {{-- Available Scholarships --}}
        <div class="w-11/12 mx-auto">
            <h1 class="text-center text-4xl font-semibold text-green-800 mb-12">
                Available Scholarships
            </h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-12">
                <div
                    class="w-full md:w-1/2 rounded-2xl shadow-xl bg-white border-2 border-green-400 flex flex-col justify-center items-center py-14 mt-8 hover:scale-105 transition-all">
                    <div
                        class="w-20 h-20 rounded-full bg-green-700 text-white border-4 border-white flex justify-center items-center shadow-xl">
                        <i class="fa-solid fa-handshake-angle text-4xl"></i>
                    </div>
                    <h2 class="mt-6 text-3xl font-semibold text-green-700">Academic Excellence Scholarship</h2>
                    <p class="text-center text-xl italic text-gray-600 p-6">Recognizing outstanding academic
                        promise. Our
                        scholarship celebrates students who demonstrate excellence, with further details communicated
                        privately to selected recipients and their families.</p>
                </div>
                <div
                    class="w-full md:w-1/2 rounded-2xl shadow-xl bg-white border-2 border-blue-400 flex flex-col justify-center items-center py-14 mt-8 hover:scale-105 transition-all">
                    <div
                        class="w-20 h-20 rounded-full bg-blue-700 text-white border-4 border-white flex justify-center items-center shadow-xl">
                        <i class="fa-solid fa-handshake-angle text-4xl"></i>
                    </div>
                    <h2 class="mt-6 text-3xl font-semibold text-blue-700">Financial Aid Program</h2>
                    <p class="text-center text-xl italic text-gray-600 p-6">We're currently in the process of establishing a
                        comprehensive financial aid program to support families in need. This initiative is expected to
                        launch in the coming academic years. Stay tuned for official announcements and application
                        guidelines.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- Why Apply for a Scholarship at Scolastica Schools? --}}
    <section class="py-20 bg-gradient-to-r from-green-50 via-green-100 to-green-200">
        <div class="w-11/12 mx-auto">
            <!-- Section Title -->
            <h1 class="text-center text-4xl font-extrabold text-green-800 mb-12">
                Benefits of Scholarships at Scolastica Schools
            </h1>

            <!-- Section Description -->
            <p class="text-center text-xl text-gray-700 max-w-4xl mx-auto">
                At Scolastica Schools, scholarships are a token of recognition for outstanding students. They offer more
                than just financial relief — they provide motivation, build confidence, and open doors to greater
                opportunities. Scholarship recipients become part of a vibrant, supportive academic community designed to
                nurture excellence and lifelong success.
            </p>
        </div>
    </section>

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
