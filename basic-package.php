<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "./header.php" ?>

    <section class="w-full bg-white py-14">
        <div class="container mx-auto px-6">

            <div
                class="flex flex-col lg:flex-row items-center
             gap-10 lg:gap-14">

                <!-- LEFT IMAGE -->
                <div class="w-full lg:w-1/2">
                    <img
                        src="./assets/health-packages/basic-health-package.png"
                        alt="Basic Health Package"
                        class="w-full h-[493px] rounded-2xl object-cover" />
                </div>

                <!-- RIGHT CONTENT -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                        Basic Health Package
                    </h3>

                    <p class="text-sm text-gray-500 mb-3">
                        Male/Female
                    </p>

                    <p class="text-xl font-semibold text-[#FA424A] mb-6">
                        ₹ 1400/-
                    </p>

                    <a
                        href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-8 py-3 rounded-full
                 text-sm font-semibold
                 hover:bg-red-600 transition">
                        Book Now
                    </a>
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
                        Health Packages at Nano Hospitals are designed to make preventive healthcare simple, affordable, and accessible. These comprehensive checkup packages help detect health issues early through a wide range of diagnostic tests, including blood investigations, organ-specific screenings, and lifestyle risk assessments.
                    </p>

                    <!-- Read More -->
                    <a
                        href="#"
                        class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline">
                        Read More
                        <span
                            class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">
                            ›
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section class="w-full py-10 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6">

            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- CARD 01 -->
                <div
                    class="bg-white rounded-2xl
               shadow-[0_6px_18px_rgba(0,0,0,0.15)]
               p-6 md:p-8 w-full">

                    <!-- HEADER -->
                    <div class="flex items-start gap-4 mb-5">
                        <div
                            class="bg-[#FA424A] text-white
                   w-10 h-10 flex items-center justify-center
                   rounded-md text-sm font-semibold">
                            01
                        </div>

                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            Complete Blood Count<br />
                            <span class="text-gray-500 font-medium">(CBC)</span>
                        </h3>
                    </div>

                    <!-- LIST -->
                    <ul class="space-y-2 text-sm text-gray-600 pl-4">
                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Haemoglobin (Hb)
                        </li>
                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Differential Count (DC) including Lymphocytes, Monocytes, Neutrophils, Eosinophils, Basophils
                        </li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Platelet Count</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Packed Cell Volume (PCV)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Red Blood Cell Count (RBC)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>MCV (Mean Corpuscular Volume)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>MCH (Mean Corpuscular Hemoglobin)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>MCHC (Mean Corpuscular Hemoglobin Concentration)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Hemoglobin Concentration</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Red Cell Distribution Width (RDW)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Total WBC Count (TC)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>ESR</li>
                    </ul>
                </div>

                <!-- CARD 02 -->
                <div
                    class="bg-white rounded-2xl
               shadow-[0_6px_18px_rgba(0,0,0,0.15)]
               p-6 md:p-8 w-full">

                    <!-- HEADER -->
                    <div class="flex items-start gap-4 mb-5">
                        <div
                            class="bg-[#FA424A] text-white
                   w-10 h-10 flex items-center justify-center
                   rounded-md text-sm font-semibold">
                            02
                        </div>

                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            Liver Function Test<br />
                            <span class="text-gray-500 font-medium">(LFT)</span>
                        </h3>
                    </div>

                    <!-- LIST -->
                    <ul class="space-y-2 text-sm text-gray-600 pl-4">
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Total Bilirubin</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Direct Bilirubin</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Indirect Bilirubin</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Total Protein</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Serum Albumin</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>Serum Globulin</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>A/G Ratio</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>SGOT (AST)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>SGPT (ALT)</li>
                        <li class="relative pl-3"><span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>ALKP (Alkaline Phosphatase)</li>
                    </ul>
                </div>
                <div
                    class="bg-white rounded-2xl
         shadow-[0_6px_18px_rgba(0,0,0,0.15)]
         p-6 md:p-8 w-full">

                    <!-- HEADER -->
                    <div class="flex items-start gap-4 mb-5">
                        <div
                            class="bg-[#FA424A] text-white
             w-10 h-10 flex items-center justify-center
             rounded-md text-sm font-semibold">
                            03
                        </div>

                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            Renal Profile
                        </h3>
                    </div>

                    <!-- LIST -->
                    <ul class="space-y-2 text-sm text-gray-600 pl-4">
                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Urea
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Creatinine
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Sodium
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Chloride
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Potassium
                        </li>
                    </ul>

                </div>
                <div
                    class="bg-white rounded-2xl
         shadow-[0_6px_18px_rgba(0,0,0,0.15)]
         p-6 md:p-8 w-full">

                    <!-- HEADER -->
                    <div class="flex items-start gap-4 mb-5">
                        <div
                            class="bg-[#FA424A] text-white
             w-10 h-10 flex items-center justify-center
             rounded-md text-sm font-semibold">
                            04
                        </div>

                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            Lipid Profile
                        </h3>
                    </div>

                    <!-- LIST -->
                    <ul class="space-y-2 text-sm text-gray-600 pl-4">
                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Total Cholesterol
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Direct HDL
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            LDL
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            VLDL
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Serum Triglycerides
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            LDL/HDL Ratio
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Cholesterol/HDL Ratio
                        </li>
                    </ul>

                </div>
                <div
                    class="bg-white rounded-2xl
         shadow-[0_6px_18px_rgba(0,0,0,0.15)]
         p-6 md:p-8 w-full">

                    <!-- HEADER -->
                    <div class="flex items-start gap-4 mb-5">
                        <div
                            class="bg-[#FA424A] text-white
             w-10 h-10 flex items-center justify-center
             rounded-md text-sm font-semibold">
                            05
                        </div>

                        <h3 class="text-lg font-semibold text-gray-800 leading-snug">
                            Diabetes Profile
                        </h3>
                    </div>

                    <!-- LIST -->
                    <ul class="space-y-2 text-sm text-gray-600 pl-4">
                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Fasting Blood Sugar (FBS)
                        </li>

                        <li class="relative pl-3">
                            <span class="absolute left-0 top-2 w-1.5 h-1.5 bg-[#FA424A] rounded-full"></span>
                            Postprandial Blood Sugar (PPBS)
                        </li>
                    </ul>

                </div>


            </div>


        </div>
    </section>

    <section class="container mx-auto px-4">
        <h3 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap text-center p-5">Related Health Packages</h3>
        <div class="grid  lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-8">
            
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






        </div>

    </section>
</body>

</html>