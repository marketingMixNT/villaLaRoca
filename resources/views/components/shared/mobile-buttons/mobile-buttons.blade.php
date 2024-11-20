<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-20 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300  ">

    <x-shared.mobile-buttons.mobile-button-item href="#" target="_blank">
        <x-lucide-pointer class="size-5  text-fontDark" />
        <span class="text-xs uppercase  text-fontDark">{{__('global.mobile-buttons.booking')}}</span>
    </x-shared.mobile-buttons.mobile-button-item>
    {{-- <x-mobile-button-item href="{{$home->booking_link}}" target="_blank">
        <x-lucide-pointer class="size-5  text-fontDark" />
        <span class="text-xs uppercase  text-fontDark">{{__('global.mobile-buttons.booking')}}</span>
    </x-mobile-button-item> --}}

    <x-shared.mobile-buttons.mobile-button-item href="#">
        <x-lucide-images class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.gallery')}}</span>
    </x-shared.mobile-buttons.mobile-button-item>
    {{-- <x-mobile-button-item href="{{route('gallery')}}">
        <x-lucide-images class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.gallery')}}</span>
    </x-mobile-button-item> --}}

    <x-shared.mobile-buttons.mobile-button-item href="tel:+48">
        <x-lucide-phone class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.phone')}}</span>
    </x-shared.mobile-buttons.mobile-button-item>
    {{-- <x-mobile-button-item href="tel:+48{{$home->phone}}">
        <x-lucide-phone class="size-5  text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.phone')}}</span>
    </x-mobile-button-item> --}}

    <x-shared.mobile-buttons.mobile-button-item href="#" target="_blank">
        <x-lucide-map-pin class="size-5 text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.localization')}}</span>
    </x-shared.mobile-buttons.mobile-button-item>
    {{-- <x-mobile-button-item href="{{$home->map_link}}" target="_blank">
        <x-lucide-map-pin class="size-5 text-fontLight" />
        <span class="text-xs uppercase  text-fontLight">{{__('global.mobile-buttons.localization')}}</span>
    </x-mobile-button-item> --}}

</nav>