<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Modal Section</title>

    <!-- Tailwind CSS (include only if not already in project) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Modal Animation -->
    <style>
        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-50 pt-24">

    <?php require "./header.php"; ?>
    <div class="max-w-3xl mx-auto mt-20">
        <div class="relative">
            <input
                id="videoSearch"
                type="text"
                placeholder="Search for Health Video..."
                class="w-full rounded-full border border-gray-300 px-5 py-3 pl-12
                   focus:outline-none focus:ring-2 focus:ring-red-500" />

            <!-- Search Icon -->
            <svg
                class="absolute left-4 top-9 -translate-y-1/2 text-gray-400 w-5 h-5"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
    <section class="w-full py-16">
        <div class="container mx-auto px-4">

            <h2 class="text-2xl md:text-3xl font-semibold text-center text-[#737373] mb-12">
                Hear from Us to Stay Healthy
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="mau8AAEBKS8">
                    <div class="relative">
                        <img src="./assets/thumbnail.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Greetings From Nano Hospitals | Dr. Mohan M.R
                        </h3>
                    </div>
                </div>


                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="P0yS5rBA3w4">
                    <div class="relative">
                        <img src="./assets/cirvical-cancer.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Cervical Cancer Prevention | Dr. Sanjana Kumar
                        </h3>
                    </div>
                </div>


                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SEARCH BAR -->


    <section class="w-full py-12 relative  container mx-auto">


        <h2 class="text-2xl md:text-3xl font-semibold text-center text-[#737373] mb-12">
            Our Latest Reels
        </h2>

        <div class="swiper storySwiper px-16">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 1.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 2.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 3.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 4.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 5.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Navigation -->
        <div
            class="swiper-button-prev !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

        <div
            class="swiper-button-next !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

    </section>



    <!-- MODAL -->
    <div id="videoModal"
        class="fixed inset-0 bg-black/70 hidden flex items-center justify-center z-30 px-4">

        <div class="relative bg-black rounded-xl shadow-2xl w-full max-w-3xl"
            style="animation: scaleIn .25s ease-out">

            <button id="closeModal"
                class="absolute -top-4 -right-4 bg-white w-10 h-10 rounded-full
                       text-black text-2xl shadow-lg z-50">
                &times;
            </button>

            <div class="relative w-full aspect-video">
                <iframe id="videoIframe"
                    class="absolute inset-0 w-full h-full rounded-xl"
                    src=""
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <section class="w-full py-16">
        <div class="container mx-auto px-4">

            <h2 class="text-2xl md:text-3xl font-semibold text-center text-[#737373] mb-12">
                All Doctor Videos
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="allDoctorVideos">

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="mau8AAEBKS8"
                    data-title="Greetings From Nano Hospitals Dr Mohan">
                    <div class="relative">
                        <img src="./assets/thumbnail.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Greetings From Nano Hospitals | Dr. Mohan M.R
                        </h3>
                    </div>
                </div>

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="P0yS5rBA3w4"
                    data-title="Cervical Cancer Prevention Dr. Sanjana Kumar">
                    <div class="relative">
                        <img src="./assets/cirvical-cancer.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Cervical Cancer Prevention | Dr. Sanjana Kumar
                        </h3>
                    </div>
                </div>

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM"
                    data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM"
                    data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM" data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM" data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM" data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM" data-title="Early Signs of Labor Dr. Ramya K S">
                    <div class="relative">
                        <img src="./assets/signs-of-labour-pain.png"
                            class="w-full h-56 object-cover"
                            alt="">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>
                        <img src="./assets/logo/nano-logo.png"
                            class="absolute top-3 right-3 w-14"
                            alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const searchInput = document.getElementById("videoSearch");
            const videoContainer = document.getElementById("allDoctorVideos");
            const videoCards = videoContainer.querySelectorAll(".video-card");

            searchInput.addEventListener("input", () => {
                const query = searchInput.value.toLowerCase().trim();

                videoCards.forEach(card => {
                    const title = card.dataset.title?.toLowerCase() || "";
                    card.style.display = title.includes(query) ? "block" : "none";
                });
            });
        });
    </script>




    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const cards = document.querySelectorAll(".video-card");
            const modal = document.getElementById("videoModal");
            const iframe = document.getElementById("videoIframe");
            const closeBtn = document.getElementById("closeModal");

            cards.forEach(card => {
                card.addEventListener("click", () => {
                    iframe.src = `https://www.youtube.com/embed/${card.dataset.videoId}?autoplay=1`;
                    modal.classList.remove("hidden");
                    document.body.style.overflow = "hidden";
                });
            });

            function closeModal() {
                modal.classList.add("hidden");
                iframe.src = "";
                document.body.style.overflow = "";
            }

            closeBtn.addEventListener("click", closeModal);

            modal.addEventListener("click", e => {
                if (e.target === modal) closeModal();
            });

            document.addEventListener("keydown", e => {
                if (e.key === "Escape") closeModal();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper(".storySwiper", {
            slidesPerView: "auto",
            spaceBetween: 24,
            loop: true,
            grabCursor: true,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });
    </script>
</body>

</html>