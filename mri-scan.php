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
                    Overview of MRI Scan Services
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        MRI (Magnetic Resonance Imaging) is a highly advanced diagnostic imaging technique that uses strong magnetic fields and radio waves to produce detailed images of soft tissues, organs, nerves, and joints—without using ionising radiation. MRI is especially valuable for evaluating conditions of the brain, spine, joints, muscles, and internal organs, where precision and clarity are critical. </p>

                    <!-- Hidden additional content -->
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, MRI Scan services are designed to support accurate diagnosis, confident treatment planning, and long-term patient care, in both emergency and elective clinical scenarios. </p>
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
      How MRI Scan Services Work
    </h2>

    <div class="space-y-4 text-gray-700 leading-relaxed">
      <p>
        MRI services at Nano Hospitals follow a carefully structured, patient-safe workflow:
      </p>

      <p><strong>Step 1: Clinical Evaluation</strong><br>
        The treating doctor assesses symptoms and determines the need for MRI imaging.
      </p>

      <p><strong>Step 2: Safety Screening</strong><br>
        Patients are screened for metallic implants, devices, or conditions that may affect MRI safety.
      </p>

      <p><strong>Step 3: Image Acquisition</strong><br>
        The patient lies comfortably on the MRI table while images are captured over a defined period.
      </p>

      <p><strong>Step 4: Image Processing & Review</strong><br>
        High-resolution images are processed and interpreted by experienced radiologists.
      </p>

      <p><strong>Step 5: Clinical Correlation</strong><br>
        Findings are shared with the treating specialist to guide diagnosis and treatment planning.
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
        MRI Scan services at Nano Hospitals are delivered through a combination of advanced imaging
        technology, trained professionals, and strict safety protocols:
      </p>

      <ul class="list-disc pl-5 space-y-2">
        <li>High-resolution MRI systems for detailed soft-tissue imaging</li>
        <li>Skilled radiographers and radiologists trained in MRI safety and interpretation</li>
        <li>Standardised MRI safety checklists aligned with NABH practices</li>
        <li>Seamless coordination with neurology, orthopedics, neurosurgery, and medicine teams</li>
        <li>Efficient internal reporting systems to avoid delays in care</li>
      </ul>

      <p>
        This ensures high diagnostic accuracy while maintaining patient comfort and safety.
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
          <li>Accurate, radiation-free diagnosis</li>
          <li>Early detection of complex conditions</li>
          <li>Better treatment planning and outcomes</li>
        </ul>
      </div>

      <div>
        <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
        <ul class="list-disc pl-5 space-y-1">
          <li>Clear diagnostic answers</li>
          <li>Reduced uncertainty during prolonged illness</li>
          <li>Confidence in evidence-based medical decisions</li>
        </ul>
      </div>

      <div>
        <h3 class="font-semibold mb-2">For the Community</h3>
        <ul class="list-disc pl-5 space-y-1">
          <li>Reliable access to advanced diagnostic imaging</li>
          <li>Reduced need for invasive diagnostic procedures</li>
          <li>Improved management of neurological and musculoskeletal disorders</li>
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
        MRI is considered a safe imaging modality, but certain challenges exist:
      </p>

      <ul class="list-disc pl-5 space-y-1">
        <li>Not suitable for some metallic implants or devices</li>
        <li>Claustrophobia or discomfort in enclosed spaces for some patients</li>
      </ul>

      <p class="font-semibold text-gray-900">
        Risk mitigation at Nano Hospitals includes:
      </p>

      <ul class="list-disc pl-5 space-y-1">
        <li>Thorough pre-scan screening and safety assessment</li>
        <li>Patient reassurance and continuous monitoring during the scan</li>
        <li>Clear communication before and during the procedure</li>
      </ul>
    </div>
  </div>
</section>

<!-- UNIQUENESS -->
<section id="advantages" class="scroll-mt-32 bg-white py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-6">
      Unique Advantages of MRI Scan Services at Nano Hospitals
    </h2>

    <ul class="list-disc pl-5 space-y-2 text-gray-700">
      <li>Radiation-free imaging with high diagnostic precision</li>
      <li>Integration with emergency, inpatient, and specialty care services</li>
      <li>NABH-aligned MRI safety protocols</li>
      <li>Specialist interpretation supporting accurate clinical decisions</li>
      <li>Patient-centric approach focusing on comfort, dignity, and clarity</li>
    </ul>
  </div>
</section>

<!-- FAQs -->
<section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-6">
      FAQs – MRI Scan Services
    </h2>

    <div class="space-y-3 text-gray-700 leading-relaxed">
      <p><strong>What conditions require an MRI scan?</strong><br>
        Brain and spine disorders, joint and ligament injuries, tumours, nerve conditions,
        and soft-tissue evaluation.
      </p>
      <p><strong>Is MRI safe?</strong><br>Yes. MRI does not use radiation.</p>
      <p><strong>Does an MRI scan cause pain?</strong><br>No.</p>
      <p><strong>How long does an MRI scan take?</strong><br>20–45 minutes.</p>
      <p><strong>Can pregnant women undergo MRI?</strong><br>Only if clinically necessary.</p>
      <p><strong>Will I need contrast dye?</strong><br>Only for specific scans.</p>
      <p><strong>What if I feel anxious inside the scanner?</strong><br>Staff provide reassurance.</p>
      <p><strong>When will I receive the MRI report?</strong><br>Promptly after interpretation.</p>
      <p><strong>Who interprets the MRI results?</strong><br>Experienced radiologists.</p>
    </div>
  </div>
</section>

<!-- CONCLUSION -->
<section id="conclusion" class="scroll-mt-32 bg-white py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-4">
      Clarity Without Radiation
    </h2>

    <p class="text-gray-700 leading-relaxed max-w-4xl">
      At Nano Hospitals, MRI Scan services deliver precision, safety, and diagnostic confidence,
      helping doctors and patients make informed decisions for better health outcomes.
      <br><br>
      <strong>
        For advanced, radiation-free imaging, connect with Nano Hospitals and take the next
        step toward accurate diagnosis.
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