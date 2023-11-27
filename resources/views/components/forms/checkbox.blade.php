<div class="inline-flex items-center">
    @if(empty($iconUrl))
        <label
            class="relative flex cursor-pointer items-center rounded-full px-3"
            for="{{ $field }}{{ $value }}"
            data-ripple-dark="true"
        >
            <input
                type="checkbox"
                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
                id="{{ $field }}{{ $value }}"
                name="{{ $field }}{{ $multi ? '[]' : '' }}"
                value="{{ $value }}"
                @checked(is_array(old($field, $selected)) ? in_array($value, old($field, $selected)) : old($field, $selected))
            />
            <div
                class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    stroke="currentColor"
                    stroke-width="1"
                >
                    <path
                        fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </div>
        </label>
        <label
            for="{{ $field }}{{ $value }}"
        >
            {{ $label }}
        </label>
    @else
        <input
            type="checkbox"
            class="hidden peer"
            id="{{ $field }}{{ $value }}"
            name="{{ $field }}{{ $multi ? '[]' : '' }}"
            value="{{ $value }}"
            @checked(is_array(old($field)) && in_array($value, old($field)))
        />
        <label for="{{ $field }}{{ $value }}"
               class="inline-flex flex-col items-center text-center justify-center w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:bg-green-100 peer-checked:border-green-600 peer-checked:border-2 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">
            <img src="{{ url($iconUrl) }}" class="w-20"/>
            <div class="w-full text-lg font-semibold">{{ $label }}</div>
        </label>
    @endif
</div>
