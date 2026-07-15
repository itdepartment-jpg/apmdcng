<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rail Freight Services - APMDC Shipping</title>
    
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
                        url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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
        
        .edrs-card {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
        }
        
        .route-card {
            border-left: 4px solid #EA222F;
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
    <!-- Hero Section -->
    <section class="relative service-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Rail <span class="text-[#EA222F]">Freight</span> Services
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Efficient, reliable rail freight transport across Nigeria in partnership with Nigeria Railway Corporation
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#booking" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Book Rail Transport
                    </a>
                    <a href="#routes" class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        View Routes
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">NEW SERVICE</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        APMDC Commences Rail Freight Services in Nigeria
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC, in a strategic partnership with Nigeria Railway Corporation, now operates a world-class and efficient rail freight transport system in Nigeria. 
                        Our rail freight services provide a reliable alternative to road transport, ensuring your cargo reaches its destination safely and on time.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With our extensive experience in logistics and transportation, we bring innovation and efficiency to Nigeria's rail freight sector, 
                        offering comprehensive solutions for businesses across the country.
                    </p>
                    
                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Strategic Partnership</h3>
                        <p class="text-gray-600">
                            In collaboration with Nigeria Railway Corporation, we deliver reliable and efficient rail freight solutions across Nigeria.
                        </p>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">100%</h3>
                            <p class="text-white/90">Safety Record</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">4</h3>
                            <p class="text-gray-600">Active Routes</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">60%</h3>
                            <p class="text-gray-600">Cost Savings</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">24/7</h3>
                            <p class="text-white/90">Operations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E.D.R.S Concepts Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR CONCEPT</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    The E.D.R.S Concepts of APMDC
                </h2>
                <p class="text-gray-600">
                    Our innovative approach to rail freight transportation built on four key pillars that drive efficiency and value.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- E - Efficient -->
                <div class="service-card edrs-card rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold mb-4">E</div>
                    <h3 class="text-xl font-bold mb-4">Efficient Freight Transport Alternative</h3>
                    <p class="text-white/90">
                        Providing a reliable and efficient alternative to road transport with consistent schedules and reliable delivery times.
                    </p>
                </div>

                <!-- D - Decongesting -->
                <div class="service-card edrs-card rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold mb-4">D</div>
                    <h3 class="text-xl font-bold mb-4">Decongesting the Nigerian Port Systems</h3>
                    <p class="text-white/90">
                        Reducing port congestion by providing efficient rail transport solutions that bypass road traffic bottlenecks.
                    </p>
                </div>

                <!-- R - Reducing -->
                <div class="service-card edrs-card rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold mb-4">R</div>
                    <h3 class="text-xl font-bold mb-4">Reducing Delivery Time to End Users</h3>
                    <p class="text-white/90">
                        Cutting down transit times significantly compared to traditional road transport methods.
                    </p>
                </div>

                <!-- S - Saving -->
                <div class="service-card edrs-card rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl font-bold mb-4">S</div>
                    <h3 class="text-xl font-bold mb-4">Saving Cost on Cargo Delivery</h3>
                    <p class="text-white/90">
                        Offering cost-effective transportation solutions that reduce overall logistics expenses for businesses.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">TECHNOLOGY</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Advanced Tracking & Reporting
                </h2>
                <p class="text-gray-600">
                    State-of-the-art technology solutions for complete visibility and control of your rail shipments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- EDI -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-exchange-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Electronic Data Interchange (EDI)</h3>
                    <p class="text-gray-600">
                        Seamless electronic data exchange available for efficient communication and documentation processing.
                    </p>
                </div>

                <!-- Electric Interchange Report -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-file-contract text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Electric Interchange Report</h3>
                    <p class="text-gray-600">
                        Comprehensive reporting including container condition surveys and detailed interchange documentation.
                    </p>
                </div>

                <!-- Real-time Reporting -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-satellite-dish text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Containers Real Time Reporting</h3>
                    <p class="text-gray-600">
                        Direct real-time reporting to shipping lines with live tracking and status updates for complete visibility.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Routes Section -->
    <section id="routes" class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">NETWORK</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Our Current Routes
                </h2>
                <p class="text-gray-600">
                    Currently operating efficient rail freight services across key strategic routes in Nigeria.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Route 1 -->
                <div class="route-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-train"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">APMT Apapa to Oyingbo Container Terminal</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Efficient container transport between APMT Apapa and Oyingbo Container Terminal with return service.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Regular scheduled services</span>
                    </div>
                </div>

                <!-- Route 2 -->
                <div class="route-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-train"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">APMT Apapa to Ebute Metta Container Terminal</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Direct rail service connecting APMT Apapa with Ebute Metta Container Terminal and back.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Multiple daily departures</span>
                    </div>
                </div>

                <!-- Route 3 -->
                <div class="route-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-train"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">APMT Apapa to Iddo Container Terminal</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Reliable container transport service between APMT Apapa and Iddo Container Terminal.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Consistent scheduling</span>
                    </div>
                </div>

                <!-- Route 4 -->
                <div class="route-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-train"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">APMT Apapa to Ijoko, Ogun State</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Extended service connecting APMT Apapa with Ijoko Container Terminal in Ogun State.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Regular return services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Routes Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">EXPANSION</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Other Routes To Start Soon
                </h2>
                <p class="text-gray-600">
                    We are continuously expanding our rail network to serve more locations across Nigeria.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Future Route 1 -->
                <div class="bg-[#FAFAFA] p-6 rounded-xl border border-gray-200" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">ENL Apapa to NRC Yard at Ebute Metta</h3>
                    <p class="text-gray-600 mb-4">New route connecting ENL Apapa with Nigeria Railway Corporation yard at Ebute Metta and back to APMT Apapa.</p>
                    <div class="flex items-center text-sm text-[#EA222F] font-medium">
                        <i class="fas fa-hourglass-half mr-2"></i>
                        <span>Coming Soon</span>
                    </div>
                </div>

                <!-- Future Route 2 -->
                <div class="bg-[#FAFAFA] p-6 rounded-xl border border-gray-200" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Eko Support Apapa to NRC Ebute Metta</h3>
                    <p class="text-gray-600 mb-4">Future service connecting Eko Support Apapa with Nigeria Railway Corporation at Ebute Metta and Eko Support.</p>
                    <div class="flex items-center text-sm text-[#EA222F] font-medium">
                        <i class="fas fa-hourglass-half mr-2"></i>
                        <span>Coming Soon</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to Book Your Rail Transport?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Experience efficient, cost-effective rail freight services with APMDC. Book your container for rail transport today.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:09087995953" class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i> Call: 09087995953
                    </a>
                    <a href="tel:09087995931" class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i> Call: 09087995931
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm inline-flex items-center justify-center">
                        <i class="fas fa-calendar-check mr-2"></i> Click Here to Book Online
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