@props(['img', 'alt','mirrorLook'=>false])

<div class="grid lg:grid-cols-2 gap-20 justify-center items-center md:opacity-0 fadeIn-animation">

    <div class="w-full {{$mirrorLook ? 'lg:order-1' : ''}}  overflow-hidden">
        <img src="{{$img}}" alt="{{$alt}}" class="w-full aspect-square object-cover shadow-xl max-w-[600px] mx-auto hover:scale-105 duration-300">
    </div>

    <div
        class="w-full prose prose-headings:font-extralight prose-headings:text-3xl prose-headings:text-fontDark prose-headings:font-heading prose-h2:text-4xl prose-p:text-base prose-p:font-extralight flex flex-col justify-center items-start prose-p:leading-loose prose-ul:list-disc max-w-full prose-a:no-underline prose-a:text-secondary-400">
        {{$slot}}
    </div>




</div>