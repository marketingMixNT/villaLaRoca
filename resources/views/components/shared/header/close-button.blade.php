@props(['class' => ''])

<button id="close-btn" class="border border-secondary-400 p-2 rounded-full cursor-pointer group {{$class}}" aria-label="Zamknij menu">
    <img src="{{asset('assets/icons/close.svg')}}" alt="" class="size-10 group-hover:rotate-90 duration-300 ">

</button>