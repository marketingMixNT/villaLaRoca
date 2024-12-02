<section id="{{__('global.anchor')}}" class="py-16 md:py-24 relative overflow-hidden">

  <x-mandala />

  <x-container class="max-w-screen-xl space-y-24  ">



    @foreach ($home->homeFirstSectionBlocks as $block )

    <x-text-image-block img="{{ asset('storage/' . $block->image) }}" alt="wnętrze {{$home->title}}"
      mirrorLook="{{ $loop->iteration % 2 == 1 }}">
      {!! $block->text !!}
    </x-text-image-block>

    @endforeach




  </x-container>
</section>