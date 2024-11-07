{{-- <x-preloader :home="$home" />
<x-header.header :home="$home" :rooms="$rooms" />
<x-header.header-secondary :home="$home" :rooms="$rooms" />
<x-header.mobile-menu :home="$home" :rooms="$rooms" /> --}}

{{ $slot }}

{{-- <x-map :home="$home" />
<x-footer :home="$home" />
<x-mobile-buttons :home="$home" />

<x-scroll-to-top />




<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async></script>  --}}

