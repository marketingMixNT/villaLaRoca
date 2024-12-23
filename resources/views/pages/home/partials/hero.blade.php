

@if($home->slider_movie)

<div class="relative   w-full h-screen ">

    <x-shared.header.hamburger class="absolute top-12 right-12 z-40" />

    <div class="absolute top-12 left-12 z-40 h-[40px] flex justify-center items-center">
        <ul id="languageSwitcher"
    class="flex justify-center items-center gap-2 list-none text-sm ">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li>
        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            class="relative uppercase hover:text-primary-600 duration-500 text-fontLight text-sm font-light tracking-wider {{ App::getLocale() === $localeCode ? ' before:absolute before:bottom-0 before:left-0 before:w-[70%] before:h-[1px] before:bg-secondary-100 active' : '' }}">
            {{ strtoupper($localeCode) }}
        </a>
    </li>
    @endforeach
</ul>
    </div>


    <video autoplay loop muted poster="{{$home->poster}}"
        class="absolute inset-0 w-full h-full object-cover ">
        <source src="{{asset('storage/' . $home->slider_movie)}}" type="video/mp4">
        {{-- <source src="{{asset('assets/villa_la_roca.webm')}}" type="video/webm"> --}}

       {{__('global.movie')}}
    </video>

    <div class="bg-black absolute top-0 right-0 left-0 bottom-0 opacity-50"></div>


    <div class=" z-50 flex justify-center items-center flex-col w-full h-full gap-12" style="z-index:10000">

        <a href="{{route('home')}}" class="z-40">
            <img src="{{asset('storage/' . $home->logo)}}" alt="logo {{$home->title}}" class="sm:w-[250px]  w-[300px]  ">
        </a>
        
        <h1 class=" px-6 md:px-12 text-center text-2xl sm:text-3xl  lg:text-4xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight sm:pb-44"
                style="line-height: 1.2">
                {{$home->slider_title}} 
                
                @if($home->slider_subtitle)
                <br> <span class=" text-sm lg:text-2xl font-text ">
                   {{$home->slider_subtitle}}</span>
                @endif
                
            </h1>

            <div class=" z-50 ">

                <x-booking-panel />
            </div>
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
            <h1 class=" px-6 md:px-12 text-center text-3xl sm:text-4xl  lg:text-5xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight pb-12 sm:pb-44"
                style="line-height: 1.2">
                {{$home->slider_title}} 
                
                @if($home->slider_subtitle)
                <br> <span class=" text-sm lg:text-2xl font-text ">
                    {{$home->slider_subtitle}}</span>
                @endif
                
            </h1>


            <div class=" z-50 pb-12">

                <x-booking-panel />
            </div>

        </div>






        @foreach ($home->slider_images as $slide)


        {
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('storage/' .  $slide)}}" alt="{{$home->slider_title}}"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-20"></div>
        </div>
        }
        @endforeach
       





        <a href="#{{__('global.anchor')}}" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />




        </a>
    </div>
</div>

@endif