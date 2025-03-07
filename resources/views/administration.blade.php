@extends('layouts.guest')
@section('title', 'Administration Structure')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school4.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-800 to-gray-700 opacity-80"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-5xl lg:text-6xl text-center text-white font-bold"> Our Management Structure</h1>
            </div>
        </div>
    </section>

    {{-- administration structure --}}
    <section class="py-12">
        <h1 class="font-semibold text-center text-4xl text-green-800 mb-10">Administration Structure</h1>
        <div class="w-11/12 mx-auto text-center rounded-3xl shadow-2xl">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full">
                <h1><span class="font-semibold">Name:</span> John Abraham </h1>
                <h1><span class="font-semibold">Position:</span> Headmaster </h1>
            </div>

            <div class="flex flex-col md:flex-row items-center px-8 lg:max-w-6xl py-12">
                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full">
                    <h1><span class="font-semibold">Name:</span> John Abraham </h1>
                    <h1><span class="font-semibold">Position:</span> Headmaster </h1>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full">
                    <h1><span class="font-semibold">Name:</span> John Abraham </h1>
                    <h1><span class="font-semibold">Position:</span> Headmaster </h1>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full">
                    <h1><span class="font-semibold">Name:</span> John Abraham </h1>
                    <h1><span class="font-semibold">Position:</span> Headmaster </h1>
                </div>

                <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-56 h-56 rounded-full">
                    <h1><span class="font-semibold">Name:</span> John Abraham </h1>
                    <h1><span class="font-semibold">Position:</span> Headmaster </h1>
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
                            <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">Photo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left font-semibold uppercase">
                                Profession </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-500">
                            <td class="px-6 py-4  text-gray-900">1</td>
                            <td class="px-6 py-4">
                                <img class="w-9 h-9 rounded-full" src="{{ asset(path: 'images/logo.png') }}"
                                    alt="Profile Photo">
                            </td>
                            <td class="px-6 py-4  font-medium text-gray-900">John Swai</td>
                            <td class="px-6 py-4  text-gray-500">Advanced Mathematics</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4  text-gray-900">2</td>
                            <td class="px-6 py-4">
                                <img class="w-9 h-9 rounded-full" src="{{ asset(path: 'images/logo.png') }}"
                                    alt="Profile Photo">
                            </td>
                            <td class="px-6 py-4  font-medium text-gray-900">Jane Bakalemwa</td>
                            <td class="px-6 py-4  text-gray-500">Kiswahili</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    {{-- Core Values --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-center text-4xl font-semibold text-green-800 mb-5">Our Core Values</h1>
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-5" data-aos="zoom-in"
                data-aos-duration="2000">
                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>

                <div
                    class="w-full md:w-1/2 lg:w-1/4 flex flex-col justify-center items-center gap-5 mb-5 py-10 px-6 shadow-2xl">
                    <h1 class="text-green-800 font-semibold text-xl">Lorem ipsum dolor sit amet.</h1>
                    <p class="leading-relaxed text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora, odit?</p>
                </div>
            </div>
        </div>
    </section>

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
