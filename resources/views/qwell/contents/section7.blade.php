<style>
    .section-7-wrapper {
        --primary: #65BDAD;
        --accent: #FFCC97;
        --bg-light: #FFEBDA;
        --bg-soft: #CAF1EB;
        --text-main: #2D3436;
        --text-muted: #636E72;
        --white: #FFFFFF;
        --border: rgba(0,0,0,0.08);
        --card-shadow: 0 4px 20px rgba(0,0,0,0.05);
        
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        background-color: var(--bg-soft);
        color: var(--text-main);
        line-height: 1.5;
        display: flex;
        flex-direction: column;
        width: 100%;
        position: relative;
        isolation: isolate;
    }

    .section-7-wrapper * { box-sizing: border-box; margin: 0; padding: 0; }

    .section-7-wrapper .sec7-layout {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    @media (min-width: 1025px) {
        .section-7-wrapper .sec7-layout {
            flex-direction: row;
        }
    }

    /* Sidebar Navigation */
    .section-7-wrapper .sec7-aside {
        width: 100%;
        background: var(--white);
        padding: 2rem 1.5rem;
        border-bottom: 1px solid var(--border);
        z-index: 100;
        transition: transform 0.27s cubic-bezier(.21,.6,.34,1), opacity 0.27s;
    }

    @media (max-width: 1024px) {
        .section-7-wrapper .sec7-aside {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 86vw;
            max-width: 320px;
            min-width: 220px;
            box-shadow: 0 8px 32px rgba(0,0,0,.11), 0 1.5px 6px rgba(0,0,0,.04);
            transform: translateX(-105%);
            opacity: 0;
            pointer-events: none;
            border-bottom: none;
        }
        .section-7-wrapper .sec7-aside.sec7-mobile-open {
            transform: translateX(0);
            opacity: 1;
            pointer-events: all;
        }
    }

    @media (min-width: 1025px) {
        .section-7-wrapper .sec7-aside {
            width: 280px;
            height: auto;
            max-height: 100vh;
            position: sticky;
            top: 0;
            border-right: 1px solid var(--border);
            border-bottom: none;
            transform: none !important;
            opacity: 1 !important;
            pointer-events: all !important;
        }
    }

    .section-7-wrapper .sec7-aside h2 { font-size: 0.75rem; text-transform: uppercase; color: var(--text-muted); letter-spacing: 1.5px; margin-bottom: 1.5rem; border-bottom: 2px solid var(--accent); padding-bottom: 0.5rem; }
    .section-7-wrapper .sec7-nav { display: flex; flex-direction: column; gap: 0.4rem; }
    .section-7-wrapper .sec7-nav a {
        text-decoration: none;
        color: var(--text-main);
        padding: 0.8rem 1rem;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s;
    }
    .section-7-wrapper .sec7-nav a:hover { background: var(--bg-soft); color: var(--primary); }
    .section-7-wrapper .sec7-nav a.sec7-active { background: var(--primary); color: var(--white); }

    /* Overlay for mobile sidebar */
    .sec7-sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 90;
        background: rgba(0,0,0,0.18);
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.19s;
    }

    /* Burger button style */
    .sec7-burger-btn {
        display: none;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        border: 1px solid #ececec;
        cursor: pointer;
        padding: 0;
        margin-bottom: 15px;
    }

    @media (max-width: 1024px) {
        .sec7-burger-btn {
            display: flex;
        }
    }

    .sec7-burger-lines {
        display: inline-block;
        width: 22px;
        height: 16px;
        position: relative;
    }
    .sec7-burger-lines span {
        display: block;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
        position: absolute;
        left: 0;
        right: 0;
        transition: .22s cubic-bezier(.21,.6,.34,1);
    }
    .sec7-burger-lines span:nth-child(1) { top: 0; }
    .sec7-burger-lines span:nth-child(2) { top: 6.5px; }
    .sec7-burger-lines span:nth-child(3) { top: 13px; }
    .sec7-burger-btn.open .sec7-burger-lines span:nth-child(1) { transform: rotate(45deg) translateY(6.2px); }
    .sec7-burger-btn.open .sec7-burger-lines span:nth-child(2) { opacity: 0; transform: scaleX(0.2); }
    .sec7-burger-btn.open .sec7-burger-lines span:nth-child(3) { transform: rotate(-45deg) translateY(-6.2px); }

    /* Main Content */
    .section-7-wrapper .sec7-main { 
        flex: 1; 
        padding: 1.5rem 1rem; 
        background: var(--bg-soft); 
    }

    @media (min-width: 769px) {
        .section-7-wrapper .sec7-main {
            padding: 3rem 4rem;
        }
    }

    .section-7-wrapper .sec7-header { margin-bottom: 2rem; }
    .section-7-wrapper .sec7-header h1 { font-size: 1.75rem; margin: 0; font-weight: 800; color: var(--text-main); letter-spacing: -0.5px; line-height: 1.2; }
    @media (min-width: 769px) { .section-7-wrapper .sec7-header h1 { font-size: 2.22rem; } }
    .section-7-wrapper .sec7-header p { color: var(--text-muted); font-size: 1rem; max-width: 800px; margin-top: 0.75rem; }

    .section-7-wrapper .sec7-section { margin-bottom: 3rem; scroll-margin-top: 1.5rem; }
    .section-7-wrapper .sec7-section-title { font-size: 1.35rem; font-weight: 700; color: var(--text-main); margin-bottom: 1.25rem; display: flex; align-items: center; justify-content: space-between; }
    @media (min-width: 769px) { .section-7-wrapper .sec7-section-title { font-size: 1.7rem; } }
    
    /* Dashboard Components */
    .section-7-wrapper .sec7-card-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 1.5rem; }
    @media (min-width: 769px) {
        .section-7-wrapper .sec7-card-grid { grid-template-columns: repeat(2, 1fr); }
    }
    .section-7-wrapper .sec7-card { background: var(--white); padding: 1.5rem; border-radius: 16px; box-shadow: var(--card-shadow); border: 1px solid var(--border); position: relative; }
    .section-7-wrapper .sec7-card.sec7-full { grid-column: 1 / -1; }
    .section-7-wrapper .sec7-card h3 { margin-top: 0; font-size: 1.05rem; color: var(--primary); margin-bottom: 1.25rem; border-bottom: 1px solid var(--bg-soft); padding-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px; }
    
    .section-7-wrapper .sec7-insight-headline { background: var(--white); padding: 1.5rem; border-radius: 12px; border-left: 6px solid var(--primary); margin-bottom: 1.5rem; }
    .section-7-wrapper .sec7-insight-headline h4 { margin: 0; font-size: 1.2rem; font-weight: 700; color: var(--text-main); }
    .section-7-wrapper .sec7-insight-headline p { margin: 0.5rem 0 0 0; font-size: 0.95rem; color: var(--text-muted); }

    /* Visualizations */
    .section-7-wrapper .sec7-chart-container { height: 300px; position: relative; margin-top: 1rem; width: 100%; }
    @media (max-width: 768px) {
        .section-7-wrapper .sec7-chart-container { height: 240px; }
    }

    .section-7-wrapper .sec7-pyramid-container { display: flex; flex-direction: column; align-items: center; gap: 6px; margin-top: 2rem; }
    .section-7-wrapper .sec7-pyramid-layer { 
        width: 100% !important; 
        height: 54px; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        color: var(--white); 
        font-weight: 700; 
        font-size: 0.85rem; 
        transition: transform 0.2s; 
        cursor: pointer; 
        text-align: center; 
        padding: 0 15px; 
        border-radius: 8px;
    }
    
    @media (min-width: 641px) {
        .section-7-wrapper .sec7-p-l3 { width: 45% !important; }
        .section-7-wrapper .sec7-p-l2 { width: 70% !important; }
        .section-7-wrapper .sec7-p-l1 { width: 95% !important; }
    }
    .section-7-wrapper .sec7-pyramid-layer:hover { transform: scale(1.02); }

    /* Nested card adjustments */
    .section-7-wrapper .sec7-card .sec7-card {
        box-shadow: none;
        border: 1px solid rgba(0,0,0,0.05);
        background: #fafafa;
        padding: 1.25rem;
    }

    /* Interactive Elements */
    .section-7-wrapper .sec7-toggle-container { margin-top: 1rem; display: flex; flex-wrap: wrap; gap: 0.75rem; }
    .section-7-wrapper .sec7-btn-toggle { background: var(--white); border: 1px solid var(--border); padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; cursor: pointer; font-weight: 600; transition: 0.2s; }
    .section-7-wrapper .sec7-btn-toggle.sec7-active { background: var(--primary); color: white; border-color: var(--primary); }
    
    .section-7-wrapper .sec7-details-panel { display: none; margin-top: 1.25rem; padding: 1.25rem; background: #f9f9f9; border-radius: 12px; border: 1px dashed var(--primary); font-size: 0.9rem; }
    .section-7-wrapper .sec7-sources-panel { display: none; margin-top: 1rem; padding: 1rem; background: #fafafa; border-radius: 8px; font-size: 0.75rem; color: var(--text-muted); border: 1px solid #eee; }

    /* Comparison Mode Styles */
    .section-7-wrapper .sec7-compare-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; }
    @media (min-width: 640px) {
        .section-7-wrapper .sec7-compare-grid { grid-template-columns: 1fr 1fr; }
    }
    .section-7-wrapper .sec7-compare-box { padding: 1rem; border-radius: 12px; border: 1px solid var(--border); }
    .section-7-wrapper .sec7-compare-label { font-weight: 800; font-size: 0.7rem; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem; display: block; }
</style>
<body class="section-7">
<div class="section-7-wrapper">
    <div class="sec7-sidebar-overlay" id="sec7_sidebarOverlay"></div>
    <div class="sec7-layout">
        <aside class="sec7-aside" id="sec7_sidebar">
            <h2>Proof Architecture</h2>
            <div class="sec7-nav" id="sec7_sideNav">
                <a href="#sec7_regulatory" class="sec7-active">Regulatory Baseline</a>
                <a href="#sec7_testing">Testing Hierarchy</a>
                <a href="#sec7_certification">Certification Signals</a>
                <a href="#sec7_claims">Claim Classification</a>
                <a href="#sec7_transparency">Transparency Threshold</a>
                <a href="#sec7_risk">Risk & Liability Logic</a>
                <a href="#sec7_model">Final Architecture</a>
            </div>
        </aside>

        <main class="sec7-main">
            <div class="sec7-header">
                <button class="sec7-burger-btn" id="sec7_burgerBtn" aria-label="Toggle Navigation">
                    <span class="sec7-burger-lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <h1>Trust Infrastructure Blueprint</h1>
                <p>A structural evidence framework for Q’WELL’s safety-led positioning in Indonesia. Validating the pivot from aesthetic promises to <strong>Biological Security</strong>.</p>
            </div>

            <div id="sec7_regulatory" class="sec7-section">
                <div class="sec7-section-title">A. Regulatory Baseline (Indonesia)</div>
                <div class="sec7-insight-headline">
                    <h4>Purity is No Longer Voluntary</h4>
                    <p>New BPOM regulations (2024-2025) shift focus from simple registration to pro-active Risk Assessment of Raw Materials.</p>
                </div>
                <div class="sec7-card-grid">
                    <div class="sec7-card">
                        <h3>Mandatory Prerequisites</h3>
                        <ul style="font-size: 0.9rem; list-style-position: inside; padding-left: 0.5rem;">
                            <li style="margin-bottom: 0.5rem;"><strong>BPOM NA Number:</strong> The absolute Consider-Gate.[8]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Reg 18/2024:</strong> Mandatory Bahasa Indonesia labeling.[9]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Reg 16/2024:</strong> Contaminant limits (Lead ≤20ppm, Mercury ≤1ppm).[10]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>2D Barcode:</strong> Mandatory QR traceability by Nov 2025.[10]</li>
                        </ul>
                    </div>
                    <div class="sec7-card">
                        <h3>Enforcement Reality</h3>
                        <p style="font-size: 0.9rem; color: var(--text-muted);">BPOM reported illegal cosmetics valued at <strong>Rp 1.87 Trillion</strong> in late 2025. 75% of violations involve deceptive labeling.</p>
                        <div class="sec7-toggle-container">
                            <button class="sec7-btn-toggle" id="sec7_btnRegDetail">Show Detail</button>
                            <button class="sec7-btn-toggle" id="sec7_btnRegSources">Show Sources</button>
                        </div>
                        <div id="sec7_regDetail" class="sec7-details-panel">
                            Reg 26/2025 introduced mandatory Risk Assessment Dossiers (RAD) for raw materials, rewarding brands with pharmaceutical-grade supply chains.
                        </div>
                        <div id="sec7_regSources" class="sec7-sources-panel"></div>
                    </div>
                </div>
            </div>

            <div id="sec7_testing" class="sec7-section">
                <div class="sec7-section-title">B. Testing Hierarchy</div>
                <div class="sec7-card sec7-full">
                    <h3 style="border-bottom:none; margin-bottom: 0.5rem;">The Proof Pyramid</h3>
                    <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">The structural hierarchy of evidence required for Q'WELL's safety claims.</p>
                    
                    <div class="sec7-pyramid-container">
                        <div class="sec7-pyramid-layer sec7-p-l3" style="background: #65BDAD;" title="Efficacy Testing (Level 3)">Clinical Performance</div>
                        <div class="sec7-pyramid-layer sec7-p-l2" style="background: #8BCBBE;" title="Advanced Safety (Level 2)">HRIPT / Hypoallergenic</div>
                        <div class="sec7-pyramid-layer sec7-p-l1" style="background: #B2D9D1;" title="Mandatory Baseline (Level 1)">Microbial & Heavy Metals</div>
                    </div>

                    <div class="sec7-card-grid" style="margin-top: 2.5rem;">
                        <div class="sec7-card">
                            <h3>Hierarchy Complexity</h3>
                            <div class="sec7-chart-container"><canvas id="sec7_testingComplexityChart"></canvas></div>
                        </div>
                        <div class="sec7-card">
                            <h3>Compare Proof Levels</h3>
                            <div style="margin-bottom: 1.25rem;">
                                <select id="sec7_compProof" style="width: 100%; padding: 0.75rem; border-radius: 12px; border: 1px solid var(--border); background: #fff; font-family: inherit; font-size: 0.9rem; font-weight: 600; -webkit-appearance: none; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23636E72%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.4-12.8z%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 0.65rem auto;">
                                    <option value="basic">Basic Safety vs HRIPT</option>
                                    <option value="clinical">HRIPT vs Clinical Efficacy</option>
                                </select>
                            </div>
                            <div id="sec7_compareResults" class="sec7-details-panel" style="display: block; min-height: 100px; background: white; border-style: solid; border-width: 1px; border-color: rgba(0,0,0,0.05);">
                                <strong>Basic:</strong> Validates physicochemical safety (Mandatory).<br>
                                <strong>HRIPT:</strong> Validates sensitization (6-week trial). Resolves "Breakout Trauma" fear.[11]
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sec7_certification" class="sec7-section">
                <div class="sec7-section-title">C. Certification Signal Strength</div>
                <div class="sec7-card-grid">
                    <div class="sec7-card">
                        <h3>Signal Radar</h3>
                        <div class="sec7-chart-container"><canvas id="sec7_certRadarChart"></canvas></div>
                        <p style="font-size: 0.7rem; text-align: center; color: var(--text-muted); margin-top: 5px;">(Indexed 1-5 Performance Comparison)</p>
                    </div>
                    <div class="sec7-card">
                        <h3>Strategic Recognition</h3>
                        <ul style="font-size: 0.9rem; list-style-position: inside;">
                            <li style="margin-bottom: 0.5rem;"><strong>Halal (BPJPH):</strong> Critical; influences 60% of purchase decisions.[12]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Vegan (DNA Tested):</strong> High barrier; BPOM requires DNA analysis.[13]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Cruelty-Free:</strong> 58% preference; significant for Gen Z.[14]</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Skinproof Endorsement:</strong> Local authority; outranks generic labels.[15]</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="sec7_claims" class="sec7-section">
                <div class="sec7-section-title">D. Claim Classification Model</div>
                <div class="sec7-card sec7-full">
                    <h3>Market Distribution of Claims</h3>
                    <div class="sec7-chart-container"><canvas id="sec7_claimDistChart"></canvas></div>
                    <div class="sec7-card-grid" style="margin-top: 1.5rem;">
                        <div class="sec7-compare-box" style="background: #fdf2e9;">
                            <span class="sec7-compare-label">Surface Signals (Mass)</span>
                            "Pure", "Natural", "Mild"<br>
                            <small>High usage, low verification depth.</small>
                        </div>
                        <div class="sec7-compare-box" style="background: #e8f8f5;">
                            <span class="sec7-compare-label">Structural Trust (Premium)</span>
                            "HRIPT Verified", "Batch COA Published"<br>
                            <small>High verification, justifies Reliability Premium.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sec7_transparency" class="sec7-section">
                <div class="sec7-section-title">E. Transparency Spectrum</div>
                <div class="sec7-card sec7-full">
                    <h3>Disclosure Index</h3>
                    <div class="sec7-chart-container"><canvas id="sec7_transparencyChart"></canvas></div>
                    <div class="sec7-insight-headline" style="margin-top: 1rem;">
                        <h4>The "Doktif" Threshold</h4>
                        <p>Brands identifying as "honest" saw a <strong>252% sales surge</strong>, while overclaimers faced 82% declines.</p>
                    </div>
                </div>
            </div>

            <div id="sec7_risk" class="sec7-section">
                <div class="sec7-section-title">F. Risk Management & Cost Logic</div>
                <div class="sec7-card sec7-full">
                    <div style="width: 100%; overflow-x: auto; padding-bottom: 1rem; text-align: center;">
                        <svg width="600" height="150" viewBox="0 0 600 150" style="margin: 0 auto; display: block;">
                            <rect x="10" y="45" width="120" height="60" rx="10" fill="#CAF1EB" stroke="#65BDAD" stroke-width="2"/>
                            <text x="70" y="80" text-anchor="middle" font-size="12" font-weight="bold">Elevated Testing</text>
                            <line x1="130" y1="75" x2="160" y2="75" stroke="#636E72" stroke-width="2" marker-end="url(#sec7_arrow)"/>
                            
                            <rect x="160" y="45" width="120" height="60" rx="10" fill="#FFEBDA" stroke="#FFCC97" stroke-width="2"/>
                            <text x="220" y="80" text-anchor="middle" font-size="12" font-weight="bold">Legal Shielding</text>
                            <line x1="280" y1="75" x2="310" y2="75" stroke="#636E72" stroke-width="2" marker-end="url(#sec7_arrow)"/>
        
                            <rect x="310" y="45" width="120" height="60" rx="10" fill="#CAF1EB" stroke="#65BDAD" stroke-width="2"/>
                            <text x="370" y="80" text-anchor="middle" font-size="12" font-weight="bold">Equity Protection</text>
                            <line x1="430" y1="75" x2="460" y2="75" stroke="#636E72" stroke-width="2" marker-end="url(#sec7_arrow)"/>
        
                            <rect x="460" y="30" width="130" height="90" rx="10" fill="#65BDAD" />
                            <text x="525" y="70" text-anchor="middle" font-size="14" font-weight="bold" fill="white">Pricing Confidence</text>
                            <text x="525" y="90" text-anchor="middle" font-size="10" fill="white">WTP Justified</text>
        
                            <defs><marker id="sec7_arrow" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto"><polygon points="0 0, 10 3.5, 0 7" fill="#636E72" /></marker></defs>
                        </svg>
                    </div>
                    <div class="sec7-card-grid" style="margin-top: 1rem;">
                        <div class="sec7-card">
                            <h3>Liability Logic</h3>
                            <p style="font-size: 0.9rem;">Law No. 17/2023 mandates criminal penalties (up to 12 years) for health violations. Elevated testing is the only structural hedge.</p>
                        </div>
                        <div class="sec7-card">
                            <h3>Compliance Cost</h3>
                            <p style="font-size: 0.9rem;">Annual compliance for premium certification estimated at <strong>$250,000</strong>. This discipline acts as a high-entry filter.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sec7_model" class="sec7-section">
                <div class="sec7-section-title">G. Final Proof Architecture Model</div>
                <div class="sec7-card sec7-full">
                    <h3>Layered Credibility Stack</h3>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <div class="sec7-compare-box" style="background: #FFCC97; border-color: #e67e22;">
                            <span class="sec7-compare-label" style="color: #d35400;">Layer 5: Medical Surrogacy</span>
                            Clinical Dermatologist endorsements + "Doctor Detective" alignment.
                        </div>
                        <div class="sec7-compare-box" style="background: #FFEBDA; border-color: #FFCC97;">
                            <span class="sec7-compare-label">Layer 4: Transparency</span>
                            Published Laboratory COAs + Mechanism Decoding content.
                        </div>
                        <div class="sec7-compare-box" style="background: #CAF1EB; border-color: #65BDAD;">
                            <span class="sec7-compare-label">Layer 3: Certification</span>
                            Dual Assurance (BPOM safety + Halal purity) + Vegan DNA testing.
                        </div>
                        <div class="sec7-compare-box" style="background: #8BCBBE; border-color: #65BDAD;">
                            <span class="sec7-compare-label">Layer 2: Advanced Testing</span>
                            HRIPT (100 subjects) including SPSS (Sensitive Skin) Panel.
                        </div>
                        <div class="sec7-compare-box" style="background: #65BDAD; border-color: #2D3436; color: white;">
                            <span class="sec7-compare-label" style="color: #FFEBDA;">Layer 1: Regulatory Foundation</span>
                            Full Reg 18/2024 compliance + INCI transparency + 2D Barcode tracking.
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
(function(){ // IIFE scope protection
    const P = {
        primary: '#65BDAD', accent: '#FFCC97', light: '#FFEBDA',
        soft: '#CAF1EB', muted: '#636E72', mid: '#8BCBBE', pale: '#B2D9D1'
    };

    const sources = {
        regulatory: [
            { label: 'PerBPOM No. 3 Tahun 2022 (Klaim Kosmetika) — PDF', url: 'https://standar-otskk.pom.go.id/storage/uploads/9fafd640-6c8b-4853-ae1f-9a2f9255db46/PerBPOM-No.-3-tahun-2022.pdf' },
            { label: 'CIRS Group — BPOM Reg 18/2024 & Nov 2025 note', url: 'https://www.cirs-group.com/en/cosmetics/indonesia-new-requirements-on-cosmetic-labeling-promotion-and-advertising-now-in-effect-full-enforcement-begins-november-2025' },
            { label: 'ARMA Law — BPOM Regulation 18/2024 overview', url: 'https://www.arma-law.com/news-event/newsflash/new-requirements-for-cosmetic-labeling-promotion-and-advertising-bpom-18-2024' }
        ],
        enforcement: [
            { label: 'ANTARA — Seizure of illegal cosmetics (late 2025)', url: 'https://en.antaranews.com/news/395788/indonesia-uncovers-112-million-in-illegal-cosmetics' },
            { label: 'Tempo — Illegal cosmetics dangerous chemicals', url: 'https://en.tempo.co/read/2062789/bpom-says-23-illegal-cosmetics-contain-dangerous-chemicals' }
        ]
    };

    function initCharts(){
        if(typeof Chart === 'undefined') return;
        
        // Settings
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#2D3436';

        // 1. Complexity
        const ctx1 = document.getElementById('sec7_testingComplexityChart');
        if(ctx1) {
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Basic Safety', 'Derm Test', 'HRIPT', 'Clinical'],
                    datasets: [{
                        data: [1.2, 2.5, 4.2, 5.0],
                        backgroundColor: [P.soft, P.pale, P.mid, P.primary],
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: {display:false} },
                    scales: { y: { beginAtZero: true, max: 5 } }
                }
            });
        }

        // 2. Radar
        const ctx2 = document.getElementById('sec7_certRadarChart');
        if(ctx2) {
            new Chart(ctx2, {
                type: 'radar',
                data: {
                    labels: ['Traceability', 'Recognition', 'Prevalence', 'Renewal'],
                    datasets: [
                        { label: 'Halal', data: [4.5, 5.0, 4.6, 3.6], borderColor: P.primary, backgroundColor: 'rgba(101,189,173,0.1)' },
                        { label: 'Vegan', data: [3.8, 3.4, 2.2, 3.4], borderColor: P.accent, backgroundColor: 'rgba(255,204,151,0.1)' }
                    ]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { position: 'bottom', labels: { boxWidth: 10 } } },
                    scales: { r: { min: 0, max: 5 } }
                }
            });
        }

        // 3. Claim Dist
        const ctx3 = document.getElementById('sec7_claimDistChart');
        if(ctx3) {
            new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    labels: ['Surface-level', 'Semi-specific', 'Structural trust'],
                    datasets: [{
                        data: [56, 28, 16],
                        backgroundColor: [P.accent, P.light, P.primary],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { position: 'bottom' } },
                    cutout: '65%'
                }
            });
        }

        // 4. Transparency
        const ctx4 = document.getElementById('sec7_transparencyChart');
        if(ctx4) {
            new Chart(ctx4, {
                type: 'line',
                data: {
                    labels: ['Generic', 'Named lab', 'Protocol', 'Batch COA', 'Portal'],
                    datasets: [{
                        label: 'Disclosure',
                        data: [1.2, 2.4, 3.2, 4.2, 5.0],
                        borderColor: P.primary,
                        backgroundColor: 'rgba(202,241,235,0.4)',
                        fill: true, tension: 0.3
                    }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: {display:false} },
                    scales: { y: { beginAtZero: true, max: 5 } }
                }
            });
        }
    }

    function setupUI(){
        const wrapper = document.querySelector('.section-7-wrapper');
        if(!wrapper) return;

        // Mobile Sidebar Toggle
        const burgerBtn = document.getElementById('sec7_burgerBtn');
        const sidebar = document.getElementById('sec7_sidebar');
        const overlay = document.getElementById('sec7_sidebarOverlay');

        function toggleSidebar() {
            const isOpen = sidebar.classList.toggle('sec7-mobile-open');
            burgerBtn.classList.toggle('open');
            overlay.style.display = isOpen ? 'block' : 'none';
            if (isOpen) {
                setTimeout(() => overlay.style.opacity = "1", 10);
                document.body.style.overflow = 'hidden';
            } else {
                overlay.style.opacity = "0";
                setTimeout(() => overlay.style.display = "none", 170);
                document.body.style.overflow = '';
            }
        }

        if (burgerBtn) burgerBtn.addEventListener('click', toggleSidebar);
        if (overlay) overlay.addEventListener('click', toggleSidebar);

        // Toggle Details
        const btnReg = document.getElementById('sec7_btnRegDetail');
        if(btnReg) btnReg.addEventListener('click', () => {
            const panel = document.getElementById('sec7_regDetail');
            panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
            btnReg.classList.toggle('sec7-active');
        });

        const btnSrc = document.getElementById('sec7_btnRegSources');
        if(btnSrc) btnSrc.addEventListener('click', () => {
            const panel = document.getElementById('sec7_regSources');
            if(panel.style.display !== 'block') {
                const html = '<ul>' + [...sources.regulatory, ...sources.enforcement].map(s => 
                    `<li><a href="${s.url}" target="_blank" style="color:#65BDAD;">${s.label}</a></li>`
                ).join('') + '</ul>';
                panel.innerHTML = html;
                panel.style.display = 'block';
            } else {
                panel.style.display = 'none';
            }
            btnSrc.classList.toggle('sec7-active');
        });

        // Compare select
        const compSel = document.getElementById('sec7_compProof');
        const compRes = document.getElementById('sec7_compareResults');
        if(compSel && compRes) {
            compSel.addEventListener('change', () => {
                if(compSel.value === 'basic') {
                    compRes.innerHTML = '<strong>Basic Safety</strong>: mandatory baseline (legality gate).<br><strong>HRIPT</strong>: in-vivo sensitization screening; supports confidence.';
                } else {
                    compRes.innerHTML = '<strong>HRIPT</strong>: validates safety.<br><strong>Clinical/Efficacy</strong>: validates measurable performance outcomes.';
                }
            });
        }

        // Smooth Nav
        const links = Array.from(wrapper.querySelectorAll('.sec7-nav a'));
        const sections = links.map(a => document.getElementById(a.getAttribute('href').substring(1))).filter(Boolean);

        links.forEach(a => {
            a.addEventListener('click', (e) => {
                if (window.innerWidth <= 1024) toggleSidebar();
                
                e.preventDefault();
                const target = document.getElementById(a.getAttribute('href').substring(1));
                if(target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // Intersection Observer for Scroll Spy
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    links.forEach(l => l.classList.remove('sec7-active'));
                    const active = links.find(l => l.getAttribute('href') === '#' + entry.target.id);
                    if(active) active.classList.add('sec7-active');
                }
            });
        }, { threshold: 0.2, rootMargin: '-30% 0px -60% 0px' });
        
        sections.forEach(s => observer.observe(s));
    }

    // Run
    if(document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initCharts();
            setupUI();
        });
    } else {
        initCharts();
        setupUI();
    }
})();
</script>
