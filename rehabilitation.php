<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabilitation & Physiotherapy – Nano Hospitals</title>
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
    <img src="./assets/banners/health-package-banner.png" alt="Rehabilitation and Physiotherapy"
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    Rehabilitation &amp; Physiotherapy
                </h1>
                <a href="#"
                    class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Start Your Recovery Journey
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
                About Rehabilitation & Physiotherapy
            </h2>

            <div class="flex-1 md:pl-10">
                <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                    Rehabilitation and physiotherapy are essential for restoring movement,
                    strength, and independence after illness, injury, or surgery.
                    At Nano Hospitals, care focuses on safe recovery and long-term functional improvement.
                </p>

                <div id="moreContent"
                    class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                    <p>
                        Therapy programs are personalised to each patient’s condition, goals,
                        and recovery timeline, combining medical supervision with evidence-based techniques.
                    </p>
                    <p class="mt-2">
                        The approach emphasises confidence-building, pain reduction, and return
                        to daily activities.
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
            Introduction to Rehabilitation & Physiotherapy
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Rehabilitation focuses on helping patients recover physical function,
            mobility, and independence after medical or surgical conditions.
            Early and structured physiotherapy plays a critical role in optimal recovery.
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
            <li>Stroke recovery and neurological rehabilitation</li>
            <li>Post-surgical rehabilitation (orthopaedic, cardiac, neurological)</li>
            <li>Sports injuries</li>
            <li>Chronic pain including back, neck, and arthritis</li>
            <li>Neurological disorders such as Parkinson’s disease</li>
            <li>Paediatric rehabilitation for developmental delays</li>
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
            <li>Muscle weakness and reduced mobility</li>
            <li>Pain, stiffness, and joint limitation</li>
            <li>Difficulty performing daily activities</li>
        </ul>

        <p class="text-gray-700">
            Causes include trauma, surgery, neurological conditions,
            ageing-related degeneration, and prolonged inactivity.
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
            <li>Muscle wasting and joint stiffness</li>
            <li>Permanent disability</li>
            <li>Loss of independence</li>
            <li>Depression and reduced quality of life</li>
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
            <li>Physical examination and functional assessment</li>
            <li>Mobility, strength, and balance evaluation</li>
            <li>Imaging such as X-ray or MRI when required</li>
            <li>Early physiotherapy after injury or surgery</li>
            <li>Regular exercise and ergonomic lifestyle habits</li>
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
            <li>Physiotherapy techniques including manual therapy and electrotherapy</li>
            <li>Hydrotherapy and advanced rehabilitation exercises</li>
            <li>Stroke rehabilitation with speech and occupational therapy</li>
            <li>Sports injury and post-surgical rehabilitation programs</li>
            <li>Pain management strategies and home exercise plans</li>
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
            Recovery varies depending on the condition, but structured physiotherapy
            significantly improves mobility, reduces pain, and restores independence.
            Long-term rehabilitation ensures sustained functional improvement.
        </p>

        <h3 class="font-semibold mt-6 mb-2 text-gray-800">
            Why Choose Nano Hospitals
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Experienced physiotherapists and rehabilitation specialists</li>
            <li>Advanced equipment and evidence-based therapy techniques</li>
            <li>Personalised recovery plans</li>
            <li>Integration with orthopaedic, neurological, and cardiac care</li>
            <li>Holistic approach focused on patient empowerment</li>
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
