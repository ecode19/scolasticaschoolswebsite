@extends('layouts.admin')
@section('title', 'Subjects')
@section('content')

    <section class="w-full p-4">
        <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
            <h2 class="text-2xl text-green-800">Subjects Management</h2>

            <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                    href="{{ route('admin.subjects.create') }}"><i class="fa fa-plus mx-2"></i>New Subject</a></button>
        </div>

        <div class="w-full overflow-x-auto my-4">
            @php
            $count = 1;
        @endphp
            <table class="w-full">
                <thead class="w-full bg-green-200 text-green-800">
                    <tr>
                        <th class="p-2 text-lg font-semibold">sn</th>
                        <th class="p-2 text-lg font-semibold">Subject name</th>
                        <th class="p-2 text-lg font-semibold">Desciption</th>
                        <th class="p-2 text-lg font-semibold">Academic Level</th>
                        <th class="p-2 text-lg font-semibold">Category</th>
                        <th class="p-2 text-lg font-semibold">Status</th>
                        <th class="p-2 text-lg font-semibold">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                         <tr class="text-gray-600">
                        <td class="p-2 border border-gray-400">{{ $count++ }}</td>
                        <td class="p-2 border border-gray-400">{{$subject->name}}</td>
                        <td class="p-2 border border-gray-400">{!!Str::words($subject->description, 20, '...') !!}</td>
                        <td class="p-2 border border-gray-400">{{$subject->academicLevel->name}}</td>
                        <td class="p-2 border border-gray-400">{{$subject->category->category}}</td>
                        <td class="p-2 border border-gray-400">{{$subject->status ?? '-'}}</td>
                        <td class="p-2 border border-gray-400"><a href="{{ route('admin.subjects.show', $subject) }}"><button class="merryFont w-fit py-1 px-2 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-semibold rounded-md">view</button></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>

    @endsection
