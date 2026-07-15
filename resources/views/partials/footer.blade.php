<!-- Footer -->
<footer class="bg-[#1A1A1A] text-white pt-20 pb-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
            <!-- Company Info -->
            <div>
                <div class="flex items-center mb-6">
                    <img src="{{ asset('images/APMDC-Logo.png') }}" alt="APMDC Logo" class="w-12 h-auto mr-3">
                    <span class="text-xl font-bold">APMDC</span>
                </div>
                <p class="text-gray-400 mb-6">
                    Supporting Nigeria's offshore and maritime sectors with trusted logistics, compliance, and
                    operational excellence since 2005.
                </p>

                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/apmdcng" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300 p-2 rounded-full hover:bg-white/10"
                        aria-label="Facebook">
                        <i class="fab fa-facebook-f w-4 h-4"></i>
                    </a>
                    <a href="https://x.com/apmdcng" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300 p-2 rounded-full hover:bg-white/10"
                        aria-label="Twitter">
                        <i class="fab fa-twitter w-4 h-4"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/apmdcng" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300 p-2 rounded-full hover:bg-white/10"
                        aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in w-4 h-4"></i>
                    </a>
                    <a href="https://www.instagram.com/apmdcng" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300 p-2 rounded-full hover:bg-white/10"
                        aria-label="Instagram">
                        <i class="fab fa-instagram w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Services Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Services</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('warehousing-distribution') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Warehouseing and Distribution
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('general-cargo') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            General Cargo
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ships-agency-handling') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Ships Agency Handling
                        </a>
                    </li>
                    <li>
                        <a href="agro-logistics-solutions"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Agro Logistics Solutions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('off-docks') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Off-Docks
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('apmdc-ships-to-shore') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            APMDC Ships to Shore
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Company Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Company</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Our Team
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('refund-policy') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Refund Policy
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            News & Media
                        </a>
                    </li>
                    <li>
                        <a href="https://enterprise.apmdcng.net/" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                            <span
                                class="w-1 h-1 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            Eservices
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <i
                            class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3 group-hover:text-accent transition-colors duration-300"></i>
                        <span class="text-gray-400 group-hover:text-white transition-colors duration-300">
                            7B Oranyan Street, Apapa G.R.A,<br>Lagos 101254, Nigeria
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <i
                            class="fas fa-phone-alt text-gray-400 mt-1 mr-3 group-hover:text-accent transition-colors duration-300"></i>
                        <span class="text-gray-400 group-hover:text-white transition-colors duration-300">
                            +234-1-4541278
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <i
                            class="fas fa-envelope text-gray-400 mt-1 mr-3 group-hover:text-accent transition-colors duration-300"></i>
                        <span class="text-gray-400 group-hover:text-white transition-colors duration-300">
                            info@apmdcng.com
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <i
                            class="fas fa-clock text-gray-400 mt-1 mr-3 group-hover:text-accent transition-colors duration-300"></i>
                        <span class="text-gray-400 group-hover:text-white transition-colors duration-300">
                            Mon - Fri: 8:00 AM - 6:00 PM
                        </span>
                    </li>
                </ul>

                <!-- Newsletter Signup -->
                <div class="mt-6">
                    <h4 class="text-sm font-semibold mb-3 text-gray-300">NEWSLETTER</h4>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="bg-gray-800 text-white px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-accent w-full text-sm">
                        <button
                            class="bg-accent hover:bg-[#d11a26] text-white px-4 py-2 rounded-r-lg transition-colors duration-300 text-sm font-medium">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm mb-4 md:mb-0">
                © 2025 APMDC Logistics. All rights reserved.
            </p>
            <div class="flex space-x-6">
                <a href="{{ route('privacy-policy') }}"
                    class="text-gray-500 hover:text-white text-sm transition-colors duration-300 hover:underline">Privacy
                    Policy</a>
                <a href="{{ route('refund-policy') }}"
                    class="text-gray-500 hover:text-white text-sm transition-colors duration-300 hover:underline">Refund
                    Policy</a>
                <a href="{{ route('terms-of-service') }}"
                    class="text-gray-500 hover:text-white text-sm transition-colors duration-300 hover:underline">Terms
                    of Service</a>
                <a href="{{ route('faq') }}"
                    class="text-gray-500 hover:text-white text-sm transition-colors duration-300 hover:underline">FAQ</a>
                {{-- <a href="#"
                    class="text-gray-500 hover:text-white text-sm transition-colors duration-300 hover:underline">Cookie
                    Policy</a> --}}
            </div>
        </div>
    </div>
</footer>

<script>
    // Footer functionality
    class Footer {
        constructor() {
            this.newsletterForm = document.querySelector('footer form');
            this.init();
        }

        init() {
            this.bindEvents();
        }

        bindEvents() {
            // Newsletter form submission
            if (this.newsletterForm) {
                this.newsletterForm.addEventListener('submit', (e) => this.handleNewsletterSubmit(e));
            }

            // Smooth scroll to top when clicking footer logo
            const footerLogo = document.querySelector('footer .flex.items-center');
            if (footerLogo) {
                footerLogo.addEventListener('click', (e) => {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        }

        handleNewsletterSubmit(e) {
            e.preventDefault();
            const emailInput = this.newsletterForm.querySelector('input[type="email"]');
            const email = emailInput.value.trim();

            if (this.validateEmail(email)) {
                // Simulate form submission
                this.showNewsletterMessage('Thank you for subscribing!', 'success');
                emailInput.value = '';
            } else {
                this.showNewsletterMessage('Please enter a valid email address.', 'error');
            }
        }

        validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        showNewsletterMessage(message, type) {
            // Remove existing message if any
            const existingMessage = this.newsletterForm.querySelector('.newsletter-message');
            if (existingMessage) {
                existingMessage.remove();
            }

            // Create new message
            const messageDiv = document.createElement('div');
            messageDiv.className = `newsletter-message mt-2 text-sm p-2 rounded ${
            type === 'success' ? 'bg-green-500/20 text-green-300' : 'bg-red-500/20 text-red-300'
        }`;
            messageDiv.textContent = message;

            this.newsletterForm.appendChild(messageDiv);

            // Remove message after 5 seconds
            setTimeout(() => {
                if (messageDiv.parentNode) {
                    messageDiv.remove();
                }
            }, 5000);
        }
    }

    // Initialize footer when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        new Footer();
    });
</script>
