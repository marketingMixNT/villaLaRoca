<section class="py-12 lg:pt-20 pb-8 relative overflow-hidden">

    <img src="{{asset('assets/images/mandala.png')}}" alt="" class="absolute -top-64 -left-52  opacity-5 spin -z-10">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        {{-- <x-heading-horizontal title="{{$home->testimonials_heading}}">
            <x-text-wrapper>{!!$home->testimonials_text!!}</x-text-wrapper>
           
          
            @if(!is_null($home->google_reviews) )
            <x-rating 
                source="google" 
                rate="{{ $home->google_reviews_average }}" 
                href="{{ $home->reviews_links  }}" 
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

            </div> --}}
        <x-heading-horizontal title="Słowa naszych gości mówią wszystko
">
            <x-text-wrapper>Naszym priorytetem jest zapewnienie komfortu i wyjątkowych wrażeń. Z dumą dzielimy się opiniami osób, które odwiedziły nasz hotel i doświadczyły naszej gościnności. Przeczytaj, co o nas mówią, i przekonaj się, dlaczego warto nas odwiedzić!

            </x-text-wrapper>
           
          
            
            <x-rating 
                source="google" 
                rate="5" 
                href="#" 
                reviews="123 recenzje" 
            />
            <x-rating 
                source="tripAdvisor" 
                rate="5" 
                href="#" 
                reviews="123 recenzje" 
            />
      

       
          

        </x-heading-horizontal>


        <div class="swiper testimonials-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                

                <div class="swiper-slide">
   
                    <div class="testimonial relative mx-12 mt-12 flex flex-col gap-8 jc-center items-center">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt="" class="absolute -top-7 -left-12 w-12 opacity-50 ">
                        <x-text class="text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste officiis quibusdam eveniet ad, minima exercitationem, officia fuga unde corrupti quos magni vero laboriosam iusto natus eligendi, deleniti quam doloremque consequuntur. Consectetur et quas, tempora sed dolore quisquam voluptatibus corporis odio!</x-text>
                        <span class="font-text text-sm text-accent-400 tracking-widest ">Marian, google.pl</span>
                    </div>
                </div>
                <div class="swiper-slide">
   
                    <div class="testimonial relative mx-12 mt-12 flex flex-col gap-8 jc-center items-center">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt="" class="absolute -top-7 -left-12 w-12 opacity-50 ">
                        <x-text class="text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste officiis quibusdam eveniet ad, minima exercitationem, officia fuga unde corrupti quos magni vero laboriosam iusto natus eligendi, deleniti quam doloremque consequuntur. Consectetur et quas, tempora sed dolore quisquam voluptatibus corporis odio!</x-text>
                        <span class="font-text text-sm text-accent-400 tracking-widest ">Waldek, google.pl</span>
                    </div>
                </div>
                <div class="swiper-slide">
   
                    <div class="testimonial relative mx-12 mt-12 flex flex-col gap-8 jc-center items-center">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt="" class="absolute -top-7 -left-12 w-12 opacity-50 ">
                        <x-text class="text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste officiis quibusdam eveniet ad, minima exercitationem, officia fuga unde corrupti quos magni vero laboriosam iusto natus eligendi, deleniti quam doloremque consequuntur. Consectetur et quas, tempora sed dolore quisquam voluptatibus corporis odio!</x-text>
                        <span class="font-text text-sm text-accent-400 tracking-widest ">Arnold, google.pl</span>
                    </div>
                </div>

            </div>


        </div>
    </x-container>
</section>