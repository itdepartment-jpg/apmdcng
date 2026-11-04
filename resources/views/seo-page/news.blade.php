
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News & Insights | APMDC - Groupage Shipping in Nigeria</title>

    <meta name="description" content="Explore the latest news, company updates, projects, partnerships and insights from APMDC, Nigeria's groupage and consolidated cargo specialists.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/news') }}">

    <meta property="og:title" content="News & Insights | APMDC">
    <meta property="og:description" content="Discover the latest news, projects, partnerships and updates from APMDC.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/news') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        apmdc: '#EA222F',
                        apmdcDark: '#C81925'
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .news-card {
            transition: all .3s ease;
        }

        .news-card:hover {
            transform: translateY(-6px);
        }

        .news-card img {
            transition: transform .5s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        .featured-overlay {
            background: linear-gradient(
                to top,
                rgba(0, 0, 0, .88),
                rgba(0, 0, 0, .35),
                transparent
            );
        }

        .pagination nav {
            display: flex;
            justify-content: center;
        }

        .pagination svg {
            width: 18px;
        }

        .pagination a,
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            min-height: 38px;
            padding: 8px 12px;
            margin: 2px;
            border-radius: 6px;
        }

        .pagination [aria-current="page"] span {
            background: #EA222F;
            color: white;
        }

        .filter-control {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #e5e7eb;
            border-radius: 7px;
            background: white;
            color: #374151;
            outline: none;
            transition: border-color .2s ease;
        }

        .filter-control:focus {
            border-color: #EA222F;
            box-shadow: 0 0 0 2px rgba(234, 34, 47, .08);
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    {{-- Preloader --}}
    <div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white">
        <div class="text-center">
            <div class="h-12 w-12 animate-spin rounded-full border-4 border-gray-200 border-t-apmdc mx-auto"></div>
            <p class="mt-4 text-sm font-medium text-gray-600">Loading APMDC...</p>
        </div>
    </div>

    {{-- Navigation --}}
    @include('partials.nav')


    {{-- Page Hero --}}
    <section class="relative bg-gray-900 pt-32 pb-28 md:pt-40 md:pb-36 overflow-hidden">

        <div class="absolute inset-0 opacity-20">
            <img
                src="{{ asset('images/hero-bg.jpg') }}"
                alt=""
                class="w-full h-full object-cover"
                onerror="this.style.display='none'"
            >
        </div>

        <div class="absolute inset-0 bg-gray-950/75"></div>

        <div class="relative max-w-7xl mx-auto px-6 text-center">

            <p class="text-apmdc font-semibold uppercase tracking-[3px] text-sm mb-4"
               data-aos="fade-down">
                APMDC Updates
            </p>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6"
                data-aos="fade-up">
                News & <span class="text-apmdc">Insights</span>
            </h1>

            <p class="max-w-2xl mx-auto text-gray-200 text-base md:text-lg leading-relaxed"
               data-aos="fade-up"
               data-aos-delay="100">
                Stay informed with the latest company news, projects, partnerships
                and developments shaping our shipping and logistics operations.
            </p>

            <div class="mt-8 flex justify-center text-sm text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-white">Home</a>
                <span class="mx-3">/</span>
                <span class="text-apmdc">News & Insights</span>
            </div>

        </div>
    </section>


    {{-- Featured Article --}}
    @if($featuredArticle)

        <section class="py-16 md:py-20 bg-white">

            <div class="max-w-7xl mx-auto px-6">

                <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                    <span class="w-10 h-1 bg-apmdc"></span>
                    <h2 class="text-2xl font-bold text-gray-900">
                        Featured Story
                    </h2>
                </div>

                <a href="{{ route('news.show', $featuredArticle->slug) }}"
                   class="group block relative overflow-hidden rounded-2xl bg-gray-900 min-h-[400px] md:min-h-[480px]"
                   data-aos="fade-up">

                    @if($featuredArticle->featured_image)

                        <img
                            src="{{ \Illuminate\Support\Facades\Storage::url($featuredArticle->featured_image) }}"
                            alt="{{ $featuredArticle->title }}"
                            class="absolute inset-0 w-full h-full object-cover"
                        >

                    @else

                        <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-950"></div>

                    @endif

                    <div class="featured-overlay absolute inset-0"></div>

                    <div class="relative z-10 flex flex-col justify-end min-h-[400px] md:min-h-[480px] p-7 md:p-12">

                        <span class="inline-block w-fit bg-apmdc text-white text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded mb-5">
                            Featured Story
                        </span>

                        <p class="text-gray-200 text-sm mb-3">
                            <i class="far fa-calendar-alt mr-2"></i>

                            {{ $featuredArticle->published_at?->format('F d, Y') }}

                            <span class="mx-2">|</span>

                            {{ $featuredArticle->category?->name ?? 'Company News' }}
                        </p>

                        <h2 class="text-2xl md:text-4xl font-bold text-white max-w-3xl mb-5 group-hover:text-red-200 transition">
                            {{ $featuredArticle->title }}
                        </h2>

                        <p class="text-gray-200 max-w-2xl leading-relaxed mb-7">
                            {{ $featuredArticle->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($featuredArticle->content), 180) }}
                        </p>

                        <span class="text-white font-semibold inline-flex items-center gap-3">
                            Read Full Story
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition"></i>
                        </span>

                    </div>
                </a>

            </div>
        </section>

    @endif


    {{-- Latest News --}}
    <section class="py-16 md:py-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Section Heading --}}
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-10"
                 data-aos="fade-up">

                <div>
                    <p class="text-apmdc font-semibold uppercase tracking-widest text-sm mb-3">
                        From APMDC
                    </p>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Latest News & Updates
                    </h2>

                    <p class="text-gray-600 mt-3 max-w-xl">
                        Explore our latest stories, company developments and industry updates.
                    </p>
                </div>

                <div class="text-sm text-gray-500">
                    <i class="far fa-newspaper text-apmdc mr-2"></i>
                    Company News & Insights
                </div>

            </div>


            {{-- Search and Filters --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 md:p-7 mb-12"
                 data-aos="fade-up">

                <form action="{{ route('news') }}" method="GET">

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 items-end">

                        {{-- Search --}}
                        <div class="lg:col-span-5">

                            <label for="search" class="block text-sm font-semibold text-gray-700 mb-2">
                                Search Articles
                            </label>

                            <div class="relative">
                                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                                <input
                                    type="search"
                                    name="search"
                                    id="search"
                                    value="{{ $filters['search'] ?? '' }}"
                                    placeholder="Search news, articles or topics..."
                                    class="filter-control pl-11"
                                >
                            </div>

                        </div>


                        {{-- Category --}}
                        <div class="lg:col-span-3">

                            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                                Category
                            </label>

                            <select
                                name="category"
                                id="category"
                                class="filter-control"
                            >
                                <option value="">All Categories</option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        @selected(($filters['category'] ?? '') == $category->id)
                                    >
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- Sorting --}}
                        <div class="lg:col-span-2">

                            <label for="sort" class="block text-sm font-semibold text-gray-700 mb-2">
                                Sort By
                            </label>

                            <select name="sort" id="sort" class="filter-control">

                                <option value="latest" @selected(($filters['sort'] ?? 'latest') === 'latest')>
                                    Newest First
                                </option>

                                <option value="oldest" @selected(($filters['sort'] ?? '') === 'oldest')>
                                    Oldest First
                                </option>

                            </select>

                        </div>


                        {{-- Submit --}}
                        <div class="lg:col-span-2">

                            <button
                                type="submit"
                                class="w-full bg-apmdc text-white font-semibold py-3.5 px-5 rounded-md hover:bg-apmdcDark transition"
                            >
                                <i class="fas fa-filter mr-2"></i>
                                Apply
                            </button>

                        </div>

                    </div>


                    {{-- Clear Filters --}}
                    @if(
                        !empty($filters['search']) ||
                        !empty($filters['category']) ||
                        (($filters['sort'] ?? 'latest') !== 'latest')
                    )

                        <div class="mt-5 pt-4 border-t border-gray-100 flex justify-end">

                            <a
                                href="{{ route('news') }}"
                                class="text-sm text-apmdc font-semibold hover:text-apmdcDark"
                            >
                                <i class="fas fa-times-circle mr-1"></i>
                                Clear All Filters
                            </a>

                        </div>

                    @endif

                </form>

            </div>


            {{-- Results Heading --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-7">

                <h3 class="text-lg font-bold text-gray-900">
                    @if(!empty($filters['search']) || !empty($filters['category']))
                        Search Results
                    @else
                        All Articles
                    @endif
                </h3>

                <p class="text-sm text-gray-500">
                    {{ $latestNews->total() }} {{ \Illuminate\Support\Str::plural('article', $latestNews->total()) }} found
                </p>

            </div>


            {{-- News Cards --}}
            @if($latestNews->count())

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach($latestNews as $article)

                        <article
                            class="news-card bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl"
                            data-aos="fade-up"
                            data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                        >

                            {{-- Article Image --}}
                            <a
                                href="{{ route('news.show', $article->slug) }}"
                                class="block overflow-hidden h-56 bg-gray-200"
                            >

                                @if($article->featured_image)

                                    <img
                                        src="{{ \Illuminate\Support\Facades\Storage::url($article->featured_image) }}"
                                        alt="{{ $article->title }}"
                                        class="w-full h-full object-cover"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="w-full h-full flex items-center justify-center bg-gray-200">
                                        <i class="far fa-image text-5xl text-gray-400"></i>
                                    </div>

                                @endif

                            </a>


                            {{-- Article Details --}}
                            <div class="p-6">

                                <div class="flex items-center flex-wrap gap-3 text-xs text-gray-500 mb-4">

                                    <span class="bg-red-50 text-apmdc font-semibold px-3 py-1 rounded-full">
                                        {{ $article->category?->name ?? 'Company News' }}
                                    </span>

                                    <span>
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        {{ $article->published_at?->format('M d, Y') }}
                                    </span>

                                </div>


                                <h3 class="text-xl font-bold text-gray-900 leading-snug mb-3 hover:text-apmdc transition">

                                    <a href="{{ route('news.show', $article->slug) }}">
                                        {{ $article->title }}
                                    </a>

                                </h3>


                                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                    {{ \Illuminate\Support\Str::limit($article->excerpt ?: strip_tags($article->content), 130) }}
                                </p>


                                <a
                                    href="{{ route('news.show', $article->slug) }}"
                                    class="inline-flex items-center gap-2 text-apmdc font-semibold text-sm hover:gap-4 transition-all"
                                >
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>


                {{-- Pagination --}}
                <div class="pagination mt-14">
                    {{ $latestNews->links() }}
                </div>


            @else

                {{-- Empty State --}}
                <div class="bg-white rounded-xl text-center py-16 px-6 shadow-sm">

                    <div class="text-5xl text-gray-300 mb-5">
                        <i class="far fa-newspaper"></i>
                    </div>

                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        No Articles Found
                    </h3>

                    <p class="text-gray-500 max-w-md mx-auto mb-6">
                        We couldn't find any articles matching your search or selected filters.
                        Try another keyword or explore all our news and updates.
                    </p>

                    <a
                        href="{{ route('news') }}"
                        class="inline-flex items-center gap-2 bg-apmdc text-white font-semibold px-6 py-3 rounded-md hover:bg-apmdcDark transition"
                    >
                        View All Articles
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            @endif

        </div>
    </section>


    {{-- Call to Action --}}
    <section class="bg-apmdc py-16">

        <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">

            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">
                Looking for Reliable Shipping Solutions?
            </h2>

            <p class="text-white/90 max-w-2xl mx-auto mb-8">
                Let APMDC help you move your cargo with dependable groupage,
                consolidated cargo and full container shipping solutions.
            </p>

            <a
                href="{{ url('/contact') }}"
                class="inline-flex items-center gap-3 bg-white text-apmdc font-semibold px-8 py-4 rounded-md hover:bg-gray-100 transition"
            >
                Request a Shipping Quote
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>
    </section>


    {{-- Footer --}}
    @include('partials.footer')


    {{-- WhatsApp --}}
    @include('partials.whatsapp')


    {{-- Back to Top --}}
    <button
        id="backToTop"
        class="fixed bottom-7 right-7 z-40 hidden bg-apmdc text-white w-12 h-12 rounded-full shadow-lg hover:bg-apmdcDark transition"
        aria-label="Back to top"
    >
        <i class="fas fa-arrow-up"></i>
    </button>


    {{-- Scripts --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Initialise animations.
            AOS.init({
                duration: 800,
                once: true,
                offset: 80
            });


            // Hide preloader.
            const preloader = document.getElementById('preloader');

            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.transition = 'opacity .4s ease';

                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 400);
            }


            // Back to top button.
            const backToTop = document.getElementById('backToTop');

            if (backToTop) {

                window.addEventListener('scroll', function () {

                    if (window.scrollY > 400) {
                        backToTop.classList.remove('hidden');
                    } else {
                        backToTop.classList.add('hidden');
                    }

                });

                backToTop.addEventListener('click', function () {

                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });

                });

            }

        });
    </script>

</body>
</html>