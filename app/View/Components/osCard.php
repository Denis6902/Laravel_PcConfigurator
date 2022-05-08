<?php

namespace App\View\Components;

use Illuminate\View\Component;

class osCard extends Component
{
    public $os;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($os)
    {
        $this->os = $os;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.os-card');
    }
}
