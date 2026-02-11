<!-- Q’WELL — Research Overview, Methodology & Disclaimer (Card UI)
     Drop this into your insights page HTML body.
     Uses your palette: #FFCC97 #FFEBDA #CAF1EB #65BDAD
-->
<section id="research-intro" class="qwell-wrap" style="background-image:url('{{ asset('images/banner/qwell.jpeg') }}'); width:100vw !important; height:100% !important; position:relative; left:50%; right:50%; margin-left:-50vw; margin-right:-50vw;">

  <div class="qwell-grid px-2 py-8 sm:p-12">

    <!-- Overview -->
    <article class="qcard" data-card="overview">
      <div class="qcard__top">
        <div class="qcard__icon" aria-hidden="true"></div>
        <div>
          <h2 class="qcard__title">Overview</h2>
          <p class="qcard__lead">
            A structured viability assessment for Q’WELL’s intended premium positioning in Indonesia.
          </p>
        </div>
      </div>

      <div class="qcard__body">
        <p class="qcard__text">
          This research evaluates the structural viability of Q’WELL as a premium hair and body care system in Indonesia.
          It is designed to answer one strategic question:
        </p>

        <div class="qmore" >
            <div class="qcallout" id="more-overview" hidden>
            <div class="qcallout__label">Core Strategic Question</div>
            <div class="qcallout__text">
                Can a safety-led, dermatology-aligned, biologically stable hair &amp; body care system sustain premium pricing in Indonesia
                under a conservative 2030 outlook?
            </div>
            </div>

          <ul class="qbullets" hidden>
            <li>Structural skin &amp; scalp realities in Indonesia</li>
            <li>Consumer risk psychology and decision fatigue</li>
            <li>ICP definition grounded in observable behavior</li>
            <li>Market validation and conservative forecast through 2030</li>
            <li>Competitive structure and claim-inflation dynamics</li>
            <li>Proof infrastructure and regulatory architecture</li>
            <li>Anti-substitution logic and durability assessment</li>
            <li>Final positioning territory and positioning system</li>
          </ul>

          <p class="qcard__text" hidden>
            This is not a branding narrative. It is decision support: coherence, defensibility, and long-term durability.
          </p>
        </div>

        <div class="qcard__footer">
          <button class="qtoggle" type="button"
            data-target="more-overview"
            aria-expanded="false"
            aria-controls="more-overview">
            Show more
          </button>
        </div>
      </div>
    </article>

    <!-- Methodology -->
    <article class="qcard" data-card="methodology">
      <div class="qcard__top">
        <div class="qcard__icon qcard__icon--mint" aria-hidden="true"></div>
        <div>
          <h2 class="qcard__title">Methodology</h2>
          <p class="qcard__lead">
            Secondary-source research only, synthesized into a structured positioning framework.
          </p>
        </div>
      </div>

      <div class="qcard__body">
        <p class="qcard__text">
          This research relies exclusively on secondary data sources and structured analytical synthesis.
          No primary surveys, interviews, proprietary internal sales data, or commissioned field studies were conducted.
        </p>

        <div class="qmore" id="more-methodology" hidden>
        <div class="qsubhead">Success still depends on</div>
          <ul class="qbullets">
            <li>Proof execution and transparency discipline</li>
            <li>Supply chain and operational reliability</li>
            <li>Channel precision and message clarity</li>
            <li>Pricing integrity and margin discipline</li>
            <li>Regulatory and macroeconomic developments</li>
          </ul>

          <p class="qcard__text">
            This document evaluates positioning durability, not performance certainty. Ultimate success will be determined by execution quality and market response over time.
          </p>
        </div>

        <div class="qcard__footer">
          <button class="qtoggle" type="button"
            data-target="more-methodology"
            aria-expanded="false"
            aria-controls="more-methodology">
            Show more
          </button>
        </div>

      </div>
    </article>

    <!-- Disclaimer -->
    <article class="qcard" data-card="disclaimer">
      <div class="qcard__top">
        <div class="qcard__icon qcard__icon--mint" aria-hidden="true"></div>
        <div>
          <h2 class="qcard__title">Disclaimer</h2>
          <p class="qcard__lead">
            This research supports decisions. It does not guarantee outcomes.
          </p>
        </div>
      </div>

      <div class="qcard__body">
        <p class="qcard__text">
            This research does not constitute a guarantee of commercial success. Structural viability does not eliminate execution risk.
        </p>

        <div class="qmore" id="more-disclaimer" hidden>
          <div class="qsubhead">Evidence Categories</div>
          <ul class="qbullets">
            <li><b>Institutional &amp; regulatory:</b> BPOM regulations, labeling standards, enforcement patterns.</li>
            <li><b>Industry &amp; market intelligence:</b> public reports, category segmentation, price-band mapping.</li>
            <li><b>Behavioral &amp; platform signals:</b> reviews, Google Trends, social discourse, claim usage across tiers.</li>
            <li><b>Competitive transparency audit:</b> packaging disclosure, certification traceability, testing-depth claims.</li>
          </ul>

          <div class="qsubhead">Forecast Logic</div>
          <p class="qcard__text">
            Forecasting uses conservative scenario logic through 2030 (base + downside) and avoids aggressive growth assumptions.
            Indexed scoring in dashboards represents directional structural pressure—not statistical measurement.
          </p>
        </div>

        <div class="qcard__footer">
          <button class="qtoggle" type="button"
            data-target="more-disclaimer"
            aria-expanded="false"
            aria-controls="more-disclaimer">
            Show more
          </button>
        </div>
      </div>
    </article>
  </div>
</section>

<style>
  :root{
    --q-c1:#FFCC97;
    --q-c2:#FFEBDA;
    --q-c3:#CAF1EB;
    --q-c4:#65BDAD;
    --q-ink:#12302b;
    --q-muted:#4d6b64;
    --q-line:rgba(18,48,43,.12);
    --q-bg:rgba(255,255,255,.78);
    --q-shadow:0 12px 32px rgba(18,48,43,.10);
    --q-radius:18px;
  }

  .qwell-wrap{
    max-width:100vw;
    min-width:100vw;
    margin-left:calc(-50vw + 50%);
    margin-right:calc(-50vw + 50%);
    padding:18px 8px 8px; /* Lebar padding kiri-kanan diperkecil */
    color:var(--q-ink);
    font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
    background: url('/banner/qwell.jpg') center center / cover no-repeat;
    width: 100vw !important;
    box-sizing: border-box;
  }

  .qwell-hero{
    padding:18px 18px 10px;
    border-radius:22px;
    border:1px solid var(--q-line);
    background:
      radial-gradient(900px 300px at 15% 0%, rgba(255,204,151,.55), transparent 55%),
      radial-gradient(900px 320px at 85% 10%, rgba(202,241,235,.55), transparent 58%),
      rgba(255,255,255,.65);
    box-shadow: var(--q-shadow);
    margin-bottom:14px;
  }
  .qwell-hero__badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:6px 10px;
    border-radius:999px;
    border:1px solid var(--q-line);
    background:rgba(255,255,255,.70);
    color:var(--q-muted);
    font-size:12px;
    letter-spacing:.2px;
  }
  .qwell-hero__title{
    margin:10px 0 6px;
    font-size:22px;
    letter-spacing:.2px;
    line-height:1.2;
  }
  .qwell-hero__subtitle{
    margin:0;
    font-size:13px;
    color:var(--q-muted);
    line-height:1.5;
    max-width:70ch;
  }

  /* CARD LAYOUT: 3 in a row on desktop, 1 in a row on mobile/tablet */
  .qwell-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 14px;
  }
  @media (max-width: 1020px){
    .qwell-grid{
      grid-template-columns: 1fr 1fr;
    }
  }
  @media (max-width: 700px){
    .qwell-grid {
      grid-template-columns: 1fr;
    }
  }
  /* Make disclaimer card span all columns in desktop, otherwise normal */
  .qcard--soft{
    grid-column: 1 / -1;
    background:linear-gradient(135deg, rgba(255,204,151,.25), rgba(202,241,235,.25)), rgba(255,255,255,.70);
  }
  @media (max-width: 1020px){
    .qcard--soft{
      grid-column: 1 / -1;
    }
  }
  @media (max-width: 700px){
    .qcard--soft{
      grid-column: auto;
    }
  }

  .qcard{
    background:var(--q-bg);
    border:1px solid var(--q-line);
    border-radius:var(--q-radius);
    box-shadow: var(--q-shadow);
    padding:24px 20px 20px 20px; /* Padding diperbesar agar isi lebih lega */
    overflow:hidden;
    position:relative;
    display:flex;
    flex-direction:column;
    height:100%;
    transition: padding 0.2s, font-size 0.2s;
  }

  .qcard__top{
    display:flex;
    gap:16px; /* jarak antar icon dan judul diperbesar */
    align-items:flex-start;
    margin-bottom:20px; /* jarak bawah diperbesar */
  }

  .qcard__icon{
    width:38px;
    height:38px;
    border-radius:14px;
    background:linear-gradient(145deg, rgba(255,204,151,.95), rgba(101,189,173,.35));
    border:1px solid var(--q-line);
    flex:0 0 auto;
    transition: width 0.2s, height 0.2s;
  }
  .qcard__icon--mint{
    background:linear-gradient(145deg, rgba(202,241,235,.95), rgba(255,235,218,.70));
  }
  .qcard__icon--teal{
    background:linear-gradient(145deg, rgba(101,189,173,.75), rgba(255,204,151,.35));
  }

  .qcard__title{
    margin:0 0 8px;
    font-size:18px;
    letter-spacing:.2px;
    transition: font-size 0.2s;
  }
  .qcard__lead{
    margin:0 0 2px 0;
    font-size:14px;
    color:var(--q-muted);
    line-height:1.5;
    transition: font-size 0.2s;
  }

  .qcard__body{
    margin-top:16px; /* jarak atas content body diperbesar */
    flex:1 1 auto;
    display:flex;
    flex-direction:column;
    gap:12px; /* jarak antar elemen dalam body */
  }
  .qcard__text{
    margin:0 0 0 0;
    font-size:14px;
    color:var(--q-muted);
    line-height:1.65;
    transition: font-size 0.2s;
  }

  .qcallout{
    margin-top:14px;
    padding:14px;
    border-radius:16px;
    border:1px solid var(--q-line);
    background:rgba(255,255,255,.70);
  }
  .qcallout__label{
    font-size:11px;
    color:var(--q-muted);
    letter-spacing:.25px;
    text-transform:uppercase;
    margin-bottom:8px;
  }
  .qcallout__text{
    font-size:14px;
    color:var(--q-ink);
    line-height:1.6;
    font-weight:650;
  }

  .qsubhead{
    margin-top:14px;
    font-size:13px;
    color:var(--q-ink);
    font-weight:700;
  }

  .qbullets{
    margin:10px 0 0 0;
    padding-left:22px;
    color:var(--q-muted);
    font-size:14px;
    line-height:1.6;
    transition: font-size 0.2s;
  }
  .qbullets li{margin:8px 0}

  .qcard__footer {
    margin-top: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 18px;
  }

  .qtoggle{
    appearance:none;
    border:1px solid var(--q-line);
    background:rgba(255,255,255,.72);
    color:var(--q-ink);
    padding:9px 16px;
    border-radius:14px;
    font-size:13px;
    cursor:pointer;
    display:inline-flex;
    align-items:center;
    gap:8px;
    margin-top:0;
  }
  .qtoggle:hover{border-color:rgba(101,189,173,.55)}
  .qtoggle:focus{outline:2px solid rgba(101,189,173,.55); outline-offset:2px}
  .qtoggle::after{
    content:"▾";
    font-size:12px;
    opacity:.8;
    transform:translateY(-1px);
  }
  .qtoggle[aria-expanded="true"]::after{
    content:"▴";
  }

  /* ==========
     PERBESAR CARD SAAT MOBILE
     ==========
     Perbaikan padding kiri-kanan terlalu besar di mobile.
     Kini padding lebih pas dan isi lebih lega.
  */
  @media (max-width: 700px) {
    .qcard {
      padding: 18px 8px !important; /* Kiri-kanan lebih kecil, atas bawah lebih lega */
      max-width: 100vw;
    }
    .qcard__title {
      font-size: 22px;
    }
    .qcard__lead,
    .qbullets,
    .qcard__text {
      font-size: 16px;
    }
    .qcard__icon,
    .qcard__icon--mint,
    .qcard__icon--teal {
      width: 48px;
      height: 48px;
    }
    .qwell-wrap {
      padding-left: 0;
      padding-right: 0;
    }
    .qcard__top {
      gap: 10px;
      margin-bottom: 14px;
    }
    .qcard__body {
      gap: 8px;
      margin-top:10px;
    }
  }
</style>

<script>
  (function(){
    const buttons = document.querySelectorAll('.qtoggle[data-target]');
    buttons.forEach(btn=>{
      btn.addEventListener('click', ()=>{
        const id = btn.getAttribute('data-target');
        const panel = document.getElementById(id);
        if(!panel) return;

        const expanded = btn.getAttribute('aria-expanded') === 'true';
        panel.hidden = expanded; // if expanded, hide. if collapsed, show
        btn.setAttribute('aria-expanded', String(!expanded));
        btn.textContent = expanded ? 'Show more' : 'Show less';
      });
    });
  })();
</script>
