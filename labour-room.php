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
                    Overview of Labour Room Services
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        A Labour Room is a specialised clinical environment designed to support safe, monitored childbirth for both mother and baby. It is where medical expertise, compassionate care, and preparedness come together to manage normal deliveries as well as respond swiftly to complications when they arise.
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, Labour Room services are built to ensure maternal safety, newborn wellbeing, and respectful birthing experiences, supported by immediate access to neonatal and critical care when required.
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
                How ICU / NICU Services Work
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Care within the ICU and NICU follows a structured, vigilant clinical pathway:
                </p>

                <p><strong>Step 1: Admission & Risk Assessment</strong><br>
                    Patients are admitted based on severity and clinical need, often from Emergency,
                    Operation Theatres, or Labour Rooms.
                </p>

                <p><strong>Step 2: Stabilisation & Life Support</strong><br>
                    Immediate interventions may include ventilatory support, cardiac monitoring,
                    intravenous medications, fluids, and specialised neonatal support.
                </p>

                <p><strong>Step 3: Continuous Monitoring</strong><br>
                    Vital parameters—heart rate, oxygen levels, blood pressure, and neurological status—
                    are monitored continuously.
                </p>

                <p><strong>Step 4: Multidisciplinary Care</strong><br>
                    Intensivists coordinate closely with cardiologists, neurologists, surgeons,
                    neonatologists, and anesthesiologists.
                </p>

                <p><strong>Step 5: Recovery & Transition</strong><br>
                    As the patient stabilises, care is gradually stepped down to a ward or specialised unit.
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
                    ICU / NICU services at Nano Hospitals are delivered through high-intensity clinical preparedness:
                </p>

                <ul class="list-disc pl-5 space-y-2">
                    <li>Dedicated intensivists, neonatologists, and trained critical-care nurses on duty 24×7</li>
                    <li>Advanced life-support equipment, ventilators, and monitoring systems</li>
                    <li>NABH-aligned infection control and safety protocols</li>
                    <li>Immediate access to diagnostics (CT, X-Ray, Lab, ECG)</li>
                    <li>Integrated communication systems for rapid decision-making</li>
                </ul>

                <p>
                    This ensures consistent, high-quality critical care even during complex or rapidly
                    changing clinical situations.
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
                        <li>Continuous life-saving monitoring and intervention</li>
                        <li>Early detection and management of complications</li>
                        <li>Improved survival and recovery outcomes</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reassurance that specialised care is always available</li>
                        <li>Clear updates and compassionate guidance</li>
                        <li>Confidence in structured, ethical decision-making</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For the Community</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reliable access to advanced critical care</li>
                        <li>Reduced mortality in severe illnesses and emergencies</li>
                        <li>Strengthened neonatal and adult intensive care support</li>
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
                <p>Critical care involves inherent challenges, including:</p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>High infection risk due to illness severity</li>
                    <li>Organ failure and rapid clinical changes</li>
                    <li>Emotional stress for families</li>
                </ul>

                <p class="font-semibold text-gray-900">
                    Risk mitigation at Nano Hospitals includes:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Strict infection-control practices</li>
                    <li>Continuous monitoring and early intervention</li>
                    <li>Experienced critical-care teams and standardised protocols</li>
                    <li>Clear communication with families during care transitions</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- UNIQUENESS -->
    <section id="advantages" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Unique Advantages of ICU / NICU Services at Nano Hospitals
            </h2>

            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>24×7 presence of trained critical-care teams</li>
                <li>Advanced life-support and neonatal care infrastructure</li>
                <li>Seamless integration with Emergency, Labour Room, and Operation Theatres</li>
                <li>NABH-aligned quality and safety benchmarks</li>
                <li>Patient-centric care balancing technology with compassion</li>
            </ul>
        </div>
    </section>

    <!-- FAQs -->
    <section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – ICU / NICU Services
            </h2>

            <div class="space-y-3 text-gray-700 leading-relaxed">
                <p><strong>Who requires ICU care?</strong><br>
                    Patients with life-threatening conditions needing continuous monitoring and support.
                </p>
                <p><strong>What is NICU care?</strong><br>
                    Specialised intensive care for medically unstable newborns.
                </p>
                <p><strong>Are doctors available 24×7?</strong><br>Yes.</p>
                <p><strong>Can families visit ICU/NICU patients?</strong><br>As per hospital policy.</p>
                <p><strong>How are families updated?</strong><br>Through regular medical briefings.</p>
                <p><strong>What happens after ICU recovery?</strong><br>Patients move to step-down care.</p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section id="conclusion" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">
                Advanced Care When Life Is Most Fragile
            </h2>

            <p class="text-gray-700 leading-relaxed max-w-4xl">
                At Nano Hospitals, ICU and NICU services deliver constant vigilance, clinical excellence,
                and compassionate support—helping patients and families through the most critical moments
                of care.
                <br><br>
                <strong>
                    For advanced critical care support, trust Nano Hospitals—where expertise and empathy work together.
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