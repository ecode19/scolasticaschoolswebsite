@extends('layouts.guest')
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
                <p class="text-justify text-gray-700 leading-relaxed">
                    For over 30 years, Scolastica School has been more than just a place of learning—it has been a launchpad
                    for success, a home for creativity, and a community where young minds flourish. Since our founding in
                    1994, we have remained steadfast in our mission to provide children with the very best start in life,
                    shaping them into confident, capable, and compassionate individuals ready to take on the world. <br>
                    <br>

                    At Scolastica, education goes beyond textbooks. We cultivate curiosity, ignite passions, and instil
                    values that last a lifetime. Our students don’t just learn—they discover, innovate, and grow in an
                    environment that is safe, vibrant, and filled with joy. With a perfect blend of academic excellence and
                    personal development, we equip them with the creativity to dream big, the confidence to chase their
                    goals, and the courtesy to lead with kindness. <br> <br>

                    Guiding them every step of the way is our team of dedicated, world-class educators—mentors who inspire,
                    challenge, and support each child to reach their full potential. But education is a partnership, and our
                    strong connection with parents ensures that every student is surrounded by encouragement, both at home
                    and in school. <br> <br>

                    Our students are more than learners; they are pioneers, leaders, and visionaries in the making. They are
                    polite, independent, and eager to explore new horizons. But most importantly, they are happy. Because at
                    Scolastica, we believe that happiness fuels success—and when children feel valued, they achieve
                    greatness. <br> <br>

                    Scolastica isn’t just a school; it’s a journey of discovery, a hub of excellence, and a family that
                    nurtures brilliance. Trust us with your child’s future, and we promise to deliver not just achievers,
                    but confident, compassionate, and world-ready individuals.
                </p>

                <h1 class="text-justify text-gray-700 leading-relaxed"> </h1>
            </div>
        </div>
    </section>

    {{-- how it started --}}
    <section class="pt-12 relative">
        <div class="relative flex flex-col justify-center items-center bg-fixed bg-cover bg-center bg-no-repeat h-[600px] overflow-hidden"
            style="background-image: url('{{ asset('images/DSC_4061.jpg') }}')">
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-900 to-gray-800 opacity-85 backdrop-blur-sm"></div>

            <div class="relative z-10 w-full px-4 md:px-10 lg:px-20 max-w-screen-xl">
                <h2 class="text-center text-white text-3xl md:text-5xl font-bold mb-12 drop-shadow-lg">
                    Our Journey Through Time
                </h2>

                <div
                    class="flex overflow-x-auto space-x-10 snap-x snap-mandatory pb-6 scrollbar-thin scrollbar-thumb-yellow-500">
                    @php
                        $timeline = [
                            [
                                'year' => ' 1994 –1995 ',
                                'title' => 'The Beginning',
                                'desc' =>
                                    'Scolastica Schools was founded by <span class="text-yellow-400 font-bold">Ms Scolastica and Mr. Edward Shayo</span> with a vision to provide high-quality, values-based education in Tanzania. <br> The first campus was established from the scratch in a living-room home <br> environment with three pupils in kindergarten and the number gradually increased and after two years, the Lower Primary classes.',
                                'highlight' => true,
                            ],
                            [
                                'year' => '1996 - 1997',
                                'title' => 'First Admissions & Early Growth',
                                'desc' =>
                                    'The school officially admitted its first batch of students in Kindergarten and Grades 1-3 <br> Emphasis was placed on child-centered learning and foundational literacy and numeracy skills.',
                            ],
                            [
                                'year' => ' 1997 – 2004',
                                'title' => 'Expansion to Full Primary School',
                                'desc' => 'Due to increasing demand, Scolastica expanded to Upper Primary (Grades 4-7). <br>
                                    Introduction of co-curricular activities such as music, arts, and sports. <br>
                                    First class seven class graduated <br>
                                    H. E. The President of the United Republic of Tanzania President Benjamine Wiliam Mkapa commissioned the primary school building
                                    ',
                            ],
                            [
                                'year' => '2005',
                                'title' => 'Introduction of Secondary Education (O-Level)',
                                'desc' => 'The school launched its Secondary School (Ordinary Level), offering Form 1 to Form 4 (Grades 8-11) <br>
                                   Accredited by the National Examination Council of Tanzania (NECTA) to administer CSEE (Certificate of Secondary Education Examination). <br>
                                    ',
                            ],
                            [
                                'year' => '2009',
                                'title' => 'Establishment of High School (A-Level)',
                                'desc' => 'Advanced Level (A-Level) classes (Form 5 & 6, Grades 12-13) were introduced. <br>
                                    Specialized subject tracks introduced, including Science, Business, and Arts.
                                    ',
                            ],
                            [
                                'year' => '2012',
                                'title' => 'First National Examination Success',
                                'desc' => 'The first Form 4 (O-Level) cohort graduated, achieving excellent results in the NECTA exams. <br>
                                    Scolastica became one of the top-performing private schools in the region.
                                    ',
                            ],

                            [
                                'year' => '2018',
                                'title' => 'Modernization & Digital Learning',
                                'desc' => 'Integration of smart classrooms, e-learning platforms, and ICT-based learning tools. <br>
                                Partnership with Microsoft & Google for Education to enhance technology-driven education.
                                ',
                            ],
                            [
                                'year' => '2020',
                                'title' => 'STEM & International Language Expansion',
                                'desc' => 'Launch of STEM programs, including robotics, coding, and science fairs. <br>
                              Introduction of French and Chinese (Mandarin) language programs for international exposure.
                                ',
                            ],

                            [
                                'year' => '2023',
                                'title' => 'Global Recognition & University Success',
                                'desc' => 'The school received recognition for academic excellence and leadership training. <br>
                              Alumni successfully secured admissions to top universities locally and internationally.
                                ',
                            ],
                            [
                                'year' => '2025 & Beyond',
                                'title' => 'The Future of Scolastica Schools',
                                'desc' => 'Expansion of more advanced co-curricular and International curriculum programs (IGCSE and As/A level)<br>
                                    Strengthening international collaborations and student exchange programs. <br>
                                    Continued focus on academic excellence, technology, and global competitiveness.
                                    ',
                                'highlight' => true,
                            ],
                        ];
                    @endphp

                    @foreach ($timeline as $item)
                        <div
                            class="snap-center min-w-[280px] sm:min-w-[350px] bg-white/10 backdrop-blur-sm rounded-2xl border border-yellow-500 p-6 flex-shrink-0 hover:scale-105 transition-all duration-500 ease-in-out">
                            <h3 class="text-white text-4xl font-bold text-center">{{ $item['year'] }}</h3>
                            <p class="text-yellow-400 text-center font-semibold text-xl mt-3">{{ $item['title'] }}</p>
                            <p class="text-white text-sm mt-3 text-center leading-relaxed">{!! $item['desc'] !!}</p>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-6">
                    <p class="text-white text-sm opacity-80">Swipe left/right to explore the timeline</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="bg-gradient-to-br from-white via-green-50 to-white py-20">
        <div class="container mx-auto px-6">
            <!-- Title -->
            <div class="text-center mb-16">
                <h2 class="text-5xl lg:text-6xl font-extrabold text-green-800 tracking-tight leading-tight animate-fade-up">
                    Our Mission & Vision
                </h2>
                <p class="mt-4 text-xl text-green-700 opacity-80 max-w-2xl mx-auto animate-fade-up delay-100">
                    Empowering excellence in every learner — shaping futures with purpose, integrity, and global vision.
                </p>
            </div>

            <!-- Mission and Vision Content -->
            <div class="flex flex-col md:flex-row justify-between gap-16">
                <!-- Vision Block -->
                <div
                    class="w-full md:w-1/2 bg-white border border-green-200 rounded-2xl shadow-xl p-10 text-center transform transition duration-500 hover:-translate-y-1 hover:shadow-2xl animate-fade-up delay-200">
                    <div class="mb-6">
                        <i class="fas fa-eye text-5xl text-green-600 drop-shadow-md"></i>
                    </div>
                    <h3 class="text-3xl font-semibold text-green-900 mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To be the leading national school in Tanzania, where happy, well-rounded students achieve academic
                        success in a diverse and challenging atmosphere, preparing them to become leaders in both national
                        and global spheres.
                    </p>
                </div>

                <!-- Mission Block -->
                <div
                    class="w-full md:w-1/2 bg-white border border-green-200 rounded-2xl shadow-xl p-10 text-center transform transition duration-500 hover:-translate-y-1 hover:shadow-2xl animate-fade-up delay-300">
                    <div class="mb-6">
                        <i class="fas fa-bullseye text-5xl text-green-600 drop-shadow-md"></i>
                    </div>
                    <h3 class="text-3xl font-semibold text-green-900 mb-4">Our Mission</h3>
                    <ul class="text-left text-lg text-gray-700 leading-relaxed space-y-4">
                        <li><strong class="text-green-700">•</strong> Honoring our Legacy – Building on past triumphs to
                            forge a brighter tomorrow.</li>
                        <li><strong class="text-green-700">•</strong> Innovative Learning – Fueling passion through
                            creative, student-centered education.</li>
                        <li><strong class="text-green-700">•</strong> Supportive Environment – Where every learner and
                            educator thrives in safety and respect.</li>
                        <li><strong class="text-green-700">•</strong> Integrity & Resilience – Cultivating ethical,
                            confident, and adaptable individuals.</li>
                        <li><strong class="text-green-700">•</strong> Global Outlook – Promoting cross-cultural awareness
                            and international experiences.</li>
                        <li><strong class="text-green-700">•</strong> Visionary Leadership – Inspiring responsible
                            change-makers for the world ahead.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- directors --}}
    <section class="py-20 bg-gradient-to-br from-gray-100 via-white to-gray-100">
        <div class="container mx-auto px-6">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-extrabold text-green-800 leading-tight animate-fade-up">
                    Visionary Leaders Who Shaped Our Legacy
                </h1>
                <p class="mt-4 text-lg text-gray-600 animate-fade-up delay-100">
                    Honoring the founders whose passion and leadership laid the foundation for excellence.
                </p>
            </div>

            <!-- Founder Card -->
            <div
                class="max-w-8xl mx-auto bg-white border border-green-100 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 p-12 animate-fade-up delay-200">
                <!-- Names -->
                <h2 class="text-3xl font-bold text-green-900 mb-6 text-center tracking-tight">
                    Ms. Scolastica Edward Shayo & Mr. Edward Shayo
                    <br>
                    <span class="text-xl font-medium text-green-600">Founders & Managing Directors</span>
                </h2>

                <!-- Description -->
                <p class="text-lg text-gray-700 text-center leading-relaxed mb-10 mx-auto">
                    Our visionary founders, Ms. Scolastica Edward Shayo and Mr. Edward Shayo established Scolastica Schools
                    with the mission to provide a world-class education that nurtures academic excellence, integrity, and
                    leadership. With years of experience in Hospitality and Engineering, have a deep commitment to shaping
                    future leaders, they continue to guide the school towards achieving its vision of being the best
                    national school in Tanzania.
                </p>

                <div>
                    <h2 class="text-xl font-bold text-green-900 mb-6 tracking-tight">
                        A Heartfelt Tribute to Ms. Scolastica Edward Shayo
                    </h2>
                    {{-- condolences --}}
                    <p class="text-lg text-gray-700 text-justify leading-relaxed mb-10 mx-auto">
                        With deep gratitude and immense admiration, Scolastica School extends our heartfelt thanks to Ms.
                        Scolastica Edward Shayo for her extraordinary vision and dedication, in establishing Scolastica
                        Schools. <br><br>

                        Scolastica began in the sitting room of Ms. Scolastica Edward Shayo with just three pupils—a humble
                        yet powerful beginning that blossomed into an institution of excellence. What started as a simple
                        dream has flourished into a beacon of knowledge, shaping young minds and empowering future leaders.
                        <br><br>

                        Your unwavering commitment to education has transformed countless lives, providing a foundation of
                        excellence, discipline, and opportunity for generations to come. Your passion, resilience, and
                        relentless pursuit of academic excellence continue to inspire students, teachers, and the entire
                        community. Because of your efforts, Scolastica Schools stand as a testament to the power of
                        education and the impact of a single individual’s dream to create lasting change.
                    </p>

                    <h2 class="italic text-green-800">Thank you, Ms. Scolastica Edward Shayo, for your incredible
                        legacy and for nurturing the bright minds of tomorrow</h2>
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
                                    <img src="{{ asset('images/ministry-of-toursim.png') }}" class="w-32 h-32 rounded-full">
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
