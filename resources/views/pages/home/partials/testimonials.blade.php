<section class="py-12 lg:pt-20 pb-8 relative overflow-hidden md:opacity-0 fadeIn-animation">

    <img src="{{asset('assets/images/mandala.png')}}" alt="" class="absolute -top-64 -left-52  opacity-5 spin -z-10">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="{{$home->testimonials_heading}}">
            <x-text-wrapper>{!!$home->testimonials_text!!}</x-text-wrapper>
           
          
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


        <div class="swiper testimonials-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />
                @endforeach

            </div>
       
    </x-container>
</section>