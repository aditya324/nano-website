<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Care (Cardiology) – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Heart Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Heart Care (Cardiology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Cardiologist
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
                    About Heart Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Heart Care at Nano Hospitals is dedicated to the prevention, early detection,
                        diagnosis, and medical management of heart-related conditions. Heart disease often
                        develops silently, progressing over years before symptoms such as chest pain,
                        breathlessness, palpitations, or fatigue appear.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            The department focuses on cardiac risk assessment, accurate diagnosis,
                            continuous monitoring, and evidence-based treatment, ensuring patients receive
                            the right care at the right time. It works closely with Emergency, ICU, and
                            General Medicine teams for coordinated care.
                        </p>
                        <p class="mt-2">
                            Care is patient-centric—emphasising clarity, reassurance, and long-term heart
                            health rather than only symptom relief.
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
                Overview of Heart Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Heart Care focuses on identifying and managing cardiovascular risks early, before
                    complications arise. Timely cardiac evaluation plays a crucial role in preventing
                    life-threatening events.
                </p>
                <p>
                    At Nano Hospitals, cardiology services are integrated with emergency and critical care
                    systems to ensure rapid response and continuity of care.
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
                    <h3 class="font-semibold mb-2">Cardiac Diagnostic Services</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Electrocardiogram (ECG) for rhythm assessment</li>
                        <li>2D Echocardiography for heart structure and function</li>
                        <li>Cardiac risk profiling and clinical evaluation</li>
                        <li>Monitoring of heart function in medical and surgical patients</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Medical Management</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Hypertension management</li>
                        <li>Heart failure medical treatment</li>
                        <li>Arrhythmia management</li>
                        <li>Medical treatment for coronary artery disease</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Preventive &amp; Emergency Cardiac Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Cardiac risk assessment and lifestyle counselling</li>
                        <li>Monitoring high-risk patients (diabetes, obesity, family history)</li>
                        <li>Immediate evaluation of chest pain</li>
                        <li>Cardiac monitoring in ICU and wards</li>
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
                <li>ECG machines for rapid rhythm assessment</li>
                <li>2D Echocardiography systems</li>
                <li>Advanced laboratory medicine for cardiac markers</li>
                <li>ICU and emergency services for continuous monitoring</li>
                <li>Digital X-Ray, CT, and MRI support when required</li>
                <li>24×7 pharmacy for uninterrupted medication access</li>
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
                <li>Hypertension and coronary artery disease</li>
                <li>Heart rhythm disorders and heart failure</li>
                <li>Chest pain, breathlessness, palpitations</li>
                <li>Dizziness or fainting episodes</li>
                <li>Cardiac involvement in diabetes and kidney disease</li>
                <li>Pre-operative cardiac assessment for surgery</li>
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
                <li>Early detection over late intervention</li>
                <li>Evidence-based medical management</li>
                <li>Patient education and lifestyle modification</li>
                <li>Continuous monitoring and follow-up</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Heart Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Preventive Cardiology</li>
                <li>Heart Failure Management</li>
                <li>Medical Cardiology</li>
                <li>Cardiac Risk Assessment and Monitoring</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Heart Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you manage high blood pressure?</strong><br>Yes.</p>
                <p><strong>Is ECG and Echo available?</strong><br>Yes.</p>
                <p><strong>Do you handle emergency cardiac cases?</strong><br>Yes.</p>
                <p><strong>Is preventive cardiology offered?</strong><br>Yes.</p>
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
