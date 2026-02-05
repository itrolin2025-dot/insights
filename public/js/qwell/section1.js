

    // --- UTILITY: Label Wrapping ---
    function wrapLabel(str, maxLen = 16) {
        if (str.length <= maxLen) return str;
        const words = str.split(' ');
        const lines = [];
        let currentLine = words[0];

        for (let i = 1; i < words.length; i++) {
            if ((currentLine + " " + words[i]).length <= maxLen) {
                currentLine += " " + words[i];
            } else {
                lines.push(currentLine);
                currentLine = words[i];
            }
        }
        lines.push(currentLine);
        return lines;
    }

    // --- UTILITY: Tooltip Configuration ---
    const commonTooltipConfig = {
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

    // --- CHART 1: Urban Impact (Bar Chart) ---
    const ctxUrban = document.getElementById('urbanChart').getContext('2d');
    new Chart(ctxUrban, {
        type: 'bar',
        data: {
            labels: ['Scalp Inflammation', 'Barrier Damage', 'Dehydration', 'Premature Aging'].map(l => wrapLabel(l)),
            datasets: [
                {
                    label: 'Urban (Jakarta)',
                    data: [85, 92, 78, 65],
                    backgroundColor: '#0B6E99',
                    borderRadius: 4
                },
                {
                    label: 'Rural Areas',
                    data: [30, 45, 35, 25],
                    backgroundColor: '#A0AEC0',
                    borderRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'top' },
                tooltip: commonTooltipConfig,
                title: { display: true, text: 'Prevalence of Conditions (%)' }
            },
            scales: {
                y: { beginAtZero: true, max: 100 }
            }
        }
    });

    // --- CHART 2: Regulatory Trust (Mixed Chart) ---
    const ctxReg = document.getElementById('regulatoryChart').getContext('2d');
    new Chart(ctxReg, {
        type: 'bar',
        data: {
            labels: ['2021', '2022', '2023', '2024', '2025 (Est)'],
            datasets: [
                {
                    type: 'line',
                    label: 'Consumer Trust Index',
                    data: [80, 75, 60, 45, 30],
                    borderColor: '#06B6D4',
                    backgroundColor: '#06B6D4',
                    borderWidth: 3,
                    tension: 0.4,
                    yAxisID: 'y'
                },
                {
                    type: 'bar',
                    label: 'BPOM Recalls/Warnings',
                    data: [120, 150, 210, 300, 450],
                    backgroundColor: '#F59E0B',
                    borderRadius: 4,
                    yAxisID: 'y1'
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: commonTooltipConfig,
                title: { display: true, text: 'The Trust Gap: Incidents vs. Confidence' }
            },
            scales: {
                y: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                    title: { display: true, text: 'Trust Index (0-100)' }
                },
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    grid: { drawOnChartArea: false },
                    title: { display: true, text: 'Number of Recalls' }
                }
            }
        }
    });

    // --- CHART 3: Skintimidation (Radar Chart) ---
    const ctxRadar = document.getElementById('radarChart').getContext('2d');
    new Chart(ctxRadar, {
        type: 'radar',
        data: {
            labels: ['Confusion', 'Fear of Ingredients', 'Trust in Science', 'Brand Loyalty', 'Knowledge'].map(l => wrapLabel(l)),
            datasets: [{
                label: 'Current Consumer Sentiment',
                data: [90, 85, 40, 30, 50],
                fill: true,
                backgroundColor: 'rgba(245, 158, 11, 0.2)',
                borderColor: '#F59E0B',
                pointBackgroundColor: '#F59E0B',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: '#F59E0B'
            }, {
                label: 'Desired State (Q\'WELL)',
                data: [20, 10, 95, 90, 95],
                fill: true,
                backgroundColor: 'rgba(6, 182, 212, 0.2)',
                borderColor: '#06B6D4',
                pointBackgroundColor: '#06B6D4',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: '#06B6D4'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: commonTooltipConfig
            },
            scales: {
                r: {
                    angleLines: { display: true },
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }
        }
    });

    // --- CHART 4: Clinical Halal (Plotly Sunburst) ---
    // Using Plotly for a hierarchical view of the "New Trust" components
    const sunburstData = [{
        type: "sunburst",
        labels: ["Trust Infrastructure", "Clinical Efficacy", "Halal Purity", "Dermatologist Tested", "Proven Results", "Clean Ingredients", "Ethical Sourcing"],
        parents: ["", "Trust Infrastructure", "Trust Infrastructure", "Clinical Efficacy", "Clinical Efficacy", "Halal Purity", "Halal Purity"],
        values:  [100, 50, 50, 25, 25, 25, 25],
        outsidetextfont: {size: 14, color: "#102A43"},
        leaf: {opacity: 0.4},
        marker: {line: {width: 2}, colors: ["#FFFFFF", "#0B6E99", "#06B6D4", "#E0F7FA", "#E0F7FA", "#E0F2F1", "#E0F2F1"]},
        branchvalues: 'total'
    }];

    const sunburstLayout = {
        margin: {l: 0, r: 0, b: 0, t: 0},
        paper_bgcolor: 'rgba(0,0,0,0)',
        plot_bgcolor: 'rgba(0,0,0,0)',
        width: null, // Let container dictate
        height: 400
    };

    // Ensure container exists before plotting
    if(document.getElementById('sunburstChart')) {
        Plotly.newPlot('sunburstChart', sunburstData, sunburstLayout, {responsive: true, displayModeBar: false});
    }

    // --- CHART 5: Premium Positioning (Grouped Bar) ---
    const ctxPremium = document.getElementById('premiumChart').getContext('2d');
    new Chart(ctxPremium, {
        type: 'bar',
        data: {
            labels: ['Ingredient Safety', 'R&D Quality', 'Ethical Values', 'Worth the Price'].map(l => wrapLabel(l)),
            datasets: [
                {
                    label: 'Global Premium Brands',
                    data: [95, 95, 70, 85],
                    backgroundColor: '#102A43',
                    barPercentage: 0.6,
                },
                {
                    label: 'Q\'WELL (Target)',
                    data: [95, 90, 95, 90], // High safety + High Ethics
                    backgroundColor: '#06B6D4',
                    barPercentage: 0.6,
                },
                {
                    label: 'Local Mass Market',
                    data: [60, 50, 80, 70],
                    backgroundColor: '#E2E8F0',
                    barPercentage: 0.6,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: commonTooltipConfig,
                title: { display: true, text: 'Trust Drivers: How to Win the Rp 500k+ Segment' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: { display: true, text: 'Consumer Trust Score' }
                }
            }
        }
    });