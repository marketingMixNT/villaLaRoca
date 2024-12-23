
<x-shared.preloader :home="$home"/>

<x-shared.header.header :home="$home" :rooms="$rooms"/>

<x-shared.header.mobile-menu  :home="$home" :rooms="$rooms"/>

{{ $slot }}

<x-shared.footer :home="$home"/>

<x-shared.mobile-buttons.mobile-buttons :home="$home" />


<x-hotres.places/>

