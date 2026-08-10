@php
    use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $career->title }} - Careers | APMDC Shipping</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <!-- AOS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@next/dist/aos.css"
    >

    <style>

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .career-hero-bg {
            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.72),
                    rgba(0, 0, 0, 0.72)
                ),
                url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');

            background-size: cover;
            background-position: center;
        }

        .gradient-text {
            background: linear-gradient(
                135deg,
                #303791 0%,
                #EA222F 100%
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-divider {
            height: 3px;
            width: 80px;

            background: linear-gradient(
                90deg,
                #303791 0%,
                #EA222F 100%
            );

            margin: 0 auto;
        }

        .card-hover {
            transition:
                transform 0.4s cubic-bezier(
                    0.175,
                    0.885,
                    0.32,
                    1.275
                ),
                box-shadow 0.4s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.10);
        }

        .job-tag {
            background: linear-gradient(
                135deg,
                #303791 0%,
                #EA222F 100%
            );

            color: white;
        }

    </style>

</head>


<body class="overflow-x-hidden bg-gray-50 text-gray-800 antialiased">


    <!-- =========================================
        PRELOADER
    ========================================== -->

    <div
        id="preloader"
        class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500"
    >

        <div
            class="h-16 w-16 animate-spin rounded-full border-t-4 border-[#EA222F] border-solid"
        ></div>

    </div>


    <!-- =========================================
        NAVIGATION
    ========================================== -->

    @include('partials.nav')


    <!-- =========================================
        CAREER HERO
    ========================================== -->

    <section
        class="career-hero-bg relative flex min-h-[65vh] items-center pt-20 pb-16 text-white"
    >

        <div class="container relative z-10 mx-auto px-6">

            <div
                class="mx-auto max-w-4xl text-center"
                data-aos="fade-up"
            >

                <span
                    class="font-semibold uppercase tracking-wider text-sm text-[#EA222F]"
                >
                    Career Opportunity
                </span>

                <h1 class="mt-4 text-4xl font-bold md:text-5xl lg:text-6xl">

                    {{ $career->title }}

                </h1>

                <p class="mx-auto mt-6 max-w-3xl text-lg text-gray-200 md:text-xl">

                    {{ $career->department }}

                    <span class="mx-2 text-[#EA222F]">•</span>

                    {{ $career->location }}

                </p>

                <div class="mt-8">

                    <a
                        href="#career-details"
                        class="inline-flex items-center rounded-lg bg-[#EA222F] px-8 py-3 font-medium text-white transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg"
                    >

                        View Position

                        <i class="fas fa-arrow-down ml-3"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
        CAREER DETAILS
    ========================================== -->

    <section
        id="career-details"
        class="bg-white py-24"
    >

        <div class="container mx-auto px-6">

            <div class="mx-auto max-w-6xl">


                <!-- =================================
                    POSITION SUMMARY
                ================================== -->

                <div
                    class="mb-16 text-center"
                    data-aos="fade-up"
                >

                    <span
                        class="font-semibold uppercase tracking-wider text-sm text-[#EA222F]"
                    >
                        Position Details
                    </span>

                    <h2 class="mt-3 mb-6 text-4xl font-bold text-gray-800 md:text-5xl">

                        {{ $career->title }}

                    </h2>

                    <div class="section-divider mt-6"></div>

                </div>


                <!-- =================================
                    SUMMARY CARDS
                ================================== -->

                <div
                    class="mb-16 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4"
                    data-aos="fade-up"
                >

                    <!-- Location -->

                    <div class="card-hover rounded-2xl bg-gray-50 p-6 text-center">

                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#EA222F]/10 text-[#EA222F]"
                        >

                            <i class="fas fa-map-marker-alt text-xl"></i>

                        </div>

                        <p class="mb-1 text-sm text-gray-500">
                            Location
                        </p>

                        <p class="font-semibold text-gray-800">
                            {{ $career->location }}
                        </p>

                    </div>


                    <!-- Department -->

                    <div class="card-hover rounded-2xl bg-gray-50 p-6 text-center">

                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791]"
                        >

                            <i class="fas fa-briefcase text-xl"></i>

                        </div>

                        <p class="mb-1 text-sm text-gray-500">
                            Department
                        </p>

                        <p class="font-semibold text-gray-800">
                            {{ $career->department }}
                        </p>

                    </div>


                    <!-- Employment Type -->

                    <div class="card-hover rounded-2xl bg-gray-50 p-6 text-center">

                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#EA222F]/10 text-[#EA222F]"
                        >

                            <i class="fas fa-clock text-xl"></i>

                        </div>

                        <p class="mb-1 text-sm text-gray-500">
                            Employment Type
                        </p>

                        <p class="font-semibold text-gray-800">
                            {{ $career->employment_type }}
                        </p>

                    </div>


                    <!-- Deadline -->

                    <div class="card-hover rounded-2xl bg-gray-50 p-6 text-center">

                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791]"
                        >

                            <i class="fas fa-calendar-alt text-xl"></i>

                        </div>

                        <p class="mb-1 text-sm text-gray-500">
                            Application Deadline
                        </p>

                        <p class="font-semibold text-gray-800">

                            @if($career->application_deadline)

                                {{ \Carbon\Carbon::parse($career->application_deadline)->format('d M Y') }}

                            @else

                                Open Until Filled

                            @endif

                        </p>

                    </div>

                </div>


                <!-- =================================
                    MAIN CONTENT + SIDEBAR
                ================================== -->

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">


                    <!-- MAIN CONTENT -->

                    <div class="space-y-8 lg:col-span-2">


                        <!-- Description -->

                        <div
                            class="card-hover rounded-2xl bg-gray-50 p-8"
                            data-aos="fade-up"
                        >

                            <h3 class="mb-5 text-2xl font-bold text-gray-800">

                                Job Description

                            </h3>

                            <div class="leading-8 text-gray-600">

                                {!! nl2br(e($career->description)) !!}

                            </div>

                        </div>


                        <!-- Responsibilities -->

                        @if($career->responsibilities)

                            <div
                                class="card-hover rounded-2xl bg-gray-50 p-8"
                                data-aos="fade-up"
                            >

                                <h3 class="mb-5 text-2xl font-bold text-gray-800">

                                    Key Responsibilities

                                </h3>

                                <div class="leading-8 text-gray-600">

                                    {!! nl2br(e($career->responsibilities)) !!}

                                </div>

                            </div>

                        @endif


                        <!-- Requirements -->

                        @if($career->requirements)

                            <div
                                class="card-hover rounded-2xl bg-gray-50 p-8"
                                data-aos="fade-up"
                            >

                                <h3 class="mb-5 text-2xl font-bold text-gray-800">

                                    Requirements

                                </h3>

                                <div class="leading-8 text-gray-600">

                                    {!! nl2br(e($career->requirements)) !!}

                                </div>

                            </div>

                        @endif


                    </div>


                    <!-- SIDEBAR -->

                    <div
                        data-aos="fade-left"
                    >

                        <div class="sticky top-8">


                            <!-- Apply Card -->

                            <div
                                class="rounded-2xl bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 text-white shadow-xl"
                            >

                                <div class="mb-6">

                                    <i class="fas fa-paper-plane text-4xl"></i>

                                </div>

                                <h3 class="mb-4 text-2xl font-bold">

                                    Interested in this role?

                                </h3>

                                <p class="mb-8 text-white/90">

                                    Take the next step in your career and join the APMDC team.

                                </p>

                                <a
                                    href="{{ route('career.apply', $career->id) }}"
                                    class="block rounded-lg bg-white px-6 py-4 text-center font-semibold text-[#EA222F] transition-all duration-300 hover:bg-gray-100 hover:shadow-lg"
                                >
                                    Apply Now
                                </a>

                            </div>


                            <!-- Additional Information -->

                            <div
                                class="mt-6 rounded-2xl border border-gray-100 bg-white p-8 shadow-md"
                            >

                                <h3 class="mb-6 text-xl font-bold text-gray-800">

                                    Position Information

                                </h3>


                                @if($career->reference_no)

                                    <div class="mb-5">

                                        <p class="text-sm text-gray-500">
                                            Reference Number
                                        </p>

                                        <p class="mt-1 font-semibold text-gray-800">
                                            {{ $career->reference_no }}
                                        </p>

                                    </div>

                                @endif


                                @if($career->experience_required)

                                    <div class="mb-5">

                                        <p class="text-sm text-gray-500">
                                            Experience Required
                                        </p>

                                        <p class="mt-1 font-semibold text-gray-800">
                                            {{ $career->experience_required }}
                                        </p>

                                    </div>

                                @endif


                                @if($career->education)

                                    <div class="mb-5">

                                        <p class="text-sm text-gray-500">
                                            Education
                                        </p>

                                        <p class="mt-1 font-semibold text-gray-800">
                                            {{ $career->education }}
                                        </p>

                                    </div>

                                @endif


                                @if($career->salary)

                                    <div class="mb-5">

                                        <p class="text-sm text-gray-500">
                                            Salary
                                        </p>

                                        <p class="mt-1 font-semibold text-gray-800">
                                            {{ $career->salary }}
                                        </p>

                                    </div>

                                @endif


                                @if($career->vacancies)

                                    <div>

                                        <p class="text-sm text-gray-500">
                                            Vacancies
                                        </p>

                                        <p class="mt-1 font-semibold text-gray-800">
                                            {{ $career->vacancies }}
                                        </p>

                                    </div>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================
                    JOB DOCUMENT
                ================================== -->

                @if($career->job_document)

                    <div
                        class="mt-10 rounded-2xl bg-gray-50 p-8"
                        data-aos="fade-up"
                    >

                        <div class="flex flex-col items-center justify-between gap-6 md:flex-row">

                            <div class="flex items-center gap-5">

                                <div
                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-[#EA222F]/10 text-[#EA222F]"
                                >

                                    <i class="fas fa-file-alt text-2xl"></i>

                                </div>

                                <div>

                                    <h3 class="text-xl font-bold text-gray-800">

                                        Job Description Document

                                    </h3>

                                    <p class="mt-1 text-gray-600">

                                        Download the official job description for this position.

                                    </p>

                                </div>

                            </div>

                            <a
                                href="{{ asset('storage/' . $career->job_document) }}"
                                target="_blank"
                                class="inline-flex items-center rounded-lg bg-[#303791] px-6 py-3 font-medium text-white transition-all duration-300 hover:bg-[#EA222F]"
                            >

                                <i class="fas fa-download mr-2"></i>

                                View Document

                            </a>

                        </div>

                    </div>

                @endif


                <!-- Back to Careers -->

                <div
                    class="mt-12"
                    data-aos="fade-up"
                >

                    <a
                        href="{{ route('career') }}"
                        class="inline-flex items-center font-medium text-[#303791] transition hover:text-[#EA222F]"
                    >

                        <i class="fas fa-arrow-left mr-2"></i>

                        Back to Career Opportunities

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
        CTA
    ========================================== -->

    <section class="bg-gradient-to-r from-[#303791] to-[#EA222F] py-20 text-white">

        <div class="container mx-auto px-6 text-center">

            <div data-aos="fade-up">

                <h2 class="mb-6 text-4xl font-bold md:text-5xl">

                    Ready to Join APMDC?

                </h2>

                <p class="mx-auto mb-10 max-w-3xl text-xl text-white/90">

                    Explore more opportunities and find the role that's right for you.

                </p>

                <a
                    href="{{ route('career') }}"
                    class="inline-flex items-center justify-center rounded-full bg-white px-10 py-4 text-lg font-semibold text-[#EA222F] transition-all duration-300 hover:bg-gray-100 hover:shadow-xl"
                >

                    <i class="fas fa-briefcase mr-3"></i>

                    View Open Positions

                </a>

            </div>

        </div>

    </section>


    <!-- =========================================
        FOOTER
    ========================================== -->

    @include('partials.footer')


    <!-- =========================================
        BACK TO TOP
    ========================================== -->

    <button
        id="back-to-top"
        class="invisible fixed bottom-8 right-8 z-40 rounded-full bg-[#EA222F] p-4 text-white opacity-0 shadow-lg transition-all duration-300 hover:bg-[#d11a26]"
        aria-label="Back to top"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >

            <path d="M18 15l-6-6-6 6"/>

        </svg>

    </button>


    <!-- =========================================
        SCRIPTS
    ========================================== -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>

        // Preloader

        window.addEventListener('load', function () {

            const preloader = document.getElementById('preloader');

            preloader.style.opacity = '0';

            setTimeout(() => {

                preloader.style.display = 'none';

            }, 500);

        });


        // Back To Top

        const backToTopButton =
            document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {

            if (window.pageYOffset > 300) {

                backToTopButton.classList.remove(
                    'opacity-0',
                    'invisible'
                );

                backToTopButton.classList.add(
                    'opacity-100',
                    'visible'
                );

            } else {

                backToTopButton.classList.remove(
                    'opacity-100',
                    'visible'
                );

                backToTopButton.classList.add(
                    'opacity-0',
                    'invisible'
                );

            }

        });


        backToTopButton.addEventListener('click', () => {

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });


        // AOS

        AOS.init({

            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100

        });

    </script>

    @include('partials.whatsapp')

</body>

</html>