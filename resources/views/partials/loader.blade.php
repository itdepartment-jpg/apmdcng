<style>

    /* ==================== */
    /* Professional Preloader */
    /* ==================== */
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #f8fafc; /* Light gray background */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.6s ease-out, visibility 0.6s ease-out;
    }

    .preloader__logo-container {
        position: relative;
        width: 120px;
        height: 120px;
        margin-bottom: 2rem;
    }

    .preloader__logo {
        width: 100%;
        height: 100%;
        object-fit: contain;
        opacity: 0;
        transform: translateY(10px);
        animation: fadeInUp 0.8s ease-out forwards 0.3s;
    }

    .preloader__progress-container {
        width: 200px;
        height: 3px;
        background: rgba(0, 119, 182, 0.1); /* Light blue background */
        border-radius: 3px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    .preloader__progress-bar {
        height: 100%;
        width: 0;
        background: linear-gradient(90deg, #0077B6 0%, #00A8E8 100%);
        border-radius: 3px;
        transition: width 0.4s ease;
    }

    .preloader__text {
        color: #0077B6;
        font-size: 0.9rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        opacity: 0;
        transform: translateY(5px);
        animation: fadeInUp 0.6s ease-out forwards 0.6s;
    }

    .preloader__water-effect {
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #00A8E8 50%, transparent 100%);
        opacity: 0;
        animation: waterRipple 2s infinite ease-in-out 1s;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes waterRipple {
        0% { transform: scaleX(0.5); opacity: 0; }
        50% { transform: scaleX(1); opacity: 0.6; }
        100% { transform: scaleX(0.5); opacity: 0; }
    }

    /* Hide content during load */
    body.loading {
        overflow: hidden;
        height: 100vh;
    }

    body.loading header,
    body.loading main,
    body.loading footer {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    body.loaded header,
    body.loaded main,
    body.loaded footer {
        opacity: 1;
        visibility: visible;
    }
</style>

<div class="preloader" id="preloader">
    <div class="preloader__logo-container">
        <img src="/images/tethyslogooo.jpg" alt="Tethys Marine" class="preloader__logo">
        <div class="preloader__water-effect"></div>
    </div>
    <div class="preloader__progress-container">
        <div class="preloader__progress-bar" id="progressBar"></div>
    </div>
    <div class="preloader__text">PREPARING YOUR MARINE SOLUTIONS</div>
</div>


<script>
    // Enhanced Professional Preloader
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        const progressBar = document.getElementById('progressBar');
        const body = document.body;

        // Simulate progress (will be replaced by actual load events)
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 10;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
            }
            progressBar.style.width = `${progress}%`;
        }, 150);

        // Hide preloader when everything is loaded
        window.addEventListener('load', () => {
            // Ensure progress completes
            progressBar.style.width = '100%';

            // Add slight delay for smooth transition
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                body.classList.remove('loading');
                body.classList.add('loaded');

                // Remove preloader from DOM after animation completes
                setTimeout(() => {
                    preloader.remove();
                }, 600);
            }, 300);
        });

        // Fallback in case load event doesn't fire
        setTimeout(() => {
            if (body.classList.contains('loading')) {
                progressBar.style.width = '100%';
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                body.classList.remove('loading');
                body.classList.add('loaded');
                setTimeout(() => {
                    preloader.remove();
                }, 600);
            }
        }, 4000); // 4 second timeout as fallback
    });

    // Optional: Real loading progress using Performance API
    if (window.performance) {
        const updateProgress = () => {
            const navTiming = performance.getEntriesByType('navigation')[0];
            if (navTiming) {
                const totalLoadTime = navTiming.loadEventEnd - navTiming.startTime;
                const currentTime = performance.now() - navTiming.startTime;
                const progress = Math.min((currentTime / totalLoadTime) * 100, 100);
                document.getElementById('progressBar').style.width = `${progress}%`;

                if (progress >= 100) {
                    clearInterval(progressInterval);
                }
            }
        };

        const progressInterval = setInterval(updateProgress, 50);
    }
</script>

