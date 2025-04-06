@extends('layouts.admin')
@section('title', 'Academic Levels')
@section('content')

    <section class="w-full p-4">
        <div class="w-full md:w-11/12 mx-auto">
            <h2 class="text-2xl text-green-800">Academic Levels management</h2>
        </div>

        <div class="w-full overflow-x-auto my-4">
            <table class="w-full">
                <thead class="w-full bg-green-200 text-green-800">
                    <tr>
                        <th class="p-2 text-lg font-semibold">sn</th>
                        <th class="p-2 text-lg font-semibold">level name</th>
                        <th class="p-2 text-lg font-semibold">desciption</th>
                        <th class="p-2 text-lg font-semibold">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($academicLevels as $academic_level)
                         <tr class="text-gray-600">
                        <td class="p-2 border border-gray-400">1</td>
                        <td class="p-2 border border-gray-400">{{$academic_level->name}}</td>
                        <td class="p-2 border border-gray-400">{!!Str::words($academic_level->description, 20, '...') !!}</td>
                        <td class="p-2 border border-gray-400"><a href="{{ route('admin.academic-levels.show', $academic_level) }}"><button class="merryFont w-fit py-1 px-2 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-semibold rounded-md">view</button></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>

    @endsection
