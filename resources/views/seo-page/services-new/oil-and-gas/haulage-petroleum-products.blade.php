<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haulage of Petroleum Products - APMDC Shipping</title>

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
                url('');
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

        .petroleum-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .petroleum-light-bg {
            background-color: #FFF5F5;
        }

        .petroleum-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 2px solid #FFEBEE;
        }

        .petroleum-card:hover {
            border-color: #EA222F;
            box-shadow: 0 10px 25px rgba(234, 34, 47, 0.1);
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
                    Haulage of <span class="text-[#EA222F]">Petroleum Products</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Safe and timely transport of petroleum products from refineries to depots and distribution points.
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
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">FUEL TRANSPORT</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Safe Petroleum Product Haulage
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides safe and efficient haulage of petroleum products, ensuring reliable transport
                        from refineries to depots, terminals, and distribution points. Our operations prioritize safety,
                        regulatory compliance, and timely delivery.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With specialized tankers and certified drivers, we ensure your petroleum products reach their
                        destination securely and on schedule.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="petroleum-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Safety First</h3>
                            <p class="text-gray-600 text-sm">
                                Priority on safety and regulatory compliance
                            </p>
                        </div>
                        <div class="petroleum-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Timely Delivery</h3>
                            <p class="text-gray-600 text-sm">
                                Reliable transport with on-time delivery guarantee
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="petroleum-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Certified</h3>
                            <p class="text-white/90">Drivers</p>
                        </div>
                        <div class="petroleum-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">GPS</h3>
                            <p class="text-gray-600">Monitoring</p>
                        </div>
                        <div class="petroleum-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Real-Time</h3>
                            <p class="text-gray-600">Tracking</p>
                        </div>
                        <div class="petroleum-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Safe</h3>
                            <p class="text-white/90">Transport</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Offering Section -->
    <section class="py-20 petroleum-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">CORE OFFERING</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Our Haulage Solutions
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive petroleum product transport services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-truck text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Road Transport</h3>
                    <p class="text-gray-600">
                        Safe transport of petroleum, diesel, petrol, and other fuels
                    </p>
                </div>

                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Regulatory Coordination</h3>
                    <p class="text-gray-600">
                        Coordination with regulatory authorities and terminals
                    </p>
                </div>

                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-route text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Logistics Planning</h3>
                    <p class="text-gray-600">
                        End-to-end logistics planning for bulk transport operations
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
                    Why Choose Our Haulage Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Safe, reliable, and efficient petroleum transport
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-shield text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Certified Drivers</h3>
                    <p class="text-gray-600">
                        Experienced and certified drivers for safe transport
                    </p>
                </div>

                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-satellite-dish text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">GPS Monitoring</h3>
                    <p class="text-gray-600">
                        Specialized tanker fleet with GPS tracking
                    </p>
                </div>

                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Safety Compliance</h3>
                    <p class="text-gray-600">
                        Strict safety and environmental compliance
                    </p>
                </div>

                <div class="petroleum-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Timely Delivery</h3>
                    <p class="text-gray-600">
                        Real-time tracking and on-time delivery
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section class="py-20 petroleum-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">SERVICES
                    INCLUDE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Comprehensive Haulage Services
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Complete petroleum product transport solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-gas-pump text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Product Handling</h3>
                    <p class="text-white/80">
                        Loading, transportation, and offloading of petroleum products
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-truck-moving text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Fleet Management</h3>
                    <p class="text-white/80">
                        Comprehensive fleet management and monitoring systems
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Safety Inspections</h3>
                    <p class="text-white/80">
                        Regular safety inspections and risk management protocols
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-file-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Documentation</h3>
                    <p class="text-white/80">
                        Complete documentation and regulatory reporting
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="petroleum-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Safe Petroleum Transport Solutions
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Ensure safe and timely delivery of your petroleum products with APMDC's professional haulage
                    services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    {{-- <a href="#contact"
                        class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                        Request Haulage Quote
                    </a> --}}
                    <a href=" {{ route('contact.show') }}"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-block">
                        Contact Our Team
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
