<ul class="hidden xl:flex justify-center items-center gap-8 2xl:gap-12 text-lg">

    <x-shared.header.nav-item href="{{route('about')}}" activeRoute="about">{{__('global.nav.1')}}</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('neighborhood')}}" activeRoute="neighborhood">{{__('global.nav.2')}}
    </x-shared.header.nav-item>

    <x-shared.header.nav-item-dropdown href="{{route('room.index')}}" activeRoute="room.index" title="{{__('global.nav.3')}}">
        <x-shared.header.dropdown>
            @foreach ($rooms as $room)
            <x-shared.header.dropdown-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-shared.header.dropdown-item>
            @endforeach

        </x-header.dropdown>
    </x-header.nav-item-dropdown>

    <x-shared.header.nav-item href="{{route('house-heart')}}" activeRoute="house-heart">{{__('global.nav.4')}}
    </x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('relax-zone')}}" activeRoute="relax-zone">{{__('global.nav.5')}}
    </x-shared.header.nav-item>

    <x-shared.header.nav-item-dropdown href="#" activeRoute="" title="{{__('global.nav.10')}}">

        <x-shared.header.dropdown>
            <x-shared.header.dropdown-item href="{{route('packages.index',)}}" activeRoute="packages.index">{{__('global.nav.6')}}</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('exclusive-home',)}}" activeRoute="exclusive-home">{{__('global.nav.7')}}</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('breakfast',)}}" activeRoute="breakfast">{{__('global.nav.8')}}</x-shared.header.dropdown-item>
            <x-shared.header.dropdown-item href="{{route('attractions',)}}" activeRoute="attractions">{{__('global.nav.9')}}</x-shared.header.dropdown-item>

        </x-shared.header.dropdown>

    </x-shared.header.nav-item-dropdown>

    {{-- <x-shared.header.nav-item href="{{route('attractions')}}" activeRoute="attractions">Atrakcje
    </x-shared.header.nav-item> --}}

    <x-shared.header.nav-item href="{{route('gallery')}}" activeRoute="gallery">{{__('global.nav.11')}}</x-shared.header.nav-item>

    <x-shared.header.nav-item href="{{route('voucher')}}" activeRoute="voucher">{{__('global.nav.12')}}</x-shared.header.nav-item>

    <li>
        <x-button-link class="hidden xl:block " href="{{$home->booking_link}}">{{__('global.book')}}</x-button-link>
    </li>
</ul>