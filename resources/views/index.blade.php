@extends('layouts.guest')
@section('title', 'Home')
@section('content')

    <div class="slider4 w-full h-[300px] md:h-[400px] lg:h-[500px]">
        @foreach ($images as $image)
            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] overflow-hidden relative">
                <img src={{ asset('/storage/images/home-banners/' . $image->image) }} alt=""
                    class="w-full object-cover h-[300px] md:h-[400px] lg:h-[500px]" oncontextmenu="return false;">
                <div class="w-full">
                    <div class="absolute bottom-5 left-5 lg:bottom-10 lg:left-10 transparent-bg">
                        <div class="text-white text-center">
                            <h1 class="oswald text-xl md:text-4xl lg:text-6xl uppercase text-green-200">Scolastica Schools
                            </h1>
                            <p class="text-md md:text-2xl italic my-2 text-orange-200">Equal Education to All</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Welcome --}}
    <section class="w-full md:w-11/12 mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
            <img src={{ asset('images/students/students-2.jpg') }} alt="students photo"
                class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
            <div class="w-full">
                <h1 class="oswald text-4xl text-green-900">Welcome to Scolastica Schools</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="font-semibold text-justify text-lg my-4 text-gray-800">Dear Esteemed Parents, Students, and the
                Scolastica Community,</p>
            <p class="text-justify text-lg text-gray-800">Education is the foundation upon which great legacies are built,
                minds are ignited, and futures are shaped. At Scolastica Schools, we are not merely educators—we are
                architects of excellence, sculptors of character, and pioneers of boundless potential. It is with profound
                honor and unwavering dedication that Scolastica, welcomes you to our institution where aspirations take
                flight, and every learner is nurtured to lead, innovate, and excel.<a
                    href="{{ route('welcome-message') }}"><button
                        class="bg-orange-600 hover:bg-orange-700 text-orange-100 p-2 rounded-md mx-2 text-sm">Read More <i
                            class="fa fa-arrow-right"></i></button></a></p>
        </div>
    </section>

    {{-- Stats --}}
    <section class="w-full  mx-auto p-6 flex flex-wrap items-center bg-green-100">
        <div class="w-full md:w-1/2 lg:w-1/4 my-2">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center  rounded-md  ">
                <span class="text-3xl text-green-900">2000+</span>
                <span class="mt-2 text-xl  text-orange-700">Students</span>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 my-2">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center  rounded-md  ">
                <span class="text-3xl text-green-900">30+</span>
                <span class="mt-2 text-xl  text-orange-700">Teachers</span>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 my-2">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center  rounded-md  ">
                <span class="text-3xl text-green-900">95%</span>
                <span class="mt-2 text-xl  text-orange-700">Pass Rate</span>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 my-2">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center  rounded-md  ">
                <span class="text-3xl text-green-900">1994</span>
                <span class="mt-2 text-xl  text-orange-700">Founded On</span>
            </div>
        </div>
    </section>

    {{-- Academic Levels --}}
    <section class="w-full md:w-11/12 mx-auto my-2 md:my-10">
        <div class="w-max mx-4">
            <h1 class="oswald text-4xl text-green-900">Academic Levels</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex flex-col md:flex-row mt-8 flex-wrap">
            @foreach ($academicLevels as $level)
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden hover:rotate-3">
                            <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="level photo"
                                class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">{{ $level->short_name }}</h5>
                        </div>
                        <div class="my-2 w-max mx-auto mt-4">
                            <a href="{{ route('study-level', $level) }}">
                                <button
                                    class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-semibold rounded-full">Read
                                    More</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- why choose --}}
    <section class="w-full md:w-11/12 mx-auto my-2 md:my-8">
        <div class="w-max mx-4">
            <h1 class="oswald text-4xl text-green-900">Why Choose Scolastica Schools</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <div class="w-full my-2 mx-4">
            <p class="text-lg text-justify my-4 text-gray-600">At Scolastica Secondary School, we are committed to
                providing a world-class education that nurtures academic excellence, character development, and holistic
                growth. Our dynamic learning environment, experienced educators, and state-of-the-art facilities ensure
                that every student reaches their full potential. We take pride in fostering a culture of discipline,
                innovation, and leadership that prepares students for a successful future</p>
        </div>

        <div class="slider2 w-full flex flex-col md:flex-row my-4 md:my-8">
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-4 h-full">
                    <i class="fa fa-book-open text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Academic Excellence & Holistic
                            Development</h5>
                        <p class="text-gray-800">Consistently ranked among the top national schools in Tanzania with
                            outstanding PSLE, NECTA, and A-Level results</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-earth text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Global Perspective & International
                            Opportunities</h5>
                        <Offering class="text-gray-800">Offering Kiswahili, French, and Chinese (Mandarin) for multilingual
                            proficiency.</p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-building text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Modern Facilities & Digital Learning
                        </h5>
                        <p class="text-gray-800">Modern classrooms, science & IT labs, well-equipped libraries, and sports
                            complexes.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-heart text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">A Safe & Supportive Learning
                            Environment
                        </h5>
                        <p class="text-gray-800">Strong mentorship and guidance programs , Zero-tolerance for bullying, An
                            atmosphere where students feel supported and motivated.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-computer text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Technology & Innovation</h5>
                        <p class="text-gray-800">ICT integration, coding programs, artificial intelligence courses, and
                            robotics training for future-ready students.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-football text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Co-Curricular & Talent Development
                        </h5>
                        <p class="text-gray-800">From football, basketball, and swimming to debate, art, and
                            music, we nurture every student’s passion and talent.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-users text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Student-Centered Learning Approach
                        </h5>
                        <p class="text-gray-800">Our commitment to critical thinking, creativity, and innovation equips
                            students with the skills they need for the future.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 my-2">
                <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                    <i class="fa fa-graduation-cap text-green-800 text-5xl my-2"></i>
                    <div class="text-center">
                        <h5 class="merryFont text-center text-green-800 my-4 text-xl">Leadership & Career Readiness</h5>
                        <p class="text-gray-800">Emphasis on critical thinking, problem-solving, and real-world
                            application. Internship and mentorship programs with business leaders and professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- News & Highlights --}}
    @if ($news->isNotEmpty())
        <section class="w-full md:w-11/12 mx-auto my-2 md:my-8 md:py-4">
            <div class="w-max mx-4">
                <h1 class="oswald text-4xl text-green-900">News, Events & School highlights</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>

            <div class="w-full flex flex-col md:flex-row mt-8">
                @foreach ($news as $item)
                    <div class="w-full md:w-1/3 my-2">
                        <div class="w-full px-2 mx-auto">
                            <div class="w-full h-58 overflow-hidden relative group rounded-xl">
                                <img src={{ $item->image ? Storage::url('images/news_events/images/' . $item->image) : asset('images/school1.webp') }}
                                    alt="level photo"
                                    class="object-cover h-64 rounded-xl w-full transition duration-500 transform group-hover:scale-150">

                                <div class="absolute inset-0 bg-gray-900 opacity-60 transition duration-500">
                                </div>
                                <!-- Text content -->
                                <div class="overlay absolute inset-0 pb-10 flex items-end">
                                    <div class="p-4 flex flex-col">
                                        <span
                                            class="text-green-400 group-hover:text-white transition duration-1000 font-bold text-lg">{{$item->type}}</span>
                                        <a href="#"
                                            class="merryFont text-2xl text-white group-hover:text-white transition font-bold duration-500">
                                            {{ $item->title }}
                                        </a>

                                        <span class="text-green-200 group-hover:text-white transition duration-500">
                                            {{ $item->created_at->diffForHumans() }}
                                        </span>

                                        <a href="{{ route('about-event', $item->title) }}"
                                            class="w-32 mt-2 border-2 font-bold text-white border-green-300 focus:ring focus-green-600 bg-green-500 px-4 py-2 rounded-md">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-2 w-fit mx-auto">
                <a href="{{route('school-events')}}"><button class="bg-green-700 hover:bg-green-800 text-white font-semibold p-2 text-lg rounded-md">More News</button></a>
            </div>
        </section>
    @endif

    {{-- testimonials --}}
    <section class="w-full p-8 bg-green-100">
        <div class="w-fit mx-4">
            <h1 class="oswald text-4xl text-green-900 text-wrap">What they say about Scolastica Schools</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="slider2 w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
            @foreach ($testimonials as $Testimonial)
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                        <div class="flex">
                            <div class="flex flex-col mx-3">
                                <span class="text-lg text-green-900">{{ $Testimonial->name }} -
                                    {{ $Testimonial->title }}</span>
                                <span class="text-orange-800 text-sm italic">{{ $Testimonial->position }}</span>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-800 text-center my-4">"{{ $Testimonial->description }}"</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Accreditations --}}
    <section class="w-11/12 mx-auto my-4">
        <div class="w-max mx-4">
            <h1 class="oswald text-4xl text-green-900">Accreditations</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="slider w-full py-4 my-4 flex">
            @foreach ($accreditations as $acc)
                <div class="w-1/4 my-2 rounded-full px-4 hover:cursor-pointer"><a href="{{ $acc->link }}"
                        target="_blank"><img src={{ asset('/storage/images/accreditations/' . $acc->logo) }}
                            alt="photo" class="w-32 h-32 mx-auto rounded-full"></a></div>
            @endforeach
        </div>
    </section>
@endsection
