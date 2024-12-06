<x-layouts.app title="{!!$content->meta_title!!}" description="{!!$content->meta_description!!}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

  <x-hero title="{{$content->header_heading}}" subtitle="{!!$home->title!!}"   bgi="{{asset('storage/' . $content->banner)}}" />

  <section  class="py-16 md:py-24 relative overflow-hidden">

    <x-mandala/>
    
    <x-container class="max-w-screen-xl space-y-24  ">
  

            @if($content->heading && $content->text)
                <div class="max-w-screen-lg mx-auto md:opacity-0 fadeIn-animation">
                    <x-heading-horizontal title="{{$content->heading}}" class="pb-12">
                        <x-text-wrapper>{!!$content->text!!}
                        </x-text-wrapper>
                    </x-heading-horizontal>
                </div>
                @endif

   
  
      @foreach ($content->villaCommonPageBlocks as $block )



      <x-text-image-block 
      img="{{ asset('storage/' . $block->image) }}" 
      alt="wnętrze {{$home->title}}"
      mirrorLook="{{ $loop->iteration % 2 == 1 }}">
      {!! $block->text !!}
  </x-text-image-block>

      @endforeach
  
  
  
      </x-container>
  </section>

  <section class="py-20 md:opacity-0 fadeIn-animation ">

    {{-- heading --}}
    <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center pb-4">
        <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight ">
           Zobacz nasze zdjęcia
        </h2>

    </div>

    {{-- swiper --}}
    <div class="swiper attraction-gallery-swiper">
        <div class="py-10  swiper-wrapper">

            @foreach ($gallery->images as $img)
            <a href="{{ asset('storage/' . $img) }}" class=" swiper-slide glightbox">

                <img src="{{ asset('storage/' . $img) }}"
                    alt="zdjęcie przedstawiające {{$home->title}}"
                    class=" h-full w-full object-cover aspect-square shadow-md" loading="lazy">
            </a>
            @endforeach
        </div>


    </div>

    <div class="flex justify-center items-center mt-12">

      {{-- <x-button-link href="{{route('gallery')}}" class="bg-black"></x-button-link> --}}

      <a href="{{route('gallery')}}" class=" px-8 py-2.5 border bg-secondary-200  text-xs  uppercase   text-fontLight  duration-300 cursor-pointer  hover:text-black  close
">
{{__('global.check-gallery')}}
</a>
    </div>

</section>

  @if ($home->map)
  {!! $home->map !!}
@endif

    </x-layouts.app-wrapper>
</x-layouts.app>