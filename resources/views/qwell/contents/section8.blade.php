<style>
    .section-8-wrapper {
        --primary: #0B6E99;
        --secondary: #06B6D4;
        --accent: #F59E0B;
        --bg-soft: #F1F5F9;
        --text-dark: #1E293B;
        --text-muted: #64748B;
        --white: #FFFFFF;
        --border: #E2E8F0;
        
        font-family: 'Inter', -apple-system, sans-serif;
        background-color: var(--bg-soft);
        color: var(--text-dark);
        line-height: 1.6;
        width: 100%;
        position: relative;
        isolation: isolate;
        display: flex;
        flex-direction: column;
    }

    .section-8-wrapper * { box-sizing: border-box; margin: 0; padding: 0; }

    .section-8-wrapper .sec8-main {
        padding: 2.5rem 1.5rem;
        max-width: 1000px;
        margin: 0 auto;
        width: 100%;
    }

    .section-8-wrapper .sec8-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-8-wrapper .sec8-header h1 {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--primary);
        letter-spacing: -0.025em;
        margin-bottom: 0.75rem;
    }

    .section-8-wrapper .sec8-header p {
        font-size: 1.125rem;
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto;
    }

    .section-8-wrapper .sec8-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .section-8-wrapper .sec8-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .section-8-wrapper .sec8-card {
        background: var(--white);
        padding: 2rem;
        border-radius: 16px;
        border: 1px solid var(--border);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .section-8-wrapper .sec8-card h2 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-8-wrapper .sec8-card h2 svg {
        width: 24px;
        height: 24px;
        color: var(--secondary);
    }

    .section-8-wrapper .sec8-placeholder-content {
        padding: 2rem;
        border: 2px dashed var(--border);
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--text-muted);
        text-align: center;
        min-height: 200px;
    }

    .section-8-wrapper .sec8-icon-large {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.3;
    }

    .section-8-wrapper .sec8-tag {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        background: var(--bg-soft);
        color: var(--primary);
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 0.5rem;
    }

    .section-8-wrapper .sec8-cta-box {
        margin-top: 2rem;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
        padding: 2.5rem;
        border-radius: 20px;
        text-align: center;
    }

    .section-8-wrapper .sec8-cta-box h3 {
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .section-8-wrapper .sec8-cta-box p {
        opacity: 0.9;
        margin-bottom: 1.5rem;
    }

    .section-8-wrapper .sec8-btn {
        display: inline-block;
        padding: 0.75rem 1.75rem;
        background: var(--white);
        color: var(--primary);
        font-weight: 700;
        border-radius: 10px;
        text-decoration: none;
        transition: transform 0.2s;
    }

    .section-8-wrapper .sec8-btn:hover {
        transform: translateY(-2px);
    }
</style>

<div class="section-8-wrapper">
    <div class="sec8-main">
        <header class="sec8-header">
            <h1>Section 8: Product System, Pricing, and Profitability</h1>
            <p>Formulating the commercial engine—from product architecture to the unit economics required for sustainable premium positioning.</p>
        </header>

        <div class="sec8-grid">
            <div class="sec8-card">
                <span class="sec8-tag">Product Architecture</span>
                <h2>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    The Systemic Range
                </h2>
                <div class="sec8-placeholder-content">
                    <div class="sec8-icon-large">📦</div>
                    <p>Mapping the Hero, Core, and Secondary offerings across Hair and Body categories.</p>
                </div>
            </div>

            <div class="sec8-card">
                <span class="sec8-tag">Pricing Strategy</span>
                <h2>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Price Corridor Analysis
                </h2>
                <div class="sec8-placeholder-content">
                    <div class="sec8-icon-large">💰</div>
                    <p>Defining the "Reliability Premium" bands relative to masstige and mass benchmarks.</p>
                </div>
            </div>

            <div class="sec8-card">
                <span class="sec8-tag">Economic Viability</span>
                <h2>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    Profitability Matrix
                </h2>
                <div class="sec8-placeholder-content">
                    <div class="sec8-icon-large">📈</div>
                    <p>Projected gross margins, COGS breakdown, and distribution cost assumptions.</p>
                </div>
            </div>

            <div class="sec8-card">
                <span class="sec8-tag">Launch Roadmap</span>
                <h2>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Phase-Gate Timeline
                </h2>
                <div class="sec8-placeholder-content">
                    <div class="sec8-icon-large">🚀</div>
                    <p>Key milestones for sourcing, formulation audit, and market entry.</p>
                </div>
            </div>
        </div>

        <div class="sec8-cta-box">
            <h3>Ready to Finalize the Brief?</h3>
            <p>The product system and economics are the final validation gates for the Q'WELL Indonesian strategy.</p>
            <a href="#" class="sec8-btn">Download Full Financial Model</a>
        </div>
    </div>
</div>

<script>
    (function(){
        // Section 8 Initialization Logic (if any)
        console.log('Section 8 Loaded');
    })();
</script>
