@extends('layouts.guest')
@section('title', 'Subjects Offered')
@section('content')

<section class="w-11/12 mx-auto my-4 p-4">
    <div class="w-max">
        <h1 class="oswald text-4xl text-green-900">Subjects Offered</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="w-full my-4">
        <p class="defaultText text-justify text-lg">Our school offers a wide range of subjects across different educational levels, providing students with the flexibility to explore their academic strengths and interests. Below is a detailed breakdown of the subjects taught at Scolastica Secondary School.</p>
    </div>

    {{-- pre - std 2 --}}
    <div class="w-full">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Pre-Primary - Std 2</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex md:flex-row flex-wrap items-stretch mt-8">
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/arithmetics.png') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Arithmetics</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/writing.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Writing</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/reading.png') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Reading</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/healthcare.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Healthcare and environment</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/sports&arts.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Developing sports and Arts</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Std 3-7 --}}
    <div class="w-full my-4 py-4">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Std 3 - Std 7 & O-level</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex flex-wrap mt-8">
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/english.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">English</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/kiswahili.png') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Kiswahili</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/math.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Mathematics</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/science.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Science and Technology</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/social.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Social studies</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/civics&morals.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Civics and morals</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/vocational.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Vocational skills</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/history.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">History</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/geography.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Geography</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/sports&arts.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Developing Arts</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- O-level --}}
     <div class="w-full my-4 py-4">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">More for O-level (Form 1 - 4)</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex flex-wrap mt-8">
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/biology.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Biology</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/physics.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Physics</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/chemistry.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Chemistry</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/computer.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Computer</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/commerce.png') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Commerce</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/bookkeeping.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Book Keeping</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/literature.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">Literature</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      {{-- O-level --}}
      <div class="w-full my-4 py-4">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">A-level (Form 1 - 4)</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex flex-wrap mt-8">
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/biology.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">PCB</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/math.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">PCM</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/chemistry.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">CBG</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/economics.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">EGM</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/accountancy.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">ECA</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/history.jfif') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">HGE</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden relative group">
                        <img src={{ asset('images/subjects/english.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                        <div class="dark-overlay">
                            <div class="center-div p-2">
                                    <h6 class="merryFont text-xl text-white hover:text-green-400 text-center">HGL</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
