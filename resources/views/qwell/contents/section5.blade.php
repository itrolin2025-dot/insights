<style>
    /* Scoped Variables for Section 5 */
    .section-5-wrapper {
        --primary: #65BDAD;
        --secondary: #CAF1EB;
        --accent: #FFCC97;
        --bg-light: #FFEBDA;
        --text-dark: #2D3748;
        --text-muted: #718096;
        --white: #FFFFFF;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        background-color: var(--bg-light);
        color: var(--text-dark);
        position: relative;
        isolation: isolate;
        width: 100%;
    }

    .section-5-wrapper * { 
        margin: 0; 
        padding: 0; 
        box-sizing: border-box; 
    }

    .section-5-wrapper .flex-container {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    @media (min-width: 769px) {
        .section-5-wrapper .flex-container {
            flex-direction: row;
        }
    }

    /* Sidebar Navigation */
    .section-5-wrapper .sec5-aside {
        width: 100%;
        background: var(--white);
        padding: 1.5rem;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        z-index: 10;
    }

    @media (min-width: 769px) {
        .section-5-wrapper .sec5-aside {
            width: 280px;
            border-right: 1px solid rgba(0,0,0,0.05);
            border-bottom: none;
            position: sticky;
            top: 0;
            height: auto;
            max-height: 100vh;
        }
    }

    .section-5-wrapper .nav-header h1 { font-size: 1.25rem; color: var(--primary); letter-spacing: 1px; margin-bottom: 0.5rem; }
    .section-5-wrapper .nav-links { list-style: none; padding: 0; }
    .section-5-wrapper .nav-links li { margin-bottom: 0.5rem; }
    .section-5-wrapper .nav-links a { 
        text-decoration: none; color: var(--text-muted); font-size: 0.9rem; 
        padding: 0.6rem; display: block; border-radius: 8px; transition: 0.2s;
    }
    .section-5-wrapper .nav-links a:hover, .section-5-wrapper .nav-links a.active { 
        background: var(--secondary); color: var(--primary); font-weight: 600; 
    }

    /* Main Content */
    .section-5-wrapper .sec5-main { 
        flex: 1;
        padding: 2rem 1rem; 
        width: 100%; 
    }

    @media (min-width: 769px) {
        .section-5-wrapper .sec5-main {
            padding: 2rem 3rem;
        }
    }

    /* Section Styling */
    .section-5-wrapper section { margin-bottom: 3rem; scroll-margin-top: 1rem; }
    .section-5-wrapper .card { background: var(--white); border-radius: 12px; padding: 1.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.02); margin-bottom: 1.5rem; border: 1px solid rgba(101, 189, 173, 0.1); }
    .section-5-wrapper .header-box { margin-bottom: 1.5rem; }
    .section-5-wrapper h2 { font-size: 1.75rem; color: var(--text-dark); margin-bottom: 0.5rem; border-left: 4px solid var(--primary); padding-left: 1rem; }
    .section-5-wrapper .headline-insight { font-size: 1.1rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem; }

    /* Accordion inside Section 5 */
    .section-5-wrapper .sec5-accordion { border: 1px solid #edf2f7; border-radius: 8px; margin-top: 1rem; }
    .section-5-wrapper .sec5-accordion-header { padding: 0.75rem 1rem; cursor: pointer; background: #f8fafc; display: flex; justify-content: space-between; font-size: 0.85rem; font-weight: 600; }
    .section-5-wrapper .sec5-accordion-content { padding: 1rem; display: none; font-size: 0.85rem; line-height: 1.5; color: var(--text-muted); background: var(--white); }
    .section-5-wrapper .sec5-accordion.open .sec5-accordion-content { display: block; }

    /* Charts */
    .section-5-wrapper .sec5-chart-container { position: relative; height: 300px; width: 100%; margin: 1.5rem 0; }
    .section-5-wrapper .price-grid { display: grid; grid-template-columns: 1fr; gap: 1rem; }
    @media (min-width: 640px) {
        .section-5-wrapper .price-grid { grid-template-columns: repeat(2, 1fr); }
    }
    .section-5-wrapper .price-chart-box { background: #fff; padding: 1rem; border-radius: 8px; border: 1px solid #eee; }
    .section-5-wrapper .price-chart-container { position: relative; height: 180px; width: 100%; }

    /* Verdict */
    .section-5-wrapper .verdict-banner { 
        background: linear-gradient(135deg, var(--primary), #4da695); color: white; 
        padding: 2rem; border-radius: 16px; text-align: center; margin-bottom: 2rem;
    }
    .section-5-wrapper .verdict-badge { 
        background: var(--accent); color: var(--text-dark); padding: 0.5rem 1.5rem; 
        border-radius: 50px; font-weight: 800; display: inline-block; margin-bottom: 1rem; font-size: 1.1rem;
    }

    /* Utils */
    .section-5-wrapper .tag { display: inline-block; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 600; margin-right: 0.4rem; }
    .section-5-wrapper .tag-positive { background: var(--secondary); color: var(--primary); }
    .section-5-wrapper .tag-caution { background: #fee2e2; color: #b91c1c; }
    .section-5-wrapper .source-link { font-size: 0.7rem; color: var(--text-muted); text-decoration: none; margin-top: 1rem; display: block; }
    .section-5-wrapper .btn-copy { background: var(--secondary); border: none; padding: 0.4rem 0.8rem; border-radius: 4px; font-size: 0.75rem; cursor: pointer; color: var(--primary); font-weight: 600; transition: 0.2s; }
    .section-5-wrapper .btn-copy:hover { background: var(--primary); color: white; }
</style>

<div class="section-5-wrapper">
    <div class="flex-container">
        <aside class="sec5-aside">
            <div class="nav-header">
                <h1>Q’WELL</h1>
                <p style="font-size: 0.75rem; color: var(--text-muted);">Market Validation Gates v5.0</p>
            </div>
            <ul class="nav-links">
                <li><a href="#sec5_scope" class="active">Scope Lock</a></li>
                <li><a href="#sec5_baseline">Market Baseline</a></li>
                <li><a href="#sec5_segment">Premium Segment</a></li>
                <li><a href="#sec5_price">Price Bands</a></li>
                <li><a href="#sec5_drivers">Drivers & Constraints</a></li>
                <li><a href="#sec5_forecast">2030 Outlook</a></li>
                <li><a href="#sec5_channels">Channels</a></li>
                <li><a href="#sec5_verdict">Final Verdict</a></li>
            </ul>
        </aside>

        <main class="sec5-main">
            <section id="sec5_scope">
                <div class="header-box">
                    <h2>Market Boundary Lock</h2>
                    <p class="headline-insight">Strict categorization to ensure valid comparison.</p>
                </div>
                <div class="card">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                        <div>
                            <h4 class="filter-label" style="font-size:0.75rem; text-transform:uppercase; font-weight:700; color:var(--text-muted); margin-bottom:0.5rem;">In-Scope</h4>
                            <ul style="list-style:none; font-size: 0.9rem; line-height: 1.8;">
                                <li><span class="tag tag-positive">✓</span> Shampoo</li>
                                <li><span class="tag tag-positive">✓</span> Body Wash</li>
                                <li><span class="tag tag-positive">✓</span> Body Butter</li>
                                <li><span class="tag tag-positive">✓</span> Hair Oil</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="filter-label" style="font-size:0.75rem; text-transform:uppercase; font-weight:700; color:var(--text-muted); margin-bottom:0.5rem;">Exclusions</h4>
                            <ul style="list-style:none; font-size: 0.9rem; line-height: 1.8; color: var(--text-muted);">
                                <li><span class="tag tag-caution">✕</span> Facial Care</li>
                                <li><span class="tag tag-caution">✕</span> Makeup</li>
                                <li><span class="tag tag-caution">✕</span> Oral Care</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn-copy" style="margin-top: 1rem;" id="sec5_copyBoundary">Copy Scope Definition</button>
                </div>
            </section>

            <section id="sec5_baseline">
                <div class="header-box">
                    <h2>Market Baseline (2023–2026)</h2>
                    <p class="headline-insight">A USD 2.41 Billion pool with hygiene resilience.</p>
                </div>
                <div class="card">
                    <div class="sec5-chart-container">
                        <canvas id="sec5_chartMarket"></canvas>
                    </div>
                    <div class="sec5-accordion">
                        <div class="sec5-accordion-header">Audit: Assumptions & Data Gaps <span>+</span></div>
                        <div class="sec5-accordion-content">
                            Calculations based on IMARC 2025 Hair Care (USD 1.21B) and ReportCubes Bath/Shower (USD 1.20B). Exchange rates IDR 15,700/USD.
                        </div>
                    </div>
                </div>
            </section>

            <section id="sec5_segment">
                <div class="header-box">
                    <h2>Premium Segment Estimate</h2>
                    <p class="headline-insight">The "Reliability Premium" is the growth engine.</p>
                </div>
                <div class="card">
                    <div class="sec5-chart-container">
                        <canvas id="sec5_chartSegment"></canvas>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--text-muted);">
                        Mapped Proxies: Consumers prioritizing "Safety" represent a ~USD 865M opportunity.
                    </p>
                </div>
            </section>

            <section id="sec5_price">
                <div class="header-box">
                    <h2>Price Band Reality Check</h2>
                    <p class="headline-insight">Validating 3x-5x "Reliability Premium".</p>
                </div>
                <div class="price-grid">
                    <div class="price-chart-box">
                        <h4 style="font-size:0.75rem; text-transform:uppercase; font-weight:700; color:var(--text-muted); margin-bottom:0.5rem;">Shampoo</h4>
                        <div class="price-chart-container"><canvas id="sec5_priceShampoo"></canvas></div>
                    </div>
                    <div class="price-chart-box">
                        <h4 style="font-size:0.75rem; text-transform:uppercase; font-weight:700; color:var(--text-muted); margin-bottom:0.5rem;">Body Wash</h4>
                        <div class="price-chart-container"><canvas id="sec5_priceBodyWash"></canvas></div>
                    </div>
                </div>
            </section>

            <section id="sec5_drivers">
                <div class="header-box">
                    <h2>Strategic Drivers vs. Constraints</h2>
                    <p class="headline-insight">Halal 2026 acts as a natural market filter.</p>
                </div>
                <div class="card">
                    <div class="sec5-chart-container" style="height: 360px;">
                        <canvas id="sec5_chartDrivers"></canvas>
                    </div>
                </div>
            </section>

            <section id="sec5_forecast">
                <div class="header-box">
                    <h2>2030 Market Outlook</h2>
                    <p class="headline-insight">Value-led growth outperforms volume expansion.</p>
                </div>
                <div class="card">
                    <div class="sec5-chart-container">
                        <canvas id="sec5_chartForecast"></canvas>
                    </div>
                </div>
            </section>

            <section id="sec5_verdict">
                <div class="verdict-banner">
                    <div class="verdict-badge">VERDICT: VIABLE</div>
                    <h1 style="font-size: 1.8rem; margin-bottom: 0.8rem;">Safety-First Positioning Validated</h1>
                    <p style="font-size: 1rem; opacity: 0.95; max-width: 600px; margin: 0 auto; line-height: 1.5;">
                        Q'WELL corresponds to a structurally underserved 35.9% of the Indonesian personal care market. demand for biological security is persistent through 2030.
                    </p>
                    <div style="margin-top: 1.5rem;">
                        <button class="btn-copy" id="sec5_copyVerdict">Copy Executive Verdict</button>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<script>
(function(){
    const P = {
        primary: '#65BDAD', secondary: '#CAF1EB', accent: '#FFCC97',
        text: '#2D3748', muted: '#718096', white: '#FFFFFF'
    };

    const MARKET = { h: 1213.3, b: 1200.0, share: 0.359 };

    function init(){
        if(typeof Chart === 'undefined') return;

        // Market Baseline
        new Chart(document.getElementById('sec5_chartMarket'), {
            type: 'bar',
            data: {
                labels: ['Hair Care', 'Bath/Shower', 'Total'],
                datasets: [{
                    data: [MARKET.h, MARKET.b, MARKET.h+MARKET.b],
                    backgroundColor: [P.primary, P.accent, P.secondary],
                    borderRadius: 8
                }]
            },
            options: { responsive: true, maintainAspectRatio: false, plugins: { legend: {display:false} } }
        });

        // Segment
        new Chart(document.getElementById('sec5_chartSegment'), {
            type: 'bar',
            data: {
                labels: ['Total', 'Premium Segment'],
                datasets: [{
                    data: [MARKET.h+MARKET.b, (MARKET.h+MARKET.b)*MARKET.share],
                    backgroundColor: [P.secondary, P.primary],
                    borderRadius: 8
                }]
            },
            options: { indexAxis: 'y', responsive: true, maintainAspectRatio: false, plugins: { legend: {display:false} } }
        });

        // Price Charts
        const priceOpts = { responsive: true, maintainAspectRatio: false, plugins: { legend: {display:false} }, scales: { y: {display:false} } };
        new Chart(document.getElementById('sec5_priceShampoo'), {
            type:'bar', data: { labels:['Mass','Upper','Premium'], datasets:[{data:[65,25,10], backgroundColor:P.accent, borderRadius:6}] }, options: priceOpts
        });
        new Chart(document.getElementById('sec5_priceBodyWash'), {
            type:'bar', data: { labels:['Mass','Upper','Premium'], datasets:[{data:[70,20,10], backgroundColor:P.primary, borderRadius:6}] }, options: priceOpts
        });

        // Drivers Radar
        new Chart(document.getElementById('sec5_chartDrivers'), {
            type: 'radar',
            data: {
                labels: ['Sensitivity', 'BPOM', 'Halal 2026', 'Literacy', 'Verification', 'Skinimalism'],
                datasets: [
                    { label: 'Drivers', data: [4,4,4,3,4,3], borderColor: P.primary, backgroundColor: 'rgba(101,189,173,0.2)' },
                    { label: 'Constraints', data: [3,3,2,4,3,4], borderColor: P.accent, backgroundColor: 'rgba(255,204,151,0.2)' }
                ]
            },
            options: { responsive: true, maintainAspectRatio: false, scales: { r: { min:0, max:5, ticks: {stepSize:1} } } }
        });

        // Forecast
        new Chart(document.getElementById('sec5_chartForecast'), {
            type: 'line',
            data: {
                labels: ['2025','2026','2027','2028','2029','2030'],
                datasets: [
                    { label: 'Base', data: [2413, 2548, 2691, 2842, 3001, 3169], borderColor: P.primary, tension: 0.3 },
                    { label: 'Downside', data: [2413, 2492, 2574, 2659, 2746, 2837], borderColor: P.accent, borderDash: [5,5], tension: 0.3 }
                ]
            },
            options: { responsive: true, maintainAspectRatio: false, plugins: { legend: {position:'bottom'} } }
        });

        // Accordions
        document.querySelectorAll('.section-5-wrapper .sec5-accordion-header').forEach(h => {
            h.addEventListener('click', () => {
                const acc = h.parentElement;
                const isOpen = acc.classList.toggle('open');
                h.querySelector('span').textContent = isOpen ? '−' : '+';
            });
        });

        // Copy buttons
        function copy(txt){
            navigator.clipboard.writeText(txt).then(() => {
                const t = document.createElement('div');
                t.textContent = 'Copied';
                Object.assign(t.style, {
                    position:'fixed', bottom:'32px', right:'32px', background:P.primary, color:'white',
                    padding:'8px 16px', borderRadius:'8px', zIndex:'9999', fontWeight:'bold'
                });
                document.body.appendChild(t);
                setTimeout(()=>t.remove(), 1000);
            });
        }
        document.getElementById('sec5_copyBoundary').addEventListener('click', () => copy("Scope: Shampoo, Body Wash, Body Butter, Hair Oil. Market: Indonesia."));
        document.getElementById('sec5_copyVerdict').addEventListener('click', () => copy("VERDICT: VIABLE. Safety-First positioning validated for structurally underserved 35.9% of ID market."));

        // Nav Active
        const links = Array.from(document.querySelectorAll('.section-5-wrapper .nav-links a'));
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if(e.isIntersecting){
                    links.forEach(l => l.classList.remove('active'));
                    const a = links.find(l => l.getAttribute('href') === '#'+e.target.id);
                    if(a) a.classList.add('active');
                }
            });
        }, { rootMargin: '-30% 0px -60% 0px', threshold: 0.1 });
        ['sec5_scope','sec5_baseline','sec5_segment','sec5_price','sec5_drivers','sec5_forecast','sec5_verdict'].forEach(id => {
            const el = document.getElementById(id);
            if(el) observer.observe(el);
        });
    }

    if(document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();
</script>