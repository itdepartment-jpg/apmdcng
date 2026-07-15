<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehousing & Distribution - Offshore & Rig Operations | APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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

        .warehouse-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #ea222f 100%);
        }

        .offshore-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1566911187230-89d00d68d0c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .distribution-map {
            background: linear-gradient(rgba(30, 58, 138, 0.9), rgba(234, 34, 47, 0.9)),
                url('https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
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
    <!-- Note: In a real implementation, you would include your navigation partial here -->
    <!-- @include('partials.nav') -->

    <!-- Custom Navigation for Demo -->


    <!-- Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Warehousing & <span class="text-[#EA222F]">Distribution</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive logistics solutions for offshore & rig operations with strategic storage facilities
                    and efficient supply chain management
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">LOGISTICS SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Strategic Offshore Supply Chain Management
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive warehousing and distribution services specifically designed for
                        offshore
                        and rig operations. Our strategically located facilities and experienced logistics team ensure
                        seamless supply chain management for your maritime operations.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With ISO-certified processes and advanced inventory management systems, we guarantee efficient
                        storage, handling, and timely delivery of equipment, spare parts, and consumables to offshore
                        locations.
                    </p>

                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">24/7 Operations</h3>
                        <p class="text-gray-600">
                            Round-the-clock warehousing and distribution services to support continuous offshore
                            operations
                            with emergency response capabilities.
                        </p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">50,000+</h3>
                            <p class="text-white/90">Sq Ft Storage</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Operations</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">ISO</h3>
                            <p class="text-gray-600">9001:2015 Certified</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">2Hr</h3>
                            <p class="text-white/90">Emergency Response</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Offshore Logistics
                </h2>
                <p class="text-gray-600">
                    End-to-end warehousing and distribution solutions tailored for offshore and rig operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Strategic Warehousing -->
                <div class="service-card warehouse-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-warehouse text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Strategic Warehousing</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Secure storage facilities near major ports with specialized areas for different cargo types
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Secure Storage
                    </div>
                </div>

                <!-- Offshore Distribution -->
                <div class="service-card warehouse-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ship text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Offshore Distribution</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Efficient supply chain management for rigs, FPSOs, and offshore installations
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Supply Chain
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="service-card warehouse-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clipboard-list text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Inventory Management</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Advanced tracking systems for real-time inventory control and reporting
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Real-time Tracking
                    </div>
                </div>

                <!-- Emergency Logistics -->
                <div class="service-card warehouse-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-exclamation-triangle text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Emergency Logistics</h3>
                    <p class="text-white/90 text-sm mb-4">
                        24/7 emergency response for critical equipment and spare parts delivery
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        24/7 Response
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">COMPREHENSIVE SOLUTIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Specialized Warehousing & Distribution Services
                </h2>
                <p class="text-gray-600">
                    Tailored logistics solutions designed specifically for the unique challenges of offshore operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Offshore Equipment Storage -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-hard-hat text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Offshore Equipment Storage</h3>
                    <p class="text-gray-600 mb-6">
                        Secure storage for drilling equipment, BOP stacks, risers, and other critical offshore machinery
                        with proper maintenance protocols.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Drilling equipment storage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            BOP stack maintenance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Critical machinery care
                        </li>
                    </ul>
                </div>

                <!-- Spare Parts Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Spare Parts Management</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive inventory management for critical spare parts with kitting services and
                        just-in-time delivery to offshore locations.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Critical parts inventory
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Kitting services
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Just-in-time delivery
                        </li>
                    </ul>
                </div>

                <!-- Chemical & Fluid Storage -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-flask text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Chemical & Fluid Storage</h3>
                    <p class="text-gray-600 mb-6">
                        Specialized storage facilities for drilling fluids, chemicals, and lubricants with proper
                        containment and safety measures.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Drilling mud storage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Chemical containment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Safety compliance
                        </li>
                    </ul>
                </div>

                <!-- Rig Supply Operations -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-oil-rig text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Rig Supply Operations</h3>
                    <p class="text-gray-600 mb-6">
                        Coordinated supply boat operations for continuous provisioning of rigs and offshore
                        installations with optimized scheduling.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Supply boat coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Continuous provisioning
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Optimized scheduling
                        </li>
                    </ul>
                </div>

                <!-- Customs & Documentation -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-file-contract text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Customs & Documentation</h3>
                    <p class="text-gray-600 mb-6">
                        Complete customs clearance services and documentation management for international shipments and
                        offshore operations.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Customs clearance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Documentation management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            International compliance
                        </li>
                    </ul>
                </div>

                <!-- Emergency Response -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-ambulance text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Emergency Response</h3>
                    <p class="text-gray-600 mb-6">
                        24/7 emergency logistics for critical situations including equipment failures, weather
                        disruptions, and operational emergencies.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            24/7 emergency support
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Critical parts delivery
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Weather contingency
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Features Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">FACILITY FEATURES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    State-of-the-Art Warehousing Facilities
                </h2>
                <p class="text-gray-600">
                    Modern infrastructure and advanced systems to support complex offshore logistics requirements.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Secure Compound</h3>
                    <p class="text-gray-600">24/7 security surveillance, access control, and fire protection systems
                        for maximum safety.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-temperature-low text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Climate Control</h3>
                    <p class="text-gray-600">Temperature and humidity-controlled areas for sensitive equipment and
                        chemicals.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-barcode text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Inventory Tracking</h3>
                    <p class="text-gray-600">Advanced barcode and RFID systems for real-time inventory management and
                        tracking.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck-loading text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Loading Facilities</h3>
                    <p class="text-gray-600">Multiple loading bays with equipment for efficient handling of oversized
                        cargo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategic Locations Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">STRATEGIC LOCATIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Nationwide Warehousing Network
                </h2>
                <p class="text-gray-600">
                    Strategically located facilities to serve all major offshore operations and rig locations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Lagos Base</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Main logistics hub serving offshore operations in the Gulf of Guinea
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-warehouse mr-2 text-[#EA222F]"></i>
                        <span>25,000 sq ft</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-anchor"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Port Harcourt</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Strategic facility serving Niger Delta offshore operations and rigs
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-warehouse mr-2 text-[#EA222F]"></i>
                        <span>15,000 sq ft</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Warri Terminal</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Specialized storage for deepwater operations and equipment</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-warehouse mr-2 text-[#EA222F]"></i>
                        <span>10,000 sq ft</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Onne Port</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Dedicated facility for FPSO support and major project logistics</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-warehouse mr-2 text-[#EA222F]"></i>
                        <span>20,000 sq ft</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offshore Operations Section -->
    <section class="py-20 offshore-bg text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Specialized Offshore & Rig Support
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Dedicated logistics solutions for drilling rigs, production platforms, FPSOs, and offshore
                    installations with optimized supply chain management.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-oil-well text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Drilling Rigs</h3>
                        <p class="text-white/90">Complete supply chain support for jack-up, semi-submersible, and drill
                            ships</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-industry text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Production Platforms</h3>
                        <p class="text-white/90">Continuous provisioning for fixed platforms and floating production
                            units</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-tachometer-alt text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">FPSO Operations</h3>
                        <p class="text-white/90">Specialized logistics for floating production storage and offloading
                            vessels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Logistics Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    24/7 Emergency Logistics Response
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Immediate response for critical equipment failures, emergency spare parts, and urgent offshore
                    supply requirements with dedicated emergency teams.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Emergency: 09087995953
                    </a>
                    <a href="tel:+2349087995931"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-warehouse mr-3"></i> Logistics: 09087995931
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
                        Ready for Efficient Offshore Logistics?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust APMDC's comprehensive warehousing and distribution services with strategic locations,
                        advanced systems, and 24/7 emergency support for your offshore operations.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact.show') }}"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Request Logistics Quote
                        </a>
                        <a href="mailto:warehousing@apmdcng.com"
                            class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Email Logistics Team
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Note: In a real implementation, you would include your footer partial here -->
    @include('partials.footer')

    <!-- Custom Footer for Demo -->


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
