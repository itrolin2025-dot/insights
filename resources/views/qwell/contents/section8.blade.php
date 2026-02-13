
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

    /* Positioning Quadrant */
    .quadrant-line { background: rgba(13, 43, 42, 0.1); }
    .gold-glow { box-shadow: 0 0 30px rgba(212, 175, 55, 0.3); }

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

    .doctrine-pill {
      border-left: 4px solid var(--accent);
      transition: all 0.3s ease;
    }
    .doctrine-pill:hover {
      background: white;
      transform: translateX(5px);
    }
  </style>
<body class="bg-grid">

  <!-- Navigation Rail -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-[#0D2B2A]">Final Strategic Synthesis</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-08-POSITIONING</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-amber-50 text-amber-800 rounded-full border border-amber-100 uppercase">POSITIONING LOCKED</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all text-xs shadow-lg">
          FINALIZE REPORT
        </button>
      </div>
    </div>
  </nav>

  <div class="max-w-screen-2xl mx-auto pt-24 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Strategic Navigation</h3>
          <ul class="space-y-1">
            <li><a href="#locked" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Locked Territory</a></li>
            <li><a href="#doctrine" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Strategic Doctrine</a></li>
            <li><a href="#rtb" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Proof Stack</a></li>
            <li><a href="#logic" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Pricing Logic</a></li>
            <li><a href="#stress" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> 2030 Stress Test</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white overflow-hidden relative">
          <div class="absolute -bottom-6 -right-6 opacity-10">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="white"><path d="M50 0L61 39L100 50L61 61L50 100L39 61L0 50L39 39L50 0Z"/></svg>
          </div>
          <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-3">Positioning Essence</p>
          <p class="text-[11px] leading-relaxed italic opacity-90">"Predictability over experimentation. Stability over viral trends. Trust as the ultimate luxury."</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-20">
      
      <!-- Locked Territory Hero -->
      <section id="locked" class="animate-reveal">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3.5rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[3.4rem] p-10 sm:p-20 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-10 border border-emerald-100">Final Brand Thesis</span>
            
            <div class="max-w-4xl">
              <h1 class="serif text-5xl sm:text-7xl text-emerald-950 leading-tight mb-10">The Biological<br/><span class="italic text-[#D4AF37]">Security</span> Premium</h1>
              <p class="text-xl text-gray-500 leading-relaxed font-medium mb-16">
                Q’WELL is not a beauty brand; it is a <strong>Biological Security System</strong>. We provide a structurally verified, dermatology-aligned sanctuary for high-worth Indonesian consumers who prioritize <strong>Predictable Stability</strong> over high-risk aesthetic experimentation.
              </p>
            </div>

            <!-- Positioning Quadrant Visualization -->
            <div class="bg-gray-50 rounded-[3rem] p-12 sm:p-16 border border-gray-100 relative">
                <h4 class="text-[11px] font-black text-gray-400 uppercase tracking-[0.2em] mb-12 text-center">Competitive Positioning Matrix</h4>
                
                <div class="relative w-full aspect-video sm:aspect-[2/1] max-w-4xl mx-auto">
                    <!-- Axes -->
                    <div class="absolute inset-0 flex items-center"><div class="w-full h-[1px] quadrant-line"></div></div>
                    <div class="absolute inset-0 flex justify-center"><div class="h-full w-[1px] quadrant-line"></div></div>
                    
                    <!-- Labels -->
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400 uppercase">Aspirational Glow / Trend Seekers</span>
                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400 uppercase">Biological Security / Risk Averse</span>
                    <span class="absolute left-[-20px] top-1/2 -translate-y-1/2 -rotate-90 text-[10px] font-bold text-gray-400 uppercase">Surface Claims</span>
                    <span class="absolute right-[-20px] top-1/2 -translate-y-1/2 rotate-90 text-[10px] font-bold text-gray-400 uppercase">Structural Proof</span>

                    <!-- Q'WELL Node -->
                    <div class="absolute bottom-[15%] right-[10%] group">
                        <div class="w-24 h-24 bg-[#0D2B2A] rounded-full border-8 border-[#D4AF37] flex items-center justify-center text-white font-black text-2xl gold-glow animate-pulse">Q</div>
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-[#0D2B2A] text-[#D4AF37] px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap shadow-xl">
                            THE GOLD ZONE
                        </div>
                    </div>

                    <!-- Competitor Cluster -->
                    <div class="absolute top-[20%] left-[20%] flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-200 rounded-full border border-gray-300 opacity-40"></div>
                        <span class="text-[9px] text-gray-400 font-bold uppercase mt-2">Mass Market</span>
                    </div>
                    <div class="absolute bottom-[30%] left-[40%] flex flex-col items-center">
                        <div class="w-12 h-12 bg-gray-200 rounded-full border border-gray-300 opacity-60"></div>
                        <span class="text-[9px] text-gray-400 font-bold uppercase mt-2">Local Premium</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Strategic Doctrine -->
      <section id="doctrine" class="animate-reveal" style="animation-delay: 0.1s;">
        <div class="grid lg:grid-cols-2 gap-12">
            <div>
                <h2 class="serif text-4xl text-emerald-950 mb-8">The Brand Doctrine</h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-10">Four non-negotiable pillars that govern all future product, communication, and channel decisions.</p>
                
                <div class="space-y-6">
                    <div class="doctrine-pill p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">01. Predictable Reliability</h4>
                        <p class="text-xs text-gray-500 leading-relaxed italic">The brand refuses to chase "Viral Glow." Our goal is to ensure the consumer's skin is exactly the same—stable and healthy—every morning.</p>
                    </div>
                    <div class="doctrine-pill p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">02. Structural Stability</h4>
                        <p class="text-xs text-gray-500 leading-relaxed italic">We focus on barrier health and biological maintenance as a daily healthcare routine, not an aesthetic transformation.</p>
                    </div>
                    <div class="doctrine-pill p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">03. Calm Discipline</h4>
                        <p class="text-xs text-gray-500 leading-relaxed italic">Communication is clinical, calm, and non-aggressive. We neutralize "Claim Fatigue" through discipline, not louder promises.</p>
                    </div>
                    <div class="doctrine-pill p-6 bg-white/50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2">04. Transparent Integrity</h4>
                        <p class="text-xs text-gray-500 leading-relaxed italic">We preempt skepticism by publishing laboratory COAs and HRIPT data proactively. Transparency is our marketing strategy.</p>
                    </div>
                </div>
            </div>

            <div class="bg-emerald-950 rounded-[3rem] p-12 text-white flex flex-col justify-center">
                <h4 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-6">Strategic Exclusions</h4>
                <p class="text-sm font-bold text-emerald-100 mb-8">To maintain the premium ceiling, Q’WELL explicitly refuses to be:</p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4 text-xs font-medium text-emerald-200/70">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="text-red-400"><path d="M18 6L6 18M6 6l12 12"></path></svg>
                        A Price-First Option
                    </li>
                    <li class="flex items-center gap-4 text-xs font-medium text-emerald-200/70">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="text-red-400"><path d="M18 6L6 18M6 6l12 12"></path></svg>
                        A Viral Trend-Chaser
                    </li>
                    <li class="flex items-center gap-4 text-xs font-medium text-emerald-200/70">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="text-red-400"><path d="M18 6L6 18M6 6l12 12"></path></svg>
                        An Aggressive "Active" Brand
                    </li>
                    <li class="flex items-center gap-4 text-xs font-medium text-emerald-200/70">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="text-red-400"><path d="M18 6L6 18M6 6l12 12"></path></svg>
                        A Cheap "Natural" Alternative
                    </li>
                </ul>
                <div class="mt-12 p-6 bg-white/5 rounded-3xl border border-white/10">
                    <p class="text-[11px] italic text-emerald-100 font-medium">Positioning Guardrail: "If a marketing campaign focuses on 'Instant Transformation,' it violates the Q'WELL doctrine."</p>
                </div>
            </div>
        </div>
      </section>

      <!-- Proof Stack Summary -->
      <section id="rtb" class="animate-reveal" style="animation-delay: 0.2s;">
        <div class="glass-card p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-12 text-center">Reasons-To-Believe (RTB) Stack</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                <div class="p-6 bg-gray-50 rounded-3xl text-center border border-gray-100 hover:border-[#D4AF37] transition-all">
                    <p class="text-xs font-black text-emerald-900 mb-2">BPOM</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400">Mandatory Base</p>
                </div>
                <div class="p-6 bg-[#0D2B2A] rounded-3xl text-center border border-[#D4AF37] shadow-xl">
                    <p class="text-xs font-black text-[#D4AF37] mb-2">HRIPT</p>
                    <p class="text-[9px] uppercase font-bold text-emerald-300">Gold Standard</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-3xl text-center border border-gray-100">
                    <p class="text-xs font-black text-emerald-900 mb-2">VEGAN</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400">Purity Signal</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-3xl text-center border border-gray-100">
                    <p class="text-xs font-black text-emerald-900 mb-2">HALAL</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400">Ethical Anchor</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-3xl text-center border border-gray-100">
                    <p class="text-xs font-black text-emerald-900 mb-2">DERM-LED</p>
                    <p class="text-[9px] uppercase font-bold text-gray-400">Expert Proof</p>
                </div>
            </div>
        </div>
      </section>

      <!-- Pricing Logic -->
      <section id="logic" class="animate-reveal" style="animation-delay: 0.3s;">
        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-xl p-12 sm:p-16 flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Premium Value Logic</h3>
                <h2 class="serif text-4xl text-emerald-950 mb-6 italic">Trust Insurance vs. Luxury Signaling</h2>
                <p class="text-sm text-gray-500 leading-relaxed mb-10">
                    Q’WELL’s premium price (Rp 400k–800k) is not a vanity markup. It is a <strong>Safety Premium</strong>. The consumer pays for the testing complexity, international verification, and the absence of breakout trauma.
                </p>
                <div class="p-6 bg-emerald-50 rounded-[2rem] border border-emerald-100">
                    <p class="text-xs font-bold text-emerald-900 uppercase mb-2">Economic Moat</p>
                    <p class="text-[11px] text-emerald-800">"The cost of a bad reaction is higher than the price of a Q'WELL SKU. We sell the avoidance of biological debt."</p>
                </div>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-4">
                <div class="aspect-square bg-[#0D2B2A] rounded-[2.5rem] p-8 flex flex-col justify-end">
                    <p class="text-3xl font-black text-white mb-1">0%</p>
                    <p class="text-[10px] uppercase font-bold text-emerald-300 tracking-widest">Compromise</p>
                </div>
                <div class="aspect-square bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-lg flex flex-col justify-end">
                    <p class="text-3xl font-black text-emerald-950 mb-1">100%</p>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Verification</p>
                </div>
                <div class="aspect-square bg-gray-50 rounded-[2.5rem] p-8 border border-gray-100 flex flex-col justify-end">
                    <p class="text-3xl font-black text-emerald-950 mb-1">1:1</p>
                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Price to Trust</p>
                </div>
                <div class="aspect-square bg-[#D4AF37] rounded-[2.5rem] p-8 flex flex-col justify-end">
                    <p class="text-3xl font-black text-[#0D2B2A] mb-1">2030</p>
                    <p class="text-[10px] uppercase font-bold text-[#0D2B2A]/60 tracking-widest">Durable</p>
                </div>
            </div>
        </div>
      </section>

      <!-- 2030 Stress Test -->
      <section id="stress" class="animate-reveal" style="animation-delay: 0.4s;">
        <div class="glass-card p-12 text-center">
            <h2 class="serif text-4xl text-emerald-950 mb-12">2030 Strategic Durability Test</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100 text-left">
                    <h5 class="text-[10px] font-black text-emerald-900 uppercase mb-4 tracking-widest">Trend 01: Claim Fatigue</h5>
                    <p class="text-xs text-gray-500 leading-relaxed italic">"As clean-beauty noise increases, Q'WELL’s HRIPT-first stance becomes the only credible signal left in the premium segment."</p>
                    <div class="mt-6 flex items-center gap-2 text-[10px] font-black text-emerald-600 uppercase">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span> RESILIENT
                    </div>
                </div>
                <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100 text-left">
                    <h5 class="text-[10px] font-black text-emerald-900 uppercase mb-4 tracking-widest">Trend 02: Reg. Tightening</h5>
                    <p class="text-xs text-gray-500 leading-relaxed italic">"Stricter BPOM enforcement of heavy metal and contaminant limits (2025/26) actually benefits Q'WELL by clearing unverified competitors."</p>
                    <div class="mt-6 flex items-center gap-2 text-[10px] font-black text-emerald-600 uppercase">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span> ACCELERATED
                    </div>
                </div>
                <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100 text-left">
                    <h5 class="text-[10px] font-black text-emerald-900 uppercase mb-4 tracking-widest">Trend 03: Spending Caution</h5>
                    <p class="text-xs text-gray-500 leading-relaxed italic">"Middle-upper consumers trade down on luxury signaling but trade UP on biological reliability to avoid medical debt."</p>
                    <div class="mt-6 flex items-center gap-2 text-[10px] font-black text-emerald-600 uppercase">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span> PROTECTED
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Final Strategic Conclusion -->
      <div class="bg-[#0D2B2A] rounded-[3.5rem] p-16 sm:p-24 text-center text-white relative overflow-hidden">
          <div class="absolute inset-0 opacity-10">
              <svg width="100%" height="100%"><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid)" /></svg>
          </div>
          <div class="relative z-10">
              <h2 class="serif text-4xl sm:text-6xl mb-10 italic">Strategic Conclusion</h2>
              <p class="max-w-3xl mx-auto text-lg sm:text-xl text-emerald-100 leading-relaxed mb-12">
                  "Q’WELL does not compete in the luxury or glow space. It occupies the <strong>Biological Security Premium Tier</strong> — A structurally verified, dermatology-aligned, calm stability system that provides predictability over experimentation."
              </p>
              <div class="h-[1px] w-24 bg-[#D4AF37] mx-auto mb-10"></div>
              <p class="text-[10px] font-black uppercase tracking-[0.4em] text-emerald-300">POSITIONING VALIDATED THROUGH 2030</p>
          </div>
      </div>

      <!-- Footer Refs -->
      <footer id="sources" class="pt-10 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest gap-4 text-center md:text-left">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <div class="flex gap-6">
              <span>CONFIDENTIAL</span>
              <span>MARKET: INDONESIA</span>
              <span>STATUS: DECISION-GRADE</span>
          </div>
        </div>
      </footer>
    </main>
  </div>

  <script>
    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 100,
            behavior: 'smooth'
          });
        }
      });
    });

    // Sidebar active state logic
    const navSections = ['locked', 'doctrine', 'rtb', 'logic', 'stress'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections.forEach(sectionId => {
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