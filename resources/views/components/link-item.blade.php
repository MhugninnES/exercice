@props(['active' => false])

<a {{ $attributes }} href="#" style="{{ $active === true ? 'font-weight: bold;' : '' }}">{{ $slot }}</a>