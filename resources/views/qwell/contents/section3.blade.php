<style>
    /* Scoped Variables for Section 3 */
    .section-3-wrapper {
      --primary: #65BDAD;
      --secondary: #FFCC97;
      --bg-soft: #FFEBDA;
      --bg-mint: #CAF1EB;
      --text: #243036;
      --muted: #5a6a72;
      --card: #ffffff;
      --border: rgba(0,0,0,0.08);
      --shadow: 0 8px 24px rgba(0,0,0,0.06);
      --radius: 16px;
      --radius-sm: 12px;
      
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
      background: var(--bg-soft);
      color: var(--text);
      /* Ensure local stacking context */
      position: relative;
      isolation: isolate;
    }

    /* Reset within wrapper */
    .section-3-wrapper * { box-sizing: border-box; }
    
    /* Layout */
    .section-3-wrapper .app { display: grid; grid-template-columns: 290px 1fr; min-height: 100vh; }

    /* Sidebar */
    .section-3-wrapper .sec3-nav {
      position: sticky; 
      top: 70px; /* Aligned below sticky header */
      height: auto;
      min-height: calc(100vh - 70px);
      background: var(--card);
      border-right: 1px solid var(--border);
      padding: 20px 16px;
      overflow: visible;
    }

    .section-3-wrapper .brand {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 10px 18px;
      border-bottom: 1px solid rgba(0,0,0,0.06);
      margin-bottom: 14px;
    }
    .section-3-wrapper .brand-badge{
      width: 34px; height: 34px; border-radius: 10px;
      background: linear-gradient(135deg, var(--bg-mint), var(--secondary));
      border: 1px solid rgba(0,0,0,0.06);
    }
    .section-3-wrapper .brand-title{ font-weight: 800; letter-spacing: 0.2px; }
    .section-3-wrapper .brand-sub{ font-size: 12px; color: var(--muted); margin-top: 2px; }

    .section-3-wrapper .navlinks { display: flex; flex-direction: column; gap: 6px; margin: 10px 0 14px; }
    .section-3-wrapper .nav-link {
      display: flex; align-items: center; justify-content: space-between;
      padding: 10px 10px;
      border-radius: 12px;
      color: var(--text);
      text-decoration: none;
      border: 1px solid transparent;
      transition: 160ms ease;
      font-size: 14px;
    }
    .section-3-wrapper .nav-link:hover { background: rgba(101,189,173,0.10); border-color: rgba(101,189,173,0.18); }
    .section-3-wrapper .nav-link.active { background: rgba(101,189,173,0.16); border-color: rgba(101,189,173,0.30); }

    .section-3-wrapper .pill {
      font-size: 11px; color: var(--muted);
      padding: 4px 8px; border-radius: 999px;
      background: rgba(0,0,0,0.04);
    }

    .section-3-wrapper .panel {
      margin-top: 14px;
      padding-top: 14px;
      border-top: 1px solid rgba(0,0,0,0.06);
    }

    .section-3-wrapper .panel h4 { margin: 0 0 10px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #7a8b93; }

    .section-3-wrapper .chips { display: flex; flex-wrap: wrap; gap: 8px; }
    .section-3-wrapper .chip {
      user-select: none;
      cursor: pointer;
      padding: 7px 10px;
      border-radius: 999px;
      border: 1px solid rgba(101,189,173,0.55);
      background: #fff;
      color: var(--primary);
      font-size: 12px;
      transition: 160ms ease;
    }
    .section-3-wrapper .chip.active { background: var(--primary); color: #fff; }

    .section-3-wrapper .side-actions { display: grid; gap: 10px; margin-top: 14px; }
    .section-3-wrapper .btn {
      cursor: pointer;
      border-radius: 12px;
      border: 1px solid rgba(101,189,173,0.45);
      background: rgba(202,241,235,0.55);
      color: #1f5f56;
      padding: 10px 12px;
      font-weight: 650;
      transition: 160ms ease;
    }
    .section-3-wrapper .btn:hover { background: rgba(202,241,235,0.75); }

    /* Main */
    .section-3-wrapper .sec3-main { padding: 22px 26px 60px; }

    .section-3-wrapper .topbar {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 14px;
    }
    .section-3-wrapper .title h1 { margin: 0; font-size: 22px; letter-spacing: -0.02em; }
    .section-3-wrapper .title p { margin: 6px 0 0; color: var(--muted); font-size: 13px; max-width: 70ch; }

    .section-3-wrapper .disclaimer {
      background: rgba(255, 255, 255, 0.70);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 12px 14px;
      box-shadow: var(--shadow);
      max-width: 520px;
    }
    .section-3-wrapper .disclaimer strong { color: #1f5f56; }
    .section-3-wrapper .disclaimer small { color: var(--muted); display: block; margin-top: 2px; line-height: 1.35; }

    /* KPI Strip */
    .section-3-wrapper .kpis {
      display: grid;
      grid-template-columns: repeat(6, minmax(0, 1fr));
      gap: 10px;
      margin: 14px 0 18px;
    }
    .section-3-wrapper .kpi {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 12px 12px;
      box-shadow: var(--shadow);
      cursor: pointer;
      transition: 160ms ease;
    }
    .section-3-wrapper .kpi:hover { transform: translateY(-1px); }
    .section-3-wrapper .kpi .label { font-size: 11px; text-transform: uppercase; letter-spacing: 0.08em; color: #7a8b93; }
    .section-3-wrapper .kpi .value { margin-top: 6px; font-size: 18px; font-weight: 800; color: var(--text); }
    .section-3-wrapper .kpi .hint { margin-top: 2px; color: var(--muted); font-size: 12px; }

    /* Sections */
    .section-3-wrapper .section { margin-top: 24px; scroll-margin-top: 16px; }
    .section-3-wrapper .section-head {
      display: flex; align-items: center; justify-content: space-between;
      gap: 12px;
      margin-bottom: 12px;
    }
    .section-3-wrapper .section-head h2 { margin: 0; font-size: 18px; }
    .section-3-wrapper .section-head .meta { color: var(--muted); font-size: 12px; }

    .section-3-wrapper .grid { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 12px; }

    .section-3-wrapper .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 14px;
      box-shadow: var(--shadow);
    }

    .section-3-wrapper .card h3 { margin: 0 0 6px; color: #1f5f56; font-size: 14px; }
    .section-3-wrapper .meaning { color: var(--muted); font-weight: 650; font-size: 13px; margin: 0 0 10px; }
    .section-3-wrapper ul { margin: 0; padding-left: 18px; color: #33434a; }
    .section-3-wrapper li { margin: 6px 0; line-height: 1.35; }

    .section-3-wrapper .quote {
      margin-top: 12px;
      padding: 10px 12px;
      border-radius: 12px;
      background: rgba(0,0,0,0.03);
      color: #3f4f56;
      font-style: italic;
      font-size: 13px;
    }

    .section-3-wrapper .chart {
      height: 330px;
      padding: 12px;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: #fff;
      box-shadow: var(--shadow);
    }

    .section-3-wrapper .tools { display: flex; gap: 10px; align-items: center; }
    .section-3-wrapper .toggle {
      display: inline-flex; align-items: center; gap: 8px;
      cursor: pointer;
      user-select: none;
      font-size: 12px;
      color: var(--muted);
    }
    .section-3-wrapper .toggle input { accent-color: var(--primary); }

    .section-3-wrapper .sources { display: none; margin-top: 10px; padding: 10px 12px; background: rgba(202,241,235,0.35); border-radius: 12px; color: #37565b; font-size: 12px; }
    .section-3-wrapper .sources a { color: #1f5f56; }

    /* Accordions */
    .section-3-wrapper details { margin-top: 10px; }
    .section-3-wrapper summary { cursor: pointer; font-weight: 700; color: #1f5f56; }
    .section-3-wrapper details p { margin: 8px 0 0; color: var(--muted); font-size: 13px; line-height: 1.45; }

    /* Modal - Scoped IDs using common styles */
    .sec3-overlay {
      display: none;
      position: fixed; inset: 0;
      background: rgba(0,0,0,0.5);
      backdrop-filter: blur(4px);
      z-index: 1000;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .sec3-overlay.open { display: block; opacity: 1; }

    .sec3-modal {
      display: none;
      position: fixed; 
      left: 50%;
      top: 50%;
      transform: translate(-50%, -40%);
      width: min(760px, calc(100% - 24px));
      background: #fff;
      border-radius: 24px;
      border: 1px solid rgba(0,0,0,0.08);
      box-shadow: 0 20px 60px rgba(0,0,0,0.3);
      z-index: 1001;
      padding: 24px;
      opacity: 0;
      transition: transform 0.3s ease, opacity 0.3s ease;
      pointer-events: none;
    }
    .sec3-modal.open { 
        display: block; 
        opacity: 1; 
        transform: translate(-50%, -50%); 
        pointer-events: auto;
    }

    .section-3-wrapper .modal-head { 
        display: flex; 
        align-items: center; 
        justify-content: space-between; 
        gap: 12px; 
        margin-bottom: 20px;
    }
    .section-3-wrapper .modal-head h2 { 
        margin: 0; 
        font-size: 1.25rem; 
        color: var(--primary);
    }
    .section-3-wrapper .modal-head-text p { margin: 4px 0 0; color: var(--muted); font-size: 13px; }

    .sec3-close-x { 
        cursor: pointer; 
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        transition: background 0.2s, transform 0.2s;
    }
    .sec3-close-x:hover { background: rgba(0,0,0,0.1); transform: rotate(90deg); }

    .section-3-wrapper .searchrow { display: grid; grid-template-columns: 1fr auto; gap: 10px; margin-top: 12px; }
    .section-3-wrapper input[type="search"]{
      width: 100%;
      padding: 10px 12px;
      border: 1px solid rgba(0,0,0,0.12);
      border-radius: 12px;
      font-size: 13px;
    }
    .section-3-wrapper .select{
      padding: 10px 12px;
      border: 1px solid rgba(0,0,0,0.12);
      border-radius: 12px;
      font-size: 13px;
      background: #fff;
    }
    .section-3-wrapper .quotes { margin-top: 12px; max-height: 360px; overflow: auto; padding-right: 6px; }
    .section-3-wrapper .q { border: 1px solid rgba(0,0,0,0.08); border-radius: 14px; padding: 10px 12px; margin-bottom: 10px; }
    .section-3-wrapper .q .tag { font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; color: #7a8b93; }
    .section-3-wrapper .q .txt { margin-top: 6px; color: #2f3f46; }

    /* Mobile */
    .section-3-wrapper .mobilebar {
      display: none;
      position: sticky;
      top: 0;
      z-index: 900;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(0,0,0,0.08);
      padding: 10px 12px;
    }
    .section-3-wrapper .mobilebar .row { display: flex; gap: 10px; align-items: center; justify-content: space-between; }
    .section-3-wrapper .mobilebar button { border: 1px solid rgba(0,0,0,0.10); background: #fff; border-radius: 12px; padding: 8px 10px; cursor: pointer; }

    .sec3-drawer {
      display: none;
      position: fixed; inset: 0;
      z-index: 950;
    }
    .sec3-drawer .bg { position: absolute; inset: 0; background: rgba(0,0,0,0.42); }
    .sec3-drawer .panel {
      position: absolute; left: 0; top: 0; bottom: 0;
      width: min(320px, 92vw);
      background: #fff;
      padding: 16px;
      overflow: auto;
      border-right: 1px solid rgba(0,0,0,0.08);
      border-top: none; /* override default panel top border if any */
    }

    @media (max-width: 980px){
      .section-3-wrapper .app { grid-template-columns: 1fr; }
      .section-3-wrapper .sec3-nav { display: none; }
      .section-3-wrapper .mobilebar { display: block; }
      .section-3-wrapper .sec3-main { padding: 14px 12px 56px; }
      .section-3-wrapper .kpis { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .section-3-wrapper .grid { grid-template-columns: 1fr; }
    }

    /* Filtering */
    .section-3-wrapper [data-tags] { display: block; }
    .section-3-wrapper .hidden { display: none !important; }

    /* Chart.js typography */
    .section-3-wrapper canvas { max-width: 100%; }
</style>

<div class="section-3-wrapper">
  
  <div class="mobilebar">
    <div class="row">
      <div style="display:flex;align-items:center;gap:10px;">
        <div class="brand-badge"></div>
        <div>
          <div style="font-weight:800;">Section 3 Dashboard</div>
          <div style="font-size:12px;color:var(--muted);">Consumer tension — Indonesia</div>
        </div>
      </div>
      <div style="display:flex;gap:8px;">
        <button id="sec3_openMenu">Menu</button>
        <button id="sec3_openQuotes">Quotes</button>
      </div>
    </div>
  </div>

  <div class="sec3-drawer" id="sec3_drawer">
    <div class="bg" id="sec3_closeMenu"></div>
    <div class="panel">
      <div class="brand">
        <div class="brand-badge"></div>
        <div>
          <div class="brand-title">Research Dashboard</div>
          <div class="brand-sub">Section 3 — Consumer psychology</div>
        </div>
      </div>
      <div class="navlinks" id="sec3_drawerLinks"></div>
      <div class="panel">
        <h4>Tension filters</h4>
        <div class="chips" id="sec3_drawerChips"></div>
      </div>
      <div class="side-actions">
        <button class="btn" id="sec3_drawerOpenQuotes">Open Quote Bank</button>
        <button class="btn" id="sec3_drawerClear">Clear filters</button>
      </div>
    </div>
  </div>

  <div class="app">
    <nav class="sec3-nav">
      <div class="brand">
        <div class="brand-badge"></div>
        <div>
          <div class="brand-title">Research Dashboard</div>
          <div class="brand-sub">Section 3 — Consumer tension</div>
        </div>
      </div>

      <div class="navlinks" id="sec3_navLinks"></div>

      <div class="panel">
        <h4>Tension filters</h4>
        <div class="chips" id="sec3_chips"></div>
      </div>

      <div class="side-actions">
        <button class="btn" id="sec3_btnQuotes">Open Quote Bank</button>
        <button class="btn" id="sec3_btnClear">Clear filters</button>
      </div>
    </nav>

    <main class="sec3-main">
      <div class="topbar" id="sec3_overview">
        <div class="title">
          <h1>Indonesia Hair & Body Care Decisions Under Uncertainty</h1>
          <p>Dashboard view of Section 3 insights: how consumers perceive risk, lose trust, and reframe value after negative product experiences. Charts use indexed indicators when hard numbers are unavailable.</p>
        </div>
        <div class="disclaimer">
          <strong>Visualization note</strong>
          <small>Some charts use <b>Indexed Indicators (1–5)</b> to visualize patterns from qualitative evidence. They are not population statistics unless explicitly cited.</small>
        </div>
      </div>

      <div class="kpis">
        <div class="kpi" data-jump="#sec3_risk">
          <div class="label">Risk Aversion</div>
          <div class="value">High</div>
          <div class="hint">Avoidance & delay behaviors</div>
        </div>
        <div class="kpi" data-jump="#sec3_trust">
          <div class="label">Claim Skepticism</div>
          <div class="value">Rising</div>
          <div class="hint">Proof-seeking mindset</div>
        </div>
        <div class="kpi" data-jump="#sec3_fatigue">
          <div class="label">Decision Fatigue</div>
          <div class="value">Elevated</div>
          <div class="hint">Overchoice & switching</div>
        </div>
        <div class="kpi" data-jump="#sec3_cost">
          <div class="label">Failure Cost</div>
          <div class="value">Salient</div>
          <div class="hint">Wasted spend + stress</div>
        </div>
        <div class="kpi" data-jump="#sec3_search">
          <div class="label">Safety Seeking</div>
          <div class="value">Up</div>
          <div class="hint">Ingredient + verification</div>
        </div>
        <div class="kpi" data-jump="#sec3_authority">
          <div class="label">Authority Signals</div>
          <div class="value">Strong</div>
          <div class="hint">Labels used as shortcuts</div>
        </div>
      </div>

      <!-- EXECUTIVE TENSION MAP -->
      <section class="section" id="sec3_tension">
        <div class="section-head">
          <h2>Executive Tension Map</h2>
          <div class="meta">Summary view</div>
        </div>
        <div class="card" data-tags="fear skepticism safety-seeking">
          <h3>Core tension</h3>
          <p class="meaning">Consumers try to achieve culturally expected outcomes <b>without</b> risking biological harm — leading to verification-first behavior.</p>
          <details>
            <summary>What this looks like in the wild</summary>
            <p>In reviews and discourse, consumers frequently describe a cycle: prior failure → fear → skeptical reading of claims → reliance on authority cues → willingness to pay for reliability.</p>
          </details>
          <div class="tools" style="margin-top:10px;">
            <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
          </div>
          <div class="sources">
            <div><b>Sources:</b> Populate with links/citations from your Section 3 research output (e.g., platform excerpts, Google Trends snapshots, research papers).</div>
          </div>
        </div>
      </section>

      <!-- RISK -->
      <section class="section" id="sec3_risk">
        <div class="section-head">
          <h2>1) Risk Perception & Decision-Making</h2>
          <div class="meta">Fear • Safety-seeking</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="fear safety-seeking">
            <canvas id="sec3_chartRiskAnxiety"></canvas>
          </div>
          <div class="card" data-tags="fear safety-seeking">
            <h3>Risk barrier heuristic</h3>
            <p class="meaning">Consumers prioritize <b>non-harm</b> over potential efficacy when prior failure exists.</p>
            <ul>
              <li>Common behaviors: delay, “wait-and-see,” and peer verification before committing.</li>
              <li>Risk perception escalates when products are used daily (hair & body care routines).</li>
              <li>Language patterns often emphasize “takut makin parah” (fear of worsening).</li>
            </ul>
            <div class="quote">“Takut makin parah. Mending cari yang aman dulu.”</div>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations (e-commerce reviews, forum threads, behavioral studies).</div>
            </div>
          </div>
        </div>
      </section>

      <!-- LANGUAGE -->
      <section class="section" id="sec3_language">
        <div class="section-head">
          <h2>2) Emotional Language & Lived Experience</h2>
          <div class="meta">Fear • Cost</div>
        </div>
        <div class="grid">
          <div class="card" data-tags="fear cost">
            <h3>Emotion vocabulary is decision data</h3>
            <p class="meaning">Recurring phrases act as markers of regret, avoidance, and permanent distrust.</p>
            <ul>
              <li><b>Iritasi</b>: immediate biological rejection signal</li>
              <li><b>Nyesel</b>: financial loss + physical discomfort</li>
              <li><b>Kapok</b>: intent to permanently avoid re-trial</li>
            </ul>
            <details>
              <summary>Examples (anonymized)</summary>
              <p>“Nyesel banget, malah jadi iritasi.” • “Udah kapok coba-coba.” • “Takut breakout lagi.”</p>
            </details>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citation links to forum excerpts and review samples.</div>
            </div>
          </div>
          <div class="chart" data-tags="fear cost">
            <canvas id="sec3_chartLexicon"></canvas>
          </div>
        </div>
      </section>

      <!-- TRUST -->
      <section class="section" id="sec3_trust">
        <div class="section-head">
          <h2>3) Trust Erosion & Claim Skepticism</h2>
          <div class="meta">Skepticism</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="suspicious skepticism">
            <canvas id="sec3_chartTrustDrivers"></canvas>
          </div>
          <div class="card" data-tags="skepticism">
            <h3>Claim fatigue → verification behavior</h3>
            <p class="meaning">Overlapping claims create confusion; consumers respond by demanding stronger proof cues.</p>
            <ul>
              <li>Skepticism rises when influencer recommendations conflict (“yang viral beda-beda”).</li>
              <li>Consumers interpret “natural/gentle/sensitive skin” as non-differentiating unless verified.</li>
              <li>De-influencing content accelerates distrust toward marketing language.</li>
            </ul>
            <div class="quote">“Klaimnya sama semua. Yang penting bukti dan aman.”</div>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations to de-influencing discussions and platform evidence.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- FATIGUE -->
      <section class="section" id="sec3_fatigue">
        <div class="section-head">
          <h2>4) Fatigue & Cognitive Overload</h2>
          <div class="meta">Fatigue</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="fatigue">
            <canvas id="sec3_chartDecisionFatigue"></canvas>
          </div>
          <div class="card" data-tags="fatigue">
            <h3>Overchoice produces paralysis</h3>
            <p class="meaning">Too many routines and “actives” increase switching and reduce long-term commitment.</p>
            <ul>
              <li>Consumers simplify routines to reduce risk exposure.</li>
              <li>Switching becomes a coping mechanism under uncertainty.</li>
              <li>“Skinimalism” emerges as a psychological retreat.</li>
            </ul>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations to routine-fatigue discussions and behavior research.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- COST -->
      <section class="section" id="sec3_cost">
        <div class="section-head">
          <h2>5) Emotional & Financial Cost of Failure</h2>
          <div class="meta">Cost</div>
        </div>
        <div class="grid">
          <div class="card" data-tags="cost fear">
            <h3>Failure feels like double loss</h3>
            <p class="meaning">Consumers experience regret both from wasted spend and from the perceived recovery burden.</p>
            <ul>
              <li>“Wasted money” is frequently paired with “damaged skin/hair” narratives.</li>
              <li>Consumers become more risk-averse after one severe negative experience.</li>
              <li>Trust, once regained, becomes sticky (defensive loyalty).</li>
            </ul>
            <div class="quote">“Bukan cuma rugi uang, tapi rusak dan lama balikin lagi.”</div>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations to review samples and forum narratives.</div>
            </div>
          </div>
          <div class="chart" data-tags="cost">
            <canvas id="sec3_chartFailureCost"></canvas>
          </div>
        </div>
      </section>

      <!-- SEARCH -->
      <section class="section" id="sec3_search">
        <div class="section-head">
          <h2>6) Safety-Oriented Search Behavior</h2>
          <div class="meta">Safety-seeking</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="safety-seeking">
            <canvas id="sec3_chartSearchIntent"></canvas>
          </div>
          <div class="card" data-tags="safety-seeking">
            <h3>Search shifts toward verification</h3>
            <p class="meaning">Query intent moves from outcomes (“glow”) toward safety and legitimacy checks.</p>
            <ul>
              <li>Rising interest in ingredient safety queries and “cek BPOM” style verification.</li>
              <li>“Dermatologist-tested” terms often used as shortcut filters.</li>
              <li>Consumers develop pre-purchase rituals: check, compare, then buy.</li>
            </ul>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add Google Trends screenshots/links and search keyword clusters.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- VALUE -->
      <section class="section" id="sec3_value">
        <div class="section-head">
          <h2>7) Psychological Justification for Paying More</h2>
          <div class="meta">Safety-seeking • Cost</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="safety-seeking cost">
            <canvas id="sec3_chartValueReframing"></canvas>
          </div>
          <div class="card" data-tags="safety-seeking cost">
            <h3>Reliability premium</h3>
            <p class="meaning">Higher price is justified as insurance against uncertainty and repeated failure.</p>
            <ul>
              <li>Consumers frame value as “consistency” rather than “fast results.”</li>
              <li>Risk reduction becomes more important than novelty.</li>
              <li>Proof cues (testing, compliance, transparency) support this justification.</li>
            </ul>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations to behavior research and consumer discourse.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- AUTHORITY -->
      <section class="section" id="sec3_authority">
        <div class="section-head">
          <h2>8) Authority Signals & Perceived Medical Credibility</h2>
          <div class="meta">Authority</div>
        </div>
        <div class="grid">
          <div class="chart" data-tags="authority">
            <canvas id="sec3_chartAuthorityImpact"></canvas>
          </div>
          <div class="card" data-tags="authority skepticism">
            <h3>Shortcuts to trust</h3>
            <p class="meaning">Authority cues are used to bypass marketing uncertainty (without verifying scientific validity).</p>
            <ul>
              <li><b>BPOM</b> functions as a non-negotiable legal baseline.</li>
              <li><b>Testing language</b> is read as “less risky,” even if test depth varies.</li>
              <li><b>Halal</b> can be interpreted as broader quality/ethics assurance.</li>
            </ul>
            <div class="tools">
              <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
            </div>
            <div class="sources">
              <div><b>Sources:</b> Add citations to consumer discussions referencing these cues.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- SYNTHESIS -->
      <section class="section" id="sec3_synthesis">
        <div class="section-head">
          <h2>Dominant Psychological Tension — Synthesis</h2>
          <div class="meta">Output requirement</div>
        </div>
        <div class="card" data-tags="fear skepticism fatigue safety-seeking authority cost">
          <h3>One-sentence synthesis</h3>
          <p class="meaning">The consumer wants culturally expected results, but increasingly behaves as an <b>investigative pragmatist</b>—optimizing for safety, legitimacy, and reliability to avoid repeating biological harm.</p>
          <details>
            <summary>What shifts are most visible</summary>
            <p><b>Language shift:</b> “viral” → “aman” • “cepat putih/glow” → “stabil & nggak bikin parah”  
              <br/><b>Behavior shift:</b> impulse → verification-first  
              <br/><b>Value shift:</b> price sensitivity → reliability sensitivity</p>
          </details>
          <div class="tools" style="margin-top:10px;">
            <label class="toggle"><input type="checkbox" class="srcToggle" /> Show sources</label>
          </div>
          <div class="sources">
            <div><b>Sources:</b> Add citations from Section 3 research output.</div>
          </div>
        </div>
      </section>

      <div style="margin-top:18px;color:var(--muted);font-size:12px;">
        Tip: Use the filter chips to hide irrelevant tension themes when presenting to stakeholders.
      </div>
    </main>
  </div>

  <!-- Quote Modal (Scoped) -->
  <div class="sec3-overlay" id="sec3_overlay"></div>
  <div class="sec3-modal" id="sec3_modal" role="dialog" aria-modal="true" aria-label="Quote Bank">
    <div class="modal-head">
      <div class="modal-head-text">
        <h2>Quote Bank (Indonesia)</h2>
        <p>Search and group recurring phrases used to describe fear, regret, skepticism, fatigue, and safety-seeking behavior.</p>
      </div>
      <div class="sec3-close-x" id="sec3_closeModal">✕</div>
    </div>
    <div class="searchrow">
      <input type="search" id="sec3_qSearch" placeholder="Search phrases (e.g., nyesel, iritasi, kapok)…" />
      <select class="select" id="sec3_qFilter">
        <option value="all">All emotions</option>
        <option value="damage">Damage</option>
        <option value="regret">Regret</option>
        <option value="avoidance">Avoidance</option>
        <option value="skepticism">Skepticism</option>
        <option value="fatigue">Fatigue</option>
        <option value="safety">Safety-seeking</option>
      </select>
    </div>
    <div class="quotes" id="sec3_quotes"></div>
  </div>

</div>

<script>
  (function(){ // Wrap in IIFE
    
    // ----- Navigation model -----
    const sections = [
      { id: 'sec3_overview', label: 'Overview', pill: 'Start' },
      { id: 'sec3_tension', label: 'Executive Tension Map', pill: 'Summary' },
      { id: 'sec3_risk', label: 'Risk & Uncertainty', pill: 'Fear' },
      { id: 'sec3_language', label: 'Emotional Lexicon', pill: 'Language' },
      { id: 'sec3_trust', label: 'Trust Erosion', pill: 'Skepticism' },
      { id: 'sec3_fatigue', label: 'Fatigue & Overload', pill: 'Fatigue' },
      { id: 'sec3_cost', label: 'Cost of Failure', pill: 'Cost' },
      { id: 'sec3_search', label: 'Search Behavior', pill: 'Signals' },
      { id: 'sec3_value', label: 'Value Reframing', pill: 'WTP' },
      { id: 'sec3_authority', label: 'Authority Signals', pill: 'Trust cues' },
      { id: 'sec3_synthesis', label: 'Final Synthesis', pill: 'Output' },
    ];

    function renderNav(container){
      container.innerHTML = sections.map(s => `
        <a href="#${s.id}" class="nav-link" data-target="${s.id}">
          <span>${s.label}</span>
          <span class="pill">${s.pill}</span>
        </a>
      `).join('');
    }

    // ----- Filters -----
    const filterTags = [
      { key: 'fear', label: 'Fear' },
      { key: 'skepticism', label: 'Skepticism' },
      { key: 'fatigue', label: 'Fatigue' },
      { key: 'cost', label: 'Cost' },
      { key: 'safety-seeking', label: 'Safety-Seeking' },
      { key: 'authority', label: 'Authority' },
    ];

    const activeFilters = new Set();
    // Scope querySelector to section3 wrapper
    const wrapper = document.querySelector('.section-3-wrapper');

    function renderChips(container){
      container.innerHTML = filterTags.map(f => `
        <div class="chip" data-tag="${f.key}">${f.label}</div>
      `).join('');
    }

    function applyFilters(){
      const blocks = wrapper.querySelectorAll('[data-tags]');
      if(activeFilters.size === 0){
        blocks.forEach(b => b.classList.remove('hidden'));
        return;
      }
      blocks.forEach(b => {
        const tags = (b.getAttribute('data-tags') || '').split(/\s+/).filter(Boolean);
        const show = tags.some(t => activeFilters.has(t));
        b.classList.toggle('hidden', !show);
      });
    }

    function bindChips(container){
      container.querySelectorAll('.chip').forEach(chip => {
        chip.addEventListener('click', () => {
          const tag = chip.getAttribute('data-tag');
          const on = chip.classList.toggle('active');
          if(on) activeFilters.add(tag); else activeFilters.delete(tag);
          // mirror state across all chip containers
          wrapper.querySelectorAll(`.chip[data-tag="${tag}"]`).forEach(c => c.classList.toggle('active', on));
          applyFilters();
        });
      });
    }

    function clearFilters(){
      activeFilters.clear();
      wrapper.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
      applyFilters();
    }

    // ----- Active link on scroll -----
    function observeSections(){
      const links = wrapper.querySelectorAll('.nav-link');
      const map = new Map([...links].map(a => [a.getAttribute('data-target'), a]));

      const observer = new IntersectionObserver(entries => {
        const visible = entries.filter(e => e.isIntersecting).sort((a,b)=>b.intersectionRatio-a.intersectionRatio)[0];
        if(!visible) return;
        links.forEach(l => l.classList.remove('active'));
        const id = visible.target.id;
        const link = map.get(id);
        if(link) link.classList.add('active');
        // mirror in drawer
        const l2 = document.getElementById('sec3_drawerLinks').querySelector(`[data-target="${id}"]`);
        if(l2) l2.classList.add('active');
      }, { rootMargin: '-15% 0px -70% 0px', threshold: [0.1, 0.2, 0.4, 0.6] });

      sections.forEach(s => {
        const el = document.getElementById(s.id);
        if(el) observer.observe(el);
      });
    }

    // ----- Sources toggle -----
    function bindSourceToggles(){
      wrapper.querySelectorAll('.srcToggle').forEach(t => {
        t.addEventListener('change', () => {
          const card = t.closest('.card');
          const src = card?.querySelector('.sources');
          if(src) src.style.display = t.checked ? 'block' : 'none';
        });
      });
    }

    // ----- KPI jumps -----
    function bindKpis(){
      wrapper.querySelectorAll('.kpi').forEach(k => {
        k.addEventListener('click', () => {
          const jump = k.getAttribute('data-jump');
          if(jump) document.querySelector(jump)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      });
    }

    // ----- Quote bank -----
    const quoteData = [
      { tag: 'damage', label: 'Damage', text: '"Kulit jadi perih dan merah, kayak terbakar."' },
      { tag: 'regret', label: 'Regret', text: '"Nyesel banget beli ini, malah iritasi parah."' },
      { tag: 'avoidance', label: 'Avoidance', text: '"Udah kapok, nggak mau coba-coba lagi."' },
      { tag: 'skepticism', label: 'Skepticism', text: '"Klaimnya banyak, tapi buktinya mana?"' },
      { tag: 'fatigue', label: 'Fatigue', text: '"Capek gonta-ganti, pengen yang pasti aja."' },
      { tag: 'safety', label: 'Safety-Seeking', text: '"Sekarang cek BPOM dulu sebelum beli."' },
    ];

    function renderQuotes(){
      const qWrap = document.getElementById('sec3_quotes');
      const term = (document.getElementById('sec3_qSearch').value || '').toLowerCase();
      const f = document.getElementById('sec3_qFilter').value;

      const items = quoteData.filter(q => {
        const okTag = (f === 'all') || (q.tag === f);
        const okTerm = !term || q.text.toLowerCase().includes(term);
        return okTag && okTerm;
      });

      qWrap.innerHTML = items.map(q => `
        <div class="q">
          <div class="tag">${q.label}</div>
          <div class="txt">${q.text}</div>
        </div>
      `).join('') || '<div style="color: var(--muted); padding: 10px 2px;">No quotes matched your search.</div>';
    }

    function openModal(){
      const overlay = document.getElementById('sec3_overlay');
      const modal = document.getElementById('sec3_modal');
      overlay.style.display = 'block';
      modal.style.display = 'block';
      setTimeout(() => {
          overlay.classList.add('open');
          modal.classList.add('open');
      }, 10);
      renderQuotes();
      document.getElementById('sec3_qSearch').focus();
    }

    function closeModal(){
      const overlay = document.getElementById('sec3_overlay');
      const modal = document.getElementById('sec3_modal');
      overlay.classList.remove('open');
      modal.classList.remove('open');
      setTimeout(() => {
          overlay.style.display = 'none';
          modal.style.display = 'none';
      }, 300);
    }

    // ----- Mobile drawer -----
    function openDrawer(){ document.getElementById('sec3_drawer').style.display = 'block'; }
    function closeDrawer(){ document.getElementById('sec3_drawer').style.display = 'none'; }

    // ----- Charts -----
    function chartDefaults(){
      // Safely check if Chart is defined
      if(typeof Chart === 'undefined') return;
      // Use styles from wrapper
      Chart.defaults.font.family = 'ui-sans-serif, system-ui, sans-serif';
      Chart.defaults.color = '#4b5a61';
    }

    function initCharts(){
      if(typeof Chart === 'undefined') return;
      
      const primary = '#65BDAD';
      const secondary = '#FFCC97';

      const chart1 = document.getElementById('sec3_chartRiskAnxiety');
      if(chart1) {
        new Chart(chart1, {
          type: 'line',
          data: {
            labels: ['2022','2023','2024','2025'],
            datasets: [{
              label: 'Risk Anxiety Index (indexed)',
              data: [2.6, 3.3, 4.1, 4.6],
              borderColor: primary,
              backgroundColor: 'rgba(101,189,173,0.18)',
              fill: true,
              tension: 0.35,
              pointRadius: 3,
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { y: { min: 0, max: 5, title: { display: true, text: 'Indexed 0–5' } } },
            plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
          }
        });
      }

      const chart2 = document.getElementById('sec3_chartLexicon');
      if(chart2) {
          new Chart(chart2, {
            type: 'bar',
            data: {
              labels: ['iritasi', 'nyesel', 'kapok', 'breakout', 'aman'],
              datasets: [{
                label: 'Lexicon salience (indexed)',
                data: [4.5, 4.2, 3.6, 3.9, 4.6],
                backgroundColor: [primary, secondary, 'rgba(202,241,235,0.9)', 'rgba(255,204,151,0.65)', 'rgba(101,189,173,0.65)'],
                borderRadius: 10,
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: { y: { min: 0, max: 5, title: { display: true, text: 'Indexed 0–5' } } },
              plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
            }
          });
      }

      const chart3 = document.getElementById('sec3_chartTrustDrivers');
      if(chart3) {
          new Chart(chart3, {
            type: 'bar',
            data: {
              labels: ['Claims overload','Influencer conflict','Past failures'],
              datasets: [{
                label: 'Erosion impact (indexed)',
                data: [4.4, 3.9, 4.7],
                backgroundColor: [secondary, 'rgba(202,241,235,0.95)', primary],
                borderRadius: 10,
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: { y: { min: 0, max: 5, title: { display: true, text: 'Indexed 0–5' } } },
              plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
            }
          });
      }

      const chart4 = document.getElementById('sec3_chartDecisionFatigue');
      if(chart4) {
          new Chart(chart4, {
            type: 'radar',
            data: {
              labels: ['Overchoice','Routine complexity','Active trend','Switching','Confusion'],
              datasets: [{
                label: 'Fatigue score (indexed)',
                data: [4.2, 3.8, 4.4, 3.4, 4.1],
                backgroundColor: 'rgba(101,189,173,0.22)',
                borderColor: primary,
                pointBackgroundColor: primary,
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: { r: { min: 0, max: 5, ticks: { display: false } } },
              plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
            }
          });
      }

      const chart5 = document.getElementById('sec3_chartFailureCost');
      if(chart5) {
          new Chart(chart5, {
            type: 'doughnut',
            data: {
              labels: ['Wasted spend','Time to recover','Emotional stress','Opportunity cost'],
              datasets: [{
                label: 'Failure cost (indexed share)',
                data: [30, 25, 28, 17],
                backgroundColor: [secondary, primary, 'rgba(202,241,235,0.95)', 'rgba(0,0,0,0.08)'],
                borderWidth: 0,
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: { tooltip: { callbacks: { footer: () => 'Illustrative composition (not statistical)' } } }
            }
          });
      }

      const chart6 = document.getElementById('sec3_chartSearchIntent');
      if(chart6) {
          new Chart(chart6, {
            type: 'line',
            data: {
              labels: ['2022','2023','2024','2025'],
              datasets: [
                { label: 'Symptom-led (indexed)', data: [4.4, 4.1, 3.6, 3.2], borderColor: secondary, tension: 0.25, pointRadius: 3 },
                { label: 'Safety-led (indexed)', data: [2.1, 2.9, 4.0, 4.7], borderColor: primary, tension: 0.25, pointRadius: 3 },
                { label: 'Brand-led (indexed)', data: [3.4, 3.3, 3.1, 2.9], borderColor: 'rgba(0,0,0,0.35)', tension: 0.25, pointRadius: 3 },
              ]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: { y: { min: 0, max: 5, title: { display: true, text: 'Indexed 0–5' } } },
              plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
            }
          });
      }

      const chart7 = document.getElementById('sec3_chartValueReframing');
      if(chart7) {
          new Chart(chart7, {
            type: 'scatter',
            data: {
              datasets: [{
                label: 'Segments (illustrative)',
                data: [
                  {x: 4.6, y: 4.6}, {x: 4.2, y: 4.3}, {x: 3.8, y: 4.0},
                  {x: 2.1, y: 1.8}, {x: 1.6, y: 1.2}, {x: 4.9, y: 4.8}
                ],
                backgroundColor: secondary,
                pointRadius: 5,
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
                x: { min: 0, max: 5, title: { display: true, text: 'Risk aversion (indexed)' } },
                y: { min: 0, max: 5, title: { display: true, text: 'Willingness to pay (indexed)' } },
              },
              plugins: { tooltip: { callbacks: { footer: () => 'Illustrative placement (not statistical)' } } }
            }
          });
      }

      const chart8 = document.getElementById('sec3_chartAuthorityImpact');
      if(chart8) {
          new Chart(chart8, {
            type: 'bar',
            data: {
              labels: ['BPOM verified','Testing language','Derm-associated','Halal','Natural/organic'],
              datasets: [{
                label: 'Impact on confidence (indexed)',
                data: [4.9, 4.6, 4.3, 4.0, 3.1],
                backgroundColor: primary,
                borderRadius: 10,
              }]
            },
            options: {
              indexAxis: 'y',
              responsive: true,
              maintainAspectRatio: false,
              scales: { x: { min: 0, max: 5, title: { display: true, text: 'Indexed 0–5' } } },
              plugins: { tooltip: { callbacks: { footer: () => 'Indexed for visualization only' } } }
            }
          });
      }
    }

    // ----- Boot -----
    function init(){
      // Teleport modal & overlay to body
      const overlay = document.getElementById('sec3_overlay');
      const modal = document.getElementById('sec3_modal');
      if (overlay && overlay.parentElement !== document.body) document.body.appendChild(overlay);
      if (modal && modal.parentElement !== document.body) document.body.appendChild(modal);

      renderNav(document.getElementById('sec3_navLinks'));
      renderNav(document.getElementById('sec3_drawerLinks'));
      renderChips(document.getElementById('sec3_chips'));
      renderChips(document.getElementById('sec3_drawerChips'));
      bindChips(document.getElementById('sec3_chips'));
      bindChips(document.getElementById('sec3_drawerChips'));
      observeSections();
      bindSourceToggles();
      bindKpis();

      document.getElementById('sec3_btnQuotes').addEventListener('click', openModal);
      document.getElementById('sec3_btnClear').addEventListener('click', clearFilters);

      document.getElementById('sec3_openQuotes').addEventListener('click', openModal);
      document.getElementById('sec3_openMenu').addEventListener('click', openDrawer);
      document.getElementById('sec3_closeMenu').addEventListener('click', closeDrawer);

      document.getElementById('sec3_drawerOpenQuotes').addEventListener('click', () => { closeDrawer(); openModal(); });
      document.getElementById('sec3_drawerClear').addEventListener('click', () => { clearFilters(); closeDrawer(); });

      document.getElementById('sec3_overlay').addEventListener('click', closeModal);
      document.getElementById('sec3_closeModal').addEventListener('click', closeModal);

      document.getElementById('sec3_qSearch').addEventListener('input', renderQuotes);
      document.getElementById('sec3_qFilter').addEventListener('change', renderQuotes);

      // KPI jump also works on desktop (no menu needed)
      document.addEventListener('keydown', (e) => { if(e.key === 'Escape'){ closeModal(); closeDrawer(); } });

      // Initialize charts
      chartDefaults();
      initCharts();

      // Fix a minor tag typo ("suspicious") if any
      applyFilters();
    }

    // Run init
    init();

  })();
</script>
