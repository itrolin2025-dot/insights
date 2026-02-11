<style>
:root{
  --primary-section-6:#65BDAD;
  --accent-section-6:#FFCC97;
  --bg-section-6:#FFEBDA;
  --soft-section-6:#CAF1EB;
  --text-section-6:#1f2a2e;
  --muted-section-6:#5c6a70;
  --card-section-6:#ffffff;
  --shadow-section-6:0 10px 30px rgba(0,0,0,.08);
  --radius-section-6:16px;
}
*.section-6{box-sizing:border-box}
html.section-6,body.section-6{height:100%}
body.section-6{
  margin:0;
  font-family:ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
  background:var(--bg-section-6);
  color:var(--text-section-6);
}
.layout-section-6{display:flex; min-height:100vh; overflow-x:hidden}
aside.section-6{
  width:290px;
  background:var(--card-section-6);
  border-right:1px solid rgba(0,0,0,.06);
  position:sticky; top:0; height:100vh;
  padding:22px 18px;
  display:flex; flex-direction:column; gap:14px;
}
.brand-section-6{
  display:flex; flex-direction:column; gap:6px; padding:10px 10px 2px 10px;
}
.brand-section-6 h1{font-size:14px; margin:0; letter-spacing:.12em; text-transform:uppercase; color:var(--muted-section-6)}
.brand-section-6 .title{font-size:18px; margin:0; font-weight:800; letter-spacing:-.02em}
.nav-section-6{
  display:flex; flex-direction:column; gap:6px;
}
.nav-section-6 a{
  text-decoration:none;
  color:var(--text-section-6);
  padding:10px 12px;
  border-radius:12px;
  font-size:14px;
  display:flex; align-items:center; gap:10px;
  transition:.15s;
}
.nav-section-6 a:hover{background:rgba(202,241,235,.6); color:var(--primary-section-6)}
.nav-section-6 a.active{background:var(--primary-section-6); color:white}
.filters-section-6{
  margin-top:6px;
  padding:12px;
  border-radius:14px;
  background:rgba(202,241,235,.55);
  border:1px solid rgba(101,189,173,.25);
}
.filters-section-6 h3{margin:0 0 10px 0; font-size:12px; text-transform:uppercase; letter-spacing:.12em; color:var(--muted-section-6)}
.field-section-6{display:flex; flex-direction:column; gap:6px; margin-bottom:10px}
label.section-6-label{font-size:12px; color:var(--muted-section-6)}
select.section-6{
  appearance:none;
  border:1px solid rgba(0,0,0,.14);
  border-radius:12px;
  padding:10px 12px;
  background:white;
  font-size:13px;
}
.btnrow-section-6{display:flex; gap:8px}
button.section-6{
  border:0;
  background:var(--primary-section-6);
  color:white;
  padding:10px 12px;
  border-radius:12px;
  font-weight:700;
  cursor:pointer;
  transition:.15s;
  font-size:13px;
}
button.secondary-section-6{
  background:white;
  color:var(--text-section-6);
  border:1px solid rgba(0,0,0,.14);
}
button.section-6:hover{transform:translateY(-1px)}
main.section-6{
  flex:1;
  padding:28px 28px 60px;
  max-width:1200px;
}
.header-section-6{
  background:linear-gradient(135deg, rgba(255,204,151,.55), rgba(202,241,235,.65));
  border:1px solid rgba(0,0,0,.06);
  border-radius:22px;
  box-shadow:var(--shadow-section-6);
  padding:22px 22px;
  margin-bottom:22px;
}
.header-section-6 h2{margin:0; font-size:28px; letter-spacing:-.03em}
.header-section-6 p{margin:8px 0 0; color:var(--muted-section-6); max-width:900px}
.grid-section-6{
  display:grid;
  grid-template-columns:repeat(12,1fr);
  gap:16px;
}
.card-section-6{
  background:var(--card-section-6);
  border-radius:var(--radius-section-6);
  box-shadow:var(--shadow-section-6);
  border:1px solid rgba(0,0,0,.04);
  padding:16px;
}
.card-section-6 h3{margin:0 0 10px 0; font-size:16px; color:var(--primary-section-6)}
.small-section-6{color:var(--muted-section-6); font-size:13px; margin:0 0 10px 0}
.span-6-section-6{grid-column:span 6}
.span-12-section-6{grid-column:span 12}
.span-4-section-6{grid-column:span 4}
.span-8-section-6{grid-column:span 8}

.section-section-6{margin-top:26px; scroll-margin-top:16px}
.section-title-section-6{
  display:flex; align-items:flex-end; justify-content:space-between;
  margin:24px 2px 12px;
}
.section-title-section-6 h2{margin:0; font-size:20px; letter-spacing:-.02em}
.pill-section-6{
  font-size:12px;
  padding:7px 10px;
  border-radius:999px;
  background:rgba(255,204,151,.55);
  border:1px solid rgba(255,204,151,.7);
  color:#7a4d1b;
  font-weight:800;
}
.canvas-wrap-section-6{height:260px}
.canvas-wrap-section-6.tall{height:360px}
.canvas-wrap-section-6.matrix{height:420px}
.canvas-wrap-section-6.small{height:220px}
.canvas-wrap-section-6 > canvas{width:100% !important; height:100% !important; display:block}

.table-section-6{
  width:100%;
  border-collapse:collapse;
  font-size:13px;
}
.table-section-6 th{
  text-align:left;
  padding:10px;
  background:rgba(202,241,235,.6);
  color:var(--primary-section-6);
  font-weight:900;
}
.table-section-6 td{
  padding:10px;
  border-bottom:1px solid rgba(0,0,0,.06);
}
.badge-section-6{
  display:inline-flex; align-items:center; gap:6px;
  padding:4px 8px; border-radius:999px;
  font-size:12px; font-weight:800;
  border:1px solid rgba(0,0,0,.06);
}
.badge-section-6.mass{background:#fff2e6}
.badge-section-6.inflation{background:#fff6d8}
.badge-section-6.premium{background:#e9fbf7}
.kbd-section-6{
  font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
  font-size:12px;
  background:rgba(0,0,0,.05);
  border:1px solid rgba(0,0,0,.08);
  border-radius:8px;
  padding:2px 6px;
}
.row-actions-section-6{display:flex; gap:8px; flex-wrap:wrap}
.chip-section-6{
  display:inline-flex; align-items:center;
  padding:4px 8px; border-radius:10px;
  background:rgba(202,241,235,.6);
  color:var(--primary-section-6); font-weight:800;
  font-size:12px; margin:0 6px 6px 0;
}

/* Modal hidden by default, shown on .open */
.modal-section-6{
  display:none; /* Hide modal initially */
  position:fixed;
  top:0; 
  left:0;
  right:0;
  bottom:0;
  width:100%;
  height:100%;
  z-index:9999;
  pointer-events:none;
}
.modal-section-6.open {
  display: flex !important;
  align-items: center;
  justify-content: center;
  pointer-events: auto;
}

.modal-section-6 .overlay-section-6{
  position:fixed;
  top:0; left:0; right:0; bottom:0;
  display:flex;
  align-items:center;
  justify-content:center;
  background:rgba(0,0,0,.45);
  opacity:0; 
  transition:.2s;
  z-index:10000;
}
.modal-section-6.open .overlay-section-6{opacity:1}

.modal-section-6 .panel-section-6{
  position: relative;
  z-index: 10001;
  width: 480px;
  max-width: 92vw;
  height: auto;
  min-height: 240px;
  max-height: 92vh;
  background: var(--card-section-6);
  border-radius: 18px;
  box-shadow: 0 8px 48px rgba(0,0,0,.20), 0 1.5px 6px rgba(0,0,0,.12);
  transition: .28s cubic-bezier(.16,1,.3,1);
  padding: 24px 22px;
  overflow: auto;
  border: 1px solid rgba(0,0,0,.06);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  transform: scale(0.95);
  opacity: 0;
}
.modal-section-6.open .panel-section-6{transform:scale(1); opacity:1}

.close-section-6{
  display:flex; justify-content:space-between; align-items:center;
  margin-bottom:8px;
}
.close-section-6 button.section-6{padding:8px 10px; border-radius:10px}
hr.section-6{border:none; border-top:1px solid rgba(0,0,0,.08); margin:14px 0}
.toggle-section-6{
  display:inline-flex; gap:8px; align-items:center;
  cursor:pointer; user-select:none;
  color:var(--primary-section-6);
  font-weight:900;
  font-size:13px;
}
.sources-section-6{
  display:none;
  margin-top:10px;
  padding:12px;
  background:rgba(0,0,0,.03);
  border:1px solid rgba(0,0,0,.06);
  border-radius:12px;
  color:var(--muted-section-6);
  font-size:12px;
  line-height:1.45;
}
.sources-section-6 a{color:inherit}
.notice-section-6{
  padding:12px;
  border-radius:14px;
  background:rgba(255,204,151,.45);
  border:1px solid rgba(255,204,151,.7);
  color:#6b3f14;
  font-weight:700;
  font-size:13px;
}
@media (max-width: 980px){
  aside.section-6{display:none}
  main.section-6{padding:18px}
  .span-6-section-6,.span-4-section-6,.span-8-section-6{grid-column:span 12}
  .canvas-wrap-section-6{height:240px}
  .canvas-wrap-section-6.tall{height:320px}
  .canvas-wrap-section-6.matrix{height:360px}
}
</style>
</head>
<body class="section-6">
<div class="layout-section-6">
  <aside class="section-6">
    <div class="brand-section-6">
      <h1>Q’WELL</h1>
      <p class="title">Section 6 Dashboard</p>
    </div>

    <div class="nav-section-6" id="nav-section-6">
      <a href="#universe-section-6" class="active">Universe</a>
      <a href="#inflation-section-6">Claim Inflation</a>
      <a href="#premium-section-6">Upper-Mass & Premium</a>
      <a href="#infrastructure-section-6">Trust Infrastructure</a>
      <a href="#logic-section-6">Claim–Price Logic</a>
      <a href="#matrix-section-6">Substitutability</a>
      <a href="#implications-section-6">Implications</a>
    </div>

    <div class="filters-section-6">
      <h3>Filters</h3>
      <div class="field-section-6">
        <label class="section-6-label">Price tier</label>
        <select id="tierSel-section-6" class="section-6">
          <option value="all">All</option>
          <option value="mass">Mass</option>
          <option value="inflation">Claim inflation</option>
          <option value="premium">Upper-mass / premium</option>
        </select>
      </div>
      <div class="field-section-6">
        <label class="section-6-label">Origin</label>
        <select id="originSel-section-6" class="section-6">
          <option value="all">All</option>
          <option value="Local">Local</option>
          <option value="International">International</option>
          <option value="Hybrid">Hybrid</option>
        </select>
      </div>
      <div class="field-section-6">
        <label class="section-6-label">Category</label>
        <select id="catSel-section-6" class="section-6">
          <option value="all">Hair + Body</option>
          <option value="hair">Hair</option>
          <option value="body">Body</option>
        </select>
      </div>
      <div class="btnrow-section-6">
        <button id="applyBtn-section-6" class="section-6">Apply</button>
        <button class="secondary-section-6 section-6" id="resetBtn-section-6">Reset</button>
      </div>
    </div>

    <div class="notice-section-6">
      Central idea: similar claim words ≠ same trust infrastructure.
    </div>
  </aside>

  <main class="section-6">
    <div class="header-section-6">
      <h2>Competitive Landscape & Structural Differentiation</h2>
      <p>Indonesia hair & body care: mapping the competitive universe, isolating “claim inflation”, and visualizing trust infrastructure so “true vs false substitutes” becomes obvious.</p>
    </div>

    <section id="universe-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>A. Competitive Universe</h2>
        <span class="pill-section-6">Map → Filter → Inspect</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-6-section-6">
          <h3>Universe by Price Tier</h3>
          <p class="small-section-6">Counts of brands in the current dataset (filter-aware).</p>
          <div class="canvas-wrap-section-6"><canvas id="cTier-section-6"></canvas></div>
        </div>
        <div class="card-section-6 span-6-section-6">
          <h3>Local vs International Split</h3>
          <p class="small-section-6">Filter-aware origin distribution.</p>
          <div class="canvas-wrap-section-6"><canvas id="cOrigin-section-6"></canvas></div>
        </div>

        <div class="card-section-6 span-12-section-6">
          <h3>Coverage Table (Click a brand)</h3>
          <p class="small-section-6">This table is the working “universe list” used for the charts.</p>
          <!-- <div class="row-actions-section-6" style="margin-bottom:10px">
            <span class="kbd-section-6">Tip</span>
            <span class="small-section-6" style="margin:0">Click any row to open the brand detail drawer.</span>
          </div> -->
          <div style="overflow-x:auto; -webkit-overflow-scrolling:touch;">
            <table class="table-section-6" style="min-width:700px;">
              <thead>
                <tr>
                  <th>Brand</th><th>Origin</th><th>Hair</th><th>Body</th><th>Tier</th><th>Price band</th><th>Trust summary</th>
                </tr>
              </thead>
              <tbody id="tbl-section-6"></tbody>
            </table>
          </div>

          <div class="toggle-section-6" data-target="src-universe-section-6">Show sources</div>
          <div id="src-universe-section-6" class="sources-section-6">
            Sources used in the research output include Top Brand Index, Euromonitor/Ken Research summaries, official brand pages, and marketplace scans; see full “Works cited” list in the Section 6 report. (This dashboard visualizes those findings.)

          </div>
        </div>
      </div>
    </section>

    <section id="inflation-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>B. Claim Inflation (Rp 50k–80k)</h2>
        <span class="pill-section-6">Claims → Clusters</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-8-section-6">
          <h3>Claim Cluster Frequency (inflation tier)</h3>
          <p class="small-section-6">Counts of claim keywords across brands tagged as “claim inflation”.</p>
          <div class="canvas-wrap-section-6 tall"><canvas id="cClaims-section-6"></canvas></div>
        </div>
        <div class="card-section-6 span-4-section-6">
          <h3>What “inflation” structurally means</h3>
          <p class="small-section-6">Not moral judgment—just how the tier tends to operate.</p>
          <div class="notice-section-6">
            Frequent pattern: premium-like wording + low transparency about lab protocol / clinical safety trials.

          </div>
          <hr class="section-6"/>
          <p class="small-section-6"><strong>How to read:</strong> claim words can be identical, but the cost structure diverges when you add stabilization, HRIPT, COA, and compliance proof.</p>

          <div class="toggle-section-6" data-target="src-inflation-section-6">Show sources</div>
          <div id="src-inflation-section-6" class="sources-section-6">
            Evidence signals are drawn from marketplace packaging/claims language and “Doktif/overclaim” discourse cited in the Section 6 report.

          </div>
        </div>
      </div>
    </section>

    <section id="premium-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>C. Upper-Mass & Premium</h2>
        <span class="pill-section-6">Price ↔ Verification</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-6-section-6">
          <h3>Claim Specificity vs Price</h3>
          <p class="small-section-6">Scatter (indexed): X = price index, Y = verification index (1–5). Conceptual if exact lab details are not public.</p>
          <div class="canvas-wrap-section-6"><canvas id="cScatter-section-6"></canvas></div>
        </div>
        <div class="card-section-6 span-6-section-6">
          <h3>Price band ranges (by tier)</h3>
          <p class="small-section-6">Approximate bands from the report; used to support the “not true substitutes” logic.</p>
          <table class="table-section-6">
            <thead><tr><th>Tier</th><th>Typical band</th><th>What it buys</th></tr></thead>
            <tbody>
              <tr><td><span class="badge-section-6 mass">Mass</span></td><td>Under ~Rp 50k</td><td>Scale + baseline compliance</td></tr>
              <tr><td><span class="badge-section-6 inflation">Claim inflation</span></td><td>~Rp 50k–80k</td><td>Claim language + viral distribution</td></tr>
              <tr><td><span class="badge-section-6 premium">Upper-mass / premium</span></td><td>Above ~Rp 80k</td><td>Verification, discipline, trust infrastructure</td></tr>
            </tbody>
          </table>

          <div class="toggle-section-6" data-target="src-premium-section-6">Show sources</div>
          <div id="src-premium-section-6" class="sources-section-6">
            Brand positioning and signals summarized from official pages and cited industry/press sources in the Section 6 report.

          </div>
        </div>
      </div>
    </section>

    <section id="infrastructure-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>D. Trust Infrastructure</h2>
        <span class="pill-section-6">Structure (not slogans)</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-12-section-6">
          <h3>Trust Infrastructure Radar (tier averages)</h3>
          <p class="small-section-6">Averages of indexed attributes (1–5). Used for structural comparison when raw lab data isn’t uniformly public.</p>
          <div class="canvas-wrap-section-6 tall"><canvas id="cRadar-section-6"></canvas></div>

          <div class="toggle-section-6" data-target="src-trust-section-6">Show sources</div>
          <div id="src-trust-section-6" class="sources-section-6">
            The Section 6 report references HRIPT, COA publishing, GMP/ISO signals, BPOM rule changes, and halal as trust proxies; see works cited in the report.

          </div>
        </div>
      </div>
    </section>

    <section id="logic-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>E. Claim–Price Tension Logic</h2>
        <span class="pill-section-6">Teach the “why”</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-12-section-6">
          <h3>Explainer</h3>
          <p class="small-section-6">This is the “meeting script”: why similar words don’t mean comparable products.</p>
          <div class="grid-section-6" style="margin-top:10px">
            <div class="card-section-6 span-4-section-6" style="box-shadow:none; border:1px dashed rgba(0,0,0,.12); background:rgba(255,235,218,.7)">
              <h3 style="color:#7a4d1b">1) Claim words</h3>
              <p class="small-section-6">“Natural”, “Gentle”, “Dermatologically tested” can be used across tiers.</p>
            </div>
            <div class="card-section-6 span-4-section-6" style="box-shadow:none; border:1px dashed rgba(0,0,0,.12); background:rgba(202,241,235,.55)">
              <h3>2) Verification depth</h3>
              <p class="small-section-6">Named lab, protocol detail, HRIPT, COA publishing, batch transparency.</p>
            </div>
            <div class="card-section-6 span-4-section-6" style="box-shadow:none; border:1px dashed rgba(0,0,0,.12); background:#e9fbf7">
              <h3 style="color:var(--primary-section-6)">3) Cost structure</h3>
              <p class="small-section-6">Stabilization, testing intensity, compliance burden → “reliability premium”.</p>
            </div>
          </div>

          <div class="toggle-section-6" data-target="src-logic-section-6">Show sources</div>
          <div id="src-logic-section-6" class="sources-section-6">
            “Veracity gap”, overclaim dynamics, and trust infrastructure concepts are articulated in the Section 6 report with cited sources.

          </div>
        </div>
      </div>
    </section>

    <section id="matrix-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>F. Substitutability Matrix</h2>
        <span class="pill-section-6">The “aha” moment</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-12-section-6">
          <h3>True vs False Substitutes (bubble)</h3>
          <p class="small-section-6">X = verification depth (0–100), Y = price index (0–100). Bubble size approximates “visibility” (conceptual).</p>
          <div class="canvas-wrap-section-6 matrix"><canvas id="cMatrix-section-6"></canvas></div>
          <p class="small-section-6" style="margin-top:10px"><strong>Interpretation:</strong> a brand becomes a <em>true substitute</em> when both verification depth and price/risk profile align with a safety-first buyer’s expectations.</p>

          <div class="toggle-section-6" data-target="src-matrix-section-6">Show sources</div>
          <div id="src-matrix-section-6" class="sources-section-6">
            Substitute framework and trust gates (BPOM, halal, lab transparency, HRIPT) are summarized in the Section 6 report.

          </div>
        </div>
      </div>
    </section>

    <section id="implications-section-6" class="section-section-6">
      <div class="section-title-section-6">
        <h2>G. Strategic Implications</h2>
        <span class="pill-section-6">What matters / what to reject</span>
      </div>

      <div class="grid-section-6">
        <div class="card-section-6 span-6-section-6">
          <h3>What competition actually matters</h3>
          <ul class="small-section-6">
            <li>Brands that invest in verification depth (HRIPT/COA/clear BPOM posture).</li>
            <li>Brands that sell a “reliability premium” (routine stability, risk reduction).</li>
            <li>Brands whose buyers share similar risk tolerance and usage expectations.</li>
          </ul>
        </div>
        <div class="card-section-6 span-6-section-6">
          <h3>What comparisons to structurally reject</h3>
          <ul class="small-section-6">
            <li>Price comparisons with Rp 50–80k claim-inflation brands.</li>
            <li>“Same ingredient” logic without stabilization/testing transparency.</li>
            <li>Any comparison that ignores verification depth and compliance burden.</li>
          </ul>
        </div>

        <div class="card-section-6 span-12-section-6">
          <h3>Copy-ready talking point</h3>
          <div class="notice-section-6" id="copyBlock-section-6">
            “If a product uses the same claim words but cannot show the same verification trail (lab protocol, HRIPT/COA, BPOM posture), it is not a true substitute—so price comparisons are structurally invalid.”
          </div>
          <div style="margin-top:10px" class="btnrow-section-6">
            <button id="copyBtn-section-6" class="section-6">Copy</button>
            <button class="secondary-section-6 section-6" id="copyBtn2-section-6">Copy (short)</button>
          </div>

          <div class="toggle-section-6" data-target="src-imp-section-6">Show sources</div>
          <div id="src-imp-section-6" class="sources-section-6">
            Derived synthesis from the Section 6 report: claim inflation mechanics, trust infrastructure, and substitute framework.

          </div>
        </div>
      </div>
    </section>

  </main>
</div>

<!-- Modal -->
<div class="modal-section-6" id="modal-section-6">
  <div class="overlay-section-6" id="modalOverlay-section-6"></div>
  <div class="panel-section-6" role="dialog" aria-modal="true" aria-label="Brand detail">
    <div class="close-section-6">
      <div>
        <div style="font-size:12px; text-transform:uppercase; letter-spacing:.12em; color:var(--muted-section-6)">Brand</div>
        <div id="dName-section-6" style="font-weight:900; font-size:18px; letter-spacing:-.02em">—</div>
      </div>
      <button class="secondary-section-6 section-6" id="modalClose-section-6">Close</button>
    </div>
    <div class="small-section-6" id="dMeta-section-6">—</div>
    <hr class="section-6"/>
    <div class="grid-section-6" style="grid-template-columns:1fr 1fr; gap:10px">
      <div class="card-section-6" style="box-shadow:none; border:1px solid rgba(0,0,0,.06)">
        <h3 style="margin-bottom:6px">Tier</h3>
        <div id="dTier-section-6" class="badge-section-6">—</div>
      </div>
      <div class="card-section-6" style="box-shadow:none; border:1px solid rgba(0,0,0,.06)">
        <h3 style="margin-bottom:6px">Price band</h3>
        <div id="dPrice-section-6" class="small-section-6" style="margin:0; font-weight:900; color:var(--text-section-6)">—</div>
      </div>
    </div>
    <hr class="section-6"/>
    <h3 style="color:var(--primary-section-6); margin:0 0 8px 0">Claims / signals</h3>
    <div id="dClaims-section-6"></div>
    <hr class="section-6"/>
    <h3 style="color:var(--primary-section-6); margin:0 0 8px 0">Trust attributes (indexed)</h3>
    <div class="small-section-6">
      <div><strong>Verification depth:</strong> <span id="dVer-section-6">—</span>/5</div>
      <div><strong>Testing transparency:</strong> <span id="dTrans-section-6">—</span>/5</div>
      <div><strong>BPOM visibility:</strong> <span id="dBpom-section-6">—</span>/5</div>
      <div><strong>Certification posture:</strong> <span id="dCert-section-6">—</span>/5</div>
      <div><strong>Claim specificity:</strong> <span id="dSpec-section-6">—</span>/5</div>
    </div>
    <hr class="section-6"/>
    <h3 style="color:var(--primary-section-6); margin:0 0 8px 0">Channels</h3>
    <div class="small-section-6" id="dChan-section-6">—</div>
  </div>
</div>

<script>
/* =========================
   Data model (derived from Section 6 narrative)
   Scores are indexed 1–5 when uniform public lab detail is not available.
   ========================= */
const BRAND_DATA_SECTION_6 = [
  // MASS / legacy
  {name:"Unilever (Dove/Lifebuoy/Vaseline)", origin:"International", hair:true, body:true, tier:"mass", priceBand:"Under ~Rp 50k", claims:["Reliability","Scale","Mass trust"], ver:2, trans:2, bpom:4, cert:2, spec:2, channels:"General trade, e-commerce"},
  {name:"P&G (Pantene)", origin:"International", hair:true, body:false, tier:"mass", priceBand:"Under ~Rp 50k", claims:["Heritage","Performance"], ver:2, trans:2, bpom:4, cert:2, spec:2, channels:"General trade, e-commerce"},
  {name:"Beiersdorf (Nivea)", origin:"International", hair:false, body:true, tier:"mass", priceBand:"Under ~Rp 50k", claims:["Dermatology heritage"], ver:2, trans:2, bpom:4, cert:2, spec:2, channels:"General trade, e-commerce"},
  {name:"Wardah", origin:"Local", hair:true, body:true, tier:"mass", priceBand:"~Rp 30k–60k", claims:["Halal","Local values"], ver:2, trans:3, bpom:5, cert:4, spec:3, channels:"General trade, beauty stores, e-commerce"},
  {name:"Emina", origin:"Local", hair:false, body:true, tier:"mass", priceBand:"~Rp 20k–60k", claims:["Youth","Halal"], ver:2, trans:2, bpom:5, cert:4, spec:2, channels:"General trade, e-commerce"},
  {name:"Mustika Ratu", origin:"Local", hair:true, body:true, tier:"mass", priceBand:"~Rp 25k–70k", claims:["Heritage","Jamu-inspired"], ver:2, trans:2, bpom:4, cert:2, spec:2, channels:"General trade, pharmacies"},
  // CLAIM INFLATION band (examples from the report)
  {name:"The Originote", origin:"Local", hair:false, body:true, tier:"inflation", priceBand:"~Rp 50k–80k", claims:["Natural","Gentle","Sensitive skin","Dermatologically tested"], ver:2, trans:1, bpom:4, cert:1, spec:3, channels:"TikTok Shop, Shopee"},
  {name:"Azarine", origin:"Local", hair:false, body:true, tier:"inflation", priceBand:"~Rp 50k–80k", claims:["Natural","Gentle","Sensitive skin"], ver:2, trans:2, bpom:5, cert:1, spec:3, channels:"E-commerce, modern trade"},
  // MASSTIGE / PREMIUM examples named in the report
  {name:"Somethinc", origin:"Local", hair:true, body:true, tier:"premium", priceBand:"~Rp 100k–300k", claims:["Transparency","INCI clarity","COA publishing"], ver:5, trans:5, bpom:5, cert:3, spec:5, channels:"Beauty specialty, e-commerce"},
  {name:"Skintific", origin:"Hybrid", hair:false, body:true, tier:"premium", priceBand:"~Rp 120k–250k", claims:["Barrier repair","Clinical language"], ver:4, trans:4, bpom:5, cert:2, spec:4, channels:"Social commerce, specialty"},
  {name:"Sensatia Botanicals", origin:"Local", hair:true, body:true, tier:"premium", priceBand:"~Rp 150k–400k", claims:["GMP/ISO posture","Traceability","Clean beauty"], ver:4, trans:4, bpom:5, cert:4, spec:4, channels:"Specialty retail, spa"},
  {name:"Erha", origin:"Local", hair:true, body:true, tier:"premium", priceBand:"~Rp 100k–250k", claims:["Dermatologist-led","Clinic heritage"], ver:4, trans:4, bpom:5, cert:2, spec:4, channels:"Clinics, pharmacies"},
  {name:"Ristra", origin:"Local", hair:false, body:true, tier:"premium", priceBand:"~Rp 100k–250k", claims:["Clinic/derm positioning"], ver:4, trans:3, bpom:5, cert:2, spec:3, channels:"Clinics, pharmacies"},
  {name:"Derma Express", origin:"Local", hair:false, body:true, tier:"premium", priceBand:"~Rp 100k–250k", claims:["Clinic/pro posture"], ver:3, trans:3, bpom:4, cert:2, spec:3, channels:"Clinics"},
  {name:"Utama Spice", origin:"Local", hair:true, body:true, tier:"premium", priceBand:"~Rp 120k–350k", claims:["Natural heritage","Traceability"], ver:3, trans:3, bpom:4, cert:3, spec:3, channels:"Specialty retail, Bali outlets"},
  {name:"Juara", origin:"International", hair:false, body:true, tier:"premium", priceBand:"~Rp 200k–500k", claims:["Plant-based heritage","Jamu tradition"], ver:3, trans:3, bpom:3, cert:2, spec:3, channels:"Premium retail / import"},
  {name:"L'Oréal", origin:"International", hair:true, body:true, tier:"premium", priceBand:"Masstige+ varies", claims:["Global R&D","Heritage"], ver:3, trans:2, bpom:4, cert:2, spec:2, channels:"Modern trade, e-commerce"},
];

/* =========================
   State
   ========================= */
const state_section_6 = { tier:"all", origin:"all", cat:"all" };
let charts_section_6 = {};

function normalizeTier_section_6(t){
  if(t==="premium") return "Upper-mass / premium";
  if(t==="inflation") return "Claim inflation";
  return "Mass";
}
function tierBadgeClass_section_6(t){
  if(t==="premium") return "premium";
  if(t==="inflation") return "inflation";
  return "mass";
}

function filteredData_section_6(){
  return BRAND_DATA_SECTION_6.filter(b=>{
    if(state_section_6.tier!=="all" && b.tier!==state_section_6.tier) return false;
    if(state_section_6.origin!=="all" && b.origin!==state_section_6.origin) return false;
    if(state_section_6.cat==="hair" && !b.hair) return false;
    if(state_section_6.cat==="body" && !b.body) return false;
    return true;
  });
}

/* =========================
   Table + Modal
   ========================= */
const tbl_section_6 = document.getElementById("tbl-section-6");
const modal_section_6 = document.getElementById("modal-section-6");
const modalOverlay_section_6 = document.getElementById("modalOverlay-section-6");
const modalClose_section_6 = document.getElementById("modalClose-section-6");

function renderTable_section_6(){
  const data = filteredData_section_6();
  tbl_section_6.innerHTML = "";
  data.forEach(b=>{
    const trust = `Ver ${b.ver}/5 · Trans ${b.trans}/5 · BPOM ${b.bpom}/5`;
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td><strong>${b.name}</strong></td>
      <td>${b.origin}</td>
      <td>${b.hair ? "●" : "—"}</td>
      <td>${b.body ? "●" : "—"}</td>
      <td><span class="badge-section-6 ${tierBadgeClass_section_6(b.tier)}">${normalizeTier_section_6(b.tier)}</span></td>
      <td>${b.priceBand}</td>
      <td>${trust}</td>
    `;
    tr.addEventListener("click", ()=>openModal_section_6(b.name));
    tbl_section_6.appendChild(tr);
  });
}

function openModal_section_6(name){
  const b = BRAND_DATA_SECTION_6.find(x=>x.name===name);
  if(!b) return;
  document.getElementById("dName-section-6").textContent = b.name;
  document.getElementById("dMeta-section-6").textContent = `${b.origin} • ${b.hair ? "Hair" : ""}${(b.hair && b.body) ? " + " : ""}${b.body ? "Body" : ""}`;
  const tierEl = document.getElementById("dTier-section-6");
  tierEl.className = `badge-section-6 ${tierBadgeClass_section_6(b.tier)}`;
  tierEl.textContent = normalizeTier_section_6(b.tier);
  document.getElementById("dPrice-section-6").textContent = b.priceBand;

  const claimsEl = document.getElementById("dClaims-section-6");
  claimsEl.innerHTML = "";
  b.claims.forEach(c=>{
    const s = document.createElement("span");
    s.className = "chip-section-6";
    s.textContent = c;
    claimsEl.appendChild(s);
  });

  document.getElementById("dVer-section-6").textContent = b.ver;
  document.getElementById("dTrans-section-6").textContent = b.trans;
  document.getElementById("dBpom-section-6").textContent = b.bpom;
  document.getElementById("dCert-section-6").textContent = b.cert;
  document.getElementById("dSpec-section-6").textContent = b.spec;
  document.getElementById("dChan-section-6").textContent = b.channels;

  modal_section_6.classList.add("open");
}
function closeModal_section_6(){
  modal_section_6.classList.remove("open");
}
modalOverlay_section_6.addEventListener("click", closeModal_section_6);
modalClose_section_6.addEventListener("click", closeModal_section_6);

/* =========================
   Charts helpers
   ========================= */
function destroyChart_section_6(key){
  if(charts_section_6[key]){
    charts_section_6[key].destroy();
    delete charts_section_6[key];
  }
}
function mkChart_section_6(key, ctx, cfg){
  destroyChart_section_6(key);
  // High DPI clarity
  cfg.options = cfg.options || {};
  cfg.options.devicePixelRatio = Math.max(2, window.devicePixelRatio || 1);
  cfg.options.responsive = true;
  cfg.options.maintainAspectRatio = false;
  charts_section_6[key] = new Chart(ctx, cfg);
}

/* =========================
   Chart builders
   ========================= */
function buildTierChart_section_6(){
  const data = filteredData_section_6();
  const counts = {mass:0, inflation:0, premium:0};
  data.forEach(b=>counts[b.tier]++);
  const ctx = document.getElementById("cTier-section-6").getContext("2d");
  mkChart_section_6("tier", ctx, {
    type:"bar",
    data:{
      labels:["Mass","Claim inflation","Upper-mass/premium"],
      datasets:[{
        label:"Brand count",
        data:[counts.mass, counts.inflation, counts.premium],
        backgroundColor:["rgba(255,204,151,.85)","rgba(255,204,151,.55)","rgba(101,189,173,.65)"],
        borderColor:["rgba(255,204,151,1)","rgba(255,204,151,1)","rgba(101,189,173,1)"],
        borderWidth:1,
        borderRadius:10
      }]
    },
    options:{
      plugins:{legend:{display:false}},
      scales:{y:{beginAtZero:true, ticks:{precision:0}}}
    }
  });
}

function buildOriginChart_section_6(){
  const data = filteredData_section_6();
  const counts = {Local:0, International:0, Hybrid:0};
  data.forEach(b=>{counts[b.origin]=(counts[b.origin]||0)+1;});
  const ctx = document.getElementById("cOrigin-section-6").getContext("2d");
  mkChart_section_6("origin", ctx, {
    type:"doughnut",
    data:{
      labels:["Local","International","Hybrid"],
      datasets:[{
        data:[counts.Local||0, counts.International||0, counts.Hybrid||0],
        backgroundColor:["rgba(101,189,173,.75)","rgba(255,204,151,.75)","rgba(202,241,235,.9)"],
        borderWidth:0
      }]
    },
    options:{plugins:{legend:{position:"bottom"}}}
  });
}

function buildClaimsChart_section_6(){
  const data = filteredData_section_6().filter(b=>b.tier==="inflation");
  const keywords = ["Natural","Gentle","Sensitive skin","Dermatologically tested","Clinical language","Transparency","Halal"];
  const freq = {};
  keywords.forEach(k=>freq[k]=0);
  data.forEach(b=>{
    b.claims.forEach(c=>{
      if(freq[c]!==undefined) freq[c] += 1;
      // bucket some common variants
      if(c.toLowerCase().includes("natural") && freq["Natural"]!==undefined) freq["Natural"] += 0;
    });
  });
  const labels = Object.keys(freq);
  const values = labels.map(k=>freq[k]);
  const ctx = document.getElementById("cClaims-section-6").getContext("2d");
  mkChart_section_6("claims", ctx, {
    type:"bar",
    data:{
      labels,
      datasets:[{
        label:"Count",
        data:values,
        backgroundColor:"rgba(255,204,151,.75)",
        borderColor:"rgba(255,204,151,1)",
        borderWidth:1,
        borderRadius:10
      }]
    },
    options:{
      indexAxis:"y",
      plugins:{legend:{display:false}},
      scales:{x:{beginAtZero:true, ticks:{precision:0}}}
    }
  });
}

function buildRadarChart_section_6(){
  const data = filteredData_section_6();
  const groups = {mass:[], inflation:[], premium:[]};
  data.forEach(b=>groups[b.tier].push(b));
  const avg = (arr, k)=> arr.length ? arr.reduce((s,x)=>s+(x[k]||0),0)/arr.length : 0;
  const labels = ["Verification depth","Testing transparency","BPOM visibility","Certification posture","Claim specificity"];
  const ctx = document.getElementById("cRadar-section-6").getContext("2d");

  mkChart_section_6("radar", ctx, {
    type:"radar",
    data:{
      labels,
      datasets:[
        {
          label:"Mass (avg)",
          data:[avg(groups.mass,'ver'), avg(groups.mass,'trans'), avg(groups.mass,'bpom'), avg(groups.mass,'cert'), avg(groups.mass,'spec')],
          borderColor:"rgba(255,204,151,1)",
          backgroundColor:"rgba(255,204,151,.18)",
          pointRadius:2
        },
        {
          label:"Claim inflation (avg)",
          data:[avg(groups.inflation,'ver'), avg(groups.inflation,'trans'), avg(groups.inflation,'bpom'), avg(groups.inflation,'cert'), avg(groups.inflation,'spec')],
          borderColor:"rgba(255,204,151,.75)",
          backgroundColor:"rgba(255,204,151,.10)",
          pointRadius:2
        },
        {
          label:"Upper-mass/premium (avg)",
          data:[avg(groups.premium,'ver'), avg(groups.premium,'trans'), avg(groups.premium,'bpom'), avg(groups.premium,'cert'), avg(groups.premium,'spec')],
          borderColor:"rgba(101,189,173,1)",
          backgroundColor:"rgba(101,189,173,.18)",
          pointRadius:2
        }
      ]
    },
    options:{
      scales:{r:{min:0,max:5, ticks:{stepSize:1}}},
      plugins:{legend:{position:"bottom"}}
    }
  });
}

function buildScatterChart_section_6(){
  const data = filteredData_section_6();
  const tierX = {mass:1, inflation:2, premium:3}; // conceptual
  const points = data.map(b=>({x:tierX[b.tier], y:(b.ver + b.trans)/2, label:b.name}));
  const ctx = document.getElementById("cScatter-section-6").getContext("2d");
  mkChart_section_6("scatter", ctx, {
    type:"scatter",
    data:{
      datasets:[{
        label:"Brands",
        data:points,
        parsing:false,
        backgroundColor:"rgba(101,189,173,.8)",
        pointRadius:4
      }]
    },
    options:{
      plugins:{
        legend:{display:false},
        tooltip:{
          callbacks:{
            label:(ctx)=> `${ctx.raw.label}: verification ${(ctx.raw.y).toFixed(1)}/5`
          }
        }
      },
      scales:{
        x:{
          min:0.5,max:3.5,
          ticks:{
            callback:(v)=>({1:"Mass",2:"Claim inflation",3:"Premium"}[v]||"")
          },
          grid:{display:false}
        },
        y:{min:0,max:5, title:{display:true, text:"Verification index (avg of ver+trans)"}}
      }
    }
  });
}

function buildMatrixChart_section_6(){
  const data = filteredData_section_6();
  const tierY = {mass:30, inflation:55, premium:80}; // price index proxy
  const toBubble = (b)=>({
    x: Math.round((b.ver*14) + (b.trans*6)), // 0..100 proxy
    y: tierY[b.tier],
    r: Math.max(8, Math.min(22, (b.spec + b.bpom)/2 * 3)),
    label: b.name,
    tier: b.tier
  });

  const trueSubs = [];
  const falseSubs = [];
  data.forEach(b=>{
    const bubble = toBubble(b);
    // Simple rule: true substitutes = premium tier with higher verification
    if(b.tier==="premium" && bubble.x >= 60) trueSubs.push(bubble);
    else if(b.tier==="inflation") falseSubs.push(bubble);
  });

  const ctx = document.getElementById("cMatrix-section-6").getContext("2d");
  mkChart_section_6("matrix", ctx, {
    type:"bubble",
    data:{
      datasets:[
        {
          label:"TRUE substitutes (proxy)",
          data:trueSubs,
          backgroundColor:"rgba(101,189,173,.65)",
          borderColor:"rgba(101,189,173,1)",
          borderWidth:1
        },
        {
          label:"FALSE substitutes (proxy)",
          data:falseSubs,
          backgroundColor:"rgba(255,204,151,.65)",
          borderColor:"rgba(255,204,151,1)",
          borderWidth:1
        }
      ]
    },
    options:{
      plugins:{
        tooltip:{
          callbacks:{
            label:(ctx)=> `${ctx.raw.label}`
          }
        },
        legend:{position:"bottom"}
      },
      scales:{
        x:{min:0,max:100, title:{display:true, text:"Verification depth (proxy)"}},
        y:{min:0,max:100, title:{display:true, text:"Price / risk profile (proxy)"}}
      }
    }
  });
}

/* =========================
   Render all
   ========================= */
function renderAll_section_6(){
  renderTable_section_6();
  buildTierChart_section_6();
  buildOriginChart_section_6();
  buildClaimsChart_section_6();
  buildScatterChart_section_6();
  buildRadarChart_section_6();
  buildMatrixChart_section_6();
}

/* =========================
   UI wiring
   ========================= */
document.getElementById("applyBtn-section-6").addEventListener("click", ()=>{
  state_section_6.tier = document.getElementById("tierSel-section-6").value;
  state_section_6.origin = document.getElementById("originSel-section-6").value;
  state_section_6.cat = document.getElementById("catSel-section-6").value;
  renderAll_section_6();
});
document.getElementById("resetBtn-section-6").addEventListener("click", ()=>{
  state_section_6.tier="all"; state_section_6.origin="all"; state_section_6.cat="all";
  document.getElementById("tierSel-section-6").value="all";
  document.getElementById("originSel-section-6").value="all";
  document.getElementById("catSel-section-6").value="all";
  renderAll_section_6();
});

// Sources toggles
document.querySelectorAll(".toggle-section-6").forEach(t=>{
  t.addEventListener("click", ()=>{
    const id = t.getAttribute("data-target");
    const el = document.getElementById(id);
    if(!el) return;
    el.style.display = (el.style.display==="block") ? "none" : "block";
    t.textContent = (el.style.display==="block") ? "Hide sources" : "Show sources";
  });
});

// Copy
document.getElementById("copyBtn-section-6").addEventListener("click", async ()=>{
  const text = document.getElementById("copyBlock-section-6").textContent.trim();
  try{ await navigator.clipboard.writeText(text); alert("Copied."); }catch(e){ prompt("Copy:", text); }
});
document.getElementById("copyBtn2-section-6").addEventListener("click", async ()=>{
  const text = "Similar claim words ≠ same verification trail; price comparisons without proof are invalid.";
  try{ await navigator.clipboard.writeText(text); alert("Copied."); }catch(e){ prompt("Copy:", text); }
});

// Active nav highlight
const navLinks_section_6 = Array.from(document.querySelectorAll("#nav-section-6 a"));
const sections_section_6 = navLinks_section_6.map(a=>document.querySelector(a.getAttribute("href"))).filter(Boolean);
const obs_section_6 = new IntersectionObserver((entries)=>{
  entries.forEach(en=>{
    if(en.isIntersecting){
      navLinks_section_6.forEach(l=>l.classList.remove("active"));
      const link = navLinks_section_6.find(l=>l.getAttribute("href")==="#"+en.target.id);
      if(link) link.classList.add("active");
    }
  });
},{root:null, threshold:0.15});
sections_section_6.forEach(s=>obs_section_6.observe(s));

window.addEventListener("resize", ()=>{
  // Re-render for crispness and to avoid stretched canvases
  renderAll_section_6();
});

// Move modal to body to bypass accordion transform (containing block) issues
const modalEl = document.getElementById('modal-section-6');
if (modalEl && modalEl.parentElement !== document.body) {
    document.body.appendChild(modalEl);
}

// Initial render
renderAll_section_6();
</script>
