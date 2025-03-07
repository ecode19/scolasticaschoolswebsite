@extends('layouts.guest')
@section('title', 'Study Levels')
@section('content')


<div class="w-full lg:h-[500px] overflow-hidden relative">
    <img src={{ asset('images/school_library2.jpg') }} alt="" class="w-full object-cover">
    <div class="dark-overlay">
        <div class="center-div">
            <div class="text-white text-center">
                <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Study Levels</h1>
            </div>
        </div>
    </div>
</div>
<section class="w-11/12 mx-auto my-4 p-4">
    <div class="w-max">
        <h1 class="oswald text-4xl text-green-900">Study Levels</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-full flex flex-col md:flex-row mt-8">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden hover:rotate-3">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Kindergarten</h5>
                </div>
                <div class="my-2 w-max mx-auto mt-4">
                   <a href="{{route('study-level')}}">
                    <button
                    class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                    More</button>
                   </a>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden hover:rotate-3">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Primary School</h5>
                </div>
                <div class="my-2 w-max mx-auto mt-4">
                    <a href="{{route('study-level')}}">
                        <button
                        class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                        More</button>
                       </a>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden hover:rotate-3">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Secondary School</h5>
                </div>
                <div class="my-2 w-max mx-auto mt-4">
                    <a href="{{route('study-level')}}">
                        <button
                        class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                        More</button>
                       </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
