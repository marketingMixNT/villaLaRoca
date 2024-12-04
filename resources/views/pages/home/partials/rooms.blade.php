<section id="{{__('global.anchor')}}" class="py-16 md:py-24 relative overflow-hidden">

    <x-mandala/>
    
    <x-container class="max-w-screen-2xl space-y-24  ">
  
      <div class="md:opacity-0 fadeIn-animation">

        
        <x-heading-horizontal title="{{$home->rooms_heading}}">
          
          
          <x-text-wrapper>{!!$home->rooms_text!!}</x-text-wrapper>
          
          
        </x-heading-horizontal>
      </div>
        
        <div class="flex flex-wrap justify-center items-stretch gap-12  mx-auto md:opacity-0 fadeIn-animation">

            @foreach ($rooms as $room)

            {{-- item --}}
           <x-room-card :home="$home" :room="$room" size=" w-[80%] sm:w-[75%]  lg:w-[40%] xl:w-[29%]  2xl:w-[30%] "/>
         

            @endforeach

        </div>
  
  
    
      </x-container>
  </section>



  