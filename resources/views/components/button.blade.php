@props(['class' => ''])

<button {{$attributes}} class="{{$class}} bg-primary-400 py-2 px-6 shadow-xl hover:bg-red-400 duration-300 text-white">{{ $slot }}</button>