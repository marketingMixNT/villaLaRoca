<x-layouts.app title="{!!$content->meta_title!!}" description="{!!$content->meta_description!!}">

  <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

      <x-hero title="{{__('global.other-pages.spa-regulations')}}" subtitle="{!!$home->title!!}"
        bgi="{{asset('storage/' . $content->banner)}}" />

  <section  class="py-16 md:py-24 relative overflow-hidden">

    <x-mandala/>
    

            <x-container class="max-w-screen-lg prose">
                {!! $content->content !!}





            </x-container>
        </section>
  
  
  
    



        @if ($home->map)
        {!! $home->map !!}
    @endif

    </x-layouts.app-wrapper>
</x-layouts.app>