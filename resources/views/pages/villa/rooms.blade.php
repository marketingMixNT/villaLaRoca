<x-layouts.app title="{{$content->meta_title}}" description="{{$content->meta_description}}">

    <x-layouts.app-wrapper>

  <x-hero title="{{$content->header_heading}}" subtitle="Lorem ipsum dolor sit amet." bgi="{{asset('storage/' . $content->banner)}}" />

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
  
      @foreach ($content->villaRoomsPageBlocks as $block )

      <x-text-image-block 
      img="{{ asset('storage/' . $block->image) }}" 
      alt=""
      mirrorLook="{{ $loop->iteration % 2 == 1 }}">
      {!! $block->text !!}
  </x-text-image-block>

      @endforeach
  
      </x-container>
  </section>



     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.4983991627955!2d-86.95354842297189!3d36.08133687246083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8864897acf45d0bb%3A0x1fb213d66ea5d40e!2sFord%20Ice%20Center%20Bellevue!5e0!3m2!1spl!2spl!4v1732089946996!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>

    </x-layouts.app-wrapper>
</x-layouts.app>