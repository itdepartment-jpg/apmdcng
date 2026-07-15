<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offshore Services - APMDC Shipping</title>
    
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
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .process-step {
            position: relative;
        }
        
        .process-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            right: -40px;
            width: 80px;
            height: 2px;
            background: #EA222F;
            transform: translateY(-50%);
        }
        
        @media (max-width: 768px) {
            .process-step:not(:last-child):after {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-[#EA222F] border-solid h-16 w-16"></div>
    </div>
<!-- Navigation -->
    @include('partials.nav')
    <!-- Services Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Offshore <span class="text-[#EA222F]">Services</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Specialized maritime support for offshore oil & gas operations across West Africa
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">OFFSHORE EXPERTISE</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Comprehensive Offshore Support Solutions
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides specialized offshore logistics and support services for the oil and gas industry, 
                        delivering reliable solutions for offshore platforms, rigs, and marine operations across West Africa's 
                        coastal waters.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With extensive experience in offshore operations, we handle everything from crew transfers and 
                        equipment supply to emergency response and regulatory compliance, ensuring your offshore assets 
                        operate smoothly and efficiently.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Offshore Specialists</h3>
                            <p class="text-gray-600">
                                Dedicated teams with deep expertise in offshore oil & gas operations.
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Safety First</h3>
                            <p class="text-gray-600">
                                Strict adherence to international offshore safety standards and protocols.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">15+</h3>
                            <p class="text-white/90">Years Offshore Experience</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">50+</h3>
                            <p class="text-gray-600">Offshore Platforms Supported</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Emergency Response</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">100%</h3>
                            <p class="text-white/90">Safety Compliance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Specialized Offshore Solutions
                </h2>
                <p class="text-gray-600">
                    Comprehensive offshore support services designed to meet the unique challenges of marine operations in West Africa's oil and gas sector.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Rig & Platform Support</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive support services for offshore rigs and production platforms including supply, maintenance, and operational support.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Platform supply vessel coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Equipment and spare parts delivery
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Technical support services
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-users text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Crew Transfer & Management</h3>
                    <p class="text-gray-600 mb-4">
                        Safe and efficient crew transfer operations with comprehensive personnel management and logistics support.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Crew boat operations
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Helicopter transfer coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Personnel logistics
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-tools text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Equipment & Cargo Handling</h3>
                    <p class="text-gray-600 mb-4">
                        Specialized handling of offshore equipment and cargo including heavy lifts and specialized materials.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Heavy lift coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Specialized cargo handling
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Load-out services
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-file-contract text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Regulatory Compliance</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive regulatory support and compliance management for offshore operations in Nigerian waters.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            NIMASA compliance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            DPR regulations
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Environmental compliance
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-biohazard text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Hazardous Materials</h3>
                    <p class="text-gray-600 mb-4">
                        Safe handling and transport of hazardous materials and chemicals for offshore operations.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Chemical supply management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Hazardous waste disposal
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Safety protocol implementation
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-hard-hat text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Emergency Response</h3>
                    <p class="text-gray-600 mb-4">
                        24/7 emergency response and contingency planning for offshore incidents and operational disruptions.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Emergency planning
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Incident response coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Crisis management
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-start gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">SPECIALIZED OFFSHORE SERVICES</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Comprehensive Offshore Support
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Cross-Border Offshore Operations</h3>
                            <p class="text-gray-600 mb-4">
                                Seamless cross-border movements including out-of-gauge cargo and specialized equipment from Nigeria into Cameroon, Benin, Chad, Niger and beyond for offshore operations.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Regional offshore coordination
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Cross-border regulatory compliance
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    International offshore standards
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Sea & Air Freight for Offshore</h3>
                            <p class="text-gray-600 mb-4">
                                Dedicated sea and air freight transport solutions for offshore operations, including specialized equipment and time-sensitive deliveries.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Offshore charter services
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Emergency air freight
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Specialized vessel coordination
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Project Logistics for Offshore Infrastructure</h3>
                            <p class="text-gray-600">
                                Comprehensive project logistics for offshore infrastructure projects across West Africa, including platform installation and subsea operations.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Why Choose APMDC for Offshore Services?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Offshore Specialists</h4>
                                    <p class="text-white/80">Deep expertise in West African offshore operations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Safety Certified</h4>
                                    <p class="text-white/80">ISO and offshore safety certifications</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">24/7 Operations</h4>
                                    <p class="text-white/80">Round-the-clock offshore support</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Regulatory Expertise</h4>
                                    <p class="text-white/80">Comprehensive knowledge of offshore regulations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Emergency Response</h4>
                                    <p class="text-white/80">Rapid response capabilities for offshore incidents</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Offshore Capabilities</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Vessel Fleet</span>
                                <span class="text-[#EA222F] font-medium">20+ Specialized Vessels</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Response Time</span>
                                <span class="text-[#EA222F] font-medium">Under 2 Hours</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-gray-600">Coverage Area</span>
                                <span class="text-[#EA222F] font-medium">Entire Gulf of Guinea</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100">
                        <span class="text-[#EA222F] font-semibold tracking-wider">RISK MANAGEMENT</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Offshore Insurance Solutions
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Comprehensive insurance coverage specifically designed for offshore operations, protecting your assets, personnel, and operations against the unique risks of marine environments.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold text-gray-800 mb-3">Coverage Includes:</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Hull & Machinery Insurance
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Protection & Indemnity
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Offshore Construction Insurance
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Pollution Liability
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-3">Additional Coverage:</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Crew Personal Accident
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Cargo Insurance
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Business Interruption
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Third Party Liability
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Our Offshore Safety Record</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between py-3 border-b border-white/20">
                                <span>Total Offshore Operations</span>
                                <span class="font-bold">5,000+</span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-white/20">
                                <span>Safety Compliance Rate</span>
                                <span class="font-bold">100%</span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-white/20">
                                <span>Emergency Response Success</span>
                                <span class="font-bold">99.8%</span>
                            </div>
                            <div class="flex items-center justify-between py-3">
                                <span>Regulatory Audit Pass Rate</span>
                                <span class="font-bold">100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR PROCESS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Offshore Operations Workflow
                </h2>
                <p class="text-gray-600">
                    Our systematic approach ensures safe, efficient, and compliant offshore operations from planning to execution.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Planning & Risk Assessment</h3>
                    <p class="text-gray-600">
                        Comprehensive operational planning with detailed risk assessment and safety protocols.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Regulatory Compliance</h3>
                    <p class="text-gray-600">
                        Securing all necessary permits and ensuring full compliance with offshore regulations.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Operation Execution</h3>
                    <p class="text-gray-600">
                        Safe execution of offshore operations with real-time monitoring and communication.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Monitoring & Reporting</h3>
                    <p class="text-gray-600">
                        Continuous monitoring and comprehensive reporting for performance optimization.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to Enhance Your Offshore Operations?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Let APMDC provide the specialized offshore support your operations need with our comprehensive, safe, and reliable services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                        Request Offshore Support
                    </button>
                    <button class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-2"></i> +234-1-4541278
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

     <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-[#EA222F] text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6"/>
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