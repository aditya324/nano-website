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
                    About Health Packages
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Health Packages at Nano Hospitals are designed to make preventive
                        healthcare simple, affordable, and accessible. These comprehensive
                        checkup packages help detect health issues early through a wide range
                        of diagnostic tests, including blood investigations, organ-specific
                        screenings, and lifestyle risk assessments.
                    </p>

                    <!-- Hidden additional content -->
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Each package is curated by medical experts to suit different age
                            groups and health needs. Regular health checkups not only help in
                            early diagnosis but also promote long-term wellness by enabling
                            timely medical intervention and lifestyle modifications.
                        </p>
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
    <div class="sticky top-0 z-50 bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex gap-3 overflow-x-auto" id="pillNav">
                <button class="pill-btn active" data-target="overview">Overview</button>
                <button class="pill-btn" data-target="workflow">How It Works</button>
                <button class="pill-btn" data-target="delivery">Delivery</button>
                <button class="pill-btn" data-target="benefits">Benefits</button>
                <button class="pill-btn" data-target="risks">Risks</button>
                <button class="pill-btn" data-target="advantages">Uniqueness</button>
                <button class="pill-btn" data-target="faqs">FAQs</button>
            </div>
        </div>
    </div>

    <!-- =====================
SECTIONS
===================== -->

    <section id="overview" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Overview of 24×7 Emergency Services
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    24×7 Emergency Services are designed to provide immediate, life-saving medical care
                    for sudden, severe, or critical health conditions—at any time of the day or night.
                    Medical emergencies such as road traffic accidents, heart attacks, strokes, breathing
                    difficulties, severe infections, pregnancy-related complications, and acute injuries
                    require rapid assessment and timely intervention, where even a few minutes can influence
                    survival and recovery.
                </p>
                <p>
                    At Nano Hospitals, the Emergency Department functions with continuous clinical readiness,
                    ensuring that patients receive prompt attention, stabilisation, and coordinated care
                    the moment they arrive.
                </p>
            </div>
        </div>
    </section>

    <section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                How 24×7 Emergency Services Work
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p><strong>Step 1: Immediate Triage</strong><br>
                    On arrival, patients are assessed within minutes to determine the severity of their condition.
                    Life-threatening cases are prioritised instantly.
                </p>
                <p><strong>Step 2: Rapid Stabilisation</strong><br>
                    Emergency doctors initiate critical interventions such as airway support, oxygen therapy,
                    intravenous fluids, pain management, and emergency medications.
                </p>
                <p><strong>Step 3: Quick Diagnosis</strong><br>
                    On-site access to ECG, CT Scan, Digital X-Ray, and laboratory investigations enables rapid
                    clinical clarity.
                </p>
                <p><strong>Step 4: Specialist Coordination</strong><br>
                    Emergency physicians coordinate in real time with intensivists, surgeons, cardiologists,
                    neurologists, obstetricians, or other specialists as required.
                </p>
                <p><strong>Step 5: Definitive Care</strong><br>
                    Based on the diagnosis, patients are shifted to ICU, taken for emergency surgery, admitted
                    for monitoring, or stabilised and managed further.
                </p>
            </div>
        </div>
    </section>

    <section id="delivery" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                How the Service Is Delivered
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    24×7 Emergency Services at Nano Hospitals are delivered through round-the-clock operational
                    preparedness, supported by trained teams, protocols, and technology.
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Dedicated emergency physicians and trained nursing staff available at all hours</li>
                    <li>Standardised emergency protocols aligned with NABH quality benchmarks</li>
                    <li>Immediate access to critical diagnostics and resuscitation equipment</li>
                    <li>Seamless internal communication for rapid decision-making</li>
                    <li>Direct connectivity with ICU, operation theatres, and specialty teams</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Benefits and Value
            </h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <h3 class="font-semibold mb-2">For Patients</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Faster diagnosis and treatment initiation</li>
                        <li>Reduced complications during critical conditions</li>
                        <li>Improved survival and recovery outcomes</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">For Caregivers & Families</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reassurance that expert care is always available</li>
                        <li>Clear communication during stressful moments</li>
                        <li>Confidence in timely, ethical medical decisions</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">For the Community</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reliable emergency medical access at all times</li>
                        <li>Reduced risks associated with delayed care</li>
                        <li>Stronger emergency response support for the region</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="risks" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Risks and Challenges
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>High-risk, time-sensitive medical conditions</li>
                <li>Sudden influx of multiple critical patients</li>
                <li>Limited medical history available during emergencies</li>
                <li>Protocol-driven workflows to minimise delays and errors</li>
            </ul>
        </div>
    </section>

    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Unique Advantages of 24×7 Emergency Services at Nano Hospitals
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Emergency doctors and nursing teams present 24×7</li>
                <li>Rapid access to CT Scan, ECG, Digital X-Ray, and laboratories</li>
                <li>Seamless escalation to ICU, surgery, or specialty care</li>
                <li>NABH-aligned safety and patient-centric protocols</li>
            </ul>
        </div>
    </section>

    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – 24×7 Emergency Services
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Are emergency services available round the clock?</strong><br>Yes.</p>
                <p><strong>Do I need an appointment?</strong><br>No.</p>
                <p><strong>How quickly is a patient seen?</strong><br>Within minutes.</p>
                <p><strong>Are doctors available at all times?</strong><br>Yes.</p>
                <p><strong>Are diagnostics available at night?</strong><br>Yes.</p>
            </div>
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