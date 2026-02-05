<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Config & Styles -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            dark: '#1e1b4b',   /* Indigo 950 */
                            primary: '#4f46e5', /* Indigo 600 */
                            secondary: '#db2777', /* Pink 600 */
                            accent: '#059669',   /* Emerald 600 */
                            light: '#f3f4f6',    /* Gray 100 */
                            surface: '#ffffff'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Chart Container Logic: Responsive, Centered, Constrained */
        .chart-container {
            position: relative;
            margin: auto;
            width: 100%;
            max-width: 650px; /* Constrain width on large screens */
            height: 350px;    /* Default mobile height */
        }
        
        @media (min-width: 768px) {
            .chart-container {
                height: 400px; /* Taller on desktop */
            }
        }

        /* Hide scrollbar for clean look */
        body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        body::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        body::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Utility for timeline line */
        .timeline-line::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background: #e5e7eb;
            transform: translateX(-50%);
            z-index: 0;
        }
    </style>
    
    <!-- 
    SOURCE MATERIAL ANALYSIS & PLAN:
    
    1. Narrative: The document argues that 2026 is a tipping point for the Indonesian Personal Care market. 
       We move from "Mass Volume" to "Premium Precision" driven by Skintellectuals and Regulation (Halal).
    
    2. Visualization Choices (NO SVG):
       - Market Growth: Grouped Bar Chart (Compare Mass vs Premium CAGR).
       - Category Importance: Donut Chart (Share of Routine).
       - Consumer Concerns: Horizontal Bar (Ranking ingredients).
       - Resilience: Line Chart (Premium vs General FMCG trends).
       - 2026 Timeline: CSS/HTML Vertical Layout.
       - Strategy Synthesis: CSS Cards.
    
    3. Palette: Vibrant Future (Indigo/Pink/Emerald).
    -->
</head>
<body class="section-2-content bg-brand-light text-slate-800 antialiased selection:bg-brand-secondary selection:text-white">

    <!-- HERO SECTION -->
    <header class="section-2-content bg-gradient-to-r from-brand-dark to-brand-primary text-white pt-20 pb-24 px-6 shadow-xl relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-5xl mx-auto relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4 leading-tight">
                Indonesia 2026: <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-emerald-300">The Premium Inflection</span>
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 max-w-2xl mx-auto font-light">
                Why structural market shifts, "Skintellectual" consumers, and regulatory convergence make 2026 the critical year for premium personal care brands like Q'WELL.
            </p>
        </div>
    </header>

    <!-- CONTENT WRAPPER -->
    <main class="section-2-content max-w-6xl mx-auto -mt-16 px-4 pb-20 space-y-16 relative z-20">

        <!-- SECTION 1: MARKET DYNAMICS -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Intro Card -->
            <div class="bg-brand-surface rounded-2xl shadow-lg p-8 md:col-span-2 border-l-8 border-brand-primary">
                <h2 class="text-2xl font-bold text-brand-dark mb-3">1. The Premium Opportunity</h2>
                <p class="text-slate-600 leading-relaxed">
                    While the overall Indonesian FMCG market shows steady maturation, the <strong>Premium Personal Care</strong> segment is decoupling from the mass market. Projections indicate that by 2030, premium segments will outpace mass categories significantly, driven by a rising middle class trading up for efficacy and safety rather than just status.
                </p>
            </div>

            <!-- Visualization: Market Growth -->
            <div class="bg-brand-surface rounded-2xl shadow-md p-6 flex flex-col items-center">
                <h3 class="text-lg font-semibold text-slate-700 mb-2 w-full text-left">Projected CAGR (2024-2030)</h3>
                <div class="chart-container">
                    <canvas id="marketGrowthChart"></canvas>
                </div>
                <p class="text-xs text-slate-400 mt-4 text-center w-full">Source: Euromonitor / Internal Analysis</p>
            </div>

            <!-- Visualization: Category Split -->
            <div class="bg-brand-surface rounded-2xl shadow-md p-6 flex flex-col items-center">
                <h3 class="text-lg font-semibold text-slate-700 mb-2 w-full text-left">Share of "Trust-Dependent" Routine</h3>
                <div class="chart-container">
                    <canvas id="categorySplitChart"></canvas>
                </div>
                <p class="text-sm text-slate-500 mt-4 text-center">
                    <span class="font-bold text-brand-primary">Insight:</span> Hair & Body care account for 60% of high-frequency application moments, building trust faster than facial care.
                </p>
            </div>
        </section>

        <!-- SECTION 2: THE CONSUMER SHIFT -->
        <section class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="bg-brand-dark p-8 text-white">
                <h2 class="text-3xl font-bold mb-2">2. Rise of the "Skintellectual"</h2>
                <p class="text-indigo-200">
                    Indonesian consumers are moving beyond basic hygiene. 2026 marks the maturity of "Ingredient Literacy," where purchase decisions are driven by label transparency and safety over celebrity endorsements.
                </p>
            </div>
            
            <div class="p-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-brand-secondary flex items-center justify-center text-white font-bold text-lg">A</div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-brand-dark">Chemophobia & Safety</h4>
                            <p class="text-slate-600 text-sm">Fear of harsh chemicals (SLS, Parabens) is the #1 trigger for brand switching in the premium segment.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-brand-primary flex items-center justify-center text-white font-bold text-lg">B</div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-brand-dark">Halal as Quality Assurance</h4>
                            <p class="text-slate-600 text-sm">Halal is no longer just religious compliance; it is viewed as a proxy for hygiene, safety, and manufacturing excellence.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-brand-accent flex items-center justify-center text-white font-bold text-lg">C</div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-brand-dark">Efficacy over Status</h4>
                            <p class="text-slate-600 text-sm">The modern premium consumer asks "Does it work?" before "Is it famous?". Clinical backing is key.</p>
                        </div>
                    </div>
                </div>

                <!-- Visualization: Ingredient Concerns -->
                <div class="w-full">
                    <h3 class="text-lg font-semibold text-slate-700 mb-4">Top Purchase Drivers (Premium Segment)</h3>
                    <div class="chart-container" style="height: 300px;">
                        <canvas id="consumerConcernsChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: ECONOMIC RESILIENCE -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-3 mb-4">
                 <h2 class="text-3xl font-bold text-brand-dark border-b-4 border-brand-secondary inline-block pb-2">3. The Resilience of Beauty</h2>
                 <p class="text-slate-600 mt-4 max-w-3xl">
                     Analysis of consumer expenditure during economic downturns proves that <strong>Personal Care is inelastic</strong>. While travel and dining spend contracts, consumers view "self-care" and "health maintenance" as non-negotiable protections, reinforcing the "Lipstick Effect."
                 </p>
            </div>

            <!-- Visualization: Resilience Chart -->
            <div class="md:col-span-2 bg-brand-surface rounded-2xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-slate-700 mb-2">Spending Stability During Economic Pressure</h3>
                <div class="chart-container">
                    <canvas id="resilienceChart"></canvas>
                </div>
            </div>

            <!-- Key Stat Card -->
            <div class="flex flex-col gap-6">
                <div class="bg-gradient-to-br from-brand-primary to-indigo-800 rounded-2xl p-6 text-white shadow-lg flex-1 flex flex-col justify-center">
                    <span class="text-sm font-medium opacity-80 uppercase tracking-wider">Premium Retention</span>
                    <span class="text-5xl font-extrabold my-2">85%</span>
                    <p class="text-sm opacity-90">of premium users <strong>do not downgrade</strong> to mass brands even during inflation, opting to buy smaller formats instead.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex-1 flex flex-col justify-center">
                    <span class="text-4xl font-bold text-brand-secondary mb-2">3.2x</span>
                    <p class="text-slate-600 text-sm">Higher lifetime value (LTV) for customers acquired through "Trust" categories (Body/Hair) vs. "Trend" categories (Makeup).</p>
                </div>
            </div>
        </section>

        <!-- SECTION 4: 2026 TIMELINE -->
        <section class="relative">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-brand-dark">4. The 2026 Convergence</h2>
                <p class="text-slate-500 mt-2">Why timing matters: Regulatory milestones meet behavioral maturity.</p>
            </div>

            <div class="relative max-w-4xl mx-auto timeline-line">
                
                <!-- 2024 Event -->
                <div class="relative z-10 mb-12 flex flex-col md:flex-row items-center w-full">
                    <div class="order-1 bg-white border-r-4 border-brand-accent shadow-lg rounded-xl p-6 w-full md:w-5/12 ml-auto md:ml-0 md:text-right">
                        <span class="font-black text-4xl text-brand-accent opacity-20 absolute top-2 right-4 md:left-4 md:right-auto">2024</span>
                        <h4 class="font-bold text-lg text-brand-dark mt-2">The "Clean" Awakening</h4>
                        <p class="text-sm text-slate-600 mt-2">Consumer search volume for "Non-Toxic" and "Natural Ingredients" hits all-time high. Early adopters reject legacy mass brands.</p>
                    </div>
                    <div class="z-20 flex items-center order-1 bg-brand-accent shadow-xl w-10 h-10 rounded-full border-4 border-white md:absolute left-0 md:left-1/2 transform md:-translate-x-1/2 mt-4 md:mt-0"></div>
                    <div class="order-1 w-full md:w-5/12"></div>
                </div>

                <!-- 2025 Event -->
                <div class="relative z-10 mb-12 flex flex-col md:flex-row items-center w-full">
                    <div class="order-1 w-full md:w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-brand-primary shadow-xl w-10 h-10 rounded-full border-4 border-white md:absolute left-0 md:left-1/2 transform md:-translate-x-1/2 mt-4 md:mt-0"></div>
                    <div class="order-1 bg-white border-l-4 border-brand-primary shadow-lg rounded-xl p-6 w-full md:w-5/12 mr-auto md:mr-0">
                        <span class="font-black text-4xl text-brand-primary opacity-20 absolute top-2 right-4">2025</span>
                        <h4 class="font-bold text-lg text-brand-dark mt-2">Regulatory Tightening</h4>
                        <p class="text-sm text-slate-600 mt-2">Pre-compliance phase for stricter Halal mandates. Uncertified import brands begin to exit or lose retail shelf space, clearing the market.</p>
                    </div>
                </div>

                <!-- 2026 Event (Hero) -->
                <div class="relative z-10 flex flex-col md:flex-row items-center w-full">
                    <div class="order-1 bg-brand-dark text-white shadow-2xl rounded-xl p-8 w-full md:w-5/12 ml-auto md:ml-0 md:text-right ring-4 ring-brand-secondary/30">
                        <span class="font-black text-5xl text-white opacity-10 absolute top-2 right-4 md:left-4 md:right-auto">2026</span>
                        <h4 class="font-bold text-xl text-brand-secondary mt-2">The Structural Inflection</h4>
                        <p class="text-sm text-indigo-100 mt-2">Full Halal mandate enforcement + Peak Ingredient Literacy. Trust becomes the primary currency. Brands without clear safety/halal lineage face "Trust Cliffs".</p>
                    </div>
                    <div class="z-20 flex items-center order-1 bg-brand-secondary shadow-xl w-14 h-14 rounded-full border-4 border-white md:absolute left-0 md:left-1/2 transform md:-translate-x-1/2 mt-4 md:mt-0"></div>
                    <div class="order-1 w-full md:w-5/12"></div>
                </div>

            </div>
        </section>

        <!-- SECTION 5: STRATEGIC SYNTHESIS -->
        <section class="bg-white rounded-2xl p-8 shadow-lg border-t-8 border-brand-dark">
            <h2 class="text-2xl font-bold text-brand-dark mb-6 text-center">Synthesis: Precision over Scale</h2>
            <p class="text-center text-slate-600 mb-10 max-w-2xl mx-auto">
                Q'WELL cannot and should not compete on mass volume. The 2026 landscape favors a precision approach.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mass Model (Old) -->
                <div class="border-2 border-slate-100 rounded-xl p-6 bg-slate-50 opacity-70">
                    <h3 class="text-lg font-bold text-slate-500 mb-4 flex items-center">
                        <span class="text-2xl mr-2">📉</span> The Mass Model
                    </h3>
                    <ul class="space-y-3 text-sm text-slate-500">
                        <li class="flex items-center"><span class="w-2 h-2 bg-slate-400 rounded-full mr-2"></span>Volume-driven low margins</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-slate-400 rounded-full mr-2"></span>Generic "All-in-One" claims</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-slate-400 rounded-full mr-2"></span>Heavy reliance on TVC advertising</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-slate-400 rounded-full mr-2"></span>Vulnerable to ingredient scrutiny</li>
                    </ul>
                </div>

                <!-- Q'WELL Model (New) -->
                <div class="border-2 border-brand-primary/20 rounded-xl p-6 bg-indigo-50/50 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-brand-secondary text-white text-xs font-bold px-3 py-1 rounded-bl-lg">WINNING STRATEGY</div>
                    <h3 class="text-lg font-bold text-brand-primary mb-4 flex items-center">
                        <span class="text-2xl mr-2">🎯</span> The Q'WELL Precision Model
                    </h3>
                    <ul class="space-y-3 text-sm text-slate-700 font-medium">
                        <li class="flex items-center"><span class="w-2 h-2 bg-brand-secondary rounded-full mr-2"></span>High-Frequency Trust Categories (Hair/Body)</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-brand-secondary rounded-full mr-2"></span>Clinical & Halal Transparency</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-brand-secondary rounded-full mr-2"></span>Targeting "Skintellectual" Early Adopters</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-brand-secondary rounded-full mr-2"></span>Resilient Pricing Power</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <section class="section-2-content bg-brand-dark text-slate-400 py-12 text-center text-sm">
            <p class="mb-2">Generated for Deep Research Strategy</p>
            <p>&copy; 2026 Strategic Foresight Group. All rights reserved.</p>
        </section>


    </main>

    <!-- CHART.JS LOGIC -->
    <script>
        // --- UTILITY: Label Splitting (16 chars) ---
        function splitLabel(label) {
            if (typeof label !== 'string') return label;
            const words = label.split(' ');
            const lines = [];
            let currentLine = words[0];

            for (let i = 1; i < words.length; i++) {
                if (currentLine.length + 1 + words[i].length <= 16) {
                    currentLine += ' ' + words[i];
                } else {
                    lines.push(currentLine);
                    currentLine = words[i];
                }
            }
            lines.push(currentLine);
            return lines.length > 1 ? lines : lines[0]; // Return string if 1 line, array if multiple
        }

        // --- UTILITY: Common Tooltip Config ---
        const commonTooltipConfig2 = {
            callbacks: {
                title: function(tooltipItems) {
                    const item = tooltipItems[0];
                    let label = item.chart.data.labels[item.dataIndex];
                    if (Array.isArray(label)) {
                        return label.join(' ');
                    } else {
                        return label;
                    }
                }
            }
        };

        // --- CHART 1: Market Growth (Grouped Bar) ---
        const ctxGrowth = document.getElementById('marketGrowthChart').getContext('2d');
        const rawLabelsGrowth = ['2024', '2025', '2026', '2027', '2028', '2029', '2030'];
        new Chart(ctxGrowth, {
            type: 'bar',
            data: {
                labels: rawLabelsGrowth,
                datasets: [
                    {
                        label: 'Mass Market Growth (%)',
                        data: [4.2, 4.1, 4.0, 3.8, 3.5, 3.2, 3.0],
                        backgroundColor: '#cbd5e1', // Slate 300
                        borderRadius: 4
                    },
                    {
                        label: 'Premium Market Growth (%)',
                        data: [6.5, 7.2, 8.5, 9.1, 9.8, 10.2, 10.5],
                        backgroundColor: '#4f46e5', // Brand Primary
                        borderRadius: 4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    tooltip: commonTooltipConfig2,
                    legend: { position: 'bottom' },
                    annotation: {
                        annotations: {
                            line1: {
                                type: 'line',
                                xMin: 2,
                                xMax: 2,
                                borderColor: '#db2777',
                                borderWidth: 2,
                                borderDash: [6, 6],
                                label: {
                                    content: '2026 Inflection',
                                    enabled: true,
                                    position: 'top'
                                }
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: { display: true, text: 'YoY Growth Rate' }
                    }
                }
            }
        });

        // --- CHART 2: Category Split (Donut) ---
        const ctxSplit = document.getElementById('categorySplitChart').getContext('2d');
        const rawLabelsSplit = ['Hair & Body Care', 'Facial Skincare', 'Color Cosmetics', 'Fragrance & Others'];
        new Chart(ctxSplit, {
            type: 'doughnut',
            data: {
                labels: rawLabelsSplit.map(splitLabel),
                datasets: [{
                    data: [55, 25, 12, 8],
                    backgroundColor: [
                        '#4f46e5', // Primary (Focus)
                        '#db2777', // Secondary
                        '#059669', // Accent
                        '#e2e8f0'  // Gray
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    tooltip: commonTooltipConfig2,
                    legend: { position: 'bottom', labels: { boxWidth: 12 } }
                }
            }
        });

        // --- CHART 3: Consumer Concerns (Horizontal Bar) ---
        const ctxConcerns = document.getElementById('consumerConcernsChart').getContext('2d');
        const rawLabelsConcerns = ['Ingredient Safety', 'Halal Certification', 'Proven Efficacy', 'Brand Prestige', 'Price Promotion', 'Packaging'];
        new Chart(ctxConcerns, {
            type: 'bar',
            indexAxis: 'y', // Horizontal
            data: {
                labels: rawLabelsConcerns.map(splitLabel),
                datasets: [{
                    label: 'Importance Score (1-10)',
                    data: [9.2, 8.8, 8.5, 6.2, 5.8, 4.5],
                    backgroundColor: [
                        '#db2777', // Top priority
                        '#db2777',
                        '#4f46e5',
                        '#cbd5e1',
                        '#cbd5e1',
                        '#cbd5e1'
                    ],
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    tooltip: commonTooltipConfig2,
                    legend: { display: false }
                },
                scales: {
                    x: { beginAtZero: true, max: 10 }
                }
            }
        });

        // --- CHART 4: Resilience (Line) ---
        const ctxResilience = document.getElementById('resilienceChart').getContext('2d');
        const rawLabelsResilience = ['Pre-Crisis', 'Month 1', 'Month 3', 'Month 6', 'Recovery'];
        new Chart(ctxResilience, {
            type: 'line',
            data: {
                labels: rawLabelsResilience,
                datasets: [
                    {
                        label: 'Premium Personal Care Spend',
                        data: [100, 98, 97, 99, 105],
                        borderColor: '#059669', // Emerald (Resilient)
                        backgroundColor: 'rgba(5, 150, 105, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3
                    },
                    {
                        label: 'Dining & Leisure Spend',
                        data: [100, 60, 55, 65, 80],
                        borderColor: '#ef4444', // Red (Volatile)
                        borderDash: [5, 5],
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    tooltip: commonTooltipConfig2,
                    legend: { position: 'top' }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 40,
                        title: { display: true, text: 'Index (Base = 100)' }
                    }
                }
            }
        });
    </script>
</body>
</html>