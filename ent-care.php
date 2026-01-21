<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT Care – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="ENT Care"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    ENT Care (Ear, Nose & Throat)
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Consult ENT Specialist
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
                About ENT Care
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    The ear, nose, and throat are interconnected systems essential for
                    hearing, speech, breathing, and swallowing. ENT Care at Nano Hospitals
                    provides comprehensive medical and surgical management for disorders
                    affecting these vital functions.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        ENT conditions can significantly impact communication and quality
                        of life if left untreated. Early diagnosis helps prevent chronic
                        infections, hearing loss, and airway complications.
                    </p>
                    <p class="mt-2">
                        Care is delivered using advanced diagnostics, minimally invasive
                        procedures, and rehabilitation support for long-term recovery.
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
            Introduction to ENT Care
        </h2>
        <p class="text-gray-700 leading-relaxed">
            ENT Care focuses on diagnosing and treating conditions of the ear, nose,
            throat, and related head and neck structures. Early intervention restores
            comfort, function, and communication abilities.
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
            <li>Ear infections, hearing loss, tinnitus, balance disorders</li>
            <li>Sinusitis, nasal polyps, deviated nasal septum, allergies</li>
            <li>Tonsillitis, voice disorders, swallowing difficulties</li>
            <li>Head and neck conditions – thyroid and salivary gland diseases</li>
            <li>Pediatric ENT conditions and congenital anomalies</li>
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
            <li>Ear pain, discharge, ringing, or hearing difficulty</li>
            <li>Nasal congestion, sneezing, sinus pain, or nosebleeds</li>
            <li>Sore throat, hoarseness, difficulty swallowing</li>
            <li>Neck swelling or persistent lumps</li>
        </ul>

        <p class="text-gray-700">
            Causes include infections, allergies, environmental exposure,
            genetic factors, smoking, pollution, and age-related changes.
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
            <li>Permanent hearing loss</li>
            <li>Chronic sinus and throat infections</li>
            <li>Speech and communication difficulties</li>
            <li>Progression of head and neck cancers</li>
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
            <li>Audiometry and hearing tests</li>
            <li>Nasal endoscopy and laryngoscopy</li>
            <li>CT and MRI imaging for sinus, ear, and neck conditions</li>
            <li>Biopsy for suspected head and neck cancers</li>
            <li>Noise protection, allergy control, and routine ENT check-ups</li>
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
            <li>Medical therapy – antibiotics, antihistamines, steroids</li>
            <li>Ear surgeries – tympanoplasty, cochlear implants</li>
            <li>Nasal surgeries – septoplasty, endoscopic sinus surgery</li>
            <li>Throat surgeries – tonsillectomy, adenoidectomy, voice surgery</li>
            <li>Head and neck surgeries – thyroid and salivary gland procedures</li>
            <li>Rehabilitation – hearing aids, speech and swallowing therapy</li>
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
            Most ENT conditions are highly treatable with excellent outcomes.
            Early intervention prevents complications and ensures long-term
            comfort, communication, and confidence.
        </p>

        <h3 class="font-semibold mb-2 text-gray-800">
            Why Choose Nano Hospitals
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Experienced ENT specialists with sub-specialty expertise</li>
            <li>Advanced diagnostic and surgical facilities</li>
            <li>Integrated hearing, speech, and swallowing rehabilitation</li>
            <li>Pediatric-friendly ENT services</li>
            <li>Patient-centered, holistic care approach</li>
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
