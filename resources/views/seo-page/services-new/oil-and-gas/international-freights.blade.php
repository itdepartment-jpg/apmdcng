<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupage / Consolidation Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1604897497921-9fe45e3e1b72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .consolidation-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .consolidation-light-bg {
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

        .consolidation-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 2px solid #FFEBEE;
        }

        .consolidation-card:hover {
            border-color: #EA222F;
            box-shadow: 0 10px 25px rgba(234, 34, 47, 0.1);
        }

        .check-icon {
            color: #EA222F;
            margin-right: 12px;
            font-size: 1.2rem;
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
                    Smart Consolidation
                    {{-- <span class="text-[#EA222F]">Consolidation Services</span> --}}
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Cost-efficient consolidation of multiple small shipments into single cargo loads for international
                    freight.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a>
                    <a href="#contact"
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">COST-EFFICIENT SHIPPING</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Smart Consolidation for International Freight
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides Groupage Services to consolidate multiple smaller shipments from different
                        clients into a single container or freight load, reducing shipping costs while ensuring timely
                        delivery.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our consolidation services optimize freight costs by combining shipments from multiple clients,
                        making international shipping more affordable and efficient for businesses of all sizes.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="consolidation-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Cost Savings</h3>
                            <p class="text-gray-600 text-sm">
                                Significant reduction in shipping costs through consolidation
                            </p>
                        </div>
                        <div class="consolidation-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Efficient Delivery</h3>
                            <p class="text-gray-600 text-sm">
                                Timely delivery with optimized container utilization
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="consolidation-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Multi-Modal</h3>
                            <p class="text-white/90">Consolidation Solutions</p>
                        </div>
                        <div class="consolidation-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Cost</h3>
                            <p class="text-gray-600">Efficient Solutions</p>
                        </div>
                        <div class="consolidation-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Secure</h3>
                            <p class="text-gray-600">Shipment Tracking</p>
                        </div>
                        <div class="consolidation-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Flexible</h3>
                            <p class="text-white/90">Scheduling Options</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Offering Section -->
    <section class="py-20 consolidation-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">CORE OFFERING</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Our Consolidation Solutions
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive groupage services for optimized international shipping
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="consolidation-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-boxes text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Cargo Consolidation</h3>
                    <p class="text-gray-600">
                        Combining multiple shipments into single containers for air, sea, or land freight
                    </p>
                </div>

                <div class="consolidation-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users-cog text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Multi-Client Coordination</h3>
                    <p class="text-gray-600">
                        Seamless coordination of shipments from different clients into optimized loads
                    </p>
                </div>

                <div class="consolidation-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clipboard-list text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Documentation Management</h3>
                    <p class="text-gray-600">
                        Efficient container management and comprehensive documentation handling
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">KEY ADVANTAGES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Key Features of Our Groupage Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Experience the benefits of professional consolidation services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="consolidation-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-money-bill-wave text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Cost-Effective</h3>
                            <p class="text-gray-600">Significant shipping cost savings</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Reduce freight costs by sharing container space with other shipments
                    </p>
                </div>

                <div class="consolidation-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Secure Handling</h3>
                            <p class="text-gray-600">Individual shipment tracking</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Each shipment is tracked and handled securely throughout the consolidation process
                    </p>
                </div>

                <div class="consolidation-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Expert Team</h3>
                            <p class="text-gray-600">Experienced consolidation specialists</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Skilled personnel with expertise in consolidation and logistics management
                    </p>
                </div>

                <div class="consolidation-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Flexible Scheduling</h3>
                            <p class="text-gray-600">Regular and urgent shipments</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Accommodate both scheduled regular shipments and urgent shipping requirements
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section class="py-20 consolidation-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">COMPREHENSIVE
                    SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Services Include
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Complete consolidation solutions for your international shipping needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-boxes-packing text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Cargo Consolidation</h3>
                    <p class="text-white/80 text-center">
                        Combining shipments from multiple clients into optimized loads
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tape text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Packing & Labeling</h3>
                    <p class="text-white/80 text-center">
                        Professional packing and clear labeling for groupage shipments
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-file-contract text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Documentation Support</h3>
                    <p class="text-white/80 text-center">
                        Comprehensive documentation and customs clearance assistance
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Load Planning</h3>
                    <p class="text-white/80 text-center">
                        Strategic container load planning and continuous monitoring
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">PROCESS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    How Our Consolidation Works
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    A streamlined process for efficient groupage shipping
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">1</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Shipment Collection</h3>
                    <p class="text-gray-600">
                        Gather shipments from multiple clients at our consolidation center
                    </p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">2</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Consolidation Planning</h3>
                    <p class="text-gray-600">
                        Strategically plan container loads for optimal space utilization
                    </p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">3</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Loading & Documentation</h3>
                    <p class="text-gray-600">
                        Professional loading and complete documentation preparation
                    </p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">4</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Shipping & Tracking</h3>
                    <p class="text-gray-600">
                        International shipment with real-time tracking and updates
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 consolidation-light-bg">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="consolidation-card">
                        <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Benefits of Groupage Services
                        </h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-[#EA222F] text-xl mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-2">Significant Cost Savings</h3>
                                    <p class="text-gray-600">Share container space to reduce shipping costs by up to
                                        70%</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-[#EA222F] text-xl mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-2">Flexible Shipping Options</h3>
                                    <p class="text-gray-600">Ideal for businesses with smaller or irregular shipping
                                        volumes</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-[#EA222F] text-xl mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-2">Reduced Administrative Burden</h3>
                                    <p class="text-gray-600">We handle all documentation and customs procedures</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-[#EA222F] text-xl mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-2">Enhanced Security</h3>
                                    <p class="text-gray-600">Professional handling and tracking for each individual
                                        shipment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <span class="text-[#EA222F] font-semibold tracking-wider">IDEAL FOR</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-8">
                            Who Should Use Groupage Services?
                        </h2>

                        <div class="space-y-8">
                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Small & Medium Businesses</h3>
                                <p class="text-gray-600">Companies with smaller shipping volumes looking to reduce
                                    costs</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">E-commerce Businesses</h3>
                                <p class="text-gray-600">Online retailers with regular but small shipment requirements
                                </p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Import/Export Companies</h3>
                                <p class="text-gray-600">Businesses with diverse product lines and shipping needs</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Manufacturers</h3>
                                <p class="text-gray-600">Companies with spare parts or small component shipments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="consolidation-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Start Saving on International Shipping
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Reduce your shipping costs while maintaining reliable delivery with APMDC's professional groupage
                    and consolidation services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    {{-- <a href="#contact"
                        class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                        Request Consolidation Quote
                    </a> --}}
                    <a href="{{ route('contact.show') }}"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-block">
                        Speak with Our Experts
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
