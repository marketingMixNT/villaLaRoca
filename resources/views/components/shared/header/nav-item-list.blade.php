

<ul class="hidden xl:flex justify-center items-center gap-12 text-lg">

    {{-- <x-shared.header.nav-item-dropdown href="" activeRoute="room.index" title="Garden & Spa">
        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="" activeRoute="">test</x-shared.header.dropdown-item>
  

        </x-shared.header.dropdown>
    </x-header.nav-item-dropdown> --}}


    <x-shared.header.nav-item href="{{route('about')}}" activeRoute="about">O nas</x-shared.header.nav-item>
    
    <x-shared.header.nav-item-dropdown  title="Villa">
        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="{{route('villa.rooms')}}" activeRoute="villa.rooms">Pokoje</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('villa.common')}}" activeRoute="villa.common">Część Wspólna</x-shared.header.dropdown-item>
  

        </x-shared.header.dropdown>
    </x-shared.header.nav-item-dropdown>


   


    <x-shared.header.nav-item href="{{route('garden-and-spa')}}" activeRoute="garden-and-spa">Garden & Spa</x-shared.header.nav-item>
    <x-shared.header.nav-item href="{{route('neighborhood')}}" activeRoute="neighborhood">Okolica</x-shared.header.nav-item>
    <x-shared.header.nav-item href="{{route('gallery')}}" activeRoute="gallery">Galeria</x-shared.header.nav-item>
    <x-shared.header.nav-item href="{{route('contact')}}" activeRoute="contact">Kontakt</x-shared.header.nav-item>

    <li>
        <x-button-link class="hidden xl:block ">Zarezerwuj</x-button-link>
    </li>
</ul>