
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

    .glass-card-emerald {
      background: #0D2B2A;
      backdrop-filter: blur(12px);
      border: 1px solid rgba(0, 0, 0, 0.04);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
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

    /* Chart Elements */
    .bar-grow {
      transition: height 1.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .gold-gradient {
      background: linear-gradient(135deg, #D4AF37 0%, #B8860B 100%);
    }

    /* Animation */
    @keyframes fadeInScale {
      from { opacity: 0; transform: scale(0.98); }
      to { opacity: 1; transform: scale(1); }
    }
    .animate-main { animation: fadeInScale 0.7s ease-out forwards; }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
  </style>
  
<body class="bg-grid">

  <!-- Global Header -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-[#0D2B2A]">Market Intelligence</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-05-VALIDATION</p>
        </div>
      </div>
      <div class="flex items-center gap-4 text-[11px] font-bold">
        <div class="hidden lg:flex gap-2 text-gray-400 uppercase tracking-widest">
          <span>ID Market</span> • <span>2030 Forecast</span>
        </div>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all text-xs">
          EXECUTIVE SUMMARY
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Navigation Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Market Navigation</h3>
          <ul class="space-y-1">
            <li><a href="#macro" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Economic Landscape</a></li>
            <li><a href="#premium" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Premium Viability</a></li>
            <li><a href="#price-bench" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Price Anchoring</a></li>
            <li><a href="#channels" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Channel Strategy</a></li>
            <li><a href="#outlook" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> 2030 Outlook</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-3xl text-white">
          <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-3">Economic Guardrail</p>
          <p class="text-[11px] leading-relaxed opacity-80">Q'WELL is positioned for <strong>Resiliency</strong>. In a tightening economy, consumers trade down on volume but trade <em>up</em> on <strong>Reliability</strong> to avoid costly clinical errors.</p>
        </div>
      </div>
    </aside>

    <!-- Main Dashboard -->
    <main class="flex-grow space-y-16">
      
      <!-- Macro Validation -->
      <section id="macro" class="animate-main">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Market Context: Indonesia</span>
            
            <div class="grid lg:grid-cols-2 gap-16">
              <div>
                <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">Economic <span class="italic text-[#D4AF37]">Resiliency</span> & Growth</h1>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-10">
                  The Indonesian personal care sector is projected to hit <strong>$5.5 Billion by 2028</strong>. This growth is driven by a population that increasingly views "Skin-investing" as a mandatory healthcare expense.
                </p>
                <div class="grid grid-cols-2 gap-6">
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Market CAGR</p>
                    <p class="text-3xl font-black text-[#0D2B2A]">~6.5%</p>
                  </div>
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Growth Driver</p>
                    <p class="text-3xl font-black text-[#0D2B2A]">Middle-Up</p>
                  </div>
                </div>
              </div>
              
              <!-- Market Growth Chart -->
              <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 relative">
                <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-10">Projected Market Expansion (USD Billions)</h4>
                <div class="flex items-end justify-between h-48 gap-4 px-4">
                  <div class="flex flex-col items-center gap-3 w-full">
                    <div class="w-full bg-emerald-100/50 rounded-t-xl h-[60%] relative flex justify-center items-end">
                       <span class="absolute -top-6 text-[11px] font-bold text-gray-400">$3.8B</span>
                    </div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase">2024</span>
                  </div>
                  <div class="flex flex-col items-center gap-3 w-full">
                    <div class="w-full bg-emerald-900/40 rounded-t-xl h-[75%] relative flex justify-center items-end">
                        <span class="absolute -top-6 text-[11px] font-bold text-gray-400">$4.5B</span>
                    </div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase">2026</span>
                  </div>
                  <div class="flex flex-col items-center gap-3 w-full">
                    <div class="w-full bg-[#0D2B2A] rounded-t-xl h-[100%] relative flex justify-center items-end">
                        <span class="absolute -top-8 text-sm font-black text-[#D4AF37]">$5.5B</span>
                        <div class="absolute inset-0 bg-white/10 animate-pulse"></div>
                    </div>
                    <span class="text-[10px] font-bold text-[#0D2B2A] uppercase">2028 (Est)</span>
                  </div>
                </div>
                <p class="text-[9px] text-gray-400 mt-10 italic">*Conservative outlook based on Mintel & Euromonitor ID 2024 data.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Premium Segment Viability -->
      <section id="premium" class="animate-main" style="animation-delay: 0.1s;">
        <div class="grid lg:grid-cols-5 gap-0 rounded-[3rem] overflow-hidden shadow-xl border border-black/5">
          <div class="lg:col-span-2 bg-[#D4AF37] p-12 text-[#0D2B2A] flex flex-col justify-center">
            <h3 class="text-[10px] font-bold text-[#0D2B2A]/60 uppercase tracking-[0.3em] mb-4">Strategic Tier</h3>
            <h2 class="serif text-4xl leading-tight mb-6">The "Masstige" To<br/>Premium Pivot</h2>
            <p class="text-[13px] font-medium leading-relaxed opacity-80">
              The Indonesian market is bifurcating. The "Middle" is moving away from generic claims toward <strong>high-verification premium tiers</strong> to avoid the cost of trial-and-error.
            </p>
          </div>
          <div class="lg:col-span-3 bg-white p-12 grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Volume Logic</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Mass market buyers prioritize volume and "immediate glow" (Rp 50k–120k). Q'WELL operates outside this noise.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Value Logic</h4>
              <p class="text-xs text-gray-500 leading-relaxed">The Premium buyer (Rp 400k+) prioritizes <strong>Reliability Insurance</strong>. They buy Q'WELL to stop the "Kapok" cycle.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Growth Rate</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Premium Hair Care is growing at <strong>1.5x</strong> the rate of mass market in Tier 1 Indonesian cities.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Loyalty Moat</h4>
              <p class="text-xs text-gray-500 leading-relaxed">The cost of switching <em>away</em> from a reliable brand is higher for sensitive users, ensuring long-term LTV.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Price Anchoring Analysis -->
      <section id="price-bench" class="animate-main" style="animation-delay: 0.2s;">
        <div class="glass-card p-12">
          <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="serif text-4xl text-emerald-950 mb-4">Price-to-Trust Benchmarking</h2>
            <p class="text-gray-500 text-sm">Mapping the "Price per 100ml" logic that defines the Indonesian competitive landscape.</p>
          </div>
          
          <div class="grid md:grid-cols-3 gap-8">
            <!-- Tier 1 -->
            <div class="p-8 bg-gray-50 rounded-[2rem] border border-gray-100 flex flex-col justify-between">
              <div>
                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Mass Market</span>
                <p class="serif text-2xl text-emerald-950 mt-2 mb-6">"Hygiene Priority"</p>
                <div class="space-y-3">
                  <div class="flex justify-between text-[11px] font-bold text-gray-500"><span>Price Range</span><span>Rp 50k - 120k</span></div>
                  <div class="flex justify-between text-[11px] font-bold text-gray-500"><span>Per 100ml</span><span>Rp 15k - 30k</span></div>
                </div>
              </div>
              <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-[10px] text-gray-400 font-medium">Position: Commodity / Low-Verification</p>
              </div>
            </div>
            
            <!-- Tier 2 -->
            <div class="p-8 bg-white rounded-[2rem] border-2 border-emerald-950 shadow-2xl relative">
              <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#D4AF37] text-[#0D2B2A] text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Q'WELL Target Tier</div>
              <div>
                <span class="text-[10px] font-black text-emerald-800 uppercase tracking-widest">Premium / Clinical</span>
                <p class="serif text-2xl text-emerald-950 mt-2 mb-6">"Reliability Insurance"</p>
                <div class="space-y-3">
                  <div class="flex justify-between text-[11px] font-bold text-emerald-900"><span>Price Range</span><span>Rp 450k - 800k</span></div>
                  <div class="flex justify-between text-[11px] font-bold text-emerald-900"><span>Per 100ml</span><span>Rp 180k - 320k</span></div>
                </div>
              </div>
              <div class="mt-8 pt-6 border-t border-emerald-900/10">
                <p class="text-[10px] text-emerald-800 font-bold uppercase tracking-tight">Position: Structural Verification (HRIPT)</p>
              </div>
            </div>

            <!-- Tier 3 -->
            <div class="p-8 bg-gray-50 rounded-[2rem] border border-gray-100 flex flex-col justify-between">
              <div>
                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">International Luxury</span>
                <p class="serif text-2xl text-emerald-950 mt-2 mb-6">"Status & Legacy"</p>
                <div class="space-y-3">
                  <div class="flex justify-between text-[11px] font-bold text-gray-500"><span>Price Range</span><span>Rp 1.2M - 2.5M</span></div>
                  <div class="flex justify-between text-[11px] font-bold text-gray-500"><span>Per 100ml</span><span>Rp 500k+</span></div>
                </div>
              </div>
              <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-[10px] text-gray-400 font-medium">Position: Prestige / Lifestyle Signaling</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Channel Strategy -->
      <section id="channels" class="animate-main #0D2B2A" style="animation-delay: 0.3s; ">
        <div class="flex flex-col md:flex-row gap-8">
          <div class="md:w-1/2 glass-card-emerald p-10 bg-[#0D2B2A] text-white">
            <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-6">Primary Conversion: Digital High-Trust</h3>
            <div class="space-y-8">
              <div class="flex gap-6 items-start">
                <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center shrink-0 border border-white/10 text-[#D4AF37] font-bold">1</div>
                <div>
                  <h4 class="font-bold mb-1">Shopee / Tokopedia Mall</h4>
                  <p class="text-xs text-emerald-100/60 leading-relaxed">Official "Mall" status is non-negotiable for authenticity signaling. Primary channel for high-worth repeat buyers.</p>
                </div>
              </div>
              <div class="flex gap-6 items-start">
                <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center shrink-0 border border-white/10 text-[#D4AF37] font-bold">2</div>
                <div>
                  <h4 class="font-bold mb-1">TikTok Shop (Edu-Tok)</h4>
                  <p class="text-xs text-emerald-100/60 leading-relaxed">The venue for "Investigative Transparency." Leveraging de-influencers to show lab reports live on stream.</p>
                </div>
              </div>
              <div class="flex gap-6 items-start">
                <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center shrink-0 border border-white/10 text-[#D4AF37] font-bold">3</div>
                <div>
                  <h4 class="font-bold mb-1">D2C Trust-Hub</h4>
                  <p class="text-xs text-emerald-100/60 leading-relaxed">A dedicated portal where consumers enter batch codes to see the Certificate of Analysis (COA).</p>
                </div>
              </div>
            </div>
          </div>
          <div class="md:w-1/2 glass-card p-10">
            <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-8 text-center">Market Access Matrix</h3>
            <div class="relative h-64 w-full flex items-center justify-center border-l-2 border-b-2 border-emerald-950/20">
              <!-- Grid Markers -->
              <span class="absolute bottom-2 right-2 text-[9px] font-bold text-gray-400 uppercase tracking-widest">Accessibility</span>
              <span class="absolute top-2 left-2 text-[9px] font-bold text-gray-400 uppercase tracking-widest">Trust Depth</span>
              
              <!-- Data Points -->
              <div class="absolute top-[20%] right-[30%] group">
                <div class="w-10 h-10 bg-[#0D2B2A] rounded-full border-4 border-[#D4AF37] flex items-center justify-center text-white font-black text-xs shadow-lg">Q</div>
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[9px] px-2 py-1 rounded hidden group-hover:block whitespace-nowrap uppercase">Q'WELL: High Trust + Targeted Access</div>
              </div>
              
              <div class="absolute bottom-[20%] right-[10%] group">
                <div class="w-8 h-8 bg-gray-200 rounded-full border border-gray-300 flex items-center justify-center text-gray-400 font-bold text-[8px]">M</div>
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[9px] px-2 py-1 rounded hidden group-hover:block whitespace-nowrap uppercase">Mass Market: High Access + Low Trust</div>
              </div>

              <div class="absolute top-[40%] left-[20%] group">
                <div class="w-8 h-8 bg-gray-200 rounded-full border border-gray-300 flex items-center justify-center text-gray-400 font-bold text-[8px]">L</div>
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[9px] px-2 py-1 rounded hidden group-hover:block whitespace-nowrap uppercase">Legacy Lux: Low Access + Medium Trust</div>
              </div>
            </div>
            <div class="mt-8 p-4 bg-emerald-50 rounded-2xl border border-emerald-100">
               <p class="text-[10px] text-emerald-800 font-bold leading-relaxed">Strategy: Q'WELL wins by providing the <span class="underline">Highest Trust Density</span> in accessible digital channels.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- 2030 Outlook -->
      <section id="outlook" class="animate-main" style="animation-delay: 0.4s;">
        <div class="glass-card p-12 text-center">
          <span class="inline-block px-4 py-1.5 bg-gray-100 text-gray-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6">2030 Conservative Forecast</span>
          <h2 class="serif text-4xl text-emerald-950 mb-10 italic">Strategic Durability Assessment</h2>
          
          <div class="grid md:grid-cols-4 gap-6">
            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                <h5 class="text-[10px] font-black text-[#0D2B2A] uppercase mb-2">Market Condition</h5>
                <p class="text-[11px] text-gray-500">Economic volatility leads to tighter "Selection Discipline" among the middle class.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                <h5 class="text-[10px] font-black text-[#0D2B2A] uppercase mb-2">Q'WELL Performance</h5>
                <p class="text-[11px] text-gray-500 font-bold text-emerald-800">High Retention. Users stick to what works for their biology during inflation.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                <h5 class="text-[10px] font-black text-[#0D2B2A] uppercase mb-2">Competitor Trap</h5>
                <p class="text-[11px] text-gray-500">Generic "Clean" brands collapse as price wars erode their credibility.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                <h5 class="text-[10px] font-black text-[#0D2B2A] uppercase mb-2">Strategic Result</h5>
                <p class="text-[11px] text-gray-500 font-bold text-[#D4AF37]">Premium positioning remains defensible as "Trust-Led Skincare" becomes a fixed expense.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Reference Deck -->
      <!-- <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Validation Hierarchy & Sources</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. Euromonitor: Premium Personal Care ID</div>
          <div class="hover:text-emerald-700 transition-colors">02. PwC: Voice of the Consumer (ID 2025)</div>
          <div class="hover:text-emerald-700 transition-colors">03. Ken Research: Hair Serum Market 2019-2030</div>
          <div class="hover:text-emerald-700 transition-colors">04. Mintel: Beauty Trends Indonesia 2024-2028</div>
          <div class="hover:text-emerald-700 transition-colors">05. Statista: Indonesia Cosmetics Forecast 2030</div>
          <div class="hover:text-emerald-700 transition-colors">06. Shopee Indonesia: Premium Segment Audit</div>
          <div class="hover:text-emerald-700 transition-colors">07. BPOM Supervision Trends 2021-2024</div>
          <div class="hover:text-emerald-700 transition-colors">08. Market Audit: Rp/100ml Benchmarking Data</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • MARKET VALIDATION</p>
        </div>
      </footer> -->
    </main>
  </div>

  <script>
    // Intersection Observer for Animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100');
        }
      });
    }, { threshold: 0.1 });

    // Smooth Scroll
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

    // Active Sidebar logic
    const navSections5 = ['macro', 'premium', 'price-bench', 'channels', 'outlook'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections5.forEach(sectionId => {
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