<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubItem extends Component
{

    public $uri;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($uri = null)
    {
        $this->uri = $uri;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-item');
    }
}
