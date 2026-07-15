<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunkering & Fuel Logistics - APMDC Shipping</title>

    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .service-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1567427017944-8e36f2c7dc52?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .premium-card {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
        }

        .feature-card {
            border-left: 4px solid #EA222F;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .fuel-type-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #ea222f 100%);
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

    <!-- Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Bunkering & <span class="text-[#EA222F]">Fuel Logistics</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Reliable marine fuel supply solutions with quality assurance across all Nigerian ports
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Bunkering Services
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Request Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">FUEL SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Premium Marine Fuel Supply Services
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive bunkering and fuel logistics services across all Nigerian ports.
                        Our strategic partnerships with major fuel suppliers ensure reliable, quality-assured marine
                        fuel
                        delivery with competitive pricing and timely service.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With our extensive network and ISO 9001:2015 certified processes, we guarantee efficient fuel
                        supply operations that meet international standards and vessel requirements.
                    </p>

                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Quality Assurance</h3>
                        <p class="text-gray-600">
                            All marine fuels undergo rigorous quality testing and comply with ISO 8217 standards,
                            ensuring optimal vessel performance and engine protection.
                        </p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Bunkering Operations</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">ISO</h3>
                            <p class="text-gray-600">8217 Compliant</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">All</h3>
                            <p class="text-gray-600">Nigerian Ports</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">0%</h3>
                            <p class="text-white/90">Contamination</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fuel Types Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR FUELS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Fuel Portfolio
                </h2>
                <p class="text-gray-600">
                    We supply a complete range of marine fuels meeting international standards and vessel
                    specifications.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- IFO 380 -->
                <div class="service-card fuel-type-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-oil-can text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">IFO 380</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Intermediate Fuel Oil 380cSt for main engine operations
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        High Viscosity
                    </div>
                </div>

                <!-- MGO -->
                <div class="service-card fuel-type-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gas-pump text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Marine Gas Oil</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Low sulfur gas oil for auxiliary engines and ECAs
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Low Sulfur
                    </div>
                </div>

                <!-- IFO 180 -->
                <div class="service-card fuel-type-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-industry text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">IFO 180</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Intermediate Fuel Oil 180cSt for various engine types
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Medium Viscosity
                    </div>
                </div>

                <!-- LSMGO -->
                <div class="service-card fuel-type-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">LSMGO</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Ultra-low sulfur marine gas oil for emission control
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Eco-Friendly
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Bunkering Solutions
                </h2>
                <p class="text-gray-600">
                    End-to-end marine fuel supply services ensuring reliability, quality, and operational efficiency.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ship-to-Ship Bunkering -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Ship-to-Ship Bunkering</h3>
                    <p class="text-gray-600 mb-6">
                        Efficient offshore and port-based ship-to-ship fuel transfer operations with experienced crew
                        and equipment.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Offshore STS operations
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Port-based transfers
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Experienced bunker crews
                        </li>
                    </ul>
                </div>

                <!-- Port Bunkering -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-anchor text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Port Bunkering Services</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive fuel supply services at all Nigerian ports with quick turnaround times and
                        competitive pricing.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            All Nigerian ports covered
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Quick turnaround
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Competitive pricing
                        </li>
                    </ul>
                </div>

                <!-- Fuel Quality Testing -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-flask text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Fuel Quality Assurance</h3>
                    <p class="text-gray-600 mb-6">
                        Rigorous quality testing and certification ensuring all fuels meet ISO 8217 standards and vessel
                        requirements.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            ISO 8217 compliance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Quality certification
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Contamination prevention
                        </li>
                    </ul>
                </div>

                <!-- Emergency Bunkering -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-exclamation-triangle text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Emergency Bunkering</h3>
                    <p class="text-gray-600 mb-6">
                        24/7 emergency fuel supply services for vessels in distress or urgent fuel requirements.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            24/7 emergency response
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Rapid deployment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Priority handling
                        </li>
                    </ul>
                </div>

                <!-- Lubricants Supply -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-oil-well text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Marine Lubricants</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive range of marine lubricants and cylinder oils from leading international brands.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Cylinder oils
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            System oils
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Leading brands
                        </li>
                    </ul>
                </div>

                <!-- Logistics Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-truck-loading text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Fuel Logistics</h3>
                    <p class="text-gray-600 mb-6">
                        Complete fuel logistics management including storage, transportation, and delivery coordination.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Storage management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Transportation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Delivery coordination
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Assurance Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">QUALITY STANDARDS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Uncompromising Quality Assurance
                </h2>
                <p class="text-gray-600">
                    Our commitment to quality ensures optimal vessel performance and operational reliability.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">ISO 8217 Compliance</h3>
                    <p class="text-gray-600">All fuels meet international ISO 8217 standards for marine distillates and
                        residuals.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-vial text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Quality Testing</h3>
                    <p class="text-gray-600">Comprehensive laboratory testing for density, viscosity, sulfur content,
                        and contaminants.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-file-contract text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">BDN Documentation</h3>

                    <p class="text-gray-600">Proper Bunker Delivery Notes and documentation for regulatory compliance.
                    </p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Contamination Control</h3>
                    <p class="text-gray-600">Strict protocols to prevent water, sediment, and microbial contamination.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Port Coverage Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">PORT COVERAGE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Nationwide Bunkering Network
                </h2>
                <p class="text-gray-600">
                    Comprehensive bunkering services available across all major Nigerian ports and offshore locations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-anchor"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Lagos Ports</h3>
                    </div>
                    <p class="text-gray-600 mb-4">APMT Apapa, Tin Can Island, and Lagos Port Complex</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-gas-pump mr-2 text-[#EA222F]"></i>
                        <span>24/7 Availability</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Port Harcourt</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Onne Port, Federal Ocean Terminal, and Port Harcourt Port</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-gas-pump mr-2 text-[#EA222F]"></i>
                        <span>All Fuel Grades</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Warri Port</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Delta Ports Complex and Escravos operations</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-gas-pump mr-2 text-[#EA222F]"></i>
                        <span>Emergency Support</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Offshore Locations</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Ship-to-ship operations in designated offshore zones</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-gas-pump mr-2 text-[#EA222F]"></i>
                        <span>STS Operations</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Bunkering Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    24/7 Emergency Bunkering Services
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Immediate fuel supply response for vessel emergencies, unexpected delays, and urgent bunkering
                    requirements in Nigerian waters.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Emergency: 09087995953
                    </a>
                    <a href="tel:+2349087995931"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-gas-pump mr-3"></i> Bunkering: 09087995931
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl border border-gray-100">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Ready for Reliable Bunkering Services?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust APMDC's quality-assured marine fuel supply with competitive pricing and 24/7 support
                        across all Nigerian ports.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact.show') }}"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Request Bunkering Quote
                        </a>
                        <a href="mailto:bunkering@apmdcng.com"
                            class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Email Bunkering Team
                            </span>
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
