@extends('layouts.guest')
@section('title', 'Study Level')
@section('content')


    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('/storage/images/academic-levels/' . $level->image_2) }} alt="" class="w-full object-cover">
        <div class="w-full">
            <div class="absolute bottom-10 left-10 transparent-bg">
                <div class="text-white text-center">
                    <h1 class="oswald text-3xl md:text-6xl uppercase text-green-200">{{ $level->name }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
            <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="students photo"
                class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
            <div class="w-fit">
                <h1 class="oswald text-4xl text-green-900">Welcome to our {{$level->short_name}}</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <div class="defaultText text-justify text-lg text-gray-800 my-4">{!! $level->description !!}</div>
        </div>
    </section>

    <section class="w-full p-12  bg-no-repeat bg-center bg-cover bg-fixed bg-gray-600 bg-blend-multiply"
        style="background-image: url('{{ asset('/storage/images/academic-levels/' . $level->image_3) }}')">
        <div class="w-full md:w-10/12 mx-auto">
            <i class="fa fa-book-open text-4xl text-white"></i>
            <h1 class="oswald text-4xl text-white">Our Curriculum</h1>
            <div class="text-lg text-white my-4">{!! $level->curriculum !!}</div>
        </div>
    </section>

    {{-- subjects --}}
    <section class="w-full md:w-11/12 mx-auto p-2 my-8">
        <div class="w-full">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Subjects Offered</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <div class="w-full flex md:flex-row flex-wrap items-stretch mt-8">
                @foreach ($level->subjects as $subject)
                    <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                        <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                            <div class="w-full h-48 overflow-hidden relative group">
                                <img src={{ asset('/storage/images/subjects/' . $subject->primary_img) }} alt="level photo"
                                    class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                                <div class="dark-overlay">
                                    <div class="center-div p-2">
                                        <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">
                                            {{ $subject->name }}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- teaching approach --}}
    <section class="w-full p-8">
        <div class="w-fit mx-4">
            <h1 class="oswald text-4xl text-green-900 text-wrap">Teaching & Learnig Approach</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="slider2 w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
            @foreach ($level->learningApproaches as $approach)
                <div class="w-full md:w-1/3 my-2 border-2 border-orange-400">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden">
                            <img src={{ asset('/storage/images/learning-approaches/' . $approach->primary_img) }}
                                alt="level photo" class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">{{ $approach->name }}</h5>
                            <p class="defaultText text-lg text-center">{{ $approach->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- assessments --}}
    <section class="w-full p-12 text-center bg-green-200 my-4 md:my-8">
        <i class="fa fa-book-open text-4xl text-green-900"></i>
        <h1 class="oswald text-4xl text-green-900">Assessments & Examinations</h1>
        <div class="w-full md:w-10/12 mx-auto text-center">
            @foreach ($level->assessmentMethods as $method)
            <p class="defaultText text-lg text-gray-800 my-2"><i class="fa fa-check mx-2"></i>{{$method->name}}</p>
            @endforeach
        </div>
    </section>

    {{-- co-curricular --}}
    <section class="w-full md:w-11/12 mx-auto">
        <div class="w-fit">
            <h1 class="oswald text-4xl text-green-900">Co-Curricular Activities & Special Programs</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <div class="slider3 w-full">
            @foreach ($level->coCurricularActivities as $activity)
                <div class="w-full">
                    <div class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
                        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                            <img src={{ asset('/storage/images/cocurricular-activities/' . $activity->primary_img) }}
                                alt="activity photo" class="w-full object-cover rounded-md">
                        </div>
                        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                            <div class="w-fit">
                                <h1 class="oswald text-4xl text-green-900">{{ $activity->name }}</h1>
                            </div>
                            <div class="defaultText text-justify text-lg text-gray-800 my-4">{!! $activity->description !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    {{-- learning facilities --}}
    <section class="w-full md:w-11/12 mx-auto p-2 my-8">
        <div class="w-full">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Facilities & Learning Resources</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>

            <p class="defaultText text-lg my-4">
                Our students have access to world-class learning facilities, including modern classrooms, well-equipped
                science labs, a digital learning center, and a well-stocked library. These resources ensure that students
                can explore their full academic potential.
            </p>

            <div class="w-full flex md:flex-row flex-wrap items-stretch mt-8">
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-7.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-8.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-9.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-10.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/environment/env-2.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/environment/env-3.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/environment/env-4.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-11.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-12.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                    <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                        <div class="w-full h-48 overflow-hidden group">
                            <img src={{ asset('images/students/students-13.jpg') }} alt="level photo"
                                class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
