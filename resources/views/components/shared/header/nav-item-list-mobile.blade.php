@props(['class' => ''])

<ul class="{{$class}}">

   


    <x-shared.header.nav-item-mobile href="{{route('about')}}" activeRoute="about">O nas</x-shared.header.nav-item-mobile>
   

    <x-shared.header.dropdown-mobile title="Villa">
        
        <x-shared.header.dropdown-mobile-item href="{{route('villa.rooms')}}" activeRoute="villa.rooms">Pokoje</x-shared.header.dropdown-mobile-item>
        <x-shared.header.dropdown-mobile-item href="{{route('villa.common')}}" activeRoute="villa.common">Część Wspólna</x-shared.header.dropdown-mobile-item>
       
      
    
    </x-shared.header.dropdown-mobile>


    <x-shared.header.nav-item-mobile href="{{route('garden-and-spa')}}" activeRoute="garden-and-spa">Garden & Spa</x-shared.header.nav-item-mobile>
    <x-shared.header.nav-item-mobile href="{{route('neighborhood')}}" activeRoute="neighborhood">Okolica</x-shared.header.nav-item-mobile>
    <x-shared.header.nav-item-mobile href="{{route('gallery')}}" activeRoute="gallery">Galeria</x-shared.header.nav-item-mobile>
    <x-shared.header.nav-item-mobile href="{{route('contact')}}" activeRoute="contact">Kontakt</x-shared.header.nav-item-mobile>

    
</ul>