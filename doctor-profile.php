<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctors Listing</title>

    <!-- Tailwind CDN (for utility classes) -->


    <!-- CUSTOM CSS (NO @apply) -->
    <style>
        .pill {
            padding: 8px 24px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #d1d5db;
            background: #ffffff;
            color: #374151;
            transition: all 0.2s ease;
        }

        .pill:hover {
            border-color: #ef4444;
        }

        .pill.active {
            background: #ef4444;
            color: #ffffff;
            border-color: #ef4444;
        }

        .pill-red {
            background: #ef4444;
            color: #ffffff;
            border-color: #ef4444;
        }

        .pill-red:hover {
            background: #dc2626;
        }

        .specialty-option {
            padding: 8px 20px;
            cursor: pointer;
        }

        .specialty-option:hover {
            background: #fee2e2;
        }
    </style>
</head>

<body class="bg-white">

    <?php require "./header.php";  ?>

    <!-- FILTER BAR -->
    <div class="max-w-[1200px] mx-auto px-4 mt-10">
        <div class="flex items-center justify-between gap-4 flex-wrap mb-10">

            <!-- LOCATION PILLS -->
            <div class="flex items-center gap-3">
                <button class="location-filter pill active" data-location="All">All</button>
                <button class="location-filter pill" data-location="Uttarahalli">Uttarahalli</button>
                <button class="location-filter pill" data-location="Hulimavu">Hulimavu</button>
            </div>

            <!-- SPECIALTY DROPDOWN -->
            <div class="relative">
                <button id="specialtyBtn"
                    class="pill pill-red flex items-center gap-2"
                    type="button">
                    <span id="specialtyLabel">All Specialty</span>
                    <svg class="w-4 h-4 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>

                <div id="specialtyDropdown"
                    class="absolute right-0 mt-2 w-56 bg-white border rounded-xl shadow-xl hidden z-50">
                    <ul class="text-sm text-gray-700 py-2">
                        <li class="specialty-option" data-value="All">All Specialty</li>
                        <li class="specialty-option" data-value="Orthopaedics">Orthopaedics</li>
                        <li class="specialty-option" data-value="Cardiology">Cardiology</li>
                        <li class="specialty-option" data-value="Neurology">Neurology</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- CARDS SECTION -->
    <section class="w-full py-20">
        <div
            class="max-w-[1200px] mx-auto px-4
             grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
             gap-x-10 gap-y-32">

            <!-- CARD -->
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Uttarahalli"
                data-specialty="Orthopaedics"><!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/doctor-mohan.png" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Mohan M R </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS, DNB - Orthopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Consultant Orthopaedics<br /> and Reconstructive Surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="./profile.php" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>

            <!-- DUPLICATE CARD (EXAMPLE) -->
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Hulimavu"
                data-specialty="Orthopaedics"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/Dr Kishan Rao K.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Kishan Rao K </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, DNB (Ortho), MS (Ortho), MNAMS, PBFHS </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Consultant<br />Orthopaedics Surgeon</p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Uttarahalli"
                data-specialty="Orthopaedics"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-behhehalli-pavan.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Belehalli Pavan </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS, DNB - Orthopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Consultant<br />Orthopaedics Surgeon</p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Uttarahalli"
                data-specialty="Orthopaedics"><!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/Dr  Prashanth S Gorur - Ortho.png" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Prashanth S Gorur </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS - Othopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Fellowship in Arthroscopy & Sport<br /> Injuries & Shoulder Surgery </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Uttarahalli"
                data-specialty="Neurology"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-ragavendra-rao.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Dr Raghavendra Rao </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS - Othopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Spine Surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class="doctor-card relative w-[300px] mx-auto"
                data-location="Uttarahalli"
                data-specialty="Cardiology"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-sailaja.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Sailaja </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, Diploma in Child Health </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Paediatrician <br /> and Neonatologist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-amit-shetty.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Amit Shetty </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS - Othopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Consultant Trauma and Joint <br /> replacement surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-keshava-murthy.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Keshava Murthy </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS - Othopaedics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> MBBS, MS - Paediatrics <br>Specialist in Complex Trauma <br> and Paediatric Orthopaedic </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/Dr Rakhi Sircar.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Rakhi Sircar </h3>
                        <p class="text-sm text-gray-500 mt-1"> MBBS, MS - Paediatrics </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug"> Consultant Paediatrician </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-ramya-ck.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Ramya K S </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, MS - Gynacology </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Gynecologist, <br /> Obstetrician and Laproscopic <br /> Surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>

            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-prabha-ram.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Prabha Ramadorai </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, MS - Gynacology </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Gynecologist, <br /> Obstetrician and Laproscopic <br /> Surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-prabha-ram.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Prabha Ramadorai </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, MS - Gynacology </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Gynecologist, <br /> Obstetrician and Laproscopic <br /> Surgeon </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/Dr Suresh CH.png" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Suresh C H </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, MS - Physician </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Physician & <br /> Diabetologist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/Dr Kalyani Dilip Karkare.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Kalyani Dilip Karkare </h3>
                        <p class="text-sm text-gray-500 mt-1">BBS, DM - Neurology</p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Neurologist<br /> and Epilepsy Specialist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-sailendra.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Sailendra </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, DNB </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Radiologist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-sailendra.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Sailendra </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, DNB </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Radiologist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
            <div class=" doctor-card relative w-[300px] mx-auto"> <!-- DOCTOR IMAGE -->
                <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20"> <img src="./assets/doctors/dr-subash.webp" alt="Dr Mohan M R" class="w-52 h-52 object-cover" /> </div> <!-- CARD -->
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden"> <!-- SHARE ICON --> <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition"> <img src="./assets/icons/share.png" class="w-6 h-6" /> </button> <!-- DETAILS -->
                    <div class="px-5 pb-6">
                        <h3 class="text-lg font-semibold text-gray-900"> Dr Subhash </h3>
                        <p class="text-sm text-gray-500 mt-1">MBBS, DNB </p>
                        <p class="text-sm text-red-500 font-medium mt-3 leading-snug">Consultant Radiologist </p>
                    </div> <!-- BUTTON BAR -->
                    <div class="flex border-t border-gray-200"> <a hre f="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3"> Book Appointment </a> <a href="#" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50"> View Profile </a> </div>
                </div>
            </div>
        </div>

        <!-- PAGINATION -->
        <div id="pagination"
            class="flex justify-center items-center gap-2 mt-16"></div>
    </section>

    <!-- FILTER + PAGINATION SCRIPT -->
    <script>
        const cardsPerPage = 9;
        const allCards = Array.from(document.querySelectorAll(".doctor-card"));
        const pagination = document.getElementById("pagination");

        let currentPage = 1;
        let currentLocation = "All";
        let currentSpecialty = "All";
        let filteredCards = [...allCards];

        function applyFilters() {
            filteredCards = allCards.filter(card => {
                return (
                    (currentLocation === "All" || card.dataset.location === currentLocation) &&
                    (currentSpecialty === "All" || card.dataset.specialty === currentSpecialty)
                );
            });

            currentPage = 1;
            renderPage();
        }

        function renderPage() {
            allCards.forEach(c => c.style.display = "none");

            const start = (currentPage - 1) * cardsPerPage;
            filteredCards.slice(start, start + cardsPerPage)
                .forEach(c => c.style.display = "block");

            renderPagination();
        }

        function renderPagination() {
            pagination.innerHTML = "";
            const totalPages = Math.ceil(filteredCards.length / cardsPerPage);
            if (totalPages <= 1) return;

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement("button");
                btn.textContent = i;
                btn.className =
                    `px-4 py-2 rounded-full  ${i === currentPage
            ? "bg-red-500 text-white"
            : "bg-white"}`;
                btn.onclick = () => {
                    currentPage = i;
                    renderPage();
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                };
                pagination.appendChild(btn);
            }
        }

        // LOCATION FILTER
        document.querySelectorAll(".location-filter").forEach(btn => {
            btn.onclick = () => {
                document.querySelectorAll(".location-filter")
                    .forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                currentLocation = btn.dataset.location;
                applyFilters();
            };
        });

        // SPECIALTY DROPDOWN
        const specialtyBtn = document.getElementById("specialtyBtn");
        const specialtyDropdown = document.getElementById("specialtyDropdown");
        const specialtyLabel = document.getElementById("specialtyLabel");

        specialtyBtn.onclick = () =>
            specialtyDropdown.classList.toggle("hidden");

        document.querySelectorAll(".specialty-option").forEach(opt => {
            opt.onclick = () => {
                currentSpecialty = opt.dataset.value;
                specialtyLabel.textContent = opt.textContent;
                specialtyDropdown.classList.add("hidden");
                applyFilters();
            };
        });

        document.addEventListener("click", e => {
            if (!specialtyBtn.contains(e.target) &&
                !specialtyDropdown.contains(e.target)) {
                specialtyDropdown.classList.add("hidden");
            }
        });

        applyFilters();
    </script>

</body>

</html>