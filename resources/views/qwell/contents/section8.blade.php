
  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #D4AF37;        /* Gold/Bronze */
      --paper: #F8F9FA;         /* Gallery Grey */
      --ink: #111827;           /* Deep Grey */
      --radius: 2rem;
      --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
      scroll-behavior: smooth;
    }

    .serif { font-family: 'Playfair Display', serif; }

    .glass-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(0, 0, 0, 0.03);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .sidebar-active {
      background: var(--primary);
      color: white;
      box-shadow: 0 10px 20px rgba(13, 43, 42, 0.15);
    }

    .bg-grid {
      background-size: 80px 80px;
      background-image: radial-gradient(circle, #00000008 1px, transparent 1px);
    }

    /* Positioning Matrix */
    .matrix-axis { background: rgba(13, 43, 42, 0.1); }
    .gold-pulse { box-shadow: 0 0 30px rgba(212, 175, 55, 0.4); animation: pulse 3s infinite; }
    
    @keyframes pulse {
        0% { transform: scale(1); box-shadow: 0 0 20px rgba(212, 175, 55, 0.3); }
        50% { transform: scale(1.05); box-shadow: 0 0 40px rgba(212, 175, 55, 0.6); }
        100% { transform: scale(1); box-shadow: 0 0 20px rgba(212, 175, 55, 0.3); }
    }

    /* Animation */
    @keyframes reveal {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-reveal { animation: reveal 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }

    .pillar-card {
        border-left: 4px solid var(--accent);
        transition: all 0.3s ease;
    }
    .pillar-card:hover { transform: translateX(8px); background: white; }
  </style>
<body class="bg-grid">

  <!-- Floating Nav -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-black uppercase tracking-widest text-[#0D2B2A]">Final Strategic Lock</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-08-POSITIONING-V3.1</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-100 uppercase tracking-widest">DOCTRINE FINALIZED</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all text-xs shadow-lg">
          APPROVE POSITIONING
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Final Roadmap</h3>
          <ul class="space-y-1">
            <li><a href="#locked" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Locked Territory</a></li>
            <li><a href="#doctrine" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Brand Doctrine</a></li>
            <li><a href="#pricing" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Pricing Logic</a></li>
            <li><a href="#rtb" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Proof Stack</a></li>
            <li><a href="#stress" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> 2030 Stress Test</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white relative overflow-hidden">
            <div class="absolute -bottom-6 -right-6 opacity-10"><svg width="100" height="100" viewBox="0 0 100 100" fill="white"><path d="M50 0L61 39L100 50L61 61L50 100L39 61L0 50L39 39L50 0Z"/></svg></div>
            <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-3 italic">Positioning Essence</p>
            <p class="text-[11px] leading-relaxed italic opacity-90">"Q'WELL occupies the intersection of Clinical Depth and Biological Security. We sell the absence of regret."</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-20">
      
      <!-- 01. Locked Territory & Matrix -->
      <section id="locked" class="animate-reveal">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3.5rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[3.4rem] p-10 sm:p-20 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-10 border border-emerald-100">Final Brand Thesis</span>
            
            <div class="max-w-4xl">
              <h1 class="serif text-5xl sm:text-7xl text-emerald-950 leading-tight mb-10">The Biological<br/><span class="italic text-[#D4AF37]">Security</span> Premium</h1>
              <p class="text-xl text-gray-500 leading-relaxed font-medium mb-16">
                Q’WELL is not a "beauty" brand; it is a **Biological Security System**. We provide a structurally verified, dermatology-aligned sanctuary for high-worth urbanites who prioritize **Predictable Stability** over viral aesthetic experimentation.
              </p>
            </div>

            <!-- Positioning Matrix Chart -->
            <div class="bg-gray-50 rounded-[3rem] p-12 sm:p-16 border border-gray-100 relative">
                <h4 class="text-[11px] font-black text-gray-400 uppercase tracking-[0.3em] mb-12 text-center">Strategic Positioning Matrix</h4>
                
                <div class="relative w-full aspect-square sm:aspect-[2/1] max-w-4xl mx-auto border-l border-b border-gray-200">
                    <!-- Labels -->
                    <span class="absolute -top-8 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400 uppercase">Aspirational "Glow" / Trends</span>
                    <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] font-black text-emerald-900 uppercase">Biological Security / Stability</span>
                    <span class="absolute -left-20 top-1/2 -translate-y-1/2 -rotate-90 text-[10px] font-bold text-gray-400 uppercase">Surface Claims</span>
                    <span class="absolute -right-20 top-1/2 -translate-y-1/2 rotate-90 text-[10px] font-black text-emerald-900 uppercase">Structural Proof (SQR + HRIPT)</span>

                    <!-- Axes -->
                    <div class="absolute inset-0 flex items-center"><div class="w-full h-[1px] bg-gray-100"></div></div>
                    <div class="absolute inset-0 flex justify-center"><div class="h-full w-[1px] bg-gray-100"></div></div>

                    <!-- Q'WELL Node -->
                    <div class="absolute bottom-[15%] right-[10%] group cursor-pointer">
                        <div class="w-24 h-24 bg-[#0D2B2A] rounded-full border-8 border-[#D4AF37] flex items-center justify-center text-white font-black text-3xl gold-pulse">Q</div>
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-[#0D2B2A] text-[#D4AF37] px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap shadow-xl">
                            THE GOLD ZONE
                        </div>
                    </div>

                    <!-- Competitor Dots -->
                    <div class="absolute top-[20%] left-[20%] flex flex-col items-center opacity-40">
                        <div class="w-10 h-10 bg-gray-200 rounded-full border border-gray-300"></div>
                        <span class="text-[9px] font-bold uppercase mt-2">Mass Market</span>
                    </div>
                    <div class="absolute bottom-[40%] left-[40%] flex flex-col items-center opacity-60">
                        <div class="w-12 h-12 bg-gray-200 rounded-full border border-gray-300"></div>
                        <span class="text-[9px] font-bold uppercase mt-2">Local Premium</span>
                    </div>
                </div>
                <div class="mt-16 p-6 bg-emerald-950 rounded-3xl text-white text-center">
                    <p class="text-[11px] font-bold tracking-widest uppercase">Result: Q'WELL occupies the unoccupied quadrant of <span class="text-[#D4AF37]">Highest Verification</span> + <span class="text-[#D4AF37]">Highest Security</span>.</p>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 02. Brand Doctrine Pillars -->
      <section id="doctrine" class="animate-reveal" style="animation-delay: 0.1s;">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="space-y-10">
                <h2 class="serif text-4xl text-emerald-950">The Brand Doctrine</h2>
                <p class="text-gray-500 text-sm leading-relaxed">Four pillars that govern every product launch and communication pulse through 2030.</p>
                
                <div class="space-y-6">
                    <div class="pillar-card p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">01. Predictable Reliability</h4>
                        <p class="text-xs text-gray-500 italic">"The brand refuses to chase 'viral glow.' We ensure skin is exactly the same—healthy and stable—every morning."</p>
                    </div>
                    <div class="pillar-card p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">02. Structural Stability</h4>
                        <p class="text-xs text-gray-500 italic">"Focus on barrier maintenance as a healthcare necessity, not an aesthetic transformation."</p>
                    </div>
                    <div class="pillar-card p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">03. Calm Discipline</h4>
                        <p class="text-xs text-gray-500 italic">"Communication is clinical and calm. We neutralize claim fatigue through discipline, not louder promises."</p>
                    </div>
                    <div class="pillar-card p-6 bg-white/50 rounded-2xl shadow-xl border-emerald-950">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">04. Transparent Integrity (SQR)</h4>
                        <p class="text-xs text-gray-500 italic">"Unit-level verification via SQR. Proactive lab disclosure. Transparency is our primary marketing strategy."</p>
                    </div>
                </div>
            </div>

            <div class="bg-emerald-950 rounded-[3rem] p-12 text-white relative overflow-hidden flex flex-col justify-center">
                <div class="absolute top-0 right-0 p-8 opacity-10"><svg width="120" height="120" viewBox="0 0 24 24" fill="white"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"></path></svg></div>
                <h4 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-8">Strategic Exclusions</h4>
                <p class="text-sm font-bold text-emerald-100 mb-10 italic border-l-2 border-[#D4AF37] pl-4">"Positioning is as much about what we say NO to."</p>
                <ul class="space-y-6">
                    <li class="flex items-center gap-4 text-[11px] font-black uppercase text-red-300">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span> NO Price-Led Competition
                    </li>
                    <li class="flex items-center gap-4 text-[11px] font-black uppercase text-red-300">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span> NO Viral Active Chasing
                    </li>
                    <li class="flex items-center gap-4 text-[11px] font-black uppercase text-red-300">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span> NO Aggressive "Glow" Claims
                    </li>
                    <li class="flex items-center gap-4 text-[11px] font-black uppercase text-red-300">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span> NO Cheap "Natural" Clones
                    </li>
                </ul>
            </div>
        </div>
      </section>

      <!-- 03. Pricing Justification Logic -->
      <section id="pricing" class="animate-reveal" style="animation-delay: 0.2s;">
        <div class="glass-card p-12 sm:p-20 relative overflow-hidden bg-white">
            <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4AF37]/5 rounded-bl-full"></div>
            
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="md:w-1/2">
                    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">Premium Value Logic</h3>
                    <h2 class="serif text-4xl text-emerald-950 mb-8 italic">The "Reliability Insurance" Premium</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-8">
                        Q’WELL’s target price (Rp 400k–800k) is not a vanity markup for aesthetic status. It is a <strong>Safety Premium</strong> calculated based on the cost of structural biological security.
                    </p>
                    <div class="p-8 bg-emerald-50 rounded-[2.5rem] border border-emerald-100">
                        <p class="text-[11px] font-bold text-emerald-900 uppercase mb-4">Pricing Component Index:</p>
                        <ul class="text-[10px] space-y-3 font-bold text-emerald-800/70 uppercase tracking-tight">
                            <li>• Multi-Week HRIPT Clinical Stress Tests (Intl Lab)</li>
                            <li>• Unit-Level Serialized QR (SQR) Infrastructure</li>
                            <li>• Dermatologist-Led Raw Material Vetting (Reg 26/2025)</li>
                            <li>• Traceable Ethical DNA Verification (Vegan/Natural)</li>
                        </ul>
                    </div>
                </div>
                <div class="md:w-1/2 bg-[#0D2B2A] rounded-[3rem] p-10 text-white flex flex-col items-center text-center">
                    <h4 class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-8">Value Anchor</h4>
                    <p class="text-4xl serif italic mb-2">"Biological Debt Avoidance"</p>
                    <div class="h-px w-24 bg-white/20 my-6"></div>
                    <p class="text-xs text-emerald-100/60 leading-relaxed max-w-xs">
                        "The cost of a bad skin reaction, dermatologist visits, and barrier recovery weeks is higher than a Q'WELL SKU. We sell the insurance against that debt."
                    </p>
                    <div class="mt-10 px-6 py-3 border border-[#D4AF37] rounded-full">
                        <span class="text-[10px] font-black text-[#D4AF37] uppercase tracking-widest">Rp 400k — 800k Validated Tier</span>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- 04. Reasons-To-Believe Stack -->
      <section id="rtb" class="animate-reveal" style="animation-delay: 0.3s;">
        <div class="glass-card p-12 text-center">
            <h2 class="serif text-4xl text-emerald-950 mb-12">The Locked RTB Stack</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100 hover:border-emerald-900 transition-all">
                    <p class="text-xs font-black text-emerald-950 mb-1">BPOM NIE</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400 tracking-tighter">Mandatory Base</p>
                </div>
                <div class="p-6 bg-emerald-50 rounded-3xl border border-emerald-100 hover:border-emerald-900 transition-all">
                    <p class="text-xs font-black text-emerald-950 mb-1">HRIPT</p>
                    <p class="text-[9px] uppercase font-bold text-emerald-700 tracking-tighter">Clinical Clinical</p>
                </div>
                <div class="p-6 bg-[#0D2B2A] text-white rounded-3xl shadow-xl gold-glow border border-[#D4AF37]/30">
                    <p class="text-xs font-black text-[#D4AF37] mb-1">SQR</p>
                    <p class="text-[9px] uppercase font-bold text-emerald-300 tracking-tighter">Scan-to-Trust</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100 hover:border-emerald-900 transition-all">
                    <p class="text-xs font-black text-emerald-950 mb-1">VEGAN</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400 tracking-tighter">Purity Signal</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100 hover:border-emerald-900 transition-all">
                    <p class="text-xs font-black text-emerald-950 mb-1">HALAL</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400 tracking-tighter">Ethical Anchor</p>
                </div>
            </div>
        </div>
      </section>

      <!-- 05. 2030 Stress Test -->
      <section id="stress" class="animate-reveal" style="animation-delay: 0.4s;">
        <div class="glass-card p-12 bg-emerald-950 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-5 pointer-events-none">
                <svg width="100%" height="100%"><pattern id="grid-stress" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-stress)" /></svg>
            </div>
            
            <h2 class="serif text-4xl mb-12 text-center italic">Strategic Durability: 2030 Outlook</h2>
            <div class="grid md:grid-cols-3 gap-8 relative z-10">
                <div class="p-8 bg-white/5 rounded-3xl border border-white/10">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Trend: Claim Fatigue</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"As noise increases, Q’WELL’s unit-level proof (SQR) becomes the only signal consumers still verify."</p>
                    <div class="mt-8 flex items-center gap-2 text-[10px] font-black text-emerald-400"><span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span> RESILIENT</div>
                </div>
                <div class="p-8 bg-white/5 rounded-3xl border border-white/10">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Trend: Reg. Tightening</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"Stricter BPOM enforcement benefits Q’WELL by clearing low-verification competitors from the segment."</p>
                    <div class="mt-8 flex items-center gap-2 text-[10px] font-black text-emerald-400"><span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span> ACCELERATED</div>
                </div>
                <div class="p-8 bg-white/5 rounded-3xl border border-white/10">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Trend: Spending Caution</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"Middle-upper segments trade down on luxury status but trade UP on safety reliability."</p>
                    <div class="mt-8 flex items-center gap-2 text-[10px] font-black text-emerald-400"><span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span> PROTECTED</div>
                </div>
            </div>
        </div>
      </section>

      <!-- Strategic Conclusion -->
      <footer id="final-summary" class="pt-20 border-t border-gray-200">
        <div class="text-center">
            <div class="w-20 h-20 bg-[#0D2B2A] rounded-2xl mx-auto flex items-center justify-center text-white font-bold text-3xl mb-10 shadow-2xl">Q</div>
            <h2 class="serif text-5xl sm:text-7xl text-emerald-950 mb-10 italic">Strategic Conclusion</h2>
            <p class="max-w-4xl mx-auto text-xl text-gray-500 leading-relaxed font-medium mb-20">
                "Q’WELL does not compete in the aesthetic 'glow' space. It occupies the <strong>Biological Security Premium Tier</strong>—A structurally verified, dermatology-aligned, calm stability system for the urban Indonesian consumer seeking predictability over experimentation."
            </p>
            <div class="h-px w-48 bg-[#D4AF37] mx-auto mb-10"></div>
            <p class="text-[11px] font-black uppercase tracking-[0.4em] text-[#0D2B2A] opacity-40">Dossier Locked • Q1 2026</p>
        </div>
      </footer>
    </main>
  </div>

  <script>
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({ top: target.offsetTop - 100, behavior: 'smooth' });
        }
      });
    });

    // Sidebar active state logic
    const navSections8 = ['locked', 'doctrine', 'pricing', 'rtb', 'stress'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections8.forEach(sectionId => {
        const sec = document.getElementById(sectionId);
        if (sec && window.pageYOffset >= sec.offsetTop - 150) {
          activeSection = sectionId;
        }
      });

      document.querySelectorAll('aside a').forEach(a => {
        a.classList.remove('sidebar-active');
        a.classList.add('text-gray-600');
        if (a.getAttribute('href') === `#${activeSection}`) {
          a.classList.add('sidebar-active');
          a.classList.remove('text-gray-600');
        }
      });
    });
  </script>
</body>