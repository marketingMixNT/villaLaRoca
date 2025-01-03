@props(['home','rooms'])

<nav class="flex justify-between items-center px-6 2xl:px-20 py-2 shadow-xl max-w-screen-max ">

    <a href="{{route('home')}}" aria-label="logo"><img src="{{asset('storage/' . $home->logo)}}" alt="logo {{$home->title}}" class="w-20 sm:w-28"></a>

    <x-shared.header.nav-item-list  :home="$home" :rooms="$rooms"  />

    <x-shared.header.hamburger class=" xl:hidden" />

</nav>