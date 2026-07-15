<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tethys-Plantgeria Limited - Offshore & Marine Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tethys-Plantgeria Limited provides innovative offshore and marine solutions including underwater services, installation & construction, and environmental preservation.">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            font-family: "Inter", sans-serif;
        }



        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header with Modern Navigation -->
    <header class="relative">
        <!-- Optimized Navigation Bar -->
        @include('partials.nav')

        <!-- Hero Section -->
        <div class="relative h-screen">
            <div class="absolute inset-0 bg-black/30 z-10"></div>
            {{-- <img src="/images/head5.jpg" alt="Offshore operations" class="w-full h-full object-cover">--}}
            <img src="/images/abouthead2.jpg" alt="Marine Contractor" class="w-full h-full object-cover">

            <div class="absolute inset-0 z-20 flex flex-col justify-center items-center px-6 lg:px-20 ">
                <div class="max-w-4xl  mx-auto text-center lg:text-left">
                    <h1 class="text-2xl sm:text-4xl  xl:text-5xl 2xl:text-6xl font-bold text-center text-white uppercase leading-tight mb-4 2xl:mb-6">
                        <span class="block">Innovative Solutions.</span>
                        <span class="block">Sustainable Future.</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-white text-center mb-6 2xl:mb-9 max-w-3xl mx-auto">
                        Delivering excellence in offshore and marine services while preserving our marine ecosystems.
                    </p>
                    <div class="flex flex-col text-sm sm:text-base sm:flex-row lg:mb-8 gap-4  justify-center ">
                        <a href="{{ route('projects') }}" class="bg-[#233E99] hover:bg-[#1a2f7a] text-white px-8 py-3 rounded-md font-medium transition duration-300">
                            See Projects
                        </a>
                        <a href="{{ route('contacts') }}" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#233E99] px-8 py-3 rounded-md font-medium transition duration-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service Icons -->
            <div class="hidden sm:block absolute bottom-0 left-0 w-full z-20 ">
                <div class="container mx-auto px-6 lg:px-20 py-4 2xl:py-8">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                        <div class="service-card bg-white/90 backdrop-blur-sm rounded-lg p-4 2xl:p-6 text-center shadow-md transition duration-300">
                            <div class="bg-[#233E99]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <img src="/icons/hammer.svg" alt="IMR" class="w-8">
                            </div>
                            <h3 class="text-[#233E99] font-semibold">Inspection, Maintenance & Repair</h3>
                        </div>

                        <div class="service-card bg-white/90 backdrop-blur-sm rounded-lg p-4 2xl:p-6 text-center shadow-md transition duration-300">
                            <div class="bg-[#233E99]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <img src="/icons/dive.svg" alt="Underwater Services" class="w-8">
                            </div>
                            <h3 class="text-[#233E99] font-semibold">Underwater & Survey Services</h3>
                        </div>

                        <div class="service-card bg-white/90 backdrop-blur-sm rounded-lg p-4 2xl:p-6 text-center shadow-md transition duration-300">
                            <div class="bg-[#233E99]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <img src="/icons/build.svg" alt="Installation" class="w-8">
                            </div>
                            <h3 class="text-[#233E99] font-semibold">Installation & Construction</h3>
                        </div>

                        <div class="service-card bg-white/90 backdrop-blur-sm rounded-lg p-4 2xl:p-6 text-center shadow-md transition duration-300">
                            <div class="bg-[#233E99]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <img src="/icons/ship.svg" alt="Offshore Support" class="w-8">
                            </div>
                            <h3 class="text-[#233E99] font-semibold">Offshore Support & Logistics</h3>
                        </div>

                        <div class="service-card bg-white/90 backdrop-blur-sm rounded-lg p-4 2xl:p-6 text-center shadow-md transition duration-300">
                            <div class="bg-[#233E99]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <img src="/icons/factory.svg" alt="Pre-Commissioning" class="w-8">
                            </div>
                            <h3 class="text-[#233E99] font-semibold">Pre-Commissioning & Civil Engineering</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-20 px-6 lg:px-20 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <span class="text-[#0FAECC] text-sm sm:text-base font-semibold uppercase tracking-wider">About Us</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mt-2">Welcome to Tethys-Plantgeria Limited</h2>
                <div class="w-20 h-1 bg-[#FFC107] mx-auto mt-4"></div>
            </div>

            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative rounded-xl overflow-hidden shadow-lg h-64">
                            <img src="/images/diving/diving-5.jpg" alt="Marine operations" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#233E99]/20"></div>
                        </div>
                        <div class="relative rounded-xl overflow-hidden shadow-lg h-80 -mt-8">
                            <img src="/images/tethysman2.jpg" alt="Offshore platform" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#0FAECC]/20"></div>
                        </div>
                        <div class="relative rounded-xl overflow-hidden shadow-lg h-80 -mt-8">
                            <img src="/images/buoy/buoy1.jpeg" alt="Diving operations" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#FFC107]/20"></div>
                        </div>
                        <div class="relative rounded-xl overflow-hidden shadow-lg h-64">
                            <img src="/images/diving/new-diving1.jpg" alt="Marine engineering" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#233E99]/20"></div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="mb-8">
                        <h3 class="text-xl sm:text-2xl font-semibold text-[#233E99] mb-4">Who We Are</h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                            Tethys-Plantgeria Limited is a leading provider of comprehensive offshore and marine solutions. With decades of combined experience, we specialize in delivering innovative, safe, and environmentally responsible services to the energy sector. Our team of experts is committed to excellence in every project we undertake.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl sm:text-2xl font-semibold text-[#233E99] mb-4">What We Do</h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                            We offer a full range of marine and offshore services including underwater inspections, installation and construction, maintenance and repair, and specialized support services. Our integrated approach ensures we meet the unique challenges of each project while maintaining the highest safety and environmental standards.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('about') }}" class="bg-[#233E99] hover:bg-[#1a2f7a] text-white text-sm sm:text-base px-6 py-3 rounded-md font-medium transition duration-300">
                            Learn More About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="text-center mb-12">
                <span class="text-[#0FAECC] text-sm sm:text-base font-semibold uppercase tracking-wider">Accreditations</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mt-2">Our Certifications</h2>
                <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-4">
                    We maintain the highest industry standards through our comprehensive certifications and accreditations.
                </p>
                <div class="w-20 h-1 bg-[#FFC107] mx-auto mt-4"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-4">

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-48 border border-gray-100 hover:border-blue-50 transform hover:-translate-y-1">
                    <img src="/images/cert-logo/imca.svg" alt="IMCA Certification" class="h-16 object-contain mb-4">
                    <p class="text-sm text-center text-gray-600 font-medium">International Marine Contractors Association</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-48 border border-gray-100 hover:border-blue-50 transform hover:-translate-y-1">
                    <img src="/images/cert-logo/iso9.png" alt="ISO Certification" class="h-16 object-contain mb-4 ">
                    <p class="text-sm text-center text-gray-600 font-medium">International Organization for Standardization</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-48 border border-gray-100 hover:border-blue-50 transform hover:-translate-y-1">
                    <img src="/images/cert-logo/lloyd1.svg" alt="Lloyd's Certification" class="h-16 object-contain mb-4 ">
                    <p class="text-sm text-center text-gray-600 font-medium">Lloyd's Registered Approved Service Supplier</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-48 border border-gray-100 hover:border-blue-50 transform hover:-translate-y-1">
                    <img src="/images/clients/shell.svg" alt="Shell Certification" class="h-16 object-contain mb-4 ">
                    <p class="text-sm text-center text-gray-600 font-medium">Shell Diving Center of Excellence</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-48 border border-gray-100 hover:border-blue-50 transform hover:-translate-y-1">
                    <img src="/images/cert-logo/son_png.png" alt="SON Certification" class="h-16 object-contain mb-4 ">
                    <p class="text-sm text-center text-gray-600 font-medium">Standard Organisation of Nigeria</p>
                </div>

            </div>
        </div>
    </section>
    {{-- <div class="bg-white p-6 rounded-xl shadow-sm flex items-center justify-center h-40">--}}
    {{-- <img src="/images/cert-logo/lloyd1.svg" alt="Certification 3" class="max-h-20 object-contain">--}}
    {{-- </div>--}}

    <!-- Projects Section -->
    <section class="py-20 px-6 lg:px-20 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <span class="text-[#0FAECC] text-sm sm:text-base font-semibold uppercase tracking-wider">Our Work</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mt-2">Recent Projects</h2>
                <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-4">
                    Explore our portfolio of successful projects delivering innovative marine and offshore solutions.
                </p>
                <div class="w-20 h-1 bg-[#FFC107] mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-xl shadow-lg transition duration-300 hover:shadow-xl">
                    <img src="/images/inspection/inspection1.jpg" alt="ROV Project" class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full">
                        <span class="text-[#FFC107] text-sm font-medium">Underwater Services</span>
                        <h3 class="text-white text-xl font-bold mt-1">ROV Inspection Project</h3>
                        <p class="text-gray-200 text-sm mt-2">
                            Comprehensive inspection of offshore platforms using advanced ROV technology.
                        </p>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-xl shadow-lg transition duration-300 hover:shadow-xl">
                    <img src="/images/inspection/inspection4.jpg" alt="Installation Project" class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full">
                        <span class="text-[#FFC107] text-sm font-medium">Installation</span>
                        <h3 class="text-white text-xl font-bold mt-1">Pipeline Installation</h3>
                        <p class="text-gray-200 text-sm mt-2">
                            Successful installation of subsea pipelines in challenging environmental conditions.
                        </p>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-xl shadow-lg transition duration-300 hover:shadow-xl">
                    <img src="/images/head4.jpeg" alt="Maintenance Project" class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full">
                        <span class="text-[#FFC107] text-sm font-medium">Maintenance</span>
                        <h3 class="text-white text-xl font-bold mt-1">Platform Maintenance</h3>
                        <p class="text-gray-200 text-sm mt-2">
                            Scheduled maintenance and repair of offshore production platforms.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('projects') }}" class="inline-flex items-center px-6 py-3 border border-transparent font-medium rounded-md shadow-sm text-white bg-[#233E99] hover:bg-[#1a2f7a] transition duration-300 text-sm sm:text-base">
                    View All Projects
                    <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-[#233E99] text-white">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-gray-300 uppercase text-sm tracking-wider">Years Experience</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">150+</div>
                    <div class="text-gray-300 uppercase text-sm tracking-wider">Projects Completed</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-gray-300 uppercase text-sm tracking-wider">Clients Worldwide</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">100%</div>
                    <div class="text-gray-300 uppercase text-sm tracking-wider">Safety Record</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6 lg:px-20 bg-gray-100">
        <div class="container mx-auto bg-[#233E99] rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-5 sm:p-12 lg:p-16">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">Ready to discuss your project?</h2>
                    <p class="text-gray-200 mb-8 text-sm sm:text-base">
                        Our team of experts is ready to provide innovative solutions tailored to your specific offshore and marine needs.
                    </p>
                    <a href="{{ route('contacts') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-sm sm:text-base font-medium rounded-md shadow-sm  bg-[#FFC107] hover:bg-yellow-500 text-white transition duration-300">
                        Contact Us Today
                        <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block bg-cover bg-center" style="background-image: url('/images/head1.jpg');"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')
    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Mobile menu toggle functionality would go here
        // This is just a placeholder for the actual implementation
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            // You would add click handler for mobile menu here
        });
    </script>
</body>

</html>