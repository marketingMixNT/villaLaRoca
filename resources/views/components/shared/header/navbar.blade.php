<nav class="flex justify-between items-center px-6 xl:px-20 py-5 shadow-xl  ">

    <a href="{{route('home')}}" aria-label="logo"><img src="{{asset('assets/logo/logo.svg')}}" alt="logo"></a>

    <x-shared.header.nav-item-list class="hidden xl:flex justify-center items-center gap-12 text-lg" />

    <x-shared.header.hamburger class=" xl:hidden" />

</nav>