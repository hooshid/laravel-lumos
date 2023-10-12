<?php

namespace Hooshid\Lumos\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $field,
                                public string $label = '',
                                public string $placeholder = '',
                                public string $rows = '5',
                                public string $size = 'auto',
                                public string $rounded = 'md',
                                public string $value = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lumos::components.forms.textarea');
    }
}
