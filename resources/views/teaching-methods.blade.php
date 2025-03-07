@extends('layouts.guest')
@section('title', 'Teaching Methods')
@section('content')


<div class="w-full lg:h-[500px] overflow-hidden relative">
    <img src={{ asset('images/school_library2.jpg') }} alt="" class="w-full object-cover">
    <div class="dark-overlay">
        <div class="center-div">
            <div class="text-white text-center">
                <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Teaching Methods</h1>
            </div>
        </div>
    </div>
</div>

<section class="w-full p-8">
    <div class="w-fit mx-4">
        <h1 class="oswald text-4xl text-green-900 text-wrap">Teaching & Learnig Approach</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-11/12 mx-auto my-4 py-4 flex flex-col flex-wrap md:flex-row">
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border-2 border-orange-400">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Interactive lessons</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border-2 border-orange-400">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Hands-on experiments</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border-2 border-orange-400">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Group discussions</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2">
            <div class="w-11/12 mx-auto border-2 border-orange-400">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Digital learning tools</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
