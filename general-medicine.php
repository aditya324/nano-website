<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Medicine & Allied Specialties – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="General Medicine"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        General Medicine &amp; Allied Specialties
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
                    About General Medicine
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        General Medicine &amp; Allied Specialties at Nano Hospitals forms the core foundation
                        of adult patient care, serving as the first and most crucial point of contact for
                        individuals experiencing acute illness, chronic disease, or unexplained symptoms.
                        The department focuses on holistic diagnosis, medical management, disease prevention,
                        and long-term health monitoring.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Many medical conditions begin subtly—fatigue, fever, breathlessness, weight
                            changes, or body pain may signal deeper issues. General Medicine specialists are
                            trained to assess the body as a whole, identify root causes, and coordinate care
                            across specialties when required.
                        </p>
                        <p class="mt-2">
                            Care is continuous, evidence-based, and personalised—supporting patients through
                            illness, recovery, and long-term disease control.
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
                Overview of General Medicine
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    General Medicine focuses on comprehensive adult healthcare, from diagnosis of acute
                    illnesses to long-term management of chronic and complex conditions.
                </p>
                <p>
                    At Nano Hospitals, the department plays a pivotal role in early detection, coordinated
                    treatment, and timely referral to super-specialties when needed.
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
                        <li>Detailed medical consultation and physical examination</li>
                        <li>Systematic evaluation of unexplained symptoms</li>
                        <li>Risk assessment for lifestyle and metabolic diseases</li>
                        <li>Coordination of diagnostic investigations</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Medical Management</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Treatment of acute infections and illnesses</li>
                        <li>Long-term management of chronic diseases</li>
                        <li>Medication optimisation and monitoring</li>
                        <li>Supportive care during hospitalisation</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Preventive &amp; Inpatient Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Preventive health check-ups and adult vaccinations</li>
                        <li>Lifestyle modification and nutritional counselling</li>
                        <li>Management of hospitalised patients</li>
                        <li>ICU coordination and post-discharge follow-up</li>
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
                <li>Advanced laboratory medicine for accurate diagnostics</li>
                <li>ECG, Digital X-Ray, CT Scan, and MRI</li>
                <li>2D Echocardiography when cardiac assessment is required</li>
                <li>24×7 pharmacy support</li>
                <li>ICU and emergency services</li>
                <li>Electronic monitoring and documentation systems</li>
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
                <li>Fever of unknown origin and acute infections</li>
                <li>Respiratory and gastrointestinal illnesses</li>
                <li>Diabetes, hypertension, and thyroid disorders</li>
                <li>Chronic kidney and liver disease (medical management)</li>
                <li>Obesity, dyslipidaemia, and metabolic syndrome</li>
                <li>Geriatric conditions and multiple co-morbidities</li>
                <li>Undiagnosed fatigue, weight loss, pain, or weakness</li>
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
                <li>Thorough clinical evaluation, not assumptions</li>
                <li>Early diagnosis to prevent complications</li>
                <li>Rational, evidence-based treatment</li>
                <li>Clear communication and patient education</li>
                <li>Long-term disease control and follow-up</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in General Medicine
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Internal Medicine</li>
                <li>Preventive Medicine</li>
                <li>Geriatric Medicine</li>
                <li>Infectious Disease Management</li>
                <li>Lifestyle and Metabolic Disorder Care</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – General Medicine
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Is General Medicine the first point of care?</strong><br>Yes.</p>
                <p><strong>Do you manage chronic diseases?</strong><br>Yes.</p>
                <p><strong>Are preventive check-ups available?</strong><br>Yes.</p>
                <p><strong>Is ICU support available if needed?</strong><br>Yes.</p>
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
