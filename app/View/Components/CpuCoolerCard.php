<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class CpuCoolerCard extends Component
{
    public $cpuCooler;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cpuCooler)
    {
        $this->illustrationImage = IllustrationImage::find($cpuCooler->illustration_image_id);
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
