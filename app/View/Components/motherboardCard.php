<?php

namespace App\View\Components;

use Illuminate\View\Component;

class motherboardCard extends Component
{
    public $motherboard;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($motherboard)
    {
        $this->motherboard = $motherboard;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.motherboard-card');
    }
}
