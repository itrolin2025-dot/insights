
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

    /* Proof Ladder Node */
    .step-node {
      position: relative;
    }
    .step-node::after {
      content: '';
      position: absolute;
      left: 1.25rem;
      top: 3rem;
      bottom: -1rem;
      width: 2px;
      background: #e2e8f0;
      z-index: 0;
    }
    .step-node:last-child::after { display: none; }

    /* Intensity Chart Bars */
    .intensity-bar {
      transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

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

  <!-- Navigation -->
  <!-- <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-black/5 h-16 flex items-center px-6">
    <div class="max-w-screen-2xl mx-auto w-full flex justify-between items-center">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-[#0D2B2A] rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">Q</div>
        <div class="hidden sm:block">
          <p class="text-xs font-bold uppercase tracking-widest text-emerald-900">Q'WELL Strategy Unit</p>
          <p class="text-[10px] text-gray-400 uppercase tracking-tight font-medium">Doc Ref: SECTION-07-V3-SQR</p>
        </div>
      </div>
      <div class="flex items-center gap-3 text-[11px] font-bold">
        <span class="px-3 py-1 bg-amber-50 text-amber-800 rounded-full border border-amber-100 uppercase tracking-widest">AUTHENTICITY ARCHITECTURE ACTIVE</span>
        <button onclick="window.print()" class="px-5 py-2 bg-[#0D2B2A] text-white rounded-full hover:bg-emerald-900 transition-all shadow-md">
          EXPORT INFRASTRUCTURE
        </button>
      </div>
    </div>
  </nav> -->

  <div class="max-w-screen-2xl mx-auto pt-10 pb-20 px-6 flex flex-col lg:flex-row gap-12">
    
    <!-- Sidebar -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sticky top-24 space-y-6">
        <div>
          <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Proof Hierarchy</h3>
          <ul class="space-y-1">
            <li><a href="#hero" class="flex items-center gap-3 px-4 py-3 rounded-2xl sidebar-active text-sm font-semibold transition-all"><span>01.</span> Trust Intent</a></li>
            <li><a href="#ladder" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>02.</span> Proof Ladder</a></li>
            <li><a href="#scan-to-trust" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>03.</span> Scan-to-Trust</a></li>
            <li><a href="#intensity" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>04.</span> Verification Intensity</a></li>
            <li><a href="#regulatory" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-all"><span>05.</span> Regulatory Guardrails</a></li>
          </ul>
        </div>

        <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white overflow-hidden relative">
          <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-2 italic">SIU Mandate</p>
          <p class="text-[11px] text-emerald-100 leading-relaxed font-medium">In a market of overclaims, <strong>structural truth</strong> is the only sustainable premium differentiator. <strong>SQR</strong> is our defensive shield.</p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow space-y-16">
      
      <!-- 01. Trust Intent Hero -->
      <section id="hero" class="animate-up">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3rem] overflow-hidden shadow-2xl">
          <div class="bg-white rounded-[2.9rem] p-10 sm:p-16 relative overflow-hidden">
            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#0D2B2A] text-[10px] font-bold rounded-full uppercase tracking-widest mb-8 border border-emerald-100">Phase 07: Proof Infrastructure</span>
            <h1 class="serif text-4xl sm:text-6xl text-emerald-950 leading-tight mb-8">The Architecture of <span class="italic text-[#D4AF37]">Structural Truth</span></h1>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center">
              <p class="text-lg text-gray-600 leading-relaxed font-medium">
                The Indonesian "Veracity Crisis" has transformed proof from a marketing tool into a <strong>structural requirement</strong>. Q'WELL layers mandatory BPOM compliance with unit-level digital verification (SQR) to fulfill the biological security mandate.
              </p>
              <div class="grid grid-cols-2 gap-4">
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                      <h4 class="text-[10px] font-black text-gray-400 uppercase mb-1">Price Lock</h4>
                      <p class="text-sm font-bold text-emerald-900 italic">"Trust justifies the premium."</p>
                  </div>
                  <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                      <h4 class="text-[10px] font-black text-gray-400 uppercase mb-1">Defense</h4>
                      <p class="text-sm font-bold text-emerald-900 italic">"SQR neutralizes fakes."</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 02. Updated Proof Ladder -->
      <section id="ladder" class="animate-up" style="animation-delay: 0.1s;">
        <div class="glass-card p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-12 text-center italic">The Multi-Dimensional Proof Ladder</h2>
            
            <div class="max-w-3xl mx-auto space-y-12">
                <!-- Tier 1 -->
                <div class="step-node flex gap-8">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-900 font-bold shrink-0 z-10 border border-emerald-200">1</div>
                    <div>
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 1: Mandatory Foundation (License to Operate)</h4>
                        <p class="text-sm text-gray-500 mb-4">Baseline regulatory status to avoid instant retailer/consumer rejection.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-bold text-gray-400 border border-gray-200 uppercase">BPOM NIE Registry</span>
                            <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-bold text-gray-400 border border-gray-200 uppercase">Halal 2026 Ready</span>
                            <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-bold text-gray-400 border border-gray-200 uppercase">Reg 18/2024 Compliance</span>
                        </div>
                    </div>
                </div>

                <!-- Tier 2 (AUTHENTICITY UPDATE) -->
                <div class="step-node flex gap-8">
                    <div class="w-10 h-10 rounded-full bg-[#D4AF37] flex items-center justify-center text-[#0D2B2A] font-black shrink-0 z-10 shadow-lg">2</div>
                    <div>
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 2: Authenticity Layer (The "Scan-to-Trust")</h4>
                        <p class="text-sm text-gray-500 mb-4">Unique unit identification to neutralize counterfeit risk and marketplace friction.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-[#0D2B2A] text-[#D4AF37] rounded-full text-[9px] font-black border border-[#D4AF37]/30 uppercase">Serialized QR (SQR)</span>
                            <span class="px-3 py-1 bg-[#0D2B2A] text-[#D4AF37] rounded-full text-[9px] font-black border border-[#D4AF37]/30 uppercase">Tamper-Proof Hologram</span>
                            <span class="px-3 py-1 bg-[#0D2B2A] text-[#D4AF37] rounded-full text-[9px] font-black border border-[#D4AF37]/30 uppercase">SIU Verification Page</span>
                        </div>
                    </div>
                </div>

                <!-- Tier 3 -->
                <div class="step-node flex gap-8">
                    <div class="w-10 h-10 rounded-full bg-emerald-950 flex items-center justify-center text-white font-bold shrink-0 z-10 shadow-lg">3</div>
                    <div>
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 3: Safety Infrastructure (Risk Insurance)</h4>
                        <p class="text-sm text-gray-500 mb-4">The clinical differentiator that separates Q'WELL from surface-claim competitors.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-900 rounded-full text-[9px] font-bold border border-emerald-100 uppercase">HRIPT Clinical Data</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-900 rounded-full text-[9px] font-bold border border-emerald-100 uppercase">Dermatologist-Led R&D</span>
                        </div>
                    </div>
                </div>

                <!-- Tier 4 -->
                <div class="step-node flex gap-8">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-900 font-bold shrink-0 z-10 border border-emerald-200">4</div>
                    <div>
                        <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-2">Tier 4: Transparency Index (Expert Alignment)</h4>
                        <p class="text-sm text-gray-500 mb-4">Detailed technical proof for the Investigative Gen-Z "Skintellectual" segment.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-bold text-gray-400 border border-gray-200 uppercase">Batch-Specific COA Access</span>
                            <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-bold text-gray-400 border border-gray-200 uppercase">Independent Lab Portals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- 03. Scan-to-Trust Infrastructure Deep Dive -->
      <section id="scan-to-trust" class="animate-up" style="animation-delay: 0.2s;">
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="bg-emerald-950 rounded-[3rem] p-12 text-white relative overflow-hidden">
                <div class="absolute -bottom-10 -right-10 opacity-10 rotate-12">
                    <svg width="240" height="240" viewBox="0 0 24 24" fill="white"><path d="M4 4h4v4H4V4zm2 2v2h2V6H6zm8-2h4v4h-4V4zm2 2v2h2V6h-2zM4 14h4v4H4v-4zm2 2v2h2v-2H6zm10 0h2v2h-2v-2zm2-2h2v2h-2v-2zm0 4h2v2h-2v-2zM8 8V4h4v4H8zM4 8v4h4V8H4zm8 8v4h4v-4h-4zm-4-4h4v4H8v-4zm8-4h4v4h-4V8z"></path></svg>
                </div>
                <h3 class="text-[10px] font-black text-emerald-300 uppercase tracking-[0.3em] mb-6">Authenticity Protocol</h3>
                <h2 class="serif text-5xl mb-12">The "Scan-to-Trust" Ecosystem</h2>
                
                <div class="space-y-8 relative z-10">
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 text-[#D4AF37] font-bold border border-white/10 text-xl">SQR</div>
                        <div>
                            <h5 class="text-xs font-black uppercase text-emerald-200 mb-1">Serialized Unit ID</h5>
                            <p class="text-[11px] text-emerald-100/60 leading-relaxed italic">"Every single Q'WELL bottle has its own digital fingerprint. We move verification from the batch level to the individual unit level."</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 text-[#D4AF37] font-bold border border-white/10 text-xl">VER</div>
                        <div>
                            <h5 class="text-xs font-black uppercase text-emerald-200 mb-1">The Verification Portal</h5>
                            <p class="text-[11px] text-emerald-100/60 leading-relaxed italic">"A dedicated SIU-authorized landing page that confirms authenticity, identifies manufacturing date, and displays batch specific clinical summaries."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-card p-12 flex flex-col justify-center">
                <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-widest mb-10 text-center">Authenticity Confidence Index</h4>
                <div class="space-y-10">
                    <div class="relative pl-8 border-l-2 border-emerald-950">
                        <span class="absolute -left-2.5 top-0 w-5 h-5 bg-emerald-950 rounded-full border-4 border-white"></span>
                        <p class="text-xl font-black text-emerald-950 mb-1 italic">Reduced Counterfeit Friction</p>
                        <p class="text-[11px] text-gray-500 font-medium">82/100 consumers in Indonesia indicate that unique verification codes would significantly increase their willingness to pay IDR 400k+.</p>
                    </div>
                    <div class="relative pl-8 border-l-2 border-[#D4AF37]">
                        <span class="absolute -left-2.5 top-0 w-5 h-5 bg-[#D4AF37] rounded-full border-4 border-white shadow-lg"></span>
                        <p class="text-xl font-black text-[#0D2B2A] mb-1 italic">Instant Trust Handshake</p>
                        <p class="text-[11px] text-gray-500 font-medium">Digital validation removes the "Investigative Workload" from the consumer, creating a friction-less trust moment at point-of-use.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- 04. Verification Intensity Gap (The Chart) -->
      <section id="intensity" class="animate-up" style="animation-delay: 0.3s;">
        <div class="glass-card p-12">
            <h2 class="serif text-4xl text-emerald-950 mb-12 text-center">Verification Intensity Gap Analysis</h2>
            
            <div class="max-w-4xl mx-auto space-y-10">
                <!-- Data Row 1 -->
                <div class="space-y-4">
                    <div class="flex justify-between items-end">
                        <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Regulatory Baseline (BPOM NIE)</h5>
                        <div class="flex gap-4 text-[9px] font-black uppercase">
                            <span class="text-gray-400">Market Baseline</span>
                            <span class="text-emerald-950">Q'WELL Target</span>
                        </div>
                    </div>
                    <div class="relative h-4 w-full bg-gray-100 rounded-full overflow-hidden">
                        <div class="absolute left-0 top-0 h-full bg-gray-300 intensity-bar" style="width: 100%"></div>
                        <div class="absolute left-0 top-0 h-full bg-emerald-950 intensity-bar" style="width: 100%"></div>
                    </div>
                    <p class="text-[9px] text-gray-400 italic text-right">Mandatory for all. No competitive advantage here.</p>
                </div>

                <!-- Data Row 2 -->
                <div class="space-y-4">
                    <div class="flex justify-between items-end">
                        <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Clinical Depth (HRIPT per SKU)</h5>
                    </div>
                    <div class="relative h-6 w-full bg-gray-100 rounded-full overflow-hidden">
                        <!-- Market Baseline -->
                        <div class="absolute left-0 top-0 h-full bg-gray-300 intensity-bar border-r-2 border-white" style="width: 8%"></div>
                        <!-- Q'WELL -->
                        <div class="absolute left-0 top-0 h-full bg-emerald-800 intensity-bar" style="width: 95%"></div>
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-[10px] font-black text-white">95% INTENSITY</span>
                    </div>
                    <p class="text-[9px] text-gray-400 italic text-left">Market Baseline: Generic "Dermatologically Tested" patch tests on 1-2 hero SKUs only.</p>
                </div>

                <!-- Data Row 3 (SQR) -->
                <div class="space-y-4">
                    <div class="flex justify-between items-end">
                        <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Authenticity Trust (SQR + Hologram)</h5>
                    </div>
                    <div class="relative h-6 w-full bg-gray-100 rounded-full overflow-hidden">
                        <!-- Market Baseline -->
                        <div class="absolute left-0 top-0 h-full bg-gray-300 intensity-bar border-r-2 border-white" style="width: 12%"></div>
                        <!-- Q'WELL -->
                        <div class="absolute left-0 top-0 h-full bg-[#D4AF37] intensity-bar" style="width: 100%"></div>
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-[10px] font-black text-[#0D2B2A]">100% UNIT-LEVEL TRUST</span>
                    </div>
                    <p class="text-[9px] text-gray-400 italic text-left">Market Baseline: Simple batch codes, easily replicated, high marketplace counterfeiting risk.</p>
                </div>
            </div>

            <div class="mt-12 p-6 bg-emerald-50 rounded-[2rem] border border-emerald-100 text-center">
                <p class="text-sm font-bold text-emerald-950 italic">"The gap between the gray bars (Market) and the dark/gold bars (Q'WELL) is the exact measure of our commercial defensibility."</p>
            </div>
        </div>
      </section>

      <!-- 05. Regulatory Guardrails Update -->
      <section id="regulatory" class="animate-up" style="animation-delay: 0.4s;">
        <div class="bg-[#0D2B2A] rounded-[3rem] p-12 sm:p-20 text-white relative overflow-hidden">
            <div class="flex flex-col md:flex-row gap-16">
                <div class="md:w-1/3">
                    <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-6">BPOM Compliance Map</h3>
                    <h2 class="serif text-4xl mb-8 leading-tight">Regulatory Guardrails 2025/26</h2>
                    <p class="text-sm text-emerald-100/60 leading-relaxed italic mb-8">
                        "Compliance is not static. Q’WELL moves from reactive submission to proactive risk assessment."
                    </p>
                </div>
                <div class="md:w-2/3 grid sm:grid-cols-2 gap-6">
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                        <div>
                            <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-2">Reg 18/2024</h5>
                            <p class="text-[11px] text-emerald-100 font-medium">Standardized labeling, mandatory Indonesian language instructions, and 2D barcode visibility.</p>
                        </div>
                        <span class="text-[9px] font-black bg-emerald-900 w-fit px-2 py-1 rounded mt-4">MANDATORY NOV 2025</span>
                    </div>
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                        <div>
                            <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-2">Halal October 2026</h5>
                            <p class="text-[11px] text-emerald-100 font-medium">Mandatory Halal certification for all cosmetics. A primary purity signal for the Indonesian consumer.</p>
                        </div>
                        <span class="text-[9px] font-black bg-emerald-900 w-fit px-2 py-1 rounded mt-4">STRATEGIC PREREQUISITE</span>
                    </div>
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                        <div>
                            <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-2">Reg 16/2024</h5>
                            <p class="text-[11px] text-emerald-100 font-medium">Numeric limits on Lead (≤20ppm) and Mercury (≤1ppm). Q'WELL dossiers should show batch-specific tests well below these limits.</p>
                        </div>
                        <span class="text-[9px] font-black bg-emerald-900 w-fit px-2 py-1 rounded mt-4">SAFETY THRESHOLD</span>
                    </div>
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10 flex flex-col justify-between">
                        <div>
                            <h5 class="text-[10px] font-black text-[#D4AF37] uppercase mb-2">Reg 26/2025</h5>
                            <p class="text-[11px] text-emerald-100 font-medium">Raw Material Risk Assessment Dossiers (RAD). Mandatory proactive vetting of all ingredient sources.</p>
                        </div>
                        <span class="text-[9px] font-black bg-emerald-900 w-fit px-2 py-1 rounded mt-4">PRE-MARKET VETTING</span>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Footer Refs -->
      <!-- <footer id="sources" class="pt-10 border-t border-gray-200">
        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Section 7 Hierarchy of Evidence</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[11px] font-semibold text-gray-500">
          <div class="hover:text-emerald-700 transition-colors">01. BPOM Regulation No. 18/2024</div>
          <div class="hover:text-emerald-700 transition-colors">02. BPOM Regulation No. 3/2022 (Claims)</div>
          <div class="hover:text-emerald-700 transition-colors">03. Indonesia Halal Law No. 33/2014</div>
          <div class="hover:text-emerald-700 transition-colors">04. International Lab HRIPT Protocols (ISO/IEC)</div>
        </div>
        <div class="mt-12 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
          <p>© 2026 Q'WELL STRATEGIC INTELLIGENCE UNIT</p>
          <div class="flex gap-4">
              <span>CONFIDENTIAL</span>
              <span>VER V3.0 (AUTHENTICITY UPDATE)</span>
          </div>
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
    const navSections7 = ['hero', 'ladder', 'scan-to-trust', 'intensity', 'regulatory'];
    window.addEventListener('scroll', () => {
      let activeSection = '';
      navSections7.forEach(sectionId => {
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