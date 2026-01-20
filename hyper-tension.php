<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypertension (High Blood Pressure) – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Hypertension"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Hypertension (High Blood Pressure)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Physician
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
                    About Hypertension
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Hypertension is a chronic condition in which blood pressure remains consistently
                        above normal levels. It is often referred to as the “silent killer” because many
                        people experience no symptoms until serious complications develop.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Persistent high blood pressure places strain on the heart, blood vessels, brain,
                            kidneys, and eyes. Without early diagnosis and proper management, it can lead to
                            life-threatening conditions.
                        </p>
                        <p class="mt-2">
                            At Nano Hospitals, hypertension care focuses on early detection, risk reduction,
                            and long-term blood pressure control.
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
                <button class="pill-btn" data-target="workflow">Symptoms</button>
                <button class="pill-btn" data-target="delivery">Causes</button>
                <button class="pill-btn" data-target="benefits">Risks</button>
                <button class="pill-btn" data-target="risks">Diagnosis & Prevention</button>
                <button class="pill-btn" data-target="advantages">Treatment</button>
                <button class="pill-btn" data-target="faqs">FAQs</button>
            </div>
        </div>
    </div>

    <!-- OVERVIEW -->
    <section id="overview" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Introduction to Hypertension
            </h2>
            <p class="text-gray-700 leading-relaxed">
                Hypertension develops when the force of blood against artery walls remains elevated over
                time. It often progresses silently but significantly increases the risk of cardiovascular
                disease if left unmanaged.
            </p>
        </div>
    </section>

    <!-- SYMPTOMS -->
    <section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Common Symptoms
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Headaches</li>
                <li>Dizziness</li>
                <li>Blurred vision</li>
                <li>Nosebleeds (rare)</li>
            </ul>
        </div>
    </section>

    <!-- CAUSES -->
    <section id="delivery" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Causes of High Blood Pressure
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Genetic predisposition</li>
                <li>Obesity and unhealthy diet</li>
                <li>High salt intake</li>
                <li>Stress</li>
                <li>Sedentary lifestyle</li>
            </ul>
        </div>
    </section>

    <!-- RISKS -->
    <section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Risks if Left Untreated
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Stroke</li>
                <li>Heart attack</li>
                <li>Kidney failure</li>
                <li>Vision loss</li>
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
                <li>Regular blood pressure measurement</li>
                <li>ECG and echocardiogram when required</li>
                <li>Kidney function tests</li>
                <li>Low-salt diet and regular exercise</li>
                <li>Stress management and avoiding tobacco/alcohol</li>
            </ul>
        </div>
    </section>

    <!-- TREATMENT -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Treatment and Management
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Lifestyle modification</li>
                <li>Antihypertensive medications</li>
                <li>ACE inhibitors, beta-blockers, and other prescribed drugs</li>
                <li>Regular monitoring and follow-up</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Recovery and Outlook
            </h2>
            <p class="text-gray-700 leading-relaxed">
                With proper diagnosis, lifestyle changes, and consistent treatment, most patients with
                hypertension can lead normal, healthy lives and prevent serious complications.
            </p>
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
