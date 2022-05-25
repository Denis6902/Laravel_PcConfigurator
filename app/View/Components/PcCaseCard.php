<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class PcCaseCard extends Component
{
    public $pcCase;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pcCase)
    {
        $this->illustrationImage = IllustrationImage::find($pcCase->illustration_image_id);
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
