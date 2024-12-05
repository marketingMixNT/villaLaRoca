@props(['package','home','size'=>''])

<a href="{{route('packages.show',$package->slug)}}" class="group h-full {{$size}}">

    <img src="{{ asset('storage/' . $package->banner) }}" alt="zdjęcie przedstawiające pakiet {{ $package->header_heading }} w {{$home->title}}"
        loading="lazy" 
        class="aspect-square object-cover w-full group-hover:scale-110 duration-300">

    <div
        class="bg-white group-hover:-translate-y-12 duration-300 ease border border-transparent group-hover:border group-hover:border-gray-200  pt-8 pb-4 flex flex-col justify-center items-center gap-4 ">

        <h2 class="uppercase  text-sm tracking-widest font-extralight">{{$home->title}}</h2>
        <h3 class="text-2xl text-center px-2 font-light">{{ $package->header_heading }}</h3>

        {{-- <div
            class="opacity-0 group-hover:opacity-100 duration-300 text-sm   px-4 md:px-32 lg:px-4 text-center flex justify-center gap-3 flex-wrap ">
            
            <div class="min-h-[50px] "> {!! $room->short_desc !!}

               
            </div>
            


        </div> --}}
    </div>

</a>


