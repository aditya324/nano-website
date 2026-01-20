<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lung Care (Pulmonology) – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Lung Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Lung Care (Pulmonology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Pulmonologist
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
                    About Lung Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Lung Care at Nano Hospitals focuses on the diagnosis, treatment, and long-term
                        management of respiratory and lung-related conditions. Breathing problems may range
                        from mild, recurrent symptoms to sudden, life-threatening emergencies.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Conditions such as asthma, chronic bronchitis, respiratory infections, or lung
                            complications related to other medical illnesses can significantly affect daily
                            life if not addressed early.
                        </p>
                        <p class="mt-2">
                            The department emphasises early intervention, accurate diagnosis, patient
                            education, and continuity of care, supported by emergency and critical care
                            services to prevent disease progression and reduce hospitalisations.
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
                Overview of Lung Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Lung Care focuses on early identification and structured management of respiratory
                    conditions to improve breathing comfort and prevent complications.
                </p>
                <p>
                    At Nano Hospitals, pulmonology services are closely integrated with emergency and ICU
                    teams to ensure timely escalation and continuous respiratory support.
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
                    <h3 class="font-semibold mb-2">Diagnostic &amp; Evaluation Services</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Detailed respiratory history and clinical examination</li>
                        <li>Assessment of breathlessness, cough, and chest symptoms</li>
                        <li>Chest imaging coordination (X-ray, CT scan when required)</li>
                        <li>Laboratory investigations for infections and inflammation</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Medical Respiratory Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Management of asthma and COPD</li>
                        <li>Treatment of respiratory infections</li>
                        <li>Oxygen therapy for breathing difficulty</li>
                        <li>Medical management of airway and lung inflammation</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Emergency &amp; Long-Term Lung Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Stabilisation of acute respiratory distress</li>
                        <li>Ventilatory and oxygen support when required</li>
                        <li>Respiratory monitoring in ICU and wards</li>
                        <li>Chronic disease monitoring and patient education</li>
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
                <li>Digital X-Ray for rapid chest evaluation</li>
                <li>CT Scan support for detailed lung imaging</li>
                <li>Advanced laboratory medicine for respiratory diagnostics</li>
                <li>ICU and emergency services for respiratory monitoring</li>
                <li>Oxygen therapy and ventilatory support systems</li>
                <li>24×7 pharmacy for uninterrupted respiratory medications</li>
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
                <li>Asthma, COPD, and chronic bronchitis</li>
                <li>Pneumonia, tuberculosis, and viral respiratory infections</li>
                <li>Acute breathlessness and respiratory failure</li>
                <li>Severe chest infections</li>
                <li>Persistent cough, wheezing, and chest tightness</li>
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
                <li>Early identification of respiratory symptoms</li>
                <li>Accurate diagnosis of underlying causes</li>
                <li>Preventive strategies to reduce flare-ups</li>
                <li>Patient education for long-term control</li>
                <li>Seamless integration with emergency and ICU services</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Lung Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Asthma and allergy care</li>
                <li>Chronic lung disease management</li>
                <li>Respiratory infection management</li>
                <li>Critical respiratory care</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Lung Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you treat asthma and COPD?</strong><br>Yes.</p>
                <p><strong>Is oxygen therapy available?</strong><br>Yes.</p>
                <p><strong>Do you handle respiratory emergencies?</strong><br>Yes.</p>
                <p><strong>Is long-term lung care provided?</strong><br>Yes.</p>
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
