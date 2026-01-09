<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div
        class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
        data-instagram-url="https://www.instagram.com/p/DQOIgt8E2Yq/">

        <img src="./assets/testimonials/Frame 744.png" class="w-full h-56 object-cover" />
        <div class="absolute inset-0 bg-black/25"></div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-lg">
                ▶
            </div>
        </div>

        <div class="absolute bottom-4 left-4 text-white">
            <p class="font-semibold">Healthy Start</p>
            <p class="text-sm opacity-90">Hegde Family</p>
        </div>
    </div>
    <div id="videoModal"
        class="fixed inset-0 hidden z-50 bg-black/70 flex items-center justify-center">

        <div class="relative bg-white rounded-xl max-w-sm w-[90%] p-2">
            <button id="closeModal"
                class="absolute -top-3 -right-3 bg-black text-white w-8 h-8 rounded-full">
                ✕
            </button>

            <div id="instagramEmbed"></div>
        </div>
    </div>
    <script async src="https://www.instagram.com/embed.js"></script>
    <script>
        const modal = document.getElementById("videoModal");
        const embed = document.getElementById("instagramEmbed");
        const closeBtn = document.getElementById("closeModal");

        document.querySelectorAll(".video-card").forEach(card => {
            card.onclick = () => {
                const url = card.dataset.instagramUrl;

                embed.innerHTML = `
        <blockquote class="instagram-media"
          data-instgrm-permalink="${url}"
          data-instgrm-version="14"
          style="margin:0 auto; width:100%;">
        </blockquote>
      `;

                modal.classList.remove("hidden");

                if (window.instgrm) {
                    window.instgrm.Embeds.process();
                }
            };
        });

        closeBtn.onclick = close;
        modal.onclick = e => e.target === modal && close();

        function close() {
            embed.innerHTML = "";
            modal.classList.add("hidden");
        }
    </script>

</body>

</html>