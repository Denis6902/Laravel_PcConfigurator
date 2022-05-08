<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cpuCoolerCard extends Component
{
    public $cpuCooler;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cpuCooler)
    {
        $this->cpuCooler = $cpuCooler;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cpu-cooler-card');
    }
}
