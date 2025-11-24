<footer class="flex flex-col justify-between items-center bg-[#A92729] p-12 pb-0">
    <div class="grid grid-cols-3">
        
        <div class="flex flex-col items-center align-middle">
            <img class="h-14 w-64" src="{{ asset('images/assets/sign-depot-logo-white.png') }}" alt="Sign Depot logo">
            <div class="grid grid-cols-4 gap-4 place-items-center mt-4">
                <img class="h-6 w-auto object-contain" src="{{ asset('images/assets/thee-print-logo-white.png') }}" alt="Thee Print logo">
                <img class="h-6 w-auto object-contain" src="{{ asset('images/assets/karatula-logo-white.png') }}" alt="Karatula logo">
                <img class="h-6 w-auto object-contain" src="{{ asset('images/assets/yison-logo-white.png') }}" alt="Yison logo">
                <img class="h-6 w-auto object-contain" src="{{ asset('images/assets/visayads-logo-white.png') }}" alt="Visayads logo">
            </div>
        </div>

        
        <div class="flex flex-col items-center align-middle">
            <div class="w-fit space-y-2">
                <h1 class="text-lg font-bold text-white">CONTACT US</h1>
                <div class="flex place-items-center">
                    <x-icons.mail-icon />
                    <p class="ml-2 text-base text-white">info@dsigndepot.com.ph</p>
                </div>
                <div class="flex place-items-center">
                    <x-icons.facebook-icon />
                    <p class="ml-2 text-base text-white">www.facebook.com/signdepot.ph</p>
                </div>
                <div class="flex place-items-center">
                    <x-icons.phone-icon />
                    <p class="ml-2 text-base text-white">(02) 124-4567</p>
                </div>
            </div>
            
        </div>


        <div class="flex flex-col items-center align-middle">
            <div class="flex justify-center items-center align-middle">
                <ul class="flex flex-col space-y-2">
                    <li><a href="/" class="text-white text-lg hover:underline">Home</a></li>
                    <li><a href="/" class="text-white text-lg hover:underline">Services</a></li>
                    <li><a href="/" class="text-white text-lg hover:underline">About Us</a></li>
                    <li><a href="/" class="text-white text-lg hover:underline">Contact Us</a></li>
                </ul>
            </div>

            {{-- <a href="/contact-us" class="mt-6 bg-[#A92729] text-white border border-white px-6 py-3 rounded-lg text-lg font-bold w-fit hover:text-[#A92729] hover:bg-white transition">
            Inquire Now!
            </a> --}}
            
        </div>
    </div>

    <div class="py-4">
        <p class="text-white text-center">© 2025 D’Sign Depot Central PH Inc. All rights reserved.</p>
    </div>

</footer>