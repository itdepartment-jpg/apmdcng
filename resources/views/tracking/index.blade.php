<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Shipment | APMDCNG</title>

    <meta name="description"
        content="Track your shipment with APMDCNG. Enter your tracking or container number to view your shipment status, vessel information and estimated arrival.">

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased">

    <!-- Navigation -->
    @include('partials.nav')

    <!-- =====================================================
     TRACK SHIPMENT HERO
====================================================== -->

<section class="relative min-h-[680px] flex items-center overflow-hidden bg-[#303791]">

    <!-- Background Image -->
    <div class="absolute inset-0">

        <img
            src="{{ asset('images/amp.jpg') }}"
            alt="APMDC Shipment Tracking"
            class="w-full h-full object-cover"
        >

        <!-- Dark Blue Overlay -->
        <div class="absolute inset-0 bg-[#11184f]/85"></div>

        <!-- Brand Gradient -->
        <div class="absolute inset-0 bg-gradient-to-r
            from-[#303791]/95
            via-[#303791]/80
            to-[#EA222F]/40">
        </div>

    </div>


    <!-- Decorative Elements -->

    <div class="absolute top-20 right-10
        w-72 h-72
        border border-white/10
        rounded-full">
    </div>

    <div class="absolute top-32 right-24
        w-48 h-48
        border border-white/10
        rounded-full">
    </div>

    <div class="absolute bottom-0 left-0
        w-96 h-96
        bg-[#EA222F]/10
        rounded-full blur-3xl">
    </div>


    <!-- Hero Content -->

    <div class="container mx-auto px-6
        relative z-10
        pt-36 pb-24">

        <div class="max-w-5xl mx-auto text-center">


            <!-- Eyebrow -->

            <div class="inline-flex items-center gap-3
                bg-white/10
                border border-white/20
                backdrop-blur-sm
                px-5 py-2.5
                rounded-full
                mb-7">

                <span class="w-2.5 h-2.5
                    bg-[#EA222F]
                    rounded-full
                    animate-pulse">
                </span>

                <span class="text-white
                    text-sm
                    font-semibold
                    tracking-[0.2em]">

                    SHIPMENT TRACKING

                </span>

            </div>


            <!-- Heading -->

            <h1 class="text-4xl
                sm:text-5xl
                md:text-6xl
                lg:text-7xl
                font-bold
                text-white
                leading-tight
                mb-6">

                Track Your Shipment.
                <span class="block text-[#EA222F]">
                    Stay Informed.
                </span>

            </h1>


            <!-- Description -->

            <p class="text-lg
                md:text-xl
                text-white/80
                max-w-3xl
                mx-auto
                leading-relaxed
                mb-12">

                Track your cargo from departure to destination
                with APMDC. Get visibility into your shipment
                status, vessel information and estimated arrival.

            </p>


            <!-- Tracking Card -->

            <div class="max-w-4xl mx-auto">

                <div class="bg-white
                    rounded-2xl
                    shadow-2xl
                    p-5
                    md:p-7
                    text-left">

                    <form
                        action="{{ route('tracking.track') }}"
                        method="POST">

                        @csrf


                        <div class="flex flex-col
                            lg:flex-row
                            gap-4
                            items-end">


                            <!-- Input -->

                            <div class="flex-1 w-full">

                                <label
                                    for="tracking_number"
                                    class="block
                                    text-sm
                                    font-semibold
                                    text-gray-700
                                    mb-2">

                                    Tracking Number or Container Number

                                </label>


                                <div class="relative">

                                    <div class="absolute
                                        inset-y-0
                                        left-0
                                        flex
                                        items-center
                                        pl-5
                                        pointer-events-none">

                                        <i class="fas fa-box
                                            text-[#303791]">
                                        </i>

                                    </div>


                                    <input
                                        type="text"
                                        id="tracking_number"
                                        name="tracking_number"
                                        value="{{ old('tracking_number') }}"
                                        placeholder="Enter your tracking or container number"
                                        autocomplete="off"
                                        required
                                        class="w-full
                                            pl-12
                                            pr-5
                                            py-4
                                            border
                                            border-gray-200
                                            rounded-xl
                                            text-gray-800
                                            placeholder-gray-400
                                            focus:outline-none
                                            focus:ring-2
                                            focus:ring-[#303791]/20
                                            focus:border-[#303791]
                                            transition"
                                    >

                                </div>

                            </div>


                            <!-- Button -->

                            <button
                                type="submit"
                                class="w-full
                                    lg:w-auto
                                    bg-[#EA222F]
                                    hover:bg-[#d11a26]
                                    text-white
                                    font-semibold
                                    px-9
                                    py-4
                                    rounded-xl
                                    transition-all
                                    duration-300
                                    hover:shadow-lg
                                    flex
                                    items-center
                                    justify-center
                                    gap-3
                                    whitespace-nowrap">

                                <i class="fas fa-search"></i>

                                Track Shipment

                            </button>

                        </div>


                        <!-- Error -->

                        @error('tracking_number')

                            <div class="mt-4
                                flex
                                items-center
                                gap-2
                                text-sm
                                text-red-600
                                bg-red-50
                                border
                                border-red-100
                                px-4
                                py-3
                                rounded-lg">

                                <i class="fas fa-circle-exclamation"></i>

                                <span>
                                    {{ $message }}
                                </span>

                            </div>

                        @enderror


                        <div class="mt-4
                            flex
                            flex-wrap
                            items-center
                            justify-between
                            gap-3">

                            <p class="text-xs text-gray-500">

                                <i class="fas fa-shield-halved mr-1"></i>

                                Secure shipment tracking

                            </p>

                            <p class="text-xs text-gray-500">

                                Track using your container or tracking number

                            </p>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    <!-- Bottom Wave -->

    <div class="absolute
        bottom-0
        left-0
        w-full
        overflow-hidden
        leading-[0]">

        <svg
            class="relative block w-full h-[70px]"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 120"
            preserveAspectRatio="none">

            <path
                fill="#FAFAFA"
                d="M0,80 C240,20 480,20 720,70 C960,120 1200,120 1440,50 L1440,120 L0,120 Z">
            </path>

        </svg>

    </div>

</section>


    <!-- How Tracking Works -->
    <section class="py-20 bg-[#FAFAFA]">

        <div class="container mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-14">

                <span class="text-[#EA222F]
                    font-semibold tracking-wider text-sm uppercase">

                    SIMPLE & TRANSPARENT

                </span>

                <h2 class="text-3xl md:text-4xl
                    font-bold text-gray-800 mt-3 mb-5">

                    Track Your Cargo With Confidence

                </h2>

                <p class="text-gray-600">

                    APMDC gives you visibility throughout your
                    shipment journey, helping you stay informed
                    every step of the way.

                </p>

            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">

                <!-- Step 1 -->
                <div class="bg-white rounded-2xl p-8
                    shadow-sm border border-gray-100
                    text-center">

                    <div class="w-16 h-16 mx-auto mb-6
                        rounded-full
                        bg-[#303791]/10
                        flex items-center justify-center">

                        <i class="fas fa-keyboard
                            text-2xl text-[#303791]">
                        </i>

                    </div>

                    <h3 class="text-xl font-bold mb-3">
                        Enter Your Number
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Enter your APMDC tracking number or
                        container number.
                    </p>

                </div>


                <!-- Step 2 -->
                <div class="bg-white rounded-2xl p-8
                    shadow-sm border border-gray-100
                    text-center">

                    <div class="w-16 h-16 mx-auto mb-6
                        rounded-full
                        bg-[#EA222F]/10
                        flex items-center justify-center">

                        <i class="fas fa-magnifying-glass
                            text-2xl text-[#EA222F]">
                        </i>

                    </div>

                    <h3 class="text-xl font-bold mb-3">
                        Search Shipment
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our system securely searches your shipment
                        information.
                    </p>

                </div>


                <!-- Step 3 -->
                <div class="bg-white rounded-2xl p-8
                    shadow-sm border border-gray-100
                    text-center">

                    <div class="w-16 h-16 mx-auto mb-6
                        rounded-full
                        bg-[#303791]/10
                        flex items-center justify-center">

                        <i class="fas fa-route
                            text-2xl text-[#303791]">
                        </i>

                    </div>

                    <h3 class="text-xl font-bold mb-3">
                        View Your Shipment
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        View your shipment status, vessel,
                        container and estimated arrival.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="py-20
        bg-gradient-to-r from-[#303791] to-[#EA222F]
        text-white">

        <div class="container mx-auto px-6 text-center">

            <h2 class="text-3xl md:text-4xl
                font-bold mb-5">

                Need Help With Your Shipment?

            </h2>

            <p class="text-white/90
                max-w-2xl mx-auto mb-8">

                Our logistics team is available to assist
                with shipment tracking, cargo movement and
                other logistics enquiries.

            </p>

            <a href="{{ route('contact.show') }}"
                class="inline-flex items-center gap-2
                bg-white text-[#303791]
                font-semibold
                px-8 py-4
                rounded-lg
                hover:bg-gray-100
                transition-all duration-300
                hover:shadow-lg">

                Contact APMDC

                <i class="fas fa-arrow-right"></i>

            </a>

        </div>

    </section>


    <!-- Footer -->
    @include('partials.footer')


    @include('partials.whatsapp')

</body>

</html>