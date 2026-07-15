<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehousing & Distribution - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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
                    Warehousing & <span class="text-[#EA222F]">Distribution</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive storage and distribution solutions across West Africa
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">STORAGE SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Advanced Warehousing & Distribution Network
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive warehousing and distribution services, handling all aspects of the logistics process by air, by sea, by land to final destination. Our strategically located facilities ensure efficient storage and timely delivery across West Africa.
                    </p>
                    <p class="text-gray-600 mb-8">
                        We handle a large range of cargo including on behalf of the thriving oil and gas industry, from consumer goods to large projects. Our regular customers include NVOCCs and freight forwarders who trust us with their storage and distribution needs.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Strategic Locations</h3>
                            <p class="text-gray-600">
                                Warehouses strategically positioned across key logistics hubs in West Africa.
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Technology Driven</h3>
                            <p class="text-gray-600">
                                Advanced inventory management and real-time tracking systems.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">10+</h3>
                            <p class="text-white/90">Warehouse Locations</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">500,000+</h3>
                            <p class="text-gray-600">Square Feet Storage</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">99.5%</h3>
                            <p class="text-gray-600">Inventory Accuracy</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Security Monitoring</p>
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
                    Comprehensive Warehousing & Distribution
                </h2>
                <p class="text-gray-600">
                    End-to-end storage and distribution solutions designed to optimize your supply chain efficiency across West Africa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-warehouse text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Strategic Warehousing</h3>
                    <p class="text-gray-600 mb-4">
                        Secure storage facilities strategically located across key logistics hubs in West Africa with advanced inventory management.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Temperature-controlled storage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Bonded warehouse facilities
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Real-time inventory tracking
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-truck text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Distribution Network</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive distribution services with reliable last-mile delivery across West Africa's major cities and regions.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Regional distribution centers
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Last-mile delivery solutions
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Route optimization
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-boxes text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Inventory Management</h3>
                    <p class="text-gray-600 mb-4">
                        Advanced inventory control systems with real-time visibility and optimized stock management.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Stock level monitoring
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Automated replenishment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Cycle counting
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-handshake text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Contract Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Tailored contract warehousing and distribution solutions for long-term partnerships and operational excellence.
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
                            Performance analytics
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-exclamation-triangle text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Hazardous Goods Storage</h3>
                    <p class="text-gray-600 mb-4">
                        Safe and compliant storage and handling of hazardous materials with full regulatory compliance.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            ADR compliant facilities
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Specialized handling equipment
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
                        <i class="fas fa-people-carry text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Value-Added Services</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive value-added services including packaging, labeling, and product customization.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Product packaging
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Quality inspection
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Product assembly
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
                        Advanced Distribution Solutions
                    </h2>

                    <div class="space-y-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Cross-Border Distribution</h3>
                            <p class="text-gray-600 mb-4">
                                Seamless cross-border movements including out-of-gauge cargo from Nigeria into Cameroon, Benin, Chad, Niger and beyond with integrated warehousing solutions.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Regional distribution hubs
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Cross-border compliance
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Multi-country inventory management
                                </li>
                            </ul>
                        </div>

                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Sea & Air Freight Integration</h3>
                            <p class="text-gray-600 mb-4">
                                Comprehensive sea and air freight transport integration with warehousing for one-off or regular shipments.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Port-side warehousing
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Airport cargo facilities
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Consolidation services
                                </li>
                            </ul>
                        </div>

                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Project Logistics Warehousing</h3>
                            <p class="text-gray-600">
                                Specialized warehousing solutions for infrastructure projects across West Africa, including equipment storage and project material management.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Why Choose APMDC for Warehousing?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Strategic Locations</h4>
                                    <p class="text-white/80">Warehouses in key logistics hubs across West Africa</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Advanced Security</h4>
                                    <p class="text-white/80">24/7 surveillance and access control systems</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Technology Integration</h4>
                                    <p class="text-white/80">Real-time inventory tracking and management</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Compliance Certified</h4>
                                    <p class="text-white/80">ISO and industry standard certifications</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Scalable Solutions</h4>
                                    <p class="text-white/80">Flexible storage options for businesses of all sizes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Warehouse Network</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Total Storage Capacity</span>
                                <span class="text-[#EA222F] font-medium">500,000+ sq ft</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Distribution Centers</span>
                                <span class="text-[#EA222F] font-medium">15 Locations</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-gray-600">Delivery Fleet</span>
                                <span class="text-[#EA222F] font-medium">150+ Vehicles</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance & Customs Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-start gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100">
                        <span class="text-[#EA222F] font-semibold tracking-wider">RISK MANAGEMENT</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Cargo Insurance & Protection
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Comprehensive cargo insurance solutions to protect your goods against loss, damage, or theft during storage and transit. We partner with leading insurance providers to offer competitive coverage options.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold text-gray-800 mb-3">Insurance Coverage:</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        All-Risk Insurance
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Warehouse Legal Liability
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Transit Insurance
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Business Interruption
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-3">Additional Protection:</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Temperature Monitoring
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Security Systems
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Fire Protection
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#EA222F] mr-2"></i>
                                        Climate Control
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Customs Clearance Services</h3>
                        <p class="text-white/90 mb-6">
                            Professional customs clearance services for air and sea freight shipments with expedited processing and compliance assurance.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-file-contract mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Import & Export Documentation</h4>
                                    <p class="text-white/80">Complete handling of all customs paperwork</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-balance-scale mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Duty & Tax Optimization</h4>
                                    <p class="text-white/80">Expert advice on customs duties and taxes</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-clipboard-check mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Regulatory Compliance</h4>
                                    <p class="text-white/80">Full compliance with international trade regulations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-bolt mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Expedited Processing</h4>
                                    <p class="text-white/80">Fast-track clearance for time-sensitive shipments</p>
                                </div>
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
                    Warehousing & Distribution Workflow
                </h2>
                <p class="text-gray-600">
                    Our systematic approach ensures efficient storage and timely distribution from receipt to final delivery.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Receiving & Inspection</h3>
                    <p class="text-gray-600">
                        Professional receiving of goods with quality inspection and documentation.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Storage & Inventory</h3>
                    <p class="text-gray-600">
                        Secure storage with real-time inventory tracking and management.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Order Processing</h3>
                    <p class="text-gray-600">
                        Efficient order picking, packing, and preparation for distribution.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Distribution & Delivery</h3>
                    <p class="text-gray-600">
                        Timely distribution and final delivery with tracking and confirmation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @php
        $warehouseFaqs = [
            [
                'question' => 'What services does APMDC Logistics provide?',
                'answer' => 'APMDC Logistics provides ship agency, offshore logistics, supply chain management, warehousing, customs clearance, and marine support services across Nigeria’s major ports.',
            ],
            [
                'question' => 'Can I get updates on my shipment or vessel?',
                'answer' => 'Yes. Clients can contact our operations team for shipment, vessel, or logistics updates using their reference details.',
            ],
            [
                'question' => 'Do you provide customized logistics solutions?',
                'answer' => 'Yes. We tailor our logistics and marine support services to meet each client’s operational requirements, ensuring efficiency, compliance, and reliable delivery.',
            ],
        ];
    @endphp

    @include('partials.faq-section', [
        'faqs' => $warehouseFaqs,
        'faqId' => 'warehouse-service-faq',
        'eyebrow' => 'Warehousing FAQs',
        'heading' => 'Questions About Storage and Distribution',
        'intro' => 'Quick answers for clients coordinating warehousing, clearance, and distribution across Nigeria.',
        'sectionClass' => 'py-20 bg-white',
        'compact' => true,
    ])

    <!-- CTA Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to Optimize Your Storage & Distribution?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Let APMDC handle your warehousing and distribution needs with our comprehensive, secure, and efficient services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                        <i class="fas fa-phone-alt mr-2"></i> Request Storage Solutions
                    </a>
                    <a href="mailto:info@apmdcng.com"
                        class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm">
                        <i class="fas fa-envelope mr-2"></i> +234-1-4541278
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-[#EA222F] text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
