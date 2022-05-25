<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class MonitorCard extends Component
{
    public $monitor;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($monitor)
    {
        $this->illustrationImage = IllustrationImage::find($monitor->illustration_image_id);
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
