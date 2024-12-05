@props(['title','id'])
<li class="relative group">
    <button id="{{$id}}"
        class="relative flex justify-center items-center  text-fontDark w-full  lg:text-2xl">
        <x-iconpark-down class="absolute -left-6 w-6  text-fontDark duration-500 " />{{$title}}
    </button>
    <ul id="{{$id}}-ul" class="flex flex-col justify-center items-center text-center gap-3 overflow-hidden max-h-0 transition-all duration-300 ease-in-out mt-3">
        {{$slot}}
    </ul>
</li>