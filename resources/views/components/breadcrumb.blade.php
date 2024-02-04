<nav
    {{ $attributes->merge(['class' => 'flex p-4 bg-white text-gray-700 border border-gray-200 rounded-md']) }} aria-label="Breadcrumb">
    <ol class="inline-flex sm:flex-row flex-col sm:items-center">
        @if(count($items))
            @foreach($items as $item)
                <li @if ($loop->last) aria-current="page" @endif class="flex items-center ml-2">
                    @if ($loop->first)
                        <a href="{{ url($item['url']) }}">
                            <svg class="w-3 h-3 mx-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                        </a>
                    @else
                        <svg class="w-3 h-3 mx-1 text-gray-400 rotate-180" aria-hidden="true" fill="none"
                             viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    @endif

                    @if ($loop->last)
                        <span class="mr-1 text-sm font-medium text-gray-500 md:mr-2">{{ $item['title'] }}</span>
                    @else
                        <a href="{{ url($item['url']) }}"
                           class="mr-1 text-sm font-medium text-gray-700 hover:text-primary md:mr-2">{{ $item['title'] }}</a>
                    @endif
                </li>
            @endforeach
        @endif
    </ol>
</nav>

@if(count($items))
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
        @foreach($items as $item)
        {
            "@type": "ListItem",
            "position": {{ $loop->iteration	 }},
            "name": "{{ $item['title'] }}",
            @if ($loop->last)
            "item": "{{ urldecode(url()->current()) }}"
@else
            "item": "{{ url($item['url']) }}"
            @endif
        }@if (!$loop->last),@endif
        @endforeach
        ]
    }
</script>
@endif
