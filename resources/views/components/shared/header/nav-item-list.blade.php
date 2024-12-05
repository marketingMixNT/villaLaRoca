<ul class="hidden xl:flex justify-center items-center gap-8 2xl:gap-12 text-lg">



   


    <x-shared.header.nav-item href="{{route('about')}}" activeRoute="about">O Villi</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('neighborhood')}}" activeRoute="neighborhood">Atrakcje okolicy
    </x-shared.header.nav-item>

    <x-shared.header.nav-item-dropdown href="{{route('room.index')}}" activeRoute="room.index" title="Pokoje">
        <x-shared.header.dropdown>
            @foreach ($rooms as $room)
            <x-shared.header.dropdown-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-shared.header.dropdown-item>
            @endforeach

        </x-header.dropdown>
    </x-header.nav-item-dropdown>

    <x-shared.header.nav-item href="{{route('house-heart')}}" activeRoute="house-heart">Serce domu
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('relax-zone')}}" activeRoute="relax-zone">Strefa Relaksu
    </x-shared.header.nav-item>

    <x-shared.header.nav-item-dropdown href="#" activeRoute="" title="Oferta">

        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="{{route('packages.index',)}}" activeRoute="packages.index">Pakiety pobytowe</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('exclusive-home',)}}" activeRoute="exclusive-home">Dom na wyłączność</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('breakfast',)}}" activeRoute="breakfast">Śniadania</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('attractions',)}}" activeRoute="attractions">Atrakcje</x-shared.header.dropdown-item>

        </x-shared.header.dropdown>

    </x-shared.header.nav-item-dropdown>

    {{-- <x-shared.header.nav-item href="{{route('attractions')}}" activeRoute="attractions">Atrakcje
    </x-shared.header.nav-item> --}}

    <x-shared.header.nav-item href="{{route('gallery')}}" activeRoute="gallery">Galeria</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('voucher')}}" activeRoute="voucher">Voucher</x-shared.header.nav-item>

    <li>
        <x-button-link class="hidden xl:block " href="{{$home->booking_link}}">Zarezerwuj</x-button-link>
    </li>
</ul>