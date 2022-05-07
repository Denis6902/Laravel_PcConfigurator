<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pcCaseCard extends Component
{
    public $pcCase;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pcCase)
    {
        $this->pcCase = $pcCase;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pc-case-card');
    }
}
