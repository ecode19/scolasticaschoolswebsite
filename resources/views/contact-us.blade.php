@extends('layouts.guest')
@section('title', 'Contact Us')
@section('content')


    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/environment/school-bus.jpg') }} alt="" class="w-full object-cover">
        <div class="w-full">
            <div class="absolute bottom-5 left-5 lg:bottom-10 lg:left-10 transparent-bg">
                <div class="text-white text-center">
                    <h1 class="oswald text-xl md:text-4xl lg:text-6xl uppercase text-green-200">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-max">
            <h1 class="oswald text-2xl md:text-4xl text-green-900">Contact Us</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full my-4">
            <p class="defaultText text-justify md:text-lg">We’d love to hear from you! Whether you have questions about
                admissions, academics, or school programs, feel free to get in touch with us. Our team is here to assist
                you!</p>

            <div class="w-full my-4">
                <div class="flex md:text-lg my-2">
                    <i class="fa fa-house text-orange-600 mr-4"></i>
                    <div class="defaultText w-full flex flex-col md:text-lg">
                        <p>Scolastica Secondary School,</p>
                        <p>P.O.BOX 159,</p>
                        <p>Himo - Kilimanjaro, Tanzania.</p>
                    </div>
                </div>
                <div class="flex items-center md:text-lg my-2">
                    <i class="fa fa-phone text-orange-600 mr-4"></i>
                    <p class="defaultText">+255 754 783 311</p>
                </div>
                <div class="flex items-center md:text-lg my-2">
                    <i class="fa fa-phone text-orange-600 mr-4"></i>
                    <p class="defaultText">+255 679 383 311</p>
                </div>
                <div class="flex items-center md:text-lg my-2">
                    <i class="fa fa-envelope text-orange-600 mr-4"></i>
                    <p class="defaultText">scolasticaschool@yahoo.com</p>
                </div>
            </div>
        </div>

        <div class="w-full my-4 flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 md:p-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.878411769601!2d37.54372443230201!3d-3.3798771568288797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839cf30d855fcf5%3A0x82b41bbf1c948949!2sScolastica%20Secondary%20School!5e0!3m2!1sen!2stz!4v1740557183913!5m2!1sen!2stz"
                    height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
            </div>
            <div class="w-full md:w-1/2 md:p-4">
                <h1 class="oswald text-2xl text-green-900 mx-6 mb-4">Send us a Message</h1>
                {{-- route('inquiries') --}}
                <form action="#" method="POST"
                    class="w-full md:w-11/12 mx-auto border-2 border-orange-400 p-4">
                    @csrf
                    <div class="w-full flex flex-col">
                        <label for="name" class="defaultText text-lg">Name</label>
                        <input type="text" name="name" class="defaultInput" required>
                    </div>
                    <div class="w-full flex flex-col my-4">
                        <label for="email" class="defaultText text-lg">Email</label>
                        <input type="email" name="email" class="defaultInput" required>
                    </div>
                    <div class="w-full flex flex-col my-4">
                        <label for="message" class="defaultText text-lg">Message</label>
                        <textarea name="message" class="defaultInput" rows="5" required></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button
                            class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold"
                            type="submit">Send Message</button>
                    </div>
                </form>
                {{-- Flash message --}}
                @session('message')
                    <p id="flash-message" class="w-full text-green-700 my-2 mx-4 text-lg font-semibold">{{ session('message') }}</p>
                @endsession
            </div>
        </div>

        <section class="w-full my-4 py-4">
            <div class="w-max">
                <h1 class="oswald text-2xl md:text-4xl text-green-900">Frequently Asked Questions</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <div class="mt-6 md:text-lg">
                @foreach ($faqs as $faq)
                    <details class="mb-4">
                        <summary class="font-semibold cursor-pointer">{{ $faq->question }}</summary>
                        <p class="mt-2 defaultText">{!! $faq->answer !!}</p>
                    </details>
                @endforeach
            </div>
            <a href="{{ route('faqs') }}">
                <button class="my-4 p-2 text-white bg-green-800 rounded-md font-semibold">More FAQs</button>
            </a>
        </section>

    </section>

@endsection
