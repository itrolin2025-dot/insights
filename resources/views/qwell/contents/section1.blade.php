  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #D4AF37;        /* Gold/Bronze hint */
      --paper: #F8F9FA;         /* Gallery Grey */
      --ink: #111827;           /* Deep Grey */
      --muted: #6B7280;         /* Slate */
      --radius: 1.25rem;
      --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
      scroll-behavior: smooth;
    }

    .serif { font-family: 'Playfair Display', serif; }

    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(0, 0, 0, 0.05);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .sidebar-active {
      background: var(--primary);
      color: white;
      box-shadow: 0 4px 12px rgba(13, 43, 42, 0.2);
    }

    .bg-grid {
      background-size: 40px 40px;
      background-image: radial-gradient(circle, #00000008 1px, transparent 1px);
    }

    .risk-gradient {
      background: linear-gradient(135deg, #FFF1F2 0%, #FFFFFF 100%);
      border-left: 4px solid #EF4444;
    }

    .success-gradient {
      background: linear-gradient(135deg, #ECFDF5 0%, #FFFFFF 100%);
      border-left: 4px solid #10B981;
    }

    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-in { animation: fadeIn 0.6s ease-out forwards; }

    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
  </style>

  <!-- Navigation Rail -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-emerald-950 rounded-xl flex items-center justify-center text-white font-bold text-xl">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Research Intelligence</p>
          <p class="text-[10px] text-gray-500 uppercase tracking-tight font-medium">Doc Ref: SECTION-01-GOV-2026</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <div class="hidden md:flex gap-1 text-[11px] font-bold uppercase tracking-wider text-gray-400">
          <span class="px-2 py-1 bg-gray-100 rounded">Market: ID</span>
          <span class="px-2 py-1 bg-gray-100 rounded">Scope: Prem Hair/Body</span>
        </div>
        <button onclick="window.print()" class="px-4 py-2 bg-emerald-950 text-white text-xs font-bold rounded-full hover:bg-emerald-900 transition-all shadow-lg shadow-emerald-900/20">
          GENERATE PDF REPORT
        </button>
      </div>
    </div>
  </nav> -->

  <div class="w-full flex flex-col lg:flex-row gap-8 lg:gap-10 pt-8 pb-16">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Navigation Guide</h3>
          <ul class="space-y-1">
            <li><a href="#mission" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>01.</span> Mission Objective</a></li>
            <li><a href="#uncertainty" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Uncertainty Gaps</a></li>
            <li><a href="#governance" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>03.</span> Governance Logic</a></li>
            <li><a href="#gates" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Success Gates</a></li>
            <li><a href="#compliance" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Regulatory Guardrails</a></li>
          </ul>
        </div>

        <div class="p-6 bg-emerald-50 rounded-3xl border border-emerald-100">
          <p class="text-xs font-bold text-emerald-900 uppercase tracking-widest mb-2">System Status</p>
          <div class="flex items-center gap-2 mb-4">
            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
            <span class="text-[10px] font-bold text-emerald-700">GOVERNANCE ACTIVE</span>
          </div>
          <p class="text-[11px] text-emerald-800 leading-relaxed font-medium">This module removes assumption bias, protecting the 2030 premium price ceiling against "Claim Inflation."</p>
        </div>
      </div>
    </aside>

    <!-- Content -->
    <main class="flex-grow min-w-0 space-y-12">
      
      <!-- Hero -->
      <section id="mission" class="animate-in">
        <div class="relative p-1 bg-emerald-950 rounded-[2.5rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.4rem] p-10 sm:p-14 relative overflow-hidden">
            <div class="absolute top-0 right-0 p-12 opacity-5 pointer-events-none">
              <svg width="240" height="240" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50 0L61.2257 38.7743L100 50L61.2257 61.2257L50 100L38.7743 61.2257L0 50L38.7743 38.7743L50 0Z" />
              </svg>
            </div>
            
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">Phase 01: Core Intent</span>
            <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">Governance &<br/><span class="italic">Strategic Objective</span></h1>
            
            <div class="max-w-2xl">
              <p class="text-lg text-gray-600 leading-relaxed mb-8 font-medium">
                Q’WELL is not entering a "beauty" market; it is entering a <span class="text-emerald-900 underline decoration-emerald-200">Biological Security</span> market. 
                Section 1 defines why this research exists and the exact decision it must resolve to justify a premium price point in a climate of total claim fatigue.
              </p>
              
              <div class="grid sm:grid-cols-2 gap-8">
                <div class="space-y-2">
                  <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Decision Impact</h4>
                  <p class="text-sm font-semibold text-gray-900 leading-relaxed">Establish a positioning that remains commercially durable under a conservative 2030 Indonesia outlook.</p>
                </div>
                <div class="space-y-2">
                  <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Primary KPI</h4>
                  <p class="text-sm font-semibold text-gray-900 leading-relaxed">Remove "Assumption Bias" where internal assets (HRIPT) are disconnected from external market value perception.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Strategic Uncertainty Map -->
      <section id="uncertainty" class="animate-in" style="animation-delay: 0.1s;">
        <div class="glass-card p-10">
          <h2 class="serif text-3xl text-emerald-950 mb-8">Strategic Uncertainty Map</h2>
          
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="border-b border-gray-100 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                  <th class="pb-6 px-4">Fixed Assets (Proof)</th>
                  <th class="pb-6 px-4">The Uncertainty Gap</th>
                  <th class="pb-6 px-4">Revenue Risk (Non-Validated)</th>
                </tr>
              </thead>
              <tbody class="text-sm">
                <tr class="border-b border-gray-50 hover:bg-emerald-50/30 transition-colors">
                  <td class="py-8 px-4 align-top">
                    <div class="flex flex-col gap-2">
                      <span class="flex items-center gap-2 font-bold text-emerald-900"><div class="w-1 h-1 bg-emerald-500 rounded-full"></div> HRIPT Per SKU</span>
                      <span class="flex items-center gap-2 font-bold text-emerald-900"><div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Vegan/Natural Certs</span>
                    </div>
                  </td>
                  <td class="py-8 px-4 align-top">
                    <p class="text-gray-600 italic">"Will consumers interpret high-verification as <span class="text-emerald-900 font-bold">Insurance</span>, or just expensive branding?"</p>
                  </td>
                  <td class="py-8 px-4 align-top">
                    <div class="px-4 py-3 bg-red-50 text-red-700 font-bold rounded-2xl border border-red-100 flex items-center gap-3">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                      Collapses into generic "Clean" noise.
                    </div>
                  </td>
                </tr>
                <tr class="hover:bg-emerald-50/30 transition-colors">
                  <td class="py-8 px-4 align-top">
                    <div class="flex flex-col gap-2">
                      <span class="flex items-center gap-2 font-bold text-emerald-900"><div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Int. Lab Trust Assets</span>
                      <span class="flex items-center gap-2 font-bold text-emerald-900"><div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Premium Price Target</span>
                    </div>
                  </td>
                  <td class="py-8 px-4 align-top">
                    <p class="text-gray-600 italic">"Which specific territory is 'Open' vs. already occupied by medical-grade incumbents?"</p>
                  </td>
                  <td class="py-8 px-4 align-top">
                    <div class="px-4 py-3 bg-red-50 text-red-700 font-bold rounded-2xl border border-red-100 flex items-center gap-3">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                      Unjustified Luxury Perceptual Trap.
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- The Governing Question -->
      <section id="governance" class="animate-in" style="animation-delay: 0.2s;">
        <div class="grid md:grid-cols-5 gap-0 rounded-[2.5rem] overflow-hidden shadow-xl border border-emerald-900/10">
          <div class="md:col-span-2 bg-emerald-950 p-12 text-white flex flex-col justify-center">
            <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">Strategic Core</h3>
            <h2 class="serif text-4xl leading-tight">The Governing<br/>Question</h2>
            <div class="mt-10 h-1 w-12 bg-emerald-500"></div>
          </div>
          <div class="md:col-span-3 bg-white p-12 flex items-center">
            <p class="serif text-2xl sm:text-3xl text-emerald-950 leading-relaxed italic">
              "In Indonesia’s climate of total claim fatigue, what <span class="not-italic font-black text-emerald-800">Defensible Territory</span> can Q’WELL occupy to justify premium pricing as <span class="not-italic font-black text-emerald-800 underline decoration-emerald-200">Mandatory Reliability</span> instead of optional luxury?"
            </p>
          </div>
        </div>
      </section>

      <!-- Success Gates -->
      <section id="gates" class="animate-in" style="animation-delay: 0.3s;">
        <div class="glass-card p-10">
          <h2 class="serif text-3xl text-emerald-950 mb-8">Positioning Success Gates</h2>
          <p class="text-gray-500 text-sm mb-10">Any positioning derived from Sections 2–8 must pass these five "Stress Tests" to be considered decision-grade.</p>
          
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gate 1 -->
            <div class="p-8 border border-gray-100 rounded-[2rem] hover:shadow-lg transition-shadow bg-gray-50/50">
              <span class="text-xs font-bold text-emerald-600 mb-4 block">GATE A</span>
              <h4 class="font-bold text-emerald-950 mb-3 uppercase tracking-tight">Market Validation</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Must show a credible demand base willing to pay a "reliability premium" for sensitive-skin safety.</p>
            </div>
            <!-- Gate 2 -->
            <div class="p-8 border border-gray-100 rounded-[2rem] hover:shadow-lg transition-shadow bg-gray-50/50">
              <span class="text-xs font-bold text-emerald-600 mb-4 block">GATE B</span>
              <h4 class="font-bold text-emerald-950 mb-3 uppercase tracking-tight">Competitive Depth</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Must be meaningfully differentiated from local incumbents (Sensatia, etc.) via structural proof depth.</p>
            </div>
            <!-- Gate 3 -->
            <div class="p-8 border border-gray-100 rounded-[2rem] hover:shadow-lg transition-shadow bg-gray-50/50">
              <span class="text-xs font-bold text-emerald-600 mb-4 block">GATE C</span>
              <h4 class="font-bold text-emerald-950 mb-3 uppercase tracking-tight">Trust Logic</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Proof assets (HRIPT) must be converted into consumer language that reduces "Purchase Hesitation."</p>
            </div>
            <!-- Gate 4 -->
            <div class="p-8 border border-gray-100 rounded-[2rem] hover:shadow-lg transition-shadow bg-gray-50/50">
              <span class="text-xs font-bold text-emerald-600 mb-4 block">GATE D</span>
              <h4 class="font-bold text-emerald-950 mb-3 uppercase tracking-tight">2030 Durability</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Positioning must remain commercially rational even if macro conditions tighten or clean beauty discourse fragments.</p>
            </div>
            <!-- Gate 5 -->
            <div class="p-8 border border-gray-100 rounded-[2rem] hover:shadow-lg transition-shadow bg-gray-50/50">
              <span class="text-xs font-bold text-emerald-600 mb-4 block">GATE E</span>
              <h4 class="font-bold text-emerald-950 mb-3 uppercase tracking-tight">Compliance Integrity</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Claims must adhere to BPOM Reg 18/2024 standards, avoiding "Medicinal" terminology while projecting authority.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Regulatory Guardrails -->
      <section id="compliance" class="animate-in" style="animation-delay: 0.4s;">
        <div class="bg-emerald-950 rounded-[2.5rem] p-10 sm:p-14 text-white">
          <div class="flex flex-col md:flex-row gap-10">
            <div class="md:w-1/3">
              <h2 class="serif text-3xl mb-4">Mandatory Compliance Roadmap</h2>
              <p class="text-emerald-300 text-sm leading-relaxed">The regulatory landscape in Indonesia (2025–2026) is shifting toward proactive risk prevention.</p>
              
              <div class="mt-8 p-6 bg-white/5 rounded-3xl border border-white/10">
                <p class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest mb-2 italic">Legal Critical Note</p>
                <p class="text-[11px] text-emerald-100 font-medium">BPOM 18/2024 requires full Indonesian language instructions & visible 2D Barcodes on all SKUs.</p>
              </div>
            </div>
            <div class="md:w-2/3 grid sm:grid-cols-2 gap-4">
              <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                <div>
                  <h4 class="font-bold text-lg mb-2">BPOM 18/2024</h4>
                  <p class="text-xs text-emerald-200">Marking, Promotion, & Advertising update. Standardizes labels & language. Mandatory implementation by Nov 2025.</p>
                </div>
                <span class="text-[10px] font-bold bg-emerald-800 w-fit px-2 py-1 rounded mt-4">ENFORCEMENT NEAR</span>
              </div>
              <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                <div>
                  <h4 class="font-bold text-lg mb-2">Halal October 2026</h4>
                  <p class="text-xs text-emerald-200">Mandatory Halal certification for all cosmetics. A primary "Manufacturing Purity" signal for the Indonesian mass market.</p>
                </div>
                <span class="text-[10px] font-bold bg-emerald-800 w-fit px-2 py-1 rounded mt-4">STRATEGIC PREREQUISITE</span>
              </div>
              <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                <div>
                  <h4 class="font-bold text-lg mb-2">BPOM 16/2024</h4>
                  <p class="text-xs text-emerald-200">Strict numeric limits on Lead (≤20ppm) and Mercury (≤1ppm). Q'WELL benchmarks must stay 50% below these limits.</p>
                </div>
                <span class="text-[10px] font-bold bg-emerald-800 w-fit px-2 py-1 rounded mt-4">BARRIER DEFENSE</span>
              </div>
              <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                <div>
                  <h4 class="font-bold text-lg mb-2">Risk Assess 26/2025</h4>
                  <p class="text-xs text-emerald-200">Mandatory raw material risk assessment dossier (RAD). Shifts responsibility from BPOM testing to brand-side prevention.</p>
                </div>
                <span class="text-[10px] font-bold bg-emerald-800 w-fit px-2 py-1 rounded mt-4">PRE-MARKET VETTING</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Sources -->
      <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Evidence Hierarchy & Sources</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. BPOM Regulation No. 18/2024</div>
          <div class="hover:text-emerald-700 transition-colors">02. Halal Law No. 33/2014 (BPJPH)</div>
          <div class="hover:text-emerald-700 transition-colors">03. e-Conomy SEA 2024 Report</div>
          <div class="hover:text-emerald-700 transition-colors">04. Mintel Indonesia Beauty 2025</div>
          <div class="hover:text-emerald-700 transition-colors">05. Q'WELL Int. Lab HRIPT Dossiers</div>
          <div class="hover:text-emerald-700 transition-colors">06. Bain & Co Digital Trust Framework</div>
          <div class="hover:text-emerald-700 transition-colors">07. BPOM Contaminant Reg 16/2024</div>
          <div class="hover:text-emerald-700 transition-colors">08. Indonesia Skin-Tok Skepticism Audit</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • INTERNAL USE ONLY</p>
        </div>
      </footer>
    </main>
  </div>

  <script>
    // Simple smooth scrolling for navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
          window.scrollTo({
            top: target.offsetTop - 100,
            behavior: 'smooth'
          });
        }
      });
    });

    // Observer for active sidebar link
    const sections = ['mission', 'uncertainty', 'governance', 'gates', 'compliance'];
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = document.getElementById(section).offsetTop;
        if (pageYOffset >= sectionTop - 150) {
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