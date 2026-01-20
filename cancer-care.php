<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer Care (Oncology) – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Cancer Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Cancer Care (Oncology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Oncology Specialist
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
                    About Cancer Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Cancer Care at Nano Hospitals supports patients across the entire cancer care
                        continuum—from early suspicion and diagnosis to treatment coordination, supportive
                        care, and long-term follow-up. Cancer affects not only the body but also emotional
                        wellbeing, family dynamics, and quality of life.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            The department adopts a compassionate, multidisciplinary, and patient-centred
                            approach. Early detection enables more effective treatment and better outcomes.
                        </p>
                        <p class="mt-2">
                            Care plans are individualised, transparent, and guided by evidence-based
                            protocols—ensuring patients and families are informed and supported at every
                            step of the cancer journey.
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
                Overview of Cancer Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Cancer Care focuses on early evaluation, accurate diagnosis, stage-appropriate
                    management, and coordinated treatment across specialties.
                </p>
                <p>
                    At Nano Hospitals, oncology services are integrated with surgical, medical, emergency,
                    and supportive care teams to ensure safe and continuous treatment.
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
                    <h3 class="font-semibold mb-2">Cancer Evaluation &amp; Diagnosis</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Clinical assessment of warning signs and symptoms</li>
                        <li>Coordination of imaging for tumour detection and staging</li>
                        <li>Tissue diagnosis through biopsy when indicated</li>
                        <li>Laboratory investigations to guide treatment planning</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Medical Oncology Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Stage- and type-specific treatment planning</li>
                        <li>Coordination of chemotherapy and systemic therapies</li>
                        <li>Monitoring of treatment response and side effects</li>
                        <li>Ongoing reassessment and treatment modification</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Surgical, Supportive &amp; Palliative Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Pre- and post-operative cancer care coordination</li>
                        <li>Symptom control for pain, nausea, and fatigue</li>
                        <li>Nutritional, psychological, and emotional support</li>
                        <li>Long-term follow-up and survivorship care</li>
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
                <li>CT Scan and MRI for tumour detection and staging</li>
                <li>Digital X-Ray and ultrasound for initial evaluation</li>
                <li>Advanced laboratory medicine for tumour markers</li>
                <li>Dedicated operation theatres for cancer-related surgeries</li>
                <li>Post-operative recovery and monitoring units</li>
                <li>ICU support for high-risk or critically ill patients</li>
                <li>24×7 pharmacy for uninterrupted oncology medications</li>
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
                <li>Breast, gastrointestinal, head and neck, and lung cancers</li>
                <li>Prostate, bladder, ovarian, and uterine cancers</li>
                <li>Early or suspected malignancies</li>
                <li>Cancer-related anaemia, infections, and nutritional deficiencies</li>
                <li>Treatment-related side effects and complications</li>
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
                <li>Early detection and timely diagnosis</li>
                <li>Evidence-based, stage-specific treatment</li>
                <li>Clear communication and shared decision-making</li>
                <li>Symptom control and quality-of-life preservation</li>
                <li>Long-term follow-up and survivorship support</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Cancer Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Medical Oncology (coordination and systemic therapy)</li>
                <li>Surgical Oncology (coordination)</li>
                <li>Supportive and palliative oncology</li>
                <li>Cancer screening and early detection</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Cancer Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you manage cancer diagnosis and treatment coordination?</strong><br>Yes.</p>
                <p><strong>Is chemotherapy coordinated here?</strong><br>Yes, when indicated.</p>
                <p><strong>Do you provide supportive and palliative care?</strong><br>Yes.</p>
                <p><strong>Is long-term follow-up available?</strong><br>Yes.</p>
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
