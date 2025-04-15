@extends('layouts.admin')
@section('title', 'Images')
@section('content')

<section class="w-full p-4">
    <form action="{{ route('admin.image.update', $image) }}" method="POST" enctype="multipart/form-data"
        class="w-full md:w-10/12 mx-auto p-2 bg-green-100">
        @csrf
        @method('PUT')
        <h2 class="text-2xl text-center text-green-800 my-4">Update Image</h2>
        <div class="w-full flex flex-col md:p-4">
            <label for="image" class="w-full text-lg font-semibold text-gray-600">Home Banner Image:</label>
            <input type="file" name="image"
                class="w-full md:w-10/12 p-2 focus:outline-none border border-green-600 rounded-md">
            @error('image')
                <p class="text-lg text-red-600 my-2">{{ $message }}</p>
            @enderror

            <div class="w-full md:w-2/4 mx-auto h-64 my-4">
                <img src="{{ asset('/storage/images/home-banners/' . $image->image) }}" alt="Level image" class="w-full rounded-md object-cover h-full">
            </div>
        </div>

        <div class="w-fit mx-auto my-4">
            <button class="py-1 px-2 text-lg bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                    class="fa fa-pen mx-2"></i>update image</button>
        </div>
    </form>

</section>

@endsection
