@props(['href','activeRoute'])

<li class="mt-3 "><a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'underline' : '' }} text-sm  duration-500 link-hover--dark">{{$slot}}</a>
</li>