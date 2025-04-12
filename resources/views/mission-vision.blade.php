@extends('layouts.guest')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 md:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DSC_4191.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 via-gray-900 to-transparent opacity-50"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Our Mission And Vision</h1>
                <h1 class="mt-10 text-center font-extrabold text-white text-4xl">Since 2001</h1>
            </div>
        </div>
    </section>

    {{-- Mission and Vision --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-center gap-10">
                {{-- Vision --}}
                <div class="w-full mdw-1/2 shadow-2xl shadow-green-200 rounded-3xl">
                    <div class="p-10 flex flex-col justify-center items-center">
                        <h1 class="text-green-800 font-semibold text-4xl">Vision</h1>
                        <div class="border-2 w-16 border-green-700 mt-2"></div>
                        <p class="text-center pt-5 leading-relaxed">
                            To be the leading national school in Tanzania, where happy, well-rounded students achieve
                            academic success in a diverse and challenging atmosphere, preparing them to become leaders in
                            both national and global spheres.
                        </p>
                    </div>
                </div>
                {{-- Mission --}}
                <div class="w-full mdw-1/2 shadow-2xl shadow-green-200 rounded-3xl">
                    <div class="p-10 flex flex-col justify-center items-center">
                        <h1 class="text-green-800 font-semibold text-4xl">Mission</h1>
                        <div class="border-2 w-16 border-green-700 mt-2"></div>
                        <p class="text-center pt-5 leading-relaxed">
                        <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                            <li class="mb-3">Honoring our Legacy – Building upon our past achievements to create a
                                stronger
                                future.</li>
                            <li class="mb-3">Innovative Teaching & Learning – Incorporating best practices and creativity
                                to
                                inspire a passion for lifelong discovery.</li>
                            <li class="mb-3">A Supportive Environment – Creating a school where students and teachers feel
                                valued, happy, and safe.</li>
                            <li class="mb-3">Integrity & Resilience – Nurturing self-confidence, discipline, and
                                adaptability
                                in students to face global challenges.</li>
                            <li class="mb-3">Global Perspective & IDEALS – Encouraging students to learn from the world
                                around
                                them through languages, international exposure, and cross-cultural experiences.</li>
                            <li class="mb-3">Inspiring Leadership – Cultivating a generation of responsible, ethical, and
                                visionary leaders.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Scolastica Schools --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center text-4xl font-semibold text-green-800 mb-5">Why Choose Scolastica Schools</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5" data-aos="zoom-in"
                data-aos-duration="2000">

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> Academic Excellence & Holistic Development</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i> A rigorous curriculum that balances academics,
                            leadership, and
                            personal growth
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i> Exceptional performance in NECTA, IGCSE, and
                            international
                            exams.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i> Highly qualified teachers with modern teaching
                            methodologies.
                        </li>
                    </ul>
                </div>

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> Global Perspective & International Opportunities</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i> Offering Kiswahili, French, and Chinese (Mandarin) for
                            multilingual proficiency.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Global partnerships for student exchange programs and
                            international university pathways.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right "></i> Preparation for SAT, IELTS, and TOEFL to support global
                            higher
                            education.
                        </li>
                    </ul>
                </div>

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> Modern Facilities & Digital Learning</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Smart classrooms, science labs, and fully-equipped ICT
                            centers.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Robotics, coding, and STEM innovation programs.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Integration of Microsoft & Google for Education tools.
                        </li>
                    </ul>
                </div>

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> Co-Curricular & Talent Development</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Sports, music, drama, art, and cultural activities for
                            well-rounded growth.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Specialized clubs like debate, entrepreneurship, and
                            environmental awareness.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Competitive sports training with access to national
                            tournaments.
                        </li>
                    </ul>
                </div>

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> A Safe & Supportive Learning Environment</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Strong mentorship and guidance programs for personal
                            development.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Zero-tolerance for bullying – a culture of respect,
                            discipline, and inclusivity.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>A nurturing atmosphere where students feel supported,
                            challenged, and motivated.
                        </li>
                    </ul>
                </div>

                <div class="w-full flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl"> Leadership & Career Readiness</h1>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Emphasis on critical thinking, problem-solving, and
                            real-world
                            application.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Internship and mentorship programs with business leaders
                            and
                            professionals.
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-right px-4"></i>Strong alumni network with graduates excelling in top
                            universities and careers.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- future Message --}}
    <section class="py-12">
        <div class="w-9/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800">Message to the Future Generation</h1>
            <div class="flex flex-col justify-center items-center mt-6">
                <p class="text-justify lg:text-center text-lg leading-relaxed italic">Lorem, ipsum dolor sit amet
                    consectetur adipisicing
                    elit.
                    Ipsam, incidunt tempore consequatur ipsum debitis minima mollitia vel aperiam ducimus quia similique
                    corporis molestiae adipisci aut, ipsa autem sapiente illum voluptatum.</p>
            </div>
        </div>
    </section>

    {{-- Banner --}}
    <section class="py-12">
        <div class="w-full relative bg-cover bg-center bg-fixed bg-no-repeat lg:h-[500px] overflow-hidden"
            style="background-image: url('{{ asset('images/DSC_4395.jpg') }}')">
            {{-- overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 to-gray-700 opacity-10"></div>
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
            <div class="w-full flex md:flex-row justify-center items-center gap-12">
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
