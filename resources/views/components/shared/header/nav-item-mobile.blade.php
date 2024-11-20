@props(['href','activeRoute' => ''])

<li>
    <a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'border-b border-secondary-400 ' : '' }} text-fontDark  link-hover--dark">{{
        $slot }}</a>
</li>