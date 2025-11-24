<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Services</title>
</head>



<body x-data="{
    activeServiceTab: '{{ request()->query('service', 'signageService') }}',
    services: window.servicesData
}" x-init="// Scroll to top when service changes via URL parameter
if (window.location.search.includes('service=')) {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}">

    @include('components.header')

    <!-- Dynamic Hero Section -->
    <section
             :style="`background-image: url(${services[activeServiceTab].bg})`"
             class="relative bg-cover bg-center text-white py-20 h-fit transition-all duration-500">
        <p :class="activeServiceTab === 'lightboxService' || activeServiceTab === 'easyboothService' || activeServiceTab === 'powderCoatingService' ? 'text-white' :
            'text-[#343333]'"
           class="text-6xl font-semibold ml-[25%]" x-text="services[activeServiceTab].title"></p>
    </section>


    <section class="grid grid-cols-5 py-6 h-[66.6lvh] w-11/12 mx-auto">
        <div class="my-auto border-r-2 border-black">
            <div class="flex flex-col items-center space-y-4 py-12">
                <button :class="activeServiceTab === 'signageService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'signageService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    SIGNAGE
                </button>

                <button :class="activeServiceTab === 'printingService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'printingService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    PRINTING
                </button>

                <button :class="activeServiceTab === 'carpentryService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'carpentryService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    CARPENTRY
                </button>

                <button :class="activeServiceTab === 'cncService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'cncService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    CNC CUTTING
                </button>

                <button :class="activeServiceTab === 'lightboxService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'lightboxService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    LIGHTBOX
                </button>

                <button :class="activeServiceTab === 'easyboothService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'easyboothService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    EASYBOOTH
                </button>

                <button :class="activeServiceTab === 'ledService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'ledService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    LED SCREEN
                </button>

                <button :class="activeServiceTab === 'powderCoatingService' ? 'text-white  bg-[#ED3236] font-bold rounded-md' :
                    'hover:text-red-700 hover:bg-white font-medium hover:rounded-md'"
                        @click="activeServiceTab = 'powderCoatingService'; $nextTick(() => { document.getElementById('serviceContent').scrollTop = 0 })"
                        class="text-xl px-4 py-2 transition-all duration-200 w-fit">
                    POWDER COATING
                </button>
            </div>
        </div>



        <div class="col-span-4 overflow-y-hidden">
            <div id="serviceContent" class="flex flex-col h-full w-11/12 mx-auto overflow-y-scroll transition-all duration-500">
                <p class="text-2xl" x-text="services[activeServiceTab].description"></p>

                <div class="grid grid-cols-3 gap-6 w-5/6 mx-auto py-8">
                    <template :key="index" x-for="(img, index) in services[activeServiceTab].gallery">
                        <div class="h-72 w-full rounded-lg shadow-lg relative overflow-hidden">
                            <img :src="img" alt="Service Image" class="w-full h-full object-cover">
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>




    <script>
        window.servicesData = {
            signageService: {
                title: 'SIGNAGE',
                bg: '{{ asset('images/assets/signage-header.png') }}',
                description: 'Having decades of experience in Signage Fabrication, our company has acquired exceptional skills through people and is continuously improving production by means of machines that are much needed for efficiency.',
                gallery: [
                    @js(asset('images/samples/signage/Signages (1).png')),
                    @js(asset('images/samples/signage/Signages (2).png')),
                    @js(asset('images/samples/signage/Signages (3).png')),
                    @js(asset('images/samples/signage/Signages (4).png')),
                    @js(asset('images/samples/signage/Signages (5).png')),
                    @js(asset('images/samples/signage/Signages (6).png')),
                    @js(asset('images/samples/signage/Signages (7).png')),
                    @js(asset('images/samples/signage/Signages (8).png')),
                    @js(asset('images/samples/signage/Signages (9).png')),
                    @js(asset('images/samples/signage/Signages (10).png')),
                    @js(asset('images/samples/signage/Signages (11).png')),
                    @js(asset('images/samples/signage/Signages (12).png')),
                    @js(asset('images/samples/signage/Signages (13).png')),
                    @js(asset('images/samples/signage/Signages (14).png')),
                    @js(asset('images/samples/signage/Signages (15).png')),
                    @js(asset('images/samples/signage/Signages (16).png')),
                    @js(asset('images/samples/signage/Signages (17).png')),
                    @js(asset('images/samples/signage/Signages (18).png')),
                    @js(asset('images/samples/signage/Signages (19).png')),
                    @js(asset('images/samples/signage/Signages (20).png')),
                    @js(asset('images/samples/signage/Signages (21).png')),
                    @js(asset('images/samples/signage/Signages (22).png')),
                    @js(asset('images/samples/signage/Signages (23).png')),
                    @js(asset('images/samples/signage/Signages (24).png'))
                ]
            },
            printingService: {
                title: 'PRINTING',
                bg: '{{ asset('images/assets/printing-header.png') }}',
                description: 'Serving Large Format, Digital Offset, Offset, and Silk Screen. You\'ll never get the hassle on a one stop printing supply. Serving nationwide corporate printing requirements highlighting UV PRINTING outputs via Flat Bed and Roll to Roll Setup.',
                gallery: [
                    @js(asset('images/samples/printing/Printing (1).png')),
                    @js(asset('images/samples/printing/Printing (2).png')),
                    @js(asset('images/samples/printing/Printing (3).png')),
                    @js(asset('images/samples/printing/Printing (4).png')),
                    @js(asset('images/samples/printing/Printing (5).png')),
                    @js(asset('images/samples/printing/Printing (6).png')),
                    @js(asset('images/samples/printing/Printing (7).png')),
                    @js(asset('images/samples/printing/Printing (8).png')),
                    @js(asset('images/samples/printing/Printing (9).png')),
                    @js(asset('images/samples/printing/Printing (10).png')),
                    @js(asset('images/samples/printing/Printing (11).png')),
                    @js(asset('images/samples/printing/Printing (12).png')),
                    @js(asset('images/samples/printing/Printing (13).png')),
                    @js(asset('images/samples/printing/Printing (14).png')),
                    @js(asset('images/samples/printing/Printing (15).png')),
                    @js(asset('images/samples/printing/Printing (16).png')),
                    @js(asset('images/samples/printing/Printing (17).png')),
                    @js(asset('images/samples/printing/Printing (18).png')),
                    @js(asset('images/samples/printing/Printing (19).png')),
                    @js(asset('images/samples/printing/Printing (20).png')),
                    @js(asset('images/samples/printing/Printing (21).png')),
                    @js(asset('images/samples/printing/Printing (22).png')),
                    @js(asset('images/samples/printing/Printing (23).png')),
                    @js(asset('images/samples/printing/Printing (24).png')),
                    @js(asset('images/samples/printing/Printing (25).png')),
                    @js(asset('images/samples/printing/Printing (26).png')),
                    @js(asset('images/samples/printing/Printing (27).png')),
                    @js(asset('images/samples/printing/Printing (28).png'))
                ]
            },
            carpentryService: {
                title: 'CARPENTRY',
                bg: '{{ asset('images/assets/carpentry-header.png') }}',
                description: 'A much needed add-on to our growing capabilities and services. We offer design and fabrication of modules, exhibit booths and display racks. With experienced people in the industry and top of the line machineries, we will surely meet your needs.',
                gallery: [
                    @js(asset('images/samples/carpentry/Carpentry (1).png')),
                    @js(asset('images/samples/carpentry/Carpentry (2).png')),
                    @js(asset('images/samples/carpentry/Carpentry (3).png')),
                    @js(asset('images/samples/carpentry/Carpentry (4).png')),
                    @js(asset('images/samples/carpentry/Carpentry (5).png')),
                    @js(asset('images/samples/carpentry/Carpentry (6).png')),
                    @js(asset('images/samples/carpentry/Carpentry (7).png')),
                    @js(asset('images/samples/carpentry/Carpentry (8).png')),
                    @js(asset('images/samples/carpentry/Carpentry (9).png')),
                    @js(asset('images/samples/carpentry/Carpentry (10).png')),
                    @js(asset('images/samples/carpentry/Carpentry (11).png')),
                    @js(asset('images/samples/carpentry/Carpentry (12).png')),
                    @js(asset('images/samples/carpentry/Carpentry (13).png')),
                    @js(asset('images/samples/carpentry/Carpentry (14).png')),
                    @js(asset('images/samples/carpentry/Carpentry (15).png')),
                    @js(asset('images/samples/carpentry/Carpentry (16).png')),
                    @js(asset('images/samples/carpentry/Carpentry (17).png')),
                    @js(asset('images/samples/carpentry/Carpentry (18).png')),
                    @js(asset('images/samples/carpentry/Carpentry (19).png')),
                    @js(asset('images/samples/carpentry/Carpentry (20).png')),
                ]
            },
            cncService: {
                title: 'CNC CUTTING',
                bg: '{{ asset('images/assets/cnc-header.png') }}',
                description: 'Having multiple routers as an add on services and support to our partners. A combination of machine availability and skillful people developing concept products through CNC.',
                gallery: [
                    @js(asset('images/samples/cnc/Cnc (1).png')),
                    @js(asset('images/samples/cnc/Cnc (2).png')),
                    @js(asset('images/samples/cnc/Cnc (3).png')),
                    @js(asset('images/samples/cnc/Cnc (4).png')),
                    @js(asset('images/samples/cnc/Cnc (5).png')),
                    @js(asset('images/samples/cnc/Cnc (6).png')),
                    @js(asset('images/samples/cnc/Cnc (7).png')),
                    @js(asset('images/samples/cnc/Cnc (8).png')),
                    @js(asset('images/samples/cnc/Cnc (9).png')),
                    @js(asset('images/samples/cnc/Cnc (10).png')),
                    @js(asset('images/samples/cnc/Cnc (11).png')),
                    @js(asset('images/samples/cnc/Cnc (12).png')),
                ]
            },
            lightboxService: {
                title: 'LIGHTBOX',
                bg: '{{ asset('images/assets/lightbox-header.png') }}',
                description: 'Offering wide variety of LIGHTBOX SIGNAGES from indoor to outdoor conditions. An expert of material usage offering quality and great value to our customers.',
                gallery: [
                    @js(asset('images/samples/lightbox/Lightbox (1).png')),
                    @js(asset('images/samples/lightbox/Lightbox (2).png')),
                    @js(asset('images/samples/lightbox/Lightbox (3).png')),
                    @js(asset('images/samples/lightbox/Lightbox (4).png')),
                    @js(asset('images/samples/lightbox/Lightbox (5).png')),
                    @js(asset('images/samples/lightbox/Lightbox (6).png')),
                    @js(asset('images/samples/lightbox/Lightbox (7).png')),
                    @js(asset('images/samples/lightbox/Lightbox (8).png')),
                    @js(asset('images/samples/lightbox/Lightbox (9).png')),
                    @js(asset('images/samples/lightbox/Lightbox (10).png')),
                    @js(asset('images/samples/lightbox/Lightbox (11).png')),
                ]
            },
            easyboothService: {
                title: 'EASYBOOTH',
                bg: '{{ asset('images/assets/easy-booth-header.png') }}',
                description: 'This product goals to save time and money, creating diversified service for exhibition without the need to fabricate and has variety of mix and match system for a customized output for every brand events.',
                gallery: [
                    @js(asset('images/samples/easybooth/Easybooth (1).png')),
                    @js(asset('images/samples/easybooth/Easybooth (2).png')),
                    @js(asset('images/samples/easybooth/Easybooth (3).png')),
                    @js(asset('images/samples/easybooth/Easybooth (4).png')),
                    @js(asset('images/samples/easybooth/Easybooth (5).png')),
                    @js(asset('images/samples/easybooth/Easybooth (6).png')),
                    @js(asset('images/samples/easybooth/Easybooth (7).png')),
                    @js(asset('images/samples/easybooth/Easybooth (8).png')),
                    @js(asset('images/samples/easybooth/Easybooth (9).png')),
                    @js(asset('images/samples/easybooth/Easybooth (10).png')),
                    @js(asset('images/samples/easybooth/Easybooth (11).png')),
                    @js(asset('images/samples/easybooth/Easybooth (12).png')),
                    @js(asset('images/samples/easybooth/Easybooth (13).png')),
                    @js(asset('images/samples/easybooth/Easybooth (14).png')),
                    @js(asset('images/samples/easybooth/Easybooth (15).png')),
                    @js(asset('images/samples/easybooth/Easybooth (16).png')),
                    @js(asset('images/samples/easybooth/Easybooth (17).png')),
                    @js(asset('images/samples/easybooth/Easybooth (18).png')),
                    @js(asset('images/samples/easybooth/Easybooth (19).png')),
                ]
            },
            ledService: {
                title: 'LED SCREEN',
                bg: '{{ asset('images/assets/led-header.png') }}',
                description: 'We offer high-quality LED screen rentals to support events, advertising campaigns, and dynamic displays. Our LED panels deliver vibrant visuals, high brightness, and seamless integration. Whether it\’s for corporate events, trade shows, retail promotions, or public installations, our team provides complete setup, technical support, and content playback solutions to ensure smooth and professional presentations.',
                gallery: [
                    @js(asset('images/samples/led/LED (1).png')),
                    @js(asset('images/samples/led/LED (2).png')),
                    @js(asset('images/samples/led/LED (3).png')),
                    @js(asset('images/samples/led/LED (4).png')),
                    @js(asset('images/samples/led/LED (5).png')),
                    @js(asset('images/samples/led/LED (6).png')),
                    @js(asset('images/samples/led/LED (7).png')),
                    @js(asset('images/samples/led/LED (8).png')),
                    @js(asset('images/samples/led/LED (9).png')),
                ]
            },
            powderCoatingService: {
                title: 'POWDER COATING',
                bg: '{{ asset('images/assets/powder-coating-header.png') }}',
                description: '',
                gallery: [
                    @js(asset('images/samples/led/LED (1).png')),
                    @js(asset('images/samples/led/LED (2).png')),
                    @js(asset('images/samples/led/LED (3).png')),
                    @js(asset('images/samples/led/LED (4).png')),
                    @js(asset('images/samples/led/LED (5).png')),
                    @js(asset('images/samples/led/LED (6).png')),
                    @js(asset('images/samples/led/LED (7).png')),
                    @js(asset('images/samples/led/LED (8).png')),
                    @js(asset('images/samples/led/LED (9).png')),
                ]
            }
        };
    </script>





    @include('components.footer')

</body>

</html>
