@props(['home'])

<div id="menu"
    class="menu-close fixed top-0 left-0 bottom-0 right-0 flex flex-col justify-center items-center  gap-24 bg-primary-400 text-fontDark z-50" style="z-index: 1000000">

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
        @foreach ($home->socials as $social )
        <x-socials :social="$social" dark />
        @endforeach
     

    </div>
</div>