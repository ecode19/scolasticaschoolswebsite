@extends('layouts.guest')
@section('title', 'Tuition Fees')
@section('content')
    {{-- Hero Section --}}
    <section>
        <div class="relative flex justify-center items-center h-96 lg:h-[500px] overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/DSC_4687.jpg') }}" alt="Legacy Image" class="w-full h-full object-cover">
            </div>

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-gray-400 to-transparent opacity-50"></div>

            {{-- Text Content --}}
            <div class="relative text-center px-4 sm:px-8 rounded-2xl" data-aos="fade-left" data-aos-duration="2000">
                <h1
                    class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-tight text-transparent drop-shadow-md">
                    Affordable Education, Tailored for Your Future
                </h1>
                <h2 class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-md">
                    Transparent & Flexible Tuition Plans
                </h2>
            </div>
        </div>
    </section>

    {{-- fee cards --}}
    <section class="py-24 bg-gray-100">
        <div class="w-11/12 max-w-7xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-800 drop-shadow-sm">
                Transparent & Flexible Fee Structure
            </h2>
            <p class="text-lg md:text-xl text-gray-700 mt-4 max-w-3xl mx-auto">
                Quality education at affordable rates, with flexible payment plans and scholarship support.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <!-- Kindergarten -->
                <div
                    class="relative bg-white p-10 rounded-xl shadow-lg border-t-8 border-green-600 hover:shadow-2xl transition-all duration-300">
                    <span
                        class="absolute top-0 left-0 bg-green-600 text-white px-4 py-1 text-sm font-semibold rounded-tr-2xl rounded-bl-2xl shadow-md">
                        Nursery & KG
                    </span>
                    <h3 class="text-2xl font-bold text-green-700 mt-6">Kindergarten</h3>
                    <p class="text-gray-600 mt-2 italic">Laying a strong foundation for young learners.</p>
                    <ul class="mt-6 text-gray-700 text-left space-y-2">
                        <li><strong>Tuition:</strong> TZS 450,000 per term</li>
                        <li><strong>Meals:</strong> TZS 150,000 per term</li>
                        <li><strong>Uniform:</strong> TZS 100,000 (one-time)</li>
                        <li><strong>Total Estimate:</strong> <span class="text-green-700 font-semibold">TZS
                                700,000/term</span></li>
                    </ul>
                </div>

                <!-- Primary -->
                <div
                    class="relative bg-white p-10 rounded-xl shadow-lg border-t-8 border-blue-600 hover:shadow-2xl transition-all duration-300">
                    <span
                        class="absolute top-0 left-0 bg-blue-600 text-white px-4 py-1 text-sm font-semibold rounded-tr-2xl rounded-bl-2xl shadow-md">
                        Std I - VII
                    </span>
                    <h3 class="text-2xl font-bold text-blue-700 mt-6">Primary School</h3>
                    <p class="text-gray-600 mt-2 italic">Building character and knowledge.</p>
                    <ul class="mt-6 text-gray-700 text-left space-y-2">
                        <li><strong>Tuition:</strong> TZS 600,000 per term</li>
                        <li><strong>Boarding:</strong> TZS 400,000 per term</li>
                        <li><strong>Books & Materials:</strong> TZS 150,000 annually</li>
                        <li><strong>Total Estimate:</strong> <span class="text-blue-700 font-semibold">TZS
                                1,000,000/term</span></li>
                    </ul>
                </div>

                <!-- Secondary -->
                <div
                    class="relative bg-white p-10 rounded-xl shadow-lg border-t-8 border-red-600 hover:shadow-2xl transition-all duration-300">
                    <span
                        class="absolute top-0 left-0 bg-red-600 text-white px-4 py-1 text-sm font-semibold rounded-tr-2xl rounded-bl-2xl shadow-md">
                        Form I - VI
                    </span>
                    <h3 class="text-2xl font-bold text-red-700 mt-6">Secondary School</h3>
                    <p class="text-gray-600 mt-2 italic">Preparing students for national & global success.</p>
                    <ul class="mt-6 text-gray-700 text-left space-y-2">
                        <li><strong>Tuition:</strong> TZS 900,000 per term</li>
                        <li><strong>Boarding:</strong> TZS 500,000 per term</li>
                        <li><strong>National Exam Fees:</strong> TZS 100,000 annually</li>
                        <li><strong>Total Estimate:</strong> <span class="text-red-700 font-semibold">TZS
                                1,400,000/term</span></li>
                    </ul>
                </div>

                <!-- A-Level -->
                <div
                    class="relative bg-white p-10 rounded-xl shadow-lg border-t-8 border-purple-600 hover:shadow-2xl transition-all duration-300">
                    <span
                        class="absolute top-0 left-0 bg-purple-600 text-white px-4 py-1 text-sm font-semibold rounded-tr-2xl rounded-bl-2xl shadow-md">
                        Form V - VI
                    </span>
                    <h3 class="text-2xl font-bold text-purple-700 mt-6">A-Level</h3>
                    <p class="text-gray-600 mt-2 italic">Focused academic & career preparation.</p>
                    <ul class="mt-6 text-gray-700 text-left space-y-2">
                        <li><strong>Tuition:</strong> TZS 1,100,000 per term</li>
                        <li><strong>Boarding:</strong> TZS 550,000 per term</li>
                        <li><strong>Lab & Practical Fees:</strong> TZS 200,000 annually</li>
                        <li><strong>Total Estimate:</strong> <span class="text-purple-700 font-semibold">TZS
                                1,650,000/term</span></li>
                    </ul>
                </div>
            </div>

            <!-- Optional CTA -->
            <div class="mt-16">
                <p class="text-lg text-gray-700 font-semibold">
                    For a detailed breakdown of fees and payment plans, feel free to reach out to our admissions team.
                </p>
            </div>

        </div>
    </section>


    {{-- section --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-5xl font-bold text-center text-green-700">Flexible Installment & Payment Plans</h1>
            <p class="text-lg text-gray-600 text-center mt-4">
                We understand that every family has unique financial needs. To make tuition payments easier, Scolastica
                Schools offers flexible installment plans tailored to Tanzanian school terms.
            </p>

            <div class="flex justify-center items-center">
                {{-- table listing payment installment --}}
                <div class="mt-8 w-full">
                    <div
                        class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                        <table class="w-full text-left table-auto min-w-max">
                            <thead>
                                <tr>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                        <p class="block text-sm font-normal leading-none text-slate-500">
                                            Education Level
                                        </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                        <p class="block text-sm font-normal leading-none text-slate-500">
                                            Plan Type
                                        </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                        <p class="block text-sm font-normal leading-none text-slate-500">
                                            Payment Frequency
                                        </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                        <p class="block text-sm font-normal leading-none text-slate-500">
                                            Installments
                                        </p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Kindergarten -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Kindergarten
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Termly Plan
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Once per term
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            3 payments (per term)
                                        </p>
                                    </td>
                                </tr>

                                <!-- Primary -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Primary
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Termly Plan
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Once per term
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            3 payments (per term)
                                        </p>
                                    </td>
                                </tr>

                                <!-- Secondary -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Secondary
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Termly Plan
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Once per term
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            3 payments (per term)
                                        </p>
                                    </td>
                                </tr>

                                <!-- A-Level -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            A-Level
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Termly Plan
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Once per term
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            3 payments (per term)
                                        </p>
                                    </td>
                                </tr>

                                <!-- Annual -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Annually
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Once per year
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            1 payment
                                        </p>
                                    </td>
                                </tr>

                                <!-- Monthly -->
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Monthly Plan
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            Every month
                                        </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        <p class="block text-sm text-slate-800">
                                            10 payments
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why choose an installation type --}}
    <section class="py-20 bg-white">
        <div class="w-11/12 max-w-8xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-800">Why Choose an Installment Plan?</h2>
            <p class="text-gray-600 text-lg mt-3 max-w-2xl mx-auto">Flexible payment solutions that make quality education
                more accessible for every student and family.</p>

            <div class="mt-12 flex flex-col md:flex-row justify-center items-stretch gap-8" data-aos="fade-up"
                data-aos-duration="2000">
                <!-- Feature 1 -->
                <div
                    class="bg-gradient-to-tr from-green-50 to-white rounded-2xl border border-green-200 shadow-md hover:shadow-xl transition duration-300 w-full md:w-1/3 p-8 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-green-700 text-white flex items-center justify-center rounded-full text-3xl">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <h3 class="mt-5 text-2xl font-semibold text-green-900">Budget-Friendly</h3>
                    <p class="mt-2 text-gray-600 italic">Spread tuition costs over time without financial strain.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-gradient-to-tr from-red-50 to-white rounded-2xl border border-red-200 shadow-md hover:shadow-xl transition duration-300 w-full md:w-1/3 p-8 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-red-700 text-white flex items-center justify-center rounded-full text-2xl">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <h3 class="mt-5 text-2xl font-semibold text-red-900">No Late Fees</h3>
                    <p class="mt-2 text-gray-600 italic">Stay on track with scheduled payments without penalties.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-gradient-to-tr from-green-100 to-white rounded-2xl border border-green-200 shadow-md hover:shadow-xl transition duration-300 w-full md:w-1/3 p-8 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-green-800 text-white flex items-center justify-center rounded-full text-2xl">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <h3 class="mt-5 text-2xl font-semibold text-green-900">Custom Plans</h3>
                    <p class="mt-2 text-gray-600 italic">Tailored options available — reach out to discuss your needs.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- How to make payment --}}
    <section class="py-16 bg-gray-50">
        <div class="w-11/12  mx-auto text-center">
            <h2 class="text-green-700 text-4xl font-semibold">How to Make a Payment</h2>
            <p class="italic mt-5 text-lg text-gray-600">We offer multiple payment methods for your convenience:</p>

            <div class="flex justify-center items-center gap-12 mt-8">
                <!-- CRDB Payment Option -->
                <div
                    class="flex flex-col items-center justify-center transition-transform duration-300 transform hover:scale-105">
                    <img src="{{ asset('images/CRDB.jpeg') }}" alt="CRDB Payment Option"
                        class="w-48 h-48 rounded-lg shadow-lg">
                    <p class="mt-4 text-lg font-semibold text-gray-800">CRDB</p>
                </div>

                <!-- NMB Payment Option -->
                <div
                    class="flex flex-col items-center justify-center transition-transform duration-300 transform hover:scale-105">
                    <img src="{{ asset('images/nmb.jpg') }}" alt="NMB Payment Option"
                        class="w-48 h-48 rounded-lg shadow-lg">
                    <p class="mt-4 text-lg font-semibold text-gray-800">NMB</p>
                </div>

                <!-- M-Pesa Payment Option -->
                <div
                    class="flex flex-col items-center justify-center transition-transform duration-300 transform hover:scale-105">
                    <img src="{{ asset('images/M-Pesa.jpeg') }}" alt="M-Pesa Payment Option"
                        class="w-32 h-32 rounded-lg shadow-lg">
                    <p class="mt-4 text-lg font-semibold text-gray-800">M-Pesa</p>
                </div>
            </div>
        </div>
    </section>

    {{-- frequent asked questions --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="flex items-center justify-center flex-col">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 text-green-700">Frequently Asked Questions</h2>
            </div>
            <div class="w-full px-7">
                <div class="mx-auto w-full border border-slate-400/20 rounded-lg bg-white">
                    <!-- FAQ Wrapper -->
                    <div x-data="{ openFaq: null }">
                        <!-- Question 1 -->
                        <div class="border-b border-[#0A071B]/10">
                            <button @click="openFaq = (openFaq === 1 ? null : 1)"
                                class="flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5">
                                <span>Are there any hidden charges?</span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    class="mt-1.5 md:mt-0 flex-shrink-0 transform h-5 w-5 text-[#5B5675]"
                                    :class="{ 'rotate-180': openFaq === 1 }" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium italic leading-relaxed text-center"
                                x-show="openFaq === 1" x-collapse>
                                No, we believe in full transparency when it comes to school fees. All mandatory charges,
                                including tuition, registration, and any additional fees (e.g., meals, transportation, and
                                extracurricular activities), are clearly outlined in our fee structure. However, optional
                                services such as boarding, school trips, and specialized programs may have additional costs.
                                If you need clarification, our finance office is happy to assist you.
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="border-b border-[#0A071B]/10">
                            <button @click="openFaq = (openFaq === 2 ? null : 2)"
                                class="flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5">
                                <span>Can I pay in foreign currency?</span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    class="mt-1.5 md:mt-0 flex-shrink-0 transform h-5 w-5 text-[#5B5675]"
                                    :class="{ 'rotate-180': openFaq === 2 }" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium italic leading-relaxed text-center"
                                x-show="openFaq === 2" x-collapse>
                                Yes, we accept payments in foreign currencies. However, all transactions will be converted
                                to Tanzanian Shillings (TZS) based on the prevailing exchange rate at the time of payment.
                                For international bank transfers, we recommend confirming exchange rates and transaction
                                fees with your bank. If you need further guidance, our finance team is available to assist
                                you with international payment options.
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="border-b border-[#0A071B]/10">
                            <button @click="openFaq = (openFaq === 3 ? null : 3)"
                                class="flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5">
                                <span>What happens if I miss a payment deadline?</span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    class="mt-1.5 md:mt-0 flex-shrink-0 transform h-5 w-5 text-[#5B5675]"
                                    :class="{ 'rotate-180': openFaq === 3 }" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg>
                            </button>
                            <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium italic leading-relaxed text-center"
                                x-show="openFaq === 3" x-collapse>
                                We understand that unexpected situations may arise. If you miss a payment deadline, we
                                encourage you to contact our finance office immediately to discuss your situation. A late
                                fee may be applied depending on the delay period. Repeated missed payments could result in
                                restricted access to school services or temporary suspension until the outstanding balance
                                is cleared. To avoid this, we recommend setting up reminders or opting for our installment
                                plan with automated notifications.
                            </div>
                        </div>

                    </div> <!-- End FAQ Wrapper -->
                </div>
            </div>
        </div>
    </section>

    {{-- call to action --}}
    <section class="relative py-20 mb-11 bg-gradient-to-r from-green-600 via-emerald-600 to-green-700 overflow-hidden">
        <div class="absolute inset-0 bg-green-950 opacity-60 mix-blend-multiply"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4 drop-shadow-lg">
                Contact Us Today
            </h1>
            <div class="w-24 h-1 mx-auto bg-white rounded mb-6"></div>
            <p class="text-xl md:text-2xl font-medium max-w-3xl mx-auto mb-12">
                Discover how we can help unlock your child's full potential and shape a brighter, more successful future.
            </p>

            {{-- Enquiry Button --}}
            <a href="#"
                class="inline-block bg-white text-green-900 font-bold text-lg px-8 py-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105 focus:ring-4 ring-white">
                Enquire Now
            </a>
        </div>
    </section>
@endsection
