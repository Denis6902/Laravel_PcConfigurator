<?php

namespace App\View\Components;

use Illuminate\View\Component;

class monitorCard extends Component
{
    public $monitor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($monitor)
    {
        $this->monitor = $monitor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.monitor-card');
    }
}
