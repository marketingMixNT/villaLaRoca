<div class="relative swiper hero-carousel  w-full h-[calc(100vh-131px)] ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}

        {{-- <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight"
            style="line-height: 1.2">
            {{$home->slider_title}} <br> <span class=" text-sm lg:text-2xl font-text ">
                {{$home->slider_subtitle}}</span>
        </h1> --}}


<div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 z-40 flex justify-center items-center flex-col">
    <h1 class=" px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight pb-44"
    style="line-height: 1.2">
   Villa la Roca <br> <span class=" text-sm lg:text-2xl font-text ">
       Lorem ipsum dolor sit amet.</span>
</h1>


<x-button-link href="#" class=" ">tutaj będzie panel do rezerwacji</x-button-link>

</div>


        {{-- <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight pb-32"
            style="line-height: 1.2">
           Villa la Roca <br> <span class=" text-sm lg:text-2xl font-text ">
               Lorem ipsum dolor sit amet.</span>
        </h1> --}}

        {{-- SLIDES --}}



        {{-- @foreach ($home->slider_images as $slide)


        {
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('storage/' .  $slide)}}" alt="{{$home->slider_title}}"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-20"></div>
        </div>
        }
        @endforeach --}}

      


        
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('assets/images/1600/villa-la-roca-11.webp')}}" alt="www"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('assets/images/1600/villa-la-roca-46.webp')}}" alt="www"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('assets/images/1600/villa-la-roca-72.webp')}}" alt="www"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        
      


        {{-- RESERVATION PANEL --}}

        {{-- <x-booking-bar  class="absolute bottom-12 sm:bottom-24 2xl:bottom-44 left-0 right-0 md:mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white "/> --}}

        {{-- ANCHOR --}}
        <a href="#{{__('global.anchor')}}" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />




        </a>
    </div>
</div>