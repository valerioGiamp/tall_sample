<?php

namespace App\Livewire;

use Livewire\Component;

class AnimatedImage extends Component
{
    public string $imagesFolder;

    public function render()
    {
        return view('livewire.animated-image');
    }
}
