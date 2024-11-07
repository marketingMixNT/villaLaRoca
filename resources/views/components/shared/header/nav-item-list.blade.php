@props(['class' => ''])

<ul class="{{$class}}">
    <x-shared.header.nav-item href="#" activeRoute="">O nas</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Pokoje</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Oferty specjalne</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Wellness</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Okolica</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Kontakt</x-shared.header.nav-item>

    <li>
        <x-button><a href="" class="hidden xl:block">Zarezerwuj</a></x-button>
    </li>
</ul>