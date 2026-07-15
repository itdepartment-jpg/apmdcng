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

        .team-description {
            overflow-wrap: anywhere;
            line-height: 1.7;
            white-space: pre-line;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-gray-800 antialiased overflow-x-hidden">
    @php
        $formatTeamDescription = static function (?string $description): ?string {
            if (! $description) {
                return null;
            }

            $description = str_replace(['</p>', '</li>', '<br>', '<br/>', '<br />'], "\n", $description);
            $description = trim(strip_tags($description));
            $description = preg_replace("/[ \t]+/", ' ', $description);
            $description = preg_replace("/\n{3,}/", "\n\n", $description);

            return $description ?: null;
        };

        $hasExecutives = isset($executives) && $executives->count() > 0;
        $hasSeniors = isset($seniors) && $seniors->count() > 0;
        $hasKeyPersonnel = isset($keyPersonnel) && $keyPersonnel->count() > 0;
        $hasTeamMembers = $hasExecutives || $hasSeniors || $hasKeyPersonnel;
    @endphp

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

    @if ($hasTeamMembers)
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
    @endif

    <!-- Leadership Team Section -->
    <section id="leadership" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            @if ($hasTeamMembers)
                @if ($hasExecutives)
                    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                        <span class="text-[#EA222F] font-semibold tracking-wider">LEADERSHIP</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                            Executive Leadership Team
                        </h2>
                        <p class="text-gray-600">
                            Our experienced leadership team brings decades of maritime expertise and strategic vision to
                            drive APMDC's success.
                        </p>
                    </div>

                    <!-- Dynamic Leadership Team Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($executives as $index => $executive)
                            <div class="team-card bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up"
                                data-aos-delay="{{ ($index + 1) * 100 }}">
                                <div class="relative overflow-hidden">
                                    <!-- Position Badge with Fallback -->
                                    <div class="leadership-badge">
                                        {{ $executive->position_short ?? (Str::limit(strtoupper($executive->position), 5) ?? 'EXEC') }}
                                    </div>

                                    @php
                                        $imageUrl = $executive->image_url ?? ($executive->image ? asset('storage/' . $executive->image) : null);
                                    @endphp

                                    @if ($imageUrl)
                                        <img src="{{ $imageUrl }}"
                                            alt="{{ $executive->name ?? 'Executive Team Member' }}"
                                            class="team-member-img w-full h-80 object-cover">
                                    @endif
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
                                        $bioText = $formatTeamDescription($bio);
                                        $defaultBio =
                                            'Experienced professional with extensive background in maritime operations and leadership.';
                                    @endphp

                                    <p class="team-description text-gray-600 text-sm mb-4">
                                        {{ $bioText ?: $defaultBio }}
                                    </p>



                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Senior Leadership Section -->
                @if ($hasSeniors)
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

                                @php
                                    $seniorImageUrl = $senior->image_url ?? ($senior->image ? asset('storage/' . $senior->image) : null);
                                @endphp

                                @if ($seniorImageUrl)
                                    <div
                                        class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden border-2 border-[#EA222F] bg-gray-100">
                                        <img src="{{ $seniorImageUrl }}"
                                            alt="{{ $senior->name ?? 'Senior Team Member' }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                @endif

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
                                    $seniorBioText = $formatTeamDescription($seniorBio);
                                @endphp

                                <p class="team-description text-gray-600 text-xs mb-4">
                                    {{ $seniorBioText }}
                                </p>

                                @if ($senior->department)
                                    <div
                                        class="bg-gray-100 rounded-full px-3 py-1 text-xs font-medium text-gray-700 inline-block">
                                        {{ $senior->department }}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Key Personnel Section -->
                @if ($hasKeyPersonnel)
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
                                    @php
                                        $personnelImageUrl = $personnel->image_url ?? ($personnel->image ? asset('storage/' . $personnel->image) : null);
                                    @endphp

                                    @if ($personnelImageUrl)
                                        <div
                                            class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 mr-4 border-2 border-[#303791] bg-gray-100">
                                            <img src="{{ $personnelImageUrl }}"
                                                alt="{{ $personnel->name ?? 'Team Member' }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                    @endif

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
                                            $personnelBioText = $formatTeamDescription($personnelBio);
                                        @endphp

                                        <p class="team-description text-gray-600 text-xs mb-3">
                                            {{ $personnelBioText }}
                                        </p>

                                        @php
                                            $specializations = $personnel->specialization
                                                ? array_map('trim', explode(',', $personnel->specialization))
                                                : [];
                                        @endphp

                                        @if (count($specializations) > 0)
                                            <div class="flex flex-wrap gap-1">
                                                @foreach (array_slice($specializations, 0, 3) as $skill)
                                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">
                                                        {{ $skill }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @else
                <div class="max-w-3xl mx-auto text-center py-16" data-aos="fade-up">
                    <span class="text-[#EA222F] font-semibold tracking-wider">OUR TEAM</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-3 mb-6">
                        We're Updating Our Team Profiles
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Our leadership and operations team information is being refreshed. Please check back soon for
                        updated profiles of the people driving APMDC's maritime and logistics services.
                    </p>
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
