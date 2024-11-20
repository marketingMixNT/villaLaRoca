@props(['class' => ''])

<ul id="languageSwitcher"
    class="flex justify-center items-center gap-5 list-none text-sm  {{$class}}">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li>
        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            class="relative uppercase hover:text-primary-600 duration-500 text-fontDark text-sm font-light tracking-wider {{ App::getLocale() === $localeCode ? ' before:absolute before:bottom-0 before:left-0 before:w-[70%] before:h-[1px] before:bg-secondary-400 before:lg:bg-primary-400 active' : '' }}">
            {{ strtoupper($localeCode) }}
        </a>
    </li>
    @endforeach
</ul>