<div class="relative w-full md:w-3/4 lg:w-2/4 max-w-6xl mx-auto mt-8 px-4 md:px-8" x-data="productCarousel()">
    <!-- Navigation Button - Left -->
    <button @click="prev()" aria-label="Previous"
            class="absolute -left-2 md:left-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-3 md:p-4 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2">
        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" />
        </svg>
    </button>

    <!-- Carousel Container -->
    <div class="relative min-h-[500px] md:h-[500px] flex items-center justify-center overflow-hidden">
        <div :style="`perspective: ${window.innerWidth < 768 ? '800px' : '1200px'}; perspective-origin: center center;`"
             class="relative w-full h-full flex items-center justify-center">
            <template :key="index" x-for="(product, index) in products">
                <div
                     :class="{
                         'z-30': getPosition(index) === 0,
                         'z-10': getPosition(index) !== 0
                     }"
                     :style="{
                         transform: getTransform(index),
                         opacity: getOpacity(index)
                     }"
                     class="absolute transition-all duration-700 ease-out" x-show="isVisible(index)">

                    <!-- Product Card -->
                    <div :class="{
                        'w-72 md:w-80 h-[400px] md:h-[450px]': getPosition(index) === 0,
                        'w-56 md:w-64 h-[340px] md:h-[380px]': getPosition(index) !== 0
                    }"
                         class="bg-white rounded-2xl shadow-xl transition-all duration-700 flex flex-col mx-2">

                        <!-- Image Container -->
                        <div :class="{
                            'h-[240px] md:h-[280px]': getPosition(index) === 0,
                            'h-[200px] md:h-[230px]': getPosition(index) !== 0
                        }"
                             class="relative overflow-hidden bg-gray-100 flex-shrink-0 rounded-t-2xl">
                            <img :alt="product.name" :src="product.image"
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                 loading="lazy">

                            <!-- Overlay on side cards -->
                            <div class="absolute inset-0 bg-black/20 transition-opacity duration-700"
                                 x-show="getPosition(index) !== 0">
                            </div>

                            <!-- Featured Badge for center card -->
                            <div class="absolute top-3 md:top-4 right-3 md:right-4 bg-[#ED3236] text-white px-2 md:px-3 py-1 rounded-full text-xs md:text-sm font-semibold shadow-lg"
                                 x-show="getPosition(index) === 0">
                                Featured
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div :class="{
                            'opacity-100': getPosition(index) === 0,
                            'opacity-70': getPosition(index) !== 0
                        }"
                             class="p-4 md:p-5 transition-all duration-700 flex flex-col flex-grow">
                            <h3 :class="{
                                'text-lg md:text-xl': getPosition(index) === 0,
                                'text-sm md:text-base': getPosition(index) !== 0
                            }"
                                class="font-bold text-gray-800 mb-2 transition-all duration-700"
                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"
                                x-text="product.name">
                            </h3>

                            <p :class="{
                                'text-sm md:text-sm': getPosition(index) === 0,
                                'text-xs md:text-xs': getPosition(index) !== 0
                            }"
                               class="text-gray-600 mb-3 transition-all duration-700 flex-grow"
                               style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"
                               x-text="product.description">
                            </p>

                            <!-- View Details Button - Only show on center card -->
                            <button @click="viewDetails(product)"
                                    class="w-full bg-[#ED3236] hover:bg-red-700 text-white font-semibold py-2 md:py-2.5 rounded-lg transition-all duration-300 hover:shadow-lg transform hover:scale-105 text-sm md:text-base"
                                    x-show="getPosition(index) === 0">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Navigation Button - Right -->
    <button @click="next()" aria-label="Next"
            class="absolute -right-2 md:right-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-3 md:p-4 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2">
        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" />
        </svg>
    </button>

    <!-- Dots Indicator -->
    <div class="flex justify-center gap-2 mt-6 md:mt-8">
        <template :key="index" x-for="(product, index) in products">
            <button
                    :aria-label="'Go to slide ' + (index + 1)"
                    :class="{
                        'w-10 md:w-12 h-2.5 md:h-3 bg-[#ED3236]': index === currentIndex,
                        'w-2.5 md:w-3 h-2.5 md:h-3 bg-gray-300 hover:bg-gray-400': index !== currentIndex
                    }"
                    @click="goTo(index)"
                    class="transition-all duration-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2">
            </button>
        </template>
    </div>

    <!-- Product Details Modal -->
    <div @click="closeModal" @keydown.escape.window="closeModal"
         class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50" x-show="showModal"
         x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
         x-transition:enter="transition ease-out duration-300" x-transition:leave-end="opacity-0"
         x-transition:leave-start="opacity-100" x-transition:leave="transition ease-in duration-200">

        <!-- Close button -->
        <button @click.stop="closeModal" class="absolute top-4 right-4 text-white hover:text-gray-300 z-60">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
        </button>

        <!-- Modal Content -->
        <div @click.stop class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-hidden">
            <div class="flex flex-col md:flex-row max-h-[90vh]">
                <!-- Image Section -->
                <div class="md:w-1/2 flex-shrink-0">
                    <div class="relative h-48 sm:h-64 md:h-full min-h-[250px] md:min-h-[300px]">
                        <img :alt="selectedProduct?.name" :src="selectedProduct?.image"
                             class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="md:w-1/2 p-4 sm:p-6 md:p-8 flex flex-col overflow-y-auto">
                    <div class="flex-grow">
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 mb-3 md:mb-4"
                            x-text="selectedProduct?.name">
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-base md:text-lg leading-relaxed mb-4 md:mb-6"
                           x-text="selectedProduct?.description"></p>

                        <!-- Project Details -->
                        <div class="space-y-3 md:space-y-4">
                            <template :key="feature" x-for="feature in selectedProduct?.features">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-[#ED3236] rounded-full mr-3 flex-shrink-0"></div>
                                    <span class="text-gray-700 text-sm md:text-base" x-text="feature"></span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 mt-4 md:mt-6">
                        <a class="flex-1 bg-[#ED3236] hover:bg-red-700 text-white font-semibold py-2.5 md:py-3 px-4 md:px-6 rounded-lg transition-all duration-300 hover:shadow-lg text-center text-sm md:text-base"
                           href="/services">
                            View Our Services
                        </a>
                        <a class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-2.5 md:py-3 px-4 md:px-6 rounded-lg transition-all duration-300 text-center text-sm md:text-base"
                           href="/contact-us">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function productCarousel() {
        return {
            currentIndex: 0,
            products: window.carouselProducts || [],
            showModal: false,
            selectedProduct: null,

            init() {
                // Auto-rotate every 5 seconds (optional)
                // setInterval(() => this.next(), 5000);
            },

            getPosition(index) {
                const diff = index - this.currentIndex;
                const total = this.products.length;

                // Normalize position to handle circular array
                let position = diff;
                if (diff > total / 2) position = diff - total;
                if (diff < -total / 2) position = diff + total;

                return position;
            },

            isVisible(index) {
                const position = this.getPosition(index);
                return Math.abs(position) <= 1; // Show center and adjacent cards
            },

            getTransform(index) {
                const position = this.getPosition(index);
                const isMobile = window.innerWidth < 768; // md breakpoint

                if (position === 0) {
                    // Center card - larger and in front
                    return 'translateX(0) scale(1) rotateY(0deg)';
                } else if (position === -1) {
                    // Left card - smaller and pushed back
                    const translateX = isMobile ? '-75%' : '-85%';
                    const rotateY = isMobile ? '5deg' : '8deg';
                    return `translateX(${translateX}) scale(0.85) rotateY(${rotateY})`;
                } else if (position === 1) {
                    // Right card - smaller and pushed back
                    const translateX = isMobile ? '75%' : '85%';
                    const rotateY = isMobile ? '-5deg' : '-8deg';
                    return `translateX(${translateX}) scale(0.85) rotateY(${rotateY})`;
                }

                // Cards further away
                const translateX = position < 0 ? '-100%' : '100%';
                return `translateX(${translateX}) scale(0.7)`;
            },

            getOpacity(index) {
                const position = this.getPosition(index);
                return Math.abs(position) <= 1 ? 1 : 0;
            },

            next() {
                this.currentIndex = (this.currentIndex + 1) % this.products.length;
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.products.length) % this.products.length;
            },

            goTo(index) {
                this.currentIndex = index;
            },

            viewDetails(product) {
                this.selectedProduct = product;
                this.showModal = true;
                document.body.style.overflow = 'hidden';
            },

            closeModal() {
                this.showModal = false;
                this.selectedProduct = null;
                document.body.style.overflow = 'auto';
            }
        }
    }
</script>
