<section class="py-16 lg:py-24  bg-secondary-400">
    <x-container class="max-w-screen-2xl">
        <div
            class="grid justify-center items-center grid-cols-2  lg:grid-cols-3   xl:grid-cols-4 2xl:grid-cols-5 gap-4 sm:gap-16 md:w-[75%] lg:w-full mx-auto">

            @foreach ($pictograms as $pictogram)

            <x-feature-card title="{{$pictogram->title}}" text="{{$pictogram->description}}">
                <img src="{{'storage/'.$pictogram->icon}}" alt="{{$pictogram->title}}" class="w-14 sm:w-20"
                    laoding="lazy" />
            </x-feature-card>



            @endforeach


            {{-- <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card>
            <x-feature-card title="Feature ex 1"
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas totam tenetur quaerat?">
                <x-lucide-user class="w-14 sm:w-20" />
            </x-feature-card> --}}






        </div>
    </x-container>
</section>