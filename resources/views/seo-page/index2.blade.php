<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APMDCNG - Premium Ship Agency & Logistics Services</title>

    <!-- CSS Assets -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
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

<body class="bg-[#FAFAFA] text-neutdrk font-inter antialiased overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-accent border-solid h-16 w-16"></div>
    </div>

    <!-- Navigation -->
    @include('partials.nav')

    <!-- Hero Section -->
    <section id="home"
        class="relative overflow-hidden bg-white text-gray-900 min-h-screen flex items-center pt-40 2xl:pt-24 pb-20">
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute top-0 left-0 w-full h-full opacity-5 bg-[url('{{ asset('images/world-map-light.svg') }}')] bg-center bg-no-repeat">
            </div>
            <div
                class="absolute top-1/2 left-1/2 w-[120%] h-[120%] bg-[radial-gradient(circle_at_center,rgba(234,34,47,0.05)_0%,transparent_70%)]">
            </div>
        </div>

        <!-- Floating Shipping Icons -->
        <div class="absolute top-20 left-10 w-16 h-16 z-50 opacity-10 text-accent animate-float-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-28 h-28">
                <path fill="none" stroke="#EA222F"
                    d="M0 23.5a3 3 0 0 0 3-3a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 0 0 3 3M5.5 10.237V3.5h13v6.737M12 0v3.5M5.5 19c0-.174-.12-.77-.279-1.476c-.448-2.004-1.342-3.878-2.55-5.538L2.5 11.75v-.25l8.118-3.418A2.26 2.26 0 0 0 12 6m0 0c0 .909.545 1.73 1.383 2.082L21.5 11.5v.25l-.172.236c-1.207 1.66-2.101 3.534-2.55 5.538c-.157.705-.278 1.302-.278 1.476M12 6v13"
                    stroke-width="1" />
            </svg>
        </div>
        <div class="absolute bottom-1/4 right-20 w-20 h-20 opacity-10 text-accent animate-float-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-28 h-28">
                <path fill="#EA222F"
                    d="M5.688 19.116q-1.092 0-1.851-.763q-.76-.763-.76-1.853H2.5q-.343 0-.575-.232t-.233-.576V6.616q0-.691.463-1.153T3.308 5h11.615q.667 0 1.141.475t.475 1.14v2h1.5q.383 0 .726.172q.344.172.566.475l2.815 3.79q.081.101.121.222t.04.263v2.155q0 .344-.231.576t-.576.232h-.808q0 1.09-.764 1.853t-1.855.762t-1.852-.762t-.76-1.853H8.309q0 1.096-.764 1.856t-1.856.76m.004-1q.675 0 1.145-.47t.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-3-2.615h.647q.213-.662.869-1.138t1.484-.478q.79 0 1.466.468q.675.467.888 1.148h7.493V6.616q0-.27-.174-.443T14.923 6H3.308q-.231 0-.423.192q-.193.193-.193.424zm15.385 2.616q.675 0 1.145-.47q.47-.471.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-1.54-4.615h4.712L18.5 9.866q-.096-.116-.221-.183T18 9.616h-1.461zm-7.422-2.75" />
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Hero Content -->
                <div class="lg:w-1/2 mb-16 lg:mb-0" data-aos="fade-right">
                    <div class="inline-block bg-accent/10 px-4 py-2 rounded-full mb-6 border border-accent/20">
                        <span class="text-accent font-medium">Trading since 2005</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl 2xl:text-6xl font-bold leading-[2.5rem] mb-4">
                        <span class="text-accent">Seamless Ship Agency & Logistics in Nigeria: </span> ISO-Certified
                        Excellence
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 max-w-2xl">
                        Decades of trusted maritime support—from port clearance to complex offshore operations
                        across Lagos, Onne, and beyond.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact.show') }}" class="inline-block">
                            <button
                                class="relative overflow-hidden group bg-accent text-white font-medium py-4 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg">
                                <span class="relative z-10">Get Quote</span>
                            </button>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <!-- <div class="mt-12 flex flex-wrap items-center gap-8">
                        <div class="flex items-center gap-4 bg-gray-50 px-6 py-3 rounded-full">
                            <div class="flex -space-x-3">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-white" alt="Client 1">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-white" alt="Client 2">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-white" alt="Client 3">
                            </div>
                            <div>
                                <p class="font-medium text-gray-700">Trusted by Industry Leaders</p>
                                <div class="flex items-center mt-1">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <span class="ml-2 text-gray-500 text-sm">5.0 (reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- Hero Visual -->
                <div class="lg:w-1/2 relative" data-aos="fade-left">
                    <div class="relative">
                        <!-- Main Hero Image -->
                        <div
                            class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100 transform transition-transform duration-1000 hover:scale-[1.02]">
                            <img src="{{ asset('images/amp.jpg') }}" alt="Modern shipping terminal"
                                class="w-full h-auto object-cover" style="min-height: 500px;">
                            <div class="absolute inset-0 bg-gradient-to-t from-white/30 to-transparent"></div>
                        </div>

                        <!-- Floating Stats Card -->
                        <div
                            class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg border border-gray-100 hidden lg:block animate-float-3">
                            <div class="flex items-start gap-4">
                                <div class="bg-accent/10 p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="#EA222F">
                                        <path
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Strategic Presence</p>
                                    <p class="text-xs text-gray-500">Offices in Lagos, Onne, PH, Warri, Abuja & Calabar
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Animated Tracking Line -->
                        <div class="absolute top-1/2 -right-20 hidden xl:block">
                            <svg width="200" height="120" viewBox="0 0 200 120" fill="none"
                                class="animate-draw-line">
                                <path d="M1 60C1 60 30 1 70 30C110 59 130 1 170 30C210 59 199 60 199 60"
                                    stroke="#EA222F" stroke-width="2" stroke-dasharray="280" stroke-dashoffset="280"
                                    fill="none" />
                                <circle cx="199" cy="60" r="4" fill="#EA222F" class="animate-pulse" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scrolling Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up"> <span
                    class="text-accent font-semibold tracking-wider">WHY APMDC</span>
                <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3 mb-6"> The APMDC Advantage: Trusted,
                    Compliant, and Connected </h2>
                <p class="text-gray-600"> Leveraging decades of ISO-certified excellence to ensure swift, risk-free
                    maritime and logistics operations across Nigeria. </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                            viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">ISO 9001:2015 Certified Compliance</h3>
                    <p class="text-gray-600">
                        Our commitment to international quality standards guarantees efficient, structured operations
                        and minimizes regulatory risk for your vessels in Nigerian waters.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                            viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                            <path
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Nationwide Port & Offshore Reach</h3>
                    <p class="text-gray-600">
                        With strategically located offices in Lagos, Port Harcourt, Warri, Calabar, and Onne, we ensure
                        seamless, rapid support wherever your operations take you.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                            viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Decades of Maritime Expertise</h3>
                    <p class="text-gray-600">
                        Established in 2005, our seasoned team navigates the complexities of Nigerian customs and port
                        processes, ensuring fast, compliant vessel turnaround times.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                            viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                            <path
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">End-to-End Operational Visibility</h3>
                    <p class="text-gray-600">
                        Utilize our digital systems for real-time tracking, transparent reporting, and continuous
                        communication from pre-arrival to vessel departure.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                            viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                            <path
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Dedicated Offshore Specialists</h3>
                    <p class="text-gray-600">
                        We provide specialized logistics support including rig movement, crew change coordination, and
                        dedicated supply chain essential for challenging deep-water projects.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-accent text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">

                <div class="p-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-bold mb-4">Established in 2005</h3>
                    <p class="text-lg font-medium">Decades of trusted maritime logistics</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-bold mb-4">Nationwide Reach</h3>
                    <p class="text-lg font-medium">Offices in Lagos, PH, Warri, Calabar, Abuja & Onne</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-bold mb-4">Full-Service Expertise</h3>
                    <p class="text-lg font-medium">From clearance to crewing & offshore support</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-2xl font-bold mb-4">ISO 9001:2015 Certified</h3>
                    <p class="text-lg font-medium">Proven commitment to international standards</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->

 <!-- Services Section - Redesigned -->
    <section id="services" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider text-sm uppercase">INDUSTRIES WE SERVE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Tailored Logistics Solutions <span class="gradient-text">for Every Industry</span>
                </h2>
                <p class="text-gray-600 text-lg">
                    We provide reliable maritime and logistics solutions tailored to the unique needs of businesses across diverse industries.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Oil & Gas Logistics
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Supporting Nigeria's oil and gas industry with dependable offshore logistics, marine vessel support, equipment transportation, cargo handling, and supply chain coordination. We ensure critical materials reach offshore platforms and operational sites safely and on schedule.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

                <!-- Service 2 -->
                <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Manufacturing & Industrial Logistics
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Helping manufacturers optimize their supply chain through freight forwarding,
                                cargo transportation, warehousing, customs clearance, and industrial logistics
                                services, ensuring raw materials and finished goods move efficiently.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

                <!-- Service 3 -->
                <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Construction & Project Cargo
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Providing specialized project cargo logistics, heavy equipment transportation, oversized cargo handling, and marine support services for construction and infrastructure projects throughout Nigeria and beyond.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

                <!-- Service 4 -->
              <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Agriculture & Agro-Export
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Supporting agricultural businesses with reliable export logistics, cargo transportation, customs documentation, and supply chain management for agricultural produce, fertilizers, machinery, and farming equipment.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

                <!-- Service 5 -->
             <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Import & Export Businesses
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Simplifying international trade through freight forwarding, customs brokerage, cargo documentation, port operations, and import/export logistics, helping businesses move goods across global markets with confidence.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

                 <!-- Service 6 -->
              <a href="#" class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                    data-aos="fade-up"  data-aos-delay="150">

                    <div class="flex items-start mb-4">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                            <i class="fas fa-industry text-lg"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Government & Public Sector
                            </h3>

                            <p class="text-gray-600 mt-2 text-sm">
                                Delivering dependable marine logistics, cargo handling, procurement support, and transportation services for government agencies, public infrastructure projects, and institutional operations.
                            </p>

                            <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                                Learn More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </div>

                </a>

               
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


    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16">
                <div class="mb-8 lg:mb-0 lg:w-1/2">
                    <span class="text-accent font-semibold tracking-wider">WHAT WE OFFER</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3">
                        Specialized Maritime & Logistics Services Tailored to Your Success
                    </h2>
                </div>
                <div class="lg:w-1/2">
                    <p class="text-gray-600">
                        From port agency to complex offshore support, APMDC delivers reliable, compliant, and end-to-end
                        solutions across Nigeria.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- 1. Rapid & Compliant Port Agency -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="100">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap3.jpg') }}" alt="Rapid & Compliant Port Agency"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Rapid & Compliant Port Agency
                    </a>
                </h3>
                <p class="text-gray-600 text-sm">
                    Ensure smooth port operations with our professional ship agency services,
                    including vessel clearance, regulatory compliance, crew coordination,
                    documentation, and operational support for efficient turnaround at Nigerian ports.
                </p>
            </div>
        </div>
    </div>

    <!-- 2. Dedicated Support for Offshore Assets -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="150">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap1.webp') }}" alt="Dedicated Support for Offshore Assets"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                 <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Dedicated Support for Offshore Assets
                    </a>
                </h3>
                

                <p class="text-gray-600 text-sm">
                    Reliable offshore logistics and marine support services including vessel
                    coordination, equipment transportation, personnel logistics, and supply
                    chain management for offshore operations.
                </p>
            </div>
        </div>
    </div>

    <!-- 3. Customs Clearance & Inland Distribution -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="200">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap2.jpg') }}" alt="Customs Clearance & Inland Distribution"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Customs Clearance & Inland Distribution
                    </a>
                </h3>
                
                <p class="text-gray-600 text-sm">
                    Simplify cargo movement with customs clearance, regulatory compliance,
                    cargo transportation, and inland distribution services that keep your
                    shipments moving without delays.
                </p>
            </div>
        </div>
    </div>

    <!-- 4. Groupage Services -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="250">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap2.jpg') }}" alt="Groupage Services"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Groupage Services
                    </a>
                </h3>

                <p class="text-gray-600 text-sm">
                    Save on shipping costs with our groupage and consolidated cargo services,
                    providing secure, reliable, and cost-effective freight solutions for
                    importers and exporters.
                </p>
            </div>
        </div>
    </div>

    <!-- 5. Ship-to-Shore Operations -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="300">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap2.jpg') }}" alt="Ship-to-Shore Operations"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Ship-to-Shore Operations
                    </a>
                </h3>
                <p class="text-gray-600 text-sm">
                    Safe and efficient transfer of cargo, equipment, and personnel between
                    vessels and shore through coordinated marine logistics and operational
                    excellence.
                </p>
            </div>
        </div>
    </div>

    <!-- 6. Warehousing & Inventory Management -->
    <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
        data-aos="fade-up" data-aos-delay="350">

        <div class="h-1/2 overflow-hidden">
            <img src="{{ asset('images/ap2.jpg') }}" alt="Warehousing & Inventory Management"
                class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        </div>

        <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="#"
                        class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                        Warehousing & Inventory Management
                    </a>
                </h3>
                <p class="text-gray-600 text-sm">
                    Secure warehousing, inventory control, order fulfillment, and nationwide
                    distribution services designed to improve supply chain efficiency and
                    business performance.
                </p>
            </div>
        </div>
    </div>

</div>
            

            <div class="text-center mt-16" data-aos="fade-up">
                <a href="{{ route('about') }}" class="inline-block">
                    <button
                        class="bg-transparent border-2 border-accent text-accent font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-accent hover:text-white hover:shadow-lg">
                        Learn More
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16">
                <div class="mb-8 lg:mb-0 lg:w-1/2">
                    <span class="text-accent font-semibold tracking-wider">CLIENT TESTIMONIALS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3">
                        Proven Partnerships: Hear From Our Industry Leaders
                    </h2>
                </div>
                <div class="lg:w-1/2">
                    <p class="text-gray-600">
                        Don't just take our word for it. Read how APMDC delivers operational certainty and efficiency
                        for clients across the maritime and energy sectors.
                    </p>
                </div>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="bg-[#FAFAFA] p-10 rounded-xl h-full">
                            <div class="mb-6">
                                <div>
                                    <p class="font-semibold text-lg">M. Adebayo</p>
                                    <p class="text-sm text-gray-500">Fleet Operations Manager, Global Tankers Inc.</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                            <blockquote class="text-lg italic text-gray-700">
                                "APMDC's expertise in port documentation and clearance is unmatched. They cut our
                                average vessel turnaround time by 18%, which has significantly improved our routing and
                                revenue per call."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="bg-[#FAFAFA] p-10 rounded-xl h-full">
                            <div class="mb-6">
                                <div>
                                    <p class="font-semibold text-lg">D. Okoro</p>
                                    <p class="text-sm text-gray-500">Marine Superintendent, Offshore Energy Solutions
                                    </p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                            <blockquote class="text-lg italic text-gray-700">
                                "For our recent rig move, APMDC managed the complex logistics, specialized customs, and
                                crewing with flawless execution. Their planning ensured zero downtime and full
                                regulatory compliance."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="bg-[#FAFAFA] p-10 rounded-xl h-full">
                            <div class="mb-6">
                                <div>
                                    <p class="font-semibold text-lg">S. Johnson</p>
                                    <p class="text-sm text-gray-500">Supply Chain Director, African Trade Corp</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                            <blockquote class="text-lg italic text-gray-700">
                                "We rely on APMDC's warehouse facilities and distribution network for our regional
                                supply chain. Their inventory transparency and on-time delivery have reduced our storage
                                costs by 25%."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="bg-[#FAFAFA] p-10 rounded-xl h-full">
                            <div class="mb-6">
                                <div>
                                    <p class="font-semibold text-lg">T. Green</p>
                                    <p class="text-sm text-gray-500">Logistics Procurement Lead, International Shipping
                                        Lines</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                            <blockquote class="text-lg italic text-gray-700">
                                "When operating in Nigerian waters, compliance is non-negotiable. APMDC serves as our
                                vital shield, ensuring every process meets local and international standards. Absolute
                                peace of mind."
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Slider Pagination -->
                <div class="swiper-pagination mt-8"></div>

                <!-- Slider Navigation -->
                <div
                    class="swiper-button-next hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white shadow-md hover:bg-accent hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </div>
                <div
                    class="swiper-button-prev hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white shadow-md hover:bg-accent hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    @php
        $homepageFaqs = [
            [
                'question' => 'What services does APMDC Logistics provide?',
                'answer' => 'APMDC Logistics provides ship agency, offshore logistics, supply chain management, warehousing, customs clearance, and marine support services across Nigeria’s major ports.',
            ],
            [
                'question' => 'Where are your operations located?',
                'answer' => 'Our offices and operations are located in Lagos, Onne, Warri, and Port Harcourt, giving us strategic coverage across Nigeria’s key maritime and offshore hubs.',
            ],
            [
                'question' => 'How can I request a quote?',
                'answer' => 'You can request a quote by clicking the “Request a Quote” button on our website or by contacting our team directly via phone, email, or WhatsApp.',
            ],
            [
                'question' => 'Do you handle offshore logistics and supply chain support?',
                'answer' => 'Yes. Our offshore logistics specialists provide end-to-end support for oil and gas operations, including crew changes, vessel support, marine supplies, cargo movement, and supply chain coordination.',
            ],
            [
                'question' => 'How do I contact APMDC Logistics for urgent assistance?',
                'answer' => 'You can contact us by phone, email, or WhatsApp. Our support team is available Monday to Friday, from 8:00 AM to 5:00 PM.',
            ],
        ];
    @endphp

    @include('partials.faq-section', [
        'faqs' => $homepageFaqs,
        'faqId' => 'homepage-faq',
        'eyebrow' => 'Help & Support',
        'heading' => 'Common Questions',
        'intro' => 'Quick answers for clients planning logistics, vessel, or offshore support in Nigeria.',
        'sectionClass' => 'py-20 bg-[#FAFAFA]',
        'compact' => true,
    ])

    <section class="pb-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6 text-center">
            <a href="{{ route('faq') }}"
                class="inline-flex items-center justify-center bg-[#EA222F] text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg">
                View All FAQs
            </a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-accent text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Need a Logistics Partner for Your Industry?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Whether you operate in oil and gas, manufacturing, construction, agriculture, import and export, or the public sector, 
                    APMDC delivers reliable shipping and logistics solutions designed to keep your business moving.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact.show') }}" class="inline-block">
                        <button
                            class="bg-white text-accent font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                            Request a Quote
                        </button>
                    </a>


                    {{-- <button
                        class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-2"></i> +234-1-4541278
                        </span>
                    </button> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')
    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 bg-accent text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]"
        aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger = document.getElementById('hamburger');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburger.classList.toggle('transform');
            hamburger.classList.toggle('rotate-90');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                hamburger.classList.remove('transform', 'rotate-90');
            });
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white', 'shadow-md');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-white', 'shadow-md');
                navbar.classList.add('bg-transparent');
            }
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

        // Initialize Testimonial Slider
        const testimonialSwiper = new Swiper('.testimonial-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 800,
            grabCursor: true,
            spaceBetween: 30,
            slidesPerView: 1,
            centeredSlides: true,
            effect: 'coverflow',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.2,
                },
                1024: {
                    slidesPerView: 1.5,
                }
            }
        });
    </script>
</body>

</html>
