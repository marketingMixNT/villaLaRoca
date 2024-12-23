@props(['home','rooms','headerScroll'=>false])
<x-shared.preloader :home="$home"/>

@if ($headerScroll)
<x-shared.header.header :home="$home" :rooms="$rooms" shownOnScroll/>
@else
<x-shared.header.header :home="$home" :rooms="$rooms" />
@endif


<x-shared.header.mobile-menu  :home="$home" :rooms="$rooms"/>

{{ $slot }}

<x-shared.footer :home="$home"/>

<x-shared.mobile-buttons.mobile-buttons :home="$home" />


<x-hotres.places/>

