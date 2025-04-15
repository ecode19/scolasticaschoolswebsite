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
        <div class="relative flex justify-center items-center h-80 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/history/history_pic5-1.PNG') }}" alt="Legacy Image"
                    class="w-full h-full object-cover">
            </div>
            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight drop-shadow-md">
                    Our Legacy: A Journey Through Time
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 1994
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
                    polite, independent, and eager to explore new horizons. Most importantly, students are happy, because at
                    Scolastica, we believe that happiness fuels success—and when children feel valued, they achieve
                    greatness. <br> <br>

                    Scolastica is not just a school; it is a journey of discovery, a hub of excellence, and a family that
                    nurtures brilliance. Trust us with your child’s future, and we promise to deliver not just achievers,
                    but confident, compassionate, and world-ready individuals.
                </p>

                <h1 class="text-justify text-gray-700 leading-relaxed"> </h1>
            </div>
        </div>
    </section>

    {{-- how it started --}}
    <section class="pt-12 relative">
        <div class="relative flex flex-col justify-center items-center bg-fixed bg-cover bg-center bg-no-repeat overflow-hidden py-12"
            style="background-image: url('{{ asset('images/history/history_pic1.PNG') }}')">
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
                                'year' => ' 1994 – 2003 ',
                                'title' => 'The Beginning',
                                'desc' =>
                                    'Since its establishment, the school has demonstrated remarkable growth, both in size and in its commitment to delivering quality education. <br>Between <b>1994 and 2003</b>, the institution began its journey with a modest capacity, catering to just <b>50 children</b>.
                                    <br>This humble beginning laid the foundation for future expansion driven by the growing demand for quality education in the community.',
                                'highlight' => true,
                            ],
                            [
                                'year' => '2004',
                                'title' => 'Early Growth & Expansion',
                                'desc' =>
                                    'In <b>2004</b>, the school took a significant step forward by increasing its capacity to accommodate <b>600 children at the primary school level</b>. <br>This expansion not only reflected the school’s rising reputation but also its commitment to nurturing young learners
                                    <br> through a comprehensive and supportive academic environment.',
                            ],
                            [
                                'year' => '2009 - Current',
                                'title' => 'Furthur Expansion of Facilities & Resources',
                                'desc' => 'The institution\'s growth reached a new milestone in <b>2009</b>, when it further expanded its facilities and resources
                                <br> to support <b>2,000 students at the secondary school level</b>.
                                <br>This development allowed the school to offer continuity in education, ensuring that students could transition smoothly from primary to secondary education
                                <br> within the same nurturing and academically focused environment.
                                <br>The Secondary school building was commissioned by H.E. President Jakaya Mrisho Kikwete the President of the United Republic of Tanzania.
                                <br>H.E also planted a mvule tree and Mama Salma Kikwete too on 20.02.2009.
                                    ',
                            ],
                        ];
                    @endphp

                    @foreach ($timeline as $item)
                        <div
                            class="snap-center w-full lg:min-w-[350px] bg-white/10 backdrop-blur-sm rounded-2xl border border-yellow-500 p-6 flex-shrink-0 hover:scale-105 transition-all duration-500 ease-in-out">
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
                    Mrs. Scolastica Edward Shayo & Mr. Edward Shayo
                    <br>
                    <span class="text-xl font-medium text-green-600">Founders & Managing Directors</span>
                </h2>

                <!-- Description -->
                <p class="text-lg text-gray-700 text-center leading-relaxed mb-10 mx-auto">
                    Our visionary founders, Mrs. Scolastica Edward Shayo and Mr. Edward Shayo established Scolastica Schools
                    with the mission to provide a world-class education that nurtures academic excellence, integrity, and
                    leadership. With years of experience in Hospitality and Engineering, have a deep commitment to shaping
                    future leaders, they continue to guide the school towards achieving its vision of being the best
                    national school in Tanzania.
                </p>

                <div>
                    <h2 class="text-xl font-bold text-green-900 mb-6 tracking-tight">
                        A Heartfelt Tribute to Mrs. Scolastica Edward Shayo
                    </h2>
                    {{-- condolences --}}
                    <p class="text-lg text-gray-700 text-justify leading-relaxed mb-10 mx-auto">
                        With deep gratitude and immense admiration, Scolastica School extends our heartfelt thanks to Mrs.
                        Scolastica Edward Shayo for her extraordinary vision and dedication, in establishing Scolastica
                        Schools. <br><br>

                        Scolastica began in the sitting room of Mrs. Scolastica Edward Shayo with just three students—a humble
                        yet powerful beginning that blossomed into an institution of excellence. What started as a simple
                        dream has flourished into a beacon of knowledge, shaping young minds and empowering future leaders.
                        <br><br>

                        Her unwavering commitment to education has transformed countless lives, providing a foundation of
                        excellence, discipline, and opportunity for generations to come. Her passion, resilience, and
                        relentless pursuit of academic excellence continue to inspire students, teachers, and the entire
                        community. Because of her efforts, Scolastica Schools stand as a testament to the power of
                        education and the impact of a single individual’s dream to create lasting change.
                    </p>

                    <h2 class="italic text-green-800">Thank you Mama Scola and Father Scola, for your incredible
                        legacy and for nurturing the bright minds of tomorrow</h2>
                </div>
            </div>
        </div>
    </section>


    {{-- Slider --}}
    <section class="py-20 bg-gradient-to-br from-gray-100 via-white to-gray-100">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-green-800 leading-tight animate-fade-up">
                A Visual Journey Through our History
            </h1>
        </div>
        <div class="slider2 w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic1.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic2.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic3.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic4.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic5.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic6.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic7.PNG') }}" alt="" class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic8.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic9.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic10.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic11.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic12.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic13.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic14.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic15.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic16.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic17.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg overflow-hidden h-80">
                    <img src="{{ asset('images/history/history_pic18.PNG') }}" alt=""
                        class="h-full object-cover">
                </div>
            </div>
        </div>
    </section>

     {{-- Mlinzi --}}
     <section class="py-20 bg-gradient-to-br from-gray-100 via-white to-gray-100">
        <div class="container mx-auto px-6">
            <!-- Founder Card -->
            <div
                class="max-w-8xl mx-auto bg-white border border-green-100 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 p-12 animate-fade-up delay-200">
                <!-- Names -->
                <h2 class="text-3xl font-bold text-green-900 mb-6 text-center tracking-tight">
                    Bwana Daudi Kimaro
                    <br>
                    <span class="text-xl font-medium text-green-600">Mlinzi wa Scolastica kwa Miaka 25 ya Uaminifu na Uhodari</span>
                </h2>

                <div>
                    <p class="text-lg text-gray-700 text-justify leading-relaxed mb-10 mx-auto">
                        Tangu mwaka 2000, lango kuu la Shule ya Scolastica limekuwa na sura ileile isiyosahaulika—Bwana Daudi Kimaro. Kwa zaidi ya miaka 25, yeye ndiye amekuwa mlinzi wa kwanza kuona siku inaanza, na mara nyingi wa mwisho kuhakikisha kila kona iko salama kabla ya usiku kuingia. <br><br>

                        Wanafunzi, walimu, na wazazi wote wanamfahamu—si tu kwa sare yake ya kazi, bali kwa tabasamu la kirafiki, macho makini, na nidhamu ya hali ya juu. Amejenga jina lake kupitia kazi yake ya uaminifu, akihakikisha kwamba mazingira ya shule yanabaki kuwa salama kwa kila mmoja anayevuka lango la Scolastica.
                        <br><br>

                        <i>"Daudi si tu mlinzi; ni sehemu ya roho ya Scolastica,"</i> anasema mwalimu mmoja wa muda mrefu. Kwa hakika, ameona watoto wa darasa la kwanza wakihitimu kidato cha sita, na hata wengine wakirudi kama walimu au wazazi—na wote humkumbuka kwa jina na heshima kuu.
                        <br><br>

                        Katika kipindi hicho chote, hakujawahi kuwa na tukio ambalo halikuwa chini ya uangalizi wake. Amezuia hatari, akatatua migogoro midogo kabla haijakua, na kila siku—kwa mvua au jua—alihakikisha usalama unatawala.
                        <br><br>

                        <i>"Unapomuona Bwana Kimaro mlangoni, unajua uko mahali salama,"</i> mwanafunzi mmoja alisema. Uwepo wake una maana kubwa: ni kioo cha utulivu, nguvu ya utamaduni wa shule, na mfano bora wa uadilifu.
                        <br>

                        Leo hii, tunampongeza na kumshukuru kwa huduma yake ya kipekee kwa familia ya Scolastica. Kwa miaka 25, amekuwa nguzo isiyoyumba, akilinda si tu majengo ya shule, bali pia ndoto, matumaini, na maisha ya maelfu ya vijana.
                    </p>

                    <h2 class="italic text-green-800">Asante sana Bwana Daudi Kimaro—Scolastica ni salama kwa sababu wewe uko.</h2>
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
                        <a href="{{route('contact-us')}}"
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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-12" data-aos="fade-up"
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
                    <a href="{{route('contact-us')}}"
                        class="py-4 px-10 text-green-900 bg-white rounded-xl font-semibold text-xl focus:outline-none hover:bg-green-200 transition-transform transform ease-in-out duration-500 hover:scale-110 ring-2 ring-green-500 shadow-lg">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
