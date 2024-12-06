@props(['class' => '','rooms'])


<ul class="{{$class}}">

    <x-shared.header.nav-item-mobile href="{{route('about')}}" activeRoute="about">{{__('global.nav.1')}}
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('neighborhood')}}" activeRoute="neighborhood">{{__('global.nav.2')}}
    </x-shared.header.nav-item-mobile>

    {{-- dropdown --}}
    <x-shared.header.dropdown-mobile title="{{__('global.nav.3')}}" id="dropdown-rooms">

        @foreach ($rooms as $room)
        <x-shared.header.dropdown-mobile-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-shared.header.dropdown-mobile-item>
        @endforeach
        

    </x-shared.header.dropdown-mobile>

    <x-shared.header.nav-item-mobile href="{{route('house-heart')}}" activeRoute="house-heart">{{__('global.nav.4')}}
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('relax-zone')}}" activeRoute="relax-zone">{{__('global.nav.5')}}
    </x-shared.header.nav-item-mobile>

    {{-- dropdown --}}

    <x-shared.header.dropdown-mobile title="{{__('global.nav.10')}}" id="dropdown-offer">

        <x-shared.header.dropdown-mobile-item href="{{route('packages.index',)}}" activeRoute="packages.index">{{__('global.nav.6')}}
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('exclusive-home',)}}" activeRoute="exclusive-home">{{__('global.nav.7')}}
            
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('breakfast',)}}" activeRoute="breakfast">{{__('global.nav.8')}}
        </x-shared.header.dropdown-mobile-item>

        <x-shared.header.dropdown-mobile-item href="{{route('attractions',)}}" activeRoute="attractions">{{__('global.nav.9')}}
        </x-shared.header.dropdown-mobile-item>
        


    </x-shared.header.dropdown-mobile>


    <x-shared.header.nav-item-mobile href="{{route('gallery')}}" activeRoute="gallery">{{__('global.nav.11')}}
    </x-shared.header.nav-item-mobile>

    <x-shared.header.nav-item-mobile href="{{route('voucher')}}" activeRoute="voucher">{{__('global.nav.12')}}
    </x-shared.header.nav-item-mobile>
</ul>