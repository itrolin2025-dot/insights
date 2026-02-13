
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

    /* Proof Ladder Steps */
    .step-node {
      position: relative;
      transition: all 0.4s ease;
    }
    .step-node::before {
      content: '';
      position: absolute;
      left: 1.25rem;
      top: 2.5rem;
      bottom: -2.5rem;
      width: 2px;
      background: #e2e8f0;
      z-index: 0;
    }
    .step-node:last-child::before { display: none; }

    /* Animation */
    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(20px); }
      to { opacity: 1; transform: translateX(0); }
    }
    .animate-step { animation: slideInRight 0.6s ease-out forwards; }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }

    .gold-glow { box-shadow: 0 0 20px rgba(212, 175, 55, 0.2); }
  </style>
<body class="bg-grid">

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-[#0D2B2A]">Proof Intelligence</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-07-TRUST-ARCH</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-emerald-50 text-emerald-800 rounded-full border border-emerald-100 uppercase tracking-widest">Protocol: HRIPT Gold-Standard</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all text-xs">
          EXPORT TRUST ARCHITECTURE
        </button>
      </div>
    </div>
  </nav>

  <div class="max-w-screen-2xl mx-auto pt-24 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar Navigation -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Proof Hierarchy</h3>
          <ul class="space-y-1">
            <li><a href="#summary" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Veracity Crisis</a></li>
            <li><a href="#ladder" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> The Proof Ladder</a></li>
            <li><a href="#regulatory" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Regulatory Foundation</a></li>
            <li><a href="#claims" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Claim Guardrails</a></li>
            <li><a href="#hript" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> HRIPT Advantage</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-3xl text-white">
          <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-3">Strategic Mandate</p>
          <p class="text-[11px] leading-relaxed opacity-80 italic">"In Indonesia, proof is not a marketing feature; it is a <strong>structural requirement</strong>. Trust must be built in layers, from mandatory BPOM to voluntary HRIPT."</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-16">
      
      <!-- Veracity Crisis Summary -->
      <section id="summary" class="animate-step">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Market Realignment</span>
            
            <div class="grid lg:grid-cols-2 gap-16">
              <div>
                <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">The <span class="italic text-[#D4AF37]">Architecture</span> of Trust</h1>
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-10">
                  The "Veracity Crisis" has turned Indonesian consumers into investigative truth-seekers. Q’WELL’s proof system is designed to navigate this skepticism by layering <strong>Mandatory Compliance</strong> with <strong>High-Impact Verification</strong>.
                </p>
                
                <div class="grid grid-cols-2 gap-4">
                  <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase mb-2">Claim Fatigue</h4>
                    <p class="text-xs text-emerald-950 font-bold">Labels are ignored until verified.</p>
                  </div>
                  <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase mb-2">Verification Gap</h4>
                    <p class="text-xs text-emerald-950 font-bold">HRIPT sets the price ceiling.</p>
                  </div>
                </div>
              </div>
              
              <div class="flex flex-col justify-center">
                 <div class="p-8 bg-gray-50 rounded-[2.5rem] border border-gray-100 relative">
                    <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Trust Signal Distribution</h4>
                    <!-- Simple SVG Donut Chart -->
                    <div class="flex items-center gap-10">
                        <svg width="120" height="120" viewBox="0 0 36 36" class="shrink-0">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e2e8f0" stroke-width="4"></circle>
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#0D2B2A" stroke-width="4" stroke-dasharray="75, 100" stroke-linecap="round"></circle>
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#D4AF37" stroke-width="4" stroke-dasharray="35, 100" stroke-linecap="round"></circle>
                        </svg>
                        <div class="space-y-3">
                            <div class="flex items-center gap-2"><div class="w-3 h-3 bg-[#0D2B2A] rounded-full"></div> <span class="text-[10px] font-bold text-gray-600 uppercase">Verification Depth (HRIPT)</span></div>
                            <div class="flex items-center gap-2"><div class="w-3 h-3 bg-[#D4AF37] rounded-full"></div> <span class="text-[10px] font-bold text-gray-600 uppercase">Regulatory (BPOM/Halal)</span></div>
                            <div class="flex items-center gap-2"><div class="w-3 h-3 bg-gray-200 rounded-full"></div> <span class="text-[10px] font-bold text-gray-600 uppercase">Marketing Claims</span></div>
                        </div>
                    </div>
                    <p class="text-[9px] text-gray-400 mt-8 italic">Verification depth is now the primary driver of high-tier conversion.</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- The Proof Ladder -->
      <section id="ladder" class="animate-step" style="animation-delay: 0.1s;">
        <div class="glass-card p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-10 text-center">The Structural Proof Ladder</h2>
            
            <div class="max-w-3xl mx-auto space-y-0">
                <!-- Tier 1 -->
                <div class="step-node flex gap-8 pb-12">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-900 font-bold border border-emerald-200 shrink-0 z-10">1</div>
                    <div class="flex-grow pt-1">
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 1: Regulatory Baseline (The "License to Operate")</h4>
                        <p class="text-xs text-gray-500 mb-4">Mandatory foundation to avoid instant rejection by retailers and consumers.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">BPOM NIE (QR Code)</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Halal 2026 Ready</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Reg 18/2024 Labels</span>
                        </div>
                    </div>
                </div>
                <!-- Tier 2 -->
                <div class="step-node flex gap-8 pb-12">
                    <div class="w-10 h-10 rounded-full bg-emerald-950 flex items-center justify-center text-white font-bold shrink-0 z-10 shadow-lg gold-glow">2</div>
                    <div class="flex-grow pt-1">
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 2: Safety Infrastructure (The "Risk Insurance")</h4>
                        <p class="text-xs text-gray-500 mb-4">The primary differentiator. Transforms an "optional wash" into "Mandatory Reliability."</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-emerald-950 text-[#D4AF37] rounded-full text-[10px] font-bold uppercase border border-[#D4AF37]/30">HRIPT Per SKU (Int. Lab)</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-900 rounded-full text-[10px] font-bold uppercase border border-emerald-100">Dermatologist-Led R&D</span>
                        </div>
                    </div>
                </div>
                <!-- Tier 3 -->
                <div class="step-node flex gap-8 pb-12">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-900 font-bold border border-emerald-200 shrink-0 z-10">3</div>
                    <div class="flex-grow pt-1">
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 3: Ethical Certifications (The "Identity Alignment")</h4>
                        <p class="text-xs text-gray-500 mb-4">Verification of manufacturing purity and lifestyle alignment for the Investigative consumer.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Vegan Certified</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Cruelty-Free Status</span>
                        </div>
                    </div>
                </div>
                <!-- Tier 4 -->
                <div class="step-node flex gap-8">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-900 font-bold border border-emerald-200 shrink-0 z-10">4</div>
                    <div class="flex-grow pt-1">
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 4: Dynamic Transparency (The "Trust Shortcut")</h4>
                        <p class="text-xs text-gray-500 mb-4">Digital proof that bypasses de-influencer skepticism through batch-specific data.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Batch-specific COA Access</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-[10px] font-bold text-emerald-950 uppercase">Independent Lab Portals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Claim Guardrails: Safe vs. Risk -->
      <section id="claims" class="animate-step" style="animation-delay: 0.2s;">
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="glass-card p-10 bg-emerald-950 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <svg width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-4">Regulation 3/2022</h3>
                <h2 class="serif text-4xl leading-tight mb-8">The Claim<br/>Guardrail</h2>
                <p class="text-emerald-100/60 text-xs leading-relaxed mb-10 italic">
                    "Q’WELL must navigate the thin line between 'Dermatological Excellence' and 'Illegal Medicinal Claims.' Defensive wording is the key to 2030 durability."
                </p>
                
                <div class="space-y-4">
                    <div class="p-4 bg-white/5 rounded-2xl border border-white/10">
                        <h5 class="text-[10px] font-bold text-emerald-300 uppercase mb-2">The Rule</h5>
                        <p class="text-[11px] leading-relaxed">Claims must be <strong>Objective, Clear, and Verifiable</strong>. Avoid "Curing," "Treating," or "Instant" results.</p>
                    </div>
                </div>
            </div>

            <div class="glass-card p-10 overflow-hidden">
                <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-6">Interactive Claim Audit</h4>
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="p-4 bg-red-50 rounded-2xl border border-red-100 group">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-black text-red-600 uppercase">HIGH RISK (MEDICINAL)</span>
                            <span class="text-[10px] font-bold text-gray-400">Avoid</span>
                        </div>
                        <p class="text-xs font-bold text-red-950 italic">"Heals Eczema & Repairs Follicular Damage instantly."</p>
                    </div>
                    <!-- Item 2 -->
                    <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-black text-emerald-600 uppercase">SAFE (DISCIPLINED)</span>
                            <span class="text-[10px] font-bold text-gray-400">Q'WELL Standard</span>
                        </div>
                        <p class="text-xs font-bold text-emerald-950 italic">"Tested for Sensitive Skin suitability; maintains biological barrier balance."</p>
                    </div>
                     <!-- Item 3 -->
                     <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-black text-emerald-600 uppercase">PREMIUM ANCHOR</span>
                            <span class="text-[10px] font-bold text-gray-400">Q'WELL Standard</span>
                        </div>
                        <p class="text-xs font-bold text-emerald-950 italic">"HRIPT Verified: Non-Irritant formulation under extreme conditions."</p>
                    </div>
                </div>
                <div class="mt-8 p-4 bg-gray-50 rounded-xl border border-gray-100">
                    <p class="text-[10px] text-gray-500 font-medium">Compliance logic: We sell <strong>Stability and Maintenance</strong>, not medical cures.</p>
                </div>
            </div>
        </div>
      </section>

      <!-- HRIPT Advantage -->
      <section id="hript" class="animate-step" style="animation-delay: 0.3s;">
        <div class="glass-card p-12 bg-white border-2 border-[#D4AF37] shadow-2xl relative">
            <div class="absolute -top-4 left-10 bg-[#D4AF37] text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">The Gold Signal</div>
            
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="serif text-4xl text-emerald-950 mb-6">HRIPT vs.<br/>Basic Patch Testing</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-8">
                        Most local incumbents (Rp 120k–180k) use "Single Patch Testing" for basic safety. Q’WELL’s <strong>Human Repeat Insult Patch Test (HRIPT)</strong> is a multi-week clinical stress test, identifying potential sensitizers that mass-market tests miss.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                            <div class="w-2 h-2 bg-emerald-950 rounded-full"></div>
                            <p class="text-xs font-bold text-emerald-950 uppercase tracking-tight">Verified in International Labs (USA/KR/EU)</p>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl">
                            <div class="w-2 h-2 bg-emerald-950 rounded-full"></div>
                            <p class="text-xs font-bold text-emerald-950 uppercase tracking-tight">Validated on 50+ Multi-Ethnic Subjects</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 bg-gray-50 rounded-[2.5rem] p-10 border border-gray-100">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">Price-to-Proof Correlation</h4>
                    <div class="relative h-48 w-full border-l border-b border-gray-200 mt-4 flex items-end">
                        <div class="w-1/3 bg-gray-200 h-[30%] mx-2 rounded-t-lg relative group">
                            <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[9px] font-bold text-gray-400 whitespace-nowrap">Basic Patch</span>
                        </div>
                        <div class="w-1/3 bg-emerald-900/40 h-[55%] mx-2 rounded-t-lg relative group">
                             <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[9px] font-bold text-gray-400 whitespace-nowrap">Derm Test</span>
                        </div>
                        <div class="w-1/3 bg-[#0D2B2A] h-[90%] mx-2 rounded-t-lg relative">
                            <div class="absolute inset-0 bg-white/10 animate-pulse"></div>
                            <span class="absolute -top-8 left-1/2 -translate-x-1/2 text-[10px] font-black text-[#D4AF37] whitespace-nowrap uppercase">Q'WELL HRIPT</span>
                        </div>
                    </div>
                    <p class="text-[10px] text-center mt-8 font-bold text-emerald-900">Premium pricing is not for the 'brand'; it's for the 'verification depth'.</p>
                </div>
            </div>
        </div>
      </section>

      <!-- Regulatory Roadmap Table -->
      <section id="regulatory" class="animate-step" style="animation-delay: 0.4s;">
        <div class="glass-card p-12 overflow-x-auto">
            <h2 class="serif text-3xl text-emerald-950 mb-10">Mandatory Regulatory Roadmap</h2>
            <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-100">
                        <th class="pb-6 px-4">Requirement</th>
                        <th class="pb-6 px-4">BPOM Code</th>
                        <th class="pb-6 px-4">Implementation Reality</th>
                        <th class="pb-6 px-4">Q'WELL Stance</th>
                    </tr>
                </thead>
                <tbody class="text-xs">
                    <tr class="border-b border-gray-50">
                        <td class="py-6 px-4 font-bold">NIE Registration</td>
                        <td class="py-6 px-4 text-gray-500">Notifkos System</td>
                        <td class="py-6 px-4 text-gray-500">Compulsory for Market Entry</td>
                        <td class="py-6 px-4 font-black text-emerald-900">NON-NEGOTIABLE</td>
                    </tr>
                    <tr class="border-b border-gray-50">
                        <td class="py-6 px-4 font-bold">2D Barcoding</td>
                        <td class="py-6 px-4 text-gray-500">Reg 18/2024</td>
                        <td class="py-6 px-4 text-gray-500">Track & Trace Compliance</td>
                        <td class="py-6 px-4 font-black text-emerald-900">MANDATORY BY NOV 2025</td>
                    </tr>
                    <tr class="border-b border-gray-50">
                        <td class="py-6 px-4 font-bold">Halal Certification</td>
                        <td class="py-6 px-4 text-gray-500">BPJPH Mandate</td>
                        <td class="py-6 px-4 text-gray-500">Religious & Purity Verification</td>
                        <td class="py-6 px-4 font-black text-emerald-900">STRATEGIC PREREQUISITE (2026)</td>
                    </tr>
                    <tr class="border-b border-gray-50">
                        <td class="py-6 px-4 font-bold">Safety Assessment Dossier</td>
                        <td class="py-6 px-4 text-gray-500">CPKB Standard</td>
                        <td class="py-6 px-4 text-gray-500">Internal proof of non-maleficence</td>
                        <td class="py-6 px-4 font-black text-emerald-900">HIGH-VERACITY (HRIPT LINKED)</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </section>

      <!-- Reference Sources -->
      <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Section 7 Validation Hierarchy</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. BPOM Regulation No. 3/2022 (Claims)</div>
          <div class="hover:text-emerald-700 transition-colors">02. BPOM Regulation No. 18/2024 (Labeling)</div>
          <div class="hover:text-emerald-700 transition-colors">03. Indonesia Halal Law No. 33/2014</div>
          <div class="hover:text-emerald-700 transition-colors">04. International Lab HRIPT Protocol (Standard)</div>
          <div class="hover:text-emerald-700 transition-colors">05. Euromonitor ID: Trust-Based Beauty Trends</div>
          <div class="hover:text-emerald-700 transition-colors">06. Shopee ID: Verification Scrutiny Audit</div>
          <div class="hover:text-emerald-700 transition-colors">07. BPOM Contaminant Regulation 16/2024</div>
          <div class="hover:text-emerald-700 transition-colors">08. J. of Cosmetic Science (Patch Test Comparison)</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <p>CONFIDENTIAL • PROOF ARCHITECTURE</p>
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
    const navSections = ['summary', 'ladder', 'regulatory', 'claims', 'hript'];
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