{{--
<x-preloader :home="$home" /> --}}
<x-shared.preloader />
{{-- <x-shared.topbar /> --}}
<x-shared.header.header />


{{--
<x-header.header-secondary :home="$home" :rooms="$rooms" /> --}}

<x-shared.header.mobile-menu  />

{{ $slot }}

<x-shared.footer/>

{{-- <x-shared.scroll-to-top /> --}}
<x-shared.mobile-buttons.mobile-buttons />

{{-- <x-footer :home="$home" /> --}}
{{--
<x-map :home="$home" />
<x-mobile-buttons :home="$home" />

<x-scroll-to-top />




<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async></script> --}}