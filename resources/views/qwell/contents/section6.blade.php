

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-orange': '#FFCC97',
                        'brand-cream': '#FFEBDA',
                        'brand-mint': '#CAF1EB',
                        'brand-teal': '#65BDAD',
                        'brand-dark': '#2D3748',
                        'brand-gray': '#F7FAFC'
                    },
                    fontFamily: {
                        sans: ['system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Chart Container Strict Styling */
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 100%; /* Let grid handle max width */
            height: 300px;
            max-height: 350px;
            margin: 0 auto;
        }
        
        /* Custom Scrollbar for Table */
        .custom-scrollbar::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #CBD5E0;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #A0AEC0;
        }

        /* Utility for badge dots */
        .dot {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
    <!-- 
        Pallete Used:
        Orange: #FFCC97
        Cream: #FFEBDA
        Mint: #CAF1EB
        Teal: #65BDAD
        
        NO SVG USED.
        NO MERMAID JS USED.
    -->
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased">

    <!-- Top Navigation / Header -->
    <header class="bg-white shadow-sm sticky top-0 z-20 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div>
                    <h1 class="text-xl font-bold text-slate-900 tracking-tight">SECTION 6 — Competitive Landscape</h1>
                    <p class="text-xs text-slate-500 uppercase tracking-wider mt-1">Natural & Sensitive Claim Analysis</p>
                </div>
                
                <div class="flex items-center space-x-3">
                    <button onclick="resetFilters()" class="px-4 py-2 text-sm font-medium text-slate-600 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                        Reset Filters
                    </button>
                    <button onclick="exportCSV()" class="px-4 py-2 text-sm font-medium text-white bg-brand-teal hover:bg-teal-600 rounded-lg shadow-sm transition-colors">
                        Download CSV
                    </button>
                </div>
            </div>

            <!-- Filters Toolbar -->
            <div class="mt-4 pt-4 border-t border-gray-100 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
                <select id="filterTier" onchange="filterData()" class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-teal focus:ring focus:ring-brand-teal focus:ring-opacity-50 p-2 bg-gray-50">
                    <option value="All">All Price Tiers</option>
                    <option value="Mass">Mass (<150k)</option>
                    <option value="Upper-Mass">Upper-Mass (150-350k)</option>
                    <option value="Premium">Premium (350-600k)</option>
                    <option value="Clinical">Clinical-Adjacent (>600k)</option>
                </select>

                <select id="filterDepth" onchange="filterData()" class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-teal focus:ring focus:ring-brand-teal focus:ring-opacity-50 p-2 bg-gray-50">
                    <option value="All">All Verification Depths</option>
                    <option value="Low">Low (Surface)</option>
                    <option value="Medium">Medium (Semi)</option>
                    <option value="High">High (Structural)</option>
                </select>

                <select id="filterClaim" onchange="filterData()" class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-teal focus:ring focus:ring-brand-teal focus:ring-opacity-50 p-2 bg-gray-50">
                    <option value="All">All Claim Types</option>
                    <option value="Surface-Level">Surface-Level</option>
                    <option value="Semi-Specific">Semi-Specific</option>
                    <option value="Structural">Structural</option>
                </select>

                <select id="filterSub" onchange="filterData()" class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-teal focus:ring focus:ring-brand-teal focus:ring-opacity-50 p-2 bg-gray-50">
                    <option value="All">All Substitutability</option>
                    <option value="True Substitute">True Substitute</option>
                    <option value="Partial Substitute">Partial Substitute</option>
                    <option value="False Substitute">False Substitute</option>
                </select>

                <input type="text" id="searchBrand" onkeyup="filterData()" placeholder="Search Brand..." class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-teal focus:ring focus:ring-brand-teal focus:ring-opacity-50 p-2 bg-white">
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Top Row: Executive Summary & KPIs -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            
            <!-- Executive Summary -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-slate-800 mb-3 border-l-4 border-brand-teal pl-3">Executive Summary</h2>
                <div class="prose prose-sm text-slate-600 space-y-2">
                    <p>• <span class="font-semibold text-slate-800">Landscape Saturation:</span> The "Natural" claim space is heavily saturated in the Mass/Upper-Mass tiers, primarily driven by surface-level marketing rather than structural verification.</p>
                    <p>• <span class="font-semibold text-slate-800">The "Trust Gap":</span> A significant divergence exists between price and verification depth. Many "Premium" priced brands lack the structural certification (HRIPT, International Labs) to justify their price point purely on safety grounds.</p>
                    <p>• <span class="font-semibold text-slate-800">Opportunity:</span> The Target Premium Brand occupies a distinct high-verification / high-premium quadrant, offering a clinical-grade safety profile that is scarce among lifestyle-natural competitors.</p>
                </div>
                <div class="mt-4 p-3 bg-brand-cream rounded-lg border border-brand-orange text-xs text-orange-900 flex items-start">
                    <span class="text-lg mr-2">💡</span>
                    <div>
                        <strong>Key Takeaway:</strong> Identical claim wording (e.g., "Hypoallergenic") does not correlate with identical verification infrastructure across tiers.
                    </div>
                </div>
            </div>

            <!-- KPIs -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-slate-500 uppercase">Total Universe</h3>
                    <div class="text-3xl font-bold text-slate-900 mt-1" id="kpiTotal">0</div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div>
                        <h3 class="text-xs font-semibold text-slate-500 uppercase">True Substitutes</h3>
                        <div class="text-xl font-bold text-brand-teal mt-1" id="kpiTrueSub">0</div>
                    </div>
                    <div>
                        <h3 class="text-xs font-semibold text-slate-500 uppercase">Structural Claims</h3>
                        <div class="text-xl font-bold text-slate-900 mt-1" id="kpiStructural">0%</div>
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-100">
                    <p class="text-xs text-slate-400 italic">Interpretation note: Indexes are directional, not statistical. Analysis based on secondary sources.</p>
                </div>
            </div>
        </div>

        <!-- Middle Row: Charts & Logic -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            
            <!-- Scatter Plot (Primary Visual) -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold text-slate-800">Price vs. Verification Depth Matrix</h2>
                    <span class="text-xs bg-brand-mint text-teal-800 px-2 py-1 rounded-full font-medium">Core Visual</span>
                </div>
                <div class="chart-container">
                    <canvas id="scatterChart"></canvas>
                </div>
                <div class="mt-4 flex justify-center space-x-6 text-xs text-slate-500">
                    <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-slate-300 mr-1"></span> Mass/Upper</div>
                    <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-brand-teal mr-1"></span> Premium</div>
                    <div class="flex items-center"><span class="w-3 h-3 rounded-full border-2 border-brand-orange bg-white mr-1"></span> Target Brand</div>
                </div>
            </div>

            <!-- Brand Detail Panel (Sticky-ish) -->
            <div class="bg-white rounded-xl shadow-sm border border-brand-teal border-t-4 p-6 row-span-2 h-fit">
                <h3 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-4">Brand Detail View</h3>
                
                <div id="brandDetailContent" class="space-y-4">
                    <!-- Default State -->
                    <div class="text-center py-10 opacity-50">
                        <div class="text-4xl mb-2">👆</div>
                        <p class="text-sm">Click a dot on the chart<br>or a row in the table<br>to view details.</p>
                    </div>
                </div>
            </div>

            <!-- Claim Inflation -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-sm font-bold text-slate-800 mb-4">Claim Inflation Lens</h2>
                <div class="chart-container" style="height: 250px;">
                    <canvas id="barChart"></canvas>
                </div>
                <div class="mt-4 text-xs text-slate-500">
                    <p class="mb-1"><strong>Observation:</strong> "Sensitive" claims are prevalent in Mass tiers but often lack specific protocol disclosure (HRIPT).</p>
                </div>
            </div>

            <!-- Structural Cost Logic -->
            <div class="bg-brand-gray rounded-xl shadow-sm border border-gray-200 p-6">
                <h2 class="text-sm font-bold text-slate-800 mb-3">Structural Cost Logic</h2>
                <ul class="space-y-3 text-xs text-slate-600">
                    <li class="flex items-start">
                        <span class="mr-2 text-brand-teal font-bold">1.</span>
                        <span><strong>Testing Depth:</strong> Single-patch test (Mass) vs. HRIPT on 50+ subjects (Premium) drives 10x-20x cost difference per SKU.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 text-brand-teal font-bold">2.</span>
                        <span><strong>Lab Location:</strong> International labs (Europe/Korea) incur higher fees & logistics than local generic verification.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 text-brand-teal font-bold">3.</span>
                        <span><strong>Scale:</strong> Mass brands amortize compliance costs over millions of units; Niche Premium brands absorb them over thousands.</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Premium Shortlist (Horizontal Card) -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
            <h2 class="text-lg font-bold text-slate-800 mb-4 border-l-4 border-brand-orange pl-3">Premium Shortlist: True Substitutes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="shortlistContainer">
                <!-- Shortlist items injected by JS -->
            </div>
        </div>

        <!-- Data Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                <h2 class="text-lg font-bold text-slate-800">Master Competitor Validation</h2>
                <span class="text-xs text-slate-400">Scroll horizontally for more columns</span>
            </div>
            <div class="overflow-x-auto custom-scrollbar">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Brand</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Tier</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Claim Type</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Verif. Depth</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Substitutability</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        <!-- Table rows injected by JS -->
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Guardrails -->
        <div class="mt-8 text-center max-w-2xl mx-auto">
            <p class="text-xs text-slate-400">
                <strong>Disclaimer:</strong> Analysis based on publicly available secondary data as of October 2023. "Not disclosed" does not definitively mean a test was not performed, only that it is not marketed. Price tiers are approximate based on retail listings.
            </p>
        </div>

    </main>

    <!-- Source Modal -->
    <div id="sourceModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-lg w-full max-h-[80vh] flex flex-col">
            <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 rounded-t-lg">
                <h3 class="font-bold text-slate-800" id="modalTitle">Sources</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
            </div>
            <div class="p-6 overflow-y-auto" id="modalContent">
                <!-- Sources list -->
            </div>
            <div class="p-4 border-t border-gray-100 bg-gray-50 rounded-b-lg text-right">
                <button onclick="closeModal()" class="px-4 py-2 bg-white border border-gray-300 rounded text-sm text-slate-600 hover:bg-gray-50">Close</button>
            </div>
        </div>
    </div>

    <script>
        // =========================================================================
        // DATASET - PASTE SECTION 6 DATA HERE
        // =========================================================================
        
        // NOTE TO USER: Replace this array with your final research output.
        const DATA = [
            {
                id: "target",
                brand: "Target Premium Brand",
                tier: "Premium",
                priceIndex: 3.2, // Visual Y-axis (1-4)
                depthIndex: 2.9, // Visual X-axis (1-3)
                claimType: "Structural",
                verificationDepth: "High",
                substitutability: "Target",
                channels: ["Online", "Clinic"],
                certifications: { vegan: "Traceable", cruelty: "Traceable", halal: "Yes" },
                notes: "HRIPT, International Lab, Sensitive-first positioning. The benchmark.",
                sources: ["Internal Brief", "Lab Reports"]
            },
            {
                id: "sensatia",
                brand: "Sensatia Botanicals",
                tier: "Premium",
                priceIndex: 2.8,
                depthIndex: 2.7,
                claimType: "Structural",
                verificationDepth: "High",
                substitutability: "True Substitute",
                channels: ["Offline Stores", "Shopee", "Website"],
                certifications: { vegan: "Documented", cruelty: "Documented", halal: "Yes" },
                notes: "Strongest structural competitor. GMP certified facility in Bali. Explicit ingredient transparency.",
                sources: ["https://sensatia.com", "Product Packaging"]
            },
            {
                id: "puresia",
                brand: "Puresia",
                tier: "Premium",
                priceIndex: 2.6,
                depthIndex: 2.1,
                claimType: "Semi-Specific",
                verificationDepth: "Medium",
                substitutability: "Partial Substitute",
                channels: ["Shopee", "Tokopedia"],
                certifications: { vegan: "Icon-only", cruelty: "Icon-only", halal: "No" },
                notes: "High aesthetic alignment but less structural testing disclosure than Sensatia.",
                sources: ["Official Shopee Store", "Social Media"]
            },
            {
                id: "biotalk",
                brand: "Biotalk",
                tier: "Upper-Mass",
                priceIndex: 2.1,
                depthIndex: 2.3,
                claimType: "Semi-Specific",
                verificationDepth: "Medium",
                substitutability: "Partial Substitute",
                channels: ["Shopee", "TikTok Shop"],
                certifications: { vegan: "No", cruelty: "Icon-only", halal: "Yes" },
                notes: "Sensitive-skin focused (eczema), but price point is lower. Clinical claims present but less rigorous disclosure.",
                sources: ["Biotalk.id", "User Reviews"]
            },
            {
                id: "bodyshop",
                brand: "The Body Shop",
                tier: "Upper-Mass",
                priceIndex: 2.4,
                depthIndex: 2.2,
                claimType: "Surface-Level",
                verificationDepth: "Medium",
                substitutability: "False Substitute",
                channels: ["Malls", "Website", "Marketplace"],
                certifications: { vegan: "Documented", cruelty: "Documented", halal: "No" },
                notes: "Huge scale, vegan certified, but often relies on fragrance which limits true sensitive-skin substitutability.",
                sources: ["The Body Shop Indo Website"]
            },
            {
                id: "sukin",
                brand: "Sukin",
                tier: "Premium",
                priceIndex: 2.7,
                depthIndex: 2.0,
                claimType: "Surface-Level",
                verificationDepth: "Medium",
                substitutability: "False Substitute",
                channels: ["Sociolla", "Watson"],
                certifications: { vegan: "Documented", cruelty: "Documented", halal: "No" },
                notes: "Import brand. Carbon neutral focus. 'Natural' claims are standard, not clinical-grade.",
                sources: ["Sukin Labels", "Sociolla"]
            },
            {
                id: "cahaya",
                brand: "Cahaya Naturals",
                tier: "Upper-Mass",
                priceIndex: 1.9,
                depthIndex: 2.2,
                claimType: "Semi-Specific",
                verificationDepth: "Medium",
                substitutability: "Partial Substitute",
                channels: ["Marketplace"],
                certifications: { vegan: "No", cruelty: "Icon-only", halal: "Yes" },
                notes: "Local natural brand. Eczema focus. Good community trust but smaller verification footprint.",
                sources: ["Official Website"]
            },
            {
                id: "cetaphil",
                brand: "Cetaphil",
                tier: "Upper-Mass",
                priceIndex: 1.8,
                depthIndex: 2.8,
                claimType: "Structural",
                verificationDepth: "High",
                substitutability: "False Substitute",
                channels: ["Pharmacies", "Supermarkets"],
                certifications: { vegan: "No", cruelty: "No", halal: "Yes" },
                notes: "Clinical gold standard but NOT 'Natural' positioned. The 'Proof' anchor for the category.",
                sources: ["Dermatology recommendations"]
            },
            {
                id: "klenkind",
                brand: "Klen and Kind",
                tier: "Premium",
                priceIndex: 2.9,
                depthIndex: 2.0,
                claimType: "Semi-Specific",
                verificationDepth: "Medium",
                substitutability: "Partial Substitute",
                channels: ["Website", "Marketplace"],
                certifications: { vegan: "Icon-only", cruelty: "Icon-only", halal: "No" },
                notes: "Very aesthetic, aromatherapy focus. Less clinical language.",
                sources: ["Website"]
            },
            {
                id: "utama",
                brand: "Utama Spice",
                tier: "Upper-Mass",
                priceIndex: 2.2,
                depthIndex: 2.0,
                claimType: "Surface-Level",
                verificationDepth: "Medium",
                substitutability: "False Substitute",
                channels: ["Bali Stores", "Online"],
                certifications: { vegan: "Icon-only", cruelty: "Icon-only", halal: "No" },
                notes: "Traditional herbal focus. Not directly competing on 'clinical safety'.",
                sources: ["Website"]
            },
            {
                id: "npure",
                brand: "N'PURE",
                tier: "Mass",
                priceIndex: 1.4,
                depthIndex: 1.5,
                claimType: "Surface-Level",
                verificationDepth: "Low",
                substitutability: "False Substitute",
                channels: ["Mass Retail", "Online"],
                certifications: { vegan: "No", cruelty: "Icon-only", halal: "Yes" },
                notes: "Mass market natural. Ingredients highlighted but low disclosure on testing specifics.",
                sources: ["Packaging"]
            },
            {
                id: "bhumi",
                brand: "Bhumi",
                tier: "Premium",
                priceIndex: 3.0,
                depthIndex: 2.5,
                claimType: "Structural",
                verificationDepth: "High",
                substitutability: "True Substitute",
                channels: ["Online"],
                certifications: { vegan: "Icon-only", cruelty: "Icon-only", halal: "Yes" },
                notes: "Uses active ingredients heavily. 'Nutrition' angle similar to Target Brand.",
                sources: ["Website"]
            },
            {
                id: "serenitree",
                brand: "Serenitree",
                tier: "Premium",
                priceIndex: 2.7,
                depthIndex: 2.3,
                claimType: "Semi-Specific",
                verificationDepth: "Medium",
                substitutability: "Partial Substitute",
                channels: ["Online"],
                certifications: { vegan: "No", cruelty: "Icon-only", halal: "No" },
                notes: "Gentle/Natural positioning. Good overlap in target audience.",
                sources: ["Website"]
            }
        ];

        // Global State
        let filteredData = [...DATA];
        let scatterChartInstance = null;
        let barChartInstance = null;

        // =========================================================================
        // INITIALIZATION
        // =========================================================================
        
        document.addEventListener('DOMContentLoaded', () => {
            initDashboard();
        });

        function initDashboard() {
            renderKPIs();
            renderCharts();
            renderTable();
            renderShortlist();
            
            // Render Target Brand in Detail View by default
            handleBrandClick('target');
        }

        // =========================================================================
        // FILTER LOGIC
        // =========================================================================

        function filterData() {
            const tierVal = document.getElementById('filterTier').value;
            const depthVal = document.getElementById('filterDepth').value;
            const claimVal = document.getElementById('filterClaim').value;
            const subVal = document.getElementById('filterSub').value;
            const searchVal = document.getElementById('searchBrand').value.toLowerCase();

            filteredData = DATA.filter(item => {
                const matchTier = tierVal === 'All' || item.tier === tierVal;
                const matchDepth = depthVal === 'All' || item.verificationDepth === depthVal;
                const matchClaim = claimVal === 'All' || item.claimType === claimVal;
                const matchSub = subVal === 'All' || item.substitutability === subVal;
                const matchSearch = item.brand.toLowerCase().includes(searchVal);
                return matchTier && matchDepth && matchClaim && matchSub && matchSearch;
            });

            updateDashboard();
        }

        function resetFilters() {
            document.getElementById('filterTier').value = 'All';
            document.getElementById('filterDepth').value = 'All';
            document.getElementById('filterClaim').value = 'All';
            document.getElementById('filterSub').value = 'All';
            document.getElementById('searchBrand').value = '';
            filterData();
        }

        function updateDashboard() {
            renderKPIs();
            updateCharts();
            renderTable();
        }

        // =========================================================================
        // RENDERING
        // =========================================================================

        function renderKPIs() {
            document.getElementById('kpiTotal').innerText = filteredData.length;
            
            const trueSubs = filteredData.filter(i => i.substitutability === 'True Substitute' || i.substitutability === 'Target').length;
            document.getElementById('kpiTrueSub').innerText = trueSubs;

            const structCount = filteredData.filter(i => i.claimType === 'Structural').length;
            const structPct = filteredData.length ? Math.round((structCount / filteredData.length) * 100) : 0;
            document.getElementById('kpiStructural').innerText = structPct + '%';
        }

        function renderShortlist() {
            const container = document.getElementById('shortlistContainer');
            const substitutes = DATA.filter(i => (i.substitutability === 'True Substitute' || i.substitutability === 'Target') && i.id !== 'target'); // Exclude target from list if desired, or keep it. Let's keep distinct.
            
            // Actually, let's just show "True Substitute" tagged items
            const listItems = substitutes.map(item => `
                <div class="bg-gray-50 rounded p-4 border border-gray-200 hover:border-brand-teal transition-colors cursor-pointer" onclick="handleBrandClick('${item.id}')">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="font-bold text-slate-800 text-sm">${item.brand}</h4>
                        <span class="text-xs font-mono bg-brand-cream text-orange-900 px-1 rounded">${item.tier}</span>
                    </div>
                    <p class="text-xs text-slate-500 line-clamp-2 mb-2">${item.notes}</p>
                    <div class="flex gap-1 flex-wrap">
                        ${item.claimType === 'Structural' ? '<span class="text-[10px] px-1 bg-brand-mint text-teal-800 rounded">Structural</span>' : ''}
                        ${item.verificationDepth === 'High' ? '<span class="text-[10px] px-1 bg-blue-100 text-blue-800 rounded">High Verif</span>' : ''}
                    </div>
                </div>
            `).join('');

            container.innerHTML = listItems || '<p class="text-sm text-slate-400 p-4">No True Substitutes found in current filter.</p>';
        }

        function renderTable() {
            const tbody = document.getElementById('tableBody');
            if (filteredData.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No brands match filters</td></tr>';
                return;
            }

            tbody.innerHTML = filteredData.map(item => `
                <tr class="hover:bg-brand-gray transition-colors cursor-pointer" onclick="handleBrandClick('${item.id}')">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                        ${item.brand}
                        ${item.id === 'target' ? '<span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-brand-orange text-orange-900">YOU</span>' : ''}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">${item.tier}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getClaimBadgeClass(item.claimType)}">
                            ${item.claimType}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                        <div class="flex items-center">
                            <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                <div class="bg-brand-teal h-2 rounded-full" style="width: ${item.depthIndex * 33}%"></div>
                            </div>
                            <span class="text-xs">${item.verificationDepth}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">${item.substitutability}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button onclick="event.stopPropagation(); showSources('${item.id}')" class="text-brand-teal hover:text-teal-900">Sources</button>
                    </td>
                </tr>
            `).join('');
        }

        function getClaimBadgeClass(type) {
            if (type === 'Structural') return 'bg-brand-mint text-teal-800';
            if (type === 'Semi-Specific') return 'bg-yellow-100 text-yellow-800';
            return 'bg-gray-100 text-gray-800';
        }

        // =========================================================================
        // BRAND DETAIL PANEL LOGIC
        // =========================================================================

        function handleBrandClick(brandId) {
            const brand = DATA.find(b => b.id === brandId);
            if (!brand) return;

            const panel = document.getElementById('brandDetailContent');
            
            // Safe helper for arrays
            const formatList = (arr) => arr.length ? arr.join(', ') : 'None';

            panel.innerHTML = `
                <div class="border-b border-gray-100 pb-4 mb-4">
                    <h2 class="text-xl font-bold text-slate-800">${brand.brand}</h2>
                    <div class="flex items-center mt-1 space-x-2">
                        <span class="px-2 py-1 bg-gray-100 text-slate-600 text-xs rounded font-medium">${brand.tier}</span>
                        <span class="px-2 py-1 bg-gray-100 text-slate-600 text-xs rounded font-medium">${brand.substitutability}</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-xs text-slate-400 uppercase">Verification</p>
                        <p class="font-medium text-slate-800">${brand.verificationDepth}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-400 uppercase">Claim Type</p>
                        <p class="font-medium text-slate-800">${brand.claimType}</p>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-slate-400 uppercase mb-1">Certifications</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <div class="bg-brand-cream px-2 py-1 rounded text-orange-900">Vegan: ${brand.certifications.vegan}</div>
                        <div class="bg-brand-cream px-2 py-1 rounded text-orange-900">Cruelty: ${brand.certifications.cruelty}</div>
                        <div class="bg-brand-cream px-2 py-1 rounded text-orange-900">Halal: ${brand.certifications.halal}</div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-slate-400 uppercase mb-1">Channels</p>
                    <p class="text-sm text-slate-600">${formatList(brand.channels)}</p>
                </div>

                <div class="bg-gray-50 p-3 rounded border border-gray-100 mb-4">
                    <p class="text-xs font-bold text-slate-500 mb-1">Analyst Notes</p>
                    <p class="text-sm text-slate-700 italic">"${brand.notes}"</p>
                </div>

                <button onclick="showSources('${brand.id}')" class="w-full py-2 border border-brand-teal text-brand-teal rounded hover:bg-brand-mint transition-colors text-sm font-medium">
                    View Verified Sources
                </button>
            `;
        }

        // =========================================================================
        // CHART.JS IMPLEMENTATION
        // =========================================================================

        function renderCharts() {
            renderScatterChart();
            renderBarChart();
        }

        function updateCharts() {
            // Update Scatter
            if (scatterChartInstance) {
                scatterChartInstance.data.datasets = getScatterDatasets();
                scatterChartInstance.update();
            }
            // Update Bar
            if (barChartInstance) {
                const barData = getBarData();
                barChartInstance.data.labels = barData.labels;
                barChartInstance.data.datasets = barData.datasets;
                barChartInstance.update();
            }
        }

        // --- Scatter Chart Logic ---

        function getScatterDatasets() {
            // We want to differentiate "Target" visual style
            const targetPoint = filteredData.find(d => d.id === 'target');
            const competitors = filteredData.filter(d => d.id !== 'target');

            const datasets = [
                {
                    label: 'Competitors',
                    data: competitors.map(d => ({
                        x: d.depthIndex + (Math.random() * 0.1 - 0.05), // Jitter
                        y: d.priceIndex + (Math.random() * 0.1 - 0.05), // Jitter
                        brand: d.brand,
                        tier: d.tier,
                        depth: d.verificationDepth
                    })),
                    backgroundColor: competitors.map(d => {
                        if (d.substitutability === 'True Substitute') return '#65BDAD'; // Teal
                        if (d.tier === 'Mass') return '#CBD5E0'; // Gray
                        return '#A0AEC0'; // Darker Gray
                    }),
                    pointRadius: 6,
                    pointHoverRadius: 8
                }
            ];

            if (targetPoint) {
                datasets.push({
                    label: 'Target Brand',
                    data: [{
                        x: targetPoint.depthIndex,
                        y: targetPoint.priceIndex,
                        brand: targetPoint.brand,
                        tier: targetPoint.tier,
                        depth: targetPoint.verificationDepth
                    }],
                    backgroundColor: '#FFFFFF',
                    borderColor: '#FF9F43', // Strong Orange
                    borderWidth: 3,
                    pointRadius: 10,
                    pointHoverRadius: 12,
                    pointStyle: 'rectRot' // Distinct shape
                });
            }

            return datasets;
        }

        function renderScatterChart() {
            const ctx = document.getElementById('scatterChart').getContext('2d');
            
            scatterChartInstance = new Chart(ctx, {
                type: 'scatter',
                data: { datasets: getScatterDatasets() },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.95)',
                            titleColor: '#1a202c',
                            bodyColor: '#4a5568',
                            borderColor: '#e2e8f0',
                            borderWidth: 1,
                            callbacks: {
                                label: function(context) {
                                    const point = context.raw;
                                    return [
                                        `${point.brand}`,
                                        `Tier: ${point.tier}`,
                                        `Verif: ${point.depth}`
                                    ];
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            title: { display: true, text: 'Verification Depth (Low → High)' },
                            min: 0.5,
                            max: 3.5,
                            ticks: {
                                callback: function(val) {
                                    if(val===1) return 'Low';
                                    if(val===2) return 'Med';
                                    if(val===3) return 'High';
                                    return '';
                                }
                            }
                        },
                        y: {
                            title: { display: true, text: 'Price Tier (Mass → Clinical)' },
                            min: 0.5,
                            max: 4.5,
                            ticks: {
                                callback: function(val) {
                                    if(val===1) return 'Mass';
                                    if(val===2) return 'Upper';
                                    if(val===3) return 'Prem';
                                    if(val===4) return 'Clinic';
                                    return '';
                                }
                            }
                        }
                    },
                    onClick: (e, activeElements) => {
                        if (activeElements.length > 0) {
                            const datasetIndex = activeElements[0].datasetIndex;
                            const index = activeElements[0].index;
                            // Find brand based on dataset
                            let brandName = scatterChartInstance.data.datasets[datasetIndex].data[index].brand;
                            const brandObj = DATA.find(b => b.brand === brandName);
                            if(brandObj) handleBrandClick(brandObj.id);
                        }
                    }
                }
            });
        }

        // --- Bar Chart Logic ---

        function getBarData() {
            // Aggregate Claim Types per Price Tier
            const tiers = ['Mass', 'Upper-Mass', 'Premium', 'Clinical'];
            const types = ['Surface-Level', 'Semi-Specific', 'Structural'];
            
            // Init counters
            const data = {
                'Surface-Level': [0,0,0,0],
                'Semi-Specific': [0,0,0,0],
                'Structural': [0,0,0,0]
            };

            filteredData.forEach(d => {
                const tIndex = tiers.indexOf(d.tier); // Note: "Clinical" might not match "Clinical-Adjacent" perfectly if strings differ.
                // Normalize tier string mapping
                let normTierIndex = -1;
                if(d.tier === 'Mass') normTierIndex = 0;
                else if(d.tier === 'Upper-Mass') normTierIndex = 1;
                else if(d.tier === 'Premium') normTierIndex = 2;
                else if(d.tier === 'Clinical-Adjacent' || d.tier === 'Clinical') normTierIndex = 3;

                if (normTierIndex !== -1 && data[d.claimType]) {
                    data[d.claimType][normTierIndex]++;
                }
            });

            return {
                labels: ['Mass', 'Upper-Mass', 'Premium', 'Clinical'],
                datasets: [
                    { label: 'Surface', data: data['Surface-Level'], backgroundColor: '#CBD5E0' }, // Gray
                    { label: 'Semi-Specific', data: data['Semi-Specific'], backgroundColor: '#FFCC97' }, // Orange
                    { label: 'Structural', data: data['Structural'], backgroundColor: '#65BDAD' } // Teal
                ]
            };
        }

        function renderBarChart() {
            const ctx = document.getElementById('barChart').getContext('2d');
            const initialData = getBarData();

            barChartInstance = new Chart(ctx, {
                type: 'bar',
                data: initialData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { stacked: true },
                        y: { stacked: true, beginAtZero: true, ticks: { precision: 0 } }
                    },
                    plugins: {
                        legend: { position: 'bottom' },
                        tooltip: {
                            callbacks: {
                                title: (items) => {
                                    // Requirement: Tooltip multiline handler
                                    const item = items[0];
                                    let label = item.chart.data.labels[item.dataIndex];
                                    return Array.isArray(label) ? label.join(' ') : label;
                                }
                            }
                        }
                    }
                }
            });
        }

        // =========================================================================
        // UTILITIES & MODALS
        // =========================================================================

        function showSources(brandId) {
            const brand = DATA.find(b => b.id === brandId);
            if (!brand) return;

            document.getElementById('modalTitle').innerText = `Sources: ${brand.brand}`;
            const list = document.getElementById('modalContent');
            
            if (brand.sources && brand.sources.length > 0) {
                list.innerHTML = `<ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                    ${brand.sources.map(s => `<li>${s.startsWith('http') ? `<a href="${s}" target="_blank" class="text-brand-teal underline">External Link</a>` : s}</li>`).join('')}
                </ul>`;
            } else {
                list.innerHTML = '<p class="text-sm text-slate-400">No specific sources listed in dataset.</p>';
            }

            document.getElementById('sourceModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('sourceModal').classList.add('hidden');
        }

        function exportCSV() {
            // Header
            let csv = 'Brand,Tier,ClaimType,VerificationDepth,Substitutability,Notes\n';
            
            // Rows
            filteredData.forEach(row => {
                // Escape commas in text
                const notes = row.notes.replace(/,/g, ';');
                csv += `${row.brand},${row.tier},${row.claimType},${row.verificationDepth},${row.substitutability},"${notes}"\n`;
            });

            // Trigger Download
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.setAttribute('hidden', '');
            a.setAttribute('href', url);
            a.setAttribute('download', 'competitor_landscape.csv');
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        // Close modal on outside click
        window.onclick = function(event) {
            const modal = document.getElementById('sourceModal');
            if (event.target == modal) {
                closeModal();
            }
        }

    </script>
</body>