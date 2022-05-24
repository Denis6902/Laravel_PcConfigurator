<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use App\Models\Socket;
use App\Models\SupportedRamType;
use Illuminate\View\Component;

class cpuCard extends Component
{
    public $cpu;
    public $illustrationImage;
    public $socket;
    public $supportedRamType;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cpu)
    {
        $this->illustrationImage = IllustrationImage::find($cpu->illustration_image_id);
        $this->cpu = $cpu;
        $this->socket = Socket::find($cpu->socket_id);
        $this->supportedRamType = SupportedRamType::find($cpu->supported_ram_type_id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cpu-card');
    }
}
