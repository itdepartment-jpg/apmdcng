<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - APMDC Nigeria</title>

    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .terms-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1566911187230-89d00d68d0c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .terms-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .terms-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .section-divider {
            border-bottom: 2px solid #EA222F;
            width: 80px;
            margin: 1rem 0;
        }

        .terms-section {
            scroll-margin-top: 100px;
        }

        .highlight-box {
            background: linear-gradient(135deg, #30379110 0%, #EA222F10 100%);
            border-left: 4px solid #EA222F;
        }

        .warning-box {
            background: #fef3e6;
            border-left: 4px solid #f59e0b;
            border-radius: 8px;
        }

        .legal-point {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 8px;
            border-left: 3px solid #EA222F;
        }

        .contact-info-box {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
            border-radius: 12px;
        }

        .clause-number {
            background: #EA222F;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 16px;
            flex-shrink: 0;
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
    <!-- Note: In a real implementation, you would include your navigation partial here -->
    @include('partials.nav')



    <!-- Hero Section -->
    <section class="relative terms-hero-bg text-white min-h-[50vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Terms of <span class="text-[#EA222F]">Service</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Legal terms governing the use of APMDC Nigeria's website and services
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#acceptance"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Quick Summary
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Contact Legal
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Summary Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="highlight-box p-8 rounded-xl mb-8" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Terms Overview</h2>
                    <p class="text-gray-600 mb-4">
                        These Terms of Service govern your access to and use of APMDC Nigeria's website, services,
                        platforms,
                        content, and any related digital or physical services.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class="text-center">
                            <div
                                class="bg-[#EA222F] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-user-check text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">Acceptance Required</h3>
                            <p class="text-gray-600 text-sm">By using our website, you agree to these terms</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-[#303791] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">Legal Protection</h3>
                            <p class="text-gray-600 text-sm">Intellectual property and liability terms</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-[#EA222F] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-gavel text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">Nigerian Law</h3>
                            <p class="text-gray-600 text-sm">Governed by Nigerian legal system</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Terms Content -->
    <section class="py-16 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">

                <!-- Introduction -->
                <div id="introduction" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">1</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Introduction</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>
                            Welcome to APMDC Nigeria ("APMDC", "we", "our", or "us"). These Terms of Service ("Terms")
                            govern your access to and use of our website, services, platforms, content, and any related
                            digital or physical services provided by APMDC Nigeria.
                        </p>
                        <div class="warning-box p-4">
                            <p class="font-medium">
                                By accessing or using our website (APMDCng.com) or any APMDC services, you agree to be
                                bound by these Terms.
                                If you do not agree, please do not use our website.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- About APMDC Nigeria -->
                <div id="about" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">2</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">About APMDC Nigeria</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>
                            APMDC Group was set up in 2004 and had been trading since 2005. We joined the Global
                            partnership
                            alliances, and African logistics networks in 2006. We commenced NVOCC representation and LCL
                            (Groupage Cargo) deconsolidation operations in 2008.
                        </p>
                        <p>
                            APMDC is a fully licensed, well-structured shipping agency, and logistics services company,
                            the company offers the complete range of services in the maritime, shipping, logistics and
                            oil and gas sectors APMDC being a corporate member of the chartered institute of logistics
                            and transport (cilt), is an iso accredited, experienced and professional company offering
                            services to the following industries:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div class="legal-point">
                                <i class="fas fa-ship text-[#EA222F] mr-2"></i>
                                International commercial cargo carriers/liners
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-anchor text-[#EA222F] mr-2"></i>
                                Charterers and owners handling agencies
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-boxes text-[#EA222F] mr-2"></i>
                                Commercial cargo importers and exporters
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-plane text-[#EA222F] mr-2"></i>
                                Foreign and local airlines and charterers
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-tower-cell text-[#EA222F] mr-2"></i>
                                Telecommunication operators
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-oil-well text-[#EA222F] mr-2"></i>
                                Oil and gas service companies
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-mountain text-[#EA222F] mr-2"></i>
                                Mining sector
                            </div>
                            <div class="legal-point">
                                <i class="fas fa-pallet text-[#EA222F] mr-2"></i>
                                LCL Companies - deconsolidation agents
                            </div>
                            <div class="legal-point md:col-span-2">
                                <i class="fas fa-tractor text-[#EA222F] mr-2"></i>
                                Agro logistics solutions
                            </div>
                        </div>
                        <p class="mt-4">
                            As a group, we are business enablers, well posited and acting as 3PIs and 4PIs to support,
                            drive and facilitate efficient and professional services as well as entrance into the
                            Nigerian
                            market by the big multinational transport and logistics companies, to fulfill projects
                            delivery
                            obligations to their clients in Nigeria. We help the global partners to proffer the most
                            innovative
                            solutions through partnership and risk sharing.
                        </p>
                        <div class="bg-blue-50 p-4 rounded-lg mt-4">
                            <p class="font-medium text-gray-700">
                                These Terms apply to all users, visitors, clients, and organizations interacting with
                                our website or digital services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Acceptance of Terms -->
                <div id="acceptance" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">3</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Acceptance of Terms</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">By using our website, you confirm that:</p>
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>You are at least 18 years old.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>You have the legal capacity to enter into a binding agreement.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span>You will comply with these Terms and all applicable laws and regulations.</span>
                            </div>
                        </div>
                        <div class="warning-box p-4">
                            <p class="font-medium">
                                If you are using the website on behalf of a company or organization, you confirm that
                                you are authorized to do so and that the organization accepts these Terms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Website Use and Restrictions -->
                <div id="restrictions" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">4</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Website Use and Restrictions</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4 font-medium">You agree not to:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Use the site for unlawful or fraudulent activities</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Attempt to breach the website's security</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Scrape or copy website content without permission</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Upload malicious code or harmful material</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Misrepresent your identity or affiliation with APMDC</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Interfere with the website's performance or operations</span>
                            </div>
                        </div>
                        <div class="bg-red-50 border-l-4 border-red-400 p-4">
                            <p class="font-medium">
                                APMDC reserves the right to suspend access to any user who violates these Terms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accounts and Client Portals -->
                <div id="accounts" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">5</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Accounts and Client Portals</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>If the website provides user accounts or client portals:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span>You must provide accurate and complete information.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span>You are responsible for keeping your login information confidential.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span>You must notify APMDC immediately of unauthorized use of your account.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span>APMDC may suspend or terminate accounts that violate these Terms.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Requests, Bookings & Transactions -->
                <div id="services" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">6</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Service Requests, Bookings & Transactions</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>Where applicable:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 mr-3"></i>
                                <span>Service requests submitted through the website do not constitute a binding
                                    contract until confirmed by APMDC.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 mr-3"></i>
                                <span>APMDC may request supporting documentation before accepting a request.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 mr-3"></i>
                                <span>Pricing, rates, and service availability may vary depending on operational
                                    conditions.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 mr-3"></i>
                                <span>All transactions are subject to APMDC's internal terms, operational policies,
                                    NDPC/NDPR requirements, and contractual agreements.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Terms -->
                <div id="payments" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">7</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Payment Terms</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>If payments are collected via the website:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-blue-500 mt-1 mr-3"></i>
                                <span>Accepted payment methods will be stated on the site.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-blue-500 mt-1 mr-3"></i>
                                <span>All fees must be paid in full, unless otherwise agreed in writing.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-blue-500 mt-1 mr-3"></i>
                                <span>Payment disputes must be raised within 7 business days.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-blue-500 mt-1 mr-3"></i>
                                <span>APMDC may suspend services for unpaid or overdue invoices.</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-blue-500 mt-1 mr-3"></i>
                                <span>Refunds (where applicable) follow APMDC's refund policy.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Collection, Privacy & Compliance -->
                <div id="privacy" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">8</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Data Collection, Privacy & Compliance</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>APMDC may collect personal or business data through:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-[#EA222F] mr-2"></i>
                                Contact forms
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clipboard-list text-[#EA222F] mr-2"></i>
                                Service request forms
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-user-plus text-[#EA222F] mr-2"></i>
                                Client registration portals
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope-open text-[#EA222F] mr-2"></i>
                                Email communication
                            </div>
                            <div class="flex items-center md:col-span-2">
                                <i class="fas fa-chart-bar text-[#EA222F] mr-2"></i>
                                Analytics tools
                            </div>
                        </div>
                        <p>All data is handled in accordance with:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">Nigeria Data Protection Regulation (NDPR)</h4>
                                <p class="text-sm text-gray-600">Compliance with national data protection standards</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-bold text-gray-800 mb-2">APMDC's Privacy Policy</h4>
                                <p class="text-sm text-gray-600">Our comprehensive privacy and data handling practices
                                </p>
                            </div>
                        </div>
                        <div class="warning-box p-4 mt-4">
                            <p class="font-medium">
                                By using the website, you consent to the collection and use of data as described in our
                                Privacy Policy.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Intellectual Property Rights -->
                <div id="ip" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">9</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Intellectual Property Rights</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">All website content, including:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="flex items-center">
                                <i class="fas fa-file-alt text-[#EA222F] mr-2"></i>
                                Text, images, videos
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-trademark text-[#EA222F] mr-2"></i>
                                Branding & logos
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-list-alt text-[#EA222F] mr-2"></i>
                                Service descriptions
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-paint-brush text-[#EA222F] mr-2"></i>
                                Graphics & user interface
                            </div>
                            <div class="flex items-center md:col-span-2">
                                <i class="fas fa-code text-[#EA222F] mr-2"></i>
                                Software & website design
                            </div>
                        </div>
                        <div class="bg-red-50 border-l-4 border-red-400 p-4">
                            <p class="font-medium">
                                …are the exclusive property of APMDC Nigeria. Users may not copy, reproduce, distribute,
                                sell, or modify any content without written permission from APMDC.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Third-Party Links and Services -->
                <div id="third-party" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">10</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Third-Party Links and Services</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>Our website may contain links to third-party sites or services. APMDC:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-external-link-alt text-orange-500 mt-1 mr-3"></i>
                                <span>Does not control these third-party sites</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-external-link-alt text-orange-500 mt-1 mr-3"></i>
                                <span>Is not responsible for their content, accuracy, or practices</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-external-link-alt text-orange-500 mt-1 mr-3"></i>
                                <span>Does not endorse any third-party offerings</span>
                            </div>
                        </div>
                        <div class="warning-box p-4">
                            <p class="font-medium">
                                Users interact with such third-party links at their own risk.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Limitation of Liability -->
                <div id="liability" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">11</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Limitation of Liability</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">To the maximum extent permitted by law:</p>
                        <p class="font-medium mb-4">APMDC is not liable for:</p>
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                <span>Losses resulting from website downtime or technical errors</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                <span>Decisions made based on website content</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                <span>Delays in service due to factors outside our control (weather, port regulations,
                                    maritime conditions, etc.)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                <span>Third-party actions or errors</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                <span>Data breaches caused by external cyberattacks despite reasonable security
                                    measures</span>
                            </div>
                        </div>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                            <p class="font-medium">
                                Your sole remedy for dissatisfaction with the website is to stop using it.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Indemnification -->
                <div id="indemnification" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">12</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Indemnification</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>You agree to indemnify and hold APMDC harmless from any claims, damages, liabilities, costs,
                            or expenses arising from your:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-gavel text-purple-500 mt-1 mr-3"></i>
                                <span>Misuse of the website</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-gavel text-purple-500 mt-1 mr-3"></i>
                                <span>Violation of these Terms</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-gavel text-purple-500 mt-1 mr-3"></i>
                                <span>Violation of any law or regulations</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-gavel text-purple-500 mt-1 mr-3"></i>
                                <span>Infringement of intellectual property or rights of others</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Termination of Access -->
                <div id="termination" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">13</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Termination of Access</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>APMDC may, at its discretion, suspend or terminate your access to the website or services if:
                        </p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>You violate these Terms</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>You misuse website resources</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>You attempt to compromise website security</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-ban text-red-500 mt-1 mr-3"></i>
                                <span>Required by law or regulatory bodies</span>
                            </div>
                        </div>
                        <div class="bg-red-50 border-l-4 border-red-400 p-4">
                            <p class="font-medium">
                                Termination does not limit APMDC's rights to pursue legal remedies.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Changes to These Terms -->
                <div id="changes" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">14</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Changes to These Terms</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>APMDC may update or modify these Terms at any time. When changes are made:</p>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-start">
                                <i class="fas fa-calendar-alt text-blue-500 mt-1 mr-3"></i>
                                <span>The "Last Updated" date will be revised</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-user-check text-green-500 mt-1 mr-3"></i>
                                <span>Continued use of the website signifies acceptance of the new Terms</span>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="font-medium">
                                Users are encouraged to review these Terms periodically.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Governing Law -->
                <div id="governing" class="terms-section terms-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="clause-number">15</div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Governing Law</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>These Terms are governed by the laws of the Federal Republic of Nigeria.</p>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="font-medium text-center">
                                Any disputes shall be resolved in Nigerian courts with appropriate jurisdiction.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div id="contact" class="terms-section contact-info-box p-8 rounded-xl shadow-lg"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-white text-[#EA222F] p-3 rounded-full mr-4">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">16. Contact Information</h2>
                            <div class="section-divider border-white"></div>
                        </div>
                    </div>
                    <div class="text-white/90 space-y-4">
                        <p class="font-medium">For questions or concerns regarding these Terms, contact:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="font-bold text-lg mb-3">APMDC Nigeria</h3>
                                <p class="flex items-start mb-2">
                                    <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                                    <span>7B Oranyan Road, Off Oduduwa Street,<br>Apapa G.R.A, Lagos, Nigeria</span>
                                </p>
                                <p class="flex items-center mb-2">
                                    <i class="fas fa-phone mr-3"></i>
                                    <span>+234-1-4541278 / +234-1-3425846</span>
                                </p>
                                <p class="flex items-center mb-2">
                                    <i class="fas fa-envelope mr-3"></i>
                                    <span>info@apmdcng.com</span>
                                </p>
                                <p class="flex items-center">
                                    <i class="fas fa-globe mr-3"></i>
                                    <span>APMDCng.com</span>
                                </p>
                            </div>
                            <div class="bg-white/10 p-4 rounded-lg">
                                <h3 class="font-bold text-lg mb-3">Legal Notice</h3>
                                <p class="mb-3">For formal legal communications:</p>
                                <div class="bg-white/20 p-3 rounded text-center">
                                    <p class="font-bold">legal@apmdcng.com</p>
                                </div>
                                <p class="text-sm mt-3">Please allow 3-5 business days for response to legal inquiries
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Last Updated -->
                <div class="text-center mt-12 text-gray-500 text-sm">
                    <p><i class="fas fa-history mr-2"></i> Last Updated: November 2023</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Note: In a real implementation, you would include your footer partial here -->
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
