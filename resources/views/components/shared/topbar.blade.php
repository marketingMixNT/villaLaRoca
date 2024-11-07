<div class="hidden sm:flex justify-between items-center px-6 py-3 bg-red-200 ">

    {{-- CONTACT --}}
    <div class="flex justify-between xl:justify-center items-center gap-12 w-full xl:w-auto">
        {{-- address --}}
        <a href="#" class="flex justify-center items-center  gap-1 text-xs font-normal">
            <x-lucide-map-pin class="w-4" /> Wojdyłówka 28, Kościelisko
        </a>
        {{-- --}}
        <a href="#" class="flex justify-center items-center  gap-1 text-xs font-normal">
            <x-lucide-phone class="w-4" /> +48 123 456 789
        </a>
    </div>

    {{-- LANGUAGE SWITCHER --}}
    <div class="hidden xl:block">
        <x-shared.header.language-switcher />
    </div>

</div>