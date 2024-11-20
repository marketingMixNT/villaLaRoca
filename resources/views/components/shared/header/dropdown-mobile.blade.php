@props(['title'])
<li class="relative group">
    <button id="mobileDropdown2"
        class="relative flex justify-center items-center  text-fontDark w-full  ">
        <x-iconpark-down class="absolute -left-6 w-6  text-fontDark duration-500" />{{$title}}
    </button>
    <ul id="mobileDropdownUl2" class="flex flex-col gap-3 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
        {{$slot}}
    </ul>
</li>