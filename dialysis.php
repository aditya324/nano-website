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
                    Overview of Dialysis Services
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Dialysis is a life-sustaining treatment that performs the essential functions of the kidneys when they are unable to do so adequately. It removes waste products, excess fluids, and balances electrolytes in the blood—critical for patients with acute kidney injury (AKI) or chronic kidney disease (CKD).
                        <!-- Hidden additional content -->
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, 24×7 Dialysis Services are designed to provide timely, safe, and continuous renal support, including urgent dialysis for emergencies and planned sessions for long-term care </p>
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
                How Dialysis Services Work
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Dialysis at Nano Hospitals follows a clinically structured, patient-safe pathway:
                </p>

                <p><strong>Step 1: Nephrology Evaluation</strong><br>
                    A nephrologist assesses kidney function, symptoms, and urgency to determine the need
                    and type of dialysis.
                </p>

                <p><strong>Step 2: Access & Readiness</strong><br>
                    Vascular access (temporary or permanent) is evaluated or established to ensure safe
                    blood flow during dialysis.
                </p>

                <p><strong>Step 3: Dialysis Session</strong><br>
                    Blood is circulated through a dialysis machine where toxins and excess fluids are filtered out.
                </p>

                <p><strong>Step 4: Monitoring & Adjustment</strong><br>
                    Vital signs and blood parameters are monitored throughout to ensure stability and comfort.
                </p>

                <p><strong>Step 5: Ongoing Care Planning</strong><br>
                    Post-session assessment guides the frequency of future sessions and supportive treatment.
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
                    24×7 Dialysis Services at Nano Hospitals are delivered through round-the-clock readiness
                    and clinical oversight:
                </p>

                <ul class="list-disc pl-5 space-y-2">
                    <li>Modern dialysis machines with safety monitoring systems</li>
                    <li>Trained dialysis nurses and technicians available 24×7</li>
                    <li>Nephrologist supervision and on-call specialist support</li>
                    <li>Strict infection-control and NABH-aligned safety protocols</li>
                    <li>Seamless access to ICU for critically ill patients requiring dialysis</li>
                </ul>

                <p>
                    This ensures uninterrupted renal care, even during nights, weekends, and emergencies.
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
                        <li>Timely removal of toxins and excess fluids</li>
                        <li>Stabilisation during kidney failure or medical emergencies</li>
                        <li>Improved quality of life with regular, planned dialysis</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Assurance of continuous renal support</li>
                        <li>Reduced anxiety during acute kidney crises</li>
                        <li>Clear guidance on long-term kidney care</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For the Community</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reliable emergency dialysis access</li>
                        <li>Reduced complications from delayed renal treatment</li>
                        <li>Strengthened critical care support for kidney patients</li>
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
                <p>Dialysis involves certain clinical challenges, including:</p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Blood pressure fluctuations during sessions</li>
                    <li>Risk of infection at access sites</li>
                    <li>Fluid and electrolyte imbalances</li>
                </ul>

                <p class="font-semibold text-gray-900">
                    Risk mitigation at Nano Hospitals includes:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Continuous monitoring during dialysis</li>
                    <li>Strict aseptic protocols and machine sterilisation</li>
                    <li>Immediate medical intervention if complications arise</li>
                    <li>Close coordination with ICU and emergency teams</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- UNIQUENESS -->
    <section id="advantages" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Unique Advantages of Dialysis Services at Nano Hospitals
            </h2>

            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>24×7 availability, including emergency dialysis</li>
                <li>ICU-supported dialysis for critically ill patients</li>
                <li>Dedicated renal care teams and nephrology oversight</li>
                <li>NABH-aligned infection control and safety practices</li>
                <li>Patient-centred scheduling and compassionate care</li>
            </ul>
        </div>
    </section>

    <!-- FAQs -->
    <section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Dialysis Services
            </h2>

            <div class="space-y-3 text-gray-700 leading-relaxed">
                <p><strong>When is dialysis required?</strong><br>
                    When kidneys cannot adequately filter waste and fluids from the blood.
                </p>
                <p><strong>Is dialysis available during emergencies?</strong><br>Yes, 24×7.</p>
                <p><strong>Is dialysis painful?</strong><br>No, apart from mild needle discomfort.</p>
                <p><strong>How long does a dialysis session take?</strong><br>About 3–4 hours.</p>
                <p><strong>Can critically ill patients receive dialysis?</strong><br>Yes, ICU-based dialysis is available.</p>
                <p><strong>How often is dialysis required?</strong><br>As decided by the nephrologist.</p>
                <p><strong>Are dialysis machines safe?</strong><br>Yes, regularly sterilised and monitored.</p>
                <p><strong>Will I receive kidney care guidance?</strong><br>Yes, including diet and follow-up care.</p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section id="conclusion" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">
                Continuous Renal Care, When It Matters Most
            </h2>

            <p class="text-gray-700 leading-relaxed max-w-4xl">
                At Nano Hospitals, 24×7 Dialysis Services deliver reliability, safety, and compassionate
                renal support, ensuring patients receive the care they need—without interruption.
                <br><br>
                <strong>
                    For emergency or planned dialysis care, connect with Nano Hospitals and take a confident
                    step toward kidney health.
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