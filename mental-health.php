<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health & Mind Care – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="Mental Health Care"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Mental Health & Mind Care
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Book Confidential Consultation
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
                About Mental Health & Mind Care
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Mental health is the foundation of overall wellbeing. At Nano Hospitals,
                    Mental Health & Mind Care focuses on conditions that affect mood, thought,
                    behaviour, and emotional balance.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        Mental health challenges are deeply personal and often impact families,
                        careers, and relationships. Our care combines medical expertise,
                        counselling, and holistic therapies to restore stability and resilience.
                    </p>
                    <p class="mt-2">
                        Treatment is delivered with dignity, confidentiality, and compassion,
                        ensuring patients feel supported at every step.
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
            Introduction to Mental Health Care
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Mental health conditions influence how individuals think, feel, and respond to daily
            life. Early recognition and structured care play a crucial role in long-term recovery
            and emotional wellbeing.
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
            <li>Anxiety disorders – generalized anxiety, panic disorder, phobias</li>
            <li>Depression and mood disorders, including bipolar disorder</li>
            <li>Stress-related conditions and burnout</li>
            <li>Sleep disorders linked to mental health</li>
            <li>Psychosomatic illnesses</li>
            <li>Child and adolescent mental health concerns</li>
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
            <li>Persistent sadness, worry, or irritability</li>
            <li>Sleep disturbances</li>
            <li>Loss of interest in daily activities</li>
            <li>Difficulty concentrating</li>
            <li>Mood swings and emotional instability</li>
        </ul>
        <p class="text-gray-700">
            Causes may include genetic factors, brain chemical imbalances, stressful life
            events, chronic medical conditions, and substance abuse.
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
            <li>Progressive worsening of symptoms</li>
            <li>Substance dependence</li>
            <li>Relationship and work-related difficulties</li>
            <li>Reduced quality of life</li>
            <li>Increased risk of self-harm or suicide</li>
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
            <li>Clinical evaluation by psychiatrists and psychologists</li>
            <li>Psychological assessments and questionnaires</li>
            <li>Counselling sessions to identify triggers</li>
            <li>Stress management, mindfulness, and healthy lifestyle practices</li>
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
            <li>Counselling and psychotherapy (CBT, interpersonal, family therapy)</li>
            <li>Medications such as antidepressants, anxiolytics, mood stabilizers</li>
            <li>Lifestyle interventions including yoga and mindfulness</li>
            <li>Group therapy and peer support programs</li>
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
            With appropriate treatment and early intervention, most patients regain emotional
            stability and lead fulfilling lives. Recovery focuses not only on symptom control
            but on restoring confidence, relationships, and productivity.
        </p>

        <h3 class="font-semibold mt-6 mb-2 text-gray-800">
            Why Choose Nano Hospitals
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Experienced psychiatrists and psychologists</li>
            <li>Confidential and compassionate care</li>
            <li>Integration of medical and holistic therapies</li>
            <li>Family counselling and support</li>
            <li>24/7 emergency support for crisis situations</li>
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
