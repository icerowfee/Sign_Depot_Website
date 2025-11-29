<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Contact Us</title>
</head>

<body>

    @include('components.header')

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center text-white py-12 mb-20 h-[90lvh]"
             style="background-image: url('{{ asset('images/assets/home-page-hero-bg.png') }}');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/15"></div>
        <div class="relative grid grid-cols-2 w-[86%] h-full mx-auto items-center">
            <div class="flex flex-col p-8 gap-6">
                <h1 class="text-5xl font-bold mb-4">GET IN <span class="text-[#ED3337]">TOUCH</span></h1>
                <p class="text-lg mb-6">Have a question or ready to start your project? Fill out the form below and
                    we'll get back to you soon.</p>

                <form class="flex flex-col gap-4">
                    <div class="grid grid-cols-2 gap-4">
                        <input class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black"
                               placeholder="First Name" type="text">
                        <input class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black"
                               placeholder="Last Name" type="text">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <input class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black"
                               placeholder="Email Address" type="email">

                        <input class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black"
                               placeholder="Phone Number" type="tel">
                    </div>


                    <select
                            class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black">
                        <option value="">Select Service</option>
                        <option value="signage">Signage</option>
                        <option value="printing">Printing</option>
                        <option value="carpentry">Carpentry</option>
                        <option value="led">LED Screen</option>
                        <option value="easybooth">Exhibit Booth</option>
                        <option value="other">Other</option>
                    </select>

                    <!-- Options Segmented Radio Controls -->
                    {{-- <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Indoor / Outdoor -->
                        <fieldset class="flex flex-col p-3 border border-gray-200 rounded-lg">
                            <legend class="text-sm font-semibold mb-2">Location</legend>
                            <div class="flex gap-2">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Indoor" checked class="sr-only peer" name="location_type"
                                           type="radio" value="indoor">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Indoor</span>
                                </label>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Outdoor" class="sr-only peer" name="location_type" type="radio"
                                           value="outdoor">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Outdoor</span>
                                </label>
                            </div>
                        </fieldset>

                        <!-- Lighted / Non-lighted -->
                        <fieldset class="flex flex-col p-3 border border-gray-200 rounded-lg">
                            <legend class="text-sm font-semibold mb-2">Lighting</legend>
                            <div class="flex gap-2">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Lighted" checked class="sr-only peer" name="lighting"
                                           type="radio" value="lighted">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Lighted</span>
                                </label>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Non Lighted" class="sr-only peer" name="lighting" type="radio"
                                           value="non-lighted">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Non-lighted</span>
                                </label>
                            </div>
                        </fieldset>

                        <!-- Cutout / Build-up -->
                        <fieldset class="flex flex-col p-3 border border-gray-200 rounded-lg">
                            <legend class="text-sm font-semibold mb-2">Style</legend>
                            <div class="flex gap-2">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Cutout" checked class="sr-only peer" name="sign_style"
                                           type="radio" value="cutout">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Cutout</span>
                                </label>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input aria-label="Build Up / Customized" class="sr-only peer" name="sign_style"
                                           type="radio" value="build-up">
                                    <span
                                          class="px-3 py-2 rounded-lg border border-gray-300 text-sm text-black hover:border-gray-400 transition peer-checked:bg-[#ED3337] peer-checked:text-white peer-checked:border-[#ED3337] peer-focus:ring-2 peer-focus:ring-[#ED3337]">Build-up
                                        / Customized</span>
                                </label>
                            </div>
                        </fieldset>
                    </div> --}}



                    <textarea class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ED3337] text-black resize-none"
                              placeholder="Message" rows="4"></textarea>

                    <button class="bg-[#ED3337] text-white px-8 py-3 rounded-lg font-bold hover:bg-red-700 transition"
                            type="submit">
                        SEND MESSAGE
                    </button>
                </form>
            </div>

            <img alt="" class="absolute right-24 top-1/2 -translate-y-1/2 h-[80lvh]"
                 src="{{ asset('images/assets/sd-hero-image.png') }}">
        </div>
    </section>


    <!-- FAQ Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-4">FREQUENTLY ASKED <span
                      class="text-[#ED3337]">QUESTIONS</span></h2>
            {{-- <p class="text-center text-gray-600 text-lg mb-12">Find answers to common questions about our services</p> --}}

            <div class="mt-8">
                @include('components.faq-accordion')
            </div>
        </div>
    </section>

    <!-- MAPS Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-4">WHERE TO <span class="text-[#ED3337]">FIND US</span></h2>
            <p class="text-center text-gray-600 text-lg mb-8">Visit any of our locations across the Philippines</p>

            @include('components.location-finder')
        </div>
    </section>

    {{-- <section class="py-20" x-data>
        <div class="flex flex-col w-2/4 mx-auto gap-6">
            <div class="flex justify-center">
                <img alt="" class="h-20" src="{{ asset('images/assets/sd-logo.png') }}">
            </div>
            <p class="text-center text-4xl">"Trusted by 100+ businesses in Metro Manila for signage & printing needs."
            </p>
            <div class="flex justify-center">
                <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="bg-white border-2 border-[#D23337] text-[#D23337] px-12 py-3 rounded-lg text-lg font-bold w-fit hover:text-white hover:bg-red-700 transition cursor-pointer">
                    REQUEST A QUOTE NOW
                </button>
            </div>
        </div>
    </section> --}}

    <script>
        // Location data - Replace with your actual business locations
        // mapEmbed: Use the address or place name for Google Maps embed
        window.locationData = [{
                name: 'Sign Depot - Main Office',
                type: 'Head Office',
                address: '61-43 A.Bonifacio, Manila, Kalakhang Maynila',
                contact: '+63 2 8123 4567',
                hours: 'Mon-Sat: 8:00 AM - 6:00 PM',
                mapEmbed: 'Sign Depot'
            },
            {
                name: 'Visayads - Cebu Office',
                type: 'Branch Office',
                address: 'Lot 8, Blk-21, J. de Veyra St, NRA Port Center, Cebu City',
                contact: '+63 2 8234 5678',
                hours: 'Mon-Sat: 9:00 AM - 7:00 PM',
                mapEmbed: 'Visayads'
            },
            {
                name: 'Thee Print - Caloocan Branch',
                type: 'Branch Office',
                address: 'D1, 106 Caimito Rd, Caloocan, Metro Manila',
                contact: '+63 2 8345 6789',
                hours: 'Mon-Sat: 8:00 AM - 5:00 PM',
                mapEmbed: 'Thee Print'
            },
            {
                name: 'Karatula - Cebu Branch',
                type: 'Branch Office',
                address: '321 IT Park, Cebu Business Park, Cebu City, Philippines',
                contact: '+63 32 345 6789',
                hours: 'Mon-Sat: 8:00 AM - 6:00 PM',
                mapEmbed: 'IT Park, Cebu Business Park, Cebu City, Philippines'
            },
            {
                name: 'Yison - Davao Branch',
                type: 'Branch Office',
                address: '654 J.P. Laurel Avenue, Davao City, Philippines',
                contact: '+63 82 234 5678',
                hours: 'Mon-Sat: 8:00 AM - 6:00 PM',
                mapEmbed: 'J.P. Laurel Avenue, Davao City, Philippines'
            },
            {
                name: 'Letop - Malabon Branch',
                type: 'Branch Office',
                address: '5-A Araneta Ave, Malabon, 1475 Metro Manila',
                contact: '+63 33 234 5678',
                hours: 'Mon-Sat: 9:00 AM - 6:00 PM',
                mapEmbed: 'Letop'
            },
            {
                name: 'Surmount - Bacolod Branch',
                type: 'Branch Office',
                address: '258 Lacson Street, Bacolod City, Philippines',
                contact: '+63 34 345 6789',
                hours: 'Mon-Sat: 8:00 AM - 6:00 PM',
                mapEmbed: 'Lacson Street, Bacolod City, Philippines'
            }
        ];
    </script>

    <script>
        // FAQ data - Easy to modify and maintain
        window.faqData = [{
                question: 'What services does Sign Depot offer?',
                answer: 'We offer a comprehensive range of services including Signage Fabrication, Large Format Printing, Carpentry, CNC Cutting, Lightbox Installation, Easybooth Systems, LED Screen Rentals, and Powder Coating. Our one-stop-shop approach ensures all your advertising and display needs are met with excellence.'
            },
            {
                question: 'How long does it take to complete a project?',
                answer: 'Project timelines vary depending on the scope and complexity. Simple printing jobs may take 1-3 days, while custom signage and fabrication projects typically require 1-2 weeks. We provide detailed timelines during consultation and prioritize fast and reliable delivery without compromising quality.'
            },
            {
                question: 'Do you provide installation services?',
                answer: 'Yes! We offer complete installation services for all our products. Our experienced installation team ensures professional setup and seamless project completion. Whether it\'s signage mounting, booth assembly, or LED screen installation, we handle it all.'
            },
            {
                question: 'What materials do you use for signage?',
                answer: 'We use only high-quality materials suitable for both indoor and outdoor applications. This includes stainless steel, aluminum, acrylic, PVC, wood, tarpaulin, vinyl, and more. Our expertise in material selection ensures durability, weather resistance, and excellent value for your investment.'
            },
            {
                question: 'Can you handle large-scale corporate projects?',
                answer: 'Absolutely! We have extensive experience handling large-scale corporate printing and signage requirements nationwide. With state-of-the-art machinery, skilled personnel, and efficient production systems, we can manage high-volume orders and complex multi-location projects with ease.'
            },
            {
                question: 'How can I request a quotation?',
                answer: 'You can request a quotation by contacting us through our contact form, email, or phone. Please provide details about your project including specifications, quantities, and timeline. Our team will review your requirements and provide a competitive quote along with expert recommendations.'
            }
        ];
    </script>

    @include('components.footer')

</body>

</html>
