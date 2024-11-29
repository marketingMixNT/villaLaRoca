<section id="{{__('global.anchor')}}" class="py-16 md:py-24 relative overflow-hidden">

    <x-mandala/>
    
    <x-container class="max-w-screen-xl space-y-24  ">
  
  
      <x-heading-horizontal title="Pokoje z widokiem na niezapomniane chwile">


        <x-text-wrapper>Nasze pokoje to harmonijne połączenie komfortu i górskiego klimatu. Każdy z nich został zaprojektowany z myślą o Twoim wypoczynku – przytulne wnętrza, wygodne łóżka i przepiękne widoki za oknem sprawią, że poczujesz się jak w domu. Idealne miejsce na relaks po dniu pełnym górskich przygód.</x-text-wrapper>


    </x-heading-horizontal>


    {{-- <div class="flex flex-col pt-12 "> --}}
        {{-- <div class="grid  xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-[75%] lg:w-[60%] xl:w-full mx-auto gap-y-12"> --}}
        <div class="flex flex-wrap justify-center items-center gap-16  mx-auto gap-y-12">




            @foreach ($rooms as $room)

            {{-- item --}}
           <x-room-card :room="$room" size="w-[30%]"/>
         
          
            
           
          

            @endforeach

        </div>
  
  
    
      </x-container>
  </section>



  