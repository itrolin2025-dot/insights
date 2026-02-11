
<style>
    /* Section 8 Base Theme */
    #section8 {
        --c1: #FFCC97;
        --c2: #FFEBDA;
        --c3: #CAF1EB;
        --c4: #65BDAD;
        --ink: #12302b;
        --muted: #4d6b64;
        --bg: #fbfbfc;
        --card: #ffffff;
        --line: rgba(18, 48, 43, .10);
        --shadow: 0 10px 30px rgba(18, 48, 43, .08);
        --radius: 18px;

        font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
        color: var(--ink);
        background:
            radial-gradient(1200px 600px at 15% 0%, rgba(255, 204, 151, .35), transparent 55%),
            radial-gradient(1200px 700px at 85% 10%, rgba(202, 241, 235, .35), transparent 58%),
            var(--bg);
        min-height: 100vh;
        position: relative;
        isolation: isolate;
    }

    #section8 * { box-sizing: border-box; }

    /* Layout - Desktop (Keep as before) */
    .sec8-layout { display: flex; min-height: 100vh; }

    .sec8-sidebar {
        width: 420px;
        padding: 22px 26px;
        position: sticky; top: 0; height: 100vh; overflow: visible;
        background: linear-gradient(180deg, rgba(255, 235, 218, .65), rgba(202, 241, 235, .35));
        border-right: 1px solid var(--line);
        backdrop-filter: blur(8px);
        z-index: 1000;
        transition: transform 0.3s cubic-bezier(.21, .6, .34, 1), opacity 0.3s;
    }

    /* Mobile Responsive Sidebar */
    @media (max-width: 980px) {
        .sec8-sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 86vw;
            max-width: 320px;
            transform: translateX(-105%);
            opacity: 0;
            pointer-events: none;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            overflow: auto;
            padding: 18px 14px;
        }
        .sec8-sidebar.mobile-open {
            transform: translateX(0);
            opacity: 1;
            pointer-events: all;
        }

        .sec8-sidebar .nav {
            display: none;
        }
        .sec8-sidebar.mobile-open .nav {
            display: flex;
        }
    }

    .sec8-burger-btn {
        display: none;
        align-items: center; justify-content: center;
        width: 42px; height: 42px;
        background: white; border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        border: 1px solid #ececec;
        cursor: pointer; padding: 0;
        margin-bottom: 20px;
    }
    @media (max-width: 980px) { .sec8-burger-btn { display: flex; } }

    .sec8-burger-lines { display: inline-block; width: 22px; height: 16px; position: relative; }
    .sec8-burger-lines span {
        display: block; height: 3px; background: var(--c4);
        border-radius: 2px; position: absolute; left: 0; right: 0;
        transition: .22s;
    }
    .sec8-burger-lines span:nth-child(1) { top: 0; }
    .sec8-burger-lines span:nth-child(2) { top: 6.5px; }
    .sec8-burger-lines span:nth-child(3) { top: 13px; }

    .sec8-burger-btn.open .sec8-burger-lines span:nth-child(1) { transform: rotate(45deg) translateY(6.2px); }
    .sec8-burger-btn.open .sec8-burger-lines span:nth-child(2) { opacity: 0; }
    .sec8-burger-btn.open .sec8-burger-lines span:nth-child(3) { transform: rotate(-45deg) translateY(-6.2px); }

    .sec8-overlay {
        display: none; position: fixed; inset: 0; z-index: 999;
        background: rgba(0,0,0,0.2); opacity: 0; transition: opacity 0.2s;
    }

    .sec8-content {
        flex: 1;
        padding: 22px;
        max-width: 1180px; /* Adjust max-width to help grid/flow */
        margin: 0 auto;
    }

    .brand {
        display: flex; gap: 10px; align-items: center; padding: 12px 10px; border-radius: 16px;
        background: rgba(255, 255, 255, .65); border: 1px solid var(--line);
    }
    .logoMark {
        width: 36px; height: 36px; border-radius: 12px;
        background: conic-gradient(from 210deg, var(--c4), var(--c3), var(--c1), var(--c4));
        box-shadow: var(--shadow);
    }
    .brand h1 { font-size: 14px; margin: 0; font-weight: 700; }
    .brand p { margin: 2px 0 0; font-size: 11px; color: var(--muted) }

    .nav { margin-top: 14px; display: flex; flex-direction: column; gap: 6px }
    .nav a {
        text-decoration: none; font-size: 13px; padding: 10px 12px; border-radius: 14px;
        color: var(--ink); border: 1px solid transparent; display: flex; justify-content: space-between; align-items: center; transition: 0.2s;
    }
    .nav a:hover { background: rgba(255, 255, 255, .55); border-color: var(--line) }
    .nav a.active { background: rgba(101, 189, 173, .18); border-color: rgba(101, 189, 173, .35); font-weight: 600; }

    .pill { font-size: 11px; padding: 3px 8px; border-radius: 999px; border: 1px solid var(--line); background: rgba(255, 255, 255, .55); color: var(--muted); }

    /* RAPIHIN SEMUA .card */
    .card {
        background: rgba(255, 255, 255, .90);
        border: 1px solid var(--line);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 16px 14px 18px 14px;
        margin-bottom: 16px;
        max-width: 100%;
        min-width: 0;
        word-break: break-word;
        /* Hilangkan lebar dan overflow, kartu akan ikut grid container */
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        overflow: hidden;
    }
    .card h3 { margin: 0 0 8px; font-size: 13px; color: var(--muted); font-weight: 600 }
    /* Batasi tinggi konten chart agar card tidak membesar berlebihan */
    .card .chartWrap { max-width: 100%; min-width: 0; }

    .hero { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 14px; }
    @media (max-width: 980px) {
        .sec8-content { padding: 16px; }
        .hero { grid-template-columns: 1fr; }
    }

    .big { font-size: 28px; font-weight: 700; line-height: 1.15; margin: 0; }
    .sub { margin: 8px 0 0; color: var(--muted); font-size: 13px; line-height: 1.45; }

    .kpis {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 12px;
        width: 100%;
    }
    @media (max-width: 480px) { .kpis { grid-template-columns: 1fr; } }

    .kpi {
        padding: 10px 8px;
        border-radius: 14px;
        border: 1px solid var(--line);
        background: linear-gradient(180deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .50));
        min-height: 56px;
        /* Responsive Layout */
        box-sizing: border-box;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }
    .kpi .label { font-size: 12px; color: var(--muted); margin-bottom: 4px }
    .kpi .value { font-size: 16px; font-weight: 700; color: var(--c4) }

    .sec8-section { margin-top: 16px; scroll-margin-top: 100px; }
    .sectionTitle { display: flex; justify-content: space-between; align-items: flex-end; gap: 10px; margin: 12px 0; }
    .sectionTitle h2 { margin: 0; font-size: 18px; font-weight: 700; }

    .grid2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        align-items: stretch;
    }
    .grid3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        align-items: stretch;
    }
    @media (max-width: 980px) { .grid2, .grid3 { grid-template-columns: 1fr; } }

    .chartWrap { height: 260px; position: relative; width: 100%; max-width: 100%; }
    .chartWrap.tall { height: 340px }

    .btn { appearance: none; border: 1px solid var(--line); background: rgba(255, 255, 255, .65); padding: 8px 10px; border-radius: 12px; font-size: 12px; cursor: pointer; transition: 0.2s; }
    .btn:hover { border-color: rgba(101, 189, 173, .55) }
    .btn.primary { background: rgba(101, 189, 173, .18); border-color: rgba(101, 189, 173, .40) }

    .tag { font-size: 11px; padding: 4px 8px; border-radius: 999px; background: rgba(202, 241, 235, .55); border: 1px solid rgba(101, 189, 173, .25); color: #164a43; }
    .callout { padding: 12px; border-radius: 16px; background: linear-gradient(135deg, rgba(255, 204, 151, .35), rgba(202, 241, 235, .35)); border: 1px solid var(--line); margin-top: 10px; }
    .foot { margin: 16px 0 0; color: var(--muted); font-size: 12px }
</style>

<div id="section8">
    <div class="sec8-overlay" id="sec8_overlay"></div>
    <div class="sec8-layout">
        <aside class="sec8-sidebar" id="sec8_sidebar">
            <div class="brand">
                <div class="logoMark"></div>
                <div>
                    <h1>Q’WELL — Section 8</h1>
                    <p>Final Positioning • Indonesia</p>
                </div>
            </div>
            <nav class="nav" id="sec8_navLinks">
                <a href="#sec8_overview" class="active">Overview <span class="pill">Start</span></a>
                <a href="#sec8_truths">Non‑Negotiable Truths <span class="pill">S2–S7</span></a>
                <a href="#sec8_territory">Positioning Territory <span class="pill">Chart</span></a>
                <a href="#sec8_fit">Psychological Fit <span class="pill">ICP</span></a>
                <a href="#sec8_economics">Economic Coherence <span class="pill">2030</span></a>
                <a href="#sec8_substitution">Anti‑Substitution <span class="pill">Stress</span></a>
                <a href="#sec8_system">Final System <span class="pill">A–F</span></a>
            </nav>
        </aside>

        <main class="sec8-content">
            <button class="sec8-burger-btn" id="sec8_burgerBtn">
                <span class="sec8-burger-lines">
                    <span></span><span></span><span></span>
                </span>
            </button>

            <section id="sec8_overview" class="hero sec8-section">
                <div class="card">
                    <h3>Core Positioning</h3>
                    <p class="big">A calm, dermatology‑aligned biological stability system for hair & body.</p>
                    <p class="sub">Justifies premium pricing through structural proof depth and routine-stability promise.</p>
                    <div style="display:flex; flex-wrap:wrap; gap:8px; margin-top:15px;">
                        <span class="tag">Safety-led</span><span class="tag">Calm</span><span class="tag">Premium Insurance</span>
                    </div>
                </div>
                <div class="card">
                    <h3>Price Anchors (Phase 1)</h3>
                    <div class="kpis">
                        <div class="kpi"><p class="label">Shampoo</p><p class="value">Rp 480k</p></div>
                        <div class="kpi"><p class="label">Body Wash</p><p class="value">Rp 550k</p></div>
                        <div class="kpi"><p class="label">Body Cream</p><p class="value">Rp 530k</p></div>
                        <div class="kpi"><p class="label">Hair Serum</p><p class="value">Rp 280k</p></div>
                    </div>
                </div>
            </section>

            <section id="sec8_truths" class="sec8-section">
                <div class="sectionTitle"><h2>Non-Negotiable Truths (S2–S7)</h2></div>
                <div class="grid2">
                    <div class="card">
                        <h3>Truths Map</h3>
                        <div class="chartWrap"><canvas id="sec8_truthsChart"></canvas></div>
                    </div>
                    <div class="card">
                        <h3>Convergence Logic</h3>
                        <div class="chartWrap"><canvas id="sec8_convergenceChart"></canvas></div>
                    </div>
                </div>
            </section>

            <section id="sec8_territory" class="sec8-section">
                <div class="sectionTitle">
                    <h2>Positioning Territory</h2>
                    <div style="display:flex; gap:8px">
                        <button class="btn primary" id="sec8_btnShowAll">Show all</button>
                        <button class="btn" id="sec8_btnFocusQ">Focus Q</button>
                    </div>
                </div>
                <div class="grid2">
                    <div class="card">
                        <div class="chartWrap tall"><canvas id="sec8_positionChart"></canvas></div>
                    </div>
                    <div class="card">
                        <h3>Defensibility Factors</h3>
                        <p class="sub">Claim inflation is common, structural proof is rare. Q’WELL anchor is predictability.</p>
                    </div>
                </div>
            </section>

            <section id="sec8_fit" class="sec8-section">
                <div class="sectionTitle"><h2>Psychological Fit</h2></div>
                <div class="grid3">
                    <div class="card"><h3>JTBD Drivers</h3><div class="chartWrap"><canvas id="sec8_jobsChart"></canvas></div></div>
                    <div class="card"><h3>Decision Pressure</h3><div class="chartWrap"><canvas id="sec8_pressureChart"></canvas></div></div>
                    <div class="card"><h3>Messaging Discipline</h3><div class="chartWrap"><canvas id="sec8_messagingChart"></canvas></div></div>
                </div>
            </section>

            <section id="sec8_economics" class="sec8-section">
                <div class="sectionTitle">
                    <h2>Economic Coherence</h2>
                    <div style="display:flex; gap:8px">
                        <button class="btn primary" id="sec8_btnBase">Base case</button>
                        <button class="btn" id="sec8_btnDown">Downside case</button>
                    </div>
                </div>
                <div class="grid2">
                    <div class="card"><div class="chartWrap tall"><canvas id="sec8_durabilityChart"></canvas></div></div>
                    <div class="card"><div class="chartWrap tall"><canvas id="sec8_channelsChart"></canvas></div></div>
                </div>
            </section>

            <section id="sec8_substitution" class="sec8-section">
                <div class="sectionTitle"><h2>Substitution Logic</h2></div>
                <div class="grid2">
                    <div class="card"><div class="chartWrap tall"><canvas id="sec8_subsChart"></canvas></div></div>
                    <div class="card">
                        <h3>Comparison Reframing</h3>
                        <div class="callout">
                            <p class="sub">“Q’WELL is priced for a different job: routine predictability backed by disclosed testing infrastructure.”</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sec8_system" class="sec8-section">
                <div class="sectionTitle"><h2>Final Positioning System</h2></div>
                <div class="grid2">
                    <div class="card">
                        <h3>One‑sentence</h3>
                        <p class="sub"><b>Q’WELL</b> is a calm, dermatology‑aligned <b>biological stability system</b> for hair/body.</p>
                    </div>
                    <div class="card">
                        <h3>Strategic Pillars</h3>
                        <div class="chartWrap"><canvas id="sec8_pillarsChart"></canvas></div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<script>
(function(){
    const P = { primary: '#65BDAD', accent: '#FFCC97', soft: '#CAF1EB', ink: '#12302b' };

    function initUI(){
        const burger = document.getElementById('sec8_burgerBtn');
        const sidebar = document.getElementById('sec8_sidebar');
        const overlay = document.getElementById('sec8_overlay');
        const nav = document.getElementById('sec8_navLinks');
        const links = sidebar.querySelectorAll('a');

        function openMenuMobile() {
            sidebar.classList.add('mobile-open');
            burger.classList.add('open');
            overlay.style.display = 'block';
            setTimeout(() => overlay.style.opacity = '1', 10);
            document.body.style.overflow = 'hidden';
        }
        function closeMenuMobile() {
            sidebar.classList.remove('mobile-open');
            burger.classList.remove('open');
            overlay.style.opacity = '0';
            setTimeout(() => overlay.style.display = 'none', 250);
            document.body.style.overflow = '';
        }
        function toggleMenu(){
            if(!sidebar.classList.contains('mobile-open')) {
                openMenuMobile();
            } else {
                closeMenuMobile();
            }
        }
        burger?.addEventListener('click', toggleMenu);
        overlay?.addEventListener('click', closeMenuMobile);

        // Nav hide on mobile - set proper .nav display on load & resize
        function updateNavDisplay() {
            if(window.innerWidth <= 980) {
                nav.style.display = sidebar.classList.contains('mobile-open') ? 'flex' : 'none';
            } else {
                nav.style.display = 'flex';
            }
        }
        window.addEventListener('resize', updateNavDisplay);
        burger?.addEventListener('click', updateNavDisplay);
        overlay?.addEventListener('click', updateNavDisplay);

        links.forEach(l => l.addEventListener('click', () => {
            if(window.innerWidth <= 980) {
                closeMenuMobile();
                updateNavDisplay();
            }
        }));

        updateNavDisplay();

        // Scrollspy
        const sections = document.querySelectorAll('.sec8-section');
        window.addEventListener('scroll', () => {
            let curr = "";
            sections.forEach(s => {
                if(window.pageYOffset >= s.offsetTop - 120) curr = s.id;
            });
            links.forEach(l => {
                l.classList.remove('active');
                if(l.getAttribute('href') === "#"+curr) l.classList.add('active');
            });
        });
    }

    function initCharts(){
        if(typeof Chart === 'undefined') return;
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = P.ink;

        const mkBar = (id, labels, data, color) => {
            const ctx = document.getElementById(id)?.getContext('2d');
            if(!ctx) return;
            new Chart(ctx, {
                type:'bar', data:{ labels, datasets:[{data, backgroundColor:color, borderRadius:8}] },
                options:{ responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}}, scales:{y:{beginAtZero:true, max:5}} }
            });
        };

        mkBar('sec8_truthsChart', ['S2','S3','S4','S5','S6','S7'], [5,5,4,4,4,5], P.primary);

        const ctxBub = document.getElementById('sec8_convergenceChart')?.getContext('2d');
        if(ctxBub) new Chart(ctxBub, {
            type:'bubble', data:{ datasets:[{data:[{x:1,y:5,r:15},{x:2,y:4,r:12},{x:3,y:4,r:12},{x:4,y:3,r:10},{x:5,y:5,r:15},{x:6,y:5,r:15}], backgroundColor:P.soft, borderColor:P.primary }] },
            options:{ responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}}, scales:{x:{min:0,max:7},y:{min:0,max:6}} }
        });

        const ctxPos = document.getElementById('sec8_positionChart')?.getContext('2d');
        let posChart;
        if(ctxPos){
            const dataSet = [{x:1.2,y:2,n:'Cheap'},{x:1.6,y:2.4,n:'Mass'},{x:3,y:3.2,n:'Mid'},{x:4.6,y:4.6,n:'Q-WELL'}];
            const renderPos = (focus) => {
                if(posChart) posChart.destroy();
                posChart = new Chart(ctxPos, {
                    type:'scatter', data:{ datasets:[{ data: focus ? dataSet.filter(d=>d.n==='Q-WELL') : dataSet, backgroundColor:(c)=>c.raw?.n==='Q-WELL'?P.ink:P.accent, pointRadius:10 }] },
                    options:{ responsive:true, maintainAspectRatio:false, scales:{x:{min:0,max:5},y:{min:0,max:5}} }
                });
            };
            renderPos(false);
            document.getElementById('sec8_btnShowAll').onclick = () => renderPos(false);
            document.getElementById('sec8_btnFocusQ').onclick = () => renderPos(true);
        }

        mkBar('sec8_jobsChart', ['Sec','Truth','Stab','Safe'], [5,5,4,5], P.primary);
        mkBar('sec8_pressureChart', ['Fear','Skep','Fatig','Regret'], [5,4,4,4], P.accent);
        mkBar('sec8_messagingChart', ['Min','Calm','Proof','Focus'], [4,5,4,5], P.soft);

        const ctxRadar = document.getElementById('sec8_durabilityChart')?.getContext('2d');
        let radChart;
        if(ctxRadar){
            const renderRad = (vals) => {
                if(radChart) radChart.destroy();
                radChart = new Chart(ctxRadar, {
                    type:'radar', data:{ labels:['Reg','Trans','Fat','Mat','Noi'], datasets:[{data:vals, backgroundColor:P.soft+'88', borderColor:P.primary}] },
                    options:{ responsive:true, maintainAspectRatio:false, scales:{r:{min:0,max:5}} }
                });
            };
            renderRad([4,4,4,4,3]);
            document.getElementById('sec8_btnBase').onclick = () => renderRad([4,4,4,4,3]);
            document.getElementById('sec8_btnDown').onclick = () => renderRad([4,5,5,4,4]);
        }

        mkBar('sec8_channelsChart', ['Shop','Tik','Off','Web'], [4,3,4,5], P.soft);

        const ctxSubs = document.getElementById('sec8_subsChart')?.getContext('2d');
        if(ctxSubs) new Chart(ctxSubs, {
            type:'scatter', data:{ datasets:[{ data:[{x:1.4,y:1.6},{x:2.7,y:2.7},{x:4.6,y:4.6}], backgroundColor:P.primary, pointRadius:10 }] },
            options:{ responsive:true, maintainAspectRatio:false, scales:{x:{min:0,max:5},y:{min:0,max:5}} }
        });

        mkBar('sec8_pillarsChart', ['Safe','Stab','Calm','Integ'], [5,5,4,4], P.primary);
    }

    function checkChart(){
        if(window.Chart) { initCharts(); initUI(); }
        else { setTimeout(checkChart, 100); }
    }
    checkChart();
})();
</script>
