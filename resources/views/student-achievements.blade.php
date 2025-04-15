@extends('layouts.guest')
@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-gray-400">
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DJI_0731.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 rounded-3xl backdrop-blur-sm py-6" data-aos="fade-right"
                data-aos-duration="2000">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight drop-shadow-md">
                    Achievements & Legacy from Our Scolastica Community
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Since 2001
                </h2>
            </div>
        </div>
    </section>

{{-- teachers --}}
<section class="py-20 bg-gradient-to-br from-gray-100 via-white to-gray-100">
    <div class="container mx-auto px-6">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-green-800 leading-tight animate-fade-up">
                The Legacy of Leadership
            </h1>
            <p class="mt-4 text-lg text-gray-600 animate-fade-up delay-100">
                Honoring the founding teachers whose passion and leadership laid the foundation for excellence.
            </p>
        </div>

        <!-- Founder Card -->
        <div
            class="max-w-8xl mx-auto bg-white border border-green-100 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 py-6 px-12 animate-fade-up delay-200 my-4">
            <!-- Names -->
            <div class="w-fit mx-auto flex flex-col md:flex-row md:space-x-2 space-y-2 items-center">
                <img src="{{ asset('images/user.avif') }}" alt=""
                                class="w-28 h-28 md:w-40 md:h-40 rounded-full mb-6 shadow-lg">
                <h2 class="text-3xl font-bold text-green-900 mb-6 text-center tracking-tight">
                    Mr. Thobias Lyimo (1995–2000)
                    <br>
                    <span class="text-xl font-medium text-green-600">Founding Headteacher</span>
                </h2>
            </div>

            <div>
                {{-- condolences --}}
                <p class="text-lg text-gray-700 text-justify leading-relaxed mb-10 mx-auto">
                    When Scolastica School, Himo, opened its doors in 1995, it marked the start of a bold vision for education, led by the founding headteacher, Mr. Thobias Lyimo. With passion and purpose, Mr. Lyimo shaped the school’s early years, laying a strong foundation built on discipline, integrity, and academic excellence.<br><br>

                    Under his guidance, Scolastica embraced the NECTA curriculum, promoting not just intellectual growth but also character and community values. His belief that “education without integrity is like a river without water” became a lasting motto, inspiring students and staff alike.
                    <br><br>

                    Beyond academics, Mr. Lyimo fostered a sense of unity, bringing teachers, students, and parents together as one supportive family. His empathetic and visionary leadership helped transform Scolastica into a rising center of excellence.
                    <br><br>

                    By the end of his tenure in 2000, the school had already earned a reputation for quality and commitment, a legacy that continues to shape its journey today. Mr. Lyimo wasn’t just Scolastica’s first headteacher—he was the light that ignited its enduring spirit.
                </p>
            </div>
        </div>
        <div
            class="max-w-8xl mx-auto bg-white border border-green-100 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 py-6 px-12 animate-fade-up delay-200 my-4">
            <!-- Names -->
            <div class="w-fit mx-auto flex flex-col md:flex-row md:space-x-2 space-y-2 items-center">
                <img src="{{ asset('images/user.avif') }}" alt=""
                                class="w-28 h-28 md:w-40 md:h-40 rounded-full mb-6 shadow-lg">
                <h2 class="text-3xl font-bold text-green-900 mb-6 text-center tracking-tight">
                    Mr. Michael (2004–2023)
                    <br>
                    <span class="text-xl font-medium text-green-600">Second Headmaster</span>
                </h2>
            </div>

            <div>
                {{-- condolences --}}
                <p class="text-lg text-gray-700 text-justify leading-relaxed mb-10 mx-auto">
                    For nearly two decades, Mr. Michael was the driving force behind Scolastica School’s growth and transformation. Serving as Headmaster from 2004 to 2023, he led with dignity, vision, and an unwavering dedication to nurturing both academic excellence and character.<br><br>

                    When he assumed leadership, Scolastica stood at a crossroads, full of potential but in need of strong direction. Mr. Michael answered that call by reinforcing discipline, refining the school’s NECTA curriculum alignment, and fostering a culture where both values and achievement thrived.
                    <br><br>

                    Throughout his 19-year tenure, Scolastica expanded its infrastructure, introduced dynamic co-curricular programs, and celebrated consistent academic success. His leadership brought initiatives like character development, mentorship, sports festivals, and teacher training to life—reshaping the Scolastica experience for students and staff alike.
                    <br><br>

                    More than a headmaster, Mr. Michael was a mentor, counsellor, and father figure, leaving an indelible mark on the hearts of all who passed through the school. His calm authority and clear vision helped define Scolastica’s enduring identity.
                    <br><br>

                    In 2023, he gracefully passed the mantle of leadership to Mr. Peter Mayoki, leaving behind a legacy built on growth, transformation, and lasting impact.
                </p>
            </div>
        </div>
    </div>
</section>

    {{-- students --}}
    <div class="container mx-auto p-6">
        {{-- Recent Accomplishments --}}
        <section class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-4xl font-extrabold text-green-800">Scolastica School's Brightest Stars</h2>
            </div>

            <div class="slider2 flex flex-col md:flex-row justify-center gap-12">
                @foreach ($achievements as $achievement)
                <div
                    class="w-full md:w-1/3">

                       <div class="w-11/12 ma-xuto bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center transform hover:scale-105 transition-transform ease-in-out duration-500">
                        <h3 class="text-xl md:text-2xl font-semibold text-green-800 mb-3">{{$achievement->title}}</h3>
                        <div class="text-gray-600 mb-4">{!!$achievement->description!!}</div>
                        <span class="text-sm font-semibold text-green-700">{{$achievement->title}}</span>
                       </div>

                </div>
                @endforeach
            </div>
        </section>

        {{-- Hall of Fame --}}
        <section class="mt-20 bg-gradient-to-r p-4 md:p-12 bg-green-50 via-green-100 to-green-200 py-16 rounded-xl">
            <div class="text-center">
                <h2 class="text-4xl font-bold">Hall of Fame</h2>
                <p class="mt-4 text-lg text-gray-600">Our Hall of Fame is reserved for exceptional students who have made remarkable contributions to the school and community, excelling in their respective fields. Each inductee has demonstrated leadership, perseverance, and a commitment to excellence.</p>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap justify-center items-center gap-6">
                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Maryline. R. Shayo</h3>
                    <p class="text-gray-700">Top NECTA performer, Scholarship recipient, and now a University graduate.</p>
                </div>

                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Abdul Kawambwa </h3>
                    <p class="text-gray-700">National Champion in UMISSETA.</p>
                </div>
                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">David Kimaro </h3>
                    <p class="text-gray-700">National Art Competition Winner and artist.</p>
                </div>
                <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-2xl shadow-lg p-6 mt-7 text-center">
                    <h3 class="text-xl font-semibold">Emmanuel Amani  </h3>
                    <p class="text-gray-700">Student Council President, Environmental Advocate.</p>
                </div>
            </div>
            <p class="mt-4 text-lg text-center text-gray-600">These individuals, among others, have left an indelible mark on the Scolastica community. They are a source of inspiration for current and future students, embodying the values of hard work, determination, and excellence that define Scolastica School.</p>
            <p class="mt-4 text-lg text-center text-gray-600">As we continue to celebrate and honor our students’ achievements, we remain dedicated to supporting their personal growth and academic success, ensuring that each one of them is prepared to take on the world and make a lasting impact.</p>
        </section>
    </div>

    {{-- call to action --}}
    <section class="border-b border-b-gray-500">
        <div class="w-full bg-gradient-to-r from-green-800 via-green-900 to-green-900 py-16">
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
