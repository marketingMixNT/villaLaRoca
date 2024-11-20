@props(['title','class'=>''])

<div class="flex flex-col lg:flex-row justify-center items-start lg:items-center gap-12 lg:gap-24  max-w-screen-xl mx-auto {{$class}}">
    <div class="inline-block lg:w-3/5 ">
        <h2 class="text-3xl sm:text-5xl tracking-wider font-heading font-extralight text-fontDark ">
            {{ $title }}
        </h2>

    </div>
    <div class="sm:w-4/5  lg:w-3/5">
        {{$slot}}
    </div>
</div>