<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class gpuCard extends Component
{
    public $gpu;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gpu)
    {
        $this->illustrationImage = IllustrationImage::find($gpu->illustration_image_id);
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
