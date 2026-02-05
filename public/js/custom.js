document.addEventListener('DOMContentLoaded', function() {
    // Hide all section content on load, for .section-1-content through .section-6-content
    for (let i = 1; i <= 6; i++) {
        document.querySelectorAll(`.section-${i}-content`).forEach(function(el) {
            el.style.display = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(-16px)';
        });
    }

    // Prepare toggle buttons and chevrons for 6 sections
    const toggleButtons = [];
    const chevrons = [];
    for (let i = 1; i <= 6; i++) {
        toggleButtons[i] = document.getElementById(`qwell-fullsize-${i}`);
        chevrons[i] = document.getElementById(`qwell-chevron-icon-${i}`);
        if (chevrons[i]) {
            chevrons[i].style.transform = "rotate(0deg)";
        }
    }

    // Helper for hide/show
    function hideSection(selector) {
        document.querySelectorAll(selector).forEach(function(el) {
            el.style.transition = 'opacity 0.4s, transform 0.4s';
            el.style.opacity = '0';
            el.style.transform = 'translateY(-16px)';
            setTimeout(function() {
                el.style.display = 'none';
            }, 400);
        });
    }
    function showSection(selector) {
        document.querySelectorAll(selector).forEach(function(el) {
            el.style.display = '';
            el.style.transition = 'opacity 0.4s, transform 0.4s';
            el.style.opacity = '0';
            el.style.transform = 'translateY(-16px)';
            // force reflow
            void el.offsetWidth;
            setTimeout(function() {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, 10);
        });
    }

    // Only one accordion open at a time
    for (let i = 1; i <= 6; i++) {
        if (!toggleButtons[i]) continue;
        toggleButtons[i].addEventListener("click", function() {
            const expanded = toggleButtons[i].getAttribute("aria-expanded") === "true";
            if (expanded) {
                // Close current section
                toggleButtons[i].setAttribute("aria-expanded", "false");
                if (chevrons[i]) chevrons[i].style.transform = "rotate(0deg)";
                hideSection(`.section-${i}-content`);
            } else {
                // Tutup semua accordion selain yang ini
                for (let j = 1; j <= 6; j++) {
                    if (j === i) continue;
                    if (toggleButtons[j]) {
                        toggleButtons[j].setAttribute("aria-expanded", "false");
                        if (chevrons[j]) chevrons[j].style.transform = "rotate(0deg)";
                        hideSection(`.section-${j}-content`);
                    }
                }
                // Buka yang ini
                toggleButtons[i].setAttribute("aria-expanded", "true");
                if (chevrons[i]) chevrons[i].style.transform = "rotate(180deg)";
                showSection(`.section-${i}-content`);
            }
        });
        // Cursor styling
        toggleButtons[i].addEventListener("mouseenter", function() {
            toggleButtons[i].style.cursor = "pointer";
        });
        toggleButtons[i].addEventListener("mouseleave", function() {
            toggleButtons[i].style.cursor = "pointer";
        });
    }
});