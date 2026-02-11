
<style>
    :root {
        --peach-dark: #FFCC97;
        --peach-light: #FFEBDA;
        --teal-light: #CAF1EB;
        --teal-dark: #65BDAD;
        --slate-text: #2D3748;
    }

    .bg-peach-dark { background-color: var(--peach-dark); }
    .bg-peach-light { background-color: var(--peach-light); }
    .bg-teal-light { background-color: var(--teal-light); }
    .bg-teal-dark { background-color: var(--teal-dark); }
    .text-teal-dark { color: var(--teal-dark); }
    .border-teal-dark { border-color: var(--teal-dark); }

    .sidebar {
        height: 100vh;
        position: sticky;
        top: 0;
        /* Transition for slide in/out on mobile */
        transition: transform 0.27s cubic-bezier(.21,.6,.34,1), opacity 0.27s;
        z-index: 80;
        background-color: #fff;
    }

    /* Hide sidebar on mobile by default */
    @media (max-width: 1024px) {
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 86vw;
            max-width: 320px;
            min-width: 220px;
            box-shadow: 0 8px 32px rgba(0,0,0,.11), 0 1.5px 6px rgba(0,0,0,.04);
            transform: translateX(-105%);
            opacity: 0;
            pointer-events: none;
        }
        .sidebar.sidebar-mobile-open {
            transform: translateX(0);
            opacity: 1;
            pointer-events: all;
        }
        /* Show overlay on mobile when sidebar open */
        .sidebar-overlay {
            display: block;
        }
    }
    /* Hide burger on desktop */
    @media (min-width: 1025px) {
        .sidebar-overlay { display: none !important;}
        .burger-btn { display: none !important;}
    }

    /* Overlay for mobile sidebar */
    .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 70;
        background: rgba(0,0,0,0.18);
        cursor: pointer;
        transition: opacity 0.19s;
    }

    /* Burger button style */
    .burger-btn {
        display: flex;
        /* REMOVE fixed positioning so it can be placed inline */
        /* position: fixed; */
        /* top: 18px; */
        /* left: 22px; */
        z-index: 99;
        width: 42px;
        height: 42px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,.07);
        align-items: center;
        justify-content: center;
        border: 1px solid #ececec;
        cursor: pointer;
        padding: 0;
    }
    .burger-btn:active {
        background: #f2f2f2;
    }
    .burger-lines {
        display: inline-block;
        width: 22px;
        height: 16px;
        position: relative;
    }
    .burger-lines span {
        display: block;
        height: 3px;
        background: var(--teal-dark);
        border-radius: 2px;
        position: absolute;
        left: 0;
        right: 0;
        transition: .22s cubic-bezier(.21,.6,.34,1);
    }
    .burger-lines span:nth-child(1) { top: 0; }
    .burger-lines span:nth-child(2) { top: 6.5px; }
    .burger-lines span:nth-child(3) { top: 13px; }
    /* Animate burger to X when open */
    .burger-btn.open .burger-lines span:nth-child(1) {
        transform: rotate(45deg) translateY(6.2px);
    }
    .burger-btn.open .burger-lines span:nth-child(2) {
        opacity: 0;
        transform: scaleX(0.2);
    }
    .burger-btn.open .burger-lines span:nth-child(3) {
        transform: rotate(-45deg) translateY(-6.2px);
    }

    .card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0,0,0,0.05);
        transition: transform 0.2s ease;
    }

    .editable-field:focus {
        outline: none;
        border-bottom: 2px solid var(--teal-dark);
        background: var(--peach-light);
    }

    .nav-link.active {
        background-color: var(--teal-light);
        color: var(--teal-dark);
        font-weight: 600;
    }

    .notes-panel {
        display: none;
    }

    .notes-visible .notes-panel {
        display: block;
    }

    @media (max-width: 1024px) {
        /* On mobile, don't fix burger or sidebar if there is sufficient space, override above if needed */
        .sidebar {
            height: 100vh;
            position: fixed;
        }
        /* Show burger above header title on mobile */
        .burger-btn.header-burger {
            display: inline-flex;
            position: static;
            margin-bottom: 12px;
            top: unset;
            left: unset;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
    }
    @media (min-width: 1025px) {
        .burger-btn.header-burger { display: none !important;}
    }
    /* Toggle Switch Styling */
    .switch {
        position: relative;
        display: inline-block;
        width: 44px;
        height: 22px;
    }
    .switch input { opacity: 0; width: 0; height: 0; }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }
    .slider:before {
        position: absolute;
        content: "";
        height: 16px; width: 16px;
        left: 3px; bottom: 3px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }
    input:checked + .slider { background-color: var(--teal-dark); }
    input:checked + .slider:before { transform: translateX(22px); }

    .copy-btn {
        opacity: 0;
        transition: opacity 0.2s;
    }
    .group:hover .copy-btn {
        opacity: 1;
    }
</style>

<div class="flex flex-col lg:flex-row min-h-screen">

    <!-- Burger Button for Mobile (for sidebar, remains but now hidden on mobile) -->
    <button class="burger-btn" id="sidebarBurgerBtn" aria-label="Open sidebar" type="button" style="display:none;">
        <span class="burger-lines">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <!-- Sidebar background overlay (mobile only) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR NAVIGATION -->
    <aside class="sidebar w-full lg:w-72 bg-white border-r border-gray-100 flex-shrink-0 z-20 overflow-y-auto" id="sidebarNav">
        <div class="p-8">
            <div class="mb-10">
                <h1 class="text-2xl font-bold tracking-tighter text-teal-dark">Q'WELL</h1>
                <p class="text-xs uppercase tracking-widest text-gray-400 font-semibold mt-1">Section 1 Dashboard</p>
            </div>

            <nav class="space-y-1" id="sidebarNavLinks">
                <a href="#context-header" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Context Snapshot</a>
                <a href="#uncertainty" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Strategic Uncertainty</a>
                <a href="#brand-question" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Primary Brand Question</a>
                <a href="#secondary-questions" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Decision Questions</a>
                <a href="#success-criteria" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Success Criteria</a>
                <a href="#guardrails" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Scope Guardrails</a>
                <a href="#research-flow" class="nav-link flex items-center px-4 py-3 text-sm rounded-lg hover:bg-gray-50 transition-colors">Research Flow</a>
            </nav>

            <div class="mt-12 p-4 bg-peach-light rounded-xl">
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 rounded-full bg-teal-dark"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-teal-dark">Controls</span>
                </div>
                <button onclick="toggleNotes()" class="w-full text-left py-2 px-1 text-sm text-gray-600 hover:text-teal-dark flex items-center justify-between">
                    Show/Hide Notes <span id="notesIcon">👁️</span>
                </button>
                <button onclick="copyFullOutput()" class="w-full text-left py-2 px-1 text-sm text-gray-600 hover:text-teal-dark">
                    Copy Section 1 Output
                </button>
            </div>
        </div>
        <script>
            // Highlight active nav link based on scroll position
            document.addEventListener('DOMContentLoaded', function() {
                const sections = [
                    "context-header",
                    "uncertainty",
                    "brand-question",
                    "secondary-questions",
                    "success-criteria",
                    "guardrails",
                    "research-flow"
                ];
                const navLinks = document.querySelectorAll('#sidebarNavLinks .nav-link');

                let lastActiveSection = null;

                function onScroll() {
                    let fromTop = window.scrollY + 140;
                    let currentSection = sections[0];

                    // Cari section yang paling cocok dengan scroll saat ini
                    for (let i = 0; i < sections.length; i++) {
                        let section = document.getElementById(sections[i]);
                        if (section && (section.offsetTop <= fromTop)) {
                            currentSection = sections[i];
                        }
                    }

                    // Jika tidak ada section yang cocok, atur active ke section pertama
                    if (!document.getElementById(currentSection)) {
                        currentSection = sections[0];
                    }

                    // Hindari update class jika tidak berubah (mengurangi flicker/error)
                    if (lastActiveSection !== currentSection) {
                        navLinks.forEach(link => {
                            link.classList.remove('bg-gray-100', 'text-teal-dark', 'font-bold');
                            if (link.getAttribute('href') === '#' + currentSection) {
                                link.classList.add('bg-gray-100', 'text-teal-dark', 'font-bold');
                            }
                        });
                        lastActiveSection = currentSection;
                    }
                }

                window.addEventListener('scroll', onScroll, { passive: true });
                onScroll(); // Jalankan saat awal untuk sync nav
            });
        </script>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-grow p-4 md:p-8 lg:p-12 space-y-12 overflow-x-hidden">

        <!-- HEADER SECTION -->
        <header id="context-header" class="space-y-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div class="flex flex-col items-start">
                    <!-- Burger for mobile inside header (shown only on mobile/tablet) -->
                    <button class="burger-btn header-burger" id="sidebarBurgerBtnHeader" aria-label="Open sidebar" type="button">
                        <span class="burger-lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <h2 class="text-3xl font-bold text-gray-800">Context Snapshot</h2>
                </div>
                <div class="px-4 py-2 bg-teal-dark text-white rounded-full text-xs font-bold tracking-widest uppercase">
                    Decision Brief Mode
                </div>
            </div>
            <script>
                // Make the header burger toggle sidebar as well
                document.addEventListener('DOMContentLoaded', function() {
                    var burgerHeaderBtn = document.getElementById('sidebarBurgerBtnHeader');
                    if(burgerHeaderBtn) {
                        burgerHeaderBtn.addEventListener('click', function() {
                            const sidebar = document.getElementById('sidebarNav');
                            const overlay = document.getElementById('sidebarOverlay');
                            burgerHeaderBtn.classList.toggle('open');
                            sidebar.classList.toggle('sidebar-mobile-open');
                            if (sidebar.classList.contains('sidebar-mobile-open')) {
                                overlay.style.display = 'block';
                                setTimeout(()=>{overlay.style.opacity="1";},10);
                                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                            } else {
                                overlay.style.opacity = "0";
                                setTimeout(()=>{overlay.style.display="none";}, 170);
                                document.body.style.overflow = '';
                            }
                        });
                    }

                    // SMOOTH SCROLL & ACTIVE NAV LOGIC
                    const navLinks = document.querySelectorAll('.nav-link');
                    navLinks.forEach(link => {
                        link.addEventListener('click', function(e) {
                            const targetId = this.getAttribute('href').replace('#','');
                            const target = document.getElementById(targetId);
                            if(target) {
                                e.preventDefault();
                                const yOffset = -16; // offset for nicer position (adjust as needed)
                                const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset - 60; // offset for sticky headers
                                window.scrollTo({top: y, behavior: 'smooth'});
                                // Close sidebar on mobile
                                if(window.innerWidth < 1024) {
                                    document.getElementById('sidebarNav').classList.remove('sidebar-mobile-open');
                                    document.getElementById('sidebarOverlay').style.opacity=0;
                                    setTimeout(()=>{document.getElementById('sidebarOverlay').style.display='none';},170);
                                    document.body.style.overflow = '';
                                }
                            }
                        });
                    });

                    // ACTIVE STATE HIGHLIGHT ON SCROLL
                    const ids = [
                        'context-header',
                        'uncertainty',
                        'brand-question',
                        'secondary-questions',
                        'success-criteria',
                        'guardrails',
                        'research-flow'
                    ];
                    const sectionElems = ids.map(id => document.getElementById(id));
                    window.addEventListener('scroll', function() {
                        let scrollPos = window.scrollY || document.documentElement.scrollTop;
                        let currentId = '';
                        for (let i = sectionElems.length - 1; i >= 0; i--) {
                            const section = sectionElems[i];
                            if(section && scrollPos >= section.offsetTop - 110) {
                                currentId = section.id;
                                break;
                            }
                        }
                        navLinks.forEach(link=>{
                            if(link.getAttribute('href') === ('#'+currentId)){
                                link.classList.add('bg-gray-100','font-bold','text-teal-dark');
                            } else {
                                link.classList.remove('bg-gray-100','font-bold','text-teal-dark');
                            }
                        });
                    });
                });
            </script>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="card p-5 bg-white">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Market</p>
                    <p class="text-lg font-semibold">Indonesia</p>
                    <p class="text-xs text-gray-500 mt-1">National scope focus only.</p>
                </div>
                <div class="card p-5 bg-white">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Price Tier</p>
                    <p class="text-lg font-semibold">Premium</p>
                    <p class="text-xs text-gray-500 mt-1">Targeting high-trust segments.</p>
                </div>
                <div class="card p-5 bg-white border-teal-dark/20">
                    <p class="text-xs font-bold text-teal-dark uppercase tracking-widest mb-1">Safety Asset</p>
                    <p class="text-lg font-semibold">HRIPT Tested</p>
                    <p class="text-xs text-gray-500 mt-1">Per SKU (International Lab).</p>
                </div>
                <div class="card p-5 bg-white border-teal-dark/20">
                    <p class="text-xs font-bold text-teal-dark uppercase tracking-widest mb-1">Certifications</p>
                    <div class="flex flex-wrap gap-1 mt-1">
                        <span class="px-2 py-0.5 bg-teal-light text-[10px] font-bold text-teal-dark rounded">VEGAN</span>
                        <span class="px-2 py-0.5 bg-teal-light text-[10px] font-bold text-teal-dark rounded">NATURAL</span>
                        <span class="px-2 py-0.5 bg-teal-light text-[10px] font-bold text-teal-dark rounded">CRUELTY-FREE</span>
                        <span class="px-2 py-0.5 bg-teal-light text-[10px] font-bold text-teal-dark rounded">SENSITIVE SKIN</span>
                    </div>
                </div>
            </div>

            <div class="card p-6 bg-peach-light/60">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Planned SKUs (Phase 1)</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-white border border-gray-100 text-xs font-semibold text-gray-700">Shampoo</span>
                    <span class="px-3 py-1 rounded-full bg-white border border-gray-100 text-xs font-semibold text-gray-700">Body Wash</span>
                    <span class="px-3 py-1 rounded-full bg-white border border-gray-100 text-xs font-semibold text-gray-700">Body Butter / Cream</span>
                    <span class="px-3 py-1 rounded-full bg-white border border-gray-100 text-xs font-semibold text-gray-700">Hair Oil</span>
                </div>
            </div>

            <div class="notes-panel p-4 bg-gray-50 rounded-lg border-l-4 border-gray-300 text-sm text-gray-600 italic">
                Note: These assets are treated as fixed inputs. This research does not re-test them; it determines how to translate them into a defensible positioning, pricing logic, and trust narrative in Indonesia.
            </div>
        </header>

        <!-- UNCERTAINTY MAP -->
        <section id="uncertainty" class="space-y-6">
            <h3 class="text-xl font-bold text-gray-800">Strategic Uncertainty Map</h3>
            <div class="card p-8 bg-white flex flex-col items-center">
                <!-- SVG DIAGRAM -->
                <svg width="100%" height="220" viewBox="0 0 800 220" fill="none" xmlns="http://www.w3.org/2000/svg" class="max-w-4xl overflow-visible">
                    <!-- Nodes -->
                    <rect x="20" y="80" width="160" height="60" rx="30" fill="#FFEBDA" stroke="#FFCC97" stroke-width="2"/>
                    <text x="100" y="115" text-anchor="middle" fill="#2D3748" font-size="14" font-weight="bold">Facts (Assets)</text>
                    
                    <rect x="280" y="80" width="160" height="60" rx="10" fill="white" stroke="#65BDAD" stroke-width="2" stroke-dasharray="4 4"/>
                    <text x="360" y="115" text-anchor="middle" fill="#65BDAD" font-size="14" font-weight="bold">Uncertainty Gap</text>
                    
                    <rect x="540" y="80" width="160" height="60" rx="30" fill="#CAF1EB" stroke="#65BDAD" stroke-width="2"/>
                    <text x="620" y="115" text-anchor="middle" fill="#2D3748" font-size="14" font-weight="bold">Proof Outcome</text>

                    <!-- Arrows -->
                    <path d="M180 110 L270 110" stroke="#FFCC97" stroke-width="2" marker-end="url(#arrowhead)" style="stroke: #FFCC97; fill: none;"/>
                    <path d="M440 110 L530 110" stroke="#65BDAD" stroke-width="2" marker-end="url(#arrowhead2)" style="stroke: #65BDAD; fill: none;"/>
                    
                    <!-- Markers -->
                    <defs>
                        <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                            <polygon points="0 0, 10 3.5, 0 7" fill="#FFCC97" />
                        </marker>
                        <marker id="arrowhead2" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                            <polygon points="0 0, 10 3.5, 0 7" fill="#65BDAD" />
                        </marker>
                    </defs>

                    <!-- Labels -->
                    <text x="225" y="100" text-anchor="middle" fill="#A0AEC0" font-size="11">External Risk</text>
                    <text x="485" y="100" text-anchor="middle" fill="#A0AEC0" font-size="11">This Research</text>
                </svg>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full mt-6 border-t border-gray-100 pt-8">
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-3">What we don't know yet</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> Premium price is interpreted as “branding,” not risk reduction.
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> Trust conversion remains weak, causing high CAC and low repeat.
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> The brand collapses into generic clean-language that is easy to copy.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-3">Strategic Risk if ignored</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> Premium price is seen as "unjustified luxury."
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> High CPA in digital channels due to weak trust conversion.
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 mt-1">●</span> Brand positioning becomes a generic clean clone.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRIMARY BRAND QUESTION -->
        <section id="brand-question" class="space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-800">Primary Strategic Brand Question</h3>
                <button onclick="copyText('primaryQ')" class="text-xs font-bold text-teal-dark hover:underline">COPY QUESTION</button>
            </div>
            <div class="card p-1 bg-gradient-to-r from-peach-dark to-teal-dark">
                <div class="bg-white p-8 rounded-[0.9rem]">
                    <p id="primaryQ" 
                       contenteditable="true" 
                       class="editable-field text-xl md:text-2xl font-medium leading-relaxed italic text-gray-700">
                        In Indonesia’s hair & body care market, what brand positioning can Q’WELL credibly own—using its HRIPT and certification-backed trust infrastructure—to justify premium pricing and remain defensible through 2030 under a conservative market outlook?
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-400">
                        <span class="bg-gray-100 px-2 py-1 rounded">EDITABLE</span>
                        <span>Click text to modify the governing question.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECONDARY DECISION QUESTIONS -->
        <section id="secondary-questions" class="space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-800">Secondary Decision Questions</h3>
                <button onclick="copyList('secondaryList')" class="text-xs font-bold text-teal-dark hover:underline">COPY LIST</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="secondaryList">
                <div class="card p-6 border-l-4 border-peach-dark group relative">
                    <p class="text-xs font-bold text-peach-dark uppercase mb-2">Problem Reality</p>
                    <p contenteditable="true" class="editable-field text-sm leading-relaxed text-gray-600">What are the most persistent, high-cost (functional + emotional) hair and body skin problems in Indonesia that create demand for safety-first routines?</p>
                </div>
                <div class="card p-6 border-l-4 border-teal-dark group relative">
                    <p class="text-xs font-bold text-teal-dark uppercase mb-2">Risk Psychology</p>
                    <p contenteditable="true" class="editable-field text-sm leading-relaxed text-gray-600">How do Indonesian consumers with reactivity perceive risk and interpret "safe/gentle" claims after repeated product failures?</p>
                </div>
                <div class="card p-6 border-l-4 border-teal-dark group relative">
                    <p class="text-xs font-bold text-teal-dark uppercase mb-2">Value Exchange</p>
                    <p contenteditable="true" class="editable-field text-sm leading-relaxed text-gray-600">What benefits and proof signals most strongly increase willingness-to-pay for "risk reduction" rather than "instant transformation"?</p>
                </div>
                <div class="card p-6 border-l-4 border-peach-dark group relative">
                    <p class="text-xs font-bold text-peach-dark uppercase mb-2">Market Validation</p>
                    <p contenteditable="true" class="editable-field text-sm leading-relaxed text-gray-600">Under conservative assumptions through 2030, is there sufficient premiumization momentum to sustain Q’WELL’s price architecture?</p>
                </div>
            </div>
        </section>

        <!-- SUCCESS CRITERIA SCORECARD -->
        <section id="success-criteria" class="space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-800">Positioning Success Criteria Scorecard</h3>
                <div class="flex gap-4">
                    <button onclick="copyTable('criteriaTable')" class="text-xs font-bold text-teal-dark hover:underline">COPY CRITERIA</button>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="w-full overflow-x-auto">
                    <table class="min-w-[700px] w-full text-left text-sm" id="criteriaTable">
                        <thead class="bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th class="px-6 py-4 font-bold text-xs uppercase tracking-wider text-gray-500">Criterion</th>
                                <th class="px-6 py-4 font-bold text-xs uppercase tracking-wider text-gray-500">Meaning / Intent</th>
                                <th class="px-6 py-4 font-bold text-xs uppercase tracking-wider text-gray-500">Evidence Type</th>
                                <th class="px-6 py-4 font-bold text-xs uppercase tracking-wider text-gray-500">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">A. Market Demand Base</td>
                                <td class="px-6 py-4 text-gray-600">Credible Indonesian demand for specific benefits at premium prices.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Search Trends</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">B. Competitive Distinction</td>
                                <td class="px-6 py-4 text-gray-600">Not a generic "clean/natural" clone; distinct from named incumbents.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Brand Audit</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox"><span class="slider"></span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">C. HRIPT Leverage</td>
                                <td class="px-6 py-4 text-gray-600">Positioning directly benefits from the international HRIPT proof.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Claims Audit</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">D. Trust Insurance Logic</td>
                                <td class="px-6 py-4 text-gray-600">Premium justified as risk reduction/consistency, not just luxury.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Qualitative Analysis</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox"><span class="slider"></span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">E. 2030 Resilience</td>
                                <td class="px-6 py-4 text-gray-600">Defensible if macro conditions tighten or clean trends fragment.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Forecast Model</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox"><span class="slider"></span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-semibold text-gray-800">F. Compliance Guardrail</td>
                                <td class="px-6 py-4 text-gray-600">Avoids over-claiming; wording remains legally defensible for Indo.</td>
                                <td class="px-6 py-4 text-xs font-mono text-gray-400 uppercase">Regulatory Check</td>
                                <td class="px-6 py-4">
                                    <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-[10px] text-gray-400 text-center uppercase tracking-widest font-bold italic">Note: "Qualitative decision scaffold (not statistical)."</p>
        </section>

        <!-- GUARDRAILS -->
        <section id="guardrails" class="space-y-6">
            <h3 class="text-xl font-bold text-gray-800">Research Scope Guardrails</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
                    <h4 class="font-bold text-sm mb-2 text-gray-700">Geography & Category</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Indonesia National Market only. Strictly Hair & Body care (Shampoo, Body wash, Cream, Oil).</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
                    <h4 class="font-bold text-sm mb-2 text-gray-700">Methodology</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Online secondary data only. No direct consumer interviews or quantitative surveys in this phase.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
                    <h4 class="font-bold text-sm mb-2 text-gray-700">Tone & Intent</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Proof-led, calm, rational. This is about risk management, not high-emotion lifestyle marketing.</p>
                </div>
            </div>
        </section>

        <!-- RESEARCH FLOW -->
        <section id="research-flow" class="space-y-6 pb-20">
            <h3 class="text-xl font-bold text-gray-800">The Research Flow (Sections 1-8)</h3>
            <div class="relative pt-12 pb-6">
                <!-- Timeline Line -->
                <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-100 -translate-y-1/2"></div>
                
                <div class="relative flex justify-between gap-2 overflow-x-auto pt-4 pb-4">
                    <!-- Section 1 (Active) -->
                    <div class="flex flex-col items-center min-w-[100px]">
                        <div class="w-10 h-10 rounded-full bg-teal-dark text-white flex items-center justify-center font-bold text-sm z-10 shadow-lg ring-4 ring-teal-light">1</div>
                        <p class="text-[10px] font-bold mt-3 text-teal-dark uppercase">Objective</p>
                    </div>
                    <!-- Future Sections -->
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">2</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">STRUCTURE</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">3</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">PSYCHOLOGY</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">4</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">NEEDS/ICP</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">5</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">VALIDATION</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">6</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">COMPETITORS</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">7</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">FORECAST</p>
                    </div>
                    <div class="flex flex-col items-center min-w-[100px] opacity-40">
                        <div class="w-10 h-10 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center font-bold text-sm z-10">8</div>
                        <p class="text-[10px] font-medium mt-3 text-gray-400 uppercase">POSITION</p>
                    </div>
                </div>
            </div>

            <div class="card p-8 bg-teal-dark text-dark">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest mb-4 opacity-70">How Section 1 is used</h4>
                        <p class="text-sm leading-relaxed">Section 1 serves as the <strong>Governance Module</strong>. It ensures every later section (2–8) is filtered to answer one thing: can Q’WELL justify premium pricing through defensible trust logic (not hype) in Indonesia—through 2030 under conservative assumptions?</p>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest mb-4 opacity-70">Output Summary</h4>
                        <ul class="text-sm space-y-2">
                            <li class="flex items-center gap-2">✅ Validated Strategic Brand Question</li>
                            <li class="flex items-center gap-2">✅ Pass/Fail Positioning Gate</li>
                            <li class="flex items-center gap-2">✅ Primary Scope Alignment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Sidebar toggle for mobile screens
        const burgerBtn = document.getElementById('sidebarBurgerBtn');
        const sidebar = document.getElementById('sidebarNav');
        const overlay = document.getElementById('sidebarOverlay');

        function openSidebar() {
            sidebar.classList.add('sidebar-mobile-open');
            burgerBtn.classList.add('open');
            overlay.style.display = 'block';
            setTimeout(()=>{overlay.style.opacity="1";},10);
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }
        function closeSidebar() {
            sidebar.classList.remove('sidebar-mobile-open');
            burgerBtn.classList.remove('open');
            overlay.style.opacity = "0";
            setTimeout(()=>{overlay.style.display="none";}, 170);
            document.body.style.overflow = '';
        }
        burgerBtn.addEventListener('click', function () {
            if (sidebar.classList.contains('sidebar-mobile-open')) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });
        overlay.addEventListener('click', closeSidebar);

        // Hide sidebar/overlay on resize if desktop
        window.addEventListener('resize', function() {
            if(window.innerWidth > 1024) {
                closeSidebar();
            }
        });

        // Toggle Sidebar Active State
        const sections = document.querySelectorAll("section, header");
        const navLinks = document.querySelectorAll(".nav-link");

        window.onscroll = () => {
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("active");
                }
            });
        };

        // Notes Toggle
        function toggleNotes() {
            document.body.classList.toggle('notes-visible');
            const icon = document.getElementById('notesIcon');
            icon.innerText = document.body.classList.contains('notes-visible') ? '🙈' : '👁️';
        }

        // Copy functionality
        function copyText(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text);
            showToast("Copied to clipboard");
        }

        function copyList(elementId) {
            const items = document.querySelectorAll(`#${elementId} p.editable-field`);
            let listText = "";
            items.forEach((item, i) => listText += `${i+1}. ${item.innerText}\n`);
            navigator.clipboard.writeText(listText);
            showToast("List copied");
        }

        function copyTable(elementId) {
            const table = document.getElementById(elementId);
            let text = "";
            for (let i = 0, row; row = table.rows[i]; i++) {
                for (let j = 0, col; col = row.cells[j]; j++) {
                    text += col.innerText + (j === row.cells.length - 1 ? "" : "\t");
                }
                text += "\n";
            }
            navigator.clipboard.writeText(text);
            showToast("Table data copied");
        }

        function copyFullOutput() {
            const q = document.getElementById('primaryQ').innerText;
            const items = document.querySelectorAll(`#secondaryList p.editable-field`);
            let secondary = "";
            items.forEach((item, i) => secondary += `- ${item.innerText}\n`);
            
            const fullText = `Q'WELL BRAND STRATEGY - SECTION 1\n\nPRIMARY QUESTION:\n${q}\n\nSECONDARY QUESTIONS:\n${secondary}`;
            navigator.clipboard.writeText(fullText);
            showToast("Full Section 1 output copied");
        }


        // --- Persistence (Local Only) ---
        const STORAGE_KEY = "qwell_section1_dashboard_v1";

        function loadState() {
            try {
                const raw = localStorage.getItem(STORAGE_KEY);
                if (!raw) return;
                const state = JSON.parse(raw);

                // Editable fields
                const editables = document.querySelectorAll('[contenteditable="true"]');
                editables.forEach((el, idx) => {
                    const key = el.id ? `editable:${el.id}` : `editable:${idx}`;
                    if (state[key] !== undefined) el.innerText = state[key];
                });

                // Switches
                const switches = document.querySelectorAll('input[type="checkbox"]');
                switches.forEach((el, idx) => {
                    const key = el.dataset.key ? `switch:${el.dataset.key}` : `switch:${idx}`;
                    if (state[key] !== undefined) el.checked = !!state[key];
                });

                // Notes visibility
                if (state["notesVisible"]) {
                    document.body.classList.add("notes-visible");
                    const icon = document.getElementById('notesIcon');
                    if (icon) icon.innerText = '🙈';
                }
            } catch (e) { /* ignore */ }
        }

        function saveState() {
            const state = {};
            const editables = document.querySelectorAll('[contenteditable="true"]');
            editables.forEach((el, idx) => {
                const key = el.id ? `editable:${el.id}` : `editable:${idx}`;
                state[key] = el.innerText;
            });

            const switches = document.querySelectorAll('input[type="checkbox"]');
            switches.forEach((el, idx) => {
                const key = el.dataset.key ? `switch:${el.dataset.key}` : `switch:${idx}`;
                state[key] = el.checked;
            });

            state["notesVisible"] = document.body.classList.contains("notes-visible");
            localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
        }

        // Attach listeners
        document.addEventListener("input", (e) => {
            if (e.target && e.target.getAttribute && e.target.getAttribute("contenteditable") === "true") {
                saveState();
            }
        });

        document.addEventListener("change", (e) => {
            if (e.target && e.target.type === "checkbox") {
                saveState();
            }
        });

        // Initialize
        window.addEventListener("load", loadState);

        function showToast(msg) {
            const toast = document.createElement("div");
            toast.className = "fixed bottom-8 right-8 bg-slate-800 text-white px-5 py-3 rounded-full text-sm font-bold shadow-2xl z-50"; toast.style.opacity="0"; toast.style.transform="translateY(8px)"; toast.style.transition="opacity .18s ease, transform .18s ease"; requestAnimationFrame(()=>{toast.style.opacity="1"; toast.style.transform="translateY(0)";});
            toast.innerText = msg;
            document.body.appendChild(toast);
            setTimeout(() => { toast.style.opacity='0'; toast.style.transform='translateY(8px)'; setTimeout(()=>toast.remove(), 220); }, 2200);
        }
    </script>
</div>