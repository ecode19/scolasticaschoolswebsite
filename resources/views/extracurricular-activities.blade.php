@extends('layouts.guest')
@section('title', 'Extracurricular Activities')
@section('content')

    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/students/students-3.jpg') }} alt="" class="w-full object-cover">
        <div class="w-full">
            <div class="absolute bottom-5 left-5 lg:bottom-10 lg:left-10 transparent-bg">
                <div class="text-white text-center">
                    <h1 class="oswald text-xl md:text-4xl lg:text-6xl uppercase text-green-200">Clubs and Extracurricular Activities
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-full my-4">
            <p class="defaultText text-justify md:text-lg">At Scolastica Secondary School, we believe that learning goes beyond
                the classroom. Our vibrant extracurricular programs provide students with opportunities to explore their
                talents, develop leadership skills, and build lifelong friendships. Whether you're passionate about sports,
                arts, science, or leadership, there's a club for you!</p>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
            <img src={{ asset('images/students/students-15.png') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Why Extracurricular Activities Matter?</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify md:text-lg text-gray-800 my-4">Extracurricular activities play a vital role in
                shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership,
                and problem-solving skills, preparing them for a bright future.</p>
            <div class="w-full">
                <ul class="defaultText merryFont md:text-lg list-disc mx-6">
                    <li class="my-2">Enhances leadership and teamwork skills</li>
                    <li class="my-2">Encourages creativity and innovation</li>
                    <li class="my-2">Builds self-confidence and communication skills</li>
                    <li class="my-2">Helps students explore their interests and career paths</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8 bg-orange-50">
        <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-2">
            @foreach ($clubs as $club)
                @if ($club->category === 'Academic & Leadership')
                    <div class="w-full md:w-1/3 my-2">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full h-96 overflow-hidden">
                                <img src={{ asset('/storage/images/clubs/' . $club->primary_img) }} alt="level photo"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="my-2">
                                <h5 class="text-green-800 text-center text-xl md:text-3xl my-2">{{ $club->name }}</h5>
                                <p class="defaultText md:text-lg text-center">{{ $club->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-1">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Academic & Leadership Clubs</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <se class="defaultText text-justify md:text-lg text-gray-800 my-4">These clubs aim ti enrich students' intellectual growth and develop strong leadership qualities. Whether through debate, science clubs, or student councils, learners and encouraged to think critically, collaborate effectively, and take initiatives in both academic and social settings. They build confidence and prepare students for future leadership roles.</se>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-1">
            @foreach ($clubs as $club)
                @if ($club->category === 'Arts & Creativity')
                    <div class="w-full md:w-1/3 my-2">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full h-96 overflow-hidden">
                                <img src={{ asset('/storage/images/clubs/' . $club->primary_img) }} alt="level photo"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="my-2">
                                <h5 class="text-green-800 text-center text-xl md:text-3xl my-2">{{ $club->name }}</h5>
                                <p class="defaultText md:text-lg text-center">{{ $club->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Arts & Creativity Clubs</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify md:text-lg text-gray-800 my-4">From drama and dance to music and fine arts, these clubs provide students with anoutlet to express themselves creatively. They nurture talent, spark imagination, and promote cultural appreciation through performances, exhibitions, and workshops that celebrate artistic expression.</p>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8 bg-orange-50">
        <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-2">
            @foreach ($clubs as $club)
                @if ($club->category === 'Sports & Physical')
                    <div class="w-full md:w-1/3 my-2">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full h-96 overflow-hidden">
                                <img src={{ asset('/storage/images/clubs/' . $club->primary_img) }} alt="level photo"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="my-2">
                                <h5 class="text-green-800 text-center text-xl md:text-3xl my-2">{{ $club->name }}</h5>
                                <p class="defaultText md:text-lg text-center">{{ $club->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-1">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Sports & Physical Activities</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify md:text-lg text-gray-800 my-4">These activities promote physical fitness, teamwork, and discipline. Whether through team sports like football and basketball or individual pursuits like athletics and swimming, students build resilience, healthy habits, and a strong sense of sportsmanship while competing and having fun.</p>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-1">
            @foreach ($clubs as $club)
                @if ($club->category === 'Community & Special Interest')
                    <div class="w-full md:w-1/3 my-2">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full h-96 overflow-hidden">
                                <img src={{ asset('/storage/images/clubs/' . $club->primary_img) }} alt="level photo"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="my-2">
                                <h5 class="text-green-800 text-center text-xl md:text-3xl my-2">{{ $club->name }}</h5>
                                <p class="defaultText md:text-lg text-center">{{ $club->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Community & Special Interest Clubs</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify md:text-lg text-gray-800 my-4">Focused on civic engagement and shared passions, these clubs connect students with causes and communitiea that matter to them. They may include environmental clubs, charity groups, or technology and innovation hubs, encouraging responsibility, volunteerism, and broader worldviews.</p>
        </div>
    </section>

    {{-- success stories --}}
    <section class="w-full p-8 bg-green-100">
        <div class="w-fit mx-4">
            <h1 class="oswald text-2xl md:text-4xl text-green-900 text-wrap">Success Stories & Achievements</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="slider2 w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
            @foreach ($achievements as $achievement)
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                    <div class="w-full">
                        <div class="text-gray-800 text-center my-4 italic">{!! $achievement->description !!}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
