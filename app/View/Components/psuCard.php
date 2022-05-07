<?php

namespace App\View\Components;

use Illuminate\View\Component;

class psuCard extends Component
{
    public $psu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($psu)
    {
        $this->psu = $psu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.psu-card');
    }
}
