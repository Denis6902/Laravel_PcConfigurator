<?php

namespace App\View\Components;

use Illuminate\View\Component;

class storageCard extends Component
{
    public $storage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($storage)
    {
        $this->storage = $storage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.storage-card');
    }
}
