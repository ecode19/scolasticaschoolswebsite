@extends('layouts.guest')
@section('title', 'Curriculum')
@section('content')

<section class="w-11/12 mx-auto my-4 p-4">
    <div class="w-max">
        <h1 class="oswald text-4xl text-green-900">Our Curriculum</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-full my-4">
        <p class="defaultText text-justify text-lg">At Scolastica Secondary School, we are committed to providing a comprehensive and structured academic experience that nurtures intellectual curiosity, critical thinking, and practical skills. Our curriculum follows the Tanzanian education system (NECTA) and incorporates modern learning methodologies to prepare students for future academic and career success.</p>
        <p class="defaultText text-justify text-lg my-2">Our curriculum is designed to provide a balanced education that nurtures both academic excellence and personal development. From foundational skills in early childhood education to advanced subject combinations at A-Level, our structured approach ensures that students are well-prepared for national examinations and beyond.</p>
    </div>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
            <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Kindergarten</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify text-lg text-gray-800 my-4">At the kindergarten level, we create a joyful and engaging learning environment where children develop essential skills through interactive play and structured activities. Our focus is on building strong literacy and numeracy foundations while fostering creativity and curiosity.</p>
            <div class="w-full">
                <ul class="defaultText merryFont text-lg list-disc mx-6">
                    <li class="my-2">Play-based learning activities</li>
                    <li class="my-2">Literacy and numeracy development</li>
                    <li class="my-2">Social and emotional skills</li>
                    <li class="my-2">Creative arts and music</li>
                </ul>

            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-2">
            <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-1">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Primary Education</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify text-lg text-gray-800 my-4">In primary education, we emphasize a strong academic foundation while nurturing creativity and independent thinking. Our students engage in a broad range of subjects, equipping them with the knowledge and skills needed for secondary education and real-world application.</p>
            <div class="w-full">
                <ul class="defaultText merryFont text-lg list-disc mx-6">
                    <li class="my-2">Structured learning with subject-based education</li>
                    <li class="my-2">Development of problem-solving</li>
                    <li class="my-2">Communication</li>
                    <li class="my-2">Leadership skills</li>
                </ul>

            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
            <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Ordinary Level (Form 1 - 4)</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify text-lg text-gray-800 my-4">At the O-Level stage, students begin to specialize in key academic areas while developing analytical and problem-solving skills. We provide a strong focus on national examination preparation while ensuring students explore their interests through elective subjects.</p>
            <div class="w-full">
                <ul class="defaultText merryFont text-lg list-disc mx-6">
                    <li class="my-2">Introduction to specialized subjects in preparation for national exams</li>
                    <li class="my-2">Application of scientific principles</li>
                    <li class="my-2">Technology integration</li>
                    <li class="my-2">Career exploration</li>
                </ul>

            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-2">
            <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-1">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Advanced Level (Form 5 - 6)</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify text-lg text-gray-800 my-4">Our A-Level curriculum is designed to equip students with advanced knowledge and critical thinking skills necessary for higher education and professional careers. We offer specialized subject combinations that align with university entry requirements and career aspirations.</p>
            <div class="w-full">
                <ul class="defaultText merryFont text-lg list-disc mx-6">
                    <li class="my-2">Specialized subject combinations based on career paths (Science, Business, Arts, etc.)</li>
                    <li class="my-2">Preparation for university education</li>
                    <li class="my-2">Preparation for university professional careers</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
            <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
        </div>
        <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
            <div class="w-fit">
                <h1 class="oswald text-4xl text-green-900">Extracurricular Learning & Special Programs</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <p class="defaultText text-justify text-lg text-gray-800 my-4">Beyond the standard curriculum, we offer a variety of extracurricular learning opportunities to ensure students gain practical skills, leadership abilities, and global perspectives. Our STEM and entrepreneurship programs empower students to innovate and solve real-world challenges.</p>
            <div class="w-full">
                <ul class="defaultText merryFont text-lg list-disc mx-6">
                    <li class="my-2">STEM, ICT, entrepreneurship, and leadership development</li>
                    <li class="my-2">Engagement in research projects</li>
                    <li class="my-2">Science fairs</li>
                    <li class="my-2">Cultural exchange programs</li>
                </ul>

            </div>
        </div>
    </section>
</section>
@endsection
