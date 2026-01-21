<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory & Diagnostic Services – Nano Hospitals</title>
    <style>
        .pill-btn {
            padding: 8px 18px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 500;
            background: #f3f4f6;
            color: #374151;
            transition: all 0.2s ease;
            cursor: pointer;
            white-space: nowrap;
        }

        .pill-btn:hover {
            background: #fee2e2;
            color: #dc2626;
        }

        .pill-btn.active {
            background: #dc2626;
            color: #ffffff;
        }
    </style>
</head>

<body>
<?php require "./header.php" ?>

<!-- HERO -->
<section class="relative w-full min-h-[520px]">
    <img src="./assets/banners/health-package-banner.png" alt="Laboratory and Diagnostic Services"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Laboratory &amp; Diagnostic Services
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Book Diagnostic Tests
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="w-full bg-[#F5F5F5] py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
            <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                About Laboratory & Diagnostic Services
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Accurate diagnosis is the foundation of effective treatment.
                    At Nano Hospitals, Laboratory & Diagnostic Services deliver reliable,
                    timely, and comprehensive testing across all medical specialties.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        Equipped with advanced technology and guided by experienced
                        pathologists, the department ensures precision, safety,
                        and clinical relevance in every report.
                    </p>
                    <p class="mt-2">
                        Diagnostic services support preventive care, early disease detection,
                        treatment planning, and long-term monitoring.
                    </p>
                </div>

                <button id="readMoreBtn" type="button"
                    class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline focus:outline-none">
                    Read More
                    <span
                        class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- PILLS -->
<div class="sticky top-0 z-50 bg-white border-b">
    <div class="container mx-auto px-4 py-3">
        <div class="flex gap-3 overflow-x-auto" id="pillNav">
            <button class="pill-btn active" data-target="overview">Overview</button>
            <button class="pill-btn" data-target="workflow">Services</button>
            <button class="pill-btn" data-target="delivery">Risks & Causes</button>
            <button class="pill-btn" data-target="benefits">Diagnosis</button>
            <button class="pill-btn" data-target="risks">Treatment Support</button>
            <button class="pill-btn" data-target="advantages">Outcomes</button>
            <button class="pill-btn" data-target="faqs">Why Choose Us</button>
        </div>
    </div>
</div>

<!-- OVERVIEW -->
<section id="overview" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Introduction to Laboratory & Diagnostic Services
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Laboratory diagnostics play a vital role in identifying diseases,
            guiding treatment decisions, and monitoring patient progress.
            Accurate and timely test results significantly improve clinical outcomes.
        </p>
    </div>
</section>

<!-- SERVICES -->
<section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Services Offered
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Pathology – blood, urine, and stool analysis</li>
            <li>Biochemistry – liver, kidney, and thyroid function tests</li>
            <li>Microbiology – cultures for infection detection</li>
            <li>Hematology – complete blood counts and clotting studies</li>
            <li>Histopathology – biopsy analysis for cancer detection</li>
            <li>Immunology – allergy and autoimmune testing</li>
            <li>Molecular diagnostics – genetic and viral testing</li>
        </ul>
    </div>
</section>

<!-- RISKS & CAUSES -->
<section id="delivery" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Risks and Causes for Diagnostic Testing
        </h2>

        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
            <li>Delayed diagnosis of infections, cancers, or metabolic disorders</li>
            <li>Progression of disease without proper monitoring</li>
            <li>Increased risk of complications due to late intervention</li>
        </ul>

        <p class="text-gray-700">
            Diagnostic testing is required for chronic diseases, acute illness,
            preventive screening, and monitoring response to ongoing treatment.
        </p>
    </div>
</section>

<!-- DIAGNOSIS -->
<section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Diagnostic Process
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Sample collection including blood, urine, and tissue</li>
            <li>Automated analysis using advanced laboratory equipment</li>
            <li>Expert interpretation by qualified pathologists</li>
            <li>Integration of results with clinical findings</li>
        </ul>
    </div>
</section>

<!-- TREATMENT SUPPORT -->
<section id="risks" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Treatment Support
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Guiding antibiotic selection through culture sensitivity testing</li>
            <li>Supporting cancer treatment based on biopsy results</li>
            <li>Monitoring diabetes control using HbA1c</li>
            <li>Optimising hormone therapy through laboratory values</li>
        </ul>
    </div>
</section>

<!-- OUTCOMES -->
<section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Recovery and Outlook
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Early detection improves outcomes in cancer and chronic disease</li>
            <li>Regular monitoring ensures effective treatment response</li>
            <li>Preventive screening reduces long-term healthcare costs</li>
        </ul>
    </div>
</section>

<!-- WHY CHOOSE -->
<section id="faqs" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Why Choose Nano Hospitals
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>NABL-aligned laboratory quality standards</li>
            <li>Advanced diagnostic and automation systems</li>
            <li>Quick turnaround time for reports</li>
            <li>Seamless integration with all clinical specialties</li>
            <li>Patient-friendly sample collection and reporting</li>
        </ul>
    </div>
</section>

<!-- JS (UNCHANGED) -->
<script>
    const buttons = document.querySelectorAll('.pill-btn');
    const sections = [...buttons].map(btn =>
        document.getElementById(btn.dataset.target)
    );

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById(btn.dataset.target).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            if (window.scrollY >= section.offsetTop - 160) {
                current = section.id;
            }
        });
        buttons.forEach(btn => {
            btn.classList.toggle('active', btn.dataset.target === current);
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('readMoreBtn');
        const content = document.getElementById('moreContent');
        if (!btn || !content) return;

        btn.addEventListener('click', function () {
            const isHidden = content.classList.contains('hidden');
            content.classList.toggle('hidden');
            btn.innerHTML = isHidden
                ? `Read Less <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">‹</span>`
                : `Read More <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>`;
        });
    });
</script>

</body>
</html>
