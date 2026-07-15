<!-- Navigation -->
<header class="fixed w-full z-50 bg-white/90 backdrop-blur-sm shadow-md transition-all duration-500" id="navbar">
    <div class="container mx-auto px-6 py-2">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/APMDC-Logo.png') }}" alt="APMDC Logo"
                        class="w-12 h-auto transition-transform duration-300 hover:scale-105">
                    <span class="ml-3 text-xl font-bold text-primary">APMDC</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="nav-link text-neutdrk hover:text-accent font-semibold relative group transition-colors duration-300">
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('about') }}"
                    class="nav-link text-neutdrk hover:text-accent font-semibold relative group transition-colors duration-300">
                    About Us
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>

                <!-- Services Dropdown -->
                <div class="relative group" id="services-dropdown">
                    <button
                        class="nav-link text-neutdrk hover:text-accent font-semibold relative transition-colors duration-300 flex items-center">
                        Services
                        <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg py-2 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-1 border border-gray-100">
                        <a href="{{ route('warehousing-distribution') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            Warehouseing and Distribution
                        </a>
                        <a href="{{ route('general-cargo') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            General Cargo
                        </a>
                        <a href="{{ route('ships-agency-handling') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            Ships Agency Handling
                        </a>

                        <!-- Oil and Gas Sub-menu -->
                        <div class="relative group/sub">
                            <button
                                class="w-full text-left px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200 flex justify-between items-center">
                                Oil and Gas
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                            <div class="absolute left-full top-0 ml-1 w-56 bg-white rounded-md shadow-lg py-2 z-20 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-200 transform translate-x-2 border border-gray-100">
                                <a href="{{ route('haulage-petroleum-products') }}"
                                    class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                                    Haulage of Petroleum Products
                                </a>
                                <a href="{{ route('protocol-logistics-services') }}"
                                    class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                                    Protocol & Logistics Services
                                </a>
                                <a href="{{ route('international-freights') }}"
                                    class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                                    International Freights (Groupage / Consolidation Services)
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('agro-logistics-solutions') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            Agro Logistics Solutions
                        </a>
                        <a href="{{ route('off-docks') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            Off-Docks
                        </a>
                        <a href="{{ route('apmdc-ships-to-shore') }}"
                            class="block px-4 py-2 text-sm text-neutdrk hover:bg-gray-50 hover:text-accent transition-colors duration-200">
                            APMDC Ships to Shore
                        </a>
                    </div>
                </div>

                <a href="#"
                    class="nav-link text-neutdrk hover:text-accent font-semibold relative group transition-colors duration-300">
                    E-Services
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('team') }}"
                    class="nav-link text-neutdrk hover:text-accent font-semibold relative group transition-colors duration-300">
                    Our Team
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('contact.show') }}"
                    class="bg-[#EA222F] text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-md inline-block">
                    Contact Us
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden focus:outline-none text-black" aria-label="Toggle menu">
                <div class="w-8 space-y-2 transition-transform duration-300" id="hamburger">
                    <span class="block w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="block w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="block w-3/4 h-0.5 bg-black transition-all duration-300 ml-auto"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg border-t border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}"
                    class="text-neutdrk hover:text-accent font-medium py-3 border-b border-gray-100 transition-colors duration-200">
                    Home
                </a>
                <a href="{{ route('about') }}"
                    class="text-neutdrk hover:text-accent font-medium py-3 border-b border-gray-100 transition-colors duration-200">
                    About Us
                </a>

                <!-- Mobile Services Dropdown -->
                <div class="mobile-dropdown border-b border-gray-100">
                    <button
                        class="mobile-dropdown-btn text-neutdrk hover:text-accent font-medium py-3 w-full text-left flex justify-between items-center transition-colors duration-200">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-300 mobile-dropdown-icon" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-3 pb-2">
                        <a href="{{ route('warehousing-distribution') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            Warehouseing and Distribution
                        </a>
                        <a href="{{ route('general-cargo') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            General Cargo
                        </a>
                        <a href="{{ route('ships-agency-handling') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            Ships Agency Handling
                        </a>

                        <!-- Mobile Oil and Gas Sub-menu -->
                        <div class="mobile-sub-dropdown">
                            <button
                                class="mobile-sub-dropdown-btn text-neutdrk hover:text-accent text-sm py-2 w-full text-left flex justify-between items-center transition-colors duration-200">
                                Oil and Gas
                                <svg class="w-3 h-3 transition-transform duration-300 mobile-sub-dropdown-icon" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="mobile-sub-dropdown-content hidden pl-4 mt-2 space-y-3 pb-2">
                                <a href="{{ route('haulage-petroleum-products') }}"
                                    class="block text-neutdrk hover:text-accent text-xs py-2 transition-colors duration-200">
                                    Haulage of Petroleum Products
                                </a>
                                <a href="{{ route('protocol-logistics-services') }}"
                                    class="block text-neutdrk hover:text-accent text-xs py-2 transition-colors duration-200">
                                    Protocol & Logistics Services
                                </a>
                                <a href="{{ route('international-freights') }}"
                                    class="block text-neutdrk hover:text-accent text-xs py-2 transition-colors duration-200">
                                    International Freights (Groupage / Consolidation Services)
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('agro-logistics-solutions') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            Agro Logistics Solutions
                        </a>
                        <a href="{{ route('off-docks') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            Off-Docks
                        </a>
                        <a href="{{ route('apmdc-ships-to-shore') }}"
                            class="block text-neutdrk hover:text-accent text-sm py-2 transition-colors duration-200">
                            APMDC Ships to Shore
                        </a>
                    </div>
                </div>

                <a href="{{ route('e-services') }}"
                    class="text-neutdrk hover:text-accent font-medium py-3 border-b border-gray-100 transition-colors duration-200">
                    E-Services
                </a>

                <a href="{{ route('team') }}"
                    class="text-neutdrk hover:text-accent font-medium py-3 border-b border-gray-100 transition-colors duration-200">
                    Our Team
                </a>

                <a href="{{ route('contact.show') }}"
                    class="text-neutdrk hover:text-accent font-medium py-3 border-b border-gray-100 transition-colors duration-200">
                    Contact Us
                </a>

                <a href="{{ route('contact.show') }}" class="block mt-2">
                    <button
                        class="bg-[#EA222F] text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-md w-full text-center">
                        Get Quote
                    </button>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    // Simple and working Navigation functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger = document.getElementById('hamburger');
        let isMobileMenuOpen = false;

        // Mobile menu toggle
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMobileMenu();
            });
        }

        // Close mobile menu when clicking on links
        if (mobileMenu) {
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    closeMobileMenu();
                });
            });
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (isMobileMenuOpen &&
                !mobileMenu.contains(e.target) &&
                !mobileMenuButton.contains(e.target)) {
                closeMobileMenu();
            }
        });

        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isMobileMenuOpen) {
                closeMobileMenu();
            }
        });

        // Mobile dropdown functionality
        setupMobileDropdowns();

        function toggleMobileMenu() {
            if (isMobileMenuOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }

        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            // Animate hamburger to X
            hamburger.classList.add('transform');
            hamburger.style.transform = 'rotate(90deg)';
            mobileMenuButton.setAttribute('aria-expanded', 'true');
            isMobileMenuOpen = true;

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenu.classList.add('hidden');
            // Reset hamburger
            hamburger.classList.remove('transform');
            hamburger.style.transform = 'rotate(0deg)';
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            isMobileMenuOpen = false;

            // Close all mobile dropdowns
            closeAllMobileDropdowns();

            // Restore body scroll
            document.body.style.overflow = '';
        }

        function setupMobileDropdowns() {
            // Main dropdowns
            const dropdownButtons = document.querySelectorAll('.mobile-dropdown-btn');
            const subDropdownButtons = document.querySelectorAll('.mobile-sub-dropdown-btn');

            dropdownButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const dropdown = this.parentElement;
                    const content = dropdown.querySelector('.mobile-dropdown-content');
                    const icon = this.querySelector('.mobile-dropdown-icon');

                    // Toggle current dropdown
                    const isOpening = content.classList.contains('hidden');

                    // Close all dropdowns first
                    closeAllMobileDropdowns();

                    // Then open current one if it was closed
                    if (isOpening) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                        this.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            // Sub-dropdowns
            subDropdownButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const dropdown = this.parentElement;
                    const content = dropdown.querySelector('.mobile-sub-dropdown-content');
                    const icon = this.querySelector('.mobile-sub-dropdown-icon');

                    // Toggle current sub-dropdown
                    const isOpening = content.classList.contains('hidden');

                    // Close all sub-dropdowns at this level
                    const parentDropdown = dropdown.closest('.mobile-dropdown-content');
                    const allSubContents = parentDropdown.querySelectorAll('.mobile-sub-dropdown-content');
                    const allSubIcons = parentDropdown.querySelectorAll('.mobile-sub-dropdown-icon');

                    allSubContents.forEach(subContent => {
                        if (subContent !== content) {
                            subContent.classList.add('hidden');
                        }
                    });

                    allSubIcons.forEach(subIcon => {
                        if (subIcon !== icon) {
                            subIcon.style.transform = 'rotate(0deg)';
                        }
                    });

                    // Toggle current
                    if (isOpening) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });
        }

        function closeAllMobileDropdowns() {
            const dropdownContents = document.querySelectorAll('.mobile-dropdown-content, .mobile-sub-dropdown-content');
            const dropdownIcons = document.querySelectorAll('.mobile-dropdown-icon, .mobile-sub-dropdown-icon');
            const dropdownButtons = document.querySelectorAll('.mobile-dropdown-btn, .mobile-sub-dropdown-btn');

            dropdownContents.forEach(content => {
                content.classList.add('hidden');
            });

            dropdownIcons.forEach(icon => {
                icon.style.transform = 'rotate(0deg)';
            });

            dropdownButtons.forEach(button => {
                button.setAttribute('aria-expanded', 'false');
            });
        }
    });
</script>