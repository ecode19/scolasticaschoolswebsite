@extends('layouts.guest')
@section('title', 'Curriculum')
@section('content')

    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Our Curriculum</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full my-4">
            <p class="defaultText text-justify text-lg">The Scolastica Schools’ education system follows a structured
                curriculum designed by the Tanzania Institute of Education (TIE) under the guidance of the Ministry of
                Education, Science, and Technology (MoEST). It emphasizes competency-based learning, fostering practical
                skills alongside theoretical knowledge. The curriculum is categorized into four major academic levels:
                Kindergarten (Pre-primary), Primary, Secondary (Ordinary Level - O-Level), and Advanced Secondary (High
                School - A-Level).</p>
        </div>

        <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            @foreach ($academicLevels as $level)
                @if ($level->short_name === 'Kindergarten')
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
                        <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="students photo"
                            class="w-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
                        <div class="w-max">
                            <h1 class="oswald text-4xl text-green-900">{{ $level->short_name }}</h1>
                            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                        </div>
                        <div class="defaultText text-justify merryFont text-lg text-gray-800 my-4">{!! $level->curriculum !!}
                        </div>
                    </div>
                @endif
            @endforeach
        </section>

        <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            @foreach ($academicLevels as $level)
                @if ($level->short_name === 'Primary School')
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-2">
                        <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="students photo"
                            class="w-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-1">
                        <div class="w-max">
                            <h1 class="oswald text-4xl text-green-900">{{ $level->short_name }}</h1>
                            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                        </div>
                        <div class="defaultText text-justify merryFont text-lg text-gray-800 my-4">{!! $level->curriculum !!}
                        </div>
                    </div>
                @endif
            @endforeach
        </section>

        <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            @foreach ($academicLevels as $level)
                @if ($level->short_name === 'Secondary School')
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
                        <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="students photo"
                            class="w-full object-cover rounded-md">
                    </div>
                    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
                        <div class="w-max">
                            <h1 class="oswald text-4xl text-green-900">{{ $level->short_name }}</h1>
                            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                        </div>
                        <div class="defaultText text-justify merryFont text-lg text-gray-800 my-4">{!! $level->curriculum !!}
                        </div>
                    </div>
                @endif
            @endforeach
        </section>

        <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            @foreach ($academicLevels as $level)
            @if ($level->short_name === 'High School')
                <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-2">
                    <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="students photo"
                        class="w-full object-cover rounded-md">
                </div>
                <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-1">
                    <div class="w-max">
                        <h1 class="oswald text-4xl text-green-900">{{ $level->short_name }}</h1>
                        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                    </div>
                    <div class="defaultText text-justify merryFont text-lg text-gray-800 my-4">{!! $level->curriculum !!}
                    </div>
                </div>
            @endif
        @endforeach
        </section>

        <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
                <img src={{ asset('images/students/ict.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
                <div class="w-fit">
                    <h1 class="oswald text-4xl text-green-900">Extracurricular Learning & Special Programs</h1>
                    <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                </div>
                <p class="defaultText text-justify text-lg text-gray-800 my-4">Beyond the standard curriculum, we offer a
                    variety of extracurricular learning opportunities to ensure students gain practical skills, leadership
                    abilities, and global perspectives. Our STEM and entrepreneurship programs empower students to innovate
                    and solve real-world challenges.</p>
                <div class="w-full">
                    <ul class="defaultText merryFont text-lg list-disc mx-6">
                        <li class="my-2">STEM, ICT, entrepreneurship, and leadership development</li>
                        <li class="my-2">Engagement in research projects</li>
                        <li class="my-2">Science fairs</li>
                        <li class="my-2">Cultural exchange programs</li>
                    </ul>

                </div>
            </div>
        </section>
    </section>
@endsection
