<x-layouts.app title="{{__('global.booking.meta_title')}}" description="{{__('global.booking.meta_desc')}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        <section class="py-16 md:py-24  relative overflow-hidden">

            <x-mandala />

            <x-container class="max-w-screen-xl space-y-24 mt-20  ">

                <h1 class="text-3xl sm:text-5xl tracking-wider font-heading font-extralight text-fontDark text-center">
                    {{__('global.book')}}</h1>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
                <script type="text/javascript" src="https://panel.hotres.pl/public/api/hotres_v4.js"></script>
                <div id="hotresContainer"></div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const lang = document.documentElement.lang;
                
                        createHotres({
                            "oid": 4398,
                            "lang": lang  
                        });
                    });
                </script>


            </x-container>
        </section>



        @if ($home->map)
        {!! $home->map !!}
        @endif

    </x-layouts.app-wrapper>
</x-layouts.app>