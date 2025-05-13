@extends('layouts.guest')
@section('title', 'FAQs')
@section('content')

    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-fit mb-4">
            <h1 class="oswald text-2xl md:text-4xl text-wrap text-green-900">Frequently Asked Questions (FAQs)</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full mx-auto bg-white p-6 rounded-xl shadow-md">
            <div class="space-y-4" id="faq-container">
                @foreach ($faqs as $faq)
                    <div class="faq-item border-b pb-3 cursor-pointer">
                        <div class="question md:text-lg font-medium text-gray-800 flex justify-between items-center">
                            <span class="text-green-950">{{ $faq->question }}</span>
                            <span class="indicator text-gray-400">+</span>
                        </div>
                        <div class="answer mt-2 ml-4 text-gray-600 hidden">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
