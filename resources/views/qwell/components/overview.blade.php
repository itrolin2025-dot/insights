
<main class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-10 space-y-10" style="overflow-x:hidden;">

    <!-- Why Does This Research Exist? (with background image) -->
    <div 
        class="relative bg-white shadow-lg pt-10 pb-12 sm:pt-16 sm:pb-20 lg:pt-24 lg:pb-28 px-0 overflow-hidden"
        style="position:relative; width:100vw; left:50%; transform:translateX(-50%); background-image:url('{{ asset('images/banner/qwell.jpeg') }}'); background-size:cover; background-position:center; margin-top: -2.5em; overflow-x:hidden; border-radius:0;"
    >
        <div class="relative z-10 flex justify-center" style="overflow-x:hidden;">
            <div class="bg-white bg-opacity-95 rounded-xl shadow-xl px-8 py-10 sm:px-12 sm:py-14 lg:px-16 lg:py-20 max-w-3xl w-full space-y-5" style="overflow-x:hidden;">
                <h2 class="text-4xl font-black text-[#0B6E99] mb-5 tracking-tight drop-shadow text-center">
                    Why Does This <span class="text-yellow-400">Research</span> Exist?
                </h2>
                <div class="flex flex-col items-center gap-3">
                    <p class="text-lg sm:text-xl text-gray-700 leading-relaxed mb-1">
                        <span class="font-bold text-[#0B6E99]">Q’WELL</span> is not just launching another brand—it aims to answer a <span class="italic text-[#0B6E99] font-semibold">fundamental market question</span>: 
                        <span class="block text-base sm:text-lg mt-2 text-gray-600 font-medium">
                            Is there a genuine, unresolved need for a new premium hair and body care solution?
                        </span>
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Indonesia’s personal care market is crowded with “gentle,” “natural,” and “safe” products. Yet, many consumers—especially those with sensitive or reactive skin and scalp—struggle with <span class="font-semibold text-yellow-500">skepticism</span>, <span class="font-semibold text-teal-500">product fatigue</span>, and ongoing <span class="font-semibold text-pink-500">emotional anxiety</span>.
                    </p>
                    <p class="italic text-gray-700">
                        This research doesn’t assume Q’WELL’s right to exist—<span class="text-[#0B6E99] font-semibold">it’s designed to prove it or disprove it.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- What Are We Really Trying to Discover? (no background image) -->
    <div class="bg-white rounded-xl shadow-lg p-8 sm:p-12 lg:p-16 space-y-5" style="overflow-x:hidden;">
        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-5 text-center">What Are We Really Trying to Discover?</h3>
            <ul class="text-left mx-auto text-base sm:text-lg text-gray-700 space-y-3 max-w-2l list-disc list-inside mb-6" style="overflow-x:hidden;">
                <li class="mb-1"><b>Is there a measurable trust deficit</b> in Indonesia’s hair and body care sector?</li>
                <li class="mb-1"><b>Is sensitivity</b> now a baseline, not a niche?</li>
                <li class="mb-1"><b>Are consumers emotionally exhausted</b> by endless trials and disappointment?</li>
                <li class="mb-1">Could <b>emotional reassurance, proof, and predictability</b> become primary reasons to buy?</li>
                <li class="mb-1">Is a <span class="font-semibold text-[#0B6E99]">Rp 500,000+</span> price rational for a true “trust insurance” solution?</li>
                <li class="mb-1">Does authentic <b>white space</b> exist—between brands full of claims and those rooted in proof?</li>
            </ul>
            <p class="mt-6 text-gray-600 italic text-base text-center">
                <span class="font-medium text-[#0B6E99] ">Only</span> if evidence supports these points should a brand like Q’WELL proceed.
            </p>
        </div>

        <div class="my-4 border-t-2 border-gray-200"></div>

        <!-- Research Scope Section (Hidden by default)-->
        <div 
            id="research-scope-section"
            class="overflow-hidden transition-all duration-500 ease-in-out"
            style="max-height: 0; opacity:0;"
        >
            <h3 class="text-2xl font-bold text-gray-800 mb-6 mt-10 text-center">Research Scope</h3>
            <div class="grid sm:grid-cols-2 gap-4 justify-center text-left max-w-2xl mx-auto" style="overflow-x:hidden;">
                <div>
                    <span class="font-semibold text-[#0B6E99]">Geography:</span> Indonesia <br>
                    <span class="font-semibold text-[#0B6E99]">Category:</span> Hair care &amp; body care<br>
                    <span class="text-sm ml-6 text-gray-500 italic">(Facial skincare intentionally excluded)</span>
                </div>
                <div>
                    <span class="font-semibold text-[#0B6E99]">Target:</span>
                    <ul class="ml-2 mt-2 text-base list-[circle]" style="overflow-x:hidden;">
                        <li>Age 25–45</li>
                        <li>Urban &amp; secondary urban residents</li>
                        <li>Middle to upper income</li>
                    </ul>
                </div>
                <div>
                    <span class="font-semibold text-[#0B6E99]">Time Horizon:</span>
                    <ul class="ml-2 mt-2 text-base list-[circle]" style="overflow-x:hidden;">
                        <li>Trend evolution 3–5 years</li>
                        <li>Current market landscape</li>
                        <li>Directional outlook toward 2030</li>
                    </ul>
                </div>
            </div>
            <p class="mt-6 text-gray-700 text-base italic text-center">
                <span class="font-bold text-[#0B6E99]">Note:</span> This study is a <span class="underline">decision framework</span>, not a marketing story.
            </p>
        </div>

        <!-- Show More Button -->
        <div class="flex justify-center" style="margin-bottom: -1em;">
            <button 
                id="show-more-scope-btn"
                class="flex items-center gap-1 px-5 py-2 rounded-full border border-[#0B6E99] bg-[#f7fafc] hover:bg-[#e3eef7] text-[#0B6E99] font-semibold shadow transition duration-150 ease-in-out"
                type="button"
                aria-expanded="false"
            >
                <svg id="show-more-icon" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
                <span id="show-more-text">Show More </span>
            </button>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('show-more-scope-btn');
    const section = document.getElementById('research-scope-section');
    const textSpan = document.getElementById('show-more-text');
    const icon = document.getElementById('show-more-icon');

    // To measure section's natural height
    let isOpen = false;
    let animating = false;

    btn.addEventListener('click', function() {
        if (animating) return; // Prevent async rapid toggles

        animating = true;

        if (!isOpen) {
            // Show: measure full height, animate open
            section.style.opacity = 1;
            section.style.maxHeight = section.scrollHeight + 'px';
            icon.style.transform = 'rotate(180deg)';
            textSpan.textContent = 'Hide';
            btn.setAttribute('aria-expanded', 'true');
            setTimeout(() => {
                section.style.maxHeight = '2000px'; // Generous max-height
                animating = false;
            }, 500);
        } else {
            // Hide: animate close
            section.style.maxHeight = section.scrollHeight + 'px'; // set to current for animation
            // force browser reflow:
            void section.offsetHeight;
            section.style.maxHeight = '0';
            section.style.opacity = 0;
            icon.style.transform = 'rotate(0deg)';
            textSpan.textContent = 'Show More';
            btn.setAttribute('aria-expanded', 'false');
            setTimeout(() => {
                animating = false;
            }, 500);
        }
        isOpen = !isOpen;
    });

    // Optional: On page load, make sure it's closed and hidden for safety
    section.style.maxHeight = '0';
    section.style.opacity = 0;
    icon.style.transform = 'rotate(0deg)';
    btn.setAttribute('aria-expanded', 'false');
});

</script>
