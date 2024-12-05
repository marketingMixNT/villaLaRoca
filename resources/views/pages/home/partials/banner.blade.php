@props(['banner'])

<section>

    <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[800px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 text-fontLight"
        style="background-image: url('{{ asset('storage/' . $banner->image) }}')">

        <div class="max-w-screen-xl text-center  space-y-12 md:opacity-0 fadeIn-animation">

            <h2 class="text-center text-5xl 2xl:text-7xl  tracking-wider font-heading font-extralight text-fontWhite">
                {{$banner->title}}</h2>
            <x-text class="text-fontWhite ">{{$banner->text}}</h2>
            </x-text>
           

            
            {{--
            <x-booking-bar style="position: relative; margin-top:170px;bottom:-20px" /> --}}
            
        </div>
        <div class="md:opacity-0 fadeIn-animation">

            <x-button-link href="{{route('relax-zone')}}" class="bg-black">{{$banner->link_text}}</x-button-link>
        </div>
        {{-- btns --}}


    </div>
</section>