<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew & Personnel Management - APMDC Shipping</title>

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

        .personnel-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #ea222f 100%);
        }

        .team-member {
            transition: all 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
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




    <!-- Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Crew & <span class="text-[#EA222F]">Personnel Management</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Professional maritime workforce solutions with certified, experienced seafarers for all vessel types
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Crew Services
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Request Manpower
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">CREW MANAGEMENT</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Professional Maritime Manpower Solutions
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive crew management and personnel solutions for the maritime industry.
                        We specialize in sourcing, training, and deploying qualified seafarers for all vessel types,
                        ensuring compliance with international standards and regulations.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our extensive database of certified maritime professionals and rigorous selection process
                        guarantee reliable, competent crew members who meet your operational requirements and safety
                        standards.
                    </p>

                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Certification & Compliance</h3>
                        <p class="text-gray-600">
                            All crew members hold valid STCW certifications and undergo regular training to maintain
                            compliance with international maritime regulations and safety standards.
                        </p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">500+</h3>
                            <p class="text-white/90">Certified Seafarers</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Support Services</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">100%</h3>
                            <p class="text-gray-600">STCW Compliant</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">15+</h3>
                            <p class="text-white/90">Nationalities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personnel Types Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR PERSONNEL</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Qualified Maritime Professionals
                </h2>
                <p class="text-gray-600">
                    We provide certified and experienced crew members for all departments and vessel types.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Deck Officers -->
                <div class="service-card personnel-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-compass text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Deck Officers</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Masters, Chief Officers, 2nd & 3rd Officers with valid certifications
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Navigation Experts
                    </div>
                </div>

                <!-- Engine Officers -->
                <div class="service-card personnel-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Engine Officers</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Chief Engineers, 2nd Engineers, and ETOs with machinery expertise
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Technical Specialists
                    </div>
                </div>

                <!-- Ratings -->
                <div class="service-card personnel-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Ratings</h3>
                    <p class="text-white/90 text-sm mb-4">
                        ABs, Oilers, Fitters, Cooks, and other support crew members
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Skilled Crew
                    </div>
                </div>

                <!-- Specialized Crew -->
                <div class="service-card personnel-card text-white rounded-xl p-6 text-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="bg-white/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tools text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Specialized Crew</h3>
                    <p class="text-white/90 text-sm mb-4">
                        Dynamic positioning operators, LNG specialists, and more
                    </p>
                    <div class="bg-white/20 rounded-full px-3 py-1 text-xs font-medium">
                        Specialized Skills
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
                    Comprehensive Crew Management Solutions
                </h2>
                <p class="text-gray-600">
                    End-to-end personnel services ensuring qualified, reliable crew for your maritime operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Crew Recruitment -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-plus text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Crew Recruitment & Selection</h3>
                    <p class="text-gray-600 mb-6">
                        Rigorous screening and selection process to match qualified crew with vessel requirements and
                        company culture.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Comprehensive background checks
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Skills assessment & verification
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Cultural fit evaluation
                        </li>
                    </ul>
                </div>

                <!-- Training & Certification -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Training & Certification</h3>
                    <p class="text-gray-600 mb-6">
                        Continuous professional development and certification management to ensure compliance with
                        international standards.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            STCW training programs
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Certification renewal management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Specialized skill development
                        </li>
                    </ul>
                </div>

                <!-- Travel & Logistics -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-plane text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Travel & Logistics</h3>
                    <p class="text-gray-600 mb-6">
                        Complete travel arrangement and logistics management for crew changes, including visa processing
                        and transportation.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Flight & accommodation booking
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Visa & documentation support
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Port clearance coordination
                        </li>
                    </ul>
                </div>

                <!-- Payroll Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-file-invoice-dollar text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Payroll Management</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive payroll services including salary processing, tax management, and benefits
                        administration.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Timely salary disbursement
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Tax compliance management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Benefits administration
                        </li>
                    </ul>
                </div>

                <!-- Medical & Welfare -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Medical & Welfare Services</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive medical support, insurance management, and crew welfare programs for wellbeing at
                        sea.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Pre-joining medical examinations
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Insurance & claims management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Family support services
                        </li>
                    </ul>
                </div>

                <!-- Performance Management -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Performance Management</h3>
                    <p class="text-gray-600 mb-6">
                        Continuous performance monitoring, appraisal systems, and career development planning for crew
                        members.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Regular performance reviews
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Career progression planning
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Competency assessment
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
                    Rigorous Quality & Compliance Standards
                </h2>
                <p class="text-gray-600">
                    Our commitment to quality ensures competent, reliable crew members who meet international standards.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-passport text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">STCW Compliance</h3>
                    <p class="text-gray-600">All crew members hold valid STCW certifications with regular updates and
                        renewals.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-shield text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Background Verification</h3>
                    <p class="text-gray-600">Comprehensive background checks, reference verification, and security
                        screening.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-stethoscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Medical Fitness</h3>
                    <p class="text-gray-600">All crew undergo thorough medical examinations to ensure fitness for sea
                        duty.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Performance Tracking</h3>
                    <p class="text-gray-600">Continuous performance monitoring and competency assessment systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vessel Coverage Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">VESSEL COVERAGE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Crew Solutions for All Vessel Types
                </h2>
                <p class="text-gray-600">
                    Experienced personnel for diverse maritime operations and specialized vessel requirements.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Tankers</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Crude, product, chemical, and LNG tankers with specialized
                        certifications</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-certificate mr-2 text-[#EA222F]"></i>
                        <span>Specialized Training</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-container-storage"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Container Ships</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Crew experienced in container operations, lashing, and stowage
                        planning</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-boxes mr-2 text-[#EA222F]"></i>
                        <span>Cargo Expertise</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-tractor"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Bulk Carriers</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Personnel skilled in bulk cargo operations and specialized loading
                        systems</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-weight-hanging mr-2 text-[#EA222F]"></i>
                        <span>Bulk Operations</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Offshore Vessels</h3>
                    </div>
                    <p class="text-gray-600 mb-4">PSVs, AHTS, FPSOs with DP operators and offshore experience</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-satellite-dish mr-2 text-[#EA222F]"></i>
                        <span>DP Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Crew Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    24/7 Emergency Crew Replacement
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Immediate crew replacement services for medical emergencies, unexpected disembarkation, or urgent
                    manpower requirements.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Emergency: 09087995953
                    </a>
                    <a href="tel:+2349087995931"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-users mr-3"></i> Crewing: 09087995931
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
                        Need Qualified Maritime Personnel?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust APMDC's professional crew management services with certified seafarers, comprehensive
                        support, and 24/7 emergency response.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact.show') }}"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Request Crew Manning
                        </a>
                        <a href="mailto:crewing@apmdcng.com"
                            class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Email Crewing Team
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Note: In a real implementation, you would include your footer partial here -->
    <!-- @include('partials.footer') -->



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
