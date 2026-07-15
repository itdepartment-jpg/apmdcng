<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APMDC Ship to Shore Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1565514158740-064f34bd6cfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #EA222F, #303791);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .marine-gradient {
            background: linear-gradient(135deg, #1a237e 0%, #0d47a1 50%, #1565c0 100%);
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

    <!-- Services Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    APMDC <span class="text-[#EA222F]">Ship to Shore</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Efficient and secure transfer of personnel, equipment, and supplies between vessels and shore
                    facilities.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a>
                    {{-- <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Get Quote
                    </a> --}}
                </div>
            </div>
        </div>

        <!-- Simple scroll indicator -->
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">MARINE SUPPORT</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Seamless Vessel-to-Shore Operations
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides dependable Ships-to-Shore services designed to support the seamless transfer of
                        personnel, equipment, and supplies between vessels and shore facilities. Our operations ensure
                        safety, efficiency, and continuity of maritime and offshore activities.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our Ships-to-Shore services facilitate secure and timely movement between vessels at anchorage
                        and shore locations, supporting port, offshore, and marine operations with precision and
                        reliability.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Safe Transfers</h3>
                            <p class="text-gray-600">
                                Secure movement of personnel and cargo between ship and shore
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">24/7 Operations</h3>
                            <p class="text-gray-600">
                                Round-the-clock availability for all marine support needs
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="marine-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Operational Availability</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">100%</h3>
                            <p class="text-gray-600">Safety Compliance</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Expert</h3>
                            <p class="text-gray-600">Marine Logistics Team</p>
                        </div>
                        <div class="marine-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Global</h3>
                            <p class="text-white/90">Tracking Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OPERATIONAL EXCELLENCE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Key Features of Our Ship-to-Shore Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive marine support solutions designed for efficiency and safety
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Safe Operations</h3>
                    <p class="text-gray-600">
                        Secure transfer of personnel, equipment, and supplies with strict safety protocols
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Expert Personnel</h3>
                    <p class="text-gray-600">
                        Experienced marine and logistics teams with specialized training
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Seamless Coordination</h3>
                    <p class="text-gray-600">
                        Perfect coordination between vessel and shore operations
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">24/7 Availability</h3>
                    <p class="text-gray-600">
                        Round-the-clock operational support for all marine activities
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR CAPABILITIES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive General Cargo Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Expert marine logistics and cargo handling solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Marine Logistics Expertise</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-anchor text-[#EA222F] mt-1 mr-3"></i>
                            <span>Experts in Marine Logistics operations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-cogs text-[#EA222F] mt-1 mr-3"></i>
                            <span>Specialists in handling marine parts management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-file-contract text-[#EA222F] mt-1 mr-3"></i>
                            <span>SSIT advisory and comprehensive documentation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-bolt text-[#EA222F] mt-1 mr-3"></i>
                            <span>Speedy Customs Clearance and vessel connections</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Operational Excellence</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-ship text-[#EA222F] mt-1 mr-3"></i>
                            <span>Offshore and onshore connections and parts deliveries</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-[#EA222F] mt-1 mr-3"></i>
                            <span>Management of complex transport assignments within precise time frames</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-route text-[#EA222F] mt-1 mr-3"></i>
                            <span>Specialized consultants to find fastest routes to any port</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-truck text-[#EA222F] mt-1 mr-3"></i>
                            <span>Always using the most suitable and efficient transport mode</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Technology & Transparency</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-chart-line text-[#EA222F] mt-1 mr-3"></i>
                            <span>Transparent services and pricing with lead-time guarantees</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-laptop-code text-[#EA222F] mt-1 mr-3"></i>
                            <span>Latest IT solutions for effective reporting and updates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-globe text-[#EA222F] mt-1 mr-3"></i>
                            <span>MySPS online tool through DB Schenker partnership</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-search-location text-[#EA222F] mt-1 mr-3"></i>
                            <span>Global tracking and status updates anytime, anywhere</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety & Compliance Section -->
    <section class="py-20 marine-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">SAFETY
                        FIRST</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                        Operational Safety & Compliance
                    </h2>
                    <p class="text-white/90 mb-8">
                        APMDC prioritizes safety in all Ships-to-Shore operations. All activities are conducted in
                        accordance with international maritime safety regulations, port authority requirements, and
                        established marine operational procedures.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-center bg-white/10 p-4 rounded-lg">
                            <i class="fas fa-globe-americas text-2xl text-[#EA222F] mr-4"></i>
                            <div>
                                <h3 class="text-xl font-bold mb-1">International Standards</h3>
                                <p class="text-white/80">Compliance with global maritime safety regulations</p>
                            </div>
                        </div>

                        <div class="flex items-center bg-white/10 p-4 rounded-lg">
                            <i class="fas fa-clipboard-check text-2xl text-[#EA222F] mr-4"></i>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Port Authority Compliance</h3>
                                <p class="text-white/80">Adherence to all port-specific requirements and procedures</p>
                            </div>
                        </div>

                        <div class="flex items-center bg-white/10 p-4 rounded-lg">
                            <i class="fas fa-user-shield text-2xl text-[#EA222F] mr-4"></i>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Trained Personnel</h3>
                                <p class="text-white/80">Certified marine crews with specialized safety training</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-white/10 backdrop-blur-sm p-10 rounded-2xl border border-white/20">
                        <h3 class="text-2xl font-bold mb-6">Safety Protocols</h3>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#EA222F] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <span>Regular safety drills and emergency preparedness</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#EA222F] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <span>Comprehensive risk assessments for all operations</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#EA222F] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <span>Continuous monitoring of operational conditions</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#EA222F] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <span>Regular equipment maintenance and inspections</span>
                            </div>
                        </div>

                        <div class="mt-10 pt-6 border-t border-white/20">
                            <p class="text-white/90 mb-4">
                                Our commitment to safety ensures reliable and secure ship-to-shore operations for all
                                our clients.
                            </p>
                            <a href="/contact"
                                class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                                Discuss Safety Requirements
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Your Trusted Marine Support Partner
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Proven expertise in ship-to-shore operations with a focus on safety, reliability, and efficiency
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-[#FAFAFA] p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-graduate text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Expert Crew</h3>
                    <p class="text-gray-600">
                        Trained and experienced marine crews with specialized certifications
                    </p>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Safety Culture</h3>
                    <p class="text-gray-600">
                        Strong safety protocols and risk management culture
                    </p>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Reliable Timing</h3>
                    <p class="text-gray-600">
                        Consistent turnaround and rapid response times
                    </p>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-sync-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Seamless Coordination</h3>
                    <p class="text-gray-600">
                        Perfect synchronization between vessel and shore operations
                    </p>
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <div
                    class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white p-10 rounded-2xl max-w-4xl mx-auto">
                    <h3 class="text-2xl md:text-3xl font-bold mb-6">Proven Track Record</h3>
                    <p class="text-white/90 mb-8 text-lg">
                        With years of experience in marine support operations, APMDC has built a reputation for
                        reliability, efficiency, and safety in all ship-to-shore activities. Our proven track record
                        speaks to our commitment to excellence.
                    </p>
                    <a href="/contact"
                        class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                        Start Your Marine Project
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
