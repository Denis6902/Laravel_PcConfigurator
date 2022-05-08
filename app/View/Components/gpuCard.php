<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gpuCard extends Component
{
    public $gpu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gpu)
    {
        $this->gpu = $gpu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gpu-card');
    }
}
