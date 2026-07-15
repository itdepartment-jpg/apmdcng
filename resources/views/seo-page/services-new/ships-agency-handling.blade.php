<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ships Agency Handling - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .agency-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .agency-light-bg {
            background-color: #FFF5F5;
        }

        .agency-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 2px solid #FFEBEE;
        }

        .agency-card:hover {
            border-color: #EA222F;
            box-shadow: 0 10px 25px rgba(234, 34, 47, 0.1);
        }

        .process-step {
            position: relative;
            padding-left: 40px;
            margin-bottom: 2rem;
        }

        .process-step:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #EA222F;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .process-step:nth-child(1):before {
            content: '1';
        }

        .process-step:nth-child(2):before {
            content: '2';
        }

        .process-step:nth-child(3):before {
            content: '3';
        }

        .process-step:nth-child(4):before {
            content: '4';
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
                    Ships Agency <span class="text-[#EA222F]">Handling</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Professional vessel representation and port call coordination, ensuring smooth operations and timely
                    turnaround.
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
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">PORT REPRESENTATION</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Professional Vessel Agency Services
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides reliable Ships Agency Handling services to ensure efficient coordination,
                        representation, and support for vessels calling at port. We act as a trusted link between ship
                        owners, charterers, port authorities, and service providers, ensuring smooth port calls and
                        timely vessel turnaround.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our Ships Agency Handling services cover full port agency representation, managing vessel
                        operations from pre-arrival planning through port stay to departure clearance.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="agency-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">End-to-End Support</h3>
                            <p class="text-gray-600 text-sm">
                                Complete vessel agency support throughout port call
                            </p>
                        </div>
                        <div class="agency-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Efficient Coordination</h3>
                            <p class="text-gray-600 text-sm">
                                Smooth port call coordination and turnaround
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="agency-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Operational Support</p>
                        </div>
                        <div class="agency-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Expert</h3>
                            <p class="text-gray-600">Agency Team</p>
                        </div>
                        <div class="agency-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Full</h3>
                            <p class="text-gray-600">Compliance</p>
                        </div>
                        <div class="agency-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Timely</h3>
                            <p class="text-white/90">Turnaround</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Offering Section -->
    <section class="py-20 agency-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">CORE OFFERING</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Complete Port Agency Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive vessel representation from arrival to departure
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-file-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Documentation</h3>
                    <p class="text-gray-600">
                        Pre-arrival documentation and port clearance
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-ship text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Berthing Support</h3>
                    <p class="text-gray-600">
                        Vessel berthing and sailing coordination
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Port Liaison</h3>
                    <p class="text-gray-600">
                        Coordination with port authorities and terminals
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Crew Support</h3>
                    <p class="text-gray-600">
                        Crew change coordination and welfare
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">KEY FEATURES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Why Choose Our Agency Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Professional vessel handling with attention to detail
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="agency-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-sync-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">End-to-End Support</h3>
                            <p class="text-gray-600">Complete vessel agency support</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Comprehensive support from pre-arrival to departure
                    </p>
                </div>

                <div class="agency-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-compress-arrows-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Efficient Coordination</h3>
                            <p class="text-gray-600">Smooth port call management</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Efficient coordination of all port activities
                    </p>
                </div>

                <div class="agency-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-user-tie text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Expert Team</h3>
                            <p class="text-gray-600">Experienced agency personnel</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Skilled professionals with maritime expertise
                    </p>
                </div>

                <div class="agency-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">24/7 Support</h3>
                            <p class="text-gray-600">Round-the-clock operations</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Continuous operational support anytime, anywhere
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section id="services" class="py-20 agency-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">SERVICES
                    INCLUDE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Comprehensive Agency Services
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Complete vessel handling solutions for all port activities
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4 text-center">Port Clearance</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Pre-arrival documentation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Vessel clearance coordination</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4 text-center">Vessel Operations</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Berthing & sailing coordination</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Port authority liaison</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4 text-center">Crew & Supply</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Crew change coordination</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Bunkers & provisions</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="400">
                    <h3 class="text-xl font-bold mb-4 text-center">Cargo & Support</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Cargo operations coordination</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span class="text-white/90">Husbandry services</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="agency-card">
                        <span class="text-[#EA222F] font-semibold tracking-wider">OPERATIONAL PROCESS</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Our Vessel Handling Process
                        </h2>

                        <div class="space-y-8">
                            <div class="process-step">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Pre-Arrival Planning</h3>
                                <p class="text-gray-600">Documentation preparation and port clearance coordination</p>
                            </div>

                            <div class="process-step">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Port Arrival & Berthing</h3>
                                <p class="text-gray-600">Vessel berthing coordination and authority liaison</p>
                            </div>

                            <div class="process-step">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Port Stay Management</h3>
                                <p class="text-gray-600">Cargo operations, crew support, and supply arrangements</p>
                            </div>

                            <div class="process-step">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Departure & Reporting</h3>
                                <p class="text-gray-600">Clearance procedures and comprehensive reporting</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="agency-light-bg p-10 rounded-2xl border border-red-100">
                        <span class="text-[#EA222F] font-semibold tracking-wider">COMPLIANCE & STANDARDS</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Operational Compliance
                        </h2>
                        <p class="text-gray-600 mb-8">
                            APMDC ensures all Ships Agency Handling operations comply with port authority requirements,
                            international maritime regulations, and best industry practices, ensuring transparency,
                            accuracy, and efficiency.
                        </p>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-port text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Port Compliance</h3>
                                <p class="text-gray-600 text-sm">Adherence to all port authority requirements</p>
                            </div>

                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-globe text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Maritime Standards</h3>
                                <p class="text-gray-600 text-sm">Compliance with international regulations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-20 agency-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Your Trusted Port Agent
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Reliable vessel agency services for smooth port operations
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Local Expertise</h3>
                    <p class="text-gray-600 text-sm">
                        Strong knowledge of local port operations
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Reliable Turnaround</h3>
                    <p class="text-gray-600 text-sm">
                        Efficient vessel turnaround management
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Dedicated Team</h3>
                    <p class="text-gray-600 text-sm">
                        Experienced agency professionals
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-comments text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Clear Communication</h3>
                    <p class="text-gray-600 text-sm">
                        Transparent reporting and updates
                    </p>
                </div>

                <div class="agency-card text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Operational Excellence</h3>
                    <p class="text-gray-600 text-sm">
                        Commitment to highest standards
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="agency-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Professional Vessel Agency Services
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Ensure smooth port operations and timely turnaround with APMDC's professional ships agency handling
                    services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact"
                        class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                        Request Agency Services
                    </a>
                    <a href="/contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-block">
                        Contact Our Agents
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
