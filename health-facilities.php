<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-[#F6F6F6]">
    <?php require "./header.php" ?>


    <!-- FILTER BAR -->
    <!-- FILTER HEADER -->
     <h2
                class="hidden sm:block
             text-gray-700 font-medium text-center text-xl p-5">
                All Hospital Facilities
            </h2>
    <div class="w-full  py-6 px-6">
        <div
            class="max-w-6xl mx-auto
           flex flex-col gap-4
           sm:flex-row sm:items-center sm:justify-between">
            <!-- LEFT: SEARCH -->
            <div class="relative w-full sm:w-[380px]">
                <input
                    id="serviceSearch"
                    type="text"
                    placeholder="Search for Hospital Facility"
                    class="w-full pl-5 pr-12 py-3
               rounded-full bg-white
               shadow-md
               text-sm text-gray-700
               placeholder-gray-400
               focus:outline-none focus:ring-2 focus:ring-red-400" />

                <!-- SEARCH ICON -->
                <svg
                    class="absolute right-4 top-1/2 -translate-y-1/2
               w-5 h-5 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>

            <!-- CENTER TITLE -->
            

            <!-- RIGHT: ALPHABET DROPDOWN -->
            <div class="relative">
                <select
                    id="alphabetFilter"
                    class="appearance-none
               bg-red-500 text-white
               px-6 py-3 pr-10
               rounded-full
               text-sm font-medium
               shadow-md
               cursor-pointer
               focus:outline-none">
                    <option value="">Sort By Alphabet</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                    <option value="K">K</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="N">N</option>
                    <option value="O">O</option>
                    <option value="P">P</option>
                    <option value="Q">Q</option>
                    <option value="R">R</option>
                    <option value="S">S</option>
                    <option value="T">T</option>
                    <option value="U">U</option>
                    <option value="V">V</option>
                    <option value="W">W</option>
                    <option value="X">X</option>
                    <option value="Y">Y</option>
                    <option value="Z">Z</option>
                </select>

                <!-- DROPDOWN ARROW -->
                <svg
                    class="absolute right-4 top-1/2 -translate-y-1/2
               w-4 h-4 text-white pointer-events-none"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </div>
        </div>
    </div>


    <section class="w-full py-12  grid lg:grid-cols-2 grid-cols-1 gap-10 px-6">

        <!-- 24x7 Emergency -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/24x7-emergency.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="24x7 Emergency">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">24×7 Emergency</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Round-the-clock emergency medical care for critical situations.
                    </p>
                    <a href="./twenty-four-seven-services.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- MRI Scan -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/mri-scan (2).png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="MRI Scan">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">MRI Scan</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        High-resolution MRI imaging for accurate diagnosis.
                    </p>
                    <a href="./mri-scan.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- 24x7 Dialysis -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/24x7-dialysis.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="24x7 Dialysis">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">24×7 Dialysis</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Continuous dialysis care with modern equipment.
                    </p>
                    <a href="./dialysis.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pharmacy -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/24x7-pharma.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Pharmacy">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">24×7 Pharmacy</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Round-the-clock availability of prescribed medicines.
                    </p>
                    <a href="./t" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Orthopedic ICU -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/orthopedic.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Orthopedic ICU">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Orthopedic ICU</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Specialized intensive care for orthopedic patients.
                    </p>
                    <a href="./icu.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ICU / NICU -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/icu (2).png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="ICU NICU">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">ICU / NICU</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Advanced intensive and neonatal critical care units.
                    </p>
                    <a href="./icu.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Labour Suite -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/labour-suite.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Labour Suite">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Labour Suite</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Modern labour suites designed for safe and comfortable childbirth.
                    </p>
                    <a href="./labour-room.php" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Advanced Lab -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/advanced-lab.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Advanced Lab">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Advanced Laboratory</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Fully automated laboratory services for accurate and timely reports.
                    </p>
                    <a href="" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- 2D Echo -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/echo.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="2D Echo">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">2D Echo</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Non-invasive cardiac imaging for heart function assessment.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dedicated Specialty OTs -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/dedicated-ot.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Dedicated Specialty OTs">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Dedicated Specialty OTs</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Fully equipped operation theatres for specialized surgeries.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Digital X-Ray -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/x-ray (2).png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Digital X-Ray">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Digital X-Ray</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        High-speed digital radiography with minimal radiation exposure.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- EEG -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/eeg.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="EEG">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">EEG</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Electroencephalography for accurate brain activity monitoring.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ECG -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/ecg.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="ECG">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">ECG</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Quick and reliable electrocardiogram testing.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Intensifier -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/image-internsifier.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Image Intensifier">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Image Intensifier</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Real-time imaging support during surgical procedures.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Post-operative Recovery Units -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/post-operative-recovery.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Post-operative Recovery Units">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">
                        Post-operative Recovery Units
                    </h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Continuous monitoring and care after surgical procedures.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Stimawell -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/stimawell.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Stimawell">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">Stimawell</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Advanced pain management and muscle stimulation therapy.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Neonatal Resuscitation Setup -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/neonatal.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="Neonatal Resuscitation Setup">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">
                        Neonatal Resuscitation Setup
                    </h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Specialized life-saving equipment for newborn emergencies.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- NABH / Quality & Compliance -->
        <div class="px-4 service-card">
            <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full lg:w-[350px] flex-shrink-0 order-1 lg:order-2">
                    <img src="./assets/health-faculties/nabh.png"
                        class="w-full h-[220px] sm:h-[260px] lg:h-full object-cover"
                        alt="NABH Compliance">
                </div>
                <div class="p-6 lg:p-8 flex flex-col justify-between order-2 lg:order-1">
                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900">
                        NABH / Quality & Compliance Markers
                    </h3>
                    <p class="mt-3 text-gray-600 leading-relaxed max-w-md">
                        Accredited healthcare standards ensuring patient safety and quality.
                    </p>
                    <a href="#" class="mt-5 inline-flex items-center gap-2 text-red-500 text-sm font-medium hover:underline">
                        Know More <span class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center text-white text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>


    </section>


    <script>
        const searchInput = document.getElementById("serviceSearch");
        const alphabetFilter = document.getElementById("alphabetFilter");
        const cards = document.querySelectorAll(".service-card");

        function filterCards() {
            const searchValue = searchInput.value.toLowerCase();
            const alphaValue = alphabetFilter.value;

            cards.forEach(card => {
                const title = card.querySelector("h3").innerText.trim();
                const titleLower = title.toLowerCase();

                const matchesSearch = titleLower.includes(searchValue);
                const matchesAlpha =
                    alphaValue === "" || title.startsWith(alphaValue);

                if (matchesSearch && matchesAlpha) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });
        }

        searchInput.addEventListener("input", filterCards);
        alphabetFilter.addEventListener("change", filterCards);
    </script>

</body>

</html>