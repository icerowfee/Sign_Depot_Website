<div x-data="productCarousel()" class="relative w-2/4 max-w-6xl mx-auto mt-8 px-8">
    <!-- Navigation Button - Left -->
    <button 
        @click="prev()"
        class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-4 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2"
        aria-label="Previous">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    <!-- Carousel Container -->
    <div class="relative h-[500px] flex items-center justify-center overflow-hidden">
        <div class="relative w-full h-full flex items-center justify-center" style="perspective: 1200px;">
            <template x-for="(product, index) in products" :key="index">
                <div
                    x-show="isVisible(index)"
                    class="absolute transition-all duration-700 ease-out"
                    :class="{
                        'z-30': getPosition(index) === 0,
                        'z-10': getPosition(index) !== 0
                    }"
                    :style="{
                        transform: getTransform(index),
                        opacity: getOpacity(index)
                    }">
                    
                    <!-- Product Card -->
                    <div 
                        class="bg-white rounded-2xl shadow-xl transition-all duration-700 flex flex-col"
                        :class="{
                            'w-80 h-[450px]': getPosition(index) === 0,
                            'w-64 h-[380px]': getPosition(index) !== 0
                        }">
                        
                        <!-- Image Container -->
                        <div 
                            class="relative overflow-hidden bg-gray-100 flex-shrink-0"
                            :class="{
                                'h-[280px]': getPosition(index) === 0,
                                'h-[230px]': getPosition(index) !== 0
                            }">
                            <img 
                                :src="product.image" 
                                :alt="product.name"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                loading="lazy">
                            
                            <!-- Overlay on side cards -->
                            <div 
                                x-show="getPosition(index) !== 0"
                                class="absolute inset-0 bg-black/20 transition-opacity duration-700">
                            </div>

                            <!-- Featured Badge for center card -->
                            <div 
                                x-show="getPosition(index) === 0"
                                class="absolute top-4 right-4 bg-[#ED3236] text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                                Featured
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div 
                            class="p-5 transition-all duration-700 flex flex-col flex-grow"
                            :class="{
                                'opacity-100': getPosition(index) === 0,
                                'opacity-70': getPosition(index) !== 0
                            }">
                            <h3 
                                class="font-bold text-gray-800 mb-2 transition-all duration-700"
                                :class="{
                                    'text-xl': getPosition(index) === 0,
                                    'text-base': getPosition(index) !== 0
                                }"
                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"
                                x-text="product.name">
                            </h3>
                            
                            <p 
                                class="text-gray-600 mb-3 transition-all duration-700 flex-grow"
                                :class="{
                                    'text-sm': getPosition(index) === 0,
                                    'text-xs': getPosition(index) !== 0
                                }"
                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"
                                x-text="product.description">
                            </p>

                            <!-- View Details Button - Only show on center card -->
                            <button 
                                x-show="getPosition(index) === 0"
                                @click="viewDetails(product)"
                                class="w-full bg-[#ED3236] hover:bg-red-700 text-white font-semibold py-2.5 rounded-lg transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Navigation Button - Right -->
    <button 
        @click="next()"
        class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-4 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2"
        aria-label="Next">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <!-- Dots Indicator -->
    <div class="flex justify-center gap-2 mt-8">
        <template x-for="(product, index) in products" :key="index">
            <button
                @click="goTo(index)"
                class="transition-all duration-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2"
                :class="{
                    'w-12 h-3 bg-[#ED3236]': index === currentIndex,
                    'w-3 h-3 bg-gray-300 hover:bg-gray-400': index !== currentIndex
                }"
                :aria-label="'Go to slide ' + (index + 1)">
            </button>
        </template>
    </div>
</div>

<script>
function productCarousel() {
    return {
        currentIndex: 0,
        products: window.carouselProducts || [],
        
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
            
            if (position === 0) {
                // Center card - larger and in front
                return 'translateX(0) scale(1) rotateY(0deg)';
            } else if (position === -1) {
                // Left card - smaller and pushed back
                return 'translateX(-85%) scale(0.85) rotateY(8deg)';
            } else if (position === 1) {
                // Right card - smaller and pushed back
                return 'translateX(85%) scale(0.85) rotateY(-8deg)';
            }
            
            // Cards further away
            return position < 0 
                ? 'translateX(-100%) scale(0.7)' 
                : 'translateX(100%) scale(0.7)';
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
            // Handle view details action
            console.log('View details for:', product);
            // You can redirect or open a modal here
            // window.location.href = '/products/' + product.id;
        }
    }
}
</script>
