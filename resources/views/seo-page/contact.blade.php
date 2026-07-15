<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | APMDC Shipping</title>

    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .contact-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .office-card {
            border-left: 4px solid #EA222F;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .contact-icon {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .form-input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 16px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-input:focus {
            border-color: #EA222F;
            box-shadow: 0 0 0 3px rgba(234, 34, 47, 0.1);
            outline: none;
        }

        .submit-btn {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(234, 34, 47, 0.2);
        }

        .map-iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 8px;
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
    <!-- Navigation -->
    <nav class="bg-white shadow-md py-4 fixed w-full z-40">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#303791] to-[#EA222F] rounded-lg flex items-center justify-center text-white font-bold mr-3">
                    A
                </div>
                <span class="text-xl font-bold text-gray-800">APMDC</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-[#EA222F] transition-colors">Home</a>
                <a href="#" class="text-gray-600 hover:text-[#EA222F] transition-colors">Services</a>
                <a href="#" class="text-gray-600 hover:text-[#EA222F] transition-colors">About</a>
                <a href="#" class="text-[#EA222F] font-medium">Contact</a>
                <a href="#" class="text-gray-600 hover:text-[#EA222F] transition-colors">Careers</a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative contact-hero-bg text-white min-h-[60vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Contact <span class="text-[#EA222F]">Us</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Get in touch with APMDC - Nigeria's premier logistics and shipping company
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">OUR LOCATIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Offices Across Nigeria
                </h2>
                <p class="text-gray-600">
                    We have multiple offices strategically located across Nigeria to serve your logistics needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Lagos Office -->
                <div class="contact-card office-card bg-white p-6 rounded-xl shadow-md" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Lagos (Head Office)</h3>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            7B Oranyan Street<br>
                            Off Oduduwa Road<br>
                            Apapa G.R.A<br>
                            Lagos<br>
                            Nigeria
                        </p>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2 text-[#EA222F]"></i>
                            <span>+234-1-4541278</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-mobile-alt mr-2 text-[#EA222F]"></i>
                            <span>+234-908-7995953</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope mr-2 text-[#EA222F]"></i>
                            <span>info@apmdcng.com</span>
                        </div>
                    </div>
                </div>

                <!-- Port Harcourt Office -->
                <div class="contact-card office-card bg-white p-6 rounded-xl shadow-md" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Port Harcourt</h3>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            6B Ndahbros Street<br>
                            Trans Amadi Industrial Layout<br>
                            Port Harcourt<br>
                            Rivers State<br>
                            Nigeria
                        </p>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2 text-[#EA222F]"></i>
                            <span>+234-84-77396</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope mr-2 text-[#EA222F]"></i>
                            <span>info@apmdcng.com</span>
                        </div>
                    </div>
                </div>

                <!-- Calabar Office -->
                <div class="contact-card office-card bg-white p-6 rounded-xl shadow-md" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Calabar</h3>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            Administrative Building<br>
                            Calabar Port Complex<br>
                            Calabar<br>
                            Cross River State<br>
                            Nigeria
                        </p>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope mr-2 text-[#EA222F]"></i>
                            <span>info@apmdcng.com</span>
                        </div>
                    </div>
                </div>

                <!-- Warri Office -->
                <div class="contact-card office-card bg-white p-6 rounded-xl shadow-md" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Warri</h3>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            Warri Administrative Building<br>
                            Port Port Complex<br>
                            Warri<br>
                            Nigeria
                        </p>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope mr-2 text-[#EA222F]"></i>
                            <span>info@apmdcng.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Contact Form Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Map Section -->
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Find Us</h2>
                        <p class="text-gray-600 mb-6">
                            Visit our head office in Lagos or any of our regional offices across Nigeria.
                            Our team is ready to assist with all your logistics and shipping needs.
                        </p>
                    </div>

                    <div class="map-container bg-white p-6 rounded-xl">
                        <div class="flex items-center mb-6">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">APMDC Head Office</h3>
                                <p class="text-gray-600">7B Oranyan Street, Apapa G.R.A</p>
                            </div>
                        </div>

                        <!-- Embedded Google Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3964.5986273997446!2d3.3529675749922556!3d6.445550243545771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s7B%20Oranyan%20Street%2C%20Apapa%20G.R.A!5e0!3m2!1sen!2sng!4v1761684390271!5m2!1sen!2sng"
                            class="map-iframe" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                        <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Head Office Address:</h4>
                            <p class="text-gray-600">
                                7B Oranyan Street<br>
                                Apapa G.R.A<br>
                                Off Oduduwa Street<br>
                                Lagos 101254<br>
                                Nigeria<br>
                                <span class="font-medium mt-2 block">+234-1-4541278</span>
                                <span class="text-[#EA222F]">info@apmdcng.com</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Send Us a Message</h2>
                        <p class="text-gray-600 mb-8">
                            Have questions about our services? Need a quote? Get in touch with our team.
                        </p>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first-name" class="block text-gray-700 font-medium mb-2">First
                                        Name</label>
                                    <input type="text" id="first-name" name="first_name"
                                        value="{{ old('first_name') }}"
                                        class="form-input @error('first_name') border-red-500 @enderror"
                                        placeholder="Your first name">
                                    @error('first_name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="last-name" class="block text-gray-700 font-medium mb-2">Last
                                        Name</label>
                                    <input type="text" id="last-name" name="last_name"
                                        value="{{ old('last_name') }}"
                                        class="form-input @error('last_name') border-red-500 @enderror"
                                        placeholder="Your last name">
                                    @error('last_name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email
                                    Address</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="form-input @error('email') border-red-500 @enderror"
                                    placeholder="your.email@example.com">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="form-input @error('phone') border-red-500 @enderror"
                                    placeholder="+234 XXX XXX XXXX">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                @php
                                    $selectedSubject = old('subject', request('subject'));
                                @endphp
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <select id="subject" name="subject"
                                    class="form-input @error('subject') border-red-500 @enderror">
                                    <option value="" disabled {{ $selectedSubject ? '' : 'selected' }}>Select a
                                        subject</option>
                                    <option value="general" {{ $selectedSubject == 'general' ? 'selected' : '' }}>
                                        General Inquiry</option>
                                    <option value="quote" {{ $selectedSubject == 'quote' ? 'selected' : '' }}>Request a
                                        Quote</option>
                                    <option value="service" {{ $selectedSubject == 'service' ? 'selected' : '' }}>
                                        Service Information</option>
                                    <option value="complaint" {{ $selectedSubject == 'complaint' ? 'selected' : '' }}>
                                        Complaint</option>
                                    <option value="other" {{ $selectedSubject == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('subject')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" class="form-input @error('message') border-red-500 @enderror"
                                    placeholder="How can we help you?">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="submit-btn w-full">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Section -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Need Immediate Assistance?</h2>
                <p class="text-xl text-white/90 mb-8">
                    Contact our customer service team directly for urgent inquiries.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="tel:+2349087995953"
                        class="bg-white text-[#EA222F] font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i> Call: +234-908-7995953
                    </a>
                    <a href="mailto:info@apmdcng.com"
                        class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm inline-flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i> Email: info@apmdcng.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">HELP & SUPPORT</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600">
                    Find quick answers to common questions about our services.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ 1 -->
                    <div class="bg-gray-50 p-6 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle text-[#EA222F] mr-3"></i>
                            What services does APMDC provide?
                        </h3>
                        <p class="text-gray-600">
                            APMDC offers comprehensive logistics and shipping services including rail freight, port
                            operations,
                            container transportation, and supply chain solutions across Nigeria.
                        </p>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-gray-50 p-6 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle text-[#EA222F] mr-3"></i>
                            Can I get updates on my shipment or vessel?
                        </h3>
                        <p class="text-gray-600">
                            Yes. Clients can contact our operations team for shipment, vessel, or logistics updates
                            using their reference details.
                        </p>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-gray-50 p-6 rounded-xl" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle text-[#EA222F] mr-3"></i>
                            What are your business hours?
                        </h3>
                        <p class="text-gray-600">
                            Our offices are open Monday to Friday from 8:00 AM to 5:00 PM, and Saturdays from 9:00 AM to
                            1:00 PM.
                            Our operations team works 24/7 to ensure continuous service.
                        </p>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-gray-50 p-6 rounded-xl" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle text-[#EA222F] mr-3"></i>
                            Do you offer international shipping services?
                        </h3>
                        <p class="text-gray-600">
                            Yes, we partner with international logistics providers to offer seamless global shipping
                            solutions.
                            Contact our team for specific international shipping inquiries.
                        </p>
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

        // Form submission
        // document.querySelector('form').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     alert('Thank you for your message! We will get back to you soon.');
        //     this.reset();
        // });
    </script>
</body>

</html>
