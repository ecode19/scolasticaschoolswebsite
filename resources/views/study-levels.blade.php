@extends('layouts.guest')
@section('title', 'Study Levels')
@section('content')


    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/students/students-5.jpg') }} alt="" class="w-full object-cover">
        <div class="w-full">
            <div class="absolute bottom-5 left-5 lg:bottom-10 lg:left-10 transparent-bg">
                <div class="text-white text-center">
                    <h1 class="oswald text-xl md:text-4xl lg:text-6xl uppercase text-green-200">Academic Levels</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-max">
            <h1 class="oswald text-2xl md:text-4xl text-green-900">Study Levels</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex flex-col md:flex-row mt-8">
            @foreach ($academicLevels as $level)
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden hover:rotate-3">
                            <img src={{ asset('/storage/images/academic-levels/' . $level->primary_img) }} alt="level photo"
                                class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">{{ $level->short_name }}</h5>
                        </div>
                        <div class="my-2 w-max mx-auto mt-4">
                            <a href="{{ route('study-level', $level) }}">
                                <button
                                    class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-semibold rounded-full">Read
                                    More</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
