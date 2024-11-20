@props(['href','title','activeRoute'])

<li class="relative group flex justify-center items-center gap-1">
    <a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'border-b' : '' }} text-fontLight  link-hover">
        {{$title}}
    </a>
    <x-iconpark-down class="w-4  text-fontLight   " />
    {{$slot}}
</li>