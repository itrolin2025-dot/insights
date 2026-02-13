<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Q'WELL | Master Strategic Intelligence Dossier</title>
    <!-- <title>Q'WELL Strategic Research Brief | Insights</title> -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('images/logo/qwell-logo.png') }}" type="image/png">

  <!-- Tailwind (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #D4AF37;        /* Gold/Bronze */
      --paper: #F8F9FA;         /* Gallery Grey */
      --ink: #111827;           /* Deep Grey */
      --radius: 1.5rem;
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
      scroll-behavior: smooth;
    }

    .serif { font-family: 'Playfair Display', serif; }

    .bg-grid {
      background-size: 60px 60px;
      background-image: radial-gradient(circle, #0000000a 1px, transparent 1px);
    }

    /* Accordion Custom Styles */
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s cubic-bezier(0, 1, 0, 1);
    }
    .accordion-item.active .accordion-content {
      /* max-height handled by JS for infinite growth */
      transition: max-height 0.5s ease-in-out;
    }
    .accordion-item.active .accordion-icon {
      transform: rotate(180deg);
      background-color: var(--accent);
      color: white;
    }

    /* Progress bar */
    #progress-container {
      height: 4px;
      background: rgba(13, 43, 42, 0.1);
    }
    #progress-bar {
      height: 100%;
      background: var(--accent);
      width: 0%;
      transition: width 0.2s;
    }

    /* Chart Simulation */
    .bar-grow { transition: width 1s ease-in-out; }

    /* Footer Shadow */
    .footer-shadow {
        box-shadow: 0 -20px 50px rgba(0,0,0,0.05);
    }

    @media print {
      .no-print { display: none; }
      .accordion-content { max-height: none !important; }
    }
  </style>
</head>
<body class="bg-grid">

  <!-- Floating Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-black/5">
    <div class="max-w-screen-2xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <img src="{{ asset('images/logo/qwell-text-logo.png') }}" alt="Q'WELL Logo Left"
                    class="w-8 h-8 object-contain"
                    style="aspect-ratio:1/1; display:block;"
            />
        <div>
          <p class="text-[10px] font-black uppercase tracking-widest text-[#0D2B2A]">Master Strategic Dossier</p>
          <p class="text-[9px] text-gray-400 uppercase tracking-tighter">Indonesia Market Entry 2026-2030</p>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <span class="hidden md:inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100 uppercase tracking-widest">Confidence Level: 94%</span>
        <!-- <button onclick="window.print()" class="no-print px-4 py-2 bg-[#0D2B2A] text-white text-[11px] font-bold rounded-full hover:bg-emerald-900 transition-all shadow-lg shadow-emerald-900/20">
          GENERATE FULL PDF
        </button> -->
      </div>
    </div>
    <header style="background-color: #f0f757;" class="shadow-md top-0 z-80">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-3 flex items-center justify-center text-center h-6 md:h-10 transition-all duration-200">
            <span class="block text-base sm:text-xl px-2 font-extrabold tracking-tight text-[#0B6E99] text-center w-full">
                <span class="font-semibold text-gray-700">
                    Prepared exclusively for Q’WELL
                </span>
            </span>
        </div>
    </header>
    <div id="progress-container"><div id="progress-bar"></div></div>
  </nav>

  <div class="md:hidden fixed bottom-3 left-0 w-full flex justify-center z-50 pointer-events-none">
    <div class="bg-white/95 border border-gray-200 shadow-lg rounded-lg px-4 py-2 text-xs font-semibold text-gray-500 pointer-events-auto">
        Access protected &middot; Not for distribution
    </div>
</div>

  <main class="max-w-7xl mx-auto pt-32 pb-20 px-2">
    
    <!-- SECTION 0: GATEWAY -->
    <header id="section-0" class="mb-24 animate-in">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3.5rem] overflow-hidden shadow-2xl">
            <div class="bg-white rounded-[3.4rem] p-10 sm:p-20 relative overflow-hidden">
              <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Research Gateway</span>
              <h1 class="serif text-5xl sm:text-7xl text-emerald-950 leading-tight mb-8 italic">The Strategic Intelligence <span class="not-italic text-[#D4AF37]">Framework</span></h1>
              
              <div class="grid lg:grid-cols-2 gap-12">
                  <div class="space-y-6">
                      <h3 class="text-xs font-black text-emerald-900 uppercase tracking-widest border-b pb-2">Overview</h3>
                      <p class="text-gray-500 text-sm leading-relaxed">
                          This dossier is a decision-grade system engineered to remove assumption bias from Q’WELL’s market entry. It anchors the brand in <strong>biological reality</strong> and <strong>structural proof</strong> rather than aspirational hype.
                      </p>
                  </div>
                  <div class="space-y-6">
                      <h3 class="text-xs font-black text-emerald-900 uppercase tracking-widest border-b pb-2">Methodology</h3>
                      <p class="text-[11px] text-gray-500 font-medium leading-relaxed italic">
                        "Inverse Validation: Analyzing environmental toxicity (Problem) and cultural trauma (Psychology) to build a brand that acts as Biological Insurance."
                      </p>
                      <div class="flex gap-2">
                          <span class="px-3 py-1 bg-gray-100 rounded-full text-[9px] font-bold uppercase">Secondary Data Only</span>
                          <span class="px-3 py-1 bg-gray-100 rounded-full text-[9px] font-bold uppercase">2030 Conservative Outlook</span>
                      </div>
                  </div>
              </div>

              <!-- Disclaimer Card -->
              <div class="mt-12 p-8 bg-red-50 rounded-[2rem] border border-red-100 flex items-start gap-6">
                  <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center shrink-0 text-red-600 font-black">!</div>
                  <div>
                      <h4 class="text-xs font-black text-red-900 uppercase mb-2">Legal Disclaimer</h4>
                      <p class="text-[11px] text-red-800/70 leading-relaxed">
                          Internal strategic asset only. Does not constitute medical advice. Forecasts assume stable regulatory environments and adherence to BPOM 18/2024 standards.
                      </p>
                  </div>
              </div>
            </div>
        </div>
    </header>

    <!-- RESEARCH ACCORDION (1-8) -->
    <div class="space-y-6">

        <!-- SECTION 1: Governance -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">01</span>
                    <h2 class="serif text-2xl text-emerald-950">Strategic Governance & The Core Question</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section1')
            </div>
        </div>

        <!-- SECTION 2: Structural Problem -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">02</span>
                    <h2 class="serif text-2xl text-emerald-950">Environmental Hostility Matrix</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section2')
            </div>
        </div>

        <!-- SECTION 3: Psychology -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">03</span>
                    <h2 class="serif text-2xl text-emerald-950">Psychology & The Veracity Crisis</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section3')
            </div>
        </div>

        <!-- SECTION 4: ICP & JTBD -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">04</span>
                    <h2 class="serif text-2xl text-emerald-950">ICP & The Hierarchy of Defensive Needs</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section4')
            </div>
        </div>

        <!-- SECTION 5: Market Validation -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">05</span>
                    <h2 class="serif text-2xl text-emerald-950">Market Validation & 2030 Resilience</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section5')
            </div>
        </div>

        <!-- SECTION 6: Competitive Map -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">06</span>
                    <h2 class="serif text-2xl text-emerald-950">Competitive Battleground</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section6')
            </div>
        </div>

        <!-- SECTION 7: Trust Architecture -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">07</span>
                    <h2 class="serif text-2xl text-emerald-950">Proof Infrastructure & Guardrails</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section7')
            </div>
        </div>

        <!-- SECTION 8: Final Lock -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">08</span>
                    <h2 class="serif text-2xl text-emerald-950 font-black">Final Strategic Lock & Synthesis</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section8')
            </div>
        </div>

    </div>
  </main>

  <!-- WORLD-CLASS FOOTER -->
  <footer class="mt-20 bg-[#0D2B2A] text-white pt-24 pb-12 relative overflow-hidden footer-shadow">
      <!-- Decorative Overlay -->
      <div class="absolute inset-0 opacity-5 pointer-events-none">
          <svg width="100%" height="100%"><pattern id="grid-footer" width="80" height="80" patternUnits="userSpaceOnUse"><path d="M 80 0 L 0 0 0 80" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-footer)" /></svg>
      </div>

      <div class="max-w-screen-2xl mx-auto px-6 relative z-10">
          <div class="grid lg:grid-cols-12 gap-16 mb-20">
              <!-- Institutional Identity -->
              <div class="lg:col-span-5 space-y-8">
                  <div class="flex items-center gap-4">
                      <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-white font-bold text-3xl border border-white/10">Q</div>
                      <div>
                          <h2 class="serif text-2xl italic tracking-wide">Q'WELL</h2>
                          <p class="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4AF37]">Strategic Intelligence Unit</p>
                      </div>
                  </div>
                  <p class="text-emerald-100/60 text-sm leading-relaxed max-w-sm">
                      Protecting brand equity through 2030 via clinical verification, regulatory compliance, and biological security logic. Engineered for the Indonesian Urban Ecosystem.
                  </p>
              </div>

              <!-- Quick Links (Internal Use) -->
              <div class="lg:col-span-3">
                  <h4 class="text-[10px] font-black text-[#D4AF37] uppercase tracking-[0.3em] mb-8">Strategic Documents</h4>
                  <ul class="space-y-4 text-xs font-bold text-emerald-100/50">
                      <li><a href="#section-0" class="hover:text-white transition-colors">Project Methodology</a></li>
                      <li><a href="#" class="hover:text-white transition-colors">Raw Data Annex (Confidential)</a></li>
                      <li><a href="#" class="hover:text-white transition-colors">2030 Risk Assessment</a></li>
                      <li><a href="#" class="hover:text-white transition-colors">Regulatory Compliance Registry</a></li>
                  </ul>
              </div>

              <!-- Contact/Auth -->
              <div class="lg:col-span-4 bg-white/5 p-8 rounded-[2.5rem] border border-white/10">
                  <h4 class="text-[10px] font-black text-emerald-300 uppercase tracking-widest mb-6 italic">Internal Authorization</h4>
                  <div class="space-y-6">
                      <div class="flex items-center gap-4">
                          <div class="w-10 h-10 rounded-full bg-emerald-900 border border-white/20 flex items-center justify-center">
                              <svg width="18" height="18" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M12 11v5m0 0h-1m1 0h1m-1-10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                          </div>
                          <div>
                              <p class="text-[9px] font-black text-gray-400 uppercase">Dossier Access Status</p>
                              <p class="text-xs font-bold text-emerald-100 uppercase">Board Level Authorized</p>
                          </div>
                      </div>
                      <p class="text-[10px] text-emerald-200/40 leading-relaxed italic">
                          "This document remains the property of the Strategic Intelligence Unit. Unauthorized reproduction is prohibited by the 2026 Brand Governance Agreement."
                      </p>
                  </div>
              </div>
          </div>

          <!-- Bottom Bar -->
          <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
              <div class="flex gap-8 text-[10px] font-black uppercase tracking-widest text-emerald-100/30">
                  <span>Privacy Policy</span>
                  <span>Confidentiality Agreement</span>
                  <span>Data Integrity Protocol</span>
              </div>
              <p class="text-[10px] font-black text-[#D4AF37] uppercase tracking-[0.2em]">
                  © 2026 Q'WELL • Decision-Grade Research
              </p>
          </div>
      </div>
  </footer>

  <script>
    // Accordion Logic
    document.querySelectorAll('.accordion-trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const item = trigger.parentElement;
            const content = item.querySelector('.accordion-content');
            const isOpen = item.classList.contains('active');
            
            // Close all items first (ensuring animations work)
            document.querySelectorAll('.accordion-item').forEach(i => {
                const c = i.querySelector('.accordion-content');
                if (i !== item && i.classList.contains('active')) {
                    // Force height first for animation to work from 'auto'
                    if(c.style.maxHeight === 'none') {
                        c.style.maxHeight = c.scrollHeight + 'px';
                        c.style.overflow = 'hidden';
                    }
                    // Trigger reflow
                    void c.offsetWidth;
                    // Collapse
                    c.style.maxHeight = '0';
                    i.classList.remove('active');
                }
            });
            
            // Toggle clicked item
            if (!isOpen) {
                item.classList.add('active');
                content.style.display = 'block';
                content.style.maxHeight = content.scrollHeight + "px";
                
                // After expansion, remove constraints to prevent cutting off lengthy content
                setTimeout(() => {
                    if (item.classList.contains('active')) {
                        content.style.maxHeight = "none";
                        content.style.overflow = "visible"; // Critical for sticky headers
                    }
                }, 600); // Wait for transition
            } else {
                // Closing current item
                content.style.overflow = 'hidden';
                content.style.maxHeight = content.scrollHeight + 'px';
                void content.offsetWidth; // force reflow
                content.style.maxHeight = '0';
                item.classList.remove('active');
            }
        });
    });

    // Progress Bar Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById("progress-bar").style.width = scrolled + "%";
    });

    // Open first accordion by default
    document.querySelector('.accordion-item').classList.add('active');
  </script>
</body>
</html>