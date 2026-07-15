<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - APMDC Nigeria</title>

    <!-- CSS Assets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <style>
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .team-hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
        }

        .team-member-img {
            transition: transform 0.3s ease;
        }

        .team-card:hover .team-member-img {
            transform: scale(1.05);
        }

        .social-links {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .team-card:hover .social-links {
            opacity: 1;
            transform: translateY(0);
        }

        .department-section {
            scroll-margin-top: 100px;
        }

        .leadership-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #303791 0%, #EA222F 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
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
    <section class="relative team-hero-bg text-white min-h-[60vh] flex items-center pt-24 pb-12">
        <div class="container mx-auto px-6 text-center relative z-10">
            <div data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Meet Our <span class="text-[#EA222F]">Team</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-200">
                    Experienced professionals driving maritime excellence and innovation
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#leadership"
                        class="bg-[#EA222F] text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-[#d11a26] hover:shadow-lg inline-block">
                        Leadership Team
                    </a>
                    <a href="#departments"
                        class="bg-transparent border-2 border-white text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 hover:bg-white hover:text-gray-800 inline-block">
                        Departments
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                    <div class="text-white/90">Team Members</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl md:text-5xl font-bold mb-2">15+</div>
                    <div class="text-white/90">Years Experience</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl md:text-5xl font-bold mb-2">100+</div>
                    <div class="text-white/90">Projects Completed</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-white/90">Operations</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section id="leadership" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-[#EA222F] font-semibold tracking-wider">LEADERSHIP</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                    Executive Leadership Team
                </h2>
                <p class="text-gray-600">
                    Our experienced leadership team brings decades of maritime expertise and strategic vision to drive
                    APMDC's success.
                </p>
            </div>

            <!-- Dynamic Leadership Team Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($executives as $index => $executive)
                <div class="team-card bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="relative overflow-hidden">
                        <!-- Position Badge with Fallback -->
                        <div class="leadership-badge">
                            {{ $executive->position_short ?? (Str::limit(strtoupper($executive->position), 5) ?? 'EXEC') }}
                        </div>

                        <!-- Team Member Image with Multiple Fallbacks -->
                        @php
                        $imageUrl = $executive->image ? asset('storage/' . $executive->image) : null;
                        $fallbackImages = [
                        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        ];
                        $randomFallback = $fallbackImages[array_rand($fallbackImages)];
                        @endphp

                        <img src="{{ $imageUrl ?? $randomFallback }}"
                            alt="{{ $executive->name ?? 'Executive Team Member' }}"
                            class="team-member-img w-full h-80 object-cover"
                            onerror="this.src='{{ $randomFallback }}'">
                    </div>

                    <div class="p-6">
                        <!-- Name with Fallback -->
                        <h3 class="text-xl font-bold text-gray-800 mb-1">
                            {{ $executive->name ?? 'Executive Team Member' }}
                        </h3>

                        <!-- Position with Fallback -->
                        <p class="text-[#EA222F] font-medium mb-3">
                            {{ $executive->position ?? 'Executive Leadership' }}
                        </p>

                        <!-- Bio/Description with Fallback -->
                        @php
                        $bio = $executive->bio ?? ($executive->description ?? null);
                        $defaultBio =
                        'Experienced professional with extensive background in maritime operations and leadership.';
                        @endphp

                        <p class="text-gray-600 text-sm mb-4">
                            {{ $bio ? Str::limit($bio, 120) : $defaultBio }}
                        </p>

                        <!-- Experience with Fallback -->
                        @if ($executive->experience || true)
                        {{-- Always show experience section --}}
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-briefcase mr-2 text-[#EA222F]"></i>
                            <span>{{ $executive->experience ?? '20+ years industry experience' }}</span>
                        </div>
                        @endif

                        <!-- Social Links with Conditional Rendering -->
                        <div class="social-links flex space-x-3">
                            @php
                            $hasSocialLinks =
                            $executive->linkedin_url || $executive->twitter_url || $executive->email;
                            @endphp

                            @if ($executive->linkedin_url)
                            <a href="{{ $executive->linkedin_url }}" class="text-gray-400 hover:text-[#EA222F]"
                                target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            @elseif(!$hasSocialLinks)
                            <span class="text-gray-300 cursor-not-allowed" aria-label="LinkedIn not available">
                                <i class="fab fa-linkedin"></i>
                            </span>
                            @endif

                            @if ($executive->twitter_url)
                            <a href="{{ $executive->twitter_url }}" class="text-gray-400 hover:text-[#EA222F]"
                                target="_blank" rel="noopener noreferrer" aria-label="Twitter Profile">
                                <i class="fab fa-twitter"></i>
                            </a>
                            @elseif(!$hasSocialLinks)
                            <span class="text-gray-300 cursor-not-allowed" aria-label="Twitter not available">
                                <i class="fab fa-twitter"></i>
                            </span>
                            @endif

                            @if ($executive->email)
                            <a href="mailto:{{ $executive->email }}" class="text-gray-400 hover:text-[#EA222F]"
                                aria-label="Send Email">
                                <i class="fas fa-envelope"></i>
                            </a>
                            @elseif(!$hasSocialLinks)
                            <span class="text-gray-300 cursor-not-allowed" aria-label="Email not available">
                                <i class="fas fa-envelope"></i>
                            </span>
                            @endif
                        </div>

                        <!-- Additional Info (Hidden by default, shows on hover) -->
                        @php
                        $hasAdditionalInfo = $executive->specialization || $executive->qualifications;
                        @endphp

                        @if ($hasAdditionalInfo)
                        <div class="additional-info mt-4 pt-4 border-t border-gray-100">
                            @if ($executive->specialization)
                            <p class="text-xs text-gray-500 mb-2">
                                <strong>Specialization:</strong> {{ $executive->specialization }}
                            </p>
                            @endif

                            @if ($executive->qualifications)
                            <p class="text-xs text-gray-500">
                                <strong>Qualifications:</strong>
                                {{ Str::limit($executive->qualifications, 80) }}
                            </p>
                            @endif
                        </div>
                        @else
                        <!-- Default additional info -->
                        <div class="additional-info mt-4 pt-4 border-t border-gray-100">
                            <p class="text-xs text-gray-500">
                                <strong>Expertise:</strong> Maritime Operations, Leadership, Strategic Planning
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
                @empty
                <!-- Empty State for Executives -->
                <div class="col-span-full" data-aos="fade-up">
                    <div class="text-center py-12">
                        <div
                            class="bg-gray-50 rounded-xl p-8 max-w-md mx-auto border-2 border-dashed border-gray-200">
                            <i class="fas fa-users text-4xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-bold text-gray-600 mb-2">Executive Team</h3>
                            <p class="text-gray-500 mb-4">Our executive leadership information is currently being
                                updated.</p>
                            <div class="flex justify-center space-x-4">
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-2 flex items-center justify-center">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <p class="text-xs text-gray-500">CEO</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-2 flex items-center justify-center">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <p class="text-xs text-gray-500">COO</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-2 flex items-center justify-center">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <p class="text-xs text-gray-500">CFO</p>
                                </div>
                            </div>
                            <a href="{{ route('contact.show') ?? '#' }}"
                                class="inline-block mt-4 text-[#EA222F] font-medium hover:underline text-sm">
                                Contact us for executive inquiries →
                            </a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- Senior Leadership Section -->
            @if (isset($seniors) && $seniors->count() > 0)
            <div class="mt-16">
                <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
                    <span class="text-[#EA222F] font-semibold tracking-wider">SENIOR LEADERSHIP</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-3 mb-4">
                        Senior Management Team
                    </h3>
                    <p class="text-gray-600">
                        Experienced professionals overseeing key operational divisions
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($seniors as $index => $senior)
                    <div class="team-card bg-white rounded-xl shadow-sm p-6 text-center" data-aos="fade-up"
                        data-aos-delay="{{ ($index + 1) * 100 }}">

                        <!-- Profile Image with Fallback -->
                        @php
                        $seniorImageUrl = $senior->image ? asset('storage/' . $senior->image) : null;
                        $seniorFallback =
                        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                        @endphp

                        <div
                            class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden border-2 border-[#EA222F] bg-gray-100">
                            <img src="{{ $seniorImageUrl ?? $seniorFallback }}"
                                alt="{{ $senior->name ?? 'Senior Team Member' }}"
                                class="w-full h-full object-cover"
                                onerror="this.src='{{ $seniorFallback }}'">
                        </div>

                        <h4 class="font-bold text-gray-800 mb-1">
                            {{ $senior->name ?? 'Senior Leadership' }}
                        </h4>
                        <p class="text-[#EA222F] text-sm mb-3">
                            {{ $senior->position ?? 'Senior Management' }}
                        </p>

                        @php
                        $seniorBio =
                        $senior->bio ??
                        ($senior->description ??
                        'Experienced professional managing key operational areas and driving team success.');
                        @endphp

                        <p class="text-gray-600 text-xs mb-4">
                            {{ Str::limit($seniorBio, 80) }}
                        </p>

                        <!-- Department/Division with Fallback -->
                        @if ($senior->department || true)
                        <div
                            class="bg-gray-100 rounded-full px-3 py-1 text-xs font-medium text-gray-700 inline-block">
                            {{ $senior->department ?? 'Operations' }}
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <!-- Empty State for Senior Leadership -->
            <div class="mt-16" data-aos="fade-up">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-[#EA222F] font-semibold tracking-wider">SENIOR LEADERSHIP</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-3 mb-4">
                        Senior Management Team
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach (['Operations Manager', 'Technical Director', 'Commercial Head', 'Finance Controller'] as $position)
                    <div
                        class="team-card bg-gray-50 rounded-xl shadow-sm p-6 text-center border-2 border-dashed border-gray-200">
                        <div
                            class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-user-plus text-gray-400 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-500 mb-1">Position Open</h4>
                        <p class="text-gray-400 text-sm mb-3">{{ $position }}</p>
                        <p class="text-gray-400 text-xs mb-4">
                            Join our leadership team
                        </p>
                        <div
                            class="bg-gray-200 rounded-full px-3 py-1 text-xs font-medium text-gray-500 inline-block">
                            Coming Soon
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Key Personnel Section -->
            @if (isset($keyPersonnel) && $keyPersonnel->count() > 0)
            <div class="mt-16">
                <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
                    <span class="text-[#EA222F] font-semibold tracking-wider">KEY PERSONNEL</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-3 mb-4">
                        Technical & Operational Experts
                    </h3>
                    <p class="text-gray-600">
                        Specialized professionals driving operational excellence
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($keyPersonnel as $index => $personnel)
                    <div class="team-card bg-white rounded-xl shadow-sm p-6" data-aos="fade-up"
                        data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="flex items-start">
                            <!-- Profile Image with Fallback -->
                            @php
                            $personnelImageUrl = $personnel->image
                            ? asset('storage/' . $personnel->image)
                            : null;
                            $personnelFallback =
                            'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                            @endphp

                            <div
                                class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 mr-4 border-2 border-[#303791] bg-gray-100">
                                <img src="{{ $personnelImageUrl ?? $personnelFallback }}"
                                    alt="{{ $personnel->name ?? 'Team Member' }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='{{ $personnelFallback }}'">
                            </div>

                            <div class="flex-1">
                                <h4 class="font-bold text-gray-800 mb-1">
                                    {{ $personnel->name ?? 'Expert Team Member' }}
                                </h4>
                                <p class="text-[#EA222F] text-sm mb-2">
                                    {{ $personnel->position ?? 'Technical Specialist' }}
                                </p>

                                @php
                                $personnelBio =
                                $personnel->bio ??
                                ($personnel->description ??
                                'Skilled professional with expertise in specialized operational areas.');
                                @endphp

                                <p class="text-gray-600 text-xs mb-3">
                                    {{ Str::limit($personnelBio, 100) }}
                                </p>

                                <!-- Expertise Tags with Fallback -->
                                @php
                                $specializations = $personnel->specialization
                                ? array_map('trim', explode(',', $personnel->specialization))
                                : ['Marine Operations', 'Technical Expertise', 'Project Management'];
                                @endphp

                                <div class="flex flex-wrap gap-1">
                                    @foreach (array_slice($specializations, 0, 3) as $skill)
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">
                                        {{ $skill }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <!-- Empty State for Key Personnel -->
            <div class="mt-16" data-aos="fade-up">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-[#EA222F] font-semibold tracking-wider">KEY PERSONNEL</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-3 mb-4">
                        Technical & Operational Experts
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach (['Senior Engineer', 'Operations Specialist', 'Project Manager'] as $role)
                    <div
                        class="team-card bg-gray-50 rounded-xl shadow-sm p-6 border-2 border-dashed border-gray-200">
                        <div class="flex items-start">
                            <div
                                class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 mr-4 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-500 mb-1">Expert Team</h4>
                                <p class="text-gray-400 text-sm mb-2">{{ $role }}</p>
                                <p class="text-gray-400 text-xs mb-3">
                                    Our specialized team members
                                </p>
                                <div class="flex flex-wrap gap-1">
                                    <span
                                        class="bg-gray-200 text-gray-500 text-xs px-2 py-1 rounded">Expertise</span>
                                    <span
                                        class="bg-gray-200 text-gray-500 text-xs px-2 py-1 rounded">Skills</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>



    <!-- Join Our Team CTA -->
    <section class="py-20 bg-gradient-to-r from-[#303791] to-[#EA222F] text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Join Our Growing Team
                </h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Are you passionate about maritime excellence? Explore career opportunities with APMDC and be part of
                    our innovative team.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="mailto:careers@apmdcng.com"
                        class="bg-white text-[#EA222F] font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-3"></i> Send Your CV
                    </a>
                    <a href="#"
                        class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-flex items-center justify-center">
                        <i class="fas fa-briefcase mr-3"></i> View Open Positions
                    </a>
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