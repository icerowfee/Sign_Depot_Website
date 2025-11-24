@php
    $currentRoute = Request::path();
@endphp

<header class="relative flex justify-between items-center bg-white py-6 px-4 md:px-12" x-data="{ servicesDropdown: false, mobileMenu: false }">
    <div>
        <a href="/"><img alt="" class="h-10 md:h-12" src="{{ asset('images/assets/sd-logo.png') }}"></a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:block">
        <ul class="flex space-x-4 justify-center items-center">
            <li><a class="text-lg md:text-xl px-3 md:px-4 py-2 transition-all duration-200 {{ $currentRoute === '/' ? 'text-white bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}"
                   href="/">Home</a></li>

            <!-- Services Dropdown -->
            <li @mouseenter="servicesDropdown = true" @mouseleave="servicesDropdown = false" class="relative">
                <a class="text-lg md:text-xl px-3 md:px-4 py-2 transition-all duration-200 flex items-center gap-2 {{ $currentRoute === 'services' ? 'text-white bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}"
                   href="/services">
                    Services
                    <svg :class="servicesDropdown ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-200"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </a>

                <!-- Dropdown Menu -->
                <div class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-200"
                     style="display: none;" x-show="servicesDropdown"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:leave-end="opacity-0 transform scale-95"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-150">
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=signageService">Signage</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=printingService">Printing</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=carpentryService">Carpentry</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=cncService">CNC Cutting</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=lightboxService">Lightbox</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=easyboothService">Easybooth</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=ledService">LED Screen</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=powderCoatingService">Powder Coating</a>
                </div>
            </li>

            <li><a class="text-lg md:text-xl px-3 md:px-4 py-2 transition-all duration-200 {{ $currentRoute === 'about-us' ? 'text-white bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}"
                   href="/about-us">About Us</a></li>
            <li><a class="text-lg md:text-xl px-3 md:px-4 py-2 transition-all duration-200 {{ $currentRoute === 'contact-us' ? 'text-white bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}"
                   href="/contact-us">Contact</a></li>
        </ul>
    </nav>

    <!-- Mobile Menu Button -->
    <button @click="mobileMenu = !mobileMenu"
            class="lg:hidden p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#ED3236]">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path :d="mobileMenu ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2"></path>
        </svg>
    </button>

    <!-- Mobile Navigation -->
    <div class="lg:hidden absolute top-full left-0 right-0 bg-white shadow-lg border-t border-gray-200 z-40"
         style="display: none;" x-show="mobileMenu" x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter="transition ease-out duration-300"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200">
        <ul class="flex flex-col py-4">
            <li><a @click="mobileMenu = false"
                   class="block px-6 py-3 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150 {{ $currentRoute === '/' ? 'bg-[#ED3236] text-white' : '' }}"
                   href="/">Home</a></li>

            <!-- Services Dropdown for Mobile -->
            <li class="relative">
                <button @click="servicesDropdown = !servicesDropdown"
                        class="w-full text-left px-6 py-3 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150 flex items-center justify-between">
                    Services
                    <svg :class="servicesDropdown ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-200"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>

                <!-- Mobile Dropdown Menu -->
                <div class="bg-gray-50 overflow-hidden" style="display: none;" x-show="servicesDropdown"
                     x-transition:enter-end="opacity-100 max-h-96" x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter="transition ease-out duration-200" x-transition:leave-end="opacity-0 max-h-0"
                     x-transition:leave-start="opacity-100 max-h-96"
                     x-transition:leave="transition ease-in duration-150">
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=signageService">Signage</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=printingService">Printing</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=carpentryService">Carpentry</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=cncService">CNC Cutting</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=lightboxService">Lightbox</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=easyboothService">Easybooth</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=ledService">LED Screen</a>
                    <a @click="mobileMenu = false"
                       class="block px-8 py-2 text-base text-gray-600 hover:bg-[#ED3236] hover:text-white transition-colors duration-150"
                       href="/services?service=powderCoatingService">Powder Coating</a>
                </div>
            </li>

            <li><a @click="mobileMenu = false"
                   class="block px-6 py-3 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150 {{ $currentRoute === 'about-us' ? 'bg-[#ED3236] text-white' : '' }}"
                   href="/about-us">About Us</a></li>
            <li><a @click="mobileMenu = false"
                   class="block px-6 py-3 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150 {{ $currentRoute === 'contact-us' ? 'bg-[#ED3236] text-white' : '' }}"
                   href="/contact-us">Contact</a></li>
        </ul>
    </div>
</header>
