<ul class="hidden xl:flex justify-center items-center gap-12 text-lg">

    <x-shared.header.nav-item href="{{route('about')}}" activeRoute="about">O Villi</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('neighborhood')}}" activeRoute="neighborhood">Okolice
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('room.index')}}" activeRoute="rooms">Pokoje
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('house-heart')}}" activeRoute="house-heart">Serce domu
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('relax-zone')}}" activeRoute="relax-zone">Strefa Relaksu
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('attractions')}}" activeRoute="attractions">Atrakcje
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('gallery')}}" activeRoute="gallery">Galeria</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('voucher')}}" activeRoute="voucher">Voucher</x-shared.header.nav-item>

    <li>
        <x-button-link class="hidden xl:block " href="{{$home->booking_link}}">Zarezerwuj</x-button-link>
    </li>
</ul>