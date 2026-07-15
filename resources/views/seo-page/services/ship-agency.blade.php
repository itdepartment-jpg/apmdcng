<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ship Agency Services - APMDC Shipping</title>
    
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
                        url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1800&q=80');
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
                    Ship <span class="text-[#EA222F]">Agency</span> Services
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive maritime logistics solutions by air, sea, and land to final destination
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">COMPREHENSIVE SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        End-to-End Ship Agency Services
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC handles all aspects of the logistics process, by air, by sea, by land to final destination. 
                        With over 15 years of experience, we provide reliable and efficient ship agency services tailored 
                        to the unique needs of the oil and gas industry and beyond.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our regular customers include NVOCCs, freight forwarders, and major corporations who trust us 
                        with their most critical shipments across West Africa and beyond.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Cargo Expertise</h3>
                            <p class="text-gray-600">
                                Handling everything from consumer goods to large project cargo for the thriving oil and gas industry.
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Regional Coverage</h3>
                            <p class="text-gray-600">
                                Extensive network across West Africa including Cameroon, Benin, Chad, Niger and beyond.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">15+</h3>
                            <p class="text-white/90">Years Experience</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">500+</h3>
                            <p class="text-gray-600">Vessels Serviced Annually</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">99.8%</h3>
                            <p class="text-gray-600">On-Time Delivery Rate</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">6</h3>
                            <p class="text-white/90">Countries Served</p>
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
                    Dedicated Ship Agency Solutions
                </h2>
                <p class="text-gray-600">
                    Comprehensive maritime services designed to meet the complex logistics needs of modern shipping operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-border-all text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Cross-Border Movements</h3>
                    <p class="text-gray-600 mb-4">
                        Seamless cross-border logistics including out-of-gauge cargo from Nigeria into Cameroon, Benin, Chad, Niger and beyond.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Regional customs clearance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Oversized cargo handling
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Multi-country documentation
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Sea & Air Freight</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive sea and air freight transport solutions for one-off or regular shipments with optimal routing.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            FCL and LCL shipments
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Air charter services
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Scheduled services
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-boxes text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">LCL Consolidation</h3>
                    <p class="text-gray-600 mb-4">
                        Professional LCL shipment consolidation and deconsolidation services for cost-effective shipping solutions.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Cargo consolidation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Deconsolidation services
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Cost optimization
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-file-contract text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Contract Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Tailored contract logistics solutions designed for long-term partnerships and operational efficiency.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Dedicated account management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Customized solutions
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Performance monitoring
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-exclamation-triangle text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Hazardous Cargo</h3>
                    <p class="text-gray-600 mb-4">
                        Safe and compliant handling and delivery of hazardous cargoes with full regulatory compliance.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            ADR/IATA compliance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Specialized handling
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Safety certification
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-hard-hat text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Project Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive project logistics for infrastructure projects across West Africa with specialized equipment.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Heavy lift coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Site delivery management
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Project scheduling
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">SPECIALIZED SERVICES</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Advanced Cargo & Customs Solutions
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Cargo Brokerage</h3>
                            <p class="text-gray-600 mb-4">
                                Expert cargo brokerage services for commodities including:
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Crude Oil & Petroleum</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Agricultural Products</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Minerals & Mining</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Industrial Equipment</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Customs Clearance</h3>
                            <p class="text-gray-600">
                                Professional customs clearance services for air and sea freight shipments with expedited processing and compliance assurance.
                            </p>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Cargo Insurance</h3>
                            <p class="text-gray-600">
                                Comprehensive cargo insurance solutions to protect your shipments against loss, damage, or delay during transit.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Why Choose APMDC for Ship Agency?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">ISO 9001:2015 Certified</h4>
                                    <p class="text-white/80">Proven commitment to international quality standards</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Regional Expertise</h4>
                                    <p class="text-white/80">Deep knowledge of West African markets and regulations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">24/7 Operations</h4>
                                    <p class="text-white/80">Round-the-clock support for all your shipping needs</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Technology Driven</h4>
                                    <p class="text-white/80">Advanced tracking and communication systems</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Multimodal Solutions</h4>
                                    <p class="text-white/80">Seamless integration of sea, air, and land transport</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR PROCESS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Streamlined Ship Agency Workflow
                </h2>
                <p class="text-gray-600">
                    Our proven process ensures efficient and reliable ship agency services from initial consultation to final delivery.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Consultation & Planning</h3>
                    <p class="text-gray-600">
                        We begin with understanding your specific requirements and developing a customized logistics plan.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Documentation & Clearance</h3>
                    <p class="text-gray-600">
                        Handling all necessary documentation, customs clearance, and regulatory compliance.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Transport & Handling</h3>
                    <p class="text-gray-600">
                        Coordinating sea, air, or land transport with professional cargo handling and tracking.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Delivery & Support</h3>
                    <p class="text-gray-600">
                        Final delivery to destination with continuous support and performance monitoring.
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
                    Ready to Streamline Your Shipping Operations?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Let APMDC handle your ship agency needs with our comprehensive, reliable, and ISO-certified services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                        Request a Quote
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