@props([
    'active' => false,
])

@php
    $classes = 'group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer';

    if ($active) {
        $classes .= ' bg-gray-100 dark:bg-gray-700';
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon }}
    <span class="ms-3">{{ $slot }}</span>
</a>
