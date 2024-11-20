@props(['href','activeRoute' => ''])

<li>
    <a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'border-b ' : '' }} text-fontDark lg:text-fontLight link-hover">{{
        $slot }}</a>
</li>