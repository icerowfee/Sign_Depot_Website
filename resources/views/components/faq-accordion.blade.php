<div class="space-y-4" x-data="{ openFaq: null }">
    <template :key="index" x-for="(faq, index) in (window.faqData || [])">
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300">
            <button @click="openFaq = openFaq === index ? null : index"
                    class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-300">
                <span class="text-lg font-semibold text-gray-800 pr-8" x-text="faq.question"></span>
                <svg :class="{ 'rotate-180': openFaq === index }"
                     class="w-6 h-6 text-[#ED3236] transition-transform duration-500 ease-in-out flex-shrink-0"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>
            <div class="px-6 pb-5" x-collapse x-show="openFaq === index">
                <p class="text-gray-600 leading-relaxed" x-text="faq.answer"></p>
            </div>
        </div>
    </template>
</div>
