
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

    .glass-card-4 {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(0, 0, 0, 0.04);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
    }

    .glass-card-emerald-4{ 
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

    .jtbd-bar {
      transition: width 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Tab Animation */
    .tab-content { display: none; }
    .tab-content.active { display: block; animation: fadeIn 0.5s ease-out; }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-up { animation: fadeIn 0.8s ease-out forwards; }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
  </style>

<body class="bg-grid">

  <!-- Navigation -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-emerald-900/20">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Strategy Unit</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-04-V3.1-FINAL</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-amber-50 text-amber-800 rounded-full border border-amber-100 uppercase tracking-widest">SQR INTEGRATED</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all shadow-md">
          EXPORT DATASET
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-72 flex-shrink-0 hidden lg:block">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Targeting Guide</h3>
          <ul class="space-y-1">
            <li><a href="#jtbd" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> JTBD & Security</a></li>
            <li><a href="#authenticity" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Scan-to-Trust</a></li>
            <li><a href="#personas" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> ICP Definitions</a></li>
            <li><a href="#wtp-section" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Willingness to Pay</a></li>
            <li><a href="#funnel" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Verification Funnel</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white overflow-hidden relative">
          <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-2 italic">Strategic Filter</p>
          <p class="text-[11px] text-emerald-100 leading-relaxed font-medium">Q'WELL segments are defined by <strong>literacy</strong> and <strong>risk-aversion</strong>. We target those who view authenticity as a health prerequisite.</p>
        </div>
      </div>
    </aside>

    <!-- System Status for mobile -->
    <div class="block lg:hidden px-2 mb-6">
      <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white">
        <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-2 italic">Strategic Filter</p>
        <p class="text-[11px] text-emerald-100 leading-relaxed font-medium">Q'WELL segments are defined by <strong>literacy</strong> and <strong>risk-aversion</strong>. We target those who view authenticity as a health prerequisite.</p>
      </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow space-y-16">
      
      <!-- 01. JTBD Section -->
      <section id="jtbd" class="animate-up">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-900 text-[10px] font-bold rounded-full uppercase tracking-widest mb-8">Hierarchy of Defensive Needs</span>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center">
              <div>
                <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">The Job of <span class="italic">Biological Security</span></h1>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-8">
                  Indonesian consumers "hire" products to navigate a hostile urban environment. Authenticity is no longer a legal baseline; it is a <strong>Psychological Safe Harbor</strong>.
                </p>
                <div class="space-y-4">
                  <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                    <div class="w-10 h-10 rounded-full bg-emerald-950 flex items-center justify-center text-white font-bold shrink-0">1</div>
                    <p class="text-xs font-bold text-emerald-950 uppercase tracking-tight">Non-Irritation (Stability)</p>
                  </div>
                  <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                    <div class="w-10 h-10 rounded-full bg-emerald-700 flex items-center justify-center text-white font-bold shrink-0">2</div>
                    <p class="text-xs font-bold text-emerald-950 uppercase tracking-tight">Authenticity Assurance (Risk Mitigation)</p>
                  </div>
                </div>
              </div>
              
              <div class="bg-gray-50 rounded-[2.5rem] p-10 border border-gray-100">
                <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-8">Ranked Consumer Imperatives</h4>
                <div class="space-y-6">
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase text-emerald-900"><span>Biological Security (Barrier)</span><span>92%</span></div>
                    <div class="w-full bg-gray-200 h-1.5 rounded-full"><div class="jtbd-bar bg-emerald-950 h-full rounded-full" style="width: 92%"></div></div>
                  </div>
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase text-[#D4AF37]"><span>Authenticity Assurance (SQR)</span><span>82%</span></div>
                    <div class="w-full bg-gray-200 h-1.5 rounded-full"><div class="jtbd-bar bg-[#D4AF37] h-full rounded-full" style="width: 82%"></div></div>
                  </div>
                  <div>
                    <div class="flex justify-between text-[11px] font-bold mb-2 uppercase text-emerald-900"><span>Verification Depth (HRIPT)</span><span>84%</span></div>
                    <div class="w-full bg-gray-200 h-1.5 rounded-full"><div class="jtbd-bar bg-emerald-700 h-full rounded-full" style="width: 84%"></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 02. Authenticity (Scan-to-Trust) -->
      <section id="authenticity" class="animate-up" style="animation-delay: 0.1s;">
        <div class="grid lg:grid-cols-5 gap-0 rounded-[3rem] overflow-hidden shadow-xl border border-black/5">
          <div class="lg:col-span-2 bg-[#D4AF37] p-12 text-[#0D2B2A] flex flex-col justify-center relative overflow-hidden">
            <h3 class="text-[10px] font-black uppercase tracking-[0.3em] mb-4">Verification Protocol</h3>
            <h2 class="serif text-4xl leading-tight mb-6">Scan-to-Trust<br/>Infrastructure</h2>
            <p class="text-[13px] font-medium leading-relaxed opacity-80 italic">
              "The cost of a counterfeit bad reaction is higher than the price of a premium product. Serialized QR (SQR) bridges the trust gap."
            </p>
          </div>
          <div class="lg:col-span-3 bg-white p-12 grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Serialized QR (SQR)</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Unique digital ID per individual unit. Prevents batch replication and identifies leakage in unauthorized channels.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Tamper-Proof Hologram</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Physical seal confirming biological security integrity before the first use.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Real-Time Validation</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Direct connection to the SIU (Strategic Intelligence Unit) validation server, confirming authenticity instantly.</p>
            </div>
            <div class="space-y-4">
              <h4 class="text-xs font-bold text-[#0D2B2A] uppercase tracking-widest border-b pb-2">Anti-Counterfeit Moat</h4>
              <p class="text-xs text-gray-500 leading-relaxed">Protects premium equity by ensuring price-led resellers cannot easily replicate the trust signals.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- 03. Personas (Tabs) -->
      <section id="personas" class="animate-up" style="animation-delay: 0.2s;">
        <div class="flex items-center justify-between mb-8">
            <h2 class="serif text-4xl text-emerald-950">Target Personas</h2>
            <div class="flex gap-2">
                <button onclick="switchTab('primary')" id="btn-primary" class="px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest transition-all bg-[#0D2B2A] text-white shadow-lg">Most Valuable</button>
                <button onclick="switchTab('secondary')" id="btn-secondary" class="px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest transition-all bg-gray-100 text-gray-400 hover:bg-gray-200">Growth Engine</button>
            </div>
        </div>

        <!-- Primary Persona Tab -->
        <div id="tab-primary" class="tab-content active">
            <div class="glass-card-4 overflow-hidden">
                <div class="grid md:grid-cols-5">
                    <div class="md:col-span-2 bg-[#0D2B2A] p-12 text-white flex flex-col justify-between relative">
                        <div class="absolute bottom-0 right-0 p-8 opacity-10"><svg width="150" height="150" viewBox="0 0 100 100" fill="white"><path d="M50 0L61 39L100 50L61 61L50 100L39 61L0 50L39 39L50 0Z"/></svg></div>
                        <div>
                            <h3 class="serif text-4xl mb-2 italic">The Traumatized Pragmatist</h3>
                            <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest mb-10">High-Worth Stability Seeker</p>
                            <div class="space-y-4 text-xs font-medium">
                                <div class="flex justify-between border-b border-white/10 pb-2"><span>Age</span><span>28 - 42</span></div>
                                <div class="flex justify-between border-b border-white/10 pb-2"><span>Income</span><span>Middle-Up / Upper</span></div>
                                <div class="flex justify-between border-b border-white/10 pb-2"><span>Risk Trigger</span><span class="text-[#D4AF37]">Authenticity</span></div>
                            </div>
                        </div>
                        <p class="text-[11px] text-white-900 font-medium italic leading-relaxed">
                            "I’ve spent too much on products that promised a glow but gave me a rash. I don’t want a miracle; I want a guarantee that I won’t wake up with a reaction tomorrow."
                        </p>
                    </div>
                    <div class="md:col-span-3 p-12 bg-white space-y-10">
                        <div class="grid sm:grid-cols-2 gap-10">
                            <div>
                                <h4 class="text-[10px] font-black text-emerald-950 uppercase mb-4">Core Motivation</h4>
                                <p class="text-xs text-gray-500 leading-relaxed"><strong>Regret Avoidance.</strong> They view skincare as health stability maintenance. High sensitivity to "Marketplace Fake" narratives.</p>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-black text-emerald-950 uppercase mb-4">Functional Demand</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">Requires <strong>Predictable Outcome</strong>. They reject viral hype unless backed by SQR Serial + HRIPT Clinical data.</p>
                            </div>
                        </div>
                        
                        <div class="p-6 bg-red-50 rounded-3xl border border-red-100">
                            <h4 class="text-[10px] font-black text-red-900 uppercase mb-2">Rejection Triggers</h4>
                            <ul class="text-[10px] text-red-500 space-y-2">
                                <li>• Hype-only" marketing.</li>
                                <li>• Missing BPOM NIE codes.</li>
                                <li>• Unexplained "Natural" claims.</li>
                            </ul>
                            <!-- <p class="text-[11px] font-bold text-red-800 uppercase tracking-tighter">
                              • "Hype-only" marketing.<br>
                              • Missing BPOM NIE codes.<br>
                              • Unexplained "Natural" claims.
                            </p> -->
                        </div>

                        <div class="p-6 bg-emerald-50 rounded-3xl border border-emerald-100">
                            <h4 class="text-[10px] font-black text-emerald-900 uppercase mb-2">Proof Threshold</h4>
                            <p class="text-[11px] font-bold text-emerald-800 uppercase tracking-tighter">Requires BPOM NIE + Unit-Level SQR Verification to unlock Rp 400k+ transaction potential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Persona Tab -->
        <div id="tab-secondary" class="tab-content">
            <div class="glass-card-4 overflow-hidden">
                <div class="grid md:grid-cols-5">
                    <div class="md:col-span-2 bg-emerald-100 p-12 text-[#0D2B2A] flex flex-col justify-between relative border-r border-black/5">
                        <div>
                            <h3 class="serif text-4xl mb-2 italic">The Investigative Gen-Z</h3>
                            <p class="text-emerald-800 text-[10px] font-black uppercase tracking-widest mb-10">Science-First "Skintellectual"</p>
                            <div class="space-y-4 text-xs font-bold">
                                <div class="flex justify-between border-b border-black/5 pb-2"><span>Age</span><span>18 - 26</span></div>
                                <div class="flex justify-between border-b border-black/5 pb-2"><span>Status</span><span>Aspirant / Influencer</span></div>
                                <div class="flex justify-between border-b border-black/5 pb-2"><span>Behavior</span><span>De-influencer Ally</span></div>
                            </div>
                        </div>
                        <p class="text-[11px] text-emerald-900 leading-relaxed italic mt-12">"I don't trust the label. So, I watch De-influencers. I trust the Certificates and the SQR code. If you can't prove your percentage, you're irrelevant to my routine."</p>
                    </div>
                    <div class="md:col-span-3 p-12 bg-white space-y-10">
                        <div class="grid sm:grid-cols-2 gap-10">
                            <div>
                                <h4 class="text-[10px] font-black text-emerald-950 uppercase mb-4">Core Motivation</h4>
                                <p class="text-xs text-gray-500 leading-relaxed"><strong>Veracity Alignment.</strong> They value transparency as a sign of brand respect. They want to be "Expert Consumers."</p>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-black text-emerald-950 uppercase mb-4">Functional Demand</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">Requires <strong>Transparency Tools</strong>. They use SQR to access batch-specific pH levels and ingredient provenance.</p>
                            </div>
                        </div>
                        <div class="p-6 bg-emerald-50 rounded-3xl border border-emerald-100">
                            <h4 class="text-[10px] font-black text-emerald-400 uppercase mb-2">Communication Mode</h4>
                            <!-- <p class="text-[11px] font-bold text-gray-600 uppercase tracking-tighter">Acts as the "Truth-Validator" for the Primary ICP. If they can't verify it, they 'Kapok' the brand via social ripple.</p> -->
                            <ul class="text-[10px] text-emerald-500 space-y-2">
                                <li>• TikTok "Science-Tok" deep dives.</li>
                                <li>• Batch-specific QR codes.</li>
                                <li>• Ingredient pH & Lab Origin.</li>
                            </ul>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                            <h4 class="text-[10px] font-black text-gray-400 uppercase mb-2">Social Power</h4>
                            <p class="text-[11px] font-bold text-gray-600 uppercase tracking-tighter">Acts as the "Truth-Validator" for the Primary ICP. If they can't verify it, they 'Kapok' the brand via social ripple.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- 04. Willingness to Pay -->
      <section id="wtp-section" class="animate-up" style="animation-delay: 0.3s;">
        <div class="glass-card-4 p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-10 text-center italic">The "Reliability Premium" Logic</h2>
            
            <div class="grid md:grid-cols-3 gap-10">
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 bg-emerald-50 rounded-full mx-auto flex items-center justify-center text-[#0D2B2A] border border-emerald-100">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest">Insurance Logic</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">Premium is paid to avoid the <strong>Biological Debt</strong> (skin recovery costs) of unverified or counterfeit products.</p>
                </div>
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 bg-emerald-50 rounded-full mx-auto flex items-center justify-center text-[#0D2B2A] border border-emerald-100">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 12l-2-2m-2-2l-2-2m2 12l2-2m2-2l2-2M3 12l2 2m2 2l2 2m-2-12l-2 2m-2 2l-2 2"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>
                    <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest">Verification Depth</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">WTP increases linearly with <strong>Verification Density</strong>. SQR + HRIPT unlocks the highest tier of price-to-trust elasticity.</p>
                </div>
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 bg-emerald-50 rounded-full mx-auto flex items-center justify-center text-[#0D2B2A] border border-emerald-100">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2z"></path></svg>
                    </div>
                    <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest">Loyalty Moat</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed">Once reliability is proven via a "Scan-to-Trust" cycle, the <strong>Emotional Switching Cost</strong> becomes a powerful retention driver.</p>
                </div>
            </div>
        </div>
      </section>

      <!-- 05. Verification Funnel -->
      <section id="funnel" class="animate-up" style="animation-delay: 0.4s;">
        <div class="glass-card-emerald-4 p-12  text-white overflow-hidden relative">
            <div class="absolute inset-0 opacity-5 pointer-events-none">
                <svg width="100%" height="100%"><pattern id="grid-funnel" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-funnel)" /></svg>
            </div>
            
            <h2 class="serif text-4xl mb-12 text-center italic">The Proof-to-Purchase Funnel</h2>
            <div class="max-w-3xl mx-auto space-y-8 relative z-10">
                <!-- Level 1 -->
                <div class="flex items-center gap-10 group">
                    <div class="w-24 h-1 bg-white/10 flex-grow rounded-full overflow-hidden"><div class="h-full bg-white w-full"></div></div>
                    <div class="w-64">
                        <p class="text-[10px] font-black text-emerald-400 uppercase tracking-widest mb-1">01. Discovery (100%)</p>
                        <p class="text-[11px] text-emerald-100 opacity-60">Initial attention via Search or Edu-Tok content.</p>
                    </div>
                </div>
                <!-- Level 2 -->
                <div class="flex items-center gap-10">
                    <div class="w-24 h-1 bg-white/10 flex-grow rounded-full overflow-hidden"><div class="h-full bg-emerald-500 w-[62%]"></div></div>
                    <div class="w-64">
                        <p class="text-[10px] font-black text-emerald-400 uppercase tracking-widest mb-1">02. Legality Audit (62%)</p>
                        <p class="text-[11px] text-emerald-100 opacity-60">Verification of BPOM NIE registration code.</p>
                    </div>
                </div>
                <!-- Level 3 -->
                <div class="flex items-center gap-10">
                    <div class="w-24 h-1 bg-white/10 flex-grow rounded-full overflow-hidden"><div class="h-full bg-[#D4AF37] w-[48%]"></div></div>
                    <div class="w-64">
                        <p class="text-[10px] font-black text-[#D4AF37] uppercase tracking-widest mb-1">03. Authenticity Validation (48%)</p>
                        <p class="text-[11px] text-emerald-100 font-bold italic">User recognizes SQR Serial & Hologram Seal.</p>
                    </div>
                </div>
                <!-- Level 4 -->
                <div class="flex items-center gap-10">
                    <div class="w-24 h-1 bg-white/10 flex-grow rounded-full overflow-hidden"><div class="h-full bg-emerald-400 w-[16%] shadow-[0_0_15px_rgba(52,211,153,0.4)]"></div></div>
                    <div class="w-64">
                        <p class="text-[10px] font-black text-emerald-400 uppercase tracking-widest mb-1">04. Conversion (16%)</p>
                        <p class="text-[11px] text-emerald-100 opacity-60 font-bold uppercase">Safe Transaction Completed.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Footer Refs -->
      <!-- <footer class="pt-10 border-t border-gray-200">
        <div class="flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <div class="flex gap-6">
              <span>CONFIDENTIAL</span>
              <span>ICP V3.1 (AUTHENTICITY UPDATE)</span>
          </div>
        </div>
      </footer> -->
    </main>
  </div>

  <script>
    // Tab Switching Logic
    function switchTab(type) {
        // Reset tabs
        document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
        document.getElementById('btn-primary').classList.replace('bg-[#0D2B2A]', 'bg-gray-100');
        document.getElementById('btn-primary').classList.replace('text-white', 'text-gray-400');
        document.getElementById('btn-secondary').classList.replace('bg-[#0D2B2A]', 'bg-gray-100');
        document.getElementById('btn-secondary').classList.replace('text-white', 'text-gray-400');

        // Activate selected
        document.getElementById('tab-' + type).classList.add('active');
        const btn = document.getElementById('btn-' + type);
        btn.classList.replace('bg-gray-100', 'bg-[#0D2B2A]');
        btn.classList.replace('text-gray-400', 'text-white');
    }

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
    const navSections4 = ['jtbd', 'authenticity', 'personas', 'wtp-section', 'funnel'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections4.forEach(sectionId => {
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