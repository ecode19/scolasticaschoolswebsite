@extends('layouts.guest')
@section('content')
    {{-- Hero Section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden bg-fixed bg-cover bg-center"
            style="background-image: url('{{ asset('images/DSC_4191.jpg') }}')">

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 via-gray-900 to-transparent opacity-40"></div>

            {{-- Text --}}
            <div class="relative z-10 px-4 text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-bold leading-tight">
                    Our Management Structure
                </h1>
            </div>
        </div>
    </section>

    {{-- administration structure --}}
    <section class="py-24 bg-gradient-to-b from-white via-green-50 to-white">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <h1 class="text-5xl font-extrabold text-green-800 leading-tight mb-4">
                    Meet Our Leadership Team
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Passionate individuals guiding Scolastica Schools with vision, excellence, and integrity.
                </p>
            </div>

            <!-- Founders -->
            <div class="bg-white rounded-3xl shadow-2xl p-10 mb-16 animate-fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 animate-fade-up delay-100">
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                            class="w-40 h-40 rounded-full mb-6 shadow-lg">
                        <h2 class="text-3xl font-bold text-green-800">Mrs. Edward Shayo</h2>
                        <p class="text-lg text-gray-700 mt-2">Founder & Managing Director</p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                            class="w-40 h-40 rounded-full mb-6 shadow-lg">
                        <h2 class="text-3xl font-bold text-green-800">Mr. Edward Shayo</h2>
                        <p class="text-lg text-gray-700 mt-2">Founder & Managing Director</p>
                    </div>
                </div>
            </div>

            <!-- Leadership Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 animate-fade-up delay-100">
                <!-- Card -->
                <div class="bg-white rounded-2xl items-center shadow-lg hover:shadow-2xl p-8 transition-all duration-300">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                        class="w-40 h-40 rounded-full mb-6 shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-1">Mr. Peter Mayoki</h3>
                    <p class="text-green-700 mb-4">Headteacher</p>
                    <p class="text-gray-700 text-justify text-sm leading-relaxed">
                        A dynamic and seasoned leader, Mr. Peter Mayoki heads Scolastica Schools, ensuring academic
                        standards, student welfare, and school operations run smoothly. His dedication to holistic education
                        has been instrumental in building a center of excellence.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 transition-all duration-300">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                        class="w-40 h-40 rounded-full mb-6 shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-1">Mr. Peter Mashinde</h3>
                    <p class="text-green-700 mb-4">Deputy Headteacher (Secondary School)</p>
                    <p class="text-gray-700 text-justify text-sm leading-relaxed">
                        A passionate educationist, Mr. Mashinde ensures students are prepared for national and international
                        success through quality education, discipline, and personal development in the Secondary School
                        Division.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 transition-all duration-300">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                        class="w-40 h-40 rounded-full mb-6 shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-1">Madam Shirima</h3>
                    <p class="text-green-700 mb-4">Deputy Headteacher (Primary School)</p>
                    <p class="text-gray-700 text-justify text-sm leading-relaxed">
                        Madam Shirima leads the primary school with passion, fostering a nurturing environment that
                        encourages curiosity and foundational skills for lifelong learning.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 transition-all duration-300">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                        class="w-40 h-40 rounded-full mb-6 shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-1">Mr. Denis</h3>
                    <p class="text-green-700 mb-4">Academic Head</p>
                    <p class="text-gray-700 text-justify text-sm leading-relaxed">
                        Tasked with curriculum development and academic standards, these visionary leaders ensure that
                        Scolastica Schools upholds educational excellence at all levels across Tanzania and beyond.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 transition-all duration-300">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                        class="w-40 h-40 rounded-full mb-6 shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-1"> Mr. Ally Mkupaya</h3>
                    <p class="text-green-700 mb-4">Academic Head</p>
                    <p class="text-gray-700 text-justify text-sm leading-relaxed">
                        Tasked with curriculum development and academic standards, these visionary leaders ensure that
                        Scolastica Schools upholds educational excellence at all levels across Tanzania and beyond.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @if ($staff)
        {{-- other staff members --}}
        <section class="py-12">
            <div class="container mx-auto">
                <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">Our Other Valuable Staff</h1>
                <div class="overflow-hidden border rounded-lg shadow-md">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-green-800 text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">S/N
                                </th>
                                <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">
                                    Gender </th>

                                <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">
                                    Bio </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $counter = 1;
                            @endphp
                            @if ($staff->isNotEmpty())
                                @foreach ($staff as $member)
                                    <tr class="hover:bg-green-100 transiton transform ease-out duration-1000">
                                        <td class="px-6 py-4  text-gray-900">{{ $counter++ }}</td>
                                        <td class="px-6 py-4  font-medium text-gray-900">{{ $member->first_name }}
                                            {{ $member->last_name }}</td>
                                        <td class="px-6 py-4  text-gray-500">{{ $member->gender }}</td>
                                        <td class="px-6 py-4  text-gray-500">{{ $member->bio }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    @endif

    {{-- Why Choose Scolastica Schools --}}
    <section class="py-20 bg-gradient-to-b from-green-50 via-white to-green-50">
        <div class="w-11/12 max-w-7xl mx-auto">
            <h1 class="text-center text-4xl md:text-5xl font-extrabold text-green-900 mb-12 tracking-tight leading-snug">
                Why Choose <span class="text-green-700">Scolastica Schools</span>
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="1500">

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Academic Excellence & Holistic Development</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> A rigorous curriculum blending academics,
                            leadership, and personal growth.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Exceptional performance in NECTA, IGCSE,
                            and global assessments.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Highly qualified teachers applying
                            innovative teaching strategies.</li>
                    </ul>
                </div>

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Global Perspective & International Opportunities</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Kiswahili, French & Mandarin for
                            multilingual fluency.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Global partnerships and student exchange
                            programs.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Preparation for SAT, IELTS, TOEFL &
                            global
                            university pathways.</li>
                    </ul>
                </div>

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Modern Facilities & Digital Learning</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Smart classrooms, science labs & ICT
                            centers.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Robotics, coding & STEM innovation
                            programs.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Microsoft & Google for Education tools
                            integration.</li>
                    </ul>
                </div>

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Co-Curricular & Talent Development</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Sports, music, art & cultural activities
                            for whole-child development.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Clubs in debate, entrepreneurship, and
                            sustainability.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Competitive sports training with access
                            to
                            national tournaments.</li>
                    </ul>
                </div>

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Safe & Supportive Environment</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Mentorship programs for personal and
                            academic growth.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Culture of respect, inclusivity, and
                            zero-tolerance for bullying.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> A nurturing and motivating school
                            atmosphere.</li>
                    </ul>
                </div>

                <!-- Feature Box -->
                <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 text-center">
                    <h2 class="text-green-800 font-bold text-xl mb-4">Leadership & Career Readiness</h2>
                    <ul class="text-gray-700 text-base space-y-4 text-left">
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Focus on critical thinking, innovation &
                            real-world problem-solving.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Internships & mentorships with industry
                            professionals.</li>
                        <li><i class="fa fa-arrow-right text-green-700 mr-3"></i> Thriving alumni in top global
                            universities
                            and careers.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    {{-- choose us --}}
    <section class="py-12 lg:py-28 bg-green-800">
        <div class="w-11/12 mx-auto">
            <div class="flex flex-col justify-center items-center gap-6">
                <h1 class="text-white font-bold text-4xl text-center mb-4">Choose Scolastica Schools – Where Dreams Take
                    Flight!</h1>
                <p class="italic text-white text-center font-semibold">
                    Join a school that celebrates excellence, fosters innovation, and shapes leaders for a brighter future.
                </p>
            </div>
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
