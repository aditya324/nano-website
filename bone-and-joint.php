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
        <img src="./assets/banners/health-package-banner.png" alt="Bone and Joint Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Bone and Joint Care
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Orthopaedic Expert
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#F5F5F5] py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                    About Bone and Joint Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Bone and Joint Care at Nano Hospitals is dedicated to the diagnosis, treatment, and
                        long-term management of disorders affecting bones, joints, muscles, ligaments, tendons,
                        and the spine. The department addresses conditions that limit mobility, cause chronic pain,
                        or result from injury, ageing, lifestyle factors, or underlying medical diseases.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            Musculoskeletal problems often begin silently — mild knee pain, back stiffness, or
                            reduced flexibility — but can gradually interfere with daily activities, independence,
                            and overall quality of life. At Nano Hospitals, care focuses not only on relieving pain
                            but also on restoring movement, strength, and confidence through timely intervention
                            and structured rehabilitation.
                        </p>
                        <p class="mt-2">
                            Care is delivered through a patient-centred approach, combining clinical expertise,
                            accurate diagnosis, modern surgical techniques, and comprehensive post-treatment
                            recovery support. Each treatment plan is personalised based on age, activity level,
                            disease severity, and overall health.
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

    <div class="sticky top-0 z-50 bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex gap-3 overflow-x-auto" id="pillNav">
                <button class="pill-btn active" data-target="overview">Overview</button>
                <button class="pill-btn" data-target="workflow">Treatments</button>
                <button class="pill-btn" data-target="delivery">Facilities</button>
                <button class="pill-btn" data-target="benefits">Conditions</button>
                <button class="pill-btn" data-target="risks">Challenges</button>
                <button class="pill-btn" data-target="advantages">Sub-specialties</button>
                <button class="pill-btn" data-target="faqs">FAQs</button>
            </div>
        </div>
    </div>

    <!-- OVERVIEW -->
    <section id="overview" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Overview of Bone and Joint Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Bone and Joint Care focuses on diagnosing and managing musculoskeletal conditions that affect
                    mobility, strength, and daily function. Early symptoms such as joint pain, stiffness, or
                    restricted movement can progress if left untreated.
                </p>
                <p>
                    Nano Hospitals emphasises early diagnosis, personalised treatment planning, and long-term
                    rehabilitation to improve mobility and quality of life.
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
                    <h3 class="font-semibold mb-2">Non-Surgical Treatments</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Medical management of joint pain and inflammation</li>
                        <li>Pain relief protocols and mobility support</li>
                        <li>Physiotherapy and rehabilitation programs</li>
                        <li>Posture correction and ergonomic guidance</li>
                        <li>Bone health evaluation and osteoporosis management</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Minimally Invasive Procedures</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Arthroscopy for knee, shoulder, and other joints</li>
                        <li>Image-guided joint injections</li>
                        <li>Sports injury repair with minimal tissue damage</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Surgical Treatments</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Fracture fixation and trauma surgery</li>
                        <li>Joint replacement surgeries (knee, hip, shoulder)</li>
                        <li>Spine surgeries for nerve compression or instability</li>
                        <li>Corrective surgeries for deformities</li>
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
                <li>Digital X-Ray for rapid diagnosis</li>
                <li>CT Scan and MRI for joint and spine evaluation</li>
                <li>C-Arm for precision-guided procedures</li>
                <li>Dedicated Orthopaedic ICU support</li>
                <li>Post-operative recovery and monitoring units</li>
                <li>Rehabilitation and physiotherapy services</li>
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
                <li>Osteoarthritis and degenerative joint disease</li>
                <li>Degenerative disc disease and spondylosis</li>
                <li>Fractures, dislocations, and trauma injuries</li>
                <li>Sports injuries and ligament tears</li>
                <li>Chronic back pain, sciatica, and slipped disc</li>
                <li>Osteoporosis and inflammatory joint conditions</li>
            </ul>
        </div>
    </section>

    <!-- CHALLENGES -->
    <section id="risks" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Risks and Challenges
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Progressive degeneration if untreated</li>
                <li>Reduced mobility and chronic pain</li>
                <li>Risk of fractures in osteoporosis</li>
                <li>Need for long-term rehabilitation</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Bone and Joint Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Joint Replacement Surgery</li>
                <li>Spine Care and Back Pain Management</li>
                <li>Sports Medicine and Arthroscopy</li>
                <li>Orthopaedic Trauma Care</li>
                <li>Geriatric Orthopaedics</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Bone and Joint Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Is surgery always required?</strong><br>No. Non-surgical treatments are prioritised whenever possible.</p>
                <p><strong>Do you provide physiotherapy?</strong><br>Yes.</p>
                <p><strong>Are joint replacements safe?</strong><br>Yes, when clinically indicated.</p>
                <p><strong>Is rehabilitation included?</strong><br>Yes.</p>
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
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('readMoreBtn');
            const content = document.getElementById('moreContent');

            if (!btn || !content) return;

            btn.addEventListener('click', function() {
                const isHidden = content.classList.contains('hidden');

                content.classList.toggle('hidden');

                btn.innerHTML = isHidden ?
                    `Read Less
               <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">‹</span>` :
                    `Read More
               <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>`;
            });
        });
    </script>


</body>

</html>