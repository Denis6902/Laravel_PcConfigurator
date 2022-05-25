<?php

namespace App\View\Components;

use App\Models\IllustrationImage;
use Illuminate\View\Component;

class StorageCard extends Component
{
    public $storage;
    public $illustrationImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($storage)
    {
        $this->illustrationImage = IllustrationImage::find($storage->illustration_image_id);
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
