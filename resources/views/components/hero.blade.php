@props(['title'=>"",'subtitle'=>"",'bgi'=>""])

<div class="relative flex flex-col justify-center items-center gap-24 h-screen sm:h-[calc(80vh-84px)]  lg:h-[calc(90vh-84px)] 2xl:h-[70vh]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-400 bg-blend-multiply text-fontLight  "
    style="background-image: url({{$bgi}})">

    <x-shared.header.hamburger class="absolute top-12 right-12 z-50"/>


    <!--HEADING-->
    <div class="flex flex-col justify-center items-center text-center gap-2"> 

        <span class=" text-sm 2xl:text-base font tracking-widest uppercase ">{{$subtitle}}</span>
        <h1 class="text-center text-4xl sm:text-5xl md:text-7xl  tracking-wider uppercase font-heading ">
            {{$title}}
        </h1>
    </div>

   
    <x-button-link href="#" class=" ">tutaj będzie panel do rezerwacji</x-button-link>

        {{-- <x-booking-bar  class="absolute bottom-12 sm:bottom-24 2xl:bottom-44 left-0 right-0 md:mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white "/> --}}
        
   

   
</div>