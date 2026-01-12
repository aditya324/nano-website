<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "./header.php";  ?>
    <section class="w-full bg-[#E6E6E6] relative pb-24 xl:pb-20 overflow-visible">
        <div class="container mx-auto px-4 sm:px-6 xl:px-8 pt-10">

            <!-- GRID -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-10 relative">

                <!-- LEFT COLUMN (IMAGE HOLDER) -->
                <div class="relative flex justify-center xl:block">

                    <!-- DOCTOR IMAGE -->
                    <img
                        src="./assets/doctors/doctor-mohan.png"
                        alt="Dr Mohan M R"
                        class="
            w-[220px] sm:w-[260px] xl:w-[300px]
            relative xl:absolute
            xl:top-14 xl:left-60 xl:-translate-x-1/2
            z-40
          " />

                </div>

                <!-- RIGHT CONTENT -->
                <div>

                    <!-- HEADER -->
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-4">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">
                                Dr Mohan M R
                            </h2>

                            <p class="text-sm font-semibold text-gray-600 uppercase mt-1">
                                Medical Director – Nano Hospitals
                            </p>

                            <p class="text-sm text-gray-600">
                                Lead Consultant – Orthopaedics & Reconstructive Surgeon
                            </p>
                        </div>
                    </div>

                    <!-- INFO CARDS -->
                    <div
                        class="
            grid grid-cols-1 sm:grid-cols-2
            gap-4 mt-6
            max-w-full xl:max-w-[820px]
          ">
                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Qualification:</p>
                            <p class="text-sm text-gray-600 mt-1">
                                MBBS, MS (Ortho), Mch (Ortho), FRCS, FIMSA
                            </p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Specialties:</p>
                            <p class="text-sm text-gray-600 mt-1">
                                Orthopaedics, Reconstructive Surgeries, Robotic Surgeries,
                                Knee Replacement Surgeries
                            </p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Practicing Since:</p>
                            <p class="text-sm text-gray-600 mt-1">1995</p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Location:</p>
                            <p class="text-sm text-gray-600 mt-1">
                                Uttarahalli, Hulimavu
                            </p>
                        </div>
                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">KMC number:</p>
                            <p class="text-sm text-gray-600 mt-1">
                                63479
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FLOATING / STACKING BOTTOM BAR -->
        <div
            class="
      relative xl:absolute
      xl:left-1/2 xl:-translate-x-1/2
      xl:-bottom-8
      w-full z-30
      mt-10 xl:mt-0
    ">
            <div class="container mx-auto px-4 sm:px-6 xl:px-8">
                <div
                    class="
          flex flex-col xl:flex-row
          gap-6 xl:gap-0
          justify-between items-stretch xl:items-center
        ">

                    <!-- LEFT BUTTONS -->
                    <div
                        class="
            flex flex-col sm:flex-row
            rounded-xl overflow-hidden
            shadow-xl
            w-full xl:w-auto
          ">
                        <button
                            class="
              bg-[#FF3B3B] text-white
              px-8 py-4 font-semibold
              w-full sm:w-auto
            ">
                            Book Appointment
                        </button>

                        <button
                            class="
              bg-white px-8 py-4 font-semibold text-gray-600
              flex items-center justify-center gap-2
              w-full sm:w-auto
            ">
                            <img src="./assets/icons/phone.png" class="w-4 h-4" />
                            Request Callback
                        </button>
                    </div>

                    <!-- NEXT SLOT -->
                  

                </div>
            </div>
        </div>
    </section>





</body>

</html>