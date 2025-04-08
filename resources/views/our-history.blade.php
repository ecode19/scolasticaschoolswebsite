@extends('layouts.guest')
@section('title', 'About US')
@section('content')
    <style>
        .tanzania-border {
            border: 4px solid transparent;
            border-image-source: url('{{ asset('images/Flag_of_Tanzania.svg.png') }}');
            border-image-slice: 1;
        }

        .button-border {
            border: 4px solid transparent;
            border-image-source: url('{{ asset('images/Flag_of_Tanzania.svg.png') }}');
            border-image-slice: 1;
            border-radius: 20px;
            border-image-width: 1;
            border-image-outset: 0;
            border-image-repeat: stretch;
        }
    </style>
    {{-- Hero Section --}}
    <section class="relative bg-gray-400">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DSC_4638.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Enhanced Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-green-900 via-green-700 to-transparent opacity-50"></div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight drop-shadow-md">
                    Our Legacy: A Journey Through Time
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 1950
                </h2>
            </div>
        </div>
    </section>

    {{-- History Overview --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-green-700 font-semibold text-4xl">Our History</h1>
            <div class="py-3">
                <p class="text-justify text-gray-700 leading-relaxed"> Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Ad, illum
                    reiciendis!
                    Reprehenderit, dolorem et molestiae provident omnis molestias velit fugiat delectus earum fugit ad
                    aliquid autem dignissimos similique nisi, commodi accusamus nemo. Fugiat ea, tempora quas odit nisi
                    molestiae deserunt a non commodi saepe sequi natus impedit sed labore, officia praesentium voluptas ad
                    nemo neque voluptatum quasi laborum. Dolore deserunt minus autem perferendis, ex, animi voluptatum
                    veniam, necessitatibus aliquam tempora tempore dolores adipisci rerum nobis ea nam fugiat omnis? Iure
                    ipsam necessitatibus reiciendis ipsum incidunt deleniti rem inventore ratione, laboriosam est totam
                    cumque blanditiis quidem reprehenderit sint iusto placeat eligendi, soluta, ex praesentium perspiciatis
                    at. Nobis aspernatur dicta hic vero ullam voluptatum veniam perspiciatis, consequatur non blanditiis
                    molestiae eius repellat exercitationem aut eum. Explicabo iusto quis adipisci pariatur ad, quibusdam
                    molestiae reiciendis, minus nesciunt debitis placeat voluptatibus cum aspernatur sint facere earum
                    dignissimos dolore deleniti. Aliquid quo ad quod perspiciatis ducimus vero aut explicabo quos porro qui
                    modi, accusamus quae maiores magnam repellendus nihil earum, consectetur perferendis commodi. Distinctio
                    sequi quis placeat alias illum nihil tempora beatae nemo voluptatibus hic, repellat, dignissimos sunt
                    nam, qui minus asperiores consequuntur quo rem! Eum aut voluptas aspernatur ex, sunt blanditiis aliquid
                    molestias? Suscipit.</p>

                <div class="mt-8">
                    <a href="#"
                        class="py-3 px-4 rounded-xl bg-green-700 text-white tex-lg font-semibold hover:bg-green-600 transition transform ease-in-out durataion-700">Read
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="">
        <div class="container mx-auto px-6">
            <!-- Title -->
            <div class="text-center mb-10">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-green-700 leading-tight">
                    Our Mission & Vision
                </h2>
                <p class="mt-4 text-lg text-green-700 opacity-75">
                    We're committed to excellence in every aspect of education.
                </p>
            </div>

            <!-- Mission and Vision Content -->
            <div class="flex flex-col md:flex-row justify-between gap-16">

                <!-- Vision Block -->
                <div class="w-full md:w-1/2 text-center p-6 bg-white rounded-xl shadow-green-100 shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-eye w-16 h-16 text-green-600 mx-auto text-4xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-green-800 mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To be the leading national school in Tanzania, where happy, well-rounded students achieve academic
                        success in a diverse and challenging atmosphere, preparing them to become leaders in both national
                        and global spheres.
                    </p>
                </div>

                <!-- Mission Block -->
                <div class="w-full md:w-1/2 text-center p-6 bg-white rounded-xl shadow-green-100 shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-bullseye w-16 h-16 text-green-600 mx-auto text-4xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-green-800 mb-4">Our Mission</h3>
                    <ul class="text-lg text-gray-700 leading-relaxed list-inside">
                        <li class="mb-3">Honoring our Legacy – Building upon our past achievements to create a stronger
                            future.</li>
                        <li class="mb-3">Innovative Teaching & Learning – Incorporating best practices and creativity to
                            inspire a passion for lifelong discovery.</li>
                        <li class="mb-3">A Supportive Environment – Creating a school where students and teachers feel
                            valued, happy, and safe.</li>
                        <li class="mb-3">Integrity & Resilience – Nurturing self-confidence, discipline, and adaptability
                            in students to face global challenges.</li>
                        <li class="mb-3">Global Perspective & IDEALS – Encouraging students to learn from the world around
                            them through languages, international exposure, and cross-cultural experiences.</li>
                        <li class="mb-3">Inspiring Leadership – Cultivating a generation of responsible, ethical, and
                            visionary leaders.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- how it started --}}
    <section class="pt-12">
        <div class="relative flex flex-col justify-center items-center bg-fixed bg-cover bg-center bg-no-repeat h-80 md:h-[450px] lg:h-[560px] overflow-hidden"
            style="background-image: url('{{ asset('images/DSC_4061.jpg') }}')">
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-800 to-gray-700 opacity-80 backdrop-blur"></div>

            <div class="history-slider relative w-11/12 px-4 md:px-8">
                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2001
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-yellow-500 font-bold text-2xl md:text-3xl">The Beginning</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            Scolastica Schools was founded by <span class="text-yellow-400 font-bold">
                                <br> Mr. & Mrs. Edward Shayo</span> with a vision to provide high-quality, values-based
                            education in Tanzania.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2002
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-white font-bold text-2xl md:text-3xl">First Admissions & Early Growth</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg hidden leading-relaxed text-justify mt-3 text-white">
                            The school officially admitted its first batch of students in Kindergarten and Grades 1-3.
                            <br> Emphasis was placed on child-centered learning and foundational literacy and numeracy
                            skills.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2005
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-yellow-500 font-bold text-2xl md:text-3xl">Expansion to Full Primary
                            School</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            Due to increasing demand, Scolastica expanded to Upper Primary (Grades 4-7).
                            <br> Introduction of co-curricular activities such as music, arts, and sports.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2008
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-yellow-500 font-bold text-2xl md:text-3xl">Introduction of Secondary
                            Education (O-Level)</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            The school launched its Secondary School (Ordinary Level), offering Form 1 to Form 4 (Grades
                            8-11). <br>
                            Accredited by the National Examination Council of Tanzania (NECTA) to administer CSEE.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2012
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-white font-bold text-2xl md:text-3xl">First National Examination Success
                        </p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            The first Form 4 (O-Level) cohort graduated, achieving excellent results in the NECTA exams.
                            <br> Scolastica became one of the top-performing private schools in the region.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2015
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-yellow-500 font-bold text-2xl md:text-3xl">Establishment of High School
                            (A-Level)</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            Advanced Level (A-Level) classes (Form 5 & 6, Grades 12-13) were introduced. <br>
                            Specialized subject tracks introduced, including Science, Business, and Arts.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2020
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-white font-bold text-2xl md:text-3xl">STEM & International Language
                            Expansion</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            Launch of STEM programs, including robotics, coding, and science fairs. <br>
                            Introduction of French and Chinese (Mandarin) language programs for international exposure.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase text-center text-white mb-6 md:mb-10">
                        2025
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-yellow-500 font-bold text-2xl md:text-3xl">Beyond – The Future of
                            Scolastica Schools</p>
                        <p
                            class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg leading-relaxed text-justify mt-3 text-white">
                            Expansion of more advanced co-curricular and leadership programs. <br>
                            Strengthening international collaborations and student exchange programs. <br>
                            Continued focus on academic excellence, technology, and global competitiveness.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- directors --}}
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h1 class="text-center text-green-800 text-4xl font-semibold pb-10">
                Visionary Leaders Who Shaped Our School's Legacy
            </h1>
            <div class="w-full">
                <div
                    class="tanzania-border bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 p-10">
                    <!-- Founder Name -->
                    <h2 class="text-2xl font-bold text-green-800 mb-4 text-center">
                        Mr. Edward Shayo & Mrs. Edward Shayo – Founders & Managing Directors
                    </h2>

                    <!-- Founder Description -->
                    <p class="text-gray-700 text-center text-lg leading-relaxed mb-6">
                        Our visionary founders established Scolastica Schools with a mission to provide a world-class
                        education rooted in integrity, leadership, and academic excellence.
                    </p>

                    <!-- Button -->
                    <!-- Button Wrapper (centered) -->
                    <div class="flex justify-center">
                        <!-- Button -->
                        <button
                            class="button-border w-64 transition-all flex justify-center items-center duration-300 transform hover:scale-105 hover:bg-green-50 p-4 rounded-lg border-2 border-green-700 cursor-pointer">
                            <a href="{{ route('administration') }}" class="text-green-700 font-semibold">Learn More</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Accredited --}}
    <section class="py-10">
        <div class="w-full">
            <div class="w-full flex flex-col md:flex-row justify-center bg-green-800">
                <div class="px-9 py-12">
                    <h1 class="text-4xl text-center text-white font-bold">Accreditations & Affiliations of Scolastica
                        Schools in Tanzania</h1>
                    <p class="text-center text-lg text-white italic mt-6">
                        SCOLASTICA Schools is officially accredited, ensuring that our curriculum meets national and
                        international educational standards. Our commitment to excellence empowers students with quality
                        education, equipping them with the knowledge and skills needed for a brighter future.
                    </p>

                    <!-- Local Accreditations -->
                    <div class="mt-28" data-aos="fade-up" data-aos-duration="2000">
                        <h1 class="text-white font-bold text-2xl">Accreditations & Affiliations of Scolastica Schools in
                            Tanzania</h1>
                        <div class="overflow-x-auto w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                                <!-- MoEST -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/ministry-of-toursim.png') }}"
                                        class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">Tanzania Ministry of
                                        Education, Science, and Technology (MoEST)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Fully registered and accredited under MoEST regulations.<br>Complies with Tanzania
                                        Education and Training Policy (ETP).
                                    </p>
                                </div>
                                <!-- NECTA -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/NECTA.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">National Examination Council
                                        of Tanzania (NECTA)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Approved examination center for PSLE, O-Level (CSEE), and A-Level (ACSEE).
                                    </p>
                                </div>
                                <!-- TIE -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/TIE.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">Tanzania Institute of
                                        Education (TIE)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Our curriculum follows the TIE’s national education framework.
                                    </p>
                                </div>
                                <!-- NACTVET -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/NACTVET-web-logo.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">National Council for Technical
                                        and Vocational Education and Training (NACTVET)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Recognized for offering technical and vocational subjects at secondary levels.
                                    </p>
                                </div>
                                <!-- TPSA -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/images.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">Tanzania Private Schools
                                        Association (TPSA)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Member of TPSA, ensuring compliance and continuous development in private education.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- International Accreditations -->
                    <div class="mt-28" data-aos="fade-up" data-aos-duration="2000">
                        <h1 class="text-white font-bold text-3xl">International Accreditations & Recognitions</h1>
                        <div class="overflow-x-auto w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <!-- Cambridge -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/cambridge.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">Cambridge Assessment
                                        International Education (CAIE)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Offers Cambridge IGCSE and aligns with global education best practices.
                                    </p>
                                </div>
                                <!-- AISA -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/AISA.png') }}" class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">Association of International
                                        Schools in Africa (AISA)</h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Collaborates with top international schools to enhance global education exposure.
                                    </p>
                                </div>
                                <!-- SAT & IELTS/TOEFL -->
                                <div class="flex flex-col justify-center items-center mt-16">
                                    <img src="{{ asset('images/SAT & IELTSTOEFL.jpeg') }}"
                                        class="w-32 h-32 rounded-full">
                                    <h2 class="text-white font-semibold text-lg text-center">SAT & IELTS/TOEFL Test Center
                                    </h2>
                                    <p class="text-sm text-white italic text-center mt-4">
                                        Prepares students for international university entrance exams.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- welcome to scolastica school    --}}
    <section class="py-0 bg-green-800">
        <div class="relative flex flex-col md:flex-row justify-center items-center gap-6">
            <!-- Image Div -->
            <div class="w-full h-64 md:h-[600px] md:w-1/2 bg-cover bg-center bg-no-repeat rounded-r-lg"
                style="background-image: url('{{ asset('images/take1.jpg') }}');">
            </div>

            <!-- Text Div -->
            <div class="relative md:w-1/2 text-center flex items-center justify-center h-64 md:h-[600px] px-6">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0"></div>

                <!-- Text Content -->
                <div class="relative z-10 p-6 md:p-12">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold leading-tight">
                        Welcome to Scolastica Schools
                    </h1>
                    <h2 class="mt-4 text-xl md:text-2xl text-white italic font-semibold">
                        Want to join us? Click the button below.
                    </h2>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-block py-3 px-7 text-lg font-bold border-2 border-white rounded-xl bg-white text-gray-900 transition duration-500 transform hover:scale-105 hover:bg-gray-100">
                            Join Us Now
                        </a>
                    </div>
                </div>
            </div>
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

    {{-- call to action --}}
    <section class="border-b border-b-gray-500">
        <div class="w-full bg-gradient-to-r from-green-800 via-green-700 to-green-900 py-16">
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
