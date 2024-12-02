<x-layouts.app title="{{$content->meta_title}}" description="{{$content->meta_description}}">

    <x-layouts.app-wrapper :home="$home">

        <x-hero title="{{$content->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $content->banner)}}" />

        <section class="py-16 md:py-24 relative overflow-hidden">

            <x-mandala />

            <x-container class="max-w-screen-xl space-y-24  ">

                <x-heading-horizontal title="{{$content->heading}}">
                    <x-text-wrapper>{!!$content->text!!}</x-text-wrapper>

                @if(!is_null($home->google_reviews) )
            <x-rating 
                source="google" 
                rate="{{ $home->google_reviews_average }}" 
                href="{{ $home->google_reviews_link  }}" 
                reviews="{{ $home->google_reviews }} {{ __('global.reviews') }}" 
            />
        @endif

        @if(!is_null($home->tripadvisor_reviews) )
        <x-rating source="tripAdvisor" rate="{{$home->tripadvisor_reviews_average}}" href="{{$home->tripadvisor_links}}" reviews="{{$home->tripadvisor_reviews}} {{__('global.reviews')}}" />
    @endif
</x-heading-horizontal>

                <div class="swiper testimonials-carousel max-w-screen-md md:opacity-0 fadeIn-animation">
                    <div class="swiper-wrapper ">


                        @foreach ($testimonials as $testimonial)
                        <x-testimonial-card :testimonial="$testimonial" />
                        @endforeach


                    </div>


                </div>


            </x-container>
        </section>



        @if ($home->map)
        {!! $home->map !!}
    @endif


    </x-layouts.app-wrapper>
</x-layouts.app>