@php
    $currentRoute = Request::path();
@endphp

<header class="flex justify-between items-center bg-white py-6 px-12" x-data="{ servicesDropdown: false }">
    <div>
        <a href="/"><img class="h-12" src="{{ asset('images/assets/sd-logo.png') }}" alt=""></a>
    </div>
    
    <nav>
        <ul class="flex space-x-4 justify-center items-center">
            <li><a href="/" class="text-xl px-4 py-2 transition-all duration-200 {{ $currentRoute === '/' ? 'text-white  bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}">Home</a></li>
            
            <!-- Services Dropdown -->
            <li class="relative" @mouseenter="servicesDropdown = true" @mouseleave="servicesDropdown = false">
                <a href="/services" class="text-xl px-4 py-2 transition-all duration-200 flex items-center gap-2 {{ $currentRoute === 'services' ? 'text-white  bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}">
                    Services
                    <svg class="w-4 h-4 transition-transform duration-200" :class="servicesDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                
                <!-- Dropdown Menu -->
                <div x-show="servicesDropdown" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-95"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-200"
                     style="display: none;">
                    <a href="/services?service=signageService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Signage</a>
                    <a href="/services?service=printingService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Printing</a>
                    <a href="/services?service=carpentryService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Carpentry</a>
                    <a href="/services?service=cncService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">CNC Cutting</a>
                    <a href="/services?service=lightboxService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Lightbox</a>
                    <a href="/services?service=easyboothService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Easybooth</a>
                    <a href="/services?service=ledService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">LED Screen</a>
                    <a href="/services?service=powderCoatingService" class="block px-4 py-2 text-lg text-gray-700 hover:bg-[#ED3236] hover:text-white transition-colors duration-150">Powder Coating</a>
                </div>
            </li>
            
            <li><a href="/about-us" class="text-xl px-4 py-2 transition-all duration-200 {{ $currentRoute === 'about-us' ? 'text-white  bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}">About Us</a></li>
            <li><a href="/contact-us" class="text-xl px-4 py-2 transition-all duration-200 {{ $currentRoute === 'contact-us' ? 'text-white  bg-[#ED3236] font-bold rounded-md' : 'hover:text-red-700 hover:bg-white font-medium hover:rounded-md' }}">Contact</a></li>
        </ul>
    </nav>
</header>
