
  <style>
    :root{
      --c1:#FFCC97; --c2:#FFEBDA; --c3:#CAF1EB; --c4:#65BDAD;
      --ink:#10332d; --muted:#496962;
      --bg:#fbfbfc; --card:rgba(255,255,255,.88);
      --line:rgba(16,51,45,.12);
      --shadow:0 10px 28px rgba(16,51,45,.08);
      --r:18px;
    }
    *{box-sizing:border-box}
    body{
      margin:0; color:var(--ink);
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
      background:
        radial-gradient(1200px 700px at 12% 0%, rgba(255,204,151,.32), transparent 55%),
        radial-gradient(1200px 700px at 88% 10%, rgba(202,241,235,.32), transparent 58%),
        var(--bg);
    }
    .layout{display:flex; min-height:100vh;}
    .sidebar{
      width:280px; min-width:280px; flex-shrink:0; padding:18px 14px; position:sticky; top:0; height:100vh; overflow:auto;
      background:linear-gradient(180deg, rgba(255,235,218,.70), rgba(202,241,235,.35));
      border-right:1px solid var(--line);
      backdrop-filter: blur(8px);
    }
    .brand{
      display:flex; gap:10px; align-items:center; padding:12px 10px;
      border-radius:16px; background:rgba(255,255,255,.68); border:1px solid var(--line);
    }
    .mark{width:36px;height:36px;border-radius:12px;background:conic-gradient(from 210deg,var(--c4),var(--c3),var(--c1),var(--c4)); box-shadow:var(--shadow);}
    .brand h1{margin:0;font-size:14px;letter-spacing:.2px}
    .brand p{margin:2px 0 0;color:var(--muted);font-size:12px}
    .tabs{margin-top:14px; display:flex; flex-direction:column; gap:6px}
    .tab{
      cursor:pointer; user-select:none;
      display:flex; justify-content:space-between; align-items:center;
      padding:10px 12px; border-radius:14px;
      border:1px solid transparent; background:transparent; color:var(--ink);
      font-size:13px;
    }
    .tab:hover{background:rgba(255,255,255,.58); border-color:var(--line)}
    .tab.active{background:rgba(101,189,173,.18); border-color:rgba(101,189,173,.38)}
    .pill{font-size:11px;padding:3px 8px;border-radius:999px;border:1px solid var(--line);background:rgba(255,255,255,.60);color:var(--muted)}
    .content{flex:1; padding:22px; max-width:1240px; margin:0 auto; min-width:0;}
    @media (max-width: 980px){ .sidebar{display:none} .content{padding:16px} }
    .view{display:none}
    .view.active{display:block}
    .row{display:grid; gap:14px}
    .row.two{grid-template-columns:1.2fr .8fr}
    .row.two.eq{grid-template-columns:1fr 1fr}
    .row.three{grid-template-columns:repeat(3,1fr)}
    @media (max-width: 980px){ .row.two,.row.three{grid-template-columns:1fr} }
    .card{
      min-width:0;
      background:var(--card);
      border:1px solid var(--line);
      border-radius:var(--r);
      box-shadow:var(--shadow);
      padding:16px;
    }
    .card h2{margin:0 0 6px;font-size:16px;letter-spacing:.2px}
    .card h3{margin:0 0 8px;font-size:13px;color:var(--muted);font-weight:650}
    .big{font-size:26px;line-height:1.18;margin:0}
    .sub{margin:8px 0 0;color:var(--muted);font-size:13px;line-height:1.5}
    .tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:10px}
    .tag{font-size:11px;padding:4px 8px;border-radius:999px;background:rgba(202,241,235,.60);border:1px solid rgba(101,189,173,.25);color:#164a43}
    .kpis{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:12px}
    .kpi{padding:12px;border-radius:16px;border:1px solid var(--line);background:linear-gradient(180deg, rgba(255,255,255,.74), rgba(255,255,255,.52))}
    .kpi .l{font-size:12px;color:var(--muted);margin-bottom:6px}
    .kpi .v{font-size:16px;font-weight:800}
    .kpi .n{font-size:12px;color:var(--muted);margin-top:4px}
    .chart{height:340px; position:relative}
    .chart.sm{height:260px}
    canvas{width:100% !important; height:100% !important;}
    .controls{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px}
    .btn{
      appearance:none;border:1px solid var(--line);background:rgba(255,255,255,.66);
      padding:8px 10px;border-radius:12px;font-size:12px;color:var(--ink);cursor:pointer;
    }
    .btn:hover{border-color:rgba(101,189,173,.55)}
    .btn.primary{background:rgba(101,189,173,.18);border-color:rgba(101,189,173,.40)}
    .callout{
      margin-top:10px; padding:12px;border-radius:16px;border:1px solid var(--line);
      background:linear-gradient(135deg, rgba(255,204,151,.32), rgba(202,241,235,.32));
    }
    .callout b{font-size:12px}
    .callout p{margin:6px 0 0;color:var(--muted);font-size:13px;line-height:1.5}
    .hr{height:1px;background:var(--line);margin:12px 0}
    .tableWrap{
      border:1px solid var(--line); border-radius:16px; overflow:hidden; background:rgba(255,255,255,.70);
    }
    .tableScroll{
      overflow:auto; max-height:430px;
    }
    table{border-collapse:separate;border-spacing:0; min-width:980px; width:100%}
    th,td{padding:10px 12px; border-bottom:1px solid var(--line); font-size:12px; color:var(--muted); vertical-align:top}
    th{position:sticky; top:0; background:rgba(255,255,255,.92); z-index:2; color:var(--ink); text-align:left}
    th:first-child, td:first-child{
      position:sticky; left:0; z-index:3;
      background:rgba(255,255,255,.92);
      color:var(--ink);
      min-width:220px;
    }
    tr:hover td{background:rgba(202,241,235,.20)}
    .note{font-size:12px;color:var(--muted);line-height:1.45}
    .foot{margin-top:14px;font-size:12px;color:var(--muted)}
  </style>
<div class="layout">
  <aside class="sidebar">

    <div class="tabs" id="tabs">
      <button class="tab active" data-view="v_overview">Overview <span class="pill">Start</span></button>
      <button class="tab" data-view="v_matrix">Positioning Matrix <span class="pill">Core</span></button>
      <button class="tab" data-view="v_system">Final System <span class="pill">A–F</span></button>
      <button class="tab" data-view="v_subs">Anti‑Substitution <span class="pill">S6</span></button>
      <button class="tab" data-view="v_2030">2030 Durability <span class="pill">S5</span></button>
      <button class="tab" data-view="v_inputs">Inputs & Notes <span class="pill">Meta</span></button>
    </div>

    <div class="foot">
      Calm, consulting-grade view. Indexes (1–5) are directional, not statistical.
    </div>
  </aside>

  <main class="content">

    <!-- OVERVIEW -->
    <section class="view active" id="v_overview">
      <div class="row two">
        <div class="card">
          <h3>Core Positioning (recalibrated)</h3>
          <p class="big">A calm, dermatology‑aligned <b>biological stability system</b> for hair & body — built for people who refuse to experiment again.</p>
          <p class="sub">
            Premium is justified by <b>structural proof depth</b> (HRIPT per SKU, named lab disclosure, certification integrity, Halal commitment) and a routine-stability promise — not luxury signaling.
          </p>
          <div class="tags">
            <span class="tag">Safety‑led</span>
            <span class="tag">Dermatology‑aligned</span>
            <span class="tag">Calm & minimal</span>
            <span class="tag">Middle‑upper & upper</span>
            <span class="tag">Premium as risk insurance</span>
          </div>
          <div class="callout">
            <b>Recalibration note (what changed)</b>
            <p>
              Section 6 is now premium-weighted and “natural/sensitive” specific. Section 8 therefore anchors positioning against <b>true substitutes</b> (premium proof brands) and treats low-tier claim brands as <b>false substitutes</b> (comparison noise).
            </p>
          </div>
        </div>

        <div class="card">
          <h3>Price Anchors (Phase 1)</h3>
          <div class="kpis">
            <div class="kpi"><div class="l">Shampoo • 300 ml</div><div class="v">Rp 480.000</div><div class="n">Premium daily routine</div></div>
            <div class="kpi"><div class="l">Body Wash • 300 ml</div><div class="v">Rp 550.000</div><div class="n">Barrier‑respecting cleanse</div></div>
            <div class="kpi"><div class="l">Body Cream • 250 ml</div><div class="v">Rp 530.000</div><div class="n">Stability over “actives”</div></div>
            <div class="kpi"><div class="l">Hair Serum • 30 ml</div><div class="v">Rp 280.000</div><div class="n">Scalp & hair comfort</div></div>
          </div>
          <div class="callout">
            <b>Channel mix (Phase 1)</b>
            <p>Shopee + Tokopedia • TikTok Shop • Premium offline store • Direct website. No clinic channel in phase 1.</p>
          </div>
        </div>
      </div>

      <div class="row two eq" style="margin-top:14px">
        <div class="card">
          <h2>Non‑negotiable truths (S2–S7)</h2>
          <h3>What the positioning must obey</h3>
          <div class="chart"><canvas id="c_truths"></canvas></div>
        </div>
        <div class="card">
          <h2>ICP fit (psychology)</h2>
          <h3>Why this positioning reduces fear + fatigue</h3>
          <div class="chart"><canvas id="c_fit"></canvas></div>
        </div>
      </div>
    </section>

    <!-- MATRIX -->
    <section class="view" id="v_matrix">
      <div class="row two eq">
        <div class="card">
          <div style="display:flex;justify-content:space-between;gap:10px;align-items:flex-end">
            <div>
              <h2>Positioning Territory (recalibrated)</h2>
              <h3>X: Verification depth • Y: Biological security orientation</h3>
            </div>
            <div class="controls">
              <button class="btn primary" id="btnAll">All archetypes</button>
              <button class="btn" id="btnFocus">Focus Target</button>
            </div>
          </div>
          <div class="chart"><canvas id="c_pos"></canvas></div>
          <div class="note">
            This chart is a structural map. It does not claim exact market shares; it shows where “truth-first premium” sits relative to claim-led tiers.
          </div>
        </div>

        <div class="card">
          <h2>Why this territory is defensible</h2>
          <h3>Premium is sustained by proof + discipline</h3>
          <ul class="note" style="margin:8px 0 0; padding-left:18px">
            <li><b>Claim inflation</b> is common; <b>disclosed proof depth</b> is rare.</li>
            <li>Mid-tier brands may use derm language, but verification depth varies.</li>
            <li>The core promise is <b>routine stability</b> (predictability), not “fast results.”</li>
            <li>Adjacent to clinical brands, but stays <b>calm + daily</b>, not treatment-heavy.</li>
          </ul>
          <div class="callout">
            <b>Decision rule</b>
            <p>If proof depth + transparency discipline is not maintained, premium price becomes unstable (market will reclassify it into “similar words” space).</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SYSTEM -->
    <section class="view" id="v_system">
      <div class="row two eq">
        <div class="card">
          <h2>A. One‑sentence positioning</h2>
          <p class="sub" style="font-size:15px;color:var(--ink);">
            The Target Premium Brand is a calm, dermatology‑aligned <b>biological stability system</b> for hair and body, designed for risk‑averse consumers who refuse to experiment with their skin again.
          </p>
          <div class="tags">
            <span class="tag">Routine stability</span>
            <span class="tag">Safety-first</span>
            <span class="tag">Verifiable truth</span>
          </div>
        </div>
        <div class="card">
          <h2>B. Pillars</h2>
          <h3>What the brand must consistently reinforce</h3>
          <div class="chart sm"><canvas id="c_pillars"></canvas></div>
        </div>
      </div>

      <div class="row" style="margin-top:14px">
        <div class="card">
          <h2>C–F. RTB, Pricing, Exclusions, Safeguards</h2>
          <h3>Compact decision table (scroll sideways)</h3>
          <div class="tableWrap">
            <div class="tableScroll">
              <table>
                <thead>
                  <tr>
                    <th>Component</th>
                    <th>Commitment</th>
                    <th>Proof / Mechanism</th>
                    <th>How it avoids comparison traps</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>C. Reasons‑To‑Believe</b></td>
                    <td>Proof-led truth, not wording</td>
                    <td>BPOM posture • HRIPT per SKU • International lab • Certification stack • Named lab disclosure • Halal commitment</td>
                    <td>Shifts comparison from “same claims” → “same verification depth”</td>
                  </tr>
                  <tr>
                    <td><b>D. Pricing logic</b></td>
                    <td>Premium as risk insurance</td>
                    <td>Testing + certification + documentation + compliance discipline</td>
                    <td>Prevents “why so expensive?” by tying price to proof infrastructure</td>
                  </tr>
                  <tr>
                    <td><b>E. Exclusions</b></td>
                    <td>Not for price-first or trend-chasers</td>
                    <td>Low-SKU routine stability; avoids viral “quick fix” narratives</td>
                    <td>Filters audiences who force low-tier comparisons</td>
                  </tr>
                  <tr>
                    <td><b>F. 2030 safeguards</b></td>
                    <td>Protect calm identity + proof discipline</td>
                    <td>Publish lab & certification details; avoid trend drift; keep SKU restraint</td>
                    <td>Maintains premium defensibility under claim fatigue & tightening norms</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="foot">Tip: On desktop, scroll the table horizontally if needed; Brand column stays visible.</div>
        </div>
      </div>
    </section>

    <!-- SUBSTITUTION -->
    <section class="view" id="v_subs">
      <div class="row two eq">
        <div class="card">
          <h2>Anti‑Substitution Stress Test</h2>
          <h3>X: Verification depth • Y: Price tier (conceptual)</h3>
          <div class="chart"><canvas id="c_subs"></canvas></div>
          <div class="note">
            Recalibrated logic: premium “natural/sensitive” competitors are the true reference set; low-tier claim brands are primarily <i>false substitutes</i>.
          </div>
        </div>
        <div class="card">
          <h2>Comparison script</h2>
          <h3>Calm, non-frontal reframing</h3>
          <div class="callout">
            <b>Use this sentence</b>
            <p>
              “Some brands use similar words. This brand is priced for a different job: routine predictability backed by disclosed testing infrastructure.
              Comparisons should be based on verification depth, not claim wording.”
            </p>
          </div>
          <div class="callout">
            <b>Do not do</b>
            <p>Do not attack cheap brands by name. Do not argue ingredient lists. Only reframe toward proof infrastructure and risk profile.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 2030 -->
    <section class="view" id="v_2030">
      <div class="row two eq">
        <div class="card">
          <div style="display:flex;justify-content:space-between;gap:10px;align-items:flex-end">
            <div>
              <h2>2030 durability profile</h2>
              <h3>Directional pressures (indexed 1–5)</h3>
            </div>
            <div class="controls">
              <button class="btn primary" id="btnBase">Base</button>
              <button class="btn" id="btnDown">Downside</button>
            </div>
          </div>
          <div class="chart"><canvas id="c_2030"></canvas></div>
          <div class="note" id="dur_note"></div>
        </div>
        <div class="card">
          <h2>Channel trust pathways</h2>
          <h3>Why this mix supports proof-led premium</h3>
          <div class="chart"><canvas id="c_channels"></canvas></div>
        </div>
      </div>
    </section>

    <!-- INPUTS -->
    <section class="view" id="v_inputs">
      <div class="row">
        <div class="card">
          <h2>Inputs & notes</h2>
          <h3>What this dashboard assumes</h3>
          <ul class="note" style="margin:8px 0 0; padding-left:18px">
            <li>Price anchors and channel strategy are provided by you.</li>
            <li>Proof commitments: lab name disclosure = yes; Halal = yes; test summary/protocol disclosure = pending readiness.</li>
            <li>Sections 2–7 are summarized using conceptual indices when numeric measurements are not present.</li>
            <li>Section 6 recalibration: premium-weighted, “natural/sensitive” specific competitor logic.</li>
          </ul>
          <div class="callout">
            <b>Upgrade path</b>
            <p>
              If you export the updated Section 6 dataset (tiers + verification depth + true substitutes), this dashboard can replace conceptual archetypes with real competitor points.
            </p>
          </div>
          <div class="foot">Single-file HTML • Chart.js via CDN • Runs locally</div>
        </div>
      </div>
    </section>

    <div class="foot">© ROLIN • Section 8 — Recalibrated</div>
  </main>
</div>

<script>
  // Global defaults (sharper, consistent)
  Chart.defaults.devicePixelRatio = window.devicePixelRatio || 1;
  Chart.defaults.font.family = getComputedStyle(document.body).fontFamily;
  Chart.defaults.color = '#10332d';
  Chart.defaults.plugins.legend.labels.boxWidth = 10;
  Chart.defaults.plugins.tooltip.backgroundColor = 'rgba(16,51,45,.92)';
  Chart.defaults.plugins.tooltip.titleColor = '#fff';
  Chart.defaults.plugins.tooltip.bodyColor = '#fff';

  const PALETTE = {
    ink:'rgba(16,51,45,.85)',
    green:'rgba(101,189,173,.55)',
    mint:'rgba(202,241,235,.75)',
    peach:'rgba(255,204,151,.60)',
    cream:'rgba(255,235,218,.92)',
    dark:'rgba(16,51,45,.90)'
  };

  // Data (conceptual indexes)
  const truths = [
    ['S2 Structural reality',5],
    ['S3 Risk psychology',5],
    ['S4 ICP clarity',4],
    ['S5 Viability (2030 conservative)',4],
    ['S6 True vs false substitutes (premium-weighted)',5],
    ['S7 Proof architecture',5],
  ];

  const fit = [
    ['Fear of irritation',5],
    ['Decision fatigue',4],
    ['Need for verifiable claims',5],
    ['Desire for routine stability',4],
  ];

  // Recalibrated archetypes (less noise; premium-weighted)
  // X: verification depth (0–5), Y: biological security orientation (0–5)
  const archetypes = [
    {name:'Low-tier claim brands (noise)', x:1.3, y:2.2, g:'False substitutes'},
    {name:'Upper-mass “gentle” + derm language', x:2.8, y:3.0, g:'Mid-tier'},
    {name:'Premium natural (partial proof)', x:3.8, y:3.7, g:'Premium natural'},
    {name:'Clinical-adjacent premium', x:4.3, y:4.2, g:'Clinical-adjacent'},
    {name:'Target Premium Brand', x:4.6, y:4.6, g:'Target'},
  ];

  // Anti-substitution map: X verification, Y price tier index (1–4)
  const subs = [
    {name:'Low-tier claim brands', x:1.4, y:1.6, t:'False'},
    {name:'Upper-mass derm language', x:2.9, y:2.8, t:'Mixed'},
    {name:'Premium natural', x:3.8, y:3.3, t:'Partial'},
    {name:'Clinical-adjacent premium', x:4.2, y:3.8, t:'True'},
    {name:'Target Premium Brand', x:4.6, y:4.0, t:'Target'},
  ];

  const pillars = [
    ['Structural safety',5],
    ['Biological stability',5],
    ['Calm discipline',4],
    ['Transparent integrity',4],
    ['Halal readiness',4],
  ];

  const durability = {
    base: {
      labels:['Reg tightening','Transparency demand','Claim fatigue','Consumer maturity','Channel noise'],
      values:[4,4,4,4,3],
      note:'Base case: positioning strengthens with regulation + maturity; noise manageable with discipline.'
    },
    down: {
      labels:['Reg tightening','Transparency demand','Claim fatigue','Consumer maturity','Channel noise'],
      values:[4,5,5,4,4],
      note:'Downside: transparency expectations + fatigue accelerate; discipline must increase.'
    }
  };

  const channels = [
    ['E‑commerce (Shopee/Tokopedia)',4],
    ['Social commerce (TikTok Shop)',3],
    ['Premium offline store',4],
    ['Direct website (proof hosting)',5],
  ];

  function mkBar(canvasId, items, color){
    const ctx = document.getElementById(canvasId).getContext('2d');
    return new Chart(ctx,{
      type:'bar',
      data:{ labels: items.map(x=>x[0]), datasets:[{ data: items.map(x=>x[1]), backgroundColor: color, borderColor:'rgba(16,51,45,.14)', borderWidth:1, borderRadius:10 }]},
      options:{
        responsive:true, maintainAspectRatio:false,
        plugins:{legend:{display:false}},
        scales:{ y:{beginAtZero:true, max:5, ticks:{stepSize:1}}, x:{ticks:{color:'#496962'}}}
      }
    });
  }

  let posChart, durChart;

  function buildPos(focus=false){
    const ctx = document.getElementById('c_pos').getContext('2d');
    const groups = {
      'False substitutes': {c:PALETTE.peach},
      'Mid-tier': {c:PALETTE.cream},
      'Premium natural': {c:PALETTE.mint},
      'Clinical-adjacent': {c:PALETTE.green},
      'Target': {c:PALETTE.dark},
    };
    const ds = Object.keys(groups).map(g=>({
      label:g,
      data: archetypes.filter(a=>a.g===g && (!focus || g==='Target' || g==='Clinical-adjacent')).map(a=>({x:a.x,y:a.y,name:a.name})),
      pointRadius:(c)=> (c.raw && c.raw.name==='Target Premium Brand') ? 10 : 7,
      pointHoverRadius:11,
      pointBackgroundColor:groups[g].c,
      pointBorderColor:'rgba(16,51,45,.22)',
      pointBorderWidth:1
    }));
    if(posChart) posChart.destroy();
    posChart = new Chart(ctx,{
      type:'scatter',
      data:{datasets:ds},
      options:{
        responsive:true, maintainAspectRatio:false,
        scales:{
          x:{min:0,max:5,title:{display:true,text:'Verification depth →'},ticks:{stepSize:1}},
          y:{min:0,max:5,title:{display:true,text:'Biological security orientation ↑'},ticks:{stepSize:1}}
        },
        plugins:{
          legend:{position:'bottom', labels:{usePointStyle:true}},
          tooltip:{callbacks:{label:(c)=>`${c.raw.name} (x ${c.raw.x.toFixed(1)}, y ${c.raw.y.toFixed(1)})`}}
        }
      }
    });
  }

  function buildSubs(){
    const ctx = document.getElementById('c_subs').getContext('2d');
    const colorBy=(t)=>{
      if(t==='Target') return PALETTE.dark;
      if(t==='True') return PALETTE.green;
      if(t==='Partial') return PALETTE.mint;
      if(t==='Mixed') return PALETTE.peach;
      return PALETTE.cream;
    };
    return new Chart(ctx,{
      type:'scatter',
      data:{datasets:[{
        data: subs.map(p=>({x:p.x,y:p.y,name:p.name,t:p.t})),
        pointBackgroundColor:(c)=>colorBy(c.raw.t),
        pointBorderColor:'rgba(16,51,45,.22)',
        pointBorderWidth:1,
        pointRadius:(c)=> (c.raw.t==='Target') ? 10 : 7,
        pointHoverRadius:11
      }]},
      options:{
        responsive:true, maintainAspectRatio:false,
        scales:{
          x:{min:0,max:5,title:{display:true,text:'Verification depth →'},ticks:{stepSize:1}},
          y:{min:0,max:4.5,title:{display:true,text:'Price tier ↑ (index)'},ticks:{stepSize:1}}
        },
        plugins:{legend:{display:false}, tooltip:{callbacks:{label:(c)=>`${c.raw.name} • ${c.raw.t}`}}}
      }
    });
  }

  function buildDur(which){
    const ctx = document.getElementById('c_2030').getContext('2d');
    const d = (which==='down') ? durability.down : durability.base;
    document.getElementById('dur_note').textContent = d.note + ' (Indexed 1–5; directional).';
    if(durChart) durChart.destroy();
    durChart = new Chart(ctx,{
      type:'radar',
      data:{
        labels:d.labels,
        datasets:[{
          label: which==='down' ? 'Downside profile' : 'Base profile',
          data:d.values,
          backgroundColor:'rgba(255,204,151,.28)',
          borderColor:'rgba(16,51,45,.35)',
          pointBackgroundColor:'rgba(101,189,173,.80)',
          pointBorderColor:'#fff',
          pointBorderWidth:1
        }]
      },
      options:{
        responsive:true, maintainAspectRatio:false,
        scales:{ r:{min:0,max:5,ticks:{stepSize:1}, grid:{color:'rgba(16,51,45,.12)'}}},
        plugins:{legend:{position:'bottom'}}
      }
    });
  }

  function buildChannels(){
    const ctx = document.getElementById('c_channels').getContext('2d');
    return mkBar('c_channels', channels, PALETTE.mint);
  }

  // Tabs navigation
  const tabs = Array.from(document.querySelectorAll('.tab'));
  const views = Array.from(document.querySelectorAll('.view'));
  tabs.forEach(t=>{
    t.addEventListener('click', ()=>{
      tabs.forEach(x=>x.classList.remove('active'));
      t.classList.add('active');
      const id = t.dataset.view;
      views.forEach(v=>{
        v.classList.remove('active');
        if(v.id === id) v.classList.add('active');
      });
    });
  });

  // Buttons
  document.getElementById('btnAll')?.addEventListener('click', ()=>{
    document.getElementById('btnAll').classList.add('primary');
    document.getElementById('btnFocus').classList.remove('primary');
    buildPos(false);
  });
  document.getElementById('btnFocus')?.addEventListener('click', ()=>{
    document.getElementById('btnFocus').classList.add('primary');
    document.getElementById('btnAll').classList.remove('primary');
    buildPos(true);
  });
  document.getElementById('btnBase')?.addEventListener('click', ()=>{
    document.getElementById('btnBase').classList.add('primary');
    document.getElementById('btnDown').classList.remove('primary');
    buildDur('base');
  });
  document.getElementById('btnDown')?.addEventListener('click', ()=>{
    document.getElementById('btnDown').classList.add('primary');
    document.getElementById('btnBase').classList.remove('primary');
    buildDur('down');
  });

  // Init
  window.addEventListener('load', ()=>{
    mkBar('c_truths', truths, PALETTE.green);
    mkBar('c_fit', fit, PALETTE.peach);
    buildPos(false);
    mkBar('c_pillars', pillars, PALETTE.green);
    buildSubs();
    buildDur('base');
    buildChannels();
  });
</script>
