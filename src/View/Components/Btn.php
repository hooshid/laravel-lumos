<?php

namespace Hooshid\Lumos\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Btn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name = '',
                                public string $size = 'md',
                                public string $rounded = 'md',
                                public string $type = 'submit',
                                public string $color = 'blue',
                                public bool $block = false,
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lumos::btn');
    }
}
