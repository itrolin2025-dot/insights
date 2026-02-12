
<style>
    /* Section 7 Scoped Theme */
    .sec7-wrapper {
        --s7-primary: #65BDAD;
        --s7-accent: #FFCC97;
        --s7-bg1: #CAF1EB;
        --s7-bg2: #FFEBDA;
        --s7-ink: #1f2a2b;
        --s7-muted: #516064;
        --s7-card: #ffffff;
        --s7-border: rgba(0,0,0,.08);
        --s7-shadow: 0 10px 30px rgba(0,0,0,.06);
        --s7-radius: 18px;

        font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        color: var(--s7-ink);
        background: linear-gradient(180deg, var(--s7-bg1), #eaf8f5 40%, #f7fbfa);
        min-height: 100vh;
        position: relative;
        isolation: isolate;
        padding-bottom: 60px;
    }

    .sec7-wrapper * { box-sizing: border-box; }

    .sec7-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 28px 20px 60px;
    }

    /* Brand Header */
    .sec7-header {
        margin-bottom: 24px;
    }
    .sec7-header h1 { margin: 0; font-size: 30px; letter-spacing: -0.02em; }
    .sec7-subtitle { margin: 6px 0 0; color: var(--s7-muted); max-width: 720px; line-height: 1.55; }
    .sec7-kicker { font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase; color: var(--s7-muted); margin-bottom: 4px; }

    /* Navigation */
    .sec7-nav-wrap {
        position: sticky;
        top: 70px; 
        z-index: 40;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(8px);
        margin: 0 -20px 24px;
        padding: 12px 20px;
        border-bottom: 1px solid var(--s7-border);
    }
    .sec7-nav {
        display: flex;
        gap: 8px;
        align-items: center;
        overflow-x: auto;
        scrollbar-width: none;
    }
    .sec7-nav::-webkit-scrollbar { display: none; }

    .sec7-tab {
        white-space: nowrap;
        border: 1px solid var(--s7-border);
        background: rgba(255,255,255,.8);
        padding: 9px 16px;
        border-radius: 999px;
        font-weight: 650;
        font-size: 13px;
        color: var(--s7-muted);
        cursor: pointer;
        user-select: none;
        transition: 0.2s;
    }
    .sec7-tab:hover { transform: translateY(-1px); background: #fff; }
    .sec7-tab.active {
        background: var(--s7-primary);
        color: white;
        border-color: transparent;
        box-shadow: 0 4px 12px rgba(101,189,173,0.25);
    }

    /* Mobile Controls */
    .sec7-mobile-bar {
        display: none;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        padding: 12px 16px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid var(--s7-border);
    }
    .sec7-burger {
        width: 38px; height: 38px;
        display: flex; align-items: center; justify-content: center;
        background: var(--s7-bg1);
        color: var(--s7-ink);
        border-radius: 8px;
        cursor: pointer;
    }

    @media (max-width: 960px) {
        .sec7-nav-wrap {
            display: none; /* Hidden on mobile, shown via burger */
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255,255,255,0.98);
            margin: 0;
            padding: 80px 20px 20px;
            flex-direction: column;
            z-index: 2000;
        }
        .sec7-nav-wrap.open { display: flex; }
        .sec7-nav { flex-direction: column; width: 100%; gap: 14px; }
        .sec7-tab { width: 100%; text-align: center; padding: 14px; font-size: 16px; }
        .sec7-mobile-bar { display: flex; }
        
        .sec7-close-nav {
            position: absolute;
            top: 24px; right: 24px;
            font-size: 28px;
            cursor: pointer;
            color: var(--s7-muted);
        }
    }

    /* Layout */
    .sec7-grid { display: grid; grid-template-columns: repeat(12, 1fr); gap: 14px; }
    .sec7-card {
        background: var(--s7-card);
        border: 1px solid var(--s7-border);
        border-radius: var(--s7-radius);
        box-shadow: var(--s7-shadow);
        padding: 18px;
    }
    .sec7-card h2 { margin: 0 0 12px; font-size: 14px; letter-spacing: .08em; text-transform: uppercase; color: var(--s7-muted); }
    .sec7-card h3 { margin: 0 0 10px; font-size: 16px; font-weight: 700; }
    
    .sec7-split { display: grid; grid-template-columns: 1.1fr .9fr; gap: 18px; }
    @media (max-width: 960px){ .sec7-split { grid-template-columns: 1fr; } }

    .sec7-mini { font-size: 13px; color: var(--s7-muted); line-height: 1.55; }
    .sec7-hr { height: 1px; background: var(--s7-border); margin: 14px 0; }
    .sec7-hidden { display: none !important; }

    /* Components */
    .sec7-kpis { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; }
    .sec7-kpi {
        background: linear-gradient(180deg, rgba(202,241,235,.55), rgba(255,255,255,.9));
        border: 1px solid var(--s7-border);
        border-radius: 16px;
        padding: 12px 14px;
    }
    .sec7-kpi .v { font-size: 19px; font-weight: 800; letter-spacing: -0.02em; color: var(--s7-ink); }
    .sec7-kpi .l { font-size: 11px; color: var(--s7-muted); margin-top: 4px; font-weight: 600; text-transform: uppercase; }
    @media (max-width: 600px) { .sec7-kpis { grid-template-columns: 1fr 1fr; } }

    .sec7-badges { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 12px; }
    .sec7-badge {
        font-size: 12px; font-weight: 650; color: var(--s7-ink);
        border: 1px solid var(--s7-border);
        background: rgba(255,235,218,.75);
        padding: 6px 12px; border-radius: 999px;
    }
    .sec7-badge.green { background: rgba(202,241,235,.75); }

    .sec7-btn {
        border: 1px solid var(--s7-border);
        background: rgba(255,255,255,.9);
        padding: 10px 14px; border-radius: 12px;
        cursor: pointer; font-weight: 650; font-size: 13px;
        transition: 0.2s;
    }
    .sec7-btn.primary { background: var(--s7-primary); color: #fff; border-color: transparent; }
    .sec7-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.05); }

    .sec7-note {
        border-left: 4px solid var(--s7-accent);
        background: rgba(255,235,218,.45);
        padding: 16px; border-radius: 12px;
        font-size: 13px; color: var(--s7-muted); line-height: 1.6;
    }

    .sec7-canvas-wrap { height: 320px; position: relative; width: 100%; }
    .sec7-table-wrap { overflow-x: auto; border: 1px solid var(--s7-border); border-radius: 16px; }
    
    table.sec7-table { border-collapse: separate; border-spacing: 0; width: 100%; min-width: 800px; background: white; }
    table.sec7-table th {
        position: sticky; top: 0; z-index: 2;
        background: linear-gradient(180deg,#ffffff,#fbfdfd);
        border-bottom: 1px solid var(--s7-border);
        font-size: 12px; color: var(--s7-muted); letter-spacing: .08em; text-transform: uppercase;
        padding: 12px 14px; text-align: left;
    }
    table.sec7-table td {
        border-bottom: 1px solid rgba(0,0,0,.06);
        padding: 12px 14px; font-size: 13px; color: var(--s7-ink); vertical-align: top;
    }
    .sec7-sticky-col { position: sticky; left: 0; z-index: 1; background: white; border-right: 1px solid var(--s7-border); box-shadow: 4px 0 12px rgba(0,0,0,0.04); }

    /* Modal */
    .sec7-backdrop {
        position: fixed; inset: 0; background: rgba(0,0,0,.4);
        backdrop-filter: blur(4px);
        display: flex; align-items: center; justify-content: center;
        padding: 20px; z-index: 9999;
        opacity: 0; pointer-events: none; transition: opacity 0.2s;
    }
    .sec7-backdrop.open { opacity: 1; pointer-events: auto; }
    
    .sec7-modal {
        width: min(800px, 100%);
        background: white; border: 1px solid var(--s7-border);
        border-radius: 24px; box-shadow: 0 24px 80px rgba(0,0,0,.22);
        overflow: hidden; transform: scale(0.95); transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex; flex-direction: column; max-height: 85vh;
    }
    .sec7-backdrop.open .sec7-modal { transform: scale(1); }

    .sec7-modal-header {
        display: flex; justify-content: space-between; align-items: center;
        padding: 16px 24px; background: #fff; border-bottom: 1px solid var(--s7-border);
    }
    .sec7-modal-content { padding: 24px; overflow-y: auto; }
    .sec7-modal-content ul { margin: 0; padding-left: 20px; }
    .sec7-modal-content li { margin-bottom: 8px; line-height: 1.5; }
    .sec7-modal-content a { color: var(--s7-primary); text-decoration: none; font-weight: 600; }
    .sec7-modal-content a:hover { text-decoration: underline; }
</style>

<div class="sec7-wrapper">
<div class="sec7-container">

    <!-- Header -->
    <div class="sec7-header">
        <!-- <div class="sec7-kicker">Section 7</div>
        <h1>Proof Architecture & Verification</h1>
        <p class="sec7-subtitle">
            Defining the verification standards and structural proof signals needed to justify premium safety-led positioning in the Indonesia market.
        </p> -->
    </div>

    <!-- Mobile Burger Bar (Above Content) -->
    <div class="sec7-mobile-bar">
        <!-- <div style="font-weight: 700; color: var(--s7-ink);">SECTION 7 MENU</div> -->
        <div class="sec7-burger" id="sec7_burger">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </div>
    </div>

    <!-- Nav (Horizontal Desktop, Drawer Mobile) -->
    <div class="sec7-nav-wrap" id="sec7_nav_wrap" style="border-radius:18px; padding:30px 24px 24px 24px; margin-bottom: 32px;">
        <div class="sec7-nav">
            <div class="sec7-tab active" data-view="overview">Overview</div>
            <div class="sec7-tab" data-view="calibration">Competitive Calibration</div>
            <div class="sec7-tab" data-view="pyramid">Testing Pyramid</div>
            <div class="sec7-tab" data-view="stack">Proof Stack</div>
            <div class="sec7-tab" data-view="transparency">Transparency</div>
            <div class="sec7-tab" data-view="sources">Sources</div>
        </div>
    </div>

    <!-- CONTENT VIEWS -->
    
    <!-- OVERVIEW -->
    <section id="sec7_view_overview" class="sec7-view">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Executive takeaway</h2>
                <div class="sec7-split">
                    <div>
                        <div class="sec7-kpis">
                            <div class="sec7-kpi"><div class="v">Low-Trust</div><div class="l">DEFAULT STANCE</div></div>
                            <div class="sec7-kpi"><div class="v">High-Proof</div><div class="l">DEMANDED CUE</div></div>
                            <div class="sec7-kpi"><div class="v">Premium</div><div class="l">PRICE ANCHOR</div></div>
                            <div class="sec7-kpi"><div class="v">Defensible</div><div class="l">SUBSTITUTE GAP</div></div>
                        </div>
                        <div class="sec7-badges">
                            <span class="sec7-badge green">BPOM legality is a gate — not a differentiator</span>
                            <span class="sec7-badge">HRIPT + named lab = credibility lift</span>
                            <span class="sec7-badge green">Transparency converts skepticism into trust</span>
                        </div>
                        <div class="sec7-hr"></div>
                        <p class="sec7-mini">
                            This section defines the proof layers needed to justify a safety-led premium position.
                            After the Section 6 correction, the benchmark is no longer “all brands” — it is the
                            <b>premium natural / sensitive-claim competitors</b> that are plausible substitutes.
                        </p>
                    </div>
                    <div class="sec7-note">
                        <b>Recalibration note (Section 6)</b><br/>
                        The competitor set is now constrained to brands that compete on <i>natural</i>, <i>sensitive skin</i>, and <i>dermatology</i> signals.
                        Therefore, the proof architecture must be built to:
                        <ol style="margin:8px 0 0 18px;padding:0">
                            <li>Outrank <b>surface-level</b> claims (claim inflation)</li>
                            <li>Differentiate from <b>semi-specific</b> “tested” wording</li>
                            <li>Stand shoulder-to-shoulder with <b>structural</b> proof in the premium tier</li>
                        </ol>
                        <div class="sec7-hr"></div>
                        <div style="display:flex; gap:10px;" hidden>
                            <button class="sec7-btn primary" onclick="sec7_openSources('core')" hidden>Key regulatory sources</button>
                            <button class="sec7-btn" onclick="sec7_switchView('calibration')" hidden>Go to Calibration</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec7-card" style="grid-column: span 7;">
                <h2>What “proof” must do</h2>
                <p class="sec7-mini">
                    Proof is not marketing decoration. It is a <b>risk-management system</b> that reduces biological harm probability, reduces reputational exposure,
                    and creates price confidence. In Indonesia’s current environment, consumers reward brands that:
                </p>
                <ul class="sec7-mini" style="margin:10px 0 0 18px">
                    <li>Provide <b>verifiable truth</b> (traceable claims)</li>
                    <li>Reduce “trial-and-error” anxiety (routine safety)</li>
                    <li>Demonstrate humility (no medical overclaims)</li>
                    <li>Offer clarity without information overload</li>
                </ul>
            </div>

            <div class="sec7-card" style="grid-column: span 5;">
                <h2>Decision checklist</h2>
                <div class="sec7-mini">
                    Lock these commitments (they become your proof ceiling):
                    <div class="sec7-hr"></div>
                    <ul style="margin:0 0 0 18px">
                        <li><b>Named lab disclosure:</b> Yes (already decided)</li>
                        <li><b>Publish test summary:</b> recommended (short, digestible)</li>
                        <li><b>Explain HRIPT protocol:</b> recommended (one-page decoding)</li>
                        <li><b>Halal pathway:</b> committed (timeline + proof)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CALIBRATION -->
    <section id="sec7_view_calibration" class="sec7-view sec7-hidden">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Competitive calibration (Updated Section 6)</h2>
                <div class="sec7-split">
                    <div>
                        <h3>Claim tiers vs proof tiers</h3>
                        <p class="sec7-mini">
                            This dashboard assumes Section 6 now focuses on <b>premium natural competitors</b>.
                            Use this view to explain to the owner why “same wording” does not mean “same infrastructure.”
                        </p>
                        <div class="sec7-canvas-wrap">
                            <canvas id="sec7_calibrationChart"></canvas>
                        </div>
                        <div style="display:flex; gap:10px; margin-top:10px">
                            <button class="sec7-btn" onclick="sec7_openSources('claims')">Claim & labeling sources</button>
                            <button class="sec7-btn" onclick="sec7_openSources('testing')">HRIPT/testing sources</button>
                        </div>
                    </div>
                    <div>
                        <div class="sec7-note">
                            <b>How to read this</b><br/>
                            <ul style="margin:8px 0 0 18px">
                                <li><b>Surface-level</b>: generic “natural / gentle” wording, little disclosure</li>
                                <li><b>Semi-specific</b>: “dermatologically tested” without lab/protocol detail</li>
                                <li><b>Structural</b>: test type + lab/protocol/cert body disclosed</li>
                            </ul>
                            <div class="sec7-hr"></div>
                            <b>Owner objection handler</b><br/>
                            When comparing to cheap “natural” brands, the correct response is:
                            “They sell <i>wording</i>; we sell <i>verification</i>.”
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Proof signal library (what “structural” looks like)</h2>
                <div class="sec7-table-wrap">
                    <table class="sec7-table">
                        <thead>
                            <tr>
                                <th class="sec7-sticky-col">Signal</th>
                                <th>What it proves</th>
                                <th>Typical disclosure</th>
                                <th>Common failure mode</th>
                                <th>Owner-friendly explanation</th>
                            </tr>
                        </thead>
                        <tbody id="sec7_signalRows"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- PYRAMID -->
    <section id="sec7_view_pyramid" class="sec7-view sec7-hidden">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Testing pyramid</h2>
                <div class="sec7-split">
                    <div>
                        <h3>From legality → safety → credibility</h3>
                        <p class="sec7-mini">
                            In a premium safety-led strategy, testing is staged. The key is to communicate the right layer
                            to the right consumer maturity level, without implying medical treatment.
                        </p>
                        <div class="sec7-canvas-wrap">
                            <canvas id="sec7_pyramidChart"></canvas>
                        </div>
                        <div style="display:flex; gap:10px; margin-top:10px">
                            <button class="sec7-btn" onclick="sec7_openSources('reg')">Regulatory sources</button>
                            <button class="sec7-btn" onclick="sec7_openSources('testing')">Testing sources</button>
                        </div>
                    </div>
                    <div class="sec7-note">
                        <b>Key rule:</b><br/>
                        BPOM NA is a consider-gate. It doesn’t win trust on its own.<br/><br/>
                        <b>Premium win condition:</b><br/>
                        “Named lab + HRIPT per SKU” creates a clear gap vs semi-specific competitors.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STACK -->
    <section id="sec7_view_stack" class="sec7-view sec7-hidden">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Layered proof stack</h2>
                <div class="sec7-split">
                    <div>
                        <h3>Five layers (what each layer does)</h3>
                        <div id="sec7_stackCards"></div>
                    </div>
                    <div class="sec7-note">
                        <b>Alignment to updated Section 6</b><br/>
                        Your proof architecture must beat:
                        <ul style="margin:8px 0 0 18px">
                            <li>Surface-level natural competitors (claim inflation)</li>
                            <li>Semi-specific “tested” brands (no disclosure)</li>
                            <li>Premium natural substitutes (your real benchmark)</li>
                        </ul>
                        <div class="sec7-hr"></div>
                        <b>Operational implication</b><br/>
                        Proof is a process system: documentation, repeatability, and controlled claims.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPARENCY -->
    <section id="sec7_view_transparency" class="sec7-view sec7-hidden">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Transparency threshold</h2>
                <div class="sec7-split">
                    <div>
                        <h3>Disclosure without overload</h3>
                        <p class="sec7-mini">
                            The goal is to publish enough proof to convert skepticism into calm.
                            Use “short proof summaries” + “optional deep links” rather than long PDFs as the default view.
                        </p>
                        <div class="sec7-canvas-wrap">
                            <canvas id="sec7_transparencyChart"></canvas>
                        </div>
                        <div style="display:flex; gap:10px; margin-top:10px">
                            <button class="sec7-btn" onclick="sec7_openSources('trust')">Trust & consumer evaluation</button>
                        </div>
                    </div>
                    <div class="sec7-note">
                        <b>Recommended “calm transparency” package</b><br/>
                        <ul style="margin:8px 0 0 18px">
                            <li>Named lab (already: Yes)</li>
                            <li>Test summary per SKU (1 page)</li>
                            <li>HRIPT explained in plain language (1 page)</li>
                            <li>Halal status & timeline (clear)</li>
                            <li>BPOM NA + QR verification (easy)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOURCES -->
    <section id="sec7_view_sources" class="sec7-view sec7-hidden">
        <div class="sec7-grid">
            <div class="sec7-card" style="grid-column: span 12;">
                <h2>Sources used in this dashboard</h2>
                <div class="sec7-table-wrap">
                    <table class="sec7-table">
                        <thead>
                            <tr>
                                <th class="sec7-sticky-col">Category</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody id="sec7_sourceTableRows"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>
</div>

<!-- Modal (Scoped) -->
<div id="sec7_backdrop" class="sec7-backdrop">
    <div class="sec7-modal">
        <div class="sec7-modal-header">
            <h4 style="margin:0; font-size:16px; font-weight:700;">Sources</h4>
            <button class="sec7-btn" onclick="sec7_closeModal()">Close</button>
        </div>
        <div class="sec7-modal-content" id="sec7_modal_body"></div>
    </div>
</div>

<script>
(function(){
    // --- DATA ---
    const S7_SOURCES = {
        core: [
            {label:"BPOM Regulation No. 3/2022 (PDF)", url:"https://standar-otskk.pom.go.id/storage/uploads/9fafd640-6c8b-4853-ae1f-9a2f9255db46/PerBPOM-No.-3-tahun-2022.pdf"},
            {label:"CIRS: Reg 18/2024 enforcement", url:"https://www.cirs-group.com/en/cosmetics/indonesia-new-requirements-on-cosmetic-labeling-promotion-and-advertising-now-in-effect-full-enforcement-begins-november-2025"},
            {label:"ARMA Law: BPOM Reg 18/2024", url:"https://www.arma-law.com/news-event/newsflash/new-requirements-for-cosmetic-labeling-promotion-and-advertising-bpom-18-2024"}
        ],
        reg: [
            {label:"CIRS: Reg 18/2024 Labeling", url:"#"},
            {label:"ARMA Law Overview", url:"#"}
        ],
        claims: [
            {label:"BPOM Claims Reg 3/2022", url:"#"},
            {label:"Prolegal: Ketentuan Klaim Kosmetik", url:"#"}
        ],
        testing: [
            {label:"ALS Global: HRIPT Study", url:"#"},
            {label:"CPTC Labs: HRIPT Panels", url:"#"},
            {label:"Skinproof Claim Support", url:"#"}
        ],
        trust: [
            {label:"Populix: Indonesia Trust", url:"#"}
        ]
    };

    const S7_SIGNALS = [
        {signal:"HRIPT per SKU", proves:"Sensitization screening", disclosure:"Named panel size + summary", failure:"“Dermatologically tested” w/o details", explain:"Different risk control."},
        {signal:"Named laboratory", proves:"Accountability", disclosure:"Lab name + country", failure:"No lab mentioned", explain:"If nobody is named, nobody is accountable."},
        {signal:"BPOM NA + QR", proves:"Legal verification", disclosure:"NA Code + QR", failure:"NA missing", explain:"Baseline legality."},
        {signal:"Certifications", proves:"Audit-backed claims", disclosure:"Body name + license", failure:"Logo usage without registry", explain:"Traceable certification."},
        {signal:"Test summary", proves:"Transparency", disclosure:"1-page summary", failure:"PDF overload", explain:"Clarity beats volume."}
    ];

    const S7_STACK = [
        {title:"Layer 1 — Regulatory Foundation", role:"Legality + disclosure", how:"BPOM NA, INCI correctness, Reg 18/2024."},
        {title:"Layer 2 — Advanced Safety", role:"Non-maleficence", how:"HRIPT per SKU; sensitive-skin panel."},
        {title:"Layer 3 — Certification & Traceability", role:"Audit-backed", how:"Halal, Vegan, with named bodies."},
        {title:"Layer 4 — Transparency", role:"Skepticism conversion", how:"Short summaries, named labs, plain decoding."},
        {title:"Layer 5 — Authority", role:"Credibility", how:"Education, not medical claims."}
    ];

    // --- UI LOGIC ---
    window.sec7_switchView = function(viewId) {
        document.querySelectorAll('.sec7-tab').forEach(t => {
            t.classList.toggle('active', t.getAttribute('data-view') === viewId);
        });
        document.querySelectorAll('.sec7-view').forEach(v => {
            v.classList.toggle('sec7-hidden', v.id !== `sec7_view_${viewId}`);
        });
        
        // Close mobile nav if open
        const navWrap = document.getElementById('sec7_nav_wrap');
        if(navWrap.classList.contains('open')) navWrap.classList.remove('open');
    };

    document.querySelectorAll('.sec7-tab').forEach(t => {
        t.addEventListener('click', () => sec7_switchView(t.getAttribute('data-view')));
    });

    // Mobile Burger
    const burger = document.getElementById('sec7_burger');
    const closeNav = document.getElementById('sec7_close_nav');
    const navWrap = document.getElementById('sec7_nav_wrap');
    
    burger?.addEventListener('click', () => navWrap.classList.add('open'));
    closeNav?.addEventListener('click', () => navWrap.classList.remove('open'));

    // Modal
    window.sec7_openSources = function(key) {
        const list = S7_SOURCES[key] || [];
        const body = document.getElementById('sec7_modal_body');
        body.innerHTML = list.length 
            ? `<ul>${list.map(s => `<li><a href="${s.url}" target="_blank">${s.label}</a></li>`).join('')}</ul>`
            : '<p class="sec7-mini">No sources.</p>';
        document.getElementById('sec7_backdrop').classList.add('open');
    };

    window.sec7_closeModal = function() {
        document.getElementById('sec7_backdrop').classList.remove('open');
    };

    // --- RENDER TABLES ---
    document.getElementById('sec7_signalRows').innerHTML = S7_SIGNALS.map(r => `
        <tr>
            <td class="sec7-sticky-col"><b>${r.signal}</b></td>
            <td>${r.proves}</td>
            <td>${r.disclosure}</td>
            <td>${r.failure}</td>
            <td>${r.explain}</td>
        </tr>
    `).join('');

    document.getElementById('sec7_stackCards').innerHTML = S7_STACK.map(s => `
        <div class="sec7-card" style="box-shadow:none; border-style:dashed; margin-bottom:12px;">
            <h3>${s.title}</h3>
            <div class="sec7-mini"><b>Role:</b> ${s.role}</div>
            <div class="sec7-mini" style="margin-top:4px;"><b>How:</b> ${s.how}</div>
        </div>
    `).join('');
    
    const srcTable = document.getElementById('sec7_sourceTableRows');
    for (const [k, list] of Object.entries(S7_SOURCES)) {
        srcTable.insertAdjacentHTML('beforeend', `
            <tr>
                <td class="sec7-sticky-col" style="text-transform:uppercase; font-weight:700;">${k}</td>
                <td><ul>${list.map(i=>`<li><a href="${i.url}" target="_blank">${i.label}</a></li>`).join('')}</ul></td>
            </tr>
        `);
    }

    // --- CHARTS ---
    function initCharts() {
        if(typeof Chart === 'undefined') return;
        
        Chart.defaults.font.family = "ui-sans-serif, system-ui, sans-serif";
        Chart.defaults.color = "#1f2a2b";

        const ctxCal = document.getElementById('sec7_calibrationChart');
        if(ctxCal) new Chart(ctxCal, {
            type: 'bar',
            data: {
                labels: ['Mass','Upper-Mass','Premium'],
                datasets: [
                    {label:'Surface Claims', data:[78,58,22], backgroundColor:'#FFCC97', borderRadius:6},
                    {label:'Semi-Specific', data:[18,28,48], backgroundColor:'#CAF1EB', borderRadius:6},
                    {label:'Structural Proof', data:[4,14,30], backgroundColor:'#65BDAD', borderRadius:6}
                ]
            },
            options: { responsive:true, maintainAspectRatio:false, scales:{y:{beginAtZero:true, stacked:true}, x:{stacked:true}} }
        });

        const ctxPyr = document.getElementById('sec7_pyramidChart');
        if(ctxPyr) new Chart(ctxPyr, {
            type: 'bar',
            data: {
                labels: ['Legal','Safety','Clinical'],
                datasets: [{label:'Complexity', data:[2, 4.2, 4.8], backgroundColor:['#CAF1EB','#FFCC97','#65BDAD'], borderRadius:8}]
            },
            options: { responsive:true, maintainAspectRatio:false, scales:{y:{beginAtZero:true, max:5}} }
        });

        const ctxTrans = document.getElementById('sec7_transparencyChart');
        if(ctxTrans) new Chart(ctxTrans, {
            type: 'line',
            data: {
                labels: ['Generic','Named Lab','Full Summary'],
                datasets: [{label:'Trust Index', data:[1.2, 3.5, 4.8], borderColor:'#65BDAD', backgroundColor:'rgba(101,189,173,0.1)', fill:true, tension:0.3}]
            },
            options: { responsive:true, maintainAspectRatio:false, scales:{y:{beginAtZero:true, max:5}} }
        });
    }

    // Load Charts
    if(document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCharts);
    } else {
        initCharts();
    }
})();
</script>
