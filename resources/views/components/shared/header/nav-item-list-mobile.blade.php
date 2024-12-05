@props(['class' => '','rooms'])


<ul class="{{$class}}">

    <x-shared.header.nav-item-mobile href="{{route('about')}}" activeRoute="about">O Villi
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('neighborhood')}}" activeRoute="neighborhood">Atrakcje okolicy
    </x-shared.header.nav-item-mobile>

    {{-- dropdown --}}
    <x-shared.header.dropdown-mobile title="Pokoje" id="dropdown-rooms">

        @foreach ($rooms as $room)
        <x-shared.header.dropdown-mobile-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-shared.header.dropdown-mobile-item>
        @endforeach
        

    </x-shared.header.dropdown-mobile>

    <x-shared.header.nav-item-mobile href="{{route('house-heart')}}" activeRoute="house-heart">Serce domu
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('relax-zone')}}" activeRoute="relax-zone">Strefa Relaksu
    </x-shared.header.nav-item-mobile>

    {{-- dropdown --}}

    <x-shared.header.dropdown-mobile title="Oferta" id="dropdown-offer">

        <x-shared.header.dropdown-mobile-item href="{{route('packages.index',)}}" activeRoute="packages.index">Pakiety
            pobytowe
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('exclusive-home',)}}" activeRoute="exclusive-home">Dom na wyłączność
            
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('breakfast',)}}" activeRoute="breakfast">Śniadania
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('attractions',)}}" activeRoute="attractions">Atrakcje
        </x-shared.header.dropdown-mobile-item>
        


    </x-shared.header.dropdown-mobile>


    <x-shared.header.nav-item-mobile href="{{route('gallery')}}" activeRoute="gallery">Galeria
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('voucher')}}" activeRoute="voucher">Atrakcje
    </x-shared.header.nav-item-mobile>
</ul>