@extends('layouts.guest')
@section('title', 'Home')
@section('content')

    <div class="w-full lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/school4.jpg') }} alt="" class="w-full object-cover">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Scolastica Schools</h1>
                    <p class="text-lg md:text-2xl italic my-2 text-orange-200">Equal Education to All</p>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full md:w-11/12 mx-auto">

        {{-- Welcome --}}
        <section class="w-full p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                <img src={{ asset('images/students2.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                <div class="w-full">
                    <h1 class="oswald text-4xl text-green-900">Welcome to Scolastica Schools</h1>
                    <div class="w-2/5 border-2 border-green-800 mt-2"></div>
                </div>
                <p class="text-justify text-lg text-gray-800 my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Officia asperiores earum odit corrupti fuga delectus perferendis omnis doloribus accusamus temporibus,
                    architecto eveniet? Qui ratione sint tempora quisquam pariatur ab eius!
                    Odit esse omnis beatae animi doloribus amet culpa eos repellendus ullam similique! Distinctio aliquid
                    illo laborum velit debitis quas, odit, vitae repellendus quo, nisi dolorum rem modi voluptas! Minima,
                    suscipit.
                    Aliquam, delectus. Nihil, vero sapiente perspiciatis voluptatem architecto optio in obcaecati vitae
                    autem laudantium quasi, qui odio magni consequuntur aliquam voluptates quis provident, omnis maxime
                    blanditiis pariatur ut ipsum nisi.</p>
            </div>
        </section>

        {{-- Stats --}}
        <section class="w-full md:w-11/12 mx-auto p-2 flex flex-wrap items-center">
            <div class="w-full md:w-1/2 lg:w-1/4 my-2">
                <div
                    class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-sm shadow-orange-300 rounded-md  bg-gradient-to-br from-green-50 to-green-200">
                    <span class="text-3xl text-green-900">500+</span>
                    <span class="mt-2 text-xl  text-orange-700">Students</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-2">
                <div
                    class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-sm shadow-orange-300 rounded-md  bg-gradient-to-br from-green-50 to-green-200">
                    <span class="text-3xl text-green-900">50</span>
                    <span class="mt-2 text-xl  text-orange-700">Teachers</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-2">
                <div
                    class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-sm shadow-orange-300 rounded-md  bg-gradient-to-br from-green-50 to-green-200">
                    <span class="text-3xl text-green-900">95%</span>
                    <span class="mt-2 text-xl  text-orange-700">Pass Rate</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-2">
                <div
                    class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-sm shadow-orange-300 rounded-md  bg-gradient-to-br from-green-50 to-green-200">
                    <span class="text-3xl text-green-900">2005</span>
                    <span class="mt-2 text-xl  text-orange-700">Founded On</span>
                </div>
            </div>
        </section>

        {{-- Academic Levels --}}
        <section class="w-full my-2 md:my-10">
            <div class="w-max mx-4">
                <h1 class="oswald text-4xl text-green-900">Academic Levels</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>

            <div class="w-full flex flex-col md:flex-row mt-8">
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden hover:rotate-3">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">Kindergarten</h5>
                        </div>
                        <div class="my-2 w-max mx-auto mt-4">
                            <button
                                class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden hover:rotate-3">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">Primary School</h5>
                        </div>
                        <div class="my-2 w-max mx-auto mt-4">
                            <button
                                class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-11/12 mx-auto">
                        <div class="w-full h-58 overflow-hidden hover:rotate-3">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                        </div>
                        <div class="my-2">
                            <h5 class="text-green-800 text-center text-3xl my-2">Secondary School</h5>
                        </div>
                        <div class="my-2 w-max mx-auto mt-4">
                            <button
                                class="merryFont w-fit py-1 px-4 border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-green-950 font-semibold rounded-full">Read
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- why choose --}}
        <section class="w-full my-2 md:my-8">
            <div class="w-max mx-4">
                <h1 class="oswald text-4xl text-green-900">Why Choose Scolastica Schools</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>
            <div class="w-full my-2 mx-4">
                <p class="text-lg text-justify my-4 text-gray-600">At Scolastica Secondary School, we are committed to
                    providing a world-class education that nurtures academic excellence, character development, and holistic
                    growth. Our dynamic learning environment, experienced educators, and state-of-the-art facilities ensure
                    that every student reaches their full potential. We take pride in fostering a culture of discipline,
                    innovation, and leadership that prepares students for a successful future</p>
            </div>

            <div class="w-full flex flex-col md:flex-row my-4 md:my-8">
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                        <i class="fa fa-book-open text-green-800 text-5xl my-2"></i>
                        <div>
                            <h5 class="merryFont text-center text-green-800 my-4 text-xl">Quality Education</h5>
                            <p class="text-center text-gray-800">Experienced and dedicated teachers ensuring high student
                                performance</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                        <i class="fa fa-building text-green-800 text-5xl my-2"></i>
                        <div>
                            <h5 class="merryFont text-center text-green-800 my-4 text-xl">Modern Learning Facilities</h5>
                            <p class="text-center text-gray-800">Well-stocked library with books, e-resources, and research
                                materials</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                        <i class="fa fa-computer text-green-800 text-5xl my-2"></i>
                        <div>
                            <h5 class="merryFont text-center text-green-800 my-4 text-xl">ICT and Digital Learning</h5>
                            <p class="text-center text-gray-800">Computer-based learning integrated into the curriculum</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/4 my-2">
                    <div class="w-11/12 mx-auto flex flex-col items-center bg-green-50 hover:bg-green-100 p-2 h-full">
                        <i class="fa fa-hands-praying text-green-800 text-5xl my-2"></i>
                        <div>
                            <h5 class="merryFont text-center text-green-800 my-4 text-xl">Moral & Ethical Values</h5>
                            <p class="text-center text-gray-800">Emphasis on respect, teamwork, and social responsibility
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- News & Highlights --}}
        <section class="w-full my-2 md:my-8 md:py-4">
            <div class="w-max mx-4">
                <h1 class="oswald text-4xl text-green-900">News & School highlights</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>

            <div class="w-full flex flex-col md:flex-row mt-8">
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-full px-2 mx-auto">
                        <div class="w-full h-58 overflow-hidden relative group">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo"
                                class="object-cover w-full transition duration-500 transform group-hover:scale-110">
                            <div class="overlay">
                                <div class="absolute bottom-10 p-2">
                                    <span class="text-orange-300">Kindergarten</span>
                                    <a href="#">
                                        <h6 class="merryFont text-2xl text-white hover:text-green-200">Opening of Sports
                                            and Games Competitions</h6>
                                    </a>
                                    <span class="text-green-200">21-2-2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-full px-2 mx-auto">
                        <div class="w-full h-58 overflow-hidden relative group">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo"
                                class="object-cover w-full transition duration-500 transform group-hover:scale-110">
                            <div class="overlay">
                                <div class="absolute bottom-10 p-2">
                                    <span class="text-orange-300">Kindergarten</span>
                                    <a href="#">
                                        <h6 class="merryFont text-2xl text-white hover:text-green-200">Opening of Sports
                                            and Games Competitions</h6>
                                    </a>
                                    <span class="text-green-200">21-2-2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 my-2">
                    <div class="w-full px-2 mx-auto">
                        <div class="w-full h-58 overflow-hidden relative group">
                            <img src={{ asset('images/kindergarten.jpg') }} alt="level photo"
                                class="object-cover w-full transition duration-500 transform group-hover:scale-110">
                            <div class="overlay">
                                <div class="absolute bottom-10 p-2">
                                    <span class="text-orange-300">Kindergarten</span>
                                    <a href="#">
                                        <h6 class="merryFont text-2xl text-white hover:text-green-200">Opening of Sports
                                            and Games Competitions</h6>
                                    </a>
                                    <span class="text-green-200">21-2-2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- testimonials --}}
    <section class="w-full p-8 bg-green-100">
        <div class="w-fit mx-4">
            <h1 class="oswald text-4xl text-green-900 text-wrap">What they say about Scolastica Schools</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                    <div class="flex">
                        <div class="w-fit">
                            <img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-16 h-16 rounded-full">
                        </div>
                        <div class="flex flex-col mx-3">
                            <span class="text-lg text-green-900">John Doe</span>
                            <span class="text-orange-800 italic">Alumni</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-lg text-gray-800 text-center my-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, et, sapiente nam illum dicta sunt nihil, earum ipsam veritatis sed adipisci. At delectus quam voluptas itaque maiores inventore molestiae"</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                    <div class="flex">
                        <div class="w-fit">
                            <img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-16 h-16 rounded-full">
                        </div>
                        <div class="flex flex-col mx-3">
                            <span class="text-lg text-green-900">John Doe</span>
                            <span class="text-orange-800 italic">Student</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-lg text-gray-800 text-center my-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, et, sapiente nam illum dicta sunt nihil, earum ipsam veritatis sed adipisci. At delectus quam voluptas itaque maiores inventore molestiae"</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto border border-green-400 p-2 rounded-lg">
                    <div class="flex">
                        <div class="w-fit">
                            <img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-16 h-16 rounded-full">
                        </div>
                        <div class="flex flex-col mx-3">
                            <span class="text-lg text-green-900">John Doe</span>
                            <span class="text-orange-800 italic">Parent</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-lg text-gray-800 text-center my-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, et, sapiente nam illum dicta sunt nihil, earum ipsam veritatis sed adipisci. At delectus quam voluptas itaque maiores inventore molestiae"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-11/12 mx-auto my-4">
        <div class="w-max mx-4">
            <h1 class="oswald text-4xl text-green-900">Accreditations</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="slider w-full py-4 my-4 flex">
            <div class="w-1/4 my-2 rounded-full px-4"><img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-8/12 mx-auto rounded-full"></div>
            <div class="w-1/4 my-2 rounded-full px-4"><img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-8/12 mx-auto rounded-full"></div>
            <div class="w-1/4 my-2 rounded-full px-4"><img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-8/12 mx-auto rounded-full"></div>
            <div class="w-1/4 my-2 rounded-full px-4"><img src={{asset('images/kindergarten.jpg')}} alt="photo" class="w-8/12 mx-auto rounded-full"></div>
        </div>
    </section>
@endsection
