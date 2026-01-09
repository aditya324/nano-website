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
                    Overview of Digital X-Ray Services
                </h2>

                <!-- Right Content -->
                <div class="flex-1 md:pl-10">
                    <!-- Always visible text -->
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Digital X-Ray is a modern imaging technique that uses low-dose radiation and digital sensors to produce clear, high-quality images of bones, lungs, joints, and internal structures. It is one of the most commonly used diagnostic tools for injuries, fractures, chest conditions, infections, and post-operative assessment, especially when quick clinical decisions are required
                    <div
                        id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            At Nano Hospitals, Digital X-Ray services are designed to deliver speed, accuracy, and safety, supporting emergency care, outpatient evaluation, and inpatient monitoring.
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
                How Digital X-Ray Services Work
            </h2>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Digital X-Ray at Nano Hospitals follows a fast and patient-friendly diagnostic flow:
                </p>

                <p><strong>Step 1: Clinical Evaluation</strong><br>
                    The doctor assesses symptoms or injury and advises an X-Ray for confirmation or evaluation.
                </p>

                <p><strong>Step 2: Positioning</strong><br>
                    The affected body part is carefully positioned to obtain the most accurate view.
                </p>

                <p><strong>Step 3: Image Capture</strong><br>
                    Digital detectors capture images instantly using controlled, low-dose radiation.
                </p>

                <p><strong>Step 4: Image Review</strong><br>
                    Images are immediately available for review by doctors and radiologists.
                </p>

                <p><strong>Step 5: Clinical Decision</strong><br>
                    Findings are used to guide treatment, further imaging, or referral to specialists.
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
                    Digital X-Ray services at Nano Hospitals are delivered through advanced equipment
                    and trained personnel:
                </p>

                <ul class="list-disc pl-5 space-y-2">
                    <li>Digital radiography systems for clear, instant imaging</li>
                    <li>Trained radiographers and radiologists</li>
                    <li>NABH-aligned radiation safety and quality protocols</li>
                    <li>Immediate access for Emergency, Orthopedic, and ICU patients</li>
                    <li>Seamless integration with CT, MRI, and laboratory services</li>
                </ul>

                <p>
                    This ensures rapid diagnosis without compromising patient safety.
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
                        <li>Quick diagnosis with minimal radiation exposure</li>
                        <li>Reduced waiting time during emergencies</li>
                        <li>Comfortable and non-invasive procedure</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For Families & Caregivers</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Faster clarity on injuries or illness</li>
                        <li>Reduced anxiety through immediate reporting</li>
                        <li>Confidence in timely medical decisions</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">For the Community</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Reliable first-line diagnostic imaging</li>
                        <li>Reduced complications due to early detection</li>
                        <li>Stronger trauma and emergency care support</li>
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
                    Digital X-Ray involves minimal risks:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Low-level radiation exposure, kept well within safety limits</li>
                </ul>

                <p class="font-semibold text-gray-900">
                    Risk mitigation at Nano Hospitals includes:
                </p>

                <ul class="list-disc pl-5 space-y-1">
                    <li>Use of the lowest effective radiation dose</li>
                    <li>Protective measures when required</li>
                    <li>Strict adherence to NABH radiation safety guidelines</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- UNIQUENESS -->
    <section id="advantages" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Unique Advantages of Digital X-Ray Services at Nano Hospitals
            </h2>

            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>24×7 availability, including emergency situations</li>
                <li>Instant image availability with digital systems</li>
                <li>Integration with Emergency, Orthopedic ICU, and specialty care</li>
                <li>NABH-aligned radiation and patient safety practices</li>
                <li>Patient-centric approach focused on comfort and speed</li>
            </ul>
        </div>
    </section>

    <!-- FAQs -->
    <section id="faqs" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Digital X-Ray Services
            </h2>

            <div class="space-y-3 text-gray-700 leading-relaxed">
                <p><strong>What conditions are diagnosed using Digital X-Ray?</strong><br>
                    Fractures, chest infections, lung conditions, joint problems, and post-surgical checks.
                </p>
                <p><strong>Is Digital X-Ray safe?</strong><br>Yes, it uses low-dose radiation.</p>
                <p><strong>Is the procedure painful?</strong><br>No.</p>
                <p><strong>How long does it take?</strong><br>Usually a few minutes.</p>
                <p><strong>Is it available 24×7?</strong><br>Yes.</p>
                <p><strong>Can ICU patients undergo Digital X-Ray?</strong><br>Yes.</p>
                <p><strong>When will I get the results?</strong><br>Immediately for review.</p>
                <p><strong>Who interprets the results?</strong><br>Qualified radiologists and doctors.</p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section id="conclusion" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">
                Fast Answers When Time Matters
            </h2>

            <p class="text-gray-700 leading-relaxed max-w-4xl">
                At Nano Hospitals, Digital X-Ray services provide quick, reliable imaging to support
                timely diagnosis and effective treatment—especially when every minute counts.
                <br><br>
                <strong>
                    For safe and prompt diagnostic imaging, choose Nano Hospitals—where clarity supports better care.
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