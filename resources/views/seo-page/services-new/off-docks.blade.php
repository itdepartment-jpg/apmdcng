<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Off-Dock Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1553413071-8dd6e8d828b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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
                    Off-Dock <span class="text-[#EA222F]">Services</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Secure and efficient cargo handling and storage outside main port terminals, reducing congestion and
                    improving turnaround.
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
                    <span class="text-[#EA222F] font-semibold tracking-wider">PORT OPTIMIZATION</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Efficient Off-Dock Cargo Solutions
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides efficient and secure Off-Dock Services designed to support cargo handling,
                        storage, and logistics operations outside the main port terminals. Our services help decongest
                        ports, improve turnaround time, and ensure seamless cargo flow.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our Off-Dock Services provide reliable cargo support solutions through well-coordinated off-dock
                        facilities, enabling smooth transfer, storage, and distribution of goods.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Reduced Congestion</h3>
                            <p class="text-gray-600">
                                Efficient cargo handling outside main port terminals
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Secure Storage</h3>
                            <p class="text-gray-600">
                                24/7 security monitoring and controlled access
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">9+</h3>
                            <p class="text-white/90">Nicolas Trucks for Heavy Lifts</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">3×</h3>
                            <p class="text-gray-600">45 Tons Kalmar Handlers</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Armed Security & CCTV</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">100%</h3>
                            <p class="text-white/90">Regulatory Compliance</p>
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
                <span class="text-[#EA222F] font-semibold tracking-wider">ADVANTAGES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Key Features of Our Off-Dock Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive solutions designed to optimize your cargo handling and storage operations
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-truck text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Reduced Port Congestion</h3>
                    <p class="text-gray-600">
                        Efficient cargo handling outside main terminals, reducing dwell time and port congestion
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Secure Storage</h3>
                    <p class="text-gray-600">
                        24/7 armed security, CCTV surveillance, and secure fencing for maximum cargo protection
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Efficient Cargo Movement</h3>
                    <p class="text-gray-600">
                        Well-coordinated operations with modern equipment for smooth cargo transfer and handling
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-check text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Regulatory Compliance</h3>
                    <p class="text-gray-600">
                        Full compliance with port authority regulations and international safety standards
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR FACILITIES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Off-Dock Services
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    State-of-the-art facilities and equipment to handle all your cargo needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Equipment & Machinery</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>9× Units of Nicolas Trucks for Heavy Lift Moves</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>3× 45 Tons Kalmar Container Handlers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Flood Lights (All Terminals)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Standby Generators (All Terminals)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Security & Infrastructure</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Secure Fences with Wire Mesh (All Terminals)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Official Armed Police and Private Security – 24/7</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>CCTV available for installation (All Terminals)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Entry/Exit gates (All Terminals)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-200" data-aos="fade-up"
                    data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Administrative & Customs</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Access to Customs Bonded Terminals</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Resident Customs and Asycuda Connectivity</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>EDI (Electronic Data Interchange)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#EA222F] mt-1 mr-3"></i>
                            <span>Well Trained Personnel</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Types Section -->
    <section class="py-20 bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">CARGO EXPERTISE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Types of Cargo Supported
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    We handle diverse cargo types with specialized equipment and expertise
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-boxes text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">General Cargo</h3>
                    <p class="text-gray-600">
                        Comprehensive handling for various general cargo types
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-container-storage text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Containerized Cargo</h3>
                    <p class="text-gray-600">
                        Full and empty container handling and storage
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-seedling text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Agro Goods</h3>
                    <p class="text-gray-600">
                        Specialized handling for agricultural and packaged goods
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl text-center service-card" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="w-16 h-16 bg-[#EA222F]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Project Cargo</h3>
                    <p class="text-gray-600">
                        Expertise in project and breakbulk cargo operations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Your Trusted Off-Dock Partner
                    </h2>
                    <p class="text-gray-600 mb-8">
                        APMDC ensures all off-dock operations adhere to port authority regulations, safety standards,
                        and best logistics practices, with strong emphasis on cargo security and operational efficiency.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-[#EA222F] text-white rounded-lg p-3 mr-4">
                                <i class="fas fa-bolt text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-gray-800">Efficient Cargo Handling</h3>
                                <p class="text-gray-600">Streamlined processes for faster turnaround and reduced dwell
                                    time</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#EA222F] text-white rounded-lg p-3 mr-4">
                                <i class="fas fa-lock text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-gray-800">Secure Facilities</h3>
                                <p class="text-gray-600">Well-managed facilities with 24/7 security and surveillance
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#EA222F] text-white rounded-lg p-3 mr-4">
                                <i class="fas fa-users text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-gray-800">Experienced Team</h3>
                                <p class="text-gray-600">Skilled logistics and operations teams with years of expertise
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#EA222F] text-white rounded-lg p-3 mr-4">
                                <i class="fas fa-chart-line text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-gray-800">Cost Efficiency</h3>
                                <p class="text-gray-600">Improved turnaround and operational cost savings</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-10 rounded-2xl">
                        <h3 class="text-2xl font-bold mb-6">Quality, Safety & Compliance</h3>
                        <p class="text-white/90 mb-6">
                            APMDC maintains the highest standards in off-dock operations, ensuring compliance with all
                            regulatory requirements and implementing rigorous safety protocols.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-xl mr-4"></i>
                                <span>Adherence to port authority regulations</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-xl mr-4"></i>
                                <span>International safety standards compliance</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-xl mr-4"></i>
                                <span>Regular audits and inspections</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-xl mr-4"></i>
                                <span>Continuous staff training and development</span>
                            </div>
                        </div>

                        <div class="mt-10 pt-6 border-t border-white/20">
                            <a href="/contact"
                                class="bg-white text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg inline-block">
                                Request Off-Dock Services
                            </a>
                        </div>
                    </div>
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
