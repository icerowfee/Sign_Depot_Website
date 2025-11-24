<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Sign Depot</title>
</head>

<body>

    @include('components.header')


    <main>
        <!-- Hero Section -->
        <section class="relative bg-cover bg-center text-white py-10 md:py-20 mb-10 md:mb-20 h-[90lvh]"
                 style="background-image: url('{{ asset('images/assets/home-page-hero-bg.png') }}');">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/15"></div>
            <div
                 class="relative grid grid-cols-1 md:grid-cols-2 w-full md:w-5/6 h-full mx-auto items-center px-4 md:px-0">
                <div class="flex flex-col p-4 md:p-8">
                    <h1 class="text-3xl md:text-5xl font-bold">Your Partner in Signages & Printing Solutions</h1>
                    <p class="mt-4 text-base md:text-lg">We design, build, and deliver signage and printing projects
                        that make your brand stand out.</p>
                    <a class="mt-6 bg-white text-red-800 px-6 py-3 rounded-lg text-base md:text-lg font-bold w-fit hover:text-white hover:bg-red-700 transition"
                       href="/services">
                        Explore Our Services
                    </a>
                </div>

                <img alt="" class="hidden md:block absolute right-24 top-1/2 -translate-y-1/2 h-[80lvh]"
                     src="{{ asset('images/assets/sd-hero-image.png') }}">
            </div>
        </section>


        <!-- Short SD Description Section -->
        <section class="flex justify-center items-center h-fit md:h-lvh py-10 md:py-20">
            <div class="w-full md:w-3/5 mx-auto px-4 md:px-0">
                <div class="flex justify-center">
                    <img alt="" class="h-16 md:h-24" src="{{ asset('images/assets/sd-logo.png') }}">
                </div>

                <div>
                    <p class="mt-4 text-center text-lg md:text-xl">We provide services beyond what is written and
                        declared in this profile. In assurance to our corporate values, being client centric focusing on
                        building our company as a solution oriented advertising firm, in line with being innovative and
                        passionate in the industry.</p>
                </div>

                <div class="flex justify-center">
                    <a class="mt-6 bg-[#D23337] text-white px-6 py-3 rounded-lg text-base md:text-lg font-bold w-fit hover:text-white hover:bg-red-700 transition"
                       href="/services">
                        SEE MORE
                    </a>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="py-10 md:py-20">
            <div class="flex flex-col w-full md:w-3/5 mx-auto px-4 md:px-0">
                <h2 class="text-3xl md:text-5xl font-bold text-center">OUR <span class="text-[#ED3337]">SERVICES</span>
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                    <a class="group block" href="/services?service=signageService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/signage.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                SIGNAGE
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=printingService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/printing.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                PRINTING
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=carpentryService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/carpentry.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                CARPENTRY
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=cncService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/cnc.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                CNC
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=lightboxService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/lightbox.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                LIGHTBOX
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=easyboothService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/easy-booth.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                EASY BOOTH
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=ledService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/led-screen.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                LED SCREEN
                            </h1>
                        </div>
                    </a>
                    <a class="group block" href="/services?service=powderCoatingService">
                        <div class="flex justify-center items-end h-64 md:h-96 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat relative overflow-hidden transform transition-all duration-500 ease-out group-hover:scale-105 group-hover:shadow-2xl"
                             style="background-image: url('{{ asset('images/assets/led-screen.png') }}');">
                            <div
                                 class="absolute inset-0 bg-black/30 transition-colors duration-300 group-hover:bg-black/50">
                            </div>

                            <h1
                                class="absolute left-4 bottom-4 md:left-6 md:bottom-6 text-2xl md:text-4xl text-white font-serif z-10 transition-all duration-300 
                                     transform group-hover:translate-y-[-8px] group-hover:text-red-100 
                                     before:content-[''] before:absolute before:w-0 before:h-1 before:bg-white 
                                     before:bottom-[-4px] before:left-0 before:transition-all before:duration-300 
                                     group-hover:before:w-full">
                                POWDER-COATING
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
        </section>



        <!-- Why Choose Us Section -->
        <section class="flex justify-center items-center h-fit md:h-lvh py-10 md:py-20">
            <div class="flex flex-col w-full md:w-3/5 mx-auto px-4 md:px-0">
                <h2 class="text-3xl md:text-5xl font-bold text-center">WHY <span class="text-[#ED3337]">CHOOSE US</span>
                </h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                    <div class="px-4">
                        <div class="flex justify-center">
                            <img alt="" class="h-20 w-20 md:h-28 md:w-28"
                                 src="{{ asset('images/assets/high-quality-icon.png') }}">
                        </div>

                        <h1 class="text-lg md:text-xl font-normal text-center mt-4">High-Quality Materials</h1>
                    </div>

                    <div class="px-4">
                        <div class="flex justify-center">
                            <img alt="" class="h-20 w-20 md:h-28 md:w-28"
                                 src="{{ asset('images/assets/fast-delivery-icon.png') }}">
                        </div>

                        <h1 class="text-lg md:text-xl font-normal text-center mt-4">Fast & Reliable Delivery</h1>
                    </div>

                    <div class="px-4">
                        <div class="flex justify-center">
                            <img alt="" class="h-20 w-20 md:h-28 md:w-28"
                                 src="{{ asset('images/assets/one-stop-shop-icon.png') }}">
                        </div>

                        <h1 class="text-lg md:text-xl font-normal text-center mt-4">One Stop Shop</h1>
                    </div>

                    <div class="px-4">
                        <div class="flex justify-center">
                            <img alt="" class="h-20 w-20 md:h-28 md:w-28"
                                 src="{{ asset('images/assets/affordable-icon.png') }}">
                        </div>

                        <h1 class="text-lg md:text-xl font-normal text-center mt-4">Affordable Pricing</h1>
                    </div>
                </div>
            </div>
        </section>



        <!-- Our Projects Section -->
        <section class="flex justify-center items-center h-fit md:h-lvh py-10 md:py-20">
            <div class="flex flex-col w-full mx-auto px-4 md:px-0">
                <h2 class="text-3xl md:text-5xl font-bold text-center">OUR <span
                          class="text-[#ED3337]">PROJECTS</span></h2>

                @include('components.product-carousel')
            </div>
        </section>

        <script>
            // Sample product data - Replace with your actual project data
            window.carouselProducts = [{
                    id: 1,
                    name: 'Corporate Office Signage',
                    description: 'Premium LED signage installation for modern corporate building',
                    image: '{{ asset('images/samples/signage/Signages (1).png') }}',
                    features: [
                        'Custom LED panels with programmable displays',
                        'Energy-efficient design with long lifespan',
                        'Seamless integration with building management systems'
                    ]
                },
                {
                    id: 2,
                    name: 'Retail Store Display',
                    description: 'Eye-catching retail signage with custom lightbox design',
                    image: '{{ asset('images/samples/signage/Signages (2).png') }}',
                    features: [
                        'Illuminated lightbox with vibrant color reproduction',
                        'Weather-resistant materials for outdoor durability',
                        'Custom branding and messaging capabilities'
                    ]
                },
                {
                    id: 3,
                    name: 'Exhibition Booth',
                    description: 'Complete exhibition booth setup with custom carpentry',
                    image: '{{ asset('images/samples/carpentry/Carpentry (1).png') }}',
                    features: [
                        'Modular design for easy assembly and transport',
                        'Custom carpentry with premium finish materials',
                        'Integrated lighting and display systems'
                    ]
                },
                {
                    id: 4,
                    name: 'Large Format Printing',
                    description: 'High-quality UV printing for outdoor advertising',
                    image: '{{ asset('images/samples/printing/Printing (1).png') }}',
                    features: [
                        'UV-resistant inks for fade-proof outdoor performance',
                        'High-resolution printing up to 1440 dpi',
                        'Durable vinyl and fabric substrates available'
                    ]
                },
                {
                    id: 5,
                    name: 'CNC Custom Design',
                    description: 'Precision CNC cutting for unique brand elements',
                    image: '{{ asset('images/samples/cnc/Cnc (1).png') }}',
                    features: [
                        'Precision cutting with 0.1mm accuracy',
                        'Wide range of materials including acrylic, wood, and metal',
                        'Complex shapes and intricate designs possible'
                    ]
                },
                {
                    id: 6,
                    name: 'LED Screen Installation',
                    description: 'Dynamic LED display for events and promotions',
                    image: '{{ asset('images/samples/led/LED (1).png') }}',
                    features: [
                        'High brightness for outdoor visibility',
                        'Real-time content updates and scheduling',
                        'Professional installation and technical support'
                    ]
                }
            ];
        </script>



        @include('components.footer')






    </main>


</body>

</html>
