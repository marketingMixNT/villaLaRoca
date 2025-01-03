<x-layouts.app title="{!!$content->meta_title!!}" description="{!!$content->meta_description!!}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        <x-hero title="{{$content->header_heading}}" subtitle="{!!$home->title!!}"
            bgi="{{asset('storage/' . $content->banner)}}" />

        <section class="py-16 md:py-24 relative overflow-hidden">

            <x-mandala />

            <x-container class="max-w-[1600px]">

                
                @if($content->heading && $content->text)
                <div class="max-w-screen-xl mx-auto md:opacity-0 fadeIn-animation">
                    <x-heading-horizontal title="{{$content->heading}}" class="pb-32">
                        <x-text-wrapper>{!!$content->text!!}
                        </x-text-wrapper>
                    </x-heading-horizontal>
                </div>
                @endif

                <div class="flex justify-center items-center gap-4 flex-wrap mb-12">

                    {{-- "All" Button --}}
                    <button
                        class="border   px-8 py-3 uppercase text-xs duration-300 bg-secondary-400   text-fontLight   gallery-btn filter-btn"
                        data-title="">
                        Wszystkie
                    </button>

                    {{-- Buttons to filter by title --}}
                    @foreach ($images as $image)

                    <button
                        class="filter-btn border   px-8 py-3 uppercase text-xs duration-300  bg-secondary-400   text-fontLight"
                        data-title="{{ $image->category }}" aria-label="Filtruj przez: {{ $image->category }}">
                        {{ $image->category }}
                    </button>
                    @endforeach
                </div>

                {{-- Container for filtered images --}}
                <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">
                    @foreach ($images as $image)
                    @foreach ($image->images as $img)
                    <div class="w-full h-full object-cover image-item" data-title="{{ $image->category }}">
                        <a href="{{asset('storage/' .  $img)}}" class="glightbox">

                            <img src="{{asset('storage/' .  $img)}}"
                                alt="{{$home->title}}" loading="lazy"
                                class="w-full object-cover aspect-square">
                        </a>

                    </div>
                    @endforeach
                    @endforeach
                </div>


            </x-container>

        </section>






    </x-layouts.app-wrapper>

</x-layouts.app>