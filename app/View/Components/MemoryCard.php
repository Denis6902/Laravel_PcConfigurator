<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use App\Models\SupportedRamType;
use Illuminate\View\Component;

class MemoryCard extends Component
{
    public $memory;
    public $illustrationImage;
    public $supportedRamType;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($memory)
    {
        $this->illustrationImage = IllustrationImage::find($memory->illustration_image_id);
        $this->supportedRamType = SupportedRamType::find($memory->supported_ram_type_id);
        $this->memory = $memory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.memory-card');
    }
}
