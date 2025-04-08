@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <h1 class="text-3xl text-green-800 mt-6 p-4">Manage News Events</h1>
    <div class="flex justify-end px-10 py-4">
        <a href="{{ route('admin.news.event.create') }}"
            class="py-1 px-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-plus mx-2"></i> Add New</a>
    </div>
    {{-- success message --}}
    <div x-data="{
        showMessage: {{ json_encode(session('success') || session('error')) }},
        message: '{{ session('success') ?? session('error') }}'
    }" x-init="if (showMessage) { setTimeout(() => showMessage = false, 5000) }" class="fixed top-0 right-0 p-6 z-50">

        @if (session('success'))
            <div x-show="showMessage" x-transition:enter="transition transform ease-out duration-300"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition transform ease-in duration-300" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-4 w-80">
                <strong class="font-semibold">{{ session('success') }}</strong>
                <button @click="showMessage = false" class="ml-auto text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button> 
            </div>
        @elseif (session('error'))
            <div x-show="showMessage" x-transition:enter="transition transform ease-out duration-300"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition transform ease-in duration-300" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-4 w-80">
                <strong class="font-semibold">{{ session('error') }}</strong>
                <button @click="showMessage = false" class="ml-auto text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <div class="w-full md:px-10 overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 text-sm">
            <thead>
                <tr class="bg-gray-200 text-gray-900">
                    <th class="py-2 px-4 text-left">S/N</th>
                    <th class="py-2 px-4 text-left">Image</th>
                    <th class="py-2 px-4 text-left">Title</th>
                    <th class="py-2 px-4 text-left hidden md:table-cell">Type</th>
                    <th class="py-2 px-4 text-left hidden md:table-cell">Status</th>
                    <th class="py-2 px-4 text-left hidden lg:table-cell">Content</th>
                    <th class="py-2 px-4 text-left">Date</th>
                    <th class="py-2 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @if ($news_events->isNotEmpty())
                    @foreach ($news_events as $data)
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-2 px-4">{{ $counter++ }}</td>
                            <td class="py-2 px-4">
                                <img src="{{ $data->image ? Storage::url($imagePath . $data->image) : asset('images/logo.png') }}"
                                    alt="News Image" class="w-16 h-16 object-cover rounded-md md:w-24 md:h-24">
                            </td>

                            <td class="py-2 px-4">{{ $data->title }}</td>
                            <td class="py-2 px-4 hidden md:table-cell">{{ $data->type }}</td>
                            <td class="py-2 px-4 hidden md:table-cell">
                                @if ($data->status == 'upcoming')
                                    <span
                                        class="py-1 px-2 bg-blue-700 hover:bg-blue-800 text-white rounded-md">Upcoming</span>
                                @elseif ($data->status == 'featured')
                                    <span
                                        class="py-1 px-2 bg-green-700 hover:bg-green-800 text-white rounded-md">Featured</span>
                                @else
                                    <span class="py-1 px-2 bg-red-700 hover:bg-red-800 text-white rounded-md">Past</span>
                                @endif

                            </td>
                            <td class="py-2 px-4 hidden lg:table-cell">
                                {!! Str::limit($data->content, 50) !!} </td>
                            <td class="py-2 px-4">2022-01-01</td>
                            <td class="py-2 px-4">
                                <div class="flex flex-col sm:flex-row justify-center items-center gap-3">
                                    <a href="{{ route('admin.news.event.edit', $data->id) }}"
                                        class="py-1 px-2 bg-green-700 hover:bg-green-800 text-white rounded-md">
                                        Edit
                                    </a>
                                    <!-- Delete Form -->
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure to delete?')"
                                            class="py-1 px-2 bg-red-700 hover:bg-red-800 text-white rounded-md">
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
