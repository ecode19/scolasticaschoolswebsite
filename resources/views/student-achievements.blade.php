@extends('layouts.guest')
@section('title', 'Student Achievements')
@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-gray-400">
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DJI_0731.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 rounded-3xl backdrop-blur-sm py-6" data-aos="fade-right"
                data-aos-duration="2000">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight drop-shadow-md">
                    Testimonials from Our Scolastica Community
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 2001
                </h2>
            </div>
        </div>
    </section>

    <div class="container mx-auto py-16 px-6">
        {{-- Recent Accomplishments --}}
        <section class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-green-800">Recent Student and Alumni Accomplishments</h2>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-12">
                <div
                    class="w-full md:w-1/3 bg-white rounded-3xl shadow-xl p-8 flex items-center transform hover:scale-105 transition-transform ease-in-out duration-500">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-40 w-40 rounded-lg border-4 border-green-600 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Alumni Testimonial – Dr. Michael Lema (Class
                            of 2015)</h3>
                        <p class="text-gray-600 mb-4">Scolastica Schools shaped my academic foundation and personal growth
                            in ways I could never have imagined. The rigorous curriculum, inspiring teachers, and leadership
                            programs prepared me for medical school and beyond. Proud to be an alumnus!</p>
                        <span class="text-sm font-semibold text-green-700">Dr. Michael Lema, Class of 2015</span>
                    </div>
                </div>

                <div
                    class="w-full md:w-1/3 bg-white rounded-3xl shadow-xl p-8 flex items-center transform hover:scale-105 transition-transform ease-in-out duration-500">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-40 w-40 rounded-lg border-4 border-green-600 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Parent Testimonial – Mrs. Angela Mushi</h3>
                        <p class="text-gray-600 mb-4">As a parent, I wanted a school that goes beyond academics—one that
                            nurtures character, leadership, and global awareness. Scolastica has exceeded my expectations.
                            My children are not only excelling in their studies but also becoming responsible, innovative,
                            and confident individuals.</p>
                        <span class="text-sm font-semibold text-green-700">Mrs. Angela Mushi, Proud Parent</span>
                    </div>
                </div>

                <div
                    class="w-full md:w-1/3 bg-white rounded-3xl shadow-xl p-8 flex items-center transform hover:scale-105 transition-transform ease-in-out duration-500">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-40 w-40 rounded-lg border-4 border-green-600 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Teacher Testimonial – Mr. Jonathan Karanja
                        </h3>
                        <p class="text-gray-600 mb-4">Teaching at Scolastica Schools is a rewarding experience. The school's
                            commitment to excellence and innovation ensures that both students and educators thrive. Seeing
                            students excel and pursue their dreams is what makes Scolastica special!</p>
                        <span class="text-sm font-semibold text-green-700">Mr. Jonathan Karanja, Senior Mathematics & ICT
                            Teacher</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- Hall of Fame --}}
        <section class="mt-20 bg-gradient-to-r bg-green-50 via-green-100 to-green-200 py-16 rounded-xl">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Hall of Fame</h2>
                <p class="mt-4 text-lg">Celebrating Alumni Who Are Making a Global Impact</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Dr. Michael Lema,</h3>
                    <p class="text-gray-700">Dr. Kilimanjaro referal hospital</p>
                    <span class="text-sm font-bold text-green-700 block mt-2">Tanzania</span>
                </div>

                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold"></h3>
                    <p class="text-gray-700">Working in Account </p>
                    <span class="text-sm font-bold text-green-700 block mt-2">CEO Accounting Group, Australia</span>
                </div>
            </div>
        </section>
    </div>

    {{-- submit --}}
    <section class="mt-20 text-center bg-gradient-to-r from-green-50 via-green-100 to-green-200 py-16 rounded-xl shadow-lg">
        <h2 class="text-4xl font-extrabold text-green-800">Join the Hall of Champions!</h2>
        <p class="mt-4 text-lg text-gray-700">Have an achievement to share? Let the world know!</p>
        <a href=""
            class="mt-6 inline-block px-8 py-4 bg-green-700 text-white rounded-xl text-lg font-semibold shadow-lg hover:bg-green-800 transition duration-300 transform hover:scale-105">
            Submit Your Achievement
        </a>
    </section>


    {{-- FAQs --}}
    <section class="mt-20 max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-green-800 text-center mb-12">Frequently Asked Questions</h2>
        <div class="bg-white p-8 rounded-2xl shadow-2xl">
            <details
                class="mb-6 p-4 bg-gray-50 rounded-xl shadow-sm transition-all ease-in-out duration-300 hover:shadow-xl">
                <summary class="cursor-pointer font-semibold text-xl text-green-700">How are student achievements
                    recognized?</summary>
                <p class="mt-2 text-gray-700">We recognize students through awards, scholarships, and special events.</p>
            </details>
            <details
                class="mb-6 p-4 bg-gray-50 rounded-xl shadow-sm transition-all ease-in-out duration-300 hover:shadow-xl">
                <summary class="cursor-pointer font-semibold text-xl text-green-700">Can students suggest competitions to
                    participate in?</summary>
                <p class="mt-2 text-gray-700">Yes! We encourage students to recommend and participate in competitions of
                    their interest.</p>
            </details>
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
