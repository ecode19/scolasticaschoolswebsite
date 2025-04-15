@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

<div class="flex items-center justify-between p-2 my-2">
        <h1 class="text-3xl text-green-800">Manage News Events</h1>
        <a href="{{ route('admin.news.event.create') }}"
            class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-plus mx-2"></i> Add New</a>
    </div>

    <div class="w-full overflow-x-auto my-4 p-2">
        <table class="w-full">
            <thead class="w-full bg-green-200 text-green-800">
                <tr>
                    <th class="p-2 text-lg font-semibold">S/N</th>
                    <th class="p-2 text-lg font-semibold">Image</th>
                    <th class="p-2 text-lg font-semibold">Title</th>
                    <th class="p-2 text-lg font-semibold hidden md:table-cell">Type</th>
                    <th class="p-2 text-lg font-semibold hidden lg:table-cell">Content</th>
                    <th class="p-2 text-lg font-semibold">Date</th>
                    <th class="p-2 text-lg font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @if ($news_events->isNotEmpty())
                    @foreach ($news_events as $data)
                        <tr class="text-gray-600">
                            <td class="p-2 border border-gray-400">{{ $counter++ }}</td>
                            <td class="p-2 border border-gray-400">
                                <img src="{{ $data->image ? Storage::url($imagePath . $data->image) : asset('images/logo.png') }}"
                                    alt="News Image" class="w-16 h-16 object-cover rounded-md md:w-24 md:h-24">
                            </td>

                            <td class="p-2 border border-gray-400">{{ $data->title }}</td>
                            <td class="p-2 border border-gray-400 hidden md:table-cell">{{ $data->type }}</td>
                            <td class="p-2 border border-gray-400 hidden lg:table-cell">
                                {!! Str::limit($data->content, 50) !!} </td>
                            <td class="p-2 border border-gray-400">2022-01-01</td>
                            <td class="p-2 border border-gray-400">
                                <div class="flex space-x-1 items-center">
                                    <a href="{{ route('admin.news.event.edit', $data->id) }}"
                                        class="py-1 px-2 bg-orange-600 hover:bg-gray-700 text-white rounded-md">
                                        Edit
                                    </a>
                                    <!-- Delete Form -->
                                    <form action="{{route('admin.news.event.destroy', $data)}}" method="POST">
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
