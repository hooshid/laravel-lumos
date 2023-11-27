<div class="w-full relative">
    <label class="absolute px-2 mr-2 -mt-2 font-medium text-gray-600 bg-white rounded text-sm"
           for="{{ $field }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $field }}"
        name="{{ $field }}"
        value="{{ $value ?: old($field) }}"
        placeholder="{{ $placeholder ?: $label }}"
        @disabled($disabled)

        @class([
            'w-full placeholder-gray-400 border rounded-md focus:outline-none focus:border-black border-gray-300',

            'h-9 p-1' => $size == 'xs',
            'h-10 p-1' => $size == 'sm',
            'h-11 p-2' => $size == 'md',
            'h-12 p-3' => $size == 'lg',
            'h-14 p-4' => $size == 'xl',

            'border-red-500' => $errors->has($field),
        ])>

    @error($field)
    <div class="text-red-500 text-xs mt-1 p-1 font-bold" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
