<!--CONTAINER-->
<section class="pt-12 pb-20 relative overflow-hidden">

    <img src="{{asset('assets/images/mandala.png')}}" alt="" class="absolute -bottom-64 -right-52  opacity-5 spin -z-10">
    <x-container class=" max-w-screen-2xl">

        <div class="grid lg:grid-cols-3 gap-12 lg:gap-20 2xl:gap-32 pt-12 lg:py-20 ">



            {{-- <div class="flex flex-col justify-between items-start w-full  mx-auto order-1 lg:order-none">
                <div class="w-full lg:h-[60%] overflow-hidden ">
                    <div class="w-full h-full object-cover  ">
                        <img src="{{asset('storage/' . $home->travel_images[0] )}}"
                            alt="widok miasta {{$home->city}}"
                            class="w-full h-full object-cover shadow-md aspect-[3/2] max-w-[600px] mx-auto" loading="lazy" width="420"
                            height="480">
                    </div>
                </div>

                <div
                    class="pt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12 ">


                    <x-link href="{{route('travels')}}" title="{{__('global.travel-link')}}" aria="Lokalne atrakcje"/>
                </div>
            </div>



            <div class="flex flex-col justify-between items-start gap-12 w-full mx-auto ">

                <div class="flex flex-col justify-between items-center gap-12 ">
                    <x-title>
                        {{$home->travel_heading}}</x-title>
                    <x-text-wrapper>  {!!$home->travel_text!!}
                    </x-text-wrapper>

          
                </div>
                <img src="{{asset('storage/' . $home->travel_images[1] )}}" alt=" widok miasta {{$home->city}}"
                    class=" w-full object-cover shadow-md  aspect-[3/2] max-w-[600px] mx-auto" loading="lazy" width="430" height="320">
            </div>
            <div class="flex flex-col justify-start w-full mx-auto ">
                <div class="lg:h-[80%] w-full overflow-hidden lg:mt-6 ">
                    <div class="h-full w-full object-cover ">
                        <img src="{{asset('storage/' . $home->travel_images[2] )}}"
                            alt=" widok miasta {{$home->city}}"
                            class="w-full h-full object-cover shadow-md  aspect-[3/2] lg:aspect-auto max-w-[600px] mx-auto" loading="lazy">
                    </div>
                </div>
            </div> --}}
            <div class="flex flex-col justify-between items-start w-full  mx-auto order-1 lg:order-none">
                <div class="w-full lg:h-[60%] overflow-hidden ">
                    <div class="w-full h-full object-cover  ">
                        <img src="{{asset('assets/images/1200/villa-la-roca-55.webp' )}}"
                            alt="widok miasta"
                            class="w-full h-full object-cover shadow-md aspect-[3/2] max-w-[600px] mx-auto" loading="lazy" width="420"
                            height="480">
                    </div>
                </div>

                <div
                    class="pt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12 ">


                    <x-link href="" title="dowiedz się więcej" aria="Lokalne atrakcje"/>
                </div>
            </div>



            <div class="flex flex-col justify-between items-start gap-12 w-full mx-auto ">

                <div class="flex flex-col justify-between items-center gap-12 ">
                    <x-title>
                        Odkryj oszałamiające piękno Zakopanego
</x-title>
                    <x-text-wrapper>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit molestiae accusantium quasi ut tenetur explicabo quas? Aspernatur, a! Suscipit explicabo aliquid rem ullam consectetur. At illum obcaecati culpa officiis sit porro minima.
                    </x-text-wrapper>

          
                </div>
                <img src="{{asset('assets/images/1200/villa-la-roca-55.webp'  )}}" alt=" widok miasta "
                    class=" w-full object-cover shadow-md  aspect-[3/2] max-w-[600px] mx-auto" loading="lazy" width="430" height="320">
            </div>
            <div class="flex flex-col justify-start w-full mx-auto ">
                <div class="lg:h-[80%] w-full overflow-hidden lg:mt-6 ">
                    <div class="h-full w-full object-cover ">
                        <img src="{{'assets/images/1200/villa-la-roca-45.webp' }}"
                            alt=" widok miasta "
                            class="w-full h-full object-cover shadow-md  aspect-[3/2] lg:aspect-auto max-w-[600px] mx-auto" loading="lazy">
                    </div>
                </div>
            </div>


        </div>
    </x-container>
</section>