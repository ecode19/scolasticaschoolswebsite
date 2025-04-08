@extends('layouts.guest')
@section('title', 'Administration Structure')
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
    <section class="py-12">
        <div class="w-11/12 mx-auto text-center rounded-3xl shadow-2xl mt-28">
            <div class="flex flex-col justify-center items-center">
                {{-- <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full"> --}}
                <h1 class="text-2xl text-green-700 font-bold"><span class="font-normal text-gray-900">Name:</span> Mr. Edward
                    Shayo & Mrs. Edward Shayo</h1>
                <h1><span class="font-semibold">Position:</span>
                    Founders & Managing Directors
                </h1>
            </div>

            <div
                class="flex flex-col md:flex-row items-center justify-center bg-white rounded-xl shadow-lg p-8 px-8 py-12 mt-12">
                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <h1 class="text-xl text-green-700 font-bold"><span class="font-normal text-gray-900">Name:</span> Mr.
                        Peter
                        Mayoki </h1>
                    <h1 class="text-xl text-green-700 font-bold"><span class="font-normal text-gray-900">Position:</span>
                        Headteacher
                    </h1>
                    <p class="p-6 text-justify leading-relaxed">
                        A dynamic and seasoned leader, Mr. Peter Mayoki heads Scolastica Schools, ensuring that academic
                        standards, student welfare, and school operations run smoothly. His dedication to holistic education
                        has been instrumental in making Scolastica Schools a center of excellence.
                    </p>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="">Name:</span> Mr. Peter Mashinde
                    </h1>
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="font-normal text-gray-900">Position:</span>
                        Deputy Headteacher (Secondary School)
                    </h1>
                    <p class="p-6 text-justify leading-relaxed">
                        A passionate and experienced educationist, Mr. Peter Mashinde leads the Secondary School Division,
                        ensuring that students are prepared for national and international success through quality
                        education, discipline, and personal development programs.
                    </p>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="font-normal text-gray-900">Name:</span> Mr. Madam Shirima
                    </h1>
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="font-normal text-gray-900">Position:</span>
                        Deputy Headteacher (Primary School)
                    </h1>
                    <p class="p-6 text-justify leading-relaxed">
                        As the Deputy Headteacher for Primary School, Madam Shirima plays a key role in shaping young minds.
                        She leads the primary school team, ensuring innovative teaching methods, a nurturing environment,
                        and a solid foundation for lifelong learning.
                    </p>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="font-semibold">Name:</span> Mr. Denis Engola & Mr. Ally Mkupaya
                    </h1>
                    <h1 class="text-xl text-green-700 font-bold">
                        <span class="font-normal text-gray-900">Position:</span>
                        Academic Heads
                    </h1>
                    <p class="p-6 text-justify leading-relaxed">
                        Dedicated to maintaining high academic standards, Mr. Denis Engola and Mr. Ally Mkupaya oversee
                        curriculum development, teacher training, and academic excellence across all school levels. Their
                        focus is on ensuring that Scolastica Schools remains at the forefront of education in Tanzania and
                        beyond.
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                                Profession </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-green-100 transiton transform ease-out duration-1000">
                            <td class="px-6 py-4  text-gray-900">1</td>
                            <td class="px-6 py-4  font-medium text-gray-900">John Swai</td>
                            <td class="px-6 py-4  text-gray-500">Advanced Mathematics</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4  text-gray-900">2</td>
                            <td class="px-6 py-4  font-medium text-gray-900">Jane Bakalemwa</td>
                            <td class="px-6 py-4  text-gray-500">Kiswahili</td>
                        </tr>
                    </tbody>
                </table>
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
