@extends('layouts.guest')
@section('title', 'Subjects Offered')
@section('content')

<section class="w-11/12 mx-auto my-4 p-4">
    <div class="w-max">
        <h1 class="oswald text-4xl text-green-900">Subjects Offered</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-full my-4">
        <p class="defaultText text-justify text-lg">Our school offers a wide range of subjects across different educational levels, providing students with the flexibility to explore their academic strengths and interests. Below is a detailed breakdown of the subjects taught at Scolastica Secondary School.</p>
    </div>

    @foreach ($academicLevels as $level)
    <div class="w-full my-8">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">{{$level->name}}</h1>
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
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">{{$subject->name}}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</section>
@endsection
