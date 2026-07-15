<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy - APMDC Nigeria</title>

    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .policy-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1566911187230-89d00d68d0c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .policy-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .policy-card:hover {
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

        .policy-section {
            scroll-margin-top: 100px;
        }

        .highlight-box {
            background: linear-gradient(135deg, #30379110 0%, #EA222F10 100%);
            border-left: 4px solid #EA222F;
        }

        .non-refundable-item {
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
    <!-- @include('partials.nav') -->


    <!-- Hero Section -->
    <section class="relative policy-hero-bg text-white min-h-[50vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Refund <span class="text-[#EA222F]">Policy</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Clear guidelines for refunds and cancellations of APMDC services
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#contact"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Contact Billing Department
                    </a>
                    <a href="#eligibility"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Check Eligibility
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
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Policy Overview</h2>
                    <p class="text-gray-600 mb-4">
                        This Refund Policy explains the conditions under which APMDC Nigeria provides refunds for
                        payments
                        made through our website, client portal, or any APMDC-related service platform.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class="text-center">
                            <div
                                class="bg-[#EA222F] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-calendar-day text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">7 Days</h3>
                            <p class="text-gray-600 text-sm">Refund Request Window</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-[#303791] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">5-10 Days</h3>
                            <p class="text-gray-600 text-sm">Review Period</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="bg-[#EA222F] text-white p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-file-invoice text-xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-800">Email Required</h3>
                            <p class="text-gray-600 text-sm">For All Requests</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Policy Content -->
    <section class="py-16 bg-[#FAFAFA]">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">

                <!-- Introduction -->
                <div id="introduction" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">1. Introduction</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>
                            This Refund Policy explains the conditions under which APMDC Nigeria ("APMDC", "we", "our",
                            or "us")
                            provides refunds for payments made through our website, client portal, or any APMDC-related
                            service platform.
                        </p>
                        <p>
                            This policy applies to all clients, corporate organizations, partners, and users who engage
                            our services.
                        </p>
                        <p>
                            APMDC offers specialized maritime, logistics, shipping agency, port operations, offshore
                            support,
                            and related professional services. Due to the nature of our operations, refunds are subject
                            to strict guidelines.
                        </p>
                    </div>
                </div>

                <!-- Non-Refundable Services -->
                <div id="non-refundable" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-ban"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">2. Non-Refundable Services</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">
                            Certain payments are non-refundable due to operational commitments, third-party charges,
                            and regulatory dependencies. These include (but are not limited to):
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="non-refundable-item">
                                <i class="fas fa-file-invoice-dollar text-[#EA222F] mr-2"></i>
                                Administrative or processing fees
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-play-circle text-[#EA222F] mr-2"></i>
                                Service initiation fees
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-search text-[#EA222F] mr-2"></i>
                                Inspection or assessment charges
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-file-contract text-[#EA222F] mr-2"></i>
                                Documentation and compliance processing
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-anchor text-[#EA222F] mr-2"></i>
                                Port charges, terminal fees, or government levies
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-truck text-[#EA222F] mr-2"></i>
                                Third-party logistics expenses already incurred
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-ship text-[#EA222F] mr-2"></i>
                                Vessel husbandry or marine support mobilization costs
                            </div>
                            <div class="non-refundable-item">
                                <i class="fas fa-cogs text-[#EA222F] mr-2"></i>
                                Any service that has already started or been partially delivered
                            </div>
                        </div>
                        <p class="font-medium text-gray-700">
                            Once APMDC has commenced service delivery, payments become non-refundable.
                        </p>
                    </div>
                </div>

                <!-- Refund Eligibility -->
                <div id="eligibility" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">3. Refund Eligibility</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4 font-medium">You may be eligible for a refund only if:</p>
                        <ul class="list-disc pl-5 mb-6 space-y-2">
                            <li>A payment was made in error</li>
                            <li>A duplicate payment was processed</li>
                            <li>A service could not be initiated due to APMDC's operational constraints</li>
                            <li>APMDC is unable to deliver the agreed service and no alternative has been provided</li>
                            <li>An overcharge or incorrect billing occurred</li>
                        </ul>
                        <p class="mb-4">
                            Refund requests must be submitted within <span class="font-bold">7 business days</span> of
                            the transaction.
                        </p>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                            <p class="font-medium text-gray-700">Refunds will not be issued if delays or failures
                                result from:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Government regulations or port authority actions</li>
                                <li>Weather or maritime restrictions</li>
                                <li>Vessel operator or client-side delays</li>
                                <li>Incomplete documentation from the client</li>
                                <li>Force Majeure events (e.g., strikes, natural disasters, unrest)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- How to Request a Refund -->
                <div id="request" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">4. How to Request a Refund</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">
                            To request a refund, send an email to:
                        </p>
                        <div class="bg-blue-50 p-4 rounded-lg mb-4">
                            <p class="text-lg font-bold text-center text-[#EA222F]">Chinyere.onwukwe@apmdcng.com</p>
                        </div>
                        <p class="mb-4 font-medium">Include the following information:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="flex items-start">
                                <i class="fas fa-user text-[#EA222F] mt-1 mr-2"></i>
                                <span>Full Name / Company Name</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-[#EA222F] mt-1 mr-2"></i>
                                <span>Contact Information</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-file-invoice text-[#EA222F] mt-1 mr-2"></i>
                                <span>Invoice or Transaction Reference</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-calendar text-[#EA222F] mt-1 mr-2"></i>
                                <span>Payment Date</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-money-bill-wave text-[#EA222F] mt-1 mr-2"></i>
                                <span>Amount Paid</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-comment text-[#EA222F] mt-1 mr-2"></i>
                                <span>Reason for Refund Request</span>
                            </div>
                            <div class="flex items-start md:col-span-2">
                                <i class="fas fa-receipt text-[#EA222F] mt-1 mr-2"></i>
                                <span>Proof of Payment (if applicable)</span>
                            </div>
                        </div>
                        <p>
                            Our Accounts Team will review your request, verify details, and respond within <span
                                class="font-bold">5–10 business days</span>.
                        </p>
                    </div>
                </div>

                <!-- Refund Processing Time -->
                <div id="processing" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">5. Refund Processing Time</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>If approved:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Refunds will be processed to the original payment method.</li>
                            <li>Bank refunds may take <span class="font-bold">5–14 business days</span> depending on
                                your financial institution.</li>
                            <li>International refunds may take longer due to cross-border processing.</li>
                        </ul>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                            <p class="font-medium">
                                APMDC is not responsible for delays caused by banks, payment gateways, or financial
                                institutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Deductions / Adjustments -->
                <div id="deductions" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">6. Deductions / Adjustments</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p class="mb-4">Approved refunds may be subject to:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="flex items-center">
                                <i class="fas fa-university text-[#EA222F] mr-2"></i>
                                <span>Bank transfer charges</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-credit-card text-[#EA222F] mr-2"></i>
                                <span>Payment gateway fees</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-file-alt text-[#EA222F] mr-2"></i>
                                <span>Administrative deductions</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-hand-holding-usd text-[#EA222F] mr-2"></i>
                                <span>Third-party cost recoveries already incurred</span>
                            </div>
                        </div>
                        <p>
                            APMDC will provide a breakdown of any deductions upon request.
                        </p>
                    </div>
                </div>

                <!-- Cancellation Policy -->
                <div id="cancellation" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">7. Cancellation Policy</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>If a client wishes to cancel a service:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Cancellation must be communicated in writing.</li>
                            <li>Refunds (if any) depend on whether the service has already started.</li>
                            <li>Once mobilization or operational planning begins, refund eligibility is reduced or void.
                            </li>
                        </ul>
                        <div class="bg-red-50 border-l-4 border-red-400 p-4">
                            <p class="font-medium">
                                Some services require mandatory upfront fees that are strictly non-refundable.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dispute Resolution -->
                <div id="dispute" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">8. Dispute Resolution</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>If you disagree with a refund decision:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>You may escalate the matter to our Finance or Compliance Unit.</li>
                            <li>APMDC will conduct a secondary review within 5 business days.</li>
                            <li>Final determinations are based on internal policies, NDPR compliance, and contractual
                                terms.</li>
                        </ul>
                    </div>
                </div>

                <!-- Policy Changes -->
                <div id="changes" class="policy-section policy-card bg-white rounded-xl shadow-sm p-8 mb-8"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-[#EA222F] text-white p-3 rounded-full mr-4">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">9. Changes to This Refund Policy</h2>
                            <div class="section-divider"></div>
                        </div>
                    </div>
                    <div class="text-gray-600 space-y-4">
                        <p>APMDC may update this Refund Policy at any time.</p>
                        <p>Updates will be posted on this page with a revised "Last Updated" date.</p>
                        <p>Continued use of our services implies acceptance of the updated policy.</p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div id="contact" class="policy-section contact-info-box p-8 rounded-xl shadow-lg"
                    data-aos="fade-up">
                    <div class="flex items-start mb-6">
                        <div class="bg-white text-[#EA222F] p-3 rounded-full mr-4">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">10. Contact Information</h2>
                            <div class="section-divider border-white"></div>
                        </div>
                    </div>
                    <div class="text-white/90 space-y-4">
                        <p class="font-medium">For questions or concerns about this Refund Policy:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="font-bold text-lg mb-3">APMDC Nigeria</h3>
                                <p class="flex items-start mb-2">
                                    <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                                    <span>7B Oranyan Road, Off Oduduwa Street,<br>Apapa G.R.A, Lagos, Nigeria</span>
                                </p>
                                <p class="flex items-center mb-2">
                                    <i class="fas fa-envelope mr-3"></i>
                                    <span>Chinyere.onwukwe@apmdcng.com</span>
                                </p>
                                <p class="flex items-center mb-2">
                                    <i class="fas fa-phone mr-3"></i>
                                    <span>+234-1-4541278 / +234-1-3425846</span>
                                </p>
                                <p class="flex items-center">
                                    <i class="fas fa-globe mr-3"></i>
                                    <a href="https://apmdcng.com">apmdcng.com</a>
                                </p>
                            </div>
                            <div class="bg-white/10 p-4 rounded-lg">
                                <h3 class="font-bold text-lg mb-3">Quick Refund Request</h3>
                                <p class="mb-3">Send all refund requests to:</p>
                                <div class="bg-white/20 p-3 rounded text-center">
                                    <p class="font-bold">Chinyere.onwukwe@apmdcng.com</p>
                                </div>
                                <p class="text-sm mt-3">Include all required information for faster processing</p>
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
    <!-- @include('partials.footer') -->



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
