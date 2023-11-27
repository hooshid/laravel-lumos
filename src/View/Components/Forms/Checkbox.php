<?php

namespace Hooshid\Lumos\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string  $field,
                                public string  $label = '',
                                public string  $value = '',
                                public string  $name = '',
                                public bool    $checked = false,
                                public bool    $multi = false,
                                public ?string $selected = '',
                                public string  $iconUrl = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lumos-ui::components.forms.checkbox');
    }
}
