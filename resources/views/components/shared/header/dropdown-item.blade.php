@props(['href','activeRoute'])

<li class=" bg-bgPrimary  border-b border-gray-400  duration-500 hover:bg-bgThird hover:border-secondary-200">
    <a href="{{$href}}"
       class="{{ request()->routeIs($activeRoute) ? 'underline' : '' }}  flex items-center justify-center w-full h-full p-5 text-sm text-center text-fontDark  hover:bg-secondary-200 hover:text-fontLight  duration-500  ">
        {{$slot}}  
    </a>
</li>