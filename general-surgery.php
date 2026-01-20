<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Surgery & Allied Specialties – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="General Surgery"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        General Surgery &amp; Allied Specialties
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Surgeon
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
                    About General Surgery
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        General Surgery &amp; Allied Specialties at Nano Hospitals provides comprehensive
                        surgical care for conditions affecting the abdomen, digestive system, soft tissues,
                        and related organs. Surgery is often a decisive step in treatment—whether planned or
                        emergency—and requires precision, safety, and coordinated post-operative care.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            The department focuses on accurate diagnosis, timely intervention, minimally
                            invasive techniques where appropriate, and structured recovery. Care is delivered
                            by experienced surgical teams supported by advanced operation theatres, imaging,
                            ICU backup, and recovery units.
                        </p>
                        <p class="mt-2">
                            Every surgical decision follows the principle of “right surgery, at the right
                            time, for the right patient”, ensuring safety, transparency, and optimal outcomes.
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
                Overview of General Surgery
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    General Surgery addresses both elective and emergency conditions requiring surgical
                    intervention, with emphasis on safety, accuracy, and recovery.
                </p>
                <p>
                    At Nano Hospitals, surgical care is seamlessly integrated with diagnostics, anaesthesia,
                    ICU, and rehabilitation services for complete perioperative management.
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
                    <h3 class="font-semibold mb-2">Elective Surgical Procedures</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Hernia repair</li>
                        <li>Gallbladder surgery</li>
                        <li>Appendix surgery</li>
                        <li>Soft tissue and lump excisions</li>
                        <li>Thyroid and breast surgeries when indicated</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Minimally Invasive (Laparoscopic) Surgery</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Laparoscopic appendectomy</li>
                        <li>Laparoscopic cholecystectomy</li>
                        <li>Laparoscopic hernia repair</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Emergency &amp; Post-operative Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Acute abdominal emergencies</li>
                        <li>Intestinal obstruction and perforation surgeries</li>
                        <li>Trauma-related surgical interventions</li>
                        <li>Pain management, wound care, and recovery planning</li>
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
                <li>Dedicated operation theatres with modern surgical equipment</li>
                <li>Laparoscopic surgery systems</li>
                <li>Image intensifier (C-Arm) support when required</li>
                <li>Advanced laboratory medicine for perioperative evaluation</li>
                <li>ICU and recovery unit support</li>
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
                <li>Appendicitis, gallstones, and hernias</li>
                <li>Intestinal obstruction and abdominal emergencies</li>
                <li>Lumps, swellings, and soft tissue conditions</li>
                <li>Thyroid and breast conditions requiring surgery</li>
                <li>Peritonitis, abscesses, and trauma-related injuries</li>
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
                <li>Right surgery, at the right time, for the right patient</li>
                <li>Emphasis on minimally invasive approaches</li>
                <li>Strict safety and infection-control protocols</li>
                <li>Structured post-operative recovery and rehabilitation</li>
                <li>Clear communication and informed consent</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in General Surgery
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Elective and emergency general surgery</li>
                <li>Laparoscopic and minimally invasive surgery</li>
                <li>Gastrointestinal surgery</li>
                <li>Trauma and acute care surgery</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – General Surgery
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you perform laparoscopic surgeries?</strong><br>Yes.</p>
                <p><strong>Are emergency surgeries available?</strong><br>Yes.</p>
                <p><strong>Is ICU backup available?</strong><br>Yes.</p>
                <p><strong>Is post-operative care provided?</strong><br>Yes.</p>
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
