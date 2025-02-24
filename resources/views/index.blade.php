@extends('layouts.guest')
@section('title', 'Home')
@section('content')

    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{asset('images/school4.jpg')}} alt="" class="w-full object-cover">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Scolastica Schools</h1>
                    <p class="text-lg md:text-2xl italic my-2 text-orange-200">Equal Education to All</p>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full md:w-11/12 mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
            <img src={{asset('images/students2.jpg')}} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
            <div class="w-full">
                <h1 class="oswald text-4xl text-green-900">Welcome to Scolastica Schools</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="text-justify text-lg text-gray-800 my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia asperiores earum odit corrupti fuga delectus perferendis omnis doloribus accusamus temporibus, architecto eveniet? Qui ratione sint tempora quisquam pariatur ab eius!
            Odit esse omnis beatae animi doloribus amet culpa eos repellendus ullam similique! Distinctio aliquid illo laborum velit debitis quas, odit, vitae repellendus quo, nisi dolorum rem modi voluptas! Minima, suscipit.
            Aliquam, delectus. Nihil, vero sapiente perspiciatis voluptatem architecto optio in obcaecati vitae autem laudantium quasi, qui odio magni consequuntur aliquam voluptates quis provident, omnis maxime blanditiis pariatur ut ipsum nisi.</p>
        </div>
    </section>

    <section class="w-full md:w-11/12 mx-auto p-2">
        <div class="w-1/5 py-2 px-4">
            <span class="text-xl">500+</span>
            <span class="mt-2 text-lg">Students</span>
        </div>
    </section>
@endsection
