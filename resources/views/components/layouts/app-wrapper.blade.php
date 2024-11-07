{{--
<x-preloader :home="$home" /> --}}
<x-shared.topbar />
<x-shared.header.header />
{{--
<x-header.header-secondary :home="$home" :rooms="$rooms" /> --}}

<x-shared.header.mobile-menu  />

{{ $slot }}

{{--
<x-map :home="$home" />
<x-footer :home="$home" />
<x-mobile-buttons :home="$home" />

<x-scroll-to-top />




<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async></script> --}}