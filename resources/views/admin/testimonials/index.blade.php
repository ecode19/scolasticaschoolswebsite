@extends('layouts.admin')
@section('title', 'Testimonials')
@section('content')

<section class="w-full p-4">
    <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
        <h2 class="text-2xl text-green-800">Testimonials Management</h2>

        <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                href="{{ route('admin.testimonials.create') }}"><i class="fa fa-plus mx-2"></i>New testimonial</a></button>
    </div>

    <div class="w-full overflow-x-auto my-4">
        @php
            $count = 1;
        @endphp
        <table class="w-full">
            <thead class="w-full bg-green-200 text-green-800">
                <tr>
                    <th class="p-2 text-lg font-semibold">sn</th>
                    <th class="p-2 text-lg font-semibold">Name</th>
                    <th class="p-2 text-lg font-semibold">title</th>
                    <th class="p-2 text-lg font-semibold">position</th>
                    <th class="p-2 text-lg font-semibold">Description</th>
                    <th class="p-2 text-lg font-semibold">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                <tr class="text-gray-600">
                    <td class="p-2 border border-gray-400">{{ $count++ }}</td>
                    <td class="p-2 border border-gray-400">{{$testimonial->name}}</td>
                    <td class="p-2 border border-gray-400">{{$testimonial->title}}</td>
                    <td class="p-2 border border-gray-400">{{$testimonial->position}}</td>
                    <td class="p-2 border border-gray-400">{!!Str::words($testimonial->description, 20, '...') !!}</td>
                    <td class="p-2 border border-gray-400">
                        <div class="flex items-center">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}"><button class="py-1 px-2 mx-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md"><i
                            class="fa fa-pen mx-2"></i>Edit</button></a>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="delete-btn py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i
                                    class="fa fa-trash mx-2"></i>Delete</button>
                        </form>
                        </div>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection
