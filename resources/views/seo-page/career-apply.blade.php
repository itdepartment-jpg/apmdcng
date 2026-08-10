<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Apply for {{ $career->title }} | APMDC
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@next/dist/aos.css"
    >

    <style>

        body {
            font-family: 'Poppins', sans-serif;
        }

        .application-hero {
            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.72),
                    rgba(0, 0, 0, 0.72)
                ),
                url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=2070&q=80');

            background-size: cover;
            background-position: center;
        }

        .section-divider {
            height: 3px;
            width: 80px;

            background: linear-gradient(
                90deg,
                #303791,
                #EA222F
            );

            margin: 0 auto;
        }

    </style>

</head>

<body class="overflow-x-hidden bg-gray-50 text-gray-800 antialiased">


    <!-- =========================================
        NAVIGATION
    ========================================== -->

    @include('partials.nav')


    <!-- =========================================
        HERO
    ========================================== -->

    <section class="application-hero py-28 text-white">

        <div class="container mx-auto px-6">

            <div
                class="mx-auto max-w-4xl text-center"
                data-aos="fade-up"
            >

                <span
                    class="text-sm font-semibold uppercase tracking-wider text-[#EA222F]"
                >
                    Career Application
                </span>

                <h1 class="mt-4 text-4xl font-bold md:text-5xl lg:text-6xl">

                    Apply for {{ $career->title }}

                </h1>

                <p class="mx-auto mt-6 max-w-3xl text-lg text-gray-200">

                    Join the APMDC team and take the next step in your career.

                </p>

            </div>

        </div>

    </section>


    <!-- =========================================
        APPLICATION SECTION
    ========================================== -->

    <section class="bg-gray-50 py-24">

        <div class="container mx-auto px-6">

            <div class="mx-auto max-w-5xl">


                <!-- POSITION SUMMARY -->

                <div
                    class="mb-10 rounded-2xl bg-white p-8 shadow-md"
                    data-aos="fade-up"
                >

                    <div class="text-center">

                        <span
                            class="text-sm font-semibold uppercase tracking-wider text-[#EA222F]"
                        >
                            Position
                        </span>

                        <h2 class="mt-3 text-3xl font-bold text-gray-800">

                            {{ $career->title }}

                        </h2>

                        <div class="section-divider mt-6"></div>

                    </div>


                    <div
                        class="mt-8 flex flex-wrap justify-center gap-6 text-gray-600"
                    >

                        <div class="flex items-center">

                            <i class="fas fa-map-marker-alt mr-2 text-[#EA222F]"></i>

                            {{ $career->location }}

                        </div>

                        <div class="flex items-center">

                            <i class="fas fa-briefcase mr-2 text-[#EA222F]"></i>

                            {{ $career->department }}

                        </div>

                        <div class="flex items-center">

                            <i class="fas fa-clock mr-2 text-[#EA222F]"></i>

                            {{ $career->employment_type }}

                        </div>

                    </div>

                </div>


                <!-- APPLICATION FORM -->

                <div
                    class="rounded-2xl bg-white p-8 shadow-md md:p-10"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >

                    <div class="mb-10">

                        <h2 class="text-2xl font-bold text-gray-800">

                            Applicant Information

                        </h2>

                        <p class="mt-2 text-gray-500">

                            Please complete the form below and upload your CV.

                        </p>

                    </div>


                    <form
                        action="{{ route('career.apply.store', $career->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf


                       <!-- Full Name -->
<div class="mb-6">

    <label
        for="full_name"
        class="mb-2 block text-sm font-semibold text-gray-700"
    >
        Full Name
    </label>

    <input
        id="full_name"
        name="full_name"
        type="text"
        value="{{ old('full_name') }}"
        placeholder="Enter your full name"
        required
        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-gray-800 placeholder-gray-400 shadow-sm outline-none transition duration-200 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/10"
    >

    @error('full_name')
        <p class="mt-2 text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror

</div>


<!-- Email + Phone -->
<div class="grid gap-6 md:grid-cols-2">

    <!-- Email -->

    <div>

        <label
            for="email"
            class="mb-2 block text-sm font-semibold text-gray-700"
        >
            Email Address
        </label>

        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email') }}"
            placeholder="you@example.com"
            required
            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-gray-800 placeholder-gray-400 shadow-sm outline-none transition duration-200 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/10"
        >

        @error('email')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- Phone -->

    <div>

        <label
            for="phone"
            class="mb-2 block text-sm font-semibold text-gray-700"
        >
            Phone Number
        </label>

        <input
            id="phone"
            name="phone"
            type="tel"
            value="{{ old('phone') }}"
            placeholder="080XXXXXXXX"
            required
            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-gray-800 placeholder-gray-400 shadow-sm outline-none transition duration-200 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/10"
        >

        @error('phone')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>

</div>


<!-- Cover Letter -->

<div class="mt-6">

    <label
        for="cover_letter"
        class="mb-2 block text-sm font-semibold text-gray-700"
    >
        Cover Letter

        <span class="font-normal text-gray-400">
            (Optional)
        </span>

    </label>

    <textarea
        id="cover_letter"
        name="cover_letter"
        rows="8"
        placeholder="Tell us briefly why you are suitable for this position..."
        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-gray-800 placeholder-gray-400 shadow-sm outline-none transition duration-200 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/10"
    >{{ old('cover_letter') }}</textarea>

    @error('cover_letter')
        <p class="mt-2 text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror

</div>
                        <!-- CV -->

                        <div class="mt-8">

                            <label
                                for="cv"
                                class="mb-3 block text-sm font-semibold text-gray-700"
                            >
                                CV / Resume
                            </label>

                            <label
                                for="cv"
                                class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 px-8 py-12 text-center transition duration-300 hover:border-[#303791] hover:bg-blue-50"
                            >

                                <div
                                    class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791] transition group-hover:bg-[#303791] group-hover:text-white"
                                >

                                    <i class="fas fa-cloud-upload-alt text-3xl"></i>

                                </div>

                                <h3 class="text-lg font-semibold text-[#1B1F3B]">

                                    Upload your CV / Resume

                                </h3>

                                <p class="mt-2 text-gray-500">

                                    Click anywhere inside this box to browse

                                </p>

                                <p class="mt-4 text-sm text-gray-400">

                                    PDF • DOC • DOCX &nbsp; | &nbsp; Maximum file size: 5MB

                                </p>

                                <input
                                    id="cv"
                                    name="cv"
                                    type="file"
                                    accept=".pdf,.doc,.docx"
                                    required
                                    class="hidden"
                                >

                            </label>

                            @error('cv')

                                <p class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- BUTTONS -->

                        <div
                            class="mt-10 flex flex-col-reverse gap-4 border-t border-gray-100 pt-8 sm:flex-row sm:items-center sm:justify-between"
                        >

                            <a
                                href="{{ route('career.details', $career->id) }}"
                                class="text-center font-medium text-gray-500 transition hover:text-[#EA222F]"
                            >

                                Cancel

                            </a>


                            <button
                                type="submit"
                                class="rounded-xl bg-[#EA222F] px-8 py-4 font-semibold text-white transition hover:bg-[#d11a26]"
                            >

                                <i class="fas fa-paper-plane mr-2"></i>

                                Submit Application

                            </button>

                        </div>

                    </form>

                </div>

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

        <i class="fas fa-arrow-up"></i>

    </button>


    <!-- =========================================
        SCRIPTS
    ========================================== -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>

        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100
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

    </script>

    @include('partials.whatsapp')

</body>

</html>