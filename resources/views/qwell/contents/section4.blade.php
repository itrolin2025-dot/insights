<style>
    /* Scoped Variables for Section 4 */
    .section-4-wrapper {
      --c-primary:#65BDAD;
      --c-secondary:#FFCC97;
      --c-bg:#FFEBDA;
      --c-accent:#CAF1EB;
      --c-text:#233241;
      --c-muted:#5D6D7E;
      --c-white:#FFFFFF;
      --c-danger:#E74C3C;

      --shadow: 0 6px 26px rgba(0,0,0,.06);
      --radius: 18px;
      --radius-sm: 12px;

      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Inter", sans-serif;
      background:var(--c-bg);
      color:var(--c-text);
      /* Ensure isolation */
      position: relative;
      isolation: isolate;
    }

    .section-4-wrapper *{ box-sizing:border-box; }

    /* Layout */
    .section-4-wrapper .app{ display:flex; min-height:100vh; }
    .section-4-wrapper .sec4-nav{
      width:280px;
      background:var(--c-white);
      border-right:1px solid rgba(0,0,0,.06);
      padding:22px 18px;
      position:sticky; top:0; height:100vh;
      z-index:50;
    }
    .section-4-wrapper .brand{
      display:flex; align-items:center; justify-content:space-between;
      padding:10px 10px 14px;
      border-bottom:2px solid var(--c-accent);
      margin-bottom:14px;
    }
    .section-4-wrapper .brand h2{ margin:0; font-size:1.05rem; color:var(--c-primary); letter-spacing:.2px; }
    .section-4-wrapper .pill{
      display:inline-flex; align-items:center; gap:8px;
      padding:6px 10px; border-radius:999px;
      background:rgba(101,189,173,.12); color:var(--c-primary);
      font-size:.78rem; font-weight:700;
    }

    .section-4-wrapper .navlinks{ display:flex; flex-direction:column; gap:6px; margin-top:10px; }
    .section-4-wrapper .navlinks a{
      text-decoration:none; color:var(--c-muted);
      padding:10px 10px;
      border-radius:12px;
      font-weight:600;
      transition:.18s;
      display:flex; align-items:center; justify-content:space-between;
    }
    .section-4-wrapper .navlinks a:hover{ background:rgba(202,241,235,.55); color:var(--c-primary); }
    .section-4-wrapper .navlinks a.active{ background:var(--c-accent); color:var(--c-primary); }

    .section-4-wrapper .nav-footer{
      margin-top:auto;
      padding:12px 10px;
      border-top:1px solid rgba(0,0,0,.06);
      color:var(--c-muted);
      font-size:.82rem;
      line-height:1.35;
    }
    .section-4-wrapper .nav-footer button{
      width:100%;
      margin-top:10px;
      border:0;
      background:rgba(255,204,151,.55);
      color:var(--c-text);
      font-weight:800;
      padding:10px 12px;
      border-radius:12px;
      cursor:pointer;
      transition:.18s;
    }
    .section-4-wrapper .nav-footer button:hover{ filter:brightness(.98); transform:translateY(-1px); }

    .section-4-wrapper .sec4-main{
      flex:1;
      padding:28px 26px 52px;
      max-width:1200px;
    }

    /* Mobile nav */
    .section-4-wrapper .topbar{
      display:none;
      position:sticky; top:0; z-index:60;
      background:rgba(255,235,218,.92);
      backdrop-filter: blur(8px);
      border-bottom:1px solid rgba(0,0,0,.06);
      padding:12px 14px;
    }
    .section-4-wrapper .topbar .row{ display:flex; align-items:center; justify-content:space-between; gap:10px; }
    .section-4-wrapper .iconbtn{
      border:0; background:var(--c-white); box-shadow:var(--shadow);
      border-radius:14px; padding:10px 12px;
      cursor:pointer; font-weight:900;
    }
    .sec4-drawer{
      position:fixed; inset:0;
      background:rgba(0,0,0,.38);
      display:none;
      z-index:80;
    }
    .sec4-drawer.open{ display:block; }
    .sec4-drawer .drawer-panel{
      width:86vw; max-width:320px; height:100%;
      background:var(--c-white);
      box-shadow:var(--shadow);
      padding:18px 14px;
    }

    /* Sections & cards */
    .section-4-wrapper .header{
      margin:8px 0 18px;
    }
    .section-4-wrapper .header h1{ margin:0 0 6px; font-size:2.05rem; letter-spacing:-.3px; }
    .section-4-wrapper .subtitle{ margin:0; color:var(--c-muted); max-width:820px; line-height:1.5; }
    .section-4-wrapper .badge{
      display:inline-block;
      background:var(--c-primary);
      color:var(--c-white);
      padding:4px 10px;
      border-radius:999px;
      font-size:.78rem;
      font-weight:800;
      margin-left:10px;
      vertical-align:middle;
    }

    .section-4-wrapper .kpis{
      display:grid;
      grid-template-columns: repeat(4, 1fr);
      gap:12px;
      margin:16px 0 22px;
    }
    .section-4-wrapper .kpi{
      background:var(--c-white);
      border-radius:var(--radius);
      padding:14px 14px 12px;
      box-shadow:var(--shadow);
      border:1px solid rgba(0,0,0,.05);
      position:relative;
      overflow:hidden;
    }
    .section-4-wrapper .kpi::after{
      content:"";
      position:absolute;
      inset:auto -30px -30px auto;
      width:120px; height:120px;
      border-radius:999px;
      background:rgba(202,241,235,.55);
      transform:rotate(12deg);
    }
    .section-4-wrapper .kpi .label{ color:var(--c-muted); font-size:.82rem; font-weight:700; margin-bottom:8px; }
    .section-4-wrapper .kpi .value{ font-size:1.45rem; font-weight:900; letter-spacing:-.2px; }
    .section-4-wrapper .kpi .note{ margin-top:6px; color:var(--c-muted); font-size:.78rem; line-height:1.25; }

    .section-4-wrapper .section{
      background:var(--c-white);
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      border-left:5px solid var(--c-primary);
      padding:18px 18px 16px;
      margin:0 0 18px;
    }
    .section-4-wrapper .section.danger{ border-left-color: var(--c-danger); }
    .section-4-wrapper .section h3{
      margin:0;
      font-size:1.1rem;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:12px;
    }
    .section-4-wrapper .section h3 small{
      color:var(--c-muted);
      font-weight:700;
      font-size:.78rem;
    }

    .section-4-wrapper .grid2{ display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:14px; }
    .section-4-wrapper .grid3{ display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px; margin-top:12px; }
    .section-4-wrapper canvas{ display:block; }

    .section-4-wrapper .chart-container{ position:relative; width:100%; height:280px; }

    .section-4-wrapper .helper{
      margin-top:8px;
      color:var(--c-muted);
      font-size:.78rem;
      font-style:italic;
    }

    /* Chips */
    .section-4-wrapper .chips{ display:flex; flex-wrap:wrap; gap:8px; margin-top:12px; }
    .section-4-wrapper .chip{
      border:1px solid rgba(0,0,0,.08);
      background:rgba(202,241,235,.35);
      color:var(--c-text);
      padding:8px 10px;
      border-radius:999px;
      font-weight:800;
      font-size:.82rem;
      cursor:pointer;
      transition:.16s;
      user-select:none;
    }
    .section-4-wrapper .chip:hover{ transform:translateY(-1px); }
    .section-4-wrapper .chip.active{ background:var(--c-accent); border-color:rgba(0,0,0,.06); }

    /* JTBD cards */
    .section-4-wrapper .jtbd-list{ margin-top:12px; display:grid; grid-template-columns:1fr 1fr; gap:10px; }
    .section-4-wrapper .jtbd{
      border:1px solid rgba(0,0,0,.06);
      border-radius:var(--radius-sm);
      padding:12px 12px;
      background:rgba(255,235,218,.35);
    }
    .section-4-wrapper .jtbd .top{ display:flex; align-items:center; justify-content:space-between; gap:10px; }
    .section-4-wrapper .jtbd .name{ font-weight:900; }
    .section-4-wrapper .tag{
      font-size:.72rem; font-weight:900;
      border-radius:999px; padding:4px 8px;
      background:rgba(101,189,173,.16);
      color:var(--c-primary);
      white-space:nowrap;
    }
    .section-4-wrapper .tag.secondary{ background:rgba(255,204,151,.55); color:var(--c-text); }
    .section-4-wrapper .tag.support{ background:rgba(202,241,235,.9); color:var(--c-text); }
    .section-4-wrapper .jtbd p{ margin:8px 0 0; color:var(--c-muted); font-size:.86rem; line-height:1.35; }

    /* ICP cards */
    .section-4-wrapper .profile{
      border-radius:var(--radius);
      border:1px solid rgba(0,0,0,.06);
      padding:14px;
      background:#fff;
    }
    .section-4-wrapper .profile h4{ margin:10px 0 6px; font-size:1.1rem; }
    .section-4-wrapper .meta{ color:var(--c-muted); font-weight:700; font-size:.86rem; }
    .section-4-wrapper .profile ul{ margin:10px 0 0 18px; color:var(--c-muted); line-height:1.45; font-size:.9rem; }
    .section-4-wrapper .profile .pill{ background:rgba(255,204,151,.35); color:var(--c-text); }
    .section-4-wrapper .profile.primary{ border-color:rgba(101,189,173,.45); }
    .section-4-wrapper .profile.secondary{ border-color:rgba(255,204,151,.75); }

    /* Sources */
    .section-4-wrapper .sources{
      margin-top:12px;
      border-radius:var(--radius-sm);
      background:rgba(202,241,235,.28);
      padding:12px;
      border:1px dashed rgba(0,0,0,.12);
      display:none;
      font-size:.88rem;
      color:var(--c-muted);
      line-height:1.4;
    }
    .section-4-wrapper .linkbtn{
      border:0;
      background:rgba(202,241,235,.8);
      padding:8px 10px;
      border-radius:12px;
      font-weight:900;
      cursor:pointer;
    }

    /* Exclusion */
    .section-4-wrapper .excl-btn{
      width:100%;
      text-align:left;
      padding:12px 12px;
      border-radius:var(--radius-sm);
      border:1px solid rgba(0,0,0,.08);
      background:#fff;
      cursor:pointer;
      transition:.16s;
    }
    .section-4-wrapper .excl-btn:hover{ border-color:var(--c-danger); background:rgba(231,76,60,.05); }
    .section-4-wrapper .excl-reason{
      display:none;
      margin-top:10px;
      padding:12px;
      border-radius:var(--radius-sm);
      border:1px dashed rgba(231,76,60,.6);
      background:rgba(231,76,60,.06);
      color:var(--c-danger);
      line-height:1.45;
      font-weight:700;
    }

    /* Modal */
    .sec4-modal{
      display:none;
      position:fixed; inset:0;
      background:rgba(0,0,0,.45);
      z-index:120;
      padding:24px;
    }
    .sec4-modal.open{ display:flex; align-items:center; justify-content:center; }
    .section-4-wrapper .modal-card{
      width:min(760px, 96vw);
      background:#fff;
      border-radius:22px;
      box-shadow:var(--shadow);
      padding:18px 18px 16px;
      border:1px solid rgba(0,0,0,.06);
    }
    .section-4-wrapper .modal-card h3{ margin:0 0 6px; }
    .section-4-wrapper .modal-card p{ margin:8px 0; color:var(--c-muted); line-height:1.5; }
    .section-4-wrapper .modal-card .actions{ display:flex; gap:10px; justify-content:flex-end; margin-top:12px; }
    .section-4-wrapper .modal-card .actions button{
      border:0; cursor:pointer; font-weight:900;
      border-radius:12px; padding:10px 12px;
    }
    .section-4-wrapper .btn-primary{ background:var(--c-primary); color:#fff; }
    .section-4-wrapper .btn-ghost{ background:rgba(0,0,0,.06); color:var(--c-text); }

    @media (max-width: 980px){
      .section-4-wrapper .sec4-nav{ display:none; }
      .section-4-wrapper .topbar{ display:block; }
      .section-4-wrapper .sec4-main{ padding:18px 14px 46px; }
      .section-4-wrapper .kpis{ grid-template-columns:1fr 1fr; }
      .section-4-wrapper .grid2{ grid-template-columns:1fr; }
      .section-4-wrapper .jtbd-list{ grid-template-columns:1fr; }
      .section-4-wrapper .chart-container{ height:260px; }
    }
</style>

<div class="section-4-wrapper">
  
  <div class="topbar">
    <div class="row">
      <button class="iconbtn" id="sec4_openNav">☰</button>
      <div style="display:flex; align-items:center; gap:10px;">
        <div style="font-weight:900; color:var(--c-primary);">Section 4 Dashboard</div>
        <span class="pill">Decision Gate</span>
      </div>
      <button class="iconbtn" id="sec4_openNotes">i</button>
    </div>
  </div>

  <div class="sec4-drawer" id="sec4_drawer">
    <div class="drawer-panel">
      <div class="brand">
        <h2>Decisions</h2>
        <span class="pill">ICP</span>
      </div>
      <div class="navlinks" id="sec4_drawerLinks">
        <a href="#sec4_jtbd">JTBD Ranking</a>
        <a href="#sec4_needs">Needs Matrix</a>
        <a href="#sec4_value">Value Logic</a>
        <a href="#sec4_icp">ICP Profiles</a>
        <a href="#sec4_compare">ICP vs Exclusions</a>
        <a href="#sec4_exclusions">Exclusions</a>
        <a href="#sec4_usage">Usage Context</a>
      </div>
      <div class="nav-footer">
        Tip: Tap a section name to jump. Use the “Indexed indicators” note for chart interpretation.
        <button id="sec4_btnMethodDrawer">Indexed Indicators Note</button>
      </div>
    </div>
  </div>

  <div class="sec4-modal" id="sec4_methodModal">
    <div class="modal-card">
      <h3>Indexed Indicators (How to read the charts)</h3>
      <p>
        Some Section 4 visuals may use <strong>indexed indicators</strong> (e.g., 1–5 or 0–10) when the underlying research text is qualitative.
        These indexes are <strong>non-statistical</strong> and exist only to make complex decision logic easier to grasp.
      </p>
      <p>
        If you have real numeric data (survey, panel, platform exports), replace the indexed arrays in the HTML with actual values.
      </p>
      <div class="actions">
        <button class="btn-ghost" id="sec4_closeMethod">Close</button>
        <button class="btn-primary" id="sec4_gotItMethod">Got it</button>
      </div>
    </div>
  </div>

  <div class="app">
    <nav class="sec4-nav">
      <div class="brand">
        <h2>Decisions</h2>
        <span class="pill">Section 4</span>
      </div>

      <div class="navlinks" id="sec4_navLinks">
        <a href="#sec4_jtbd">JTBD Ranking</a>
        <a href="#sec4_needs">Needs Matrix</a>
        <a href="#sec4_value">Value Logic</a>
        <a href="#sec4_icp">ICP Profiles</a>
        <a href="#sec4_compare">ICP vs Exclusions</a>
        <a href="#sec4_exclusions">Exclusions</a>
        <a href="#sec4_usage">Usage Context</a>
      </div>

      <div class="nav-footer">
        <div><strong>Goal:</strong> Make ICP decisions understandable in &lt; 5 minutes.</div>
        <div style="margin-top:8px;">Charts may use indexed indicators when data is qualitative.</div>
        <button id="sec4_btnMethodNav">Indexed Indicators Note</button>
      </div>
    </nav>

    <main class="sec4-main">
      <div class="header">
        <h1>ICP & Decision Dashboard <span class="badge">Section 4 Output</span></h1>
        <p class="subtitle">
          This dashboard turns Section 3’s risk psychology into clear decisions: <strong>what jobs matter</strong>, <strong>what needs are non-negotiable</strong>, and <strong>who the brand is (and isn’t) for</strong>.
          It is designed for fast stakeholder alignment.
        </p>
      </div>

      <div class="kpis">
        <div class="kpi">
          <div class="label">Primary Purchase Driver</div>
          <div class="value">Safety & Stability</div>
          <div class="note">Non-negotiable decision logic under risk.</div>
        </div>
        <div class="kpi">
          <div class="label">Retention Driver</div>
          <div class="value">Routine Confidence</div>
          <div class="note">Consistency beats novelty for this user.</div>
        </div>
        <div class="kpi">
          <div class="label">Premium Justification</div>
          <div class="value">Risk Reduction</div>
          <div class="note">“Peace of mind” logic (psychological).</div>
        </div>
        <div class="kpi">
          <div class="label">Strategic Exclusion</div>
          <div class="value">Price-first</div>
          <div class="note">Structurally incompatible; high churn.</div>
        </div>
      </div>

      <!-- JTBD -->
      <section id="sec4_jtbd" class="section">
        <h3>
          1) Jobs-To-Be-Done (JTBD) — Ranked
          <small><button class="linkbtn" data-toggle="sec4_srcJTBD">Show sources</button></small>
        </h3>

        <div class="chips" aria-label="JTBD Filters">
          <div class="chip active" data-filter="all">All</div>
          <div class="chip" data-filter="primary">Adoption</div>
          <div class="chip" data-filter="secondary">Retention</div>
          <div class="chip" data-filter="support">Premium</div>
          <div class="chip" data-filter="functional">Functional</div>
          <div class="chip" data-filter="emotional">Emotional</div>
          <div class="chip" data-filter="social">Social/Value</div>
        </div>

        <div class="grid2">
          <div>
            <div class="chart-container"><canvas id="sec4_chartJTBD"></canvas></div>
            <div class="helper">Indexed (1–5) for visualization only when data is qualitative.</div>
          </div>
          <div>
            <div class="chart-container"><canvas id="sec4_chartJobTypes"></canvas></div>
            <div class="helper">Distribution of job types (share of emphasis).</div>
          </div>
        </div>

        <div class="jtbd-list" id="sec4_jtbdList">
          <!-- populated by JS -->
        </div>

        <div class="sources" id="sec4_srcJTBD">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Section 3 synthesis (risk aversion → safety-first needs)<br/>
          • Forum/review excerpts showing “repeat purchase = stability” logic<br/>
          • Search behavior (ingredient safety / verification intent)<br/>
        </div>
      </section>

      <!-- Needs -->
      <section id="sec4_needs" class="section">
        <h3>
          2) Needs Matrix — Rejection Triggers vs Secondary Benefits
          <small><button class="linkbtn" data-toggle="sec4_srcNeeds">Show sources</button></small>
        </h3>
        <div class="grid2">
          <div>
            <div class="chart-container"><canvas id="sec4_chartNeeds"></canvas></div>
            <div class="helper">Indexed hierarchy: 5 = non-negotiable.</div>
          </div>
          <div>
            <div class="profile" style="background:rgba(255,235,218,.35);">
              <div class="meta">Decision framing</div>
              <ul>
                <li><strong>Non-negotiable:</strong> perceived safety, low reaction risk, verification/legitimacy signals.</li>
                <li><strong>Tolerable compromises:</strong> slower visible results, plain packaging, low/soft scent.</li>
                <li><strong>Irrelevant:</strong> viral novelty, “shock value” promises, celebrity endorsement (if proof is weak).</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="sources" id="sec4_srcNeeds">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Shopee/Tokopedia review patterns (rejection reasons)<br/>
          • Female Daily threads on irritation/regret and “safe routine” needs<br/>
          • Section 3 emotional language clusters (fear → rejection triggers)<br/>
          <em>Note:</em> Avoid precise percentages unless you have counted a defined sample.
        </div>
      </section>

      <!-- Value Logic -->
      <section id="sec4_value" class="section">
        <h3>3) Psychological Willingness-To-Pay (WTP) Logic <small><button class="linkbtn" data-toggle="sec4_srcWTP">Show sources</button></small></h3>
        <div class="grid2">
          <div>
            <div class="chart-container"><canvas id="sec4_chartWTP"></canvas></div>
            <div class="helper">Concept map: risk aversion vs willingness-to-pay (indexed 0–10).</div>
          </div>
          <div class="profile" style="background:rgba(202,241,235,.32); border-color:rgba(101,189,173,.35);">
            <div class="meta">What this means</div>
            <h4 style="margin:10px 0 6px;">The “Peace of Mind” Premium</h4>
            <div style="color:var(--c-muted); font-size:.92rem; line-height:1.5;">
              Consumers justify paying more when the purchase is framed as <strong>risk reduction</strong>:

              avoiding regret, avoiding worsening conditions, and reducing “trial-and-error” cost.

              <br/><br/>
              <strong>Important:</strong> Any cost comparison (e.g., dermatologist repair) should be treated as an <em>illustrative scenario</em> unless supported by Indonesia-specific evidence.
            </div>
          </div>
        </div>

        <div class="sources" id="sec4_srcWTP">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Section 3 value reframing logic (risk insurance vs novelty)<br/>
          • Behavioral research on loss aversion / regret avoidance in purchase decisions<br/>
          • Review/forum excerpts showing “I’d rather pay more than repeat failure” language<br/>
        </div>
      </section>

      <!-- ICP -->
      <section id="sec4_icp" class="section">
        <h3>4) Ideal Customer Profiles (ICP) <small><button class="linkbtn" data-toggle="sec4_srcICP">Show sources</button></small></h3>

        <div class="grid2">
          <div class="profile primary">
            <span class="pill">PRIMARY (Core)</span>
            <h4>Stability-Seeking Pragmatist</h4>
            <div class="meta">Derived: age, class, risk tolerance</div>
            <ul>
              <li><strong>Age range:</strong> 28–40 (derived)</li>
              <li><strong>Economic class:</strong> middle-up / upper (derived from WTP logic)</li>
              <li><strong>Decision maturity:</strong> high; low tolerance for uncertainty</li>
              <li><strong>Routine behavior:</strong> prefers stable, repeatable daily use</li>
              <li><strong>Core job:</strong> maintain baseline, avoid worsening, avoid regret</li>
            </ul>
          </div>

          <div class="profile secondary">
            <span class="pill">SECONDARY (Halo)</span>
            <h4>Evidence-Seeking Verifier</h4>
            <div class="meta">Credibility amplifier</div>
            <ul>
              <li><strong>Age range:</strong> 19–27 (derived)</li>
              <li><strong>Economic class:</strong> middle / middle-up</li>
              <li><strong>Decision maturity:</strong> investigative, research-driven</li>
              <li><strong>Routine behavior:</strong> tests cautiously; shares verification learnings</li>
              <li><strong>Halo role:</strong> helps normalize proof-led trust for the Primary ICP</li>
            </ul>
          </div>
        </div>

        <div class="sources" id="sec4_srcICP">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Section 3: authority-seeking patterns + claim skepticism<br/>
          • Review/forum evidence: “forever brand” / “safe routine” language clusters<br/>
          • Search behavior: verification intent (BPOM/ingredients) as maturity signal<br/>
        </div>
      </section>

      <!-- ICP vs Exclusions -->
      <section id="sec4_compare" class="section">
        <h3>5) ICP vs Excluded Segments — Structural Fit <small><button class="linkbtn" data-toggle="sec4_srcCompare">Show sources</button></small></h3>

        <div class="grid2">
          <div>
            <div class="chart-container"><canvas id="sec4_chartCompare"></canvas></div>
            <div class="helper">Indexed comparison (0–10) to visualize fit vs churn drivers.</div>
          </div>
          <div class="profile" style="background:rgba(255,204,151,.28); border-color:rgba(255,204,151,.8);">
            <div class="meta">How to read</div>
            <ul>
              <li><strong>ICP</strong> scores high on risk aversion & routine stability.</li>
              <li><strong>Excluded segments</strong> score high on price sensitivity or novelty seeking.</li>
              <li>High mismatch = predictable churn, regardless of messaging.</li>
            </ul>
          </div>
        </div>

        <div class="sources" id="sec4_srcCompare">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Section 3: switching behavior + fatigue patterns<br/>
          • Review evidence: “switch for cheaper” language (price-first)<br/>
          • Social discourse: “try everything” novelty patterns (trend-driven)

        </div>
      </section>

      <!-- Exclusions -->
      <section id="sec4_exclusions" class="section danger">
        <h3>6) Strategic Exclusions — Who the Brand is NOT For</h3>
        <div class="grid3">
          <button class="excl-btn" data-excl="price"><strong>Price-first buyers</strong><br/><span style="color:var(--c-muted); font-size:.85rem;">Lowest cost wins; proof rarely paid for.</span></button>
          <button class="excl-btn" data-excl="trend"><strong>Trend / novelty seekers</strong><br/><span style="color:var(--c-muted); font-size:.85rem;">Constant switching; low routine commitment.</span></button>
          <button class="excl-btn" data-excl="perf"><strong>Performance chasers</strong><br/><span style="color:var(--c-muted); font-size:.85rem;">Speed over safety; higher irritation tolerance.</span></button>
        </div>
        <div class="excl-reason" id="sec4_exclReason"></div>
      </section>

      <!-- Usage -->
      <section id="sec4_usage" class="section">
        <h3>7) Usage Context & Routine Expectations <small><button class="linkbtn" data-toggle="sec4_srcUsage">Show sources</button></small></h3>
        <div class="grid2">
          <div>
            <div class="chart-container"><canvas id="sec4_chartUsage"></canvas></div>
            <div class="helper">Radar profile (0–5): stability vs experimentation.</div>
          </div>
          <div class="profile" style="background:rgba(255,235,218,.35);">
            <div class="meta">Routine expectations</div>
            <ul>
              <li>Daily use must feel <strong>safe and predictable</strong>.</li>
              <li>Preference for <strong>simple routines</strong> over multi-step experimentation.</li>
              <li>Commitment horizon favors <strong>long-term consistency</strong> over short-term spikes.</li>
            </ul>
          </div>
        </div>
        <div class="sources" id="sec4_srcUsage">
          <strong>Sources (add/replace with your real links):</strong><br/>
          • Section 3: fatigue + switching patterns<br/>
          • Forum threads on “simple routine” / “basic but safe” preferences<br/>
        </div>
      </section>
    </main>
  </div>
</div>

<script>
    (function(){ // IIFE scope
    
        // ---------- Modal ----------
        function openMethod(){ document.getElementById('sec4_methodModal').classList.add('open'); }
        function closeMethod(){ document.getElementById('sec4_methodModal').classList.remove('open'); }

        document.getElementById('sec4_btnMethodNav')?.addEventListener('click', openMethod);
        document.getElementById('sec4_btnMethodDrawer')?.addEventListener('click', openMethod);
        document.getElementById('sec4_closeMethod')?.addEventListener('click', closeMethod);
        document.getElementById('sec4_gotItMethod')?.addEventListener('click', closeMethod);
        document.getElementById('sec4_openNotes')?.addEventListener('click', openMethod);

        // ---------- Drawer ----------
        const drawer = document.getElementById('sec4_drawer');
        document.getElementById('sec4_openNav').addEventListener('click', ()=> drawer.classList.add('open'));
        drawer.addEventListener('click', (e)=>{ if(e.target === drawer) drawer.classList.remove('open'); });
        
        document.querySelectorAll('#sec4_drawerLinks a').forEach(a=>{
            a.addEventListener('click', ()=> drawer.classList.remove('open'));
        });

        // ---------- Active nav on scroll ----------
        const navIds = ['sec4_jtbd','sec4_needs','sec4_value','sec4_icp','sec4_compare','sec4_exclusions','sec4_usage'];
        const sections = navIds.map(id => document.getElementById(id));
        const linkSets = [document.getElementById('sec4_navLinks'), document.getElementById('sec4_drawerLinks')].filter(Boolean);

        const observer = new IntersectionObserver((entries)=>{
            entries.forEach(entry=>{
                if(entry.isIntersecting){
                    linkSets.forEach(set=>{
                        set.querySelectorAll('a').forEach(a=> a.classList.toggle('active', a.getAttribute('href') === '#'+entry.target.id));
                    });
                }
            });
        }, { rootMargin: '-35% 0px -55% 0px', threshold: 0.01 });

        sections.forEach(s=> s && observer.observe(s));

        // ---------- Sources toggles ----------
        // Use delegated click or attach via data attribute to avoid inline onclick
        document.querySelectorAll('.linkbtn[data-toggle]').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.dataset.toggle;
                const el = document.getElementById(id);
                if(el) el.style.display = (el.style.display === 'block') ? 'none' : 'block';
            });
        });

        // ---------- JTBD data & filters ----------
        const jtbdItems = [
            {name:'Avoid reactions / irritation risk', tier:'primary', kind:'functional', desc:'Hire products to minimize the chance of worsening problems and prevent regret.'},
            {name:'Maintain baseline stability daily', tier:'secondary', kind:'functional', desc:'Consistency and predictability matter more than novelty.'},
            {name:'Reduce anxiety (“peace of mind”)', tier:'primary', kind:'emotional', desc:'Emotional relief is a core adoption driver after repeated failures.'},
            {name:'Trust verification / legitimacy', tier:'primary', kind:'social', desc:'Consumers use verification signals as shortcuts to reduce uncertainty.'},
            {name:'Routine confidence & loyalty', tier:'secondary', kind:'emotional', desc:'Once “safe”, users stick—switching decreases.'},
            {name:'Premium justification (risk insurance)', tier:'support', kind:'emotional', desc:'Pay more when framed as risk reduction, not indulgence.'},
        ];

        const jtbdList = document.getElementById('sec4_jtbdList');
        function renderJTBD(filter){
            if(!jtbdList) return;
            jtbdList.innerHTML = '';
            const items = jtbdItems.filter(it=>{
                if(filter === 'all') return true;
                return it.tier === filter || it.kind === filter;
            });
            items.forEach(it=>{
                const div = document.createElement('div');
                div.className = 'jtbd';
                div.dataset.tier = it.tier;
                div.dataset.kind = it.kind;
                const tagClass = it.tier === 'secondary' ? 'tag secondary' : (it.tier === 'support' ? 'tag support' : 'tag');
                const tagText = it.tier === 'primary' ? 'Adoption' : (it.tier === 'secondary' ? 'Retention' : 'Premium');
                div.innerHTML = `
                <div class="top">
                    <div class="name">${it.name}</div>
                    <span class="${tagClass}">${tagText} • ${it.kind.charAt(0).toUpperCase()+it.kind.slice(1)}</span>
                </div>
                <p>${it.desc}</p>
                `;
                jtbdList.appendChild(div);
            });
        }
        renderJTBD('all');

        document.querySelectorAll('#sec4_jtbd .chip').forEach(ch=>{
            ch.addEventListener('click', ()=>{
                document.querySelectorAll('#sec4_jtbd .chip').forEach(x=> x.classList.remove('active'));
                ch.classList.add('active');
                renderJTBD(ch.dataset.filter);
            });
        });

        // ---------- Charts (indexed demo values) ----------
        if(typeof Chart !== 'undefined'){
            const palette = ['#65BDAD', '#FFCC97', '#CAF1EB'];

            // JTBD Priority
            const c1 = document.getElementById('sec4_chartJTBD');
            if(c1) new Chart(c1, {
            type: 'bar',
            data: {
                labels: ['Adoption', 'Retention', 'Premium'],
                datasets: [{
                label: 'Importance (1–5)',
                data: [4.8, 4.3, 3.6],
                backgroundColor: palette,
                borderRadius: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2),
                indexAxis:'y',
                plugins:{ legend:{display:false}, title:{display:true, text:'JTBD Priority (Indexed)'} },
                scales:{ x:{ beginAtZero:true, max:5 } }
            }
            });

            // Job type distribution
            const c2 = document.getElementById('sec4_chartJobTypes');
            if(c2) new Chart(c2, {
            type:'doughnut',
            data:{
                labels:['Functional','Emotional','Social/Value'],
                datasets:[{ data:[48, 38, 14], backgroundColor:palette }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2),
                plugins:{ title:{ display:true, text:'Job Type Distribution (Share)'} }
            }
            });

            // Needs hierarchy
            const c3 = document.getElementById('sec4_chartNeeds');
            if(c3) new Chart(c3, {
            type:'bar',
            data:{
                labels:['Safety / low reaction risk','Legitimacy / verification','Routine fit','Scent / sensorial','Viral novelty'],
                datasets:[{
                label:'Decision weight (1–5)',
                data:[5.0, 4.6, 4.0, 2.2, 1.4],
                backgroundColor:'#65BDAD',
                borderRadius:10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2),
                plugins:{ legend:{display:false}, title:{display:true, text:'Need Hierarchy (Indexed)'} },
                scales:{ y:{ beginAtZero:true, max:5 } }
            }
            });

            // WTP scatter
            const c4 = document.getElementById('sec4_chartWTP');
            if(c4) new Chart(c4, {
            type:'scatter',
            data:{
                datasets:[
                { label:'Primary ICP', data:[{x:9, y:8.5}], backgroundColor:'#65BDAD', pointRadius:12 },
                { label:'Secondary ICP', data:[{x:7.2, y:6.2}], backgroundColor:'#FFCC97', pointRadius:10 }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2),
                plugins:{ title:{display:true, text:'Risk Aversion vs Willingness-to-Pay (Indexed)'} },
                scales:{
                x:{ title:{display:true, text:'Risk Aversion (0–10)'}, min:0, max:10 },
                y:{ title:{display:true, text:'WTP Readiness (0–10)'}, min:0, max:10 }
                }
            }
            });

            // ICP vs exclusions comparison
            const c5 = document.getElementById('sec4_chartCompare');
            if(c5) new Chart(c5, {
            type:'bar',
            data:{
                labels:['Primary ICP','Secondary ICP','Price-first','Trend-driven','Performance chaser'],
                datasets:[
                { label:'Risk aversion', data:[9, 7.2, 3, 4, 2.5], backgroundColor:'rgba(101,189,173,.75)', borderRadius:10 },
                { label:'Price sensitivity', data:[3.5, 5.5, 9.5, 7.5, 6.5], backgroundColor:'rgba(255,204,151,.85)', borderRadius:10 },
                { label:'Routine stability', data:[8.5, 6.5, 3, 2.5, 4], backgroundColor:'rgba(202,241,235,.95)', borderRadius:10 }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2),
                plugins:{ title:{display:true, text:'Structural Fit Comparison (Indexed)'} },
                scales:{ y:{ beginAtZero:true, max:10 } }
            }
            });

            // Usage radar
            const c6 = document.getElementById('sec4_chartUsage');
            if(c6) new Chart(c6, {
            type:'radar',
            data:{
                labels:['Routine stability','Safety focus','Long-term commitment','Experimentation tolerance'],
                datasets:[{
                label:'Target profile (0–5)',
                data:[5, 5, 4.5, 1.6],
                fill:true,
                backgroundColor:'rgba(101,189,173,.18)',
                borderColor:'#65BDAD',
                pointBackgroundColor:'#65BDAD'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                devicePixelRatio: (window.devicePixelRatio || 2), scales:{ r:{ min:0, max:5, ticks:{ display:false } } } }
            });
        }

        // ---------- Exclusions ----------
        // Attached via event delegation for exlc-btn
        document.querySelectorAll('.excl-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.dataset.excl;
                const box = document.getElementById('sec4_exclReason');
                if(!box) return;
                box.style.display = 'block';
                const reasons = {
                    price: '<strong>Structural incompatibility:</strong> the dominant job is low price, not risk reduction. Proof-led value is not reliably paid for; churn is predictable.',
                    trend: '<strong>Structural incompatibility:</strong> novelty is the reward. Safety-first brands require routine commitment; novelty seekers switch before compound benefits appear.',
                    perf: '<strong>Structural incompatibility:</strong> prioritizes speed over stability. If results are not immediate, the product is judged “weak”, leading to rapid abandonment.'
                };
                box.innerHTML = reasons[type] || '';
            });
        });

    })();
</script>
