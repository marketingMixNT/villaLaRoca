<x-layouts.app title="{!!$content->meta_title!!}" description="{!!$content->meta_description!!}">

  <x-layouts.app-wrapper :home="$home">

  <x-hero title="{{$content->header_heading}}" subtitle="{!!$home->title!!}" bgi="{{asset('storage/' . $content->banner)}}" />

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
      alt="pokoje w {{$home->title}}"
      mirrorLook="{{ $loop->iteration % 2 == 1 }}">
      {!! $block->text !!}
  </x-text-image-block>

      @endforeach
      
      <x-heading title="Zobacz nasze pokoje"/>
      <div class="flex flex-wrap justify-center items-stretch gap-12  mx-auto md:opacity-0 fadeIn-animation">



        @foreach ($rooms as $room)

        {{-- item --}}
       <x-room-card :room="$room" :home="$home" size="w-[80%] sm:w-[75%]  lg:w-[40%] xl:w-[29%]  2xl:w-[30%]"/>
     
      
        
       
      

        @endforeach

    </div>
  
      </x-container>
  </section>



  @if ($home->map)
  {!! $home->map !!}
@endif

    </x-layouts.app-wrapper>
</x-layouts.app>