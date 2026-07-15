<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocol & Logistics Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1561484930-998b6a7b22e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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

        .protocol-gradient {
            background: linear-gradient(135deg, #EA222F 0%, #FF6B6B 50%, #FF8E53 100%);
        }

        .protocol-light-bg {
            background-color: #FFF5F5;
        }

        .protocol-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 2px solid #FFEBEE;
        }

        .protocol-card:hover {
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
                    Protocol & <span class="text-[#EA222F]">Logistics Services</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Seamless planning and execution of corporate, governmental, and operational logistics for people and
                    equipment.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    {{-- <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a> --}}

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
                    <span class="text-[#EA222F] font-semibold tracking-wider">EXECUTIVE SUPPORT</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Professional Protocol & Logistics Management
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC offers Protocol & Logistics Services to support corporate, governmental, and industrial
                        clients with smooth operational and event logistics. Our services ensure seamless planning,
                        coordination, and execution.
                    </p>
                    <p class="text-gray-600 mb-8">
                        From VIP receptions to complex event logistics, we provide comprehensive solutions that ensure
                        professional and efficient execution of your important engagements.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="protocol-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Strategic Planning</h3>
                            <p class="text-gray-600 text-sm">
                                Comprehensive planning for all logistics requirements
                            </p>
                        </div>
                        <div class="protocol-card">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Professional Execution</h3>
                            <p class="text-gray-600 text-sm">
                                Flawless coordination and implementation
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="protocol-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Expert</h3>
                            <p class="text-white/90">Protocol Teams</p>
                        </div>
                        <div class="protocol-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">End-to-End</h3>
                            <p class="text-gray-600">Coordination</p>
                        </div>
                        <div class="protocol-light-bg p-8 rounded-xl border border-red-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">Secure</h3>
                            <p class="text-gray-600">Operations</p>
                        </div>
                        <div class="protocol-gradient text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">Compliant</h3>
                            <p class="text-white/90">Standards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Offering Section -->
    <section class="py-20 protocol-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">CORE OFFERING</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Our Protocol & Logistics Solutions
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive services for corporate, governmental, and industrial clients
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="protocol-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-check text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Event & Protocol Planning</h3>
                    <p class="text-gray-600">
                        Comprehensive planning for corporate events, meetings, and official engagements
                    </p>
                </div>

                <div class="protocol-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-tie text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">VIP & Delegation Logistics</h3>
                    <p class="text-gray-600">
                        Coordination for VIPs, official delegations, and operational teams
                    </p>
                </div>

                <div class="protocol-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-car text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Transport & Support Services</h3>
                    <p class="text-gray-600">
                        Transportation, accommodation, and comprehensive support arrangements
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
                    Why Choose Our Protocol Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Professional solutions with attention to every detail
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="protocol-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Experienced Team</h3>
                            <p class="text-gray-600">Skilled protocol professionals</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Seasoned personnel with expertise in protocol and logistics management
                    </p>
                </div>

                <div class="protocol-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Secure Operations</h3>
                            <p class="text-gray-600">Safe movement of people & equipment</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Timely and secure coordination for personnel and equipment transportation
                    </p>
                </div>

                <div class="protocol-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-sync-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">End-to-End Coordination</h3>
                            <p class="text-gray-600">Complete operational management</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Comprehensive coordination from planning through execution
                    </p>
                </div>

                <div class="protocol-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 bg-[#EA222F] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-clipboard-check text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Regulatory Compliance</h3>
                            <p class="text-gray-600">Adherence to all standards</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Strict compliance with organizational and regulatory requirements
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section class="py-20 protocol-gradient text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-white font-semibold tracking-wider bg-white/20 px-4 py-1 rounded-full">SERVICES
                    INCLUDE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-6">
                    Comprehensive Protocol Services
                </h2>
                <p class="text-white/90 max-w-3xl mx-auto">
                    Complete solutions for your protocol and logistics requirements
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-friends text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">VIP & Delegation Reception</h3>
                    <p class="text-white/80">
                        Professional reception and hospitality services for VIPs and official delegations
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-road text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Transportation Coordination</h3>
                    <p class="text-white/80">
                        Convoy arrangements and transportation logistics for people and equipment
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Event Logistics Planning</h3>
                    <p class="text-white/80">
                        Comprehensive planning and execution for corporate and official events
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 text-center"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Onsite Operational Support</h3>
                    <p class="text-white/80">
                        Continuous onsite support during events and operations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="protocol-gradient text-white p-10 md:p-16 rounded-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Professional Protocol Solutions
                </h2>
                <p class="text-white/90 text-lg mb-8 max-w-3xl mx-auto">
                    Ensure seamless execution of your important engagements with APMDC's professional protocol and
                    logistics services.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">

                    <a href="{{ route('contact.show') }}"
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
