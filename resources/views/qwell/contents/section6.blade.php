
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

    /* Scoped Styles for Section 6 */
    #section6-root {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
      /* scroll-behavior: smooth; - Removed to prevent conflicts with parent */
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

    .sidebar-active {
      background: var(--primary);
      color: white;
      box-shadow: 0 8px 16px rgba(13, 43, 42, 0.15);
    }

    .bg-grid {
      background-size: 60px 60px;
      background-image: radial-gradient(circle, #0000000a 1px, transparent 1px);
    }

    /* Comparison Bar Chart */
    .bar-animate {
      transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Competitive Quadrant */
    .quadrant-label {
      font-size: 9px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #94a3b8;
    }

    /* Animation */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-up { animation: fadeInUp 0.7s ease-out forwards; }

    /* Custom Scrollbar */
    #section6-root ::-webkit-scrollbar { width: 6px; }
    #section6-root ::-webkit-scrollbar-track { background: transparent; }
    #section6-root ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
  </style>
<div id="section6-root" class="bg-grid w-full relative">

  <!-- Section Header / Nav -->
  <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6 w-full">
    <div class="w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-[#0D2B2A]">Competitive Intelligence</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-06-BATTLEMAP</p>
        </div>
      </div>
      <div class="flex items-center gap-4 text-[11px] font-bold">
        <span class="px-3 py-1 bg-amber-50 text-amber-800 rounded-full border border-amber-100 uppercase tracking-widest">Strategy: Disruptive Premium</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all text-xs">
          EXPORT COMPETITIVE AUDIT
        </button>
      </div>
    </div>
  </nav>

  <div class="w-full flex flex-col lg:flex-row gap-12 pt-10 pb-32">
    
    <!-- Navigation Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0 pl-6">
      <div class="space-y-6 lg:sticky lg:top-24 lg:max-h-[calc(100vh-8rem)] lg:overflow-y-auto">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Audit Navigation</h3>
          <ul class="space-y-1">
            <li><a href="#universe" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Mandatory Universe</a></li>
            <li><a href="#price-ladder" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Pricing Ladder</a></li>
            <li><a href="#verification" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Verification Depth</a></li>
            <li><a href="#whitespace" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Strategic White Space</a></li>
            <li><a href="#playbook" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Offensive Playbook</a></li>
          </ul>
        </div>

        <div class="p-6 bg-amber-50 rounded-3xl border border-amber-100">
          <p class="text-[10px] font-bold text-amber-900 uppercase tracking-widest mb-3 italic">Competitive Insight</p>
          <p class="text-[11px] leading-relaxed text-amber-800 font-medium">Local incumbents (Sensatia, etc.) lead in <strong>Accessibility</strong> and <strong>Storytelling</strong>, but lag in <strong>Verification Depth</strong>. This is where Q'WELL wins.</p>
        </div>
      </div>
    </aside>

    <!-- Main Dashboard -->
    <main class="flex-grow min-w-0 space-y-16 pr-6">
      
      <!-- Mandatory Universe -->
      <section id="universe" class="animate-up">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Mandatory Universe Validation</span>
            
            <div class="grid lg:grid-cols-2 gap-16">
              <div>
                <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">Incumbent <span class="italic text-[#D4AF37]">Benchmarking</span></h1>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-10">
                  The Indonesian premium hair and body landscape is maturing. We benchmark Q'WELL against the "Mandatory Universe"—brands currently occupying the psychological and retail space of our target ICP.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <span class="w-2 h-2 bg-emerald-900 rounded-full"></span>
                        <p class="text-sm font-bold text-emerald-950 uppercase tracking-tight">Local Premium: <span class="text-gray-400 font-medium">Sensatia, Cahaya Naturals, Eucalie</span></p>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                        <p class="text-sm font-bold text-emerald-950 uppercase tracking-tight">International Lifestyle: <span class="text-gray-400 font-medium">Aesop, L'Occitane, Sukin</span></p>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                        <p class="text-sm font-bold text-emerald-950 uppercase tracking-tight">Clinical-Adjacent: <span class="text-gray-400 font-medium">Kiehl's, Drunk Elephant</span></p>
                    </div>
                </div>
              </div>
              
              <!-- Market Presence Grid -->
              <div class="bg-[#0D2B2A] rounded-[2.5rem] p-10 text-white relative">
                <h4 class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-8">Retail Presence Matrix</h4>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold">Shopee / Tokopedia Mall</span>
                        <div class="flex gap-1">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold">Premium Offline (Grand Indonesia/PI)</span>
                        <div class="flex gap-1">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-white/20 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold">E-Commerce Search Dominance</span>
                        <div class="flex gap-1">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-white/20 rounded-full"></div>
                            <div class="w-2 h-2 bg-white/20 rounded-full"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-white/5 rounded-3xl border border-white/10">
                    <p class="text-[11px] text-emerald-100 font-medium leading-relaxed">Incumbents lead in "Mall Status" and Offline ubiquity. Q'WELL must lead in <strong>Verification Intensity</strong> to justify entry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Pricing Ladder -->
      <section id="price-ladder" class="animate-up" style="animation-delay: 0.1s;">
        <div class="glass-card p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-4">The Premium Pricing Ladder</h2>
            <p class="text-gray-500 text-sm mb-12">Price per 100ml Benchmarking (Shampoo & Body Wash Categories)</p>
            
            <div class="grid lg:grid-cols-2 gap-12 items-end">
                <!-- Hair Care Ladder -->
                <div class="space-y-8">
                    <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-6">Hair Care (Rp / 100ml)</h4>
                    <div class="space-y-6">
                        <div class="group">
                            <div class="flex justify-between text-[11px] font-bold mb-2"><span>Aesop / L'Occitane</span><span>Rp 450k - 650k</span></div>
                            <div class="w-full bg-gray-100 h-2.5 rounded-full"><div class="bar-animate bg-gray-400 h-full rounded-full" style="width: 100%"></div></div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between text-[11px] font-bold mb-2 text-emerald-900"><span>Q'WELL (Target)</span><span>Rp 180k - 320k</span></div>
                            <div class="w-full bg-emerald-100 h-2.5 rounded-full"><div class="bar-animate bg-[#D4AF37] h-full rounded-full shadow-[0_0_15px_rgba(212,175,55,0.4)]" style="width: 55%"></div></div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between text-[11px] font-bold mb-2"><span>Sensatia Botanicals</span><span>Rp 120k - 180k</span></div>
                            <div class="w-full bg-gray-100 h-2.5 rounded-full"><div class="bar-animate bg-emerald-900 h-full rounded-full" style="width: 32%"></div></div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between text-[11px] font-bold mb-2"><span>Sukin / Cahaya Naturals</span><span>Rp 80k - 120k</span></div>
                            <div class="w-full bg-gray-100 h-2.5 rounded-full"><div class="bar-animate bg-emerald-700 h-full rounded-full" style="width: 22%"></div></div>
                        </div>
                    </div>
                </div>
                
                <!-- Insight Box -->
                <div class="bg-gray-50 rounded-[2.5rem] p-10 border border-gray-100">
                    <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Strategic Logic</h4>
                    <p class="text-sm text-gray-600 leading-relaxed italic mb-6">
                        "Q'WELL occupies the <strong>Price Sweet Spot</strong>: Significantly higher than local incumbents to signal superior verification (HRIPT), but lower than international luxury to remain an 'accessible daily essential' for the high-worth urbanite."
                    </p>
                    <div class="p-4 bg-emerald-950 rounded-2xl text-white">
                        <p class="text-[10px] uppercase font-bold text-emerald-300 mb-1">Value Logic</p>
                        <p class="text-[11px] font-bold">Positioning: The most verified choice under Rp 400k.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Verification Depth Benchmarking -->
      <section id="verification" class="animate-up" style="animation-delay: 0.2s;">
        <div class="glass-card p-12 overflow-x-auto">
            <h2 class="serif text-4xl text-emerald-950 mb-10">Verification Signal Density</h2>
            
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">
                        <th class="pb-6 px-4">Competitor / Signal</th>
                        <th class="pb-6 px-4 text-center">BPOM NIE</th>
                        <th class="pb-6 px-4 text-center">Natural/Vegan</th>
                        <th class="pb-6 px-4 text-center">HRIPT Per SKU</th>
                        <th class="pb-6 px-4 text-center">COA Transparency</th>
                    </tr>
                </thead>
                <tbody class="text-xs">
                    <tr class="border-b border-gray-50 hover:bg-emerald-50 transition-colors">
                        <td class="py-6 px-4 font-bold text-emerald-950">Sensatia Botanicals</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-emerald-50 transition-colors">
                        <td class="py-6 px-4 font-bold text-emerald-950">Cahaya Naturals</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-emerald-50 transition-colors">
                        <td class="py-6 px-4 font-bold text-emerald-950">Sukin (International)</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-emerald-600">●</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                        <td class="py-6 px-4 text-center text-gray-300">○</td>
                    </tr>
                    <tr class="border-b border-emerald-950 bg-emerald-50/50">
                        <td class="py-6 px-4 font-black text-emerald-900 flex items-center gap-2">
                            Q'WELL
                            <span class="text-[8px] bg-[#D4AF37] text-white px-1.5 py-0.5 rounded">LEADER</span>
                        </td>
                        <td class="py-6 px-4 text-center text-emerald-950 font-black">●</td>
                        <td class="py-6 px-4 text-center text-emerald-950 font-black">●</td>
                        <td class="py-6 px-4 text-center text-[#D4AF37] font-black text-lg">★</td>
                        <td class="py-6 px-4 text-center text-[#D4AF37] font-black text-lg">★</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-8 flex gap-8 text-[10px] font-bold uppercase tracking-widest text-gray-400">
                <div class="flex items-center gap-2"><span class="text-emerald-600">●</span> Verified</div>
                <div class="flex items-center gap-2"><span class="text-gray-300">○</span> Generic / Surface Only</div>
                <div class="flex items-center gap-2"><span class="text-[#D4AF37]">★</span> Structural Differentiator</div>
            </div>
        </div>
      </section>

      <!-- Strategic White Space -->
      <section id="whitespace" class="animate-up" style="animation-delay: 0.3s;">
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="bg-emerald-950 rounded-[3rem] p-12 text-white relative overflow-hidden">
                <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">The Defensibility Map</h3>
                <h2 class="serif text-4xl leading-tight mb-8">Identifying the<br/>Verification Gap</h2>
                
                <div class="relative h-64 w-full flex items-center justify-center border-l border-b border-white/20 mt-12">
                    <span class="absolute bottom-2 right-2 quadrant-label text-white/40">Verification Depth</span>
                    <span class="absolute top-2 left-2 quadrant-label text-white/40">Premium Status</span>
                    
                    <!-- Q'WELL Quadrant -->
                    <div class="absolute top-4 right-4 text-center">
                        <div class="w-16 h-16 bg-[#D4AF37] rounded-full border-4 border-white/20 flex items-center justify-center font-black text-emerald-950 shadow-2xl animate-pulse">Q</div>
                        <p class="text-[9px] font-black uppercase mt-2 tracking-widest">Clinical-Adjacent</p>
                    </div>

                    <!-- Competitor Dots -->
                    <div class="absolute bottom-[20%] left-[40%] group">
                        <div class="w-8 h-8 bg-white/10 rounded-full border border-white/20 flex items-center justify-center text-[8px] font-bold">Local</div>
                    </div>
                    <div class="absolute top-[30%] left-[20%] group">
                        <div class="w-8 h-8 bg-white/10 rounded-full border border-white/20 flex items-center justify-center text-[8px] font-bold">Lux</div>
                    </div>
                </div>
            </div>
            
            <div class="glass-card p-12 flex flex-col justify-center">
                <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-6">Offensive Opportunity</h4>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center shrink-0 text-emerald-900 font-bold border border-emerald-100">1</div>
                        <div>
                            <h5 class="font-bold text-emerald-950 mb-1 uppercase text-xs tracking-tight">The "Claim Fatigue" Inoculation</h5>
                            <p class="text-[11px] text-gray-500 leading-relaxed">Most brands use "Natural" as a marketing tag. Q'WELL uses <strong>HRIPT-backed clinical data</strong> as a structural truth, inoculating the brand against superficial comparisons.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center shrink-0 text-emerald-900 font-bold border border-emerald-100">2</div>
                        <div>
                            <h5 class="font-bold text-emerald-950 mb-1 uppercase text-xs tracking-tight">Post-Mercury Trust Vacuum</h5>
                            <p class="text-[11px] text-gray-500 leading-relaxed">Following recent scandals (Blue Label/Mercury scares), the market is in a "Trust Vacuum." Q'WELL fills this with <strong>Transparent Integrity</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Offensive Playbook -->
      <section id="playbook" class="animate-up" style="animation-delay: 0.4s;">
        <div class="glass-card p-12 text-center bg-[#0D2B2A] text-white">
            <span class="inline-block px-4 py-1.5 bg-white/5 text-emerald-300 text-[10px] font-bold rounded-full uppercase tracking-widest mb-6 border border-white/10">Strategic Playbook 2026</span>
            <h2 class="serif text-4xl mb-12 italic">How Q'WELL Wins Against Incumbents</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-white/5 rounded-[2rem] border border-white/10 text-left">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Reframing Value</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"Don't sell a body wash; sell <strong>Biological Security</strong>. Frame lower-priced competitors as 'Unverified Biological Risks'."</p>
                </div>
                <div class="p-8 bg-white/5 rounded-[2rem] border border-white/10 text-left">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Structural Trust</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"Deploy the <strong>HRIPT Signal</strong> in all upper-funnel communication to instantly separate from generic 'Clean' noise."</p>
                </div>
                <div class="p-8 bg-white/5 rounded-[2rem] border border-white/10 text-left">
                    <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-4 tracking-widest">Transparency as PR</h5>
                    <p class="text-xs text-emerald-100/60 leading-relaxed italic">"Preempt investigative de-influencers by publishing <strong>Laboratory COAs</strong> before they are requested."</p>
                </div>
            </div>
        </div>
      </section>

      <!-- Reference Hierarchy -->
      <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Competitive Audit Sources</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. Shopee Mall Official Store Price Audit (Sensatia, Sukin)</div>
          <div class="hover:text-emerald-700 transition-colors">02. Tokopedia Premium Segment Benchmarking 2024</div>
          <div class="hover:text-emerald-700 transition-colors">03. BPOM Notifkos Database Verification Check</div>
          <div class="hover:text-emerald-700 transition-colors">04. Mintel Indonesia Personal Care Competitive Audit</div>
          <div class="hover:text-emerald-700 transition-colors">05. Sociolla Premium Hair Care Portfolio Analysis</div>
          <div class="hover:text-emerald-700 transition-colors">06. Competitor Label Claim Scrutiny (HRIPT vs. Basic Patch)</div>
          <div class="hover:text-emerald-700 transition-colors">07. Jakarta Urban Consumer Focus: Switching Barriers</div>
          <div class="hover:text-emerald-700 transition-colors">08. Strategic White Space Analysis: Clinical-Adjacent Tiers</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • COMPETITIVE AUDIT</p>
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
    const navSections = ['universe', 'price-ladder', 'verification', 'whitespace', 'playbook'];
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
</div>