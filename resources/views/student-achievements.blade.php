@extends('layouts.guest')
@section('title', 'Student Achievements')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school4.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-green-800 via-green-600 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Student Achievements
                </h1>
                <h1 class="mt-10 text-center font-extrabold text-white text-4xl">"Inspiring Success, Shaping the Future"</h1>
            </div>
        </div>
    </section>

    <div class="container mx-auto py-16 px-6">
        {{-- Recent Accomplishments --}}
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Recent Student Accomplishments</h2>
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <div class="w-full md:w-1/3 bg-gray-100 rounded-2xl shadow-md p-6 flex">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-32 w-32 rounded-lg border-2 border-green-500 mr-4">
                    <div>
                        <h3 class="text-xl font-semibold">achivement Name: Lorem ipsum dolor sit.</h3>
                        <p class="text-gray-700">Description : Lorem ipsum dolor sit amet consectetur.</p>
                        <span class="text-sm font-bold text-green-700 block mt-2">Category Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing.</span>
                    </div>
                </div>

                <div class="w-full md:w-1/3 bg-gray-100 rounded-2xl shadow-md p-6 flex">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-32 w-32 rounded-lg border-2 border-green-500 mr-4">
                    <div>
                        <h3 class="text-xl font-semibold">achivement Name: Lorem ipsum dolor sit.</h3>
                        <p class="text-gray-700">Description : Lorem ipsum dolor sit amet consectetur.</p>
                        <span class="text-sm font-bold text-green-700 block mt-2">Category Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing.</span>
                    </div>
                </div>

                <div class="w-full md:w-1/3 bg-gray-100 rounded-2xl shadow-md p-6 flex">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}"
                        class="h-32 w-32 rounded-lg border-2 border-green-500 mr-4">
                    <div>
                        <h3 class="text-xl font-semibold">achivement Name: Lorem ipsum dolor sit.</h3>
                        <p class="text-gray-700">Description : Lorem ipsum dolor sit amet consectetur.</p>
                        <span class="text-sm font-bold text-green-700 block mt-2">Category Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing.</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- Success Stories --}}
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Success Stories</h2>
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">

                <div class="w-full md:w-1/3 bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/classroom2.jpeg') }}" alt=""
                        class="h-40 w-40 mx-auto rounded-full border-4 border-blue-500">
                    <h3 class="text-xl font-semibold mt-4">The story name</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem similique
                        earum, adipisci necessitatibus nulla est.</p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-700 text-white rounded-lg">Read More</a>
                </div>

                <div class="w-full md:w-1/3 bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/classroom2.jpeg') }}" alt=""
                        class="h-40 w-40 mx-auto rounded-full border-4 border-blue-500">
                    <h3 class="text-xl font-semibold mt-4">The story name</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt numquam
                        quam explicabo accusamus recusandae sapiente?</p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-700 text-white rounded-lg">Read More</a>
                </div>

                <div class="w-full md:w-1/3 bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/classroom2.jpeg') }}" alt=""
                        class="h-40 w-40 mx-auto rounded-full border-4 border-blue-500">
                    <h3 class="text-xl font-semibold mt-4">The story name</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quia
                        praesentium officia aut amet corrupti.</p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-700 text-white rounded-lg">Read More</a>
                </div>
            </div>
        </section>

        {{-- Hall of Fame --}}
        <section class="mt-20 bg-green-700 text-white py-16 rounded-xl">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Hall of Fame</h2>
                <p class="mt-4 text-lg">Celebrating Alumni Who Are Making a Global Impact</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Jackson Malele</h3>
                    <p class="text-gray-700">I thank you for the opportunity</p>
                    <span class="text-sm font-bold text-green-700 block mt-2">Software Engineer, Kenya</span>
                </div>

                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Peter Olomi</h3>
                    <p class="text-gray-700">Working in Account </p>
                    <span class="text-sm font-bold text-green-700 block mt-2">CEO Accounting Group, Australia</span>
                </div>
            </div>
        </section>

        {{-- FAQs --}}
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Frequently Asked Questions</h2>
            <div class="bg-gray-100 p-6 rounded-2xl shadow-md">
                <details class="mb-4">
                    <summary class="cursor-pointer font-semibold text-lg">How are student achievements recognized?</summary>
                    <p class="mt-2 text-gray-700">We recognize students through awards, scholarships, and special events.
                    </p>
                </details>
                <details class="mb-4">
                    <summary class="cursor-pointer font-semibold text-lg">Can students suggest competitions to participate
                        in?</summary>
                    <p class="mt-2 text-gray-700">Yes! We encourage students to recommend and participate in competitions of
                        their interest.</p>
                </details>
            </div>
        </section>

        {{-- Call to Action --}}
        <section class="mt-20 text-center">
            <h2 class="text-4xl font-bold text-green-700">Join the Hall of Champions!</h2>
            <p class="mt-4 text-lg">Have an achievement to share? Let the world know!</p>
            <a href=""
                class="mt-6 inline-block px-6 py-3 bg-green-700 text-white rounded-lg text-lg font-bold">Submit Your
                Achievement</a>
        </section>
    </div>

    {{-- social Medias --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center font-semibold text-4xl text-green-800 mb-10">Stay Conneted with Us </h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-12">
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
