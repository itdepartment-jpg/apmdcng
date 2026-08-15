<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shipment Tracking Result | APMDCNG</title>

    <meta name="description"
        content="View your APMDC shipment status, container information, vessel details and shipment journey.">

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased">

    @include('partials.nav')


    <!-- =====================================================
         RESULT HEADER
    ====================================================== -->

    <section class="relative bg-[#303791] pt-36 pb-28 overflow-hidden">

        <div class="absolute inset-0 opacity-10">
            <div class="absolute -right-20 -top-20 w-96 h-96
                rounded-full border border-white/30">
            </div>

            <div class="absolute -left-20 bottom-0 w-80 h-80
                rounded-full border border-white/20">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">

            <div class="max-w-5xl mx-auto text-center text-white">

                <span class="inline-flex items-center gap-2
                    bg-white/10
                    border border-white/20
                    px-5 py-2
                    rounded-full
                    text-sm
                    font-semibold
                    tracking-wider">

                    <i class="fas fa-location-dot text-[#EA222F]"></i>

                    SHIPMENT TRACKING

                </span>

                <h1 class="text-3xl md:text-5xl
                    font-bold mt-6 mb-5">

                    Shipment Tracking Result

                </h1>

                <p class="text-white/75 text-lg">

                    Tracking Number:

                    <strong class="text-white">
                        {{ $shipment->tracking_number }}
                    </strong>

                </p>

            </div>

        </div>

    </section>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="relative -mt-16 pb-20">

        <div class="container mx-auto px-6">

            <div class="max-w-6xl mx-auto">


                <!-- =====================================================
                     CURRENT STATUS
                ====================================================== -->

                <div class="bg-white rounded-2xl
                    shadow-xl
                    border border-gray-100
                    p-6 md:p-8 mb-8">

                    <div class="flex flex-col
                        md:flex-row
                        md:items-center
                        md:justify-between
                        gap-6">

                        <div>

                            <p class="text-sm
                                uppercase
                                tracking-wider
                                text-gray-500
                                font-semibold
                                mb-2">

                                Current Shipment Status

                            </p>

                            <div class="flex items-center gap-3">

                                <span class="w-4 h-4
                                    rounded-full
                                    bg-[#EA222F]
                                    animate-pulse">
                                </span>

                                <h2 class="text-2xl md:text-3xl
                                    font-bold
                                    text-[#303791]
                                    uppercase">

                                    {{ $shipment->status }}

                                </h2>

                            </div>

                        </div>


                        @if($shipment->eta)

                            <div class="flex items-center gap-4
                                bg-[#303791]/5
                                rounded-xl
                                px-6 py-4">

                                <div class="w-12 h-12
                                    rounded-full
                                    bg-[#303791]
                                    text-white
                                    flex items-center
                                    justify-center">

                                    <i class="fas fa-calendar-check"></i>

                                </div>

                                <div>

                                    <p class="text-xs
                                        uppercase
                                        tracking-wider
                                        text-gray-500
                                        font-semibold">

                                        Estimated Arrival

                                    </p>

                                    <p class="font-bold
                                        text-[#303791]">

                                        {{ $shipment->eta->format('d F Y') }}

                                    </p>

                                </div>

                            </div>

                        @endif

                    </div>

                </div>


                <!-- =====================================================
                     SHIPMENT INFORMATION
                ====================================================== -->

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">


                    <!-- Shipment Details -->

                    <div class="lg:col-span-2
                        bg-white
                        rounded-2xl
                        shadow-sm
                        border border-gray-100
                        p-6 md:p-8">

                        <div class="flex items-center gap-3 mb-8">

                            <div class="w-11 h-11
                                rounded-xl
                                bg-[#303791]/10
                                flex items-center
                                justify-center">

                                <i class="fas fa-box
                                    text-[#303791]">
                                </i>

                            </div>

                            <div>

                                <h2 class="text-xl
                                    font-bold">

                                    Shipment Information

                                </h2>

                                <p class="text-sm text-gray-500">
                                    Your shipment details
                                </p>

                            </div>

                        </div>


                        <div class="grid grid-cols-1
                            md:grid-cols-2 gap-6">


                            <!-- Shipment Reference -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Shipment Reference

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->shipment_reference }}

                                </p>

                            </div>


                            <!-- Tracking Number -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Tracking Number

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->tracking_number }}

                                </p>

                            </div>


                            <!-- Container -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Container Number

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->container_number }}

                                </p>

                            </div>


                            <!-- Container Size -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Container Size

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->container_size }}

                                </p>

                            </div>


                            <!-- Vessel -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Vessel Name

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->vessel_name }}

                                </p>

                            </div>


                            <!-- Carrier -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Carrier

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->carrier?->name ?? 'N/A' }}

                                </p>

                            </div>


                            <!-- Partner -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Partner

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->partner?->name ?? 'N/A' }}

                                </p>

                            </div>


                            <!-- ETA -->

                            <div>

                                <p class="text-xs
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                    font-semibold
                                    mb-1">

                                    Estimated Arrival

                                </p>

                                <p class="font-semibold text-gray-800">

                                    {{ $shipment->eta?->format('d F Y') ?? 'Not available' }}

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Quick Actions -->

                    <div class="bg-gradient-to-br
                        from-[#303791]
                        to-[#252b73]
                        rounded-2xl
                        shadow-sm
                        p-6 md:p-8
                        text-white">

                        <div class="w-12 h-12
                            rounded-xl
                            bg-white/10
                            flex items-center
                            justify-center
                            mb-6">

                            <i class="fas fa-headset text-xl"></i>

                        </div>

                        <h3 class="text-xl font-bold mb-3">

                            Need Assistance?

                        </h3>

                        <p class="text-white/70
                            text-sm
                            leading-relaxed
                            mb-8">

                            If you need more information about
                            this shipment, our logistics team
                            is ready to assist you.

                        </p>

                        <a href="{{ route('contact.show') }}"
                            class="inline-flex
                            items-center
                            justify-center
                            gap-2
                            w-full
                            bg-[#EA222F]
                            hover:bg-[#d11a26]
                            text-white
                            font-semibold
                            px-5
                            py-3.5
                            rounded-lg
                            transition">

                            Contact APMDC

                            <i class="fas fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <!-- =====================================================
                     TRACKING TIMELINE
                ====================================================== -->

                <div class="mt-8
                    bg-white
                    rounded-2xl
                    shadow-sm
                    border border-gray-100
                    p-6 md:p-10">

                    <div class="mb-10">

                        <span class="text-[#EA222F]
                            text-sm
                            font-semibold
                            tracking-wider
                            uppercase">

                            Shipment Journey

                        </span>

                        <h2 class="text-2xl md:text-3xl
                            font-bold
                            mt-2">

                            Tracking Timeline

                        </h2>

                        <p class="text-gray-500 mt-2">

                            Follow the progress of your shipment.

                        </p>

                    </div>


                    @if($shipment->trackingEvents->count())

                        <div class="relative">

                            <!-- Vertical Line -->

                            <div class="absolute
                                left-[19px]
                                top-2
                                bottom-2
                                w-px
                                bg-gray-200">
                            </div>


                            <div class="space-y-8">

                                @foreach($shipment->trackingEvents as $index => $event)

                                    <div class="relative
                                        flex gap-5">

                                        <!-- Event Icon -->

                                        <div class="relative z-10
                                            w-10 h-10
                                            rounded-full
                                            flex-shrink-0
                                            flex items-center
                                            justify-center
                                            {{ $index === 0
                                                ? 'bg-[#EA222F] text-white shadow-lg shadow-red-200'
                                                : 'bg-[#303791]/10 text-[#303791]' }}">

                                            @if($index === 0)

                                                <i class="fas fa-location-dot"></i>

                                            @else

                                                <i class="fas fa-check"></i>

                                            @endif

                                        </div>


                                        <!-- Event Details -->

                                        <div class="flex-1
                                            pb-1">

                                            <div class="flex flex-col
                                                md:flex-row
                                                md:items-start
                                                md:justify-between
                                                gap-2">

                                                <div>

                                                    <h3 class="font-bold
                                                        text-lg
                                                        {{ $index === 0
                                                            ? 'text-[#303791]'
                                                            : 'text-gray-800' }}">

                                                        {{ $event->status }}

                                                    </h3>

                                                    @if($event->location)

                                                        <p class="text-sm
                                                            text-[#EA222F]
                                                            font-medium
                                                            mt-1">

                                                            <i class="fas fa-location-dot mr-1"></i>

                                                            {{ $event->location }}

                                                        </p>

                                                    @endif

                                                </div>


                                                <span class="text-sm
                                                    text-gray-400
                                                    whitespace-nowrap">

                                                    {{ $event->event_date->format('d F Y, h:i A') }}

                                                </span>

                                            </div>


                                            @if($event->description)

                                                <p class="text-gray-600
                                                    text-sm
                                                    leading-relaxed
                                                    mt-3">

                                                    {{ $event->description }}

                                                </p>

                                            @endif

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    @else

                        <!-- No Events -->

                        <div class="text-center
                            py-12">

                            <div class="w-16 h-16
                                mx-auto
                                mb-5
                                rounded-full
                                bg-gray-100
                                flex items-center
                                justify-center">

                                <i class="fas fa-clock
                                    text-2xl
                                    text-gray-400">
                                </i>

                            </div>

                            <h3 class="font-bold
                                text-lg
                                text-gray-700
                                mb-2">

                                Tracking Updates Pending

                            </h3>

                            <p class="text-gray-500
                                text-sm
                                max-w-md
                                mx-auto">

                                Shipment tracking events will appear
                                here as updates become available.

                            </p>

                        </div>

                    @endif

                </div>


                <!-- =====================================================
                     SEARCH AGAIN
                ====================================================== -->

                <div class="text-center mt-10">

                    <a href="{{ route('tracking.index') }}"
                        class="inline-flex
                        items-center
                        gap-2
                        text-[#303791]
                        font-semibold
                        hover:text-[#EA222F]
                        transition">

                        <i class="fas fa-arrow-left"></i>

                        Track Another Shipment

                    </a>

                </div>

            </div>

        </div>

    </main>


    <!-- Footer -->

    @include('partials.footer')

    @include('partials.whatsapp')

</body>

</html>