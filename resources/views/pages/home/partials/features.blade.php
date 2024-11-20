<section class="py-16 bg-[#f2f2f2]">
    <x-container class="max-w-screen-2xl">
        <div class="grid justify-center items-center grid-cols-2  lg:grid-cols-3   xl:grid-cols-4 2xl:grid-cols-5 gap-4 sm:gap-16 md:w-[75%] lg:w-full mx-auto">

            {{-- @foreach ($features as $feature)

            <x-feature-card title="{{$feature->title}}" text="{{$feature->description}}">
                <img src="{{'storage/'.$feature->icon}}" alt="{{$feature->title}}" class="w-14 sm:w-20" laoding="lazy"/>
            </x-feature-card>

            

            @endforeach --}}
      

            <x-feature-card title="test" text="test2">
                <img src="{{}}" alt="" class="w-14 sm:w-20" laoding="lazy"/>
            </x-feature-card>

            

            


        </div>
    </x-container>
</section>