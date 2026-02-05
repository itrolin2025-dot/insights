
<head>
    <meta charset="UTF-8">
    
    <!-- 
    PALETTE: Clinical & Urban Vibrant
    Primary: #0f172a (Slate 900 - Deep Urban)
    Secondary: #0d9488 (Teal 600 - Clinical/Safety)
    Accent: #f43f5e (Rose 500 - Skin/Barrier Repair)
    Background: #f8fafc (Slate 50 - Clean)
    -->
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            dark: '#0f172a',
                            primary: '#0d9488', 
                            accent: '#f43f5e',
                            light: '#f1f5f9'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #f8fafc;
            color: #1e293b;
        }
        
        /* Chart Container Styling - Mandatory Requirements */
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 650px; /* Constraint for readability */
            margin-left: auto;
            margin-right: auto;
            height: 350px; /* Base height */
            max-height: 400px;
        }
        
        @media (max-width: 640px) {
            .chart-container {
                height: 300px;
            }
        }

        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Custom Scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
    </style>
    
    <!-- 
    NARRATIVE PLAN:
    1. Hook: Define the "Urban Barrier-Repairer".
    2. Demographics: SES A focus (Ability to Pay).
    3. Psychographics: The pivot from experimentation to safety.
    4. The Problem: Pollution/Lifestyle driving "Barrier Anxiety".
    5. Solution Fit: Transparency vs. Hype (Radar Chart).
    6. Exclusion: Who we are NOT targeting.
    7. Synthesis: Final Audience Definition.
    
    Confirmations:
    - NO SVG used.
    - NO Mermaid JS used.
    - Chart.js used for visualisations.
    - Tailwind used for styling.
    -->
</head>
<body class="section-3-content antialiased">

    <!-- Header / Hero Section -->
    <header class="section-3-content bg-brand-dark text-white py-12 px-4 sm:px-6 lg:px-8 border-b-4 border-brand-accent">
        <div class="max-w-7xl mx-auto">
            <div class="md:flex md:items-center md:justify-between">
                <div>
                    <h2 class="text-brand-primary font-bold tracking-wide uppercase text-sm mb-2">Deep Research Section 3</h2>
                    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">The Urban Barrier-Repairer</h1>
                    <p class="mt-4 text-xl text-gray-300 max-w-3xl">
                        Defining the 25–40 year old Indonesian consumer shifting from "Trend Chasing" to "Strategic Rituals."
                    </p>
                </div>
                <div class="mt-6 md:mt-0 flex flex-col items-center justify-center bg-white/10 rounded-lg p-4 backdrop-blur-sm">
                    <span class="text-3xl font-bold text-brand-accent">SES A</span>
                    <span class="text-sm text-gray-300">Target Segment</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="section-3-content max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 space-y-16">

        <!-- SECTION 1: Demographics (The Ability to Pay) -->
        <section id="demographics" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <span class="bg-brand-primary text-white text-xs font-bold px-2 py-1 rounded">DEMOGRAPHICS</span>
                    <h2 class="text-2xl font-bold text-brand-dark">Who Can Sustain the Ritual?</h2>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The Q'WELL routine requires a monthly discretionary spend exceeding Rp 500k. This creates a hard economic filter. We are not targeting the mass market; we are targeting the <strong>financially stable urbanite</strong> (SES A/Upper Middle) who views skincare as a non-negotiable health investment, not a luxury splurge.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-lg shadow border-l-4 border-brand-primary">
                        <p class="text-sm text-gray-500">Target Age</p>
                        <p class="text-2xl font-bold text-brand-dark">25-40</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow border-l-4 border-brand-primary">
                        <p class="text-sm text-gray-500">Location</p>
                        <p class="text-xl font-bold text-brand-dark">JKT/SBY/BDG</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Indonesia Urban SES Composition</h3>
                <p class="text-sm text-gray-500 mb-4">The "Ability to Pay" Filter (Estimated Distribution)</p>
                
                <!-- CHART CONTAINER -->
                <div class="chart-container">
                    <canvas id="demographicsChart"></canvas>
                </div>
                <p class="text-xs text-center text-gray-400 mt-4 italic">Source: Synthesis of BPS & World Bank Income Tiers (Visualisation)</p>
            </div>
        </section>

        <!-- SECTION 2: Psychographics (The Pivot) -->
        <section id="psychographics" class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="p-8 lg:p-12">
                <div class="max-w-3xl mx-auto text-center mb-10">
                    <span class="bg-brand-accent text-white text-xs font-bold px-2 py-1 rounded">PSYCHOGRAPHICS</span>
                    <h2 class="text-3xl font-bold text-brand-dark mt-3">The "Post-Experimentation" Curve</h2>
                    <p class="text-gray-600 mt-4">
                        Between ages 25 and 30, a critical psychological shift occurs. The thrill of trying "viral" products fades, replaced by a fear of breakouts and a desire for consistency. We call this the <strong>Reliability Pivot</strong>.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Text Context -->
                    <div class="lg:col-span-1 space-y-6 flex flex-col justify-center">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-bold text-brand-dark mb-1">Phase 1: Discovery (18-24)</h4>
                            <p class="text-sm text-gray-600">Driven by FOMO, trends, and low price points. High churn rate.</p>
                        </div>
                        <div class="bg-teal-50 p-4 rounded-lg border-l-4 border-brand-primary">
                            <h4 class="font-bold text-brand-dark mb-1">Phase 2: The Pivot (25-30)</h4>
                            <p class="text-sm text-gray-600">First signs of aging/damage. "My skin can't take it anymore."</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-lg">
                            <h4 class="font-bold text-brand-dark mb-1">Phase 3: Ritual (30-40)</h4>
                            <p class="text-sm text-gray-600">Loyalty to what works. Willing to pay premium for safety.</p>
                        </div>
                    </div>

                    <!-- Chart -->
                    <div class="lg:col-span-2">
                         <!-- CHART CONTAINER -->
                        <div class="chart-container">
                            <canvas id="psychoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: The Urban Tax (The Problem) -->
        <section id="problem" class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Chart Side -->
            <div class="bg-white p-6 rounded-xl shadow-md order-2 md:order-1">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Sources of "Barrier Anxiety"</h3>
                <p class="text-sm text-gray-500 mb-6">Top reported skin stressors for Urban Indonesian Women</p>
                <!-- CHART CONTAINER -->
                <div class="chart-container">
                    <canvas id="anxietyChart"></canvas>
                </div>
            </div>

            <!-- Narrative Side -->
            <div class="flex flex-col justify-center order-1 md:order-2">
                <div class="mb-4">
                    <span class="bg-gray-200 text-gray-700 text-xs font-bold px-2 py-1 rounded">PAIN POINTS</span>
                </div>
                <h2 class="text-3xl font-bold text-brand-dark mb-4">High-Functioning Fatigue & The Urban Tax</h2>
                <p class="text-gray-600 mb-4 text-lg">
                    The target audience isn't just aging; they are <strong>oxidizing</strong>. Commutes in Jakarta traffic (pollution), 10 hours in office AC (dehydration), and high-cortisol careers create a specific profile of skin damage: The Compromised Barrier.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-brand-accent mr-2 text-xl">&#10003;</span>
                        <span class="text-gray-700"><strong>Dullness:</strong> Caused by pollution particles (PM2.5).</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-brand-accent mr-2 text-xl">&#10003;</span>
                        <span class="text-gray-700"><strong>Sensitization:</strong> Result of harsh "peeling" trends.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-brand-accent mr-2 text-xl">&#10003;</span>
                        <span class="text-gray-700"><strong>Adult Acne:</strong> Stress and hormonal triggers.</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- SECTION 4: Trust Signals (Radar Chart) -->
        <section class="bg-brand-dark text-white rounded-2xl shadow-2xl p-8 lg:p-12 relative overflow-hidden">
            <!-- Background element -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary opacity-10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Winning the "Intellectual Skincare" Buyer</h2>
                    <p class="text-gray-300 mb-6 text-lg">
                        This audience researches before they buy. They read ingredient labels, not just taglines. The "Trust Signal" has moved from celebrity faces to clinical transparency.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b border-gray-700 pb-2">
                            <span class="font-semibold text-brand-primary">Mass Market Driver</span>
                            <span class="text-gray-400">Low Price & Viral Trends</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-gray-700 pb-2">
                            <span class="font-semibold text-brand-accent">Q'WELL Driver</span>
                            <span class="text-white">Active % & Transparency</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 p-6 rounded-xl backdrop-blur-sm border border-white/10">
                    <h3 class="text-center font-semibold mb-4 text-brand-primary">Purchase Decision Drivers</h3>
                     <!-- CHART CONTAINER -->
                    <div class="chart-container">
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: Exclusion Logic (HTML Grid - No Chart Needed) -->
        <section id="exclusion">
            <div class="text-center mb-10">
                <span class="bg-red-100 text-red-800 text-xs font-bold px-2 py-1 rounded">STRATEGIC EXCLUSION</span>
                <h2 class="text-3xl font-bold text-brand-dark mt-3">Who Will NOT Buy Q'WELL?</h2>
                <p class="text-gray-600 mt-2">Protecting the brand positioning requires explicitly excluding these segments.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="card bg-white p-6 rounded-lg shadow-md border-t-4 border-gray-300">
                    <div class="text-4xl mb-4 text-center">🏷️</div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">The Bargain Hunter</h3>
                    <p class="text-sm text-gray-500 text-center mb-4">"Why is this 500k? I can get x for 50k."</p>
                    <hr class="my-3 border-gray-100">
                    <p class="text-sm text-gray-600"><strong>Why Exclude:</strong> Price elasticity is too high. They dilute the premium perception and require unsustainable discounting.</p>
                </div>

                <!-- Card 2 -->
                <div class="card bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-400">
                    <div class="text-4xl mb-4 text-center">⚡</div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">The Trend Chaser</h3>
                    <p class="text-sm text-gray-500 text-center mb-4">"I need 10 steps because TikTok said so."</p>
                    <hr class="my-3 border-gray-100">
                    <p class="text-sm text-gray-600"><strong>Why Exclude:</strong> High churn. They will leave Q'WELL the moment the next viral ingredient (e.g., Snail Mucin) appears.</p>
                </div>

                <!-- Card 3 -->
                <div class="card bg-white p-6 rounded-lg shadow-md border-t-4 border-green-600">
                    <div class="text-4xl mb-4 text-center">🌿</div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">The "Natural = Cheap" Purist</h3>
                    <p class="text-sm text-gray-500 text-center mb-4">"Chemicals are bad. I only use DIY."</p>
                    <hr class="my-3 border-gray-100">
                    <p class="text-sm text-gray-600"><strong>Why Exclude:</strong> They reject the "Clinical/Science" positioning that justifies Q'WELL's efficacy and price point.</p>
                </div>
            </div>
        </section>

        <!-- SECTION 6: Synthesis -->
        <section class="bg-brand-primary rounded-2xl p-10 text-center shadow-lg my-12">
            <h2 class="text-white opacity-80 font-bold tracking-widest text-sm mb-4">AUDIENCE SYNTHESIS</h2>
            <div class="max-w-4xl mx-auto">
                <p class="text-2xl md:text-4xl font-bold text-white leading-tight">
                    "The Financially Independent Urbanite (25–40) seeking <span class="text-brand-dark bg-white/20 px-2 rounded">control</span> over her stressed skin through a high-efficiency, medically-transparent barrier ritual."
                </p>
            </div>
        </section>

        <!-- Footer -->
        <section class="border-t border-gray-200 pt-8 pb-12 text-center">
            <p class="text-gray-400 text-sm">Generated for Deep Research Strategy Deck &bull; Market: Indonesia</p>
        </section>

    </main>

    <!-- CHART.JS LOGIC -->
    <script>
        // --- UTILITY: Label Wrapping Function (16 char limit) ---
        function formatLabel(str, maxwidth) {
            var sections = [];
            var words = str.split(" ");
            var temp = "";
            words.forEach(function(item, index) {
                if (temp.length > 0) {
                    var concat = temp + ' ' + item;
                    if (concat.length > maxwidth) {
                        sections.push(temp);
                        temp = "";
                    } else {
                        if (index == (words.length - 1)) {
                            sections.push(concat);
                            return;
                        } else {
                            temp = concat;
                            return;
                        }
                    }
                }
                if (index == (words.length - 1)) {
                    sections.push(item);
                    return;
                }
                if (item.length < maxwidth) {
                    temp = item;
                } else {
                    sections.push(item);
                }
            });
            return sections;
        }

        // --- COMMON CONFIG ---
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#64748b';
        Chart.defaults.responsive = true;
        Chart.defaults.maintainAspectRatio = false;

        // Tooltip Callback for Multi-line Labels
        const tooltipConfig = {
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

        // --- CHART 1: DEMOGRAPHICS (Doughnut) ---
        const ctxDemo = document.getElementById('demographicsChart').getContext('2d');
        new Chart(ctxDemo, {
            type: 'doughnut',
            data: {
                labels: [
                    formatLabel('SES A (Upper Middle / Affluent) - Target', 16),
                    formatLabel('SES B (Middle Class)', 16),
                    formatLabel('SES C/D (Aspiring / Lower)', 16)
                ],
                datasets: [{
                    data: [18, 32, 50], // Estimated split for Urban centers
                    backgroundColor: [
                        '#0d9488', // Brand Teal (Target)
                        '#94a3b8', // Grey
                        '#cbd5e1'  // Light Grey
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                cutout: '65%',
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: tooltipConfig,
                    title: {
                        display: true,
                        text: 'Target Addressable Market (%)'
                    }
                }
            }
        });

        // --- CHART 2: PSYCHOGRAPHICS (Line) ---
        const ctxPsycho = document.getElementById('psychoChart').getContext('2d');
        new Chart(ctxPsycho, {
            type: 'line',
            data: {
                labels: ['20yo', '25yo', '30yo', '35yo', '40yo'],
                datasets: [
                    {
                        label: 'Willingness to Experiment (Risk)',
                        data: [90, 75, 40, 20, 15],
                        borderColor: '#f43f5e', // Rose (Danger/Risk)
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#fff'
                    },
                    {
                        label: 'Need for Reliability/Safety',
                        data: [20, 45, 80, 90, 95],
                        borderColor: '#0d9488', // Teal (Safety)
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#fff'
                    }
                ]
            },
            options: {
                plugins: {
                    legend: { position: 'top' },
                    tooltip: tooltipConfig
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: { display: true, text: 'Psychological Driver Strength (0-100)' }
                    }
                }
            }
        });

        // --- CHART 3: URBAN ANXIETY (Horizontal Bar) ---
        const ctxAnxiety = document.getElementById('anxietyChart').getContext('2d');
        new Chart(ctxAnxiety, {
            type: 'bar',
            indexAxis: 'y',
            data: {
                labels: [
                    formatLabel('Pollution / City Dust (PM2.5)', 16),
                    formatLabel('Air Conditioning Dehydration', 16),
                    formatLabel('Stress-Induced Breakouts', 16),
                    formatLabel('Sun Damage / Hyperpigmentation', 16),
                    formatLabel('Over-exfoliation Damage', 16)
                ],
                datasets: [{
                    label: 'Reported Concern Level (Scale 1-10)',
                    data: [9.5, 8.8, 8.5, 7.2, 6.5],
                    backgroundColor: '#1e293b', // Dark Blue
                    borderRadius: 4
                }]
            },
            options: {
                plugins: {
                    legend: { display: false },
                    tooltip: tooltipConfig
                },
                scales: {
                    x: { max: 10 }
                }
            }
        });

        // --- CHART 4: TRUST SIGNALS (Radar) ---
        const ctxRadar = document.getElementById('radarChart').getContext('2d');
        new Chart(ctxRadar, {
            type: 'radar',
            data: {
                labels: [
                    formatLabel('Ingredient Transparency (%)', 15),
                    formatLabel('Clinical Proof / Data', 15),
                    formatLabel('Brand "Prestige" / Aesthetics', 15),
                    formatLabel('Celebrity / Influencer Hype', 15),
                    formatLabel('Discount / Low Price', 15)
                ],
                datasets: [{
                    label: "Q'WELL Target Persona",
                    data: [90, 85, 70, 30, 20],
                    fill: true,
                    backgroundColor: 'rgba(13, 148, 136, 0.2)', // Teal transparent
                    borderColor: '#0d9488',
                    pointBackgroundColor: '#0d9488',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#0d9488'
                }, {
                    label: 'Mass Market Consumer',
                    data: [30, 20, 50, 90, 85],
                    fill: true,
                    backgroundColor: 'rgba(244, 63, 94, 0.2)', // Rose transparent
                    borderColor: '#f43f5e',
                    pointBackgroundColor: '#f43f5e',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#f43f5e'
                }]
            },
            options: {
                plugins: {
                    tooltip: tooltipConfig,
                    legend: { 
                        labels: { color: 'white' }
                    }
                },
                scales: {
                    r: {
                        angleLines: { color: 'rgba(255, 255, 255, 0.1)' },
                        grid: { color: 'rgba(255, 255, 255, 0.1)' },
                        pointLabels: { 
                            color: 'white',
                            font: { size: 11 }
                        },
                        ticks: { display: false, backdropColor: 'transparent' }
                    }
                }
            }
        });

    </script>
</body>