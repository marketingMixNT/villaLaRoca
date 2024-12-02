

@if($home->slider_movie)

<div class="relative   w-full h-screen ">

    <x-shared.header.hamburger class="absolute top-12 right-12 z-40" />


    <video autoplay loop muted poster="https://medbeautycenter.com.pl/assets/images/mbc_11.webp"
        class="absolute inset-0 w-full h-full object-cover ">
        <source src="{{asset('assets/hero.mp4')}}" type="video/mp4">

        Twoja przeglądarka nie obsługuje odtwarzacza wideo.
    </video>

    <div class="bg-black absolute top-0 right-0 left-0 bottom-0 opacity-50"></div>


    <div class=" z-40 flex justify-center items-center flex-col w-full h-full gap-12">
        <img src="{{asset('storage/' . $home->logo)}}" alt="logo {{$home->title}}" class="sm:w-[250px]  w-[300px] lg:w-[450px] z-40">
        <h1 class=" px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight pb-44"
                style="line-height: 1.2">
                {{$home->slider_title}} 
                
                @if($home->slider_subtitle)
                <br> <span class=" text-sm lg:text-2xl font-text ">
                    Lorem ipsum dolor sit amet.</span>
                @endif
                
            </h1>

        <x-button-link href="#" class="z-40 mt-12 lg:mt-32">tutaj będzie panel do rezerwacji</x-button-link>
    </div>



    <a href="#{{__('global.anchor')}}" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
        aria-label="Przejdź do sekcji o nas">

        <x-lucide-chevron-down class="animate-pulse w-6  text-white" />




    </a>
</div>

@else
<div class="relative swiper hero-carousel  w-full h-screen ">

    <x-shared.header.hamburger class="absolute top-12 right-12 z-50" />

    <div class="swiper-wrapper">


        <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 z-40 flex justify-center items-center flex-col">
            <img src="{{asset('storage/' . $home->logo)}}" alt="logo {{$home->title}}" class="sm:w-[250px]  w-[300px] lg:w-[450px] z-40">
            <h1 class=" px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight pb-44"
                style="line-height: 1.2">
                {{$home->slider_title}} 
                
                @if($home->slider_subtitle)
                <br> <span class=" text-sm lg:text-2xl font-text ">
                    Lorem ipsum dolor sit amet.</span>
                @endif
                
            </h1>


            <x-button-link href="#" class=" ">tutaj będzie panel do rezerwacji</x-button-link>

        </div>






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





        <a href="#{{__('global.anchor')}}" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />




        </a>
    </div>
</div>

@endif