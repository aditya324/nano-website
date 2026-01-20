<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease – Nano Hospitals</title>
    <style>
        .pill-btn{padding:8px 18px;border-radius:9999px;font-size:14px;font-weight:500;background:#f3f4f6;color:#374151;transition:.2s;cursor:pointer;white-space:nowrap}
        .pill-btn:hover{background:#fee2e2;color:#dc2626}
        .pill-btn.active{background:#dc2626;color:#fff}
    </style>
</head>

<body>
<?php require "./header.php" ?>

<section class="relative w-full min-h-[520px]">
    <img src="./assets/banners/health-package-banner.png" alt="Heart Disease" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16 flex justify-center items-center text-center text-white">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold">Heart Disease</h1>
            <a href="#" class="inline-block bg-[#FA424A] px-8 py-3 rounded-full font-bold">Consult Cardiologist</a>
        </div>
    </div>
</section>

<section class="bg-[#F5F5F5] py-6">
    <div class="container mx-auto px-6 flex flex-col md:flex-row gap-4">
        <h2 class="text-2xl font-bold text-[#5E5E5E]">About Heart Disease</h2>
        <div class="flex-1 md:pl-10">
            <p class="text-gray-500">
                Heart disease includes conditions affecting the heart’s blood supply and function, such as
                coronary artery disease, angina, and heart attacks.
            </p>
            <div id="moreContent" class="hidden mt-2 text-gray-500">
                <p>
                    Reduced blood flow to the heart muscle can lead to chest pain, breathlessness, and
                    life-threatening complications if untreated.
                </p>
            </div>
            <button id="readMoreBtn" class="text-red-500 mt-2">Read More ›</button>
        </div>
    </div>
</section>

<div class="sticky top-0 bg-white border-b z-50">
    <div class="container mx-auto px-4 py-3 flex gap-3 overflow-x-auto">
        <button class="pill-btn active" data-target="overview">Overview</button>
        <button class="pill-btn" data-target="workflow">Symptoms</button>
        <button class="pill-btn" data-target="delivery">Causes</button>
        <button class="pill-btn" data-target="benefits">Risks</button>
        <button class="pill-btn" data-target="risks">Diagnosis & Prevention</button>
        <button class="pill-btn" data-target="advantages">Treatment</button>
        <button class="pill-btn" data-target="faqs">FAQs</button>
    </div>
</div>

<section id="overview" class="py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Introduction</h2>
        <p>Heart disease affects blood flow to the heart and can impair its ability to function effectively.</p>
    </div>
</section>

<section id="workflow" class="bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Symptoms</h2>
        <ul class="list-disc pl-5">
            <li>Chest pain (angina)</li>
            <li>Shortness of breath</li>
            <li>Fatigue</li>
            <li>Palpitations</li>
        </ul>
    </div>
</section>

<section id="delivery" class="py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Causes</h2>
        <ul class="list-disc pl-5">
            <li>High cholesterol</li>
            <li>Hypertension</li>
            <li>Smoking</li>
            <li>Diabetes</li>
        </ul>
    </div>
</section>

<section id="benefits" class="bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Risks if Untreated</h2>
        <ul class="list-disc pl-5">
            <li>Heart attack</li>
            <li>Heart failure</li>
            <li>Death</li>
        </ul>
    </div>
</section>

<section id="risks" class="py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Diagnosis & Prevention</h2>
        <ul class="list-disc pl-5">
            <li>ECG, Echocardiogram, Angiography</li>
            <li>Healthy diet and regular exercise</li>
            <li>Quit smoking</li>
            <li>Control BP and cholesterol</li>
        </ul>
    </div>
</section>

<section id="advantages" class="bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Treatment</h2>
        <ul class="list-disc pl-5">
            <li>Medications (statins, beta-blockers)</li>
            <li>Angioplasty</li>
            <li>Bypass surgery</li>
        </ul>
    </div>
</section>

<section id="faqs" class="py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4">Recovery & Outlook</h2>
        <p>With timely treatment, survival and quality of life significantly improve.</p>
    </div>
</section>

</body>
</html>
