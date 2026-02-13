
  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #D4AF37;        /* Gold/Bronze */
      --paper: #F8F9FA;         /* Gallery Grey */
      --ink: #111827;           /* Deep Grey */
      --muted: #6B7280;         /* Slate */
      --radius: 1.5rem;
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
      scroll-behavior: smooth;
    }

    .serif { font-family: 'Playfair Display', serif; }

    .glass-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(0, 0, 0, 0.04);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
    }

    .glass-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 30px 40px -10px rgba(0, 0, 0, 0.08);
    }

    .sidebar-active {
      background: var(--primary);
      color: white;
      box-shadow: 0 8px 16px rgba(13, 43, 42, 0.15);
    }

    .bg-grid {
      background-size: 60px 60px;
      background-image: radial-gradient(circle, #0000000a 1px, transparent 1px);
    }

    .jtbd-bar {
      transition: width 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Persona Hover States */
    .persona-card:hover .persona-img {
      transform: scale(1.05);
    }

    /* Animation */
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-up { animation: slideUp 0.8s ease-out forwards; }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
  </style>
  
<body class="bg-grid">

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-emerald-900/20">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Strategy Unit</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-04-ICP-2026</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-100">TARGETING ACTIVE</span>
        <button onclick="window.print()" class="px-5 py-2 bg-emerald-950 text-white rounded-full hover:bg-emerald-900 transition-all shadow-md">
          EXPORT ICP CARDS
        </button>
      </div>
    </div>
  </nav>

  <div class="max-w-screen-2xl mx-auto pt-24 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Targeting Guide</h3>
          <ul class="space-y-1">
            <li><a href="#summary" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> JTBD Hierarchy</a></li>
            <li><a href="#data" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Market Dynamics</a></li>
            <li><a href="#primary-icp" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Primary Persona</a></li>
            <li><a href="#secondary-icp" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Secondary Persona</a></li>
            <li><a href="#wtp" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Willingness to Pay</a></li>
          </ul>
        </div>

        <div class="p-6 bg-amber-50 rounded-3xl border border-amber-100">
          <p class="text-[10px] font-bold text-amber-900 uppercase tracking-widest mb-2 italic">Strategic Filter</p>
          <p class="text-[11px] text-amber-800 leading-relaxed font-medium">Q'WELL target segments are defined by <strong>literacy</strong> and <strong>risk-aversion</strong>, not just income level. We target those who view skincare as <strong>Insurance</strong>.</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-16">
      
      <!-- Hero Section -->
      <section id="summary" class="animate-up">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-8">Phase 04: ICP Determination</span>
            <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">The Hierarchy of<br/><span class="italic">Defensive Needs</span></h1>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
              <div>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-8">
                  Consumers "hire" Q'WELL to solve the problem of <strong>Biological Instability</strong>. We are moving from the 2018 era of "Aspirations" to the 2030 era of "Security."
                </p>
                <div class="space-y-6">
                  <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-900 font-bold border border-emerald-100">1</div>
                    <p class="text-sm font-bold text-emerald-950 uppercase tracking-tight">Non-Irritation (Security)</p>
                  </div>
                  <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-900 font-bold border border-emerald-100">2</div>
                    <p class="text-sm font-bold text-emerald-950 uppercase tracking-tight">Predictable Outcome (Trust)</p>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">JTBD Weighting (Current Market)</h4>
                <div class="space-y-4">
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase"><span>Biological Security</span><span>92%</span></div>
                    <div class="w-full bg-gray-200 h-2 rounded-full"><div class="jtbd-bar bg-emerald-900 h-full rounded-full" style="width: 92%"></div></div>
                  </div>
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase"><span>Verification Depth</span><span>84%</span></div>
                    <div class="w-full bg-gray-200 h-2 rounded-full"><div class="jtbd-bar bg-emerald-700 h-full rounded-full" style="width: 84%"></div></div>
                  </div>
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase"><span>Ethical Alignment</span><span>61%</span></div>
                    <div class="w-full bg-gray-200 h-2 rounded-full"><div class="jtbd-bar bg-emerald-500 h-full rounded-full" style="width: 61%"></div></div>
                  </div>
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase"><span>Aesthetic Glow</span><span>22%</span></div>
                    <div class="w-full bg-gray-200 h-2 rounded-full"><div class="jtbd-bar bg-gray-300 h-full rounded-full" style="width: 22%"></div></div>
                  </div>
                </div>
                <p class="text-[9px] text-gray-400 mt-6 italic">*Source: Q'WELL 2026 Internal Synthesis of Market Verification Trends.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Primary Persona Card -->
      <section id="primary-icp" class="animate-up" style="animation-delay: 0.2s;">
        <div class="flex items-center gap-3 mb-8">
            <h2 class="serif text-4xl text-emerald-950">Primary ICP</h2>
            <div class="h-[1px] flex-grow bg-emerald-950/10"></div>
            <span class="text-[10px] font-black bg-emerald-950 text-white px-3 py-1 rounded">MOST VALUABLE</span>
        </div>

        <div class="glass-card overflow-hidden persona-card">
          <div class="grid md:grid-cols-5">
            <div class="md:col-span-2 bg-[#0D2B2A] p-10 flex flex-col justify-between relative overflow-hidden">
                <!-- Decorative Graphic -->
                <div class="absolute -bottom-10 -right-10 opacity-10">
                    <svg width="200" height="200" viewBox="0 0 100 100" fill="white"><path d="M50 0L61 39L100 50L61 61L50 100L39 61L0 50L39 39L50 0Z"/></svg>
                </div>

                <div>
                    <h3 class="serif text-3xl text-white mb-2">The Traumatized Pragmatist</h3>
                    <p class="text-emerald-300 text-xs font-bold uppercase tracking-widest mb-8">Segment: High-Worth Security Seekers</p>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between border-b border-white/10 pb-2">
                            <span class="text-[10px] text-white/50 uppercase">Age</span>
                            <span class="text-xs font-bold text-white">28 — 42</span>
                        </div>
                        <div class="flex justify-between border-b border-white/10 pb-2">
                            <span class="text-[10px] text-white/50 uppercase">Income</span>
                            <span class="text-xs font-bold text-white">Middle-Up / Upper</span>
                        </div>
                        <div class="flex justify-between border-b border-white/10 pb-2">
                            <span class="text-[10px] text-white/50 uppercase">Location</span>
                            <span class="text-xs font-bold text-white">Tier 1 Urban (JKT/SBY)</span>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <p class="text-[11px] text-emerald-100 font-medium italic leading-relaxed">
                        "I’ve spent too much on products that promised a glow but gave me a rash. I don’t want a miracle; I want a guarantee that I won’t wake up with a reaction tomorrow."
                    </p>
                </div>
            </div>

            <div class="md:col-span-3 p-10 bg-white grid sm:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">Core Motivation</h4>
                    <p class="text-xs text-gray-500 leading-relaxed"><strong>Regret Avoidance.</strong> This user views skincare as an investment in health stability. They are likely recovering from an "Active Burn" (Retinol/AHA overuse).</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">The "Job" to Hire</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Provide <strong>Predictable Reliability</strong>. Eliminate the anxiety of the morning mirror check. Protect the barrier from Jakarta’s PM2.5.</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">Rejection Triggers</h4>
                    <ul class="text-[10px] text-gray-500 space-y-2">
                        <li>• "Hype-only" marketing.</li>
                        <li>• Missing BPOM NIE codes.</li>
                        <li>• Unexplained "Natural" claims.</li>
                    </ul>
                </div>
                <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100">
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-2">Proof Threshold</h4>
                    <p class="text-[11px] font-bold text-emerald-800">Requires HRIPT per SKU + International Lab Credentials to unlock $40+ pricing.</p>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Secondary Persona Card -->
      <section id="secondary-icp" class="animate-up" style="animation-delay: 0.3s;">
        <div class="flex items-center gap-3 mb-8">
            <h2 class="serif text-4xl text-emerald-950">Secondary ICP</h2>
            <div class="h-[1px] flex-grow bg-emerald-950/10"></div>
            <span class="text-[10px] font-black bg-emerald-100 text-emerald-900 px-3 py-1 rounded">GROWTH ENGINE</span>
        </div>

        <div class="glass-card overflow-hidden persona-card">
          <div class="grid md:grid-cols-5">
            <div class="md:col-span-2 bg-emerald-100 p-10 flex flex-col justify-between relative overflow-hidden border-r border-black/5">
                <div>
                    <h3 class="serif text-3xl text-emerald-950 mb-2">The Investigative Gen-Z</h3>
                    <p class="text-emerald-800 text-xs font-bold uppercase tracking-widest mb-8">Segment: Science-First Disrupters</p>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between border-b border-emerald-900/10 pb-2">
                            <span class="text-[10px] text-emerald-950/50 uppercase font-bold">Age</span>
                            <span class="text-xs font-bold text-emerald-950">18 — 26</span>
                        </div>
                        <div class="flex justify-between border-b border-emerald-900/10 pb-2">
                            <span class="text-[10px] text-emerald-950/50 uppercase font-bold">Income</span>
                            <span class="text-xs font-bold text-emerald-950">Aspirant / Middle</span>
                        </div>
                        <div class="flex justify-between border-b border-emerald-900/10 pb-2">
                            <span class="text-[10px] text-emerald-950/50 uppercase font-bold">Behavior</span>
                            <span class="text-xs font-bold text-emerald-950">"Skintellectual"</span>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <p class="text-[11px] text-emerald-900 font-medium italic leading-relaxed">
                        "I watch De-influencers. I check the COA (Certificate of Analysis). If you can't prove your percentage, you're irrelevant to my routine."
                    </p>
                </div>
            </div>

            <div class="md:col-span-3 p-10 bg-white grid sm:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">Core Motivation</h4>
                    <p class="text-xs text-gray-500 leading-relaxed"><strong>Veracity Alignment.</strong> They value transparency as a form of respect. They want to be smarter than the marketing department.</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">The "Job" to Hire</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Provide <strong>Transparency Tools</strong>. Validate their identity as an "expert consumer" who doesn't fall for surface-level claims.</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-4">Communication Mode</h4>
                    <ul class="text-[10px] text-gray-500 space-y-2">
                        <li>• TikTok "Science-Tok" deep dives.</li>
                        <li>• Batch-specific QR codes.</li>
                        <li>• Ingredient pH & Lab Origin.</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Price Logic</h4>
                    <p class="text-[11px] font-bold text-gray-700 uppercase">Willing to trade volume for "Batch Integrity."</p>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- WTP and Risk Dynamics -->
      <section id="wtp" class="animate-up" style="animation-delay: 0.4s;">
        <div class="glass-card p-12">
            <h2 class="serif text-3xl text-emerald-950 mb-10 text-center">Willingness-to-Pay vs. Risk Dynamics</h2>
            
            <div class="grid md:grid-cols-3 gap-10">
                <div class="text-center space-y-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-50 text-emerald-900 border border-emerald-100 mb-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h4 class="font-bold text-emerald-950 uppercase text-xs tracking-widest">Insurance Logic</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">The premium is paid not for "luxury status," but as a <strong>safety premium</strong> to avoid dermatologist costs.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-50 text-emerald-900 border border-emerald-100 mb-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <h4 class="font-bold text-emerald-950 uppercase text-xs tracking-widest">Verification Depth</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">WTP increases linearly with the <strong>transparency of lab data</strong>. HRIPT per SKU is the key price-unlocker.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-50 text-emerald-900 border border-emerald-100 mb-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h4 class="font-bold text-emerald-950 uppercase text-xs tracking-widest">Loyalty Shield</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">Once a consumer finds a product that doesn't trigger a reaction, their <strong>switching cost</strong> becomes emotional and high.</p>
                </div>
            </div>
        </div>
      </section>

      <!-- Footer Refs -->
      <footer class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Section 4 Reference Hierarchy</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. JTBD Framework: Clayton Christensen Institute</div>
          <div class="hover:text-emerald-700 transition-colors">02. Bain & Co: Elements of Value (Personal Care)</div>
          <div class="hover:text-emerald-700 transition-colors">03. NielsenIQ Indonesia Consumer Outlook 2026</div>
          <div class="hover:text-emerald-700 transition-colors">04. McKinsey Health: The 2030 Wellness Consumer</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • TARGETING PROTOCOL</p>
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

    // Sidebar active state on scroll
    const sections = ['summary', 'primary-icp', 'secondary-icp', 'wtp'];
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sec = document.getElementById(section);
        if (sec && pageYOffset >= sec.offsetTop - 150) {
          current = section;
        }
      });

      document.querySelectorAll('aside a').forEach(a => {
        a.classList.remove('sidebar-active');
        a.classList.add('text-gray-600');
        if (a.getAttribute('href') === `#${current}`) {
          a.classList.add('sidebar-active');
          a.classList.remove('text-gray-600');
        }
      });
    });
  </script>
</body>