<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vessel & Port Support Services - APMDC Shipping</title>

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
                url('https://images.unsplash.com/photo-1561715276-a2d087060f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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

        .premium-card {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
        }

        .feature-card {
            border-left: 4px solid #EA222F;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
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
                    Vessel & Port <span class="text-[#EA222F]">Support</span> Services
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Comprehensive maritime solutions for efficient port operations & vessel management in Nigerian
                    waters
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Our Services
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Get Support
                    </a>
                </div>
            </div>
        </div>

        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span class="text-[#EA222F] font-semibold tracking-wider">EXPERT SOLUTIONS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        Complete Vessel & Port Agency Services
                    </h2>
                    <p class="text-gray-600 mb-6">
                        APMDC provides comprehensive vessel and port support services across all Nigerian ports.
                        Our ISO 9001:2015 certified processes ensure efficient, reliable, and compliant operations
                        for vessel owners, operators, and charterers.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With 18+ years of experience in Nigerian waters, we deliver seamless port operations,
                        expert documentation handling, and 24/7 support for all your maritime needs.
                    </p>

                    <div class="bg-[#FAFAFA] p-6 rounded-xl border-l-4 border-[#EA222F]">
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Strategic Port Coverage</h3>
                        <p class="text-gray-600">
                            Operating across all major Nigerian ports including Lagos, Port Harcourt, Warri, Calabar,
                            and Onne with European representation in the UK.
                        </p>
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">18+</h3>
                            <p class="text-white/90">Years Experience</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">24/7</h3>
                            <p class="text-gray-600">Operations Support</p>
                        </div>
                        <div class="bg-[#FAFAFA] p-8 rounded-xl border border-gray-100">
                            <h3 class="text-4xl font-bold mb-2 text-gray-800">100%</h3>
                            <p class="text-gray-600">Fully Licensed</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-8 rounded-xl">
                            <h3 class="text-4xl font-bold mb-2">ISO</h3>
                            <p class="text-white/90">9001:2015 Certified</p>
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
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR EXPERTISE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Comprehensive Vessel & Port Support
                </h2>
                <p class="text-gray-600">
                    End-to-end maritime solutions ensuring smooth operations from arrival to departure in Nigerian
                    waters.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Port Agency -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-anchor text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Port Agency Services</h3>
                    <p class="text-gray-600 mb-6">
                        Full-service port agency support ensuring smooth vessel operations from arrival to departure.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Pre-arrival documentation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Port formalities coordination
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Berthing & unberthing
                        </li>
                    </ul>
                </div>

                <!-- Vessel Husbandry -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-ship text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Vessel Husbandry</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive care and maintenance services to keep vessels operational and crew-supported.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Crew changes & logistics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Provisions & stores supply
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Bunkering arrangements
                        </li>
                    </ul>
                </div>

                <!-- Documentation -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-passport text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Documentation & Clearance</h3>
                    <p class="text-gray-600 mb-6">
                        Complete vessel documentation including customs, immigration, and port authority clearances.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Customs documentation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Immigration procedures
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Port authority clearances
                        </li>
                    </ul>
                </div>

                <!-- Crew Logistics -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Crew Logistics</h3>
                    <p class="text-gray-600 mb-6">
                        Efficient crew mobilization, sign-on/off procedures, and comprehensive crew support services.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Crew mobilization
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Hotel arrangements
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Airport transfers
                        </li>
                    </ul>
                </div>

                <!-- Security Coordination -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Security Coordination</h3>
                    <p class="text-gray-600 mb-6">
                        Vessel security arrangements and ISPS compliance coordination with port security authorities.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            ISPS compliance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Security personnel
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Port security coordination
                        </li>
                    </ul>
                </div>

                <!-- Technical Support -->
                <div class="service-card bg-white rounded-xl shadow-md border border-gray-100 p-8" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-[#303791]/10 to-[#EA222F]/10 p-4 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-[#EA222F] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Technical Support</h3>
                    <p class="text-gray-600 mb-6">
                        Arrangement of repairs, technical services, and spare parts logistics through certified vendors.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Repair arrangements
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Technical services
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#EA222F] mr-2"></i>
                            Spare parts logistics
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">WHY CHOOSE APMDC</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    The APMDC Advantage
                </h2>
                <p class="text-gray-600">
                    Experience the difference with our comprehensive vessel and port support services.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">24/7 Availability</h3>
                    <p class="text-gray-600">Round-the-clock support for emergency situations and time-sensitive
                        operations.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Nationwide Coverage</h3>
                    <p class="text-gray-600">Strategic presence across all major Nigerian ports and offshore locations.
                    </p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-[#EA222F] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">ISO Certified</h3>
                    <p class="text-gray-600">Quality-assured services meeting international standards and best
                        practices.</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-[#303791] text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Expert Team</h3>
                    <p class="text-gray-600">Seasoned professionals with deep knowledge of Nigerian maritime
                        regulations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Port Coverage Section -->
    <section class="py-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR COVERAGE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Nationwide Port Support Network
                </h2>
                <p class="text-gray-600">
                    Comprehensive vessel and port support services across all major Nigerian maritime hubs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-anchor"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Lagos Port Complex</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Tin Can Island & Apapa Ports - Head Office Operations</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-star mr-2 text-yellow-400"></i>
                        <span>Head Office Location</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Port Harcourt</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Onne & Federal Ocean Terminal - Eastern Operations</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i>
                        <span>Branch Office</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Warri Port</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Delta Ports Complex - Western Niger Delta Operations</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i>
                        <span>Branch Office</span>
                    </div>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">UK Office</h3>
                    </div>
                    <p class="text-gray-600 mb-4">European Representation & International Coordination</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-star mr-2 text-yellow-400"></i>
                        <span>International Office</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Support Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    24/7 Emergency Vessel Support
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Immediate assistance for vessel emergencies, port emergencies, and urgent maritime situations in
                    Nigerian waters.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Emergency: 09087995953
                    </a>
                    <a href="tel:+2349087995931"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-3"></i> Support: 09087995931
                    </a>
                </div>
            </div>
        </div>
    </section>

    @php
        $vesselFaqs = [
            [
                'question' => 'How can I request a quote for logistics or vessel services?',
                'answer' => 'You can request a quote by clicking the “Request a Quote” button on our website or by contacting our team directly via phone, email, or WhatsApp.',
            ],
            [
                'question' => 'Can I get updates on my shipment or vessel?',
                'answer' => 'Yes. Clients can contact our operations team for shipment, vessel, or logistics updates using their reference details.',
            ],
            [
                'question' => 'How do I contact APMDC Logistics for urgent assistance?',
                'answer' => 'You can contact us by phone, email, or WhatsApp. Our support team is available Monday to Friday, from 8:00 AM to 5:00 PM.',
            ],
        ];
    @endphp

    @include('partials.faq-section', [
        'faqs' => $vesselFaqs,
        'faqId' => 'vessel-service-faq',
        'eyebrow' => 'Vessel Support FAQs',
        'heading' => 'Questions About Vessel and Port Services',
        'intro' => 'Helpful answers for vessel owners, operators, and charterers planning Nigerian port calls.',
        'sectionClass' => 'py-20 bg-[#FAFAFA]',
        'compact' => true,
    ])

    <!-- Booking Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl border border-gray-100">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Ready for Seamless Port Operations?
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Trust APMDC's 18+ years of experience and ISO-certified processes for your vessel and port
                        support needs in Nigerian waters.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact.show') }}"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                            Request Vessel Support
                        </a>
                        <a href="mailto:info@apmdcng.com"
                            class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:bg-[#EA222F] hover:text-white">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Email Our Team
                            </span>
                        </a>
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
