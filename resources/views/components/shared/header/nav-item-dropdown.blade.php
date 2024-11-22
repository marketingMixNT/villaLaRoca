@props([
'href' => null,
'title',
'activeRoute' => null
])

<li class="relative group flex justify-center items-center gap-1">
    @if($href)
    <a href="{{ $href }}"
        class="{{ $activeRoute && request()->routeIs($activeRoute) ? 'border-b' : '' }} text-fontLight link-hover">
        {{ $title }}
    </a>
    @else
    <span class="text-fontLight link-hover">
        {{ $title }}
    </span>
    @endif
    <x-iconpark-down class="w-4 text-fontLight" />
    {{ $slot }}
</li>