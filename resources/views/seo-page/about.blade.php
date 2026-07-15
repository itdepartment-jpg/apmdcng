<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - APMDC Shipping</title>

    <!-- CSS Assets -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(234, 34, 47, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .service-item:hover::before {
            left: 100%;
        }

        .floating-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .floating-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .accent-border {
            border-left: 4px solid #EA222F;
        }

        .gradient-text {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-pattern {
            background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-[#EA222F] border-solid h-16 w-16"></div>
    </div>

    <!-- Navigation -->
    @include('partials.nav')

    <!-- Hero Section (Unchanged) -->
    <section class="relative hero-bg text-white min-h-[80vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    About <span class="text-[#EA222F]">APMDC</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    ISO 9001:2015 Accredited Shipping Agency & Logistics Services Provider
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#story"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Story
                    </a>
                    <a href="#services"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Our Services
                    </a>
                </div>
            </div>
        </div>

        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#story" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Our Story Section - Redesigned -->
    {{-- <section id="story" class="py-20 bg-white section-pattern">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="bg-white rounded-2xl p-8 floating-card">
                        <span class="text-[#EA222F] font-semibold tracking-wider text-sm uppercase">WHO WE ARE</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Leading Shipping Agency <span class="gradient-text">Since 2005</span>
                        </h2>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                            APMDC is an <span class="font-semibold text-[#303791]">ISO 9001:2015 accredited</span>, fully licenced, well structured shipping agency. Operating since 2005, we offer the complete range of shipping and logistics services required by vessel owners and charterers for their ships operating in Nigerian waters.
                        </p>
                        <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                            Our head office is in Lagos, with branch offices in Port Harcourt, Warri, Calabar and Onne and a European representative office based in the UK.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                            <div class="bg-gradient-to-br from-[#303791]/5 to-[#EA222F]/5 p-6 rounded-xl border border-gray-100">
                                <div class="flex items-center mb-3">
                                    <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800">Our Mission</h3>
                                </div>
                                <p class="text-gray-600 text-sm">
                                    To provide comprehensive, efficient, and reliable shipping and logistics services that exceed client expectations.
                                </p>
                            </div>
                            <div class="bg-gradient-to-br from-[#303791]/5 to-[#EA222F]/5 p-6 rounded-xl border border-gray-100">
                                <div class="flex items-center mb-3">
                                    <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800">Our Vision</h3>
                                </div>
                                <p class="text-gray-600 text-sm">
                                    To be Nigeria's premier shipping agency, recognized for excellence in maritime services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-2xl floating-card">
                            <div class="text-5xl font-bold mb-2">18+</div>
                            <p class="text-white/90 font-medium">Years of Excellence</p>
                            <div class="mt-4 h-1 bg-white/30 rounded-full"></div>
                        </div>
                        <div class="bg-white p-8 rounded-2xl floating-card border border-gray-100">
                            <div class="text-5xl font-bold mb-2 gradient-text">ISO</div>
                            <p class="text-gray-600 font-medium">9001:2015 Certified</p>
                            <div class="mt-4 h-1 bg-gradient-to-r from-[#303791] to-[#EA222F] rounded-full"></div>
                        </div>
                        <div class="bg-white p-8 rounded-2xl floating-card border border-gray-100">
                            <div class="text-5xl font-bold mb-2 gradient-text">6</div>
                            <p class="text-gray-600 font-medium">Strategic Locations</p>
                            <div class="mt-4 h-1 bg-gradient-to-r from-[#303791] to-[#EA222F] rounded-full"></div>
                        </div>
                        <div class="bg-gradient-to-br from-[#EA222F] to-[#303791] text-white p-8 rounded-2xl floating-card">
                            <div class="text-5xl font-bold mb-2">100%</div>
                            <p class="text-white/90 font-medium">Fully Licensed</p>
                            <div class="mt-4 h-1 bg-white/30 rounded-full"></div>
                        </div>
                    </div>

                    <div class="mt-8 bg-white rounded-2xl p-6 floating-card border border-gray-100">
                        <h3 class="font-bold text-xl mb-4 text-gray-800">Our Global Reach</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-center">
                                <div class="bg-[#EA222F]/10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-xl"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Lagos</p>
                                <p class="text-xs text-gray-500">Head Office</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-[#303791]/10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#303791] text-xl"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Port Harcourt</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-[#EA222F]/10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-xl"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Warri</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-[#303791]/10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-globe text-[#303791] text-xl"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">UK</p>
                                <p class="text-xs text-gray-500">Europe Office</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="story" class="py-20 bg-white section-pattern">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Left Column - Text Content -->
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="bg-white rounded-2xl p-8 floating-card">
                        <span class="text-[#EA222F] font-semibold tracking-wider text-sm uppercase">WHO WE ARE</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Leading Shipping Agency <span class="gradient-text">Since 2005</span>
                        </h2>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                            APMDC is an <span class="font-semibold text-[#303791]">ISO 9001:2015 accredited</span>,
                            fully licenced, well structured shipping agency. Operating since 2005, we offer the complete
                            range of shipping and logistics services required by vessel owners and charterers for their
                            ships operating in Nigerian waters.
                        </p>
                        {{-- <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                            Our head office is in Lagos, with branch offices in Port Harcourt, Warri, Calabar and Onne
                            and a European representative office based in the UK.
                        </p> --}}

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                            <div
                                class="bg-gradient-to-br from-[#303791]/5 to-[#EA222F]/5 p-6 rounded-xl border border-gray-100">
                                <div class="flex items-center mb-3">
                                    <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800">Our Mission</h3>
                                </div>
                                <p class="text-gray-600 text-sm">
                                    To streamline the complexity of cargo logistics with dependable solutions,
                                    delivering unparalleled customer service by leveraging our extensive knowledge and
                                    firthand experience in the local shipping sector
                                </p>
                            </div>
                            <div
                                class="bg-gradient-to-br from-[#303791]/5 to-[#EA222F]/5 p-6 rounded-xl border border-gray-100">
                                <div class="flex items-center mb-3">
                                    <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800">Our Vision</h3>
                                </div>
                                <p class="text-gray-600 text-sm">
                                    To champion integrity, diligence, and trust as pillars of exemplary work ethics,
                                    while actively fighting corruption and setting a leading example
                                </p>
                            </div>
                        </div>


                    </div>

                    <!-- Global Reach -->
                    <div class="mt-6 bg-white rounded-2xl p-6 floating-card border border-gray-100">
                        <h3 class="font-bold text-xl mb-4 text-gray-800">Our National Reach</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-center">
                                <div
                                    class="bg-[#EA222F]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Lagos</p>
                                <p class="text-xs text-gray-500">Main Office</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#303791]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#303791] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Port Harcourt</p>
                                <p class="text-xs text-gray-500">Main Office</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#EA222F]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Abuja</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#303791]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#303791] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Warri</p>
                                <p class="text-xs text-gray-500">Branch </p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#EA222F]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Calabar</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#303791]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#303791] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Onne Kano</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Column - Board Meeting Photo & Stats -->
                <div class="lg:w-1/2" data-aos="fade-left">
                    <!-- Board Meeting Photo Section -->
                    <div class="relative mb-8 group">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                            <img src="{{ asset('images/apmdc_board.png') }}"
                                alt="APMDC Board of Directors strategic meeting - Leadership team planning maritime logistics operations"
                                class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105"
                                loading="lazy">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Photo Caption Overlay -->
                        <div
                            class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm rounded-lg p-4 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="flex items-center space-x-2">
                                <div class="bg-[#EA222F] p-2 rounded-full">
                                    <i class="fas fa-users text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Strategic Leadership</p>
                                    <p class="text-gray-600 text-xs">APMDC Q3 Strategic Review Meeting</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    {{-- <div class="grid grid-cols-2 gap-4">
                        <div
                            class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-6 rounded-2xl floating-card">
                            <div class="text-3xl font-bold mb-2">18+</div>
                            <p class="text-white/90 font-medium text-sm">Years of Excellence</p>
                            <div class="mt-3 h-1 bg-white/30 rounded-full"></div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl floating-card border border-gray-100">
                            <div class="text-3xl font-bold mb-2 gradient-text">ISO</div>
                            <p class="text-gray-600 font-medium text-sm">9001:2015 Certified</p>
                            <div class="mt-3 h-1 bg-gradient-to-r from-[#303791] to-[#EA222F] rounded-full"></div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl floating-card border border-gray-100">
                            <div class="text-3xl font-bold mb-2 gradient-text">6</div>
                            <p class="text-gray-600 font-medium text-sm">Strategic Locations</p>
                            <div class="mt-3 h-1 bg-gradient-to-r from-[#303791] to-[#EA222F] rounded-full"></div>
                        </div>
                        <div
                            class="bg-gradient-to-br from-[#EA222F] to-[#303791] text-white p-6 rounded-2xl floating-card">
                            <div class="text-3xl font-bold mb-2">100%</div>
                            <p class="text-white/90 font-medium text-sm">Fully Licensed</p>
                            <div class="mt-3 h-1 bg-white/30 rounded-full"></div>
                        </div>
                    </div> --}}

                    <!-- Global Reach -->
                    {{-- <div class="mt-6 bg-white rounded-2xl p-6 floating-card border border-gray-100">
                        <h3 class="font-bold text-xl mb-4 text-gray-800">Our Global Reach</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-center">
                                <div
                                    class="bg-[#EA222F]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Lagos</p>
                                <p class="text-xs text-gray-500">Head Office</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#303791]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#303791] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Port Harcourt</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#EA222F]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-map-marker-alt text-[#EA222F] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Warri</p>
                                <p class="text-xs text-gray-500">Branch</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="bg-[#303791]/10 p-3 rounded-full w-14 h-14 flex items-center justify-center mx-auto mb-2">
                                    <i class="fas fa-globe text-[#303791] text-lg"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">UK</p>
                                <p class="text-xs text-gray-500">Europe Office</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section - Redesigned -->
    <section id="services" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider text-sm uppercase">OUR EXPERTISE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive <span class="gradient-text">Maritime Solutions</span>
                </h2>
                <p class="text-gray-600 text-lg">
                    We provide shipping and logistics services across the whole of Nigeria, ensuring seamless operations
                    for vessel owners and charterers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-ship text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Ships Husbandry</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We provide comprehensive, reliable vessel support services covering provisioning,
                                maintenance, and quick logistical resupply while in port.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-anchor text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Rig movement</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We manage the highly specialized logistics, towage coordination, and technical support
                                required for safe and compliant rig transfers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-gas-pump text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Crewing</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We manage the efficient mobilization, sign-on/off, and full logistics support for your
                                vessel and rig personnel.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="250">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-passport text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Documentation</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Our in-house specialists meticulously prepare and process all mandatory shipping,
                                customs, and immigration paperwork.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-user-shield text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Security</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Streamlined clearance processes without officials boarding.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                {{-- <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="350">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-users text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Crewing Services</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Comprehensive crew management and support services.
                            </p>
                        </div>
                    </div>
                </div> --}}

                <!-- Service 1 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-ship text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Rapid & Compliant Port Agency</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Guarantee fast vessel turnaround with comprehensive husbandry, documentation, crew
                                logistics, and specialized customs clearance at all Nigerian ports.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class=" fas fa-gas-pump text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Dedicated Support for Offshore Assets</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Critical logistics and supply chain services for marine platforms, rigs, and deep-water
                                projects, including rig moves, procurement, and crew rotations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-warehouse text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Secure Storage and Inland Distribution</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Leverage our bonded and general warehousing facilities in strategic port locations,
                                offering efficient inventory management and reliable last-mile delivery.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="250">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-file-contract text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Vessel Documentation & Clearance</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Comprehensive documentation services including vessel registration, permits, and
                                regulatory compliance for smooth port operations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-gas-pump text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Bunkering Services</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Reliable and efficient marine fuel supply services with quality assurance and
                                competitive pricing across all Nigerian ports.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="350">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-users text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Crewing Services</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Comprehensive crew management and support services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-shield-alt text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Offshore Clearances</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We facilitate secure, specialized regulatory clearance processes for vessels operating
                                exclusively offshore without officials going on board.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="450">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-passport text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Expatriate Quota & Visas</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We manage the acquisition and maintenance of necessary expatriate quota positions and
                                all related working visas for foreign personnel.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 9 -->
                <div class="service-item bg-white p-6 rounded-2xl floating-card" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-anchor text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Vessel Clearance Services</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                We handle all complex pre-arrival documentation, port coordination, and final sailing
                                clearances with local authorities for vessels in Nigerian waters.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="mt-12 text-center" data-aos="fade-up">
                <a href="#"
                    class="inline-flex items-center text-[#EA222F] font-semibold hover:text-[#303791] transition-colors">
                    <span>View All Services</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div> --}}
        </div>
    </section>

    <!-- Certifications Section - Redesigned -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 bg-white rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-60 h-60 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Left Column - Accreditations -->
                <div class="lg:w-1/2 mb-10 lg:mb-0" data-aos="fade-right">
                    <span class="text-white/80 font-semibold tracking-wider text-sm uppercase">QUALITY ASSURED</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-6">
                        Accreditations & Awards
                    </h2>
                    <p class="text-lg text-white/90 mb-8 leading-relaxed">
                        Our certifications and awards demonstrate our commitment to excellence, compliance, and
                        leadership
                        in maritime and logistics services across Africa and beyond.
                    </p>

                    <!-- Accreditations List -->
                    <div class="mb-10">
                        <h3 class="text-xl font-bold mb-4 flex items-center">
                            <i class="fas fa-certificate mr-3 text-white/90"></i>
                            Accreditations
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-white mt-1 mr-3"></i>
                                <span class="text-white/90">ISO 9001:2015 Certified</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-white mt-1 mr-3"></i>
                                <span class="text-white/90">FCPA Compliant</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-white mt-1 mr-3"></i>
                                <span class="text-white/90">NCAGE Certification</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-white mt-1 mr-3"></i>
                                <span class="text-white/90">Certified by Nigerian Content Development Monitoring Board
                                    (NCDMB)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-white mt-1 mr-3"></i>
                                <span class="text-white/90">Focused on Industry and International Compliance</span>
                            </div>
                        </div>
                    </div>

                    <!-- Awards List -->
                    <div>
                        <h3 class="text-xl font-bold mb-4 flex items-center">
                            <i class="fas fa-award mr-3 text-white/90"></i>
                            Awards & Recognition
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-trophy text-yellow-300 mt-1 mr-3"></i>
                                <span class="text-white/90">2015 African Most Trusted Quality Shipping and Logistics
                                    Company</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-trophy text-yellow-300 mt-1 mr-3"></i>
                                <span class="text-white/90">Nominee and Award Winner by African Quality
                                    Institute</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Credentials Card -->
                <div class="lg:w-2/5 flex justify-center" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20 w-full max-w-md">
                        <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                            <div
                                class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-certificate text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Credentials</h3>
                            <div class="space-y-5">
                                <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                    <span class="text-gray-700 font-medium">ISO 9001:2015</span>
                                    <span class="text-[#EA222F] font-bold">Certified</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                    <span class="text-gray-700 font-medium">NIMASA Approved</span>
                                    <span class="text-[#EA222F] font-bold">Licensed</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                    <span class="text-gray-700 font-medium">FCPA Compliant</span>
                                    <span class="text-[#EA222F] font-bold">Certified</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                    <span class="text-gray-700 font-medium">NCAGE Certified</span>
                                    <span class="text-[#EA222F] font-bold">Approved</span>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <span class="text-gray-700 font-medium">Operating Since</span>
                                    <span class="text-[#EA222F] font-bold">2005</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Redesigned -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl floating-card border border-gray-100">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Ready to Partner with <span class="gradient-text">APMDC</span>?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust our 18+ years of experience and ISO-certified processes for your shipping and logistics
                        needs in Nigerian waters.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        {{-- <button
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-medium py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Get a Quote
                        </button> --}}
                        <a href="{{ route('contact.show') }}" class="inline-block">
                            <button
                                class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-medium py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                                <span class="flex items-center justify-center">
                                    <i class="fas fa-phone-alt mr-2"></i> Contact Our Team
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 bg-[#EA222F] text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]"
        aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animate on Scroll
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100
        });
    </script>
</body>

</html>
