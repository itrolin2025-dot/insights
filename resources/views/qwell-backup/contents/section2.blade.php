
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

    .stat-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .stat-card:hover {
      transform: translateY(-5px);
      border-color: var(--secondary);
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

    .chart-bar { transition: width 1s ease-in-out; }
  </style>  
<body class="bg-grid">

  <!-- Navigation Rail -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-emerald-950 rounded-xl flex items-center justify-center text-white font-bold text-xl">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Research Intelligence</p>
          <p class="text-[10px] text-gray-500 uppercase tracking-tight font-medium">Doc Ref: SECTION-02-STRUCT-2030</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <div class="hidden md:flex gap-1 text-[11px] font-bold uppercase tracking-wider text-gray-400">
          <span class="px-2 py-1 bg-gray-100 rounded">Analysis: Structural</span>
          <span class="px-2 py-1 bg-gray-100 rounded">Market: Indonesia</span>
        </div>
        <button onclick="window.print()" class="px-4 py-2 bg-emerald-950 text-white text-xs font-bold rounded-full hover:bg-emerald-900 transition-all shadow-lg shadow-emerald-900/20">
          DOWNLOAD DATASET
        </button>
      </div>
    </div>
  </nav>

  <div class="max-w-screen-2xl mx-auto pt-24 pb-20 px-6 flex flex-col lg:flex-row gap-10">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Navigation</h3>
          <ul class="space-y-1">
            <li><a href="#epidemiology" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Bio-Landscape</a></li>
            <li><a href="#toxicity" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Urban Toxicity</a></li>
            <li><a href="#internal" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> The Active Burn</a></li>
            <li><a href="#markers" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Physiological Markers</a></li>
            <li><a href="#behavior" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Cocok-Cocokan Loop</a></li>
          </ul>
        </div>

        <div class="p-6 bg-red-50 rounded-3xl border border-red-100">
          <p class="text-xs font-bold text-red-900 uppercase tracking-widest mb-2">Problem Density</p>
          <div class="flex items-center gap-2 mb-4">
            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
            <span class="text-[10px] font-bold text-red-700">HIGH HOSTILITY</span>
          </div>
          <p class="text-[11px] text-red-800 leading-relaxed font-medium">The Indonesian environment acts as a constant catalyst for barrier degradation. This is a structural, not elective, market driver.</p>
        </div>
      </div>
    </aside>

    <!-- Content -->
    <main class="flex-grow space-y-12">
      
      <!-- Hero -->
      <section id="epidemiology" class="animate-in">
        <div class="relative p-1 bg-emerald-950 rounded-[2.5rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.4rem] p-10 sm:p-14 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">Phase 02: Structural Reality</span>
            <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">Skin & Scalp<br/><span class="italic">The Hostility Reality</span></h1>
            
            <div class="max-w-2xl">
              <p class="text-lg text-gray-600 leading-relaxed mb-10 font-medium">
                Dermatological health in Indonesia is defined by a systemic breakdown in barrier integrity. Chronic sensitivity is no longer a niche complaint; it is a clinical population-level crisis.
              </p>
              
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                <div class="stat-card p-4 bg-gray-50 rounded-2xl border border-gray-100">
                  <p class="text-2xl font-black text-emerald-900">90%</p>
                  <p class="text-[10px] text-gray-500 uppercase font-bold tracking-tight">Contact Dermatitis Rate</p>
                </div>
                <div class="stat-card p-4 bg-gray-50 rounded-2xl border border-gray-100">
                  <p class="text-2xl font-black text-emerald-900">80%+</p>
                  <p class="text-[10px] text-gray-500 uppercase font-bold tracking-tight">Avg. Daily Humidity</p>
                </div>
                <div class="stat-card p-4 bg-gray-50 rounded-2xl border border-gray-100">
                  <p class="text-2xl font-black text-emerald-900">11+</p>
                  <p class="text-[10px] text-gray-500 uppercase font-bold tracking-tight">Extreme UV Index</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Toxicity Matrix -->
      <section id="toxicity" class="animate-in" style="animation-delay: 0.1s;">
        <div class="glass-card p-10">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
              <h2 class="serif text-3xl text-emerald-950 mb-2">The Urban Toxicity Matrix</h2>
              <p class="text-sm text-gray-500">Environmental factors driving transepidermal water loss (TEWL).</p>
            </div>
            <div class="px-4 py-2 bg-emerald-900 text-white text-[10px] font-bold rounded-full uppercase tracking-widest">
              Jakarta Audit 2024
            </div>
          </div>
          
          <div class="grid md:grid-cols-3 gap-8">
            <!-- Pollution -->
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h20M2 12a10 10 0 1120 0 10 10 0 01-20 0z"></path></svg>
                </div>
                <h4 class="font-bold text-gray-900">Particulate Matter</h4>
              </div>
              <p class="text-xs text-gray-500 leading-relaxed">PM2.5 peaks at <span class="font-bold text-gray-900">164μg/m³</span>. These particles penetrate the lipid barrier, inducing oxidative stress and chronic follicular inflammation.</p>
              <div class="bg-gray-100 h-1.5 w-full rounded-full overflow-hidden">
                <div class="bg-red-500 h-full w-[85%]"></div>
              </div>
              <p class="text-[10px] font-bold text-red-600 uppercase tracking-widest text-right">Danger: High</p>
            </div>
            
            <!-- Humidity/Temp -->
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"></path></svg>
                </div>
                <h4 class="font-bold text-gray-900">Thermal Stress</h4>
              </div>
              <p class="text-xs text-gray-500 leading-relaxed">High humidity + heat creates a semi-occlusive state that disrupts the acid mantle, leading to <span class="font-bold text-gray-900">"Malassezia Overgrowth"</span> on the scalp.</p>
              <div class="bg-gray-100 h-1.5 w-full rounded-full overflow-hidden">
                <div class="bg-emerald-600 h-full w-[92%]"></div>
              </div>
              <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest text-right">Structural Level: Constant</p>
            </div>

            <!-- UV -->
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 12h2M4.22 19.78l1.42-1.42M17.66 6.34l1.42-1.42"></path></svg>
                </div>
                <h4 class="font-bold text-gray-900">Solar Toxicity</h4>
              </div>
              <p class="text-xs text-gray-500 leading-relaxed">Extreme UV Index levels directly degrade structural proteins (collagen/keratin), accelerating barrier fragility and increasing trans-dermal sensitivity.</p>
              <div class="bg-gray-100 h-1.5 w-full rounded-full overflow-hidden">
                <div class="bg-amber-500 h-full w-[78%]"></div>
              </div>
              <p class="text-[10px] font-bold text-amber-600 uppercase tracking-widest text-right">Impact: Severe</p>
            </div>
          </div>
        </div>
      </section>

      <!-- The Active Burn -->
      <section id="internal" class="animate-in" style="animation-delay: 0.2s;">
        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-emerald-950 rounded-[2.5rem] p-10 sm:p-14 text-white">
            <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">Internal Catalyst</h3>
            <h2 class="serif text-4xl leading-tight mb-8">The "Active Burn"<br/>Phenomenon</h2>
            <p class="text-emerald-100/70 text-sm leading-relaxed mb-10">
              The overuse of high-concentration chemical actives (Retinoids, AHAs/BHAs) in a tropical, high-UV climate has induced a state of <span class="text-emerald-400 font-bold">Structural Barrier Fatigue</span>.
            </p>
            <ul class="space-y-4 text-xs font-semibold">
              <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> Lipid depletion via aggressive surfactants.</li>
              <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> Chronic micro-inflammation from pH imbalance.</li>
              <li class="flex items-center gap-3"><div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> Weakened defenses against urban pollutants.</li>
            </ul>
          </div>
          <div class="bg-white rounded-[2.5rem] p-10 sm:p-14 border border-gray-100 shadow-xl">
            <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Physiological Baseline</h4>
            <div class="space-y-10">
              <div class="relative pl-6 border-l-2 border-emerald-900">
                <p class="text-2xl font-black text-emerald-950 mb-1">Elevated TEWL</p>
                <p class="text-xs text-gray-500">Transepidermal Water Loss is significantly higher in Indonesian urbanites, leading to "Internal Dehydration" regardless of topical oiliness.</p>
              </div>
              <div class="relative pl-6 border-l-2 border-emerald-900">
                <p class="text-2xl font-black text-emerald-950 mb-1">Follicular Stress</p>
                <p class="text-xs text-gray-500">Scalp sensitivity is rising due to the "Build-up Loop" (Sebum + PM2.5 + Aggressive Shampooing).</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Behavioral Loop -->
      <section id="behavior" class="animate-in" style="animation-delay: 0.3s;">
        <div class="glass-card p-12 text-center">
          <span class="inline-block px-4 py-1.5 bg-gray-100 text-gray-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">Market Behavior Psychology</span>
          <h2 class="serif text-4xl text-emerald-950 mb-6">The "Cocok-Cocokan" Loop</h2>
          <p class="max-w-2xl mx-auto text-gray-500 text-sm leading-relaxed mb-12 italic">
            "Because the barrier is compromised, products that worked yesterday fail today. This drives a traumatized trial-and-error cycle where switching brands is a survival mechanism, not a luxury choice."
          </p>
          
          <div class="grid md:grid-cols-4 gap-6">
            <div class="p-6 bg-gray-50 rounded-3xl">
              <p class="text-xs font-bold text-emerald-900 mb-2 uppercase tracking-tighter">01. Irritation Trigger</p>
              <p class="text-[10px] text-gray-500 font-medium">Pollution or Active-overload compromises the barrier.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl">
              <p class="text-xs font-bold text-emerald-900 mb-2 uppercase tracking-tighter">02. "Kapok" (Fear)</p>
              <p class="text-[10px] text-gray-500 font-medium">Consumer experiences redness or itching; immediately abandons product.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl">
              <p class="text-xs font-bold text-emerald-900 mb-2 uppercase tracking-tighter">03. Defensive Switch</p>
              <p class="text-[10px] text-gray-500 font-medium">Seeks "Natural" or "Gentle" claims as a defensive sanctuary.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl">
              <p class="text-xs font-bold text-emerald-900 mb-2 uppercase tracking-tighter">04. Claim Failure</p>
              <p class="text-[10px] text-gray-500 font-medium">Low-quality "Natural" products fail to protect; cycle restarts.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Sources -->
      <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Section 2 References & Validation</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. IQAir Jakarta Air Quality Audit 2024</div>
          <div class="hover:text-emerald-700 transition-colors">02. PERDOSKI Clinical Statistics (Dermatitis)</div>
          <div class="hover:text-emerald-700 transition-colors">03. Journal of Cosmetic Dermatology (Tropical TEWL)</div>
          <div class="hover:text-emerald-700 transition-colors">04. BMKG UV Index Longitudinal Study</div>
          <div class="hover:text-emerald-700 transition-colors">05. Euromonitor ID Skin Sensitivity Trends</div>
          <div class="hover:text-emerald-700 transition-colors">06. Indonesian Journal of Health Science (Scalp Audit)</div>
          <div class="hover:text-emerald-700 transition-colors">07. Lancet Planetary Health (Urban Stressors)</div>
          <div class="hover:text-emerald-700 transition-colors">08. Market Audit: Active-overload behavior</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • STRUCTURAL AUDIT</p>
        </div>
      </footer>
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
    const sections = ['epidemiology', 'toxicity', 'internal', 'behavior'];
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
</body>
</html>