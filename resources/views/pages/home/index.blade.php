<x-layouts.app title="{!!$home->meta_title!!}" description="{!!$home->meta_desc!!}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        @include('pages.home.partials.hero')
        @include('pages.home.partials.about')
        @include('pages.home.partials.features')
        @include('pages.home.partials.rooms')
        @include('pages.home.partials.banner')
        @include('pages.home.partials.garden-spa')
        <x-cta :cta="$cta" />

        <div class="relative">
            <x-mandala />

            @include('pages.home.partials.testimonials')
            @include('pages.home.partials.neighborhood')

        </div>

        @if ($home->map)
        {!! $home->map !!}
        @endif

    </x-layouts.app-wrapper>
</x-layouts.app>