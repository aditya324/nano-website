<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic, Reconstructive & Burn Care – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="Plastic and Burn Care"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Plastic, Reconstructive & Burn Care
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Consult Plastic Surgeon
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
                About Plastic & Burn Care
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Plastic, Reconstructive & Burn Care blends medical science with surgical
                    precision to restore both function and appearance following injury,
                    disease, or congenital conditions.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        At Nano Hospitals, care extends beyond physical healing to emotional
                        recovery, helping patients regain confidence, independence, and dignity.
                    </p>
                    <p class="mt-2">
                        Treatment plans are individualised, combining advanced surgical techniques
                        with rehabilitation and psychological support.
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
            Introduction to Plastic, Reconstructive & Burn Care
        </h2>
        <p class="text-gray-700 leading-relaxed">
            This specialty focuses on restoring form, function, and appearance following burns,
            trauma, cancer-related tissue loss, and congenital anomalies, while also addressing
            emotional recovery.
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
            <li>Burn injuries – from minor scalds to severe third-degree burns</li>
            <li>Trauma-related deformities and post-accident scars</li>
            <li>Congenital anomalies such as cleft lip and palate</li>
            <li>Post-cancer reconstructive needs</li>
            <li>Cosmetic concerns including scar revision and body contouring</li>
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
            <li>Severe pain, swelling, and scarring</li>
            <li>Loss of function of hands, face, or limbs</li>
            <li>Emotional distress due to appearance changes</li>
            <li>Risk of infection and disability</li>
        </ul>

        <p class="text-gray-700">
            Causes include accidents, fire or electrical burns, congenital defects, cancer-related
            tissue loss, and age-related or lifestyle-driven cosmetic concerns.
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
            <li>Permanent deformity</li>
            <li>Loss of mobility or function</li>
            <li>Chronic pain and recurrent infections</li>
            <li>Psychological trauma and social isolation</li>
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
            <li>Clinical evaluation of injury or deformity</li>
            <li>CT and MRI imaging for trauma cases</li>
            <li>Skin and tissue assessment for burns</li>
            <li>Biopsy for cancer-related reconstruction</li>
            <li>Safety practices, fire awareness, and early screening</li>
        </ul>
    </div>
</section>

<!-- TREATMENT -->
<section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Treatment Options
        </h2>

        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
            <li>Advanced burn care including grafts and flap surgeries</li>
            <li>Reconstructive surgery with microsurgical techniques</li>
            <li>Facial and limb reconstruction after trauma</li>
            <li>Cosmetic procedures such as rhinoplasty and liposuction</li>
            <li>Comprehensive pain management and rehabilitation</li>
        </ul>
    </div>
</section>

<!-- RECOVERY -->
<section id="faqs" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Recovery and Outlook
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Burn recovery often requires long-term rehabilitation, while reconstructive and
            cosmetic patients regain function and confidence with modern surgical care.
            Emotional counselling is integrated into recovery to ensure holistic healing.
        </p>

        <h3 class="font-semibold mt-6 mb-2 text-gray-800">
            Why Choose Nano Hospitals
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Experienced plastic and reconstructive surgeons</li>
            <li>Advanced burn care unit with ICU support</li>
            <li>Integration of cosmetic and functional outcomes</li>
            <li>Compassionate, patient-centred approach</li>
            <li>Multidisciplinary team including physiotherapists and psychologists</li>
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
