@props(['active' => false])

<a {{ $attributes->class([
    $active ? 'font-bold underline' : 'font-medium',
]) }} href="#">{{ $slot }}</a>