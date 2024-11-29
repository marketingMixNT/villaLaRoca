@props(['class' => ''])

<ul class="{{$class}}">
    
    <x-shared.header.nav-item-mobile href="{{route('about')}}" activeRoute="about">O Villi
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('neighborhood')}}" activeRoute="neighborhood">Okolice
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('room.index')}}" activeRoute="rooms">Pokoje
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('house-heart')}}" activeRoute="house-heart">Serce domu
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('relax-zone')}}" activeRoute="relax-zone">Strefa Relaksu
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="" activeRoute="">Atrakcje</x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('gallery')}}" activeRoute="gallery">Galeria
    </x-shared.header.nav-item-mobile>
</ul>