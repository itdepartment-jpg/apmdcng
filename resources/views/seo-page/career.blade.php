<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Work With Us | APMDC Shipping</title>
    
    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
       .careers-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .section-divider {
            height: 3px;
            background: linear-gradient(90deg, #303791 0%, #EA222F 100%);
            width: 80px;
            margin: 0 auto;
        }
        
        .job-tag {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
        }
        
        .benefit-icon {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
        }
        
        .floating-shape-1 {
            width: 200px;
            height: 200px;
            background: #303791;
            top: 10%;
            left: 5%;
        }
        
        .floating-shape-2 {
            width: 150px;
            height: 150px;
            background: #EA222F;
            bottom: 15%;
            right: 8%;
        }
        
        .process-step {
            position: relative;
            z-index: 1;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #303791 0%, #EA222F 100%);
            top: 40px;
            left: 50%;
            z-index: -1;
        }
        
        .process-step:last-child::before {
            display: none;
        }
        
        @media (max-width: 768px) {
            .process-step::before {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500">
        <div class="loader animate-spin rounded-full border-t-4 border-[#EA222F] border-solid h-16 w-16"></div>
    </div>

    <!-- Navigation -->
    @include('partials.nav')
    
       <!-- Hero Section -->
    <section class="relative careers-hero-bg text-white min-h-[80vh] flex items-center pt-20 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Work <span class="text-[#EA222F]">With Us</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Join our team of logistics professionals and help shape the future of transportation in Nigeria
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#open-positions" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        View Open Positions
                    </a>
                    <a href="#why-join" class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Why Join APMDC
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Simple scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="APMDC Team" class="rounded-2xl shadow-2xl">
                        <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white p-8 rounded-2xl shadow-xl max-w-xs">
                            <h3 class="text-3xl font-bold mb-2">150+</h3>
                            <p class="text-white/90">Dedicated Professionals</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1000">
                    <span class="text-[#EA222F] font-semibold tracking-wider uppercase text-sm">Why APMDC?</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-3 mb-6 leading-tight">
                        Build Your Career With <span class="gradient-text">Purpose</span>
                    </h2>
                    <p class="text-gray-600 mb-8 text-lg">
                        At APMDC, we're revolutionizing Nigeria's logistics landscape through innovation, 
                        strategic partnerships, and a commitment to excellence. Our expansion into rail freight 
                        services with Nigeria Railway Corporation is just one example of our forward-thinking approach.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-[#EA222F]/10 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-rocket text-[#EA222F] text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Innovation-Driven Environment</h3>
                                <p class="text-gray-600">Work with cutting-edge technology and processes that shape the future of transportation.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-[#303791]/10 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-chart-line text-[#303791] text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Growth Opportunities</h3>
                                <p class="text-gray-600">Clear career paths and professional development programs to help you reach your potential.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-[#303791]/10 to-[#EA222F]/10 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-handshake text-gradient text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Impactful Work</h3>
                                <p class="text-gray-600">Contribute to Nigeria's economic growth by improving logistics and supply chain efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture & Values Section -->
    <section id="culture" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider uppercase text-sm">Our Culture</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-3 mb-6">Values That Drive Us</h2>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="card-hover bg-white rounded-2xl p-8 text-center shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-icon">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Excellence</h3>
                    <p class="text-gray-600">
                        We pursue the highest standards in every aspect of our work, delivering quality that exceeds expectations.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="card-hover bg-white rounded-2xl p-8 text-center shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Innovation</h3>
                    <p class="text-gray-600">
                        We embrace creativity and new technologies to solve complex challenges in the logistics industry.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="card-hover bg-white rounded-2xl p-8 text-center shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Integrity</h3>
                    <p class="text-gray-600">
                        We conduct business with honesty, transparency, and ethical practices, building trust with all stakeholders.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="card-hover bg-white rounded-2xl p-8 text-center shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-icon">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Collaboration</h3>
                    <p class="text-gray-600">
                        We work together as one team, valuing diverse perspectives and fostering an inclusive environment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider uppercase text-sm">Employee Benefits</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-3 mb-6">We Invest In Our People</h2>
                <p class="text-gray-600 text-lg">
                    Our comprehensive benefits package is designed to support your professional growth and personal wellbeing.
                </p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="card-hover bg-gradient-to-br from-[#303791] to-[#EA222F] text-white rounded-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-6">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Competitive Compensation</h3>
                    <p class="text-white/90">
                        Attractive salary packages, performance bonuses, and regular reviews to reward your contributions.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-6 gradient-text">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Health & Wellness</h3>
                    <p class="text-gray-600">
                        Comprehensive health insurance, wellness programs, and mental health support for you and your family.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-6 gradient-text">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Learning & Development</h3>
                    <p class="text-gray-600">
                        Continuous training, professional certifications, and tuition reimbursement for career advancement.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl mb-6 gradient-text">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Work-Life Balance</h3>
                    <p class="text-gray-600">
                        Flexible work arrangements, generous paid time off, and family-friendly policies.
                    </p>
                </div>

                <!-- Benefit 5 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-4xl mb-6 gradient-text">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Career Growth</h3>
                    <p class="text-gray-600">
                        Clear progression paths, internal promotion opportunities, and mentorship programs.
                    </p>
                </div>

                <!-- Benefit 6 -->
                <div class="card-hover bg-gradient-to-br from-[#303791] to-[#EA222F] text-white rounded-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-4xl mb-6">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Modern Workplace</h3>
                    <p class="text-white/90">
                        State-of-the-art facilities, cutting-edge technology, and collaborative workspaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section id="positions" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider uppercase text-sm">Career Opportunities</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-3 mb-6">Join Our Growing Team</h2>
                <p class="text-gray-600 text-lg">
                    Explore our current openings and find the perfect role to match your skills and aspirations.
                </p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="max-w-5xl mx-auto">
                <!-- Job 1 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md mb-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Rail Operations Manager</h3>
                            <div class="flex flex-wrap gap-4 text-gray-600">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-[#EA222F]"></i>
                                    <span>Lagos, Nigeria</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-2 text-[#EA222F]"></i>
                                    <span>Operations</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2 text-[#EA222F]"></i>
                                    <span>Full-time</span>
                                </div>
                            </div>
                        </div>
                        <span class="job-tag text-sm font-medium py-2 px-4 rounded-full mt-4 lg:mt-0">New</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        We're looking for an experienced Rail Operations Manager to oversee our rail freight services in partnership with Nigeria Railway Corporation. 
                        The ideal candidate will have 5+ years of experience in rail or logistics operations and a proven track record of managing complex transportation systems.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] text-center">
                            Apply Now
                        </a>
                        <a href="#" class="bg-transparent border border-[#EA222F] text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#EA222F] hover:text-white text-center">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md mb-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Logistics Coordinator</h3>
                            <div class="flex flex-wrap gap-4 text-gray-600">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-[#EA222F]"></i>
                                    <span>Port Harcourt, Nigeria</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-2 text-[#EA222F]"></i>
                                    <span>Operations</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2 text-[#EA222F]"></i>
                                    <span>Full-time</span>
                                </div>
                            </div>
                        </div>
                        <span class="job-tag text-sm font-medium py-2 px-4 rounded-full mt-4 lg:mt-0">New</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        We're seeking a detail-oriented Logistics Coordinator to manage shipment scheduling, tracking, and customer communication. 
                        Experience in freight forwarding or supply chain management preferred. This role requires excellent organizational skills and the ability to manage multiple priorities.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] text-center">
                            Apply Now
                        </a>
                        <a href="#" class="bg-transparent border border-[#EA222F] text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#EA222F] hover:text-white text-center">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Software Developer</h3>
                            <div class="flex flex-wrap gap-4 text-gray-600">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-[#EA222F]"></i>
                                    <span>Remote / Lagos, Nigeria</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-2 text-[#EA222F]"></i>
                                    <span>Technology</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2 text-[#EA222F]"></i>
                                    <span>Full-time</span>
                                </div>
                            </div>
                        </div>
                        <span class="job-tag text-sm font-medium py-2 px-4 rounded-full mt-4 lg:mt-0">Remote</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Join our technology team to develop and maintain our logistics platforms, tracking systems, and customer portals. 
                        Proficiency in JavaScript, Python, or PHP required. Experience with logistics software is a plus. You'll work in an agile environment with a focus on innovation.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] text-center">
                            Apply Now
                        </a>
                        <a href="#" class="bg-transparent border border-[#EA222F] text-[#EA222F] font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#EA222F] hover:text-white text-center">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16" data-aos="fade-up">
                <p class="text-gray-600 mb-8 text-lg">Don't see the perfect role for you?</p>
                <a href="#" class="bg-transparent border-2 border-[#EA222F] text-[#EA222F] font-semibold py-4 px-10 rounded-full transition-all duration-300 hover:bg-[#EA222F] hover:text-white inline-flex items-center justify-center text-lg">
                    <i class="fas fa-paper-plane mr-3"></i> Submit Your Resume
                </a>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider uppercase text-sm">Our Process</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-3 mb-6">How To Join Our Team</h2>
                <p class="text-gray-600 text-lg">
                    We've designed a straightforward hiring process to help you showcase your skills and experience.
                </p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <!-- Step 1 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white w-20 h-20 rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6">1</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Application</h3>
                    <p class="text-gray-600">
                        Submit your application online or via email with your resume and cover letter.
                    </p>
                </div>
                
                <!-- Step 2 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white w-20 h-20 rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6">2</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Screening</h3>
                    <p class="text-gray-600">
                        Our HR team reviews your application and qualifications for the role.
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white w-20 h-20 rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6">3</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Interviews</h3>
                    <p class="text-gray-600">
                        Virtual or in-person interviews with our team members and hiring managers.
                    </p>
                </div>
                
                <!-- Step 4 -->
                <div class="process-step text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-gradient-to-r from-[#303791] to-[#EA222F] text-white w-20 h-20 rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6">4</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Offer</h3>
                    <p class="text-gray-600">
                        Receive and review your employment offer to join the APMDC team.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6 text-center">
            <div data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Start Your Journey With APMDC?</h2>
                <p class="text-xl text-white/90 mb-10 max-w-3xl mx-auto">
                    Take the next step in your career and join a company that values innovation, excellence, and growth.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-5">
                    <a href="#positions" class="bg-white text-[#EA222F] font-semibold py-4 px-10 rounded-full transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center text-lg">
                        <i class="fas fa-briefcase mr-3"></i> View Open Positions
                    </a>
                    <a href="mailto:careers@apmdc.com" class="bg-transparent border-2 border-white text-white font-semibold py-4 px-10 rounded-full transition-all duration-300 hover:bg-white/10 hover:shadow-lg transform hover:-translate-y-1 inline-flex items-center justify-center text-lg">
                        <i class="fas fa-envelope mr-3"></i> Contact HR
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-[#EA222F] text-white p-4 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#d11a26] z-40" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6"/>
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
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100
        });
    </script>
</body>
</html>