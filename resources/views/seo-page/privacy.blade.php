<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - APMDC Shipping</title>

    <!-- CSS Assets -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(234, 34, 47, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .service-item:hover::before {
            left: 100%;
        }

        .floating-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .floating-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .accent-border {
            border-left: 4px solid #EA222F;
        }

        .gradient-text {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-pattern {
            background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
            background-size: 20px 20px;
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
    <section class="relative hero-bg text-white min-h-[60vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Privacy <span class="text-[#EA222F]">Policy</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Protecting Your Data in Compliance with Nigeria Data Protection Act 2023
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#policy-content"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Read Policy
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Contact DPO
                    </a>
                </div>
            </div>
        </div>

        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#policy-content" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Policy Content -->
    <section id="policy-content" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <!-- Last Updated & Quick Navigation -->
            <div class="max-w-4xl mx-auto mb-12" data-aos="fade-up">
                <div class="bg-gradient-to-r from-[#303791]/5 to-[#EA222F]/5 p-6 rounded-2xl border border-gray-100">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Last updated: {{ date('F j, Y') }}</p>
                            <h2 class="text-2xl font-bold text-gray-800 mt-1">APMDC Privacy Commitment</h2>
                        </div>
                        <a href="#contact"
                            class="bg-[#EA222F] text-white px-6 py-3 rounded-lg hover:bg-[#d11a26] transition-colors text-sm font-medium">
                            Contact Data Protection Officer
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Quick Navigation -->
                <div class="mb-12" data-aos="fade-up">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Navigation</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="#introduction"
                            class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg transition-colors text-center">
                            <i class="fas fa-info-circle text-[#EA222F] mb-2"></i>
                            <p class="text-sm font-medium text-gray-800">Introduction</p>
                        </a>
                        <a href="#data-collection"
                            class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg transition-colors text-center">
                            <i class="fas fa-database text-[#303791] mb-2"></i>
                            <p class="text-sm font-medium text-gray-800">Data We Collect</p>
                        </a>
                        <a href="#your-rights"
                            class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg transition-colors text-center">
                            <i class="fas fa-shield-alt text-[#EA222F] mb-2"></i>
                            <p class="text-sm font-medium text-gray-800">Your Rights</p>
                        </a>
                        <a href="#contact"
                            class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg transition-colors text-center">
                            <i class="fas fa-envelope text-[#303791] mb-2"></i>
                            <p class="text-sm font-medium text-gray-800">Contact Us</p>
                        </a>
                    </div>
                </div>

                <!-- Policy Sections -->
                <div class="space-y-12">
                    <!-- 1. Introduction -->
                    <section id="introduction" class="scroll-mt-24" data-aos="fade-up">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#EA222F] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">1</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Introduction</h2>
                                <div class="prose prose-lg max-w-none text-gray-600">
                                    <p>
                                        <strong>Associated Port and Marine Development Company (APMDC)</strong> ("we,"
                                        "us," or "our") is committed to protecting your personal data and your right to
                                        privacy. This Privacy Policy explains how we collect, use, and process your
                                        personal data in compliance with the Nigeria Data Protection Act (NDPA) 2023.
                                    </p>
                                    <p class="mt-4">
                                        This policy applies to all visitors, customers, and partners who interact with
                                        us through our website at apmdcng.com and our premium shipping agency and
                                        logistics services.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 2. Data We Collect -->
                    <section id="data-collection" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#303791] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">2</span>
                            </div>
                            <div class="w-full">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">The Data We Collect</h2>
                                <p class="text-gray-600 mb-6">
                                    We collect personal data to provide our premium shipping agency and logistics
                                    services. The types of personal data we may collect include:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Identification & Contact</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            Name, company name, email address, phone number, and physical address.
                                        </p>
                                    </div>

                                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-ship"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Service Information</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            Cargo type, vessel details, project requirements, and logistics needs.
                                        </p>
                                    </div>

                                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-credit-card"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Financial Data</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            Information related to payments for our maritime and logistics services.
                                        </p>
                                    </div>

                                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-laptop"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Technical Data</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            IP address, browser type, and website usage data through cookies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 3. How We Use Your Data -->
                    <section id="data-usage" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#EA222F] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">3</span>
                            </div>
                            <div class="w-full">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">How and Why We Use Your Personal Data
                                </h2>

                                <div class="space-y-6">
                                    <div
                                        class="bg-white p-5 rounded-xl border border-gray-200 hover:border-[#EA222F] transition-colors">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-3">
                                            <h3 class="font-semibold text-gray-800 text-lg">Service Delivery</h3>
                                            <span
                                                class="bg-[#EA222F]/10 text-[#EA222F] px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">
                                                Performance of Contract
                                            </span>
                                        </div>
                                        <p class="text-gray-600">
                                            To provide and manage maritime and logistics services including vessel
                                            clearance, crew logistics, and warehousing.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-white p-5 rounded-xl border border-gray-200 hover:border-[#303791] transition-colors">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-3">
                                            <h3 class="font-semibold text-gray-800 text-lg">Regulatory Compliance</h3>
                                            <span
                                                class="bg-[#303791]/10 text-[#303791] px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">
                                                Legal Obligation
                                            </span>
                                        </div>
                                        <p class="text-gray-600">
                                            To fulfill legal requirements for customs documentation, immigration
                                            procedures, and maritime regulations.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-white p-5 rounded-xl border border-gray-200 hover:border-[#EA222F] transition-colors">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-3">
                                            <h3 class="font-semibold text-gray-800 text-lg">Business Operations</h3>
                                            <span
                                                class="bg-[#EA222F]/10 text-[#EA222F] px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">
                                                Legitimate Interests
                                            </span>
                                        </div>
                                        <p class="text-gray-600">
                                            To manage customer relationships, improve services, and develop our business
                                            operations.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-white p-5 rounded-xl border border-gray-200 hover:border-[#303791] transition-colors">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-3">
                                            <h3 class="font-semibold text-gray-800 text-lg">Marketing Communications
                                            </h3>
                                            <span
                                                class="bg-[#303791]/10 text-[#303791] px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">
                                                Consent
                                            </span>
                                        </div>
                                        <p class="text-gray-600">
                                            To send information about our services, industry news, and promotions with
                                            your explicit consent.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 4. Your Rights -->
                    <section id="your-rights" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#303791] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">4</span>
                            </div>
                            <div class="w-full">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Your Rights as a Data Subject</h2>
                                <p class="text-gray-600 mb-6">
                                    Under the Nigeria Data Protection Act (NDPA) 2023, you have the following rights
                                    regarding your personal data:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-info-circle"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right to be Informed</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You have the right to be informed about the collection and use of your
                                            personal data.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right of Access</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You can request a copy of the personal data we hold about you.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-edit"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right to Rectification</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You can ask us to correct inaccurate or incomplete personal data.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-ban"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right to Object</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You can object to the processing of your personal data, including for direct
                                            marketing.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#EA222F] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-exchange-alt"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right to Data Portability</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You can request that your personal data be transferred to you or another
                                            organization.
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-br from-[#303791]/5 to-white p-5 rounded-xl border border-gray-200">
                                        <div class="flex items-center mb-3">
                                            <div class="bg-[#303791] text-white p-2 rounded-lg mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                            <h3 class="font-semibold text-gray-800">Right to Erasure</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm">
                                            You can ask for your personal data to be deleted in certain circumstances.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 5. Data Sharing -->
                    <section id="data-sharing" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="400">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#EA222F] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">5</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Disclosure of Your Personal Data</h2>
                                <div class="prose prose-lg max-w-none text-gray-600">
                                    <p class="mb-4">
                                        We may disclose your personal data to the following third parties to facilitate
                                        our maritime and logistics services:
                                    </p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li><strong>Service providers and partners:</strong> Port authorities, customs
                                            agents, and logistics partners</li>
                                        <li><strong>Regulators and law enforcement:</strong> Nigeria Customs Service,
                                            Nigerian Ports Authority, and other regulatory bodies</li>
                                        <li><strong>Business entities:</strong> In the event of a merger, acquisition,
                                            or sale of assets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 6. Data Security -->
                    <section id="data-security" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="500">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#303791] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">6</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Data Security and Retention</h2>
                                <div class="prose prose-lg max-w-none text-gray-600">
                                    <p class="mb-4">
                                        We have implemented appropriate technical and organizational measures to protect
                                        your personal data from unauthorized access, loss, or misuse. Our security
                                        protocols are designed to meet the requirements of the Nigeria Data Protection
                                        Act 2023.
                                    </p>
                                    <p>
                                        We retain your personal data only for as long as necessary to fulfill the
                                        purposes outlined in this policy and to comply with our legal obligations in the
                                        maritime industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 7. Contact Information -->
                    <section id="contact" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#EA222F] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">7</span>
                            </div>
                            <div class="w-full">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Information and Complaints
                                </h2>

                                <div
                                    class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl border border-gray-200">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Protection
                                                Officer</h3>
                                            <div class="space-y-3">
                                                <div class="flex items-start">
                                                    <i class="fas fa-envelope text-[#EA222F] mt-1 mr-3"></i>
                                                    <div>
                                                        <p class="font-medium text-gray-700">Email</p>
                                                        <a href="mailto:info@apmdcng.com"
                                                            class="text-gray-600 hover:text-[#EA222F] transition-colors">
                                                            info@apmdcng.com
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <i class="fas fa-map-marker-alt text-[#EA222F] mt-1 mr-3"></i>
                                                    <div>
                                                        <p class="font-medium text-gray-700">Address</p>
                                                        <p class="text-gray-600">
                                                            7B Oranyan Street, Apapa G.R.A,<br>
                                                            Lagos 101254, Nigeria
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Your Rights &
                                                Complaints</h3>
                                            <p class="text-gray-600 mb-4">
                                                If you wish to exercise any of your data protection rights or have
                                                concerns about how we handle your data, please contact our Data
                                                Protection Officer.
                                            </p>
                                            <p class="text-gray-600">
                                                You also have the right to lodge a complaint with the <strong>Nigeria
                                                    Data Protection Commission (NDPC)</strong>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 8. Policy Updates -->
                    <section id="policy-updates" class="scroll-mt-24" data-aos="fade-up" data-aos-delay="700">
                        <div class="flex items-start mb-6">
                            <div class="bg-[#303791] text-white p-3 rounded-lg mr-4">
                                <span class="text-xl font-bold">8</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Updates to This Policy</h2>
                                <div class="prose prose-lg max-w-none text-gray-600">
                                    <p>
                                        We may update this Privacy Policy from time to time to reflect changes in our
                                        practices, services, or legal requirements. We will post any changes on this
                                        page and, where appropriate, notify you directly. We encourage you to review
                                        this policy periodically to stay informed about how we are protecting your
                                        information.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
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
