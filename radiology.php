<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiology & Imaging – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="Radiology and Imaging"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Radiology &amp; Imaging
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Book Diagnostic Imaging
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
                About Radiology & Imaging
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Radiology & Imaging forms the diagnostic backbone of Nano Hospitals.
                    Accurate imaging enables early detection, precise diagnosis,
                    and effective treatment planning across all specialties.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        The department combines advanced imaging technology with
                        experienced radiologists to deliver reliable, timely, and
                        clinically relevant reports.
                    </p>
                    <p class="mt-2">
                        Imaging services support preventive screening, emergency care,
                        chronic disease monitoring, and interventional procedures.
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
            <button class="pill-btn" data-target="risks">Interventional Care</button>
            <button class="pill-btn" data-target="advantages">Outcomes</button>
            <button class="pill-btn" data-target="faqs">Why Choose Us</button>
        </div>
    </div>
</div>

<!-- OVERVIEW -->
<section id="overview" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Introduction to Radiology & Imaging
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Radiology plays a critical role in modern medicine by enabling
            non-invasive visualisation of internal organs, tissues, and structures.
            Early and accurate imaging directly improves clinical outcomes.
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
            <li>X-rays for bones, chest, and trauma evaluation</li>
            <li>Ultrasound for abdomen, pregnancy, and soft tissues</li>
            <li>CT scans for trauma, cancer, and internal bleeding</li>
            <li>MRI for brain, spine, joints, and soft tissues</li>
            <li>Mammography for breast cancer screening</li>
            <li>Doppler studies for blood vessel assessment</li>
            <li>Interventional radiology procedures</li>
        </ul>
    </div>
</section>

<!-- RISKS & CAUSES -->
<section id="delivery" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Risks and Causes for Imaging Needs
        </h2>

        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
            <li>Delayed diagnosis of fractures, cancers, or internal bleeding</li>
            <li>Missed detection of life-threatening conditions</li>
            <li>Disease progression without proper monitoring</li>
        </ul>

        <p class="text-gray-700">
            Imaging is required for trauma, chronic diseases,
            preventive screening, pregnancy monitoring,
            and evaluation of unexplained symptoms.
        </p>
    </div>
</section>

<!-- DIAGNOSIS -->
<section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Diagnostic Approach
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Expert radiologist interpretation of imaging studies</li>
            <li>Integration of imaging with clinical findings</li>
            <li>Use of advanced software for 3D imaging and reconstruction</li>
        </ul>
    </div>
</section>

<!-- INTERVENTIONAL -->
<section id="risks" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Interventional Radiology
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Image-guided biopsies</li>
            <li>Angioplasty and stent placement</li>
            <li>Tumor ablation procedures</li>
            <li>Drainage of abscesses and collections</li>
            <li>Minimally invasive alternatives to open surgery</li>
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
            <li>Early detection enables better treatment outcomes</li>
            <li>Interventional radiology reduces hospital stay and recovery time</li>
            <li>Continuous imaging helps track disease progression</li>
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
            <li>Advanced CT, MRI, ultrasound, and digital X-ray systems</li>
            <li>Experienced radiologists and skilled technicians</li>
            <li>Seamless integration with all clinical specialties</li>
            <li>Focus on preventive screening and early detection</li>
            <li>Patient-friendly environment with quick reporting</li>
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
