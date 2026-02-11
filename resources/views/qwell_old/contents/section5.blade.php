<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q'WELL Strategic Positioning & Trust Logic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #F3F4F6; color: #1F2937; }
        .chart-container { 
            position: relative; 
            width: 100%; 
            max-width: 600px; 
            margin-left: auto; 
            margin-right: auto; 
            height: 350px; 
            max-height: 400px; 
        }
        @media (max-width: 768px) { .chart-container { height: 300px; } }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, #4F46E5 0%, #06B6D4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: #E5E7EB;
            z-index: 0;
        }
        .timeline-node {
            z-index: 10;
        }
    </style>
    <!-- 
    Palette: "Vibrant Clinical" 
    Primary: Indigo (#4F46E5)
    Secondary: Cyan (#06B6D4)
    Accent: Pink (#EC4899)
    Background: Light Gray (#F3F4F6)
    
    Plan Summary:
    1. Intro: The Strategic Lock Point (Section 5 context).
    2. Positioning Territory: Scatter Plot (Comparison).
    3. Trust Architecture: Donut Chart (Composition of Trust).
    4. Price Benchmarking: Horizontal Bar Chart (Market Context).
    5. Halal 2026 Timeline: Vertical HTML Timeline (Regulatory).
    6. Stress Test: Radar Chart (Resilience Factors).
    7. Conclusion: Final Statement.
    
    No SVG used. No Mermaid used.
    -->
</head>
<body class="section-5-content antialiased">

    <!-- Header Section -->
    <header class="section-5-content bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900">Q'WELL <span class="text-indigo-600">STRATEGY</span></h1>
            <nav class="hidden md:flex space-x-8">
                <a href="#positioning" class="text-gray-500 hover:text-indigo-600 font-medium">Positioning</a>
                <a href="#pricing" class="text-gray-500 hover:text-indigo-600 font-medium">Pricing Logic</a>
                <a href="#regulation" class="text-gray-500 hover:text-indigo-600 font-medium">Halal 2026</a>
                <a href="#stress-test" class="text-gray-500 hover:text-indigo-600 font-medium">Stress Test</a>
            </nav>
        </div>
    </header>

    <main class="section-5-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-20">

        <!-- Hero / Introduction -->
        <section class="text-center space-y-6">
            <div class="inline-block px-4 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wide">Deep Research — Section 5</div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 leading-tight">
                The Positioning <br><span class="gradient-text">Lock Point</span>
            </h2>
            <p class="max-w-3xl mx-auto text-xl text-gray-600">
                This document visualizes the strategic framework for Q'WELL. We define the "Aesthetic Clinical" territory, justifying a premium Rp 500k+ price point through a robust "Trust Architecture" and preparing for the Halal 2026 regulatory shift.
            </p>
        </section>

        <!-- Section 1: Positioning Territory (Scatter Plot) -->
        <section id="positioning" class="scroll-mt-24">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="lg:col-span-1 space-y-4">
                    <h3 class="text-3xl font-bold text-gray-900 border-l-4 border-indigo-600 pl-4">Defining the Territory</h3>
                    <p class="text-gray-600">
                        To justify a premium, Q'WELL must reject the crowded "Natural" space and the intimidating "Pure Medical" space. We claim the <strong>"Aesthetic Clinical"</strong> white space.
                    </p>
                    <p class="text-gray-600">
                        This chart maps the competitive landscape based on <strong>Price Perception</strong> (X) vs. <strong>Brand Promise</strong> (Y). Q'WELL sits in the "Sweet Spot" of high trust and accessible luxury.
                    </p>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100 mt-4">
                        <strong class="block text-indigo-600 mb-2">Why this territory?</strong>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-start"><span class="mr-2 text-indigo-400">●</span> Balances safety with efficacy.</li>
                            <li class="flex items-start"><span class="mr-2 text-indigo-400">●</span> Justifies Rp 500k+ without legacy heritage.</li>
                            <li class="flex items-start"><span class="mr-2 text-indigo-400">●</span> Appeals to the "Smart Skincare" consumer.</li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl p-6 border border-gray-200">
                    <div class="chart-container">
                        <canvas id="positioningMap"></canvas>
                    </div>
                    <p class="text-center text-sm text-gray-400 mt-4">Market Mapping: Price vs. Clinical Perception</p>
                </div>
            </div>
        </section>

        <!-- Section 2: Trust Architecture (Donut Chart) -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center bg-indigo-900 rounded-3xl p-8 md:p-12 text-white shadow-2xl">
            <div class="order-2 md:order-1">
                <div class="chart-container mx-auto">
                    <canvas id="trustDonut"></canvas>
                </div>
            </div>
            <div class="order-1 md:order-2 space-y-6">
                <h3 class="text-3xl font-bold text-white">The "Trust Premium" Formula</h3>
                <p class="text-indigo-100 text-lg">
                    Why would an Indonesian consumer pay Rp 500k+ for a local brand? The answer isn't just ingredients; it's <strong>Trust Architecture</strong>.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center p-3 bg-indigo-800 rounded-lg">
                        <div class="w-10 h-10 flex items-center justify-center bg-pink-500 rounded-full font-bold text-white mr-4">1</div>
                        <div>
                            <h4 class="font-bold">Clinical Efficacy (40%)</h4>
                            <p class="text-xs text-indigo-200">Active ingredients at functional levels.</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-indigo-800 rounded-lg">
                        <div class="w-10 h-10 flex items-center justify-center bg-cyan-500 rounded-full font-bold text-white mr-4">2</div>
                        <div>
                            <h4 class="font-bold">Regulatory Safety (35%)</h4>
                            <p class="text-xs text-indigo-200">Halal 2026 + BPOM + Vegan certification.</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-indigo-800 rounded-lg">
                        <div class="w-10 h-10 flex items-center justify-center bg-indigo-500 rounded-full font-bold text-white mr-4">3</div>
                        <div>
                            <h4 class="font-bold">Social Status (25%)</h4>
                            <p class="text-xs text-indigo-200">Packaging, price signaling, and exclusivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Pricing Logic (Horizontal Bar) -->
        <section id="pricing" class="scroll-mt-24">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <h3 class="text-3xl font-bold text-gray-900">Competitive Pricing Landscape</h3>
                <p class="text-gray-600 mt-2">
                    Pricing is our primary filter. By setting a floor of Rp 500k, we intentionally distance Q'WELL from the saturated "Masstige" market (Somethinc, Avoskin) and align with "Entry Luxury" expectations.
                </p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
                <div class="chart-container" style="max-height: 500px; height: 400px;">
                    <canvas id="pricingChart"></canvas>
                </div>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <div class="p-4 bg-gray-50 rounded-lg">
                        <div class="text-gray-500 text-xs uppercase font-bold">Local Masstige</div>
                        <div class="text-xl font-bold text-gray-700">Rp 150k - 290k</div>
                    </div>
                    <div class="p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                        <div class="text-indigo-600 text-xs uppercase font-bold">Q'WELL Target</div>
                        <div class="text-2xl font-black text-indigo-700">Rp 550,000</div>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-lg">
                        <div class="text-gray-500 text-xs uppercase font-bold">Global Heritage</div>
                        <div class="text-xl font-bold text-gray-700">Rp 800k+</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Regulatory Trust Timeline (HTML Structure) -->
        <section id="regulation" class="scroll-mt-24 bg-white rounded-2xl shadow-lg p-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Halal 2026 Mandate</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        The Halal 2026 requirement isn't just compliance; it's a market reset. Q'WELL leverages this as a "Superior Trust Signal" combining Purity (Religious) + Safety (Scientific).
                    </p>
                    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-4">
                        <strong class="text-cyan-800 text-sm">Strategic Insight:</strong>
                        <p class="text-cyan-700 text-xs mt-1">"Halal is the new premium infrastructure. It signals a supply chain free from contamination."</p>
                    </div>
                </div>
                <div class="lg:col-span-3 relative py-4">
                    <!-- Horizontal Timeline for Desktop -->
                    <div class="hidden md:flex justify-between items-center relative z-10 h-full">
                        <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -z-10 transform -translate-y-1/2"></div>
                        
                        <!-- Node 1 -->
                        <div class="relative group w-1/4 text-center">
                            <div class="w-4 h-4 bg-gray-400 rounded-full mx-auto mb-2 border-4 border-white shadow-sm group-hover:bg-indigo-500 transition-colors"></div>
                            <div class="text-xs font-bold text-gray-500">2024</div>
                            <div class="text-sm font-bold text-gray-800 mt-1">Formulation Lock</div>
                            <p class="text-xs text-gray-500 mt-1 px-2">Ingredients screened for non-halal traces.</p>
                        </div>
                        
                        <!-- Node 2 -->
                        <div class="relative group w-1/4 text-center">
                            <div class="w-6 h-6 bg-indigo-600 rounded-full mx-auto mb-2 border-4 border-white shadow-md animate-pulse"></div>
                            <div class="text-xs font-bold text-indigo-600">NOW (Section 5)</div>
                            <div class="text-sm font-bold text-gray-900 mt-1">Regulatory Audit</div>
                            <p class="text-xs text-gray-600 mt-1 px-2">Pre-audit of supply chain & manufacturing.</p>
                        </div>

                        <!-- Node 3 -->
                        <div class="relative group w-1/4 text-center">
                            <div class="w-4 h-4 bg-cyan-500 rounded-full mx-auto mb-2 border-4 border-white shadow-sm"></div>
                            <div class="text-xs font-bold text-cyan-600">Oct 2025</div>
                            <div class="text-sm font-bold text-gray-800 mt-1">Certification</div>
                            <p class="text-xs text-gray-500 mt-1 px-2">Official BPJPH certification granted.</p>
                        </div>

                        <!-- Node 4 -->
                        <div class="relative group w-1/4 text-center">
                            <div class="w-4 h-4 bg-pink-500 rounded-full mx-auto mb-2 border-4 border-white shadow-sm"></div>
                            <div class="text-xs font-bold text-pink-600">2026 Enforcement</div>
                            <div class="text-sm font-bold text-gray-800 mt-1">Market Advantage</div>
                            <p class="text-xs text-gray-500 mt-1 px-2">Competitors non-compliant are barred.</p>
                        </div>
                    </div>

                    <!-- Vertical Timeline for Mobile -->
                    <div class="md:hidden space-y-8 relative pl-6 border-l-2 border-gray-200 ml-3">
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-gray-400 rounded-full border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">2024: Formulation Lock</h4>
                            <p class="text-xs text-gray-500">Screening ingredients for compliance.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-[35px] top-1 w-6 h-6 bg-indigo-600 rounded-full border-4 border-white shadow-md"></div>
                            <h4 class="font-bold text-indigo-700">NOW: Regulatory Audit</h4>
                            <p class="text-xs text-gray-600">Full supply chain review active.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-cyan-500 rounded-full border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Oct 2025: Certification</h4>
                            <p class="text-xs text-gray-500">Official BPJPH Halal Status.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-pink-500 rounded-full border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">2026: Enforcement</h4>
                            <p class="text-xs text-gray-500">Non-compliant brands exit market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Stress Test (Radar Chart) -->
        <section id="stress-test" class="scroll-mt-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-center">
                    <div class="chart-container">
                        <canvas id="stressRadar"></canvas>
                    </div>
                    <p class="text-center text-xs text-gray-400 mt-2">Brand Resilience Score vs. Generic Local Competitor</p>
                </div>
                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-gray-900">Positioning "Kill Test"</h3>
                    <p class="text-gray-600">
                        We subjected the Q'WELL positioning to extreme pressure. <br><em>"Why wouldn't they just buy Kiehl's?"</em>
                    </p>
                    
                    <!-- Accordion / Cards for Objections -->
                    <div class="space-y-3">
                        <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-pink-500">
                            <h5 class="font-bold text-gray-900 text-sm">Threat: "Local brands are cheap (Rp 150k)."</h5>
                            <p class="text-sm text-gray-600 mt-1"><strong>Defense:</strong> Low price = Low efficacy perception. Our Rp 500k price point acts as a quality filter, signalling active clinical concentration.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-indigo-500">
                            <h5 class="font-bold text-gray-900 text-sm">Threat: "Why not buy Kiehl's (Rp 800k)?"</h5>
                            <p class="text-sm text-gray-600 mt-1"><strong>Defense:</strong> Specificity. Kiehl's is "General Western." Q'WELL is "Engineered for Tropical Humidity & Halal Purity."</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-cyan-500">
                            <h5 class="font-bold text-gray-900 text-sm">Threat: "Halal doesn't matter for skincare."</h5>
                            <p class="text-sm text-gray-600 mt-1"><strong>Defense:</strong> Incorrect. Post-2024 data shows Halal is proxy for "Clean Beauty" among 85% of Gen-Z consumers in Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="bg-gradient-to-r from-indigo-600 to-cyan-600 rounded-3xl p-8 md:p-16 text-center text-white shadow-2xl">
            <h2 class="text-2xl md:text-4xl font-black mb-6">Final Positioning Locked</h2>
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 md:p-8 max-w-4xl mx-auto border border-white/20">
                <p class="text-xl md:text-2xl font-serif italic leading-relaxed">
                    "For the discerning Indonesian consumer seeking proven efficacy without compromise, Q'WELL is the <span class="text-pink-300 font-sans font-bold not-italic">Aesthetic Clinical</span> authority that delivers premium dermatological results through a trusted, Halal-certified framework."
                </p>
            </div>
            <div class="mt-8 flex justify-center space-x-4">
                <div class="px-6 py-2 bg-white text-indigo-700 font-bold rounded-full shadow-lg">Target: Professional Women 28-45</div>
                <div class="px-6 py-2 bg-transparent border-2 border-white text-white font-bold rounded-full">Price: Rp 550.000</div>
            </div>
        </section>

        <section class="section-5-content text-center text-gray-400 text-sm py-8">
            <p>&copy; 2026 Q'WELL Strategic Planning Division. Internal Use Only.</p>
        </section>

    </main>

    <script>
        // --- UTILITY: Wrap Labels for Charts ---
        function wrapLabel(str, maxChars) {
            if (str.length <= maxChars) return str;
            const words = str.split(' ');
            const lines = [];
            let currentLine = words[0];

            for (let i = 1; i < words.length; i++) {
                if (currentLine.length + 1 + words[i].length <= maxChars) {
                    currentLine += ' ' + words[i];
                } else {
                    lines.push(currentLine);
                    currentLine = words[i];
                }
            }
            lines.push(currentLine);
            return lines;
        }

        // --- GLOBAL SETTINGS ---
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#4B5563';
        
        // Common Tooltip Configuration (REQUIRED)
        const commonTooltip = {
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

        // --- CHART 1: Positioning Map (Scatter) ---
        // Context: X=Price (Low->High), Y=Perception (Natural->Clinical)
        const ctxPos = document.getElementById('positioningMap').getContext('2d');
        new Chart(ctxPos, {
            type: 'scatter',
            data: {
                datasets: [
                    {
                        label: "Q'WELL (Target)",
                        data: [{x: 6.5, y: 8}], // High Clinical, Mid-High Price
                        backgroundColor: '#4F46E5', // Indigo
                        pointRadius: 12,
                        pointHoverRadius: 14
                    },
                    {
                        label: 'Kiehl\'s / Intl',
                        data: [{x: 9, y: 7}], // High Price, Clinical
                        backgroundColor: '#9CA3AF', // Gray
                        pointRadius: 8
                    },
                    {
                        label: 'Local Masstige',
                        data: [{x: 3, y: 5}], // Low Price, Mid Clinical
                        backgroundColor: '#D1D5DB', // Light Gray
                        pointRadius: 8
                    },
                    {
                        label: 'Natural/Herbal',
                        data: [{x: 4, y: 2}], // Low Price, Low Clinical (Natural)
                        backgroundColor: '#A7F3D0', // Green tint
                        pointRadius: 8
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        title: { display: true, text: 'Price Sensitivity (Low -> Premium)' },
                        min: 0, max: 10,
                        grid: { color: '#E5E7EB' }
                    },
                    y: {
                        title: { display: true, text: 'Brand Promise (Natural -> Clinical)' },
                        min: 0, max: 10,
                        grid: { color: '#E5E7EB' }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label;
                            }
                        }
                    },
                    legend: { position: 'bottom' }
                }
            }
        });

        // --- CHART 2: Trust Architecture (Donut) ---
        const ctxTrust = document.getElementById('trustDonut').getContext('2d');
        const trustLabels = ['Clinical Efficacy (Function)', 'Regulatory Safety (Halal/Vegan)', 'Social Status (Premium)'];
        // Wrap labels
        const wrappedTrustLabels = trustLabels.map(l => wrapLabel(l, 16));

        new Chart(ctxTrust, {
            type: 'doughnut',
            data: {
                labels: wrappedTrustLabels,
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: [
                        '#EC4899', // Pink (Efficacy)
                        '#06B6D4', // Cyan (Safety)
                        '#4F46E5'  // Indigo (Status)
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                cutout: '60%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { color: '#ffffff', font: { size: 10 } }
                    },
                    tooltip: commonTooltip
                }
            }
        });

        // --- CHART 3: Pricing Logic (Horizontal Bar) ---
        const ctxPrice = document.getElementById('pricingChart').getContext('2d');
        const priceLabels = ['Local Mass Market', 'Local Masstige (Somethinc)', 'Q\'WELL (Strategic Entry)', 'Intl Premium (Kiehl\'s)', 'Ultra Luxury (La Mer)'];
        const wrappedPriceLabels = priceLabels.map(l => wrapLabel(l, 16));

        new Chart(ctxPrice, {
            type: 'bar',
            data: {
                labels: wrappedPriceLabels,
                datasets: [{
                    label: 'Average Price Point (IDR)',
                    data: [85000, 189000, 550000, 850000, 3500000],
                    backgroundColor: [
                        '#E5E7EB', // Gray
                        '#9CA3AF', // Gray
                        '#4F46E5', // INDIGO (Q'WELL)
                        '#E5E7EB',
                        '#E5E7EB'
                    ],
                    borderRadius: 4,
                    barPercentage: 0.6
                }]
            },
            options: {
                indexAxis: 'y',
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: {
                            callback: function(value) { return 'Rp ' + value.toLocaleString(); }
                        }
                    },
                    y: {
                        grid: { display: false }
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...commonTooltip,
                        callbacks: {
                            ...commonTooltip.callbacks,
                            label: function(context) {
                                return 'Rp ' + context.raw.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // --- CHART 4: Stress Test (Radar) ---
        const ctxRadar5 = document.getElementById('stressRadar').getContext('2d');
        const radarLabels5 = ['Ingredient Transparency', 'Halal Compliance', 'Clinical Proof', 'Packaging Aesthetics', 'Price Justification'];
        const wrappedRadarLabels5 = radarLabels5.map(l => wrapLabel(l, 16));

        new Chart(ctxRadar5, {
            type: 'radar',
            data: {
                labels: wrappedRadarLabels5,
                datasets: [
                    {
                        label: 'Q\'WELL Strategy',
                        data: [9, 10, 8, 9, 8],
                        fill: true,
                        backgroundColor: 'rgba(79, 70, 229, 0.2)', // Indigo low opacity
                        borderColor: '#4F46E5',
                        pointBackgroundColor: '#4F46E5',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#4F46E5'
                    },
                    {
                        label: 'Generic Local Competitor',
                        data: [6, 7, 4, 7, 9], // High price justification (because cheap), low clinical
                        fill: true,
                        backgroundColor: 'rgba(236, 72, 153, 0.1)', // Pink low opacity
                        borderColor: '#EC4899',
                        pointBackgroundColor: '#EC4899',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#EC4899'
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    r: {
                        angleLines: { color: '#E5E7EB' },
                        grid: { color: '#E5E7EB' },
                        pointLabels: {
                            font: { size: 11, weight: '600' },
                            color: '#374151'
                        },
                        suggestedMin: 0,
                        suggestedMax: 10
                    }
                },
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: commonTooltip
                }
            }
        });
    </script>
</body>
</html>