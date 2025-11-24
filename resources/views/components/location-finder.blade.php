<div class="grid grid-cols-1 lg:grid-cols-5 gap-6 mt-8" x-data="locationFinder()" x-init="init()">
    <!-- Left Side - Locations List -->
    <div
         class="lg:col-span-2 space-y-4 max-h-[75lvh] overflow-y-auto overflow-x-hidden pr-2 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
        <template :key="index" x-for="(location, index) in locations">
            <div :class="{
                'border-[#ED3236] ring-2 ring-[#ED3236] ring-opacity-50': selectedIndex === index,
                'border-transparent hover:border-gray-300 hover:shadow-lg': selectedIndex !== index
            }"
                 @click="selectLocation(index)"
                 class="bg-white rounded-lg shadow-md p-5 cursor-pointer transition-all duration-300 border-2 w-full">

                <!-- Location Header -->
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <h3 :class="selectedIndex === index ? 'text-[#ED3236]' : 'text-gray-800'"
                            class="text-xl font-bold transition-colors duration-300" x-text="location.name">
                        </h3>
                        <div class="flex items-center mt-1">
                            <span :class="selectedIndex === index ? 'bg-[#ED3236] text-white' : 'bg-gray-200 text-gray-700'"
                                  class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                          d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                          fill-rule="evenodd" />
                                </svg>
                                <span x-text="location.type"></span>
                            </span>
                        </div>
                    </div>
                    {{-- <svg class="w-6 h-6 text-[#ED3236] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                         x-show="selectedIndex === index">
                        <path clip-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              fill-rule="evenodd" />
                    </svg> --}}
                </div>

                <!-- Address -->
                <div class="flex items-start text-gray-600 mb-2">
                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" />
                    </svg>
                    <span class="text-sm" x-text="location.address"></span>
                </div>

                <!-- Contact -->
                <div class="flex items-center text-gray-600 mb-2">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                    <span class="text-sm font-medium" x-text="location.contact"></span>
                </div>

                <!-- Hours -->
                <div class="flex items-center text-gray-600 mb-3">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" />
                    </svg>
                    <span class="text-sm" x-text="location.hours"></span>
                </div>

                <!-- View on Map Button -->
                <button
                        :class="selectedIndex === index ?
                            'bg-[#ED3236] text-white shadow-lg transform scale-105' :
                            'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        @click.stop="selectLocation(index)"
                        class="w-full py-2 px-4 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                    <span x-text="selectedIndex === index ? 'Viewing on Map' : 'View on Map'"></span>
                </button>
            </div>
        </template>
    </div>

    <!-- Right Side - Google Map -->
    <div class="lg:col-span-3">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden sticky top-4">
            <!-- Map Header -->
            <div class="bg-gradient-to-r from-[#ED3236] to-red-600 text-white p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold" x-text="selectedLocation.name"></h3>
                        <p class="text-sm opacity-90" x-text="selectedLocation.type"></p>
                    </div>
                    <a :href="`https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(selectedLocation.address)}`"
                       class="bg-white text-[#ED3236] px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 flex items-center gap-2"
                       target="_blank">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" />
                        </svg>
                        Get Directions
                    </a>
                </div>
            </div>

            <!-- Map Container -->
            <div class="relative">
                <iframe
                        :key="selectedIndex"
                        :src="`https://www.google.com/maps?q=${encodeURIComponent(selectedLocation.mapEmbed)}&output=embed`"
                        class="w-full h-[550px] border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
                        x-transition:enter="transition ease-out duration-500">
                </iframe>

                <!-- Loading Overlay -->
                <div class="absolute inset-0 bg-gray-100 flex items-center justify-center pointer-events-none"
                     x-show="isLoading" x-transition>
                    <div class="text-center">
                        <svg class="animate-spin h-12 w-12 text-[#ED3236] mx-auto mb-4" fill="none"
                             viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke-width="4"
                                    stroke="currentColor"></circle>
                            <path class="opacity-75"
                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                  fill="currentColor"></path>
                        </svg>
                        <p class="text-gray-600">Loading map...</p>
                    </div>
                </div>
            </div>

            <!-- Map Footer - Quick Info -->
            <div class="bg-gray-50 p-4 border-t border-gray-200">
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                        <p class="text-gray-500 font-medium mb-1">Contact</p>
                        <p class="text-gray-800 font-semibold" x-text="selectedLocation.contact"></p>
                    </div>
                    <div>
                        <p class="text-gray-500 font-medium mb-1">Hours</p>
                        <p class="text-gray-800 font-semibold" x-text="selectedLocation.hours"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function locationFinder() {
        return {
            selectedIndex: 0,
            locations: window.locationData || [],
            isLoading: false,

            get selectedLocation() {
                return this.locations[this.selectedIndex] || {};
            },

            init() {
                // Component is ready
            },

            selectLocation(index) {
                if (this.selectedIndex === index) return;

                // Show loading state briefly for smooth transition
                this.isLoading = true;

                setTimeout(() => {
                    this.selectedIndex = index;
                    this.isLoading = false;
                }, 300);
            }
        }
    }
</script>

<style>
    /* Custom scrollbar for location list */
    /* .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
    }

    .scrollbar-thin::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #D1D5DB;
        border-radius: 10px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb:hover {
        background: #9CA3AF;
    } */

    /* Smooth transitions for map */
    #map {
        transition: all 0.3s ease;
    }
</style>
