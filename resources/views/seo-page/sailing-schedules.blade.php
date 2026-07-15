<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sailing Schedules - APMDC Shipping</title>
    
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
        
        .schedule-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .schedule-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
                    Sailing <span class="text-[#EA222F]">Schedules</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Latest vessel schedules and shipping timetables from our trusted partners
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#client-schedules" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Client Schedules
                    </a>
                    <a href="#useful-websites" class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Useful Websites
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#client-schedules" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Client Schedules Section -->
    <section id="client-schedules" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">LATEST SCHEDULES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Client Sailing Schedules
                </h2>
                <p class="text-gray-600">
                    Access the latest sailing schedules directly from our trusted shipping line partners. 
                    All schedules are updated regularly to ensure accurate planning for your shipments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Saco GMBH -->
                <div class="schedule-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Saco GMBH</h3>
                    <p class="text-gray-600 mb-6">
                        Access sailing schedules and vessel information from Saco GMBH, our trusted partner for reliable shipping services.
                    </p>
                    <a href="https://www.saco-gmbh.com/schedules" target="_blank" class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block w-full">
                        View Schedules
                    </a>
                </div>

                <!-- Hapag-Lloyd -->
                <div class="schedule-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-anchor text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Hapag-Lloyd</h3>
                    <p class="text-gray-600 mb-6">
                        Get the latest sailing schedules from Hapag-Lloyd, one of the world's leading container shipping lines.
                    </p>
                    <a href="https://www.hapag-lloyd.com/en/online-business/schedule.html" target="_blank" class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block w-full">
                        View Schedules
                    </a>
                </div>

                <!-- OOCL -->
                <div class="schedule-card bg-white rounded-xl shadow-md border border-gray-100 p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-6 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-water text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">OOCL</h3>
                    <p class="text-gray-600 mb-6">
                        Access OOCL's comprehensive sailing schedules and vessel tracking information for your shipping needs.
                    </p>
                    <a href="https://www.oocl.com/eng/ourservices/eservices/schedules/Pages/default.aspx" target="_blank" class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block w-full">
                        View Schedules
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Useful Websites Section -->
    <section id="useful-websites" class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">PLANNING TOOLS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Useful Shipping Schedule Websites
                </h2>
                <p class="text-gray-600">
                    When planning your shipments, these comprehensive shipping schedule websites provide valuable tools and information for optimal logistics planning.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Ocean Schedules -->
                <div class="schedule-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-6">
                        <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 rounded-xl mr-6">
                            <i class="fas fa-globe-americas text-[#EA222F] text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Ocean Schedules</h3>
                            <p class="text-gray-600">
                                Comprehensive global shipping schedule platform with real-time vessel tracking and schedule information.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Coverage</span>
                            <span class="text-[#EA222F] font-medium">Global</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Features</span>
                            <span class="text-[#EA222F] font-medium">Real-time Tracking</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-gray-600">Updates</span>
                            <span class="text-[#EA222F] font-medium">Daily</span>
                        </div>
                    </div>
                    <a href="https://www.oceanschedules.com" target="_blank" class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block w-full text-center mt-6">
                        Visit Website
                    </a>
                </div>

                <!-- Linescape -->
                <div class="schedule-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-6">
                        <div class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 rounded-xl mr-6">
                            <i class="fas fa-route text-[#EA222F] text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Linescape</h3>
                            <p class="text-gray-600">
                                Advanced shipping schedule platform with route optimization and multi-carrier schedule comparison.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Coverage</span>
                            <span class="text-[#EA222F] font-medium">Worldwide</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Features</span>
                            <span class="text-[#EA222F] font-medium">Route Optimization</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-gray-600">Updates</span>
                            <span class="text-[#EA222F] font-medium">Real-time</span>
                        </div>
                    </div>
                    <a href="https://www.linescape.com" target="_blank" class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block w-full text-center mt-6">
                        Visit Website
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Resources Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">RESOURCES</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Planning Your Shipments
                    </h2>
                    <p class="text-gray-600 mb-6">
                        Effective shipment planning requires access to accurate and up-to-date sailing schedules. 
                        Our partnership with leading shipping lines ensures you have the most current information 
                        for your logistics planning needs.
                    </p>
                    <p class="text-gray-600 mb-8">
                        For complex shipping requirements or assistance with schedule coordination, 
                        our logistics experts are available to provide personalized support and guidance.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Real-time Updates</h3>
                            <p class="text-gray-600">
                                All schedule links are monitored and updated regularly to ensure accuracy.
                            </p>
                        </div>
                        <div class="bg-[#FAFAFA] p-6 rounded-xl">
                            <h3 class="font-bold text-xl mb-3 text-gray-800">Expert Support</h3>
                            <p class="text-gray-600">
                                Our team is available to help interpret schedules and plan optimal routes.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] p-8 rounded-xl text-white">
                        <h3 class="text-2xl font-bold mb-6">Need Schedule Assistance?</h3>
                        <p class="text-white/90 mb-6">
                            Our logistics team can help you navigate sailing schedules and find the best options for your shipping requirements.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Direct Contact</h4>
                                    <p class="text-white/80">+234-1-4541278</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Email Support</h4>
                                    <p class="text-white/80">schedules@apmdcshipping.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-clock mt-1 mr-3 text-white/90"></i>
                                <div>
                                    <h4 class="font-bold">Available Hours</h4>
                                    <p class="text-white/80">Mon-Fri: 8:00 AM - 6:00 PM WAT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Need Help With Shipping Schedules?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Contact our logistics team for personalized assistance with sailing schedules and shipment planning.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                        Contact Our Team
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