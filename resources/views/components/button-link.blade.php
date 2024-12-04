@props(['class' => '', 'href' => ''])




<a href="{{$href}}" class=" {{ $class }}  px-8 py-2.5 border bg-primary-400  text-xs  uppercase   text-fontDark  duration-300 cursor-pointer  hover:text-black  close
" {{ $attributes }}>
    {{ $slot }}
</a>