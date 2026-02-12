document.addEventListener('DOMContentLoaded', function () {
    // Hide all section content on load
    for (let i = 1; i <= 8; i++) {
        document.querySelectorAll(`.section-${i}-content`).forEach(function (el) {
            el.style.display = 'none';
            el.style.opacity = '0';
            el.style.maxHeight = '0';
            el.style.overflow = 'hidden';
        });
    }

    // Prepare toggle buttons and chevrons for 8 sections
    const toggleButtons = [];
    const chevrons = [];
    for (let i = 1; i <= 8; i++) {
        toggleButtons[i] = document.getElementById(`qwell-fullsize-${i}`);
        chevrons[i] = document.getElementById(`qwell-chevron-icon-${i}`);
        if (chevrons[i]) {
            chevrons[i].style.transform = "rotate(0deg)";
        }
    }

    // Helper for hide/show
    function hideSection(selector) {
        document.querySelectorAll(selector).forEach(function (el) {
            el.style.transition = 'max-height 0.4s ease-in, opacity 0.3s ease-in';
            el.style.maxHeight = '0';
            el.style.opacity = '0';
            setTimeout(function () {
                if (el.style.maxHeight === '0px' || el.style.maxHeight === '0') {
                    el.style.display = 'none';
                }
            }, 400);
        });
    }
    function showSection(selector) {
        document.querySelectorAll(selector).forEach(function (el) {
            el.style.display = 'block';
            el.style.maxHeight = '0';
            el.style.opacity = '0';

            // force reflow
            void el.offsetWidth;

            const targetHeight = el.scrollHeight + 'px';
            el.style.transition = 'max-height 0.6s ease-out, opacity 0.5s ease-out';
            el.style.maxHeight = targetHeight;
            el.style.opacity = '1';

            // After transition, allow height to be auto for responsiveness
            setTimeout(() => {
                if (el.style.opacity === '1') {
                    el.style.maxHeight = 'none';
                }
            }, 600);
        });
    }

    // Only one accordion open at a time
    for (let i = 1; i <= 8; i++) {
        if (!toggleButtons[i]) continue;
        toggleButtons[i].addEventListener("click", function () {
            const expanded = toggleButtons[i].getAttribute("aria-expanded") === "true";

            if (expanded) {
                // Close current section
                toggleButtons[i].setAttribute("aria-expanded", "false");
                if (chevrons[i]) chevrons[i].style.transform = "rotate(0deg)";
                hideSection(`.section-${i}-content`);
            } else {
                // 1. Tutup semua accordion selain yang ini
                for (let j = 1; j <= 8; j++) {
                    if (j === i) continue;
                    if (toggleButtons[j]) {
                        toggleButtons[j].setAttribute("aria-expanded", "false");
                        if (chevrons[j]) chevrons[j].style.transform = "rotate(0deg)";
                        hideSection(`.section-${j}-content`);
                    }
                }

                // 2. Buka yang ini
                toggleButtons[i].setAttribute("aria-expanded", "true");
                if (chevrons[i]) chevrons[i].style.transform = "rotate(180deg)";
                showSection(`.section-${i}-content`);

                // 3. SCROLL KE ATAS (Judul tepat di bawah header)
                // Beri sedikit delay agar konten mulai terbuka dulu
                setTimeout(() => {
                    const headerHeight = document.querySelector('header')?.offsetHeight || 70;
                    const elementPosition = toggleButtons[i].getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerHeight - 20;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }, 150);
            }
        });
        // Cursor styling
        toggleButtons[i].style.cursor = "pointer";
    }
});