<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tethys-Plantgeria | Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Tethys Marine provides professional commercial diving, underwater construction, and marine contracting services with unmatched safety and expertise.">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(90deg, rgba(0, 45, 91, 0.9) 0%, rgba(0, 119, 182, 0.9) 100%);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .nav-link {
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #00A8E8;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        .active-nav:after {
            width: 100%;
        }

        .dive-icon {
            background: linear-gradient(135deg, #0077B6 0%, #00A8E8 100%);
        }


        .bubble {
            animation: floatUp 8s ease-in-out infinite;
            opacity: 0;
        }

        /* Performance-optimized animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out both;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out both;
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-300 {
            animation-delay: 0.3s;
        }

        .animation-delay-500 {
            animation-delay: 0.5s;
        }

        /* Bubble animations with will-change for better performance */
        .bubble {
            animation: floatUp 8s ease-in-out infinite;
            opacity: 0;
            will-change: transform, opacity;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0) scale(0.8);
                opacity: 0;
            }

            10% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.6;
            }

            100% {
                transform: translateY(-100vh) scale(1.2);
                opacity: 0;
            }
        }

        .bubble:nth-child(1) {
            animation-delay: 0s;
        }

        .bubble:nth-child(2) {
            animation-delay: 2s;
        }

        .bubble:nth-child(3) {
            animation-delay: 4s;
        }

        .bubble:nth-child(4) {
            animation-delay: 1s;
        }

        .bubble:nth-child(5) {
            animation-delay: 3s;
        }

        /* Enhanced nav-link transitions */
        .nav-link {
            position: relative;
            transition: color 0.2s ease;
            padding: 0.5rem 0;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #00A8E8;
            transition: width 0.3s ease;
            transform-origin: left center;
        }

        .nav-link:hover:after,
        .nav-link:focus-visible:after {
            width: 100%;
        }

        .active-nav:after {
            width: 100%;
            background-color: #0077B6;
        }



        /* Animation styles * Safety Section/
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Reduced motion preference */
        @media (prefers-reduced-motion: reduce) {
            .scroll-animate {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }
    </style>
</head>

<body class="bg-gray-50">

<!-- Scroll progress indicator -->
<div class="progress-container">
    <div class="progress-bar" id="progressBar"></div>
</div>
<!-- Header with Modern Navigation -->
<header class="relative">
    <!-- Optimized Navigation Bar -->
    @include('partials.nav')

    <!-- Hero Section (Updated with dynamic stats counter) -->
    <div class="relative h-[70vh] min-h-[450px] bg-gray-900 overflow-hidden">
        <picture>
            <source srcset="/images/abouthead.jpg" type="image/jpg">
            <source srcset="/images/abouthead.jpg" type="image/jpg">
            <img src="/images/abouthead.jpg" alt="Tethys-Plantgeria marine projects collage"
                 class="w-full h-full object-cover opacity-80" loading="eager" width="1920" height="1080">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/90 z-10"></div>
        <div class="absolute inset-0 z-20 flex items-center justify-center px-6 lg:px-20">
            <div class="max-w-4xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl text-center font-bold text-white mb-4">
                    <span class="block mt-10">Providing Diving & Offshore Services</span>
                    <span class="block text-xl sm:text-2xl md:text-3xl lg:text-4xl text-[#FFC107] font-medium mt-3">
                            Since 1991
                        </span>
                </h1>
                {{--                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">--}}
                {{--                        <div class="bg-black/40 p-2 sm:p-4 rounded-lg backdrop-blur-sm">--}}
                {{--                            <div class="text-xl sm:text-3xl font-bold text-white text-center mb-1 counter"--}}
                {{--                                data-target="35">0</div>--}}
                {{--                            <div class="text-sm text-center text-gray-300">Years Experience</div>--}}
                {{--                        </div>--}}
                {{--                        <div class="bg-black/40 p-2 sm:p-4 rounded-lg backdrop-blur-sm">--}}
                {{--                            <div class="text-xl sm:text-3xl font-bold text-white text-center mb-1 counter"--}}
                {{--                                data-target="150">0</div>--}}
                {{--                            <div class="text-sm text-center text-gray-300">Projects Completed</div>--}}
                {{--                        </div>--}}
                {{--                        <div class="bg-black/40 p-2 sm:p-4 rounded-lg backdrop-blur-sm">--}}
                {{--                            <div class="text-xl sm:text-3xl font-bold text-white text-center mb-1 counter"--}}
                {{--                                data-target="100">0</div>--}}
                {{--                            <div class="text-sm text-center text-gray-300">Safety Record</div>--}}
                {{--                        </div>--}}
                {{--                        <div class="bg-black/40 p-2 sm:p-4 rounded-lg backdrop-blur-sm">--}}
                {{--                            <div class="text-xl sm:text-3xl font-bold text-white text-center mb-1 counter"--}}
                {{--                                data-target="25">0</div>--}}
                {{--                            <div class="text-sm text-center text-gray-300">Oil Fields Served</div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            </div>
        </div>
        <!-- Breadcrumb Navigation -->
        <!-- <div class="absolute bottom-6 left-6 z-20">
        <nav class="flex items-center space-x-2 text-sm text-white/80">
            <a href="/" class="hover:text-[#0077B6] transition">Home</a>
            <span class="text-white/50">/</span>
            <span class="text-[#0077B6]">Projects</span>
        </nav>
    </div> -->
    </div>

    <!-- Client Logos Marquee -->
    <section class="py-8 bg-gray-100 border-y border-gray-200">
        <div class="container mx-auto px-4 overflow-hidden">
            <h3 class="text-center text-gray-500 text-sm font-medium mb-6">TRUSTED BY INDUSTRY LEADERS</h3>
            <div class="flex items-center justify-center marquee">
                <div class="flex space-x-12 px-12 animate-marquee whitespace-nowrap">
                    <img src="/images/clients/oando.svg
                    " alt="Oando" class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/totalEni.webp" alt="Total"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/AgiplogoEni.svg" alt="Agip"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/shell.svg" alt="SPDC"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/exxonmobillogocolor2x.png" alt="Exxon"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/daewoo.png" alt="Daewoo"
                         class="h-8 opacity-70 hover:opacity-100 transition">

                    <img src="/images/clients/nnpc-logo.467c0c7.png" alt="NNPC"
                         class="h-8 opacity-70 hover:opacity-100 transition">


                    <img src="/images/clients/raec_africa_logo.jpg" alt="raec_africa"
                         class="h-8 opacity-70 hover:opacity-100 transition">

                    <img src="/images/clients/oando.svg" alt="Oando"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/totalEni.webp" alt="Total"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/AgiplogoEni.svg" alt="Agip"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/shell.svg" alt="SPDC"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/exxonmobillogocolor2x.png" alt="Addax"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/daewoo.png" alt="Daewoo"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                    <img src="/images/clients/raec_africa_logo.jpg" alt="raec_africa"
                         class="h-8 opacity-70 hover:opacity-100 transition">

                    <img src="/images/clients/nnpc-logo.467c0c7.png" alt="NNPC"
                         class="h-8 opacity-70 hover:opacity-100 transition">
                </div>
            </div>
        </div>
    </section>


    <!-- Ongoing Projects (Enhanced with Tabs) -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class=" mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Ongoing Contracts</h2>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Project 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#0077B6] text-white p-3 rounded-lg mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 font-sans">Forcados & Bonny Oil Field</h3>
                                <p class="text-sm text-gray-600 mt-1">Active since December 2020</p>
                            </div>
                        </div>

                        <div class="space-y-4 border-t border-gray-100 pt-4">
                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Main Client:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">RENASSANCE AFRICA ENERGY COMPANY</span>
                            </div>

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Location/Project:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">Forcados & Bonny Oil Field</span>
                            </div>

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Description:</span>
                                <span class="font-normal text-gray-800 lg:pl-16 sm:pl-2">Provision of Diving and Marine Maintenance Services at offshore Bonny and Forcados fields</span>
                            </div>
                            {{--                                Services at offshore Bonny and Forcados fields--}}

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Start Date:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">December 2020</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#0077B6] text-white p-3 rounded-lg mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 font-sans">Nigerian Water Security</h3>
                                <p class="text-sm text-gray-600 mt-1">Since March 2024</p>
                            </div>
                        </div>

                        <div class="space-y-4 border-t border-gray-100 pt-4">
                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Main Client:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">CRITERION NIGERIA LIMITED</span>
                            </div>

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Location/Project:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">Nigerian Water (Within Nigerian Water)</span>
                            </div>

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Description:</span>
                                <span class="font-normal text-gray-800 lg:pl-[51px] sm:pl-2">Hire and Operation of Security Escort Patrol Boat (Conqueror Tre) for Security Task</span>
                            </div>
                            {{--                                Services at offshore Bonny and Forcados fields--}}

                            <div class="flex flex-col sm:flex-row">
                                <span class="w-40 font-medium text-gray-600 mb-1 sm:mb-0">Start Date:</span>
                                <span class="font-normal text-gray-800 sm:pl-2">March 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Project Records</h2>
                        <p class="text-gray-600 text-sm sm:text-base">Selected completed projects from our extensive portfolio</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <select id="sort-select" class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#0077B6] focus:border-transparent text-sm sm:text-base">
                            <option value="year-desc">Sort by Year (Newest First)</option>
                            <option value="year-asc">Sort by Year (Oldest First)</option>
                            <option value="client-asc">Sort by Client (A-Z)</option>
                            <option value="client-desc">Sort by Client (Z-A)</option>

                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="year">
                                Year <span class="sort-icon">↓</span>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="client">
                                Client
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="location">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="work">
                                Scope of Work
                            </th>
                            {{--                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="contractor">--}}
                            {{--                                    Contractor--}}
                            {{--                                </th>--}}
                        </tr>
                        </thead>
                        <tbody id="table-body" class="bg-white divide-y divide-gray-200">
                        <!-- Data will be inserted here by JavaScript -->
                        </tbody>
                    </table>

                    <div class="flex items-center justify-between px-6 py-3 bg-white border-t border-gray-200">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button id="prev-btn-mobile" class="relative inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </button>
                            <button id="next-btn-mobile" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span id="page-start" class="font-medium">1</span> to <span id="page-end" class="font-medium">3</span> of <span id="total-items" class="font-medium">15</span> projects
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <button id="prev-btn" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <div class="relative">
                                        <select id="page-select" class="appearance-none h-full py-2 pl-3 pr-8 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                            <!-- Options will be dynamically inserted -->
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <button id="next-btn" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#0077B6]/50 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl sm:text-3xl font-bold mb-6">Ready to Discuss Your Marine Project?</h2>
                <p class="text-base sm:text-xl text-white mb-8">Our team of marine engineers is prepared to tackle
                    your most challenging offshore requirements</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contacts"
                       class="px-8 py-3 bg-[#0077B6] text-white rounded-md hover:bg-[#005a8c] transition-colors font-medium text-sm sm:text-base text-center">
                        Contact Our Team
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        .animate-marquee {
            animation: marquee 25s linear infinite;
        }

        .animate-marquee2 {
            animation: marquee2 25s linear infinite;
            animation-delay: 12.5s;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes marquee2 {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }

                function updateCount() {
                    const count = +counter.innerText;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target + '+';
                    }
                }
            });
        });
    </script>


    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        // Intersection Observer for scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.scroll-animate');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');

                            // Animate numbers if element has animate-number class
                            const numberElements = entry.target.querySelectorAll('.animate-number');
                            numberElements.forEach(el => {
                                const target = parseInt(el.getAttribute('data-target'));
                                const duration = 2000; // 2 seconds
                                const start = 0;
                                const increment = target / (duration / 16);

                                let current = start;
                                const timer = setInterval(() => {
                                    current += increment;
                                    if (current >= target) {
                                        clearInterval(timer);
                                        current = target;
                                    }
                                    el.textContent = Math.floor(current) + (target === 100 ? '%' : '');
                                }, 16);
                            });
                        }
                    });
                }, { threshold: 0.1 });

                elements.forEach(el => observer.observe(el));
            };

            // Initialize animations
            animateOnScroll();

            // Re-run if content is dynamically loaded
            if (typeof Turbo !== 'undefined') {
                document.addEventListener('turbo:load', animateOnScroll);
            }
        });


        //Project Archive Script
        // Project data

        const projects = @json($formattedProjects);

        // Pagination variables
        const itemsPerPage = 5;
        let currentPage = 1;
        let sortedData = [...projects];
        let sortDirection = 'desc';
        let currentSort = 'year';

        // DOM elements
        const tableBody = document.getElementById('table-body');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const prevBtnMobile = document.getElementById('prev-btn-mobile');
        const nextBtnMobile = document.getElementById('next-btn-mobile');
        const pageStart = document.getElementById('page-start');
        const pageEnd = document.getElementById('page-end');
        const totalItems = document.getElementById('total-items');
        const pageNumbers = document.getElementById('page-numbers');
        const sortButtons = document.querySelectorAll('.sort');
        const sortSelect = document.getElementById('sort-select');

        // Initialize the table
        function initTable() {
            renderTable();
            updatePagination();
            renderPageNumbers();
        }

        // Render table rows
        function renderTable() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedData = sortedData.slice(startIndex, endIndex);

            tableBody.innerHTML = '';

            if (paginatedData.length === 0) {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                    No projects found
                </td>
            `;
                tableBody.appendChild(row);
                return;
            }

            paginatedData.forEach(project => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-gray-50';
                row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${project.year}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.client}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.location}</td>
                <td class="px-6 py-4 text-sm text-gray-500">${project.work}</td>
            `;
                tableBody.appendChild(row);
            });
        }

        // Update pagination info
        function updatePagination() {
            const totalPages = Math.ceil(sortedData.length / itemsPerPage);
            const startItem = (currentPage - 1) * itemsPerPage + 1;
            const endItem = Math.min(currentPage * itemsPerPage, sortedData.length);

            pageStart.textContent = startItem;
            pageEnd.textContent = endItem;
            totalItems.textContent = sortedData.length;

            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === totalPages;
            prevBtnMobile.disabled = currentPage === 1;
            nextBtnMobile.disabled = currentPage === totalPages;
        }

        // Render page numbers
        function renderPageNumbers() {
            const totalPages = Math.ceil(sortedData.length / itemsPerPage);
            pageNumbers.innerHTML = '';

            // Always show first page
            addPageNumber(1);

            // Show ellipsis if needed
            if (currentPage > 3 && totalPages > 3) {
                const ellipsis = document.createElement('span');
                ellipsis.className = 'relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700';
                ellipsis.textContent = '...';
                pageNumbers.appendChild(ellipsis);
            }

            // Show current page and adjacent pages
            const startPage = Math.max(2, currentPage - 1);
            const endPage = Math.min(totalPages - 1, currentPage + 1);

            for (let i = startPage; i <= endPage; i++) {
                if (i > 1 && i < totalPages) {
                    addPageNumber(i);
                }
            }

            // Show ellipsis if needed
            if (currentPage < totalPages - 2 && totalPages > 3) {
                const ellipsis = document.createElement('span');
                ellipsis.className = 'relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700';
                ellipsis.textContent = '...';
                pageNumbers.appendChild(ellipsis);
            }

            // Always show last page if there's more than one page
            if (totalPages > 1) {
                addPageNumber(totalPages);
            }
        }

        function addPageNumber(page) {
            const pageElement = document.createElement('button');
            pageElement.className = `relative inline-flex items-center px-4 py-2 border text-sm font-medium ${currentPage === page ? 'bg-blue-50 border-blue-500 text-blue-600 z-10' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50'}`;
            pageElement.textContent = page;
            pageElement.addEventListener('click', () => {
                currentPage = page;
                renderTable();
                updatePagination();
                renderPageNumbers();
            });
            pageNumbers.appendChild(pageElement);
        }

        // Sort data
        function sortData(sortBy, direction = null) {
            if (direction) {
                sortDirection = direction;
            } else if (currentSort === sortBy) {
                sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                currentSort = sortBy;
                sortDirection = 'desc';
            }

            // Update sort icons in headers
            sortButtons.forEach(button => {
                const icon = button.querySelector('.sort-icon');
                if (button.dataset.sort === sortBy) {
                    icon.textContent = sortDirection === 'asc' ? '↑' : '↓';
                } else {
                    icon.textContent = '';
                }
            });

            // Update select dropdown to match current sort
            sortSelect.value = `${sortBy}-${sortDirection}`;

            sortedData = [...projects].sort((a, b) => {
                // Handle numeric sorting for year
                if (sortBy === 'year') {
                    return sortDirection === 'asc' ? a.year - b.year : b.year - a.year;
                }

                // Handle string sorting for other fields
                const valueA = String(a[sortBy]).toLowerCase();
                const valueB = String(b[sortBy]).toLowerCase();

                if (valueA < valueB) return sortDirection === 'asc' ? -1 : 1;
                if (valueA > valueB) return sortDirection === 'asc' ? 1 : -1;
                return 0;
            });

            currentPage = 1;
            renderTable();
            updatePagination();
            renderPageNumbers();
        }

        // Event listeners for pagination
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(sortedData.length / itemsPerPage)) {
                currentPage++;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        prevBtnMobile.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        nextBtnMobile.addEventListener('click', () => {
            if (currentPage < Math.ceil(sortedData.length / itemsPerPage)) {
                currentPage++;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        // Event listeners for header sorting
        sortButtons.forEach(button => {
            button.addEventListener('click', () => {
                sortData(button.dataset.sort);
            });
        });

        // Event listener for select dropdown sorting
        sortSelect.addEventListener('change', function() {
            const [sortBy, direction] = this.value.split('-');
            sortData(sortBy, direction);
        });

        //new JS
        // Add this to your existing script
        const pageSelect = document.getElementById('page-select');

        // New function to render page select options
        function renderPageSelect() {
            const totalPages = Math.ceil(sortedData.length / itemsPerPage);
            pageSelect.innerHTML = '';

            // Add page number options
            for (let i = 1; i <= totalPages; i++) {
                const option = document.createElement('option');
                option.value = i;
                option.textContent = `Page ${i}`;
                if (i === currentPage) {
                    option.selected = true;
                }
                pageSelect.appendChild(option);
            }

            // Add "All" option at the end
            const allOption = document.createElement('option');
            allOption.value = 'all';
            allOption.textContent = 'All Projects';
            pageSelect.appendChild(allOption);
        }

        // Modified renderTable function to handle "All" selection
        function renderTable() {
            let paginatedData;

            if (pageSelect.value === 'all') {
                paginatedData = sortedData;
            } else {
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                paginatedData = sortedData.slice(startIndex, endIndex);
            }

            tableBody.innerHTML = '';

            if (paginatedData.length === 0) {
                const row = document.createElement('tr');
                row.innerHTML = `
            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                No projects found
            </td>
        `;
                tableBody.appendChild(row);
                return;
            }

            paginatedData.forEach(project => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-gray-50';
                row.innerHTML = `
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${project.year}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.client}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.location}</td>
            <td class="px-6 py-4 text-sm text-gray-500">${project.work}</td>
        `;
                tableBody.appendChild(row);
            });
        }

        // Update initTable function
        function initTable() {
            renderTable();
            updatePagination();
            renderPageSelect(); // Replace renderPageNumbers with this
        }

        // Add event listener for page select
        pageSelect.addEventListener('change', function() {
            if (this.value === 'all') {
                renderTable();
                // Disable pagination buttons when showing all
                prevBtn.disabled = true;
                nextBtn.disabled = true;
                prevBtnMobile.disabled = true;
                nextBtnMobile.disabled = true;
            } else {
                currentPage = parseInt(this.value);
                renderTable();
                updatePagination();
            }
        });

        // Update your pagination button event handlers to also update the select
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                pageSelect.value = currentPage;
                renderTable();
                updatePagination();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(sortedData.length / itemsPerPage)) {
                currentPage++;
                pageSelect.value = currentPage;
                renderTable();
                updatePagination();
            }
        });

        // Also update your sortData function to reset the select
        function sortData1(sortBy, direction = null) {
            // ... existing sort logic ...

            // Reset to first page after sorting
            currentPage = 1;
            pageSelect.value = 1;
            renderTable();
            updatePagination();
            renderPageSelect();
        }


        // Sort data function
        function sortData(sortBy, direction = null) {
            if (direction) {
                sortDirection = direction;
            } else if (currentSort === sortBy) {
                sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                currentSort = sortBy;
                sortDirection = 'desc';
            }

            // Update sort icons in headers if they exist
            sortButtons.forEach(button => {
                const icon = button.querySelector('.sort-icon');
                if (button.dataset.sort === sortBy) {
                    icon.textContent = sortDirection === 'asc' ? '↑' : '↓';
                } else {
                    icon.textContent = '';
                }
            });

            // Sort the data
            sortedData = [...projects].sort((a, b) => {
                // Handle numeric sorting for year
                if (sortBy === 'year') {
                    return sortDirection === 'asc' ? a.year - b.year : b.year - a.year;
                }

                // Handle string sorting for other fields
                const valueA = String(a[sortBy]).toLowerCase();
                const valueB = String(b[sortBy]).toLowerCase();

                if (valueA < valueB) return sortDirection === 'asc' ? -1 : 1;
                if (valueA > valueB) return sortDirection === 'asc' ? 1 : -1;
                return 0;
            });

            // Reset to first page after sorting
            currentPage = 1;
            if (pageSelect) {
                pageSelect.value = 1;
            }
            renderTable();
            updatePagination();
            if (renderPageSelect) {
                renderPageSelect();
            }
        }
        // Initialize
        initTable();

        // Initialize
        // initTable();
    </script>
</body>

</html>
