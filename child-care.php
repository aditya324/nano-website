<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Care – Nano Hospitals</title>
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
        <img src="./assets/banners/health-package-banner.png" alt="Child Care"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Child Care (Paediatrics & Neonatology)
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                        Consult Child Specialist
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
                    About Child Care
                </h2>

                <div class="flex-1 md:pl-10">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Child Care at Nano Hospitals is dedicated to providing comprehensive, compassionate,
                        and age-appropriate medical care for newborns, infants, children, and adolescents.
                        Children are not just small adults—their bodies, immunity, growth patterns, and
                        emotional needs are unique and require specialised medical expertise.
                    </p>

                    <div id="moreContent"
                        class="hidden mt-2 text-gray-500 text-sm md:text-base leading-relaxed">
                        <p>
                            From the first moments of life to the critical years of growth and development,
                            the department focuses on early detection, timely treatment, and preventive
                            healthcare. Whether it is a premature newborn, a child with recurrent infections,
                            or an adolescent with developmental concerns, care is delivered with equal
                            emphasis on medical accuracy and emotional comfort.
                        </p>
                        <p class="mt-2">
                            The department works closely with parents and caregivers, ensuring they are
                            informed, supported, and actively involved at every stage of the child’s care
                            journey.
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
                Overview of Child Care
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Child Care services focus on the medical, developmental, and emotional needs of children
                    from birth through adolescence. Early diagnosis and timely intervention play a vital role
                    in ensuring healthy growth and long-term wellbeing.
                </p>
                <p>
                    Nano Hospitals combines paediatric expertise with a child-friendly approach to deliver
                    safe, effective, and reassuring care.
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
                    <h3 class="font-semibold mb-2">Neonatal Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Immediate newborn assessment and stabilisation</li>
                        <li>Care for premature and low-birth-weight babies</li>
                        <li>Thermal care, feeding support, and infection prevention</li>
                        <li>Neonatal resuscitation when required</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Paediatric Medical Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Diagnosis and treatment of childhood illnesses</li>
                        <li>Management of infections and respiratory conditions</li>
                        <li>Nutritional assessment and growth monitoring</li>
                        <li>Developmental screening and follow-up</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Paediatric Emergency & Preventive Care</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Emergency stabilisation of sick children</li>
                        <li>Management of dehydration, breathing difficulty, and infections</li>
                        <li>Immunisation and regular health check-ups</li>
                        <li>Parental guidance on nutrition and development</li>
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
                <li>Neonatal Intensive Care Unit (NICU)</li>
                <li>Neonatal resuscitation setup within delivery areas</li>
                <li>Advanced laboratory diagnostics</li>
                <li>Imaging support (X-ray, ultrasound, CT when indicated)</li>
                <li>24×7 emergency and ICU backup</li>
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
                <li>Prematurity and low birth weight</li>
                <li>Neonatal infections and breathing difficulties</li>
                <li>Fever, respiratory and gastrointestinal infections</li>
                <li>Nutritional deficiencies and feeding difficulties</li>
                <li>Delayed milestones and poor weight gain</li>
                <li>Paediatric emergencies including seizures and dehydration</li>
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
                <li>Early diagnosis and timely intervention</li>
                <li>Family-centred communication and involvement</li>
                <li>Gentle handling and emotional reassurance</li>
                <li>Long-term focus on healthy growth and development</li>
            </ul>
        </div>
    </section>

    <!-- SUB-SPECIALTIES -->
    <section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                Sub-specialties in Child Care
            </h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                <li>Neonatology</li>
                <li>General Paediatrics</li>
                <li>Preventive Child Health</li>
                <li>Developmental Paediatrics</li>
            </ul>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqs" class="scroll-mt-32 bg-white py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                FAQs – Child Care
            </h2>
            <div class="space-y-3 text-gray-700">
                <p><strong>Do you provide NICU support?</strong><br>Yes.</p>
                <p><strong>Are immunisations available?</strong><br>Yes.</p>
                <p><strong>Is emergency care available 24×7?</strong><br>Yes.</p>
                <p><strong>Are parents involved in care decisions?</strong><br>Always.</p>
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
