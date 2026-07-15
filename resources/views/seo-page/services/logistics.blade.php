<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Services - APMDC Shipping</title>
    
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
                    Logistics <span class="text-[#EA222F]">Services</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive supply chain solutions by air, sea, and land to final destination
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">END-TO-END SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Integrated Logistics Management
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC handles all aspects of the logistics process, by air, by sea, by land to final destination. 
                        With our extensive network and expertise, we provide seamless logistics solutions tailored to meet 
                        the complex demands of modern supply chains.
                    </p>
                    <p class="text-gray-600 mb-8">
                        We handle a large range of cargo including on behalf of the thriving oil and gas industry, 
                        from consumer goods to large projects. Our regular customers include NVOCCs and freight forwarders 
                        who trust us with their most critical shipments.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Multi-Modal Expertise</h3>
                            <p class="text-gray-600">
                                Seamless integration of air, sea, and land transport for optimal routing and cost efficiency.
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Industry Specialization</h3>
                            <p class="text-gray-600">
                                Deep understanding of oil & gas, manufacturing, retail, and infrastructure sectors.
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
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">50+</h3>
                            <p class="text-gray-600">Countries Served</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">99.7%</h3>
                            <p class="text-gray-600">On-Time Delivery</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Operations Support</p>
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
                    Comprehensive Logistics Solutions
                </h2>
                <p class="text-gray-600">
                    From cross-border movements to specialized project logistics, we provide end-to-end solutions for all your supply chain needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-truck-loading text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Cross-Border Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Seamless cross-border movements including out-of-gauge cargo from Nigeria into Cameroon, Benin, Chad, Niger and beyond.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Regional customs expertise
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Oversized cargo specialists
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Border crossing coordination
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-fit rounded-xl mb-6">
                        <i class="fas fa-plane text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Sea & Air Freight</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive sea and air freight transport solutions for one-off or regular shipments with optimal routing and scheduling.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Global carrier partnerships
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Charter services available
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Real-time tracking
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
                            Weekly consolidation services
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Strategic hub locations
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
                        <i class="fas fa-handshake text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Contract Logistics</h3>
                    <p class="text-gray-600 mb-4">
                        Tailored contract logistics solutions designed for long-term partnerships and operational excellence.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Dedicated operations teams
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
                        <i class="fas fa-biohazard text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Hazardous Cargo</h3>
                    <p class="text-gray-600 mb-4">
                        Safe and compliant handling and delivery of hazardous cargoes with full regulatory compliance and safety protocols.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            ADR/IATA certified
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Specialized equipment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Emergency response planning
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
                        Comprehensive project logistics for infrastructure projects across West Africa with specialized equipment and planning.
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
                        Advanced Logistics Solutions
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
                                    <span class="text-gray-600">Crude Oil & Petroleum Products</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Agricultural Commodities</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Minerals & Mining Equipment</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Industrial Machinery</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Construction Materials</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    <span class="text-gray-600">Consumer Goods</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Customs Clearance</h3>
                            <p class="text-gray-600 mb-4">
                                Professional customs clearance services for air and sea freight shipments with expedited processing and compliance assurance.
                            </p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Import and export documentation
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Duty and tax optimization
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-[#EA222F] mr-2"></i>
                                    Regulatory compliance monitoring
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Cargo Insurance</h3>
                            <p class="text-gray-600">
                                Comprehensive cargo insurance solutions to protect your shipments against loss, damage, or delay during transit. 
                                We partner with leading insurance providers to offer competitive coverage options.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Why Choose APMDC for Logistics?</h3>
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
                                    <h4 class="font-bold">Regional Network</h4>
                                    <p class="text-white/80">Extensive coverage across West Africa and beyond</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Technology Platform</h4>
                                    <p class="text-white/80">Real-time tracking and supply chain visibility</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Industry Expertise</h4>
                                    <p class="text-white/80">Deep knowledge of oil & gas and infrastructure sectors</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Customized Solutions</h4>
                                    <p class="text-white/80">Tailored logistics strategies for your specific needs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Logistics Network</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Strategic Partnerships</span>
                                <span class="text-[#EA222F] font-medium">50+ Carriers</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600">Warehouse Facilities</span>
                                <span class="text-[#EA222F] font-medium">10 Locations</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-gray-600">Fleet Capacity</span>
                                <span class="text-[#EA222F] font-medium">200+ Vehicles</span>
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
                    Streamlined Logistics Workflow
                </h2>
                <p class="text-gray-600">
                    Our proven process ensures efficient and reliable logistics services from initial consultation to final delivery.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Consultation & Analysis</h3>
                    <p class="text-gray-600">
                        We begin with understanding your specific requirements and analyzing your supply chain needs.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Planning & Quotation</h3>
                    <p class="text-gray-600">
                        Developing customized logistics solutions and providing transparent pricing.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Execution & Monitoring</h3>
                    <p class="text-gray-600">
                        Coordinating transport with real-time tracking and proactive communication.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md border border-gray-100">
                        <span class="text-2xl font-bold text-[#EA222F]">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Delivery & Optimization</h3>
                    <p class="text-gray-600">
                        Final delivery with performance analysis and continuous improvement.
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
                    Ready to Optimize Your Supply Chain?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Let APMDC handle your logistics needs with our comprehensive, reliable, and ISO-certified services.
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