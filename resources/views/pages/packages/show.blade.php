

<x-layouts.app title="{!!$package->meta_title!!}" description="{!!$package->meta_description!!}">


    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        <x-hero title="{{$package->header_heading}}" subtitle="{!!$home->title!!}"
            bgi="{{asset('storage/' . $package->banner)}}" />

            
        <section class="py-16 md:py-24 relative overflow-hidden">

            <x-mandala />


            <x-container class="max-w-screen-lg prose md:opacity-0 fadeIn-animation">
                {!! $package->content !!}





            </x-container>
        </section>

        @if(!$otherPackages->isEmpty())
        <section class="pt-20 pb-16 md:opacity-0 fadeIn-animation">
            <x-container class="max-w-screen-2xl 2xl:px-12">
    
    
    
                <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight text-center">
                   Nasze pozostałe oferty
                </h2>
    
    
    
                <div
                    class="flex flex-col lg:flex-row justify-center items-center gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">
    
                    @foreach ($otherPackages as $package)
    
                    <x-package-card :package="$package" size="md:w-[80%] lg:w-1/3" :home="$home" />
    
                    @endforeach
    
                </div>
                <div class="flex justify-center items-center mt-12">
    
                    <x-button-link href="{{route('relax-zone')}}" class="bg-secondary-400 text-fontLight">zobacz wszystkie</x-button-link>
                </div>
    
            </x-container>
        </section>
@endif



        @if ($home->map)
        {!! $home->map !!}
        @endif

    </x-layouts.app-wrapper>
</x-layouts.app>