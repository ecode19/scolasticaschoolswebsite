@extends('layouts.guest')
@section('title', 'Home')
@section('content')

    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/environment/environment-1.jpg') }} alt="" class="w-full object-cover">
        <div class="w-full">
            <div class="absolute bottom-10 left-10 transparent-bg">
                <div class="text-white text-center">
                    <h1 class="oswald text-3xl md:text-6xl uppercase text-green-200">Welcome to Scolastica Schools</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="w-full md:w-11/12 mx-auto p-2 my-8">
        <p class="font-semibold text-justify text-lg my-4 text-gray-800">Dear Esteemed Parents, Students, and the Scolastica
            Community,</p>
        <p class="text-justify text-lg text-gray-600">Education is the foundation upon which <b>great legacies are built, minds are ignited, and futures are shaped</b>. At Scolastica Schools, we are not merely educators—we are <b>architects of excellence, sculptors of character, and pioneers of boundless potential</b>. It is with profound honor and unwavering dedication that Scolastica, welcomes you to our institution where aspirations take flight, and every learner is nurtured to <b>lead, innovate, and excel.</b></p>
        <p class="text-justify text-lg text-gray-600 my-2">Spanning <b>Kindergarten, Primary, Secondary, and High
                School,</b> Scolastica Schools stands as a <b>pillar of academic distinction and holistic development</b>.
            Our approach transcends conventional learning, intertwining <b>intellectual rigor, character fortification, and
                a global perspective</b> to equip our students with the tools they need to navigate an ever-evolving world.
            At the heart of our institution lies a deep-seated commitment to excellence without compromise. We believe in
            fostering a learning environment where:
        </p>

        <div class="text-justify text-lg text-gray-600 my-2 flex items-center"><i class="fa fa-check mr-2"></i>
            <p><b>Every student is inspired to push boundaries- </b>not just to succeed, but to redefine success.</p>
        </div>
        <div class="text-justify text-lg text-gray-600 my-2 flex items-center"><i class="fa fa-check mr-2"></i>
            <p><b>Innovation and critical thinking are second nature, </b>enabling learners to adapt and lead in an
                increasingly dynamic world.</p>
        </div>
        <div class="text-justify text-lg text-gray-600 my-2 flex items-center"><i class="fa fa-check mr-2"></i>
            <p><b>Integrity, resilience, and self-confidence </b>are cultivated alongside academic achievement, ensuring our
                students emerge as well-rounded, principled leaders.</p>
        </div>
        <div class="text-justify text-lg text-gray-600 my-2 flex items-center"><i class="fa fa-check mr-2"></i>
            <p><b>A culture of collaboration and mutual respect </b>flourishes, empowering both educators and students to
                learn from one another in a spirit of unity and shared ambition.</p>
        </div>

        <p class="text-justify text-lg text-gray-600 my-2">We take immense pride in our team of <b>visionary
                educators</b>—mentors who go beyond teaching to <b>ignite curiosity, instil discipline, and cultivate a
                lifelong passion for discovery</b>. Together with our dedicated parents and stakeholders, we forge a
            powerful alliance that transforms dreams into realities.
        </p>
        <p class="text-justify text-lg text-gray-600 my-2">As you embark on this journey with us, we invite you to
            experience the Scolastica difference—where potential is nurtured, excellence is expected, and success is not
            just an outcome, but a way of life.
        </p>
        <p class="text-justify text-lg text-gray-600 my-4">Welcome to Scolastica Schools—Where Brilliance Begins, and
            Greatness is Forged.
        </p>
        <p class="text-justify text-lg text-gray-600 my-2 font-bold">With regards,.</p>
        <p class="text-justify text-lg text-gray-600 my-2 font-bold">Principal</p>
        <p class="text-justify text-lg text-gray-600 my-2 font-bold">Scolastica Schools</p>
    </section>

@endsection
