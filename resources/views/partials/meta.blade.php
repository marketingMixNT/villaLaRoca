<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P8XSSRMN');</script>
    <!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords" content="willa Zakopane, noclegi w Tatrach, pokoje z widokiem na góry, luksusowe apartamenty Zakopane, wypoczynek w górach, atrakcje Zakopane i okolice, romantyczny pobyt w Tatrach, relaks w górach, noclegi blisko szlaków, pokoje z tarasem w Zakopanem">

<meta name="author" content="marketingmix.pl">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://villalaroca.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/villa-la-roca.webp')}}">

{{-- cookieEasy --}}
<script async src="https://app.cookieasy.pl/plugin/i0ahh25gp6n18xo.js"></script>