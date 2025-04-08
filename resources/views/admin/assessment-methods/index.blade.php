@extends('layouts.admin')
@section('title', 'Assessment Methods')
@section('content')

<section class="w-full p-4">
    <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
        <h2 class="text-2xl text-green-800">Assessment Methods Management</h2>

        <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                href="{{ route('admin.assessment-method.create') }}"><i class="fa fa-plus mx-2"></i>New Method</a></button>
    </div>

    <div class="w-full overflow-x-auto my-4">
        @php
            $count = 1;
        @endphp
        <table class="w-full">
            <thead class="w-full bg-green-200 text-green-800">
                <tr>
                    <th class="p-2 text-lg font-semibold">sn</th>
                    <th class="p-2 text-lg font-semibold">Method Name</th>
                    <th class="p-2 text-lg font-semibold">Description</th>
                    <th class="p-2 text-lg font-semibold">Academic Level</th>
                    <th class="p-2 text-lg font-semibold">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($methods as $method)
                <tr class="text-gray-600">
                    <td class="p-2 border border-gray-400">{{ $count++ }}</td>
                    <td class="p-2 border border-gray-400">{{$method->name}}</td>
                    <td class="p-2 border border-gray-400">{!!Str::words($method->description, 20, '...') !!}</td>
                        <td class="p-2 border border-gray-400">{{$method->academicLevel->name}}</td>
                    <td class="p-2 border border-gray-400">
                        <div class="flex items-center">
                        <a href="{{ route('admin.assessment-method.edit', $method) }}"><button class="py-1 px-2 mx-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md"><i
                            class="fa fa-pen mx-2"></i>Edit</button></a>
                        <form action="{{ route('admin.assessment-method.destroy', $method) }}" method="POST">
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
