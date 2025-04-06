@extends('layouts.admin')
@section('title', 'Subjects')
@section('content')

    <section class="w-full p-4">
        <h2 class="text-3xl text-green-800 my-4">Subject Details</h2>
        <div class="w-full p-2">
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Subject Name: </span>
                <p>{{ $subject->name }}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Description: </span>
                <p>{!! $subject->description !!}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Academic Level: </span>
                <p>{{ $academicLevel->name }}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Category: </span>
                <p>{{ $subject->category ?? '-' }}</p>
            </div>
            <div class="text-lg text-gray-600 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 my-2"><span
                    class="font-semibold">Status: </span>
                <p>{{ $subject->status ?? '-' }}</p>
            </div>
        </div>

        <div class="my-4 w-fit">
            <p class="text-lg text-gray-600 my-2 text-center">Primary Image</p>
            <div class="w-48 border-2 border-orange-600 rounded-md overflow-hidden h-48">
                <img src="{{ asset('/storage/images/subjects/' . $subject->primary_img) }}" alt="image"
                    class="object-cover h-full">
            </div>
        </div>

        <div class="w-fit mx-auto flex my-4">
            <a href="{{ route('admin.subjects.edit', $subject) }}"><button class="py-1 px-2 mx-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md"><i
                class="fa fa-pen mx-2"></i>Edit Subject</button></a>

            <form action="{{ route('admin.subjects.destroy', $subject) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete-btn py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i
                        class="fa fa-trash mx-2"></i>Delete Subject</button>
            </form>
        </div>

    </section>

@endsection
