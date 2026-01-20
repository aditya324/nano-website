<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Care – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Women Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Women Care (Obstetrics &amp; Gynaecology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Women Care Specialist
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
                    About Women Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Women Care at Nano Hospitals is dedicated to supporting women through every stage of
                        life—adolescence, reproductive years, pregnancy, childbirth, and menopause. Women’s
                        health needs are complex and dynamic, influenced by hormonal changes, lifestyle,
                        family planning choices, and age-related transitions.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            From preventive screenings and menstrual health to safe motherhood and advanced
                            gynaecological care, the department emphasises early diagnosis, informed
                            decision-making, and respectful care. During pregnancy and childbirth, special
                            focus is placed on maternal safety and newborn wellbeing, supported by integrated
                            neonatal services and emergency preparedness.
                        </p>
                        <p class="mt-2">
                            Care is delivered in partnership with women and their families—ensuring clarity,
                            dignity, and emotional support alongside medical excellence.
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
                Overview of Women Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Women Care focuses on preventive health, reproductive wellbeing, safe motherhood, and
                    gynaecological care across all life stages. Early diagnosis and continuity of care help
                    women make informed health decisions.
                </p>
                <p>
                    Nano Hospitals combines clinical expertise with respectful, compassionate care to support
                    women’s long-term wellbeing.
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
                    <h3 class="font-semibold mb-2">Preventive &amp; Outpatient Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Adolescent gynaecology counselling</li>
                        <li>Menstrual health evaluation and management</li>
                        <li>Family planning and contraception guidance</li>
                        <li>Routine gynaecological check-ups and screenings</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Antenatal &amp; Pregnancy Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Preconception counselling</li>
                        <li>Antenatal check-ups and fetal monitoring</li>
                        <li>Management of pregnancy-related conditions</li>
                        <li>High-risk pregnancy monitoring and care</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Labour, Delivery &amp; Gynaecological Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Normal and assisted vaginal deliveries</li>
                        <li>Emergency obstetric interventions</li>
                        <li>Immediate newborn assessment and care</li>
                        <li>Medical and surgical gynaecological treatments</li>
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
                <li>Advanced labour room with continuous monitoring</li>
                <li>Neonatal resuscitation setup within delivery areas</li>
                <li>NICU for immediate newborn support</li>
                <li>Ultrasound and imaging services</li>
                <li>Advanced laboratory diagnostics</li>
                <li>Emergency operation theatre access</li>
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
                <li>Irregular or painful periods, PCOS, and hormonal imbalances</li>
                <li>High-risk pregnancies and gestational complications</li>
                <li>Anaemia during pregnancy</li>
                <li>Uterine fibroids, ovarian cysts, and pelvic infections</li>
                <li>Adolescent and menopause-related gynaecological concerns</li>
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
                <li>Respectful, woman-centred care</li>
                <li>Clear communication and shared decision-making</li>
                <li>Safety-first clinical protocols</li>
                <li>Emotional support during sensitive life moments</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Women Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Obstetrics and Maternity Care</li>
                <li>High-Risk Pregnancy Management</li>
                <li>Preventive Gynaecology</li>
                <li>Adolescent and Menopause Care</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Women Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you manage high-risk pregnancies?</strong><br>Yes.</p>
                <p><strong>Are labour and delivery services available?</strong><br>Yes.</p>
                <p><strong>Is NICU support available?</strong><br>Yes.</p>
                <p><strong>Do you provide preventive screenings?</strong><br>Yes.</p>
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
