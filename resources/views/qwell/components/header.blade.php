<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between relative">
        <!-- Mobile: Flex row, Logo-Confidential-Logo. Desktop: Cluster left, access-notice and logo right -->
        <!-- Mobile Layout -->
        <div class="flex w-full items-center md:hidden relative">
            <!-- Logo Left -->
            <img src="{{ asset('images/logo/qwell-text-logo.png') }}" alt="Q'WELL Logo Left"
                 class="w-8 h-8 object-contain"
                 style="aspect-ratio:1/1; display:block;"
            />
            <!-- Confidential Brand Insights, centered -->
            <span class="mx-auto font-light text-gray-500 text-base truncate text-center block" style="white-space:nowrap;">
                Confidential Brand Insights
            </span>
            <!-- Logo Right -->
            <img src="{{ asset('images/logo/app-logo.png') }}" alt="Q'WELL Logo Right"
                 class="w-8 h-8 object-contain"
                 style="aspect-ratio:1/1; display:block;"
            />
        </div>
        <!-- Desktop Layout (md+) -->
        <div class="hidden md:flex w-full items-center justify-between">
            <!-- Left: Logo + Text -->
            <div class="flex items-center min-w-0">
                <img src="{{ asset('images/logo/qwell-text-logo.png') }}" alt="Q'WELL Logo Left"
                     class="w-12 h-12 object-contain"
                     style="aspect-ratio:1/1; display:block;"
                />
                <span class="ml-5 font-light text-gray-700 text-xl font-normal truncate text-left block" style="white-space:nowrap;">
                    Confidential Brand Insights
                </span>
            </div>
            <!-- Right: Access Notice and Logo Right -->
            <div class="flex items-center min-w-0">
                <span class="text-base font-semibold tracking-tight text-[#0B6E99] bg-white/95 border border-gray-200 rounded px-4 py-1 shadow mr-5" style="white-space: nowrap;">
                    Access protected &middot; Not for distribution
                </span>
                <img src="{{ asset('images/logo/app-logo.png') }}" alt="Q'WELL Logo Right"
                     class="w-12 h-12 object-contain" 
                     style="aspect-ratio:1/1; display:block;"
                />
            </div>
        </div>
    </div>
    <!-- Mobile: Floating bottom access notice -->
    <div class="md:hidden fixed bottom-3 left-0 w-full flex justify-center z-50 pointer-events-none">
        <div class="bg-white/95 border border-gray-200 shadow-lg rounded-lg px-4 py-2 text-xs font-semibold text-gray-500 pointer-events-auto">
            Access protected &middot; Not for distribution
        </div>
    </div>
</header>

<header style="background-color: #f0f757;" class="shadow-md top-0 z-80">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-3 flex items-center justify-center text-center h-6 md:h-10 transition-all duration-200">
        <span class="block text-base sm:text-xl px-2 font-extrabold tracking-tight text-[#0B6E99] text-center w-full">
            <span class="font-semibold text-gray-700">
                Prepared exclusively for Q’WELL
            </span>
        </span>
    </div>
</header>