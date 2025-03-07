@extends('layouts.guest')
@section('title', 'Extracurricular Activities')
@section('content')

<div class="w-full lg:h-[500px] overflow-hidden relative">
    <img src={{ asset('images/sports3.jpg') }} alt="" class="w-full object-cover">
    <div class="dark-overlay">
        <div class="center-div">
            <div class="text-white text-center">
                <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Clubs & Extracurricular Activities</h1>
            </div>
        </div>
    </div>
</div>
<section class="w-11/12 mx-auto my-4 p-4">
    <div class="w-full my-4">
        <p class="defaultText text-justify text-lg">At Scolastica Secondary School, we believe that learning goes beyond the classroom. Our vibrant extracurricular programs provide students with opportunities to explore their talents, develop leadership skills, and build lifelong friendships. Whether you're passionate about sports, arts, science, or leadership, there's a club for you!</p>
    </div>
</section>

<section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
        <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Why Extracurricular Activities Matter?</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Extracurricular activities play a vital role in shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership, and problem-solving skills, preparing them for a bright future.</p>
        <div class="w-full">
            <ul class="defaultText merryFont text-lg list-disc mx-6">
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
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Science & Innovation Club</h5>
                    <p class="defaultText text-lg text-center">Explore exciting science experiments and participate in national competitions.</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Debate Club</h5>
                    <p class="defaultText text-lg text-center">Sharpen your public speaking and critical thinking skills.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-1">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Academic & Leadership Clubs</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Extracurricular activities play a vital role in shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership, and problem-solving skills, preparing them for a bright future.</p>
    </div>
</section>

<section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
    <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-1">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Music & Choir Club</h5>
                    <p class="defaultText text-lg text-center">Sing, play instruments, and perform at school events.</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Drama & Theatre Club</h5>
                    <p class="defaultText text-lg text-center">Showcase your acting talents in school plays and performances.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Arts & Creativity Clubs</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Extracurricular activities play a vital role in shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership, and problem-solving skills, preparing them for a bright future.</p>
    </div>
</section>

<section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8 bg-orange-50">
    <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-2">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Football Club</h5>
                    <p class="defaultText text-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fuga animi harum, eligendi labore, iusto adipisci</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Basketball Club</h5>
                    <p class="defaultText text-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fuga animi harum, eligendi labore, iusto adipisci.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-1">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Sports & Physical Activities</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Extracurricular activities play a vital role in shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership, and problem-solving skills, preparing them for a bright future.</p>
    </div>
</section>

<section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
    <div class="slider3 w-full md:w-1/2 my-4 py-4 flex flex-col md:flex-row order-2 md:order-1">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Environmental Conservation Club</h5>
                    <p class="defaultText text-lg text-center">Engage in tree planting and sustainability projects.</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">First Aid & Red Cross Club</h5>
                    <p class="defaultText text-lg text-center">Learn essential first aid skills and help in emergencies.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Community & Special Interest Clubs</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Extracurricular activities play a vital role in shaping well-rounded individuals. By participating in clubs, students enhance their teamwork, leadership, and problem-solving skills, preparing them for a bright future.</p>
    </div>
</section>

{{-- success stories --}}
<section class="w-full p-8 bg-green-100">
    <div class="w-fit mx-4">
        <h1 class="oswald text-4xl text-green-900 text-wrap">Success Stories & Achievements</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-full md:w-fit mx-auto my-4 py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                <div class="w-full">
                    <p class="text-lg text-gray-800 text-center my-4">"Our Debate Club won the 2024 National Debate Championship, and our Science Club participated in the International Science Fair, where students presented innovative projects. Be part of the legacy!"</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                <div class="w-full">
                    <p class="text-lg text-gray-800 text-center my-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, et, sapiente nam illum dicta sunt nihil, earum ipsam veritatis sed adipisci. At delectus quam voluptas itaque maiores inventore molestiae"</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
