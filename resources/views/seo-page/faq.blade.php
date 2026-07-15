@php
    $faqs = [
        [
            'question' => 'What services does APMDC Logistics provide?',
            'answer' => 'APMDC Logistics provides ship agency, offshore logistics, supply chain management, warehousing, customs clearance, and marine support services across Nigeria’s major ports.',
        ],
        [
            'question' => 'Where are your operations located?',
            'answer' => 'Our offices and operations are located in Lagos, Onne, Warri, and Port Harcourt, giving us strategic coverage across Nigeria’s key maritime and offshore hubs.',
        ],
        [
            'question' => 'Is APMDC Logistics ISO certified?',
            'answer' => 'Yes. APMDC Logistics is ISO 9001:2015 certified, reflecting our commitment to quality management, compliance, operational excellence, and continuous improvement.',
        ],
        [
            'question' => 'How can I request a quote for logistics or vessel services?',
            'answer' => 'You can request a quote by clicking the “Request a Quote” button on our website or by contacting our team directly via phone, email, or WhatsApp.',
        ],
        [
            'question' => 'Do you handle offshore logistics and supply chain support?',
            'answer' => 'Yes. Our offshore logistics specialists provide end-to-end support for oil and gas operations, including crew changes, vessel support, marine supplies, cargo movement, and supply chain coordination.',
        ],
        [
            'question' => 'Can I get updates on my shipment or vessel?',
            'answer' => 'Yes. Clients can contact our operations team for shipment, vessel, or logistics updates using their reference details.',
        ],
        [
            'question' => 'How do I contact APMDC Logistics for urgent assistance?',
            'answer' => 'You can contact us by phone, email, or WhatsApp. Our support team is available Monday to Friday, from 8:00 AM to 5:00 PM.',
        ],
        [
            'question' => 'Do you provide customized logistics solutions?',
            'answer' => 'Yes. We tailor our logistics and marine support services to meet each client’s operational requirements, ensuring efficiency, compliance, and reliable delivery.',
        ],
        [
            'question' => 'Which industries does APMDC Logistics serve?',
            'answer' => 'We serve clients across the shipping, oil and gas, energy, offshore, marine, and international trade sectors.',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions | APMDC Logistics</title>
    <meta name="description" content="Find answers about APMDC Logistics’ ship agency, offshore logistics, customs clearance, warehousing, supply chain, and vessel support services.">

    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased overflow-x-hidden">
    <div id="preloader"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-[#EA222F] border-solid h-16 w-16"></div>
    </div>

    @include('partials.nav')

    <section class="relative overflow-hidden bg-gradient-to-r from-[#303791] to-[#EA222F] text-white pt-40 pb-24">
        <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('images/world-map-light.svg') }}')] bg-center bg-no-repeat"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="font-semibold tracking-wider uppercase text-white/80">Help & Support</span>
                <h1 class="text-4xl md:text-6xl font-bold mt-4 mb-6">Frequently Asked Questions</h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Find answers about our logistics, offshore, vessel, and supply chain services.
                </p>
            </div>
        </div>
    </section>

    @include('partials.faq-section', [
        'faqs' => $faqs,
        'faqId' => 'faq-page',
        'eyebrow' => 'Common Questions',
        'heading' => 'Answers for Clients and Partners',
        'intro' => 'Browse the most common questions about working with APMDC Logistics across Nigeria’s ports and offshore hubs.',
        'sectionClass' => 'py-20 bg-[#FAFAFA]',
    ])

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center bg-gradient-to-r from-[#303791] to-[#EA222F] text-white p-10 md:p-14 rounded-3xl" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Still have questions?</h2>
                <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                    Contact our team or request a quote for your logistics, vessel, or offshore support needs.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact.show') }}"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl">
                        Contact Us
                    </a>
                    <a href="{{ route('contact.show') }}?subject=quote"
                        class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-white hover:text-[#EA222F]">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <button id="back-to-top"
        class="fixed bottom-8 right-8 bg-[#EA222F] text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]"
        aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

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
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

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
