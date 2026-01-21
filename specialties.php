<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "./header.php" ?>
    <h1 class="flex justify-center text-[#676767] text-2xl font-semibold">
        All Specialities
    </h1>

    <div
        id="specialityGrid"
        class="flex flex-wrap justify-center gap-10 gap-y-10 mt-6 md:px-28">
    </div>
    <script>
        const DEFAULT_IMAGE = "./assets/specialities/default.webp";

        const specialities = [{
                title: "Bone & Joint Care",
                shortTitle: "Bone &<br/>Joint Care",
                image: "./assets/specialities/bone-and-joint.webp",
                desc: "Advanced diagnosis and treatment for bone, joint and musculoskeletal disorders.",
                url:"./bone-and-joint.php"
            },
            {
                title: "Child Care",
                shortTitle: "Child<br/>Care",
                image: "./assets/specialities/child-care.webp",
                desc: "Compassionate pediatric care focused on the health, growth, and well-being of children.",
                 url:"./child-care.php"
            },
            {
                title: "Women’s Care",
                shortTitle: "Women’s<br/>Care",
                image: "./assets/specialities/women-care-removebg-preview.webp",
                desc: "Comprehensive healthcare services addressing women’s health needs across all life stages.",
                 url:"./women-care.php"
            },
            {
                title: "General Medicine",
                shortTitle: "General<br/>Medicine",
                image: "./assets/specialities/general-medicine.webp",
                desc: "Preventive, diagnostic, and therapeutic care for a wide range of adult health conditions.",
                 url:"./general-medicine.php"
            },
            {
                title: "Heart Care",
                shortTitle: "Heart<br/>Care",
                image: "./assets/specialities/heart-care.webp",
                desc: "Advanced cardiac care with diagnostics, interventions, and expert cardiologists.",
                 url:"./heart-care.php"
            },
            {
                title: "Brain & Spine Care",
                shortTitle: "Brain &<br/>Spine Care",
                image: "./assets/specialities/brain-care.webp",
                desc: "Specialized neurological and spine care for complex brain and spinal disorders.",
                 url:"./brain-care.php"
            },
            {
                title: "Lung Care",
                shortTitle: "Lung<br/>Care",
                image: "./assets/specialities/lung-care.webp",
                desc: "Comprehensive pulmonology care for respiratory diseases and lung disorders.",
                 url:"./lung-care.php"
            },
            {
                title: "Kidney Care",
                shortTitle: "Kidney<br/>Care",
                image: "./assets/specialities/kidney-care.webp",
                desc: "Expert nephrology services for acute and chronic kidney conditions.",
                 url:""
            },
            {
                title: "Urology Care",
                shortTitle: "Urology<br/>Care",
                image: "./assets/specialities/urology.webp",
                desc: "Advanced urological care for urinary tract and male reproductive health issues.",
                 url:""
            },
            {
                title: "Digestive Care",
                shortTitle: "Digestive<br/>Care",
                image: "./assets/specialities/gastro-care.webp",
                desc: "Specialized care for digestive system disorders including liver and pancreas.",
                 url:""
            },
            {
                title: "Diabetes & Hormone Care",
                shortTitle: "Diabetes &<br/>Hormone Care",
                image: "./assets/specialities/diabetes.webp",
                desc: "Comprehensive endocrinology care for diabetes and hormonal disorders.",
                 url:"./diabetes-harmone-care.php"
            },
            {
                title: "Cancer Care",
                shortTitle: "Cancer<br/>Care",
                image: "./assets/specialities/cancer-care.webp",
                desc: "Comprehensive oncology care using advanced diagnostics and treatment techniques.",
                 url:"./cancer-care.php"
            },
            {
                title: "Vascular Care",
                shortTitle: "Vascular<br/>Care",
                image: "./assets/specialities/vascular-care.webp",
                desc: "Diagnosis and treatment of vascular diseases affecting arteries and veins.",
                 url:""
            },
            {
                title: "Skin Care",
                shortTitle: "Skin<br/>Care",
                image: "./assets/specialities/skin-care.webp",
                desc: "Medical, cosmetic, and surgical dermatology services for healthy skin.",
                 url:""
            },
            {
                title: "Eye Care",
                shortTitle: "Eye<br/>Care",
                image: "./assets/specialities/eye-care.webp",
                desc: "Advanced ophthalmology services for vision care and eye health.",
                 url:""
            },
            {
                title: "ENT Care (Ear, Nose & Throat)",
                shortTitle: "ENT<br/>Care",
                image: "./assets/specialities/ent.webp",
                desc: "Comprehensive ENT services for ear, nose, throat, and sinus conditions.",
                 url:""
            },
            {
                title: "Mental Health & Mind Care",
                shortTitle: "Mind<br/>Care",
                image: "./assets/specialities/mind-care.webp",
                desc: "Holistic mental health services supporting emotional and psychological well-being.",
                 url:"./mental-health.php"
            },
            {
                title: "Rheumatology (Joint & Autoimmune Care)",
                shortTitle: "Rheumatology<br/>Care",
                image: "./assets/specialities/bone-and-joint.webp",
                desc: "Specialized care for autoimmune and inflammatory joint disorders.",
                 url:"./rhemetology.php"
            },
            {
                title: "Plastic, Reconstructive & Burn Care",
                shortTitle: "Plastic &<br/>Reconstructive Care",
                image: "./assets/specialities/reconstructive-surgery.webp",
                desc: "Advanced reconstructive and cosmetic procedures including burn management.",
                 url:"./plastic-reconstructive-care.php"
            },
            {
                title: "Oral & Facial Surgery",
                shortTitle: "Oral &<br/>Facial Surgery",
                image: DEFAULT_IMAGE,
                desc: "Specialized surgical care for oral, facial, and maxillofacial conditions.",
                 url:"./oral-facial-surgery.php"
            },
            {
                title: "General Surgery",
                shortTitle: "General<br/>Surgery",
                image: "./assets/specialities/genral-surgery.webp",
                desc: "Comprehensive surgical care using minimally invasive and advanced techniques.",
                 url:"./general-surgery.php"
            },
            {
                title: "Emergency & Critical Care",
                shortTitle: "Emergency &<br/>Critical Care",
                image: "./assets/specialities/emergrncy-care.webp",
                desc: "24/7 emergency and critical care services with rapid response teams.",
                url:"./emergency-care.php"
            },
            {
                title: "Rehabilitation & Physiotherapy",
                shortTitle: "Rehab &<br/>Physiotherapy",
                image: "./assets/specialities/physical-rehab.webp",
                desc: "Rehabilitation services restoring mobility, strength, and quality of life.",
                 url:"./rehabilitation.php"
            },
            {
                title: "Elder Care",
                shortTitle: "Elder<br/>Care",
                image: "./assets/specialities/elder-care.webp",
                desc: "Dedicated healthcare services focused on the needs of senior citizens.",
                 url:"./elder-care.php"
            },
            {
                title: "Radiology & Imaging",
                shortTitle: "Radiology &<br/>Imaging",
                image: "./assets/specialities/radiology.webp",
                desc: "Advanced diagnostic imaging including CT, MRI, ultrasound, and X-ray.",
                 url:"./radiology.php"
            },
            {
                title: "Laboratory & Diagnostic Services",
                shortTitle: "Laboratory &<br/>Diagnostics",
                image: "./assets/specialities/laboratory-medicine.webp",
                desc: "Accurate and timely laboratory testing supporting clinical decisions.",
                 url:"./labrotory-diagnostic-services.php"
            }
        ];
    </script>
    <script>
        const grid = document.getElementById("specialityGrid");

        grid.innerHTML = specialities.map(item => {
            const img = item.image || DEFAULT_IMAGE;

            return `
    <div class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

      <div class="absolute inset-0 bg-cover bg-no-repeat"
           style="background-image: url('./assets/background/Frame 134.png');"></div>

      <!-- Default -->
      <img src="${img}"
           class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

      <div class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
        <h3 class="text-red-500 font-semibold text-xl leading-snug">
          ${item.shortTitle}
        </h3>
      </div>

      <!-- Hover -->
      <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
        <div class="absolute inset-0 bg-red-600/80"></div>

        <img src="${img}"
             class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

        <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
          <div>
            <h3 class="text-2xl font-semibold mb-4">${item.title}</h3>
            <p class="text-sm leading-relaxed opacity-95">${item.desc}</p>
          </div>

          <a href=${item.url}>
          <div class="flex items-center justify-between">
            <span class="text-sm font-medium">Read More</span>
            <span class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
          </div>
          </a>
        </div>
      </div>

    </div>
  `;
        }).join("");
    </script>


</body>

</html>