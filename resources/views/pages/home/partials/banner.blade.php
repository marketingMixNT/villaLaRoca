@props(['cta'])

<section>
    {{-- <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[600px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-400 text-fontLight"
        style="background-image: url('{{ asset('storage/' .$cta->image) }}')">
       
        <div class="max-w-screen-xl text-center  space-y-12">

            <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
                {{$cta->title}}</h2>
            <x-text class="text-fontWhite ">{{$cta->subtitle}}</h2>
            </x-text> --}}
    <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[800px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-400 text-fontLight"
        style="background-image: url('{{ asset('assets/images/1600/villa-la-roca-71.webp') }}')">
       
        <div class="max-w-screen-xl text-center  space-y-12">

            <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
                Lorem ipsum dolor sit amet.</h2>
            <x-text class="text-fontWhite ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ea eius cupiditate deserunt nobis fugiat possimus dicta ipsam, minima hic illo placeat porro omnis?</h2>
            </x-text>


            {{-- <x-booking-bar  style="position: relative; margin-top:170px;bottom:-20px" /> --}}

        </div>
        {{-- btns --}}


    </div>
</section>