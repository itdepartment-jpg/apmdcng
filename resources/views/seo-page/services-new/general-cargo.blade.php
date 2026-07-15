<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Cargo Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #EA222F, #FF6B6B);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .cargo-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .cargo-light-bg {
            background-color: #FFF5F5;
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 2rem;
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #EA222F;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #EA222F;
        }

        .timeline-item:not(:last-child):after {
            content: '';
            position: absolute;
            left: 5px;
            top: 30px;
            bottom: -2rem;
            width: 2px;
            background: #EA222F;
        }

        .cargo-type-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .cargo-type-card:hover {
            border-color: #EA222F;
            box-shadow: 0 10px 25px rgba(234, 34, 47, 0.1);
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
                    General <span class="text-[#EA222F]">Cargo Services</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Reliable handling, transport, and delivery of diverse cargo, ensuring safety, timeliness, and
                    operational efficiency
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a>
                    <a href="/contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#overview" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">VERSATILE SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Comprehensive General Cargo Handling
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides reliable and efficient General Cargo services designed to support the safe
                        handling, transportation, and delivery of diverse cargo types across domestic and international
                        routes. Our solutions ensure cargo integrity, operational efficiency, and compliance with
                        maritime and port regulations.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our General Cargo services cover the end-to-end movement and management of non-specialized
                        cargo, ensuring smooth operations from port of loading to final discharge.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="cargo-light-bg p-6 rounded-xl border border-red-100">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Cargo Integrity</h3>
                            <p class="text-gray-600">
                                Safe handling and preservation of diverse cargo types
                            </p>
                        </div>
                        <div class="cargo-light-bg p-6 rounded-xl border border-red-100">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Operational Efficiency</h3>
                            <p class="text-gray-600">
                                Streamlined processes for timely cargo movement
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="cargo-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">All</h3>
                            <p class="text-white/90">Apapa Complex Ports Coverage</p>
                        </div>
                        <div class="cargo-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Operational Support</p>
                        </div>
                        <div class="cargo-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">100%</h3>
                            <p class="text-gray-600">Safety Compliance</p>
                        </div>
                        <div class="cargo-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">End-to-End</h3>
                            <p class="text-white/90">Cargo Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 cargo-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OPERATIONAL ADVANTAGES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Why Choose Our General Cargo Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Expertise and reliability for all your general cargo handling needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-white p-8 rounded-xl service-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-graduation-cap text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Proven Expertise</h3>
                    <p class="text-gray-600 text-sm">
                        Years of experience in general cargo operations
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Skilled Teams</h3>
                    <p class="text-gray-600 text-sm">
                        Trained and professional cargo handling teams
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Safety Culture</h3>
                    <p class="text-gray-600 text-sm">
                        Strong commitment to safety and compliance
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Reliable Service</h3>
                    <p class="text-gray-600 text-sm">
                        Consistent and responsive service delivery
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card text-center" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-medal text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Excellence</h3>
                    <p class="text-gray-600 text-sm">
                        Commitment to operational excellence in all activities
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">COMPREHENSIVE SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    General Cargo Services Include
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Complete range of services for all your general cargo requirements
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-ship text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Vessel Services</h3>
                            <p class="text-gray-600">Comprehensive vessel support and coordination</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>RO/RO and project vessels operations</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Tankers, tramp & breakbulk vessels support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>All Apapa Complex ports coverage in Lagos</span>
                        </li>
                    </ul>
                </div>

                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Port Operations</h3>
                            <p class="text-gray-600">Efficient port and terminal management</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Fast and accurate port/berth information</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Vessel clearing with port authorities</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Real-time operational updates</span>
                        </li>
                    </ul>
                </div>

                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-handshake text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Client Support</h3>
                            <p class="text-gray-600">Complete client services and coordination</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Owner's Protective Agency services</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Proforma disbursement calculations</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Coordination with receivers</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional Services Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-boxes text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Cargo Handling</h3>
                            <p class="text-gray-600">Professional cargo management services</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Spare parts delivery & local procurement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Container Stuffing & Destuffing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Materials handling & palletisation</span>
                        </li>
                    </ul>
                </div>

                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-file-invoice-dollar text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Financial Services</h3>
                            <p class="text-gray-600">Comprehensive financial management</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Accurate final accounts preparation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Transparent billing and documentation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Cost optimization services</span>
                        </li>
                    </ul>
                </div>

                <div class="cargo-light-bg p-8 rounded-xl border border-red-100 service-card" data-aos="fade-up"
                    data-aos-delay="600">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Operational Support</h3>
                            <p class="text-gray-600">24/7 operational assistance</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Onshore and offshore agency services</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Emergency response and support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Continuous communication updates</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Types Section -->
    <section class="py-20 cargo-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">CARGO
                    EXPERTISE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Types of General Cargo Handled
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Versatile handling capabilities for diverse cargo types with precision and care
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-box text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bagged Goods</h3>
                    <p class="text-white/80 text-sm">
                        Packaged and bagged commodities with secure handling
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-industry text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Steel Products</h3>
                    <p class="text-white/80 text-sm">
                        Coils, plates, pipes, and structural steel components
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Machinery</h3>
                    <p class="text-white/80 text-sm">
                        Industrial equipment and machinery of all sizes
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hard-hat text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Construction</h3>
                    <p class="text-white/80 text-sm">
                        Building materials and construction supplies
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-pallet text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Breakbulk</h3>
                    <p class="text-white/80 text-sm">
                        Palletized and non-containerized breakbulk cargo
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality & Compliance Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="cargo-light-bg p-10 rounded-2xl border border-red-100">
                        <span class="text-[#EA222F] font-semibold tracking-wider">QUALITY ASSURANCE</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Quality, Safety & Compliance
                        </h2>
                        <p class="text-gray-600 mb-8">
                            APMDC maintains strict adherence to international safety standards, port authority
                            regulations, and best industry practices. All cargo operations are carried out with a strong
                            focus on safety, accuracy, and cargo preservation.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-globe text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">International Standards</h3>
                                    <p class="text-gray-600 text-sm">Compliance with global safety regulations</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-port text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">Port Compliance</h3>
                                    <p class="text-gray-600 text-sm">Adherence to all port authority requirements</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-box-open text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">Cargo Preservation</h3>
                                    <p class="text-gray-600 text-sm">Focus on maintaining cargo integrity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <span class="text-[#EA222F] font-semibold tracking-wider">OPERATIONAL PROCESS</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-8">
                            Our Operational Excellence
                        </h2>

                        <div class="space-y-8">
                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Vessel Coordination</h3>
                                <p class="text-gray-600">Expert handling of all vessel types at Apapa Complex ports
                                    with real-time updates</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Port Operations</h3>
                                <p class="text-gray-600">Efficient cargo handling, container operations, and materials
                                    management</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Client Services</h3>
                                <p class="text-gray-600">Comprehensive support including protective agency and
                                    financial services</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Quality Delivery</h3>
                                <p class="text-gray-600">Final delivery with safety compliance and cargo integrity
                                    assurance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 cargo-light-bg">
        <div class="container mx-auto px-6">
            <div class="cargo-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Reliable General Cargo Solutions
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Trust APMDC for comprehensive general cargo services that combine expertise, safety, and efficiency
                    for all your cargo handling needs.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">

                    <a href="{{ route('contact.show') }}"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-block">
                        Contact Our Cargo Experts
                    </a>
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
