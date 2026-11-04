
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $article->title }} | APMDC News & Insights</title>

    <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($article->excerpt ?: $article->title), 155) }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('news.show', $article->slug) }}">

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($article->excerpt ?: $article->title), 155) }}">
    <meta property="og:url" content="{{ route('news.show', $article->slug) }}">

    @if($article->featured_image)
        <meta property="og:image" content="{{ \Illuminate\Support\Facades\Storage::url($article->featured_image) }}">
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($article->excerpt ?: $article->title), 155) }}">

    @if($article->featured_image)
        <meta name="twitter:image" content="{{ \Illuminate\Support\Facades\Storage::url($article->featured_image) }}">
    @endif

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

        .article-content {
            color: #4b5563;
            font-size: 16px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .article-content h1,
        .article-content h2,
        .article-content h3,
        .article-content h4 {
            color: #111827;
            font-weight: 700;
            line-height: 1.4;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .article-content h1 { font-size: 2rem; }
        .article-content h2 { font-size: 1.65rem; }
        .article-content h3 { font-size: 1.3rem; }
        .article-content h4 { font-size: 1.1rem; }

        .article-content p {
            margin-bottom: 1.25rem;
        }

        .article-content ul,
        .article-content ol {
            padding-left: 1.75rem;
            margin-bottom: 1.5rem;
        }

        .article-content ul {
            list-style: disc;
        }

        .article-content ol {
            list-style: decimal;
        }

        .article-content li {
            margin-bottom: .5rem;
        }

        .article-content a {
            color: #EA222F;
            text-decoration: underline;
        }

        .article-content blockquote {
            border-left: 4px solid #EA222F;
            background: #f9fafb;
            padding: 1.25rem;
            margin: 1.5rem 0;
            font-style: italic;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 1.5rem auto;
        }

        .article-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .article-content th,
        .article-content td {
            border: 1px solid #e5e7eb;
            padding: 10px;
            text-align: left;
        }

        .article-content th {
            background: #f9fafb;
            color: #111827;
        }

        .article-content pre {
            overflow-x: auto;
            background: #111827;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .article-content iframe {
            max-width: 100%;
        }

        .related-card {
            transition: all .3s ease;
        }

        .related-card:hover {
            transform: translateY(-5px);
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

    {{-- Article Header --}}
    <section class="bg-gray-900 pt-24 pb-20 md:pt-32 md:pb-28">
        <div class="max-w-5xl mx-auto px-6" data-aos="fade-up">

            <div class="flex items-center flex-wrap gap-3 text-sm text-gray-300 mb-6">
                <a href="{{ url('/news') }}" class="hover:text-white">News & Insights</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-apmdc">{{ $article->category?->name ?? 'Company News' }}</span>
            </div>

            <span class="inline-block bg-apmdc text-white text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded mb-6">
                {{ $article->category?->name ?? 'Company News' }}
            </span>

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-7">
                {{ $article->title }}
            </h1>

            <div class="flex flex-wrap items-center gap-5 text-gray-300 text-sm">
                <span>
                    <i class="far fa-calendar-alt text-apmdc mr-2"></i>
                    {{ $article->published_at?->format('F d, Y') }}
                </span>

                <span>
                    <i class="far fa-newspaper text-apmdc mr-2"></i>
                    APMDC News
                </span>
            </div>

        </div>
    </section>

    {{-- Article Body --}}
    <main class="py-14 md:py-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                {{-- Main Article --}}
                <article class="lg:col-span-8" data-aos="fade-up">

                    @if($article->featured_image)
                        <div class="rounded-2xl overflow-hidden mb-10 bg-gray-100">
                            <img
                                src="{{ \Illuminate\Support\Facades\Storage::url($article->featured_image) }}"
                                alt="{{ $article->title }}"
                                class="w-full max-h-[520px] object-cover"
                            >
                        </div>
                    @endif

                    @if($article->excerpt)
                        <div class="border-l-4 border-apmdc bg-gray-50 p-6 md:p-8 rounded-r-lg mb-10">
                            <p class="text-gray-700 text-lg leading-relaxed font-medium">
                                {{ $article->excerpt }}
                            </p>
                        </div>
                    @endif

                    <div class="article-content">
                        {!! $article->content !!}
                    </div>

                    {{-- Tags --}}
                    @if(!empty($article->tags))
                        <div class="border-t border-gray-200 mt-12 pt-7">
                            <h3 class="font-bold text-gray-900 mb-4">Tags</h3>

                            <div class="flex flex-wrap gap-2">
                                @foreach($article->tags as $tag)
                                    <span class="bg-gray-100 text-gray-600 text-sm px-4 py-2 rounded-full">
                                        #{{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Social Sharing --}}
                    <div class="border-t border-gray-200 mt-10 pt-8">
                        <h3 class="font-bold text-gray-900 mb-5">Share This Article</h3>

                        @php
                            $shareUrl = route('news.show', $article->slug);
                            $shareTitle = $article->title;
                        @endphp

                        <div class="flex flex-wrap gap-3">

                            <a href="https://wa.me/?text={{ urlencode($shareTitle . ' ' . $shareUrl) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="Share on WhatsApp"
                               class="w-11 h-11 rounded-full bg-green-500 text-white flex items-center justify-center hover:opacity-80 transition">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="Share on Facebook"
                               class="w-11 h-11 rounded-full bg-blue-600 text-white flex items-center justify-center hover:opacity-80 transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="Share on LinkedIn"
                               class="w-11 h-11 rounded-full bg-blue-800 text-white flex items-center justify-center hover:opacity-80 transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <button type="button"
                                    onclick="copyArticleLink()"
                                    aria-label="Copy article link"
                                    class="w-11 h-11 rounded-full bg-gray-700 text-white flex items-center justify-center hover:opacity-80 transition">
                                <i class="fas fa-link"></i>
                            </button>

                        </div>

                        <p id="copyMessage" class="text-green-600 text-sm mt-3 hidden">
                            Article link copied!
                        </p>
                    </div>

                    <div class="mt-12">
                        <a href="{{ url('/news') }}"
                           class="inline-flex items-center gap-3 text-apmdc font-semibold hover:gap-5 transition-all">
                            <i class="fas fa-arrow-left"></i>
                            Back to News & Insights
                        </a>
                    </div>

                </article>

                {{-- Sidebar --}}
                <aside class="lg:col-span-4" data-aos="fade-left">

                    <div class="bg-gray-50 rounded-xl p-7 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-5">
                            About APMDC
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            APMDC provides groupage, consolidated cargo and full
                            container shipping solutions, connecting international
                            markets to Nigeria.
                        </p>

                        <a href="{{ url('/contact') }}"
                           class="inline-flex items-center gap-2 bg-apmdc text-white px-5 py-3 rounded-md text-sm font-semibold hover:bg-apmdcDark transition">
                            Contact Us
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    @if(isset($relatedArticles) && $relatedArticles->count())
                        <div class="bg-white border border-gray-200 rounded-xl p-7">
                            <h3 class="text-xl font-bold text-gray-900 mb-6">
                                Related Articles
                            </h3>

                            <div class="space-y-6">
                                @foreach($relatedArticles as $related)
                                    <div class="related-card flex gap-4">

                                        <a href="{{ route('news.show', $related->slug) }}"
                                           class="w-24 h-20 flex-shrink-0 rounded-lg overflow-hidden bg-gray-100">

                                            @if($related->featured_image)
                                                <img
                                                    src="{{ \Illuminate\Support\Facades\Storage::url($related->featured_image) }}"
                                                    alt="{{ $related->title }}"
                                                    class="w-full h-full object-cover"
                                                    loading="lazy"
                                                >
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                    <i class="far fa-image"></i>
                                                </div>
                                            @endif

                                        </a>

                                        <div>
                                            <p class="text-xs text-gray-500 mb-2">
                                                {{ $related->published_at?->format('M d, Y') }}
                                            </p>

                                            <h4 class="font-semibold text-sm text-gray-900 leading-snug hover:text-apmdc transition">
                                                <a href="{{ route('news.show', $related->slug) }}">
                                                    {{ \Illuminate\Support\Str::limit($related->title, 65) }}
                                                </a>
                                            </h4>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endif

                </aside>

            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- WhatsApp --}}
    @include('partials.whatsapp')

    {{-- Back to Top --}}
    <button id="backToTop"
            class="fixed bottom-7 right-7 z-40 hidden bg-apmdc text-white w-12 h-12 rounded-full shadow-lg hover:bg-apmdcDark transition"
            aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 800,
                once: true,
                offset: 80
            });

            const preloader = document.getElementById('preloader');

            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.transition = 'opacity .4s ease';

                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 400);
            }

            const backToTop = document.getElementById('backToTop');

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
        });

        function copyArticleLink() {
            navigator.clipboard.writeText(window.location.href).then(function () {
                const message = document.getElementById('copyMessage');
                message.classList.remove('hidden');

                setTimeout(function () {
                    message.classList.add('hidden');
                }, 2500);
            });
        }
    </script>

</body>
</html>
