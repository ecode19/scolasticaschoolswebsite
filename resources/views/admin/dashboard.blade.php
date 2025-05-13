@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <section class="w-full p-2">
        <div class="border-l-5 border-green-800 bg-green-50 flex items-center justify-between italic px-4">
            <h1 class="m-4 text-xl">Hello Admin, Welcome Again!</h1>
            <span id="current-date" class="italic"></span>
        </div>

        <div class="w-full my-4 flex flex-wrap p-4">
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-book-open"></i>
                        <span>Study Levels</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $studyLevels }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-book"></i>
                        <span>Subjects</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $subjects }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-pencil"></i>
                        <span>Learning Approaches</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $approaches }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-certificate"></i>
                        <span>Accreditations</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $accreditations }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-users"></i>
                        <span>Clubs</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $clubs }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-calendar"></i>
                        <span>News & Events</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $news }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-newspaper"></i>
                        <span>Blog Posts</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $blog }}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/4 my-2">
                <div class="w-11/12 mx-auto rounded-md">
                    <div class="flex items-center justify-between p-2 text-lg text-green-100 bg-green-800">
                        <i class="fa fa-users"></i>
                        <span>Staff</span>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-green-100 to-green-300 text-center">
                        <span class="text-4xl">{{ $staff + 5 }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const currentDate = document.getElementById('current-date')
        const date = new Date()
        const day = date.toLocaleDateString('en-US', {
            weekday: 'long'
        })
        const dayNumber = date.getDate()
        const month = date.toLocaleDateString('en-US', {
            month: 'long'
        })
        const year = date.getFullYear()
        currentDate.textContent = `${day} ${dayNumber} ${month}, ${year}`
    </script>
@endsection
