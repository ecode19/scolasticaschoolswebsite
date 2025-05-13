@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

<div class="flex items-center justify-between p-2 my-2">
        <h1 class="text-3xl text-green-800">Manage School staff</h1>
        <a href="{{ route('admin.staff.create') }}" class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><i
                class="fa fa-plus mx-2"></i>New</a>
    </div>
    <div class="w-full p-2 overflow-x-auto">
        <table class="w-full">
            <thead class="w-full bg-green-200 text-green-800">
                <tr>
                    <th class="p-2 text-lg font-semibold">S/N</th>
                    <th class="p-2 text-lg font-semibold">Photo</th>
                    <th class="p-2 text-lg font-semibold">Name</th>
                    <th class="p-2 text-lg font-semibold">Gender</th>
                    <th class="p-2 text-lg font-semibold hidden md:table-cell">Teaching Level</th>
                    <th class="p-2 text-lg font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @if ($staff->isNotEmpty())
                    @foreach ($staff as $member)
                        <tr class="text-gray-600">
                            <td class="p-2 border border-gray-400">{{ $counter++ }}</td>
                            <td class="p-2 border border-gray-400">
                                <img src="{{ asset('/storage/images/staff/profile/' . $member->profile_picture) }}" alt="Staff profile"
                                    class="w-16 h-16 object-cover rounded-md md:w-24 md:h-24">
                            </td>

                            <td class="p-2 border border-gray-400">{{ $member->first_name }} {{ $member->last_name }}</td>
                            <td class="p-2 border border-gray-400">{{ $member->gender }}</td>

                            <td class="p-2 border border-gray-400 hidden lg:table-cell">
                                {!! Str::limit($member->bio, 50) !!} </td>
                            <td class="p-2 border border-gray-400">
                                <div class="flex items-center space-x-1">
                                    <a href="{{ route('admin.staff.edit', $member->id) }}"
                                        class="py-1 px-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md">
                                        Edit
                                    </a>
                                    <!-- Delete Form -->
                                    <form action="{{ route('admin.staff.destroy', $staff) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="delete-btn py-1 px-2 bg-red-700 hover:bg-gray-700 text-white rounded-md">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
