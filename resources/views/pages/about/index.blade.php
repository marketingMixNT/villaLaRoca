<x-layouts.app title="O nas" description="meta">

  <x-layouts.app-wrapper>

    <x-hero title="O nas" subtitle="Lorem ipsum dolor sit amet."
      bgi="{{asset('assets/images/1600/villa-la-roca-156.webp')}}" />

    <section class="py-16 md:py-24 relative overflow-hidden">

      <x-mandala />

      <x-container class="max-w-screen-xl space-y-24  ">


        @foreach ($about->aboutPageBlocks as $block )



        <x-text-image-block img="{{ asset('storage/' . $block->image) }}" alt=""
          mirrorLook="{{ $loop->iteration % 2 == 0 }}">
          {!! $block->text !!}
        </x-text-image-block>

        @endforeach


      </x-container>
    </section>



    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.4983991627955!2d-86.95354842297189!3d36.08133687246083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8864897acf45d0bb%3A0x1fb213d66ea5d40e!2sFord%20Ice%20Center%20Bellevue!5e0!3m2!1spl!2spl!4v1732089946996!5m2!1spl!2spl"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>

  </x-layouts.app-wrapper>
</x-layouts.app>