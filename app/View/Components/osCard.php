<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class osCard extends Component
{
    public $os;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($os)
    {
        $this->illustrationImage = IllustrationImage::find($os->illustration_image_id);
        $this->os = $os;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.os-card');
    }
}
