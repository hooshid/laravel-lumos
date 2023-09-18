<?php

namespace Hooshid\Lumos\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string       $label,
                                public string       $field,
                                public object|array $items,
                                public string       $itemValue = 'id',
                                public string       $itemTitle = 'title',
                                public string       $size = 'md',
                                public string       $rounded = 'md',
                                public string       $value = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select');
    }
}
