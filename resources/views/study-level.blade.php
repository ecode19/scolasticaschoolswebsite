@extends('layouts.guest')
@section('title', 'Study Level')
@section('content')


<div class="w-full lg:h-[500px] overflow-hidden relative">
    <img src={{ asset('images/school_library2.jpg') }} alt="" class="w-full object-cover">
    <div class="dark-overlay">
        <div class="center-div">
            <div class="text-white text-center">
                <h1 class="oswald text-3xl md:text-6xl uppercase text-green-300">Kindergarten</h1>
            </div>
        </div>
    </div>
</div>

<section class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-1 md:order-1">
        <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
    </div>
    <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-2 md:order-2">
        <div class="w-fit">
            <h1 class="oswald text-4xl text-green-900">Welcome to our Kindergarten</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>
        <p class="defaultText text-justify text-lg text-gray-800 my-4">Our Primary Education program (Standard 1 - 7) is designed to provide a well-rounded foundation in literacy, numeracy, science, and social studies. Through engaging and interactive lessons, students develop essential skills that prepare them for secondary education and beyond. The program follows the NECTA curriculum and emphasizes critical thinking, creativity, and discipline.</p>
    </div>
</section>

<section class="w-full p-12 text-center bg-no-repeat bg-center bg-cover bg-fixed bg-gray-600 bg-blend-multiply" style="background-image: url('{{ asset('images/kindergarten.jpg') }}')">
    <i class="fa fa-book-open text-4xl text-white"></i>
    <h1 class="oswald text-4xl text-white">Our Curriculum</h1>
    <div class="w-full md:w-10/12 mx-auto text-center">
        <p class="text-lg text-white my-4">At the kindergarten level, we create a joyful and engaging learning environment where children develop essential skills through interactive play and structured activities. Our focus is on building strong literacy and numeracy foundations while fostering creativity and curiosity.</p>
        <div class="w-full text-white">
            <ul class="merryFont text-lg mx-6">
                <li class="my-2">Play-based learning activities</li>
                <li class="my-2">Literacy and numeracy development</li>
                <li class="my-2">Social and emotional skills</li>
                <li class="my-2">Creative arts and music</li>
            </ul>
        </div>
    </div>
</section>

<section class="w-full md:w-11/12 mx-auto p-2 my-8">
        <div class="w-full">
            <div class="w-max">
                <h1 class="oswald text-4xl text-green-900">Subjects Offered</h1>
                <div class="w-2/5 border-2 border-green-800 mt-2"></div>
            </div>

            <p class="defaultText text-lg my-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt ducimus omnis ad quo! Veniam possimus quibusdam pariatur nostrum deserunt aspernatur, aliquid sed porro doloremque eos, delectus molestiae cum nemo maiores?
            </p>

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
</section>

<section class="w-full p-8">
    <div class="w-fit mx-4">
        <h1 class="oswald text-4xl text-green-900 text-wrap">Teaching & Learnig Approach</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>

    <div class="slider2 w-11/12 mx-auto my-4 py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3 my-2 border-2 border-orange-400">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Interactive lessons</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2 border-2 border-orange-400">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Hands-on experiments</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2 border-2 border-orange-400">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Group discussions</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 my-2 border-2 border-orange-400">
            <div class="w-11/12 mx-auto">
                <div class="w-full h-58 overflow-hidden">
                    <img src={{ asset('images/kindergarten.jpg') }} alt="level photo" class="object-cover w-full">
                </div>
                <div class="my-2">
                    <h5 class="text-green-800 text-center text-3xl my-2">Digital learning tools</h5>
                    <p class="defaultText text-lg text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam, explicabo ipsa dolorem fugit quia </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full p-12 text-center bg-green-200 my-4 md:my-8">
    <i class="fa fa-book-open text-4xl text-green-900"></i>
    <h1 class="oswald text-4xl text-green-900">Assessments & Examinations</h1>
    <div class="w-full md:w-10/12 mx-auto text-center">
        <p class="defaultText text-lg text-gray-800 my-4">Students undergo continuous assessments, quizzes, and mid-term evaluations to monitor their progress. National examinations are administered by the National Examinations Council of Tanzania (NECTA) at the end of Standard 4 and Standard 7. We provide exam preparation support to ensure students perform exceptionally</p>
    </div>
</section>

<section class="w-full md:w-11/12 mx-auto">
    <div class="w-fit">
        <h1 class="oswald text-4xl text-green-900">Co-Curricular Activities & Special Programs</h1>
        <div class="w-2/5 border-2 border-green-800 mt-2"></div>
    </div>
    <div class="slider3 w-full">
      <div class="w-full">
        <div class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                <div class="w-fit">
                    <h1 class="oswald text-4xl text-green-900">Clubs & Societies</h1>
                </div>
                <p class="defaultText text-justify text-lg text-gray-800 my-4">Students undergo continuous assessments, quizzes, and mid-term evaluations to monitor their progress. National examinations are administered by the National Examinations Council of Tanzania (NECTA) at the end of Standard 4 and Standard 7. We provide exam preparation support to ensure students perform exceptionally.</p>
            </div>
        </div>
      </div>
      <div class="w-full">
        <div class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                <div class="w-fit">
                    <h1 class="oswald text-4xl text-green-900">Sports & Physical Education</h1>
                </div>
                <p class="defaultText text-justify text-lg text-gray-800 my-4">Students undergo continuous assessments, quizzes, and mid-term evaluations to monitor their progress. National examinations are administered by the National Examinations Council of Tanzania (NECTA) at the end of Standard 4 and Standard 7. We provide exam preparation support to ensure students perform exceptionally.</p>
            </div>
        </div>
      </div>
      <div class="w-full">
        <div class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                <div class="w-fit">
                    <h1 class="oswald text-4xl text-green-900">Creative Arts & Music</h1>
                </div>
                <p class="defaultText text-justify text-lg text-gray-800 my-4">Students undergo continuous assessments, quizzes, and mid-term evaluations to monitor their progress. National examinations are administered by the National Examinations Council of Tanzania (NECTA) at the end of Standard 4 and Standard 7. We provide exam preparation support to ensure students perform exceptionally.</p>
            </div>
        </div>
      </div>
      <div class="w-full">
        <div class="w-full mx-auto p-2 flex flex-col md:flex-row my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 overflow-hidden order-2 md:order-1">
                <img src={{ asset('images/kindergarten.jpg') }} alt="students photo" class="w-full object-cover rounded-md">
            </div>
            <div class="w-full md:w-1/2 p-2 md:p-4 lg:p-8 order-1 md:order-2">
                <div class="w-fit">
                    <h1 class="oswald text-4xl text-green-900">Leadership & Entrepreneurship Training</h1>
                </div>
                <p class="defaultText text-justify text-lg text-gray-800 my-4">Students undergo continuous assessments, quizzes, and mid-term evaluations to monitor their progress. National examinations are administered by the National Examinations Council of Tanzania (NECTA) at the end of Standard 4 and Standard 7. We provide exam preparation support to ensure students perform exceptionally.</p>
            </div>
        </div>
      </div>
    </div>

</section>

<section class="w-full md:w-11/12 mx-auto p-2 my-8">
    <div class="w-full">
        <div class="w-max">
            <h1 class="oswald text-4xl text-green-900">Facilities & Learning Resources</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <p class="defaultText text-lg my-4">
            Our students have access to world-class learning facilities, including modern classrooms, well-equipped science labs, a digital learning center, and a well-stocked library. These resources ensure that students can explore their full academic potential.
        </p>

        <div class="w-full flex md:flex-row flex-wrap items-stretch mt-8">
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/school1.webp') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/school2.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/school3.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/school4.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/school_library.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/sports1.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/sports2.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/sports3.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/students1.png') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5 my-2 h-48 overflow-hidden">
                <div class="w-full px-2 mx-auto h-48 overflow-hidden">
                    <div class="w-full h-48 overflow-hidden group">
                        <img src={{ asset('images/students2.jpg') }} alt="level photo"
                            class="object-cover h-48 w-full transition duration-500 transform group-hover:scale-110">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
