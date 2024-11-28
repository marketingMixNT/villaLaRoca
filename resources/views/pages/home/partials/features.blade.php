<section class="py-16 lg:py-24  bg-secondary-400 ">
    <x-container class="max-w-screen-2xl relative">

        <div class="swiper features-carousel md:opacity-0 fadeIn-animation ">
            <div class="mb-20 text-center">

                <h2 class="text-3xl sm:text-4xl tracking-wider font-heading font-extralight text-fontLight ">
                    Udogodnienia dla naszych gości
                </h2>
            </div>
            <div class="swiper-wrapper ">


                @foreach ($pictograms as $pictogram)

                <x-feature-card title="{{$pictogram->title}}" text="{{$pictogram->description}}">
                    <img src="{{'storage/'.$pictogram->icon}}" alt="{{$pictogram->title}}" class="w-14 sm:w-20"
                        laoding="lazy" />
                </x-feature-card>
              

                @endforeach


            </div>

        </div>
        <nav
            class="absolute right-5 -bottom-10 flex justify-center items-center gap-2 z-50 md:opacity-0 fadeIn-animation">
            <button class="feature-prev">
                <x-lucide-arrow-left aria-label="poprzednie udogodnienie" class="w-6 text-fontLight " />

            </button>
            <button class="feature-next" aria-label="następne udogodnienie">
                <x-lucide-arrow-right class="w-6 text-primary-400 " />

            </button>

        </nav>
    </x-container>
</section>