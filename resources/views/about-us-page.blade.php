<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title> About Sign Depot</title>
</head>

<body>

    @include('components.header')

    <section class="relative z-[-1]">
        <img alt="Sign Depot" class="w-full h-80 object-cover" src="{{ asset('images/assets/sd-hero-image.png') }}">
        <div
             class="absolute inset-0 flex flex-col items-center justify-center text-white text-center bg-black bg-opacity-50 ">
            <h2 class="text-7xl font-bold">SIGN DEPOT</h2>
            <p class="text-xl mt-4">
                Your Trusted Partner for Quality Signage and Printing Solutions
            </p>
        </div>
    </section>

    <section>
        <div class="max-w-7xl mx-auto px-6 py-16">
            <h2 class="text-5xl font-bold text-center mb-4">ABOUT <span class="text-[#ED3337]">SIGN DEPOT</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div>
                    <img alt="About Sign Depot" class="w-full h-[55lvh] object-cover rounded-lg shadow-lg"
                         src="{{ asset('images/assets/about-sign-depot.png') }}">
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-lg text-gray-700 mb-4">
                        Founded with the vision of helping businesses stand out, Sign Depot has grown into a trusted
                        provider of signage, printing, and fabrication solutions. What started as a small team with big
                        ideas has now become a full-service advertising firm, delivering high-quality and innovative
                        projects to clients across different industries.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        Over the years, we have worked with brands of all sizes—creating everything from eye-catching
                        signages and professional prints to customized booths and installations. Each project we take on
                        is guided by our commitment to quality, creativity, and client-focused service.
                    </p>
                    <p class="text-lg text-gray-700">
                        At Sign Depot, we believe that every design tells a story. That's why we go beyond traditional
                        advertising materials—we provide solutions that bring your brand to life and leave a lasting
                        impression.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="relative bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ asset('images/assets/about-us-bg.png') }}'); background-size: 100% 100%;">
        <div class="absolute inset-0 bg-white bg-opacity-40"></div>

        <div class="relative z-10 w-2/3 mx-auto px-6 py-16">
            <h2 class="text-5xl font-bold text-center">OUR <span class="text-[#ED3337]">VISION</span></h2>
            <div class="flex justify-center w-2/3 mx-auto">
                <p class="text-lg text-center text-gray-700 mt-4">
                    By 2026, Sign Depot will be the top of mind advertising
                    solutions provider in the philippines.
                </p>
            </div>
        </div>

        <div class="relative z-10 w-2/3 mx-auto px-6 py-16">
            <h2 class="text-5xl font-bold text-center">OUR <span class="text-[#ED3337]">MISSION</span></h2>
            <div class="flex justify-center w-2/3 mx-auto">
                <p class="text-lg text-center text-gray-700 mt-4">
                    We provide impeccable service through innovative
                    advertising solutions that help to promote business,
                    uplift employees and provide profit to stakeholders.
                </p>
            </div>
        </div>

        <div class="relative z-10 w-2/3 mx-auto px-6 py-16">
            <h2 class="text-5xl font-bold text-center">CORE <span class="text-[#ED3337]">VALUES</span></h2>
            <div class="flex justify-center mt-8">
                <img alt="Core Values" class="pl-12" src="{{ asset('images/assets/core-values.png') }}">
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="flex flex-col w-full mx-auto">
            <h2 class="text-5xl font-bold text-center mb-4">THE PEOPLE BEHIND <span class="text-[#ED3337]">OUR
                    WORK</span></h2>
            {{-- <p class="text-center text-gray-600 text-lg mb-12">Meet the dedicated team that brings your vision to life</p> --}}

            @include('components.team-carousel')
        </div>
    </section>

    <section class="py-20">
        <div class="flex flex-col w-2/4 mx-auto">
            <p class="text-center text-4xl">“At Sign Depot, we don’t just create signs—we create solutions that make
                your brand stand out.”</p>
            <div class="flex justify-center">
                <a class="mt-6 bg-white border-2 border-[#D23337] text-[#D23337] px-12 py-3 rounded-lg text-lg font-bold w-fit hover:text-white hover:bg-red-700 transition"
                   href="/contact-us">
                    CONTACT US
                </a>
            </div>
        </div>
    </section>

    <script>
        // Team images data - Replace with your actual team photos
        window.teamImages = [{
                src: '{{ asset('images/teams/sign-depot-team-1.png') }}',
                alt: 'Sign Depot Team',
                title: 'Our Creative Team',
                description: 'Designers and fabricators working together to bring your ideas to life'
            },
            {
                src: '{{ asset('images/teams/sign-depot-team-2.png') }}',
                alt: 'Production Team',
                title: 'Production Excellence',
                description: 'State-of-the-art equipment and skilled craftsmen ensuring quality output'
            },
            {
                src: '{{ asset('images/teams/sign-depot-team-1.png') }}',
                alt: 'Installation Team',
                title: 'Professional Installation',
                description: 'Experienced installers delivering seamless project completion'
            },
            {
                src: '{{ asset('images/teams/sign-depot-team-2.png') }}',
                alt: 'Customer Service',
                title: 'Client-Focused Service',
                description: 'Dedicated team ensuring every project exceeds expectations'
            },
            {
                src: '{{ asset('images/teams/sign-depot-team-1.png') }}',
                alt: 'Management Team',
                title: 'Leadership & Vision',
                description: 'Guiding Sign Depot towards excellence and innovation'
            }
        ];
    </script>

    @include('components.footer')

</body>

</html>
