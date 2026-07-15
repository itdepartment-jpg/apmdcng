<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Logistics Solutions - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1550989460-0adf9ea622e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .agro-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .agro-light-bg {
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

        .agro-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 2px solid #FFEBEE;
        }

        .agro-card:hover {
            border-color: #EA222F;
            box-shadow: 0 10px 25px rgba(234, 34, 47, 0.1);
        }

        .farm-to-market-bg {
            background: linear-gradient(135deg, #FFF5F5 0%, #FFEBEE 100%);
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
                    Agro <span class="text-[#EA222F]">Logistics Solutions</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    End-to-end logistics support for agricultural products, from farm to port and market, ensuring
                    quality and timely delivery.
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">FARM TO MARKET</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Complete Agricultural Supply Chain Management
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides reliable Agro Logistics Solutions designed to support the efficient
                        transportation, handling, and distribution of agricultural products. Our services ensure product
                        quality, timely delivery, and compliance with logistics, safety, and regulatory standards.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our Agro Logistics Solutions cover end-to-end logistics support for agricultural commodities,
                        connecting farms, processing facilities, ports, and markets through efficient and
                        well-coordinated operations.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="agro-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Quality Preservation</h3>
                            <p class="text-gray-600 text-sm">
                                Specialized handling to maintain product freshness and quality
                            </p>
                        </div>
                        <div class="agro-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Timely Distribution</h3>
                            <p class="text-gray-600 text-sm">
                                Efficient coordination ensuring market-ready delivery
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="agro-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">End-to-End</h3>
                            <p class="text-white/90">Supply Chain Coverage</p>
                        </div>
                        <div class="agro-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">100%</h3>
                            <p class="text-gray-600">Quality Compliance</p>
                        </div>
                        <div class="agro-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Expert</h3>
                            <p class="text-gray-600">Logistics Teams</p>
                        </div>
                        <div class="agro-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Operations Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 agro-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR ADVANTAGES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Key Features of Our Agro Logistics
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Specialized solutions designed for agricultural product logistics
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="agro-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tractor text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Specialized Handling</h3>
                    <p class="text-gray-600 text-sm">
                        Expert care for agricultural commodities
                    </p>
                </div>

                <div class="agro-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-sync-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Efficient Coordination</h3>
                    <p class="text-gray-600 text-sm">
                        Seamless supply chain management
                    </p>
                </div>

                <div class="agro-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-truck text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Timely Transport</h3>
                    <p class="text-gray-600 text-sm">
                        Secure and prompt delivery systems
                    </p>
                </div>

                <div class="agro-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Expert Team</h3>
                    <p class="text-gray-600 text-sm">
                        Experienced agro logistics personnel
                    </p>
                </div>

                <div class="agro-card text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clipboard-check text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Quality Compliance</h3>
                    <p class="text-gray-600 text-sm">
                        Strict safety and quality standards
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
                    Agro Logistics Services Include
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Complete range of services for agricultural supply chain management
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="agro-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-truck-loading text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Transport & Logistics</h3>
                            <p class="text-gray-600">Efficient movement solutions</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Efficient transport solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Warehousing solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Agro products distribution</span>
                        </li>
                    </ul>
                </div>

                <div class="agro-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-temperature-low text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Specialized Handling</h3>
                            <p class="text-gray-600">Temperature-sensitive cargo care</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Live stock and perishable handling</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Pick/pack and order management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Processed goods export support</span>
                        </li>
                    </ul>
                </div>

                <div class="agro-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Equipment & Project Cargo</h3>
                            <p class="text-gray-600">Specialized equipment handling</p>
                        </div>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Agro-special equipment handling</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>Project cargo import/export solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-3"></i>
                            <span>AGS solution time-critical equipment</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Handled Section -->
    <section class="py-20 agro-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">OUR
                    EXPERTISE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Types of Agricultural Products Handled
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Specialized handling for diverse agricultural commodities
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-wheat-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Grains & Cereals</h3>
                    <p class="text-white/80">
                        Rice, wheat, maize, and other staple grains
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-apple-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cash Crops</h3>
                    <p class="text-white/80">
                        Fresh fruits, vegetables, and farm produce
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-industry text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Processed Goods</h3>
                    <p class="text-white/80">
                        Value-added agricultural products
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-pallet text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Packaged Products</h3>
                    <p class="text-white/80">
                        Bagged and palletized agro commodities
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
                    <div class="agro-light-bg p-10 rounded-2xl border border-red-100">
                        <span class="text-[#EA222F] font-semibold tracking-wider">QUALITY ASSURANCE</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Quality, Safety & Compliance
                        </h2>
                        <p class="text-gray-600 mb-8">
                            APMDC ensures all agro logistics operations comply with industry best practices, food safety
                            guidelines, and applicable regulatory requirements, with a strong focus on cargo integrity
                            and loss prevention.
                        </p>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-seedling text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Industry Standards</h3>
                                <p class="text-gray-600 text-sm">Adherence to best logistics practices</p>
                            </div>

                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-utensils text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Food Safety</h3>
                                <p class="text-gray-600 text-sm">Compliance with safety guidelines</p>
                            </div>

                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-shield-alt text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Cargo Integrity</h3>
                                <p class="text-gray-600 text-sm">Focus on loss prevention</p>
                            </div>

                            <div class="bg-white p-6 rounded-lg">
                                <div class="w-10 h-10 bg-[#EA222F] rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-clipboard-list text-white"></i>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2">Regulatory Compliance</h3>
                                <p class="text-gray-600 text-sm">All applicable requirements met</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-8">
                            Benefits of Our Agro Logistics Solutions
                        </h2>

                        <div class="space-y-8">
                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Reliable Execution</h3>
                                <p class="text-gray-600">Consistent and efficient logistics operations with proven
                                    track record</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Skilled Teams</h3>
                                <p class="text-gray-600">Experienced operations teams specialized in agricultural
                                    logistics</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Quality Assurance</h3>
                                <p class="text-gray-600">Strong compliance systems and quality control protocols</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">End-to-End Support</h3>
                                <p class="text-gray-600">Complete supply chain coverage from farm to market</p>
                            </div>

                            <div class="timeline-item">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Timely Delivery</h3>
                                <p class="text-gray-600">Commitment to secure and on-time delivery of agricultural
                                    products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Farm to Market Process -->
    <section class="py-20 farm-to-market-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR PROCESS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Farm to Market Journey
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    End-to-end agricultural supply chain management with APMDC
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tractor text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Farm Collection</h3>
                    <p class="text-gray-600">Efficient collection from agricultural sources</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-warehouse text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Storage & Processing</h3>
                    <p class="text-gray-600">Quality preservation and processing</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-truck text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Transport & Distribution</h3>
                    <p class="text-gray-600">Efficient movement to markets</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-store text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Market Delivery</h3>
                    <p class="text-gray-600">Timely delivery to end consumers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 agro-light-bg">
        <div class="container mx-auto px-6">
            <div class="agro-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Optimize Your Agricultural Supply Chain
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Partner with APMDC for reliable, efficient, and compliant agro logistics solutions that ensure your
                    agricultural products reach their destination in perfect condition.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact"
                        class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                        Request Agro Logistics Quote
                    </a>
                    <a href="/contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-block">
                        Consult Our Experts
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
