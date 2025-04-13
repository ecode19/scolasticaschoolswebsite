@extends('layouts.guest')
@section('content')
    {{-- Hero Section --}}
    <section>
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/take3.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-transparent opacity-20"></div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 backdrop-blur-sm lg:backdrop-blur-md rounded-2xl"
                data-aos="fade-left" data-aos-duration="2000">

                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-extrabold bg-clip-text text-transparent drop-shadow-md"
                    style="background-image: url('{{ asset('images/Flag_of_Tanzania.svg.png') }}'); background-size: cover; background-position: center;">
                    Nurturing Excellence, Inspiring Leaders
                </h1>

                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 2001
                </h2>
            </div>
        </div>
    </section>

    {{-- registration --}}
    <section class="py-16 bg-gray-50">
        <div class="w-11/12 max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-green-800 mb-12">
                Start Your Journey in 3 Simple Steps
            </h2>

            <div class="grid md:grid-cols-3 gap-10">
                <!-- Step 1 -->
                <div
                    class="bg-gradient-to-tr from-green-100 to-white shadow-md rounded-2xl p-8 flex flex-col items-center text-center hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-800 font-bold text-3xl mb-5">
                        1
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Visit the School</h3>
                    <p class="text-gray-600 mb-6">
                        Come to our school in person to collect the application form and get a tour of our learning
                        environment.
                    </p>
                    <a href="#contact"
                        class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                        Get Directions
                    </a>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-gradient-to-tr from-green-100 to-white shadow-md rounded-2xl p-8 flex flex-col items-center text-center hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-800 font-bold text-3xl mb-5">
                        2
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Fill & Return the Application Form</h3>
                    <p class="text-gray-600 mb-6">
                        Complete the form with required details and return it with copies of birth certificate, recent
                        report form, and passport photos.
                    </p>
                    <a href="#"
                        class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                        View Requirements
                    </a>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-gradient-to-tr from-green-100 to-white shadow-md rounded-2xl p-8 flex flex-col items-center text-center hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-800 font-bold text-3xl mb-5">
                        3
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Attend Interview & Get Admission</h3>
                    <p class="text-gray-600 mb-6">
                        The student may be invited for an interview or assessment. Once successful, you’ll receive an
                        official admission letter.
                    </p>
                    <a href="#"
                        class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                        Admission Info
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- Call to Action --}}
    <section class="relative py-20 mb-11 bg-gradient-to-r from-green-400 via-emerald-300 to-green-700 overflow-hidden">
        <div class="absolute inset-0 bg-green-950 opacity-60 mix-blend-multiply"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4 drop-shadow-lg">
                Contact Us Today
            </h1>
            <div class="w-24 h-1 mx-auto bg-white rounded mb-6"></div>
            <p class="text-xl md:text-2xl font-medium max-w-3xl mx-auto mb-12">
                Discover how we can help unlock your child's full potential and shape a brighter, more successful future.
            </p>

            {{-- Enquiry Button --}}
            <a href="{{route('contact-us')}}"
                class="inline-block bg-white text-green-900 font-bold text-lg px-8 py-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105 focus:ring-4 ring-white">
                Enquire Now
            </a>
        </div>
    </section>

    {{-- Special Recognitions & Partnerships --}}
    <section class="py-28">
        <div class="container mx-auto px-4">
            <h1 class="text-center text-5xl font-semibold pb-12 text-green-700">
                Special Recognitions & Partnerships
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12" data-aos="fade-up"
                data-aos-duration="2000">

                <div class="flex flex-col items-center text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        STEM Tanzania Accreditation
                    </h2>
                </div>

                <div class="flex flex-col items-center text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Tanzania Sports Council (TSC) Affiliation
                    </h2>
                </div>

                <div class="flex flex-col items-center text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Microsoft & Google for Education Partnerships
                    </h2>
                </div>

                <div class="flex flex-col items-center text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Language Proficiency Certifications – DELF & HSK
                    </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
