
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

    .sidebar-active {
      background: var(--primary);
      color: white;
      box-shadow: 0 8px 16px rgba(13, 43, 42, 0.15);
    }

    .bg-grid {
      background-size: 60px 60px;
      background-image: radial-gradient(circle, #0000000a 1px, transparent 1px);
    }

    /* Comparison Elements */
    .signal-dot { width: 12px; height: 12px; border-radius: 50%; display: inline-block; }
    .signal-verified { background-color: #10B981; } /* Emerald 500 */
    .signal-missing { background-color: #E2E8F0; } /* Slate 200 */
    .signal-exclusive { background-color: var(--accent); box-shadow: 0 0 10px var(--accent); }

    /* Animation */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-up { animation: fadeInUp 0.7s ease-out forwards; }

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
          <p class="text-xs font-bold uppercase tracking-widest text-[#0D2B2A]">Competitive Intelligence</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-06-V3-UPDATE</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-100 uppercase tracking-widest">SQR COMPETITIVE UPDATE</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all shadow-md">
          EXPORT BATTLEMAP
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Competitive Guide</h3>
          <ul class="space-y-1">
            <li><a href="#universe" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Incumbent Universe</a></li>
            <li><a href="#verification" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Verification Gap</a></li>
            <li><a href="#price-trust" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Price-to-Trust</a></li>
            <li><a href="#whitespace" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Strategic White Space</a></li>
            <li><a href="#playbook" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> SQR Offensive</a></li>
          </ul>
        </div>

        <div class="p-6 bg-amber-50 rounded-3xl border border-amber-100">
          <p class="text-[10px] font-bold text-amber-900 uppercase tracking-widest mb-2 italic">Competitive Moat</p>
          <p class="text-[11px] text-amber-800 leading-relaxed font-medium">Incumbents use "Dermatologically Tested" as a generic tag. Q'WELL uses <strong>SQR + HRIPT</strong> as a verifiable clinical system.</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-16">
      
      <!-- 01. Mandatory Universe -->
      <section id="universe" class="animate-up">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Competitive Universe Validation</span>
            
            <div class="grid lg:grid-cols-2 gap-16">
              <div>
                <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">Incumbent <span class="italic text-[#D4AF37]">Benchmarking</span></h1>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-10">
                  Q'WELL competes in the premium "Masstige-to-Luxe" bracket. We benchmark against brands that current Traumatized Pragmatists "hire" to avoid irritation.
                </p>
                <div class="grid grid-cols-2 gap-4">
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase mb-2">Local Premium</h4>
                    <p class="text-xs font-bold text-emerald-950">Sensatia, Cahaya Naturals, Eucalie</p>
                  </div>
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase mb-2">Intl Lifestyle</h4>
                    <p class="text-xs font-bold text-emerald-950">Aesop, L'Occitane, Sukin</p>
                  </div>
                </div>
              </div>
              
              <!-- Market Share / Voice Model -->
              <div class="bg-[#0D2B2A] rounded-[2.5rem] p-10 text-white relative">
                <h4 class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-8">Verification Signal Logic</h4>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-tight">Open Signals (Common)</span>
                        <span class="text-[9px] font-black text-emerald-400">BPOM NIE, VEGAN</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-tight">Closed Signals (Premium)</span>
                        <span class="text-[9px] font-black text-emerald-400">HRIPT PER SKU</span>
                    </div>
                    <div class="flex items-center justify-between border-t border-white/10 pt-4">
                        <span class="text-xs font-black text-[#D4AF37] uppercase tracking-wider">Unit-Level Trust</span>
                        <span class="text-[9px] font-black text-[#D4AF37]">SQR "SCAN-TO-TRUST"</span>
                    </div>
                </div>
                <div class="mt-10 p-4 bg-white/5 rounded-2xl border border-white/10">
                    <p class="text-[11px] italic text-emerald-100/60 leading-relaxed font-medium">Strategically, open signals facilitate market entry, but closed/unit signals (SQR) justify the price premium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 02. Verification Signal Matrix -->
      <section id="verification" class="animate-up" style="animation-delay: 0.1s;">
        <div class="glass-card p-12 overflow-x-auto">
            <h2 class="serif text-4xl text-emerald-950 mb-10">Verification Signal Density</h2>
            <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] border-b border-gray-100">
                        <th class="pb-6 px-4">Brand / Signal</th>
                        <th class="pb-6 px-4 text-center">BPOM NIE</th>
                        <th class="pb-6 px-4 text-center">Natural/Vegan</th>
                        <th class="pb-6 px-4 text-center">HRIPT Clinical</th>
                        <th class="pb-6 px-4 text-center">SQR Authenticity</th>
                    </tr>
                </thead>
                <tbody class="text-xs">
                    <tr class="border-b border-gray-50 hover:bg-emerald-50/30 transition-all">
                        <td class="py-6 px-4 font-bold text-emerald-950">Sensatia Botanicals</td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-missing"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-missing"></span></td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-emerald-50/30 transition-all">
                        <td class="py-6 px-4 font-bold text-emerald-950">Cahaya Naturals</td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-missing"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-missing"></span></td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-emerald-50/30 transition-all">
                        <td class="py-6 px-4 font-bold text-emerald-950">International Luxe (Aesop)</td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-missing"></span></td>
                    </tr>
                    <tr class="bg-emerald-50/50">
                        <td class="py-6 px-4 font-black text-[#0D2B2A] flex items-center gap-2">
                            Q'WELL <span class="bg-[#D4AF37] text-white text-[8px] px-1.5 py-0.5 rounded">NEW BENCHMARK</span>
                        </td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-verified"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-exclusive"></span></td>
                        <td class="py-6 px-4 text-center"><span class="signal-dot signal-exclusive"></span></td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-8 flex gap-6 text-[9px] font-black uppercase tracking-widest text-gray-400">
                <div class="flex items-center gap-2"><span class="signal-dot signal-verified w-2 h-2"></span> Standard</div>
                <div class="flex items-center gap-2"><span class="signal-dot signal-missing w-2 h-2"></span> Unverified/Absent</div>
                <div class="flex items-center gap-2"><span class="signal-dot signal-exclusive w-2 h-2"></span> Q'WELL Exclusive Moat</div>
            </div>
        </div>
      </section>

      <!-- 03. Price-to-Trust Quadrant -->
      <section id="price-trust" class="animate-up" style="animation-delay: 0.2s;">
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="bg-emerald-950 rounded-[3rem] p-12 text-white relative overflow-hidden">
                <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">Strategic Moat</h3>
                <h2 class="serif text-4xl leading-tight mb-8">The "Verification Gap" Analysis</h2>
                
                <div class="relative aspect-square w-full max-w-sm mx-auto border-l border-b border-white/20 mt-10">
                    <!-- Labels -->
                    <span class="absolute -left-10 top-1/2 -translate-y-1/2 -rotate-90 text-[8px] font-black uppercase tracking-widest opacity-40">Price Tier</span>
                    <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[8px] font-black uppercase tracking-widest opacity-40">Verification Depth (HRIPT + SQR)</span>
                    
                    <!-- Q'WELL -->
                    <div class="absolute top-[20%] right-[15%] group">
                        <div class="w-20 h-20 bg-[#D4AF37] rounded-full border-4 border-[#0D2B2A] flex items-center justify-center font-black text-[#0D2B2A] shadow-2xl animate-pulse">Q</div>
                        <p class="text-[9px] font-black uppercase text-center mt-2">Biological Security</p>
                    </div>

                    <!-- Local -->
                    <div class="absolute bottom-[30%] left-[20%] flex flex-col items-center">
                        <div class="w-10 h-10 bg-white/10 rounded-full border border-white/20"></div>
                        <span class="text-[8px] font-bold text-gray-400 mt-2 uppercase">Local "Natural"</span>
                    </div>

                    <!-- Lux -->
                    <div class="absolute top-[10%] left-[40%] flex flex-col items-center">
                        <div class="w-10 h-10 bg-white/10 rounded-full border border-white/20"></div>
                        <span class="text-[8px] font-bold text-gray-400 mt-2 uppercase">Legacy Lux</span>
                    </div>
                </div>
            </div>

            <div class="glass-card p-12 flex flex-col justify-center">
                <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-6">Offensive Opportunity</h4>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center shrink-0 border border-emerald-100 text-emerald-900 font-bold">1</div>
                        <div>
                            <h5 class="text-xs font-black text-[#0D2B2A] uppercase mb-1">Claim Inoculation</h5>
                            <p class="text-[11px] text-gray-500 leading-relaxed font-medium">Most brands use "Natural" as an adjective. Q'WELL uses <strong>HRIPT + SQR</strong> as a structural truth, inoculating the brand against superficial price comparisons.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center shrink-0 border border-emerald-100 text-emerald-900 font-bold">2</div>
                        <div>
                            <h5 class="text-xs font-black text-[#0D2B2A] uppercase mb-1">"Scan-to-Trust" Utility</h5>
                            <p class="text-[11px] text-gray-500 leading-relaxed font-medium">By empowering consumers to verify their own individual bottle, Q'WELL removes the "Verification Workload" from the customer and places it on the SIU server.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- 04. Strategic White Space -->
      <section id="whitespace" class="animate-up" style="animation-delay: 0.3s;">
        <div class="glass-card p-12">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="serif text-4xl text-emerald-950 mb-4 italic">Occupying the "Clinical-Adjacent" Premium</h2>
                <p class="text-sm text-gray-500">Targeting the high-worth urbanites who reject 'Cheap Natural' but find 'Luxury' too aesthetic-focused.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Segment 1 -->
                <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100">
                    <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">Volume Market</h5>
                    <p class="text-xs font-bold text-gray-800 mb-2">Rp 50k - 120k</p>
                    <p class="text-[10px] text-gray-500 leading-relaxed italic">"Surface claims, mass manufacturing, no unit-level verification."</p>
                </div>
                <!-- Segment 2 (WHITE SPACE) -->
                <div class="p-8 bg-[#0D2B2A] text-white rounded-[2.5rem] border-2 border-[#D4AF37] relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#D4AF37] text-[#0D2B2A] text-[8px] font-black px-4 py-1 rounded-full uppercase">The Gold Territory</div>
                    <h5 class="text-[10px] font-black text-emerald-300 uppercase tracking-widest mb-4">Q'WELL TARGET</h5>
                    <p class="text-xs font-bold text-white mb-2">Rp 450k - 800k</p>
                    <p class="text-[10px] text-emerald-100/60 leading-relaxed font-medium italic">"Deep clinical verification (HRIPT) + Scan-to-Trust (SQR) Authenticity."</p>
                </div>
                <!-- Segment 3 -->
                <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100">
                    <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4">Legacy Luxury</h5>
                    <p class="text-xs font-bold text-gray-800 mb-2">Rp 1.2M+</p>
                    <p class="text-[10px] text-gray-500 leading-relaxed italic">"Prestige signaling, heritage-led, often lacks batch transparency."</p>
                </div>
            </div>
        </div>
      </section>

      <!-- 05. SQR Playbook -->
      <section id="playbook" class="animate-up" style="animation-delay: 0.4s;">
        <div class="bg-emerald-950 rounded-[3rem] p-12 sm:p-20 text-white relative overflow-hidden">
            <div class="absolute bottom-0 right-0 p-12 opacity-5"><svg width="240" height="240" viewBox="0 0 24 24" fill="white"><path d="M4 4h4v4H4V4zm2 2v2h2V6H6zm8-2h4v4h-4V4zm2 2v2h2V6h-2zM4 14h4v4H4v-4zm2 2v2h2v-2H6zm10 0h2v2h-2v-2zm2-2h2v2h-2v-2zm0 4h2v2h-2v-2zM8 8V4h4v4H8zM4 8v4h4V8H4zm8 8v4h4v-4h-4zm-4-4h4v4H8v-4zm8-4h4v4h-4V8z"></path></svg></div>
            <div class="max-w-3xl relative z-10">
                <h3 class="text-[10px] font-black text-emerald-300 uppercase tracking-[0.3em] mb-6">Offensive SQR Playbook</h3>
                <h2 class="serif text-5xl mb-12">The "Scan-to-Trust" Implementation</h2>
                
                <div class="grid sm:grid-cols-2 gap-12">
                    <div class="space-y-4">
                        <h4 class="text-xs font-black text-[#D4AF37] uppercase tracking-widest border-b border-white/10 pb-2">Phase 1: Physical Seal</h4>
                        <p class="text-sm text-emerald-100/70 leading-relaxed italic">"Every Q'WELL unit is born with a unique ID. If the hologram is compromised, the biological security is compromised."</p>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-xs font-black text-[#D4AF37] uppercase tracking-widest border-b border-white/10 pb-2">Phase 2: Digital Handshake</h4>
                        <p class="text-sm text-emerald-100/70 leading-relaxed italic">"Consumers scan to access batch-specific HRIPT data, pH levels, and bottling date. Verification becomes a moment of joy."</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Reference Sources -->
      <!-- <footer id="sources" class="pt-10 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Section 6 Sources & Benchmarks</h3>
          <div class="flex gap-4 text-[10px] font-bold text-gray-400">
            <span>Market Audit Q1 2026</span> • <span>Confidential SIU Data</span>
          </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500 mt-8">
          <div class="hover:text-emerald-700 transition-colors">01. Shopee Mall Official Store Price Index</div>
          <div class="hover:text-emerald-700 transition-colors">02. BPOM Notifkos Verification Records</div>
          <div class="hover:text-emerald-700 transition-colors">03. Indonesia Counterfeit Market Impact Report</div>
          <div class="hover:text-emerald-700 transition-colors">04. Mintel: Verification-as-a-Service Trends</div>
        </div>
      </footer> -->
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
    const navSections6 = ['universe', 'verification', 'price-trust', 'whitespace', 'playbook'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections6.forEach(sectionId => {
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