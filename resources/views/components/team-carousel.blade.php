<div x-data="teamCarousel()" x-init="init()" class="relative w-full max-w-5xl mx-auto py-8">
    <!-- Main Carousel Container -->
    <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-gray-900">
        <!-- Images Container -->
        <div class="relative h-[500px]">
            <template x-for="(image, index) in images" :key="index">
                <div
                    x-show="currentIndex === index"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform translate-x-full"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    x-transition:leave="transition ease-in duration-700"
                    x-transition:leave-start="opacity-100 transform translate-x-0"
                    x-transition:leave-end="opacity-0 transform -translate-x-full"
                    class="absolute inset-0">
                    
                    <!-- Image -->
                    <img 
                        :src="image.src" 
                        :alt="image.alt"
                        class="w-full h-full object-cover">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    
                    <!-- Caption -->
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <h3 class="text-3xl font-bold mb-2" x-text="image.title"></h3>
                        <p class="text-lg text-gray-200" x-text="image.description"></p>
                    </div>

                    <!-- Image Counter -->
                    <div class="absolute top-6 right-6 bg-black/50 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <span x-text="index + 1"></span> / <span x-text="images.length"></span>
                    </div>
                </div>
            </template>
        </div>

        <!-- Navigation Buttons -->
        <button 
            @click="prev()"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 group"
            aria-label="Previous">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <button 
            @click="next()"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-[#ED3236] text-gray-800 hover:text-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 group"
            aria-label="Next">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>

    <!-- Thumbnail Navigation -->
    <div class="flex justify-center gap-3 mt-6 flex-wrap">
        <template x-for="(image, index) in images" :key="index">
            <button
                @click="goTo(index)"
                class="relative overflow-hidden rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2 group"
                :class="{
                    'ring-4 ring-[#ED3236] scale-110': index === currentIndex,
                    'opacity-60 hover:opacity-100': index !== currentIndex
                }">
                <img 
                    :src="image.src" 
                    :alt="image.alt"
                    class="h-16 w-24 object-cover">
                
                <!-- Active Indicator -->
                <div 
                    x-show="index === currentIndex"
                    class="absolute inset-0 bg-[#ED3236]/30 border-2 border-[#ED3236]">
                </div>
            </button>
        </template>
    </div>

    {{-- <!-- Progress Bar -->
    <div class="mt-6 bg-gray-200 rounded-full h-1.5 overflow-hidden">
        <div 
            class="bg-[#ED3236] h-full transition-all duration-100 ease-linear"
            :style="`width: ${progress}%`">
        </div>
    </div>

    <!-- Play/Pause Button -->
    <div class="flex justify-center mt-4">
        <button
            @click="toggleAutoplay()"
            class="flex items-center gap-2 px-6 py-2 bg-gray-100 hover:bg-gray-200 rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#ED3236] focus:ring-offset-2">
            <template x-if="isPlaying">
                <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
                </svg>
            </template>
            <template x-if="!isPlaying">
                <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </template>
            <span class="text-sm font-medium text-gray-700" x-text="isPlaying ? 'Pause' : 'Play'"></span>
        </button>
    </div> --}}
</div>

<script>
function teamCarousel() {
    return {
        currentIndex: 0,
        images: window.teamImages || [],
        isPlaying: true,
        autoplayInterval: null,
        progressInterval: null,
        progress: 0,
        autoplayDuration: 10500, // 10.5 seconds
        
        init() {
            if (this.images.length > 0) {
                this.startAutoplay();
            }
        },

        startAutoplay() {
            this.isPlaying = true;
            this.progress = 0;
            
            // Clear existing intervals
            if (this.autoplayInterval) clearInterval(this.autoplayInterval);
            if (this.progressInterval) clearInterval(this.progressInterval);
            
            // Progress bar animation
            this.progressInterval = setInterval(() => {
                this.progress += (100 / (this.autoplayDuration / 100));
                if (this.progress >= 100) {
                    this.progress = 0;
                }
            }, 100);
            
            // Slide change
            this.autoplayInterval = setInterval(() => {
                this.next();
            }, this.autoplayDuration);
        },

        stopAutoplay() {
            this.isPlaying = false;
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = null;
            }
            if (this.progressInterval) {
                clearInterval(this.progressInterval);
                this.progressInterval = null;
            }
        },

        toggleAutoplay() {
            if (this.isPlaying) {
                this.stopAutoplay();
            } else {
                this.startAutoplay();
            }
        },

        next() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            this.progress = 0;
        },

        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            this.progress = 0;
            
            // Restart autoplay if it was playing
            if (this.isPlaying) {
                this.startAutoplay();
            }
        },

        goTo(index) {
            this.currentIndex = index;
            this.progress = 0;
            
            // Restart autoplay if it was playing
            if (this.isPlaying) {
                this.startAutoplay();
            }
        }
    }
}
</script>
