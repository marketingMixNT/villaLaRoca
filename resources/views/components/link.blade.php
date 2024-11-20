@props(["href","title",'color'=>'','aria'=>false])

<div class="flex justify-start items-center gap-1 group ">

    <a href="{{$href}}" {{$attributes}} class=" {{$color}} link-hover--accent font-light text-secondary-400" aria-label={{$aria}}>{{$title}}</a>
    <x-lucide-arrow-right class=" {{$color}} w-3 group-hover:translate-x-3 duration-300 text-secondary-400" />
</div>