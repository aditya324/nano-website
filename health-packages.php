<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "./header.php" ?>

    <section class="relative w-full min-h-[520px]">
        <!-- Background Image -->
        <img
            src="./assets/banners/health-package-banner.png"
            alt="Complete Health Packages"
            class="absolute inset-0 w-full h-full object-cover" />

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content Wrapper -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">

                <!-- LEFT CONTENT (CENTERED) -->
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Complete Health Packages
                    </h1>
                    <p class="mt-2 text-lg">
                        for proactive, preventive care.
                    </p>
                </div>

                <!-- RIGHT FORM -->
                <div class="flex lg:justify-end justify-center items-center">
                    <div class="w-full max-w-sm bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Request a Call Back
                        </h3>

                        <form class="space-y-4">
                            <div>
                                <label class="text-sm text-gray-600">Name *</label>
                                <input
                                    type="text"
                                    placeholder="Enter Your Name"
                                    class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-400" />
                            </div>

                            <div>
                                <label class="text-sm text-gray-600">Mobile Number *</label>
                                <input
                                    type="tel"
                                    placeholder="Enter Your Mobile Number"
                                    class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-400" />
                            </div>

                            <div>
                                <label class="text-sm text-gray-600">Email *</label>
                                <input
                                    type="email"
                                    placeholder="Enter Your Email"
                                    class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-400" />
                            </div>

                            <div>
                                <label class="text-sm text-gray-600">Message *</label>
                                <textarea
                                    rows="3"
                                    placeholder="Enter Your Message"
                                    class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2.5 rounded-full transition">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-[#F5F5F5] py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                <!-- Left Title -->
                <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                    About Health Packages
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Health Packages at Nano Hospitals are designed to make preventive healthcare
                        simple, affordable, and accessible.
                        <span id="moreText" class="hidden">
                            These comprehensive checkup packages help detect health issues early
                            through a wide range of diagnostic tests, including blood investigations,
                            organ-specific screenings, and lifestyle risk assessments. They are curated
                            by experienced clinicians to suit different age groups and health needs.
                        </span>
                    </p>

                    <!-- Read More -->
                    <button
                        type="button"
                        onclick="toggleReadMore()"
                        class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline">
                        <span id="readMoreLabel">Read More</span>
                        <span
                            id="readMoreArrow"
                            class="inline-flex items-center justify-center w-4 h-4 rounded-full
                               bg-red-500 text-white text-xs transition-transform duration-300">
                            ›
                        </span>
                    </button>
                </div>

            </div>
        </div>
    </section>


    <section class="container mx-auto px-4">
        <h3 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap text-center p-5">Popular Health Packages</h3>
        <div class="grid  lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-8">
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400">
                <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/basic-health-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Basic Health Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./basic-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/pre-employment.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Pre Employment Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 4400/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 2600/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./pre-employment.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/master-health-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Master Health Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./master-health-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/executive-health-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Executive Health Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./executive-health-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/diabetic-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Diabetic Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./diabetic-health-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>

            </div>


            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/senior-citizen-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Senior Citizen Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./senior-citizen-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/hearty-health-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Healthy Heart Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 4400/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 2600/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./hearty-health-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/all-in-onepackage.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        All In One Health Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./all-in-one-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/cancer-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Cancer Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./basic-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/fitness-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Fitness Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./basic-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>

            </div>
            <div
                class="group w-[280px] bg-white rounded-3xl p-3
         border border-dashed border-gray-300
         shadow-md
         transition-all duration-300 ease-out
         hover:-translate-y-2
         hover:shadow-2xl
         hover:border-red-400"> <!-- IMAGE -->
                <div class="rounded-2xl overflow-hidden">
                    <img
                        src="./assets/health-packages/fertility-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[160px] object-cover" />
                </div>

                <!-- CONTENT -->
                <div class="text-center mt-4 px-2">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Fertility Package
                    </h3>

                    <!-- PRICE -->
                    <div class="flex justify-center items-center gap-3 mt-2">
                        <span class="text-gray-400 line-through text-sm">
                            ₹ 2000/-
                        </span>
                        <span class="text-red-500 font-semibold text-lg">
                            ₹ 1400/-
                        </span>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex justify-center gap-4 mt-4">
                        <a
                            href="#"
                            class="px-3 py-2 text-sm font-medium rounded-full
               bg-red-500 text-white hover:bg-red-600 transition">
                            Book Now
                        </a>

                        <a
                            href="./basic-package.php"
                            class="px-5 py-2 text-sm font-medium rounded-full
               border border-gray-300 text-gray-600
               hover:bg-gray-100 transition">
                            Know More
                        </a>
                    </div>
                </div>
            </div>



        </div>

    </section>

    <section class="w-full bg-[#E5E5E5] py-28 mt-20">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-12">
                Why Nano Health Packages
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <!-- Clock Icon -->
                        <img src="./assets/icons/24-hours.png" alt="">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Highly advanced labs,<br />
                        operational 24x7
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <!-- Microscope Icon -->
                        <img src="./assets/icons/microscope.png" alt="">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        NABL accredited, world-class<br />
                        pathology lab
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <!-- Test Tube Icon -->
                        <img src="./assets/icons/test-tube.png" alt="">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Expansive test menu with nationally
                        and internationally recommended tests
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.15)]
               px-6 py-8 text-center">
                    <div class="flex justify-center mb-5">
                        <!-- Flask Icon -->
                        <img src="./assets/icons/lab.png" alt="">
                    </div>
                    <p class="text-sm font-medium text-gray-700 leading-relaxed">
                        Faster turnaround time for timely
                        diagnosis of severe/chronic conditions
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-[#F2F2F2]">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2">

            <!-- LEFT CONTENT -->
            <div class="flex items-center px-8 lg:px-16 py-14">
                <div class="max-w-md">
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        A Complete Range Diagnostic<br />
                        Tests, Available Individually at<br />
                        Nano Hospitals at Affordable Costs
                    </p>

                    <a
                        href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-6 py-3 rounded-full
                 text-sm font-semibold
                 hover:bg-red-600 transition">
                        Know More
                    </a>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative h-[320px] lg:h-auto">
                <img
                    src="./assets/banners/range-diagnostic.png"
                    alt="Diagnostic Tests"
                    class="absolute inset-0 w-full h-full object-cover" />
            </div>

        </div>
    </section>
    <script>
        function toggleReadMore() {
            const moreText = document.getElementById("moreText");
            const label = document.getElementById("readMoreLabel");
            const arrow = document.getElementById("readMoreArrow");

            const isHidden = moreText.classList.contains("hidden");

            moreText.classList.toggle("hidden");
            label.textContent = isHidden ? "Read Less" : "Read More";
            arrow.style.transform = isHidden ? "rotate(90deg)" : "rotate(0deg)";
        }
    </script>


</body>

</html>