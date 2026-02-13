<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q'WELL Strategic Research Brief | Insights</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('images/logo/qwell-logo.png') }}" type="image/png">
    
    <!-- custom style -->

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
    
    <style>
        /* Blur overlay for popup */
        #qwell-blur-bg {
            position: fixed;
            z-index: 998;
            inset: 0;
            width: 100vw;
            height: 100vh;
            backdrop-filter: blur(8px);
            background: rgba(241,245,249,0.45); /* slight light overlay for usability */
            opacity: 1;
            transition: backdrop-filter 0.5s cubic-bezier(.4,0,.2,1), opacity 0.5s cubic-bezier(.4,0,.2,1); /* smooth transition */
        }
        #qwell-blur-bg.smooth-unblur {
            backdrop-filter: blur(0px);
            opacity: 0;
        }
        #qwell-blur-bg.hidden {
            display: none !important;
        }

        #qwell-password-popup {
            z-index: 999;
        }

        #qwell-success-message {
            display: none;
        }
        #qwell-success-message.active {
            display: flex;
            animation: fadeSuccess 0.6s;
        }
        @keyframes fadeSuccess {
            from { opacity: 0; transform: translateY(10px);}
            to { opacity: 1; transform: none;}
        }

        body.password-locked main,
        body.password-locked .antialiased > *:not(#qwell-blur-bg):not(#qwell-password-popup){
            pointer-events: none;
            user-select: none;
        }
        /* Hide popup by default, show blur immediately */
        #qwell-blur-bg {
            visibility: visible;
            opacity: 1;
            transition: backdrop-filter 0.5s cubic-bezier(.4,0,.2,1), opacity 0.5s cubic-bezier(.4,0,.2,1);
        }
        #qwell-password-popup {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.45s cubic-bezier(.4,0,.2,1), visibility 0s linear 0.45s;
        }
        #qwell-blur-bg.qwell-show, #qwell-password-popup.qwell-show {
            visibility: visible;
            opacity: 1;
            transition: opacity 0.45s cubic-bezier(.4,0,.2,1), visibility 0s;
        }


        /* Back to Top Floating Button */
        #qwell-back-to-top {
            position: fixed;
            bottom: 32px;
            right: 32px;
            z-index: 950;
            display: none;
            background: #F59E0B;
            color: #fff;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            box-shadow: 0 4px 24px 0 rgba(0,0,0,0.18);
            align-items: center;
            justify-content: center;
            transition: opacity 0.25s cubic-bezier(.4,0,.2,1), visibility 0.2s;
            cursor: pointer;
        }
        #qwell-back-to-top.show {
            display: flex;
            opacity: 1;
        }
        #qwell-back-to-top:active {
            background: #fbbf24;
        }
        @media (max-width: 600px) {
            #qwell-back-to-top {
                bottom: 18px;
                right: 18px;
                width: 46px;
                height: 46px;
            }
        }
        #qwell-back-to-top svg {
            display: block;
        }
    </style>

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
    <!-- 
    <div id="qwell-blur-bg"></div>

    <div id="qwell-password-popup" class="fixed inset-0 flex items-center justify-center z-[999]">
        <div class="bg-white rounded-2xl shadow-xl px-7 py-8 max-w-md w-full border border-blue-100 flex flex-col items-center animate-fadeIn">
            <img src="{{ asset('images/logo/app-logo.png') }}" class="w-16 h-16 mb-2 object-contain" style="aspect-ratio:1/1;display:block;" alt="Logo">
            <h2 class="text-2xl font-bold text-[#0B6E99] mb-1">Masukkan Password</h2>
            <p class="text-gray-600 mb-5 text-center text-base font-normal">Halaman ini dilindungi.<br>Silakan masukkan password untuk melanjutkan.</p>
            <form id="qwell-password-form" autocomplete="off" class="w-full flex flex-col items-center gap-3">
                <input type="password" id="qwell-password-input" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#06B6D4] focus:outline-none transition" placeholder="Password..." required autocomplete="current-password">
                <span id="qwell-password-error" class="text-sm text-red-500 mt-1 mb-2 w-full hidden">Password salah. Coba lagi.</span>
                <button type="submit" class="mt-1 w-full bg-[#0B6E99] text-white font-bold py-2 rounded-lg hover:bg-[#06B6D4] transition">Masuk</button>
            </form>
        </div>
    </div>
    -->

    <!-- Back to Top Floating Button -->
    <button id="qwell-back-to-top" aria-label="Kembali ke Atas" title="Back to Top">
        <!-- Up Arrow SVG -->
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
            <circle cx="14" cy="14" r="13.5" fill="none"/>
            <path d="M14 20V10M14 10L9 15M14 10l5 5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <!-- Sukses Message popup -->
    <!-- <div id="qwell-success-message" class="fixed inset-0 flex items-center justify-center z-[999] bg-transparent pointer-events-none">
        <div class="bg-white/95 rounded-xl border border-blue-100 shadow-lg px-8 py-6 flex flex-col items-center pointer-events-auto transition">
            <svg class="mb-2" width="40" height="40" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="12" fill="#06B6D4"/>
                <path d="M7 13l3 3 7-7" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="text-lg font-semibold text-[#0B6E99] mb-2">Berhasil!</div>
            <div class="text-gray-600 text-base text-center">Password benar. Selamat datang di halaman Q'WELL.</div>
        </div>
    </div> -->

    <!--
    <script>
        // Langsung tampilkan blur saat HTML selesai parse (tanpa menunggu loading)
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('password-locked');
            document.getElementById('qwell-blur-bg').classList.add('qwell-show');

            // Popup password akan muncul sedikit terlambat biar transisinya smooth
            setTimeout(function() {
                document.getElementById('qwell-password-popup').classList.add('qwell-show');

                // Fokus ke input password begitu popup muncul
                setTimeout(function(){
                    var passInput = document.getElementById('qwell-password-input');
                    if(passInput) passInput.focus();
                }, 50);
            }, 400);

            var blurBg = document.getElementById('qwell-blur-bg');
            var popup = document.getElementById('qwell-password-popup');
            var form = document.getElementById('qwell-password-form');
            var passInput = document.getElementById('qwell-password-input');
            var errorText = document.getElementById('qwell-password-error');
            // var successMsg = document.getElementById('qwell-success-message');

            form.addEventListener('submit', function(e){
                e.preventDefault();
                // Password check logic: password is "nuisel"
                if(passInput.value.trim() === 'nuisel'){
                    // Sembunyikan popup segera
                    popup.classList.remove('qwell-show');
                    // successMsg.classList.add('active');
                    // Animate blur to clear smoothly
                    blurBg.classList.add('smooth-unblur');
                    blurBg.classList.remove('qwell-show');
                    // Remove password-locked agar bisa diinteraksi setelah blur hilang
                    setTimeout(function() {
                        blurBg.classList.add('hidden'); // pastikan hidden
                        blurBg.classList.remove('smooth-unblur');
                        document.body.classList.remove('password-locked');
                        // Hide sukses message smoothly after delay
                        setTimeout(function(){
                            // successMsg.classList.remove('active');
                        }, 1400); // show success for 1.4s (adjust as needed)
                    }, 700); // Wait for the blur transition to complete (must match CSS transition duration)
                } else {
                    errorText.classList.remove('hidden');
                    passInput.classList.add('border-red-500', 'ring', 'ring-red-300');
                    passInput.focus();
                }
            });

            passInput.addEventListener('input', function() {
                this.classList.remove('border-red-500','ring','ring-red-300');
                errorText.classList.add('hidden');
            });

            // --- BACK TO TOP BUTTON LOGIC ---
            var backToTopBtn = document.getElementById('qwell-back-to-top');
            var prevShow = false;
            function handleBackToTop() {
                // Show only after user scrolls down at least 80px
                if(window.scrollY > 0) {
                    if (!prevShow) {
                        backToTopBtn.classList.add('show');
                        prevShow = true;
                    }
                } else {
                    if (prevShow) {
                        backToTopBtn.classList.remove('show');
                        prevShow = false;
                    }
                }
            }
            window.addEventListener('scroll', handleBackToTop);
            // optional: on page load
            handleBackToTop();
            // smooth scrolling when button clicked
            backToTopBtn.addEventListener('click', function(){
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
    -->

    <!-- Header -->
    @include('qwell.components.header')
    @include('qwell.components.welcome')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-5">
        
        @php
            $sections = [
                1 => 'Strategic Question & Positioning Uncertainty',
                2 => 'Indonesia’s Skin & Scalp Structural Reality',
                3 => 'Consumer Risk Psychology & Decision Fatigue',
                4 => 'Ideal Customer Profile (ICP) & Jobs-To-Be-Done',
                5 => 'Market Validation & Conservative 2030 Outlook',
                6 => 'Competitive Structure & Claim Inflation Dynamics',
                7 => 'Proof Architecture & Regulatory Infrastructure',
                8 => 'Final Positioning Territory & Strategic Durability',
            ];
        @endphp

        @foreach ($sections as $i => $title)
            @if ($i > 0)
                <div class="flex w-full">
                    <button id="qwell-fullsize-{{ $i }}"
                        class="flex items-stretch p-0 font-semibold text-base sm:text-lg bg-white border border-gray-300 rounded-lg
                            shadow hover:bg-gray-50 active:bg-gray-100 transition-all duration-200 w-full justify-between 
                            min-h-[60px] sm:min-h-[86px] overflow-hidden"
                        aria-expanded="false"
                        aria-controls="qwell-fullsize-content"
                        style="cursor: pointer;">
                        <!-- Full-height, full-width image at the left -->
                        <div class="flex-shrink-0 w-20 h-full sm:w-36">
                            <img src="{{ asset('images/accordion-logo/section-' . $i . '.jpeg') }}"
                                 alt="Q'WELL Logo"
                                 class="w-full h-full object-cover block"
                            />
                        </div>
                        <!-- Text and right-side content -->
                        <div class="flex items-center flex-1 min-h-[60px] sm:min-h-[86px] px-3 sm:px-6 gap-2 sm:gap-3 text-left">
                            <span class="text-sm sm:text-base text-left font-bold min-w-[2ch] sm:min-w-[2ch]">{{ $i }}.</span>
                            <span class="text-sm sm:text-base text-left break-words whitespace-normal">{{ $title }}</span>
                            <span class="flex-1"></span>
                            <span class="flex justify-end">
                                <svg id="qwell-chevron-icon-{{ $i == 0 ? '' : $i }}" class="transform transition-transform duration-300" width="20" height="20" viewBox="0 0 24 24" fill="none" style="">
                                    <path d="M7 10l5 5 5-5" stroke="#0B6E99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </button>
                </div>
            @endif

            <div class="section-{{ $i }}-content">
                @include('qwell-ind.contents.section'.$i)
            </div>
        @endforeach

    </main>

</body>
</html>