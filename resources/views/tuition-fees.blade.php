@extends('layouts.guest')
@section('title', 'Tuition Fees')
@section('content')
    {{-- hero section --}}
    <section class="bg-gray-400 relative">
        <div class="relative flex justify-center items-center h-96 overflow-hidden">
            {{-- Hero Image --}}
            <div class="absolute inset-0">
                <img src="{{ asset('images/school4.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 to-transparent opacity-60"></div>
            {{-- Text --}}
            <div class="relative">
                <h1 class="text-4xl lg:text-6xl text-center text-white font-bold">Investing in Excellence: Affordable &
                    Transparent Tuition Fees
                </h1>
                <p class="text-xl mt-4 text-white text-center italic">Empowering young minds from Kindergarten to Secondary
                    with excellence in education.</p>
            </div>
        </div>
    </section>
    {{-- fee cards --}}
    <section class="py-16 bg-gray-100">
        <div class="w-11/12 mx-auto">
            <h1 class="text-5xl font-bold text-center text-green-700">Transparent & Flexible Fee Structure</h1>
            <p class="text-lg text-gray-600 text-center mt-4">
                Affordable education with clear payment plans, scholarships, and financial aid options.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Kindergarten -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-green-500">
                    <h2 class="text-green-700 text-2xl font-bold">Kindergarten</h2>
                    <p class="text-gray-600 mt-2 italic">A strong foundation for young learners.</p>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li><strong>Tuition:</strong> $500 per term</li>
                        <li><strong>Meals:</strong> $150 per term</li>
                        <li><strong>Uniform:</strong> $80 (one-time)</li>
                        <li><strong>Total:</strong> $730 per term</li>
                    </ul>
                </div>

                <!-- Primary -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-blue-500">
                    <h2 class="text-blue-700 text-2xl font-bold">Primary</h2>
                    <p class="text-gray-600 mt-2 italic">Building knowledge and character.</p>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li><strong>Tuition:</strong> $700 per term</li>
                        <li><strong>Boarding:</strong> $400 per term</li>
                        <li><strong>Books & Materials:</strong> $120 per year</li>
                        <li><strong>Total:</strong> $1,220 per term</li>
                    </ul>
                </div>

                <!-- Secondary -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-red-500">
                    <h2 class="text-red-700 text-2xl font-bold">Secondary</h2>
                    <p class="text-gray-600 mt-2 italic">Preparing for a brighter future.</p>
                    <ul class="list-disc mt-4 pl-4 text-gray-700">
                        <li><strong>Tuition:</strong> $1,200 per term</li>
                        <li><strong>Boarding:</strong> $600 per term</li>
                        <li><strong>Exam Fees:</strong> $200 per year</li>
                        <li><strong>Total:</strong> $2,000 per term</li>
                    </ul>
                </div>
            </div>

            <!-- Payment Plans & Scholarships -->
            <div class="mt-16 text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Flexible Payment Plans & Scholarships</h2>
                <p class="text-lg text-gray-600 mt-4">
                    We offer installment options and merit-based scholarships. Contact us for more details.
                </p>
                <a href="/contact"
                    class="mt-6 inline-block bg-green-700 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-800 transition">Inquire
                    Now</a>
            </div>
        </div>
    </section>
    {{-- section --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-5xl font-bold text-center text-green-700">Flexible Installment & Payment Plans</h1>
            <p class="text-lg text-gray-600 text-center mt-4">We understand that every family has unique financial needs. To
                make tuition payments easier, Scolastica Schools offers flexible installment plans to accommodate different
                budgets.</p>

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
                                            Plan Type </p>
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
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                        <p class="block text-sm font-normal leading-none text-slate-500"></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
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

                                <tr class="hover:bg-slate-50">
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
                                            3 payments
                                        </p>
                                    </td>
                                </tr>

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
    </section>
    {{-- why choose an installation type --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-green-700 text-center text-4xl font-semibold">Why Choose an Installment Plan?</h1>
            <div class="flex flex-col md:flex-row justify-center items-center gap-6" data-aos="fade-left"
                data-aos-duration="1000">
                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                    <div class="w-16 h-16 rounded-full bg-green-600 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-dollar-sign text-4xl"></i>
                    </div>
                    <h1 class="text-2xl mt-3 font-normal">Budget-Friendly</h1>
                    <p class="text-center italic">Spread tuition costs over time</p>
                </div>

                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">
                    <div class="w-16 h-16 rounded-full bg-red-700 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-ban text-3xl"></i>
                    </div>
                    <h1 class="text-2xl mt-3 font-normal">No Late Fees</h1>
                    <p class="text-center italic">Ensure payments are on schedule</p>
                </div>

                <div
                    class="w-full md:w-1/3 rounded-2xl shadow-xl shadow-green-100 border border-gray-300 flex flex-col justify-center items-center py-12 mt-8">

                    <div class="w-16 h-16 rounded-full bg-green-700 text-white border flex justify-center items-center">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <h1 class="mt-3 font-normal text-4xl">Custom Plans</h1>
                    <p class="text-center italic">Tailored options for special cases (contact us)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- How to make payment --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <h1 class="text-green-700 text-center text-4xl font-semibold">How to make payment?</h1>
            <p class="text-center italic mt-5">We offer multiple payment methods for convenience:</p>
            <div class="flex justify-center items-center gap-10" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('images/CRDB.jpeg') }}" alt="" class="w-64 h-64">
                <img src="{{ asset('images/nmb.jpg') }}" alt="" class="w-64 h-64 text-blue-800">
                <img src="{{ asset('images/M-Pesa.jpeg') }}" alt="" class="w-32 h-32 text-blue-800">

            </div>
        </div>
    </section>

    {{-- frequent asked questions --}}
    <section class="py-12">
        <div class="w-11/12 mx-auto">
            <div class="flex items-center justify-center flex-col">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-700">Frequently Asked Questions</h2>
            </div>
            <div class="w-full px-7">
                <div class="mx-auto w-full max-w-5xl border border-slate-400/20 rounded-lg bg-white">
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
    <section class="py-12">
        <div class="w-full bg-green-900 py-12">
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center py-12">
                <h1 class="text-white font-semibold text-4xl">Contact Us Today</h1>
                <div class="border border-white w-2/5 mt-2"></div>
                <h2 class="text-white font-semibold text-2xl mt-5">Find out how we can develop your child’s skills and
                    expand
                    their horizons for a life of success. </h2>
                {{-- admission button --}}
                <div class="mt-12">
                    <a href="#"
                        class="py-3 px-7 text-gray-800 bg-white rounded-xl font-semibold text-lg focus:outline-none hover:bg-gray-200 transition transform ease-in-out duration-700 focus:scale-95 ring-4 ring-white">
                        Enquery Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
