<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <section class="relative w-full min-h-[520px]">
        <!-- Background Image -->
        <img
            src="./assets/banners/health-package-banner.png"
            alt="Complete Health Packages"
            class="absolute inset-0 w-full h-full object-cover" />

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content Wrapper -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">

                <!-- LEFT CONTENT (CENTERED) -->
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Because Healthcare Is Personal So Is Your Career.
                    </h1>
                    <a
                        href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-8 py-3 rounded-full
                 text-lg font-bold
                 hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>

                <!-- RIGHT FORM -->


            </div>
        </div>
    </section>
    <section class="w-full bg-[#F5F5F5] py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">

                <!-- Left Title -->
                <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                    Overview of 2D Echocardiography (2D Echo)
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        2D Echocardiography (2D Echo) is a non-invasive ultrasound examination of the heart that uses sound waves to create real-time images of cardiac structure and function. It helps doctors assess how the heart chambers, valves, and muscles are working—making it a vital test for diagnosing and monitoring a wide range of heart conditions.
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, 2D Echo services are designed to support early diagnosis, accurate assessment, and timely cardiac care, both in routine evaluations and emergency situations.
                    </div>

                    <!-- Read More / Less -->
                    <button
                        id="readMoreBtn"
                        type="button"
                        class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline focus:outline-none">
                        Read More
                        <span
                            class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">
                            ›
                        </span>
                    </button>
                </div>

            </div>
        </div>
    </section>


    <!-- =====================
SECTIONS
===================== -->

    <!-- HOW IT WORKS -->


    <!-- =====================
SECTIONS
===================== -->

    <div class="sticky top-0 z-50 bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex gap-3 overflow-x-auto">
                <button class="pill-btn active" data-target="workflow">How It Works</button>
                <button class="pill-btn" data-target="delivery">Service Delivery</button>
                <button class="pill-btn" data-target="benefits">Benefits</button>
                <button class="pill-btn" data-target="risks">Risks</button>
                <button class="pill-btn" data-target="advantages">Uniqueness</button>
                <button class="pill-btn" data-target="faqs">FAQs</button>
                <button class="pill-btn" data-target="conclusion">Why Nano</button>
            </div>
        </div>
    </div>

    <!-- =====================
SECTIONS
===================== -->

    <!-- HOW IT WORKS -->
    <section id="workflow" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                How 2D Echo Services Work
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    2D Echo at Nano Hospitals follows a simple, patient-friendly clinical process:
                </p>

                <p><strong>Step 1: Clinical Indication</strong><br>
                    The treating doctor recommends a 2D Echo based on symptoms such as chest pain,
                    breathlessness, palpitations, or abnormal ECG findings.
                </p>

                <p><strong>Step 2: Image Acquisition</strong><br>
                    An ultrasound probe is placed on the chest to capture real-time images of the heart
                    from different angles.
                </p>

                <p><strong>Step 3: Functional Assessment</strong><br>
                    Heart size, pumping strength, valve function, and blood flow patterns are evaluated.
                </p>

                <p><strong>Step 4: Interpretation</strong><br>
                    The cardiologist analyses the images to identify abnormalities or confirm normal
                    heart function.
                </p>

                <p><strong>Step 5: Care Planning</strong><br>
                    Results are integrated into the patient’s treatment or follow-up plan.
                </p>
            </div>
        </div>
    </section>

    <!-- SERVICE DELIVERY -->
    <section id="delivery" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                How the Service Is Delivered
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    2D Echo services at Nano Hospitals are delivered through advanced equipment,
                    specialist expertise, and seamless coordination:
                </p>

                <ul class="list-disc pl-5 space-y-2">
                    <li>High-quality echocardiography machines for clear imaging</li>
                    <li>Cardiologists and trained technicians performing and interpreting studies</li>
                    <li>NABH-aligned safety and quality protocols</li>
                    <li>Integration with Emergency, ICU, and cardiology care pathways</li>
                    <li>Efficient reporting to support rapid clinical decisions</li>
                </ul>

                <p>
                    This ensures accurate cardiac evaluation with minimal patient discomfort.
                </p>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section id="benefits" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Benefits and Value
            </h2>

            <div class="space-y-6 text-gray-700">
                <div>
                    <h3 class="font-semibold mb-2">For Patients</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Early detection of heart disease</li>
                        <li>Non-invasive, painless evaluation</li>
                        <li>Better treatment planning and monitoring</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Clear understanding of heart health</li>
                        <li>Reduced anxiety through timely diagnosis</li>
                        <li>Confidence in evidence-based cardiac care</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For the Community</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Improved early identification of cardiac conditions</li>
                        <li>Support for preventive and long-term heart care</li>
                        <li>Reduced complications through timely intervention</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- RISKS -->
    <section id="risks" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Risks and Challenges
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    2D Echo is a very safe procedure with minimal limitations:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Image quality may be affected in some individuals due to body habitus or lung conditions</li>
                </ul>

                <p class="font-semibold text-gray-900">
                    Risk mitigation at Nano Hospitals includes:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Use of multiple imaging views</li>
                    <li>Experienced cardiologists ensuring accurate interpretation</li>
                    <li>Correlation with clinical findings and other tests when needed</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- UNIQUENESS -->
    <section id="advantages" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Unique Advantages of 2D Echo Services at Nano Hospitals
            </h2>

            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Non-invasive, radiation-free cardiac imaging</li>
                <li>Cardiologist-led interpretation for clinical accuracy</li>
                <li>Availability for emergency and inpatient evaluations</li>
                <li>Integration with ECG, ICU monitoring, and cardiac care</li>
                <li>Patient-centric approach focused on comfort and clarity</li>
            </ul>
        </div>
    </section>

    <!-- FAQs -->
    <section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – 2D Echocardiography
            </h2>

            <div class="space-y-3 text-gray-700 leading-relaxed">
                <p><strong>What conditions can a 2D Echo detect?</strong><br>
                    Valve problems, weak heart muscles, congenital defects, and fluid around the heart.
                </p>
                <p><strong>Is 2D Echo painful?</strong><br>No. It is painless.</p>
                <p><strong>How long does a 2D Echo take?</strong><br>20–30 minutes.</p>
                <p><strong>Is preparation required?</strong><br>No special preparation.</p>
                <p><strong>Does it use radiation?</strong><br>No.</p>
                <p><strong>Is it safe for elderly patients?</strong><br>Yes.</p>
                <p><strong>Is it done in emergencies?</strong><br>Yes.</p>
                <p><strong>When will I get results?</strong><br>Promptly after review.</p>
                <p><strong>Can children undergo 2D Echo?</strong><br>Yes.</p>
                <p><strong>Who interprets the test?</strong><br>Trained cardiologists.</p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section id="conclusion" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">
                Clear Insight into Heart Health
            </h2>

            <p class="text-gray-700 leading-relaxed max-w-4xl">
                At Nano Hospitals, 2D Echocardiography provides safe, accurate, and timely insight
                into heart function, supporting better cardiac care at every stage.
                <br><br>
                <strong>
                    For a reliable heart evaluation, choose Nano Hospitals—where clarity leads to confident care.
                </strong>
            </p>
        </div>
    </section>

    <!-- =====================
JS: SCROLL + ACTIVE PILL
===================== -->
    <script>
        const buttons = document.querySelectorAll('.pill-btn');
        const sections = [...buttons].map(btn =>
            document.getElementById(btn.dataset.target)
        );

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                document
                    .getElementById(btn.dataset.target)
                    .scrollIntoView({
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

    <!-- Toggle Script -->
    <script>
        const btn = document.getElementById('readMoreBtn');
        const content = document.getElementById('moreContent');

        btn.addEventListener('click', () => {
            const isHidden = content.classList.contains('hidden');

            content.classList.toggle('hidden');
            btn.innerHTML = isHidden ?
                `Read Less
         <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">‹</span>` :
                `Read More
         <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>`;
        });
    </script>

</body>

</html>