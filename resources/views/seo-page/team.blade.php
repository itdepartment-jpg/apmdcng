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

    <!-- ==========================================================
        EXECUTIVE LEADERSHIP
    =========================================================== -->

              @if($hasExecutives)

                @php
                    $featuredLeaders = $executives->take(2);
                    $executiveLeaders = $executives->skip(2);
                @endphp

                <section class="py-12">

                    <div class="max-w-5xl mx-auto px-6">

                        <!-- Section Header -->
                        <div class="mb-12 text-center">

                            <span class="font-semibold uppercase tracking-[4px] text-[#EA222F]">
                                Executive Leadership
                            </span>

                            <h2 class="mt-3 text-4xl font-bold text-[#1B1F3B] lg:text-5xl">
                                Our Executive Leadership
                            </h2>

                            <p class="mx-auto mt-5 max-w-3xl leading-8 text-gray-600">
                                Meet the executives providing strategic leadership and driving
                                APMDC's commitment to operational excellence across the maritime
                                and logistics industry.
                            </p>

                        </div>

                        <!-- Featured Leaders -->
                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">

                            @foreach($featuredLeaders as $index => $leader)

                                @php

                                    $imageUrl = $leader->image_url
                                        ?? ($leader->image
                                            ? asset('storage/'.$leader->image)
                                            : ($leader->image_path
                                                ? asset('storage/'.$leader->image_path)
                                                : null));

                                    $bio = $formatTeamDescription(
                                        $leader->bio ?? $leader->description
                                    );

                                    $defaultBio = 'Experienced maritime executive providing strategic leadership and operational excellence.';

                                @endphp

                              <article
                                    class="overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-xl transition duration-500 hover:shadow-2xl cursor-pointer"
                                   onclick="openExecutivePopup(
                                        '{{ $leader->name }}',
                                        '{{ $leader->position }}',
                                        '{{ $imageUrl }}',
                                        @js($bio),
                                        '{{ $leader->email }}',
                                        '{{ $leader->linkedin }}'
                                    )"
                                >

                                    <!-- ==========================================
                                        LEADER PHOTO
                                    ========================================== -->
                                    <div class="overflow-hidden">

                                        @if($imageUrl)

                                            <img
                                                src="{{ $imageUrl }}"
                                                alt="{{ $leader->name }}"
                                                class="h-[420px] w-full object-cover transition duration-500 hover:scale-105">

                                        @else

                                            <div class="flex h-[420px] items-center justify-center bg-gray-100">

                                                <i class="fas fa-user text-7xl text-gray-300"></i>

                                            </div>

                                        @endif

                                    </div>

                                    <!-- ==========================================
                                        LEADER INFORMATION
                                    ========================================== -->
                                    <div class="p-8 text-center">

                                        <h3 class="text-2xl font-bold text-[#1B1F3B]">

                                            {{ $leader->name }}

                                        </h3>

                                        <p class="mt-2 text-lg font-medium text-[#EA222F]">

                                            {{ $leader->position }}

                                        </p>

                                        <div class="mx-auto my-5 h-1 w-16 rounded-full bg-[#EA222F]"></div>

                                        <!-- Social Links -->
                                        <div class="flex items-center justify-center gap-4">

                                            @if($leader->email)

                                                <a
                                                    href="mailto:{{ $leader->email }}"
                                                    class="flex h-11 w-11 items-center justify-center rounded-full bg-[#303791] text-white transition-all duration-300 hover:scale-110 hover:bg-[#EA222F]">

                                                    <i class="fas fa-envelope"></i>

                                                </a>

                                            @endif

                                            @if($leader->linkedin)

                                                <a
                                                    href="{{ $leader->linkedin }}"
                                                    target="_blank"
                                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-[#303791] text-[#303791] transition-all duration-300 hover:scale-110 hover:bg-[#303791] hover:text-white">

                                                    <i class="fab fa-linkedin-in"></i>

                                                </a>

                                            @endif

                                        </div>

                                    </div>

                                </article>

                            @endforeach

                        </div>

                    </div>


                </section>

            @endif

                        <!-- ==========================================================
                        SENIOR LEADERSHIP
                    =========================================================== -->

                   @if($hasSeniors)

<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <!-- ==========================================
            Section Header
        ========================================== -->
        <div class="mb-16 text-center">

            <span class="font-semibold uppercase tracking-[4px] text-[#EA222F]">

                Senior Leadership

            </span>

            <h2 class="mt-3 text-4xl font-bold text-[#1B1F3B] lg:text-5xl">

                Senior Management Team

            </h2>

            <p class="mx-auto mt-5 max-w-3xl leading-8 text-gray-600">

                Meet the experienced professionals leading APMDC's operations,
                commercial activities, technical services, and strategic business
                functions.

            </p>

        </div>

        <!-- ==========================================
            Leadership Grid
        ========================================== -->
       <div class="grid grid-cols-1 gap-10 md:grid-cols-2 xl:grid-cols-3">

            @foreach($seniors as $leader)

                @php

                    $imageUrl = $leader->image_url
                        ?? ($leader->image
                            ? asset('storage/'.$leader->image)
                            : ($leader->image_path
                                ? asset('storage/'.$leader->image_path)
                                : null));

                    $bio = $formatTeamDescription(
                        $leader->bio ?? $leader->description
                    );

                @endphp

                <article
                    onclick="openExecutivePopup(
                        '{{ $leader->name }}',
                        '{{ $leader->position }}',
                        '{{ $imageUrl }}',
                        @js($bio),
                        '{{ $leader->email }}',
                        '{{ $leader->linkedin }}'
                    )"
                    class="cursor-pointer overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

                    <!-- =========================
                        Leader Photo
                    ========================== -->
                    <div class="overflow-hidden">

                        @if($imageUrl)

                            <img
                                src="{{ $imageUrl }}"
                                alt="{{ $leader->name }}"
                                class="h-80 w-full object-cover transition duration-500 hover:scale-105">

                        @else

                            <div class="flex h-80 items-center justify-center bg-gray-100">

                                <i class="fas fa-user text-6xl text-gray-300"></i>

                            </div>

                        @endif

                    </div>

                    <!-- =========================
                        Leader Information
                    ========================== -->
                    <div class="p-6 text-center">

                        <h3 class="text-2xl font-bold text-[#1B1F3B]">

                            {{ $leader->name }}

                        </h3>

                        <p class="mt-2 font-medium text-[#EA222F]">

                            {{ $leader->position }}

                        </p>

                        <div class="mx-auto my-5 h-1 w-16 rounded-full bg-[#EA222F]"></div>

                        <!-- Social Links -->
                        <div class="flex items-center justify-center gap-4">

                            @if($leader->email)

                                <a
                                    href="mailto:{{ $leader->email }}"
                                    onclick="event.stopPropagation()"
                                    class="flex h-11 w-11 items-center justify-center rounded-full bg-[#303791] text-white transition-all duration-300 hover:scale-110 hover:bg-[#EA222F]">

                                    <i class="fas fa-envelope"></i>

                                </a>

                            @endif

                            @if($leader->linkedin)

                                <a
                                    href="{{ $leader->linkedin }}"
                                    target="_blank"
                                    onclick="event.stopPropagation()"
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-[#303791] text-[#303791] transition-all duration-300 hover:scale-110 hover:bg-[#303791] hover:text-white">

                                    <i class="fab fa-linkedin-in"></i>

                                </a>

                            @endif

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

@endif

                    <!-- ==========================================================
                        KEY PERSONNEL
                    =========================================================== -->

                    @if($hasKeyPersonnel)

                    <section class="py-20 bg-gray-50">

                        <div class="max-w-7xl mx-auto px-6">

                            <!-- Heading -->

                            <div class="text-center mb-14">

                                <span class="inline-block text-[#EA222F] uppercase tracking-[4px] font-semibold">
                                    Key Personnel
                                </span>

                                <h2 class="text-4xl font-bold text-[#1B1F3B] mt-3">
                                    Operational & Technical Team
                                </h2>

                                <p class="text-gray-600 mt-5 max-w-3xl mx-auto leading-8">
                                    Meet the dedicated professionals working behind the scenes to
                                    deliver efficient, reliable and customer-focused maritime,
                                    shipping and logistics services every day.
                                </p>

                            </div>

                            <!-- Team Members -->

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

                                @foreach($keyPersonnel as $member)

                                    @php

                                        $imageUrl = $member->image_url ??
                                            ($member->image
                                                ? asset('storage/'.$member->image)
                                                : ($member->image_path
                                                    ? asset('storage/'.$member->image_path)
                                                    : null));

                                        $bio = $formatTeamDescription(
                                            $member->bio ??
                                            $member->description
                                        );

                                    @endphp

                                   <div
                                        class="group cursor-pointer bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-2"
                                    >

                                        @if($imageUrl)

                                            <img
                                                src="{{ $imageUrl }}"
                                                alt="{{ $member->name }}"
                                                class="w-full h-64 object-cover">

                                        @endif

                                        <div class="p-6">

                                            <h3
                                                class="text-xl font-bold text-[#1B1F3B]">

                                                {{ $member->name }}

                                            </h3>

                                            <p
                                                class="text-[#EA222F] font-medium mt-2">

                                                {{ $member->position }}

                                            </p>

                                            <div
                                                class="w-10 h-1 bg-[#EA222F] rounded-full my-4">
                                            </div>

                                            <p
                                                class="text-gray-600 text-sm leading-7">

                                                {{ $bio }}

                                            </p>

                                            <div
                                                class="flex justify-center gap-5 mt-6">

                                                @if($member->email)

                                                    <a
                                                        href="mailto:{{ $member->email }}"
                                                        class="text-[#303791] hover:text-[#EA222F]">

                                                        <i class="fas fa-envelope"></i>

                                                    </a>

                                                @endif

                                                @if($member->linkedin)

                                                    <a
                                                        href="{{ $member->linkedin }}"
                                                        target="_blank"
                                                        class="text-[#303791] hover:text-[#EA222F]">

                                                        <i class="fab fa-linkedin"></i>

                                                    </a>

                                                @endif

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </section>

                    <!-- ==========================================
                        LEADERSHIP PROFILE MODAL
                    ========================================== -->

                    <!-- <div
                        id="leaderModal"
                        class="fixed inset-0 z-[9999] flex items-center justify-center bg-red-500/80"
                    >

                        <div
                            class="bg-white rounded-3xl shadow-2xl w-full max-w-5xl mx-6 p-10 relative">

                            <!-- Close Button -->

                           <!-- <button
                                type="button"
                                onclick="closeExecutivePopup()"
                                class="absolute top-6 right-6 flex h-12 w-12 items-center justify-center rounded-full bg-white text-2xl font-light text-gray-500 shadow-lg transition-all duration-300 hover:bg-[#EA222F] hover:text-white">

                                &times;

                            </button>

                            <h2 class="text-3xl font-bold text-[#1B1F3B]">
                                Leadership Profile
                            </h2>

                            <p class="mt-3 text-gray-500">
                                Modal Successfully Created.
                            </p>

                        </div>
 -->
                  <!--   </div> --> -->

                    @endif

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
                            <a href="/career"
                                class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:bg-white hover:text-[#EA222F] inline-flex items-center justify-center">
                                <i class="fas fa-briefcase mr-3"></i> View Open Positions
                            </a>
                        </div>
                    </div>
                </div>
            </section>


           <!-- ==========================================
                    EXECUTIVE PROFILE POPUP
                ========================================== -->

                <div
                    id="executivePopup"
                    style="display:none;"
                    onclick="closeExecutivePopup()"
                    class="fixed inset-0 z-[9999] bg-black/80 backdrop-blur-sm overflow-y-auto">

                    <div class="flex min-h-screen items-center justify-center p-6">

                        <div class="relative w-full max-w-6xl rounded-3xl bg-white shadow-2xl overflow-hidden">

                            <!-- Close Button -->
                            <button
                                onclick="closeExecutivePopup()"
                                class="absolute right-6 top-6 z-20 flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-2xl text-gray-500 transition hover:bg-[#EA222F] hover:text-white">

                                &times;

                            </button>

                            <div class="grid grid-cols-1 lg:grid-cols-2">

                                <!-- ======================================
                                    LEFT SIDE - PHOTO
                                ======================================= -->

                                <div class="bg-gray-50 p-10 flex items-center justify-center">

                                    <img
                                        id="executivePhoto"
                                        src=""
                                        alt=""
                                        class="w-full max-w-sm rounded-3xl shadow-xl object-cover">

                                </div>

                                <!-- ======================================
                                    RIGHT SIDE - INFORMATION
                                ======================================= -->

                                <div class="p-10 lg:p-14">

                                    <span class="uppercase tracking-[4px] text-[#EA222F] text-sm font-semibold">

                                        Executive Leadership

                                    </span>

                                    <h2
                                        id="executiveName"
                                        class="mt-4 text-4xl font-bold text-[#1B1F3B]">
                                    </h2>

                                    <p
                                        id="executivePosition"
                                        class="mt-3 text-xl font-medium text-[#EA222F]">
                                    </p>

                                    <!-- Social Links -->

                                    <div class="mt-8 flex gap-4">

                                        <a
                                            id="executiveEmail"
                                            href="#"
                                            class="flex h-12 w-12 items-center justify-center rounded-full bg-[#303791] text-white transition hover:bg-[#EA222F]">

                                            <i class="fas fa-envelope"></i>

                                        </a>

                                        <a
                                            id="executiveLinkedIn"
                                            href="#"
                                            target="_blank"
                                            class="flex h-12 w-12 items-center justify-center rounded-full border border-[#303791] text-[#303791] transition hover:bg-[#303791] hover:text-white">

                                            <i class="fab fa-linkedin-in"></i>

                                        </a>

                                    </div>

                                    <!-- Divider -->

                                    <div class="my-8 h-px bg-gray-200"></div>

                                    <!-- Biography -->

                                    <h3 class="text-lg font-semibold text-[#1B1F3B]">

                                        Biography

                                    </h3>

                                    <div
                                        id="executiveBio"
                                        class="mt-6 max-h-[350px] overflow-y-auto pr-3 leading-8 text-gray-600">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
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

   <script>

        function openExecutivePopup(name, position, image, bio, email, linkedin) {

        document.getElementById("executiveName").innerText = name;

        document.getElementById("executivePosition").innerText = position;

        document.getElementById("executivePhoto").src = image;

        document.getElementById("executiveBio").innerText = bio;

        document.getElementById("executiveEmail").href = "mailto:" + email;

        document.getElementById("executiveLinkedIn").href = linkedin;

        document.getElementById("executivePopup").style.display = "block";
    }

        function closeExecutivePopup() {

            document.getElementById("executivePopup").style.display = "none";

        }
    </script>

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
    @include('partials.whatsapp')
</body>

</html>
