@extends('layouts.admin')
@section('title', 'Accreditations')
@section('content')

<section class="w-full p-4">
    <div class="w-full md:w-11/12 mx-auto flex items-center justify-between">
        <h2 class="text-2xl text-green-800">Accreditations Management</h2>

        <button class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><a
                href="{{ route('admin.accreditations.create') }}"><i class="fa fa-plus mx-2"></i>New Accreditation</a></button>
    </div>

    <div class="w-full overflow-x-auto my-4">
        @php
            $count = 1;
        @endphp
        <table class="w-full">
            <thead class="w-full bg-green-200 text-green-800">
                <tr>
                    <th class="p-2 text-lg font-semibold">sn</th>
                    <th class="p-2 text-lg font-semibold">Logo</th>
                    <th class="p-2 text-lg font-semibold">link</th>
                    <th class="p-2 text-lg font-semibold">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accreditations as $acc)
                <tr class="text-gray-600">
                    <td class="p-2 border border-gray-400">{{ $count++ }}</td>
                    <td class="p-2 border border-gray-400">
                        <img src="{{ asset('/storage/images/accreditations/' . $acc->logo) }}" alt="logo" class="w-20 h-20">
                    </td>
                    <td class="p-2 border border-gray-400"><a href="{{$acc->link}}">{{$acc->link}}</a></td>
                    <td class="p-2 border border-gray-400">
                        <form action="{{ route('admin.accreditations.destroy', $acc) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="delete-btn py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i
                                    class="fa fa-trash mx-2"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection
