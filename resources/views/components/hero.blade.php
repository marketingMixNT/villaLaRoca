@props(['title'=>"",'subtitle'=>"",'bgi'=>""])

<div class="relative flex flex-col justify-center items-center gap-24 h-screen sm:h-[calc(80vh-84px)]  lg:h-[calc(90vh-84px)] 2xl:h-[70vh]  sm:mt-0 w-full text-fontLight">

<img src="{{$bgi}}" alt="zdjęcie przedtawiające Villa la Roca " class="absolute inset-0 w-full h-full object-cover -z-20"/>

<div class="absolute inset-0 w-full h-full bg-black opacity-30 -z-10"></div>

    <x-shared.header.hamburger class="absolute top-12 right-12 z-50" />


    <!--HEADING-->
    <div class="flex flex-col justify-center items-center text-center gap-2 z-10">

        <span class=" text-sm 2xl:text-base font tracking-widest uppercase ">{{$subtitle}}</span>
        <h1 class="text-center text-4xl sm:text-5xl md:text-7xl  tracking-wider uppercase font-heading ">
            {{$title}}
        </h1>
    </div>



    <div
        class="absolute bottom-12 sm:bottom-24 2xl:bottom-44 left-0 right-0 md:mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 ">
        <x-booking-panel />
    </div>


</div>