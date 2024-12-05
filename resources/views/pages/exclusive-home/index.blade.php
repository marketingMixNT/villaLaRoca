<x-layouts.app title="{!!$content->meta_title!!}" description="{!!$content->meta_description!!}">


    <x-layouts.app-wrapper :home="$home">

        <x-hero title="{{$content->header_heading}}" subtitle="{!!$home->title!!}"
            bgi="{{asset('storage/' . $content->banner)}}" />

        <section class="py-16 md:py-24 relative overflow-hidden">

            <x-mandala />

            <x-container class="max-w-screen-xl space-y-24  ">

                @if($content->heading && $content->text)
                <div class="max-w-screen-lg mx-auto md:opacity-0 fadeIn-animation">
                    <x-heading-horizontal title="{{$content->heading}}" class="pb-12">
                        <x-text-wrapper>{!!$content->text!!}
                        </x-text-wrapper>
                    </x-heading-horizontal>
                </div>
                @endif

                {{-- content --}}
                <section class="max-w-screen-lg prose md:opacity-0 fadeIn-animation">
                    {!! $content->content !!}
                </section>

                {{-- blocks --}}
                @if(!$content->exclusiveHomePageBlocks->isEmpty())
                @foreach ($content->exclusiveHomePageBlocks as $block )


                <x-text-image-block img="{{ asset('storage/' . $block->image) }}" alt="wnętrze {{$home->title}}"
                    mirrorLook="{{ $loop->iteration % 2 == 1 }}">
                    {!! $block->text !!}
                </x-text-image-block>

                @endforeach
                @endif


            </x-container>
        </section>




        @if ($home->map)
        {!! $home->map !!}
        @endif

    </x-layouts.app-wrapper>



</x-layouts.app>