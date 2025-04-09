@extends('layouts.guest')
@section('title', 'About US')
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
                    Nurturing Excellence, Inspiring Leaders
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 2001
                </h2>
            </div>
        </div>
    </section>

    {{-- how to apply --}}
    <section class="py-16 bg-gradient-to-b from-green-50 to-white">
        <div class="w-11/12 max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-green-800 mb-2 tracking-tight">
                    Admission Requirements
                </h2>
                <p class="text-gray-600 text-lg">
                    Simple admission requirements to begin your child’s journey to excellence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                <!-- Kindergarten -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition transform hover:scale-105 hover:shadow-2xl duration-500 p-8">
                    <div class="mb-4">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-2xl font-bold shadow-md">
                            KG
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Kindergarten (Pre-Primary Education) – Ages 4-6</h3>
                    <ul class="space-y-2 text-gray-700 list-disc list-inside">
                        <li>Child must be 7-13 years old</li>
                        <li>Birth certificate copy</li>
                        <li>Two passport-size photos</li>
                        <li>Medical report</li>
                    </ul>
                </div>

                <!-- Primary -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition transform hover:scale-105 hover:shadow-2xl duration-500 p-8">
                    <div class="mb-4">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-2xl font-bold shadow-md">
                            PR
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Primary Education (Standard 1 - 7)</h3>
                    <ul class="space-y-2 text-gray-700 list-disc list-inside">
                        <li>Age requirement: 4-6 years</li>
                        <li>Birth certificate & school report</li>
                        <li>Two passport-size photos</li>
                        <li>Entrance exam required</li>
                    </ul>
                </div>

                <!-- Secondary -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition transform hover:scale-105 hover:shadow-2xl duration-500 p-8">
                    <div class="mb-4">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-2xl font-bold shadow-md">
                            SC
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Secondary Education (Ordinary Level - O-Level, Form
                        1-4) </h3>
                    <ul class="space-y-2 text-gray-700 list-disc list-inside">
                        <li>Age requirement: 14-17 years</li>
                        <li>Completed Primary Education</li>
                        <li>Pass entrance exam & interview</li>
                        <li>Previous academic records</li>
                        <li>Transfer certificate</li>
                    </ul>
                </div>

                <!-- Advanced -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition transform hover:scale-105 hover:shadow-2xl duration-500 p-8">
                    <div class="mb-4">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-2xl font-bold shadow-md">
                            AD
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Advanced Secondary Education (High School - A-Level,
                        Form 5-6) </h3>
                    <ul class="space-y-2 text-gray-700 list-disc list-inside">
                        <li>Age requirement: 18-19 years</li>
                        <li>Completed secondary Education</li>
                        <li>Pass entrance exam & interview</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- contacts --}}
    <section class="py-20 bg-green-50">
        <div class="w-11/12 max-w-8xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-green-800">Need More Information?</h2>
            <p class="text-lg text-gray-600 mt-4">
                Our admissions office is ready to assist you with any inquiries.
            </p>
            <p class="text-lg font-semibold text-green-900 mt-2">
                📞 +255 123 456 789 | 📧 <a href="mailto:admissions@scolastica.ac.tz"
                    class="underline hover:text-green-600">admissions@scolastica.ac.tz</a>
            </p>

            <div class="mt-12 shadow-lg rounded-xl overflow-hidden border border-gray-200">
                <iframe class="w-full h-[400px]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255899.72059707838!2d37.26933653889566!3d-3.3807010957086527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839cf30d855fcf5%3A0x82b41bbf1c948949!2sScolastica%20Secondary%20School!5e1!3m2!1sen!2stz!4v1740579847787!5m2!1sen!2stz"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    {{-- call to action --}}
    <section class="relative py-20 mb-11 bg-gradient-to-r from-green-600 via-emerald-600 to-green-700 overflow-hidden">
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
            <a href="#"
                class="inline-block bg-white text-green-900 font-bold text-lg px-8 py-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105 focus:ring-4 ring-white">
                Enquire Now
            </a>
        </div>
    </section>
@endsection
