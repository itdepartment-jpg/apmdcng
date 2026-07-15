<nav class="navbar fixed w-full top-0 left-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm animate-fade-in-down">
    <div class="container mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/" aria-label="Tethys Marine Home">
                <img src="/images/tethyslogoooooxx.png" alt="Tethys Marine Logo"
                     class="h-12 w-auto transition-transform duration-300 hover:scale-105"
                     width="48" height="48" loading="eager">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-6">
{{--            <a href="/design3" class="nav-link active-nav text-[#0077B6] font-medium">Home</a>--}}
            <a href="{{ route('home') }}"
               class="nav-link {{ request()->routeIs('home') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                Home
            </a>

{{--            <a href="about" class="nav-link text-gray-700 hover:text-[#0077B6] font-medium">About Us</a>--}}
            <a href="{{ route('about') }}"
               class="nav-link {{ request()->routeIs('about') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                About Us
            </a>

            <!-- Services Dropdown -->
{{--            <div class="relative group">--}}
{{--                <button class="nav-link text-gray-700 hover:text-[#0077B6] font-medium flex items-center focus:outline-none">--}}
{{--                    Services--}}
{{--                    <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--                <div class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">--}}
{{--                    <a href="#diving-services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Diving Services – IRM</a>--}}
{{--                    <a href="#inspections" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">GVI, CVI & NDT Inspection</a>--}}
{{--                    <a href="#tanker-maintenance" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Tanker Loading Terminal</a>--}}
{{--                    <a href="#surveys" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Geophysical Surveys</a>--}}
{{--                    <a href="#commissioning" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Pre-commissioning</a>--}}
{{--                    <a href="#anodes" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Anode Replacement</a>--}}
{{--                    <a href="#pipeline" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Pipeline Repair</a>--}}
{{--                    <a href="#vessels" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Vessel Chartering</a>--}}
{{--                    <a href="#civil-works" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]">Civil Works</a>--}}
{{--                </div>--}}
{{--            </div>--}}


            <!-- Services Dropdown -->
            <div class="relative group">
                <button class="nav-link flex items-center focus:outline-none {{ request()->routeIs('services.*') ? 'text-[#0077B6] font-medium' : 'text-gray-700 hover:text-[#0077B6] font-medium' }}">
                    Services
                    <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <a href="{{ route('services.diving') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.diving') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Diving Services
                    </a>
                    <a href="{{ route('services.inspection') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.inspection') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        GVI, CVI & NDT Inspection
                    </a>
                    <a href="{{ route('services.tanker-loading') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.tanker-loading') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Tanker Loading Terminal
                    </a>

                    <a href="{{ route('services.geophysical-survey') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.geophysical-survey') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Geophysical Survey
                    </a>

                    <a href="{{ route('services.pre-commissioning') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.pre-commissioning') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Pre-commissioning
                    </a>

                    <a href="{{ route('services.anode') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.anode') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Anode Replacement
                    </a>
                    <a href="{{ route('services.pipeline-repair') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.pipeline-repair') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Pipeline Repair
                    </a>

                    <a href="{{ route('services.vessel-chartering') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.vessel-chartering') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Vessel Chartering
                    </a>

                    <a href="{{ route('services.civil-works') }}"
                       class="block px-4 py-2 {{ request()->routeIs('services.civil-works') ? 'bg-gray-100 text-[#0077B6]' : 'text-gray-700 hover:bg-gray-100 hover:text-[#0077B6]' }}">
                        Civil Works
                    </a>



                    <!-- Other service links -->
                </div>
            </div>

            <!-- Services Ends  Dropdown -->
            <a href="{{ route('projects') }}"
               class="nav-link {{ request()->routeIs('projects') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                Projects
            </a>
{{--            <a href="management" class="nav-link text-gray-700 hover:text-[#0077B6] font-medium">Management</a>--}}
            <a href="{{ route('management') }}"
               class="nav-link {{ request()->routeIs('management') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                Management
            </a>

            <a href="{{ route('equipments') }}"
               class="nav-link {{ request()->routeIs('equipments') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                Equipment
            </a>

            <a href="{{ route('news') }}"
               class="nav-link {{ request()->routeIs('news') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                News
            </a>

            <a href="{{ route('contacts') }}"
               class="nav-link {{ request()->routeIs('contacts') ? 'nav-link active-nav text-[#0077B6] font-medium' : 'nav-link text-gray-700 hover:text-[#0077B6] font-medium' }}">
                Contact
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-button lg:hidden text-gray-700 focus:outline-none p-2 -mr-2"
                aria-label="Toggle menu">
            <svg class="menu-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg class="close-icon hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu hidden fixed inset-0 z-40 bg-white/95 backdrop-blur-sm pt-24 pb-12 px-6 overflow-y-auto" style="height: 100vh;">
        <!-- Cancel Button -->
        <button class="absolute top-4 right-4 text-gray-600 hover:text-red-500 focus:outline-none"
                id="close-mobile-menu" aria-label="Close menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="container mx-auto">
            <div class="flex flex-col space-y-8 py-6">
                <a href="#" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">Home</a>
                <a href="#about" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">About Us</a>
                <!-- Services Accordion -->
                <div class="border-b border-gray-100">
                    <button class="mobile-services-btn flex justify-between items-center w-full text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 focus:outline-none">
                        Services
                        <svg class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="mobile-services-dropdown hidden pl-4 pb-2">
                        <a href="#diving-services" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Diving Services – IRM</a>
                        <a href="#inspections" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">GVI, CVI & NDT</a>
                        <a href="#tanker-maintenance" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Tanker Maintenance</a>
                        <a href="#surveys" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Geophysical Surveys</a>
                        <a href="#commissioning" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Pre-commissioning</a>
                        <a href="#anodes" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Anode Replacement</a>
                        <a href="#pipeline" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Pipeline Repair</a>
                        <a href="#vessels" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Vessel Chartering</a>
                        <a href="#civil-works" class="block py-2 text-xl text-gray-700 hover:text-[#0077B6]">Civil Works</a>
                    </div>
                </div>
                <a href="#projects" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">Projects</a>
                <a href="management" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">Management</a>
                <a href="#equipment" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">Equipment</a>
                <a href="#contact" class="nav-link text-2xl font-medium text-gray-900 hover:text-[#0077B6] py-3 border-b border-gray-100">Contact</a>

                <!-- Contact Info -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="tel:+23484461079" class="flex items-center text-lg text-[#0077B6] font-medium mb-4">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +234 84 461079 / 462560
                    </a>
                    <a href="mailto:info@tethysmarine.com" class="flex items-center text-lg text-gray-700">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        info@tethysmarine.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .mobile-menu {
        transition: opacity 0.3s ease, transform 0.3s ease;
        opacity: 0;
        transform: translateY(-20px);
    }

    .mobile-menu:not(.hidden) {
        opacity: 1;
        transform: translateY(0);
    }

    .mobile-menu a {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    @media (prefers-reduced-motion: reduce) {
        .mobile-menu {
            transition: none;
        }
    }
    /* Dropdown Animation */
    .group-hover\:rotate-180:hover {
        transform: rotate(180deg);
    }

    /* Mobile Dropdown Transition */
    .mobile-services-dropdown {
        transition: max-height 0.3s ease, opacity 0.2s ease;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
    }

    .mobile-services-dropdown:not(.hidden) {
        max-height: 500px;
        opacity: 1;
    }


</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn = document.querySelector('.mobile-menu-button');
        const closeBtn = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });

    // Mobile Services Dropdown Toggle
    document.querySelector('.mobile-services-btn').addEventListener('click', function() {
        const dropdown = document.querySelector('.mobile-services-dropdown');
        const icon = this.querySelector('svg');
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });

</script>
