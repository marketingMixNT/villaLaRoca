@props(['href','activeRoute' => ''])

<li>
    <a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'text-accent-400' : '' }}  link-hover">{{ $slot }}</a>
</li>