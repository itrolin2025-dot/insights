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
            tooltip: commonTooltipConfig,
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
            tooltip: commonTooltipConfig,
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
            tooltip: commonTooltipConfig,
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
            tooltip: commonTooltipConfig,
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