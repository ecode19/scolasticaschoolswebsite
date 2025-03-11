@extends('layouts.guest')
@section('title', 'About US')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school4.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold">Join SCOLASTICA: Where Excellence Begins!
                </h1>
                <p class="text-xl mt-4 text-white text-center italic">Empowering young minds from Kindergarten to Secondary
                    with excellence in education.</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h2 class="text-green-700 text-2xl font-bold">Kindergarten</h2>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li>Child must be 3-5 years old</li>
                        <li>Birth certificate copy</li>
                        <li>Two passport-size photos</li>
                        <li>Medical report</li>
                    </ul>
                </div>

                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h2 class="text-green-700 text-2xl font-bold">Primary</h2>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li>Age requirement: 6+ years</li>
                        <li>Birth certificate & previous school report</li>
                        <li>Two passport-size photos</li>
                        <li>Entrance exam required</li>
                    </ul>
                </div>

                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h2 class="text-green-700 text-2xl font-bold">Secondary</h2>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li>Completed Primary Education</li>
                        <li>Pass entrance exam & interview</li>
                        <li>Previous academic records</li>
                        <li>Transfer certificate</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-12 text-center">
            <h2 class="text-3xl font-bold text-green-700">How to Apply</h2>
            <div class="flex flex-wrap justify-center gap-6 mt-6">
                <div class="bg-white shadow-lg p-6 rounded-xl w-64">
                    <h3 class="text-xl font-semibold">Step 1</h3>
                    <p class="text-gray-700 mt-2">Download and complete the application form.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-xl w-64">
                    <h3 class="text-xl font-semibold">Step 2</h3>
                    <p class="text-gray-700 mt-2">Submit the required documents.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-xl w-64">
                    <h3 class="text-xl font-semibold">Step 3</h3>
                    <p class="text-gray-700 mt-2">Attend entrance exams and interviews.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="text-center mt-12">
            <h2 class="text-3xl font-bold text-green-700">Need More Information?</h2>
            <p class="text-lg text-gray-600 mt-4">Reach out to our admissions office for any inquiries.</p>
            <p class="text-lg text-gray-700 font-semibold mt-2">📞 +255 123 456 789 | admissions@scolastica.ac.tz</p>
            <div class="py-12 w-full">
                <iframe class="w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255899.72059707838!2d37.26933653889566!3d-3.3807010957086527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839cf30d855fcf5%3A0x82b41bbf1c948949!2sScolastica%20Secondary%20School!5e1!3m2!1sen!2stz!4v1740579847787!5m2!1sen!2stz"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>

    {{-- call to action --}}
    <section class="py-12">
        <div class="w-full bg-green-900 py-12">
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center py-12">
                <h1 class="text-white font-semibold text-4xl">Contact Us Today</h1>
                <div class="border border-white w-2/5 mt-2"></div>
                <h2 class="text-white font-semibold text-2xl mt-5">Find out how we can develop your child’s skills and
                    expand
                    their horizons for a life of success. </h2>
                {{-- admission button --}}
                <div class="mt-12">
                    <a href="#"
                        class="py-3 px-7 text-gray-800 bg-white rounded-xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white">
                        Enquery Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
