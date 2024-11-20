

<ul class="hidden xl:flex justify-center items-center gap-12 text-lg">

    {{-- <x-shared.header.nav-item-dropdown href="" activeRoute="room.index" title="Garden & Spa">
        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="" activeRoute="">test</x-shared.header.dropdown-item>
  

        </x-shared.header.dropdown>
    </x-header.nav-item-dropdown> --}}


    <x-shared.header.nav-item href="#" activeRoute="home">O nas</x-shared.header.nav-item>
    
    <x-shared.header.nav-item-dropdown href="" activeRoute="" title="Villa">
        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="" activeRoute="home">Pokoje</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="" activeRoute="">Część Wspólna</x-shared.header.dropdown-item>
  

        </x-shared.header.dropdown>
    </x-shared.header.nav-item-dropdown>


   


    <x-shared.header.nav-item href="#" activeRoute="">Garden & Spa</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Okolica</x-shared.header.nav-item>
    <x-shared.header.nav-item href="#" activeRoute="">Kontakt</x-shared.header.nav-item>

    <li>
        <x-button-link class="hidden xl:block ">Zarezerwuj</x-button-link>
    </li>
</ul>