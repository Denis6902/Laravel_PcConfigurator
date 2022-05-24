<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class psuCard extends Component
{
    public $psu;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($psu)
    {
        $this->illustrationImage = IllustrationImage::find($psu->illustration_image_id);
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
