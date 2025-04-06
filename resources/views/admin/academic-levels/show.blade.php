@extends('layouts.admin')
@section('title', 'Academic Levels')
@section('content')

    <section class="w-full p-4">
        <h2 class="text-3xl text-green-800 my-4">Academic Level Details</h2>
        <div class="w-full p-2">
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Level Name: </span>
                <p>{{ $academic_level->name }}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Description: </span>
                <p>{!! $academic_level->description !!}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Curriculum: </span>
                <p>{!! $academic_level->curriculum !!}</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row my-4">
            <div class="w-full md:w-1/3 ">
                <div class="w-11/12 mx-auto border-2 border-orange-600 rounded-md overflow-hidden h-60">
                    <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->primary_img) }}" alt="image"
                        class="object-cover h-full">
                </div>
                <p class="text-lg text-gray-600 my-2 text-center">Primary Image</p>
            </div>
            <div class="w-full md:w-1/3 ">
                <div class="w-11/12 mx-auto border-2 border-orange-600 rounded-md overflow-hidden h-60">
                    <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->image_2) }}" alt="image"
                        class="object-cover h-full">
                </div>
                <p class="text-lg text-gray-600 my-2 text-center">Banner image 1</p>
            </div>
            <div class="w-full md:w-1/3 ">
                <div class="w-11/12 mx-auto border-2 border-orange-600 rounded-md overflow-hidden h-60">
                    <img src="{{ asset('/storage/images/academic-levels/' . $academic_level->image_3) }}" alt="image"
                        class="object-cover h-full">
                </div>
                <p class="text-lg text-gray-600 my-2 text-center">Banner image 2</p>
            </div>
        </div>

        <div class="mx-2 my-2">
            <a href="{{ route('admin.academic-levels.edit', $academic_level) }}"><button
                    class="merryFont w-fit py-1 px-2 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-semibold rounded-md">Edit
                    Details</button></a>
        </div>

    </section>

@endsection
