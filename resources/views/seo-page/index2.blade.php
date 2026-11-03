<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- SEO Metadata -->
    <title>APMDC - Groupage Shipping in Nigeria</title>

    <meta name="description" content="APMDC provides reliable groupage, consolidated cargo and full container shipping from Europe, China and other African markets to Nigeria.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://apmdcng.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="APMDC - Groupage Shipping in Nigeria">
    <meta property="og:description" content="Reliable groupage, consolidated cargo and full container shipping from Europe, China and other African markets to Nigeria.">
    <meta property="og:url" content="https://apmdcng.com/">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="APMDC - Groupage Shipping in Nigeria">
    <meta name="twitter:description" content="Reliable groupage, consolidated cargo and full container shipping to Nigeria.">


    <!-- CSS Assets -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
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

                /*======================================
WHY CHOOSE GROUPAGE
======================================*/
/*=========================
WHY GROUPAGE
==========================*/

.why-groupage{
   padding:90px 0 20px;
    background:#f8fafc;
}

.section-tag{
    color:#d62828;
    font-size:14px;
    font-weight:700;
    letter-spacing:2px;
}

.section-title{
    font-size:42px;
    font-weight:700;
    margin:15px 0;
    color:#222;
}

.section-text{
    max-width:760px;
    margin:auto;
    color:#666;
}

.groupage-box{
    background:#fff;
    border-radius:12px;
    padding:40px 25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s;
    height:100%;
}

.groupage-box:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.groupage-box i{
    width:70px;
    height:70px;
    line-height:70px;
    border-radius:50%;
    background:#d62828;
    color:#fff;
    font-size:28px;
    margin-bottom:20px;
}

.groupage-box h5{
    font-weight:700;
    margin-bottom:15px;
}

.groupage-box p{
    color:#666;
    margin:0;
}

/*======================================
LATEST BLOG
======================================*/

.blog-section{
    padding:100px 0;
    background:#f8fafc;
}

.blog-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    transition:.35s;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
    height:100%;
}

.blog-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 45px rgba(0,0,0,.15);
}

.blog-image{
    position:relative;
    overflow:hidden;
    height:240px;
}

.blog-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.5s;
}

.blog-card:hover img{
    transform:scale(1.08);
}

.blog-category{
    position:absolute;
    top:18px;
    left:18px;
    background:#EA222F;
    color:#fff;
    padding:7px 14px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
}

.blog-content{
    padding:30px;
}

.blog-content h3{
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
    line-height:1.4;
    color:#222;
}

.blog-content p{
    color:#666;
    margin-bottom:20px;
}

.blog-meta{
    display:flex;
    justify-content:space-between;
    font-size:14px;
    color:#999;
    margin-bottom:20px;
}

.blog-link{
    color:#303791;
    font-weight:700;
    text-decoration:none;
    transition:.3s;
}

.blog-link:hover{
    color:#EA222F;
}

.testimonial-card{

    background:#fff;
    border-radius:24px;
    padding:50px;
    border:1px solid #edf2f7;
    box-shadow:0 15px 40px rgba(0,0,0,.06);

    transition:.35s;

    height:100%;

}

.testimonial-card:hover{

    transform:translateY(-8px);

    box-shadow:0 25px 50px rgba(0,0,0,.10);

}

.testimonial-quote{

    font-size:60px;

    color:#EA222F20;

    text-align:center;

    margin-bottom:15px;

}

.testimonial-stars{

    display:flex;

    justify-content:center;

    gap:4px;

    color:#fbbf24;

    margin-bottom:30px;

}

.testimonial-card blockquote{

    font-size:20px;

    line-height:1.9;

    color:#555;

    text-align:center;

    font-style:italic;

}

.testimonial-divider{

    width:90px;

    height:4px;

    background:linear-gradient(90deg,#303791,#EA222F);

    margin:35px auto;

    border-radius:20px;

}

.testimonial-client{

    display:flex;

    align-items:center;

    justify-content:center;

    gap:20px;

}

.client-avatar{

    width:72px;

    height:72px;

    border-radius:50%;

    background:linear-gradient(135deg,#303791,#EA222F);

    color:#fff;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:22px;

    font-weight:700;

    flex-shrink:0;

}

.client-details h4{

    font-size:20px;

    font-weight:700;

    color:#222;

    margin-bottom:3px;

}

.client-details p{

    color:#777;

    margin-bottom:2px;

}

.client-details span{

    color:#303791;

    font-weight:600;

    display:block;

    margin-bottom:8px;

}

.client-details small{

    color:#16a34a;

    font-weight:600;

}

    </style>
</head>

<body class="bg-[#FAFAFA] text-neutdrk font-inter antialiased overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-accent border-solid h-16 w-16"></div>
    </div>

    <!-- Navigation -->
    @include('partials.nav')


<!-- Hero Section -->
<section id="home"
    class="relative overflow-hidden bg-white text-gray-900 min-h-screen flex items-center pt-40 2xl:pt-24 pb-20">

    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div
            class="absolute top-0 left-0 w-full h-full opacity-5 bg-[url('{{ asset('images/world-map-light.svg') }}')] bg-center bg-no-repeat">
        </div>
        <div
            class="absolute top-1/2 left-1/2 w-[120%] h-[120%] bg-[radial-gradient(circle_at_center,rgba(234,34,47,0.05)_0%,transparent_70%)]">
        </div>
    </div>

    <!-- Floating Shipping Icons -->
    <div class="absolute top-20 left-10 w-16 h-16 z-50 opacity-10 text-accent animate-float-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-28 h-28">
            <path fill="none" stroke="#EA222F"
                d="M0 23.5a3 3 0 0 0 3-3a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 0 0 3 3M5.5 10.237V3.5h13v6.737M12 0v3.5M5.5 19c0-.174-.12-.77-.279-1.476c-.448-2.004-1.342-3.878-2.55-5.538L2.5 11.75v-.25l8.118-3.418A2.26 2.26 0 0 0 12 6m0 0c0 .909.545 1.73 1.383 2.082L21.5 11.5v.25l-.172.236c-1.207 1.66-2.101 3.534-2.55 5.538c-.157.705-.278 1.302-.278 1.476M12 6v13"
                stroke-width="1" />
        </svg>
    </div>

    <div class="absolute bottom-1/4 right-20 w-20 h-20 opacity-10 text-accent animate-float-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-28 h-28">
            <path fill="#EA222F"
                d="M5.688 19.116q-1.092 0-1.851-.763q-.76-.763-.76-1.853H2.5q-.343 0-.575-.232t-.233-.576V6.616q0-.691.463-1.153T3.308 5h11.615q.667 0 1.141.475t.475 1.14v2h1.5q.383 0 .726.172q.344.172.566.475l2.815 3.79q.081.101.121.222t.04.263v2.155q0 .344-.231.576t-.576.232h-.808q0 1.09-.764 1.853t-1.855.762t-1.852-.762t-.76-1.853H8.309q0 1.096-.764 1.856t-1.856.76m.004-1q.675 0 1.145-.47t.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-3-2.615h.647q.213-.662.869-1.138t1.484-.478q.79 0 1.466.468q.675.467.888 1.148h7.493V6.616q0-.27-.174-.443T14.923 6H3.308q-.231 0-.423.192q-.193.193-.193.424zm15.385 2.616q.675 0 1.145-.47q.47-.471.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-1.54-4.615h4.712L18.5 9.866q-.096-.116-.221-.183T18 9.616h-1.461zm-7.422-2.75" />
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">

            <!-- Hero Content -->
            <div class="lg:w-1/2 mb-16 lg:mb-0" data-aos="fade-right">

                <div class="inline-block bg-accent/10 px-4 py-2 rounded-full mb-6 border border-accent/20">
                    <span class="text-accent font-medium">
                        GROUPAGE & CONSOLIDATED CARGO SPECIALISTS
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl 2xl:text-6xl font-bold leading-[2.5rem] mb-4">
                    <span class="text-accent">
                        Nigeria's Leading Groupage Shipping & Consolidated Cargo Company
                    </span>
                </h1>

                <p class="text-xl text-gray-600 mb-8 max-w-2xl">
                    We provide reliable, efficient and cost-effective LCL and FCL
                    shipping solutions, connecting businesses and individuals to
                    global markets through our established shipping networks across
                    Europe, China and other African countries to Nigeria.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact.show') }}" class="inline-block">
                        <button
                            class="relative overflow-hidden group bg-accent text-white font-medium py-4 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg">
                            <span class="relative z-10">Request a Shipping Quote</span>
                        </button>
                    </a>
                </div>

            </div>

            <!-- Hero Visual -->
            <div class="lg:w-1/2 relative" data-aos="fade-left">
                <div class="relative">

                    <!-- Main Hero Image -->
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100 transform transition-transform duration-1000 hover:scale-[1.02]">
                        <img src="{{ asset('images/amp.jpg') }}" alt="APMDC international cargo shipping and logistics operations"
                            class="w-full h-auto object-cover" style="min-height: 500px;">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/30 to-transparent"></div>
                    </div>

                    <!-- Floating Stats Card -->
                    <div
                        class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg border border-gray-100 hidden lg:block animate-float-3">
                        <div class="flex items-start gap-4">
                            <div class="bg-accent/10 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="#EA222F">
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">Strategic Presence</p>
                                <p class="text-xs text-gray-500">
                                    Offices in Lagos, Onne, PH, Warri, Abuja & Calabar
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Animated Tracking Line -->
                    <div class="absolute top-1/2 -right-20 hidden xl:block">
                        <svg width="200" height="120" viewBox="0 0 200 120" fill="none"
                            class="animate-draw-line">
                            <path d="M1 60C1 60 30 1 70 30C110 59 130 1 170 30C210 59 199 60 199 60"
                                stroke="#EA222F" stroke-width="2" stroke-dasharray="280" stroke-dashoffset="280"
                                fill="none" />
                            <circle cx="199" cy="60" r="4" fill="#EA222F" class="animate-pulse" />
                        </svg>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Scrolling Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>

</section>


    <!-- =====================================================
     TRACK SHIPMENT
====================================================== -->

    @include('partials.tracking.tracker', [
        'variant' => 'homepage',
    ])


<!-- Features Section -->
<section class="py-20 bg-[#FAFAFA]">
    <div class="container mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
            <span class="text-accent font-semibold tracking-wider">
                WHY CHOOSE APMDC
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3 mb-6">
                The APMDC Advantage: Reliable Groupage. Global Connections. Trusted Delivery.
            </h2>

            <p class="text-gray-600">
                We combine established international partnerships, shipping expertise
                and customer-focused logistics solutions to make cargo consolidation
                and international shipping to Nigeria simpler, more reliable and efficient.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="100">

                <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="none" viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Groupage & Consolidated Cargo Specialists
                </h3>

                <p class="text-gray-600">
                    We specialise in consolidating cargo from different customers
                    into shared shipments, providing flexible LCL shipping solutions
                    for businesses and individuals who do not require an entire container.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="200">

                <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="none" viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 10h18M5 10l2-6h10l2 6M5 10v9h14v-9M9 19v-5h6v5" />
                    </svg>
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Strong International Shipping Partnerships
                </h3>

                <p class="text-gray-600">
                    Through our established international partnerships, we connect
                    customers to shipping and logistics networks across Europe,
                    China and other African markets, facilitating cargo movement to Nigeria.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="300">

                <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="none" viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Reliable Shipping Schedules
                </h3>

                <p class="text-gray-600">
                    Our regular shipping operations help customers plan their
                    cargo movements with greater confidence. We provide shipment
                    updates and communicate important milestones throughout the journey.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="400">

                <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="none" viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17l-3-3 3-3m6 6l3-3-3-3m-3 6l3-6m-9 9h18M3 3h18" />
                    </svg>
                </div>

                <h3 class="font-bold text-xl mb-3">
                    End-to-End Cargo Support
                </h3>

                <p class="text-gray-600">
                    From cargo receiving and consolidation to freight forwarding,
                    customs clearance coordination and delivery, we provide
                    supporting logistics services throughout the shipping process.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-500 transform hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="500">

                <div class="icon bg-gradient-to-br from-[#303791]/10 to-accent/10 p-4 w-fit rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="none" viewBox="0 0 24 24" stroke="#EA222F" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17l-2 2-2-2m2 2V9a5 5 0 0110 0v2m-2 4l2 2 2-2m-2 2v-2" />
                    </svg>
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Technology-Driven Shipment Visibility
                </h3>

                <p class="text-gray-600">
                    Our digital shipment tracking solutions help customers
                    monitor available shipment information, stay informed
                    about cargo movement and access important shipping updates.
                </p>
            </div>

        </div>
    </div>
</section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-accent text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">

                <div class="p-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-bold mb-4">Established in 2005</h3>
                    <p class="text-lg font-medium">Decades of trusted maritime logistics</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-bold mb-4">Nationwide Reach</h3>
                    <p class="text-lg font-medium">Offices in Lagos, PH, Warri, Calabar, Abuja & Onne</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-bold mb-4">Full-Service Expertise</h3>
                    <p class="text-lg font-medium">From clearance to crewing & offshore support</p>
                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-2xl font-bold mb-4">ISO 9001:2015 Certified</h3>
                    <p class="text-lg font-medium">Proven commitment to international standards</p>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================
     WHY CHOOSE GROUPAGE
========================= -->

<section class="why-groupage py-5">
    <div class="container mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-tag">WHY CHOOSE GROUPAGE</span>

            <h2 class="section-title">
                Ship Smarter. Save More with Groupage Shipping.
            </h2>

            <p class="section-text">
                You don't need a full container to ship internationally.
                With APMDC's Groupage (Less-than-Container Load) service,
                your cargo shares container space with other shipments,
                helping you manage shipping costs while accessing reliable
                international freight solutions from Europe, China and
                other African markets to Nigeria.
            </p>
        </div>

        <!-- Benefits -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="col-lg-3 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-wallet"></i>
                    <h5>Pay for the Space You Use</h5>
                    <p>
                        Ship smaller consignments without paying for an entire
                        container. Your shipping cost is based on the space
                        your cargo occupies.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-calendar-week"></i>
                    <h5>Regular Weekly Shipping</h5>
                    <p>
                        Our weekly shipping operations give businesses and
                        individuals more opportunities to plan and move their
                        cargo with confidence.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-boxes-stacked"></i>
                    <h5>Efficient Cargo Consolidation</h5>
                    <p>
                        We bring compatible shipments together into shared
                        container space, helping optimise capacity and make
                        international shipping more accessible.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-truck"></i>
                    <h5>Delivery Support</h5>
                    <p>
                        From cargo receiving and consolidation to destination
                        handling and delivery arrangements, we support your
                        shipment throughout its journey.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-file-invoice"></i>
                    <h5>Customs Clearance Support</h5>
                    <p>
                        Get assistance with shipping documentation and
                        customs clearance coordination to help your cargo
                        move through the import process.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="groupage-box">
                    <i class="fas fa-shield-alt"></i>
                    <h5>Additional Cargo Protection</h5>
                    <p>
                        Where available, cargo insurance options can provide
                        additional financial protection against covered
                        transit risks, subject to policy terms.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="groupage-box">
                    <i class="fas fa-location-dot"></i>
                    <h5>Shipment Updates & Tracking</h5>
                    <p>
                        Stay informed with available shipment tracking
                        information and important updates as your cargo
                        moves towards its destination.
                    </p>
                </div>
            </div>

        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <a href="{{ route('contact.show') }}" class="inline-block">
                <button
                    class="relative overflow-hidden group bg-accent text-white font-medium py-4 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg">
                    <span class="relative z-10">
                        Request a Groupage Quote
                    </span>
                </button>
            </a>
        </div>

    </div>
</section>

<div class="overflow-hidden">
    <svg viewBox="0 0 1440 120" class="w-full h-auto">
        <path fill="#ffffff"
            d="M0,64L80,74.7C160,85,320,107,480,106.7C640,107,800,85,960,74.7C1120,64,1280,64,1360,64L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
        </path>
    </svg>
</div>

    <!-- Services Section -->

 <!-- Services Section - Redesigned -->

<section id="services" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-[#EA222F] font-semibold tracking-wider text-sm uppercase">
                INDUSTRIES WE SERVE
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                Groupage & Global Shipping Solutions
                <span class="gradient-text">for Every Industry</span>
            </h2>

            <p class="text-gray-600 text-lg">
                From small business consignments to large commercial cargo,
                APMDC connects businesses across industries to international
                markets through reliable Groupage, FCL shipping and supporting
                logistics solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Service 1 -->
            <a href="/haulage-petroleum-products"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Oil & Gas Industry
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Supporting oil and gas companies with international
                            freight forwarding, equipment transportation,
                            marine logistics and cargo coordination for
                            onshore and offshore operations.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Service 2 -->
            <a href="/general-cargo"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Manufacturing & Industrial Businesses
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Helping manufacturers move raw materials,
                            machinery, spare parts and finished products
                            through flexible Groupage and full container
                            shipping solutions tailored to their cargo needs.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Service 3 -->
            <a href="/general-cargo"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Construction & Infrastructure
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Facilitating the movement of construction materials,
                            machinery, equipment and project supplies through
                            international freight forwarding and suitable
                            cargo transportation solutions.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Service 4 -->
            <a href="/agro-logistics-solutions"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Agriculture & Agro-Business
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Supporting agricultural businesses with the
                            transportation of farming equipment, machinery,
                            fertilizers and other eligible agricultural
                            supplies through international shipping networks.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Service 5 -->
            <a href="/apmdc-ships-to-shore"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Importers & Exporters
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Connecting Nigerian businesses to international
                            markets with LCL Groupage, FCL shipping and
                            supporting freight forwarding services from
                            Europe, China and other African markets.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Service 6 -->
            <a href="/general-cargo"
                class="service-item block bg-white border border-gray-200 p-6 rounded-2xl floating-card transition-all duration-300"
                data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start mb-4">
                    <div class="bg-gradient-to-br from-[#303791] to-[#EA222F] text-white p-3 rounded-xl mr-4">
                        <i class="fas fa-industry text-lg"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-[#303791] transition-colors duration-300">
                            Government & Public Sector
                        </h3>

                        <p class="text-gray-600 mt-2 text-sm">
                            Supporting public institutions and government
                            projects with cargo transportation, international
                            freight forwarding, procurement logistics and
                            coordinated supply chain solutions.
                        </p>

                        <div class="mt-5 inline-flex items-center font-semibold text-[#EA222F]">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </a>

        </div>

        {{-- <div class="mt-12 text-center" data-aos="fade-up">
            <a href="#"
                class="inline-flex items-center text-[#EA222F] font-semibold hover:text-[#303791] transition-colors">
                <span>View All Services</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div> --}}

    </div>
</section>


    <
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">

        <div class="flex flex-col lg:flex-row justify-between items-end mb-16">
            <div class="mb-8 lg:mb-0 lg:w-1/2">
                <span class="text-accent font-semibold tracking-wider">WHAT WE OFFER</span>

                <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3">
                    Reliable Groupage, Global Freight & Comprehensive Logistics Solutions
                </h2>
            </div>

            <div class="lg:w-1/2">
                <p class="text-gray-600">
                    At APMDC, we specialise in Groupage and consolidated cargo
                    shipping, complemented by full container shipping, freight
                    forwarding and maritime logistics services. We connect
                    businesses and individuals to international markets through
                    our established shipping networks across Europe, China and
                    other African countries to Nigeria.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- 1. Groupage & Consolidated Cargo -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="100">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/APMDC Groupage Service.jpg') }}" alt="APMDC Groupage and Consolidated Cargo Shipping"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="international-freights"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Groupage & Consolidated Cargo
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            Our flagship service helps businesses and individuals
                            ship smaller consignments without paying for an entire
                            container. We consolidate cargo from Europe, China
                            and other African markets, offering flexible and
                            cost-effective LCL shipping solutions to Nigeria.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2. Full Container Shipping & Freight Forwarding -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="150">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/ap3.jpg') }}" alt="APMDC Full Container Shipping and Freight Forwarding"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="/general-cargo"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Full Container Shipping (FCL)
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            For larger shipments requiring dedicated container
                            space, our FCL shipping solutions support the
                            international movement of commercial goods,
                            machinery, equipment and other cargo through
                            established freight networks.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3. Customs Clearance & Inland Distribution -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="200">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/ap2.jpg') }}" alt="APMDC Customs Clearance and Inland Cargo Distribution"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="/protocol-logistics-services"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Customs Clearance & Inland Distribution
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            We support the import process through customs
                            documentation, clearance coordination, cargo
                            handling and inland transportation arrangements,
                            helping customers navigate the movement of their
                            shipments into Nigeria.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 4. Port Agency Services -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="250">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/ap1.webp') }}" alt="APMDC Professional Port Agency and Vessel Support"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="/general-cargo"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Port Agency & Marine Services
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            We provide professional port agency and marine
                            support, including vessel coordination, port
                            documentation, regulatory processes and operational
                            assistance for vessels calling at Nigerian ports.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5. Ship-to-Shore Operations -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="300">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/ship 2 shore APMDC.jpg') }}" alt="APMDC Ship-to-Shore Marine Logistics Operations"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="/apmdc-ships-to-shore"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Ship-to-Shore Operations
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            We facilitate the coordinated transfer of cargo,
                            equipment and supplies between vessels and shore,
                            supporting marine logistics and offshore
                            operational requirements.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 6. Warehousing & Inventory Management -->
            <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-[430px] flex flex-col"
                data-aos="fade-up" data-aos-delay="350">

                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('images/APMDC Warehousing Services.jpg') }}" alt="APMDC Warehousing and Inventory Management"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="h-1/2 bg-white p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-3">
                            <a href="/warehousing-distribution"
                                class="text-gray-800 hover:text-[#303791] transition-colors duration-300">
                                Warehousing & Distribution
                            </a>
                        </h3>

                        <p class="text-gray-600 text-sm">
                            Complement your shipping operations with
                            warehousing, cargo storage, inventory management
                            and distribution support designed to facilitate
                            efficient supply chain operations.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-16" data-aos="fade-up">
            <a href="{{ route('about') }}" class="inline-block">
                <button
                    class="bg-transparent border-2 border-accent text-accent font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-accent hover:text-white hover:shadow-lg">
                    Learn More
                </button>
            </a>
        </div>

    </div>
</section>


     @include('partials.home.e-service')

<!-- =====================================================
CLIENT TESTIMONIALS
====================================================== -->

<section class="py-24 bg-gradient-to-br from-[#f8fafc] via-white to-[#f4f7fb]">

    <div class="container mx-auto px-6">

        <!-- ==========================
        Section Header
        =========================== -->

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">

            <span class="text-accent font-semibold tracking-wider uppercase">
                CLIENT TESTIMONIALS
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-neutdrk mt-3 mb-6">
                Trusted by Businesses Across Nigeria's Maritime Industry
            </h2>

            <p class="text-lg text-gray-600">
                We build long-term partnerships by delivering reliable logistics,
                customs clearance, offshore support and supply chain solutions
                that businesses can depend on.
            </p>

        </div>

        <!-- ==========================
        Testimonial Slider
        =========================== -->

        <div class="swiper testimonial-slider">

            <div class="swiper-wrapper">

                <!-- ==========================
                Testimonial 1
                =========================== -->

                <div class="swiper-slide">

                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>

                        <div class="testimonial-stars">

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>

                        <blockquote>

                            APMDC's expertise in vessel documentation and
                            customs clearance significantly reduced our port
                            turnaround time. Their professionalism and
                            responsiveness make them an invaluable logistics
                            partner.

                        </blockquote>

                        <div class="testimonial-divider"></div>

                        <div class="testimonial-client">

                            <div class="client-avatar">

                                MA

                            </div>

                            <div class="client-details">

                                <h4>M. Adebayo</h4>

                                <p>Fleet Operations Manager</p>

                                <span>Global Tankers Inc.</span>

                                <small>

                                    <i class="fas fa-circle-check"></i>

                                    Verified Client

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ==========================
                Testimonial 2
                =========================== -->

                <div class="swiper-slide">

                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>

                        <div class="testimonial-stars">

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>

                        <blockquote>

                            The APMDC team coordinated our offshore operations
                            seamlessly. Communication was excellent, timelines
                            were met and every regulatory requirement was handled
                            professionally.

                        </blockquote>

                        <div class="testimonial-divider"></div>

                        <div class="testimonial-client">

                            <div class="client-avatar">

                                DO

                            </div>

                            <div class="client-details">

                                <h4>D. Okoro</h4>

                                <p>Marine Superintendent</p>

                                <span>Offshore Energy Solutions</span>

                                <small>

                                    <i class="fas fa-circle-check"></i>

                                    Verified Client

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ==========================
                Testimonial 3
                =========================== -->

                <div class="swiper-slide">

                    <div class="testimonial-card">

                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>

                        <div class="testimonial-stars">

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>

                        <blockquote>

                            From warehousing to nationwide distribution,
                            APMDC continues to deliver dependable logistics
                            services that have strengthened our supply chain.

                        </blockquote>

                        <div class="testimonial-divider"></div>

                        <div class="testimonial-client">

                            <div class="client-avatar">

                                SJ

                            </div>

                            <div class="client-details">

                                <h4>S. Johnson</h4>

                                <p>Supply Chain Director</p>

                                <span>African Trade Corp.</span>

                                <small>

                                    <i class="fas fa-circle-check"></i>

                                    Verified Client

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Pagination -->

            <div class="swiper-pagination mt-12"></div>

        </div>

    </div>

</section>

<!-- ==========================
LATEST INSIGHTS
========================== -->

<section class="blog-section">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">

            <span class="section-tag">
                LATEST INSIGHTS
            </span>

            <h2 class="section-title">
                Logistics Tips & Industry Insights
            </h2>

            <p class="section-text">
                Stay informed with practical shipping advice, customs updates,
                freight forwarding tips and logistics best practices from the
                APMDC team.
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Article 1 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="{{ asset('images/APMDC Groupage Service.jpg') }}" alt="Groupage Shipping">

                    <span class="blog-category">
                        GROUPAGE
                    </span>

                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>July 2026</span>
                        <span>5 min read</span>
                    </div>

                    <h3>
                        Everything You Need to Know About Groupage Shipping
                    </h3>

                    <p>
                        Learn how consolidated cargo helps businesses reduce
                        shipping costs while enjoying reliable weekly departures
                        and faster international delivery.
                    </p>

                    <a href="#" class="blog-link">
                        Read Article →
                    </a>

                </div>

            </div>

            <!-- Article 2 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="{{ asset('images/ap2.jpg') }}" alt="Customs Clearance">

                    <span class="blog-category">
                        CUSTOMS
                    </span>

                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>July 2026</span>
                        <span>6 min read</span>
                    </div>

                    <h3>
                        Understanding Customs Clearance in Nigeria
                    </h3>

                    <p>
                        Discover the documentation, compliance requirements and
                        customs procedures that ensure your cargo clears Nigerian
                        ports without unnecessary delays.
                    </p>

                    <a href="#" class="blog-link">
                        Read Article →
                    </a>

                </div>

            </div>

            <!-- Article 3 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="{{ asset('images/APMDC Warehousing Services.jpg') }}" alt="Shipping Costs">

                    <span class="blog-category">
                        LOGISTICS
                    </span>

                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>July 2026</span>
                        <span>4 min read</span>
                    </div>

                    <h3>
                        7 Practical Ways to Reduce International Shipping Costs
                    </h3>

                    <p>
                        From choosing the right freight option to consolidating
                        shipments, explore proven strategies that save your
                        business money.
                    </p>

                    <a href="#" class="blog-link">
                        Read Article →
                    </a>

                </div>

            </div>

        </div>

        <div class="text-center mt-16">

            <a href="#"
                class="inline-block bg-[#EA222F] hover:bg-[#d11a26] text-white font-semibold px-8 py-4 rounded-lg transition">

                View All Articles

            </a>

        </div>

    </div>

</section>

    @php
        $homepageFaqs = [
            [
                'question' => 'What services does APMDC Logistics provide?',
                'answer' => 'APMDC Logistics provides ship agency, offshore logistics, supply chain management, warehousing, customs clearance, and marine support services across Nigeria’s major ports.',
            ],
            [
                'question' => 'Where are your operations located?',
                'answer' => 'Our offices and operations are located in Lagos, Onne, Warri, and Port Harcourt, giving us strategic coverage across Nigeria’s key maritime and offshore hubs.',
            ],
            [
                'question' => 'How can I request a quote?',
                'answer' => 'You can request a quote by clicking the “Request a Quote” button on our website or by contacting our team directly via phone, email, or WhatsApp.',
            ],
            [
                'question' => 'Do you handle offshore logistics and supply chain support?',
                'answer' => 'Yes. Our offshore logistics specialists provide end-to-end support for oil and gas operations, including crew changes, vessel support, marine supplies, cargo movement, and supply chain coordination.',
            ],
            [
                'question' => 'How do I contact APMDC Logistics for urgent assistance?',
                'answer' => 'You can contact us by phone, email, or WhatsApp. Our support team is available Monday to Friday, from 8:00 AM to 5:00 PM.',
            ],
        ];
    @endphp

    @include('partials.faq-section', [
        'faqs' => $homepageFaqs,
        'faqId' => 'homepage-faq',
        'eyebrow' => 'Help & Support',
        'heading' => 'Common Questions',
        'intro' => 'Quick answers for clients planning logistics, vessel, or offshore support in Nigeria.',
        'sectionClass' => 'py-20 bg-[#FAFAFA]',
        'compact' => true,
    ])

    <section class="pb-20 bg-[#FAFAFA]">
        <div class="container mx-auto px-6 text-center">
            <a href="{{ route('faq') }}"
                class="inline-flex items-center justify-center bg-[#EA222F] text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg">
                View All FAQs
            </a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-accent text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Need a Logistics Partner for Your Industry?
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Whether you operate in oil and gas, manufacturing, construction, agriculture, import and export, or the public sector,
                    APMDC delivers reliable shipping and logistics solutions designed to keep your business moving.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact.show') }}" class="inline-block">
                        <button
                            class="bg-white text-accent font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1">
                            Request a Quote
                        </button>
                    </a>


                    {{-- <button
                        class="bg-transparent border-2 border-white text-white font-medium py-3.5 px-8 rounded-lg transition-all duration-300 hover:bg-white/10 hover:shadow-sm">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-2"></i> +234-1-4541278
                        </span>
                    </button> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')
    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 bg-accent text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26]"
        aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger = document.getElementById('hamburger');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburger.classList.toggle('transform');
            hamburger.classList.toggle('rotate-90');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                hamburger.classList.remove('transform', 'rotate-90');
            });
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white', 'shadow-md');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-white', 'shadow-md');
                navbar.classList.add('bg-transparent');
            }
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

        // Initialize Testimonial Slider
        const testimonialSwiper = new Swiper(".testimonial-slider",{

    loop:true,

    speed:700,

    autoplay:{
        delay:5000,
        disableOnInteraction:false,
    },

    slidesPerView:1,

    spaceBetween:30,

    pagination:{
        el:".swiper-pagination",
        clickable:true,
    }

});
    </script>

     @include('partials.whatsapp')

</body>

</html>
