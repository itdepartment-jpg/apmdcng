<style>
    /** {*/
    /*    font-family: sans-serif;*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*    box-sizing: border-box;*/
    /*}*/

    /*body {*/
    /*    display: flex;*/
    /*    justify-content: center;*/
    /*    align-items: center;*/
    /*    min-height: 100vh;*/
    /*    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);*/
    /*    padding: 20px;*/
    /*}*/

    .card-wrapper {
        max-width: 1100px;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .swiper {
        width: 100%;
        height: 100%;
        padding: 20px 0;
    }

    .card-item {
        list-style: none;
        height: auto;
    }

    .card-link {
        user-select: none;
        display: flex;
        flex-direction: column;
        background: #fff;
        padding: 18px;
        border-radius: 12px;
        text-decoration: none;
        border: 2px solid transparent;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .card-link:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        border-color: #5372f0;
    }

    .card-image {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.5s ease;
    }

    .card-link:hover .card-image {
        transform: scale(1.05);
    }

    .badge {
        color: #5372f0;
        margin: 16px 0 8px;
        padding: 6px 12px;
        font-weight: 600;
        font-size: 0.85rem;
        background: #dde4ff;
        width: fit-content;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .card-title {
        font-size: 1rem;
        color: #000;
        font-weight: 400;
        margin: 8px 0;
        flex-grow: 1;
    }

    .card-button {
        align-self: flex-start;
        height: 35px;
        width: 35px;
        color: #5372f0;
        border-radius: 50%;
        margin-top: auto;
        background: none;
        cursor: pointer;
        border: 2px solid #5372f0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-link:hover .card-button {
        color: #fff;
        background: #5372f0;
        transform: rotate(0deg);
    }

    /* Navigation */
    .swiper-pagination-bullet {
        height: 10px;
        width: 10px;
        opacity: 0.5;
        background: #5372f0;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        width: 25px;
        border-radius: 5px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #5372f0;
        background: rgba(255, 255, 255, 0.8);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: #5372f0;
        color: white;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 1.2rem;
        font-weight: bold;
    }

    @media screen and (max-width: 768px) {
        .card-wrapper {
            padding: 20px 10px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }
</style>
<div class="card-wrapper">
    <div class="swiper">
        <ul class="swiper-wrapper">
            <!-- Slide 1 -->


            <!-- Slide 2 -->
            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>

            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>

            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>

            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>

            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="#" class="card-link block">
                    <img src="https://images.unsplash.com/photo-1720048169707-a32d6dfca0b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="card-image w-full h-64 object-cover rounded-lg shadow-md"
                         alt="Laptop">
                    <p class="badge mt-2 text-center text-sm font-medium text-gray-700">Laptop</p>
                </a>
            </li>








        </ul>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.swiper', {
            loop: true,
            speed: 700,
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    });
</script>
