<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q'WELL Strategic Research Brief | Insights</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('images/logo/app-logo.png') }}" type="image/png">
    
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('css/qwell/section1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/qwell/section2.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Plotly.js -->
    <script src="https://cdn.plot.ly/plotly-2.27.0.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/qwell/section1.js') }}" defer></script>
    <script src="{{ asset('js/qwell/section2.js') }}" defer></script>
    
    <style>
        /* Preloader Styles */
        #qwell-preloader {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100vw; height: 100vh;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s;
        }
        #qwell-preloader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        .loader-spin {
            border: 6px solid #E5E7EB;
            border-top: 6px solid #06B6D4;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
        .qwell-loading-text {
            margin-top: 1.5rem;
            font-size: 1.2rem;
            font-family: 'Inter', sans-serif;
            color: #2563EB;
            letter-spacing: 0.04em;
            text-align: center;
            font-weight: 600;
        }
    </style>

    <script>
        // Show preloader until page is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Hide it a bit after window load for smoothness
            window.addEventListener('load', function() {
                setTimeout(function() {
                    document.getElementById('qwell-preloader').classList.add('hidden');
                }, 600); // 600 ms for feeling smooth
            });
        });
    </script>

    <!-- 
        Palette Used: "Electric Blue & Clinical White" from "Colour Combinations" (vibrant/professional adaptation).
        Colors: #0B6E99 (Deep Blue), #06B6D4 (Cyan), #F59E0B (Gold).
        NO SVG used. NO Mermaid JS used.
    -->
    <!--
        Narrative Plan:
        1. Intro: The Strategic Mandate.
        2. Environment: Urban impact on skin (The "Why").
        3. Regulation: The breakdown of trust (The "Gap").
        4. Psychology: Skintimidation (The "Tension").
        5. Solution: Clinical Halal (The "Bridge").
        6. Market: Premium Local vs Global (The "Battleground").
        7. Conclusion: The Core Question.
    -->
</head>
<body class="antialiased">

    <!-- Preloader Animation -->
    <div id="qwell-preloader">
        <div class="flex flex-col items-center">
            <div class="loader-spin"></div>
            <div class="qwell-loading-text">Loading Insights...</div>
        </div>
    </div>

    <!-- Header -->
    @include('qwell.components.header')
    @include('qwell.components.overview')
    @include('qwell.components.methodology')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-5">

        <!-- Full Size Accordion Toggle Button -->
        <div class="flex w-full">
            <button id="qwell-fullsize-1"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 1</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section1')

        <div class="flex w-full">
            <button id="qwell-fullsize-2"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 2</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon-2" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section2')

        <div class="flex w-full">
            <button id="qwell-fullsize-3"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 3</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon-3" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section3')

        <div class="flex w-full">
            <button id="qwell-fullsize-4"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 4</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon-4" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section4')

        <div class="flex w-full">
            <button id="qwell-fullsize-5"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 5</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon-5" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section5')

        <div class="flex w-full">
            <button id="qwell-fullsize-6"
                class="flex items-center gap-2 px-4 py-4 font-semibold text-base bg-white border border-gray-300 rounded-lg
                    shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between"
                aria-expanded="false"
                aria-controls="qwell-fullsize-content"
                style="cursor: pointer; min-height: 56px;">
                <span>Section 6</span>
                <span class="flex-1"></span>
                <span class="flex justify-end">
                    <svg id="qwell-chevron-icon-6" class="transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" style="">
                        <path d="M7 14l5-5 5 5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
        
        @include('qwell.contents.section6')

    </main>

</body>
</html>