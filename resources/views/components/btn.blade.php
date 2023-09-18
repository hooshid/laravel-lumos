<{{ $attributes->get('href') ? 'a' : 'button' }}
    {{
        $attributes->class([
            'inline-block p-1 font-medium text-center text-white',
            'select-none whitespace-nowrap overflow-visible',
            'transition duration-200 ease-in',

            'block w-full' => $block,

            'h-9 p-1' => $size == 'xs',
            'h-10 p-1' => $size == 'sm',
            'h-11 p-2' => $size == 'md',
            'h-12 p-3' => $size == 'lg',
            'h-14 p-4' => $size == 'xl',

            'rounded-' . $rounded => $rounded,
        ])->merge(['type' => 'submit'])
    }}>
    {{ $slot }}
</{{ $attributes->get('href') ? 'a' : 'button' }}>
