@props(['title' => ''])


<div class=" py-8 md:py-12 xs:px-4 text-left flex flex-col">
    <h3 class="mb-4 md:mb-10 uppercase font-medium font-heading text-2xl">{{$title}}</h3>
 {{$slot}}
</div>