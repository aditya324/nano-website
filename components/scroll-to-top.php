<!-- Scroll to Top Button -->
<!-- Scroll to Top Button -->
<button
  id="scrollTopBtn"
  aria-label="Scroll to top"
  class="fixed bottom-8 right-6 z-50 
         hidden md:flex
         w-12 h-12
         items-center justify-center
         bg-red-500 text-white
         rounded-full
         shadow-lg transition-all duration-300
         hover:bg-red-600 hover:scale-110">
  ↑
</button>



<script>
  (function () {
    const scrollBtn = document.getElementById("scrollTopBtn");
    if (!scrollBtn) return;

    window.addEventListener("scroll", () => {
      const isDesktop = window.innerWidth >= 768;

      if (window.scrollY > 300 && isDesktop) {
        scrollBtn.classList.remove("hidden");
      } else {
        scrollBtn.classList.add("hidden");
      }
    });

    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  })();
</script>
