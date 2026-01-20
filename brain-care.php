<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain Care (Neurology) – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Brain Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Brain Care (Neurology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Neurologist
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
                    About Brain Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Brain Care at Nano Hospitals provides comprehensive medical care for conditions
                        affecting the brain, spinal cord, nerves, and muscles. Neurological disorders can
                        significantly impact movement, speech, memory, behaviour, and overall independence.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Some neurological conditions develop gradually, while others—such as stroke or
                            seizures—require immediate medical attention. The department focuses on early
                            recognition, accurate diagnosis, timely treatment, and long-term neurological
                            support.
                        </p>
                        <p class="mt-2">
                            Care is coordinated across Emergency, ICU, General Medicine, and Rehabilitation
                            services, with strong emphasis on patient education, family involvement, and
                            realistic recovery planning.
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
                <button class="pill-btn" data-target="workflow">Treatments</button>
                <button class="pill-btn" data-target="delivery">Facilities</button>
                <button class="pill-btn" data-target="benefits">Conditions</button>
                <button class="pill-btn" data-target="risks">Care Philosophy</button>
                <button class="pill-btn" data-target="advantages">Sub-specialties</button>
                <button class="pill-btn" data-target="faqs">FAQs</button>
            </div>
        </div>
    </div>

    <!-- OVERVIEW -->
    <section id="overview" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Overview of Brain Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Brain Care focuses on the early identification and medical management of neurological
                    disorders to prevent long-term disability and improve quality of life.
                </p>
                <p>
                    At Nano Hospitals, neurological care is delivered through close coordination with
                    emergency and critical care services to ensure rapid and continuous treatment.
                </p>
            </div>
        </div>
    </section>

    <!-- TREATMENTS -->
    <section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Procedures and Treatments
            </h2>

            <div class="space-y-6 text-gray-700 leading-relaxed">
                <div>
                    <h3 class="font-semibold mb-2">Neurological Evaluation &amp; Diagnostics</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Detailed neurological examination</li>
                        <li>Electroencephalogram (EEG) for brain activity</li>
                        <li>CT Scan and MRI coordination</li>
                        <li>Monitoring neurological status in hospitalised patients</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Medical Neurology Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Stroke evaluation and medical management</li>
                        <li>Seizure and epilepsy management</li>
                        <li>Headache and migraine treatment</li>
                        <li>Neuropathy and nerve disorder care</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Emergency &amp; Long-Term Neurological Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Acute stroke assessment and seizure stabilisation</li>
                        <li>Altered consciousness evaluation</li>
                        <li>Neurological monitoring in ICU</li>
                        <li>Chronic disease follow-up and rehabilitation coordination</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITIES -->
    <section id="delivery" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Facilities and Technologies Used
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>EEG systems for brain activity assessment</li>
                <li>CT Scan and MRI for detailed neuro-imaging</li>
                <li>Advanced laboratory medicine for metabolic and infectious evaluation</li>
                <li>ICU and emergency services for neurological monitoring</li>
                <li>Digital X-Ray support when required</li>
            </ul>
        </div>
    </section>

    <!-- CONDITIONS -->
    <section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Conditions and Ailments Treated
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Stroke and transient ischemic attacks (TIA)</li>
                <li>Epilepsy and seizure disorders</li>
                <li>Migraine and chronic headache disorders</li>
                <li>Peripheral neuropathy and nerve compression syndromes</li>
                <li>Weakness, paralysis, numbness, or tingling</li>
                <li>Speech, vision, memory, or behavioural changes</li>
            </ul>
        </div>
    </section>

    <!-- CARE PHILOSOPHY -->
    <section id="risks" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Care Philosophy and Outcomes
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Early recognition of neurological warning signs</li>
                <li>Evidence-based medical management</li>
                <li>Multidisciplinary coordination</li>
                <li>Patient and family education</li>
                <li>Focus on functional recovery and quality of life</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Brain Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Stroke Care and Prevention</li>
                <li>Epilepsy and Seizure Management</li>
                <li>Headache and Migraine Care</li>
                <li>Peripheral Nerve Disorders</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Brain Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you manage stroke emergencies?</strong><br>Yes.</p>
                <p><strong>Is EEG available?</strong><br>Yes.</p>
                <p><strong>Do you treat epilepsy?</strong><br>Yes.</p>
                <p><strong>Is long-term neurological follow-up provided?</strong><br>Yes.</p>
            </div>
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
