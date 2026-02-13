
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 space-y-3">
    <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6">
        <h2 class="text-3xl font-extrabold text-[#0B6E99] mb-5 text-center">Methodology</h2>
        <div class="text-lg text-gray-700 leading-[1.65] space-y-6">

            <div class="mb-5">
                <h3 class="text-xl font-bold text-[#0B6E99] mb-2">Our Guiding Philosophy</h3>
                <p class="mb-3">
                    <span class="font-semibold">Curiosity, not certainty.</span> We think like detectives, letting the proof lead the way and questioning everything—even our own assumptions. Hypotheses are here to be tested, not blindly trusted. If the evidence is unclear, we say so—no guesswork, no forced conclusions.
                </p>
                <ul class="list-disc list-inside text-left mt-2 ml-4 space-y-1">
                    <li>Evidence beats opinion</li>
                    <li>Actions outweigh words</li>
                    <li>Big patterns matter more than one-off stories</li>
                </ul>
            </div>

            <!-- Hidden Section: How We Do It ... Deliverables You Can Trust -->
            <div 
                id="hidden-methodology-section"
                class="overflow-hidden transition-all duration-500 ease-in-out"
                style="max-height: 0; opacity: 0; display: none;"
            >
                <div class="mb-5">
                    <h3 class="text-xl font-bold text-[#0B6E99] mb-2">How We Do It</h3>
                    <p class="mb-3">
                        Our approach has layers—like a perfect cake. Eight sharp analytic angles, each informing the next, make sure our conclusions are deep, not shallow:
                    </p>
                    <ol class="list-decimal list-inside text-left mt-2 ml-4 space-y-1">
                        <li>Market trust & brand permission</li>
                        <li>Skin & scalp realities of Indonesia</li>
                        <li>Behavioral + emotional tension</li>
                        <li>Consumer needs & segmentation</li>
                        <li>Market structure & trends</li>
                        <li>Competitive mapping & white space</li>
                        <li>Positioning & RTBs validation</li>
                        <li>Product system, pricing & sustainability</li>
                    </ol>
                    <p class="mt-3">Every insight is built on the last—no shortcuts or contradictions allowed.</p>
                </div>

                <div class="mb-5">
                    <h3 class="text-xl font-bold text-[#0B6E99] mb-2">Where Our Data Comes From</h3>
                    <p class="mb-3">
                        We only use sources you (and we!) can trust, including:
                    </p>
                    <ul class="list-disc list-inside text-left mt-2 ml-4 space-y-1">
                        <li>Peer-reviewed science journals</li>
                        <li>Indonesia-specific market and industry reports</li>
                        <li>Well-known global industry publications</li>
                        <li>Consumer surveys & behavioral studies</li>
                        <li>Public competitor disclosures</li>
                    </ul>
                    <p class="mt-3 text-gray-500 italic">No unverified blogs or influencer chatter—only credible facts make the cut.</p>
                </div>

                <div class="mb-5">
                    <h3 class="text-xl font-bold text-[#0B6E99] mb-2">The Multi-Lens Advantage</h3>
                    <p class="mb-3">
                        We double- (and triple-) check findings through five different lenses:
                    </p>
                    <ul class="list-disc list-inside text-left mt-2 ml-4 space-y-1">
                        <li><span class="font-semibold">Behavioral:</span> Decisions under risk and uncertainty</li>
                        <li><span class="font-semibold">Emotional:</span> Fear, trust, and fatigue</li>
                        <li><span class="font-semibold">Structural:</span> Context, routines, norms</li>
                        <li><span class="font-semibold">Competitive proof:</span> Claims vs. verification</li>
                        <li><span class="font-semibold">Economic logic:</span> Value, stickiness, sustainability</li>
                    </ul>
                    <p class="mt-3">No single perspective dominates—complexity is embraced, not ignored.</p>
                </div>
                
                <div class="mb-5">
                    <h3 class="text-xl font-bold text-[#0B6E99] mb-2">Keeping It Honest</h3>
                    <p class="mb-3">
                        To stay objective, we clearly set boundaries:
                    </p>
                    <ul class="list-disc list-inside text-left mt-2 ml-4 space-y-1">
                        <li>No ready-made brand or marketing concepts</li>
                        <li>No product recommendations</li>
                        <li>No medical or therapeutic advice</li>
                        <li>No spillover into facial skincare territory</li>
                    </ul>
                    <p class="mt-3">Q’WELL features as context—not as the answer.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-[#0B6E99] mb-2">Deliverables You Can Trust</h3>
                    <ul class="list-disc list-inside text-left mt-2 ml-4 space-y-1">
                        <li><span class="font-semibold">Decision-ready:</span> For founders, investors, and leaders</li>
                        <li><span class="font-semibold">Citable:</span> Transparent sources</li>
                        <li><span class="font-semibold">Realistic, not overblown:</span> We value clarity over hype</li>
                    </ul>
                    <p class="mt-3 text-center">In short: Every insight is earned, never assumed—so you can take action with confidence.</p>
                </div>
            </div>

            
            <!-- Show More Button -->
            <div class="flex justify-center mb-3">
                <button 
                    id="show-more-methodology-btn"
                    class="flex items-center gap-1 px-4 py-1.5 rounded-full border border-[#0B6E99] bg-[#f7fafc] hover:bg-[#e3eef7] text-[#0B6E99] font-semibold shadow transition duration-150 ease-in-out"
                    type="button"
                    aria-expanded="false"
                >
                    <svg id="show-more-methodology-icon" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span id="show-more-methodology-text">Show More</span>
                </button>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('show-more-methodology-btn');
    const textSpan = document.getElementById('show-more-methodology-text');
    const icon = document.getElementById('show-more-methodology-icon');
    const section = document.getElementById('hidden-methodology-section');
    let isOpen = false;
    let animating = false;

    // Make sure the section is correctly initialized as hidden
    section.style.maxHeight = '0px';
    section.style.opacity = 0;
    section.style.display = 'none';

    btn.addEventListener('click', function() {
        if (animating) return;

        animating = true;

        if (!isOpen) {
            section.style.display = 'block'; // ensure visible, very important!
            // Must force reflow before transition for it to take effect
            void section.offsetWidth;
            let scrollHeight = section.scrollHeight;
            section.style.transition = 'max-height 0.5s cubic-bezier(.4,0,.2,1), opacity 0.5s cubic-bezier(.4,0,.2,1)';
            section.style.maxHeight = scrollHeight + 'px';
            section.style.opacity = 1;
            icon.style.transform = 'rotate(180deg)';
            textSpan.textContent = 'Hide';
            btn.setAttribute('aria-expanded', 'true');
            setTimeout(() => {
                // Optionally set maxHeight to none: cleanup, allow for content growth
                section.style.maxHeight = '2500px';
                animating = false;
            }, 500);
        } else {
            // Hide
            let scrollHeight = section.scrollHeight;
            section.style.maxHeight = scrollHeight + 'px';
            section.style.opacity = 1;
            void section.offsetWidth;
            section.style.transition = 'max-height 0.5s cubic-bezier(.4,0,.2,1), opacity 0.5s cubic-bezier(.4,0,.2,1)';
            section.style.maxHeight = '0px';
            section.style.opacity = 0;
            icon.style.transform = 'rotate(0deg)';
            textSpan.textContent = 'Show More';
            btn.setAttribute('aria-expanded', 'false');
            setTimeout(() => {
                section.style.display = 'none';
                animating = false;
            }, 500);
        }
        isOpen = !isOpen;
    });
});
</script>

