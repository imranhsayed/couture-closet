<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SvgIcon extends Component
{
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function construct($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.svg-icon');
    }
    
}
