<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sensitive Shift: Indonesian Beauty Landscape</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Plotly.js -->
    <script src="https://cdn.plot.ly/plotly-2.24.1.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- Palette Selection: Energetic & Playful (Vibrant) -->
    <!-- 
        Palette:
        Dark/Text: #1E293B (Slate 800)
        Primary (Purple): #8B5CF6
        Secondary (Pink): #EC4899
        Accent (Cyan): #06B6D4
        Background: #F8FAFC
    -->

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC;
            color: #1E293B;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #8B5CF6;
            border-radius: 4px;
        }

        /* Chart Container Strategy */
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 100%; /* Constraints managed by grid */
            height: 400px;
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .chart-container {
                height: 300px;
            }
        }

        /* Utility for Diagram Boxes */
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .gradient-text {
            background: linear-gradient(135deg, #8B5CF6 0%, #EC4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <!-- 
    Analysis Plan & Justification:
    1. Introduction: Contextualize the market.
    2. Data Overview (Donut): Goal: Inform. Show current split of brand types.
    3. Positioning Map (Scatter): Goal: Relationships. Compare "Nature vs Science" and "Price Point".
    4. Communication Gap (Radar): Goal: Compare. "What Brands Say" vs "What Users Feel".
    5. The Unowned Space (HTML Diagram): Goal: Organize. Visualizing the "Blue Ocean" opportunity without SVG.
    6. Claims Analysis (Stacked Bar): Goal: Compare. Breakdown of how sensitive skin is addressed.
    
    NO SVG USED. NO MERMAID USED.
    -->
</head>
<body class="section-4-content antialiased">

    <!-- Header / Hook -->
    <header class="section-4-content bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900">
                <span class="gradient-text">Market Lens:</span> Indonesia
            </h1>
            <div class="text-sm font-semibold text-slate-500 hidden md:block">
                Focus: Hair & Body Care Positioning
            </div>
        </div>
    </header>

    <main class="section-4-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">

        <!-- Section 1: Introduction -->
        <section class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-4xl md:text-5xl font-black mb-6 text-slate-900 leading-tight">
                The Sensitive Shift: <br>
                <span class="text-indigo-600">Redefining Care</span>
            </h2>
            <p class="text-lg text-slate-600 leading-relaxed">
                The Indonesian personal care market is polarizing. On one side, <strong>clinical brands</strong> offer safety but intimidation. On the other, <strong>lifestyle brands</strong> offer scent and aspiration but lack credibility for chronic skin issues. With pollution rising and "sensitive skin" diagnoses peaking in urban Jakarta and Surabaya, a significant gap exists for a brand that offers <strong>clinical efficacy with emotional comfort</strong>.
            </p>
        </section>

        <!-- Section 2: Market Snapshot (Donut) -->
        <section class="bg-white rounded-2xl shadow-lg p-6 md:p-8 border-l-4 border-cyan-400">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="md:col-span-1 space-y-4">
                    <h3 class="text-2xl font-bold text-slate-800">Market Dominance by Category</h3>
                    <p class="text-slate-600">
                        The market is saturated with "Mass Market" heritage brands and a surging "Pure Natural" segment. However, the "Dermo-Cosmetic" sector remains niche, often perceived as medicinal rather than daily care.
                    </p>
                    <div class="bg-indigo-50 p-4 rounded-lg">
                        <div class="text-indigo-800 font-bold text-lg">Key Insight</div>
                        <p class="text-sm text-indigo-700 mt-1">
                            "Mass Premium" is the fastest-growing segment, yet few players successfully integrate clinical claims here.
                        </p>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="chart-container">
                        <canvas id="marketShareChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: The Positioning Landscape (Scatter) -->
        <section class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-slate-800">The Competitive Matrix</h3>
                <p class="text-slate-600 mt-2">
                    Mapping existing players based on their primary positioning axis (Nature vs. Science) and their accessibility (Mass vs. Aspirational). Note the congestion in the "Mass/Natural" and "Aspirational/Lifestyle" quadrants.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Legend/Context Panel -->
                <div class="lg:col-span-1 space-y-4 order-2 lg:order-1">
                    <div class="bg-slate-50 p-4 rounded-lg border border-slate-200">
                        <h4 class="font-bold text-slate-700 mb-2">Quadrant Guide</h4>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-start">
                                <span class="h-3 w-3 rounded-full bg-pink-500 mt-1 mr-2 shrink-0"></span>
                                <span><strong>Lifestyle/Aspirational:</strong> High scent, aesthetic packaging, low clinical proof.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="h-3 w-3 rounded-full bg-green-500 mt-1 mr-2 shrink-0"></span>
                                <span><strong>Natural/Organic:</strong> "Free-from" claims, traditional ingredients, often lacks potency.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="h-3 w-3 rounded-full bg-blue-500 mt-1 mr-2 shrink-0"></span>
                                <span><strong>Clinical/Derm:</strong> High efficacy, sterile branding, functional "problem/solution" approach.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Chart Area -->
                <div class="lg:col-span-3 order-1 lg:order-2">
                    <div class="chart-container h-[500px]">
                        <canvas id="positioningMap"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: The Emotional Gap (Radar) -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
                <h3 class="text-2xl font-bold text-slate-800 mb-4">The "Care" Disconnect</h3>
                <p class="text-slate-600 mb-6">
                    We compared what sensitive-skin consumers in Indonesia <em>desire</em> versus what current top brands <em>deliver</em>. There is a massive deficit in "Emotional Safety" and "Sensory Pleasure" within the effective skin health category.
                </p>
                <div class="chart-container">
                    <canvas id="gapRadarChart"></canvas>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 flex flex-col justify-center">
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Addressing the "Crisis"</h3>
                <p class="text-slate-600 mb-6">
                    How do brands communicate about sensitive skin? Most rely on "Fear" (avoiding triggers) or "Short-term Rescue." Very few focus on long-term resilience or positive reinforcement.
                </p>
                <div class="chart-container">
                    <canvas id="claimsBarChart"></canvas>
                </div>
            </div>
        </section>

        <!-- Section 5: The Unowned Territory (HTML Diagram) -->
        <!-- Justification: Complex relationship map, best handled with grid layout to avoid SVG -->
        <section class="bg-gradient-to-br from-slate-900 to-indigo-900 rounded-3xl shadow-xl p-8 text-white overflow-hidden relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute -bottom-8 -left-8 w-64 h-64 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

            <div class="relative z-10 text-center mb-10">
                <h2 class="text-3xl font-bold mb-2">The White Space Opportunity</h2>
                <p class="text-indigo-200 max-w-2xl mx-auto">Identifying the unoccupied strategic positioning that combines the best of clinical efficacy with lifestyle aspiration.</p>
            </div>

            <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <!-- Column 1: Existing State A -->
                <div class="bg-slate-800/50 border border-slate-600 rounded-xl p-6 flex flex-col items-center text-center opacity-70 hover:opacity-100 transition duration-300">
                    <div class="text-4xl mb-4">🩺</div>
                    <h4 class="text-xl font-bold text-blue-300 mb-2">The "Clinic"</h4>
                    <p class="text-sm text-slate-300">Sterile, cold, focuses on "fixing" problems. Users feel like patients.</p>
                    <div class="mt-4 px-3 py-1 bg-blue-900/50 rounded-full text-xs text-blue-200">High Trust / Low Joy</div>
                </div>

                <!-- Column 2: The Opportunity (Center) -->
                <div class="bg-white/10 backdrop-blur-md border-2 border-pink-400 rounded-xl p-8 flex flex-col items-center text-center transform scale-105 shadow-2xl shadow-pink-500/20">
                    <div class="text-5xl mb-4">✨🧬</div>
                    <h4 class="text-2xl font-extrabold text-white mb-2">"Medi-Comfort"</h4>
                    <p class="text-base text-pink-100 font-medium">The Strategic Sweet Spot</p>
                    <hr class="w-12 border-pink-400 my-4">
                    <ul class="text-sm text-left text-slate-100 space-y-2">
                        <li>✅ Clinical Proof (Derm-backed)</li>
                        <li>✅ Sensory Luxury (Scent/Texture)</li>
                        <li>✅ Emotional Reassurance</li>
                        <li>✅ Prevention over "Cure"</li>
                    </ul>
                </div>

                <!-- Column 3: Existing State B -->
                <div class="bg-slate-800/50 border border-slate-600 rounded-xl p-6 flex flex-col items-center text-center opacity-70 hover:opacity-100 transition duration-300">
                    <div class="text-4xl mb-4">🌿</div>
                    <h4 class="text-xl font-bold text-green-300 mb-2">The "Spa"</h4>
                    <p class="text-sm text-slate-300">Focuses on nature and relaxation. Lacks potency for chronic issues.</p>
                    <div class="mt-4 px-3 py-1 bg-green-900/50 rounded-full text-xs text-green-200">High Joy / Low Trust</div>
                </div>
            </div>
            
            <div class="mt-10 text-center relative z-10">
                <div class="inline-block bg-indigo-600 px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    Conclusion: Move from "Treating Symptoms" to "Elevating Resilience"
                </div>
            </div>
        </section>

        <section class="bg-slate-900 text-slate-400 py-8 text-center border-t border-slate-800">
            <p class="text-sm">Generated for Strategic Analysis. Data is illustrative based on market trends.</p>
            <p class="text-xs mt-2 opacity-50">Single Page Infographic Application</p>
        </section>


    </main>
   
    <!-- Script Block for Charts and Logic -->
    <script>
        // --- 1. Label Processing Utility (Text Wrapping) ---
        // Splits long strings into arrays of strings for Chart.js
        function formatLabel(str, maxLen = 16) {
            if (str.length <= maxLen) return str;
            const words = str.split(' ');
            const lines = [];
            let currentLine = words[0];

            for (let i = 1; i < words.length; i++) {
                if (currentLine.length + 1 + words[i].length <= maxLen) {
                    currentLine += ' ' + words[i];
                } else {
                    lines.push(currentLine);
                    currentLine = words[i];
                }
            }
            lines.push(currentLine);
            return lines;
        }

        // --- 2. Chart.js Defaults ---
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#64748B';
        
        // --- 3. Tooltip Config (Mandatory from prompt) ---
        const commonTooltipOptions = {
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

        // --- 4. Chart Implementation ---

        // CHART 1: Market Share (Donut)
        const ctxDonut = document.getElementById('marketShareChart').getContext('2d');
        const marketLabels = ['Mass Market (Low Price)', 'Heritage Naturals', 'Dermo-Cosmetic (Clinical)', 'Premium Lifestyle'];
        const formattedMarketLabels = marketLabels.map(l => formatLabel(l));
        
        new Chart(ctxDonut, {
            type: 'doughnut',
            data: {
                labels: formattedMarketLabels,
                datasets: [{
                    data: [45, 25, 15, 15],
                    backgroundColor: ['#CBD5E1', '#2DD4BF', '#4F46E5', '#EC4899'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: commonTooltipOptions
                },
                cutout: '70%'
            }
        });

        // CHART 2: Positioning Map (Scatter)
        // X: Nature (-10) to Science (10)
        // Y: Mass (-10) to Premium (10)
        const ctxScatter = document.getElementById('positioningMap').getContext('2d');
        new Chart(ctxScatter, {
            type: 'scatter',
            data: {
                datasets: [
                    {
                        label: 'Clinical Leaders',
                        data: [
                            {x: 8, y: 4, name: "Intl Derm Brand A"},
                            {x: 9, y: 7, name: "Intl Derm Brand B"},
                            {x: 7, y: -2, name: "Local Clinical"}
                        ],
                        backgroundColor: '#4F46E5', // Indigo
                        pointRadius: 8
                    },
                    {
                        label: 'Natural Heritage',
                        data: [
                            {x: -8, y: -6, name: "Local Trad Brand"},
                            {x: -6, y: -4, name: "Herbal Brand X"},
                            {x: -9, y: 2, name: "Organic Import"}
                        ],
                        backgroundColor: '#2DD4BF', // Teal
                        pointRadius: 8
                    },
                    {
                        label: 'Lifestyle/Scent',
                        data: [
                            {x: -2, y: 6, name: "Body Mist Brand"},
                            {x: 1, y: 8, name: "Luxury Perfumed"},
                            {x: -3, y: 5, name: "Viral Social Brand"}
                        ],
                        backgroundColor: '#EC4899', // Pink
                        pointRadius: 8
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        min: -10,
                        max: 10,
                        title: { display: true, text: 'Nature <----> Science/Clinical', color: '#1E293B', font: {weight: 'bold'} },
                        grid: { color: '#E2E8F0' }
                    },
                    y: {
                        min: -10,
                        max: 10,
                        title: { display: true, text: 'Mass Market <----> Premium', color: '#1E293B', font: {weight: 'bold'} },
                        grid: { color: '#E2E8F0' }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw.name;
                            }
                        }
                    },
                    annotation: {
                        // Conceptual annotations would go here if plugin was loaded, 
                        // sticking to core Chart.js for stability.
                    }
                }
            }
        });

        // CHART 3: Needs vs Reality (Radar)
        const ctxRadar = document.getElementById('gapRadarChart').getContext('2d');
        const radarLabels = ['Clinical Efficacy', 'Safety for Sensitive Skin', 'Luxury Scent', 'Emotional Reassurance', 'Premium Packaging', 'Value for Money'];
        const formattedRadarLabels = radarLabels.map(l => formatLabel(l));

        new Chart(ctxRadar, {
            type: 'radar',
            data: {
                labels: formattedRadarLabels,
                datasets: [{
                    label: 'Consumer Desire',
                    data: [90, 95, 80, 85, 70, 75],
                    fill: true,
                    backgroundColor: 'rgba(236, 72, 153, 0.2)', // Pink transparent
                    borderColor: '#EC4899',
                    pointBackgroundColor: '#EC4899'
                }, {
                    label: 'Market Avg Offering',
                    data: [70, 80, 50, 30, 60, 85],
                    fill: true,
                    backgroundColor: 'rgba(79, 70, 229, 0.2)', // Indigo transparent
                    borderColor: '#4F46E5',
                    pointBackgroundColor: '#4F46E5'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        angleLines: { color: '#E2E8F0' },
                        grid: { color: '#E2E8F0' },
                        pointLabels: { font: { size: 11 } },
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                },
                plugins: {
                    tooltip: commonTooltipOptions
                }
            }
        });

        // CHART 4: Claims Analysis (Stacked Bar)
        const ctxBar = document.getElementById('claimsBarChart').getContext('2d');
        const barLabels = ['Intl Clinical Brands', 'Local Natural Brands', 'Mass Market Brands'];
        const formattedBarLabels = barLabels.map(l => formatLabel(l));

        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: formattedBarLabels,
                datasets: [
                    {
                        label: 'Fear-Based (Avoidance)',
                        data: [60, 20, 10],
                        backgroundColor: '#94A3B8' // Slate 400
                    },
                    {
                        label: 'Short-term Fix (Relief)',
                        data: [30, 30, 80],
                        backgroundColor: '#2DD4BF' // Teal 400
                    },
                    {
                        label: 'Emotional Care (Resilience)',
                        data: [10, 50, 10], // The Gap
                        backgroundColor: '#EC4899' // Pink 500
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { stacked: true },
                    y: { 
                        stacked: true,
                        title: { display: true, text: '% of Marketing Messaging' }
                    }
                },
                plugins: {
                    tooltip: commonTooltipOptions,
                    legend: { position: 'bottom' }
                }
            }
        });

    </script>
</body>
</html>