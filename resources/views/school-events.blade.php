@extends('layouts.guest')
@section('title', 'School-Events')
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
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> School Events
                </h1>
                <h1 class="mt-10 text-center font-extrabold text-white italic text-4xl">"Creating Memories, Building the
                    Future"</< /h1>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <div class="container mx-auto py-16 px-6">
        <!-- Featured Events -->
        <section>
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Featured Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}" class="h-60 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem ipsum dolor sit.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id
                        officia numquam quasi excepturi libero animi eum odio minima rerum velit consequatur natus harum
                        laudantium sapiente aliquid, atque, fugit aspernatur?</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg">View
                        Details</a>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}" class="h-60 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem ipsum dolor sit.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id
                        officia numquam quasi excepturi libero animi eum odio minima rerum velit consequatur natus harum
                        laudantium sapiente aliquid, atque, fugit aspernatur?</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg">View
                        Details</a>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/kilimanjaro2.jpeg') }}" class="h-60 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem ipsum dolor sit.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id
                        officia numquam quasi excepturi libero animi eum odio minima rerum velit consequatur natus harum
                        laudantium sapiente aliquid, atque, fugit aspernatur?</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg">View
                        Details</a>
                </div>
            </div>
        </section>

        <!-- Upcoming Events -->
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-100 rounded-2xl shadow-md p-6 flex">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}"
                        class="h-32 w-32 rounded-lg border-2 border-blue-500 mr-4">
                    <div>
                        <h3 class="text-xl font-semibold">title Lorem ipsum dolor sit amet.</h3>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum
                            ratione ab voluptas, atque praesentium voluptatibus quo adipisci iure magni quidem reprehenderit
                            repudiandae eum voluptatum voluptates repellat minima, ipsa eius.</p>
                        <span class="text-sm font-bold text-blue-700 block mt-2">
                            Location and date
                        </span>
                    </div>
                </div>

                <div class="bg-gray-100 rounded-2xl shadow-md p-6 flex">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}"
                        class="h-32 w-32 rounded-lg border-2 border-blue-500 mr-4">
                    <div>
                        <h3 class="text-xl font-semibold">title Lorem ipsum dolor sit amet.</h3>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum
                            ratione ab voluptas, atque praesentium voluptatibus quo adipisci iure magni quidem reprehenderit
                            repudiandae eum voluptatum voluptates repellat minima, ipsa eius.</p>
                        <span class="text-sm font-bold text-blue-700 block mt-2">
                            Location and date
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Past Events -->
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Past Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/classroom2.jpeg') }}" class="h-40 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem, ipsum dolor.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel molestiae
                        voluptatem fuga sapiente sint beatae, odit quasi, at culpa voluptatibus autem quisquam ex explicabo?
                        Praesentium maxime rem fuga voluptatibus recusandae!</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/classroom2.jpeg') }}" class="h-40 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem, ipsum dolor.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel molestiae
                        voluptatem fuga sapiente sint beatae, odit quasi, at culpa voluptatibus autem quisquam ex explicabo?
                        Praesentium maxime rem fuga voluptatibus recusandae!</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <img src="{{ asset('images/classroom2.jpeg') }}" class="h-40 w-full object-cover rounded-xl">
                    <h3 class="text-xl font-semibold mt-4">title Lorem, ipsum dolor.</h3>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel molestiae
                        voluptatem fuga sapiente sint beatae, odit quasi, at culpa voluptatibus autem quisquam ex explicabo?
                        Praesentium maxime rem fuga voluptatibus recusandae!</p>
                    <span class="block mt-2 font-bold text-blue-700">
                        location and date
                    </span>
                </div>
            </div>
        </section>

        <!-- Event Categories -->
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Event Categories</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#"
                    class="px-6 py-3 bg-gray-200 text-blue-700 rounded-lg font-bold hover:bg-blue-700 hover:text-white transition">
                    Lorem ipsum dolor sit amet.
                </a>
            </div>
        </section>

        <!-- FAQs -->
        <section class="mt-20">
            <h2 class="text-4xl font-bold text-green-700 text-center mb-12">Frequently Asked Questions</h2>
            <div class="bg-gray-100 p-6 rounded-2xl shadow-md">
                <details class="mb-4">
                    <summary class="cursor-pointer font-semibold text-lg">How can I register for an event?</summary>
                    <p class="mt-2 text-gray-700">You can register through the event details page or contact the school
                        administration.</p>
                </details>
                <details class="mb-4">
                    <summary class="cursor-pointer font-semibold text-lg">Are events open to non-students?</summary>
                    <p class="mt-2 text-gray-700">Some events are open to the public, while others are exclusively for
                        students.</p>
                </details>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="mt-20 text-center">
            <h2 class="text-4xl font-bold text-green-700">Be Part of Our Events!</h2>
            <p class="mt-4 text-lg">Stay updated and participate in the latest school events.</p>
            <a href="#"
                class="mt-6 inline-block px-6 py-3 bg-blue-700 text-green-800 rounded-lg text-lg font-bold">View
                All Events</a>
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
