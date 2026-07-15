<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offshore & Rig Operations | APMDC Shipping</title>

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
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1566911187230-89d00d68d0c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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

        .operations-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #ea222f 100%);
        }

        .rig-types-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
                url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .safety-bg {
            background: linear-gradient(135deg, #1e3a8a 0.8, #ea222f 0.8),
                url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .stat-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e3a8a 50%, #ea222f 50%);
            background-size: 200% 200%;
            transition: background-position 0.5s ease;
        }

        .stat-card:hover {
            background-position: 100% 100%;
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

    <!-- @include('partials.nav') -->


    <!-- Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Offshore & <span class="text-[#EA222F]">Rig Operations</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive offshore drilling and production services with cutting-edge technology and experienced
                    crews
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Operations
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Request Services
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

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl md:text-5xl font-bold mb-2">15+</div>
                    <div class="text-white/90">Years Experience</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                    <div class="text-white/90">Projects Completed</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl md:text-5xl font-bold mb-2">100%</div>
                    <div class="text-white/90">Safety Record</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-white/90">Operations</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">OFFSHORE EXPERTISE</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Leading Offshore & Rig Operations
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive offshore drilling and production services with state-of-the-art
                        equipment and highly experienced personnel. Our operations span across the Gulf of Guinea
                        with a proven track record of safety and efficiency.
                    </p>
                    <p class="text-gray-600 mb-8">
                        We specialize in complex offshore operations including exploration drilling, production
                        platform management, and subsea installations with adherence to international safety and
                        environmental standards.
                    </p>

                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Safety First Approach</h3>
                        <p class="text-gray-600">
                            Zero compromise on safety with comprehensive HSE management systems and continuous
                            training programs for all personnel.
                        </p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="stat-card text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">5000m+</h3>
                            <p class="text-white/90">Water Depth Capability</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">ISO</h3>
                            <p class="text-gray-600">14001 Certified</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">0</h3>
                            <p class="text-gray-600">LTIF Record</p>
                        </div>
                        <div class="stat-card text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">15+</h3>
                            <p class="text-white/90">Rig Types Supported</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operations Overview Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR OPERATIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Offshore Services
                </h2>
                <p class="text-gray-600">
                    End-to-end offshore solutions from exploration to production and maintenance.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Exploration Drilling -->
                <div class="service-card operations-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Exploration Drilling</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Advanced exploration and appraisal drilling services with cutting-edge technology
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Advanced Technology
                    </div>
                </div>

                <!-- Production Operations -->
                <div class="service-card operations-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-oil-well text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Production Operations</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Efficient production platform management and optimization services
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Production Excellence
                    </div>
                </div>

                <!-- Subsea Operations -->
                <div class="service-card operations-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-water text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Subsea Operations</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Comprehensive subsea installation, maintenance, and intervention services
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Deepwater Expertise
                    </div>
                </div>

                <!-- Well Services -->
                <div class="service-card operations-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tools text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Well Services</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Complete well intervention, workover, and completion services
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Well Management
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">SPECIALIZED SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Rig & Offshore Solutions
                </h2>
                <p class="text-gray-600">
                    Advanced technical services and operational support for all types of offshore installations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Drilling Operations -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-digging text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Drilling Operations</h3>
                    <p class="text-gray-600 mb-6">
                        Full-scale drilling operations management including well planning, execution, and real-time
                        monitoring with advanced MWD/LWD systems.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Well planning & design
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Real-time monitoring
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            MWD/LWD services
                        </li>
                    </ul>
                </div>

                <!-- Rig Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-hard-hat text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Rig Management</h3>
                    <p class="text-gray-600 mb-6">
                        Complete rig management services including maintenance, crewing, and operational oversight for
                        all types of offshore rigs.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Maintenance programs
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Crew management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Operational oversight
                        </li>
                    </ul>
                </div>

                <!-- Production Optimization -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Production Optimization</h3>
                    <p class="text-gray-600 mb-6">
                        Advanced production optimization services including reservoir management, flow assurance, and
                        production enhancement technologies.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Reservoir management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Flow assurance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Production enhancement
                        </li>
                    </ul>
                </div>

                <!-- Subsea Engineering -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Subsea Engineering</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive subsea engineering services including pipeline installation, manifold deployment,
                        and subsea equipment maintenance.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Pipeline installation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Manifold deployment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Equipment maintenance
                        </li>
                    </ul>
                </div>

                <!-- HSE Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">HSE Management</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive Health, Safety, and Environmental management systems with continuous monitoring
                        and improvement programs.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Safety systems
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Environmental compliance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Emergency response
                        </li>
                    </ul>
                </div>

                <!-- Marine Support -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Marine Support</h3>
                    <p class="text-gray-600 mb-6">
                        Complete marine support services including anchor handling, supply vessel management, and
                        offshore logistics coordination.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Anchor handling
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Supply vessel ops
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Logistics coordination
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Rig Types Section -->
    <section class="py-20 rig-types-bg text-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">RIG FLEET</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-6">
                    Comprehensive Rig Capabilities
                </h2>
                <p class="text-gray-300">
                    Expertise in operating and supporting all types of offshore drilling and production units.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-arrow-up text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Jack-Up Rigs</h3>
                    <p class="text-gray-300">Self-elevating rigs for shallow to medium water depth operations up to 400
                        feet</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-arrows-alt-v text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Semi-Submersibles</h3>
                    <p class="text-gray-300">Floating rigs for deepwater operations with exceptional stability in harsh
                        environments</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ship text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Drill Ships</h3>
                    <p class="text-gray-300">Dynamic positioned vessels for ultra-deepwater drilling with advanced
                        capabilities</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white/20 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-industry text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Platform Rigs</h3>
                    <p class="text-gray-300">Fixed platform drilling and workover operations for development and
                        production phases</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety & Compliance Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">SAFETY & COMPLIANCE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Uncompromising Safety Standards
                </h2>
                <p class="text-gray-600">
                    Our commitment to safety and environmental protection is fundamental to all operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">HSE Management</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Comprehensive Health, Safety and Environmental management systems
                        aligned with international standards</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-certificate mr-2 text-[#EA222F]"></i>
                        <span>ISO 45001 Certified</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-biohazard"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Environmental Protection</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Rigorous environmental protection measures and spill response
                        preparedness</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-leaf mr-2 text-[#EA222F]"></i>
                        <span>Zero Discharge Policy</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Training & Competence</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Continuous training programs and competency assurance for all
                        personnel</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-graduation-cap mr-2 text-[#EA222F]"></i>
                        <span>Certified Programs</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Quality Assurance</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Comprehensive quality management systems and continuous improvement
                        processes</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-award mr-2 text-[#EA222F]"></i>
                        <span>ISO 9001 Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Response Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    24/7 Emergency Response
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Rapid emergency response capabilities for well control incidents, equipment failures, and offshore
                    emergencies with dedicated response teams and equipment.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Emergency Hotline: 09087995953
                    </a>
                    <a href="tel:+2349087995931"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-hard-hat mr-3"></i> Operations: 09087995931
                    </a>
                </div>
            </div>
        </div>
    </section>

    @php
        $offshoreFaqs = [
            [
                'question' => 'Do you handle offshore logistics and supply chain support?',
                'answer' => 'Yes. Our offshore logistics specialists provide end-to-end support for oil and gas operations, including crew changes, vessel support, marine supplies, cargo movement, and supply chain coordination.',
            ],
            [
                'question' => 'Do you provide customized logistics solutions?',
                'answer' => 'Yes. We tailor our logistics and marine support services to meet each client’s operational requirements, ensuring efficiency, compliance, and reliable delivery.',
            ],
            [
                'question' => 'Which industries does APMDC Logistics serve?',
                'answer' => 'We serve clients across the shipping, oil and gas, energy, offshore, marine, and international trade sectors.',
            ],
        ];
    @endphp

    @include('partials.faq-section', [
        'faqs' => $offshoreFaqs,
        'faqId' => 'offshore-service-faq',
        'eyebrow' => 'Offshore FAQs',
        'heading' => 'Questions About Offshore Logistics',
        'intro' => 'Answers for offshore, oil and gas, and marine teams coordinating operational support.',
        'sectionClass' => 'py-20 bg-[#FAFAFA]',
        'compact' => true,
    ])

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl border border-gray-100">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Ready to Discuss Your Offshore Project?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust APMDC's experienced offshore team with advanced technology, proven safety records, and
                        comprehensive operational capabilities for your next offshore project.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact.show') }}"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Request Project Proposal
                        </a>
                        <a href="mailto:offshore@apmdcng.com"
                            class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Email Offshore Team
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
