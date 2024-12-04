<x-layouts.app title="{!! $room->getMetaTitle() !!}" description="{!! $room->getMetaDesc() !!}">

    <x-layouts.app-wrapper :home="$home" >

        {{-- HEADER --}}
        <x-hero title="{{$room->title}}" subtitle="{!!$home->title!!}" bgi="{{asset('storage/' . $room->thumbnail)}}" />


        {{-- short_desc --}}
        {{-- <section class="pb-8 pt-20 lg:py-20 hidden lg:block">
            <x-container class="max-w-screen-xl  flex flex-col  relative">

                <div class="grid xl:grid-cols-3   gap-32 mx-auto max-w-screen-xl ">
                    <div
                        class="border hidden  sticky top-32 h-[400px] p-12 xl:flex flex-col justify-start items-start gap-8">

                        <h2 class="text-fontDark text-xl uppercase font-light">Villa La Roca</h2>

                        <div class="flex justify-center items-center gap-4 ">
                            <x-lucide-heart class="w-8 text-secondary-400" />
                            <span class="text-sm ">
                                {{__('global.room.card-item-1')}}
                            </span>
                        </div>
                        <div class="flex justify-center items-center gap-4 ">
                            <x-lucide-maximize class="w-8 text-secondary-400" />
                            <span class="text-sm ">
                                {{__('global.room.card-item-2')}}
                            </span>
                        </div>
                        <div class="flex justify-center items-center gap-4 pb-8">
                            <x-lucide-sun class="w-8 text-secondary-400" />
                            <span class="text-sm ">
                                {{__('global.room.card-item-3')}}
                            </span>
                        </div>



                        <x-link href="#" target="_blank" rel="noreferrer nofollow"
                            title=" {{__('global.book')}}" />
                    </div>
                   
                        <div class="xl:col-span-2 flex flex-col  gap-8 ">

                          



                            <img src="{{asset('/storage/' . $room->thumbnail)}}"
                                alt="zdjęcie przedstawiające pokoj {{$room->title}} w "
                                loading="lazy" class="aspect-[3/2] shadow-md">

                        </div>
                    </div>






            </x-container>
        </section> --}}

        {{-- description --}}
        <section class="pb-8 pt-20">
            <x-container class="max-w-screen-xl mx-auto md:opacity-0 fadeIn-animation">

                <div class="flex flex-col lg:flex-row gap-y-12">

                    <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative lg:pr-12 ">


                        @foreach (collect($room->gallery)->slice(0, 3) as $img)
                        <img src="{{ asset('storage/' . $img) }}"
                            alt="zdjęcie przedstawiające pokoj {{$room->title}} w "
                            class="w-full  aspect-square max-h-[500px] object-cover shadow-md" loading="lazy">
                        @endforeach

                    </div>
                    <div class="w-full lg:w-[45%] lg:pl-12  sticky top-32 space-y-6 h-full">

                        <div class="prose max-w-full font-light">

                            {!! $room->desc !!}
                        </div>
                        <div class="prose font-light pt-3">
                            <x-title> Wyposażenie:</x-title>
                            {!! $room->equipment !!}
                        </div>
                    </div>
                </div>

            </x-container>
        </section>


        {{-- gallery --}}
        <section class="py-20 md:opacity-0 fadeIn-animation ">

            {{-- heading --}}
            <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center pb-4">
                <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight ">
                   Galeria
                </h2>

            </div>

            {{-- swiper --}}
            <div class="swiper attraction-gallery-swiper">
                <div class="py-10  swiper-wrapper">

                    @foreach ($room->gallery as $img)
                    <a href="{{ asset('storage/' . $img) }}" class=" swiper-slide glightbox">

                        <img src="{{ asset('storage/' . $img) }}"
                            alt="zdjęcie przedstawiające pokoj {{$room->title}} w "
                            class=" h-full w-full object-cover aspect-square shadow-md" loading="lazy">
                    </a>
                    @endforeach
                </div>


            </div>
        </section>

        {{-- CTA --}}
        {{-- @if ($cta)
        <x-cta :cta="$cta" />
        @endif --}}
<x-cta :cta="$cta"/>

          {{-- other apartments --}}


    <section class="pt-20 pb-16 md:opacity-0 fadeIn-animation">
        <x-container class="max-w-screen-2xl 2xl:px-12">



            <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight text-center">
              Pozostałe pokoje
            </h2>


            <div class="swiper other-rooms-carousel-swiper">
                <div class="py-10  swiper-wrapper">

                    @foreach ($otherRooms as $room)

                <x-room-card :room="$room" :home="$home" size="md:w-[80%] lg:w-1/3 swiper-slide" />

                @endforeach
                </div>


            </div>

        </x-container>
    </section>

    </x-layouts.app-wrapper>
</x-layouts.app>