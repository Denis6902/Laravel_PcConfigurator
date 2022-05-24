<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use App\Models\Socket;
use App\Models\SupportedRamType;
use Illuminate\View\Component;

class motherboardCard extends Component
{
    public $motherboard;
    public $illustrationImage;
    public $socket;
    public $supportedRamType;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($motherboard)
    {
        $this->illustrationImage = IllustrationImage::find($motherboard->illustration_image_id);
        $this->socket = Socket::find($motherboard->supported_ram_type_id);
        $this->supportedRamType = SupportedRamType::find($motherboard->supported_ram_type_id);
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
