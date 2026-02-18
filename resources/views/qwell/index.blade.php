<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Q’well | Brand Research & Strategic Insights</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
  <link rel="icon" href="{{ asset('images/logo/qwell-logo.png') }}" type="image/png">

  <!-- Tailwind (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #0D2B2A;       /* Deep Forest */
      --secondary: #164E4D;     /* Dark Teal */
      --accent: #D4AF37;        /* Gold/Bronze */
      --paper: #F8F9FA;         /* Gallery Grey */
      --ink: #111827;           /* Deep Grey */
      --radius: 1.5rem;
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--ink);
      background-color: var(--paper);
    }

    .serif { font-family: 'Playfair Display', serif; }

    .bg-grid {
      background-size: 60px 60px;
      background-image: radial-gradient(circle, #0000000a 1px, transparent 1px);
    }

    /* Accordion Custom Styles */
    .accordion-item {
        scroll-margin-top: 120px; /* Offset for sticky nav + yellow bar */
    }
    
    .accordion-content {
      /* Base state for animation */
      display: none;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      /* Logic handled in JS for transition attributes to match custom.js exactly */
    }

    .accordion-item.active .accordion-icon {
      transform: rotate(180deg);
      background-color: var(--accent);
      color: white;
    }

    /* Modal States */
    .modal-overlay {
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s ease;
      background-color: rgba(13, 43, 42, 0.9);
      backdrop-filter: blur(12px);
    }
    .modal-overlay.open {
      opacity: 1;
      pointer-events: auto;
    }

    /* Progress bar */
    #progress-container {
      height: 4px;
      background: rgba(13, 43, 42, 0.1);
    }
    #progress-bar {
      height: 100%;
      background: var(--accent);
      width: 0%;
      transition: width 0.2s;
    }

    /* Footer Shadow */
    .footer-shadow {
        box-shadow: 0 -20px 50px rgba(0,0,0,0.05);
    }

    .hello-bar {
      background: var(--primary);
      color: var(--accent);
      font-size: 10px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 0.3em;
      text-align: center;
      padding: 8px 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    /* Gold Glow */
    .gold-glow { box-shadow: 0 0 30px rgba(212, 175, 55, 0.2); }
    .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 30px 50px -10px rgba(0,0,0,0.15); }

    @media print {
      .no-print { display: none; }
      .accordion-content { max-height: none !important; display: block !important; opacity: 1 !important; }
    }

    /* Password Protection Blur */
    #main-wrapper {
      transition: filter 0.5s ease;
    }
    body.locked #main-wrapper {
      filter: blur(25px);
      pointer-events: none;
      user-select: none;
    }
    
    #password-modal {
      display: none;
      background: rgba(13, 43, 42, 0.8);
      backdrop-filter: blur(10px);
    }
    #password-modal.active {
      display: flex;
    }
  </style>
</head>
<!-- Password Off -->
<!-- <body class="bg-grid"> -->
<!-- Password ON -->
<body class="bg-grid locked">

  <!-- PASSWORD ON -->
  <div id="password-modal" class="fixed inset-0 z-[200] flex items-center justify-center p-6 active">
  <!-- PASSWORD OFF -->
  <!-- <div id="password-modal" class="fixed inset-0 z-[200] flex items-center justify-center p-6 hidden"> -->
      <div class="bg-white w-full max-w-md rounded-[3rem] shadow-2xl p-10 sm:p-12 text-center border border-emerald-900/10">
          <div class="w-20 h-20 bg-emerald-950 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-xl">
              <img src="{{ asset('images/logo/qwell-logo.png') }}" alt="Q'WELL" class="w-12 h-12 object-contain" />
          </div>
          
          <h2 class="serif text-3xl text-emerald-950 mb-2">Secure Access</h2>
          <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-8">STRATEGIC RESEARCH REPORT</p>
          
          <div class="space-y-4">
              <input type="password" id="access-password" 
                  class="w-full px-6 py-4 rounded-2xl border-2 border-gray-100 focus:border-emerald-950 focus:outline-none text-center font-bold tracking-[0.5em] transition-all"
                  placeholder="••••••••" />
              
              <button onclick="checkPassword()" 
                  class="w-full py-4 bg-emerald-950 text-white rounded-2xl font-black uppercase tracking-[0.2em] hover:bg-emerald-900 transition-all shadow-lg shadow-emerald-950/20">
                  VERIFY IDENTITY
              </button>
              
              <p id="password-error" class="text-red-600 text-[10px] font-black uppercase tracking-widest opacity-0 transition-opacity">Access Denied: Invalid Credentials</p>
          </div>
          
          <p class="mt-8 text-[9px] text-gray-400 font-bold uppercase tracking-tighter">Authenticated access only. Activity is monitored.</p>
      </div>
  </div>

  <div id="main-wrapper">

  <!-- Floating Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-black/5">
    <div class="hello-bar no-print">Prepared Exclusively for Q'WELL</div>
    <div class="max-w-screen-2xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <img src="{{ asset('images/logo/app-logo.png') }}" alt="Q'WELL Logo Left"
                    class="w-8 h-8 object-contain"
                    style="aspect-ratio:1/1; display:block;"
            />
        <div>
          <p class="text-[11px] font-black uppercase tracking-widest text-[#0D2B2A]"><span class="block sm:hidden">RESEARCH REPORT</span>
          <span class="hidden sm:block">STRATEGIC RESEARCH REPORT</span></p>
          <!-- <span class="hidden md:inline-block text-[8px] font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100 uppercase tracking-widest">Confidence Level: 94%</span> -->
          <p class="text-[10px] text-emerald-800 uppercase tracking-tighter font-black"><b>Confidence Level: 94%</b></p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <!-- <span class="hidden md:inline-block text-[10px] font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100 uppercase tracking-widest">Confidence Level: 94%</span> -->
        <a target="_blank" class="px-5 py-2.5 bg-emerald-50 text-[#0D2B2A] border border-emerald-100 text-[11px] font-black rounded-full hover:bg-emerald-100 transition-all flex items-center gap-2 uppercase tracking-widest">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5S19.832 5.477 21 6.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <span class="block sm:hidden">PKJ</span>
            <span class="hidden sm:block">PKJ</span>
        </a>
        <img src="{{ asset('images/logo/qwell-text-logo.png') }}" alt="Q'WELL Logo Right"
          class="w-8 h-8 object-contain"
          style="aspect-ratio:1/1; display:block;"
        />
      </div>
    </div>
    <!-- <header style="background-color: #f0f757;" class="shadow-md top-0 z-80">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-3 flex items-center justify-center text-center h-6 md:h-10 transition-all duration-200">
            <span class="block text-base sm:text-xl px-2 font-extrabold tracking-tight text-[#0B6E99] text-center w-full">
                <span class="font-semibold text-gray-700">
                    Prepared exclusively for Q’WELL
                </span>
            </span>
        </div>
    </header> -->
    <div id="progress-container"><div id="progress-bar"></div></div>
  </nav>

  <div class="md:hidden fixed bottom-3 left-0 w-full flex justify-center z-50 pointer-events-none">
    <div class="bg-white/95 border border-gray-200 shadow-lg rounded-lg px-4 py-2 text-xs font-semibold text-gray-500 pointer-events-auto">
        Access protected &middot; Not for distribution
    </div>
  </div>

  <main class="max-w-7xl mx-auto pt-32 pb-20 px-2">
    
    <!-- SECTION 0: GATEWAY -->
    <header id="section-0" class="mb-24 animate-in">
        <div class="relative p-1 bg-[#0D2B2A] rounded-[3.5rem] overflow-hidden shadow-2xl">
            <div class="bg-white rounded-[3.4rem] p-10 sm:p-20 relative overflow-hidden">

                <!-- Mobile: Objective Card center (atas), Desktop: kanan Heading -->
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between sm:gap-10 relative">

                    <!-- Objective Card: mobile (top, center), desktop (right, end) -->
                    <div 
                        class="order-1 sm:order-2 mt-0 sm:mt-0 sm:ml-10 flex-shrink-0 flex flex-col items-center sm:items-end w-full sm:w-auto"
                    >
                        <div class="p-5 bg-emerald-900 rounded-2xl text-white relative overflow-hidden min-w-[220px] max-w-xs shadow-lg mb-10 sm:mb-0">
                            <div class="absolute -bottom-4 -right-6 opacity-10">
                                <svg width="70" height="70" viewBox="0 0 100 100" fill="white"><path d="M50 0L61 39L100 50L61 61L50 100L39 61L0 50L39 39L50 0Z"/></svg>
                            </div>
                            <p class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest mb-2 italic">Objective</p>
                            <p class="text-[11px] leading-relaxed opacity-90">
                                "This research removes assumption bias to protect the 2030 premium price ceiling against market skepticism."
                            </p>
                        </div>
                    </div>

                    <!-- Heading Column -->
                    <div class="max-w-4xl flex-1 order-2 sm:order-1">
                        <h1 class="serif text-5xl sm:text-7xl text-emerald-950 leading-tight mb-10 italic">
                            Research <br>
                            <span class="not-italic text-[#D4AF37]">Overview</span>
                        </h1>
                    </div>
                </div>
                
                <!-- This Research Paragraph: Diletakkan di bawah Research Overview dan kartu Objective -->
                <div class="mt-10">
                    <p class="text-xl text-gray-500 leading-relaxed font-medium mb-12 text-justify">
                        This research serves as a decision-grade positioning framework for <strong>Q’WELL’s</strong> entry into the Indonesian premium hair and body care market. It is designed to bridge the gap between internal trust assets and external market reality.
                    </p>
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="space-y-2 text-justify">
                            <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-[0.2em]">Scope</h4>
                            <p class="text-xs font-bold text-gray-600">Indonesia (Tier 1, 2 and 3)</p>
                        </div>
                        <div class="space-y-2 text-justify">
                            <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-[0.2em]">Timeline</h4>
                            <p class="text-xs font-bold text-gray-600">Conservative 2030 Outlook</p>
                        </div>
                        <div class="space-y-2 text-justify">
                            <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-[0.2em]">Objective</h4>
                            <p class="text-xs font-bold text-gray-600">Remove Positioning Bias</p>
                        </div>
                        <div class="space-y-2 text-justify">
                            <h4 class="text-[10px] font-black text-emerald-900 uppercase tracking-[0.2em]">Key Lever</h4>
                            <p class="text-xs font-bold text-gray-600">Scan-to-Trust</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Methodology -->
    <section id="methodology" class="animate-reveal" style="animation-delay: 0.1s;">
        <div class="glass-card p-12 sm:p-16">
            <div class="flex flex-col md:flex-row gap-16">
                <div class="md:w-1/3">
                    <h2 class="serif text-4xl text-emerald-950 mb-6 italic">Protocol & <span class="not-italic text-[#D4AF37]">Verification</span></h2>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-8">
                        "The methodology follows an 'Inverse Validation' logic, proving why premium pricing is the only rational choice for sensitive consumers in a hostile environment."
                    </p>
                    <div class="p-6 bg-[#0D2B2A] rounded-[2rem] text-white">
                        <p class="text-[10px] font-bold text-emerald-300 uppercase mb-3">Verification Pillar</p>
                        <p class="text-[11px] text-emerald-100/70 leading-relaxed font-medium">Exclusively utilizing high-veracity secondary data including BPOM 18/2024 mandates, Mintel longitudinal audits, and international HRIPT standards.</p>
                    </div>
                </div>
                <div class="md:w-2/3 space-y-6">
                    <div class="method-card p-6 bg-gray-50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2 tracking-tight">01. Environmental Stress Mapping</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Auditing Indonesia's objective stressors (PM2.5 peaks of 164μg/m³, UV Index 11+) to define the structural problem Q'WELL must resolve.</p>
                    </div>
                    <div class="method-card p-6 bg-gray-50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2 tracking-tight">02. Psychographic Trauma Analysis</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Identifying the 'Kapok' effect and the 'Veracity Crisis' as the primary barriers to premium adoption in Indonesia.</p>
                    </div>
                    <div class="method-card p-6 bg-gray-50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2 tracking-tight">03. Scan-to-Trust (SQR) Infrastructure</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Establishing a unique unit-level verification layer to neutralize counterfeit risk and marketplace friction.</p>
                    </div>
                    <div class="method-card p-6 bg-gray-50 rounded-2xl">
                        <h4 class="text-xs font-black text-emerald-900 uppercase mb-2 tracking-tight">04. Reliability Premium Logic</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Framing high pricing as 'Biological Debt' prevention, shifting the brand from elective luxury to mandatory stability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Framework Decision Map -->
    <section id="framework" class="animate-reveal py-12" style="animation-delay: 0.2s;">
        <div class="glass-card p-12">
            <h2 class="serif text-3xl text-emerald-950 mb-10 text-center">The 8-Section Decision</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Row 1 -->
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 01</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Governance</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Strategic Brand Question</p>
                </div>
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 02</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Hostility Matrix</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Structural Reality Audit</p>
                </div>
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 03</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Veracity Crisis</h5>
                    <p class="text-[10px] text-gray-400 mt-2">The "Kapok" Psychology</p>
                </div>
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 04</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">ICP & SQR</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Scan-to-Trust Profiling</p>
                </div>
                <!-- Row 2 -->
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 05</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Validation</h5>
                    <p class="text-[10px] text-gray-400 mt-2">$5.5B Market Outlook</p>
                </div>
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 06</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Competition</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Verification Gap Moat</p>
                </div>
                <div class="framework-node p-6 bg-white border border-gray-100 rounded-2xl group">
                    <span class="text-[10px] font-black text-gray-400 group-hover:text-[#D4AF37] uppercase">Section 07</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-950">Infrastructure</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Trust Ladder & Compliance</p>
                </div>
                <div class="p-6 bg-white border border-emerald-900 rounded-2xl shadow-xl group">
                    <span class="text-[10px] font-black text-emerald-950">SECTION 08</span>
                    <h5 class="text-xs font-black mt-2 text-emerald-900">POSITIONING LOCK</h5>
                    <p class="text-[10px] text-gray-400 mt-2">Strategy Approved</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Disclaimers -->
    <section id="disclaimer" class="animate-reveal pb-12" style="animation-delay: 0.3s;">
        <div class="bg-emerald-950 rounded-[3.5rem] p-12 sm:p-24 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-5 pointer-events-none">
                <svg width="100%" height="100%"><pattern id="grid-disc" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-disc)" /></svg>
            </div>
            <div class="flex flex-col md:flex-row gap-20 items-center relative z-10">
                <div class="md:w-1/2">
                    <h3 class="text-[10px] font-bold text-emerald-300 uppercase tracking-[0.3em] mb-6 italic">Governance</h3>
                    <h2 class="serif text-5xl mb-8 leading-tight italic">Disclaimer & Usage Guardrails</h2>

                    <!-- Disclaimer Card -->
                    <div class="mt-12 p-8 pb-1 bg-red-50 rounded-[2rem] border border-red-100 flex items-start gap-6">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center shrink-0 text-red-600 font-black">!</div>
                        <div>
                            <h4 class="text-xs font-black text-red-900 uppercase mb-2">Disclaimer</h4>
                            <p class="text-sm text-emerald-800 leading-relaxed mb-8 italic">
                                "This report is an internal strategic asset and does not constitute dermatological advice or financial guarantee."
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10">
                        <h5 class="text-[10px] font-bold text-[#D4AF37] uppercase mb-2">Confidentiality</h5>
                        <p class="text-[11px] text-emerald-100/80">Proprietary and confidential. Intended for Q’WELL board and marketing execution teams only.</p>
                    </div>
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10">
                        <h5 class="text-[10px] font-bold text-[#D4AF37] uppercase mb-2">Scope Limit</h5>
                        <p class="text-[11px] text-emerald-100/80">Analysis based on point-in-time data (Q1 2026). Strategic durability forecasts are conservative projections.</p>
                    </div>
                    <div class="p-6 bg-white/5 rounded-3xl border border-white/10">
                        <h5 class="text-[10px] font-bold text-[#D4AF37] uppercase mb-2">Decision Guardrail</h5>
                        <p class="text-[11px] text-emerald-100/80">Positioning decisions must be cross-verified with manufacturing feasibility and final BPOM approvals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- RESEARCH ACCORDION (1-8) -->
    <div class="space-y-6">

        <!-- SECTION 1: Governance -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">01</span>
                    <h2 class="serif text-2xl text-emerald-950">Governance</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section1')
            </div>
        </div>

        <!-- SECTION 2: Structural Problem -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">02</span>
                    <h2 class="serif text-2xl text-emerald-950">Hostility Matrix</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section2')
            </div>
        </div>

        <!-- SECTION 3: Psychology -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">03</span>
                    <h2 class="serif text-2xl text-emerald-950">Veracity Crisis</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section3')
            </div>
        </div>

        <!-- SECTION 4: ICP & JTBD -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">04</span>
                    <h2 class="serif text-2xl text-emerald-950">ICP & SQR</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section4')
            </div>
        </div>

        <!-- SECTION 5: Market Validation -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">05</span>
                    <h2 class="serif text-2xl text-emerald-950">Validation</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section5')
            </div>
        </div>

        <!-- SECTION 6: Competitive Map -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">06</span>
                    <h2 class="serif text-2xl text-emerald-950">Competition</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section6')
            </div>
        </div>

        <!-- SECTION 7: Trust Architecture -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">07</span>
                    <h2 class="serif text-2xl text-emerald-950">Infrastructure</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section7')
            </div>
        </div>

        <!-- SECTION 8: Final Lock -->
        <div class="accordion-item glass-card overflow-hidden">
            <button class="w-full p-8 flex items-center justify-between text-left focus:outline-none accordion-trigger">
                <div class="flex items-center gap-6">
                    <span class="text-3xl serif italic text-[#D4AF37]">08</span>
                    <h2 class="serif text-2xl text-emerald-950 font-black">Positioning Lock</h2>
                </div>
                <div class="accordion-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center transition-all">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>
            <div class="accordion-content">
                @include('qwell.contents.section8')
            </div>
        </div>

    </div>

    <!-- PENUTUP / CONCLUSION -->
    <section id="penutup" class="mt-20 animate-in">
        <div class="relative p-1 bg-[#D4AF37] rounded-[3.5rem] overflow-hidden shadow-2xl">
            <div class="bg-white rounded-[3.4rem] p-10 sm:p-20 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-2 h-full bg-[#0D2B2A]"></div>
                
                <h2 class="serif text-3xl md:text-5xl text-emerald-950 mb-10 ml-6 md:ml-20 italic flex items-center gap-3 md:gap-4">
        
                    <div class="w-12 h-12 ml-5 md:w-20 md:h-20 bg-[#0D2B2A] rounded-2xl flex items-center justify-center">
                        <img 
                            src="{{ asset('images/logo/qwell-logo.png') }}" 
                            alt="Q'WELL"
                            class="w-full h-full object-contain"
                        />
                    </div>

                    <span>Conclusion</span>
                </h2>

                
                <p class="max-w-4xl mx-auto text-xl text-gray-500 leading-relaxed font-medium mb-20">
                    Q’well does not compete in the aesthetic “glow” space. It operates in the domain of <span class="font-bold text-emerald-700">Biological Security Brand</span>, positioned as a structurally verified, dermatology-aligned system designed for calm stability. It serves the urban Indonesian consumer who prioritizes predictability, safety, and long-term resilience over experimentation.
                </p>
                
                
                <div class="p-4 bg-emerald-950 rounded-2xl text-center shadow-xl mx-auto w-72 sm:w-80" style="max-width:90vw;">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4AF37]">
                        STRATEGY APPROVED
                    </span>
                </div>

                <!-- <div class="grid lg:grid-cols-2 gap-16">
                    <div class="space-y-10">
                        <div>
                            <h4 class="text-xs font-black text-[#0D2B2A] uppercase tracking-widest mb-6 border-b pb-2">Execution Pulse (Next 90 Days)</h4>
                            <ul class="space-y-6">
                                <li class="flex gap-4">
                                    <span class="w-8 h-8 rounded-full bg-emerald-950 flex items-center justify-center text-white text-xs font-bold shrink-0">1</span>
                                    <p class="text-sm text-gray-600 font-medium">Finalize the batch-specific digital transparency hub (COA access portal).</p>
                                </li>
                                <li class="flex gap-4">
                                    <span class="w-8 h-8 rounded-full bg-emerald-950 flex items-center justify-center text-white text-xs font-bold shrink-0">2</span>
                                    <p class="text-sm text-gray-600 font-medium">Coordinate BPOM NIE registrations for Tier-1 Priority SKUs.</p>
                                </li>
                                <li class="flex gap-4">
                                    <span class="w-8 h-8 rounded-full bg-emerald-950 flex items-center justify-center text-white text-xs font-bold shrink-0">3</span>
                                    <p class="text-sm text-gray-600 font-medium">Launch the "Biological Security" messaging framework to selective retail partners.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-12 rounded-[3rem] border border-gray-100 flex flex-col justify-center">
                        <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-6">Decision Authority</h4>
                        <p class="text-lg text-[#0D2B2A] leading-relaxed italic mb-10 font-medium">
                            "Q’WELL positioning is now locked. We move forward not as a cosmetic brand, but as a system of <strong>structural reliability</strong> for the urban Indonesian consumer."
                        </p>
                        <div class="p-4 bg-emerald-950 rounded-2xl text-center shadow-xl">
                            <span class="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4AF37]">STRATEGY APPROVED</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
  </main>

  <!-- WORLD-CLASS FOOTER -->
  <footer class="bg-[#0D2B2A] text-white pt-24 pb-16 relative overflow-hidden">
      <div class="absolute inset-0 opacity-5 pointer-events-none">
          <svg width="100%" height="100%"><pattern id="grid-footer" width="80" height="80" patternUnits="userSpaceOnUse"><path d="M 80 0 L 0 0 0 80" fill="none" stroke="white" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-footer)" /></svg>
      </div>

      <div class="max-w-screen-2xl mx-auto px-6 relative z-10">
          <div class="grid lg:grid-cols-12 gap-16 mb-24">
              <!-- Identity -->
              <div class="lg:col-span-4 space-y-8">
                  <div class="flex items-center gap-5">
                      <img src="{{ asset('images/logo/app-logo.png') }}" alt="Rolin Logo"
                        class="w-8 h-8 object-contain"
                        style="aspect-ratio:1/1; display:block;"
                        />
                      <div>
                          <h2 class="text-3xl tracking-wide">ROLIN</h2>
                          <p class="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4AF37]">Strategic Intelligence Unit</p>
                      </div>
                  </div>
                  <p class="text-emerald-100/60 text-sm leading-relaxed max-w-sm">
                      Research focused on 2030 commercial durability through structural verification. Engineered for the Indonesian Urban Ecosystem.
                  </p>
              </div>

              <!-- Links -->
              <!-- <div class="lg:col-span-2">
                  <h4 class="text-[10px] font-black text-[#D4AF37] uppercase tracking-[0.3em] mb-8">Navigation</h4>
                  <ul class="space-y-4 text-xs font-bold text-emerald-100/50">
                      <li><a href="#section-0" class="hover:text-white transition-colors">Methodology</a></li>
                      <li><a href="#penutup" class="hover:text-white transition-colors">Final Conclusion</a></li>
                      <li><a class="hover:text-white transition-colors">PKJ</a></li>
                  </ul>
              </div> -->

              <!-- INTERACTIVE CARDS (HUB) -->
              <div class="lg:col-span-8 flex flex-col lg:flex-row gap-6 no-print justify-between">

                  <!-- EVIDENCE HUB BUTTON -->
                  <div class="flex-1 flex flex-col bg-white/5 p-8 rounded-[2.5rem] border border-white/10 relative hover-lift cursor-pointer group gold-glow items-center" onclick="openModal('source-modal')">
                      <div class="absolute -top-3 -right-3 bg-[#D4AF37] w-12 h-12 rounded-full flex items-center justify-center text-[#0D2B2A] font-bold shadow-lg transform group-hover:scale-110 transition-transform">
                          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                      </div>
                      <h4 class="text-[10px] font-black text-[#D4AF37] uppercase tracking-widest mb-3 mt-4">Source Hub</h4>
                      <p class="text-[11px] text-emerald-100 mb-6 font-bold">100+ Verified Citations</p>
                      <span class="text-[10px] font-black bg-white/10 px-4 py-2 rounded-full uppercase tracking-widest group-hover:bg-[#D4AF37] group-hover:text-[#0D2B2A] transition-all">Show All Sources</span>
                  </div>

                  <!-- CLAIM LIBRARY BUTTON -->
                  <div class="flex-1 flex flex-col bg-white/5 p-8 rounded-[2.5rem] border border-white/10 relative hover-lift cursor-pointer group gold-glow items-center mt-0 lg:mt-0">
                      <!-- <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10 relative hover-lift cursor-pointer group gold-glow" onclick="openModal('claim-modal')"> -->
                      <div class="absolute -top-3 -right-3 bg-white w-12 h-12 rounded-full flex items-center justify-center text-[#0D2B2A] font-bold shadow-lg transform group-hover:scale-110 transition-transform">
                          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                      </div>
                      <h4 class="text-[10px] font-black text-emerald-300 uppercase tracking-widest mb-3 mt-4">Claim Library</h4>
                      <p class="text-[11px] text-emerald-100 mb-6 font-bold">Digital Certificates & Dossiers</p>
                      <span class="text-[10px] font-black bg-white/10 px-4 py-2 rounded-full uppercase tracking-widest group-hover:bg-white group-hover:text-[#0D2B2A] transition-all">Verify Certificates</span>
                  </div>

                  <!-- Glossary BUTTON -->
                  <div class="flex-1 flex flex-col bg-white/5 p-10 rounded-[3rem] border border-white/10 relative hover-lift cursor-pointer group gold-glow items-center text-center mt-0 lg:mt-0">
                      <div class="absolute -top-3 -right-3 bg-[#D4AF37] w-12 h-12 rounded-full flex items-center justify-center text-[#0D2B2A] font-bold shadow-2xl transform group-hover:scale-110 transition-transform">
                          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5S19.832 5.477 21 6.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                      </div>
                      
                      <h4 class="text-[10px] font-black text-[#D4AF37] uppercase tracking-widest mb-3 mt-4">Glossary</h4>
                      <p class="text-[11px] text-emerald-100 mb-6 font-bold">List of Terminology</p>
                      <span class="text-[10px] font-black bg-white/10 px-4 py-2 rounded-full uppercase tracking-widest group-hover:bg-[#D4AF37] group-hover:text-[#0D2B2A] transition-all">View Glossary</span>
                  </div>
              </div>
              <style>
              @media (max-width: 1023px) {
                .lg\:col-span-8.flex {
                  flex-direction: column !important;
                }
                .lg\:col-span-8.flex > div[class*="flex-1"] {
                  width: 100%;
                  min-width: 0;
                }
              }
              </style>
          </div>

          <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
              <p class="text-[10px] font-black text-emerald-100/20 uppercase tracking-widest">CONFIDENTIAL • NOT FOR DISTRIBUTION </p>
              <p class="text-[10px] font-black text-[#D4AF37] uppercase tracking-[0.2em]">© 2026 PT ROLIN NUISEL NIAGA</p>
          </div>
      </div>
  </footer>

<!-- BACK TO TOP -->
    <button id="backToTop" onclick="scrollToTop()" class="fixed bottom-10 right-2.5 w-12 h-12 bg-[#D4AF37] text-[#0D2B2A] rounded-full shadow-2xl flex items-center justify-center no-print z-50 hover:bg-white transition-all" style="display: none;">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7"></path></svg>
    </button>
    <script>
      // Show back to top button when scrolling
      window.addEventListener('scroll', function() {
        const btn = document.getElementById('backToTop');
        if (!btn) return;
        if (window.scrollY > 30) {
          btn.style.display = 'flex';
        } else {
          btn.style.display = 'none';
        }
      });
    </script>

  <!-- MODAL: EVIDENCE HUB (SOURCES) -->
  <div id="source-modal" class="modal-overlay fixed inset-0 z-[100] flex items-center justify-center p-6 no-print">
      <div class="bg-white w-full max-w-5xl h-[85vh] rounded-[3.5rem] shadow-2xl overflow-hidden flex flex-col">
          <div class="p-10 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
              <div>
                  <h3 class="serif text-4xl text-emerald-950 italic">Strategic <span class="not-italic text-[#D4AF37]">Source</span> Hub</h3>
                  <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mt-2">Comprehensive Research Registry (S1–S8)</p>
              </div>
              <button onclick="closeModal('source-modal')" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-red-50 hover:text-red-600 transition-all">
                  <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
              </button>
          </div>
          @include('qwell.components.footer.source')
      </div>
  </div>

  <!-- MODAL: CLAIM LIBRARY (CERTIFICATES) -->
  <div id="claim-modal" class="modal-overlay fixed inset-0 z-[100] flex items-center justify-center p-6 no-print">
      <div class="bg-white w-full max-w-5xl h-[85vh] rounded-[3.5rem] shadow-2xl overflow-hidden flex flex-col">
          <div class="p-10 border-b border-gray-100 flex items-center justify-between bg-emerald-950 text-white">
              <div>
                  <h3 class="serif text-4xl italic">Claim <span class="not-italic text-[#D4AF37]">Library</span></h3>
                  <p class="text-[11px] font-black text-emerald-300 uppercase tracking-widest mt-2">Verified Laboratory Certificates & Registrations</p>
              </div>
              <button onclick="closeModal('claim-modal')" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-emerald-950 transition-all">
                  <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
              </button>
          </div>
          
          <div class="flex-grow overflow-y-auto p-12">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                  <!-- Certificate 1 -->
                  <div class="group cursor-pointer" onclick="showCert('HRIPT Certificate', 'Clinical Verification', 'S7-2026')">
                      <div class="aspect-[3/4] bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-6 hover:border-[#D4AF37] hover:bg-amber-50/30 transition-all text-center">
                          <svg width="40" height="40" fill="none" stroke="#D4AF37" stroke-width="1.5" viewBox="0 0 24 24" class="mb-4"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                          <p class="text-[10px] font-black text-emerald-950 uppercase mb-1">HRIPT Clinical Cert</p>
                          <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">Intl Lab Verified</p>
                      </div>
                  </div>
                  <!-- Certificate 2 -->
                  <div class="group cursor-pointer" onclick="showCert('BPOM NIE Approval', 'Regulatory Permit', 'REG-1094')">
                      <div class="aspect-[3/4] bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-6 hover:border-[#D4AF37] hover:bg-amber-50/30 transition-all text-center">
                          <svg width="40" height="40" fill="none" stroke="#D4AF37" stroke-width="1.5" viewBox="0 0 24 24" class="mb-4"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                          <p class="text-[10px] font-black text-emerald-950 uppercase mb-1">BPOM NIE Registry</p>
                          <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">ID Regulatory Base</p>
                      </div>
                  </div>
                  <!-- Certificate 3 -->
                  <div class="group cursor-pointer" onclick="showCert('Vegan Society Cert', 'Ethical Purity', 'VGN-004')">
                      <div class="aspect-[3/4] bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-6 hover:border-[#D4AF37] hover:bg-amber-50/30 transition-all text-center">
                          <svg width="40" height="40" fill="none" stroke="#D4AF37" stroke-width="1.5" viewBox="0 0 24 24" class="mb-4"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                          <p class="text-[10px] font-black text-emerald-950 uppercase mb-1">Vegan Certified</p>
                          <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">Purity Verification</p>
                      </div>
                  </div>
                  <!-- Certificate 4 -->
                  <div class="group cursor-pointer" onclick="showCert('Halal LPPOM-MUI', 'Religious Purity', 'HAL-2026')">
                      <div class="aspect-[3/4] bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-6 hover:border-[#D4AF37] hover:bg-amber-50/30 transition-all text-center">
                          <svg width="40" height="40" fill="none" stroke="#D4AF37" stroke-width="1.5" viewBox="0 0 24 24" class="mb-4"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                          <p class="text-[10px] font-black text-emerald-950 uppercase mb-1">Halal Strategy</p>
                          <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">2026 Readiness</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- CERTIFICATE IMAGE VIEWER (Sub-modal) -->
  <div id="cert-viewer" class="modal-overlay fixed inset-0 z-[110] flex items-center justify-center p-6 sm:p-12 no-print">
      <div class="relative bg-white w-full max-w-2xl max-h-[90vh] rounded-[3rem] shadow-2xl p-8 sm:p-16 flex flex-col items-center justify-center text-center overflow-hidden">
          <button onclick="closeViewer()" class="absolute top-6 right-6 sm:top-8 sm:right-8 w-10 h-10 sm:w-12 sm:h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 hover:text-red-600 transition-all z-10">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
          </button>
          
          <div class="w-full h-full border-[8px] sm:border-[16px] border-[#0D2B2A] rounded-2xl p-6 sm:p-12 flex flex-col items-center justify-between relative overflow-y-auto">
              <div class="absolute inset-0 opacity-5 pointer-events-none">
                  <svg width="100%" height="100%"><pattern id="grid-cert" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="black" stroke-width="0.5"/></pattern><rect width="100%" height="100%" fill="url(#grid-cert)" /></svg>
              </div>

              <div class="w-16 h-16 sm:w-20 sm:h-20 bg-[#D4AF37] rounded-full flex items-center justify-center text-[#0D2B2A] mb-4 shrink-0">
                  <svg width="32" height="32" sm:width="40" sm:height="40" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              
              <h2 class="serif text-xl sm:text-3xl text-emerald-950 uppercase tracking-widest font-bold" id="viewer-title">CERTIFICATE</h2>
              <div class="h-px w-16 sm:w-24 bg-emerald-950/20 my-4 sm:my-6"></div>
              <p class="text-[9px] sm:text-[10px] font-black text-gray-400 uppercase tracking-[0.3em] mb-3 sm:mb-4" id="viewer-type">VERIFICATION TYPE</p>
              <p class="text-xs sm:text-sm text-gray-500 leading-relaxed italic max-w-xs">This digital representation validates the structural proof of Q’WELL clinical claims for the 2026 Indonesian market entry.</p>
              
              <div class="mt-8 sm:mt-12 flex flex-col items-center gap-2">
                  <p class="text-[9px] sm:text-[10px] font-black text-emerald-900 uppercase">Serial Reference</p>
                  <p class="text-lg sm:text-xl font-black text-[#D4AF37] italic" id="viewer-ref">QW-000-000</p>
              </div>

              <div class="mt-8 sm:mt-auto pt-6 sm:pt-10 flex justify-between w-full text-[8px] font-black uppercase text-gray-400 tracking-widest border-t border-gray-100">
                  <span>Q'WELL SIU</span>
                  <span>BPOM 2026 REGISTERED</span>
              </div>
          </div>
      </div>
  </div>

  <!-- MODAL: GLOSSARY -->
  <div id="glossary-modal" class="modal-overlay fixed inset-0 z-[5000] flex items-center justify-center p-6 no-print">
      <div class="bg-white w-full max-w-5xl h-[85vh] rounded-[4rem] shadow-2xl overflow-hidden flex flex-col">
          <div class="p-10 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
              <div>
                  <h3 class="serif text-4xl text-emerald-950 italic">Strategic <span class="not-italic text-[#D4AF37]">Glossary</span></h3>
                  <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mt-2 uppercase">Terminology / Definitions</p>
              </div>
              <button onclick="closeModal('glossary-modal')" class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 hover:bg-red-50 hover:text-red-600 transition-all font-bold text-2xl">×</button>
          </div>
          <div class="flex-grow overflow-y-auto p-12 custom-scroll">
              <div class="grid md:grid-cols-2 gap-x-16 gap-y-12" id="glossary-grid">
                  <!-- JS Rendered -->
              </div>
          </div>
      </div>
  </div>

  <script>

    // GLOSSARY DATA
    const GLOSSARY_ITEMS = [
        { term: "Biological Debt", def: "Accumulated micro-damage to the skin and scalp barrier caused by aggressive products, extreme environmental exposure, or prolonged trial-and-error experimentation. Strategically, this explains why consumers become risk-averse and seek products that do not add new biological burdens." },
        { term: "Biological Security", def: "A care approach prioritizing the protection of fundamental biological functions (barrier stability, long-term tolerance) over instant aesthetic performance or trends." },
        { term: "PM2.5 Peaks (164 μg/m³)", def: "Extreme levels of fine particulate matter (≤2.5 micrometers) that penetrate the barrier to trigger oxidative inflammation. This characterizes the environmental pressure of urban Indonesia." },
        { term: "UV Index 11+", def: "The highest category of ultraviolet exposure risk. Chronic unprotected exposure accelerates barrier impairment and cutaneous sensitivity." },
        { term: "Claim Inflation", def: "The market phenomenon where generic claims (e.g., 'natural', 'gentle') are used without structural verification depth, leading to market confusion and trust erosion." },
        { term: "Pre-Market Vetting", def: "The rigorous evaluation process of claims, formulations, and proof nodes before commercial release to ensure regulatory and communication consistency." },
        { term: "Risk Assessment Dossier (RAD)", def: "A comprehensive document consolidating safety, stability, and regulatory data to mitigate legal and reputational risks." },
        { term: "Malassezia Overgrowth", def: "Excessive proliferation of Malassezia yeast on the scalp or body, triggered by incompatible formulations, causing irritation and inflammation." },
        { term: "TEWL (Transepidermal Water Loss)", def: "A clinical measurement of water loss through the epidermis; high values indicate a compromised or unstable barrier." },
        { term: "Non-Maleficence", def: "The ethical principle of 'Doing No Harm.' In cosmetics, ensuring performance claims do not compromise long-term skin health." },
        { term: "Negative Social Ripple", def: "The chain of social consequences following product failure (e.g., severe breakouts) affecting a consumer's confidence and social interactions." },
        { term: "Barrier Impairment", def: "Damage to the natural protective function of the skin or scalp due to over-exfoliation, harsh surfactants, or environmental hostility." },
        { term: "Dermatology-Aligned", def: "An approach strictly consistent with clinical dermatological principles, transcending superficial marketing claims." },
        { term: "Verification Depth", def: "The intensity of evidence supporting a claim, ranging from simple icons to specific test protocols and published summary results." },
        { term: "Substitutability", def: "The level of structural equivalence between two brands regarding price, verification density, and risk profile." },
        { term: "Risk-Averse Consumer", def: "A segment that avoids experimentation, prioritizing safety, consistency, and proven reliability over viral trends." },
        { term: "Stability System", def: "A range of formulations and usage disciplines designed to maintain optimal skin conditions over the long term." },
        { term: "Price–Proof Logic", def: "The strategic correlation between price points and the depth of verification/risk mitigation provided by the brand." },
        { term: "Biological Minimalism", def: "A formulation philosophy that limits ingredient complexity to reduce the cumulative risk of irritation." },
        { term: "Calm Stability Positioning", def: "A strategic direction prioritizing safety, long-term trust, and consistency over sensation or trend-chasing." }
    ];

    // INITIALIZATION
    window.onload = () => {
        const grid = document.getElementById('glossary-grid');
        grid.innerHTML = GLOSSARY_ITEMS.map(item => `
            <div class="space-y-3 p-6 rounded-3xl bg-gray-50 border border-gray-100 hover:bg-white transition-all group">
                <h5 class="text-sm font-black text-[#0D2B2A] uppercase tracking-widest group-hover:text-[#D4AF37] transition-colors">${item.term}</h5>
                <p class="text-xs text-gray-500 leading-relaxed font-medium">${item.def}</p>
            </div>
        `).join('');
    };
    
    // ---------- PASSWORD PROTECTION ----------
    function checkPassword() {
        const input = document.getElementById('access-password');
        const error = document.getElementById('password-error');
        const modal = document.getElementById('password-modal');
        const body = document.body;
        
        if (input.value === 'nutrify1ndonesia') {
            modal.classList.remove('active');
            body.classList.remove('locked');
            // Store accessibility in session if needed, for simplicity we just hide it now
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        } else {
            error.classList.remove('opacity-0');
            input.value = '';
            input.focus(); // Auto-focus on wrong password
            input.classList.add('border-red-500');
            setTimeout(() => {
                input.classList.remove('border-red-500');
            }, 500);
        }
    }

    // Allow "Enter" key for password
    document.getElementById('access-password')?.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            checkPassword();
        }
    });

    // Auto-focus on Page Load
    document.addEventListener('DOMContentLoaded', () => {
        const passwordInput = document.getElementById('access-password');
        if (passwordInput) {
            setTimeout(() => {
                passwordInput.focus();
            }, 500); // Small delay to ensure modal is ready
        }
    });

    function openModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';

        // Close on background click
        if (!modal.dataset.listenerAdded) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal(id);
                }
            });
            modal.dataset.listenerAdded = "true";
        }
    }
    function closeModal(id) {
        document.getElementById(id).classList.remove('open');
        document.body.style.overflow = 'auto';
    }

    // Certificate Viewer
    function showCert(title, type, ref) {
        const modal = document.getElementById('cert-viewer');
        document.getElementById('viewer-title').textContent = title;
        document.getElementById('viewer-type').textContent = type;
        document.getElementById('viewer-ref').textContent = ref;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';

        // Close on background click (Sub-modal)
        if (!modal.dataset.listenerAdded) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeViewer();
                }
            });
            modal.dataset.listenerAdded = "true";
        }
    }
    function closeViewer() {
        document.getElementById('cert-viewer').classList.remove('open');
        // Only return scroll if NO other modals are open
        if (!document.querySelector('.modal-overlay.open')) {
            document.body.style.overflow = 'auto';
        }
    }
    // ---------- ANIMATION LOGIC (Mirrored from custom.js) ----------

    function hideSection(content) {
        content.style.overflow = 'hidden';
        content.style.transition = 'max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease-in';
        content.style.maxHeight = '0';
        content.style.opacity = '0';
        
        setTimeout(() => {
            if (content.style.maxHeight === '0px' || content.style.maxHeight === '0') {
                content.style.display = 'none';
            }
        }, 500);
    }

    function showSection(content) {
        content.style.display = 'block';
        content.style.overflow = 'hidden';
        content.style.maxHeight = '0';
        content.style.opacity = '0';
        void content.offsetWidth;
        
        const targetHeight = content.scrollHeight + 'px';
        content.style.transition = 'max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s ease-out';
        content.style.maxHeight = targetHeight;
        content.style.opacity = '1';
        
        setTimeout(() => {
            if (content.style.opacity === '1') {
                content.style.maxHeight = 'none';
                content.style.overflow = 'visible';
            }
        }, 500);
    }

    // Initialize state
    document.addEventListener('DOMContentLoaded', () => {
        // Hide all initially
        document.querySelectorAll('.accordion-content').forEach(el => {
            el.style.display = 'none';
            el.style.maxHeight = '0';
            el.style.opacity = '0';
        });

        // No default open section - all start closed
    });

    document.querySelectorAll('.accordion-trigger').forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            const item = trigger.parentElement;
            const content = item.querySelector('.accordion-content');
            const isOpen = item.classList.contains('active');

            // 2. Toggle Logic
            if (isOpen) {
                // If already open, just close it
                item.classList.remove('active');
                hideSection(content);
            } else {
                // 1. Close ALL other sections
                let hasOtherOpen = false;
                document.querySelectorAll('.accordion-item').forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        hasOtherOpen = true;
                        otherItem.classList.remove('active');
                        hideSection(otherItem.querySelector('.accordion-content')); 
                    }
                });

                // 2. IMMEDIATE SCROLL TRACKING
                // By starting the scroll now, the browser anchors to the item
                // and follows it as it moves UP (while others above it close).
                // This prevents the "jump to footer" because we never lose the target.
                item.scrollIntoView({ behavior: 'smooth', block: 'start' });

                // 3. Sequential Opening
                // We still wait for the closure to finish to keep it "tidy"/not hurried.
                const waitForClose = hasOtherOpen ? 500 : 0;

                setTimeout(() => {
                    // Re-scroll just in case to ensure perfect alignment after layout shift
                    item.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    
                    setTimeout(() => {
                        item.classList.add('active');
                        showSection(content);
                    }, 50);
                }, waitForClose);
            }
        });
    });
    
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Progress Bar Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById("progress-bar").style.width = scrolled + "%";
    });
  </script>
</body>
</html>