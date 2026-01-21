<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye Care – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="Eye Care"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Eye Care
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Consult Eye Specialist
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
                About Eye Care
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Vision is one of our most precious senses. Eye Care at Nano Hospitals
                    provides comprehensive management of eye health through preventive,
                    medical, and surgical ophthalmic services.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        Eye conditions may progress silently and cause irreversible vision loss
                        if not detected early. Regular eye examinations play a critical role
                        in preserving long-term vision and independence.
                    </p>
                    <p class="mt-2">
                        Our ophthalmologists deliver care using advanced diagnostics,
                        microsurgical techniques, and laser technology.
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
            <button class="pill-btn" data-target="workflow">Conditions</button>
            <button class="pill-btn" data-target="delivery">Symptoms & Causes</button>
            <button class="pill-btn" data-target="benefits">Risks</button>
            <button class="pill-btn" data-target="risks">Diagnosis & Prevention</button>
            <button class="pill-btn" data-target="advantages">Treatment</button>
            <button class="pill-btn" data-target="faqs">Recovery</button>
        </div>
    </div>
</div>

<!-- OVERVIEW -->
<section id="overview" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Introduction to Eye Care
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Eye Care focuses on maintaining vision health and treating disorders of the eyes,
            ranging from refractive errors to complex retinal and optic nerve diseases.
            Early diagnosis is key to preventing vision loss.
        </p>
    </div>
</section>

<!-- CONDITIONS -->
<section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Conditions Treated
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Cataracts</li>
            <li>Glaucoma</li>
            <li>Refractive errors – myopia, hyperopia, astigmatism</li>
            <li>Diabetic retinopathy</li>
            <li>Age-related macular degeneration</li>
            <li>Eye trauma and infections</li>
        </ul>
    </div>
</section>

<!-- SYMPTOMS & CAUSES -->
<section id="delivery" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Symptoms and Causes
        </h2>

        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
            <li>Blurred or double vision</li>
            <li>Eye pain, redness, or irritation</li>
            <li>Loss of peripheral vision</li>
            <li>Light sensitivity or visual disturbances</li>
        </ul>

        <p class="text-gray-700">
            Causes include ageing, diabetes, genetic factors, infections, trauma,
            prolonged screen exposure, and inadequate eye care.
        </p>
    </div>
</section>

<!-- RISKS -->
<section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Risks if Left Untreated
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Permanent blindness or irreversible vision loss</li>
            <li>Loss of independence and mobility</li>
            <li>Increased risk of accidents and injuries</li>
            <li>Reduced quality of life</li>
        </ul>
    </div>
</section>

<!-- DIAGNOSIS & PREVENTION -->
<section id="risks" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Diagnosis and Prevention
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Vision and refraction tests</li>
            <li>Intraocular pressure measurement for glaucoma</li>
            <li>Fundus examination and OCT scans</li>
            <li>Regular eye check-ups and diabetic screening</li>
            <li>Protective eyewear and screen-time moderation</li>
        </ul>
    </div>
</section>

<!-- TREATMENT -->
<section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Treatment Options
        </h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Non-surgical care – glasses, contact lenses, medications</li>
            <li>Cataract surgery with intraocular lens implantation</li>
            <li>Laser procedures – LASIK, diabetic retinopathy laser therapy</li>
            <li>Retinal and glaucoma surgeries when indicated</li>
            <li>Low vision rehabilitation and counseling</li>
        </ul>
    </div>
</section>

<!-- RECOVERY -->
<section id="faqs" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Recovery and Outlook
        </h2>
        <p class="text-gray-700 leading-relaxed mb-6">
            Most eye conditions are treatable with excellent outcomes.
            Cataract surgery restores vision rapidly, while glaucoma and diabetic
            eye disease require lifelong monitoring to preserve sight.
        </p>

        <h3 class="font-semibold mb-2 text-gray-800">
            Why Choose Nano Hospitals
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Skilled ophthalmologists with sub-specialty expertise</li>
            <li>Advanced surgical and laser equipment</li>
            <li>Comprehensive diabetic eye screening programs</li>
            <li>Integration with endocrinology and neurology care</li>
            <li>Patient-friendly environment with counseling support</li>
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
