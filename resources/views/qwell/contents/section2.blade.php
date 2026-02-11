<style>
    /* Scoped Variables needed for Section 2 */
    .section-2-wrapper {
        --primary: #65BDAD;
        --secondary: #FFCC97;
        --accent: #CAF1EB;
        --bg-light: #FFEBDA;
        --text-dark: #2D3436;
        --white: #FFFFFF;
        --soft-shadow: 0 4px 20px rgba(0,0,0,0.05);

        font-family: 'Inter', sans-serif;
        background-color: var(--bg-light);
        color: var(--text-dark);
        line-height: 1.6;
        /* Flex needed for layout, but scoped */
        display: flex;
        flex-direction: column; /* Stacked on mobile, row on desktop */
    }

    @media (min-width: 900px) {
        .section-2-wrapper {
            flex-direction: row;
        }
    }

    /* Sidebar Navigation (Scoped) */
    .section-2-sidebar {
        width: 100%;
        background: var(--white);
        padding: 2rem;
        border-bottom: 1px solid var(--accent);
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        /* Sticky behavior within the wrapper */
        position: relative;
    }

    @media (min-width: 900px) {
        .section-2-sidebar {
            width: 280px;
            height: 100vh; /* Or auto to fit content */
            position: sticky;
            top: 0;
            border-right: 1px solid var(--accent);
            border-bottom: none;
            flex-shrink: 0;
        }
    }

    .section-2-sidebar h1 { font-size: 1.2rem; color: var(--primary); margin-bottom: 1rem; }
    .section-2-sidebar nav { display: flex; flex-direction: column; gap: 0.5rem; }
    .section-2-sidebar nav a { 
        text-decoration: none; color: var(--text-dark); font-weight: 500; font-size: 0.9rem;
        padding: 0.8rem; border-radius: 8px; transition: 0.3s;
    }
    .section-2-sidebar nav a:hover { background: var(--accent); color: var(--primary); }

    /* Main Content (Scoped) */
    .section-2-main {
        flex: 1;
        padding: 2.5rem;
        width: 100%;
        max-width: 100%; /* Ensure it doesn't overflow flex container */
    }

    .section-2-main .header { margin-bottom: 3rem; }
    .section-2-main .header h2 { font-size: 2.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem; }
    .section-2-main .header p { color: #636e72; font-size: 1.1rem; }

    /* Controls Area */
    .section-2-main .controls { 
        background: var(--white); padding: 1rem 2rem; border-radius: 12px; 
        margin-bottom: 2rem; display: flex; align-items: center; justify-content: space-between;
        box-shadow: var(--soft-shadow);
        flex-wrap: wrap; gap: 1rem;
    }
    .section-2-main .filter-btns { display: flex; gap: 0.5rem; flex-wrap: wrap; }
    .section-2-main .filter-btn { 
        padding: 0.5rem 1rem; border: none; border-radius: 20px; font-size: 0.8rem; cursor: pointer;
        background: var(--accent); color: var(--primary); transition: 0.3s; font-weight: 600;
    }
    .section-2-main .filter-btn.active { background: var(--primary); color: var(--white); }

    .section-2-main .source-toggle { font-size: 0.85rem; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 0.5rem; }

    /* Grid Layout */
    .section-2-main .dashboard-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; }
    
    @media (min-width: 900px) {
        .section-2-main .dashboard-grid { grid-template-columns: repeat(2, 1fr); }
    }

    .section-2-main .card { 
        background: var(--white); border-radius: 16px; padding: 1.5rem; 
        box-shadow: var(--soft-shadow); transition: transform 0.2s;
        border: 1px solid transparent;
        display: flex;
        flex-direction: column;
    }
    .section-2-main .card:hover { transform: translateY(-3px); border-color: var(--secondary); }
    .section-2-main .card.full-width { grid-column: span 1; }
    
    @media (min-width: 900px) {
        .section-2-main .card.full-width { grid-column: span 2; }
    }

    .section-2-main .card h3 { font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary); display: flex; align-items: center; gap: 0.5rem; }
    .section-2-main .insight-text { font-size: 0.95rem; color: #4b4b4b; margin-bottom: 1rem; }
    .section-2-main .highlight { font-weight: 700; color: var(--primary); }

    /* Accordion Style (Local to Section 2) */
    .section-2-main .accordion { margin-top: auto; border-top: 1px solid #f1f1f1; }
    .section-2-main .accordion-item { padding: 0.75rem 0; cursor: pointer; font-size: 0.85rem; font-weight: 600; color: #7f8c8d; }
    .section-2-main .accordion-content { display: none; padding-bottom: 1rem; color: #4b4b4b; font-weight: 400; }
    .section-2-main .accordion-content ul { padding-left: 1.2rem; }
    .section-2-main .accordion-content li { margin-bottom: 0.4rem; }

    /* Tooltips */
    .section-2-main .tooltip { position: relative; border-bottom: 1px dotted var(--primary); cursor: help; }
    .section-2-main .tooltip:hover::after {
        content: attr(data-tip); position: absolute; bottom: 120%; left: 0; background: #333;
        color: #fff; padding: 8px; border-radius: 4px; width: 200px; font-size: 0.75rem; z-index: 10;
    }

    /* Charts Wrapper */
    .section-2-main .chart-container { height: 250px; position: relative; margin: 1rem 0; }

    /* Citation Style */
    .section-2-main .citation { display: none; font-size: 0.7rem; color: var(--primary); font-style: italic; margin-top: 5px; }
</style>

<div class="section-2-wrapper">
    <aside class="section-2-sidebar">
        <h1>Q'WELL Research</h1>
        <nav>
            <a href="#prevalence">1. Prevalence Overview</a>
            <a href="#causes">2. Structural Causes</a>
            <a href="#barrier">3. Barrier & Risk</a>
            <a href="#behavior">4. Consumer Behavior</a>
            <a href="#summary">5. Executive Summary</a>
        </nav>
    </aside>

    <div class="section-2-main">
        <div class="header">
            <h2>Dermatological Crisis Dashboard</h2>
            <p>Analyzing the Structural Determinants of Sensitivity in Indonesia</p>
        </div>

        <div class="controls">
            <div class="filter-btns">
                <button class="filter-btn active" onclick="section2FilterInsight('all', this)">All Insights</button>
                <button class="filter-btn" onclick="section2FilterInsight('env', this)">Environmental</button>
                <button class="filter-btn" onclick="section2FilterInsight('life', this)">Lifestyle</button>
                <button class="filter-btn" onclick="section2FilterInsight('form', this)">Formulation</button>
            </div>
            <div class="source-toggle" onclick="section2ToggleSources()">
                <input type="checkbox" id="section2SrcSwitch"> <span>Show Sources</span>
            </div>
        </div>

        <div class="dashboard-grid">
            <!-- Section 1: Prevalence -->
            <div class="card" id="prevalence" data-cat="all">
                <h3>Prevalence Trajectory</h3>
                <p class="insight-text">Population-level sensitivity is shifting from <span class="highlight">acute irritation to chronic reactivity</span>.</p>
                <div class="chart-container">
                    <canvas id="prevalenceChart"></canvas>
                </div>
                <div class="accordion">
                    <div class="accordion-item" onclick="section2ToggleAcc(this)">View Clinical Breakdown ▼</div>
                    <div class="accordion-content">
                        <ul>
                            <li><span class="highlight">88%</span> of male students report recurring dandruff/scalp itch.</li>
                            <li>Dermatitis prevalence at <span class="highlight">6.8%</span>, with 90% linked to contact irritants.</li>
                            <li><span class="highlight">87.5%</span> of urban youth suffer from treatment-induced barrier sensitivity.</li>
                        </ul>
                    </div>
                </div>
                <div class="citation">Sources: BPS Health Survey, Dermatology Journals ID</div>
            </div>

            <!-- Section 2: Structural Causes -->
            <div class="card" id="causes" data-cat="env life form">
                <h3>Structural Root Causes</h3>
                <p class="insight-text">Drivers of sensitivity are baked into the urban environment and commercial cycles.</p>
                <div class="chart-container">
                    <canvas id="causesChart"></canvas>
                </div>
                <div class="accordion">
                    <div class="accordion-item" onclick="section2ToggleAcc(this)">Key Environmental Factors ▼</div>
                    <div class="accordion-content">
                        <ul>
                            <li><strong>Pollution:</strong> $PM_{2.5}$ triggers oxidative stress and barrier micro-inflammation.</li>
                            <li><strong>Water Toxicity:</strong> Hard water and high mineral content strip natural lipids.</li>
                            <li><strong>Formulation:</strong> <span class="highlight">54.9%</span> of products cause sensitivity through active overuse.</li>
                        </ul>
                    </div>
                </div>
                <div class="citation">Sources: Ministry of Environment ID, Industry Market Research</div>
            </div>

            <!-- Section 3: Barrier Damage Loop -->
            <div class="card" id="barrier" data-cat="env form">
                <h3>The Barrier Degradation Loop</h3>
                <p class="insight-text">High <span class="tooltip" data-tip="Transepidermal Water Loss: the amount of water lost across the stratum corneum through evaporation.">TEWL</span> values indicate permanent barrier breach.</p>
                <div class="chart-container">
                    <svg viewBox="0 0 400 200" style="width:100%; height:100%;">
                        <circle cx="200" cy="100" r="70" fill="none" stroke="#CAF1EB" stroke-width="2" stroke-dasharray="5,5" />
                        <g transform="translate(200,30)">
                            <rect x="-60" y="-15" width="120" height="30" rx="15" fill="#65BDAD" />
                            <text y="5" text-anchor="middle" fill="#fff" font-size="10" font-weight="bold">External Stressors</text>
                        </g>
                        <g transform="translate(320,100)">
                            <rect x="-50" y="-15" width="100" height="30" rx="15" fill="#FFCC97" />
                            <text y="5" text-anchor="middle" fill="#fff" font-size="10" font-weight="bold">Barrier Failure</text>
                        </g>
                        <g transform="translate(200,170)">
                            <rect x="-60" y="-15" width="120" height="30" rx="15" fill="#65BDAD" />
                            <text y="5" text-anchor="middle" fill="#fff" font-size="10" font-weight="bold">Inflammation Flare</text>
                        </g>
                        <g transform="translate(80,100)">
                            <rect x="-50" y="-15" width="100" height="30" rx="15" fill="#FFCC97" />
                            <text y="5" text-anchor="middle" fill="#fff" font-size="10" font-weight="bold">TEWL Elevation</text>
                        </g>
                    </svg>
                </div>
                <div class="insight-text">
                    TEWL for sensitive skin: <span class="highlight">18.07 $g/m^2/h$</span> vs <span class="highlight">5.61 $g/m^2/h$</span> in healthy skin. This 3x increase creates a "leaky" interface.
                </div>
                <div class="citation">Sources: Clinical Barrier Studies ID</div>
            </div>

            <!-- Section 4: Cocok-Cocokan -->
            <div class="card" id="behavior" data-cat="life form">
                <h3>“Cocok-Cocokan” Behavior Funnel</h3>
                <p class="insight-text">Misinformation drives a high-cost, high-wastage cycle of brand switching.</p>
                <div class="chart-container">
                    <canvas id="behaviorChart"></canvas>
                </div>
                <div class="accordion">
                    <div class="accordion-item" onclick="section2ToggleAcc(this)">Behavior Drivers ▼</div>
                    <div class="accordion-content">
                        <ul>
                            <li><strong>Claim Fatigue:</strong> Viral transparency tests show massive gaps in actual active levels.</li>
                            <li><strong>Financial Impact:</strong> Indonesians spend significant income on failed "trial" products.</li>
                            <li><strong>Social Pressure:</strong> gen-Z purchases are 50%+ driven by TikTok/IG hype cycles.</li>
                        </ul>
                    </div>
                </div>
                <div class="citation">Sources: Consumer Signal Aggregation, E-commerce Sentiment Data</div>
            </div>

            <!-- Section 5: Summary -->
            <div class="card full-width" id="summary" style="background-color: var(--accent); border: 2px solid var(--primary);">
                <h3>Systemic Problem Definition</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: flex-start;">
                    <div style="flex: 1; min-width: 300px;">
                        <p style="font-size: 1.2rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">Skin sensitivity in Indonesia is a structural health reality, not a trend.</p>
                        <ul class="insight-text" style="list-style: none;">
                            <li style="margin-bottom: 0.5rem;">🚨 <strong>Environment:</strong> Unavoidable exposure to extreme UV and lethal air particulates.</li>
                            <li style="margin-bottom: 0.5rem;">🚨 <strong>Barrier:</strong> Permanent degradation turning temporary irritation chronic.</li>
                            <li style="margin-bottom: 0.5rem;">🚨 <strong>Culture:</strong> "Cocok-cocokan" cycle fueled by claim integrity failure.</li>
                        </ul>
                    </div>
                    <div style="flex: 1; min-width: 300px; padding: 1.5rem; background: var(--white); border-radius: 12px;">
                        <p class="insight-text"><strong>Conclusion:</strong> Consumers are trapped in a loop of <strong>hostile stressors</strong> and <strong>ineffective active-heavy products</strong>. Q'WELL solves this by targeting the structural barrier deficiency first.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() { // Wrap in IIFE to avoid global variable conflicts
        // 1. PREVALENCE CHART (Indexed 1-5 Trend)
        const ctx1 = document.getElementById('prevalenceChart');
        if (ctx1) {
            new Chart(ctx1.getContext('2d'), {
                type: 'line',
                data: {
                    labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
                    datasets: [{
                        label: 'Sensitivity Index',
                        data: [2.8, 3.2, 3.5, 4.1, 4.5, 4.8],
                        borderColor: '#65BDAD',
                        backgroundColor: 'rgba(101, 189, 173, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: { y: { min: 1, max: 5, ticks: { stepSize: 1 } } }
                }
            });
        }

        // 2. ROOT CAUSES CHART (Radar)
        const ctx2 = document.getElementById('causesChart');
        if (ctx2) {
            new Chart(ctx2.getContext('2d'), {
                type: 'radar',
                data: {
                    labels: ['Pollution', 'UV Exposure', 'Water Quality', 'Lifestyle Stress', 'Formulation Harshness'],
                    datasets: [{
                        label: 'Contribution Level (Indexed)',
                        data: [4.8, 4.2, 4.5, 3.8, 4.0],
                        backgroundColor: 'rgba(255, 204, 151, 0.5)',
                        borderColor: '#FFCC97',
                        pointBackgroundColor: '#65BDAD'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: { r: { min: 0, max: 5, ticks: { display: false } } }
                }
            });
        }

        // 4. BEHAVIOR CHART (Horizontal Bar)
        const ctx4 = document.getElementById('behaviorChart');
        if (ctx4) {
            new Chart(ctx4.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Social Hype Discovery', 'Product Purchase', 'Barrier Irritation', 'Brand Abandonment', 'New Cycle Start'],
                    datasets: [{
                        label: 'Participation %',
                        data: [95, 82, 68, 74, 88],
                        backgroundColor: ['#CAF1EB', '#FFCC97', '#65BDAD', '#FFCC97', '#CAF1EB']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    plugins: { legend: { display: false } }
                }
            });
        }
    })();

    // Interactivity Scripts (Global Functions with unique names)
    function section2ToggleAcc(element) {
        const content = element.nextElementSibling;
        const isOpen = content.style.display === "block";
        content.style.display = isOpen ? "none" : "block";
        element.innerText = isOpen ? element.innerText.replace('▲', '▼') : element.innerText.replace('▼', '▲');
    }

    function section2ToggleSources() {
        const citations = document.querySelectorAll('.section-2-wrapper .citation');
        const isChecked = document.getElementById('section2SrcSwitch').checked;
        citations.forEach(c => c.style.display = isChecked ? 'block' : 'none');
    }

    function section2FilterInsight(cat, btn) {
        const wrapper = btn.closest('.section-2-main');
        const cards = wrapper.querySelectorAll('.card');
        const buttons = wrapper.querySelectorAll('.filter-btn');
        
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        cards.forEach(card => {
            if (cat === 'all' || card.id === 'summary') {
                card.style.opacity = "1";
                card.style.display = "flex";
            } else {
                const categories = card.getAttribute('data-cat');
                if (categories && categories.includes(cat)) {
                    card.style.opacity = "1";
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            }
        });
    }
</script>