<div id="menu"
    class="menu-close fixed top-0 left-0 bottom-0 right-0 flex flex-col justify-center items-center  gap-24 bg-primary-400 text-fontDark z-50">

    {{-- CLOSE BUTTON --}}
    <x-shared.header.close-button class="absolute right-5 top-5" />

    <!--NAV ITEMS-->
    <x-shared.header.nav-item-list-mobile class="flex flex-col justify-center items-center gap-12 text-lg" />

    <!--LANGUAGE SWITCHER-->
    <div class="absolute right-5 bottom-5">
        <x-shared.header.language-switcher />
    </div>
    <!--SOCIALS-->
    <div class="absolute left-5 bottom-5 lg:static flex justify-center items-center gap-6 ">
        <a href="https://www.facebook.com/people/Hotel-Jan/100057063776456/" target="_blank" rel="norefferer nofollow"
            aria-label="facebook">
            <x-lucide-facebook class="w-4  hover:scale-90 duration-300 opacity-70" />
        </a>
        <a href="https://www.instagram.com/hoteljan.official/" target="_blank" rel="norefferer nofollow"
            aria-label="instagram">
            <x-lucide-instagram class="w-4  hover:scale-90 duration-300 opacity-70" />
        </a>

    </div>
</div>