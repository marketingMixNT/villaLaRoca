@props(['cta'])

<section>
  
    <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[600px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-400 text-fontLight"
        style="background-image: url('{{ asset('storage/' . $cta->image) }}')">
       
        <div class="max-w-screen-xl text-center  space-y-12 md:opacity-0 fadeIn-animation">

            <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
                {{$cta->title}}</h2>
            <x-text class="text-fontWhite ">{{$cta->text}}


            </x-text>

            <div>

                <x-booking-panel />
            </div>

            {{-- <x-booking-bar  style="position: relative; margin-top:170px;bottom:-20px" /> --}}

        </div>
        {{-- btns --}}


    </div>
</section>