
  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #6D28D9;       /* Psychological Violet - represents tension */
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

    .tension-gradient {
      background: linear-gradient(135deg, #F5F3FF 0%, #FFFFFF 100%);
      border-left: 4px solid var(--accent);
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
<body class="bg-grid">

  <!-- Navigation Rail -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-emerald-950 rounded-xl flex items-center justify-center text-white font-bold text-xl">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Research Intelligence</p>
          <p class="text-[10px] text-gray-500 uppercase tracking-tight font-medium">Doc Ref: SECTION-03-PSYCH-2030</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <div class="hidden md:flex gap-1 text-[11px] font-bold uppercase tracking-wider text-gray-400">
          <span class="px-2 py-1 bg-gray-100 rounded">Analysis: Psychological</span>
          <span class="px-2 py-1 bg-gray-100 rounded">Market: Indonesia</span>
        </div>
        <button onclick="window.print()" class="px-4 py-2 bg-emerald-950 text-white text-xs font-bold rounded-full hover:bg-emerald-900 transition-all shadow-lg shadow-emerald-900/20">
          GENERATE PSYCH-REPORT
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-10">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Psychological Nav</h3>
          <ul class="space-y-1">
            <li><a href="#landscape" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Psych Landscape</a></li>
            <li><a href="#veracity" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> The Veracity Crisis</a></li>
            <li><a href="#barrier" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> The Risk Barrier</a></li>
            <li><a href="#trauma" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Breakout Trauma</a></li>
            <li><a href="#arbiters" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Digital Arbiters</a></li>
          </ul>
        </div>

        <div class="p-6 bg-violet-50 rounded-3xl border border-violet-100">
          <p class="text-xs font-bold text-violet-900 uppercase tracking-widest mb-2">Market Tension</p>
          <div class="flex items-center gap-2 mb-4">
            <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
            <span class="text-[10px] font-bold text-violet-700">HIGH SKEPTICISM</span>
          </div>
          <p class="text-[11px] text-violet-800 leading-relaxed font-medium">Trust has become a non-renewable resource. Consumers now hire products to <strong>avoid harm</strong> before they hire them to <strong>create beauty</strong>.</p>
        </div>
      </div>
    </aside>

    <!-- Content -->
    <main class="flex-grow space-y-12">
      
      <!-- Hero -->
      <section id="landscape" class="animate-in">
        <div class="relative p-1 bg-emerald-950 rounded-[2.5rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.4rem] p-10 sm:p-14 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-violet-100 text-violet-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">Phase 03: Consumer Psychopathology</span>
            <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">From Glow to<br/><span class="italic">Biological Security</span></h1>
            
            <div class="max-w-2xl">
              <p class="text-lg text-gray-600 leading-relaxed mb-10 font-medium">
                The Indonesian personal care landscape is undergoing a structural realignment. Purchasing decisions are no longer aspirational; they are <strong>defensive</strong>. Safety is the new luxury.
              </p>
              
              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-gray-100 text-[10px] font-bold rounded-full text-gray-600 border border-gray-200">RISK-AVERSE</span>
                <span class="px-4 py-2 bg-gray-100 text-[10px] font-bold rounded-full text-gray-600 border border-gray-200">TRUTH-SEEKING</span>
                <span class="px-4 py-2 bg-gray-100 text-[10px] font-bold rounded-full text-gray-600 border border-gray-200">TRAUMA-DRIVEN</span>
                <span class="px-4 py-2 bg-gray-100 text-[10px] font-bold rounded-full text-gray-600 border border-gray-200">SKEPTICAL</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- The Veracity Crisis -->
      <section id="veracity" class="animate-in" style="animation-delay: 0.1s;">
        <div class="glass-card p-10">
          <div class="flex flex-col md:flex-row gap-12">
            <div class="md:w-2/5">
              <h2 class="serif text-3xl text-emerald-950 mb-6">The Veracity Crisis</h2>
              <p class="text-sm text-gray-500 leading-relaxed mb-6">
                A systemic erosion of trust driven by "Claim Inflation" and the historical prevalence of hazardous substances (Blue Label/Mercury scares).
              </p>
              <div class="p-6 bg-red-50 rounded-2xl border border-red-100">
                <p class="text-xs font-bold text-red-900 uppercase mb-2">Impact: De-Influencing</p>
                <p class="text-[11px] text-red-800 italic leading-relaxed">
                  "Viral overclaims (e.g., 10% Niacinamide claims that test as 0.8%) have created a 'Claim Fatigue' wall where consumers ignore label copy until laboratory proof is produced."
                </p>
              </div>
            </div>
            <div class="md:w-3/5 grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="tension-gradient p-6 rounded-3xl">
                <h4 class="font-bold text-violet-950 mb-2">Claim Fatigue</h4>
                <p class="text-[11px] text-gray-600">The psychological state where every new "innovation" is viewed as a potential marketing trap.</p>
              </div>
              <div class="tension-gradient p-6 rounded-3xl">
                <h4 class="font-bold text-violet-950 mb-2">Investigative Impulse</h4>
                <p class="text-[11px] text-gray-600">Consumers now check BPOM NIE codes and lab reports before clicking "Add to Cart."</p>
              </div>
              <div class="tension-gradient p-6 rounded-3xl">
                <h4 class="font-bold text-violet-950 mb-2">Active Skepticism</h4>
                <p class="text-[11px] text-gray-600">High percentages of active ingredients are no longer seen as benefits, but as irritant risks.</p>
              </div>
              <div class="tension-gradient p-6 rounded-3xl">
                <h4 class="font-bold text-violet-950 mb-2">Safety-First Logic</h4>
                <p class="text-[11px] text-gray-600">Selection criteria shift from "What makes me glow?" to "What won't cause a breakout?"</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- The Risk Barrier -->
      <section id="barrier" class="animate-in" style="animation-delay: 0.2s;">
        <div class="bg-emerald-950 rounded-[2.5rem] p-10 sm:p-14 text-white overflow-hidden relative">
          <div class="absolute bottom-0 right-0 p-12 opacity-10">
            <svg width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          
          <div class="max-w-3xl relative z-10">
            <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">The Cognitive Threshold</h3>
            <h2 class="serif text-4xl leading-tight mb-8">Mapping the<br/>"Risk Barrier"</h2>
            <p class="text-emerald-100/70 text-base leading-relaxed mb-12 italic">
              "In the Indonesian mind, the perceived probability of harm now outweighs the promised benefits of a product. This 'Risk Barrier' can only be lowered by structural verification (HRIPT/BPOM) — not by storytelling."
            </p>
            
            <div class="grid md:grid-cols-2 gap-10">
              <div class="space-y-6">
                <h4 class="text-xs font-bold text-emerald-400 uppercase tracking-widest border-b border-white/10 pb-2">The Biological Debt</h4>
                <p class="text-sm text-emerald-100/80">
                  Consumers view a bad reaction as "Biological Debt" — costing them weeks of skin recovery and expensive dermatologist visits. Q'WELL is "Debt Prevention."
                </p>
              </div>
              <div class="space-y-6">
                <h4 class="text-xs font-bold text-emerald-400 uppercase tracking-widest border-b border-white/10 pb-2">Regret Avoidance</h4>
                <p class="text-sm text-emerald-100/80">
                  The primary emotion driving premium purchases is no longer joy, but the <strong>absence of regret</strong>. Reliability is the ultimate value.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Breakout Trauma & Kapok -->
      <section id="trauma" class="animate-in" style="animation-delay: 0.3s;">
        <div class="grid md:grid-cols-2 gap-8">
          <div class="glass-card p-10 border-l-4 border-red-500">
            <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">The Lexicon of Regret</h4>
            <h2 class="serif text-3xl text-emerald-950 mb-6">The "Kapok" Effect</h2>
            <p class="text-sm text-gray-600 leading-relaxed mb-8">
              "Kapok" is a cultural trauma. A single adverse reaction leads to permanent brand avoidance and active de-influencing within social circles.
            </p>
            <div class="space-y-4">
              <div class="flex justify-between items-center p-3 bg-gray-50 rounded-xl">
                <span class="text-xs font-bold text-gray-700">Immediate Abandonment</span>
                <span class="text-[10px] font-black text-red-600">100% CORRELATION</span>
              </div>
              <div class="flex justify-between items-center p-3 bg-gray-50 rounded-xl">
                <span class="text-xs font-bold text-gray-700">Negative Social Ripple</span>
                <span class="text-[10px] font-black text-red-600">HIGH VELOCITY</span>
              </div>
            </div>
          </div>
          <div class="glass-card p-10 border-l-4 border-emerald-500">
            <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Strategic Response</h4>
            <h2 class="serif text-3xl text-emerald-950 mb-6">Non-Maleficence</h2>
            <p class="text-sm text-gray-600 leading-relaxed mb-8">
              Q'WELL adopts the medical principle of <strong>"First, do no harm."</strong> Positioning focuses on safety as the non-negotiable floor, not just a feature.
            </p>
            <div class="space-y-4">
              <div class="flex justify-between items-center p-3 bg-emerald-50 rounded-xl">
                <span class="text-xs font-bold text-emerald-700">HRIPT Assurance</span>
                <span class="text-[10px] font-black text-emerald-600">RISK NEUTRALIZER</span>
              </div>
              <div class="flex justify-between items-center p-3 bg-emerald-50 rounded-xl">
                <span class="text-xs font-bold text-emerald-700">Calm Communication</span>
                <span class="text-[10px] font-black text-emerald-600">TRUST ANCHOR</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Digital Arbiters -->
      <section id="arbiters" class="animate-in" style="animation-delay: 0.4s;">
        <div class="p-12 bg-white rounded-[2.5rem] border border-gray-100 shadow-xl">
          <div class="flex flex-col md:flex-row gap-10 items-center">
            <div class="md:w-1/2">
              <span class="inline-block px-4 py-1.5 bg-violet-100 text-violet-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">The New Gatekeepers</span>
              <h2 class="serif text-4xl text-emerald-950 mb-6">The Rise of Digital Arbiters</h2>
              <p class="text-gray-500 text-sm leading-relaxed mb-6">
                A new class of "Science-First" influencers (e.g., <strong>Dokter Detektif</strong>) act as the judicial system for the beauty market. They independently test products and "de-influence" brands that fail lab verification.
              </p>
              <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100 italic text-[11px] text-gray-600">
                "Brands that cannot produce batch-specific lab data are now treated as high-risk by the Investigative Gen Z consumer."
              </div>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-4">
              <div class="aspect-square bg-violet-950 rounded-3xl p-6 flex flex-col justify-end text-white">
                <p class="text-3xl font-black mb-1">Audit</p>
                <p class="text-[10px] uppercase font-bold tracking-widest opacity-60">Over Claims</p>
              </div>
              <div class="aspect-square bg-emerald-950 rounded-3xl p-6 flex flex-col justify-end text-white">
                <p class="text-3xl font-black mb-1">Proof</p>
                <p class="text-[10px] uppercase font-bold tracking-widest opacity-60">Drives Trust</p>
              </div>
              <div class="aspect-square bg-gray-100 rounded-3xl p-6 flex flex-col justify-end text-emerald-950">
                <p class="text-3xl font-black mb-1">Truth</p>
                <p class="text-[10px] uppercase font-bold tracking-widest opacity-60">Over Hype</p>
              </div>
              <div class="aspect-square bg-violet-100 rounded-3xl p-6 flex flex-col justify-end text-violet-950">
                <p class="text-3xl font-black mb-1">Safe</p>
                <p class="text-[10px] uppercase font-bold tracking-widest opacity-60">Is Viral</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Sources -->
      <!-- <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Section 3 Research Validation</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. Mintel Indonesia: Beauty & Personal Care 2025</div>
          <div class="hover:text-emerald-700 transition-colors">02. Center for Digital Society: De-influencing Study</div>
          <div class="hover:text-emerald-700 transition-colors">03. Euromonitor: Post-Mercury Trust Evolution</div>
          <div class="hover:text-emerald-700 transition-colors">04. Shopee/TikTok Shop: "Sensitive Skin" Keyword Growth</div>
          <div class="hover:text-emerald-700 transition-colors">05. PwC Voice of the Consumer 2025 (ID Focus)</div>
          <div class="hover:text-emerald-700 transition-colors">06. Social Media Audit: Dokter Detektif Engagement</div>
          <div class="hover:text-emerald-700 transition-colors">07. Journal of Consumer Psych (Risk Barrier Theory)</div>
          <div class="hover:text-emerald-700 transition-colors">08. Market Insight: "Kapok" Behavioral Tracking</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • PSYCHOLOGICAL AUDIT</p>
        </div>
      </footer> -->
    </main>
  </div>

  <script>
    // Smooth scrolling
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

    // Sidebar observer
    const sections3 = ['landscape', 'veracity', 'barrier', 'trauma', 'arbiters'];
    window.addEventListener('scroll', () => {
      let current = '';
      sections3.forEach(section => {
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
</body>
</html>