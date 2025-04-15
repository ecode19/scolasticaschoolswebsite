@extends('layouts.admin')
@section('title', 'Images')
@section('content')

    <section class="w-full p-4">
        <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
            <h2 class="text-2xl text-green-800">Home Banner Images Management</h2>

            <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                    href="{{ route('admin.image.create') }}"><i class="fa fa-plus mx-2"></i>New
                    image</a></button>
        </div>

        <div class="w-full p-2 flex flex-col md:flex-row flex-wrap">
            @foreach ($images as $image)
            <div class="w-full md:w-1/2 my-2">
                <div class="w-11/12 mx-auto h-60 overflow-hidden">
                    <img src="{{ asset('/storage/images/home-banners/' . $image->image) }}" alt="image"
                        class="w-full h-full object-cover">
                </div>
                <div class="w-fit mx-auto flex items-center my-2">
                    <a href="{{ route('admin.image.edit', $image) }}"><button
                            class="py-1 px-2 mx-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md"><i
                                class="fa fa-pen mx-2"></i>Edit</button></a>
                    <form action="{{ route('admin.image.destroy', $image) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i
                                class="fa fa-trash mx-2"></i>Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection
