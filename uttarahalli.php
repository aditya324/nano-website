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
        background: black;
    }

    .healthcareSwiper .swiper-slide {
        transition: all 0.4s ease;
    }

    /* Blur ALL non-active slides */
    .healthcareSwiper .swiper-slide:not(.swiper-slide-active) img {
        filter: blur(3px);
        opacity: 0.30;
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

                    id="openShareModal"
                    class="absolute top-4 right-6 z-10 bg-red-500 px-5 py-2.5 rounded-full
           text-base text-white font-medium shadow-md hover:shadow-lg 
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
                        <h4 class="font-bold text-lg text-gray-900">Uttarahalli</h4>
                    </div>

                    <!-- Address -->
                    <div class="flex gap-3 mb-4">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            12/A, Uttarahalli Main Rd, near Bharat Petrol Bunk,<br />
                            Chikkallasandra, Uttarahalli Hobli, Bengaluru,<br />
                            Karnataka 560061
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
                            +91 087672 00300
                        </a>
                    </div>
                </div>

            </div>

            <!-- RIGHT : HOSPITAL IMAGE -->
            <div class="h-[465px] relative overflow-hidden">
                <img
                    src="./assets/uttarahalli.png"
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

                    <!-- Hidden Content -->
                    <div id="moreContent" class="hidden mt-2">
                        <p>
                            Our teams include experienced doctors, trained nursing staff,
                            technicians, and support personnel who work together to deliver
                            compassionate, ethical, and patient-centric healthcare services
                            across all departments.
                        </p>
                    </div>

                    <!-- Toggle Button -->
                    <button
                        id="readMoreBtn"
                        class="inline-flex items-center gap-1 mt-2
               text-red-500 font-medium text-sm hover:underline"
                        onclick="toggleReadMore()">
                        <span id="btnText">Read more</span>
                        <svg
                            id="arrowIcon"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3 h-3 transition-transform duration-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>


            </div>
        </div>
    </section>



    <!-- <section class="w-full py-12 xl:px-40 ">
        <h3 class="text-xl text-center font-semibold mb-5 text-[#848484] mt-10">Medical Experts at Nano, Uttarahalli</h3>
        <div class=" mx-auto ">
            <div class="swiper doctorSwiper">
                <div class="swiper-wrapper ">

                
                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>

          
                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>


                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>

               
                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article
                            class="w-full h-full rounded-2xl bg-[#F5F5F5]
         shadow-[0_1px_4px_rgba(0,0,0,0.06)]
         px-6 pt-8 pb-6 flex flex-col items-center">
                            <div
                                class="w-28 h-28 rounded-full   overflow-hidden flex items-center justify-center">
                                <img src="./assets/doctors/Ellipse 1 (1).png" alt="Dr Prasanna B"
                                    class="w-full h-full object-cover" />
                            </div>

                            <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                                Dr Prasanna B
                            </h3>
                            <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
                            <p class="text-sm text-[#FA424A] font-medium mt-1 text-center">
                                Physician
                            </p>

                            <div class="flex w-full mt-6 text-sm font-medium">
                                <button
                                    class="flex-1 py-2.5 bg-[#FA424A] text-white rounded-l-xl">
                                    view profile
                                </button>
                                <button
                                    class="flex-1 py-2.5 border border-[#FA424A] text-[#FA424A] bg-white rounded-r-xl">
                                    Book Appointment
                                </button>
                            </div>
                        </article>
                    </div>
                </div>

           
                <div class="swiper-button-prev !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
                    <img src="./assets/icons/arrow.png" class="w-5 rotate-180" alt="">
                </div>

                <div class="swiper-button-next !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
                    <img src="./assets/icons/arrow.png" class="w-5" alt="">
                </div>

            
                <div class="swiper-pagination mt-6"></div>

            </div>
        </div>
    </section> -->




    <section class="relative w-full h-[969px] overflow-hidden">
        <!-- Background Image -->
        <img
            src="./assets/banners/uttarahalli-3d.png"
            alt="Uttarahalli 360 View"
            class="w-full h-full object-cover" />

        <!-- Overlay Button -->
        <div class="absolute inset-0 flex items-center justify-center">
            <a
                href="https://www.google.com/maps/place/Samsung+Global+Acess/@12.9069772,77.5462102,3a,75y,311.18h,97.41t/data=!3m7!1e1!3m5!1sNF0FPicy84ARCjMf2dKLwA!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D-7.408912692171029%26panoid%3DNF0FPicy84ARCjMf2dKLwA%26yaw%3D311.17835234891965!7i13312!8i6656!4m16!1m8!3m7!1s0x3bae3f428d8366ad:0x5d5393046c783395!2sNano+Hospitals+Uttarahalli!8m2!3d12.9071043!4d77.5460389!10e5!16s%2Fg%2F11sbgs_ymp!3m6!1s0x3bae3f1f92ea3ec5:0xc2f9f6bd8d92907d!8m2!3d12.9070461!4d77.5460933!10e5!16s%2Fg%2F11m_rhf33l?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoKLDEwMDc5MjA2N0gBUAM%3D"
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
                Nano Hospitals, Uttarahalli Tour
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h48m30s534.webp" class="w-full h-[320px]  object-cover" />

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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h50m04s962.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m04s040.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m41s691.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h51m49s397.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m27s246.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m34s931.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h52m41s452.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m07s646.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m21s991.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h53m37s210.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h54m13s003.webp" class="w-full h-[320px]  object-cover" />
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
                                        <img src="./assets/uttarahalli/gallary-uttarahalli/vlcsnap-2026-01-06-13h54m52s344.webp" class="w-full h-[320px]  object-cover" />
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
    <!-- Share Modal -->
    <!-- Share Modal -->
    <!-- Share Modal -->
    <div id="shareModal"
        class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40">

        <div class="bg-white rounded-2xl w-[380px] p-6 relative shadow-xl">
            <!-- Close -->
            <button id="closeShareModal"
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">
                ×
            </button>

            <h3 class="text-center text-lg font-semibold text-gray-700 mb-5">
                Share Profile Via
            </h3>

            <div class="flex justify-center gap-4">

                <!-- Copy Link -->
                <button id="copyLink"
                    class="w-11 h-11 rounded-full bg-gray-700 flex items-center justify-center hover:scale-105 transition">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M10 13a5 5 0 007.07 0l1.41-1.41a5 5 0 00-7.07-7.07L10 5m4 6a5 5 0 01-7.07 0L5.5 9.5a5 5 0 017.07-7.07L14 3" />
                    </svg>
                </button>

                <!-- Facebook -->
                <a id="fbShare" target="_blank"
                    class="w-11 h-11 rounded-full bg-blue-600 flex items-center justify-center hover:scale-105 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V11h2.3l-.4 3h-1.9v7A10 10 0 0022 12" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a id="liShare" target="_blank"
                    class="w-11 h-11 rounded-full bg-blue-700 flex items-center justify-center hover:scale-105 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.4 20.4h-3.5v-5.4c0-1.3 0-3-1.8-3s-2 1.4-2 2.9v5.5H9.6V9h3.4v1.6h.1c.5-.9 1.6-1.8 3.4-1.8 3.6 0 4.3 2.4 4.3 5.4v6.2zM5.3 7.4a2 2 0 110-4 2 2 0 010 4zM7 20.4H3.6V9H7v11.4z" />
                    </svg>
                </a>

                <!-- X / Twitter -->
                <a id="xShare" target="_blank"
                    class="w-11 h-11 rounded-full bg-black flex items-center justify-center hover:scale-105 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.9 2H22l-7.4 8.5L23 22h-6.6l-5.2-6.5L5.7 22H2l7.9-9.1L1 2h6.8l4.7 5.9L18.9 2z" />
                    </svg>
                </a>

                <!-- WhatsApp -->
                <!-- WhatsApp -->
                <a id="waShare" target="_blank"
                    class="w-11 h-11 rounded-full bg-green-500 flex items-center justify-center hover:scale-105 transition">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        class="w-6 h-6 fill-white">
                        <path d="M19.11 17.53c-.27-.14-1.61-.79-1.86-.88-.25-.09-.43-.14-.61.14-.18.27-.7.88-.86 1.06-.16.18-.32.2-.59.07-.27-.14-1.15-.42-2.19-1.34-.81-.72-1.36-1.61-1.52-1.88-.16-.27-.02-.42.12-.55.13-.13.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.34-.01-.52-.01-.18 0-.48.07-.73.34-.25.27-.95.93-.95 2.27s.98 2.64 1.11 2.82c.14.18 1.93 2.95 4.69 4.14.66.28 1.17.45 1.57.57.66.21 1.26.18 1.73.11.53-.08 1.61-.66 1.84-1.3.23-.64.23-1.19.16-1.3-.07-.11-.25-.18-.52-.32zM16 3C8.82 3 3 8.82 3 16c0 2.3.6 4.45 1.65 6.31L3 29l6.86-1.61A12.9 12.9 0 0016 29c7.18 0 13-5.82 13-13S23.18 3 16 3z" />
                    </svg>

                </a>


            </div>
        </div>
    </div>


    <script>
        const openBtn = document.getElementById('openShareModal');
        const closeBtn = document.getElementById('closeShareModal');
        const modal = document.getElementById('shareModal');

        const pageUrl = encodeURIComponent(window.location.href);
        const text = encodeURIComponent("Check out this hospital location");

        // Set share links
        document.getElementById('waShare').href =
            `https://wa.me/?text=${text}%20${pageUrl}`;

        document.getElementById('twShare').href =
            `https://twitter.com/intent/tweet?text=${text}&url=${pageUrl}`;

        document.getElementById('fbShare').href =
            `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;

        document.getElementById('mailShare').href =
            `mailto:?subject=${text}&body=${pageUrl}`;

        // Open modal
        openBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        // Close modal
        closeBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

        // Close on background click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    </script>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const openBtn = document.getElementById('openShareModal');
            const closeBtn = document.getElementById('closeShareModal');
            const modal = document.getElementById('shareModal');

            if (!openBtn || !modal) {
                console.error('Share modal elements missing');
                return;
            }

            openBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });

            closeBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const pageUrl = encodeURIComponent(window.location.href);
            const text = encodeURIComponent('Check this out');

            document.getElementById('waShare').href =
                `https://wa.me/?text=${text}%20${pageUrl}`;

            document.getElementById('xShare').href =
                `https://twitter.com/intent/tweet?text=${text}&url=${pageUrl}`;

            document.getElementById('fbShare').href =
                `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;

            document.getElementById('liShare').href =
                `https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}`;

            document.getElementById('copyLink').onclick = () => {
                navigator.clipboard.writeText(window.location.href);
                alert('Link copied!');
            };

        });
    </script>



</body>

</html>