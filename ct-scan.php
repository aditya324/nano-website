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
                    Overview of CT Scan Services
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        A CT (Computed Tomography) Scan is an advanced diagnostic imaging test that uses X-rays and computer processing to produce detailed cross-sectional images of the body. It plays a critical role in identifying internal injuries, bleeding, infections, tumours, fractures, and organ abnormalities—especially when rapid, accurate diagnosis is essential.
                    </p>

                    <!-- Hidden additional content -->
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, CT Scan services are designed to support both emergency and planned care, enabling doctors to make fast, confident clinical decisions that directly impact patient outcomes.
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
    <div class="flex gap-3 overflow-x-auto">
      <button class="pill-btn active" data-target="workflow">How It Works</button>
      <button class="pill-btn" data-target="delivery">Service Delivery</button>
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

<!-- HOW IT WORKS -->
<section id="workflow" class="scroll-mt-32 bg-white py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-6">
      How CT Scan Services Work
    </h2>

    <div class="space-y-4 text-gray-700 leading-relaxed">
      <p>
        CT scanning at Nano Hospitals follows a patient-focused, time-efficient workflow:
      </p>

      <p><strong>Step 1: Clinical Assessment</strong><br>
        The treating doctor evaluates symptoms and determines the need for a CT scan.
      </p>

      <p><strong>Step 2: Scan Planning</strong><br>
        The specific body area is identified, and contrast use (if required) is decided.
      </p>

      <p><strong>Step 3: Image Acquisition</strong><br>
        The scan is performed within seconds while the patient lies comfortably on the scanning table.
      </p>

      <p><strong>Step 4: Image Processing & Review</strong><br>
        Images are reconstructed instantly and reviewed by specialists to guide treatment.
      </p>

      <p><strong>Step 5: Clinical Decision-Making</strong><br>
        Findings are integrated into the patient’s treatment plan—emergency intervention, surgery,
        ICU care, or medical management.
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
        CT Scan services at Nano Hospitals are delivered through advanced technology,
        trained professionals, and seamless coordination:
      </p>

      <ul class="list-disc pl-5 space-y-2">
        <li>Modern CT imaging systems with high-resolution capability</li>
        <li>Skilled radiographers and radiologists available round the clock</li>
        <li>Immediate connectivity with Emergency, ICU, and specialty departments</li>
        <li>NABH-aligned radiation safety and imaging protocols</li>
        <li>Efficient internal communication to ensure rapid reporting</li>
      </ul>

      <p>
        This ensures speed without compromising accuracy or safety.
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
          <li>Faster and more accurate diagnosis</li>
          <li>Early detection of critical conditions</li>
          <li>Reduced need for repeat investigations</li>
        </ul>
      </div>

      <div>
        <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
        <ul class="list-disc pl-5 space-y-1">
          <li>Faster clarity during emergencies</li>
          <li>Reduced anxiety through timely diagnosis</li>
          <li>Confidence in evidence-based treatment decisions</li>
        </ul>
      </div>

      <div>
        <h3 class="font-semibold mb-2">For the Community</h3>
        <ul class="list-disc pl-5 space-y-1">
          <li>Reliable diagnostic support during emergencies</li>
          <li>Reduced complications due to early intervention</li>
          <li>Strengthened trauma and emergency response care</li>
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
      <p>CT scanning involves certain considerations:</p>

      <ul class="list-disc pl-5 space-y-1">
        <li>Radiation exposure, though kept within safe limits</li>
        <li>Contrast-related reactions, which are rare</li>
      </ul>

      <p class="font-semibold text-gray-900">
        Risk mitigation at Nano Hospitals includes:
      </p>

      <ul class="list-disc pl-5 space-y-1">
        <li>Low-dose imaging protocols</li>
        <li>Pre-scan screening for contrast sensitivity</li>
        <li>Continuous monitoring during and after contrast administration</li>
        <li>NABH-compliant radiation safety practices</li>
      </ul>
    </div>
  </div>
</section>

<!-- UNIQUENESS -->
<section id="advantages" class="scroll-mt-32 bg-white py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-6">
      Unique Advantages of CT Scan Services at Nano Hospitals
    </h2>

    <ul class="list-disc pl-5 space-y-2 text-gray-700">
      <li>24×7 CT Scan availability, including for emergencies</li>
      <li>Seamless integration with Emergency and ICU services</li>
      <li>CT Scan on Wheels for critically ill or immobile patients</li>
      <li>Rapid image reporting to support time-sensitive care</li>
      <li>Patient-centric approach focused on comfort and safety</li>
    </ul>
  </div>
</section>

<!-- FAQs -->
<section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-6">
      FAQs – CT Scan Services
    </h2>

    <div class="space-y-3 text-gray-700 leading-relaxed">
      <p><strong>What conditions require a CT scan?</strong><br>
        Trauma, stroke, infections, tumours, internal bleeding, fractures, and organ evaluation.
      </p>
      <p><strong>Is a CT scan painful?</strong><br>No. It is painless and non-invasive.</p>
      <p><strong>How long does a CT scan take?</strong><br>Only seconds to minutes.</p>
      <p><strong>Is CT scanning safe?</strong><br>Yes, when clinically indicated.</p>
      <p><strong>Will I need contrast dye?</strong><br>Only if required, as decided by the doctor.</p>
      <p><strong>Are CT scans available 24×7?</strong><br>Yes.</p>
      <p><strong>Can children undergo CT scans?</strong><br>Yes, with dose adjustments.</p>
      <p><strong>When will I receive results?</strong><br>Reports are generated quickly.</p>
      <p><strong>Can ICU patients undergo CT scans?</strong><br>Yes, including CT Scan on Wheels.</p>
    </div>
  </div>
</section>

<!-- CONCLUSION -->
<section id="conclusion" class="scroll-mt-32 bg-white py-14">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold mb-4">
      Accurate Diagnosis When Time Matters
    </h2>

    <p class="text-gray-700 leading-relaxed max-w-4xl">
      At Nano Hospitals, CT Scan services combine speed, precision, and patient safety
      to support better outcomes—especially when every moment counts.
      <br><br>
      <strong>
        For emergency diagnostics or planned imaging, connect with Nano Hospitals
        and receive care guided by clarity and confidence.
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