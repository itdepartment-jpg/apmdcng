@php
    $variant = $variant ?? 'default';

    $isHomepage = $variant === 'homepage';
    $isCompact = $variant === 'compact';

    if ($isHomepage) {
        $sectionClass = 'py-20 bg-gradient-to-br from-[#303791] to-[#252b73]';
        $eyebrowClass = 'text-white/80';
        $headingClass = 'text-3xl md:text-4xl text-white';
        $descriptionClass = 'text-white/75';
        $helperClass = 'text-white/60';
        $heading = 'Where Is Your Shipment?';
        $description = 'Track your cargo from departure to destination. Enter your tracking or container number to get the latest shipment information.';
    } elseif ($isCompact) {
        $sectionClass = 'py-12 bg-white';
        $eyebrowClass = 'text-[#EA222F]';
        $headingClass = 'text-3xl md:text-4xl text-gray-800';
        $descriptionClass = 'text-gray-600';
        $helperClass = 'text-gray-500';
        $heading = 'Track Your Shipment';
        $description = 'Enter your tracking or container number to view your latest shipment information.';
    } else {
        $sectionClass = 'py-20 bg-[#FAFAFA]';
        $eyebrowClass = 'text-[#EA222F]';
        $headingClass = 'text-3xl md:text-4xl text-gray-800';
        $descriptionClass = 'text-gray-600';
        $helperClass = 'text-gray-500';
        $heading = 'Track Your Shipment';
        $description = 'Enter your tracking or container number to view your latest shipment information.';
    }
@endphp

<section
    class="
        relative overflow-hidden
      {{ $sectionClass }}
">

    {{-- Background Decoration --}}
    @if(!$isCompact)

        <div class="absolute inset-0 pointer-events-none">

            <div class="absolute -top-32 -right-32
                w-96 h-96
                rounded-full
                border
                {{ $isHomepage ? 'border-white/10' : 'border-[#303791]/5' }}">
            </div>

            <div class="absolute -bottom-40 -left-40
                w-96 h-96
                rounded-full
                border
                {{ $isHomepage ? 'border-white/10' : 'border-[#EA222F]/5' }}">
            </div>

        </div>

    @endif


    <div class="container mx-auto px-6 relative z-10">

        <div class="
            {{ $isCompact
                ? 'max-w-5xl'
                : 'max-w-4xl' }}
            mx-auto
            text-center
        ">


            {{-- Eyebrow --}}
            <span
                class="
                    inline-flex
                    items-center
                    gap-2
                    font-semibold
                    tracking-wider
                    text-sm
                    uppercase
                    mb-4

                    {{ $isHomepage
    ? 'text-white/80'
    : 'text-[#EA222F]' }}
                "
            >

                <i class="fas fa-location-dot"></i>

                Track Shipment

            </span>


            {{-- Heading --}}
            <h2
                class="
                    font-bold
                    leading-tight
                    mb-5

                    {{ $headingClass }}
                "
            >

                {{ $heading }}

            </h2>


            {{-- Description --}}
            <p
                class="
                    max-w-2xl
                    mx-auto
                    mb-8
                    leading-relaxed

                    {{ $descriptionClass }}
                "
            >

                {{ $description }}

            </p>


            {{-- Tracking Form --}}
            <div
                class="
                    max-w-3xl
                    mx-auto

                    {{ $isCompact
                        ? 'max-w-5xl'
                        : '' }}
                "
            >

                <form
                    action="{{ route('tracking.track') }}"
                    method="POST"
                >

                    @csrf


                    <div
                        class="
                            flex
                            flex-col
                            sm:flex-row
                            gap-3

                            {{ $isHomepage || !$isCompact
                                ? 'bg-white p-3 rounded-2xl shadow-xl'
                                : '' }}
                        "
                    >

                        {{-- Input --}}
                        <div class="relative flex-1">

                            <div
                                class="absolute inset-y-0 left-0
                                    flex items-center pl-5
                                    pointer-events-none"
                            >

                                <i class="fas fa-box
                                    text-[#303791]">
                                </i>

                            </div>


                            <input
                                type="text"
                                name="tracking_number"
                                value="{{ old('tracking_number') }}"
                                placeholder="Enter tracking or container number"
                                autocomplete="off"
                                required

                                class="
                                    w-full
                                    pl-12
                                    pr-5
                                    py-4
                                    rounded-xl
                                    border
                                    border-gray-200
                                    text-gray-800
                                    placeholder-gray-400
                                    focus:outline-none
                                    focus:ring-2
                                    focus:ring-[#303791]/20
                                    focus:border-[#303791]
                                    transition
                                "
                            >

                        </div>


                        {{-- Button --}}
                        <button
                            type="submit"

                            class="
                                bg-[#EA222F]
                                hover:bg-[#d11a26]
                                text-white
                                font-semibold
                                px-8
                                py-4
                                rounded-xl
                                transition-all
                                duration-300
                                hover:shadow-lg
                                flex
                                items-center
                                justify-center
                                gap-2
                                whitespace-nowrap
                            "
                        >

                            <i class="fas fa-search"></i>

                            Track Shipment

                        </button>

                    </div>


                    {{-- Error --}}
                    @error('tracking_number')

                        <div
                            class="
                                mt-4
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
                                rounded-lg
                                text-left
                            "
                        >

                            <i class="fas fa-circle-exclamation"></i>

                            <span>
                                {{ $message }}
                            </span>

                        </div>

                    @enderror


                    {{-- Helper Text --}}
                    <div
                        class="
                            mt-4
                            flex
                            flex-col
                            sm:flex-row
                            justify-between
                            gap-2
                            text-xs

                            {{ $helperClass }}
                        "
                    >

                        <span>
                            <i class="fas fa-shield-halved mr-1"></i>
                            Secure shipment tracking
                        </span>

                        <span>
                            Track using your tracking or container number
                        </span>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>