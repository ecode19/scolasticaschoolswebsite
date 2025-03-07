@extends('layouts.guest')
@section('title', 'About US')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school1.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-green-900 via-green-700 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold"> Our Legacy: A Journey Through Time</h1>
                <h1 class="mt-10 text-center font-extrabold text-white text-4xl">Since 1950</h1>
            </div>
        </div>
    </section>
    {{-- History Overview --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-green-700 font-semibold text-4xl">Our History</h1>
            <div class="py-3">
                <p class="text-justify text-gray-700 leading-relaxed"> Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Ad, illum
                    reiciendis!
                    Reprehenderit, dolorem et molestiae provident omnis molestias velit fugiat delectus earum fugit ad
                    aliquid autem dignissimos similique nisi, commodi accusamus nemo. Fugiat ea, tempora quas odit nisi
                    molestiae deserunt a non commodi saepe sequi natus impedit sed labore, officia praesentium voluptas ad
                    nemo neque voluptatum quasi laborum. Dolore deserunt minus autem perferendis, ex, animi voluptatum
                    veniam, necessitatibus aliquam tempora tempore dolores adipisci rerum nobis ea nam fugiat omnis? Iure
                    ipsam necessitatibus reiciendis ipsum incidunt deleniti rem inventore ratione, laboriosam est totam
                    cumque blanditiis quidem reprehenderit sint iusto placeat eligendi, soluta, ex praesentium perspiciatis
                    at. Nobis aspernatur dicta hic vero ullam voluptatum veniam perspiciatis, consequatur non blanditiis
                    molestiae eius repellat exercitationem aut eum. Explicabo iusto quis adipisci pariatur ad, quibusdam
                    molestiae reiciendis, minus nesciunt debitis placeat voluptatibus cum aspernatur sint facere earum
                    dignissimos dolore deleniti. Aliquid quo ad quod perspiciatis ducimus vero aut explicabo quos porro qui
                    modi, accusamus quae maiores magnam repellendus nihil earum, consectetur perferendis commodi. Distinctio
                    sequi quis placeat alias illum nihil tempora beatae nemo voluptatibus hic, repellat, dignissimos sunt
                    nam, qui minus asperiores consequuntur quo rem! Eum aut voluptas aspernatur ex, sunt blanditiis aliquid
                    molestias? Suscipit.</p>

                <div class="mt-8">
                    <a href="#"
                        class="py-3 px-4 rounded-xl bg-green-700 text-white tex-lg font-semibold hover:bg-green-600 transition transform ease-in-out durataion-700">Read
                        More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- how it started --}}
    <section class="py-12">
        <div class="relative flex justify-center items-center bg-fixed bg-cover bg-center bg-no-repeat h-96 lg:h-[560px] overflow-hidden"
            style="background-image: url('{{ asset('images/school4.jpg') }}')">
            {{-- gradient --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-800 to-gray-700 opacity-80 backdrop-blur-sm"></div>
            {{-- text --}}
            <div class="history-slider relative w-11/12">
                <div class="lex flex-col justify-center items-center">
                    <h1 class="text-8xl font-bold uppercase text-center text-white mb-10">1985</h1>
                    <p class="text-center text-white text-3xl text-wrap">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-8xl font-bold uppercase text-white text-center mb-10">1995</h1>
                    <p class="text-center text-white text-3xl text-wrap">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-8xl font-bold uppercase text-center text-white mb-10">2005</h1>
                    <p class="text-center text-white text-3xl text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-8xl font-bold uppercase text-center text-white mb-10">2020</h1>
                    <p class="text-center text-white text-3xl text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                </div>
            </div>

        </div>
        </div>
    </section>
    {{-- directors --}}
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-center text-green-700 text-5xl font-semibold pb-12">
                Visionary Leaders Who Shaped Our School's Legacy
            </h1>
            <div class="flex justify-center gap-6">

                {{-- Number One --}}
                <div
                    class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center rounded-3xl border border-green-600 shadow-lg py-10">
                    <img src="{{ asset('images/school3.jpg') }}" alt=""
                        class="h-44 w-44 rounded-full border-2 border-green-500">
                    <div class="mt-6 px-6 text-center">
                        <h1 class="py-3"><span class="font-bold">Name:</span> Karl Peter</h1>
                        <h1><span class="font-bold">Duration:</span> 1884-1991</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eligendi perferendis, cum
                            quasi veritatis pariatur.</p>
                    </div>
                </div>

                {{-- Number One --}}
                <div
                    class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center rounded-3xl border border-green-600 shadow-lg py-10">
                    <img src="{{ asset('images/school3.jpg') }}" alt=""
                        class="h-44 w-44 rounded-full border-2 border-green-500">
                    <div class="mt-6 px-6 text-center">
                        <h1 class="py-3"><span class="font-bold">Name:</span> Karl Peter</h1>
                        <h1><span class="font-bold">Duration:</span> 1884-1991</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eligendi perferendis, cum
                            quasi veritatis pariatur.</p>
                    </div>
                </div>

                {{-- Number One --}}
                <div
                    class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center rounded-3xl border border-green-600 shadow-lg py-10">
                    <img src="{{ asset('images/school3.jpg') }}" alt=""
                        class="h-44 w-44 rounded-full border-2 border-green-500">
                    <div class="mt-6 px-6 text-center">
                        <h1 class="py-3"><span class="font-bold">Name:</span> Karl Peter</h1>
                        <h1><span class="font-bold">Duration:</span> 1884-1991</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eligendi perferendis, cum
                            quasi veritatis pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Accredited --}}
    <section class="py-10">
        <div class="w-8/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-center bg-green-800 rounded-xl">
                <div class="px-9 py-12">
                    <h1 class="text-6xl text-center text-white font-bold">Accredited by</h1>
                    <p class="text-justify text-lg text-white italic mt-6">
                        SCOLASTICA Schools is officially accredited by the <span class="font-bold">Ministry of Education,
                            Science, and Technology of Tanzania</span>, ensuring that our curriculum meets national and
                        international educational standards. Our commitment to excellence empowers students with quality
                        education, equipping them with the knowledge and skills needed for a brighter future.
                    </p>

                    <div class="flex flex-col justify-center items-center mt-16">
                        <img src="{{ asset('images/ministry-of-toursim.png') }}" alt=""
                            class="w-56 h-56 rounded-full">
                        <h2 class="text-semibold text-white font-semibold text-lg">Ministy of Education</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- achievement section --}}
    <section class="py-12">
        <div class="container mx-auto">
            <h1 class="text-center text-green-700 text-5xl font-semibold pb-12">
                Achievements & Recognition
            </h1>

            <div class="flex flex-col md:flex-row justify-center gap-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Certificate of Best Performance </h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Best Nusrey School In Kilimanjaro</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/ministry-of-toursim.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>

                <div class="flex flex-col">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-36 h-36 rounded-full">
                    <h2 class="text-semibold">Ministy of Education</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- call to action --}}
    <section class="">
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
