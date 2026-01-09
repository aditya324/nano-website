<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute !important;
        top: 50% !important;
        transform: translateY(-50%);
    }



    /* Base state for all slides */
    .healthcareSwiper .swiper-slide {
        transition: all 0.4s ease;
    }

    /* Blur side slides */
    .healthcareSwiper .swiper-slide-prev img,
    .healthcareSwiper .swiper-slide-next img {
        filter: blur(3px);
        opacity: 0.5;
        transform: scale(0.95);
    }

    /* Active (center) slide */
    .healthcareSwiper .swiper-slide-active img {
        filter: blur(0);
        opacity: 1;
        transform: scale(1);
    }

    /* Optional: subtle overlay for side slides */
    .healthcareSwiper .swiper-slide-prev::after,
    .healthcareSwiper .swiper-slide-next::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.25);
        pointer-events: none;
    }

    /* Remove overlay for active slide */
    .healthcareSwiper .swiper-slide-active::after {
        background: transparent;
    }

    .healthcareSwiper .swiper-slide {
        transition: all 0.4s ease;
    }

    /* Blur ALL non-active slides */
    .healthcareSwiper .swiper-slide:not(.swiper-slide-active) img {
        filter: blur(3px);
        opacity: 0.45;
        transform: scale(0.95);
    }

    /* Active (center) slide */
    .healthcareSwiper .swiper-slide-active img {
        filter: blur(0);
        opacity: 1;
        transform: scale(1);
    }
</style>
<style>
    /* Hide default swiper arrows */
    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: none !important;
    }
</style>


<body>

    <?php require "./header.php" ?>

    <section class="w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            <!-- LEFT : MAP -->
            <div class="relative h-[465px] w-full bg-gray-100">

                <!-- MAP BACKGROUND -->
                <img
                    src="./assets/banners/map-uttarahalli.png"
                    alt="Nano Hospitals Uttarahalli Map"
                    class="absolute inset-0 w-full h-full object-cover opacity-90" />

                <!-- LOGO -->
                <div class="absolute top-8 left-8 z-10">
                    <img src="./assets/logo/nano-transparent.png" class="h-12" alt="Nano Hospitals" />
                </div>

                <!-- SHARE LOCATION BUTTON -->
                <button
                    class="absolute top-4 right-6 z-10 bg-white px-5 py-2.5 rounded-full
                       text-sm text-red-500 font-medium shadow-md hover:shadow-lg 
                       transition-shadow flex items-center gap-2 border border-gray-100">
                    Share Location
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                </button>

                <!-- LOCATION PIN MARKER (on map) -->
                <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
                    <svg class="w-10 h-10 text-red-500 drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                </div>

                <!-- LOCATION CARD -->
                <div
                    class="absolute bottom-8 left-8 z-10 bg-white rounded-2xl shadow-xl
                       p-6 max-w-xs border border-gray-100">

                    <!-- Location Name with Pin -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-8 h-8 bg-red-50 rounded-full">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-lg text-gray-900">Hulimavu</h4>
                    </div>

                    <!-- Address -->
                    <div class="flex gap-3 mb-4">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            VJJ6+93H, 79, Sir M. Visvesvaraya Rd, near Arekere<br />
                            Saibaba Temple, Nyanappana Halli, DLF City Road, <br />
                            Hulimavu, Bengaluru, Karnataka 560076
                        </p>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center gap-3 pt-3 border-t border-gray-100">
                        <div class="flex items-center justify-center w-8 h-8 bg-red-50 rounded-full">
                            <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                            </svg>
                        </div>
                        <a href="tel:+910876720300" class="text-red-500 font-semibold text-base hover:text-red-600 transition-colors">
                            +91 087672 00500
                        </a>
                    </div>
                </div>

            </div>

            <!-- RIGHT : HOSPITAL IMAGE -->
            <div class="h-[465px] relative overflow-hidden">
                <img
                    src="./assets/hulimavu.png"
                    alt="Nano Hospitals Uttarahalli Building"
                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
            </div>

        </div>
    </section>
    <section class="w-full bg-[#f5f5f5] py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

                <!-- LEFT: Title + Button -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">
                        Nano Hospitals, Uttarahalli
                    </h3>

                    <a
                        href="#"
                        class="inline-flex items-center gap-2 mt-4
                 bg-white text-red-500 text-lg font-medium
                 px-6 py-4 rounded-md
                 hover:bg-red-600 transition">
                        Get Directions
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- RIGHT: Description -->
                <div class="md:col-span-2 text-sm text-gray-600 leading-relaxed">
                    <p>
                        We at Nano Hospitals recognize and firmly believe that the very essence
                        of caring and care delivery is rooted in the highly skilled and
                        committed professionals who work round the clock.
                    </p>

                    <a
                        href="#"
                        class="inline-flex items-center gap-1 mt-2
                 text-red-500 font-medium text-sm hover:underline">
                        Read more
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3 h-3"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>








    <section class="relative w-full h-[320px] md:h-[380px] lg:h-[420px] overflow-hidden">
        <!-- Background Image -->
        <img
            src="./assets/banners/hulimavu-banner.webp"
            alt="Uttarahalli 360 View"
            class="w-full h-full object-cover" />

        <!-- Overlay Button -->
        <div class="absolute inset-0 flex items-center justify-center">
            <a
                href="https://www.google.com/maps/place/Nano+Hospitals/@12.8810281,77.6101601,3a,75y,79.54h,108.05t/data=!3m8!1e1!3m6!1sCIHM0ogKEICAgID4-aaVvwE!2e10!3e11!6shttps:%2F%2Flh3.googleusercontent.com%2Fgpms-cs-s%2FAPRy3c9Gm2A7KUa2IG0dUEI73YzvMIPWzM-sW_XIA-Om1b1XJbd4-2k-1APjwLjtSmyBv_xowwNTZN_dolnkkvDjORyzgr-GXWk1RMztCNVovSdNs5cnJMm5M8-YtuBNkwRzzRFlSlSb%3Dw900-h600-k-no-pi-18.046415066368098-ya175.64226826125417-ro0-fo100!7i5376!8i2688!4m18!1m8!3m7!1s0x3bae14d5afa3d07d:0x80394a2cfa5d2528!2sNano+Hospitals!8m2!3d12.8809415!4d77.6102487!10e1!16s%2Fg%2F11s_zm93xh!3m8!1s0x3bae14d5afa3d07d:0x80394a2cfa5d2528!8m2!3d12.8809415!4d77.6102487!10e5!14m1!1BCgIgARICCAI!16s%2Fg%2F11s_zm93xh?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D"
                target="_blank"
                rel="noopener noreferrer"
                class="bg-white text-red-500 font-semibold
             px-8 py-3 rounded-full shadow-lg
             hover:bg-red-500 hover:text-white
             transition duration-300 text-sm md:text-base">
                Click here for 360° View
            </a>
        </div>
    </section>


    <section class="w-full  py-20">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-6">
                Nano Hospitals, Hulimavu Tour
            </h2>

            <!-- Description -->

            <section class="w-full  py-10">
                <div class="container mx-auto px-6">

                    <div class="relative">

                        <!-- Swiper -->
                        <div class="swiper healthcareSwiper">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h21m48s134.png" class="w-full h-[320px]  object-cover" />

                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Deepak Kumar
                                        </div> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h22m45s978.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute"></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            From Risk to Recovery: A Surgical Miracle<br />Nano Hospitals
                                        </div> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h24m46s285.png " class=w-full h-[320px] object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h25m09s540.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h28m24s049.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h29m38s762.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h30m10s843.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h30m49s355.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h31m35s311.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h32m00s868.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h36m43s038.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h39m07s921.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="relative rounded-3xl overflow-hidden">
                                        <img src="./assets/hulimavu/vlcsnap-2026-01-06-13h39m36s278.png" class="w-full h-[320px]  object-cover" />
                                        <div class="absolute "></div>

                                        <!-- <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center">
                                                ▶
                                            </div>
                                        </div>

                                        <div class="absolute bottom-6 left-6 right-6 text-white font-medium text-sm">
                                            Patient Success Story<br />Preeti Jadhav
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="swiper-button-prev !text-gray-400"></div>
                        <div class="swiper-button-next !text-gray-400"></div>

                    </div>
                </div>
            </section>

        </div>


    </section>

    <section class="w-full  py-20">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-4">
                Healthcare Facilities at Nano, Uttarahalli
            </h2>

            <!-- Description -->


            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img
                        src="./assets/uttarahalli/dialysis (1).webp"
                        alt="24×7 Dialysis"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Dialysis
                        </p>
                    </div>

                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img
                        src="./assets/uttarahalli/ambulance.webp"
                        alt="24×7 Emergency Services"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Emergency Services
                        </p>
                    </div>

                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl shadow-md overflow-hidden text-center">

                    <!-- Image (top only rounded) -->
                    <img
                        src="./assets/uttarahalli/pharmacy.webp"
                        alt="24×7 Pharmacy"
                        class="w-full h-[220px] object-cover block rounded-t-3xl" />

                    <!-- Bottom content -->
                    <div class="py-6">
                        <p class="text-gray-600 font-semibold text-lg">
                            24×7 Pharmacy
                        </p>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <section class="w-full bg-white py-24">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-14">
                Nano Hospitals Near You
            </h2>

            <!-- Cards Wrapper -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
                    <!-- Image -->
                    <div class="h-[320px] overflow-hidden">
                        <img
                            src="./assets/uttarahalli.png"
                            alt="Nano Hospital Uttarahalli"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-8 text-center space-y-4">
                        <!-- Location -->
                        <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
                            <span>📍</span>
                            <span>Uttarahalli, Bengaluru</span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
                            Nano Hospitals,<br />Uttarahalli, Bengaluru
                        </h3>

                        <!-- CTA -->
                        <a
                            href="#"
                            class="inline-flex items-center gap-3 text-gray-500 font-medium group">
                            know more
                            <span
                                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
                     transition-transform group-hover:translate-x-1">
                                →
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
                    <!-- Image -->
                    <div class="h-[320px] overflow-hidden">
                        <img
                            src="./assets/hulimavu.png"
                            alt="Nano Hospital Hulimavu"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-8 text-center space-y-4">
                        <!-- Location -->
                        <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
                            <span>📍</span>
                            <span>Hulimavu, Bengaluru</span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
                            Nano Hospitals,<br />Hulimavu, Bengaluru
                        </h3>

                        <!-- CTA -->
                        <a
                            href="#"
                            class="inline-flex items-center gap-3 text-gray-500 font-medium group">
                            know more
                            <span
                                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
                     transition-transform group-hover:translate-x-1">
                                →
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const doctorSwiper = new Swiper(".doctorSwiper", {
            loop: false,
            grabCursor: true,
            spaceBetween: 20, // gap between cards

            breakpoints: {
                0: {
                    slidesPerView: 1.2
                },
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }, // 4 cards on desktop
                1200: {
                    slidesPerView: 4
                },
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        new Swiper(".healthcareSwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 80,
                depth: 200,
                modifier: 1,
                slideShadows: false, // recommended since we're using blur
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 2.2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>